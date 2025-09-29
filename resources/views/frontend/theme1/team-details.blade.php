@extends('frontend.theme1.layout')
<?php
$teams = $teamsContent;

?>
@section('content')
@if ($id || $id == "0")
        <?php
            $found = $teams->$id;
        ?>

    <!-- about us area wrapper main -->
    <div class="rts-breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center">
                        {{-- <span class="bg-title">Our Team</span> --}}
                        <h1 class="title rts-text-anime-style-1">
                           {{ $page_title }}
                        </h1>
                  
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- about us area wrapper main end -->

    <!-- team details area main wrapper -->
    <div class="team-details-top-wrapper-about rts-section-gapBottom mt-dec-section-inner pt--35">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="thumbnail-team-details" data-animation="zoomOut" data-delay="0.2" data-duration="1.2">
                        <img src="{{ asset($found->image) }}" alt="team" style="height: 100%; width: 100%;">
                    </div>
                </div>
                <div class="col-lg-6 pl--35 pl_sm--15 mt_md--30 mt_sm--50">
                    <div class="team-details-right-inner">
                    
                        <p class="disc" data-animation="fadeInUp" data-delay="0.2">
                            {{ $found->content }}
                        </p>
                        <div class="team-details-support-wrapper" data-animation="fadeInUp" data-delay="0.2">
                            <i ><b>Position: </b></i>
                            <div class="support-innner">
                                <span>{{ $found->position }}</span>
                            </div>
                        </div>
                        {{-- <div class="team-details-support-wrapper" data-animation="fadeInUp" data-delay="0.2">
                            <i class="fal fa-phone-volume"></i>
                            <div class="support-innner">
                                <span>Phone Number</span>
                                <a href="#">
                                    <h5 class="title">+259 2154.21568</h5>
                                </a>
                            </div>
                        </div>
                        <div class="team-details-support-wrapper" data-animation="fadeInUp" data-delay="0.2">
                            <i class="far fa-map-marker-alt"></i>
                            <div class="support-innner">
                                <span>Office Location</span>
                                <a href="#">
                                    <h5 class="title">24/DA, Hilton Street, United State</h5>
                                </a>
                            </div>
                        </div> --}}
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team details area main wrapper end -->

   @include('frontend.theme1.component.general.team')


@endif;
@endsection;
