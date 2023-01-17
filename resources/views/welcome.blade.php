<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRUD</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>      
        
    </head>
    <body class="antialiased">
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="HoTen" class="form-label">Họ Tên</label>
                    <input type="text" name="HoTen" id="HoTen" class="form-control"
                        placeholder="vui lòng nhập họ tên..." aria-describedby="HoTen">
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
                    <select name="GioiTinh" id="GioiTinh" disabled="disabled">
                        <option value="Nam">Nam</option>
                        <option value="Nu">Nữ</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="DiaChi" class="form-label">Địa Chỉ</label>
                    <input type="date" name="DiaChi" id="DiaChi" class="form-control" aria-describedby="DiaChi">
                </div>
                <div class="mb-3">
                    <label for="SoDT" class="form-label">Số Điện Thoại</label>
                    <input type="date" name="SoDT" id="SoDT" class="form-control" aria-describedby="SoDT">
                </div>
            </div>
            <div class="col-6">
                <div class="table-responsive">
                    <table class="table table-primary">
                        <thead>
                            <tr>
                                <th scope="col">Họ Tên</th>
                                <th scope="col">Mã Sinh Viên</th>
                                <th scope="col">Ngày Sinh</th>
                                <th scope="col">Giới Tính</th>
                                <th scope="col">Địa Chỉ</th>
                                <th scope="col">Số Điện Thoại</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>R1C1</td>
                                <td>R1C2</td>
                                <td>R1C3</td>
                                <td>Item</td>
                                <td>Item</td>
                                <td>Item</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </body>
</html>
