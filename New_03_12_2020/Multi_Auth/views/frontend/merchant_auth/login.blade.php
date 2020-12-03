<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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

           
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has(HS_MERCHANT_LOGIN_WEB_ROUTE_NAME))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('merchant.login') }}">Login</a>

                       {{--   @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif  --}}
                    @endauth
                </div>
            @endif

           
            <div class="content">
             <div>
                <form method="POST" action="{{ route(HS_MERCHANT_LOGIN_WEB_ROUTE_NAME) }}">
               {{--   <form method="POST" action="{{ route('loginAttempt') }}">  --}}
                    @csrf
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone"  value="{{old('phone')}}" />
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label>
                            <a href="#">
                                Send Otp
                            </a>
                        </label>
                        <input type="text" name="password" value="{{old('password')}}" />
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input type="submit" value="login"/>
                    </div>
                </form>
            </div>
                <div class="title m-b-md">
                    Welcome To Desh Delivery
                </div>

                <div class="links">
                    This Site is Under Construction
                </div>
            </div>
        </div>
    </body>
</html>
