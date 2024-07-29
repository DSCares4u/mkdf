<header id="header">
    <div class="container">
        <div class="row" style="margin-top: 12px;">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="cs-logo" style="margin: 0; height:80px"><a href="{{url('')}}"><img src="{{ static_asset('assets/assets_web/images/logo.png') }}" style="height:80px; width:auto; margin-top:4px" alt="#"></a></div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                {{-- <div class="cs-header-right">
                    <div class="cs-top-bar">
                        <div class="cs-contact-detail">
                            <ul>
                                <li><strong>For Donations</strong><i class="icon-arrow-right10"></i></li>
                                <li><i class="icon-phone-square"></i>Call: (+91 ) 9473 402 056</li>
                                <li><i class="icon-mail6"></i>Email: <a href="#">manavorg14@gmail.com</a></li>
                                <li>Reg id -<a href="#">DL/2022/0315852</a></li>
                            </ul>
                        </div>
                        <ul class="cs-social-media">
                          
                        </ul>
                    </div>
                </div> --}}
                <div class="cs-main-nav">
                    <a href="{{url('')}}" class="home-link"><i class="icon-home"></i></a>
                    <ul>
                        <li><a href="{{url('')}}">Home</a></li>
                        <li><a href="{{url('registration-form')}}">Apply Now</a></li> 
                        <li>
                            <a href="#">About</a>
                            <ul class="sub-dropdown">
                                <li><a href="{{url('who-we-are')}}">Who We Are</a></li>
                                <li><a href="{{url('object-of-trust')}}">Object Of The Yojana</a></li>
                                <li><a href="{{url('mission')}}">Our Mission</a></li>
                                <li><a href="{{url('vision')}}">Our Vision</a></li>
                                {{-- <li><a href="{{url('')}}">Get Invoice</a></li> --}}
                            </ul>
                        </li>
                        <li>
                            <a href="#">Save Life</a>
                            <ul class="sub-dropdown">
                                <li><a href="{{url('current-case')}}">Current Case</a></li>
                                <li><a href="{{url('success-story')}}">Success Story</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Gallery</a>
                            <ul class="sub-dropdown">
                                <li><a href="{{url('gallery-page')}}">Latest Blog</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Program</a>
                            <ul class="sub-dropdown">
                                <li><a href="{{url('child-education-programs')}}">Child Education Programmers</a></li>
                                <li><a href="{{url('child-sponser-program')}}">Child Sponsor Program</a></li>
                                <li><a href="{{url('women-empowerment')}}">Women Empowerment</a></li>
                                {{-- <li><a href="{{url('provide-homes-for-old-age-peoples')}}">Provide Home For Old Age Peoples</a></li> --}}
                                {{-- <li><a href="{{url('camping-for-blood-donation')}}">Camping For Blood Donation And Home For Homeless</a></li> --}}
                                <li><a href="">Tree Seeding</a></li>
                                <li><a href="">Kanya Birthday</a></li>
                                <li><a href="">Annadam Mahadan</a></li>
                                <li><a href="">Food</a></li>
                                <li><a href="">Health</a></li>
                                <li><a href="">Kanya Dan</a></li>
                                <li><a href="">karz Mukt Vivah</a></li>
                                <li><a href="">Other</a></li>
                            </ul>
                        </li>
                        {{-- <li>
                           <a href="#">Donate Now</a>
                           <ul class="sub-dropdown">
                               <li><a href="{{url('donation')}}">Donate With Account</a></li>
                               <li><a href="blog-large.html">Donate With Upi</a></li>
                               <li><a href="blog-large.html">Net Banking / Debit / Credit Card</a></li>
                           </ul>
                       </li>                        --}}
                        <li>
                           <a href="#">Legal</a>
                           <ul class="sub-dropdown">
                               <li><a href="{{url('pancard')}}">Pan Card</a></li>
                               {{-- <li><a href="{{url('ngo-darpan')}}">NGO Darpans</a></li>
                               <li><a href="{{url('registration-certificate')}}">Certificate Of Registration</a></li>
                               <li><a href="{{url('udyam-certificate')}}">Udyam Registration Certificate</a></li>
                               <li><a href="{{url('trust-deed')}}">Trust Deed</a></li>--}}
                               <li><a href="{{url('save-tax')}}">Bank Details</a></li> 
                           </ul>
                       </li>                       
                       <li><a href="{{url('contact')}}">Contact</a></li>
                    </ul>
                </div>
                <div class="cs-join">
                    <a href="{{url('donation-page')}}" class="cs-join-us">Donate us<i class="icon-arrow-right9"></i></a>
                </div>
            </div>
            <div class="cs-responsive-nav"></div>
        </div>
    </div>
</header>
