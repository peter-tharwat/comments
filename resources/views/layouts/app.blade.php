<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    

    <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>




    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.min.css" />



</head>

<?php $set=\App\Setting::get()->first(); ?>


<body style="background: #f1f1f1">

    <style type="text/css">
        *{
            font-family: 'Cairo';
            text-align: right;
            text-decoration: none!important;
        }
    </style>

    <style type="text/css">
       
        .wh-hover:hover{
             
            background: #00e676!important;
            color: #fff!important;
           border:1px solid transparent!important;
        }

        .fb-hover:hover{
            background: #2381c6!important;
            color: #fff!important;
            border:1px solid transparent!important;
             
        }
        .ins-hover:hover{
            background: #cc2f98!important;
            color: #fff!important;
            border:1px solid transparent!important;
          
        }
        .tw-hover:hover{
            background: #2aa9e0!important;
            color: #fff!important;
             border:1px solid transparent!important;
        }
    </style>

    <div id="app">


        {{-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav mr-auto">

                    </ul>

                  
                    <ul class="navbar-nav ml-auto">
                         
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
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
        </nav> --}}

        <nav class="navbar navbar-default navbar-fixed-top  text-center" style="border-radius: 0px;background: #fff">
          <div class="container  text-center" style=" display: block;">
            <h6 class="text-center" style="padding: 0px ; margin:0px;">
                <div class="col-xs-2 text-left">
                    <img src="https://png.pngtree.com/svg/20170608/quotes_727798.png" style="height: 40px; width: 40px;display: inline-block;transform: rotate(180deg);">
                </div>
                <div class="col-xs-8 text-center" style="padding: 10px;color: #333;font-size: 17px;">
                    {{$set['text_top']}}
                </div>
                <div class="col-xs-2  text-right">
                     <img src="https://png.pngtree.com/svg/20170608/quotes_727798.png" style="height: 40px; width: 40px;display: inline-block;">
                </div>
                
            </h6>            
          </div> 
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
