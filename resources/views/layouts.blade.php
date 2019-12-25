<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        .header {
            width: 1000px;
            height: 150px;
            margin:0 auto;
            background: #f5f5f5;
            border: 1px solid #ddd;
        }
        .main {
            width: 1000px;
            height: 800px;
            margin:0 auto;
            margin-top: 15px;
            clear: both;
        }
        .main .sidebar {
            float: left;
            width: 20%;
            height: inherit;
            background: #f5f5f5;
            border: 1px solid #ddd;
            }
            .main .content {
            float: right;
            width: 75%;
            height: inherit;
            background: #f5f5f5;
            border: 1px solid #ddd;
            }
        .footer {
            width: 1000px;
            height: 150px;
            margin:0 auto;
            margin-top: 15px;
            background: #f5f5f5;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>

    <div class="header">
        @section('header')
        <h2>头部</h2>
        @show()
    </div>

    <div class="main">
        <div class="sidebar">
            @section('sidebar')
            侧边栏
            @show()
        </div>
        <div class="content">
            @yield('content', '主要内容区域')
        </div>
    </div>

    <div class="footer">
        @section('footer')
        底部
        @show()
    </div>
    
</body>
</html>