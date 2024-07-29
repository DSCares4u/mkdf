@extends('frontend.layouts.master');
@section('title') Donation @endsection

@section('content')
    <div class="container mb-5 mt-5">
        <div class="card text-start mx-auto">           
            <div class="card-body">
                <div class="alert alert-success" role="alert">
                    Thank you for Donation! Your transaction was successful.
                </div>
                @if(isset($donation))
                    <p>Your name is: <strong>{{ $donation->first_name }} {{ $donation->last_name }}</strong></p>
                    <p>Your mobile is: <strong>{{ $donation->mobile }}</strong></p>
                    <p>Transaction No: <strong>{{ $donation->transaction_id }}</strong></p>
                @endif
                <a href="{{ url('') }}" class="btn btn-primary mt-3">Go to Home</a>
            </div>
        </div>
    </div>

@endsection 
