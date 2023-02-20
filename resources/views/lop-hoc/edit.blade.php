@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="{{route('lop-hoc.update',$lop_hoc)}}" method="post">
                    @csrf
                    @method('PUT')
                <div class="form-group">
                  <label for="">Tên lớp</label>
                  <input type="text" class="form-control" name="name" id="" aria-describedby="emailHelpId" value="{{$lop_hoc->name}}">
                </div>
                  <button type="submit" class="btn btn-danger">Sửa</button>
                </form>
            </div>
        </div>
    </div>
@stop