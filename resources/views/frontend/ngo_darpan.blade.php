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
      <section id="about-banner">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="about-banner">
                <h1>Ngo Darpan</h1>
              </div>
            </div>
            <div class="col-md-12">
              <div class="about-tbn object-of-truest">
                <div class="about-icon">
                  <a href="#"><i class="fa fa-home" aria-hidden="true"></i></a>
                </div>
                <div class="about-text">
                  <a href="#">Ngo Darpan</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="about-contnet" class="py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="about-text-image">
              <img src="https://www.manavsewa.org.in/images/s1.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
@endsection