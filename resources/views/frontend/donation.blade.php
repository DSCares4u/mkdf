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
                                <figure> <img src="{{ static_asset('assets/assets_web/extra-images/nimg35.jpg') }}"
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
                                            <form action="" method="post" role="form" enctype="multipart/form-data" id="insertData">
                                                @csrf

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
                                                        <div class="mb-3 position-relative">
                                                            <input required id="con-name" value="{{ old('first_name') }}"
                                                                name="first_name"
                                                                style="height: 50px; font-size:16px; text-align:start;"
                                                                type="text" class="form-control"
                                                                placeholder="Your First Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3 position-relative">
                                                            <input required id="con-email" name="last_name"
                                                                value="{{ old('last_name') }}"
                                                                style="height: 50px; font-size:16px; text-align:start;"
                                                                type="text" class="form-control"
                                                                placeholder="Your Last Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class=" position-relative">
                                                            <input required name="mobile" id="mobile" type="tel"
                                                                value="{{ old('mobile') }}" class="form-control"
                                                                placeholder="Your Mobile Number">
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
                                                            <select name="donation_type" id="">
                                                                <option value="">Select Donation type</option>
                                                                <option value="Kanya Birthday">Kanya Birthday</option>
                                                                <option value="Tree Seedling">Tree Seeding</option>
                                                                <option value="Annadan Mahadan">Annadan Mahadan</option>
                                                                <option value="Food">Food</option>
                                                                <option value="Education">Education</option>
                                                                <option value="Kanyadan">Kanyadan</option>
                                                                <option value="Karz mukt vivan">Karz Mukt Vivah</option>
                                                                <option value="Other">Other</option>
                                                            </select>
                                                            {{-- <input required id="con-subject"
                                                                value="{{ old('donation_type') }}"
                                                                name="donation_type"style="height: 40px; font-size:16px; text-align:start;"
                                                                type="text" class="form-control" type="text"
                                                                 placeholder="Donation Type"> --}}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3 position-relative">
                                                            <input required id="con-subject" value="{{ old('amount') }}"
                                                                name="amount" type="number" class="form-control"
                                                                placeholder="Enter Amount">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 d-grid text-center">
                                                        <button class="btn btn-primary d-block mx-auto px-2 save-guest-user"
                                                            type="submit">Donate Now</button>
                                                    </div>
                                                </div>
                                            </form>
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

    <script>
        $(document).ready(function() {
            $("#insertData").submit(function(e) {
                e.preventDefault();
                let formData = new FormData(this);
                $.ajax({
                    type: "POST",
                    url: "{{ route('make-donation.store') }}",
                    data: formData,
                    dataType: "JSON",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        $("#insertData").trigger("reset");
                        swal("Success", response.message, "success");
                        window.location.href = "{{ url('/donation-view') }}" + '/' + response.token_no;
                    },
                    error: function(xhr, status, error) {
                        swal("Error", xhr.responseText, "error");
                    }
                });
            });
        });
    </script>
@endsection
