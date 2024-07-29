@extends('frontend.layouts.master');
@section('title') Register @endsection

@section('content')
    <div class="text-center bg-overlay-dark-7 py-7" style="background:url(assets/assets_web/images/02.jpg) no-repeat; background-size:cover; background-position: top center;">
        <div class="container">
            <div class="row all-text-white">
                <div class="col-md-12 align-self-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item active"><a href="{{url('index')}}"><i class="ti-home"></i> Home</a></li>
                        <li class="breadcrumb-item">Register Completed Successfully</li>
                    </ol>
                </nav>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container mt-5 mb-10">
        <div class="card">
            <div class="card-header">
                <h2>Registration Successful</h2>
            </div>
            <div class="card-body">
                <p>Thank you for registering! Your transaction was successful.</p>
                @if(isset($token_no))
                    <p>Your token number is: <strong>{{ $token_no }}</strong></p>
                @endif
                <a href="{{ url('/') }}" class="btn btn-primary ">Go to Home</a>
            </div>
        </div>
    </div> --}}
    <div class="container mb-5">
        <div class="card text-center">
           
            <div class="card-body">
                <div class="alert alert-success" role="alert">
                    Thank you for registering! Your transaction was successful.
                </div>
                @if(isset($user))
                    <p>Your name is: <strong>{{ $user->first_name }} {{ $user->last_name }}</strong></p>
                    <p>Your email is: <strong>{{ $user->email }}</strong></p>
                    <p>Your mobile is: <strong>{{ $user->mobile }}</strong></p>
                    <p>Transaction No: <strong>{{ $user->transaction_id }}</strong></p>
                @endif
                <a href="{{ url('/') }}" class="btn btn-primary mt-3">Go to Home</a>
            </div>
        </div>
    </div>

@endsection 
