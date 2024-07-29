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
                            <li class="breadcrumb-item">Register</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-page">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-12 col-lg-8 mx-auto mb-5 ">
                    <div class="h-100 shadow rounded text-center p-4">
                        <div class="title text-center">
                            <h2>Register</h2>
                            <p class="mb-0">
                                Get in touch with us to see how we can help you with your project
                            </p>
                        </div>

                        <form action="{{ route('t_register.post') }}" method="post" role="form" class=""
                            enctype="multipart/form-data">
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

                            <!-- Main form -->
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- name -->
                                    <div class="mb-3 position-relative">
                                        <input required id="con-name" value="{{ old('first_name') }}" name="first_name" type="text" class="form-control"
                                            placeholder="Your First Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- email -->
                                    <div class="mb-3 position-relative">
                                        <input required id="con-email" name="last_name" value="{{ old('last_name') }}"  type="text" class="form-control"
                                            placeholder="Your Last Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Subject -->
                                    <div class="mb-3 position-relative">
                                        <input required name="mobile" id="mobile" type="tel" value="{{ old('mobile') }}" 
                                            class="form-control" placeholder="Your Mobile Number">
                                    </div>
									<p id="mobile_verify_error" class=""></p>
                                </div>
                                <div class="col-md-6">
                                    <!-- Subject -->
                                    <div class="mb-3 position-relative">
                                        <input required id="con-subject" value="{{ old('email') }}"  name="email" type="email" class="form-control"
                                            placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Subject -->
                                    <div class="mb-3 position-relative">
                                        <input required id="con-subject" value="{{ old('password') }}"  name="password" type="password"
                                            class="form-control" placeholder="Your Password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Subject -->
                                    <div class="mb-3 position-relative">
                                        <input required id="password_confirmation" name="password_confirmation"
                                            type="password" value="{{ old('password_confirmation') }}"  class="form-control" placeholder="Confirm Password"
                                            aria-label="Confirm Password">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <!-- Subject -->
                                    <div class="mb-3 position-relative text-start">
                                        <label for="con-subject" value="{{ old('cv') }}"  class="mb-1">Upload Your Cv</label>
                                        <input required id="con-subject" name="cv" type="file" class="form-control">
                                    </div>
                                </div>

                                <!-- submit button -->
                                <div class="col-md-12 d-grid text-center"><button disabled
                                        class="btn btn-dark m-0 d-block mx-auto px-2 save-guest-user" type="submit">Register</button></div>
                            </div>
                        </form>
                        <div class="mt-3">
                            <p class="mb-0">Already have an account? <a href="{{ route('login') }}" class="text-info">Login here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
        $('#mobile').keyup(function(e) {
			// alert('key');
            let mobile = document.getElementById('mobile').value;
            var clk_btn = $(".save-guest-user");
            if (mobile.length >= 10) {
                $.ajax({
                    url: '{{ route('checkMobile') }}',
                    method: 'POST',
                    data: 'mobile=' + mobile + '&_token={{ csrf_token() }}',
                    success: function(response) {
                        if (response.status == 'success') {
							// alert("don");
                            clk_btn.prop('disabled', false);
							
                            document.getElementById('mobile_verify_error').innerHTML = "";

                        } else
						 {
                            document.getElementById('mobile_verify_error').innerHTML = response.message;
							clk_btn.prop('disabled', true);
                        }
                    },
                    error: function(err) {

                    }
                });
            }

        });
    </script>

@endsection


{{-- $('#enter-otp-button').keyup(function(e) {
	let phone_otp = document.getElementById('enter-otp-button').value;
	var clk_btn = $(".save-guest-user");
	if(phone_otp.length>=6)
	{
		$.ajax({
			url: '{{ url('check-phone-otp' )}}',
			method: 'POST',
			data: 'phone_otp='+phone_otp+'&_token={{csrf_token()}}',
			success:function(response){
				if(response.status=='success')
				{
					clk_btn.prop('disabled', false);
					document.getElementById('mobile-otp-verify').style="display: block";
					document.getElementById('mobile_otp_verify').innerHTML=response.message;
					document.getElementById('mobile_otp_verify_error').style="display: none";

				}else{
					document.getElementById('mobile-otp-verify').style="display: block";
					document.getElementById('mobile_otp_verify_error').innerHTML=response.message;


				}
			},error:function(err){

			}
		});
	}

}); --}}
