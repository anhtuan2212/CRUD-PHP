@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-6">
        <h3>Danh Sách Sinh Viên</h3>
    </div>
    <div class="col-md-6">
        <a name="" id="" class="btn btn-primary" {{ route('sinhvien.index') }} role="button">Thêm</a>
    </div>
</div>
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
                        {{-- @foreach (sinhvien as $sv)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $sv->HoTen }}</td>
                            <td>{{ $sv->MaSV }}</td>
                            <td>{{ $sv->NgaySinh }}</td>
                            <td>{{ $sv->GioiTinh }}</td>
                            <td>{{ $sv->DiaChi }}</td>
                            <td>{{ $sv->SoDT }}</td>
                            <td>
                                <a name="btn-edit" id="btn-edit" class="btn btn-primary" href="#"
                                    role="button">Edit</a>
                                <a name="btn-edit" id="btn-edit" class="btn btn-danger" href="#"
                                    role="button">Del</a>
                            </td>
                        </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
