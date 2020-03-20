@extends('layouts.app')

@section('content')

    <!-- SubHeader =============================================== -->
    <section class="parallax_window_in" data-parallax="scroll" data-image-src="img/sub_header_general.jpg" data-natural-width="1400" data-natural-height="470">
        <div id="sub_content_in">
            <h1>Pricing tables</h1>
            <p>"Usu habeo equidem sanctus no ex melius labitur conceptam eos"</p>
        </div>
    </section>
    <!-- End section -->
    <!-- End SubHeader ============================================ -->

    <div class="container margin_60_35">

        <div class="row text-center plans">

            <div class="plan col-md-4">
                <h2 class="plan-title">Course</h2>
                <p class="plan-price">$99<span>/00</span>
                </p>
                <ul class="plan-features">
                    <li><strong>Check and go</strong> included</li>
                    <li><strong>3 sessions</strong> per week</li>
                    <li><strong>6 months</strong> valid</li>
                </ul>
                <p class=" col-md-8 col-md-offset-2 text-center"><a href="subscribe-working.html" class=" btn_full">Subscribe now</a>
                </p>
            </div>
            <!-- End col-md-4 -->

            <div class="plan plan-tall col-md-4">
                <span class="ribbon-2"></span>
                <h2 class="plan-title">Course + Personal Teacher</h2>
                <p class="plan-price">$199<span>/00</span>
                </p>
                <ul class="plan-features">
                    <li><strong>30 Day money back</strong> guarantee</li>
                    <li><strong>Check and go</strong> included</li>
                    <li><strong>3 sessions</strong> per week</li>
                    <li><strong>6 months</strong> valid</li>
                </ul>
                <p class=" col-md-8 col-md-offset-2 text-center"><a href="subscribe-working.html" class="btn_full">Subscribe now</a>
                </p>
            </div>
            <!-- End col-md-4 -->

            <div class="plan col-md-4">
                <h2 class="plan-title">Course + Extra Content</h2>
                <p class="plan-price">$299<span>/00</span>
                </p>
                <ul class="plan-features">
                    <li><strong>30 Day money back</strong> guarantee</li>
                    <li><strong>Check and go</strong> included</li>
                    <li><strong>3 sessions</strong> per week</li>
                    <li><strong>6 months</strong> valid</li>
                </ul>
                <p class=" col-md-8 col-md-offset-2 text-center"><a href="subscribe-working.html" class="btn_full">Subscribe now</a>
                </p>
            </div>
            <!-- End col-md-4 -->

        </div>
        <!-- End row plans-->

        <hr>

        <div class="row">
            <div class="col-md-12">
                <h3>Membership FAQ</h3>
            </div>
        </div>
        <!-- end row -->

        <div class="row">

            <div class="col-md-4">
                <div class="question_box">
                    <h3>No sit debitis meliore postulant, per ex prompta alterum sanctus?</h3>
                    <p>
                        Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="question_box">
                    <h3>Autem putent singulis usu ea, bonorum suscipit eum?</h3>
                    <p>
                        Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="question_box">
                    <h3>Pro moderatius philosophia ad, ad mea mupercipitur?</h3>
                    <p>
                        Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.
                    </p>
                </div>
            </div>

        </div>
        <!-- end row -->
    </div>
    <!-- End container-->
@endsection

@section('js')
    <!-- COMMON SCRIPTS -->
    <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/common_scripts_min.js') }}"></script>
    <script src="{{ asset('assets/validate.js') }}"></script>
    <script src="{{ asset('js/functions.js') }}"></script>
@endsection
