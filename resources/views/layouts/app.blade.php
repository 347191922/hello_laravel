<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>应用程序 - @yield('title')</title>
</head>
<body>
    @section('sidebar')
        主布局侧边栏。
    @show

    <div class="container">
        @yield('content')
    </div>
</body>
</html>