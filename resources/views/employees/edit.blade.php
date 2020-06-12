@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h3>Chỉnh sửa nhân viên {{$employee->name}}</h3>
            <hr>
            <form method="post" action="{{route('employees.update',['id'=>$employee->id])}}">
                @csrf
                <div class="form-group">
                    <label>Nhóm nhân viên</label>
                    <input type="text" name="employee_group" value="{{ $employee->employee_group }}" class="form-control
                    @if($errors->first('employee_group'))
                        is-invalid
                    @endif
                        ">
                    @if($errors->first('employee_group'))
                        <p class="text-danger">{{ $errors->first('employee_group') }}</p>
                    @endif

                </div>
                <div class="form-group">
                    <label>Họ tên</label>
                    <input type="text" name="name" value="{{ $employee->name }}" class="form-control
                    @if($errors->first('name'))
                        is-invalid
                    @endif
                        ">
                    @if($errors->first('name'))
                        <p class="text-danger">{{ $errors->first('name') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Ngày sinh</label>
                    <input type="date" name="birthday" value="{{ $employee->birthday }}" class="form-control
                    @if($errors->first('birthday'))
                        is-invalid
                    @endif
                        ">
                    @if($errors->first('birthday'))
                        <p class="text-danger">{{ $errors->first('birthday') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="nam"
                        @if($employee->sex === 'men' or $employee->sex === 'nam') checked @endif>
                        <label class="form-check-label" for="inlineRadio1">Nam</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="nữ"
                               @if($employee->sex === 'women' or $employee->sex === 'nữ') checked @endif>
                        <label class="form-check-label" for="inlineRadio2">Nữ</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Số điện thoại</label>
                    <input type="text" name="phone" value="{{$employee->phone}}" class="form-control
                    @if($errors->first('phone'))
                        is-invalid
                    @endif
                        ">
                    @if($errors->first('phone'))
                        <p class="text-danger">{{ $errors->first('phone') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Số CMND</label>
                    <input type="text" name="cmnd" value="{{$employee->cmnd }}" class="form-control
                    @if($errors->first('cmnd'))
                        is-invalid
                    @endif
                        ">
                    @if($errors->first('cmnd'))
                        <p class="text-danger">{{ $errors->first('cmnd') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="{{$employee->email }}" class="form-control
                    @if($errors->first('email'))
                        is-invalid
                    @endif
                        ">
                    @if($errors->first('email'))
                        <p class="text-danger">{{ $errors->first('email') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea name="address" rows="3" class="form-control
                @if($errors->first('address'))
                        is-invalid
                    @endif
                        ">{{$employee->address}}</textarea>
                    @if($errors->first('address'))
                        <p class="text-danger">{{ $errors->first('address') }}</p>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <a href="{{route('employees.index')}}" class="btn btn-light">Quay lại</a>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection
