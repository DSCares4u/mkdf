@extends('frontend.layouts.master')
@section('title')
    Invoice
@endsection
    <div class="invoice-area bg pt-40 pb-90 border" style="width: 100%" id="printable-area">
        <div class="container w-100">
            <div class="row w-100 ">
                <div class="col-lg-12 w-100">
                    <div class="invoice-wrapper w-100">
                        <div class="invoice-header">
                            <div class="invoice-logo">
                                <img src="{{ static_asset('assets/assets_web/images/nkiu.png') }}" alt="">
                            </div>
                            <div class="invoice-number invoice-width">
                                <h3>Invoice</h3>
                                <p>#{{ $profile_details->transaction_id }}</p>
                            </div>
                        </div>
                        <div class="invoice-date-box">
                            <div class="invoice-date">
                                <h6>Invoice Date</h6>
                                <p>{{ date('d M,Y', strtotime($profile_details->transaction_date)) }}</p>
                            </div>
                            {{-- <div class="invoice-date invoice-width">
                                <h6>Due Date</h6>
                                <p>09/13/2023</p>
                            </div> --}}
                        </div>
                        <div class="invoice-address-box">
                            <div class="invoice-address">
                                <h5>Sahni & Sons</h5>
                                <ul>
                                    <li>Electo</li>
                                    <li>+91 9709774545</li>
                                    <li>Katihar More, Khuskibagh, Purnia, Bihar - 854305</li>
                                </ul>
                            </div>
                            <div class="invoice-address invoice-width">
                                <h5>Customer</h5>
                                <ul>
                                    <li>{{ $profile_details->first_name.' '.$profile_details->last_name }}</li>
                                    <li>{{ $profile_details->mobile }}</li>
                                    <li>{{ $profile_details->email }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="invoice-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                       <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Sahni & Sons Registration Fee</td>
                                        <td>{{ $profile_details->transaction_fee }}</td>
                                        <td>{{ $profile_details->transaction_fee }}</td>
                                    </tr>
                                    
                                    <tr>
                                        <th colspan="5">Total</th>
                                        <th>{{ $profile_details->transaction_fee }}</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="invoice-bottom">
                            <a href="https://sahninsons.com/">https://sahninsons.com/</a>
                            <a href="#"> info.sahninsons@gmail.com</a>
                            <a href="#">+91 9709774545</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.onload = function(){  
            window.print();
        }  
    </script>


