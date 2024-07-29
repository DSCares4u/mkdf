@extends('frontend.layouts.master')
@section('title') Learning & Development @endsection

@section('meta_tags')
	<meta name="title" content="Learning & Development">
    <meta name="keywords" content="Learning & Development">
    <meta name="description" content="Learning & Development">
@endsection

@section('content')

<style>
    .section-title__title {
    position: relative;
    display: block;
    color: var(--thm-black);
    font-size: 38px;
    font-weight: 700;
    line-height: 75px;
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
		font-size: 29px;
		font-weight: 700;
		line-height: 51px;
		letter-spacing: -2.4px;
		text-transform: capitalize;
		margin-top: 7px;
	}
}
</style>

     <!--Page Header Start-->
		<section class="page-header">
			<div class="page-header__bg" style="background-image: url({{ static_asset('assets/assets_web/images/page-header-bg.jpg') }});"></div>
			<div class="container">
				<div class="page-header__inner">
					<h2>Learning & Development</h2>
					<div class="thm-breadcrumb__box">

					</div>
				</div>
			</div>
		</section>
		<!--Page Header End-->

        <section class="about-two">
			<div class="container">
				<div class="row">
				<div class="col-xl-12">
				<p align="justify">Investing in employee development is essential for both individual growth and organizational success. We offer tailored training programs and opportunities for skill development, career advancement, and continuous learning. By investing in their growth and development, organizations can increase employee engagement and retention.</p>
				</div>
					<div class="col-xl-8">
						<div class="about-two__left">
						<div class="section-title text-left">
								<h2 class="section-title__title text-dark">A. Management & Behavioral </h2>
							</div>
							<div class="project-details__content-points-box">
										<ul class="project-details__content-points">
											<li>
												<p>Emotional Intelligence Mastery</p>
											</li>
											<li>
												<p>Confidence building</p>
											</li>
											<li>
												<p>High Performance Team Management</p>
											</li>
											<li>
												<p>Managerial Effectiveness</p>
											</li>
											<li>
												<p>Art of Delegation</p>
											</li>
											<li>
												<p>Manager to Leader</p>
											</li>
										</ul>
										<ul class="project-details__content-points project-details__content-points-2">
											<li>
												<p>Leadership Development</p>
											</li>
											<li>
												<p>Business Etiquettes & Communication</p>
											</li>
											<li>
												<p>Creating Brand called ‘I’</p>
											</li>
											<li>
												<p>Art of Story Telling</p>
											</li>
											<li>
												<p>Change Management</p>
											</li>
											<li>
												<p>Transition Training</p>
											</li>
										</ul>
									</div>



						</div>
					</div>
					<div class="col-xl-4">
						<div class="about-two__right1 wow slideInRight" data-wow-delay="100ms"
							data-wow-duration="2500ms">
							<div class="about-two__img-box">
							<img src="{{ static_asset('assets/assets_web/images/lm2.jpg') }}" class="partner1">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        <!-- About One Start -->
		<section class="about-one">
			<div class="container">
				<div class="row">
					<div class="col-xl-6">
						<div class="about-one__left">
							<div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
								data-wow-duration="2500ms">

									<img src="{{ static_asset('assets/assets_web/images/lm1.jpg') }}" alt="" class="partner1">


							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="about-one__right wow fadeInRight" data-wow-delay="300ms">
							<div class="section-title text-left">
								<h2 class="section-title__title">B. Wellness & Work Life balance </h2>
							</div>
							<ul class="project-details__bottom-points">
										<li>

											<p>Stress Management </p>
										</li>
										<li>

											<p>Sutras of Conscious Synergy: Integrating Mind , Body & Spirit </p>
										</li>
										<li>

											<p>NLP</p>
										</li>
										<li>

											<p>Wellness Retreats </p>
										</li>
									</ul>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- About One End -->
        <section class="about-two mb-5 pb-5">
			<div class="container">
				<div class="row">
					<div class="col-xl-6">
						<div class="about-two__left">
						<div class="section-title text-left">
								<h2 class="section-title__title text-dark">C. Technology & Innovation</h2>
							</div>

							<ul class="project-details__bottom-points">
										<li>

											<p>AI Essentials</p>
										</li>
										<li>

											<p>Chat GPT Training & implementation</p>
										</li>
										<li>

											<p>Block chain Basics for business </p>
										</li>
										<li>

											<p>Machine Learning</p>
										</li>
									</ul>

						</div>
					</div>
					<div class="col-xl-6">
						<div class="about-two__right wow slideInRight pb-5 mb-5" data-wow-delay="100ms"
							data-wow-duration="2500ms">
							<div class="about-two__img-box">
							<img src="{{ static_asset('assets/assets_web/images/lm3.jpg') }}" class="partner1">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="about-one">
			<div class="container">
				<div class="row">
					<div class="col-xl-6">
						<div class="about-one__left">
							<div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
								data-wow-duration="2500ms">

									<img src="{{ static_asset('assets/assets_web/images/lm4.jpg') }}" alt="Compliance & safety" class="partner1">


							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="about-one__right wow fadeInRight" data-wow-delay="300ms">
							<div class="section-title text-left">
								<h2 class="section-title__title">D. Compliance & safety</h2>
							</div>
							<ul class="project-details__bottom-points">
										<li>

											<p>Prevention of sexual harassment at work place(PoSH) </p>
										</li>
										<li>

											<p>Behavior based safety training </p>
										</li>
										<li>

											<p>Lean Six Sigma   </p>
										</li>
										<li>

											<p>DEI awareness programs  </p>
										</li>
                                        <li>

											<p>Code of Conduct</p>
										</li>
                                        <li>

											<p>Anti Bribery & corruption</p>
										</li>
                                        <li>

											<p>Competition compliance </p>
										</li>
									</ul>

						</div>
					</div>
				</div>
			</div>
		</section>
        <section class="about-two">
			<div class="container">
				<div class="row">
					<div class="col-xl-6">
						<div class="about-two__left">
						<div class="section-title text-left">
								<h2 class="section-title__title text-dark">E. Sales & Communication</h2>
							</div>

							<ul class="project-details__bottom-points">
										<li>

											<p>Developing sales attitude </p>
										</li>
										<li>

											<p>Presentation skills </p>
										</li>
										<li>

											<p>Negotiation Skills</p>
										</li>
										<li>

											<p>Customer centricity – Build a consultative mindset </p>
										</li>
                                        <li>

											<p>Effective Business communication </p>
										</li>
                                        <li>

											<p>Media handling  </p>
										</li>
									</ul>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="about-two__right wow slideInRight pb-5 mb-5" data-wow-delay="100ms"
							data-wow-duration="2500ms">
							<div class="about-two__img-box">
							<img src="{{ static_asset('assets/assets_web/images/lm5.jpg') }}" class="partner1">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        <section class="about-one">
			<div class="container">
				<div class="row">
					<div class="col-xl-6">
						<div class="about-one__left">
							<div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
								data-wow-duration="2500ms">

									<img src="{{ static_asset('assets/assets_web/images/lm6.jpg') }}" alt="Compliance & safety" class="partner1">


							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="about-one__right wow fadeInRight" data-wow-delay="300ms">
							<div class="section-title text-left">
								<h2 class="section-title__title">F. Others </h2>
							</div>
							<p>Time Management, Positive attitude, Interviewing skills, Corporate Grooming, Power of Habit, Growth Mindset – How to Grow every day
</p>

						</div>
					</div>

				</div>
			</div>
		</section>

		<section class="about-two mb-5 pb-5">
			<div class="container">
				<div class="row">
					<div class="col-xl-8">
						<div class="about-two__left">
						<div class="section-title text-left">
								<h2 class="section-title__title text-dark">Continuous Monitoring and Evaluation</h2>
							</div>

							<p>We believe in the importance of continuously monitoring and evaluating employee development. initiatives to measure their effectiveness and make necessary adjustments. Through regular assessments and feedback mechanisms, we help organizations track progress, identify areas for improvement, and sustain a culture of engagement over time.</p>
						</div>
					</div>
					<div class="col-xl-4">
						<div class="wow slideInRight pb-5 mb-5" data-wow-delay="100ms"
							data-wow-duration="2500ms">

							<img src="{{ static_asset('assets/assets_web/images/ee8.jpg') }}" class="partner1">

						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="services-two pb-2 pt-1 mt-1">
			<div class="services-two__shape-1" style="background-image: url({{ static_asset('assets/assets_web/images/services-two-shape-1.png')}});">
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
