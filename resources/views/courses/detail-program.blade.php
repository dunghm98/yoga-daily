@extends('layouts.app')

@section('content')

    <!-- SubHeader =============================================== -->
    <section class="parallax_window_in" data-parallax="scroll" data-image-src="{{asset('img/43876352.jpg')}}" data-natural-width="1400" data-natural-height="470">
        <div id="sub_content_in">
            <h1>{{ $program->title }}</h1>
        </div>
    </section>
    <!-- End section -->
    <!-- End SubHeader ============================================ -->

    <div class="container_styled_1">
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        @foreach($program->postures as $posture)
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
