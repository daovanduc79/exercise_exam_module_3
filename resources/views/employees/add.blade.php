@extends('master')
@section('content')

    <form method="post" action="{{route('employees.store')}}">
        @csrf
        <div class="form-group">
            <label>Nhóm nhân viên</label>
            <input type="text" name="employee_group" class="form-control">
        </div>
        <div class="form-group">
            <label>Họ tên</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Ngày sinh</label>
            <input type="date" name="birthday" class="form-control">
        </div>
        <div class="form-group">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="nam">
                <label class="form-check-label" for="inlineRadio1">Nam</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="nữ">
                <label class="form-check-label" for="inlineRadio2">Nữ</label>
            </div>
        </div>
        <div class="form-group">
            <label>Số điện thoại</label>
            <input type="number" name="phone" class="form-control">
        </div>
        <div class="form-group">
            <label>Số CMND</label>
            <input type="number" class="form-control" name="cmnd">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label>Address</label>
            <textarea class="form-control" name="address" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
