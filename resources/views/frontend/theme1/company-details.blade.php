@extends('frontend.theme1.layout')



<?php
$contents = $companies;
?>



@section('content')

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
                        {{-- <p class="disc bread-td" style="max-width: 45%; margin: auto;">
                            With a team of experienced professionals and a passion for innovation, we combine
                            cutting-edge strategies
                        </p> --}}
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- about us area wrapper main end -->

    @if ($id || $id == "0")
        <?php
            $found = $contents->$id;

                        ?>
        <!-- team details area main wrapper -->
        <div class="team-details-top-wrapper-about rts-section-gapBottom mt-dec-section-inner pt--35">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="thumbnail-team-details">
                            <img src="{{ asset($found->image) }}" style="width: 100%;" alt="team">
                        </div>
                    </div>
                </div>
            </div>
            <!-- team details area main wrapper end -->

            <div class="rts-team-skill-area rts-section-gapBottom" data-animation="fadeInUp" data-delay="0.2">
                <div class="container">

                    <div class="row mt-4 g-5">
                        <p>
                            {{ $found->content }}
                            {{-- {{ utf8_encode("
                        <h4>Hello world</h4>") }} --}}
                        </p>
                    </div>
                </div>
            </div>
    @endif
    </div>


     @include('frontend.theme1.component.home.companies')
@endsection;