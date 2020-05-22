<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Yoga daily') }}</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <!-- Styles -->
        <!-- GOOGLE WEB FONT -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700|Kalam:400,700" rel="stylesheet">

        <!-- BASE CSS -->
        <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
        <link href="{{ asset('css/icon_fonts/css/all_icons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/magnific-popup.min.css') }}" rel="stylesheet">

        <!-- YOUR CUSTOM CSS -->
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

        <!-- Modernizr -->
        <script src="{{ asset('js/modernizr.js') }}"></script>
        <link href="{{ asset('layerslider/css/layerslider.css') }}" rel="stylesheet">
        <!-- SPECIFIC CSS -->
        <link href="{{ asset('css/ion.rangeSlider.min.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <div class="layer"></div>
            <!-- Mobile menu overlay mask -->


<!-- Header ================================================== -->
    <header class="position-relative" style="background-color: rgba(38, 173, 193, 0.1); ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-3">
                    <a href="/" id="logo">
                        <img src="{{ asset('img/beer.png') }}" width="95" height="27" alt="" data-retina="true" class="logo_normal">
                        <img src="{{ asset('img/beer.png') }}" width="95" height="27" alt="" data-retina="true" class="logo_sticky">
                    </a>
                </div>
                <nav class="col-xs-9">
                    @if (!Auth::check())
                    <ul id="access_top" style="margin-top: 20px;">
                        <li><a href="#" class="search-overlay-menu-btn"><i class="icon-search-6"></i></a>
                        </li>
                        <li><a href="/login" class="hidden-xs">Login</a>
                        </li>
                        <li><a href="/register" class="hidden-xs">Register</a>
                        </li>
                    </ul>
                    @endif
                        @if (Auth::check())
                            <ul class="mt-4 ml-4" id="access_top">
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->username }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <br>
{{--                                        favorite--}}
                                        <a class="dropdown-item" href="{{ route('showFavorite') }}">
                                            {{ __('Khoá học yêu thích') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        @endif
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="img/beer.png" width="95" height="27" alt="Lovefit" data-retina="true">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
                        <ul>
                            <li><a href="{{ route('home') }}">Trang chủ</a>
                            </li>
                            <li><a href="{{ route('viewAllPosture') }}">Tư thế Yoga</a>
                            </li>
                            <li><a href="{{ route('program') }}">Chương trình luyện tập</a>
                            </li>
                            <li><a href="{{ route('therapy') }}">Yoga trị liệu</a>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Lộ trình yoga<i class="icon-down-open-mini"></i></a>
                                <ul>
                                    @foreach(\App\Collection::all() as $collection)
                                        <li>
                                            <a href="{{route('collection.courses', $collection)}}">{{$collection->title}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="#0">Danh mục khóa học<i class="icon-down-open-mini"></i></a>
                                <ul>
                                    @foreach(\App\Level::all() as $level)
                                        <li>
                                            <a href="{{route('level.courses', $level)}}">{{$level->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="{{ url('/community') }}">Cộng đồng</a>
                            </li>
                            @if (Auth::check())
{{--                                <li><a href="#" data-toggle="modal" data-target="#login" class="visible-xs">Login</a>--}}
{{--                                </li>--}}
{{--                                <li><a href="#" data-toggle="modal" data-target="#register" class="visible-xs">Register</a>--}}
{{--                                </li>--}}
                            @endif

                        </ul>
                    </div>
                    <!-- End main-menu -->
                </nav>
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </header>
    <!-- End Header =============================================== -->
{{--        <main class="py-4 main">--}}
        @yield('content')
{{--        </main>--}}
            @include('footer')
        </div>
        <!-- Search Menu -->
        <div class="search-overlay-menu">
            <span class="search-overlay-close"><i class="icon_close"></i></span>
            <form role="search" id="searchform" method="get">
                <input value="" name="search" type="search" placeholder="Search..." />
                <button type="submit"><i class="icon-search-6"></i>
                </button>
            </form>
        </div>
        <!-- End Search Menu -->
    </body>
</html>






{{--<script>--}}
{{--    $(document).ready(function(){--}}
{{--        notification()--}}
{{--        $(document).on('keyup','#searchText',function(){--}}
{{--            var user = $("#searchText").val();--}}
{{--            if(user.trim() != '')--}}
{{--            {--}}
{{--                 $.ajax({--}}
{{--                    url:"/search",--}}
{{--                    method:"POST",--}}
{{--                    data:{--}}
{{--                        "_token": "{{ csrf_token() }}",--}}
{{--                        user:user,--}}
{{--                    },--}}
{{--                    success:function(data){--}}
{{--                        $('#resultSearch').html(data)--}}
{{--                    }--}}

{{--                })--}}
{{--            }--}}
{{--            else--}}
{{--            {--}}
{{--                $('#resultSearch').html('')--}}
{{--            }--}}
{{--        });--}}

{{--        $("#notify").click(function(){--}}
{{--            $("#notifShow").toggleClass("disable");--}}
{{--            $("#count").html('');--}}
{{--            notification('seen');--}}
{{--        });--}}
{{--        function notification(status = '')--}}
{{--        {--}}
{{--            $.ajax({--}}
{{--                url:"/notification",--}}
{{--                method:"POST",--}}
{{--                data:{--}}
{{--                    "_token": "{{ csrf_token() }}",--}}
{{--                     stt:status,--}}
{{--                },--}}
{{--                dataType:"json",--}}
{{--                success:function(data){--}}
{{--                    if(data.notification !='')--}}
{{--                    {--}}
{{--                        $("#notifShow").html(data.notification);--}}
{{--                    }--}}
{{--                    else--}}
{{--                    {--}}
{{--                        $("#notifShow").html("<span class='p-3' style='display:block'> you have not receiving notifications !!</span>");--}}
{{--                    }--}}

{{--                    if(data.unseen_total > 0)--}}
{{--                    {--}}
{{--                        $("#count").html("<span id='countNofi'>"+data.unseen_total+"<span>");--}}
{{--                    }--}}

{{--                }--}}
{{--            })--}}
{{--        }--}}

{{--    })--}}



{{--</script>--}}

@yield('js')
