<?php
namespace App\Services\Admin\Payments;
use App\Repositories\Admin\Payments\Interface\PaymentInterface;
use App\Traits\StorageImageTrait;
use Illuminate\Support\Facades\Storage;

class PaymentService {

    use StorageImageTrait;
    protected $paymentRepository;


    public function __construct(
        PaymentInterface $paymentRepository
    )
    {
        $this->paymentRepository = $paymentRepository;
    }

    public function getAll(): mixed
    {
        return $this->paymentRepository->getAll();
    }

    public function store(&$data)
    {
        
        if (isset($data['image']) && $data['image']) {
            $uploadData = $this->uploadFile($data['image'], 'public/payments');
            $data['image'] = $uploadData['path'];
        }
        return $this->paymentRepository->create($data);
    }

    public function find($id)
    {
        return $this->paymentRepository->find($id);
    }

    public function update(&$data,$id)
    {
        $record = $this->find($id);

        if (!$record) {
            return false;
        }

        if (isset($data['image']) && $data['image']) {
            if ($record->image) {
                $this->deleteAvatar($record->image, 'payments');
            }
            $uploadData = $this->uploadFile($data['image'], 'public/payments');
            $data['image'] = $uploadData['path'];
        }
        return $this->paymentRepository->update($id, $data);
    }

    public function delete($id)
    {
        $payment = $this->find($id);

        if ($payment->image) {
            Storage::disk('public')->delete($payment->image);
        }

        return $this->paymentRepository->delete($id);
    }

    public function changeActive($request)
    {
        return $this->paymentRepository->changeActive($request->id);
    }

    private function uploadFile($data, $folderName)
    {
        $path = $data->store($folderName);

        return [
            'name' => $data->getClientOriginalName(),
            'path' => Storage::url($path),
        ];
    }

    private function deleteAvatar($avatar, $folderName)
    {
        $path = "public/$folderName/" . basename($avatar);
        if (Storage::exists($path)) {
            Storage::delete($path);
        }
    }
}
