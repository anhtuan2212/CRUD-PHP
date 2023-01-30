<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SinhVien;
class SinhVienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sinhvien = SinhVien::paginate(5);
        return view('layout.view.index', compact('sinhvien'));
    }

    /**
     * 3. php artisan make:controller SinhVienController -r //tạo controller
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layout.view.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SinhVien::create($request->all());
        return redirect()-> route('home')->with('message', 'Thêm Thành Công !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $sinhvien= SinhVien::find($id);
        return view('layout.view.edit', compact('sinhvien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        // dd($id);
        $data = [
            'HoTen' => $request->HoTen,
            'MaSV'=> $request->MaSV,
            'NgaySinh' => $request->NgaySinh,
            'GioiTinh'=> $request->GioiTinh,
            'DiaChi' => $request->DiaChi,
            'SoDT'=>$request->SoDT
        ];
        SinhVien::where('id',$id)->update($data);
        
        return redirect()-> route('home')->with('message', 'Cập Nhật Thành Công !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sinhvien =  SinhVien::find($id);
        $sinhvien->delete();
        return redirect()-> route('home')->with('message', 'Xóa Thành Công !');
    }
}
