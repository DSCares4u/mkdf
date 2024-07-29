@extends('admin.include.master')
@section('title', 'Add New Event Category')
@section('content')

<!-- Page Header -->
            <div style="background:linear-gradient(45deg, #f33057, rgb( 56, 88, 249 ) );"  class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <h4 class="fw-medium mb-2">Event Category</h4>
                    <div class="ms-sm-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Event Category</a></li>
                                <li class="breadcrumb-item active fw-normal" aria-current="page">Add Event Category</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
            <!-- Page Header Close -->



            <!--APP-CONTENT START-->
            <div class="main-content app-content">
                <div class="container-fluid">


                    <!-- Start:: row-1 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Add Event Category
                                    </div>
                                </div>
                                <form class="card-body" method="post" enctype="multipart/form-data" action="{{ route('admin.image_categories.store') }}">
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
                                    <div class="mb-3">
                                        <label for="form-text" class="form-label fs-14 text-dark">Enter Category Title</label>
                                        <input type="text" name="title" class="form-control" id="form-text" placeholder="">
                                    </div>
                                    {{-- <div class="mb-3">
                                        <label for="form-password" class="form-label fs-14 text-dark">Select Picture</label>
                                        <input type="file" name="image" class="form-control" id="form-password" placeholder="">
                                    </div> --}}
									<div class="mb-3">
                                        <label for="form-password" class="form-label fs-14 text-dark">Select Status</label>
                                        <select type="file" name="status" class="form-control" id="form-password">
											<option value="1">Active</option>
											<option value="0">In Active</option>
										</select>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- End:: row-1 -->



                </div>
            </div>
            <!--APP-CONTENT CLOSE-->


@endsection
