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
                <h1>Health</h1>
              </div>
            </div>
            <div class="col-md-12">
              <div class="about-tbn object-of-truest">
                <div class="about-icon">
                  <a href="#"><i class="fa fa-home" aria-hidden="true"></i></a>
                </div>
                <div class="about-text">
                  <a href="#">Health</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="about-contnet" class="py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="about-text-image">
                <h5>Health</h5>
                <p>
                <b>Manav Sewa</b> launched the community health programme, a multi- faceted project that focuses on establishing sustainable practices and spreading awareness regarding preventive and promotive health among the rural masses. We travel from village to village, provides health check-ups and basic treatment. Manav Sewa help to access services and education related to health problem. Our goal is to have the client achieve and maintain a state of optimal health so they can function in their daily lives. We focus on assessing the needs of a patient is usually the first step that a healthcare and provides health services such as home health care, medical equipment rentals, transportation to follow up doctor visits, other activities. We help patients at a time of physical and psychological stress to access the information and services they require to cope with health issues and provides trusted source and services when people need it in critical condition.
                </p>
              </div>
            </div>
            <div class="col-md-4">
                <div>
                    <img src="https://www.manavsewa.org.in/img/w2.jpg" alt="" class="w-100">
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <div class="about-text-image">
                <h5>Health</h5>
                <p>
                <b>Manav Sewa</b> launched the community health programme, a multi- faceted project that focuses on establishing sustainable practices and spreading awareness regarding preventive and promotive health among the rural masses. We travel from village to village, provides health check-ups and basic treatment. Manav Sewa help to access services and education related to health problem. Our goal is to have the client achieve and maintain a state of optimal health so they can function in their daily lives. We focus on assessing the needs of a patient is usually the first step that a healthcare and provides health services such as home health care, medical equipment rentals, transportation to follow up doctor visits, other activities. We help patients at a time of physical and psychological stress to access the information and services they require to cope with health issues and provides trusted source and services when people need it in critical condition.
                </p>
              </div>
            </div>
            <div class="col-md-4">
                <div>
                    <img src="https://www.manavsewa.org.in/img/w2.jpg" alt="" class="w-100">
                </div>
            </div>
          </div>
        </div>
      </section>
    </main>
	 
	@endsection