@extends('master')
@section('content')
    <p style="color: green">{{session('success')}}</p>
    <div class="card">
        <div class="card-header">
            <h2>Danh sách nhân viên</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <a href="{{route('employees.create')}}" class="btn btn-success">Thêm mới</a>
                </div>
                <div class="col-md-6">
                    <form class="form-inline my-2 my-lg-0" method="get" action="{{route('employees.search')}}">
                        <input class="form-control mr-sm-2" type="search" name="keyword" placeholder="Search" value="@if(isset($keyword)){{$keyword}}@endif" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>


            <hr>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Mã nhân viên</th>
                    <th scope="col">Nhóm nhân viên</th>
                    <th scope="col">Họ tên</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Chức năng</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employees as $employee)
                    <tr>
                        <th scope="row">{{$employee->id}}</th>
                        <td>{{$employee->employee_group}}</td>
                        <td>{{$employee->name}}</td>
                        <td>{{$employee->sex}}</td>
                        <td>{{$employee->phone}}</td>
                        <td>
                            <a href="{{route('employees.edit', ['id'=>$employee->id])}}" class="btn btn-outline-warning">Sửa</a>
                            <a href="{{route('employees.delete', ['id'=>$employee->id])}}" onclick="return confirm('Bạn có muốn xóa???')" class="btn btn-outline-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="col-6">
                {{ $employees->appends(request()->query()) }}
            </div>
        </div>
    </div>
@endsection
