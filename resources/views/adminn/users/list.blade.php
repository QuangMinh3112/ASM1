@extends('layout.header')
@extends('layout.navbar')
@extends('layout.sidebar')
@extends('adminn.index')
@section('content')
    <div class="col-md-12 mb-3">
        <div class="card">
            <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Danh sách người dùng
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped data-table" style="width: 100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Họ tên</th>
                                <th>Email</th>
                                <th>Ảnh đại diện</th>
                                <th>Vai trò</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $values)
                                <tr>
                                    <th>{{ $values->id }}</th>
                                    <th>{{ $values->name }}</th>
                                    <th>{{ $values->email }}</th>
                                    <th><img width="100px" src="{{asset($values->image)}}" alt=""></th>
                                    <th> {{ $values->role_id == 1 ? 'Admin' : 'User' }}
                                    </th>
                                    <th>
                                        {{-- <a href="{{ route('edit_product', ['id' => $values->id]) }}"
                                            class="btn btn-warning">Sửa</a>
                                        <a href="{{ route('delete_product', ['id' => $values->id]) }}"
                                            class="btn btn-danger" onclick="confirmation(event)">Xóa</a> --}}

                                    </th>
                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <th>ID</th>
                            <th>Họ tên</th>
                            <th>Email</th>
                            <th>Ảnh đại diện</th>
                            <th>Vai trò</th>
                            <th>Chức năng</th>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
