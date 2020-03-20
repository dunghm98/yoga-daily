<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Yoga daily') }}</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/instagram.js') }}" defer></script>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/jquery.js') }}" ></script>
        <script src="{{ asset('js/js.js') }}" defer ></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <!-- Styles -->
        <!-- GOOGLE WEB FONT -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700|Kalam:400,700" rel="stylesheet">
    </head>
    <body>
        <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm navigation padding position-relative">
            <div class="container">
                <a class="navbar-brand d-flex" style="padding-right: 30px" href="{{ url('/community') }}">
                    <div ><i class="fa fa-users pr-2" style="border-right: 1px solid black"></i></div>
                    <div class="pl-2">Yoga Community</div>
                </a>
                <a class="navbar-brand d-flex" style="padding-right: 247px" href="{{ url('/') }}">
                    <div ><i class="fa fa-play-circle pr-2" style="border-right: 1px solid black"></i></div>
                    <div class="pl-2">Yoga workshop</div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav " style="padding-right: 250px">
                        @if (Auth::check())
                        <div class=""  >
                            <input type="text" id="searchText" class="border_" placeholder="             Search" size="23">
                            <div class="contais">
                                <ul class="result " id="resultSearch">
                                </ul>
                            </div>
                        </div>
                        @endif
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                        <div style="position: relative;left: 200px" class="d-flex">
                            <li class="nav-item mr-3">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                         </div>
                        @endif
                        @else
{{--                         icon notification, user--}}
                        <div class="icon-notification d-flex pt-2" style>
                            <div id="" style="cursor: pointer;position: relative;width: 20px;margin-right: 17px">
                                <i class="fa fa-bell-o " aria-hidden="true" id="notify"></i>
                                <div id="count"></div>
{{--                                 // count notification--}}
                                <ul class="notifi disable" id="notifShow" style="position: absolute">
                                </ul>
                            </div>
                            <div class=" pr-2"><a href="/profile/{{ Auth::user()->id}}">
                                <i class="fa fa-user-o text-dark" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
{{--                         end icon notification, user--}}
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->username }} <span class="caret"></span>
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


<!-- Header ================================================== -->
{{--    <header>--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row">--}}
{{--                <div class="col-xs-3">--}}
{{--                    <a href="index.html" id="logo">--}}
{{--                        <img src="img/logo.png" width="95" height="27" alt="" data-retina="true" class="logo_normal">--}}
{{--                        <img src="img/logo_sticky.png" width="95" height="27" alt="" data-retina="true" class="logo_sticky">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <nav class="col-xs-9">--}}
{{--                    <ul id="access_top">--}}
{{--                        <li><a href="#" class="search-overlay-menu-btn"><i class="icon-search-6"></i></a>--}}
{{--                        </li>--}}
{{--                        <li><a href="#" data-toggle="modal" data-target="#login" class="hidden-xs">Login</a>--}}
{{--                        </li>--}}
{{--                        <li><a href="#" data-toggle="modal" data-target="#register" class="hidden-xs">Register</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>--}}
{{--                    <div class="main-menu">--}}
{{--                        <div id="header_menu">--}}
{{--                            <img src="img/logo.png" width="95" height="27" alt="Lovefit" data-retina="true">--}}
{{--                        </div>--}}
{{--                        <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>--}}
{{--                        <ul>--}}
{{--                            <li><a href="{{ route('home') }}">Trang chủ</a>--}}
{{--                            </li>--}}
{{--                            <li class="submenu">--}}
{{--                                <a href="javascript:void(0);" class="show-submenu">Lộ trình yoga<i class="icon-down-open-mini"></i></a>--}}
{{--                                <ul>--}}
{{--                                    @foreach(\App\Collection::all() as $collection)--}}
{{--                                        <li>--}}
{{--                                            <a href="{{route('collection.courses', $collection)}}">{{$collection->title}}</a>--}}
{{--                                        </li>--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li><a href="#0">Danh mục khóa học level<i class="icon-down-open-mini"></i></a>--}}
{{--                                <ul>--}}
{{--                                    @foreach(\App\Level::all() as $level)--}}
{{--                                        <li>--}}
{{--                                            <a href="{{route('level.courses', $level)}}">{{$level->name}}</a>--}}
{{--                                        </li>--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li><a href="#0">Purchase this template</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="#" data-toggle="modal" data-target="#login" class="visible-xs">Login</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="#" data-toggle="modal" data-target="#register" class="visible-xs">Register</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <!-- End main-menu -->--}}
{{--                </nav>--}}
{{--            </div>--}}
{{--            <!-- End row -->--}}
{{--        </div>--}}
{{--        <!-- End container -->--}}
{{--    </header>--}}
    <!-- End Header =============================================== -->
{{--        <main class="py-4 main">--}}
        @yield('content-community')
{{--        </main>--}}
{{--            @include('footer')--}}
        </div>
    </body>
</html>






<script>
    $(document).ready(function(){
        notification()
        $(document).on('keyup','#searchText',function(){
            var user = $("#searchText").val();
            if(user.trim() != '')
            {
                 $.ajax({
                    url:"/search",
                    method:"POST",
                    data:{
                        "_token": "{{ csrf_token() }}",
                        user:user,
                    },
                    success:function(data){
                        $('#resultSearch').html(data)
                    }

                })
            }
            else
            {
                $('#resultSearch').html('')
            }
        });

        $("#notify").click(function(){
            $("#notifShow").toggleClass("disable");
            $("#count").html('');
            notification('seen');
        });
        function notification(status = '')
        {
            $.ajax({
                url:"/notification",
                method:"POST",
                data:{
                    "_token": "{{ csrf_token() }}",
                     stt:status,
                },
                dataType:"json",
                success:function(data){
                    if(data.notification !='')
                    {
                        $("#notifShow").html(data.notification);
                    }
                    else
                    {
                        $("#notifShow").html("<span class='p-3' style='display:block'> you have not receiving notifications !!</span>");
                    }

                    if(data.unseen_total > 0)
                    {
                        $("#count").html("<span id='countNofi'>"+data.unseen_total+"<span>");
                    }

                }
            })
        }

    })

</script>

@yield('js')
