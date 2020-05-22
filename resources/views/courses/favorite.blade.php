@extends('layouts.app')

@section('content')

    <!-- SubHeader =============================================== -->
    <section class="parallax_window_in" data-parallax="scroll" data-image-src="{{asset('img/beach-yoga.jpg')}}" data-natural-width="1400" data-natural-height="470">
        <div id="sub_content_in">
            <h1>Favorite Course</h1>
        </div>
    </section>
    <!-- End section -->
    <!-- End SubHeader ============================================ -->

    <div class="container_styled_1">
        <div class="container margin_60_35">
            <div class="row">

                <aside class="col-md-3 col-md-push-9" id="sidebar">
                    <div class="theiaStickySidebar">
                        <div id="filters_col">
{{--                            <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filters </a>--}}
{{--                            <div class="collapse" id="collapseFilters">--}}
{{--                                <div class="filter_type">--}}
{{--                                    <h6>Type</h6>--}}
{{--                                    <ul>--}}
{{--                                        <li>--}}
{{--                                            <label>All (277)</label>--}}
{{--                                            <input type="checkbox" class="js-switch" checked>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <label>Yoga (77)</label>--}}
{{--                                            <input type="checkbox" class="js-switch">--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <label>Cardio (552)</label>--}}
{{--                                            <input type="checkbox" class="js-switch">--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <label>Strenght (909)</label>--}}
{{--                                            <input type="checkbox" class="js-switch">--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <label>Pilates (1196)</label>--}}
{{--                                            <input type="checkbox" class="js-switch">--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <div class="filter_type">--}}
{{--                                    <h6>Body Focus</h6>--}}
{{--                                    <ul>--}}
{{--                                        <li>--}}
{{--                                            <label>Total Body (77)</label>--}}
{{--                                            <input type="checkbox" class="js-switch" checked>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <label>Upper Body (552)</label>--}}
{{--                                            <input type="checkbox" class="js-switch">--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <label>Lower Body (909)</label>--}}
{{--                                            <input type="checkbox" class="js-switch">--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}

{{--                            </div>--}}
                            <!--End collapse -->
                        </div>
                        <!--End filters col-->
                    </div>
                    <!--End Sticky -->
                </aside>
                <!--End aside -->

                <div class="col-md-9 col-md-pull-3">
                    <div class="row">
                        @if(auth()->user())
                            @forelse(auth()->user()->getFavoriteCourse() as $course)
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="course_container">
                                        <div class="ribbon top"><span>{{ $course->is_premium == 1 ? 'Premium' : 'Free' }}</span></div>
                                        <figure>
                                            <a href="{{route('viewCourse', $course)}}">
                                                <img src="{{$course->getThumbnail()}}" width="800" height="533" class="img-responsive" alt="Image">
                                                <div class="short_info"><i class="icon-clock-1"></i>{{$course->duration}}</div>
                                            </a>
                                        </figure>
                                        <div class="course_title"><div class="type"><span>{{$course->level->name}}</span></div>
                                            <h3><a href="{{route('viewCourse', $course)}}">{{$course->title}}</a></h3>
                                            <div class="info_2 clearfix"></div>
                                        </div>
                                    </div>
                                    <!-- End box course_container -->
                                </div>
                                <!-- End col-md-6 -->
                            @empty
                                <h2>Bạn chưa có khoá học nào trong danh sách yêu thích</h2>
                            @endforelse
                        @else
                            <h2>Bạn bạn cần đăng nhập để xem nội dung này</h2>
                        @endif

                    </div>
                    <!-- End row -->
{{--                    <nav>--}}
{{--                        <ul class="pagination">--}}
{{--                            <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a>--}}
{{--                            </li>--}}
{{--                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a>--}}
{{--                            </li>--}}
{{--                            <li><a href="#">2</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="#">3</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="#">4</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="#">5</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#" aria-label="Next">--}}
{{--                                    <span aria-hidden="true">&raquo;</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </nav>--}}
                </div>
                <!-- End col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End container -->
    </div>
    <!-- End container_styled_1 -->
    @endsection

@section('js')
    <!-- COMMON SCRIPTS -->
    <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/common_scripts_min.js') }}"></script>
    <script src="{{ asset('assets/validate.js') }}"></script>
    <script src="{{ asset('js/functions.js') }}"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="{{ asset('js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('js/switchery.min.js') }}"></script>
    <script>
        $("#range").ionRangeSlider({
            hide_min_max: true,
            keyboard: true,
            min: 30,
            max: 180,
            from: 40,
            to: 90,
            type: 'double',
            step: 1,
            prefix: "$",
            grid: false
        });
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        elems.forEach(function (html) {
            var switchery = new Switchery(html, {
                size: 'small'
            });
        });
    </script>
    @endsection
