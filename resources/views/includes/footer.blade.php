<!--Footer-->
<style>
    .footer-bg{
        background-color: #263238!important;
        color:#fff !important;
    }
    .font-white{
        color: #fff!important;
    }
    .font-white:hover{
        color: orangered!important;
    }
    .social{
        color: #fff!important;
    }
</style>
<div class="largebanner shadow3 footer-bg">
<div class="adin">
{!! $siteSetting->above_footer_ad !!}
</div>
<div class="clearfix"></div>
</div>






<div class="footerWrap footer-bg"> 
    <div class="container">
        <div class="row"> 

            <!--Quick Links-->
            <div class="col-md-3 col-sm-6">
                <h5 class="font-white">{{__('Quick Links')}}</h5>
                <!--Quick Links menu Start-->
                <ul class="quicklinks font-white">
                    <li><a href="{{ route('index') }}" class="font-white">{{__('Home')}}</a></li>
                    <li><a href="{{ route('contact.us') }}" class="font-white">{{__('Contact Us')}}</a></li>
                    <li class="postad"><a href="{{ route('post.job') }}" class="font-white">{{__('Post a Job')}}</a></li>
                    <li><a href="{{ route('faq') }}" class="font-white">{{__('FAQs')}}</a></li>
                    @foreach($show_in_footer_menu as $footer_menu)
                    @php
                    $cmsContent = App\CmsContent::getContentBySlug($footer_menu->page_slug);
                    @endphp

                    <li class="{{ Request::url() == route('cms', $footer_menu->page_slug) ? 'active' : '' }}"><a href="{{ route('cms', $footer_menu->page_slug) }}" class="font-white">{{ $cmsContent->page_title }}</a></li>
                    @endforeach
                </ul>
            </div>
            <!--Quick Links menu end-->

            <div class="col-md-3 col-sm-6">
                <h5 class="font-white">{{__('Jobs By Functional Area')}}</h5>
                <!--Quick Links menu Start-->
                <ul class="quicklinks font-white">
                    @php
                    $functionalAreas = App\FunctionalArea::getUsingFunctionalAreas(10);
                    @endphp
                    @foreach($functionalAreas as $functionalArea)
                    <li><a href="{{ route('job.list', ['functional_area_id[]'=>$functionalArea->functional_area_id]) }}"  class="font-white">{{$functionalArea->functional_area}}</a></li>
                    @endforeach
                </ul>
            </div>

            <!--Jobs By Industry-->
            <div class="col-md-3 col-sm-6">
                <h5  class="font-white">{{__('Jobs By Industry')}}</h5>
                <!--Industry menu Start-->
                <ul class="quicklinks font-white">
                    @php
                    $industries = App\Industry::getUsingIndustries(10);
                    @endphp
                    @foreach($industries as $industry)
                    <li><a  class="font-white" href="{{ route('job.list', ['industry_id[]'=>$industry->industry_id]) }}">{{$industry->industry}}</a></li>
                    @endforeach
                </ul>
                <!--Industry menu End-->
                <div class="clear"></div>
            </div>

            <!--About Us-->
            <div class="col-md-3 col-sm-12">
                <h5  class="font-white">{{__('Contact Us')}}</h5>
                <div class="address font-white">{{ $siteSetting->site_street_address }}</div>
                <div class="email font-white"> <a href="mailto:{{ $siteSetting->mail_to_address }}"  class="font-white">{{ $siteSetting->mail_to_address }}</a> </div>
                <div class="phone font-white"> <a href="tel:{{ $siteSetting->site_phone_primary }}"  class="font-white">{{ $siteSetting->site_phone_primary }}</a></div>
                <!-- Social Icons -->
                <div class="social font-white">@include('includes.footer_social')</div>
                <!-- Social Icons end --> 

            </div>
            <!--About us End--> 


        </div>
    </div>
</div>
<!--Footer end--> 
<!--Copyright-->
<div class="copyright footer-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="bttxt font-white">{{__('Copyright')}} &copy; {{date('Y')}} {{ $siteSetting->site_name }}. {{__('All Rights Reserved')}}. {{__('Design by')}}: <a href=https://4axiz.com target="_blank"  class="font-white">4axiz IT Ltd</a></div>
            </div>
            <div class="col-md-4">
                <div class="paylogos"><img src="{{asset('/')}}images/payment-icons.png" alt="" /></div>	
            </div>
        </div>

    </div>
</div>
