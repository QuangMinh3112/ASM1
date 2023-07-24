@extends('layout.header')
@extends('layout.navbar')
@extends('layout.sidebar')
@extends('adminn.index')
@section('content')

<div class="col-md-12 mb-3">
    <div class="card">
        <div class="card-header">
            <span><i class="bi bi-table me-2"></i></span> Danh sách danh mục
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped data-table" style="width: 100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $values)
                        <tr>
                            <td>{{$values->id}}</td>
                            <td>{{$values->name}}</td>
                            <td>
                                <a href="{{ route('edit_category', ['id'=>$values->id]) }}" class="btn btn-warning">Sửa</a>
                                <a href="{{ route('delete_category', ['id'=>$values->id]) }}" class="btn btn-danger" onclick="confirmation(event)">Xóa</a>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Chức năng</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
