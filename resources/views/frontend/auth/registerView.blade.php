@extends('frontend.layouts.master');
@section('title')
    Register
@endsection

@section('content')
    <div class="text-center bg-overlay-dark-7 py-7"
        style="background:url(assets/assets_web/images/02.jpg) no-repeat; background-size:cover; background-position: top center;">
        <div class="container">
            <div class="row all-text-white">
                <div class="col-md-12 align-self-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item active"><a href="{{ url('index') }}"><i class="ti-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item">Verify Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-page">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-12 col-lg-8 mx-auto ">
                    <div class="h-100 shadow rounded text-center p-4">
                        <div class="title text-center">
                            <h2>Verify Details</h2>
                            <p class="mb-0">
                                Get in touch with us to see how we can help you with your project
                            </p>
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

                        <!-- Main form -->
                        <div class="row">
                            <div class="col-md-6">
                                <!-- name -->
                                <div class="mb-3 position-relative">
                                    <input required id="con-name" value={{ $user->first_name }} type="text"
                                        class="form-control" placeholder="Your First Name" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- email -->
                                <div class="mb-3 position-relative">
                                    <input required id="con-email"value={{ $user->last_name }} type="text"
                                        class="form-control" placeholder="Your Last Name" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Subject -->
                                <div class="mb-3 position-relative">
                                    <input required id="con-subject" value={{ $user->mobile }} type="tel"
                                        class="form-control" placeholder="Your Mobile Number"disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Subject -->
                                <div class="mb-3 position-relative">
                                    <input required id="con-subject" type="email"value={{ $user->email }}
                                        class="form-control" placeholder="Your Email"disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Subject -->
                                <div class="mb-3 position-relative text-start">
                                    <label for="con-subject" class="mb-1">Amount To Be Paid</label>
                                    <input required id="con-subject" value="1000" type="number" class="form-control"
                                        disabled>
                                </div>
                            </div>

                            <form action="{{ route('getPaymentDone') }}" method="post" role="form">
                                @csrf
                                <input type="hidden" name="token_no" value="{{ $user->token_no }}">
                                <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id" value="">
                                <div class="col-md-12 d-grid text-center">
                                    <button class="btn btn-dark m-0 d-block mx-auto px-2" type="button"
                                        id="pay-button">PayNow</button>
                                </div>
                                <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
                                <script>
                                    document.getElementById('pay-button').onclick = function(e) {
                                        e.preventDefault();
                                        var options = {
                                            "key": "{{ env('RAZORPAY_KEY') }}",
                                            "amount": 7500,
                                            "currency": "INR",
                                            "name": "Sahani & Sons",
                                            "description": "Processing Fee",
                                            "image": "{{ asset('front_assets/img/logo/logo.png') }}",
                                            "handler": function(response) {
                                                document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
                                                document.forms[0].submit();
                                            },
                                            "prefill": {
                                                "name": "{{ $user->name }}",
                                                "email": "{{ $user->email }}",
                                                "contact": "{{ $user->mobile }}"
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
                        </div>
                    </div>
                </div>
            </div>
    </section>

@endsection
