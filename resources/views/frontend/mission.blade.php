@extends('frontend.layouts.master')
@section('title')
    {{-- @if ($page)
        {{ $page->meta_title }}
    @endif --}}
@endsection

@section('meta_tags')
    {{-- @if ($page)
        <meta name="title" content="{{ $page->meta_title }}">
        <meta name="keywords" content="{{ $page->meta_tag }}">
        <meta name="description" content="{{ $page->meta_description }}">
    @endif --}}
@endsection

@section('content')
    <div class="page-section"
        style="background:url({{ static_asset('assets/assets_web/extra-images/contact-bg.jpg') }}) no-repeat 0 0 /cover; position: relative; padding-top:58px; padding-bottom:27px; margin-bottom:56px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-title" style="color:#fff;">
                        <h1 style="color:#fff">Our Mission</h1>
                        <p>Inside took wow less pounded massive melodiously the.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-section m-10" style="height:400px; overflow:hidden; margin-left:50px; margin-bottom:30px; ">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="img-frame"> <img src="{{ static_asset('assets/assets_web/extra-images/banner-img-10.jpg') }}"
                        alt="#" />
                    <div class="cs-caption">
                        <h5><span>Basic Need</span></h5>
                        <h2><span>Clean Water</span></h2>
                        <h2><span>Education</span></h2>
                        <h2><span>Health</span></h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="light_box" style="width:70%;"> <strong class="btn-top ">हमारा मिशन</strong>
                    <h4 class="mb-8 mt-5">मानव बस्तियों में न्यायसंगत और समृद्ध जीवन हेतु विशेष पहल</h4>
                    <p>मानव बस्तियों को न्यायसंगत रहने का वातावरण बनाना, जहाँ सभी निवासियों और कमजोर लोगों को उनकी आर्थिक और सामाजिक स्थिति के बावजूद करना।
                        कन्या के जन्मदिन पर एक पेड़ लगवाना और सरकार द्वारा उच्च शिक्षा के लिए जो प्रोत्साहन राशि दिया जाता है उस राशि से कन्या को उच्च शिक्षा में उपयोग करवाना। इस योजना के अंतर्गत कन्या को कर्जमुक्त विवाह में प्रोत्साहन दिया जाता है ।
                        जो माता-पिता आर्थिक रूप से बहुत कमजोर है उनके लिए यह योजना बहुत फायदेमंद साबित हो रही है।</p>
                    <a class="cs-join-us" href="{{ url('donation-page') }}" style="padding:12px 23px;">Donate Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-section" style="margin-bottom:40px; margin-top:80px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="cs-section-title" style="margin-bottom:33px;">
                        <h2 style="text-align:center;">You can do good things to raise money</h2>
                        <p style="text-align:center;">Inside took wow less pounded massive melodiously the.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="cs-services bottom right" style="text-align:center;">
                        <div class="cs-media">
                            <figure> <img src="{{ static_asset('assets/assets_web/extra-images/service-img-1.png') }}"
                                    alt="#" /> <i class="icon-mortar-board"></i> </figure>
                        </div>
                        <div class="cs-text">
                            <h4><a href="#">Education for all</a></h4>
                            <p>Honestly following this much indiscree
                                moth surely this militant. melodiously the.
                                Inside took wow less.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="cs-services top right" style="text-align:center;">
                        <div class="cs-media">
                            <figure> <img src="{{ static_asset('assets/assets_web/extra-images/service-img-2.png') }}"
                                    alt="#" /> <i class="icon-mortar-board"></i> </figure>
                        </div>
                        <div class="cs-text">
                            <h4><a href="#">Buy Food</a></h4>
                            <p>Inside took wow less pounded
                                be the massive melodiously the.
                                Inside took wow less.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="cs-services bottom left" style="text-align:center;">
                        <div class="cs-media">
                            <figure> <img src="{{ static_asset('assets/assets_web/extra-images/service-img-3.png') }}"
                                    alt="#" /> <i class="icon-droplet2"></i> </figure>
                        </div>
                        <div class="cs-text">
                            <h4><a href="#">We Care</a></h4>
                            <p>Pesky honestly following this much
                                indiscreetly moth surely this. melodiously
                                Inside took wow less.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="cs-services bottom right" style="text-align:center;">
                        <div class="cs-media">
                            <figure> <img src="{{ static_asset('assets/assets_web/extra-images/service-img-4.png') }}"
                                    alt="#" /> <i class="icon-institution"></i> </figure>
                        </div>
                        <div class="cs-text">
                            <h4><a href="#">Health</a></h4>
                            <p>Hummingbird timorously inside took
                                pounded massive. melodiously the.
                                Inside took wow less.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
