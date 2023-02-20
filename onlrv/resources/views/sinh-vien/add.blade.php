@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="{{route('sinh-vien.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="">Tên sinh viên</label>
                      <input type="text" class="form-control" name="ho_ten" id="" aria-describedby="emailHelpId" placeholder="Nhập họ tên sinh viên">
                    </div>
                    <div class="form-group">
                      <label for="">Lớp học</label>
                      <select class="form-control" name="lop_hoc_id" id="" placeholder="Chọn lớp">
                        @foreach ($lophoc as $value )
                        <option value="{{$value->id}}">{{$value->name}}</option>
                         @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">Ảnh sinh viên</label>
                      <input type="file" class="form-control-file" name="file" id="" placeholder="" aria-describedby="fileHelpId">
                    </div>
                    <div class="form-group">
                        <label for="">Địa chỉ</label>
                        <input type="text" class="form-control" name="dia_chi" id="" aria-describedby="emailHelpId" placeholder="Nhập địa chỉ">
                    </div>
                    <button type="submit" class="btn btn-dark">Thêm</button>
                </form>
            </div>
        </div>
    </div>
@stop