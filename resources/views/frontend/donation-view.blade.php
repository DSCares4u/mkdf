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
    <style>
        .contact-page {
            padding: 60px 0;
        }

        .contact-page .container {
            max-width: 800px;
        }

        .contact-page .shadow {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
        }

        .contact-page .title h3 {
            margin-bottom: 20px;
            font-weight: bold;
        }

        .contact-page .btn {
            font-size: 16px;
            padding: 10px 30px;
        }

        .contact-page input {
            height: 45px;
        }
    </style>
@endsection

@section('content')
    <main id="main">
        <div class="main-section">
            <div class="page-section" style="margin-bottom:70px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="cs-media" style="margin-top:50px;">
                                <figure> <img src="{{ static_asset('assets/assets_web/extra-images/nimg23.jpeg') }}"
                                        alt="#"> </figure>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-12 col-lg-8" style="padding: 50px">
                                        <div class="h-100 shadow rounded text-center p-4">
                                            <div class="title text-center">
                                                <h3>I wish to make a donation</h3>
                                                <p>Riseup now We areFamily We Dream Zero Poverty Rate</p>
                                            </div>
                                            <div class="col-md-12">
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <!-- first name -->
                                                    <div class="mb-3 position-relative">
                                                        <input required id="con-name" value="{{ $donation->first_name }}"
                                                            name="first_name" type="text" class="form-control"
                                                            placeholder="Your First Name" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <!-- last name -->
                                                    <div class="mb-3 position-relative">
                                                        <input required id="" name="last_name"
                                                            value=" {{ $donation->last_name }}" type="text"
                                                            class="form-control" placeholder="Your Last Name" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class=" position-relative">
                                                        <input required name="mobile" id="mobile" type="tel"
                                                            value="{{ $donation->mobile }}" class="form-control"
                                                            placeholder="Your Mobile Number" readonly>
                                                    </div>
                                                    <p id="mobile_verify_error" class=""></p>
                                                </div>
                                                {{-- <div class="col-md-6">
                                                    <div class=" position-relative">
                                                        <input required id="con-subject" value="{{ old('email') }}"
                                                            name="email" type="email" class="form-control"
                                                            placeholder="Your Email">
                                                    </div>
                                                </div> --}}
                                                <div class="col-md-6">
                                                    <div class="mb-3 position-relative" class="form-control">
                                                        <input required id="con-subject" value="{{ $donation->donation_type }}" type="text" class="form-control"
                                                        readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3 position-relative">
                                                        <input required id="con-subject" value="{{ $donation->amount }}"
                                                            name="amount" type="number" class="form-control"
                                                            placeholder="Enter Amount" readonly>
                                                    </div>
                                                </div>
                                                <!-- submit button -->
                                                <div class="col-md-12 d-grid text-center">
                                                    <button
                                                        class="pay-button btn btn-primary m-0 d-block mx-auto px-2 save-guest-user"
                                                        type="submit" id="pay-button">
                                                        Proceed To Payment
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <form action="{{ route('save.DonationDone') }}" method="post" role="form">
        @csrf
        <input type="hidden" name="token_no" value="{{ $donation->token_no }}">
        <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id" value="">
        <div class="col-md-12 d-grid text-center">
            {{-- <button class="btn btn-dark m-0 d-block mx-auto px-2" type="button" id="pay-button">PayNow</button> --}}
        </div>
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <script>
            document.getElementById('pay-button').onclick = function(e) {
                e.preventDefault();
                var options = {
                    "key": "{{ env('RAZORPAY_KEY') }}",
                    "amount": {{ $donation->amount }} * 100,
                    "currency": "INR",
                    "name": "Manav vikash",
                    "description": "Processing Fee",
                    "image": "{{ asset('front_assets/img/logo/logo.png') }}",
                    "handler": function(response) {
                        document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
                        document.forms[0].submit();
                    },
                    "prefill": {
                        "name": "{{ $donation->name }}",
                        "contact": "{{ $donation->mobile }}"
                    },
                    "theme": {
                        "color": "#0a64a3"
                    }
                };
                var rzp1 = new Razorpay(options);
                rzp1.open();
            }
        </script>
    </form>
@endsection
