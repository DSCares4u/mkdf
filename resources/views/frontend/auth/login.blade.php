@extends('frontend.layouts.master');
@section('title')
    Login
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
                            <li class="breadcrumb-item">Login</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

	<section class="contact-page mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <!-- contact form -->
                <div class="col-md-8 col-lg-6">
                    <div class="card shadow rounded">
                        <div class="card-body p-4 text-center">
                            <div class="title text-center mb-4">
                                <h2 class="mb-3">Login</h2>
                                <p class="mb-0">Get in touch with us to see how we can help you with your project</p>
                            </div>

                            <form action="{{ route('login.post') }}" method="post" role="form" class="text-start">
                                @csrf
                                <div class="mb-3">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul class="mb-0">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                                <div class="flash-message">
                                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                        @if (Session::has('alert-' . $msg))
                                            <div class="alert alert-{{ $msg }} alert-dismissible fade show" role="alert">
                                                {{ Session::get('alert-' . $msg) }}
                                                <button type="button" class="btn btn-info btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <!-- Main form -->
                                <div class="mb-3">
                                    <!-- email -->
                                    <label for="con-email" class="form-label">Email</label>
                                    <input required id="con-email" name="email" type="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="mb-3">
                                    <!-- password -->
                                    <label for="con-password" class="form-label">Password</label>
                                    <input required id="con-password" name="password" type="password" class="form-control" placeholder="Password">
                                </div>
                                <!-- submit button -->
                                <div class="d-grid">
                                    <button class="btn btn-dark" type="submit">Login</button>
                                </div>
                            </form>
                            <div class="mt-3">
                                <p class="mb-0">Don't have an account? <a href="{{ url('register') }}" class="text-info">Register here</a></p>
                            </div>
                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
