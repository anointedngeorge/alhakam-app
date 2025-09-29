<?php

$contents = $companies;


?>


<div class="why-choose-us-area rts-section-gapBottom rts_jump_animation-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-style-four center">
                    <span class="pre">
                        {{-- {{ config('data.name') }} --}}
                    </span>
                    {{-- <h2 class="title rts-text-anime-style-1">Integrated <span>Companies</span></h2> --}}
                    <p class="text-center">
                        AL ’Hakam, together with its subsidiaries, operates an agrobusiness, hospitality and a financial services company in
Nigeria. <br /> It uses its headquarters’ office in Keffi, Nasarawa State, Nigeria to create a funding vehicle and an asset
acquisition and transformation organization, <br /> where world-class talent is utilized to ensure execution at the subsidiary
level. The company has 6 subsidiaries, namely, 
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--10">

            <div class="swiper mySwiperh2_clients" dir="ltr">
                <div class="swiper-wrapper">
                    @foreach ($contents as $index => $content)
                        <div class="swiper-slide col-lg-4 col-md-6 col-sm-12 rts-jump__item" data-animation="fadeInUp"
                            data-delay="0.2" data-duration="1.2">

                            <div class="single-why-choose-four">
                                <a href="{{ route('frontend.page', ['pagename'=>'company-details', 'title'=> $content->title, 'id' => $index ]) }}" class="thumbnail">
                                    <img src="{{ asset($content->image) }}" style="height: 400px;"  alt="choose">
                                </a>
                                <div class="inner-content">
                                    {{-- <div class="icon">
                                        <img src="{{ $content->icon }}" alt="why-choose">
                                    </div> --}}
                                    <a href="#" class="bg-warning">
                                        <h6 class="title">{{ $content->title }}</h6>
                                    </a>
                                    <p class="disc size-3">
                                        {{ substr($content->content, 0, 88) }}
                                    </p>
                                    <a href="{{ route('frontend.page', ['pagename'=>'company-details', 'title'=> $content->title, 'id' => $index ]) }}" class="read-more"> {{ $content->link->title }} <i
                                        class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>