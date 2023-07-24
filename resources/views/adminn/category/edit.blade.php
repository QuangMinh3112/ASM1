@extends('layout.header')
@extends('layout.navbar')
@extends('layout.sidebar')
@extends('adminn.index')
@section('content')
    <div class="col-5 container">
        <div class="card shadow-sm p-3 mb-5 bg-body-tertiary rounded">
            <div class="card-header rounded-top border">
                <span><i class="bi bi-wrench"></i></span> Sửa danh mục
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('edit_category', ['id'=>$detail->id]) }}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên danh mục</label>
                        <input type="text" name="name" value="{{$detail->name}}" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success ">Cập nhật</button>
                    <a class="btn btn-primary" href="{{ route('list_category')}}">Quay lại</a>
                </form>
            </div>
        </div>
    </div>
@endsection
