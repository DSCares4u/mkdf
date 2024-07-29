@extends('frontend.layouts.master')
@section('title') Recruitment @endsection

@section('meta_tags')
	<meta name="title" content="Recruitment">
    <meta name="keywords" content="Recruitment">
    <meta name="description" content="Recruitment">
@endsection

@section('content')

<style>
	.why-choose-one__left {
    position: relative;
    display: block;
    margin-right: 0px;
}
.why-choose-one__text {
    color: #999;
    text-align: justify;
}
.why-choose-one__img-box {
    position: absolute;
    right: -521px;
    top: 30px;
    width: 442px;
    height: 466px;
    z-index: 9;
    -webkit-clip-path: inset(0 100% 0 0);
    clip-path: inset(0 100% 0 0);
    pointer-events: none;
    -webkit-animation: inactiveImageAnimation3 1s forwards ease;
    animation: inactiveImageAnimation3 1s forwards ease;
    border-radius: 20px;
}
</style>

     <!--Page Header Start-->
		<section class="page-header">
			<div class="page-header__bg" style="background-image: url({{ static_asset('assets/assets_web/assets_web/images/page-header-bg.jpg') }};"></div>
			<div class="container">
				<div class="page-header__inner">
					<h2>Recruitment</h2>
					<div class="thm-breadcrumb__box">

					</div>
				</div>
			</div>
		</section>
		<!--Page Header End-->


		<section class="why-choose-one get-in-touch">
			<div class="why-choose-one__bg" style="background-image: url({{ static_asset('assets/assets_web/images/why-choose-one-bg.jpg') }});">
			</div>
			<div class="container">
				<div class="get-in-touch__inner pb-5 mb-3">
					<div class="get-in-touch__bottom">
						<h2 class="get-in-touch__title">We transcend the mere science of search and instead prioritize
							intuition, assessment, and the art of influence.</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-7">
						<div class="why-choose-one__left">
							<p class="why-choose-one__text text-dark"><strong>Strategic Talent Acquisition : </strong> We understand that attracting top talent is crucial for the success of any organization. Our team works closely with clients to develop customized recruitment strategies that align with their business objectives and culture.</p>
							<p class="why-choose-one__text text-dark pt-2"><strong>Access to Top Talent:</strong> Leveraging our extensive networks and industry expertise, we have access to a diverse pool of highly qualified candidates across various industries and job functions. Whether our clients are seeking entry-level professionals or C-suite executives, we have the resources and capabilities to source top talent.</p>
							<p class="why-choose-one__text text-dark pt-2"><strong>Efficient Screening and Selection Process : </strong>	We employ rigorous screening and selection processes to ensure that only the most suitable candidates are presented to our clients. This includes comprehensive resume screening, behavioral assessments, skills testing, and in-depth interviews to assess candidates' qualifications, experience, and cultural fit.</p>
							<p class="why-choose-one__text text-dark pt-2"><strong>Streamlined Recruitment Process:</strong> We understand the importance of time and efficiency in the recruitment process. Our streamlined processes and advanced technology enable us to quickly identify, screen, and shortlist candidates, minimizing time-to-fill and ensuring a smooth and efficient hiring process for our clients.</p>
							<p class="why-choose-one__text text-dark pt-2"><strong>Flexible Engagement Models:</strong> We offer flexible engagement models to accommodate the unique needs and preferences of our clients. Whether they require temporary staffing, permanent placements, or project-based hiring solutions, we tailor our services to meet their specific requirements.</p>
							<p class="why-choose-one__text text-dark pt-2"><strong>Continuous Support and Feedback:</strong>	 Our commitment to client satisfaction extends beyond the recruitment process. We provide ongoing support and feedback to our clients and candidates, ensuring that their needs are met and expectations are exceeded at every stage of the hiring journey.</p>


							<ul class="why-choose-one__points clearfix">
								<li class="cs-hover_tab-3 active clearfix">
									<div class="icon">
										<img src="{{ static_asset('assets/assets_web/images/ts1.png') }}">
									</div>
									<div class="content">
										<p>C Level Talent acquisition</p>
									</div>
									<div class="why-choose-one__img-box"
										data-src="{{ static_asset('assets/assets_web/images/why-choose-one-img.jpg') }}">
									</div>
								</li>
								<li class="cs-hover_tab-3 clearfix">
									<div class="icon">
									<img src="{{ static_asset('assets/assets_web/images/ts2.png') }}">
									</div>
									<div class="content">
										<p>Mid, Senior level talent acquisition</p>
									</div>

								</li>
								<li class="cs-hover_tab-3 clearfix">
									<div class="icon">
									<img src="{{ static_asset('assets/assets_web/images/ts3.png') }}">
									</div>
									<div class="content">
										<p>Value Added Services – Background Checks, Market insights, Dedicated SPOC,
											Pre-employment Medical Test for onboarding</p>
									</div>
									<div class="why-choose-one__img-box"
										data-src="{{ static_asset('assets/assets_web/images/why-choose-one-img.jpg') }}"></div>
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!--Why Choose One End-->
		<section class="process-one">
			<div class="container">
				<div class="section-title text-center">
					<h2 class="section-title__title">Confianza Advantage</h2>
				</div>
				<div class="row">
					<!--Process One Single Start-->
					<div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
						<div class="process-one__single">
							<img src="{{ static_asset('assets/assets_web/images/bb111.jpg') }}" class="partner1">
							<h3 class="process-one__title pt-3"><a href="#">Customer orientation</a></h3>
						</div>
					</div>
					<!--Process One Single End-->

					<!--Process One Single Start-->
					<div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
						<div class="process-one__single">
						<img src="{{ static_asset('assets/assets_web/images/bb3.jpg') }}" class="partner1">
							<h3 class="process-one__title pt-3"><a href="#">We deliver quality</a></h3>
						</div>
					</div>
					<!--Process One Single End-->
					<!--Process One Single Start-->
					<div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
						<div class="process-one__single">
						<img src="{{ static_asset('assets/assets_web/images/ad1.jpg') }}" class="partner1">
							<h3 class="process-one__title pt-3"><a href="#">We are reliable</a></h3>
						</div>
					</div>
					<!--Process One Single End-->

								<!--Process One Single Start-->
								<div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
						<div class="process-one__single">
						<img src="{{ static_asset('assets/assets_web/images/ad3.jpg') }}" class="partner1">
							<h3 class="process-one__title pt-3"><a href="#">You can trust us</a></h3>
						</div>
					</div>
					<!--Process One Single End-->
				</div>
			</div>
		</section>
		<!-- Process One End -->
		<!--Services Two Start-->
		<section class="services-two pb-2 pt-1 mt-1">
			<div class="services-two__shape-1" style="background-image: url({{ static_asset('assets/assets_web/images/services-two-shape-1.png') }});">
			</div>
			<div class="container">
				<div class="row">
                    <div class="col-lg-12 pt-1">
                        <a href="{{ url('') }}#services"><i class="icon-arrow-left"></i> &nbsp; <span style="font-size:24px;">Back</span></a>
                    </div>
                </div>


			</div>
		</section>

@endsection
