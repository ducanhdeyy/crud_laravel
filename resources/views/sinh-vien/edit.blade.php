@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="{{route('sinh-vien.update',$sinhviens)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <label for="">Tên sinh viên</label>
                      <input type="text" class="form-control" name="ho_ten" id="" aria-describedby="emailHelpId" value="{{$sinhviens->ho_ten}}">
                    </div>
                    <div class="form-group">
                      <label for="">Lớp học</label>
                      <select class="form-control" name="lop_hoc_id" id="" placeholder="Chọn lớp">
                        @foreach ($lophoc as $value )
                        <option value="{{$value->id}}"{{$value->id == $sinhviens->lop_hoc_id ? 'selected':''}}>{{$value->name}}</option>
                         @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">Ảnh sinh viên</label>
                      <input type="file" class="form-control-file" name="file" id="" placeholder="" aria-describedby="fileHelpId">
                      <img src="{{url('uploads')}}/{{$sinhviens->anh}}" alt="" width="50">
                    </div>
                    <div class="form-group">
                        <label for="">Địa chỉ</label>
                        <input type="text" class="form-control" name="dia_chi" id="" aria-describedby="emailHelpId" value="{{$sinhviens->dia_chi}}">
                    </div>
                    <button type="submit" class="btn btn-dark">Sửa</button>
                </form>
            </div>
        </div>
    </div>
@stop