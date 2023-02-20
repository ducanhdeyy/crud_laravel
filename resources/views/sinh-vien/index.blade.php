@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <a href="{{route('sinh-vien.create')}}" class="btn btn-danger">Thêm sinh viên</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Họ tên</th>
                            <th>Ảnh</th>
                            <th>Địa chỉ</th>
                            <th>Lớp học</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sinhvien as $value )
                        <tr>
                            <td scope="row">{{$loop->iteration}}</td>
                            <td>{{$value->ho_ten}}</td>
                            <td><img src="{{url('uploads')}}/{{$value->anh}}" alt="" width="50"></td>
                            <td>{{$value->dia_chi}}</td>
                            <td>{{$value->lopHoc->name}}</td>
                            <td>
                                <a href="{{route('sinh-vien.edit',$value)}}" class="btn btn-danger">Sửa</a>
                                <form action="{{route('sinh-vien.destroy',$value)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-dark">Xóa</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop