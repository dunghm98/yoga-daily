@extends('layouts.app')

@section('content')




    <!-- SubHeader =============================================== -->
    <section class="parallax_window_in" data-parallax="scroll" data-image-src="{{ $posture->getThumbnail() }}" data-natural-width="1400" data-natural-height="470">
        <div id="sub_content_in">
            <h1>{{$posture->title}}</h1>
            <p>"{{ $posture->description }}"</p>
        </div>
    </section>
    <!-- End section -->
    <!-- End SubHeader ============================================ -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-md-8 ">
                <iframe width="560" height="315" src="{{ $posture->getEmbedVideo() }}" allowfullscreen></iframe>
            </div>
            <!-- End col -->
            <div class="col-md-4" id="sidebar">
                <div class="theiaStickySidebar">
                    <div class="box_style_2">
                        <div id="features">
                            <h4>Hiệu quả</h4>
                            <p>{{$posture->effective}}</p>
                        </div>
                        <p><small style="line-height:10px">Chú ý: {{$posture->note}}</small>
                        </p>
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
