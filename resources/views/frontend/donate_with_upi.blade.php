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
                <h1>Know Donate With UPI</h1>
              </div>
            </div>
            <div class="col-md-12">
              <div class="about-tbn object-of-truest">
                <div class="about-icon">
                  <a href="#"><i class="fa fa-home" aria-hidden="true"></i></a>
                </div>
                <div class="about-text">
                  <a href="#">Know Donate With UPI</a>
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
                <h6>Know Donate With UPI</h6>
                <div class="logo-box world1">
                  <img src="https://www.manavsewa.org.in/images/a.png" class="w-100">
               <h6><strong>Benificiary Name : </strong> Manav Sewa Health and Education Trust</h6>
               <h6><strong>Account No : </strong> 50200068338322</h6>
               <h6><strong>IFSC Code : </strong> HDFC0003987</h6>
               <h6><strong>Branch : </strong> Shakarpur</h6>
               <h6><strong>Account Type : </strong> Current Account</h6>

               <div class="link-btn" style="margin-top: 15px">
                <a href="img/BabyTanvi.pdf" target="_blank" class="py-4 d-inline-block" tabindex="-1"> <button class="btn btn-primary" tabindex="-1"><i class="fa fa-file-pdf-o"></i> Donate Now</button> </a></div>
                <div class="about" id="r11" style="">
                 <p>All Donations Are Exempted under Section 80G (5)(vi) Of Income Tex  Act 1961.</p>
              </div>
              </div>
              </div>
              <div class="col-md-2">
                <div>
                    
                </div>
              </div>
              <div class="col-md-6">
                <div>
                    <img src="https://www.manavsewa.org.in/img/baar-new.jpg" alt="">
                </div>
              </div>
                </div>
          </div>
        </div>
      </section>
    </main>
	 
	@endsection