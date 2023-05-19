<?php

namespace App\Http\Controllers;

use App\Models\Lophoc;
use App\Models\Sinhvien;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SinhvienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sinhvien = Sinhvien::all();
        return view('sinh-vien.index',compact('sinhvien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() 
    {
        $lophoc = Lophoc::all();
        return view('sinh-vien.add',compact('lophoc'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) 
    {       
        // dd($request->all());
        if($request->hasFile('file')){
            $file = $request->file;
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('uploads'),$fileName);
        }else{
            $fileName = '';
        }
        $request->merge(['anh'=>$fileName]);
        try {
            Sinhvien::create($request->all());
            return redirect()->route('sinh-vien.index');
        } catch (\Throwable $th) {
           //dd($th);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) 
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) 
    {
        $lophoc = Lophoc::all();
        $sinhviens = Sinhvien::find($id);
        return view('sinh-vien.edit',compact('sinhviens','lophoc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) 
    {
        $sinhviens = Sinhvien::find($id);
        if($request->hasFile('file')){
            $file = $request->file;
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('uploads'),$fileName);
        }else{
            $fileName = '';
        }
        $request->merge(['anh'=>$fileName]);
        try {
            $sinhviens->update($request->all());
            return redirect()->route('sinh-vien.index');
        } catch (\Throwable $th) {

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) 
    {
        $sinhviens = Sinhvien::find($id)->delete();
        return redirect()->back();
    }
}
