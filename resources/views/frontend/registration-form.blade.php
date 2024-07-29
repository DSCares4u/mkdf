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
        .header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
            padding: 1rem;
            padding-top: 2rem;
        }

        .form-wrap {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            padding: 2rem;
        }

        .btn-primary {
            background-color: #1977cc;
            border-color: #1977cc;
        }

        .form-group label {
            font-weight: bold;
        }
    </style>
@endsection

@section('content')
    <main class="main">
        <div class="container">
            <header class="header py-3">
                <h1 id="title" class="text-center text-success">मानव विकास कन्या जन्मदिन योजना <br><span
                        style="color: #1977cc;">दान से
                        अनुदान तक</span></h1>
                <p id="description" class="text-center">कृपया नीचे दिए गए फॉर्म को पूरा करें</p>
            </header>
            <div class="form-wrap">
                <form id="insertData" method="POST" action="">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group py-2">
                                <label id="name-label" for="name">आवेदक कन्या का नाम</label>
                                <input type="text" name="name" id="name" placeholder="आवेदक कन्या का नाम"
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-2">
                                <label for="date_of_birth">जन्म की तिथि</label>
                                <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-2">
                                <label for="time_of_birth">जन्म का समय</label>
                                <input type="time" name="time_of_birth" id="time_of_birth" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-2">
                                <label for="place_of_birth">जन्म का स्थान</label>
                                <input type="text" name="place_of_birth" id="place_of_birth" class="form-control"
                                    placeholder="जन्म का स्थान" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-2">
                                <label for="day_of_birth">जन्म का दिन</label>
                                <input type="text" name="day_of_birth" id="day_of_birth" class="form-control"
                                    placeholder="जन्म का दिन" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-2">
                                <label for="aadhar_no">कन्या का आधार संख्या</label>
                                <input type="number" name="aadhar_no" id="aadhar_no" class="form-control"
                                    placeholder="कन्या का आधार संख्या" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-2">
                                <label for="mother">माता / पालनकर्ता का नाम</label>
                                <input type="text" name="mother" id="mother" class="form-control"
                                    placeholder="माता / पालनकर्ता का नाम" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-2">
                                <label for="other_mobile_no">माता / पालनकर्ता का मोबाइल नंबर</label>
                                <input type="number" name="other_mobile_no" id="other_mobile_no" class="form-control"
                                    placeholder="माता / पालनकर्ता का मोबाइल नंबर" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-2">
                                <label for="aadhar_no">माता / पालनकर्ता का आधार संख्या</label>
                                <input type="number" name="mother_aadhar_no" id="aadhar_no" class="form-control col-md-6"
                                    placeholder="माता / पालनकर्ता का आधार संख्या" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-2">
                                <label for="father">पिता / पालनकर्ता का नाम</label>
                                <input type="text" name="father" id="father" class="form-control"
                                    placeholder="पिता / पालनकर्ता का नाम" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-2">
                                <label for="mobile_no">पिता / पालनकर्ता का मोबाइल नंबर</label>
                                <input type="number" name="mobile_no" id="mobile_no" class="form-control"
                                    placeholder="पिता / पालनकर्ता का मोबाइल नंबर" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-2">
                                <label for="aadhar_no">पिता / पालनकर्ता का आधार संख्या</label>
                                <input type="number" name="father_aadhar_no" id="aadhar_no" class="form-control"
                                    placeholder="पिता / पालनकर्ता का आधार संख्या" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-2">
                                <label for="caste">जाति</label>
                                <input type="text" name="caste" id="caste" class="form-control"
                                    placeholder="जाति" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-2">
                                <label for="account_holder_name">खाताधारी का नाम</label>
                                <input type="text" name="account_holder_name" id="account_holder_name"
                                    class="form-control" placeholder="खाताधारी का नाम" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-2">
                                <label for="bank_account_no">खाता संख्या</label>
                                <input type="number" name="bank_account_no" id="bank_account_no" class="form-control"
                                    placeholder="खाता संख्या" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-2">
                                <label for="bank_ifsc">IFSC कोड</label>
                                <input type="text" name="bank_ifsc" id="bank_ifsc" class="form-control"
                                    placeholder="IFSC कोड" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-2">
                                <label for="bank_branch">शाखा</label>
                                <input type="text" name="bank_branch" id="bank_branch" class="form-control"
                                    placeholder="शाखा" required>
                            </div>
                        </div>
                        <div class="col">
                            <label class="ml-6 fw-bold underline">कन्या का पता :-</label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-2">
                                <label for="state">राज्य</label>
                                <input type="text" name="state" id="state" class="form-control"
                                    placeholder="राज्य" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-2">
                                <label for="division">प्रमंडल</label>
                                <input type="text" name="division" id="division" class="form-control"
                                    placeholder="प्रमंडल" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-2">
                                <label for="city">जिला</label>
                                <input type="text" name="city" id="city" class="form-control"
                                    placeholder="जिला" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-2">
                                <label for="sub_division">अनुमंडल</label>
                                <input type="text" name="sub_division" id="sub_division" class="form-control"
                                    placeholder="अनुमंडल" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-2">
                                <label for="block">प्रखण्ड</label>
                                <input type="text" name="block" id="block" class="form-control"
                                    placeholder="प्रखण्ड" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-2">
                                <label for="police_station">थाना</label>
                                <input type="text" name="police_station" id="police_station" class="form-control"
                                    placeholder="थाना" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-2">
                                <label for="panchayat">पंचायत / नगर</label>
                                <input type="text" name="panchayat" id="panchayat" class="form-control"
                                    placeholder="पंचायत / नगर" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-2">
                                <label for="village">गांव / मोहल्ला</label>
                                <input type="text" name="village" id="village" class="form-control"
                                    placeholder="गांव / मोहल्ला" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-2">
                                <label for="ward_no">वार्ड</label>
                                <input type="text" name="ward_no" id="ward_no" class="form-control"
                                    placeholder="वार्ड" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-2">
                                <label for="pincode">पिन कोड</label>
                                <input type="number" name="pincode" id="pincode" class="form-control"
                                    placeholder="पिन कोड" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-2">
                                <label for="photo">कन्या का पासपोर्ट साइज फोटो</label>
                                <input type="file" name="photo" id="photo" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-2">
                                <label for="birth_certificate">कन्या का जन्म प्रमाण पत्र</label>
                                <input type="file" name="birth_certificate" id="birth_certificate"
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-2">
                                <label for="mother_aadhar">माता/पालन​कर्ता आधार (आगे और पीछे)</label>
                                <input type="file" name="mother_aadhar" id="mother_aadhar" class="form-control"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group py-2">
                                <label for="father_aadhar">पिता / पालन​कर्ता आधार (आगे और पीछे)</label>
                                <input type="file" name="father_aadhar" id="father_aadhar" class="form-control"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="bg-danger  d-flex justify-content-center py-2">
                            <button type="submit" id="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </main>
    <script>
        $(document).ready(function() {
            $("#insertData").submit(function(e) {
                e.preventDefault();

                let formData = new FormData(this);

                // Send AJAX request
                $.ajax({
                    type: "POST",
                    url: "{{ route('online-apply.store') }}",
                    data: formData,
                    dataType: "JSON",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        swal("Success", response.message, "success");
                        $("#insertData").trigger("reset");
                        // window.open("/admin/manage-hire/plan", "_self");
                    },
                    error: function(xhr, status, error) {
                        swal("Error", xhr.responseText, "error");
                    }
                });
            });
        });
    </script>
@endsection
