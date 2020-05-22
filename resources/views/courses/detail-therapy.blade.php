@extends('layouts.app')

@section('content')

    <!-- SubHeader =============================================== -->
    <section class="parallax_window_in" data-parallax="scroll" data-image-src="{{asset('img/43876352.jpg')}}" data-natural-width="1400" data-natural-height="470">
        <div id="sub_content_in">
            <h1>{{ $therapy->title }}</h1>
            <p>"{{ $therapy->description }}"</p>
        </div>
    </section>
    <!-- End section -->
    <!-- End SubHeader ============================================ -->

    <div class="container_styled_1">
        <div class="container margin_60_35">
            <div class="row">

                <aside class="col-md-3 col-md-push-9" id="sidebar">
                    <div class="theiaStickySidebar">
{{--                        <div id="filters_col">--}}
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
{{--                            <!--End collapse -->--}}
{{--                        </div>--}}
                        <!--End filters col-->
                    </div>
                    <!--End Sticky -->
                </aside>
                <!--End aside -->

                <div class="col-md-12">
                    <div class="row">
                        @foreach($therapy->postures as $posture)
                            <div class="col-sm-4 col-md-4 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                                <div class="course_container">
                                    <figure>
                                        <a href="{{ $posture->video }}" class="video">
                                            <i class="arrow_triangle-right_alt2"></i>
                                            <img src="{{$posture->getThumbnail()}}" width="780" height="420"  alt="Image" class="img-responsive">
                                        </a>
                                        <em></em>
                                    </figure>
                                    <div class="course_title">
                                        <h3><a href="{{route('viewDetailPosture', $posture)}}">{{$posture->title}}</a></h3>
                                        <div class="info_2 clearfix"></div>
                                    </div>
                                </div>
                                <!-- End box course_container -->
                            </div>
                            <!-- End col-md-6 -->
                        @endforeach
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
