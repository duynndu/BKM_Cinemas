<?php

namespace App\Repositories\Admin\Orders\Repositories;

use App\Constants\MemberLevel;
use App\Models\Booking;
use App\Repositories\Base\BaseRepository;
use App\Repositories\Admin\Orders\Interfaces\OrderInterface;

class OrderRepository extends BaseRepository implements OrderInterface
{
    public function getModel()
    {
        return Booking::class;
    }

    public function getAll()
    {
        return $this->model
                ->where('code' , '!=', null)
                ->where('status' , '!=', null)
                ->when(auth()->user()->cinema_id, function ($query, $cinemaId) {
                    $query->where('cinema_id', $cinemaId);
                })
                ->with([
                    'user:id,name',
                    'cinema:id,name',
                    'movie:id,title',
                    'showtime:id,start_time,room_id',
                    'showtime.room:id,room_name',
                ])
                ->orderBy('id', 'desc')
                ->get();
    }

    public function filter($request)
    {
        $data = $this->model->newQuery();
        $data = $data->where('code' , '!=', null)
        ->where('status' , '!=', null)
        ->when(auth()->user()->cinema_id, function ($query, $cinemaId) {
            $query->where('cinema_id', $cinemaId);
        })
        ->with([
            'user:id,name',
            'cinema:id,name',
            'movie:id,title,image',
            'showtime:id,start_time,room_id',
            'showtime.room:id,room_name',
        ]);
        $data = $this->filterByCode($data, $request);
        $data = $this->filterByStatus($data, $request);
        $data = $this->filterByPaymentStatus($data, $request);
        $data = $this->filterByRefundStatus($data, $request);
        $data = $this->filterByGetTickets($data, $request);
        $data = $data->orderBy('id', 'desc')->paginate(self::PAGINATION);
        return $data->appends([
            'code' => $request->code,
            'status' => $request->status,
            'payment_status' => $request->payment_status,
            'refund_status' => $request->refund_status,
            'get_tickets' => $request->get_tickets,
        ]);
    }

    public function changeGetTickets($id)
    {
        $order = $this->model->find($id);
        if (
            $order->status == 'completed'
            && $order->payment_status == 'completed'
            && is_null($order->refund_status)
            && $order->get_tickets == 0
        ) {
            $user = $order->user;
            $memberLevel = $user->membership_level;
            $rateMap = [
                MemberLevel::MEMBER => 0.00005,
                MemberLevel::VIP    => 0.00007,
                MemberLevel::VVIP   => 0.00010,
            ];

            if (isset($rateMap[$memberLevel])) {
                $point = $user->points;
                $calculatedPoints = $order->total_price * $rateMap[$memberLevel];

                $fractionalPart = $calculatedPoints - floor($calculatedPoints);
                if ($fractionalPart >= 0.5) {
                    $calculatedPoints = ceil($calculatedPoints); // Làm tròn lên
                } elseif ($fractionalPart >= 0.1 && $fractionalPart < 0.5) {
                    $calculatedPoints = floor($calculatedPoints); // Làm tròn xuống
                } else {
                    $calculatedPoints = 0; // Không cộng điểm nếu nhỏ hơn 0.1
                }

                // Cộng điểm vào tài khoản nếu điểm được làm tròn > 0
                if ($calculatedPoints > 0) {
                    $point += $calculatedPoints;
                    $user->update([
                        'points' => $point,
                    ]);
                }
            }

            $order->get_tickets = 1;
            $order->save();

            return $order;
        }
        return false;
    }


    private function filterByCode($query, $request)
    {
        if (!empty($request->code)) {
            return $query->where('code', 'like', '%' . $request->code . '%');
        }
        return $query;
    }

    private function filterByStatus($query, $request)
    {
        if (!empty($request->status)) {
            return $query->where('status', $request->status);
        }
        return $query;
    }

    private function filterByPaymentStatus($query, $request)
    {
        if (!empty($request->payment_status)) {
            return $query->where('payment_status', $request->payment_status);
        }
        return $query;
    }

    private function filterByRefundStatus($query, $request)
    {
        if (!empty($request->refund_status)) {
            return $query->where('refund_status', $request->refund_status);
        }
        return $query;
    }

    private function filterByGetTickets($query, $request)
    {
        if (!empty($request->get_tickets)) {
            return $query->where('get_tickets', $request->get_tickets);
        }
        return $query;
    }
}
