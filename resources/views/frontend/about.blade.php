@extends('frontend.layouts.master')
@section('title')
    @if ($page)
        {{ $page->meta_title }}
    @endif
@endsection

@section('meta_tags')
    @if ($page)
        <meta name="title" content="{{ $page->meta_title }}">
        <meta name="keywords" content="{{ $page->meta_tag }}">
        <meta name="description" content="{{ $page->meta_description }}">
    @endif
@endsection

@section('content')

<main id="main">
    <div class="page-section" style=" margin-bottom:30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="cs-video">
                        <iframe style="width: 100%; border: 0; height: 492px;"
                            src="https://player.vimeo.com/video/25924530?portrait=0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                            <figure> <img src="assets/extra-images/news1.jpg" alt="#">
                                <figcaption> <a href="#"></a> </figcaption>
                            </figure>
                        </div>
                        <div class="cs-text">
                            <h5><a href="#">Non porta sapien rhoncus ullamcorper quisque</a></h5>
                            <p>Deceivingly dear one nutria badly instead antelope grizzly poured emptied
                                imprecisely darn smelled armadillo drank along a so deceivingly dear one nutria
                                badly .</p>
                            <a href="#" class="btn-readmore"><span>Read More</span><i
                                    class="icon-arrow-right9"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="cs-news simple">
                        <div class="cs-media">
                            <figure> <img src="assets/extra-images/about-us2.jpg" alt="#">
                                <figcaption> <a href="#"></a> </figcaption>
                            </figure>
                        </div>
                        <div class="cs-text">
                            <h5><a href="#">Non porta sapien rhoncus ullamcorper quisque</a></h5>
                            <p>Deceivingly dear one nutria badly instead antelope grizzly poured emptied
                                imprecisely darn smelled armadillo drank along a so deceivingly dear one nutria
                                badly .</p>
                            <a href="#" class="btn-readmore"><span>Read More</span><i
                                    class="icon-arrow-right9"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="cs-news simple">
                        <div class="cs-media">
                            <figure> <img src="assets/extra-images/aboutus3.jpg" alt="#">
                                <figcaption> <a href="#"></a> </figcaption>
                            </figure>
                        </div>
                        <div class="cs-text">
                            <h5><a href="#">Non porta sapien rhoncus ullamcorper quisque</a></h5>
                            <p>Deceivingly dear one nutria badly instead antelope grizzly poured emptied
                                imprecisely darn smelled armadillo drank along a so deceivingly dear one nutria
                                badly .</p>
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
                    <div class="cs-separator" style="margin-bottom:30px;"> <span><i
                                class="icon-plus4"></i></span> </div>
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
                            <figure> <img src="assets/extra-images/team-img1.jpg" alt="#">
                                <figcaption> </figcaption>
                            </figure>
                        </div>
                        <div class="cs-text">
                            <div class="cs-member-detail">
                                <h5>JOHN DOE</h5>
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
                            <figure> <img src="assets/extra-images/team-img2.jpg" alt="#">
                                <figcaption> </figcaption>
                            </figure>
                        </div>
                        <div class="cs-text">
                            <div class="cs-member-detail">
                                <h5>NICK DOW</h5>
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
                            <figure> <img src="assets/extra-images/team-img3.jpg" alt="#">
                                <figcaption> </figcaption>
                            </figure>
                        </div>
                        <div class="cs-text">
                            <div class="cs-member-detail">
                                <h5>James Anderson</h5>
                                <p>Finanace Department</p>
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
                            <figure> <img src="assets/extra-images/team-img4.jpg" alt="#">
                                <figcaption> </figcaption>
                            </figure>
                        </div>
                        <div class="cs-text">
                            <div class="cs-member-detail">
                                <h5>James Anderson</h5>
                                <p>Finanace Department</p>
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
                                <div class="cs-text"> <strong class="counter-small">33,874</strong>
                                    <p>water projects funded</p>
                                </div>
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="cs-media">
                                    <figure> <i class="icon-graduation"></i> </figure>
                                </div>
                                <div class="cs-text"> <strong class="counter-small">1,055,000</strong>
                                    <p>people will get clean water</p>
                                </div>
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="cs-media">
                                    <figure> <i class="icon-group"></i> </figure>
                                </div>
                                <div class="cs-text"> <strong class="counter-small">23,457</strong>
                                    <p>local partners</p>
                                </div>
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="cs-media">
                                    <figure> <i class="icon-institution"></i> </figure>
                                </div>
                                <div class="cs-text"> <strong class="counter-small">10,478</strong>
                                    <p>September 20, 2011</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-section"
        style="background-color:#e6e6e6; background-image:url(assets/extra-images/kids-bg.png); background-repeat:no-repeat; padding-bottom:75px;  background-position: 22% 0; margin-bottom:35px;">
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
    </div>
    <div class="page-section" style="margin-bottom:30px;">
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
                                    <figure> <img src="assets/extra-images/gallery-im-1.jpg" alt="#">
                                        <figcaption> <a href="assets/extra-images/gallery-im-1.jpg"
                                                data-lightbox="example-set"><i class="icon-plus4"></i></a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="cs-media">
                                    <figure> <img src="assets/extra-images/gallery-im-2.jpg" alt="#">
                                        <figcaption> <a href="assets/extra-images/gallery-im-2.jpg"
                                                data-lightbox="example-set"><i class="icon-plus4"></i></a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="cs-media">
                                    <figure> <img src="assets/extra-images/gallery-im-3.jpg" alt="#">
                                        <figcaption> <a href="assets/extra-images/gallery-im-3.jpg"
                                                data-lightbox="example-set"><i class="icon-plus4"></i></a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="cs-media">
                                    <figure> <img src="assets/extra-images/gallery-im-4.jpg" alt="#">
                                        <figcaption> <a href="assets/extra-images/gallery-im-4.jpg"
                                                data-lightbox="example-set"><i class="icon-plus4"></i></a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="cs-media">
                                    <figure> <img src="assets/extra-images/gallery-im-5.jpg" alt="#">
                                        <figcaption> <a href="assets/extra-images/gallery-im-5.jp"
                                                data-lightbox="example-set"><i class="icon-plus4"></i></a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="cs-media">
                                    <figure> <img src="assets/extra-images/gallery-im-6.jpg" alt="#">
                                        <figcaption> <a href="assets/extra-images/gallery-im-6.jpg"
                                                data-lightbox="example-set"><i class="icon-plus4"></i></a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="cs-media">
                                    <figure> <img src="assets/extra-images/gallery-im-7.jpg" alt="#">
                                        <figcaption> <a href="assets/extra-images/gallery-im-7.jpg"
                                                data-lightbox="example-set"><i class="icon-plus4"></i></a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="cs-media">
                                    <figure> <img src="assets/extra-images/gallery-im-8.jpg" alt="#">
                                        <figcaption> <a href="assets/extra-images/gallery-im-8.jpg"
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
    </div>
    <div class="page-section" style="margin-bottom:68px;">
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
                            <figure> <img src="assets/images/icon-quotes.jpg" alt="#"> </figure>
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
                            <figure> <img src="assets/images/icon-quotes.jpg" alt="#"> </figure>
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
    <div class="page-section" style="background:#00acee; padding:50px 0; margin-bottom:-30px;">
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
    </div>
</main>
    
@endsection
