<?php
$about = (object) [
    "topTitle" => config('data.name'),
    'title' => 'Pioneering Innovation',
    'subTitle' => 'for the Modern Era',
    'description' => (object) [
        (object) [
            'title' => 'Profile',
            'content' => "
                Al’ Hakam Holdings Ltd is a private investment holding company operating in the agricultural value chain. The company
proactively identifies growth opportunities in various activities in the value chain and has built a sizable portfolio of
investments with the main focus of creating and optimising value on shareholders' interest through its continuous effort
to build a long-term sustainable group of companies. Al ‘Hakam Holdings is committed to a philosophy of transparent
work ethics, business integrity and accountability throughout all our business transactions. The Group aims to leverage
on the country's agricultural transformation agenda and to become one of the dominant contributors in sustainable
economic growth through its investments and job creation especially in the area of agriculture. The Group business
interest spans diverse sectors of the economy including Hospitality, Agriculture, Manufacturing, Financial Services,
Commodity Exports, Real Estate and Infrastructures Development.
            ",
        ],
//         (object) [
//             'title' => '',
//             'content' => "AL ’Hakam, together with its subsidiaries, operates an agrobusiness, hospitality and a financial services company in
// Nigeria. It uses its headquarters’ office in Keffi, Nasarawa State, Nigeria to create a funding vehicle and an asset
// acquisition and transformation organization, where world-class talent is utilized to ensure execution at the subsidiary
// level. The company has 6 subsidiaries, namely, "
//         ]
    ],

    'bigImage' => asset('invena/images/gallery/g3.jpg'),
    'smallImage' => asset('invena/images/about/09.webp'),
    'link' => 'https://www.youtube.com/watch?v=vZE0j_WCRvI',
    'dataList' => (object) [
        (object) [
            'title' => 'Business Solution',
            'percent' => '100%'
        ],
        (object) [
            'title' => 'Empowering Success',
            'percent' => '100%'
        ],
        (object) [
            'title' => 'Simplifying Success',
            'percent' => '99%'
        ],
    ]

]
?>



<div class="rts-about-area about-bg-four bg_image rts-section-gap" id="about">
    <div class="container pt--50">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="about-content-four-left">
                    <div class="title-style-four left">
                        <span class="pre">{{ $about->topTitle }}</span>
                        <h2 class="title rts-text-anime-style-1">{{ $about->title }} <br>
                            <span>{{ $about->subTitle }}</span>
                        </h2>
                    </div>
                    @foreach ($about->description as $d)
                        {{-- <h3>{{ $d->title }}</h3> --}}
                        <p class="disc">
                            {{ $d->content }}
                        </p>
                    @endforeach
                    
                    <a href="{{ route('frontend.index', ['q' => 'about']) }}" class="rts-btn btn-primary">Continue Reading...</a>

                    {{-- <div class="progress-wrapper-about-4">

                        @foreach ($about->dataList as $list)

                            <div class="single-progress">
                                <h6 class="title">{{ $list->title }}</h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s"
                                        role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                        aria-valuemax="100">
                                    </div>
                                    <span class="progress-number">{{ $list->percent }}</span>
                                </div>
                            </div>

                        @endforeach

                    </div> --}}
                </div>
            </div>
            <div class="col-lg-5">
                <div class="thumbnail-about-right-4">
                    <div class="large-iamg">
                        <img style="height: 100%;" src="{{ $about->bigImage }}" alt="about">
                    </div>
                    {{-- <div class="small-image images-r">
                        <img src="{{ $about->smallImage }}" alt="about">
                    </div> --}}
                    {{-- <div class="poligon-shape images-r">
                        <img src="{{ asset('invena/images/about/poligon-shape.svg') }}" alt="">
                    </div> --}}
                    {{-- <div class="video-area">
                        <img src="{{ asset('invena/images/about/video.svg') }}" alt="video">
                        <div class="vedio-icone">
                            <a class="video-play-button play-video popup-video" href="{{ $about->link }}">
                                <span></span>
                            </a>
                            <div class="video-overlay">
                                <a href="#section1" class="video-overlay-close">×</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>