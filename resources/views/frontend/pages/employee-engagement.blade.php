@extends('frontend.layouts.master')
@section('title') Employee Engagement @endsection

@section('meta_tags')
	<meta name="title" content="Employee Engagement">
    <meta name="keywords" content="Employee Engagement">
    <meta name="description" content="Employee Engagement">
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
					<h2>Employee Engagement</h2>
					<div class="thm-breadcrumb__box">

					</div>
				</div>
			</div>
		</section>
		<!--Page Header End-->
		<section class="about-two mb-5 pb-5">
			<div class="container">
				<div class="row">
					<div class="col-xl-9 wow fadeInLeft animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInLeft;">
						<div class="about-two__left">
							<div class="section-title text-left">
								<h2 class="section-title__title text-primary">Employee Surveys and Feedback Mechanisms</h2>
							</div>
							<p>We conduct regular employee surveys to gauge satisfaction levels, gather feedback, and
								identify areas for improvement. These surveys provide valuable insights into employee
								sentiments, allowing organizations to address concerns and implement initiatives to
								boost engagement.</p>

						</div>
					</div>
					<div class="col-xl-3">
						<img src="{{ static_asset('assets/assets_web/images/ee1.jpg') }}">
					</div>
				</div>
				<div class="row pt-3">
					<div class="col-xl-3"><img src="{{ static_asset('assets/assets_web/images/ee2.jpg') }}"></div>
					<div class="col-xl-9 wow fadeInLeft animated" data-wow-delay="200ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInLeft;">
						<div class="about-two__left">
						<div class="section-title text-left">
								<h2 class="section-title__title text-primary">Culture and Values Alignment</h2>
							</div>
							<p>We work with organizations to define and reinforce their core values and company culture. By aligning employee values with organizational goals, we create a sense of purpose and belonging, driving higher levels of engagement and commitment.</p>

						</div>
					</div>
				</div>


				<div class="row pt-3">
					<div class="col-xl-9 wow fadeInLeft animated" data-wow-delay="400ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInLeft;">
						<div class="about-two__left">
						<div class="section-title text-left">
								<h2 class="section-title__title text-primary">Rewards & Recognition Programs</h2>
							</div>
							<p>We assist organizations in designing and implementing rewards and recognition programs to acknowledge and celebrate employee achievements and contributions. Whether through monetary incentives, awards, or other forms of recognition, these programs reinforce positive behaviors and motivate employees to excel.</p>

						</div>
					</div>
					<div class="col-xl-3"><img src="{{ static_asset('assets/assets_web/images/ee4.jpg') }}"></div>
				</div>

				<div class="row pt-4">
				<div class="col-xl-3"><img src="{{ static_asset('assets/assets_web/images/ee7.jpg') }}"></div>
				<div class="col-xl-9 wow fadeInLeft animated" data-wow-delay="700ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInLeft;">
						<div class="about-two__left">
							<div class="section-title text-left">
								<h2 class="section-title__title text-primary">Employee Engagement Events and Activities</h2>
							</div>
							<p>We organize engaging events and activities, such as team-building exercises, social gatherings, and community service initiatives, to foster camaraderie, collaboration, and a sense of belonging among employees. These events create opportunities for bonding and relationship-building outside of the traditional work setting.</p>

						</div>
					</div>

				</div>



			</div>
		</section>


		<section class="services-two pb-2 pt-1 mt-1">
			<div class="services-two__shape-1" style="background-image: url({{ static_asset('assets/assets_web/images/services-two-shape-1.png') }});">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 pt-1">
						<a href="{{ url('') }}#services"><i class="icon-arrow-left"></i> &nbsp; <span
								style="font-size:24px;">Back</span></a>
					</div>
				</div>


			</div>
		</section>

@endsection
