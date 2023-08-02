@extends('layout.header')
@extends('layout.navbar')
@extends('layout.sidebar')
@extends('adminn.index')
@section('content')
    <div class="col-5 container">
        <div class="card shadow-sm p-3 mb-5 bg-body-tertiary rounded">
            <div class="card-header rounded-top">
                <span><i class="bi bi-plus"></i></span> Thêm sản người dùng mới
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('add_user') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên người dùng</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Ảnh đại diện</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                            name="role_id">
                            <option value="0">Người dùng</option>
                            <option value="1">Admin</option>
                        </select>
                        <label for="floatingSelect">Chọn quyền</label>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success container">Thêm mới</button>
                </form>
            </div>
        </div>
    </div>
@endsection
