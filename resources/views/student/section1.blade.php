

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

    <p>
        @if ($name == 'summery')
            I'm summery
        @elseif ($name == 'imooc')
            I'm imooc
        @else
            Who am I
        @endif
    </p>



    {{-- ============= 流程控制 ============= --}}


    {{-- 跟if相反 --}}
    <p>
        @unless ($name == 'summery')
            unless 控制语句输出
        @endunless
    </p>


    {{-- @for --}}
    <ul>
        @for ($i = 0; $i < 2; $i++)
            <li>{{$i}}</li>
        @endfor
    </ul>


    {{-- @foreach --}}
    <ul>
        @foreach ($students as $s)
            <li>{{$s -> name}}</li>
        @endforeach

    </ul>


    {{-- @forelse --}}
    @forelse ($students as $s)
        <li>{{$s -> name}}</li>
    @empty
        <div class="empty">无数据</div>
    @endforelse





    {{-- ============= 模版中url ============= --}}
    <a href="{{ url('url') }}">url() 点击去往 url页面</a>
    <br>
    <a href="{{ action('StudentController@urlTest') }}">action() 点击去往 url页面</a>
    <br>
    <a href="{{ route('url') }}">route() 点击去往 url页面</a>


@endsection
