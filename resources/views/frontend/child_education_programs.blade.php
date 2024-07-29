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
	<div class="page-section" style="background:url({{ static_asset('assets/assets_web/extra-images/banner-img-bg.jpg')}}); background-size:cover;padding:60px 0;">
    	<div class="container">
            <div class="main-banner">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="cs-text">
                            <a href="#" class="btn-education">Education</a>
                            <h2>Every child will have the opportunity for having better Education</h2>
                            <span><i class="icon-map-marker"></i> Bihar</span>
                            <p>
                                You can help break the cycle of poverty and begin a cycle of progress for children, their families and their entire community and see the difference you are making in their lives first-hand! By just donating Rs 750 for a month, your charitable donations will provide essentials like education, healthcare, clean water, sanitation, and livelihood opportunities so children can have a brighter future.
                                <button type="button" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="icon-plus-circle"></i></button>                                
                            </p>
                            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Education</h4>
                                        </div>
                                        <div class="modal-body">
                                        	<p>
                                            	With Child Sponsorship, you can build a personal connection with a child in a developing country who lives in a community that needs your help. You’ll see the difference you are making through letter writing, annual updates and the opportunity to visit your sponsored child. The “Sponsor a Child” program enables sponsors to form a connection with a specific child. The child receives the financial support it needs to develop personally and academically. As a sponsor, you can follow the progress of your child and see how your contribution positively influences his or her development. We also encourage you to stay in touch with your child, to become a role model and influence the progress of him or her directly.
                                                You can help break the cycle of poverty and begin a cycle of progress for children, their families and their entire community and see the difference you are making in their lives first-hand! By just donating Rs 750 for a month, your charitable donations will provide essentials like education, healthcare, clean water, sanitation, and livelihood opportunities so children can have a brighter future.
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>                                    
                                	</div>
                                </div>
                            </div>
                            <ul class="cs-check-list row">
                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><i class="icon-check-circle"></i> Started working in 2021</li>
                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><i class="icon-check-circle"></i> 3 projects funded</li>
                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><i class="icon-check-circle"></i> Completed: January 2024</li>
                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><i class="icon-check-circle"></i> ₹ 12,00,000 invested</li>
                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><i class="icon-check-circle"></i> Mandatory Child Education</li>
                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><i class="icon-check-circle"></i> Started working in 2024</li>
                            </ul>
                            <div class="cs-gps">
                                <em>
                                    <i class="icon-map5"></i> <span>GPS: 6.989267, 17.277383</span>
                                </em>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="cs-media">
                            <figure><img src="{{ static_asset('assets/assets_web/extra-images/banner-img-10.jpg')}}" alt="#"></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
	<!-- Main Start -->
	<main id="main">
		<div class="main-section">
        	<div class="page-section" style=" position:relative; margin-top:-30px; z-index:9; -webkit-box-shadow: 0px 1px 5px 0px rgba(0,0,0,0.75);-moz-box-shadow: 0px 1px 5px 0px rgba(0,0,0,0.75);box-shadow: 0px 1px 5px 0px rgba(0,0,0,0.75); padding-top:35px;">
            	<div class="container">
                	<div class="row">
                    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        	<div class="cs-donation-section">
                            	<div class="row">
                                	<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <div class="progress" data-percent="43%">
                                            <div class="progress-bar">
                                                <span>43%</span>
                                            </div>
                                        </div>
                                        <div class="cs-counter small">
                                        	<ul>
                                            	<li>
                                                	<div class="cs-media">
                                                    	<figure><img src="{{ static_asset('assets/assets_web/images/icon-total.png')}}" alt="#"></figure>
                                                    </div>
                                                    <p><strong>Rs.</strong><strong class="counter-small">5,58,710 </strong> Total</p>
                                                </li>
                                                <li>
                                                	<div class="cs-media">
                                                    	<figure><img src="{{ static_asset('assets/assets_web/images/icon-collect.png')}}" alt="#"></figure>
                                                    </div>
                                                    <p><strong>Rs.</strong><strong class="counter-small">23,784 </strong> Collected</p>
                                                </li>
                                                <li>
                                                	<div class="cs-media">
                                                    	<figure><img src="{{ static_asset('assets/assets_web/images/icon-donation.png')}}" alt="#"></figure>
                                                    </div>
                                                    <p><strong class="counter-small">91 </strong> Donors</p>
                                                </li>
                                                <li>
                                                	<div class="cs-media">
                                                    	<figure><img src="{{ static_asset('assets/assets_web/images/icon-calender-x.png')}}" alt="#"></figure>
                                                    </div>
                                                    <p><strong class="counter-small">15</strong> July 2024</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <a href="{{url('donation-page')}}" class="cs-btn">Donate Now</a>     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="page-section" style="padding-top:52px; background:#f5f5f5; margin-bottom:57px;">
				<div class="container">
					<div class="row">
                    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        	<div class="cs-section-title" style="margin-bottom:58px;">
                                <h2 style="text-align:center;">Project Plan</h2>
                                <p style="text-align:center;">Inside took wow less pounded massive melodiously the.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        	<div class="cs-projucts">
                            	<div class="cs-media">
                                	<figure>
                                    	<img src="{{ static_asset('assets/assets_web/images/icon-cleaning.png')}}" alt="#">
                                    </figure>
                                </div>
                                <div class="cs-text">
                                	<h3>Identify the Need</h3>
                                    <p>Conduct a needs assessment to understand the educational gaps and challenges faced by children in the target area.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        	<div class="cs-projucts">
                            	<div class="cs-media">
                                	<figure>
                                    	<img src="{{ static_asset('assets/assets_web/images/icon-plant.png')}}" alt="#">
                                    </figure>
                                </div>
                                <div class="cs-text">
                                	<h3>Public Awareness </h3>
                                    <p>
                                        Run campaigns to raise awareness about the importance of child education and the work of your NGO.
                                        Collaborate with other NGOs, government agencies, and private sector partners to amplify your impact.
									</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        	<div class="cs-projucts">
                            	<div class="cs-media">
                                	<figure>
                                    	<img src="{{ static_asset('assets/assets_web/images/icon-trainning.png')}}" alt="#">
                                    </figure>
                                </div>
                                <div class="cs-text">
                                	<h3>Provide Basic Trainings</h3>
                                    <p>
                                        Recruit qualified teachers, administrators, and support staff.Conduct training sessions to ensure that staff are equipped with the necessary skills and knowledge to deliver quality education.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        	<div class="cs-projucts">
                            	<div class="cs-media">
                                	<figure>
                                    	<img src="{{ static_asset('assets/assets_web/images/icon-saverage.png')}}" alt="#">
                                    </figure>
                                </div>
                                <div class="cs-text">
                                	<h3>Diversify Funding Sources</h3>
                                    <p>
                                        Continually seek new funding opportunities and diversify your income streams.Expand successful programs to new areas or develop new initiatives based on evolving needs.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
            <div class="container">
            	<div class="row">
                	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="cs-separator" style="margin-bottom:30px;">
                            <span><i class="icon-plus4"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-section" style="margin-bottom:30px;">
                <div class="container">
                    <div class="cs-projects">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="cs-section-title" style="margin-bottom:25px;">
                                    <h2>Our Projects</h2>
                                    <p>Inside took wow less pounded massive melodiously the.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="project-item">
                                    <div class="cs-media">
                                        <figure> <img alt="#"
                                                src="{{ static_asset('assets/assets_web/extra-images/nimg26.jpg') }}">
                                            <figcaption> <a href="#"><span>Read More</span></a> </figcaption>
                                        </figure>
                                    </div>
                                    <div class="cs-text"> <em><i class="icon-droplet2"></i></em>
                                        <h6><a href="#">stock Insurance Scheme
                                                subsidy, Grants</a></h6>
                                        <span> Bihar</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="project-item">
                                    <div class="cs-media">
                                        <figure> <img alt="#"
                                                src="{{ static_asset('assets/assets_web/extra-images/nimg27.jpg') }}">
                                            <figcaption> <a href="#"><span>Read More</span></a> </figcaption>
                                        </figure>
                                    </div>
                                    <div class="cs-text"> <em><i class="icon-graduation"></i></em>
                                        <h6><a href="#">Schemes and Grants for
                                                NGO’s working And Donation</a></h6>
                                        <span>Katihar, Bihar</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="project-item">
                                    <div class="cs-media">
                                        <figure> <img alt="#"
                                                src="{{ static_asset('assets/assets_web/extra-images/nimg28.jpg') }}">
                                            <figcaption> <a href="#"><span>Read More</span></a> </figcaption>
                                        </figure>
                                    </div>
                                    <div class="cs-text"> <em><i class="icon-group"></i></em>
                                        <h6><a href="#">Dairy Entrepreneurship
                                                scheme 2023</a></h6>
                                        <span>Arariya, Bihar</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="project-item">
                                    <div class="cs-media">
                                        <figure> <img alt="#"
                                                src="{{ static_asset('assets/assets_web/extra-images/nimg25.jpg') }}">
                                            <figcaption> <a href="#"><span>Read More</span></a> </figcaption>
                                        </figure>
                                    </div>
                                    <div class="cs-text"> <em><i class="icon-institution"></i></em>
                                        <h6><a href="#">Schemes of Ministry new
                                                renewable Energy</a></h6>
                                        <span>Patna, Bihar</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-section" style="margin-bottom:33px;">
            	<div class="container">
                	<div class="row">
                    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        	<div class="cs-section-title" style="margin-bottom:28px;">
                                <h2 style="text-align:center;">Project Statistics</h2>
                                <p style="text-align:center;">Inside took wow less pounded massive melodiously the.</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="cs-counter big">
                                <ul>
                                    <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="cs-media">
                                            <figure>
                                                <i class="icon-droplet2"></i>
                                            </figure>
                                        </div>
                                        <div class="cs-text">
                                            <strong class="counter-small">5,58,710</strong>
                                            <p>Child education funded</p>
                                        </div>
                                    </li>
                                    <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="cs-media">
                                            <figure>
                                                <i class="icon-graduation"></i>
                                            </figure>
                                        </div>
                                        <div class="cs-text">
                                            <strong class="counter-small">12,00,000</strong>
                                            <p>Proper Education facility </p>
                                        </div>
                                    </li>
                                    <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="cs-media">
                                            <figure>
                                                <i class="icon-group"></i>
                                            </figure>
                                        </div>
                                        <div class="cs-text">
                                            <strong class="counter-small">625</strong>
                                            <p>local partners</p>
                                        </div>
                                    </li>
                                    <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="cs-media">
                                            <figure>
                                                <i class="icon-institution"></i>
                                            </figure>
                                        </div>
                                        <div class="cs-text">
                                            <strong class="counter-small">10,478</strong>
                                            <p>July 15, 2024</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</main>
@endsection