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
                        <h1 style="color:#fff">Our Vision</h1>
                        <p>Inside took wow less pounded massive melodiously the.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-section m-10" style="height:550px; overflow:hidden; margin-left:50px; margin-bottom:30px; ">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="img-frame"> <img src="{{ static_asset('assets/assets_web/extra-images/gallery-img-1.jpg') }}"
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
                <div class="light_box" style="width:56%; padding-top:px; "> <strong class="btn-top">हमारा विजन</strong>
                    <h4>मानव विकास कन्या जन्मदिन योजना को 15 जुलाई 2024 को एक सार्वजनिक मानव विकास एवं समाज कल्याण ट्रस्ट द्वारा लांच किया गया है। इस योजना के अंतर्गत कन्याओं को शिक्षा, स्वास्थ्य और कर्मचारि विकास की प्रोत्साहन दी जाती है। प्रत्येक कन्या के बैंक खाते में 21000 से अधिक जमा राशि जमा की जाती है।</h4>
                    <p>गरीब परिवार व माता-पिता के लिए कल्याणकारी योजना चलाई गई है। इस मानव विकास कन्या जन्मदिन योजना आवेदन करने के जन्मदिन के अवसर पर रजिस्ट्रेशन शुल्क 1100 रुपये जमा करने के बाद से जमा करती है। जब कन्या 21 की हो जाती है तो उसके खाते में उनके कैपिटली को ऐसा उनके बैंक अकाउंट में जमा कर दिया जाता है।</p>
                    <a class="cs-join-us" href="{{ url('donation') }}" style="padding:12px 23px;">Donate Now</a>
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
