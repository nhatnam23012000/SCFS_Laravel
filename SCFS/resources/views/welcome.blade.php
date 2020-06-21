<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome to SCFS system</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">

        <link href="css/home.css" type="text/css" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url("https://image.freepik.com/free-photo/background-blurry-restaurant-shop-interior_1203-4031.jpg");
                background-position: center;
                background-size:100%;
                background-repeat:no-repeat;
                opacity: 0.8;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                padding: 0;
                height: 100%;
                width: 100%;
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
                
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                font-weight: bold;
                color:#197daf;
                background-color: rgb(0, 0, 0);
                width: 100%;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #144b94;
                padding: 0 25px;
                font-size: 13px;
                font-weight: bolder;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
           .btn{
              border: 3px solid #28648b;
              background: none;
              padding: 10px 20px;
              font-size: 20px; 
              font-family: 'Balsamiq Sans', cursive;
              cursor: pointer;
              margin:10px;
              position: relative;
              overflow:hidden;
              font-weight: 600;
           }
           .btn:before {
               content:"";
               position: absolute;
               left: 0;
               width: 100%;
               height: 0%;
               background:#2f86c0;
               z-index: -1;
               transition: 0.8s;
           }
           .btn1 > a{
               color: #eeeb4f;
               text-decoration: none;
               
           }
           .btn1:hover{
           color: #fff;     
           }
           .btn1::before{
               top: 0;
               border-radius: 0 0 50% 50%;
           }
           .btn1:hover::before{
               height:180%;
           }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height" id="homepage">
            @if (Route::has('login'))
                <div class="top-right links" id="login">
                    @auth
                    <button class="btn btn1">
                        
                        <a href="{{ url('/home') }}">HOME</a>
                    </button>
                    @else
                    <button class="btn btn1">
                        
                        <a href="{{ route('login') }}">LOGIN</a>
                    </button>
                        @if (Route::has('register'))
                        <button class="btn btn1">
                           
                            <a href="{{ route('register') }}"> REGISTER</a>
                        </button>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    CSE Smart Food Court System
                </div>

                <div>
                   <h3>Easy, convinience, joyful way to eat</h3>
                </div>
            </div>
            
        </div>
    </body>
</html>
