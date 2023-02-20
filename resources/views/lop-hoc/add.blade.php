@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="{{route('lop-hoc.store')}}" method="post">
                    @csrf
                <div class="form-group">
                  <label for="">Tên lớp</label>
                  <input type="text" class="form-control" name="name" id="" aria-describedby="emailHelpId" placeholder="">
                </div>
                  <button type="submit" class="btn btn-danger">Thêm</button>
                </form>
            </div>
        </div>
    </div>
@stop