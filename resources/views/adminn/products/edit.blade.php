@extends('layout.header')
@extends('layout.navbar')
@extends('layout.sidebar')
@extends('adminn.index')
@section('content')
    <div class="col-5 container">
        <div class="card shadow-sm p-3 mb-5 bg-body-tertiary rounded">
            <div class="card-header rounded-top">
                <span><i class="bi bi-plus"></i></span> Thêm sản phẩm mới
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('edit_product', ['id'=>$detail->id]) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
                        <input type="text" name="name" class="form-control" value="{{ $detail->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Giá sản phẩm</label>
                        <input type="number" name="price" class="form-control" value="{{ $detail->price }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Ảnh sản phẩm</label>
                        <input type="file" name="image" class="form-control" value="{{$detail->image}}">
                        <br>
                        <img class="m-auto" width="500px" src="{{ asset($detail->image) }}" alt="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Mô tả sản phẩm</label>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Viết mô tả" name="description" id="floatingTextarea2" style="height: 100px">{{ $detail->description }}</textarea>
                            <label for="floatingTextarea2">Viết mô tả</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Số lượng</label>
                        <input type="number" name="quantity" class="form-control" value="{{ $detail->quantity }}">
                    </div>
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                            name="category_id">
                            @foreach ($category as $values)
                                <option value="{{ $values->id }}" {{ $values->id == $detail->category_id ? 'selected' : '' }}>
                                    {{ $values->name }}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect">Chọn danh mục</label>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success container">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
@endsection
