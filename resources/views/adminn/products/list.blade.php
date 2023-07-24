@extends('layout.header')
@extends('layout.navbar')
@extends('layout.sidebar')
@extends('adminn.index')
@section('content')
    <div class="col-md-12 mb-3">
        <div class="card">
            <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Danh sách sản phẩm
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped data-table" style="width: 100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Giá</th>
                                <th>Ảnh</th>
                                <th>Mô tả</th>
                                <th>Danh mục</th>
                                <th>Số lượng</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $values)
                                <tr>
                                    <th>{{ $values->id }}</th>
                                    <th>{{ $values->name }}</th>
                                    <th>{{ $values->price }}</th>
                                    <th><img width="200" src="{{ asset($values->image) }}" alt=""></th>
                                    <th>{{ $values->description }}</th>
                                    <th>{{ $values->getCategoryProductName() }}</th>
                                    <th>{{ $values->quantity }}</th>
                                    <th>
                                        <a href="{{ route('edit_product', ['id'=>$values->id]) }}" class="btn btn-warning">Sửa</a>
                                        <a href="{{ route('delete_product', ['id'=>$values->id]) }}" class="btn btn-danger" onclick="confirmation(event)">Xóa</a>

                                    </th>
                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Giá</th>
                            <th>Ảnh</th>
                            <th>Mô tả</th>
                            <th>Danh mục</th>
                            <th>Số lượng</th>
                            <th>Chức năng</th>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
