<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
        <title>Laravel Basic Case</title>
        <!-- 新 Bootstrap 核心 CSS 文件 -->
        <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <style>
            html,body{
                width: 100%;
                height: 100%;
            }
            body{
                font-family: 'Lato';
            }
            *{
                margin: 0;
                border: 0;
            }
            tr{
                background-color: #f0f0f0;
            }
            table{
                width: 100%;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{url('/')}}">Task List</a>
                </div>
            </div>
        </nav>

        @yield('content')

        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script>

        </script>
    </body>
</html>