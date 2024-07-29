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
	<!-- Main Start -->
	<main id="main">
		<div class="main-section">
            <div class="page-section" style="padding-top:29px;">
            	<div class="container">
                	<div class="row">
                    	<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        	<div class="project-holder">
                            	<div class="row">
                                	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    	<a class="btn-education" href="#">Camping For Blood Donation</a>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="cs-section-title" style="margin-bottom:27px;">
                                            <h2 style="text-align:left;">Regular Blood Donors are real heros</h2>
                                            <span><i class="icon-map-marker"></i> Purnea, Bihar</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    	<div class="project-gps">
                                    		<div class="cs-media">
                                                <figure>
                                                    <img src="{{ static_asset('assets/assets_web/extra-images/nimg32.jpg')}}" alt="#">
                                                    <figcaption>
                                                        <i class="icon-map5"></i> <span>GPS: 6.989267, 17.277383</span>
                                                    </figcaption>
                                                </figure>
                                        	</div>
                                        </div>
                                        <ul class="cs-check-list row">
                                        	<li class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><i class="icon-check-circle"></i> Started working in 2013</li>
                                            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><i class="icon-check-circle"></i> Started working in 2013</li>
                                            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><i class="icon-check-circle"></i> Started working in 2013</li>
                                            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><i class="icon-check-circle"></i> Started working in 2013</li>
                                            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><i class="icon-check-circle"></i> Started working in 2013</li>
                                            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><i class="icon-check-circle"></i> Started working in 2013</li>
                                        </ul>
                                        <div class="cs-text">
                                            <p>
                                                We appreciate for your initiative for this noble cause and we are always here to help. Blood Donors are real hero as they are helping to save human life. Donating blood is a simple thing to do, but it can make a big difference in the lives. Our volunteer/staff will ask you to fill a form with brief information on contact details and medical history.
                                            </p>
                                            <p>Before Donating Blood The donation process from the time you arrive until the time you leave takes about 20-25 minutes. The donation itself is only about 8-10 minutes on average.The steps in the process are :Eat something substantial before your appointment. Have plenty of liquid the day before donation, especially in warm weather. In the 3 hours before donating, have at least 3 to 4 good-sized glasses of water/juice.Physical Health check-upYou will be examined by a doctor to answer some questions about your health history. Your blood pressure and hemoglobin level will be checked.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="cs-section-title" style="margin-bottom:27px;">
                                            <h2 style="text-align:left;">Project Plan</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <ul class="nav nav-tabs nav-justified">
                                            <li class="active"><a data-toggle="tab" href="#home">01. Location Inspection</a></li>
                                            <li><a data-toggle="tab" href="#menu1">02. Site Visit</a></li>
                                            <li><a data-toggle="tab" href="#menu2">03. Remodeling Structure</a></li>
                                            <li><a data-toggle="tab" href="#menu3">04. Implementation</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="home" class="tab-pane fade in active">
                                                <h3>01. Location Inspection</h3>
                                                <p>
                                                	Crud irrespective that this less mongoose industrious obdurately. Abandonedly tore a jeepers hence overrode preparatory far as up together squid rattlesnake far inside.
                                                </p>
                                                <p>
                                                	Crud irrespective that this less mongoose industrious obdurately. Abandonedly tore a jeepers hence overrode preparatory far as up together squid rattlesnake far inside concomitantly. Crud irrespective that this less mongoose industrious obdurately. Abandonedly tore a jeepers hence overrode preparatory far as up together squid rattlesnake far inside concomitantly.Crud irrespective that this less mongoose industrious obdurately. Abandonedly tore a jeepers hence overrode preparatory far as up together squid rattlesnake far inside concomitantly.
                                                </p>
                                            </div>
                                            <div id="menu1" class="tab-pane fade">
                                                <h3>02. Site Visit</h3>
                                                 <p>
                                                	Crud irrespective that this less mongoose industrious obdurately. Abandonedly tore a jeepers hence overrode preparatory far as up together squid rattlesnake far inside.
                                                </p>
                                                <p>
                                                	Crud irrespective that this less mongoose industrious obdurately. Abandonedly tore a jeepers hence overrode preparatory far as up together squid rattlesnake far inside concomitantly. Crud irrespective that this less mongoose industrious obdurately. Abandonedly tore a jeepers hence overrode preparatory far as up together squid rattlesnake far inside concomitantly.Crud irrespective that this less mongoose industrious obdurately. Abandonedly tore a jeepers hence overrode preparatory far as up together squid rattlesnake far inside concomitantly.
                                                </p>
                                            </div>
                                            <div id="menu2" class="tab-pane fade">
                                                <h3>03. Remodeling Structure</h3>
                                                 <p>
                                                	Crud irrespective that this less mongoose industrious obdurately. Abandonedly tore a jeepers hence overrode preparatory far as up together squid rattlesnake far inside.
                                                </p>
                                                <p>
                                                	Crud irrespective that this less mongoose industrious obdurately. Abandonedly tore a jeepers hence overrode preparatory far as up together squid rattlesnake far inside concomitantly. Crud irrespective that this less mongoose industrious obdurately. Abandonedly tore a jeepers hence overrode preparatory far as up together squid rattlesnake far inside concomitantly.Crud irrespective that this less mongoose industrious obdurately. Abandonedly tore a jeepers hence overrode preparatory far as up together squid rattlesnake far inside concomitantly.
                                                </p>
                                            </div>
                                            <div id="menu3" class="tab-pane fade">
                                                <h3>04. Implementation</h3>
                                                 <p>
                                                	Crud irrespective that this less mongoose industrious obdurately. Abandonedly tore a jeepers hence overrode preparatory far as up together squid rattlesnake far inside.
                                                </p>
                                                <p>
                                                	Crud irrespective that this less mongoose industrious obdurately. Abandonedly tore a jeepers hence overrode preparatory far as up together squid rattlesnake far inside concomitantly. Crud irrespective that this less mongoose industrious obdurately. Abandonedly tore a jeepers hence overrode preparatory far as up together squid rattlesnake far inside concomitantly.Crud irrespective that this less mongoose industrious obdurately. Abandonedly tore a jeepers hence overrode preparatory far as up together squid rattlesnake far inside concomitantly.
                                                </p>
                                            </div>
                                        </div>
                                  	</div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="cs-section-title" style="margin-bottom:27px;">
                                            <h2 style="text-align:left;">Project Statistics</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    	<div class="cs-counter">
                                        	<div class="cs-counter md">
                                                 <ul>
                                                    <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="cs-media">
                                                            <figure>
                                                                <i class="icon-droplet2"></i>
                                                            </figure>
                                                        </div>
                                                        <div class="cs-text">
                                                            <strong class="counter-small">33,874</strong>
                                                            <p>water projects funded</p>
                                                        </div>
                                                    </li>
                                                    <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="cs-media">
                                                            <figure>
                                                                <i class="icon-graduation"></i>
                                                            </figure>
                                                        </div>
                                                        <div class="cs-text">
                                                            <strong class="counter-small">1,055,000</strong>
                                                            <p>people will get clean water</p>
                                                        </div>
                                                    </li>
                                                    <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="cs-media">
                                                            <figure>
                                                                <i class="icon-group"></i>
                                                            </figure>
                                                        </div>
                                                        <div class="cs-text">
                                                            <strong class="counter-small">23,457</strong>
                                                            <p>local partners</p>
                                                        </div>
                                                    </li>
                                                    <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="cs-media">
                                                            <figure>
                                                                <i class="icon-droplet2"></i>
                                                            </figure>
                                                        </div>
                                                        <div class="cs-text">
                                                            <strong class="counter-small">33,874</strong>
                                                            <p>water projects funded</p>
                                                        </div>
                                                    </li>
                                                    <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="cs-media">
                                                            <figure>
                                                                <i class="icon-graduation"></i>
                                                            </figure>
                                                        </div>
                                                        <div class="cs-text">
                                                            <strong class="counter-small">1,055,000</strong>
                                                            <p>people will get clean water</p>
                                                        </div>
                                                    </li>
                                                    <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="cs-media">
                                                            <figure>
                                                                <i class="icon-group"></i>
                                                            </figure>
                                                        </div>
                                                        <div class="cs-text">
                                                            <strong class="counter-small">23,457</strong>
                                                            <p>local partners</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="cs-section-title" style="margin-bottom:27px;">
                                            <h2 style="text-align:left;">Team Behind Project</h2>
                                        </div>
                                    </div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
												<div class="cs-team">
						  <div class="cs-media">
							<figure> <img src="{{ static_asset('assets/assets_web/extra-images/team-img1.jpg')}}" alt="#">
							  <figcaption> </figcaption>
							</figure>
						  </div>
						  <div class="cs-text">
							<div class="cs-member-detail">
							  <h5>JOHN DOE</h5>
							  <p>Project Incharge</p>
							</div>
							<ul class="team-socail-media">
							  <li><a href="#"><i class="icon-facebook-square"></i></a></li>
							  <li><a href="#"><i class="icon-twitter2"></i></a></li>
							  <li><a href="#"><i class="icon-instagram"></i></a></li>
							  <li><a href="#"><i class="icon-vk"></i></a></li>
							</ul>
						  </div>
						</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
												<div class="cs-team">
						  <div class="cs-media">
							<figure> <img src="{{ static_asset('assets/assets_web/extra-images/team-img2.jpg')}}" alt="#">
							  <figcaption> </figcaption>
							</figure>
						  </div>
						  <div class="cs-text">
							<div class="cs-member-detail">
							  <h5>JOHN DOE</h5>
							  <p>Project Incharge</p>
							</div>
							<ul class="team-socail-media">
							  <li><a href="#"><i class="icon-facebook-square"></i></a></li>
							  <li><a href="#"><i class="icon-twitter2"></i></a></li>
							  <li><a href="#"><i class="icon-instagram"></i></a></li>
							  <li><a href="#"><i class="icon-vk"></i></a></li>
							</ul>
						  </div>
						</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
												<div class="cs-team">
						  <div class="cs-media">
							<figure> <img src="{{ static_asset('assets/assets_web/extra-images/team-img3.jpg')}}" alt="#">
							  <figcaption> </figcaption>
							</figure>
						  </div>
						  <div class="cs-text">
							<div class="cs-member-detail">
							  <h5>JOHN DOE</h5>
							  <p>Project Incharge</p>
							</div>
							<ul class="team-socail-media">
							  <li><a href="#"><i class="icon-facebook-square"></i></a></li>
							  <li><a href="#"><i class="icon-twitter2"></i></a></li>
							  <li><a href="#"><i class="icon-instagram"></i></a></li>
							  <li><a href="#"><i class="icon-vk"></i></a></li>
							</ul>
						  </div>
						</div>
											</div>
         								</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    	<div class="cs-event-map">
                                            <div class="cs-heading">
                                                <h3>Event Location</h3>
                                            </div>
                                            <div class="cs-media">
                                                <figure>
                                                	<a href="#"><img alt="#" src="{{ static_asset('assets/assets_web/extra-images/event-map.jpg')}}"></a>
                                                </figure>
                                                <div class="cs-location-pointer">
                                                	<a href="#"><span>Khatmando, Nepal</span>
                                                    <i class="icon-map-marker"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        	{{-- <div class="widget widget-ads">
                            	<figure><img src="{{ static_asset('assets/assets_web/extra-images/widget-step4life.png')}}" alt="#"></figure>
                            </div> --}}
                            <div class="widget widget-search">
                            	<div class="cs-widget-title">
                                	<h5>Search</h5>
                                </div>
                                <div class="cs-widget-search">
                                	<input type="text" placeholder="Enter any keyword">
                                </div>
                            </div>
                            <div class="widget widget-categories">
                            	<div class="cs-widget-title">
                                	<h5>Blog Categories</h5>
                                </div>
                            	<ul>
                                	<li><a href="#">Education</a><span>12</span></li>
                                    <li><a href="#">Emotions</a><span>58</span></li>
                                    <li><a href="#">Food/Drink</a><span>12</span></li>
                                    <li><a href="#">Health/Medical</a><span>35</span></li>
                                    <li><a href="#">Industry/Craft</a><span>81</span></li>
                                    <li><a href="#">Music</a><span>101</span></li>
                                    <li><a href="#">Nature/Landscapes</a><span>58</span></li>
                                    <li><a href="#">People</a><span>10</span></li>
                                    <li><a href="#">Places/Monuments</a><span>34</span></li>
                                    <li><a href="#">Religion.</a><span>75</span></li>
                                </ul>
                            </div>
                            <div class="widget widget-related-blogs">
                            	<div class="cs-widget-title">
                                	<h5>Related Blogs</h5>
                                </div>
                                <div class="cs-recent-posts">
                                    <h6><a href="#">Lets of Money we raise into organizations</a></h6>
                                    <ul class="cs-time-schedules">
                                        <li><i class="icon-list8"></i></li>
                                        <li><span>September 23, 2015</span></li>
                                        <li>/</li>
                                        <li><a href="#">Charity, </a></li>
                                        <li><a href="#">Kids</a></li>
                                    </ul>
                                </div>
                                <div class="cs-recent-posts">
                                    <h6><a href="#">Lets of Money we raise into organizations</a></h6>
                                    <ul class="cs-time-schedules">
                                        <li><i class="icon-video"></i></li>
                                        <li><span>June 8, 2015</span></li>
                                        <li>/</li>
                                        <li><a href="#">Charity, </a></li>
                                        <li><a href="#">Kids</a></li>
                                    </ul>
                                </div>
                                <div class="cs-recent-posts">
                                    <h6><a href="#">Lets of Money we raise into organizations</a></h6>
                                    <ul class="cs-time-schedules">
                                        <li><i class="icon-list8"></i></li>
                                        <li><span>May 21, 2015</span></li>
                                        <li>/</li>
                                        <li><a href="#">Kids</a></li>
                                    </ul>
                                </div>
                                <div class="cs-recent-posts">
                                    <h6><a href="#">Lets of Money we raise into organizations</a></h6>
                                    <ul class="cs-time-schedules">
                                        <li><i class="icon-video"></i></li>
                                        <li><span>February 12, 2015</span></li>
                                        <li><a href="#">Charity, </a></li>
                                        <li><a href="#">Kids</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget widget-projects">
                            	<div class="cs-widget-title">
                                	<h5>Our Projects</h5>
                                </div>
                            	<ul>
                                	<li>
                                    	<div class="cs-media">
                                        	<figure>
                                            	<img src="{{ static_asset('assets/assets_web/extra-images/widget-project-1.jpg')}}" alt="#">
                                                <figcaption><i class="icon-droplet2"></i></figcaption>
                                            </figure>
                                        </div>
                                        <div class="cs-text">
                                        	<a href="#">Livestock Insurance Scheme subsidy, Grants</a>
                                            <span>Kabul, Afghanistan</span>
                                        </div>
                                    </li>
                                    <li>
                                    	<div class="cs-media">
                                        	<figure>
                                            	<img src="{{ static_asset('assets/assets_web/extra-images/widget-project-2.jpg')}}" alt="#">
                                                <figcaption><i class="icon-mortar-board"></i></figcaption>
                                            </figure>
                                        </div>
                                        <div class="cs-text">
                                        	<a href="#">Schemes and Grants for NGO’s working.</a>
                                            <span>Samatra, Indonasia</span>
                                        </div>
                                    </li>
                                    <li>
                                    	<div class="cs-media">
                                        	<figure>
                                            	<img src="{{ static_asset('assets/assets_web/extra-images/widget-project-3.jpg')}}" alt="#">
                                                <figcaption><i class="icon-group"></i></figcaption>
                                            </figure>
                                        </div>
                                        <div class="cs-text">
                                        	<a href="#">Dairy Entrepreneu rship Development Scheme 2014</a>
                                            <span>Khatmando, Nepal</span>
                                        </div>
                                    </li>
                                    <li>
                                    	<div class="cs-media">
                                        	<figure>
                                            	<img src="{{ static_asset('assets/assets_web/extra-images/widget-project-4.jpg')}}" alt="#">
                                                <figcaption><i class="icon-institution"></i></figcaption>
                                            </figure>
                                        </div>
                                        <div class="cs-text">
                                        	<a href="#">Schemes of Ministry of New and Renewable Energy</a>
                                            <span>Harare, Zimbabwe</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget-events">
                            	<div class="cs-widget-title">
                                	<h5>Events</h5>
                                </div>
                                <ul class="cs-widget-event">
                                	<li>
                                        <div class="cs-media">
                                            <figure>
                                                <span>15<em>jul</em></span>
                                            </figure>
                                        </div>
                                        <div class="cs-text">
                                            <h6><a href="#">Money we raise into organizations</a></h6>
                                            <ul>
                                                <li>Aneri, Africa</li>
                                                <li>/</li>
                                                <li>15:00 A.M</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cs-media">
                                            <figure>
                                                <span>15<em>jul</em></span>
                                            </figure>
                                        </div>
                                        <div class="cs-text">
                                            <h6><a href="#">community-owned water projects</a></h6>
                                            <ul>
                                                <li>Aneri, Africa</li>
                                                <li>/</li>
                                                <li>15:00 A.M</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cs-media">
                                            <figure>
                                                <span>12<em>jul</em></span>
                                            </figure>
                                        </div>
                                        <div class="cs-text">
                                            <h6><a href="#">Closely to ensure that.</a></h6>
                                            <ul>
                                                <li>Aneri, Africa</li>
                                                <li>/</li>
                                                <li>15:00 A.M</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cs-media">
                                            <figure>
                                                <span>28<em>jul</em></span>
                                            </figure>
                                        </div>
                                        <div class="cs-text">
                                            <h6><a href="#">Fund and our partners</a></h6>
                                            <ul>
                                                <li>Aneri, Africa</li>
                                                <li>/</li>
                                                <li>15:00 A.M</li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget-calendar">
                            	<div class="cs-widget-title">
                                	<h5>Calender Widget</h5>
                                </div>
                                <div id="calendar_wrap">
                                	<table id="wp-calendar">
                                        <thead>
                                        <tr>
                                          <th title="Monday" scope="col">sun</th>
                                          <th title="Tuesday" scope="col">mon</th>
                                          <th title="Wednesday" scope="col">tue</th>
                                          <th title="Thursday" scope="col">wed</th>
                                          <th title="Friday" scope="col">thu</th>
                                          <th title="Saturday" scope="col">fri</th>
                                          <th title="Sunday" scope="col">sat</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                          <td class="pad" colspan="3">&nbsp;</td><td>1</td><td>2</td><td>3</td><td>4</td>
                                        </tr>
                                        <tr>
                                          <td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td>11</td>
                                        </tr>
                                        <tr>
                                          <td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td>
                                        </tr>
                                        <tr>
                                          <td>19</td><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td><td>25</td>
                                        </tr>
                                        <tr>
                                          <td>26</td><td id="today">27</td><td>28</td><td>29</td><td>30</td><td>31</td>
                                          <td colspan="1" class="pad">&nbsp;</td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                          <td id="prev" colspan="3"><a href="http://zack/peachclub/2014/11/">« Nov</a></td>
                                          <td class="pad">&nbsp;</td>
                                          <td class="pad" id="next" colspan="3">&nbsp;</td>
                                        </tr>
                                        </tfoot>
                                    </table>
                            	</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</main>
@endsection