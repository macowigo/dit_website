@extends('layouts.web')


@section('content')

<div class="dit-page-title-wrap  dit-style-medium dit-left-align">
  <div class="dit-header-transparent-substitute"></div>
  <div class="dit-page-title-overlay"></div>
  <div  class="dit-page-title-container dit-container">
  <div style="padding-bottom:20px;" class="dit-page-title-content dit-item-pdlr">
  <div class="dit-page-caption">    </div>
    <h1 class="dit-page-title"> </h1></div>
  </div>
</div>

<div class="dit-page-wrapper" id="dit-page-wrapper">
<div class="gdlr-core-page-builder-body">
<div class="gdlr-core-pbf-sidebar-wrapper " style="margin: 0px 0px 60px 0px;">
<div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
    <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" style="padding: 30px 0px 30px 0px;">
        <div class="gdlr-core-pbf-sidebar-content-inner">

<div class="gdlr-core-pbf-element">
    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 15px ;">
        <div class="gdlr-core-text-box-item-content" style="text-align:justify;font-size: 18px;  line-height: 24px; font-weight:normal;letter-spacing: 0px;text-transform: none ;color: #148EB7; font-weight:normal">
            <!--<p>Caption here or some descriptions!!</p>-->
        </div>
    </div>
</div>

<div class="gdlr-core-pbf-element">
    <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align">
        <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #148EB7 ;border-bottom-width: 3px ;"></div>
    </div>
</div>
<div class=" ">
    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_93">
        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">

            <div class="gdlr-core-pbf-element">
                <div class="gdlr-core-event-item gdlr-core-item-pdb" id="div_1dd7_94">
                  <div class="gdlr-core-block-item-title-wrap  gdlr-core-left-align gdlr-core-item-mglr" id="div_1dd7_46">
                          <div class="gdlr-core-block-item-title-inner clearfix">
                              <h3 class="gdlr-core-block-item-title" id="h3_1dd7_10">Events</h3>
                          </div>

                      </div>

                    <div class="gdlr-core-event-item-holder clearfix">
                      @foreach($allevents as $event)
                      <div style="padding-top:0px;padding-bottom:0px; margin-top:0px; margin-bottom:0px;" class="gdlr-core-event-item-list gdlr-core-style-widget gdlr-core-item-pdlr  clearfix" id="div_1dd7_97">

                          <span class="gdlr-core-event-item-info gdlr-core-type-start-date-month">
                                <span class="gdlr-core-date" >{{$event->starttime->format('d')}}</span>
                                <span class="gdlr-core-month">{{$event->starttime->format('M')}}</span>
                            </span>
                            <div class="gdlr-core-event-item-content-wrap">
                                <h3 style = "font-size:14px; line-height: 20px;" class="gdlr-core-event-item-title">
                                    <a href="{{route('web.home.single_event',['id'=>$event->id])}}" >{{{$event->title}}}</a>
                                </h3>
                                <div class="gdlr-core-event-item-info-wrap">
                                    <span class="gdlr-core-event-item-info gdlr-core-type-time">
                                      <span class="gdlr-core-head" >
                                          <i class="icon_clock_alt" ></i>
                                      </span>
                                      <span class="gdlr-core-tail"> {{date('g:i a', strtotime($event->starttime))}} - {{date('F j,g:i a', strtotime($event->endtime))}}</span>
                                    </span>
                                    <span class="gdlr-core-event-item-info gdlr-core-type-location">
                                        <span class="gdlr-core-head" >
                                            <i class="icon_pin_alt" ></i>
                                        </span>
                                        <span class="gdlr-core-tail">{{$event->venue}}</span>
                                    </span>

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

  </div>
  </div>
  <div class="gdlr-core-pbf-sidebar-right gdlr-core-column-extend-right  dit-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height" style="padding: 44px 0px 30px 0px;">
      <div style="padding-left:0px; padding-right:0px;" class="gdlr-core-sidebar-item gdlr-core-item-pdlr">
        <div class="gdlr-core-pbf-column gdlr-core-column-20" style="width: 100%; color: #ffffff ;padding: 30px 45px;background-color: #192f59;">
        <!--Transparent Background  -->
        <div class="gdlr-core-pbf-background-wrap">
            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url( ) ;background-size: cover ;background-position: center ;" data-parallax-speed="0"></div>
        </div> <!-- Transparent Background-->

                    <div  class="gdlr-core-widget-box-shortcode-content">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" id="div_1dd7_50">
                                    <div class="gdlr-core-title-item-left-icon" id="div_1dd7_51"><i class="icon_link_alt" id="i_1dd7_1"></i></div>
                                    <div class="gdlr-core-title-item-left-icon-wrap">
                                        <div class="gdlr-core-title-item-title-wrap clearfix">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_15">Quick Links</h3></div>
                                    </div>
                                </div>
                            </div>
                          @foreach($quick_link as $links)
                           <div class="gdlr-core-pbf-element">
                          <div style="padding-right: 0px; padding-bottom: 10px;" class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"  id="gdlr-core-title-item-id-66469">
                              <div class="gdlr-core-title-item-title-wrap clearfix">
                                  <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_16"><a href="{!! $links->urllink !!}" target="_blank">{{$links -> title}}</a></h3></div>
                          </div>
                  </div>

                      <div class="gdlr-core-pbf-element">
                          <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" id="div_1dd7_52">
                              <div class="gdlr-core-divider-line gdlr-core-skin-divider" id="div_1dd7_53"></div>
                          </div>
                      </div>
                      @endforeach


                    </div>

            </div>

          @include('layouts.partials.web.news_pannel')

            <a class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border" href="https://osim.dit.ac.tz/apply" target="_blank" style="font-size: 14px ;font-weight: 700 ;letter-spacing: 0px ;padding: 13px;text-transform: none ;margin: 0px 0px 10px 20px;border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;">
            <span class="gdlr-core-content" >Apply Now</span><i class="gdlr-core-pos-right fa fa-external-link" style="font-size: 14px ;"  ></i></a><a class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border" href="#" style="font-size: 14px ;font-weight: 700 ;letter-spacing: 0px ;padding: 13px;text-transform: none ;border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px; margin-left:20px;">
              <span class="gdlr-core-content" >Download Brochure</span><i class="gdlr-core-pos-right fa fa-file-pdf-o" style="font-size: 14px ;"  ></i></a>




      </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  @endsection
