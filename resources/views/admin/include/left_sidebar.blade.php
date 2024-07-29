<!-- Start::app-sidebar -->
        <aside class="app-sidebar sticky" id="sidebar">

            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header">
                <a href="{{ url('admin/dashboard') }}" class="header-logo">
                    <img src="{{ static_asset('assets/assets_admin/images/brand-logos/desktop-logo.png') }}" alt="logo" class="desktop-logo">
                    <img src="{{ static_asset('assets/assets_admin/images/brand-logos/toggle-logo.png') }}" alt="logo" class="toggle-logo">
                    <img src="{{ static_asset('assets/assets_admin/images/brand-logos/desktop-dark.png') }}" alt="logo" class="desktop-dark">
                    <img src="{{ static_asset('assets/assets_admin/images/brand-logos/toggle-dark.png') }}" alt="logo" class="toggle-dark">
                </a>
            </div>
            <!-- End::main-sidebar-header -->

            <!-- Start::main-sidebar -->
            <div class="main-sidebar" id="sidebar-scroll">

                <!-- Start::nav -->
                <nav class="main-menu-container nav nav-pills flex-column sub-open">
                    <div class="main-sidebar-loggedin">
                        <div class="app-sidebar__user">
                            <div class="dropdown user-pro-body text-center">
                                <div class="user-pic mb-2">
                                    <img src="{{ static_asset('assets/assets_admin/images/faces/user.png') }}" alt="user-img" class="rounded-circle mCS_img_loaded">
                                </div>
                                <div class="user-info">
                                    <h6 class=" mb-0">{{session('LoggedUser')->first_name}}</h6>
                                    <span class="fs-13 text-uppercase">{{session('LoggedUser')->userType}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-navs mx-auto my-2">
                        <button aria-label="button" type="button" class="btn btn-icon btn-outline-light rounded-pill btn-wave m-1">
                            <i class="fe fe-settings"></i>
                        </button>
                        <button aria-label="button" type="button" class="btn btn-icon btn-outline-light rounded-pill btn-wave m-1">
                            <i class="fe fe-mail"></i>
                        </button>
                        <button aria-label="button" type="button" class="btn btn-icon btn-outline-light rounded-pill btn-wave m-1">
                            <i class="fe fe-user"></i>
                        </button>
                        <button onclick="window.location.href='{{ url('admin/logout') }}'" aria-label="button" type="button" class="btn btn-icon btn-outline-light rounded-pill btn-wave m-1">
                            <i class="fe fe-power"></i>
                        </button>
                    </div>
                    <div class="slide-left" id="slide-left">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
                    </div>
				@if(session('LoggedUser')->user_type_id==3)
                    <ul class="main-menu">

                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="{{ url('admin/dashboard') }}" class="side-menu__item">
                                <span class=" side-menu__icon">
                                    <i class='fe fe-airplay' ></i>
                                </span>
                                <span class="side-menu__label">Dashboard</span>
                            </a>
                        </li>
                        <!-- End::slide -->
						<!-- Students Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <span class=" side-menu__icon">
                                    <i class='ri-article-line' ></i>
                                </span>
                                 <span class="side-menu__label">Students</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Students</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ url('admin/students') }}" class="side-menu__item">Student List</a>
                                    <a href="{{ url('admin/students/create') }}" class="side-menu__item">Add Student</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Students End::slide -->


                    </ul>
				@else
					<ul class="main-menu">

                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="{{ url('admin/dashboard') }}" class="side-menu__item">
                                <span class=" side-menu__icon">
                                    <i class='fe fe-airplay' ></i>
                                </span>
                                <span class="side-menu__label">Dashboard</span>
                            </a>
                        </li>
                        <!-- End::slide -->


						<!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <span class=" side-menu__icon">
                                    <i class='fe fe-box' ></i>
                                </span>
                                 <span class="side-menu__label">Events</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Events</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ url('admin/image_categories') }}" class="side-menu__item">Event Category</a>
                                    <a href="{{ url('admin/image_categories/create') }}" class="side-menu__item">Add Event Category</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ url('admin/galleries/create') }}" class="side-menu__item">Add Event Gallery</a>
                                    <a href="{{ url('admin/galleries') }}" class="side-menu__item">Event Gallery List</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Start::slide -->
                        {{-- <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <span class=" side-menu__icon">
                                    <i class="ri-team-fill"></i>
                                </span>
                                 <span class="side-menu__label">Team</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Team</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ url('admin/staffs') }}" class="side-menu__item">Team List</a>
                                    <a href="{{ url('admin/staffs/create') }}" class="side-menu__item">Add Team</a>
                                </li>
                            </ul>
                        </li> --}}
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <span class=" side-menu__icon">
                                    <i class="ri-team-fill"></i>
                                </span>
                                 <span class="side-menu__label">Kanya janamdin</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Kanya janamdin</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ url('admin/online-application-list') }}" class="side-menu__item">Online Applications</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <span class=" side-menu__icon">
                                    <i class="ri-team-fill"></i>
                                </span>
                                 <span class="side-menu__label">Donations</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Donation List</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ url('admin/donation-list') }}" class="side-menu__item">Donations List</a>
                                </li>
                            </ul>
                        </li>
                        {{-- <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <span class=" side-menu__icon">
                                    <i class="ri-team-fill"></i>
                                </span>
                                 <span class="side-menu__label">User</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">User</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ url('admin/users/index') }}" class="side-menu__item">User List</a>
                                </li>
                            </ul>
                        </li> --}}

                        <!-- End::slide -->
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <span class=" side-menu__icon">
                                    <i class="ri-customer-service-fill"></i>
                                </span>
                                 <span class="side-menu__label">Enquiry</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Enquiry</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ url('admin/customer/leads') }}" class="side-menu__item">Customer Leads</a>
                                </li>
                                {{-- <li class="slide">
                                    <a href="{{ url('admin/online/enquiry') }}" class="side-menu__item">Contact Us Enquiry</a>
                                </li> --}}

                            </ul>
                        </li>
                        {{-- <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <span class=" side-menu__icon">
                                    <i class="ri-customer-service-fill"></i>
                                </span>
                                 <span class="side-menu__label">Gallery</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Gallery</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ url('admin/galleries') }}" class="side-menu__item">Gallery List</a>
                                </li>

                            </ul>
                        </li> --}}
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        {{-- <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <span class=" side-menu__icon">
                                    <i class='fe fe-file' ></i>
                                </span>
                                 <span class="side-menu__label">Career</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Career</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ url('admin/career/enquiry') }}" class="side-menu__item">Career Enquiry</a>
                                </li>
                            </ul>
                        </li> --}}
                        <!-- End::slide -->
                    </ul>

				@endif
                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
                </nav>
                <!-- End::nav -->

            </div>
            <!-- End::main-sidebar -->




        </aside>
        <!-- End::app-sidebar -->

@if(false)
	<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>
				<li> <a target="_blank" href="{{ route('clear-cache') }}"><i class="fa fa-arrows-rotate"></i> <span>Clear Cache</span></a> </li>
				<li> <a href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
				<li> <a href="{{ route('admin.users.index') }}"><i class="fas fa-tachometer-alt"></i> <span>Users</span></a> </li>

				{{-- <li class="submenu"> <a href="#"><i class="fas fa-calculator"></i> <span> Setup </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="{{ url('admin/designation') }}"> Designation </a></li>
					</ul>
				</li> --}}

				<li class="submenu"> <a href="#"><i class="fas fa fa-list-ul"></i> <span> Blogs </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="{{ url('admin/categories') }}"> Categories </a></li>
						<li><a href="{{ url('admin/blogs') }}"> All Blogs </a></li>
						<li><a href="{{ url('admin/blogs/create') }}"> Add New Blog </a></li>
					</ul>
				</li>

				<li class="submenu"> <a href="#"><i class="fas fa-calculator"></i> <span> Galleries </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="{{ url('admin/image_categories') }}"> All Image Category </a></li>
						<li><a href="{{ url('admin/galleries') }}"> All Galleries </a></li>
					</ul>
				</li>

                <li class="submenu"> <a href="#"><i class="fas fa-calculator"></i> <span> Industry Sector </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{ url('admin/industry_pages') }}"> All Industry Sector </a></li>
                        <li><a href="{{ url('admin/industry_page_sections') }}"> All Industry Section </a></li>
                        <li><a href="{{ url('admin/industry_section_data') }}"> All Industry Section Data</a></li>
                    </ul>
                </li>

				<li class="submenu"> <a href="#"><i class="fas fa-calculator"></i> <span> CMS </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="{{ url('admin/pages') }}"> All Master Pages </a></li>
						<li><a href="{{ url('admin/page_sections') }}"> All Page Section </a></li>
						<li><a href="{{ url('admin/section_data') }}"> All Section Data </a></li>
						<li><a href="{{ url('admin/certificates') }}"> All Certificates </a></li>
					</ul>
				</li>

				<li class="submenu"> <a href="#"><i class="fas fa-calculator"></i> <span> Service </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="{{ url('admin/service') }}"> All Master Service </a></li>
						<li><a href="{{ url('admin/service_sections') }}"> All Service Section </a></li>
						<li><a href="{{ url('admin/service_section_data') }}"> All Service Section Data </a></li>

					</ul>
				</li>

				<li class="submenu"> <a class="{{ areActiveRoutes(['employee.index', 'employee.create', 'employee.edit'])}}" ><i class="fas fa-calculator"></i> <span> Product </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="{{ url('admin/product') }}"> All Master Product </a></li>
						<li><a href="{{ url('admin/product/create') }}"> Add Master Product </a></li>
						<li><a href="{{ url('admin/product_sections') }}"> All Product Section </a></li>
						<li><a href="{{ url('admin/product_sections/create') }}"> Add Product Section </a></li>
						<li><a href="{{ url('admin/product_section_data') }}"> All Product Section Data </a></li>
						<li><a href="{{ url('admin/product_section_data/create') }}"> Add Product Section Data </a></li>
					</ul>
				</li>

                <li class="submenu"> <a class="{{ areActiveRoutes(['employee.index', 'employee.create', 'employee.edit'])}}" ><i class="fas fa-calculator"></i> <span> Partner </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="{{ url('admin/partner') }}"> All Master Partner </a></li>
						<li><a href="{{ url('admin/partner/create') }}"> Add Master Partner </a></li>
						<li><a href="{{ url('admin/partner_sections') }}"> All Partner Section </a></li>
						<li><a href="{{ url('admin/partner_sections/create') }}"> Add Partner Section </a></li>
						<li><a href="{{ url('admin/partner_section_data') }}"> All Partner Section Data </a></li>
						<li><a href="{{ url('admin/partner_section_data/create') }}"> Add Partner Section Data </a></li>

					</ul>
				</li>

                <li class="submenu"> <a class="{{ areActiveRoutes(['employee.index', 'employee.create', 'employee.edit'])}}" ><i class="fas fa-calculator"></i> <span> Solution </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="{{ url('admin/solutions') }}"> All Master Solution </a></li>
						<li><a href="{{ url('admin/solutions/create') }}"> Add Master Solution </a></li>
						<li><a href="{{ url('admin/solution_page_sections') }}"> All Solution Section </a></li>
						<li><a href="{{ url('admin/solution_page_sections/create') }}"> Add Solution Section </a></li>
						<li><a href="{{ url('admin/solution_section_data') }}"> All Solution Section Data </a></li>
						<li><a href="{{ url('admin/solution_section_data/create') }}"> Add Solution Section Data </a></li>

					</ul>
				</li>

				<li class="submenu"> <a href="#"><i class="fas fa-calculator"></i> <span> Pricing  </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						{{-- <li><a href="{{ url('admin/pricing/price-type/list') }}"> Pricing Type </a></li> --}}
						<li><a href="{{ url('admin/pricing/list') }}"> Pricing List </a></li>
						<li><a href="{{ url('admin/pricing/add') }}"> Add Pricing </a></li>
					</ul>
				</li>

				<li class="submenu"> <a href="#"><i class="fas fa-calculator"></i> <span> Testimonials </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="{{ url('admin/testimonials') }}"> All Testimonials </a></li>
						<li><a href="{{ url('admin/testimonials/create') }}"> Add New Testimonial </a></li>
                        <li><a href="{{ url('admin/testimonial/videos') }}"> All Video Testimonials </a></li>
					</ul>
				</li>

				<li class="submenu"> <a href="#"><i class="fas fa-calculator"></i> <span> FAQ </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="{{ url('admin/faq-category-list') }}"> All FAQ Category </a></li>
						<li><a href="{{ url('admin/faq-category') }}"> Add FAQ Category </a></li>
						<li><a href="{{ url('admin/faqs') }}"> All FAQ </a></li>
						<li><a href="{{ url('admin/faqs/create') }}"> Add New FAQ </a></li>
					</ul>
				</li>

				<li class="submenu"> <a href="#"><i class="fas fa-calculator"></i> <span> Staffs </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="{{ url('admin/staffs') }}"> All Staffs </a></li>
						<li><a href="{{ url('admin/staffs/create') }}"> Add New Staff </a></li>
					</ul>
				</li>

				<li class="submenu"> <a href="#"><i class="fas fa-calculator"></i> <span> All Enquiries </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="{{ url('admin/customer/leads') }}"> All Customer Leads </a></li>
						<li><a href="{{ url('admin/career/enquiry') }}"> All Career Enquiry </a></li>
						<li><a href="{{ url('admin/hire_team/enquiry') }}"> All Hire Team </a></li>
						<li><a href="{{ url('admin/quotation-list') }}"> All Quotation List </a></li>
						<li><a href="{{ url('admin/schedule-meeting-list') }}"> Scheduled Meeting List </a></li>
						<li><a href="{{ url('admin/subscribers') }}"> All Subscribers </a></li>
						<li><a href="{{ url('admin/price/enquiry') }}"> All Price Enquiry </a></li>
					</ul>
				</li>

				<li class="submenu"> <a href="#"><i class="fas fa-calculator"></i> <span> Website Setup </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="{{ url('admin/website/header') }}"> Header </a></li>
						<li><a href="{{ url('admin/website/footer') }}"> Footer </a></li>
						<li><a href="{{ url('admin/website/social_media') }}"> Social Media </a></li>
						{{-- <li><a href="{{ url('admin/website/cms/contact') }}"> Contact Us </a></li> --}}
					</ul>
				</li>

			</ul>
		</div>
	</div>
</div>
@endif
