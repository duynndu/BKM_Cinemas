@extends('admin.layouts.main')

@section('title', $title['create'] ?? null)

@section('css')
@endsection
@vite(['resources/js/app.js', 'resources/css/app.css'])

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-12">
      <div class="row">
        <x-page-titles />
      </div>
      <form onsubmit="return false" x-data="SeatLayout({{ $seat_layout->id }})" method="post" action="" class="product-vali"
        enctype="multipart/form-data">
        <div class="row">
          <div class="col-xl-12">
            <div class="card h-auto">
              <div class="card-body">
                <div class="row mb-4">
                  <div class="mb-3">
                    <label class="me-sm-2 form-label mb-2">Tên sơ đồ ghế</label>
                    <input type="text" x-model="formData.name" class="form-control"
                      placeholder="Nhập tên sơ đồ ghế">
                  </div>
                  <div class="col-6 mb-3">
                    <label class="form-label mb-2">Số cột</label>
                    <input type="number" x-model="formData.col_count" @input="renderSeatLayout"
                      @change="formData.seats = []" class="form-control" id="slug"
                      placeholder="Nhập số cột">
                  </div>
                  <div class="col-6 mb-3">
                    <label class="form-label mb-2">Số hàng</label>
                    <input type="number" x-model="formData.row_count" @input="renderSeatLayout"
                      @change="formData.seats = []" class="form-control" id="slug"
                      placeholder="Nhập số hàng" value="{{ old('slug') ?? '' }}">
                  </div>
                  <div id="seatingArea" class="inline-flex items-center mb-3 text-white"></div>
                  <div class="mb-3">
                    <button type="button" @click="toggleModal()" class="btn btn-sm btn-primary">Chọn
                      từ sơ đồ ghế có sẵn</button>
                  </div>
                  <div class="flex justify-end">
                    <button @click="onSubmit" class="btn btn-md btn-success">Cập nhật</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div x-show="showModal"
          class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50" x-cloak>
          <div @click.outside="toggleModal()"
            class="bg-[#212130] bg-opacity-90 rounded-lg shadow-lg w-full max-w-7xl min-h-[500px] p-6 relative">
            <div class="flex justify-between items-center border-b pb-3">
              <h5 class="text-2xl font-bold text-black">Chọn từ sơ đồ ghế có sẵn</h5>
              <button type="button" @click="toggleModal()"
                class="text-white text-2xl bg-transparent">&times;</button>
            </div>
            <div
              class="mt-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 overflow-y-auto max-h-[400px]">
              <template x-for="seatLayout in seatLayouts" :key="seatLayout.id">
                <label @click="selectLayout(seatLayout)"
                  :class="{'border-blue-500': formData.seats && formData.id === seatLayout.id, 'border-2 border-solid p-2 rounded-lg shadow hover:shadow-lg transition-shadow duration-300 cursor-pointer bg-white bg-opacity-80 flex flex-col': true}">
                  <img :src="seatLayout.image" :alt="seatLayout.name"
                    class="w-full h-auto mb-1 rounded">
                  <div class="mt-auto">
                    <h3 class="text-lg font-semibold text-black" x-text="seatLayout.name"></h3>
                    <p class="text-gray-600">Columns: <span x-text="seatLayout.col_count"></span>
                    </p>
                    <p class="text-gray-600 m-0">Rows: <span x-text="seatLayout.row_count"></span>
                    </p>
                  </div>
                </label>
              </template>
            </div>
            <div class="flex justify-end p-4 border-t border-gray-200">
              <button type="button" @click="toggleModal()"
                class="btn btn-sm btn-secondary hover:bg-red-600 transition duration-300">Close</button>
            </div>
          </div>
        </div>
      </form>
    </div>

  </div>
</div>
@endsection

@section('js')

@endsection