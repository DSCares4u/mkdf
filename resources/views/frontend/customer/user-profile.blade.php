@extends('frontend.layouts.master');
@section('title')
    Profile
@endsection

@section('content')
    <main class="main ">
        <div class="site-breadcrumb">
            <div class="site-breadcrumb-bg"
                style="background: url({{ static_asset('assets/assets_web/images/page-header-bg.jpg') }})"></div>
            <div class="container">
                <div class="site-breadcrumb-wrap">
                    <h4 class="breadcrumb-title">My Profile</h4>
                    <ul class="breadcrumb-menu">
                        <li><a href="{{ url('') }}"><i class="fa-solid fa-house"></i> Home</a></li>
                        <i class="fa-solid fa-angle-right"></i>
                        <li class="active"><i class="fa-solid fa-user"></i>My Profile</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="user-area bg pt-5 pb-80 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        @include('frontend.customer.customerInclude')
                    </div>
                    <div class="col-lg-9 bg-white shadow-sm">
                        <div class="user-wrapper">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="user-card">
                                        <h4 class="user-card-title">Profile Info</h4>
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
                                        </div>
                                        <div class="user-form">
                                            <form action="{{route('customer.update.profile')}}" method="post">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>First Name</label>
                                                            <input type="text" class="form-control" name="first_name"
                                                                value={{ $profile_details->first_name }}
                                                                placeholder="First Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Last Name</label>
                                                            <input type="text" class="form-control"  name="last_name"
                                                                value={{ $profile_details->last_name }}
                                                                placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="text" class="form-control"  name="email"
                                                                value={{ $profile_details->email }} placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Phone</label>
                                                            <input type="text" class="form-control"
                                                             name="mobile"
                                                                value={{ $profile_details->mobile }} placeholder="Phone">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Address</label>
                                                            <input type="text" class="form-control"  name="address"
                                                                value={{ $profile_details->address }}>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit"
                                                    class="theme-btn btn btn-dark m-0 d-block mx-auto px-2 save-guest-user"><span
                                                        class="far fa-user"></span>
                                                    Save Changes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-lg-12">
                                    <div class="user-card">
                                        <h4 class="user-card-title">Change Password</h4>
                                        <div class="col-lg-12">
                                            <div class="user-form">
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Old Password</label>
                                                                <input type="password" class="form-control"
                                                                    placeholder="Old Password">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>New Password</label>
                                                                <input type="password" class="form-control"
                                                                    placeholder="New Password">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Re-Type Password</label>
                                                                <input type="password" class="form-control"
                                                                    placeholder="Re-Type Password">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="theme-btn"><span
                                                            class="far fa-key"></span> Change Password</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
