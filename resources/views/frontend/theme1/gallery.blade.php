@extends('frontend.theme1.layout')


<?php

$photos = $galleries = (object) [
    (object) [
        'title' => 'Digital Business Solution',
        'image' => asset('invena/images/gallery/g1.webp'),
        'subTitle' => 'Business Strategy',
    ],
    (object) [
        'title' => 'Digital Business Solution',
        'image' => asset('invena/images/gallery/g2.webp'),
        'subTitle' => 'Business Strategy',
    ],
    (object) [
        'title' => 'Digital Business Solution',
        'image' => asset('invena/images/gallery/g3.jpg'),
        'subTitle' => 'Business Strategy',
    ],
    (object) [
        'title' => 'Digital Business Solution',
        'image' => asset('invena/images/gallery/g4.jpg'),
        'subTitle' => 'Business Strategy',
    ],
    (object) [
        'title' => 'Digital Business Solution',
        'image' => asset('invena/images/gallery/g6.jpg'),
        'subTitle' => 'Business Strategy',
    ],

    (object) [
        'title' => 'Digital Business Solution',
        'image' => asset('invena/images/gallery/g7.jpeg'),
        'subTitle' => 'Business Strategy',
    ],
]

?>


@section('content')
    <!-- partners area breadcrumb area wrapper -->
    {{-- <div class="partner-breadcrumb bg_image" style="background-image: url('{{ asset('invena/images/gallery/c3.webp') }}');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center">
                        <span class="bg-title">Gallery</span>
                        <h1 class="title">
                            Gallery
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- partners area breadcrumb area end -->
    <!-- rts galllery area start -->
    <div class="rts-gallery-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="gallery-area-main-wrapper-4">
                        <div class="row g-5">

                            @foreach ($photos as $photo)
                                <div class="col-md-4">
                                    <div class="single-gallery">
                                        <a href="#" class="thumbnail gallery-image">
                                            <img style="height: 250px; width: 100%;" src="{{ $photo->image }}" alt="gallery">
                                        </a>
                                        <div class="instagram">
                                            <img src="{{ asset('invena/images/gallery/instagram.svg') }}" alt="instagram.svg">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts galllery area end -->
    <!-- rts cta area start -->
    @include('frontend.theme1.component.general.subscribe')

    <!-- rts cta area end -->

@endsection