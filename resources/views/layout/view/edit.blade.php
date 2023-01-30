@extends('layout.master')
@section('content')
    <div class="row">
    <div class="col-md-11">
        <h3>Sửa Sinh Viên : {{$sinhvien->id}}</h3>
    </div>
    <div class="col-md-1">
        <a name="" id="" class="btn btn-primary" href="/" role="button">List</a>
    </div>
    <hr>
        <form action="{{route('update',$sinhvien->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="HoTen" class="form-label">Họ Tên</label>
                <input type="text" name="HoTen" value="{{$sinhvien->HoTen}}" id="HoTen" class="form-control" placeholder="vui lòng nhập họ tên..."
                    aria-describedby="HoTen">
            </div>
            <div class="mb-3">
                <label for="MaSV" class="form-label">Mã Sinh Viên</label>
                <input type="text" name="MaSV" value="{{$sinhvien->MaSV}}" id="MaSV" class="form-control"
                    placeholder="vui lòng nhập mã sinh viên ..." aria-describedby=NgaySinh">
            </div>
            <div class="mb-3">
                <label for="NgaySinh" class="form-label">Ngày Sinh</label>
                <input type="date" name="NgaySinh" value="{{$sinhvien->NgaySinh}}" id="NgaySinh" class="form-control" aria-describedby="NgaySinh">
            </div>
            <div class="mb-3">
                <label for="GioiTinh"  class="form-label">Giới Tính</label>
                <select class="form-select form-select-lg" name="GioiTinh">
                    <option value="Nam" {{$sinhvien->GioiTinh == "Nam" ? 'selected':''}}>Nam</option>
                    <option value="Nữ" {{$sinhvien->GioiTinh == "Nữ" ? 'selected':''}}>Nữ</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Địa Chỉ</label>
                <input class="form-control" name="DiaChi" value="{{$sinhvien->DiaChi}}"  id="DiaChi" rows="3" placeholder="Vui lòng nhập địa chỉ..."></input>
            </div>
            <div class="mb-3">
                <label for="SoDT" class="form-label">Số Điện Thoại</label>
                <input type="text" name="SoDT" value="{{$sinhvien->SoDT}}" id="SoDT" class="form-control" aria-describedby="SoDT"
                    placeholder="Vui lòng nhập số điện thoại...">
            </div>
            <button class="btn btn-success" type="submit">Submit</button>
        </form>
    </div>
@endsection
