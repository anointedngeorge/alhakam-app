<div class="container" style="background-color: #c9c9c9;">
    <div class="row">
        <div class="col-lg-12">
            <div class="header-main-one-wrapper">
                <div class="thumbnail">
                    <a href="{{ route('frontend.index') }}">
                        <img src="{{ asset(config('data.logo')) }}" style="width: 300px;" alt="finbiz-logo">
                    </a>
                </div>
                <div class="main-header">
                    <div class="nav-area">
                        <ul>
                            @foreach ($navigationProvider as $n)
                                @if ($n->show_on_header)

                                    @if ($n->has_children)
                                        <li class="main-nav has-dropdown project-a-after">
                                            <a href="#">{{ $n->title }}</a>
                                            <ul class="submenu parent-nav">
                                                @foreach ($n->children as $child)
                                                    <li style="cursor: pointer;" >
                                                        <a  href="{{ $child->url }}">{{ $child->title }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else
                                        <li class="main-nav mega-menu project-a-after ">
                                            <a href="{{ $n->url }}">{{ $n->title }}</a>
                                        </li>
                                    @endif

                                @endif
                            @endforeach

                        </ul>
                    </div>


                    <div class="loader-wrapper">
                        <div class="loader">
                        </div>
                        <div class="loader-section section-left"></div>
                        <div class="loader-section section-right"></div>
                    </div>
                    <div class="button-area">
                        {{-- <button class="search" id="search" aria-label="Search"><i
                                class="far fa-search"></i></button> --}}
                        {{-- <a href="{{ route('frontend.index', ['q' => 'carrier']) }}"
                            class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btn">Career Program</a> --}}
                        <button id="menu-btn" aria-label="Menu" class="menu-btn menu ml--20 ml_sm--5">
                            <img class="menu-light" src="{{ asset("invena/images/icons/01.svg") }}" alt="Menu-icon">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>