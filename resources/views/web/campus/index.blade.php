
@extends('layouts.web')


@section('content')
<div class="dit-page-title-wrap  dit-style-medium dit-left-align">
  <div class="dit-header-transparent-substitute"></div>
  <div class="dit-page-title-overlay"></div>
  <div  style="height:60px;"class="dit-page-title-container dit-container">

  <div style="height:3vw;" class="dit-page-caption">    </div>

  </div>
  <div style="padding-left:2vw; font-size: 2vw;color:#148EB7" class="dit-page-caption">DIT Campuses</div>
</div>

<div class="dit-page-wrapper" id="dit-page-wrapper">
<div class="gdlr-core-page-builder-body">
<div class="gdlr-core-pbf-sidebar-wrapper " style="margin: 0px 0px 60px 0px;">
<div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
<div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" style="padding: 30px 0px 30px 0px;">
<div class="gdlr-core-pbf-sidebar-content-inner">

<div  class="gdlr-core-pbf-element">
    <div style =" padding-bottom:25px;" class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 15px ;">
        <div class="gdlr-core-text-box-item-content" style="font-size: 20px;">
            <p style ="margin-bottom:0px;">  </p>
        </div>
    </div>
</div>

<div class="gdlr-core-pbf-element">
    <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align">
        <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #148EB7 ;border-bottom-width: 3px ;"></div>
    </div>
</div>


<div class="gdlr-core-pbf-element">
   <div class="gdlr-core-accordion-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-accordion-style-background-title gdlr-core-left-align ">
       @foreach($campus as $campuse)
               <h4 class="gdlr-core-accordion-item-title gdlr-core-js "><a class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_16" style=" padding-top:10px;" href="{{route('web.campuses.cmp',['id'=>$campuse->id,'name'=>$campuse->name])}}">{{$campuse->name}}</a></h4>
 
      @endforeach
   </div>
</div>

  </div>
  </div>
  <div class="gdlr-core-pbf-sidebar-right gdlr-core-column-extend-right  dit-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height" style="padding: 54px 0px 30px 0px;">
      <div style="padding-left:0px; padding-right:0px;" class="gdlr-core-sidebar-item gdlr-core-item-pdlr">
        @include('layouts.partials.web.quick_links')

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
