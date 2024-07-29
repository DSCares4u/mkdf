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
    {{-- <div class="page-section">
        <ul class="main-slider" style=" object-fit: cover;">
            <li><img src="{{ static_asset('assets/assets_web/extra-images/nimg2.jpeg') }}" style=" width: 100%;height: 100%;object-fit: cover;" alt="#" /></li>
            <li><img src="{{ static_asset('assets/assets_web/extra-images/nimg3.jpeg') }}" style=" width: 100%;height: 100%;object-fit: cover;" alt="#"/></li>
            <li><img src="{{ static_asset('assets/assets_web/extra-images/nimg4.jpeg') }}" style=" width: 100%;height: 100%;object-fit: cover;" alt="#"/></li>
            <li><img src="{{ static_asset('assets/assets_web/extra-images/nimg11.jpeg') }}"style=" width: 100%;height: 100%;object-fit: cover;"  alt="#" /></li>
        </ul>
    </div> --}}
    <!-- Main Start -->

    <div class="page-section"
    style="background:url({{ static_asset('assets/assets_web/extra-images/contact-bg.jpg') }}) no-repeat 0 0 /cover; position: relative; padding-top:58px; padding-bottom:27px; margin-bottom:56px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="page-title" style="color:#fff;">
                    <h1 style="color:#fff">Who We Are</h1>
                    <p>Inside took wow less pounded massive melodiously the.</p>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <main class="main">
    <section id="about-contnet" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-text-image">
                        <p>मानव विकास कन्या जन्मदिन योजना को 15 जुलाई 2024 को एक सार्वजनिक मानव विकास एंड समाज कल्याण ट्रस्ट द्वारा लांच किया गया है।, इस योजना के अंतर्गत कन्या को शिक्षा, स्वास्थ्य और कर्ज मुक्ति विवाह में प्रोत्साहन दिया जाता है। 
                            इसके लिए उन्हें 21000 से 5 लाख तक की आर्थिक सहायता राशि दी जाती है। मानव विकास कन्या जन्मदिन योजना गरीबों की कई ज़रूरतों को एक साथ पूरा करती है, चैरिटेबल ट्रस्ट अपने समुदायों में कन्या जन्मदिन कार्यक्रमों का प्रबंधन करने के लिए व्यक्तियों की मानवीय क्षमता में निवेश करती है। समुदाय मानव विकास कन्या जन्मदिन योजना और दानदाताओं के साथ मिलकर कार्यक्रम तय करते हैं और उन्हें लागू करते हैं। मानव विकास कन्या जन्मदिन योजना भारत में एकीकृत विकास के भागीदारों और समर्थकों के रूप में दुनिया भर में संस्थानों, कॉर्पोरेट और व्यक्तियों को शामिल करती है।
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main> --}}
    
    <main id="main">
        <div class="page-section" style="margin-bottom:35px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="cs-section-title" style="margin-bottom:35px;">
                            <h2 style="text-align:center;">Our Recently Meetups</h2>
                            <p style="text-align:center;">Inside took wow less pounded massive melodiously the.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="cs-news simple">
                            <div class="cs-media">
                                <figure> <img src="{{ static_asset('assets/assets_web/extra-images/nimg10.jpeg') }}"
                                        alt="#">
                                    <figcaption> <a href="#"></a> </figcaption>
                                </figure>
                            </div>
                            <div class="cs-text">
                                <h5><a href="#">Our goal is to provide educational health to underprivileged children and women.</a></h5>
                                <p>Manav Sewa Health And Education Trust . shall continually attract, retain and develop a cadre of talented, committed professionals who come from all walks of like and backgrounds.</p>
                                <a href="#" class="btn-readmore"><span>Read More</span><i
                                        class="icon-arrow-right9"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="cs-news simple">
                            <div class="cs-media">
                                <figure> <img src="{{ static_asset('assets/assets_web/extra-images/nimg8.jpeg') }}"
                                        alt="#">
                                    <figcaption> <a href="#"></a> </figcaption>
                                </figure>
                            </div>
                            <div class="cs-text">
                                <h5><a href="#">Our goal is to provide educational health to underprivileged children and women.</a></h5>
                                <p>Manav Sewa Health And Education Trust . shall continually attract, retain and develop a cadre of talented, committed professionals who come from all walks of like and backgrounds.</p>
                                <a href="#" class="btn-readmore"><span>Read More</span><i
                                        class="icon-arrow-right9"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="cs-news simple">
                            <div class="cs-media">
                                <figure> <img src="{{ static_asset('assets/assets_web/extra-images/nimg6.jpeg') }}"
                                        alt="#">
                                    <figcaption> <a href="#"></a> </figcaption>
                                </figure>
                            </div>
                            <div class="cs-text">
                                <h5><a href="#">Our goal is to provide educational health to underprivileged children and women.</a></h5>
                                <p>Manav Sewa Health And Education Trust . shall continually attract, retain and develop a cadre of talented, committed professionals who come from all walks of like and backgrounds.</p>
                                <a href="#" class="btn-readmore"><span>Read More</span><i
                                        class="icon-arrow-right9"></i></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="page-section" style="margin-bottom:40px; padding-top:20px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="cs-separator" style="margin-bottom:30px;"> <span><i class="icon-plus4"></i></span>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="cs-section-title" style="margin-bottom:35px;">
                            <h2 style="text-align:center;">Most amazing team</h2>
                            <p style="text-align:center;">Inside took wow less pounded massive melodiously the.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="cs-team">
                            <div class="cs-media">
                                <figure> <img src="{{ static_asset('assets/assets_web/extra-images/team-img1.jpg') }}"
                                        alt="#">
                                    <figcaption> </figcaption>
                                </figure>
                            </div>
                            <div class="cs-text">
                                <div class="cs-member-detail">
                                    <h5>YOUR NAME</h5>
                                    <p>Project Incharge</p>
                                </div>
                                <ul class="team-socail-media">
                                    <li><a href="#"><i class="icon-facebook-square"></i></a>
                                    <li><a href="#"><i class="icon-twitter2"></i></a>
                                    <li><a href="#"><i class="icon-instagram"></i></a>
                                    <li><a href="#"><i class="icon-vk"></i></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="cs-team">
                            <div class="cs-media">
                                <figure> <img src="{{ static_asset('assets/assets_web/extra-images/team-img1.jpg') }}"
                                        alt="#">
                                    <figcaption> </figcaption>
                                </figure>
                            </div>
                            <div class="cs-text">
                                <div class="cs-member-detail">
                                    <h5>YOUR NAME</h5>
                                    <p>Project Incharge</p>
                                </div>
                                <ul class="team-socail-media">
                                    <li><a href="#"><i class="icon-facebook-square"></i></a>
                                    <li><a href="#"><i class="icon-twitter2"></i></a>
                                    <li><a href="#"><i class="icon-instagram"></i></a>
                                    <li><a href="#"><i class="icon-vk"></i></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="cs-team">
                            <div class="cs-media">
                                <figure> <img src="{{ static_asset('assets/assets_web/extra-images/team-img1.jpg') }}"
                                        alt="#">
                                    <figcaption> </figcaption>
                                </figure>
                            </div>
                            <div class="cs-text">
                                <div class="cs-member-detail">
                                    <h5>YOUR NAME</h5>
                                    <p>Project Incharge</p>
                                </div>
                                <ul class="team-socail-media">
                                    <li><a href="#"><i class="icon-facebook-square"></i></a>
                                    <li><a href="#"><i class="icon-twitter2"></i></a>
                                    <li><a href="#"><i class="icon-instagram"></i></a>
                                    <li><a href="#"><i class="icon-vk"></i></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="cs-team">
                            <div class="cs-media">
                                <figure> <img src="{{ static_asset('assets/assets_web/extra-images/team-img1.jpg') }}"
                                        alt="#">
                                    <figcaption> </figcaption>
                                </figure>
                            </div>
                            <div class="cs-text">
                                <div class="cs-member-detail">
                                    <h5>YOUR NAME</h5>
                                    <p>Project Incharge</p>
                                </div>
                                <ul class="team-socail-media">
                                    <li><a href="#"><i class="icon-facebook-square"></i></a>
                                    <li><a href="#"><i class="icon-twitter2"></i></a>
                                    <li><a href="#"><i class="icon-instagram"></i></a>
                                    <li><a href="#"><i class="icon-vk"></i></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-section" style="background:#f4f4f4; padding:60px 0 30px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="cs-section-title" style="margin-bottom:30px;">
                            <h2 style="text-align:center;">You can do good things to raise money</h2>
                            <p style="text-align:center;">Inside took wow less pounded massive melodiously the.</p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="cs-counter big cs-about-counter">
                            <ul class="row">
                                <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="cs-media">
                                        <figure> <i class="icon-droplet2"></i> </figure>
                                    </div>
                                    <div class="cs-text"> <strong class="counter-small">500</strong>
                                        <p>water projects funded</p>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="cs-media">
                                        <figure> <i class="icon-graduation"></i> </figure>
                                    </div>
                                    <div class="cs-text"> <strong class="counter-small">1,285</strong>
                                        <p>people will get clean water</p>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="cs-media">
                                        <figure> <i class="icon-group"></i> </figure>
                                    </div>
                                    <div class="cs-text"> <strong class="counter-small">625</strong>
                                        <p>local partners</p>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="cs-media">
                                        <figure> <i class="icon-institution"></i> </figure>
                                    </div>
                                    <div class="cs-text"> <strong class="counter-small">50,610</strong>
                                        <p>July 15, 2024</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="page-section"
            style="background-color:#e6e6e6; background-image:url({{ static_asset('assets/assets_web/extra-images/kids-bg.png') }}); background-repeat:no-repeat; padding-bottom:75px;  background-position: 22% 0; margin-bottom:35px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6"> </div>
                    <div class="col-lg-6">
                        <div class="about-tabs">
                            <div class="cs-tabs">
                                <ul class="nav nav-tabs nav-justified">
                                    <li class="active"><a data-toggle="tab" href="#home">01. Location Inspection</a>
                                    </li>
                                    <li><a data-toggle="tab" href="#menu1">02. Site Visit</a></li>
                                    <li><a data-toggle="tab" href="#menu2">03. Remodeling</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active"> <strong>Crud irrespective that
                                            this less mongoose industrious obdurately. Abandonedly tore a jeepers
                                            hence overrode preparatory far as up together squid rattlesnake far
                                            inside.</strong>
                                        <p>Crud irrespective that this less mongoose industrious obdurately.
                                            Abandonedly tore a jeepers hence overrode
                                            preparatory far as up together squid rattlesnake far inside
                                            concomitantly. Crud irrespective that this less
                                            mongoose industrious obdurately. Abandonedly tore a jeepers hence
                                            overrode preparatory far as up together squid rattlesnake far inside
                                            concomitantly.</p>
                                        <p>Crud irrespective that this less mongoose industrious obdurately.
                                            Abandonedly tore a jeepers hence overrode preparatory far as up together
                                            squid rattlesnake far inside concomitantly.</p>
                                    </div>
                                    <div id="menu1" class="tab-pane fade"> <strong>Crud irrespective that this less
                                            mongoose industrious obdurately. Abandonedly tore a jeepers hence
                                            overrode preparatory far as up together squid rattlesnake far
                                            inside.</strong>
                                        <p>Crud irrespective that this less mongoose industrious obdurately.
                                            Abandonedly tore a jeepers hence overrode
                                            preparatory far as up together squid rattlesnake far inside
                                            concomitantly. Crud irrespective that this less
                                            mongoose industrious obdurately. Abandonedly tore a jeepers hence
                                            overrode preparatory far as up together squid rattlesnake far inside
                                            concomitantly.</p>
                                        <p>Crud irrespective that this less mongoose industrious obdurately.
                                            Abandonedly tore a jeepers hence overrode preparatory far as up together
                                            squid rattlesnake far inside concomitantly.</p>
                                    </div>
                                    <div id="menu2" class="tab-pane fade"> <strong>Crud irrespective that this less
                                            mongoose industrious obdurately. Abandonedly tore a jeepers hence
                                            overrode preparatory far as up together squid rattlesnake far
                                            inside.</strong>
                                        <p>Crud irrespective that this less mongoose industrious obdurately.
                                            Abandonedly tore a jeepers hence overrode
                                            preparatory far as up together squid rattlesnake far inside
                                            concomitantly. Crud irrespective that this less
                                            mongoose industrious obdurately. Abandonedly tore a jeepers hence
                                            overrode preparatory far as up together squid rattlesnake far inside
                                            concomitantly.</p>
                                        <p>Crud irrespective that this less mongoose industrious obdurately.
                                            Abandonedly tore a jeepers hence overrode preparatory far as up together
                                            squid rattlesnake far inside concomitantly.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- <div class="page-section" style="margin-bottom:30px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="cs-section-title" style="margin-bottom:34px;">
                            <h2 style="text-align:center;">Our office, our Activities, our Love</h2>
                            <p style="text-align:center;">Inside took wow less pounded massive melodiously the.</p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="cs-gallery">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="cs-media">
                                        <figure> <img
                                                src="{{ static_asset('assets/assets_web/extra-images/gallery-im-1.jpg') }}"
                                                alt="#">
                                            <figcaption> <a
                                                    href="{{ static_asset('assets/assets_web/extra-images/gallery-im-1.jpg') }}"
                                                    data-lightbox="example-set"><i class="icon-plus4"></i></a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="cs-media">
                                        <figure> <img
                                                src="{{ static_asset('assets/assets_web/extra-images/gallery-im-2.jpg') }}"
                                                alt="#">
                                            <figcaption> <a
                                                    href="{{ static_asset('assets/assets_web/extra-images/gallery-im-2.jpg') }}"
                                                    data-lightbox="example-set"><i class="icon-plus4"></i></a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="cs-media">
                                        <figure> <img
                                                src="{{ static_asset('assets/assets_web/extra-images/gallery-im-3.jpg') }}"
                                                alt="#">
                                            <figcaption> <a
                                                    href="{{ static_asset('assets/assets_web/extra-images/gallery-im-3.jpg') }}"
                                                    data-lightbox="example-set"><i class="icon-plus4"></i></a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="cs-media">
                                        <figure> <img
                                                src="{{ static_asset('assets/assets_web/extra-images/gallery-im-4.jpg') }}"
                                                alt="#">
                                            <figcaption> <a
                                                    href="{{ static_asset('assets/assets_web/extra-images/gallery-im-4.jpg') }}"
                                                    data-lightbox="example-set"><i class="icon-plus4"></i></a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="cs-media">
                                        <figure> <img
                                                src="{{ static_asset('assets/assets_web/extra-images/gallery-im-5.jpg') }}"
                                                alt="#">
                                            <figcaption> <a
                                                    href="{{ static_asset('assets/assets_web/extra-images/gallery-im-5.jpg') }}"
                                                    data-lightbox="example-set"><i class="icon-plus4"></i></a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="cs-media">
                                        <figure> <img
                                                src="{{ static_asset('assets/assets_web/extra-images/gallery-im-6.jpg') }}"
                                                alt="#">
                                            <figcaption> <a
                                                    href="{{ static_asset('assets/assets_web/extra-images/gallery-im-6.jpg') }}"
                                                    data-lightbox="example-set"><i class="icon-plus4"></i></a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="cs-media">
                                        <figure> <img
                                                src="{{ static_asset('assets/assets_web/extra-images/gallery-im-7.jpg') }}"
                                                alt="#">
                                            <figcaption> <a
                                                    href="{{ static_asset('assets/assets_web/extra-images/gallery-im-7.jpg') }}"
                                                    data-lightbox="example-set"><i class="icon-plus4"></i></a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="cs-media">
                                        <figure> <img
                                                src="{{ static_asset('assets/assets_web/extra-images/gallery-im-8.jpg') }}"
                                                alt="#">
                                            <figcaption> <a
                                                    href="{{ static_asset('assets/assets_web/extra-images/gallery-im-8.jpg') }}"
                                                    data-lightbox="example-set"><i class="icon-plus4"></i></a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div style="margin-bottom:30px; margin-top:30px;" class="cs-separator"> <span><i
                                    class="icon-plus4"></i></span> </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="page-section" style="margin-bottom:68px; margin-top:30px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="cs-section-title" style="margin-bottom:40px;">
                            <h2 style="text-align:center;">You can do good things to raise money</h2>
                            <p style="text-align:center;">Inside took wow less pounded massive melodiously the.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="cs-testemonials">
                            <div class="cs-media">
                                <figure> <img src="{{ static_asset('assets/assets_web/images/icon-quotes.jpg') }}"
                                        alt="#"> </figure>
                            </div>
                            <div class="cs-text">
                                <h5>James Warson</h5>
                                <p>And oh the guinea owing erroneously furtively far the festive more and so this
                                    alas during therefore far one honorable less and imitative less let deliberately
                                    some darn much that the far set celestially thought gosh rolled remarkable cagy
                                    outdid besides alas kookaburra flexibly violently along yet inventoried far
                                    gulped
                                    black and and returned sensationally well affirmative.</p>
                                <span>Newyork</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="cs-testemonials">
                            <div class="cs-media">
                                <figure> <img src="{{ static_asset('assets/assets_web/images/icon-quotes.jpg') }}"
                                        alt="#"> </figure>
                            </div>
                            <div class="cs-text">
                                <h5>James Warson</h5>
                                <p>And oh the guinea owing erroneously furtively far the festive more and so this
                                    alas during therefore far one honorable less and imitative less let deliberately
                                    some darn much that the far set celestially thought gosh rolled remarkable cagy
                                    outdid besides alas kookaburra flexibly violently along yet inventoried far
                                    gulped
                                    black and and returned sensationally well affirmative.</p>
                                <span>Washington</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-section" style="border-top:1px solid #e9e9e9;padding-top:40px;padding-bottom:30px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="cs-service">
                            <div class="cs-media"> <i class="icon-droplet2"></i> </div>
                            <div class="cs-text">
                                <h4>How to Contact</h4>
                                <p>Grizzly poured emptied imprecisely darn smelled armadillo drank along a so
                                    deceivingly dear one nutria badly .</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="cs-service">
                            <div class="cs-media"> <i class="icon-graduation"></i> </div>
                            <div class="cs-text">
                                <h4>How to Contact</h4>
                                <p>Grizzly poured emptied imprecisely darn smelled armadillo drank along a so
                                    deceivingly dear one nutria badly .</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="cs-service">
                            <div class="cs-media"> <i class="icon-group"></i> </div>
                            <div class="cs-text">
                                <h4>How to Contact</h4>
                                <p>Grizzly poured emptied imprecisely darn smelled armadillo drank along a so
                                    deceivingly dear one nutria badly .</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="cs-service no-border">
                            <div class="cs-media"> <i class="icon-institution"></i> </div>
                            <div class="cs-text">
                                <h4>How to Contact</h4>
                                <p>Grizzly poured emptied imprecisely darn smelled armadillo drank along a so
                                    deceivingly dear one nutria badly .</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="page-section" style="background:#00acee; padding:50px 0; margin-bottom:-30px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul class="cs-tweets-slider">
                            <li>
                                <div class="cs-tweet-slider">
                                    <div class="cs-media">
                                        <figure><i class="icon-twitter2"></i></figure>
                                    </div>
                                    <div class="cs-text">
                                        <p>Emergency room visits won't break your bank account-they're now covered
                                            in all insurance plans. Check it out: <a href="#">http://ofa.bo/bn</a>
                                        </p>
                                        <span><a href="#">@theLandlords</a></span> <span>4 Hours Ago</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="cs-tweet-slider">
                                    <div class="cs-media">
                                        <figure><i class="icon-twitter2"></i></figure>
                                    </div>
                                    <div class="cs-text">
                                        <p>Emergency room visits won't break your bank account-they're now covered
                                            in all insurance plans. Check it out: <a href="#">http://ofa.bo/bn</a>
                                        </p>
                                        <span><a href="#">@theLandlords</a></span> <span>4 Hours Ago</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}
    </main>

@endsection
