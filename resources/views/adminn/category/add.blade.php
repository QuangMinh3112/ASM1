@extends('layout.header')
@extends('layout.navbar')
@extends('layout.sidebar')
@extends('adminn.index')

@section('content')
    @if ($errors->any())
    @foreach ($errors->all() as $err )
        <p>{{$err}}</p>
    @endforeach

    @endif
    <div class="col-5 container">
        <div class="card shadow-sm p-3 mb-5 bg-body-tertiary rounded">
            <div class="card-header rounded-top">
                <span><i class="bi bi-plus"></i></span> Thêm danh mục mới
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('add_category') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên danh mục</label>
                        <input type="text" name="name" class="form-control">
                        @if ($errors->has('name'))
                        <div class="tex-danger">{{$error->first('name')}}</div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-success container">Thêm mới</button>
                </form>
            </div>
        </div>
    </div>
@endsection
