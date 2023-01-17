<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
    use HasFactory;
    protected $fillable=[
        'HoTen',
        'MaSV',
        'NgaySinh',
        'GioiTinh',
        'DiaChi',
        'SoDT'
    ];//2. tạo CSDL bằng php artisan migrate
};
