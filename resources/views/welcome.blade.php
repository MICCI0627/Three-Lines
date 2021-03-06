<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

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
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Three-Lines
                </div>

                <div>
                  @if($errors->any())
                        <ul>
                            @foreach($errors->all() as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <form method="post" action="{{ ('/') }}">
                        {{ csrf_field() }}
                        <div>
                            <p>シェアするリンクの記事</p>
                            <input type="text" name="url" value="{{ old('url') }}" size="80">
                        </div>

                        <div>
                            <p>3行にまとめよう！</p>
                            <input type="text" name="text1" value="{{ old('text1') }}" class="text1" size="80"><br>
                            <input type="text" name="text2" value="{{ old('text2') }}" class="text2" size="80"><br>
                            <input type="text" name="text3" value="{{ old('text3') }}" class="text3" size="80"><br>
                        </div>

                        <div class="output1"></div>
                        <div class="output2"></div>
                        <div class="output3"></div>

                        <input type="submit" value="シェア！">
                    </form>
                </div>
            </div>
        </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript">
        $(function(){

            $('.text1').change(function(){
              $('.output1').text( '・' + $(this).val() );
            });

            $('.text2').change(function(){
              $('.output2').text( '・' + $(this).val() );
            });

            $('.text3').change(function(){
              $('.output3').text( '・' + $(this).val() );
            });

        });
      </script>

    </body>
</html>
