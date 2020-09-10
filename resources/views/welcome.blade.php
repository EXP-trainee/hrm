<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
{{--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>--}}
{{--        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>--}}
{{--        <script src="https://kit.fontawesome.com/a2446d3347.js" crossorigin="anonymous"></script>--}}

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
                <h1><a class="navbar-brand" href="#">EXP</a></h1>
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <h5><a class="nav-link" href="#">Công ty TNHH dịch vụ và phát triển công nghệ EXP Thái Nguyên</a></h5>
                  </li>
                </ul>
                
                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/getuser') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
              </nav>
              ​
              <div class="container-fluid" style="margin-top:80px">
                <div style="text-align: center">
                  <h1>Công ty TNHH dịch vụ và phát triển công nghệ EXP Thái Nguyên</h1>
                  <p>Công Ty Truyền Thông</p>
                  <p>Mở cửa đến 17:30 hôm nay</p>
                  <button type="button" class="btn btn-info">Xem thong tin </button>
                </div>
                
              </div>
        </div>
    </body>
</html>

​
​
​
