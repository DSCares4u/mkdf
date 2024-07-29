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
    <div class="page-section"
        style="background:url({{ static_asset('assets/assets_web/extra-images/contact-bg.jpg') }}) no-repeat 0 0 /cover; position: relative; padding-top:58px; padding-bottom:27px; margin-bottom:40px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-title" style="color:#fff;">
                        <h1 style="color:#fff">Contact Us</h1>
                        <p>Inside took wow less pounded massive melodiously the.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Start -->
    <main id="main">
        <div class="main-section">
            {{-- <div class="page-section" style="margin-bottom:70px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="cs-media">
                                <figure> <img src="{{ static_asset('assets/assets_web/extra-images/nimg9.jpeg') }}"
                                        alt="#"> </figure>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="cs-text"> <img
                                    src="{{ static_asset('assets/assets_web/images/Contact-Us_03.png') }}" alt="#">
                                <strong>Donate
                                    for Manavseva</strong>
                                <h2>Many girls in underprivileged communities do not have the means to celebrate their birthdays.</h2>
                                <p>At Manavseva, we believe in creating a brighter future for every girl. Birthdays are special moments that deserve to be celebrated with joy, love, and meaningful gestures. Our Girls' Birthday Scheme is dedicated to ensuring that every girl, regardless of her circumstances, can experience the magic of her special day.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="page-section" style="background:#f5f5f5;margin-bottom:80px;">
                <div class="row">
                    {{-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="cs-map">
                            <div style="width: 100%"><iframe height="460"
                                    src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed"></iframe>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                        <div class="cs-contact-us" style="padding-top: 25px;">
                            <div class="cs-section-title" style="margin-bottom:30px;">
                                <h2>Contact us</h2>
                                <p style="font-weight:500;">Inside took wow less pounded massive melodiously the.
                                </p>
                            </div>
                            <ul>
                                <li><i class="icon-location6"></i><span>Head Branch :</span>
                                    <div class="cs-text">Navi Karim Sadar Bazar,<br>  New Delhi
                                        -110006
                                        
</div>
                                </li>
                                <li><i class="icon-phone6"></i><span>Phone</span>
                                    <div class="cs-text">(+91 ) 9473402056</div>
                                </li>
                                <li><i class="icon-mobile4"></i><span>Whatsapp</span>
                                    <div class="cs-text">(+91 ) 9473402056</div>
                                </li>
                                <li><i class="icon-mail"></i><span>Email</span>
                                    <div class="cs-text">manavorg14@gmail.com</div>
                                </li>
                                <li><i class="icon-mail"></i><span>Email</span>
                                    <div class="cs-text">kanyajanmdinyojna@gmail.com</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 py-5"
                style="background: url({{ static_asset('assets/assets_web/extra-images/bg-contact-left.png') }}) no-repeat left bottom, url({{ static_asset('assets/assets_web/extra-images/bg-contact-right.png') }}) no-repeat right bottom;margin-bottom:85px; box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.5); padding-bottom:30px;">
                {{-- <div class="container"> --}}
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="cs-section-title" style="margin-bottom:40px;">
                                <h2 style="text-align:center;">Say digital hello!</h2>
                                <p style="text-align:center;">Inside took wow less pounded massive melodiously the.
                                </p>
                            </div>
                        </div>
                        <form id="contactForm">@csrf
                            <div class="cs-contect-form px-5">
                                <ul>
                                    <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="cs-field">
                                            <label>Name</label>
                                            <span>(Required)</span>
                                            <input type="text" placeholder="" name="name">
                                            <i class="icon-user2"></i>
                                        </div>
                                    </li>
                                    <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="cs-field">
                                            <label>Email</label>
                                            <span>(Required)</span>
                                            <input type="text" placeholder="" name="email">
                                            <i class="icon-mail6"></i>
                                        </div>
                                    </li>
                                    <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="cs-field">
                                            <label>Phone</label>
                                            <input type="text" placeholder="" name="mobile">
                                            <i class="icon-phone6"></i>
                                        </div>
                                    </li>
                                    <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="cs-field">
                                            <label>Subject</label>
                                            <span>(Required)</span>
                                            <input type="text" placeholder="" name="subject">
                                            <i class="icon-align-left"></i>
                                        </div>
                                    </li>
                                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="cs-field">
                                            <label>Message</label>
                                            <span>(Required)</span>
                                            <textarea name="message"></textarea>
                                        </div>
                                    </li>
                                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="cs-field cs-btn-submit">
                                            <input type="submit" value="Submit Detail">
                                            <i class="icon-arrow-right9"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
                {{-- </div> --}}
            </div>
            
        </div>
        {{-- <div class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="heading">
                            <h3>Resturant Timings</h3>
                            <span>We turn magicully on 7 days a week</span>
                        </div>
                        <div class="cs-info-box"> <i class="icon-clock"></i>
                            <ul>
                                <li><span>Monday - Friday</span>
                                    <p>7AM - 11AM (Breakfast)<br>
                                        11AM - 10PM (Lunch/Dinner)</p>
                                </li>
                                <li><span>Saturday / Sunday</span>
                                    <p>8AM - 1PM (Brunch)<br>
                                        1PM - 9PM (Lunch/Dinner)</p>
                                </li>
                                <li><span>Sunday</span>
                                    <p>Closed</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="heading">
                            <h3>London Branch</h3>
                            <span>We turn magicully on 7 days a week</span>
                        </div>
                        <div class="cs-info-box"> <i class="icon-world"></i>
                            <ul>
                                <li><span>Paris Office</span>
                                    <p>Best Square Around ABC 123X<br>
                                        XYZ123 London<br>
                                        United Kingdom</p>
                                </li>
                                <li>
                                    <p>Telephone: +49 30 47373795<br>
                                        Fax: +49 30 47373795<br>
                                        E-mail: moin@blindtextgenerator.de</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="heading">
                            <h3>Extra Wow</h3>
                            <span>We turn magicully on 7 days a week</span>
                        </div>
                        <div class="cs-info-box"> <i class="icon-note"></i>
                            <ul>
                                <li><span>Features</span></li>
                                <li><i class="icon-truck2"></i>
                                    <p>Far the uneasily giggled yet noble.</p>
                                </li>
                                <li><i class="icon-calendar5"></i>
                                    <p>Because a wow excluding.</p>
                                </li>
                                <li><i class="icon-fire"></i>
                                    <p>Up and however less grew much.</p>
                                </li>
                                <li><i class="icon-shop"></i>
                                    <p>Alongside the much much.</p>
                                </li>
                                <li><i class="icon-wallet3"></i>
                                    <p>Chuckled weasel until thus some</p>
                                </li>
                                <li><i class="icon-world"></i>
                                    <p>This smiling intricately.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </main>

    <script>
        $(document).ready(function() {
            $("#contactForm").submit(function(e) {
                e.preventDefault();
                let formData = new FormData(this);
                // Send AJAX request
                $.ajax({
                    type: "POST",
                    url: "{{ route('store.contact.enquiry') }}",
                    data: formData,
                    dataType: "JSON",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        $("#contactForm").trigger("reset");
                        swal("Thank You", response.message, "success");
                        // alert('Data Added Successfully')
                        setTimeout(function() {
                            window.location.href = "{{ url('') }}";
                            // location.reload();
                        }, 3000);
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                $('#error-' + key).html(value[0]);
                            });
                        } else {
                            alert('An error occurred. Please try again.');
                        }
                    }
                });
            });
        });
    </script>
@endsection
