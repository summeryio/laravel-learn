
@extends('common.layouts')



@section('content')
    @include('common.message')
    @include('common.validator')

    <div class="panel panel-default">
        <div class="panel-heading">新增学生</div>
        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="">
                {{-- @csrf 请求要带令牌 --}}
                @csrf
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">姓名</label>
                    <div class="col-sm-5">
                        <input 
                            type="text" 
                            name="Student[name]" 
                            value="{{ old('Student')['name'] }}" {{-- 数据保持 --}}
                            class="form-control" 
                            id="name" 
                            placeholder="请输入学生姓名"
                        >
                    </div>
                    <div class="col-sm-5">
                        <p class="form-control-static text-danger">{{ $errors -> first('Student.name') }}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="age" class="col-sm-2 control-label">年龄</label>
                    <div class="col-sm-5">
                        <input 
                            type="text" 
                            name="Student[age]" 
                            value="{{ old('Student')['age'] }}"
                            class="form-control" 
                            id="age" 
                            placeholder="请输入学生年龄"
                        >
                    </div>
                    <div class="col-sm-5">
                        <p class="form-control-static text-danger">{{ $errors -> first('Student.age') }}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="sex" class="col-sm-2 control-label">性别</label>
                    <div class="col-sm-5">
                        <label class="radio-inline">
                            <input type="radio"  name="Student[sex]" value="10">未知</label>
                        <label class="radio-inline">
                            <input type="radio"  name="Student[sex]" value="20">男</label>
                        <label class="radio-inline">
                            <input type="radio"  name="Student[sex]" value="30">女</label>
                    </div>
                    <div class="col-sm-5">
                        <p class="form-control-static text-danger">{{ $errors -> first('Student.sex') }}</p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">提交</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop