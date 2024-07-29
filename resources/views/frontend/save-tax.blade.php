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
    <main class="main">
        <div class="page-section"
            style="background:url({{ static_asset('assets/assets_web/extra-images/contact-bg.jpg') }}) no-repeat 0 0 /cover; position: relative; padding-top:58px; padding-bottom:27px; margin-bottom:56px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-title" style="color:#fff;">
                            <h1 style="color:#fff">Save Tax</h1>
                            <p>Inside took wow less pounded massive melodiously the.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="about-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="about-banner">
                            <h1>Know Donate With Account</h1>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="about-tbn object-of-truest">
                            <div class="about-icon">
                                <a href="#"><i class="fa fa-home" aria-hidden="true"></i></a>
                            </div>
                            <div class="about-text">
                                <a href="#">Know Donate With Account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about-contnet" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h6>Donate With Account</h6>
                        <div class="logo-box world1">
                            <img src="{{ static_asset('assets/assets_web/certificate/bank-logo.jpg') }}" class="">
                            <h6><strong>Benificiary Name : </strong> Manav Vikash & Samaj Kalyan Trust</h6>
                            <h6><strong>Account No : </strong> 580410110006103</h6>
                            <h6><strong>IFSC Code : </strong> BKID0005804</h6>
                            <h6><strong>Branch : </strong> Banmankhi,Bihar</h6>
                            <h6><strong>Account Type : </strong> Current Account</h6>
                            <div class="link-btn" style="margin-top: 15px">
                                <a href="{{ static_asset('assets/assets_web/img/BabyTanvi.pdf') }}" target="_blank"
                                    class="py-4 d-inline-block" tabindex="-1"><a href="{{url('donation-page')}}"> <button class="btn btn-primary"
                                        tabindex="-1"><i class="fa fa-file-pdf-o"></i> Donate Now</button> </a> </a>
                            </div>
                            <div class="about" id="r11" style="">
                                <p>All Donations Are Exempted under Section 80G (5)(vi) Of Income Tex Act 1961.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <h3>All Donations Are Exempted under Section 80G (5)(vi) Of Income Tex Act 1961.
                            </h3>
                            <a href="#" class="theme-btn btn-style-two w-100 d-block py-3 my-2"><i
                                    class="flaticon-next"></i><span>Click Here To Claim your 80(G)</span></a>
                            <a href="{{url('donation-page')}}" class="theme-btn btn-style-two w-100 d-block py-3 my-2"><i
                                    class="flaticon-next"></i><span>Donate Now</span></a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
@endsection
