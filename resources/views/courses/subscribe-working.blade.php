@extends('layouts.app')

@section('content')

    <!-- SubHeader =============================================== -->
    <section class="parallax_window_in" data-parallax="scroll" data-image-src="{{asset('img/beach-yoga.jpg')}}" data-natural-width="1400" data-natural-height="470">
        <div id="sub_content_in">
            <h1>Subscribe a Plan</h1>
            <p>"Usu habeo equidem sanctus no ex melius labitur conceptam eos"</p>
        </div>
    </section>
    <!-- End section -->
    <!-- End SubHeader ============================================ -->

    <div class="container margin_60_35">
        <div class="row">
            <form method="post" action="assets/subscribe_plan.php" id="subscribe-plan">
                <div class="col-md-8">
                    <div class="box_style_general">
                        <div class="form_title">
                            <h3><strong>1</strong>Your Details</h3>
                            <p>
                                Mussum ipsum cacilds, vidis litro abertis.
                            </p>
                        </div>
                        <div class="step">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>First name:</label>
                                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Jhon">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Last name</label>
                                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Doe">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="jhon@email.com">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Telephone</label>
                                        <input type="text" id="phone" name="phone" class="form-control" placeholder="00 44 4033444">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End step -->
                        <div class="form_title">
                            <h3><strong>2</strong>Choose a plan</h3>
                            <p>
                                Mussum ipsum cacilds, vidis litro abertis.
                            </p>
                        </div>
                        <div class="step">
                            <div class="styled-select">
                                <select class="form-control" name="plan" id="plan">
                                    <option value="">Select</option>
                                    <option value="6 Months pla">6 Months plan $39</option>
                                    <option value="3 Months plan">3 Months plan $15</option>
                                    <option value="1 Month plan">1 Month plan $10</option>
                                </select>
                            </div>
                        </div>
                        <!--End step -->
                        <div class="form_title">
                            <h3><strong>3</strong>Payment info</h3>
                            <p>
                                Mussum ipsum cacilds, vidis litro abertis.
                            </p>
                        </div>
                        <div class="step">
                            <div class="styled-select">
                                <select class="form-control" name="payment_mode" id="payment_mode">
                                    <option value="">Select</option>
                                    <option value="Credit card">Credit card</option>
                                    <option value="Paypal">Paypal</option>
                                    <option value="Cash">Cash</option>
                                </select>
                            </div>
                        </div>
                        <!--End step -->
                        <div class="form_title">
                            <h3><strong>4</strong>Security question</h3>
                            <p>
                                Mussum ipsum cacilds, vidis litro abertis.
                            </p>
                        </div>
                        <div class="step add_bottom_30">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Are you human?3 + 1 =</label>
                                        <input type="text" id="verify_plan" name="verify_plan" class="form-control" placeholder="3 + 1 =">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--End step -->
                    </div>

                </div>
                <aside class="col-md-4" id="sidebar">
                    <div class="theiaStickySidebar">
                        <div class="box_style_2">
                            <div id="total_cart">
                                TOTAL <span class="pull-right">69.00$</span>
                            </div>
                            <div style=" font-size:13px">Lorem ipsum dolor sit amet, sed vide <strong>moderatius</strong> ad. Ex eius soleat sanctus pro, enim conceptam in quo, <a href="#0">brute convenire</a> appellantur an mei.</div>
                            <div id="message-subscribe"></div>
                            <hr>
                            <button id="submit-plan" class="btn_full">Submit</button>
                            <a href="explore-1.html" class="btn_outline"><i class="icon-right"></i> Continue shopping</a>
                        </div>
                        <div class="box_style_4">
                            <i class="icon_lifesaver"></i>
                            <h4>Need <span>Help?</span></h4>
                            <a href="tel://004542344599" class="phone">+45 423 445 99</a>
                            <small>Monday to Friday 9.00am - 7.30pm</small>
                        </div>
                    </div>
                </aside>
            </form>
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
