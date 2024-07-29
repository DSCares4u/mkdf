@extends('frontend.layouts.master')
@section('title') Decoding Confianza @endsection

@section('meta_tags')
	<meta name="title" content="Decoding Confianza">
    <meta name="keywords" content="Decoding Confianza">
    <meta name="description" content="Decoding Confianza">
@endsection

@section('content')
    <style>
	.project-details__bottom-points {
    position: relative;
    display: block;
    margin-top: 31px;
}
</style>
	 <!--Page Header Start-->
		<section class="page-header">
			<div class="page-header__bg" style="background-image: url({{ static_asset('assets/assets_web/images/page-header-bg.jpg') }});"></div>
			<div class="container">
				<div class="page-header__inner">
					<h2>Decoding Confianza</h2>
                </div>
			</div>
		</section>
		<!--Page Header End-->


		<section class="banner-two">
			<div class="banner-two__bg" style="background-image: url({{ static_asset('assets/assets_web/images/banner-two-bg.jpg') }});"></div>
			<div class="container">
				<div class="banner-two__inner">

					<div class="banner-two__top wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">

						<p class="banner-two__top-text">At Confianza, trust and transparency are the cornerstones of
							everything we do. We believe that fostering an environment built on trust and transparency
							is essential for meaningful relationships, effective collaboration, and long-term success.
							Our commitment to these values is evident in every aspect of our operations, guiding our
							interactions with clients, partners, and each other.</p>

					</div>
				</div>
			</div>
		</section>
		<!-- Banner Two End -->

		<section class="faq-one">
			<div class="container">
				<div class="section-title text-center">
					<h2 class="section-title__title">Trust
					</h2>
				</div>
				<div class="row">
					<div class="col-xl-6">
						<div class="faq-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
							<div class="faq-one__content-box">
								<img src="{{ static_asset('assets/assets_web/images/trust1.jpg') }}" alt="Trust" class="partner1">
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="faq-one__right">
							<div class="accrodion-grp" data-grp-name="faq-one-accrodion">
								<div class="accrodion">
									<div class="accrodion-title">
										<h4>Integrity</h4>
									</div>
									<div class="accrodion-content">
										<div class="inner">
											<ul class="blog-details__points">
												<li>
													<div class="blog-details__points-shape"></div>
													<p>We conduct ourselves with unwavering integrity, always adhering
														to the highest ethical standards in our actions and decisions.
													</p>
												</li>
											</ul>
										</div><!-- /.inner -->
									</div>
								</div>
								<div class="accrodion  active">
									<div class="accrodion-title">
										<h4>Reliability</h4>
									</div>
									<div class="accrodion-content">
										<div class="inner">
											<ul class="blog-details__points">
												<li>
													<div class="blog-details__points-shape"></div>
													<p>We prioritize reliability and consistency in our services,
														delivering on our promises and commitments to clients and
														stakeholders.</p>
												</li>
											</ul>
										</div><!-- /.inner -->
									</div>
								</div>
								<div class="accrodion">
									<div class="accrodion-title">
										<h4>Accountability</h4>
									</div>
									<div class="accrodion-content">
										<div class="inner">
											<ul class="blog-details__points">
												<li>
													<div class="blog-details__points-shape"></div>
													<p>We hold ourselves accountable for our actions and outcomes,
														taking ownership of our responsibilities and learning from our
														mistakes.</p>
												</li>
											</ul>
										</div><!-- /.inner -->
									</div>
								</div>
								<div class="accrodion">
									<div class="accrodion-title">
										<h4>Confidentiality</h4>
									</div>
									<div class="accrodion-content">
										<div class="inner">
											<ul class="blog-details__points">
												<li>
													<div class="blog-details__points-shape"></div>
													<p>We respect the confidentiality of sensitive information shared
														with us by clients and colleagues, maintaining strict
														confidentiality and discretion in all our dealings.</p>
												</li>
											</ul>
										</div><!-- /.inner -->
									</div>
								</div>
								<div class="accrodion">
									<div class="accrodion-title">
										<h4>Dependability</h4>
									</div>
									<div class="accrodion-content">
										<div class="inner">
											<ul class="blog-details__points">
												<li>
													<div class="blog-details__points-shape"></div>
													<p>Clients can depend on us to act in their best interests,
														providing honest advice, reliable support, and solutions
														tailored to their needs.</p>
												</li>
											</ul>
										</div><!-- /.inner -->
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Faq One End -->
		<section class="faq-one">
			<div class="container">
				<div class="section-title text-center">
					<h2 class="section-title__title">Transparency
					</h2>
				</div>
				<div class="row">
					<div class="col-xl-6">
						<div class="faq-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
							<div class="faq-one__content-box">
								<img src="{{ static_asset('assets/assets_web/images/de1.jpg') }}" alt="Transparency" class="partner1">
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="faq-one__right">
							<div class="accrodion-grp" data-grp-name="faq-one-accrodion">
								<div class="accrodion">
									<div class="accrodion-title">
										<h4>Open Communication</h4>
									</div>
									<div class="accrodion-content">
										<div class="inner">
											<ul class="blog-details__points">
												<li>
													<div class="blog-details__points-shape"></div>
													<p>We foster open and transparent communication with clients,
														partners, and team members, ensuring clarity, honesty, and
														mutual understanding.</p>
												</li>
											</ul>
										</div><!-- /.inner -->
									</div>
								</div>
								<div class="accrodion  active">
									<div class="accrodion-title">
										<h4>Information Sharing</h4>
									</div>
									<div class="accrodion-content">
										<div class="inner">
											<ul class="blog-details__points">
												<li>
													<div class="blog-details__points-shape"></div>
													<p>We believe in sharing relevant information openly and
														proactively, empowering stakeholders to make informed decisions
														and contribute effectively.</p>
												</li>
											</ul>
										</div><!-- /.inner -->
									</div>
								</div>
								<div class="accrodion">
									<div class="accrodion-title">
										<h4>Clear Expectations</h4>
									</div>
									<div class="accrodion-content">
										<div class="inner">
											<ul class="blog-details__points">
												<li>
													<div class="blog-details__points-shape"></div>
													<p>We set clear expectations and objectives for projects and
														engagements, ensuring alignment and transparency throughout the
														process.</p>
												</li>
											</ul>
										</div><!-- /.inner -->
									</div>
								</div>
								<div class="accrodion">
									<div class="accrodion-title">
										<h4>Feedback Culture</h4>
									</div>
									<div class="accrodion-content">
										<div class="inner">
											<ul class="blog-details__points">
												<li>
													<div class="blog-details__points-shape"></div>
													<p>We embrace a culture of constructive feedback, encouraging open
														dialogue and continuous improvement to drive positive change and
														growth.</p>
												</li>
											</ul>
										</div><!-- /.inner -->
									</div>
								</div>
								<div class="accrodion">
									<div class="accrodion-title">
										<h4>Accessibility</h4>
									</div>
									<div class="accrodion-content">
										<div class="inner">
											<ul class="blog-details__points">
												<li>
													<div class="blog-details__points-shape"></div>
													<p>We maintain accessibility and approachability, making ourselves
														available to address concerns, answer questions, and provide
														guidance whenever needed.</p>
												</li>
											</ul>
										</div><!-- /.inner -->
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Faq One End -->

		<section class="about-two mb-1 pb-1">
			<div class="container">
				<div class="row">
					<div class="col-xl-6">
						<div class="about-two__left pt-5">
							<div class="section-title text-left">
								<h2 class="section-title__title">Mission</h2>
							</div>

							<ul class="project-details__bottom-points">
								<li>
									<p>Empowering organizations to thrive through strategic HR solutions, fostering a
										culture of growth, innovation, and inclusivity.</p>
								</li>
							</ul>
						</div>
						<div class="about-two__left pt-3">
							<div class="section-title text-left">
								<h2 class="section-title__title">Vision</h2>
							</div>

							<ul class="project-details__bottom-points">
								<li>
									<p>To be the trusted partner of choice for businesses seeking to optimize their human capital potential, driving sustainable success and organizational excellence.</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="wow slideInRight pb-3 mb-2 animated" data-wow-delay="100ms"
							data-wow-duration="2500ms"
							style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
							<div class="about-two__img-box">
								<img src="{{ static_asset('assets/assets_web/images/lm5.jpg') }}" class="partner1">
							</div>
						</div>
					</div>
				</div>
		</div>
		</section>

		<section class="get-in-touch">
			<div class="container">
				<div class="get-in-touch__inner">
					<div class="get-in-touch__bottom">
						<h2 class="get-in-touch__title">We aim to deliver Quality <br>
						services at Value Proposition !!</h2>
					</div>
				</div>
			</div>
		</section>

@endsection
