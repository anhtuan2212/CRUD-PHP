<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *1. php artisan make:model SinhVien -m || lệnh git để tạo model và file gen bảng vào DB
     * @return void
     */
    public function up()
    {
        Schema::create('sinh_viens', function (Blueprint $table) {
            $table->id();
            $table->string('HoTen');
            $table->string('MaSV');
            $table->date('NgaySinh');
            $table->string('GioiTinh');
            $table->string('DiaChi');
            $table->string('SoDT');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sinh_viens');
    }
};
