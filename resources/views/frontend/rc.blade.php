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
                        <h1 style="color:#fff">Registration Certificate</h1>
                        <p>Inside took wow less pounded massive melodiously the.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main class="main">
        <section id="about-content" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="about-text-image">
                            <img src="{{ static_asset('assets/assets_web/certificate/registration.jpg') }}" frameborder="0"></img>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
