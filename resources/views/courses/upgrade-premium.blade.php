@extends('layouts.app')

@section('content')


    <div class="container margin_60_35">
        <div class="row">
            <div class="col-md-11">
                <div class="box_style_2">
                    <div id="confirm">
                        <i class="icon_check_alt2"></i>
                        <h3>Nâng cấp lên tài khoản Premium</h3>
                        <p>
                            Chọn phương thức thanh toán CHUYỂN KHOẢN NGÂN HÀNG để được update nhanh nhất
                        </p>
                    </div>
                    <div id="tab_3" class="content content_tab3 tab_content" style="display: block;">

                        <h5 class="title_modal">
                            <strong>Bước 1: </strong>chuyển khoản</h5>
                        <br>
                        <div><span>Vui lòng ghi rõ nội dung khi chuyển khoản tại ngân hàng:</span><span class="exp">Email-Nguoi-Gui_DailyYoga</span></div>
                        <br>
                        <table style="border: 1px solid black">
                            <thead>
                            <tr>
                                <td>
                                                    <span>ngân hàng
                                                        Vietcombank</span>
                                </td>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <span>Số tài khoản: <strong>0421000489899</strong></span>
                                    <span>Chủ tài khoản: 0421000489899</span>
                                    <span>Chi nhánh: Hùng Vương (quận 10)</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <h5 class="title_modal">
                            <strong>bước 2: </strong>yêu cầu xác nhận</h5>
                        <span>Sau khi chuyển khoản vui lòng gửi xác nhận qua email <strong>
                                        dailyyoga@gmail.com</strong> <i>(với nội dung Tên người gửi tiền: Nguyễn Văn A, email: XXX.XXX)</i></span>
                        <!-- <div class="information"> -->
                        <!-- <p> -->
                        <!-- <br /> -->
                        <!-- </p> -->
                        <!-- </div> -->
                        <h5 class="title_modal">
                            <strong>Bước 3: </strong>Xác nhận link refresh tài khoản qua email</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
@endsection

@section('js')
    <!-- COMMON SCRIPTS -->
    <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/common_scripts_min.js') }}"></script>
    <script src="{{ asset('assets/validate.js') }}"></script>
    <script src="{{ asset('js/functions.js') }}"></script>
@endsection
