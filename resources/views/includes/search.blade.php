<style>
    .text-color {
        color: #2a5992 !important;
    }

    .font-white a {
        color: #fff !important;
        font-size: 15px !important;
    }

    .font-white a:hover {
        color: orangered !important;
    }

    .statico i {
        width: 50px;
        height: 50px;
        background: #eaeff5;
        border-radius: 50%;
        text-align: center;
        line-height: 50px;
        font-size: 26px;
        border: 1px solid #2a5992;
    }

    .statint {
        border: none;
    }

    .sliderSidebar {
        background: #2a5992;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    }
    .divisions{
        background-color: #508dd8;
        color: #fff; 
    }
    .divisions:hover{
        background-color: #2a5992;
    }
</style>
@if ((bool) $siteSetting->is_slider_active)
    <!-- Revolution slider start -->
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                @if (isset($sliders) && count($sliders))
                    @foreach ($sliders as $slide)
                        <!--Slide-->
                        <li data-slotamount="7" data-transition="slotzoom-horizontal" data-masterspeed="1000"
                            data-saveperformance="on"> <img alt="{{ $slide->slider_heading }}"
                                src="{{ asset('/') }}images/slider/dummy.png"
                                data-lazyload="{{ ImgUploader::print_image_src('/slider_images/' . $slide->slider_image) }}">
                            <div class="caption lft large-title tp-resizeme slidertext1" data-x="left" data-y="90"
                                data-speed="600" data-start="1600">{{ $slide->slider_heading }}</div>
                            <div class="caption lfb large-title tp-resizeme sliderpara" data-x="left" data-y="200"
                                data-speed="600" data-start="2800">{!! $slide->slider_description !!}</div>
                            <div class="caption lfb large-title tp-resizeme slidertext5" data-x="left" data-y="300"
                                data-speed="600" data-start="3500"><a
                                    href="{{ $slide->slider_link }}">{{ $slide->slider_link_text }}</a></div>
                        </li>
                        <!--Slide end-->
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
    <!-- Revolution slider end -->
    <div class="slidersearch">
        <div class="container">
            @include('includes.search_form')
        </div>
    </div>
@else
    

    <div class="userloginbox">

     

        <div class="container ">

            <div class="row">
                <div class="col-lg-8">

                    @if (Auth::guard('company')->check())
                        <h3 class="seekertxt">{{ __('Find the right job') }}.
                            <span>{{ __('Search Jobseekers Today') }}.</span>
                        </h3>
                    @else
                        <h3>{{ __('Find the right job') }}. <span>{{ __('Start yours today') }}.</span></h3>
                    @endif


                    <div class="statsbox mb-1 " style="margin-top: -0px">
                        <div class="row">
                            <div class="col">
                                <div class=" d-flex ">
                                    <div class="statico ">
                                        <div class="statico ">
                                            <i class="fas fa-briefcase text-color"></i>
                                        </div>
                                    </div>
                                    <div class="statinfo">
                                        <h6 class="text-color">Active Jobs</h6>
                                        <h4 class="text-color">{{ $jobsCount }}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class=" d-flex">
                                    <div class="statico"><i class="fas fa-building text-color"></i></div>
                                    <div class="statinfo">
                                        <h6 class="text-color">Active Companies </h6>
                                        <h4 class="text-color">{{ $companyCount }} </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class=" d-flex">
                                    <div class="statico"><i class="fas fa-users text-color"></i></div>
                                    <div class="statinfo">
                                        <h6 class="text-color">Candidates</h6>
                                        <h4 class="text-color">{{ $seekerCount }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @include('includes.search_form')
<div class="d-flex mt-2">
    <div class="divisions text-white p-1 rounded mx-2">Dhaka (3241)</div>
    <div class="divisions text-white p-1 rounded mx-2">Khulna (561)</div>
    <div class="divisions text-white p-1 rounded mx-2">Barisal (161)</div>
    <div class="divisions text-white p-1 rounded mx-2">Chattagram (111)</div>
    <div class="divisions text-white p-1 rounded mx-2">Rajshahi (96)</div>
    <div class="divisions text-white p-1 rounded mx-2">Rangpur (75)</div>
    <div class="divisions text-white p-1 rounded mx-2">Mymensingh (51)</div>

</div>

                   


                </div>
            </div>
            <div class="col-lg-3">
                {{-- <div class="searchtpimg"><img src="{{asset('/')}}images/recruiting.png" alt=""></div> --}}
                <div class="sliderSidebar text-left">

                    <div class="quick-links desktop" role="region" aria-label="Quick links Navigation">
                        <h4 class="hovered-content text-white">Quick links</h4>
                        <div class="ql-list">
                            <ul>
                                <li class="font-white my-2"><a rel="noopener" href="#" target="_blank"><i
                                            class="fas fa-angles-right"></i>&nbsp;<span class="hovered-content">Employer
                                            List</span> <span>(2808)</span></a></li>
                                <li class="font-white my-2"><a rel="noopener" href="#" target="_blank"><i
                                            class="fas fa-angles-right"></i>&nbsp;<span class="hovered-content">New
                                            Jobs</span> <span>(445)</span></a></li>
                                <li class="font-white my-2"><a rel="noopener" href="#" target="_blank"><i
                                            class="fas fa-angles-right"></i>&nbsp;<span class="hovered-content">Deadline
                                            Tomorrow</span> <span>(547)</span></a></li>

                                <li class="font-white my-2"><a rel="noopener" href="#" target="_blank"><i
                                            class="fas fa-angles-right"></i>&nbsp;<span
                                            class="hovered-content">Internship Opportunity</span> <span>(51)</span><span
                                            class="badge"
                                            style="color: #000;font-size: 10px;position: relative;line-height:10px;padding:1px 7px 4px 7px;margin: -10px 0px 0px 4px;background-color: #FFF176;border: 1px solid #FFF176;border-radius: 50px;">new</span></a>
                                </li>

                                <li class="font-white my-2"><a rel="noopener" href="#" target="_blank"><i
                                            class="fas fa-angles-right"></i>&nbsp;<span
                                            class="hovered-content">Contractual Jobs</span> <span>(192)</span></a></li>
                                <li class="font-white my-2"><a rel="noopener" href="#" target="_blank"><i
                                            class="fas fa-angles-right"></i>&nbsp;<span class="hovered-content">Part
                                            time Jobs</span> <span>(35)</span></a></li>



                                <li class="font-white my-2">
                                    <a rel="noopener" href="#" target="_blank"><i
                                            class="fas fa-angles-right"></i>&nbsp;<span
                                            class="hovered-content">Overseas Jobs</span> <span>(57)</span></a>
                                </li>


                                <li class="font-white my-2"><a rel="noopener" href="#" target="_blank"><i
                                            class="fas fa-angles-right"></i>&nbsp;<span class="hovered-content">Work
                                            From Home</span> <span>(54)</span>

                                    </a></li>

                                <li class="font-white my-2"><a rel="noopener" href="#" target="_blank"
                                        onclick="_gaq.push(['_trackEvent', 'Quick Links' , 'Fresher Jobs','ENG',1.00,true]); "><i
                                            class="fas fa-angles-right"></i>&nbsp;<span
                                            class="hovered-content">Fresher Jobs</span> <span>(1469)</span>

                                    </a></li>

                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        </div>



         
    </div>
@endif
