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
@endsection

@section('content')
<div class="page-section"
        style="background:url({{ static_asset('assets/assets_web/extra-images/sub-header-bg.jpg') }}) no-repeat 0 0 /cover; position: relative; padding-top:58px; padding-bottom:47px">
        <div class="sub-header-overlay"></div>
        <div class="sub-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-title" style="float:left;">
                            <h1 style="color:#fff">Photo Gallery</h1>
                        </div>
                        <ul class="breadcrumb">
                            <li><a href="{{ url('') }}">Home</a></li>
                            <li><a href="{{ url('') }}">Gallery</a></li>
                            <li>Latest gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="page-section" style="margin-bottom:20px; margin-top:50px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="cs-section-title" style="margin-bottom:34px;">
                    <h2 style="text-align:center;">PHOTO GALLERY</h2>
                    <p style="text-align:center;">Inside took wow less pounded massive melodiously the.</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="cs-gallery">
                    <div class="row">
                        {{-- @foreach ($galleries as $key => $value)
                        <tr>
                            <td>{{ $value->parent_name }}</td>
                            <td class="text-black"><img height="60" src="{{ static_asset('uploads/gallery/'.$value->image) }}"></td>
                            <td>
                                <div class="actions"> @if($value->status == 1) <a href="#" class="btn btn-sm bg-success-light mr-2">Active</a> @else <a href="#" class="btn btn-sm bg-danger-light mr-2">Inactive</a> @endif </div>
                            </td>
                            <td>{{ convert_datetime_to_date_format($value->created_at, 'd M Y') }}</td>
                            <td class="text-right">
                                <div class="dropdown dropdown-action">
                                   <!-- <a class="text-primary" href="{{ route('admin.galleries.edit',$value->id) }}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                    <a class="text-danger" onclick="return confirm('Are you sure, you want to delete this?')" href="{{route('admin.galleries.delete',$value->id)}}"><i class="fas fa-trash-alt m-r-5"></i>Delete</a>-->
                                    <a onclick="return confirm('Are you sure, you want to delete this?')" href="{{route('admin.galleries.delete',$value->id)}}" class="btn btn-icon btn-sm btn-danger-light rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach --}}

                        @foreach ($galleries as $key => $value)

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-media">
                                <figure> <img src="{{ static_asset($value->image) }}" alt="#">
                                    <figcaption> <a href="{{ static_asset($value->image) }}"
                                            data-lightbox="example-set"><i class="icon-plus4"></i></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>

                        @endforeach

                        {{-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-media">
                                <figure> <img src="{{ static_asset('assets/assets_web/extra-images/gallery-img-2.jpg')}}" alt="#">
                                    <figcaption> <a href="{{ static_asset('assets/assets_web/extra-images/gallery-im-2.jpg')}}"
                                            data-lightbox="example-set"><i class="icon-plus4"></i></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-media">
                                <figure> <img src="{{ static_asset('assets/assets_web/extra-images/gallery-img-3.jpg')}}" alt="#">
                                    <figcaption> <a href="{{ static_asset('assets/assets_web/extra-images/gallery-im-3.jpg')}}"
                                            data-lightbox="example-set"><i class="icon-plus4"></i></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-media">
                                <figure> <img src="{{ static_asset('assets/assets_web/extra-images/gallery-img-4.jpg')}}" alt="#">
                                    <figcaption> <a href="{{ static_asset('assets/assets_web/extra-images/gallery-im-4.jpg')}}"
                                            data-lightbox="example-set"><i class="icon-plus4"></i></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-media">
                                <figure> <img src="{{ static_asset('assets/assets_web/extra-images/gallery-im-5.jpg')}}" alt="#">
                                    <figcaption> <a href="{{ static_asset('assets/assets_web/extra-images/gallery-im-5.jpg')}}"
                                            data-lightbox="example-set"><i class="icon-plus4"></i></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-media">
                                <figure> <img src="{{ static_asset('assets/assets_web/extra-images/gallery-img-6.jpg')}}" alt="#">
                                    <figcaption> <a href="{{ static_asset('assets/assets_web/extra-images/gallery-im-6.jpg')}}"
                                            data-lightbox="example-set"><i class="icon-plus4"></i></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-media">
                                <figure> <img src="{{ static_asset('assets/assets_web/extra-images/gallery-img-7.jpg')}}" alt="#">
                                    <figcaption> <a href="{{ static_asset('assets/assets_web/extra-images/gallery-im-7.jpg')}}"
                                            data-lightbox="example-set"><i class="icon-plus4"></i></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-media">
                                <figure> <img src="{{ static_asset('assets/assets_web/extra-images/gallery-img-8.jpg')}}" alt="#">
                                    <figcaption> <a href="{{ static_asset('assets/assets_web/extra-images/gallery-im-8.jpg')}}"
                                            data-lightbox="example-set"><i class="icon-plus4"></i></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-media">
                                <figure> <img src="{{ static_asset('assets/assets_web/extra-images/gallery-im-1.jpg')}}" alt="#">
                                    <figcaption> <a href="{{ static_asset('assets/assets_web/extra-images/gallery-im-1.jpg')}}"
                                            data-lightbox="example-set"><i class="icon-plus4"></i></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-media">
                                <figure> <img src="{{ static_asset('assets/assets_web/extra-images/gallery-im-2.jpg')}}" alt="#">
                                    <figcaption> <a href="{{ static_asset('assets/assets_web/extra-images/gallery-im-2.jpg')}}"
                                            data-lightbox="example-set"><i class="icon-plus4"></i></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-media">
                                <figure> <img src="{{ static_asset('assets/assets_web/extra-images/gallery-img-3.jpg')}}" alt="#">
                                    <figcaption> <a href="{{ static_asset('assets/assets_web/extra-images/gallery-im-3.jpg')}}"
                                            data-lightbox="example-set"><i class="icon-plus4"></i></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-media">
                                <figure> <img src="{{ static_asset('assets/assets_web/extra-images/gallery-img-4.jpg')}}" alt="#">
                                    <figcaption> <a href="{{ static_asset('assets/assets_web/extra-images/gallery-im-4.jpg')}}"
                                            data-lightbox="example-set"><i class="icon-plus4"></i></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-media">
                                <figure> <img src="{{ static_asset('assets/assets_web/extra-images/gallery-im-5.jpg')}}" alt="#">
                                    <figcaption> <a href="{{ static_asset('assets/assets_web/extra-images/gallery-im-5.jpg')}}"
                                            data-lightbox="example-set"><i class="icon-plus4"></i></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-media">
                                <figure> <img src="{{ static_asset('assets/assets_web/extra-images/gallery-img-6.jpg')}}" alt="#">
                                    <figcaption> <a href="{{ static_asset('assets/assets_web/extra-images/gallery-im-6.jpg')}}"
                                            data-lightbox="example-set"><i class="icon-plus4"></i></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-media">
                                <figure> <img src="{{ static_asset('assets/assets_web/extra-images/gallery-img-5.jpg')}}" alt="#">
                                    <figcaption> <a href="{{ static_asset('assets/assets_web/extra-images/gallery-im-7.jpg')}}"
                                            data-lightbox="example-set"><i class="icon-plus4"></i></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-media">
                                <figure> <img src="{{ static_asset('assets/assets_web/extra-images/gallery-im-8.jpg')}}" alt="#">
                                    <figcaption> <a href="{{ static_asset('assets/assets_web/extra-images/gallery-im-8.jpg')}}"
                                            data-lightbox="example-set"><i class="icon-plus4"></i></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div style="margin-bottom:30px; margin-top:30px;" class="cs-separator"> <span><i class="icon-plus4"></i></span> </div>
            </div>
        </div>
    </div>
</div>
@endsection