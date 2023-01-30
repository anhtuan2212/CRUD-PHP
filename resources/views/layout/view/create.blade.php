@extends('layout.master')
@section('content')
    <div class="row">
    <div class="col-md-11">
        <h3>Thêm Sinh Viên</h3>
    </div>
    <div class="col-md-1">
        <a name="" id="" class="btn btn-primary" href="{{route('home')}}" role="button">List</a>
    </div>
    <hr>
        <form action="{{route('store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="HoTen" class="form-label">Họ Tên</label>
                <input type="text" name="HoTen" id="HoTen" class="form-control" placeholder="vui lòng nhập họ tên..."
                    aria-describedby="HoTen">
            </div>
            <div class="mb-3">
                <label for="HoTeMaSV" class="form-label">Mã Sinh Viên</label>
                <input type="text" name="MaSV" id="MaSV" class="form-control"
                    placeholder="vui lòng nhập mã sinh viên ..." aria-describedby=NgaySinh">
            </div>
            <div class="mb-3">
                <label for="NgaySinh" class="form-label">Ngày Sinh</label>
                <input type="date" name="NgaySinh" id="NgaySinh" class="form-control" aria-describedby="NgaySinh">
            </div>
            <div class="mb-3">
                <label for="GioiTinh" class="form-label">Giới Tính</label>
                <select class="form-select form-select-lg" name="GioiTinh" id="GioiTinh">
                    <option selected>Chọn Giới Tính</option>
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Địa Chỉ</label>
                <textarea class="form-control" name="DiaChi" id="DiaChi" rows="3" placeholder="Vui lòng nhập địa chỉ..."></textarea>
            </div>
            <div class="mb-3">
                <label for="SoDT" class="form-label">Số Điện Thoại</label>
                <input type="text" name="SoDT" id="SoDT" class="form-control" aria-describedby="SoDT"
                    placeholder="Vui lòng nhập số điện thoại...">
            </div>
            <button name="submit" id="submit" type="submit" class="btn btn-success" role="button">Submit</button>
        </form>
    </div>
@endsection
