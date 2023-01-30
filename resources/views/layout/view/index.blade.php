@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-md-11">
        <h3>Danh Sách Sinh Viên</h3>
    </div>
    <div class="col-md-1">
        <a name="" id="" class="btn btn-primary" href="/create" role="button">Thêm</a>
    </div>
    <hr>
</div>

@if(Session::has('message'))
<div class="alert alert-success">
    {{Session::get('message')}}
</div>
@endif
<div class="row">
    <div class="">

        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Họ Tên</th>
                        <th scope="col">Mã Sinh Viên</th>
                        <th scope="col">Ngày Sinh</th>
                        <th scope="col">Giới Tính</th>
                        <th scope="col">Địa Chỉ</th>
                        <th scope="col">Số Điện Thoại</th>
                        <th scope="col">actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sinhvien as $sv)
                    <tr>
                        <td>{{ $loop -> index+1 }}</td>
                        <td>{{ $sv->HoTen }}</td>
                        <td>{{ $sv->MaSV }}</td>
                        <td>{{ $sv->NgaySinh }}</td>
                        <td>{{ $sv->GioiTinh }}</td>
                        <td>{{ $sv->DiaChi }}</td>
                        <td>{{ $sv->SoDT }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('edit',$sv->id)}}" role="button">Edit</a>
                            <form action="{{ route('del',$sv->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Del</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection