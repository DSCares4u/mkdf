@extends('frontend.layouts.master');
@section('title')
    Invoice
@endsection

@section('content')
    <main class="main ">
        <div class="site-breadcrumb">
            <div class="site-breadcrumb-bg"
                style="background: url({{ static_asset('assets/assets_web/images/page-header-bg.jpg') }})"></div>
            <div class="container">
                <div class="site-breadcrumb-wrap">
                    <h4 class="breadcrumb-title">Invoice</h4>
                    <ul class="breadcrumb-menu">
                        <li><a href="{{ url('') }}"><i class="fa-solid fa-house"></i> Home</a></li>
                        <i class="fa-solid fa-angle-right"></i>
                        <li class="active"><i class="fa-solid fa-user"></i>Invoice</li>
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
                        <div class="user-card">
                            <div class="user-card-header">
                                <h4 class="user-card-title">My Orders List</h4>

                            </div>
                            <div class="table-responsive">
                                <table class="table table-borderless text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Transaction Id</th>
                                            <th>Payment Date</th>
                                            <th>Total Payment</th>
                                            <th>Method</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="table-list-code">{{ $profile_details->transaction_id }}</span>
                                            </td>
                                            <td>{{ $profile_details->transaction_date }}</td>
                                            <td><i class="fa-solid fa-indian-rupee-sign"></i>{{$profile_details->transaction_fee}}</td>
                                            <td class="badge badge-info">{{ $profile_details->method }}</td>
                                            <td>
                                                @if($profile_details->status==1)

                                                <span class="badge badge-success">Payment Done</span>
                                                    
                                                @else
                                                <span class="badge badge-danger">Payment Pending</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ url('customer/customer-invoice/'.$profile_details->id) }}"
                                                    class="btn btn-outline-secondary btn-sm rounded-2"
                                                    data-tooltip="tooltip"  title="View Invoice">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            {{-- <div class="pagination-area mt-4 mb-3">
                                <div aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">
                                                    <i class="far fa-angle-double-left"></i>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">
                                                    <i class="far fa-angle-double-right"></i>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
