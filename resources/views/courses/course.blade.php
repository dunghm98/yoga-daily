@extends('layouts.app')

@section('content')




    <!-- SubHeader =============================================== -->
    <section class="parallax_window_in" data-parallax="scroll" data-image-src="{{ $course->getThumbnail() }}" data-natural-width="1400" data-natural-height="470">
        <div id="sub_content_in">
            <h1>{{$course->title}}</h1>
            <p>"{{ $course->overview }}"</p>
        </div>
    </section>
    <!-- End section -->
    <!-- End SubHeader ============================================ -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-md-8 ">
                <iframe width="560" height="315" src="{{ $course->getEmbedVideo() }}" allowfullscreen></iframe>
                <ul id="course_info">
                    <li><i class="icon-clock"></i> {{$course->duration}} </li>
                    <li><i class=" icon-chart-bar-5"></i> {{$course->level->name}} level</li>
                    <li><i class="icon-users-3"></i> 144 Partecipants</li>
                </ul>
                <h2>Tổng quan khóa học</h2>
                <p>{{ $course->overview }}</p>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="box_style_3">
                            <img src="img/top_body.png" width="69" height="200" alt="Image">
                            <h4>Body Focus</h4>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="box_style_3">
                            <div id="count_calories">
                                {{$course->getTotalEnergy()}} kcal
                            </div>
                            <h4>Calories Burned</h4>
                        </div>
                    </div>
                </div>
                <!-- End row -->
                <hr class="add_bottom_30">
{{--@dd($course->lessons);--}}
                @foreach($course->lectures as $lesson)
                <div class="workoutlist">
                    <div class="row">
                        <div class="col-sm-5">
                            <figure>
                                <a href="https://www.youtube.com/watch?v=l6LpYqlBhAQ" class="video">
                                    <i class="arrow_triangle-right_alt2"></i>
                                    <img src="{{$lesson->getThumbnail()}}" width="780" height="420"  alt="Image" class="img-responsive">
                                </a>
                                <span>0:35</span>
                                <em></em>
                            </figure>
                        </div>
                        <div class="col-sm-7">
                            <h4><a href="https://www.youtube.com/watch?v=l6LpYqlBhAQ" class="video">{{$lesson->title}}</a></h4>
                            <p>{{$lesson->description}}</p>
                        </div>
                    </div>
                </div>
                <!-- End workoutlist -->
                @endforeach

            </div>
            <!-- End col -->
            <div class="col-md-4" id="sidebar">
                <div class="theiaStickySidebar">
                    <div class="box_style_2">
                        <div id="price_in">
                            {{$course->is_premium ? 'Premium' : 'Fee'}}
                        </div>
                        <div id="features">
                            <h4>Bạn sẽ được gì?</h4>
                            <ul>
                                <li><a href="#0" class="tooltip-1" data-placement="right" title="" data-original-title="Default tooltip"><i class="icon_film"></i>{{ $course->countLesson() }} video bài học</a>
                                </li>
                                <li><a href="#0" class="tooltip-1" data-placement="right" title="" data-original-title="Default tooltip"><i class="icon_tablet"></i>Truy cập từ điện thoại và máy tính bảng</a>
                                </li>
                                @if($course->is_premium)
                                <li><a href="#0" class="tooltip-1" data-placement="right" title="" data-original-title="Default tooltip"><i class="icon_lock-open_alt"></i>Hỗ trợ trọn đời</a>
                                </li>
                                <li><a href="#0" class="tooltip-1" data-placement="right" title="" data-original-title="Default tooltip"><i class="icon_chat_alt"></i>Trao đổi với huấn luyện viên</a>
                                </li>
                                @endif
                            </ul>
                        </div>
                        <p><small style="line-height:10px">Choro lobortis euripidis cu qui, ex melius labitur conceptam eos, sumo possim sea in. Te platonem ullamcorper per.</small>
                        </p>
                        <hr>
                        @if($course->is_premium)
                        <a href="cart-page-1.html" class="btn_full">Nâng cấp tài khoản Premium</a>
                        @endif
                        @foreach($course->users as $user)
                            @if(auth()->user()->id == $user->id)
                                <p class="btn_outline"><i class=" icon-heart"></i> Khoá học yêu thích</p>
                                @else
                                    <p class="btn_outline" data-course = "{{$course->id}}" id="add-to-favorite"><i class=" icon-heart"></i> Thêm vào danh sách yêu thích</p>
                                @endif
                                    @endforeach
                    </div>
                    <!-- End box_style -->
                    <div id="trainer_col">
                        <h4>About the trainer</h4>
                        <div class="media">
                            <div class="pull-right">
                                <a href="#"><img src="img/avatar1.jpg" class="img-circle" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <h5 class="media-heading">Marc Twain</h5>
                                <p>
                                    Mea assum nemore erroribus ei, eu sed movet animal eleifend. Id usu recteque consequuntur, nam elitr veniam legere ex. Nec iriure scaevola intellegat ea, cu cum erroribus concludaturque. In quis solum legimus qui.
                                    <br><a href="trainer-profile.html">View profile</a>
                                </p>
                            </div>
                        </div>
                    </div>
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
    <script>
        $("#modal_calc").animatedModal({
            animatedIn:'bounceIn',
            animatedOut:'bounceOut',
            color:'#4088DA'
        });


        $('#add-to-favorite').click(function () {
            var course_id  = $(this).attr('data-course');
            // $('#like_'+post_id).toggleClass("liked");
            $.ajax({
                url:"/add-to-favorite",
                method:"POST",
                data:{
                    "_token": "{{ csrf_token() }}",
                    course_id:course_id,
                },
                success:function(data){
                    console.log(data['status'])
                    if(data['status'] ===  500){
                        window.location.href = '/login';
                    }
                    else
                    $('#add-to-favorite').html('<i class=" icon-heart"></i>Đã thêm vào danh sách yêu thích');
                }

            })
        });
    </script>
    @endsection
