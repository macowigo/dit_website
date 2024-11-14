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
                  <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 24px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #293a5b ;">News & Updates</h3>
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

              <div  class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                  <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                    <i style="font-size:14px" class="fa">&#xf073;</i>
                     {{ $single_new->updated_at->format('d-m-Y') }}
                  </span>
                  <span class="gdlr-core-event-item-info gdlr-core-type-time">
                      <span class="gdlr-core-head" >
                          <i class="icon_clock_alt" ></i>
                      </span>
                      <span class="gdlr-core-tail">{{ $single_new->updated_at->format('g:i a') }}</span>
                  </span>
              </div>
              <div style = "padding:0px; margin:0px;font-size:18px; line-height: 20px;" class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_1dd7_12">

                    <!--  strtotime timezone largs by 3 hours from local timezone  -->


                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-title-item-caption-top ">
                            <div style="padding-top:12px;" class="gdlr-core-title-item-title-wrap clearfix">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="text-align: left; font-size: 22px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">{{$single_new->title}} </h3></div>
                        </div>
                    </div>

                    @if(!empty($single_new->image))
                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image">
                    <img src="{{ asset($single_new->image) }}" width="900" height="500"  alt="" />
                    <a href="{!!$single_new->urllink!!}" target="_blank"><div class="gdlr-core-sticky-banner gdlr-core-title-font"><i class="fa fa-bolt"></i>Click to View</div>
                    </a>
                    </div>
                    @endif

                    <div class="gdlr-core-pbf-element">
                        <div style = "padding-left: 0px;margin-top: 10px;" class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                            <div class="gdlr-core-text-box-item-content" style="font-weight: 400; font-size: 16px ;text-transform: none ;text-align:justify;">
                                <p>
                                  @if($single_new->description == "results")
                                   @elseif($single_new->description == "multiple")
                                   @else {{$single_new->description}}
                                  @endif

                                  @if(!empty($single_new->attachment))
                                   <a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href="{{route('web.home.news_attachment',['id'=>$single_new->id])}}" style="font-style:italic;font-size: 14px ;letter-spacing: 1px ;font-weight:900; color: #148EB7 ;padding:0px;text-transform: none ;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;"><span class="gdlr-core-content" >Read More...
                                  </span><i class="gdlr-core-pos-right fa fa-file-pdf-o" style="font-size: 14px; color: #148EB7;"  >
                                     </i>
                                   </a>
                                   @endif
                                   <br>
                                    <br>
                                     <a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href="{{route('web.home.news')}}" style=" font-size: 14px ;letter-spacing: 1px ;font-weight:900; color: #148EB7 ;padding:0px;text-transform: none ;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;"><span class="gdlr-core-content" >Read All News
                                    </span><i class="gdlr-core-pos-right fa fa-long-arrow-right" style="color: #148eb7;"  >
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
  <div class="gdlr-core-pbf-sidebar-right gdlr-core-column-extend-right  dit-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height" style="padding: 44px 0px 30px 0px;">
      <div style="padding-left:0px; padding-right:0px;" class="gdlr-core-sidebar-item gdlr-core-item-pdlr">

              @include('layouts.partials.web.quick_links')
              @include('layouts.partials.web.events_pannel')
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
