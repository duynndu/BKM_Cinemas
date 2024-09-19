<?php

namespace App\Http\Controllers;

use App\Models\SeatLayout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SeatLayoutController extends Controller
{
    public function index()
    {
        $seat_layouts = SeatLayout::paginate(3);
        return view('admin.pages.room-manager.seat-layout.index', compact('seat_layouts'));
    }

    public function create()
    {
        return view('admin.pages.room-manager.seat-layout.create');
    }

    public function store(Request $request)
    {
        // Logic to store the seat layout
        // Example: SeatLayout::create($request->all());
        return redirect()->route('seat-layouts.index')->with('message', 'Tạo sơ đồ ghế thành công');
    }

    public function edit($id)
    {
        $seat_layout = SeatLayout::find($id);
        return view('admin.pages.room-manager.seat-layout.edit', [
            'seat_layout' => $seat_layout
        ]);
    }

    public function update(Request $request, $id)
    {
        // Logic to update the seat layout
        // Example: $seat_layout = SeatLayout::find($id);
        // $seat_layout->update($request->all());
        // return redirect()->route('admin.seat-layouts.index')->with('message', 'Cập nhật sơ đồ ghế thành công');
    }

    public function destroy($id)
    {
        $seatLayout = SeatLayout::findOrFail($id);
        if ($seatLayout->image) {
            Storage::disk('public')->delete($seatLayout->image);
        }
        $seatLayout->delete();
        return redirect()->route('admin.seat-layouts.index')->with('message', 'Xóa sơ đồ ghế thành công');
    }
}
