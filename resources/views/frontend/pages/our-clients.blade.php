@extends('frontend.layouts.master')
@section('title') Our Clients @endsection

@section('meta_tags')
	<meta name="title" content="Our Clients">
    <meta name="keywords" content="Our Clients">
    <meta name="description" content="Our Clients">
@endsection

@section('content')

<style>
		.section-title__title {
			position: relative;
			display: block;
			color: var(--thm-black);
			font-size: 38px;
			font-weight: 500;
			line-height: 67px;
			letter-spacing: -2.4px;
			text-transform: capitalize;
			margin-top: 7px;
		}

		.project-details__bottom-points {
			position: relative;
			display: block;
			margin-top: 0px;
		}

		.about-two__left .section-title {
			margin-bottom: 7px;
		}
		@media only screen and (max-width: 599px) {
	.section-title__title {
		position: relative;
		display: block;
		color: var(--thm-black);
		font-size: 31px;
		font-weight: 500;
		line-height: 44px;
		letter-spacing: -2.4px;
		margin-top: 7px;
	}
	}
	</style>

    <!--Page Header Start-->
		<section class="page-header">
			<div class="page-header__bg" style="background-image: url({{ static_asset('assets/assets_web/images/page-header-bg.jpg') }});"></div>
			<div class="container">
				<div class="page-header__inner">
					<h2>Our Clients</h2>

				</div>
			</div>
		</section>
		<!--Page Header End-->

        <section class="brand-one brand-two pt-5 pb-5 mb-5">
			<div class="container">
				<div class="section-title text-left">
					<h2 class="section-title__title">Partners </h2>
					<div class="section-title__tagline-box">
						<span class="section-title__tagline">in Progress</span>
					</div>
				</div>

				<div class="overflow-x-scroll">
					<ul class="nav nav-pills mb-3 flex-nowrap border-bottom border-2" id="pills-tab" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link text-white fw-semibold active position-relative" id="pills-home-tab"
								data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab"
								aria-controls="pills-home" aria-selected="true">Real Estate</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link text-white fw-semibold position-relative" id="pills-profile-tab"
								data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab"
								aria-controls="pills-profile" aria-selected="false">Education</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link text-white fw-semibold position-relative" id="pills-contact-tab"
								data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab"
								aria-controls="pills-contact" aria-selected="false">Healthcare</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link text-white fw-semibold position-relative" id="pills-gov-tab"
								data-bs-toggle="pill" data-bs-target="#pills-gov" type="button" role="tab"
								aria-controls="pills-gov" aria-selected="false">Government</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link text-white fw-semibold position-relative" id="pills-trans-tab"
								data-bs-toggle="pill" data-bs-target="#pills-trans" type="button" role="tab"
								aria-controls="pills-trans" aria-selected="false">Transport</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link text-white fw-semibold position-relative" id="pills-infra-tab"
								data-bs-toggle="pill" data-bs-target="#pills-infra" type="button" role="tab"
								aria-controls="pills-infra" aria-selected="false">Infra</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link text-white fw-semibold position-relative" id="pills-it-tab"
								data-bs-toggle="pill" data-bs-target="#pills-it" type="button" role="tab"
								aria-controls="pills-it" aria-selected="false">Information Technology</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link text-white fw-semibold position-relative" id="pills-bfsi-tab"
								data-bs-toggle="pill" data-bs-target="#pills-bfsi" type="button" role="tab"
								aria-controls="pills-bfsi" aria-selected="false">BFSI</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link text-white fw-semibold position-relative" id="pills-re-tab"
								data-bs-toggle="pill" data-bs-target="#pills-re" type="button" role="tab"
								aria-controls="pills-re" aria-selected="false"> Renewable Energy</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link text-white fw-semibold position-relative" id="pills-tp-tab"
								data-bs-toggle="pill" data-bs-target="#pills-tp" type="button" role="tab"
								aria-controls="pills-tp" aria-selected="false"> Trade Promotions</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link text-white fw-semibold position-relative" id="pills-su-tab"
								data-bs-toggle="pill" data-bs-target="#pills-su" type="button" role="tab"
								aria-controls="pills-su" aria-selected="false"> Start Up</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link text-white fw-semibold position-relative" id="pills-all-tab"
								data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab"
								aria-controls="pills-all" aria-selected="false"> All</button>
						</li>
					</ul>
				</div>
				<div class="tab-content border rounded-3 border-primary p-5 text-danger" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-home" role="tabpanel"
						aria-labelledby="pills-home-tab">
						<h4>Real Estate</h4>
						<div class="row">
							<div class="col-lg-3 col-6">
								<img src="{{ static_asset('assets/assets_web/images/cp1.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6">
								<img src="{{ static_asset('assets/assets_web/images/cp2.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6">
								<img src="{{ static_asset('assets/assets_web/images/cp3.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6">
								<img src="{{ static_asset('assets/assets_web/images/cp4.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/cp5.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp1.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp2.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp3.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp4.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp5.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp6.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp7.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp8.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp9.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp10.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp11.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp12.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp13.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp14.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp15.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp16.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp17.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp18.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp19.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp20.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp21.png') }}" class="partner1">
							</div>

							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/cp31.png') }}" class="partner1">
							</div>

						</div>
					</div>
					<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
						<h4>Education</h4>
						<div class="row">
							<div class="col-lg-3 col-6">
								<img src="{{ static_asset('assets/assets_web/images/cp6.png') }}">
							</div>
							<div class="col-lg-3 col-6">
								<img src="{{ static_asset('assets/assets_web/images/cp7.png') }}">
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
						<h4>Healthcare</h4>
						<div class="row">
							<div class="col-lg-3 col-6">
								<img src="{{ static_asset('assets/assets_web/images/cp8.png') }}">
							</div>
							<div class="col-lg-3 col-6">
								<img src="{{ static_asset('assets/assets_web/images/cp11.png') }}">
							</div>
							<div class="col-lg-3 col-6">
								<img src="{{ static_asset('assets/assets_web/images/cp33.png') }}">
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-gov" role="tabpanel" aria-labelledby="pills-gov-tab">
						<h4>Government</h4>
						<div class="row">
							<div class="col-lg-3 col-6">
								<img src="{{ static_asset('assets/assets_web/images/cp9.png') }}">
							</div>
							<div class="col-lg-3">
								<img src="{{ static_asset('assets/assets_web/images/cp10.png') }}">
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-trans" role="tabpanel" aria-labelledby="pills-trans-tab">
						<h4>Transport</h4>
						<div class="row">
							<div class="col-lg-3 col-6">
								<img src="{{ static_asset('assets/assets_web/images/cp12.png') }}">
							</div>
							<div class="col-lg-3 col-6">
								<img src="{{ static_asset('assets/assets_web/images/cp13.png') }}">
							</div>
							<div class="col-lg-3 col-6">
								<img src="{{ static_asset('assets/assets_web/images/cp34.png') }}">
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-infra" role="tabpanel" aria-labelledby="pills-infra-tab">
						<h4>Infra</h4>
						<div class="row">
							<div class="col-lg-3 col-6">
								<img src="{{ static_asset('assets/assets_web/images/cp14.png') }}">
							</div>
							<div class="col-lg-3 col-6">
								<img src="{{ static_asset('assets/assets_web/images/cp15.png') }}">
							</div>
							<div class="col-lg-3 col-6">
								<img src="{{ static_asset('assets/assets_web/images/cp35.png') }}">
							</div>
							<div class="col-lg-3 col-6">
								<img src="{{ static_asset('assets/assets_web/images/cp95.png') }}">
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-it" role="tabpanel" aria-labelledby="pills-it-tab">
						<h4>Information Technology</h4>
						<div class="row">
							<div class="col-lg-3 col-6">
								<img src="{{ static_asset('assets/assets_web/images/cp16.png') }}">
							</div>
							<div class="col-lg-3 col-6">
								<img src="{{ static_asset('assets/assets_web/images/cp17.png') }}">
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-bfsi" role="tabpanel" aria-labelledby="pills-bfsi-tab">
						<h4>BFSI</h4>
						<div class="row">
							<div class="col-lg-3 col-6">
								<img src="{{ static_asset('assets/assets_web/images/cp18.png') }}">
							</div>
							<div class="col-lg-3 col-6">
								<img src="{{ static_asset('assets/assets_web/images/cp19.png') }}">

							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-re" role="tabpanel" aria-labelledby="pills-re-tab">
						<h4>Renewable Energy</h4>
						<div class="row">
							<div class="col-lg-3 col-6">
								<img src="{{ static_asset('assets/assets_web/images/cp20.png') }}">
							</div>
							<div class="col-lg-3 col-6">
								<img src="{{ static_asset('assets/assets_web/images/cp21.png') }}">
							</div>

						</div>
					</div>
					<div class="tab-pane fade" id="pills-tp" role="tabpanel" aria-labelledby="pills-tp-tab">
						<h4>Trade Promotions</h4>
						<div class="row">
							<div class="col-lg-3 col-6">
								<img src="{{ static_asset('assets/assets_web/images/cp22.png') }}">
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-su" role="tabpanel" aria-labelledby="pills-su-tab">
						<h4>Start Up</h4>
						<div class="row">
							<div class="col-lg-3 col-6">
								<img src="{{ static_asset('assets/assets_web/images/cp23.png') }}">
							</div>
							<div class="col-lg-3 col-6">
								<img src="{{ static_asset('assets/assets_web/images/cp24.png') }}">
							</div>
							<div class="col-lg-3 col-6">
								<img src="{{ static_asset('assets/assets_web/images/cp32.png') }}">
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
						<h4>All</h4>
						<div class="row">
							<div class="col-lg-3">
								<img src="{{ static_asset('assets/assets_web/images/cp1.png') }}">
							</div>
							<div class="col-lg-3">
								<img src="{{ static_asset('assets/assets_web/images/cp2.png') }}">
							</div>
							<div class="col-lg-3">
								<img src="{{ static_asset('assets/assets_web/images/cp3.png') }}">
							</div>
							<div class="col-lg-3">
								<img src="{{ static_asset('assets/assets_web/images/cp4.png') }}">
							</div>
							<div class="col-lg-3">
								<img src="{{ static_asset('assets/assets_web/images/cp5.png') }}">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp1.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp2.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp3.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp4.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp5.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp6.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp7.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp8.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp9.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp10.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp11.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp12.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp13.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp14.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp15.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp16.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp17.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp18.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp19.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp20.png') }}" class="partner1">
							</div>
							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/rp21.png') }}" class="partner1">
							</div>

							<div class="col-lg-3 col-6 pt-3">
								<img src="{{ static_asset('assets/assets_web/images/cp31.png') }}" class="partner1">
							</div>
							<div class="col-lg-3">
								<img src="{{ static_asset('assets/assets_web/images/cp6.png') }}" class="partner1">
							</div>
							<div class="col-lg-3">
								<img src="{{ static_asset('assets/assets_web/images/cp7.png') }}" class="partner1">
							</div>
							<div class="col-lg-3">
								<img src="{{ static_asset('assets/assets_web/images/cp8.png') }}" class="partner1">
							</div>
							<div class="col-lg-3">
								<img src="{{ static_asset('assets/assets_web/images/cp11.png') }}" class="partner1">
							</div>
							<div class="col-lg-3">
								<img src="{{ static_asset('assets/assets_web/images/cp9.png') }}" class="partner1">
							</div>
							<div class="col-lg-3">
								<img src="{{ static_asset('assets/assets_web/images/cp10.png') }}" class="partner1">
							</div>
							<div class="col-lg-3">
								<img src="{{ static_asset('assets/assets_web/images/cp12.png') }}" class="partner1">
							</div>
							<div class="col-lg-3">
								<img src="{{ static_asset('assets/assets_web/images/cp13.png') }}" class="partner1">
							</div>
							<div class="col-lg-3">
								<img src="{{ static_asset('assets/assets_web/images/cp14.png') }}" class="partner1">
							</div>
							<div class="col-lg-3">
								<img src="{{ static_asset('assets/assets_web/images/cp15.png') }}" class="partner1">
							</div>
							<div class="col-lg-3">
								<img src="{{ static_asset('assets/assets_web/images/cp16.png') }}" class="partner1">
							</div>
							<div class="col-lg-3">
								<img src="{{ static_asset('assets/assets_web/images/cp17.png') }}" class="partner1">
							</div>
							<div class="col-lg-3">
								<img src="{{ static_asset('assets/assets_web/images/cp18.png') }}" class="partner1">
							</div>
							<div class="col-lg-3">
								<img src="{{ static_asset('assets/assets_web/images/cp19.png') }}" class="partner1">
							</div>
							<div class="col-lg-3">
								<img src="{{ static_asset('assets/assets_web/images/cp20.png') }}" class="partner1">
							</div>
							<div class="col-lg-3">
								<img src="{{ static_asset('assets/assets_web/images/cp21.png') }}" class="partner1">
							</div>
							<div class="col-lg-3">
								<img src="{{ static_asset('assets/assets_web/images/cp22.png') }}" class="partner1">
							</div>
							<div class="col-lg-3">
								<img src="{{ static_asset('assets/assets_web/images/cp23.png') }}" class="partner1">
							</div>
							<div class="col-lg-3">
								<img src="{{ static_asset('assets/assets_web/images/cp24.png') }}" class="partner1">
							</div>
							<div class="col-lg-3">
								<img src="{{ static_asset('assets/assets_web/images/cp95.png') }}" class="partner1">
							</div>
							<div class="col-lg-3">
								<img src="{{ static_asset('assets/assets_web/images/cp31.png') }}" class="partner1">
							</div>
							<div class="col-lg-3">
								<img src="{{ static_asset('assets/assets_web/images/cp32.png') }}" class="partner1">
							</div>
							<div class="col-lg-3">
								<img src="{{ static_asset('assets/assets_web/images/cp33.png') }}" class="partner1">
							</div>
							<div class="col-lg-3">
								<img src="{{ static_asset('assets/assets_web/images/cp34.png') }}" class="partner1">
							</div>
							<div class="col-lg-3">
								<img src="{{ static_asset('assets/assets_web/images/cp35.png') }}" class="partner1">
							</div>
						</div>
					</div>



				</div>
			</div>

		</section>
		<!--Brand One End-->
		<!--Brand One End-->
		<!--section class="testimonial-two">
			<div class="testimonial-two__shape-bg float-bob-y"
				style="background-image: url({{ static_asset('assets/assets_web/images/testimonial-two-shape-bg.png') }});"></div>
			<div class="container">
				<div class="testimonial-two__inner">
					<div class="testimonial-two__sec-title-box">
						<div class="section-title text-left">
							<h2 class="section-title__title"> Customer speak</h2>
						</div>
					</div>
					<div class="testimonial-two__nav">
						<div class="swiper-button-prev" id="testimonial-two__swiper-button-next">
							<i class="icon-arrow-left"></i>
						</div>
						<div class="swiper-button-next" id="testimonial-two__swiper-button-prev">
							<i class="icon-arrow-right"></i>
						</div>
					</div>
					<div class="thm-swiper__slider swiper-container testimonial-two__carousel" data-swiper-options='{"spaceBetween": 30, "slidesPerView": 1,
							"loop": true,
							"pagination": {
								"el": "#testimonial-one-pagination",
								"type": "bullets",
								"clickable": true
								},
								"navigation": {
								"nextEl": "#testimonial-two__swiper-button-next",
								"prevEl": "#testimonial-two__swiper-button-prev"
								},
								"autoplay": { "delay": 5000 },
								"breakpoints": {
								"0": {
									"spaceBetween": 30,
									"slidesPerView": 1
								},
								"375": {
									"spaceBetween": 30,
									"slidesPerView": 1
								},
								"575": {
									"spaceBetween": 30,
									"slidesPerView": 1
								},
								"767": {
									"spaceBetween": 30,
									"slidesPerView": 1
								},
								"991": {
									"spaceBetween": 30,
									"slidesPerView": 1
								},
								"1199": {
									"spaceBetween": 30,
									"slidesPerView": 1
								}
							}}'>
						<div class="swiper-wrapper">

							<div class="swiper-slide">
								<div class="testimonial-two__main-content-box">
									<div class="row">
										<div class="col-xl-4 col-lg-5">
											<div class="testimonial-two__main-content-left">
												<div class="testimonial-two__client-info">
													<div class="testimonial-two__shape-1">
														<img src="{{ static_asset('assets/assets_web/images/testimonial-two-shape-1.png') }}" alt="">
													</div>
													<div class="testimonial-two__client-img">
														<img src="{{ static_asset('assets/assets_web/images/testimonial-two-client-1-1.jpg') }}"
															alt="">
													</div>
													<div class="testimonial-two__client-content-box">
														<div class="testimonial-two__client-circle"></div>
														<div class="testimonial-two__client-content">
															<h5 class="testimonial-two__client-name">Manish Pandey</h5>
															<p class="testimonial-two__client-sub-title">CEO</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-8 col-lg-7">
											<div class="testimonial-two__main-content-right">
												<div class="testimonial-two__rating">
													<span class="icon-star-1"></span>
													<span class="icon-star-1"></span>
													<span class="icon-star-1"></span>
													<span class="icon-star-1"></span>
													<span class="icon-star-1"></span>
												</div>
												<p class="testimonial-two__text">Demo, I have been hiring people in this space
													for a number of years and I have never seen this level of
													professionalism. It really feels like you are working with a team
													that can get the job done.</p>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="testimonial-two__main-content-box">
									<div class="row">
										<div class="col-xl-4 col-lg-5">
											<div class="testimonial-two__main-content-left">
												<div class="testimonial-two__client-info">
													<div class="testimonial-two__shape-1">
														<img src="{{ static_asset('assets/assets_web/images/testimonial-two-shape-1.png') }}" alt="">
													</div>
													<div class="testimonial-two__client-img">
														<img src="{{ static_asset('assets/assets_web/images/testimonial-two-client-1-1.jpg') }}"
															alt="">
													</div>
													<div class="testimonial-two__client-content-box">
														<div class="testimonial-two__client-circle"></div>
														<div class="testimonial-two__client-content">
															<h5 class="testimonial-two__client-name">Rohan Raj</h5>
															<p class="testimonial-two__client-sub-title">CEO</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-8 col-lg-7">
											<div class="testimonial-two__main-content-right">
												<div class="testimonial-two__rating">
													<span class="icon-star-1"></span>
													<span class="icon-star-1"></span>
													<span class="icon-star-1"></span>
													<span class="icon-star-1"></span>
													<span class="icon-star-1"></span>
												</div>
												<p class="testimonial-two__text">Demo, I have been hiring people in this space
													for a number of years and I have never seen this level of
													professionalism. It really feels like you are working with a team
													that can get the job done.</p>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="testimonial-two__main-content-box">
									<div class="row">
										<div class="col-xl-4 col-lg-5">
											<div class="testimonial-two__main-content-left">
												<div class="testimonial-two__client-info">
													<div class="testimonial-two__shape-1">
														<img src="{{ static_asset('assets/assets_web/images/testimonial-two-shape-1.png') }}" alt="">
													</div>
													<div class="testimonial-two__client-img">
														<img src="{{ static_asset('assets/assets_web/images/testimonial-two-client-1-1.jpg') }}"
															alt="">
													</div>
													<div class="testimonial-two__client-content-box">
														<div class="testimonial-two__client-circle"></div>
														<div class="testimonial-two__client-content">
															<h5 class="testimonial-two__client-name">Rahiv Singh</h5>
															<p class="testimonial-two__client-sub-title">CEO</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-8 col-lg-7">
											<div class="testimonial-two__main-content-right">
												<div class="testimonial-two__rating">
													<span class="icon-star-1"></span>
													<span class="icon-star-1"></span>
													<span class="icon-star-1"></span>
													<span class="icon-star-1"></span>
													<span class="icon-star-1"></span>
												</div>
												<p class="testimonial-two__text">Demo, I have been hiring people in this space
													for a number of years and I have never seen this level of
													professionalism. It really feels like you are working with a team
													that can get the job done.</p>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section-->
		<!-- Testimonial Two End -->

@endsection
