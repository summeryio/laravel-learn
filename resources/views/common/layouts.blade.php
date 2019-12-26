<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>表单 @yield('site_title')</title>
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> --}}
        <link rel="stylesheet" href="{{asset('static/css/bootstrap.min.css')}}">
        @section('css_file')
            
        @show
    </head>
    
    <body>
        <!-- 头部 -->
        @section('header')
        <div class="jumbotron">
            <div class="container">
                <h2>轻松学会Larvel</h2>
                <p>表单</p>
            </div>
        </div>
        @show
        
        <!-- 中间内容区域 -->
        <div class="container">
            <div class="row">
                <!-- 左侧菜单区域 -->
                @section('left_menu')
                <div class="col-md-3">
                    <div class="list-group">
                        <a 
                            href="{{ url('student/index') }}" 
                            class="list-group-item
                                {{ Request::getPathInfo() == '/student/index' ? 'active' : '' }}
                            "
                        >学生列表</a>
                        <a 
                            href="{{ url('student/create') }}" 
                            class="list-group-item
                                {{ Request::getPathInfo() == '/student/create' ? 'active' : '' }}
                            "
                        >新增学生</a>
                    </div>
                </div>
                @show

                <!-- 右侧内容区域 -->
                <div class="col-md-9">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- 尾部 -->
        @section('footer')
        <div class="jumbotron" style="margin: 0;">
            <div class="container">
                <span>@2016 imooc</span>
            </div>
        </div>
        @show
        
    </body>

    @section('js_file')
    <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    @show
    

</html>