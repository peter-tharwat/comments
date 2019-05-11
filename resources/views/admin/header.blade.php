<!DOCTYPE html>
<html  >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>لوحة التحكم</title>

    <!-- Scripts -->
  
    <script src="{{ asset('js/app.js') }}"  ></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    

        <script
      src="https://code.jquery.com/jquery-2.2.4.min.js"
 ></script>
      
      




    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"  ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.min.css" />
  




</head>
<body style="background: #f1f1f1">

    <style type="text/css">
        *{
            font-family: 'Cairo';
            text-align: right;
            text-decoration: none!important;
        }
    </style>

 

    <div id="app">


        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/dash') }}">
                   لوحة التحكم
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav ">
                        <a href="#"><li style="padding: 5px 10px ">الاحصائيات</li></a>
                        <a href="#"><li style="padding: 5px 10px ">التعليقات</li></a>
                        <a href="#"><li style="padding: 5px 10px ">المؤهلات</li></a>
                        <a href="#"><li style="padding: 5px 10px ">الاعدادات</li></a>
                    </ul>
                 
                    <ul class="navbar-nav ml-auto">
                         
                        @guest
                         {{--    <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else


                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>  

 






        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
