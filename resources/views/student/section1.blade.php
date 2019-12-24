

@extends('layouts');


@section('header')
    @parent()
    <p>section1-header</p>
@endsection


@section('content')
    {{-- 1. 模板中输出PHP变量 --}}
    <p>{{$name}}</p>

    {{-- 2. 调用PHP代码 --}}
    <p>{{ date('Y-m-d H:i:m', time()) }}</p>

    <p>{{ in_array($name, $arr) ? 'true' : 'false' }}</p>

    <p>{{ isset($name) ? $name : 'default' }}</p>
    <p>{{ $name or 'default' }}</p><!-- 存在输出1，否则出错 -->


    {{-- 3. 原样输出 --}}
    <p>@{{ $name }}</p>

    
    {{-- include 引入子视图 --}}
    @include('student.common1', ['message' => '我是传递过去的信息'])
@endsection