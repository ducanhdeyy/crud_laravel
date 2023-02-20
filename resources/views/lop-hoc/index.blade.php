@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <a href="{{route('lop-hoc.create')}}">Thêm lớp</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên lớp</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lophoc as $value)
                        <tr>
                            <td scope="row">{{$loop->iteration}}</td>
                            <td>{{$value->name}}</td>
                            <td>
                                <a href="{{route('lop-hoc.edit',$value)}}" class="btn btn-dark">Sửa</a>
                                <form action="{{route('lop-hoc.destroy',$value)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Xóa</button>
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