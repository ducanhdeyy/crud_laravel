<?php

namespace App\Http\Controllers;

use App\Models\Lophoc;
use Illuminate\Http;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LophocController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lophoc = Lophoc::all();
        return view('lop-hoc.index',compact('lophoc'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lop-hoc.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $lophocs = Lophoc::create($request->all());
        return redirect()->route('lop-hoc.index');
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
        $lop_hoc = Lophoc::find($id);
        return view('lop-hoc.edit',compact('lop_hoc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $lop_hoc = Lophoc::find($id)->update($request->all());
        return redirect()->route('lop-hoc.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lop_hocs = Lophoc::find($id)->delete();
        return redirect()->back();
    }
}
