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

	<style>
		.cs-donation-section {
			background-color: #f9f9f9;
			border-radius: 10px;
			padding: 20px;
			text-align: center;
			display: flex;
			align-items: center;
			justify-content: center;
			height: 100%;
		}
		.cs-donation-section h4, .cs-donation-section h2 {
			margin: 0;
			padding: 10px 0;
			width: 100%;
		}

        .page-section {
            background: url('{{ static_asset("assets/assets_web/extra-images/bg-money-option.jpg") }}') no-repeat center center;
            background-size: cover;
            padding-bottom: 50px;
            margin-top: 60px;
            margin-bottom: 59px;
        }

        .cs-donation-section h4 {
            color: #ff6347; /* Tomato */
            font-size: 36px;
            font-weight: bold;
        }

        .cs-donation-section h2 {
            color: #1e90ff; /* DodgerBlue */
            font-size: 48px;
            font-weight: bold;
        }

        .cs-money-option {
            list-style: none;
            padding: 0;
            margin-top: 30px;
        }


        .cs-money-option li span {
            display: block;
            font-size: 24px;
            font-weight: bold;
            color: #1e90ff; /* DodgerBlue */
        }

        .cs-money-option li p {
            font-size: 16px;
            color: #333;
        }

        @media (max-width: 768px) {
            .cs-donation-section h4 {
                font-size: 28px;
            }

            .cs-donation-section h2 {
                font-size: 36px;
            }

            .cs-money-option li {
                margin-bottom: 15px;
            }
        }
        
	</style>
@endsection

@section('content')
    <div class="page-section">
        <ul class="main-slider">
            <li><img src="{{ static_asset('assets/assets_web/extra-images/nimg17.jpeg') }}" alt="#" style=" width: 100%;height: 100%;object-fit: cover;object-position: center; display: block;" /></li>
            <li><img src="{{ static_asset('assets/assets_web/extra-images/nimg18.jpeg') }}" style=" width: 100%;height: 100%;object-fit: cover;object-position: center; display: block;"alt="#" /></li>
            <li><img src="{{ static_asset('assets/assets_web/extra-images/nimg12.jpeg') }}" style=" width: 100%;height: 100%;object-fit: cover;object-position: center; display: block;" alt="#" /></li>
            <li><img src="{{ static_asset('assets/assets_web/extra-images/nimg16.jpeg') }}" style=" width: 100%;height: 100%;object-fit: cover;object-position: center; display: block;" alt="#" /></li>
            <li><img src="{{ static_asset('assets/assets_web/extra-images/nimg21.jpeg') }}" style=" width: 100%;height: 100%;object-fit: cover;object-position: center; display: block;" alt="#" /></li>
        </ul>
    </div>
    <!--Full width header End-->
    <main id="main">
        <div class="main-section">
            <div class="page-section">
                <div class="container">
                    <div class="dontaion-holder">
                        <div class="row">
                            <div class="col-12">
                                <div class="cs-donation-section cs-index text-center d-flex align-items-center justify-content-center"  style="background-color: red;">
                                    <div class="w-100">
                                        <h4 style="margin-bottom:0px; line-height: 1.4;color: yellow;font-size: 23px;text-shadow: 4px 4px #000;">मानव विकास कन्या जन्मदिन योजना</h4>
                                        <h2 style="color:#fff;font-weight:900;text-shadow:4px 4px #000;">दान से अनुदान तक</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="cs-money-option row">
                            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <h3><a href="#">You have 3 Options to raise money</a></h3>
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <span><em>STEP</em>01</span>
                                <p>Make a donation Now</p>
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <span><em>STEP</em>02</span>
                                <p>Become Volunteer</p>
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <span><em>STEP</em>03</span>
                                <p>Donate on Birthday</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="page-section" style="margin-bottom:25px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="cs-section-title" style="margin-bottom:33px;">
                                <h2 style="text-align:center;">Vision Highlights</h2>
                                <p style="text-align:center;">Inside took wow less pounded massive melodiously the.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="cs-img-frame">
                                <div class="cs-media">
                                    <figure> <img src="{{ static_asset('assets/assets_web/extra-images/nimg22.jpeg') }} " style="height: 24vh; width:100%"
                                            alt="#" />
                                        <figcaption></figcaption>
                                    </figure>
                                    <div class="cs-caption"> <strong>Education</strong> <a href="#">2 Successfull Projects</a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="cs-img-frame">
                                <div class="cs-media">
                                    <figure> <img src="{{ static_asset('assets/assets_web/extra-images/nimg6.jpeg') }}"  style="height: 24vh; width:100%"
                                            alt="#" />
                                        <figcaption></figcaption>
                                    </figure>
                                    <div class="cs-caption"> <strong>Health</strong> <a href="#">3 Successfull
                                            Projects</a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="cs-img-frame">
                                <div class="cs-media">
                                    <figure> <img src="{{ static_asset('assets/assets_web/extra-images/nimg9.jpeg') }}" style="height: 24vh; width:100%"
                                            alt="#" />
											<figcaption></figcaption>
										</figure>
                                    <div class="cs-caption"> <strong>Government Scheme Guidance</strong> 
                                        <a href="#">12 Successfull
                                            Projects</a> 
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="cs-img-frame">
                                <div class="cs-media">
                                    <figure> <img src="{{ static_asset('assets/assets_web/extra-images/nimg23.jpeg') }}" style="height: 24vh; width:100%"
                                            alt="#" />
											<figcaption></figcaption>
										</figure>
                                    <div class="cs-caption"> <strong>Environment</strong> <a href="#">12 Successfull
                                            Projects</a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="cs-img-frame">
                                <div class="cs-media">
                                    <figure> <img src="{{ static_asset('assets/assets_web/extra-images/nimg5.jpeg') }}" style="height: 24vh; width:100%"
                                            alt="#" />
											<figcaption></figcaption>
										</figure>
                                    <div class="cs-caption"> <strong>Help Program</strong> <a href="#">12 Successfull
                                            Projects</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-section" style="margin-bottom:40px;">
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
                                    <figure> <img
                                            src="{{ static_asset('assets/assets_web/extra-images/service-img-3.png') }}"
                                            alt="#" /> <i class="icon-mortar-board"></i> </figure>
                                </div>
                                <div class="cs-text">
                                    <h4><a href="#">Girl Birthday</a></h4>
                                    <p>Celebrating a birthday within an NGO can be a meaningful event, especially if it's for a beneficiary, volunteer, or staff member.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-services top right" style="text-align:center;">
                                <div class="cs-media">
                                    <figure> <img
                                            src="{{ static_asset('assets/assets_web/extra-images/service-img-1.png') }}"
                                            alt="#" /> <i class="icon-mortar-board"></i> </figure>
                                </div>
                                <div class="cs-text">
                                    <h4><a href="#">Education For All</a></h4>
                                    <p>NGOs focused on education play a vital role in promoting and improving access to quality education, especially in underserved and marginalized communities. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-services bottom left" style="text-align:center;">
                                <div class="cs-media">
                                    <figure> <img src="{{ static_asset('assets/assets_web/extra-images/service-img-2.png') }}" alt="#" /> <i class="icon-droplet2"></i> </figure>
                                </div>
                                <div class="cs-text">
                                    <h4><a href="#">We Care</a></h4>
                                    <p>Provides scholarships to deserving students from underprivileged backgrounds to pursue their education without financial barriers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-services bottom right" style="text-align:center;">
                                <div class="cs-media">
                                    <figure> <img
                                            src="{{ static_asset('assets/assets_web/extra-images/service-img-4.png') }}"
                                            alt="#" /> <i class="icon-institution"></i> </figure>
                                </div>
                                <div class="cs-text">
                                    <h4><a href="#">Relationship</a></h4>
                                    <p>Focuses on improving overall health through regular medical camps, nutrition workshops, and health education programs.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="page-section" style="height:462px; overflow:hidden; margin-bottom:30px;">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="img-frame"> <img
                                src="{{ static_asset('assets/assets_web/extra-images/side-img-1.jpg') }}"
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
                        <div class="light_box" style="width:56%; padding-top:30px;"> <strong class="btn-top">The
                                Mission</strong>
                            <h4>Bless others with your donation. Our mission is to empower
                                underserved communities to graduate from college.</h4>
                            <p>ull far oyster parrot more far far much and less that lion along a so deceivingly dear one
                                nutria badly instead antelope grizzly poured emptied imprecisely darn before. Because this
                                redoubtable split smelled armadillo drank jeepers one strewed.</p>
                            <p>Over alas unobtrusively hatchet fit and since spontaneous tentative crud more less
                                desperately depending glanced bland one halfhearted crane and sensibly assiduously
                                unequivocally neglectful since persistent winced far much as conjoint during unwound
                                telepathic thought and alas harmful more and and less hey owing.</p>
                            <a class="cs-join-us" href="#" style="padding:12px 23px;">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="page-section" style="margin-bottom:30px;">
                <div class="container">
                    <div class="cs-news cs-fancy">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="cs-section-title" style="margin-bottom:25px;">
                                    <h2>latest News</h2>
                                    <p style="text-align:left;">Inside took wow less pounded massive melodiously the.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="cs-news-item">
                                    <div class="cs-media">
                                        <figure> <img
                                                src="{{ static_asset('assets/assets_web/extra-images/news-img-1.jpg') }}"
                                                alt="#" /> </figure>
                                        <span class="cs-date">January 25, 2024</span>
                                        <div class="cs-caption"> <span style="background:#f44953;">CAMPAIGN UPDATE</span>
                                        </div>
                                    </div>
                                    <div class="cs-text">
                                        <h5>Non porta sapien rhoncus ullamcorper quisque</h5>
                                        <p>Deceivingly dear one nutria badly instead antelope grizzly poured emptied
                                            imprecisely darn smelled armadillo drank along a so deceivingly dear one nutria
                                            badly .</p>
                                        <a href="#" class="btn-readmore"><span>Read More</span><i
                                                class="icon-arrow-right9"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="cs-news-item">
                                    <div class="cs-media">
                                        <figure> <img
                                                src="{{ static_asset('assets/assets_web/extra-images/news-img-2.jpg') }}"
                                                alt="#" /> </figure>
                                        <span class="cs-date">July 15, 2024</span>
                                        <div class="cs-caption"> <span style="background:#3bc7e8;">Awearness</span> </div>
                                    </div>
                                    <div class="cs-text">
                                        <h5>Bought yet far magnificent <br />
                                            one secure bandicoot spelled </h5>
                                        <p>Dear one nutria badly instead antelope grizzly poured emptied imprecisely darn
                                            smelled armadillo drank . ull far along a so deceivingly dear one nutria badly .
                                        </p>
                                        <a href="#" class="btn-readmore"><span>Read More</span><i
                                                class="icon-arrow-right9"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="cs-news-item">
                                    <div class="cs-media">
                                        <figure> <img
                                                src="{{ static_asset('assets/assets_web/extra-images/news-img-3.jpg') }}"
                                                alt="#" /> </figure>
                                        <span class="cs-date">July 15, 2024</span>
                                        <div class="cs-caption"> <span style="background:#6aac6e;">Nature</span> </div>
                                    </div>
                                    <div class="cs-text">
                                        <h5>formidable from ladybug</h5>
                                        <p>Along a so deceivingly dear one nutria badly instead antelope grizzly poured
                                            emptied imprecisely darn smelled armadillo drank . ull far along a so
                                            deceivingly dear one nutria badly .</p>
                                        <a href="#" class="btn-readmore"><span>Read More</span><i
                                                class="icon-arrow-right9"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="page-section"
                style=" background:url({{ static_asset('assets/assets_web/extra-images/testimonial-bg.jpg') }}) no-repeat 0 0 /cover; padding:62px 0; margin-bottom:35px; ">
                <div class="cs-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="cs-section-title" style="margin-bottom:33px;">
                                <h2 style="text-align:center; color: white;">Our Volunteers</h2>
                                <p style="text-align:center; color: white;">Inside took wow less pounded massive
                                    melodiously the.</p>
                            </div>
                        </div>
                        <ul class="cs-team-slider">
                            <li class="col-lg-3 col-md-3 col-lg-6 col-sm-12">
                                <div class="cs-media">
                                    <figure> <img
                                            src="{{ static_asset('assets/assets_web/extra-images/textimonial-img-1.jpg') }}" style="height: 150px; width: 150px;"
                                            alt="#" />
                                        <figcaption></figcaption>
                                    </figure>
                                    <ul class="team-share">
                                        <li><a href="#"><i class="icon-facebook7"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter6"></i></a></li>
                                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <div class="cs-text">
                                    <h5 style="color:#fff;">Rakesh Kumar</h5>
                                    <span>Project Incharge</span>
                                </div>
                            </li>
                            <li class="col-lg-3 col-md-3 col-lg-6 col-sm-12">
                                <div class="cs-media">
                                    <figure> <img
                                            src="{{ static_asset('assets/assets_web/extra-images/textimonial-img-2.jpg') }}"style="height: 150px; width: 150px;"
                                            alt="#" />
                                        <figcaption></figcaption>
                                    </figure>
                                    <ul class="team-share">
                                        <li><a href="#"><i class="icon-facebook7"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter6"></i></a></li>
                                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <div class="cs-text">
                                    <h5 style="color:#fff;">Riya Sharma</h5>
                                    <span>Marketing head</span>
                                </div>
                            </li>
                            <li class="col-lg-3 col-md-3 col-lg-6 col-sm-12">
                                <div class="cs-media">
                                    <figure> <img
                                            src="{{ static_asset('assets/assets_web/extra-images/textimonial-img-3.jpg') }}"style="height: 150px; width: 150px;"
                                            alt="#" />
                                        <figcaption></figcaption>
                                    </figure>
                                    <ul class="team-share">
                                        <li><a href="#"><i class="icon-facebook7"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter6"></i></a></li>
                                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <div class="cs-text">
                                    <h5 style="color:#fff;">Sita Kumari</h5>
                                    <span>Finanace Department</span>
                                </div>
                            </li>
                            <li class="col-lg-3 col-md-3 col-lg-6 col-sm-12">
                                <div class="cs-media">
                                    <figure> <img
                                            src="{{ static_asset('assets/assets_web/extra-images/textimonial-img-4.jpg') }}"style="height: 150px; width: 150px;"
                                            alt="#" />
                                        <figcaption></figcaption>
                                    </figure>
                                    <ul class="team-share">
                                        <li><a href="#"><i class="icon-facebook7"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter6"></i></a></li>
                                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <div class="cs-text">
                                    <h5 style="color:#fff;">Komal Kumari</h5>
                                    <span>Public relations</span>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div> --}}
            <div class="page-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div style="margin-bottom:25px;" class="cs-section-title">
                                <h2>Our Events</h2>
                                <p style="text-align:left;">Inside took wow less pounded massive melodiously the.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="cs-main-events">
                                <ul class="cs-widget-event">
                                    <li>
                                        <div class="cs-media">
                                            <figure> <span>15<em>jul</em></span> </figure>
                                        </div>
                                        <div class="cs-text cs-active">
                                            <h6><a href="#">Money we raise into organizations</a></h6>
                                            <ul>
                                                <li><i class="icon-circle2" style="color:#dd3333"></i></li>
                                                <li>Aneri, Africa</li>
                                                <li>/</li>
                                                <li>15:00 A.M</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cs-media">
                                            <figure> <span>15<em>jul</em></span> </figure>
                                        </div>
                                        <div class="cs-text cs-pending">
                                            <h6><a href="#">community-owned water projects</a></h6>
                                            <ul>
                                                <li><i class="icon-circle2" style="color:#dd3333"></i></li>
                                                <li>Aneri, Africa</li>
                                                <li>/</li>
                                                <li>15:00 A.M</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cs-media">
                                            <figure> <span>12<em>jul</em></span> </figure>
                                        </div>
                                        <div class="cs-text cs-pending">
                                            <h6><a href="#">Closely to ensure that.</a></h6>
                                            <ul>
                                                <li><i class="icon-circle2" style="color:#dd9933"></i></li>
                                                <li>Aneri, Africa</li>
                                                <li>/</li>
                                                <li>15:00 A.M</li>
                                            </ul>
                                        </div>
                                    </li>
                                    {{-- <li>
                                        <div class="cs-media">
                                            <figure> <span>28<em>jul</em></span> </figure>
                                        </div>
                                        <div class="cs-text cs-cancel">
                                            <h6><a href="#">Fund and our partners</a></h6>
                                            <ul>
                                                <li><i class="icon-circle2" style="color:#81d742"></i></li>
                                                <li>Aneri, Africa</li>
                                                <li>/</li>
                                                <li>15:00 A.M</li>
                                            </ul>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="cs-gallery cs-home-gallery">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="cs-media">
                                            <figure> <img
                                                    src="{{ static_asset('assets/assets_web/extra-images/gallery-img-1.jpg') }}"
                                                    alt="#">
                                                <figcaption><a
                                                        href="{{ static_asset('assets/assets_web/extra-images/gallery-img-1.jpg') }}"
                                                        data-lightbox="example-set"><i
                                                            class="icon-plus4"></i><span>Marketing head</span></a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="cs-media">
                                            <figure> <img
                                                    src="{{ static_asset('assets/assets_web/extra-images/gallery-img-2.jpg') }}"
                                                    alt="#">
                                                <figcaption><a
                                                        href="{{ static_asset('assets/assets_web/extra-images/gallery-img-2.jpg') }}"
                                                        data-lightbox="example-set"><i
                                                            class="icon-plus4"></i><span>Marketing head</span></a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="cs-media">
                                            <figure> <img
                                                    src="{{ static_asset('assets/assets_web/extra-images/gallery-img-3.jpg') }}"
                                                    alt="#">
                                                <figcaption> <a
                                                        href="{{ static_asset('assets/assets_web/extra-images/gallery-img-3.jpg') }}"
                                                        data-lightbox="example-set"><i
                                                            class="icon-plus4"></i><span>Marketing head</span></a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="cs-media">
                                            <figure> <img
                                                    src="{{ static_asset('assets/assets_web/extra-images/gallery-img-4.jpg') }}"
                                                    alt="#">
                                                <figcaption> <a
                                                        href="{{ static_asset('assets/assets_web/extra-images/gallery-img-4.jpg') }}"
                                                        data-lightbox="example-set"><i
                                                            class="icon-plus4"></i><span>Marketing head</span></a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="cs-media">
                                            <figure> <img
                                                    src="{{ static_asset('assets/assets_web/extra-images/gallery-img-5.jpg') }}"
                                                    alt="#">
                                                <figcaption> <a
                                                        href="{{ static_asset('assets/assets_web/extra-images/gallery-img-5.jpg') }}"
                                                        data-lightbox="example-set"><i
                                                            class="icon-plus4"></i><span>Marketing head</span></a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="cs-media">
                                            <figure> <img
                                                    src="{{ static_asset('assets/assets_web/extra-images/gallery-img-6.jpg') }}"
                                                    alt="#">
                                                <figcaption> <a
                                                        href="{{ static_asset('assets/assets_web/extra-images/gallery-img-6.jpg') }}"
                                                        data-lightbox="example-set"><i
                                                            class="icon-plus4"></i><span>Marketing head</span></a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="cs-media">
                                            <figure> <img
                                                    src="{{ static_asset('assets/assets_web/extra-images/gallery-img-7.jpg') }}"
                                                    alt="#">
                                                <figcaption> <a
                                                        href="{{ static_asset('assets/assets_web/extra-images/gallery-img-7.jpg') }}"
                                                        data-lightbox="example-set"><i
                                                            class="icon-plus4"></i><span>Marketing head</span></a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="cs-media">
                                            <figure> <img
                                                    src="{{ static_asset('assets/assets_web/extra-images/gallery-img-8.jpg') }}"
                                                    alt="#">
                                                <figcaption> <a
                                                        href="{{ static_asset('assets/assets_web/extra-images/gallery-img-8.jpg') }}"
                                                        data-lightbox="example-set"><i
                                                            class="icon-plus4"></i><span>Marketing head</span></a>
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
            <div class="page-section" style=" margin-bottom:60px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="cs-section-title" style="margin-bottom:30px;">
                                <h2 style="text-align:center;">OUR PROGRESS</h2>
                                <p style="text-align:center;">Inside took wow less pounded massive melodiously the.</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="cs-counter big cs-about-counter">
                                <ul>
                                    <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="cs-media">
                                            <figure> <i class="icon-droplet2"></i> </figure>
                                        </div>
                                        <div class="cs-text"> <strong class="counter-small">5,58,710</strong>
                                            <p>Child education funded</p>
                                        </div>
                                    </li>
                                    <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="cs-media">
                                            <figure> <i class="icon-graduation"></i> </figure>
                                        </div>
                                        <div class="cs-text"> <strong class="counter-small">12,00,000</strong>
                                            <p>Proper Education facility</p>
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
                                        <div class="cs-text"> <strong class="counter-small">10,478</strong>
                                            <p>July 15, 2024</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="page-section" style="background:#f8f8f8; padding-top:40px; margin-bottom:-30px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <h3>Happy Stories</h3>
                            <ul class="cs-testimonial-slides">
                                <li>
                                    <div class="cs-media">
                                        <figure> <img class="img-circle"
                                                src="{{ static_asset('assets/assets_web/extra-images/testimonial-img-2.jpg') }}"
                                                alt="#"> </figure>
                                    </div>
                                    <div class="cs-text">
                                        <p>Dear one nutria badly instead antelope grizzly poured emptied imprecisely darn
                                            smelled armadillo drank</p>
                                        <span><em>Margaret Mead, </em>Cultural Anthropologist</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs-media">
                                        <figure> <img class="img-circle"
                                                src="{{ static_asset('assets/assets_web/extra-images/testimonial-img-1.jpg') }}"
                                                alt="#"> </figure>
                                    </div>
                                    <div class="cs-text">
                                        <p>Depending cuddled much the crud this less ouch that underneath under manifestly
                                            bpractical som</p>
                                        <span><em>Margaret, </em>Cultural Anthropologist</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs-media">
                                        <figure> <img class="img-circle"
                                                src="{{ static_asset('assets/assets_web/extra-images/testimonial-img-3.jpg') }}"
                                                alt="#"> </figure>
                                    </div>
                                    <div class="cs-text">
                                        <p>Depending cuddled much the crud this less ouch that underneath under manifestly
                                            bpractical som</p>
                                        <span><em>Margaret Mead, </em>Cultural Anthropologist</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs-media">
                                        <figure> <img class="img-circle"
                                                src="{{ static_asset('assets/assets_web/extra-images/testimonial-img-1.jpg') }}"
                                                alt="#"> </figure>
                                    </div>
                                    <div class="cs-text">
                                        <p>Depending cuddled much the crud this less ouch that underneath under manifestly
                                            bpractical som</p>
                                        <span><em>Margaret Mead, </em>Cultural Anthropologist</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs-media">
                                        <figure> <img class="img-circle"
                                                src="{{ static_asset('assets/assets_web/extra-images/testimonial-img-3.jpg') }}"
                                                alt="#"> </figure>
                                    </div>
                                    <div class="cs-text">
                                        <p>Depending cuddled much the crud this less ouch that underneath under manifestly
                                            bpractical som</p>
                                        <span><em>Margaret Mead, </em>Cultural Anthropologist</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <h3>Our Partners</h3>
                            <ul class="client-slides">
                                <li>
                                    <div class="cs-media">
                                        <figure> <img
                                                src="{{ static_asset('assets/assets_web/extra-images/client-logo-1.jpg') }}"
                                                alt="#"> </figure>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs-media">
                                        <figure> <img
                                                src="{{ static_asset('assets/assets_web/extra-images/client-logo-2.jpg') }}"
                                                alt="#"> </figure>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs-media">
                                        <figure> <img
                                                src="{{ static_asset('assets/assets_web/extra-images/client-logo-3.jpg') }}"
                                                alt="#"> </figure>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs-media">
                                        <figure> <img
                                                src="{{ static_asset('assets/assets_web/extra-images/client-logo-4.jpg') }}"
                                                alt="#"> </figure>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </main>
@endsection
