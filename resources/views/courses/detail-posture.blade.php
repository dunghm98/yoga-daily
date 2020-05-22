@extends('layouts.app')

@section('content')




    <!-- SubHeader =============================================== -->
    <section class="parallax_window_in" data-parallax="scroll" data-image-src="{{asset('img/43876352.jpg')}}" data-natural-width="1400" data-natural-height="470">
        <div id="sub_content_in">
            <h1>{{$posture->title}}</h1>

        </div>
    </section>
    <!-- End section -->
    <!-- End SubHeader ============================================ -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-md-8 ">
                <iframe width="560" height="315" src="{{ $posture->getEmbedVideo() }}" allowfullscreen></iframe>
                <h2>Chú ý</h2>
                <p>"{{ $posture->note }}"</p>

                <!-- End row -->
                <hr class="add_bottom_30">
                <div class="workoutlist">
                    <h3>Mô tả</h3>
                    <p>"{{ $posture->description }}"</p>
                </div>
            </div>
            <!-- End col -->
            <div class="col-md-4" id="sidebar">
                <div class="theiaStickySidebar">
                    <div class="box_style_2">
                        <div >
                            <h2>Hiệu quả</h2>
                            <p>{{$posture->effective}}</p>
                        </div>

                        <hr>

                    </div>
                    <!-- End box_style -->
                </div>
                <!-- End theiaStickySidebar -->
            </div>
            <!-- End col -->
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
@endsection

@section('js')
    <script src="{{asset('js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{asset('js/common_scripts_min.js') }}"></script>
    <script src="{{asset('assets/validate.js') }}"></script>
    <script src="{{asset('js/functions.js') }}"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="{{asset('js/jquery.fitvids.js') }}"></script>
    <script>$(".container").fitVids();</script>
@endsection
