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
        </div>
    </div>
</div>

<div class="gdlr-core-pbf-element">
    <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align">
        <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #148EB7 ;border-bottom-width: 3px ;"></div>
    </div>
</div>

      <div class="gdlr-core-pbf-element">
          <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 15px;" id="curriculum">
              <div class="gdlr-core-title-item-title-wrap clearfix">
                  <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 24px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #293a5b ;">Event</h3>
                </div>
          </div>
      </div>
      <div class=" ">

          <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_93">
              <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">

<div class="gdlr-core-pbf-element">
<div class="gdlr-core-event-item gdlr-core-item-pdb" id="div_1dd7_94">

<div class="gdlr-core-event-item-holder clearfix">


<div style="width: 100%;" class="gdlr-core-event-item-list gdlr-core-style-widget gdlr-core-item-pdlr  clearfix" id="div_1dd7_97">
 <div class="gdlr-core-blog-widget-content">

        <div style = "padding:0px; margin:0px;font-size:18px; line-height: 20px;" class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_1dd7_12">

              <!--  strtotime timezone largs by 3 hours from local timezone  -->

    <div class="gdlr-core-event-item-holder clearfix">

      <div style="padding:0px; margin:0px;" class="gdlr-core-event-item-list gdlr-core-style-widget gdlr-core-item-pdlr  clearfix" id="div_1dd7_97">

          <span class="gdlr-core-event-item-info gdlr-core-type-start-date-month">
                <span class="gdlr-core-date" >{{$single_event->starttime->format('d')}}</span>
                <span class="gdlr-core-month">{{$single_event->starttime->format('M')}}</span>
            </span>
            <div class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_1dd7_12 gdlr-core-event-item-content-wrap">

                <div class="gdlr-core-event-item-info-wrap">
                    <span class="gdlr-core-event-item-info gdlr-core-type-time">
                      <span class="gdlr-core-head" >
                          <i class="icon_clock_alt" ></i>
                      </span>
                      <span class="gdlr-core-tail"> {{date('g:i a', strtotime($single_event->starttime))}} - {{date('F j,g:i a', strtotime($single_event->endtime))}}</span>
                    </span>
                    <span class="gdlr-core-event-item-info gdlr-core-type-location">
                        <span class="gdlr-core-head" >
                            <i class="icon_pin_alt" ></i>
                        </span>
                        <span class="gdlr-core-tail">{{$single_event->venue}}</span>
                    </span>

                </div>

                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-title-item-caption-top ">
                        <div style="padding-top:12px;" class="gdlr-core-title-item-title-wrap clearfix">
                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="text-align: left; font-size: 22px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">{{$single_event->title}} </h3>

                          </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-element">
                    <div style = "margin-top: 8px;padding:0px; align:justify" class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                        <div class="gdlr-core-text-box-item-content" style="font-weight:400;font-size: 16px ;text-transform: none; text-align:justify;">
                            <p style="text-align:justify;">{{$single_event->description}}.
                             </p>

                        </div>
                    </div>
                </div>


                <div class="gdlr-core-portfolio-grid  gdlr-core-left-align gdlr-core-style-normal">
                    <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image  gdlr-core-style-title-icon">
                        <div style="  position: relative;" class="container gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover">
                          <img src="{{ asset($single_event->image) }}" width="700" height="450"  alt="" />
                          @if(!empty($single_event->urllink))
                          <div  style=" position: absolute;
                            bottom: 0px;
                            right: 0px;
                            background-color: rgb(0,0,0,0.6);
                            color: white;
                            width:100%;
                            height: 100%;
                            text-align:center;">
                          <i  style="position: relative;top:46%;" class="gdlr-core-portfolio-icon social_youtube" >
                          </i>
                          </div>
                          @endif
                          <span class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js">
                         <span class="gdlr-core-image-overlay-content" >
                          @if(!empty($single_event->image))
                       <span class="gdlr-core-portfolio-title gdlr-core-title-font " style="font-size: 16px ;letter-spacing: 1px ;text-transform: none ;"  >
                          {{$single_event->title}}
                        </span>
                        @if(!empty($single_event->urllink))
                        <span class="gdlr-core-portfolio-icon-wrap">
                            <a  style="color:#314E85"  class="gdlr-core-lightgallery gdlr-core-js " href="{{ asset($single_event->urllink)}}"  data-lightbox-group="gdlr-core-img-group-1"><i class="gdlr-core-portfolio-icon social_youtube" ></i>
                            </a>
                      </span>
                        @else
                          <span class="gdlr-core-portfolio-icon-wrap">
                            <a class="gdlr-core-lightgallery gdlr-core-js "  href="{{ asset($single_event->image) }}" data-lightbox-group="gdlr-core-img-group-1">
                              <i class="gdlr-core-portfolio-icon arrow_expand" ></i>
                          </a>
                        </span>
                        @endif
                        @endif

                        @if(!empty($single_event->image2))
                        <span class="gdlr-core-portfolio-icon-wrap">
                          <a class="gdlr-core-lightgallery gdlr-core-js "  href="{{ asset($single_event->image2) }}" data-lightbox-group="gdlr-core-img-group-1">

                        </a>
                      </span>
                          @endif
                          @if(!empty($single_event->image3))
                          <span class="gdlr-core-portfolio-icon-wrap">
                            <a class="gdlr-core-lightgallery gdlr-core-js "  href="{{ asset($single_event->image3) }}" data-lightbox-group="gdlr-core-img-group-1">
                          </a>
                        </span>
                            @endif

                            @if(!empty($single_event->image4))
                            <span class="gdlr-core-portfolio-icon-wrap">
                              <a class="gdlr-core-lightgallery gdlr-core-js "  href="{{ asset($single_event->image4) }}" data-lightbox-group="gdlr-core-img-group-1">
                            </a>
                          </span>
                              @endif

                        </span>
                            </span>
                        </div>
                    </div>

                </div>
                <div class="gdlr-core-pbf-element">
                    <div style = "margin-top: 8px;padding-left: 0px;" class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                        <div class="gdlr-core-text-box-item-content" style="font-weight:400;font-size: 16px ;text-transform: none text-align:left;">
                            <p>
                              @if(!empty($single_event->attachment))
                               <a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href="{{route('web.home.event_attachment',['id'=>$single_event->id])}}" style="font-style:italic;font-size: 14px ;letter-spacing: 1px ;font-weight:900; color: #148EB7 ;padding:0px;text-transform: none ;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;"><span class="gdlr-core-content" >Download Attachment
                              </span><i class="gdlr-core-pos-right fa fa-file-pdf-o" style="font-size: 14px; color: #148EB7;"  >
                                 </i>
                               </a>
                              @endif
                                <br>
                                 <a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href="{{route('web.home.events')}}" style=" font-size: 14px ;letter-spacing: 1px ;font-weight:900; color: #148EB7 ;padding:10px;text-transform: none ;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;"><span class="gdlr-core-content" >View all Events
                                </span></span><i class="gdlr-core-pos-right fa fa-long-arrow-right" style="color: #148eb7;"  >
                                </i>
                                   </a>

                             </p>

                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
       </div>

    </div>
</div>

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


              @include('layouts.partials.web.quick_links')
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
