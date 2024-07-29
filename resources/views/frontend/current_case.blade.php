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
        style="background:url({{ static_asset('assets/assets_web/extra-images/sub-header-bg.jpg') }}) no-repeat 0 0 /cover; position: relative; padding-top:58px; padding-bottom:47px">
        <div class="sub-header-overlay"></div>
        <div class="sub-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-title" style="float:left;">
                            <h1 style="color:#fff">Current Case</h1>
                        </div>
                        <ul class="breadcrumb">
                            <li><a href="{{ url('') }}">Home</a></li>
                            <li><a href="{{ url('') }}">Save Life</a></li>
                            <li>Current case</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Start -->
    <main id="main">
        <div class="main-section">
            <div class="page-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="cs-blog blog-medium">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="cs-blog medium-view">
                                            <div class="cs-blog-post">
                                                <div class="cs-media">
                                                    <figure>
                                                        <a href="#"><img
                                                                src="{{ static_asset('assets/assets_web/extra-images/nimg1.jpeg') }}"
                                                                alt="#"></a>
                                                        <a href="#"><i class="icon-plus-square-o"></i></a>
                                                        <figcaption><a href="#"></a></figcaption>
                                                    </figure>
                                                </div>
                                                <div class="cs-text">
                                                    <div class="cs-blog-heading">
                                                        <h3><a href="#">Dalmatian goodness up babbled this yikes
                                                                komodo goodness.</a></h3>
                                                    </div>
                                                    <ul class="cs-author-detail">
                                                        <li>by<img
                                                                src="{{ static_asset('assets/assets_web/extra-images/nimg2.jpeg') }}"
                                                                alt="#"><span>S. Bharti</span></li>
                                                        <li>July 15, 2024</li>
                                                        <li><a href="#">Charity,</a></li>
                                                        <li><a href="#"> Kids</a></li>
                                                    </ul>
                                                    <p>Jeez ostrich more vigorously the porcupine some hoarsely other hugged
                                                        jerky cunningly some fatally including from spryly other this some
                                                        and and far dark crud irrespective that this less mongoose.</p>
                                                    <a class="btn-readmore" href="#"><span>Read More</span><i
                                                            class="icon-arrow-right9"></i></a>
                                                </div>
                                            </div>
                                            <div class="cs-blog-post">
                                                <div class="cs-media">
                                                    <figure>
                                                        <a href="#"><img
                                                                src="{{ static_asset('assets/assets_web/extra-images/nimg2.jpeg') }}"
                                                                alt="#"></a>
                                                        <a href="#"><i class="icon-plus-square-o"></i></a>
                                                        <figcaption><a href="#"></a></figcaption>
                                                    </figure>
                                                </div>
                                                <div class="cs-text">
                                                    <div class="cs-blog-heading">
                                                        <h3><a href="#">Dalmatian goodness up babbled.</a></h3>
                                                    </div>
                                                    <ul class="cs-author-detail">
                                                        <li>by<img
                                                                src="{{ static_asset('assets/assets_web/extra-images/blog-post-2.png') }}"
                                                                alt="#"><span>S. Bharti</span></li>
                                                        <li>July 15, 2024</li>
                                                        <li><a href="#">Charity,</a></li>
                                                        <li><a href="#"> Kids</a></li>
                                                    </ul>
                                                    <p>Jeez ostrich more vigorously the porcupine some hoarsely other hugged
                                                        jerky cunningly some fatally including from spryly other this some
                                                        and and far dark crud irrespective that this less mongoose.</p>
                                                    <a class="btn-readmore" href="#"><span>Read More</span><i
                                                            class="icon-arrow-right9"></i></a>
                                                </div>
                                            </div>
                                            <div class="cs-blog-post">
                                                <div class="cs-media">
                                                    <figure>
                                                        <a href="#"><img
                                                                src="{{ static_asset('assets/assets_web/extra-images/nimg3.jpeg') }}"
                                                                alt="#"></a>
                                                        <a href="#"><i class="icon-plus-square-o"></i></a>
                                                        <figcaption><a href="#"></a></figcaption>
                                                    </figure>
                                                </div>
                                                <div class="cs-text">
                                                    <div class="cs-blog-heading">
                                                        <h3><a href="#">Dalmatian goodness up babbled.</a></h3>
                                                    </div>
                                                    <ul class="cs-author-detail">
                                                        <li>by<img
                                                                src="{{ static_asset('assets/assets_web/extra-images/nimg4.jpeg') }}"
                                                                alt="#"><span>S. Bharti</span></li>
                                                        <li>July 15, 2024</li>
                                                        <li><a href="#">Charity,</a></li>
                                                        <li><a href="#"> Kids</a></li>
                                                    </ul>
                                                    <p>Jeez ostrich more vigorously the porcupine some hoarsely other hugged
                                                        jerky cunningly some fatally including from spryly other this some
                                                        and and far dark crud irrespective that this less mongoose.</p>
                                                    <a class="btn-readmore" href="#"><span>Read More</span><i
                                                            class="icon-arrow-right9"></i></a>
                                                </div>
                                            </div>
                                            <div class="cs-blog-post">
                                                <div class="cs-media">
                                                    <figure>
                                                        <a href="#"><img
                                                                src="{{ static_asset('assets/assets_web/extra-images/nimg4.jpeg') }}"
                                                                alt="#"></a>
                                                        <a href="#"><i class="icon-plus-square-o"></i></a>
                                                        <figcaption><a href="#"></a></figcaption>
                                                    </figure>
                                                </div>
                                                <div class="cs-text">
                                                    <div class="cs-blog-heading">
                                                        <h3><a href="#">Dalmatian goodness up babbled.</a></h3>
                                                    </div>
                                                    <ul class="cs-author-detail">
                                                        <li>by<img
                                                                src="{{ static_asset('assets/assets_web/extra-images/blog-post-4.png') }}"
                                                                alt="#"><span>S. Bharti</span></li>
                                                        <li>November 12, 2023</li>
                                                        <li><a href="#">Charity,</a></li>
                                                        <li><a href="#"> Kids</a></li>
                                                    </ul>
                                                    <p>Jeez ostrich more vigorously the porcupine some hoarsely other hugged
                                                        jerky cunningly some fatally including from spryly other this some
                                                        and and far dark crud irrespective that this less mongoose.</p>
                                                    <a class="btn-readmore" href="#"><span>Read More</span><i
                                                            class="icon-arrow-right9"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="pagination pagination-lg">
                                        <li><a class="prev" href="#"><i class="icon-arrow-left9"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">6</a></li>
                                        <li><a class="next" href="#"><i class="icon-arrow-right9"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            {{-- <div class="widget widget-ads">
                                <figure><img
                                        src="{{ static_asset('assets/assets_web/extra-images/widget-step4life.png') }}"
                                        alt="#"></figure>
                            </div> --}}
                            <div class="widget widget-search">
                                <div class="cs-widget-title">
                                    <h5>Search</h5>
                                </div>
                                <div class="cs-widget-search">
                                    <input type="text" placeholder="Enter any keyword">
                                </div>
                            </div>
                            <div class="widget widget-categories">
                                <div class="cs-widget-title">
                                    <h5>Blog Categories</h5>
                                </div>
                                <ul>
                                    <li><a href="#">Education</a><span>12</span></li>
                                    <li><a href="#">Emotions</a><span>58</span></li>
                                    <li><a href="#">Food/Drink</a><span>12</span></li>
                                    <li><a href="#">Health/Medical</a><span>35</span></li>
                                    <li><a href="#">Industry/Craft</a><span>81</span></li>
                                    <li><a href="#">Music</a><span>101</span></li>
                                    <li><a href="#">Nature/Landscapes</a><span>58</span></li>
                                    <li><a href="#">People</a><span>10</span></li>
                                    <li><a href="#">Places/Monuments</a><span>34</span></li>
                                    <li><a href="#">Religion.</a><span>75</span></li>
                                </ul>
                            </div>
                            <div class="widget widget-related-blogs">
                                <div class="cs-widget-title">
                                    <h5>Related Blogs</h5>
                                </div>
                                <div class="cs-recent-posts">
                                    <h6><a href="#">Lets of Money we raise into organizations</a></h6>
                                    <ul class="cs-time-schedules">
                                        <li><i class="icon-list8"></i></li>
                                        <li><span>September 23, 2015</span></li>
                                        <li>/</li>
                                        <li><a href="#">Charity, </a></li>
                                        <li><a href="#">Kids</a></li>
                                    </ul>
                                </div>
                                <div class="cs-recent-posts">
                                    <h6><a href="#">Lets of Money we raise into organizations</a></h6>
                                    <ul class="cs-time-schedules">
                                        <li><i class="icon-video"></i></li>
                                        <li><span>June 8, 2015</span></li>
                                        <li>/</li>
                                        <li><a href="#">Charity, </a></li>
                                        <li><a href="#">Kids</a></li>
                                    </ul>
                                </div>
                                <div class="cs-recent-posts">
                                    <h6><a href="#">Lets of Money we raise into organizations</a></h6>
                                    <ul class="cs-time-schedules">
                                        <li><i class="icon-list8"></i></li>
                                        <li><span>May 21, 2015</span></li>
                                        <li>/</li>
                                        <li><a href="#">Kids</a></li>
                                    </ul>
                                </div>
                                <div class="cs-recent-posts">
                                    <h6><a href="#">Lets of Money we raise into organizations</a></h6>
                                    <ul class="cs-time-schedules">
                                        <li><i class="icon-video"></i></li>
                                        <li><span>February 12, 2015</span></li>
                                        <li><a href="#">Charity, </a></li>
                                        <li><a href="#">Kids</a></li>
                                    </ul>
                                </div>
                            </div>
                            {{-- <div class="widget widget-projects">
                                <div class="cs-widget-title">
                                    <h5>Our Projects</h5>
                                </div>
                                <ul>
                                    <li>
                                        <div class="cs-media">
                                            <figure>
                                                <img src="{{ static_asset('assets/assets_web/extra-images/widget-project-1.jpg') }}"
                                                    alt="#">
                                                <figcaption><i class="icon-droplet2"></i></figcaption>
                                            </figure>
                                        </div>
                                        <div class="cs-text">
                                            <a href="#">Livestock Insurance Scheme subsidy, Grants</a>
                                            <span>Kabul, Afghanistan</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cs-media">
                                            <figure>
                                                <img src="{{ static_asset('assets/assets_web/extra-images/widget-project-2.jpg') }}"
                                                    alt="#">
                                                <figcaption><i class="icon-mortar-board"></i></figcaption>
                                            </figure>
                                        </div>
                                        <div class="cs-text">
                                            <a href="#">Schemes and Grants for NGO’s working.</a>
                                            <span>Samatra, Indonasia</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cs-media">
                                            <figure>
                                                <img src="{{ static_asset('assets/assets_web/extra-images/widget-project-3.jpg') }}"
                                                    alt="#">
                                                <figcaption><i class="icon-group"></i></figcaption>
                                            </figure>
                                        </div>
                                        <div class="cs-text">
                                            <a href="#">Dairy Entrepreneu rship Development Scheme 2014</a>
                                            <span>Khatmando, Nepal</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cs-media">
                                            <figure>
                                                <img src="{{ static_asset('assets/assets_web/extra-images/widget-project-4.jpg') }}"
                                                    alt="#">
                                                <figcaption><i class="icon-institution"></i></figcaption>
                                            </figure>
                                        </div>
                                        <div class="cs-text">
                                            <a href="#">Schemes of Ministry of New and Renewable Energy</a>
                                            <span>Harare, Zimbabwe</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget-events">
                                <div class="cs-widget-title">
                                    <h5>Events</h5>
                                </div>
                                <ul class="cs-widget-event">
                                    <li>
                                        <div class="cs-media">
                                            <figure>
                                                <span>15<em>jul</em></span>
                                            </figure>
                                        </div>
                                        <div class="cs-text">
                                            <h6><a href="#">Money we raise into organizations</a></h6>
                                            <ul>
                                                <li>Aneri, Africa</li>
                                                <li>/</li>
                                                <li>15:00 A.M</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cs-media">
                                            <figure>
                                                <span>15<em>jul</em></span>
                                            </figure>
                                        </div>
                                        <div class="cs-text">
                                            <h6><a href="#">community-owned water projects</a></h6>
                                            <ul>
                                                <li>Aneri, Africa</li>
                                                <li>/</li>
                                                <li>15:00 A.M</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cs-media">
                                            <figure>
                                                <span>12<em>jul</em></span>
                                            </figure>
                                        </div>
                                        <div class="cs-text">
                                            <h6><a href="#">Closely to ensure that.</a></h6>
                                            <ul>
                                                <li>Aneri, Africa</li>
                                                <li>/</li>
                                                <li>15:00 A.M</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cs-media">
                                            <figure>
                                                <span>28<em>jul</em></span>
                                            </figure>
                                        </div>
                                        <div class="cs-text">
                                            <h6><a href="#">Fund and our partners</a></h6>
                                            <ul>
                                                <li>Aneri, Africa</li>
                                                <li>/</li>
                                                <li>15:00 A.M</li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
