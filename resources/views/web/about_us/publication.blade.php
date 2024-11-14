@extends('layouts.web')

@section('content')

<div class="dit-page-title-wrap  dit-style-medium dit-left-align">
  <div class="dit-header-transparent-substitute"></div>
  <div class="dit-page-title-overlay"></div>
  <div  style="height:60px;"class="dit-page-title-container dit-container">
    <div style="height:3vw;" class="dit-page-caption">    </div>
  </div>
  <div style="padding-left:2vw;font-size: 2vw;color:#148EB7" class="dit-page-caption">DIT Publications</div>
</div>


<div class="dit-page-wrapper" id="dit-page-wrapper">
<div class="gdlr-core-page-builder-body">
<div class="gdlr-core-pbf-sidebar-wrapper " style="margin: 0px 0px 60px 0px;">
<div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
    <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" style="padding: 30px 0px 0px 0px;">
        <div class="gdlr-core-pbf-sidebar-content-inner">
          <br>
          <div style="padding-bottom:0px" class="gdlr-core-pbf-element">
              <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                  <div class="gdlr-core-text-box-item-content" style="text-align:justify;font-size: 18px;  line-height: 24px; font-weight:normal;letter-spacing: 0px;text-transform: none ;color: #148EB7; font-weight:normal">
                  </div>
              </div>
          </div>


        <div class="gdlr-core-pbf-element">
                 <div class="gdlr-core-accordion-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-accordion-style-background-title gdlr-core-left-align gdlr-core-icon-pos-right">


                      <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                      <div class="gdlr-core-accordion-item-content-wrapper">
                          <h4 class="gdlr-core-accordion-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content"><a href="https://dit.ac.tz/documents/dit_act_no6_of1997.pdf"><span style="color:#148EB7;">Act</span></a></h4>
                      </div>

                         <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                         <div class="gdlr-core-accordion-item-content-wrapper">
                             <h4 class="gdlr-core-accordion-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content"><a href="https://dit.ac.tz/documents/service_chartered.pdf"><span style="color:#148EB7;">Service Charter</span></a></h4>
                         </div>

                       <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                       <div class="gdlr-core-accordion-item-content-wrapper">
                           <h4 class="gdlr-core-accordion-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content"> <a href="https://dit.ac.tz/documents/dit_fee_structure.pdf"><span style="color:#148EB7;">Fee Structure</span></a></h4>
                       </div>

                      <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                      <div class="gdlr-core-accordion-item-content-wrapper">
                          <h4 class="gdlr-core-accordion-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content">  <a href="https://dit.ac.tz/documents/dit_gender_policy.pdf"><span style="color:#148EB7;">Gender Policy</span></a></h4>
                      </div>

                     <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                     <div class="gdlr-core-accordion-item-content-wrapper">
                         <h4 class="gdlr-core-accordion-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content">  <a href="https://dit.ac.tz/documents/dit_rule_regulations.pdf"><span style="color:#148EB7;">Regulations</span></a>
                         </h4>
                     </div>


                 </div>
             </div>
        </div>
    </div>
  <div class="gdlr-core-pbf-sidebar-right gdlr-core-column-extend-right  dit-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height" style="padding:54px 0px 30px 0px;">
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
