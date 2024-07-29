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
                            <h1 style="color:#fff">Success Story</h1>
                        </div>
                        <ul class="breadcrumb">
                            <li><a href="{{ url('') }}">Home</a></li>
                            <li><a href="{{ url('') }}">Save Life</a></li>
                            <li>Success Story</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main class="main" style="background:#f8f8f8; ">
        <div class="page-section" style="background:#f8f8f8; padding-top:40px; padding-bottom:30px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <h3>Happy Stories</h3>
                        <ul class="cs-testimonial-slides">
                            <li>
                                <div class="cs-media">
                                    <figure>
                                        <img class="img-circle" height="100" width="100" style="height: -webkit-fill-available;"
                                            src="{{ static_asset('assets/assets_web/extra-images/nimg14.jpeg') }}"
                                            alt="#">
                                    </figure>
                                </div>
                                <div class="cs-text">
                                    <p>Depending cuddled much the crud this less ouch that underneath under manifestly
                                        bpractical som</p>
                                    <span><em>Margaret Mead, </em>Cultural Anthropologist</span>
                                </div>
                            </li>
                        </ul>
                        <ul class="cs-testimonial-slides">
                            <li>
                                <div class="cs-media">
                                    <figure>
                                        <img class="img-circle" height="100" width="100" style="height: -webkit-fill-available;"
                                            src="{{ static_asset('assets/assets_web/extra-images/nimg20.jpeg') }}"
                                            alt="#">
                                    </figure>
                                </div>
                                <div class="cs-text">
                                    <p>Depending cuddled much the crud this less ouch that underneath under manifestly
                                        bpractical som</p>
                                    <span><em>Margaret Mead, </em>Cultural Anthropologist</span>
                                </div>
                            </li>
                        </ul>
                        <ul class="cs-testimonial-slides">
                            <li>
                                <div class="cs-media">
                                    <figure>
                                        <img class="img-circle" height="100" width="100" style="height: -webkit-fill-available;"
                                            src="{{ static_asset('assets/assets_web/extra-images/nimg6.jpeg') }}"
                                            alt="#">
                                    </figure>
                                </div>
                                <div class="cs-text">
                                    <p>Depending cuddled much the crud this less ouch that underneath under manifestly
                                        bpractical som</p>
                                    <span><em>Margaret Mead, </em>Cultural Anthropologist</span>
                                </div>
                            </li>
                        </ul>
                        <ul class="cs-testimonial-slides">
                            <li>
                                <div class="cs-media">
                                    <figure>
                                        <img class="img-circle" height="100" width="100" style="height: -webkit-fill-available;"
                                            src="{{ static_asset('assets/assets_web/extra-images/nimg1.jpeg') }}"
                                            alt="#">
                                    </figure>
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
                                    <figure>
                                        <img src="{{ static_asset('assets/assets_web/extra-images/client-logo-1.jpg') }}"
                                            alt="#">
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="cs-media">
                                    <figure>
                                        <img src="{{ static_asset('assets/assets_web/extra-images/client-logo-2.jpg') }}"
                                            alt="#">
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="cs-media">
                                    <figure>
                                        <img src="{{ static_asset('assets/assets_web/extra-images/client-logo-3.jpg') }}"
                                            alt="#">
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="cs-media">
                                    <figure>
                                        <img src="{{ static_asset('assets/assets_web/extra-images/client-logo-4.jpg') }}"
                                            alt="#">
                                    </figure>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
