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
                <h1>Get invoice</h1>
              </div>
            </div>
            <div class="col-md-12">
              <div class="about-tbn object-of-truest">
                <div class="about-icon">
                  <a href="#"><i class="fa fa-home" aria-hidden="true"></i></a>
                </div>
                <div class="about-text">
                  <a href="#">Get Involve</a>
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
                <h6 class="fw-bold">Get Involve</h6>
                <p>
                  Manav SewaEvery one of us, at some time in our life, feels
                  like contributing towards the betterment of the society. But
                  among the various obstacles faced by many of us in doing so,
                  are limitations pertaining to time. In order to tackle these
                  and give you the opportunity to support our cause of uplifting
                  underprivileged children in India, Providing food education
                  and medical assistance of then same we are happy to help old
                  age neglected peoples of our society, assisting woman for
                  woman empowerment, The Manav Sewa has made volunteering
                  provisions that will give you the freedom to spread our
                  message without disturbing your schedule.
                </p>
                <h6>INITIATE</h6>
                <p>
                  There are various ways in which we can contribute towards
                  society’s progress. It’s relatively easier to support a cause
                  pertaining to the upliftment of underprivileged peoples of our
                  society. Every child loves an entertaining event like an art
                  and craft workshop or a magic show. Each of us can make a
                  difference to the lives of these children in various ways.
                  Either you can initiate and organize an event at a Government
                  school where Manav Sewa provides meals or you can be part of
                  an event that is organized by the organization. It’s your
                  choice! The Manav Sewa has organized numerous events that have
                  assisted in fundraising to support our cause.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    
  @endsection