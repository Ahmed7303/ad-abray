@extends('layouts.app')

@section('content')
    <!-- ========================
                                                        page title
                                                        =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
        <div class="bg-img">
            <img src="images/tender-bg.png" alt="background">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="home.html">{{ __('strings.home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('strings.tender') }}
                            </li>
                        </ol>
                    </nav>
                    <h1 class="pagetitle__heading">{{ __('strings.tender') }}</h1>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- /.page-title -->

    <!-- Tender ========================== -->
    <section class="tender">
        <div class="container">
            <div class="tender_wrap">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <aside class="sidebar mb-30">
                            <div class="widget widget-help bg-theme">
                                <div class="widget__content">
                                    <h5>{{ __('strings.how_can') }} <br>{{ __('strings.we_help_you') }}</h5>
                                    <p>{{ __('strings.we_help_you_def') }}</p>
                                    <a href="contact-us.html" class="btn btn__secondary btn__hover2"><i
                                            class="fa fa-envelope"></i>{{ __('strings.contact_us') }}</a>
                                </div><!-- /.widget-download -->
                            </div><!-- /.widget-help -->
                        </aside><!-- /.sidebar -->
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-8">
                        <h2 class="main_title">
                            {{ __('strings.tender.our_clients') }}
                        </h2>

                        <div class="tender_group">
                            <div class="tender_col">
                                @foreach ($tender['clients']->where('potential', false) as $item)
                                    @if ($loop->index % 2 == 0)
                                        <div class="tender_col-box">
                                            <div class="tender_col-box-logo">
                                                <img src="{{ asset('storage/' . $item->logo) }}" alt="company-logo">
                                            </div>

                                            <p class="tender_col-box-txt">
                                                {{ $item->description }}
                                            </p>
                                            @if ($item->image)
                                                <div class="tender_col-box-photo">

                                                    <img src="{{ env('APP_URL') }}/{{ $item->image }}"
                                                        alt="company-photo">

                                                </div>
                                            @endif
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                            <div class="tender_col">
                                @foreach ($tender['clients']->where('potential', false) as $item)
                                    @if ($loop->index % 2 == 1)
                                        <div class="tender_col-box">
                                            <div class="tender_col-box-logo">
                                                <img src="{{ asset('storage/' . $item->logo) }}" alt="company-logo">
                                            </div>

                                            <p class="tender_col-box-txt">
                                                {{ $item->description }}
                                            </p>
                                            @if ($item->image)
                                                <div class="tender_col-box-photo">

                                                    <img src="{{ env('APP_URL') }}/{{ $item->image }}"
                                                        alt="company-photo">

                                                </div>
                                            @endif
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tender end ====================== -->

    <!-- Services ========================== -->
    <section class="service">
        <div class="container">
            <div class="service_wrap">
                <h2 class="main_title">
                    {{ __('strings.tender.services') }}
                </h2>
                <div class="service_box">
                    @if (count($tender['services']) > 0)
                        @foreach ($tender['services'] as $item)
                            <div class="service_item">
                                <div class="service_item-icon">
                                    <img src="{{ asset('storage/' . $item->icon) }}" alt="service-icon">
                                </div>

                                <h3 class="service_item-title">
                                    {{ $item->title }}
                                </h3>

                                <p class="service_item-txt">
                                    {{ $item->description }}
                                </p>
                            </div>
                        @endforeach
                    @endif


                </div>
            </div>
        </div>
    </section>
    <!-- Services end ====================== -->

    <!-- Clients ========================== -->
    <section class="client">
        <div class="container">
            <div class="client_wrap">
                <h2 class="main_title">
                    {{ __('strings.tender.potential_clients') }}
                </h2>

                <div class="client_box">
                    @if (count($tender['clients']->where('potential', true)) > 0)
                        @foreach ($tender['clients']->where('potential', true)->take(3) as $item)
                            <div class="client_item">
                                @if ($item->image)
                                    <div class="client_item-photo">
                                        <img src="{{ env('APP_URL') }}/{{ $item->image }}" alt="photo">
                                    </div>
                                @endif

                                <div class="client_item-info">
                                    <div class="client_item-logo">
                                        <img src="{{ asset('storage/' . $item->logo) }}" alt="logo">
                                    </div>

                                    <p class="client_item-txt">
                                        {{ $item->description }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </section>
    <!-- Clients end ====================== -->

    <!-- Map ========================== -->
    <section class="atlas">
        <div class="container">
            <div class="atlas_wrap">
                <div class="atlas_photo">
                    <svg width="882" height="703" viewBox="0 0 882 703" fill="none" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect y="184" width="882" height="519" fill="url(#pattern0)" />
                        <rect x="153" y="388" width="21" height="21" rx="10.5" fill="#ED7D31" fill-opacity="0.5" />
                        <path d="M111 147.5V257.5H163.5V397" id="circle-dots-1" stroke="#ED7D31" stroke-dasharray="2 2" />
                        <rect x="61" y="135" width="100" height="100" rx="50" class="mat  modBtn NA" data-tab="#tab-NA"
                            id="circle-1" fill="#ED7D31" />
                        <path
                            d="M103.449 169.562V198H98.5469L85.793 177.629V198H80.8906V169.562H85.793L98.5859 189.973V169.562H103.449ZM109.016 195.656C109.016 194.927 109.263 194.315 109.758 193.82C110.253 193.312 110.923 193.059 111.77 193.059C112.629 193.059 113.299 193.312 113.781 193.82C114.276 194.315 114.523 194.927 114.523 195.656C114.523 196.385 114.276 196.997 113.781 197.492C113.299 197.987 112.629 198.234 111.77 198.234C110.923 198.234 110.253 197.987 109.758 197.492C109.263 196.997 109.016 196.385 109.016 195.656ZM131.496 173.352L123 198H117.863L128.566 169.562H131.848L131.496 173.352ZM138.605 198L130.09 173.352L129.719 169.562H133.02L143.762 198H138.605ZM138.195 187.453V191.34H122.727V187.453H138.195Z"
                            fill="white" />
                        <rect x="161" y="396" width="5" height="5" rx="2.5" fill="#ED7D31" />
                        <rect x="435" y="481" width="21" height="21" rx="10.5" fill="#843C0C" fill-opacity="0.5" />
                        <path d="M392 426V450.248H445V481" id="circle-dots-2" stroke="#843C0C" stroke-dasharray="2 2" />
                        <rect x="341" y="326" width="100" height="100" rx="50" class="mat modBtn AF" data-tab="#tab-AF"
                            id="circle-2" fill="#843C0C" />
                        <path
                            d="M391.965 364.352L383.469 389H378.332L389.035 360.562H392.316L391.965 364.352ZM399.074 389L390.559 364.352L390.188 360.562H393.488L404.23 389H399.074ZM398.664 378.453V382.34H383.195V378.453H398.664Z"
                            fill="white" />
                        <rect x="443" y="489" width="5" height="5" rx="2.5" fill="#843C0C" />
                        <rect x="272" y="563" width="21" height="21" rx="10.5" fill="#5B9BD5" fill-opacity="0.5" />
                        <path d="M275 164V343.439H283V571" id="circle-dots-3" stroke="#5B9BD5" stroke-dasharray="2 2" />
                        <rect x="225" y="111" width="100" height="100" rx="50" class="mat modBtn SA" data-tab="#tab-SA"
                            id="circle-3" fill="#5B9BD5" />
                        <path
                            d="M259.852 166.676C259.852 166.09 259.76 165.569 259.578 165.113C259.409 164.658 259.103 164.241 258.66 163.863C258.217 163.486 257.592 163.121 256.785 162.77C255.991 162.405 254.975 162.034 253.738 161.656C252.384 161.24 251.134 160.777 249.988 160.27C248.855 159.749 247.866 159.15 247.02 158.473C246.173 157.783 245.516 156.995 245.047 156.109C244.578 155.211 244.344 154.176 244.344 153.004C244.344 151.845 244.585 150.79 245.066 149.84C245.561 148.889 246.258 148.069 247.156 147.379C248.068 146.676 249.142 146.135 250.379 145.758C251.616 145.367 252.983 145.172 254.48 145.172C256.59 145.172 258.406 145.562 259.93 146.344C261.466 147.125 262.645 148.173 263.465 149.488C264.298 150.803 264.715 152.255 264.715 153.844H259.852C259.852 152.906 259.65 152.079 259.246 151.363C258.855 150.634 258.257 150.061 257.449 149.645C256.655 149.228 255.646 149.02 254.422 149.02C253.263 149.02 252.299 149.195 251.531 149.547C250.763 149.898 250.19 150.374 249.812 150.973C249.435 151.572 249.246 152.249 249.246 153.004C249.246 153.538 249.37 154.026 249.617 154.469C249.865 154.898 250.242 155.302 250.75 155.68C251.258 156.044 251.896 156.389 252.664 156.715C253.432 157.04 254.337 157.353 255.379 157.652C256.954 158.121 258.328 158.642 259.5 159.215C260.672 159.775 261.648 160.413 262.43 161.129C263.211 161.845 263.797 162.659 264.188 163.57C264.578 164.469 264.773 165.491 264.773 166.637C264.773 167.835 264.533 168.915 264.051 169.879C263.569 170.829 262.879 171.643 261.98 172.32C261.095 172.984 260.027 173.499 258.777 173.863C257.54 174.215 256.16 174.391 254.637 174.391C253.27 174.391 251.922 174.208 250.594 173.844C249.279 173.479 248.081 172.926 247 172.184C245.919 171.428 245.06 170.491 244.422 169.371C243.784 168.238 243.465 166.917 243.465 165.406H248.367C248.367 166.331 248.523 167.118 248.836 167.77C249.161 168.421 249.611 168.954 250.184 169.371C250.757 169.775 251.421 170.074 252.176 170.27C252.944 170.465 253.764 170.562 254.637 170.562C255.783 170.562 256.74 170.4 257.508 170.074C258.289 169.749 258.875 169.293 259.266 168.707C259.656 168.121 259.852 167.444 259.852 166.676ZM268.836 171.656C268.836 170.927 269.083 170.315 269.578 169.82C270.073 169.312 270.743 169.059 271.59 169.059C272.449 169.059 273.12 169.312 273.602 169.82C274.096 170.315 274.344 170.927 274.344 171.656C274.344 172.385 274.096 172.997 273.602 173.492C273.12 173.987 272.449 174.234 271.59 174.234C270.743 174.234 270.073 173.987 269.578 173.492C269.083 172.997 268.836 172.385 268.836 171.656ZM291.316 149.352L282.82 174H277.684L288.387 145.562H291.668L291.316 149.352ZM298.426 174L289.91 149.352L289.539 145.562H292.84L303.582 174H298.426ZM298.016 163.453V167.34H282.547V163.453H298.016Z"
                            fill="white" />
                        <rect x="280" y="571" width="5" height="5" rx="2.5" fill="#5B9BD5" />
                        <rect x="736" y="590" width="21" height="21" rx="10.5" fill="#A5A5A5" fill-opacity="0.5" />
                        <path d="M765 124V332.978H746V598" id="circle-dots-4" stroke="#A5A5A5" stroke-dasharray="2 2" />
                        <rect x="715" y="34" width="100" height="100" rx="50" class="mat modBtn AU" data-tab="#tab-AU"
                            id="circle-4" fill="#A5A5A5" />
                        <path
                            d="M765.965 72.3516L757.469 97H752.332L763.035 68.5625H766.316L765.965 72.3516ZM773.074 97L764.559 72.3516L764.188 68.5625H767.488L778.23 97H773.074ZM772.664 86.4531V90.3398H757.195V86.4531H772.664Z"
                            fill="white" />
                        <rect x="744" y="598" width="5" height="5" rx="2.5" fill="#A5A5A5" />
                        <rect x="533" y="368" width="21" height="21" rx="10.5" fill="#00B050" fill-opacity="0.5" />
                        <path d="M420 137V242.371H544V376" id="circle-dots-5" stroke="#00B050" stroke-dasharray="2 2" />
                        <rect x="370" y="37" width="100" height="100" rx="50" class="mat modBtn EU" data-tab="#tab-EU"
                            id="circle-5" fill="#00B050" />
                        <path
                            d="M430.504 96.1133V100H415.406V96.1133H430.504ZM416.793 71.5625V100H411.891V71.5625H416.793ZM428.531 83.4375V87.2656H415.406V83.4375H428.531ZM430.406 71.5625V75.4688H415.406V71.5625H430.406Z"
                            fill="white" />
                        <rect x="541" y="376" width="5" height="5" rx="2.5" fill="#00B050" />
                        <rect x="645" y="365" width="21" height="21" rx="10.5" fill="#FFC000" fill-opacity="0.5" />
                        <path d="M591 76V207.383H656V374" stroke="#FFC000" id="circle-dots-6" stroke-dasharray="2 2" />
                        <rect x="541" width="100" height="100" id="circle-6" rx="50" class="mat modBtn AS"
                            data-tab="#tab-AS" fill="#FFC000" />
                        <path
                            d="M591.965 38.3516L583.469 63H578.332L589.035 34.5625H592.316L591.965 38.3516ZM599.074 63L590.559 38.3516L590.188 34.5625H593.488L604.23 63H599.074ZM598.664 52.4531V56.3398H583.195V52.4531H598.664Z"
                            fill="white" />
                        <rect x="653" y="373" width="5" height="5" rx="2.5" fill="#FFC000" />
                        <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_62_20" transform="scale(0.00113379 0.00192678)" />
                            </pattern>
                            <image id="image0_62_20" width="882" height="519"
                                xlink:href="data:image/png;base64,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" />
                        </defs>
                    </svg>
                </div>

                <div class="atlas_box">
                    <div class="atlas_box-item modBtn NA" data-tab="#tab-NA">
                        {{ __('strings.north_america') }}
                    </div>

                    <div class="atlas_box-item modBtn SA" data-tab="#tab-SA">
                        {{ __('strings.south_america') }}
                    </div>

                    <div class="atlas_box-item modBtn AS" data-tab="#tab-AS">
                        {{ __('strings.asia') }}
                    </div>

                    <div class="atlas_box-item modBtn AU" data-tab="#tab-AU">
                        {{ __('strings.australia') }}
                    </div>

                    <div class="atlas_box-item modBtn EU" data-tab="#tab-EU">
                        {{ __('strings.europe') }}
                    </div>

                    <div class="atlas_box-item modBtn AF" data-tab="#tab-AF">
                        {{ __('strings.africa') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Map end ====================== -->

    <!-- Testimonials ========================== -->
    <section class="review">
        <div class="container">
            <div class="review_wrap">
                <h4 class="main_sup-title">
                    {{ __('strings.tender.testimonials') }}
                </h4>
                <a href="{{ route('reviews') }}">
                    <h2 class="main_title">
                        {{ __('strings.tender.appreciation') }}
                    </h2>
                </a>


                <div class="review_slider">
                    @if (count($tender['testimonals']) > 0)
                        @foreach ($tender['testimonals'] as $item)
                            <a href="{{ route('reviews') }}" class="review_slider-item">
                                <p class="review_slider-item-txt">
                                    {{ $item->text }}
                                </p>

                                <div class="review_slider-row">
                                    <div class="review_slider-item-icon">
                                        <img src="" alt="">
                                    </div>

                                    <div class="review_slider-item-group">
                                        <h4 class="review_slider-item-name">
                                            {{ $item->name }}
                                        </h4>
                                        <p class="review_slider-item-prof">
                                            {{ $item->job }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials end ====================== -->

    <section id="team" class="team  pb-70">
        <div class="container">
            <div class="row heading ">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <span class="heading__subtitle">{{ __('strings.team_head') }}</span>
                </div><!-- /.col-lg-12 -->
                <div class="col-sm-12 col-md-6 col-lg-5">
                    <h2 class="heading__title">{{ __('strings.team_head_def1') }}</h2>
                </div><!-- /.col-lg-5 -->
                <div class="col-sm-12 col-md-6 col-lg-6 offset-lg-1">
                    <p class="heading__desc">{{ __('strings.team_head_def2') }}</p>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div>
    </section>
    <!-- ========================
                        Team members
                  ========================== -->
    <section id="contactPanels" class="contact-panels text-center pb-70">
        <div class="container">
            <div class="row justify-content-center">

                <!-- Contact panel #1 -->
                @if (isset($tender['staffs']) && count($tender['staffs']) > 0)
                    @foreach ($tender['staffs'] as $staff)
                        <?php
                        $items = count($tender['staffs']);
                        $cols = $items == 1 ? '8' : '6';
                        ?>
                        <div class="col-sm-12 col-md-12 col-lg-{{ $cols }}">
                            <div class="contact-panel">
                                <div class="contact__panel-header">
                                    <h4 class="contact__panel-title">{{ $staff->name }}</h4>
                                </div>
                                <ul class="contact__list list-unstyled">
                                    <li><b>{{ __('strings.tel1_head') }}</b>{{ $staff->phone }}</li>
                                    <li><b>{{ __('strings.mail_head') }}</b>{{ $staff->email }}</li>
                                    <li><b>{{ __('strings.address_head') }}</b>{{ $staff->address }}</li>
                                    <li><b>{{ __('strings.working_hours_head') }}</b>{{ $staff->hours }}</li>


                                </ul>
                            </div><!-- /.contact-panel -->
                        </div><!-- /.col-lg-4 -->
                    @endforeach
                @endif


            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /. Contact panels -->

    <!-- Modals =============================== -->
    <div class="modal mod map-modal" id="tab-NA">
        <div class="modal_inner NA">
            <div class="modal_close modClose" data-mod="tab-NA">
                <img src="images/svg/close.svg" alt="close-icon">
            </div>
            <div class="modal_slider">
                @if (count($tender['clients']->where('potential', false)->where('continent', 'north_america')) > 0)
                    @foreach ($tender['clients']->where('potential', false)->where('continent', 'north_america') as $item)
                        <div class="modal_slider-item">
                            @if ($item->image)
                                <div class="modal_slider-item-photo">

                                    <img src="{{ env('APP_URL') }}/{{ $item->image }}" alt="photo">
                                </div>
                            @endif

                            <div class="modal_slider-item-logo">
                                <img src="{{ asset('storage/' . $item->logo) }}" alt="logo">
                            </div>

                            <p class="modal_slider-item-txt">
                                {{ $item->description }}
                            </p>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </div>
    <!-- Modals end =========================== -->

    <!-- Modals =============================== -->
    <div class="modal mod map-modal" id="tab-SA">
        <div class="modal_inner NA">
            <div class="modal_close modClose" data-mod="tab-SA">
                <img src="images/svg/close.svg" alt="close-icon">
            </div>
            <div class="modal_slider">
                @if (count($tender['clients']->where('potential', false)->where('continent', 'south_america')) > 0)
                    @foreach ($tender['clients']->where('potential', false)->where('continent', 'south_america') as $item)
                        <div class="modal_slider-item">
                            @if ($item->image)
                                <div class="modal_slider-item-photo">
                                        <img src="{{ env('APP_URL') }}/{{ $item->image }}" alt="photo">
                                </div>
                            @endif

                            <div class="modal_slider-item-logo">
                                <img src="{{ asset('storage/' . $item->logo) }}" alt="logo">
                            </div>

                            <p class="modal_slider-item-txt">
                                {{ $item->description }}
                            </p>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- Modals end =========================== -->

    <!-- Modals =============================== -->
    <div class="modal mod map-modal" id="tab-AS">
        <div class="modal_inner NA">
            <div class="modal_close modClose" data-mod="tab-AS">
                <img src="images/svg/close.svg" alt="close-icon">
            </div>
            <div class="modal_slider">
                @if (count($tender['clients']->where('potential', false)->where('continent', 'asia')) > 0)
                    @foreach ($tender['clients']->where('potential', false)->where('continent', 'asia') as $item)
                        <div class="modal_slider-item">
                            @if ($item->image)
                                <div class="modal_slider-item-photo">
                                        <img src="{{ env('APP_URL') }}/{{ $item->image }}" alt="photo">
                                </div>
                            @endif
                            <div class="modal_slider-item-logo">
                                <img src="{{ asset('storage/' . $item->logo) }}" alt="logo">
                            </div>

                            <p class="modal_slider-item-txt">
                                {{ $item->description }}
                            </p>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- Modals end =========================== -->

    <!-- Modals =============================== -->
    <div class="modal mod map-modal" id="tab-AU">
        <div class="modal_inner NA">
            <div class="modal_close modClose" data-mod="tab-AU">
                <img src="images/svg/close.svg" alt="close-icon">
            </div>
            <div class="modal_slider">
                @if (count($tender['clients']->where('potential', false)->where('continent', 'australia')) > 0)
                    @foreach ($tender['clients']->where('potential', false)->where('continent', 'australia') as $item)
                        <div class="modal_slider-item">
                            @if ($item->image)
                                <div class="modal_slider-item-photo"> 
                                        <img src="{{ env('APP_URL') }}/{{ $item->image }}" alt="photo">
                                </div>
                            @endif
                            <div class="modal_slider-item-logo">
                                <img src="{{ asset('storage/' . $item->logo) }}" alt="logo">
                            </div>

                            <p class="modal_slider-item-txt">
                                {{ $item->description }}
                            </p>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- Modals end =========================== -->

    <!-- Modals =============================== -->
    <div class="modal mod map-modal" id="tab-EU">
        <div class="modal_inner NA">
            <div class="modal_close modClose" data-mod="tab-EU">
                <img src="images/svg/close.svg" alt="close-icon">
            </div>
            <div class="modal_slider">
                @if (count($tender['clients']->where('potential', false)->where('continent', 'europe')) > 0)
                    @foreach ($tender['clients']->where('potential', false)->where('continent', 'europe') as $item)
                        <div class="modal_slider-item">
                            @if ($item->image)
                                <div class="modal_slider-item-photo">
                                    <img src="{{ env('APP_URL') }}/{{ $item->image }}" alt="photo">
                                </div>
                            @endif
                            <div class="modal_slider-item-logo">
                                <img src="{{ asset('storage/' . $item->logo) }}" alt="logo">
                            </div>

                            <p class="modal_slider-item-txt">
                                {{ $item->description }}
                            </p>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- Modals end =========================== -->

    <!-- Modals =============================== -->
    <div class="modal mod map-modal" id="tab-AF">
        <div class="modal_inner NA">
            <div class="modal_close modClose" data-mod="tab-AF">
                <img src="images/svg/close.svg" alt="close-icon">
            </div>
            <div class="modal_slider">
                @if (count($tender['clients']->where('potential', false)->where('continent', 'africa')) > 0)
                    @foreach ($tender['clients']->where('potential', false)->where('continent', 'africa') as $item)
                        <div class="modal_slider-item">
                            @if ($item->image)
                                <div class="modal_slider-item-photo">
                                    <img src="{{ env('APP_URL') }}/{{ $item->image }}" alt="photo">
                                </div>
                            @endif
                            <div class="modal_slider-item-logo">
                                <img src="{{ asset('storage/' . $item->logo) }}" alt="logo">
                            </div>

                            <p class="modal_slider-item-txt">
                                {{ $item->description }}
                            </p>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- Modals end =========================== -->

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script>
        $('#circle-1').mouseover(function() {
            $('#circle-dots-1').addClass("active")
        });
        $('#circle-2').mouseover(function() {
            $('#circle-dots-2').addClass("active")
        });
        $('#circle-3').mouseover(function() {
            $('#circle-dots-3').addClass("active")
        });
        $('#circle-4').mouseover(function() {
            $('#circle-dots-4').addClass("active")
        });
        $('#circle-5').mouseover(function() {
            $('#circle-dots-5').addClass("active")
        });
        $('#circle-6').mouseover(function() {
            $('#circle-dots-6').addClass("active")
        });


        $('#circle-1').mouseleave(function() {
            $('#circle-dots-1').removeClass("active")
        });
        $('#circle-2').mouseleave(function() {
            $('#circle-dots-2').removeClass("active")
        });
        $('#circle-3').mouseleave(function() {
            $('#circle-dots-3').removeClass("active")
        });
        $('#circle-4').mouseleave(function() {
            $('#circle-dots-4').removeClass("active")
        });
        $('#circle-5').mouseleave(function() {
            $('#circle-dots-5').removeClass("active")
        });
        $('#circle-6').mouseleave(function() {
            $('#circle-dots-6').removeClass("active")
        });
    </script>

@endsection
