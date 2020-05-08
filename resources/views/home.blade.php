@extends('layouts.app')
@section('content')


    <!-- Slider -->
    <!-- <div id="full-slider-wrapper" style="margin-top: -6%;"> -->
        <!-- <div id="layerslider" style="width:100%;height:667px;"> -->
            <!-- first slide -->
            <!-- <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">
                <img src="{{asset('img/beach-yoga.jpg')}}" class="ls-bg" alt="Slide background" width="1600" height="667">
                <h3 class="ls-l slide_typo" style="top: 50%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">Video Hướng Dẫn Fitness<br>
                    ở mọi nơi, cho mọi người</h3>
                <p class="ls-l slide_typo_2" style="top:62%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
                    Cardio / Strenght / Yoga
                </p>
            </div> -->
            <!-- second slide -->
            <!-- <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:85;">
                <img src="https://www.hoteliermaldives.com/wp-content/uploads/Shutterstock-Maldives-Wellness-Yoga-Beach-lowres.jpg" class="ls-bg" alt="Slide background" width="1600" height="667">
                <h3 class="ls-l slide_typo" style="top: 50%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">Video chất lượng cao<br>
                    Dành cho mọi trình độ</h3>
                <p class="ls-l slide_typo_2" style="top:62%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
                    Cardio / Strenght / Yoga
                </p>
            </div> -->
            <!-- third slide -->
            <!-- <div class="ls-slide" data-ls="slidedelay:5000; transition2d:103;">
                <img src="https://yogacuocsong.com/wp-content/uploads/2019/03/Top-nh%E1%BB%AFng-B%C3%AD-m%E1%BA%ADt-v%E1%BB%81-Yoga-m%C3%A0-b%E1%BA%A1n-n%C3%AAn-hi%E1%BB%83u-%C4%91%E1%BB%83-tr%C3%A1nh-nh%E1%BB%AFng-hi%E1%BB%83u-l%E1%BA%A7m-2.jpg" class="ls-bg" alt="Slide background" width="1600" height="667">
                <h3 class="ls-l slide_typo" style="top: 50%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">Nâng cao sức khoẻ</h3>
                <p class="ls-l slide_typo_2" style="top:56%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
                    Cardio / Strenght / Yoga
                </p>
            </div> -->
        <!-- </div> -->
    <!-- </div> -->
    <!-- End layerslider -->
    <!-- SubHeader =============================================== -->
    <section class="header-video" style="height: 500px !important;"> -->
		 <div id="hero_video">
			<div id="sub_content">
				<div class="mobile_fix" style="text-shadow: black 0.1em 0.1em 0.2em;">
					<h1>Fitness <strong>Videos</strong> Workout</h1>
					<p>
                    Yoga là suối dòng của tuổi trẻ. Bạn chỉ có thể trẻ mãi khi xương cốt của mình dẻo dai.
					</p>
				</div>
			</div>
			<!-- Yoga là suối dòng của tuổi trẻ. Bạn chỉ có thể trẻ mãi khi xương cốt của mình dẻo dai.
			End sub_content -->
        </div>
        <video autoplay muted>
            <source src="{{asset('video/video.mp4')}}" type="video/mp4">
        </video>
	</section>
	<!-- End Header video -->

<!-- End SubHeader ============================================ -->

<section id="feat">
    <div class="container">
        <h2 class="main_title"><em></em>How Lovefit works<span>Fall in love with Fitness</span></h2>
        <p class="lead styled">
            Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos.
        </p>
        <div class="row">
            <div class="col-sm-4 wow fadeIn animated" data-wow-delay="0.2s">
                <div class="box_feat" id="icon_2">
                    <h3>Videos Tập Luyện</h3>
                    <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos. </p>
                </div>
            </div>
            <div class="col-sm-4 wow fadeIn animated" data-wow-delay="0.5s">
                <div class="box_feat" id="icon_1">
                    <h3>Huấn Luyện Viên Chuyên Nghiệp</h3>
                    <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos. </p>
                </div>
            </div>
            <div class="col-sm-4 wow fadeIn animated" data-wow-delay="1s">
                <div class="box_feat" id="icon_3">
                    <h3>Xem Ở Mọi Nơi</h3>
                    <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos. </p>
                </div>
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</section>
<!-- End section -->

<div class="container_styled_1">
    <div class="container margin_60_35">
        <h2 class="main_title"><em></em> Những Video Workout Mới Nhất<span>Fall in love with Fitness</span></h2>
        <div id="filter_buttons">
            <button data-toggle="portfilter" class="active" data-target="all">All</button>
            @foreach($levels as $level)
                <button data-toggle="portfilter" data-target="{{$level->name}}">{{$level->name}}</button>
            @endforeach
        </div>
        <div class="row">
            @foreach($courses as $course)
                <div class="col-md-4" data-tag="{{$course->level->name}}">
                    <div class="course_container">
                        <div class="ribbon top"><span>{{$course->is_premium? 'Premium' : 'Fee'}}</span>
                        </div>
                        <figure>
                            <a href="{{route('viewCourse', $course) }}">
                                <img src="{{$course->getThumbnail()}}" width="800" height="533" class="img-responsive" alt="Image">
                                <div class="short_info"><i class="icon-clock-1"></i>{{ $course->duration }}</div>
                            </a>
                        </figure>
                        <div class="course_title">
                            <div class="type"><span>{{$course->level->name}}</span>
                            </div>
                            <h3><a href="{{route('viewCourse', $course) }}">{{ $course->title }}</a></h3>
                            <div class="info_2 clearfix">
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>
            @endforeach
            <div class="col-md-4">
                <a href="{{route('exploreCourse')}}" id="view_all"><span><i class="arrow_carrot-right_alt2"></i>View all courses</span></a>
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</div>
<!-- End container_styled_1 -->

<section class="margin_60_35" id="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Xem được trên mọi thiết bị</h3>
                <p class="lead">Lorem ipsum dolor sit amet, dolore deleniti appareat per no. In ius aliquam suavitate repudiare, pro an quidam inimicus, duo liber labitur repudiandae in.</p>
                <p>
                <p>Lorem ipsum dolor sit amet, dolore deleniti appareat per no. In ius aliquam suavitate repudiare, pro an quidam inimicus, duo liber labitur repudiandae in. Nec no tamquam delenit, sit equidem ornatus accommodare at, pro graeco debitis deterruisset no. Eam at veri oratio principes, sit ad vero ipsum affert.</p>
                <div id="compatib">
                    Compatible with Android/IOS
                </div>
            </div>
            <div class="col-md-6">
                <img src="img/devices.png" width="600" height="355" alt="" class="img-responsive">
            </div>
        </div>
        <!--  End row -->
    </div>
    <!--  End container-->
</section>
<!--  End section-->

<section class="promo_full">
    <div class="promo_full_wp">
        <div>
            <h3>Khách hàng nói về chúng tôi<span>Id tale utinam ius, an mei omnium recusabo iracundia.</span></h3>
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-md-offset-1">
                        <div class="carousel_testimonials">
                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="img/testimonial_1.jpg" alt="" class="img-circle">
                                        </figure>
                                        <h4>Dinh Lê<small>12 February 2020</small></h4>
                                    </div>
                                    <div class="comment">
                                        "“Tôi rất thích tập yoga, tuy mới làm quen với bộ môn này có 50 ngày thôi, nhưng tôi thấy cơ thể có những chuyển biến bước đầu rất tốt với các khóa học mà tôi đã chọn.”"
                                    </div>
                                </div>
                                <!-- End box_overlay -->
                            </div>

                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="img/testimonial_1.jpg" alt="" class="img-circle">
                                        </figure>
                                        <h4>Liên Nguyễn<small>12 March 2020</small></h4>
                                    </div>
                                    <div class="comment">
                                        "Thật sự là rất hiệu quả, trước giờ mình cũng muốn học yoga lâu rồi mà chưa có điều kiện, thời gian và cũng ngại đến phòng tập."
                                    </div>
                                </div>
                                <!-- End box_overlay -->
                            </div>

                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="img/testimonial_1.jpg" alt="" class="img-circle">
                                        </figure>
                                        <h4>Hương Đỗ<small>12 Janruary 2020</small></h4>
                                    </div>
                                    <div class="comment">
                                        "Thật sự lúc đầu cũng không nghĩ là hiệu quả đến vậy. Nhưng giờ càng tập càng say, hôm nào không tập là mình cảm thấy khó chịu lắm."
                                    </div>
                                </div>
                                <!-- End box_overlay -->
                            </div>

                        </div>
                        <!-- End carousel_testimonials -->
                    </div>
                    <!-- End col-md-8 -->
                </div>
                <!-- End row -->
            </div>
            <!-- End container -->
        </div>
        <!-- End promo_full_wp -->
    </div>
    <!-- End promo_full -->
</section>
<!-- End section -->

<div id="newsletter_container">
    <div class="container margin_60">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">
                <h3>Đăng ký để nhận tin mới nhất.</h3>
                <div id="message-newsletter"></div>
                <form method="post" action="assets/newsletter.php" name="newsletter" id="newsletter" class="form-inline">
                    <input name="email_newsletter" id="email_newsletter" type="email" value="" placeholder="Your Email" class="form-control">
                    <button id="submit-newsletter" class="btn_1"> Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End newsletter_container -->
@endsection
@section('js')
    <!-- COMMON SCRIPTS -->
    <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/common_scripts_min.js') }}"></script>
    <script src="{{ asset('assets/validate.js') }}"></script>
    <script src="{{ asset('js/functions.js') }}"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="{{ asset('js/bootstrap-portfilter.min.js') }}"></script>
    <script src="{{ asset('layerslider/js/greensock.js') }}"></script>
    <script src="{{ asset('layerslider/js/layerslider.transitions.js') }}"></script>
    <script src="{{ asset('layerslider/js/layerslider.kreaturamedia.jquery.js') }}"></script>
    <script type="text/javascript"
        $('#vid').play();
        <!-- $('#layerslider').layerSlider({
            autoStart: true,
            navButtons: false,
            navStartStop: false,
            showCircleTimer: false,
            responsive: true,
            responsiveUnder: 1400,
            layersContainer: 1170,
            skinsPath: 'layerslider/skins/'
            // Please make sure that you didn't forget to add a comma to the line endings
            // except the last line!
        }); -->
    </script>
@endsection
