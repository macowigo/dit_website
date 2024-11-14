
@extends('layouts.web')


@section('content')
<div class="dit-page-title-wrap  dit-style-medium dit-left-align">
  <div class="dit-header-transparent-substitute"></div>
  <div class="dit-page-title-overlay"></div>
  <div  style="height:60px;"class="dit-page-title-container dit-container">

  <div style="height:3vw;" class="dit-page-caption">    </div>

  </div>
  <div style="padding-left:2vw; font-size: 2vw;color:#148EB7" class="dit-page-caption">DIT Alumni</div>
</div>

<div class="dit-page-wrapper" id="dit-page-wrapper">
<div class="gdlr-core-page-builder-body">
<div class="gdlr-core-pbf-sidebar-wrapper " style="margin: 0px 0px 60px 0px;">
<div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
<div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" style="padding: 30px 0px 30px 0px;">
<div class="gdlr-core-pbf-sidebar-content-inner">
  <div class="gdlr-core-block-item-title-wrap  gdlr-core-left-align gdlr-core-item-mglr" style="margin-bottom: 24px ;">
    <div class="gdlr-core-block-item-title-inner clearfix">
        <h3 class="gdlr-core-block-item-title" style="font-size: 24px ;font-style: normal ;text-transform: none ;letter-spacing: 0px ;color: #163269 ;">            </h3>
    </div></div>
<div class="gdlr-core-pbf-element">
    <div    class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align">
        <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #148EB7 ;border-bottom-width: 3px ;"></div>
    </div>
</div>

<div class="gdlr-core-pbf-sidebar-content-inner" data-skin="Personnel">
       <div class="gdlr-core-pbf-element">
           <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-personnel-item-style-medium gdlr-core-personnel-style-medium">
             <div style= "margin-bottom: 0px;" class="gdlr-core-personnel-list-column  gdlr-core-column-60 gdlr-core-column-first gdlr-core-item-pdlr">
                <div class="gdlr-core-personnel-list clearfix">

                  <!--<div style="max-width:180px; max-height:230px;"class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                          <a href="{{asset('images/dit_dept_hod_image_2021_05_02_12_58_03.jpg')}}">
                           <img style=" border: 3px solid #0C2756;" src="{{asset('images/dit_dept_hod_image_2021_05_02_12_58_03.jpg')}} " alt="" width="350" height="350" title=" " /></a>
                    </div>-->
                    <div class="gdlr-core-personnel-list-content-wrap">
                      <div class="gdlr-core-text-box-item-content" style="text-align:justify; font-size: 16px;  line-height: 24px; font-weight:normal; letter-spacing: 0px; letter-spacing: 0px ;text-transform: none ;">
                       <p> DIT Alumni is a community of DIT Graduates. The Community allows DIT Graduates to Share their experience and Encourage new Students Undergoing Studies at DIT or those who wish to start their Journey with DIT.<!-- <a style = " font-size: 14px;font-weight:700;position:relative;border-radius: 4px; padding:2px 8px 2px 8px;" class="gdlr-core-personnel-list-button gdlr-core-button" href=" ">More Detail</a>--> </p>
                   </div>
                  </div>
                   </div>
               </div>

            </div>
      </div>

    </div>
      <a class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border" href="{{route('web.alumni.register')}}" style="font-size: 16px ;font-weight: 600 ;letter-spacing: 0.1px ;padding: 13px;text-transform: none ;margin: 0px 0px 10px 20px;border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;">
      <span class="gdlr-core-content" >Subscribe to DIT Alumni </span><i class="gdlr-core-pos-right fa fa-external-link" style="font-size: 14px ;"  ></i></a>

</div>
  </div>
  <div class="gdlr-core-pbf-sidebar-right gdlr-core-column-extend-right  dit-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height" style="padding: 54px 0px 30px 0px;">
      <div style="padding-left:0px; padding-right:0px;" class="gdlr-core-sidebar-item gdlr-core-item-pdlr">
        @include('layouts.partials.web.quick_links')



      </div>
  </div>
  </div>
  </div>
  </div>
  </div>

@endsection
