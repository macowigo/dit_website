@extends('layouts.web')


@section('content')

<div class="dit-page-title-wrap  dit-style-medium dit-left-align">
  <div class="dit-header-transparent-substitute"></div>
  <div class="dit-page-title-overlay"></div>
  <div  style="height:60px;"class="dit-page-title-container dit-container">

  <div style="height:3vw;" class="dit-page-caption">    </div>

  </div>
  <div style="font-size:2vw; color:#148EB7;padding-left:2vw;" class="dit-page-caption">{{$campus->name}}</div>
</div>

<div class="dit-page-wrapper" id="dit-page-wrapper">
<div class="gdlr-core-page-builder-body">
<div class="gdlr-core-pbf-sidebar-wrapper " style="margin: 0px 0px 60px 0px;">
<div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
    <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" style="padding: 30px 0px 30px 0px;">
        <div class="gdlr-core-pbf-sidebar-content-inner">


      <div class="gdlr-core-pbf-sidebar-content-inner" data-skin="Personnel">
       <div class="gdlr-core-pbf-element">
           <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-personnel-item-style-medium gdlr-core-personnel-style-medium">
             <div style= "margin-bottom: 0px;" class="gdlr-core-personnel-list-column  gdlr-core-column-60 gdlr-core-column-first gdlr-core-item-pdlr">
                <div class="gdlr-core-personnel-list clearfix">

                      <div style="max-width:200px; max-height:300px;"class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                          <a href="#">
                          @if(!empty($campus->director_imgulr))
                           <img style=" border: 3px solid #0C2756;" src="{{asset($campus->director_imgulr)}}" alt="" width="350" height="350" title="{{$campus->director_name}}" />
                           @else
                              <img style=" border: 3px solid #0C2756;" src="{{ asset('images/default.jpg') }}" alt="" width="350" height="350" title="{{$campus->director_name}}" />
                          @endif
                          </a>
                       </div>

                        <div class="gdlr-core-personnel-list-content-wrap">
                            <div class="gdlr-core-personnel-list-title" style="font-size: 20px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ; color:#192F59;">Campus Director</div>

                           <h3 class="gdlr-core-personnel-list-title" style="font-size: 16px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">{{$campus->director_name}}</h3>

                            <div class="dit-personnel-info-list dit-type-email"><i class="gdlr-core-icon-list-icon fa fa-dot-circle-o" style="color: #6b6b6b ;font-size: 16px ;width: 16px ;" ></i> {{$campus->director_edu}}</div>

                             <div class="dit-personnel-info-list dit-type-email"><i class="dit-personnel-info-list-icon fa fa-envelope-open"></i>  {{$campus->director_email}}</div>
                               <!-- <div class="dit-personnel-info-list dit-type-phone"><i class="dit-personnel-info-list-icon fa fa-phone"></i>  {{$campus->director_phone}}</div> -->
                      </div>
                   </div>
               </div>
            </div>
      </div>
      </div>

        <div class="gdlr-core-pbf-element">
            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                <div class="gdlr-core-text-box-item-content" style="text-align:justify; font-size: 16px;  line-height: 24px; font-weight:normal; letter-spacing: 0px; letter-spacing: 0px ;text-transform: none ;">
                    <p>{{$campus->caption1}} </p>
                </div>
            </div>
        </div>
          <div class="gdlr-core-pbf-element">
              <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 15px ;">
                  <div class="gdlr-core-text-box-item-content" style="text-align:justify;font-size: 16px;  line-height: 24px; font-weight:normal;letter-spacing: 0px;text-transform: none ; font-weight:normal">
                      <p>
                      @if (strpos($campus->caption2, ',,') !== false)
                        @php
                          $caption = "$campus->caption2";
                            $descriptionList = new \Illuminate\Support\Collection(explode(",,", $caption));
                            echo "<ul>";
                              $descriptionList->each(function($caption){echo "<li>" . $caption . "</li>";});echo "</ul>";
                        @endphp
                      @else
                      {{$campus->caption2}}
                      @endif
                    </p>
                  </div>
              </div>
          </div>

          <div class="gdlr-core-pbf-element">
              <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align">
                  <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #148EB7 ;border-bottom-width: 3px ;"></div>
              </div>
          </div>

    @if(!empty($has_programmes))
      <div class="gdlr-core-pbf-element">
          <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 45px;" id="curriculum">
              <div class="gdlr-core-title-item-title-wrap clearfix">
                  <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 24px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #293a5b ;">Programmes</h3>
                </div>
          </div>
      </div>

            <div class="gdlr-core-pbf-element">
                       <div class="gdlr-core-accordion-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-accordion-style-background-title gdlr-core-left-align gdlr-core-icon-pos-right">
                         @if(!empty($veta_programmes))
                              <div class="gdlr-core-accordion-item-tab clearfix ">
                                <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                                <div class="gdlr-core-accordion-item-content-wrapper">
                                    <h4 class="gdlr-core-accordion-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content">NVA VETA Programmes</h4>

                                    @foreach($programmes as $programme)
                                    @if($programme->level==3)
                                    <div style="padding-bottom:0px;padding-top:2px; padding-left:20px; font-size: 16px; font-weight:normal; letter-spacing: 0px;" class="gdlr-core-accordion-item-content">
                                      <span class="gdlr-core-icon-list-icon-wrap" style="margin-top: 1px ; padding-right: 8px;"><i class="gdlr-core-icon-list-icon fa fa-hand-o-right" style="color: #6b6b6b ;font-size: 22px ;width: 22px ;" ></i></span>{{$programme->name}}
                                   </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                         @endif
                         @if(!empty($besictc_programmes))
                              <div class="gdlr-core-accordion-item-tab clearfix ">
                                <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                                <div class="gdlr-core-accordion-item-content-wrapper">
                                    <h4 class="gdlr-core-accordion-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content">Basic Technician Certificate Programmes  </h4>
                                    @foreach($programmes as $programme)
                                    @if($programme->level==4)
                                    <div style="padding-bottom:0px;padding-top:2px; padding-left:20px; font-size: 16px; font-weight:normal; letter-spacing: 0px;" class="gdlr-core-accordion-item-content">
                                      <span class="gdlr-core-icon-list-icon-wrap" style="margin-top: 1px ; padding-right: 8px;"><i class="gdlr-core-icon-list-icon fa fa-hand-o-right" style="color: #6b6b6b ;font-size: 22px ;width: 22px ;" ></i></span>{{$programme->name}}
                                   </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                         @endif
                         @if(!empty($techc_programmes))
                              <div class="gdlr-core-accordion-item-tab clearfix ">
                                <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                                <div class="gdlr-core-accordion-item-content-wrapper">
                                    <h4 class="gdlr-core-accordion-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content"> Technician Certificate Programmes  </h4>

                                    @foreach($programmes as $programme)
                                    @if($programme->level==5)
                                    <div style="padding-bottom:0px;padding-top:2px; padding-left:20px; font-size: 16px; font-weight:normal; letter-spacing: 0px;" class="gdlr-core-accordion-item-content">
                                      <span class="gdlr-core-icon-list-icon-wrap" style="margin-top: 1px ; padding-right: 8px;"><i class="gdlr-core-icon-list-icon fa fa-hand-o-right" style="color: #6b6b6b ;font-size: 22px ;width: 22px ;" ></i></span>{{$programme->name}}
                                   </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                         @endif
                        @if(!empty($od_programmes))
                             <div class="gdlr-core-accordion-item-tab clearfix ">
                               <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                               <div class="gdlr-core-accordion-item-content-wrapper">
                                   <h4 class="gdlr-core-accordion-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content">Ordinary Diploma Programmes  </h4>

                                   @foreach($programmes as $programme)
                                   @if($programme->level==6)
                                   <div style="padding-bottom:0px;padding-top:2px; padding-left:20px; font-size: 16px; font-weight:normal; letter-spacing: 0px;" class="gdlr-core-accordion-item-content">
                                     <span class="gdlr-core-icon-list-icon-wrap" style="margin-top: 1px ; padding-right: 8px;"><i class="gdlr-core-icon-list-icon fa fa-hand-o-right" style="color: #6b6b6b ;font-size: 22px ;width: 22px ;" ></i></span>{{$programme->name}}
                                  </div>
                                   @endif
                                   @endforeach
                               </div>
                           </div>
                        @endif

                        @if(!empty($beng_programmes))
                           <div class="gdlr-core-accordion-item-tab clearfix ">
                               <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                               <div class="gdlr-core-accordion-item-content-wrapper">
                                   <h4 class="gdlr-core-accordion-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content">Undergraduate Programmes</h4>
                                   @foreach($programmes as $programme)
                                   @if($programme->level==8)
                                   <div style="padding-bottom:0px;padding-top:2px; padding-left:20px; font-size: 16px; font-weight:normal;  letter-spacing: 0px;" class="gdlr-core-accordion-item-content"> <span class="gdlr-core-icon-list-icon-wrap" style="margin-top: 1px ; padding-right: 8px;"><i class="gdlr-core-icon-list-icon fa fa-hand-o-right" style="color: #6b6b6b ;font-size: 22px ;width: 22px ;" ></i></span>{{$programme->name}} </div>
                                   @endif
                                   @endforeach
                               </div>
                           </div>
                           @endif

                          @if(!empty($meng_programmes))
                           <div class="gdlr-core-accordion-item-tab clearfix ">
                               <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                               <div class="gdlr-core-accordion-item-content-wrapper">
                                   <h4 class="gdlr-core-accordion-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content">Postgraduate Programmes</h4>
                                   @foreach($programmes as $programme)
                                   @if($programme->level==9)
                                   <div style="padding-bottom:0px;padding-top:2px; padding-left:20px; font-size: 16px; font-weight:normal;  letter-spacing: 0px;" class="gdlr-core-accordion-item-content"><span class="gdlr-core-icon-list-icon-wrap" style="margin-top: 1px ; padding-right: 8px;"><i class="gdlr-core-icon-list-icon fa fa-hand-o-right" style="color: #6b6b6b ;font-size: 22px ;width: 22px ;" ></i></span>{{$programme->name}} </div>
                                   @endif
                                   @endforeach
                               </div>
                           </div>
                        @endif

                          <!--  @if(!empty($short_cs))
                           <div class="gdlr-core-accordion-item-tab clearfix ">
                               <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                               <div class="gdlr-core-accordion-item-content-wrapper">

                                   <h4 class="gdlr-core-accordion-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content">Short Courses</h4>

                              @foreach ($professioncourses as $professioncourse)
                              <div style="padding-bottom:0px;padding-top:2px; padding-left:20px; font-size: 16px; font-weight:normal;  letter-spacing: 0px;" class="gdlr-core-accordion-item-content">
                                <span class="gdlr-core-icon-list-icon-wrap" style="padding-right: 8px; margin-top: 1px ;"><i class="gdlr-core-icon-list-icon fa fa-hand-o-right" style="color: #6b6b6b ;font-size: 22px ;width: 22px ;" ></i></span>{{$professioncourse->name}} </div>
                              @endforeach
                               </div>
                           </div>
                          @endif
                        -->
                       </div>
                     </div>
                @endif
              </div>
          </div>

          <div class="gdlr-core-pbf-sidebar-right gdlr-core-column-extend-right  dit-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height" style="padding: 30px 0px 30px 0px;">
                      <div class="gdlr-core-sidebar-item gdlr-core-item-pdlr">

                          <div id="text-21" class="widget widget_text dit-widget">
                              <div class="textwidget">
                                  <div class="gdlr-core-widget-box-shortcode " style="color: #ffffff ;padding: 30px 45px;background-color: #192f59 ;">
                                      <div class="gdlr-core-widget-box-shortcode-content">
                                          </p>
                                          <h3 style="font-size: 20px; color: #fff; margin-bottom: 25px;">Campus Contact Info</h3>
                                          <p><span style="color: #148EB7; font-size: 16px; font-weight: 600;">{{$campus->name}}</span>
                                              <br /></p>
                                          <p><span style="font-size: 15px;">{{$campus->campus_phone}}<br /> {{$campus->head_email}}<br /> {{$campus->campus_email}}<br /> </span></p>
                                        <!--  <h3 style="font-size: 20px; color: #fff; margin-bottom: 15px;">Social Info</h3>
                                          <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" style="padding-bottom: 0px ;"><a href="#url" target="_blank" class="gdlr-core-social-network-icon" title="facebook" style="color: #148EB7 ;"><i class="fa fa-facebook" ></i></a>
                                            <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="google-plus" style="color: #148EB7 ;"><i class="fa fa-google-plus" ></i></a>
                                            <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="linkedin" style="color: #148EB7 ;"><i class="fa fa-linkedin" ></i></a>
                                            <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="skype" style="color: #148EB7 ;"><i class="fa fa-skype" ></i></a>
                                            <a href="#url" target="_blank" class="gdlr-core-social-network-icon" title="twitter" style="color: #148EB7 ;"><i class="fa fa-twitter" ></i></a>
                                            <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="instagram" style="color: #148EB7 ;"><i class="fa fa-instagram" ></i></a>
                                          </div> -->
                                      </div>
                                  </div>
                              </div>
			  </div>
@if($campus->code=="myunga")
<a class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border" href="https://soma.dit.ac.tz/admission/apply" target="_blank" style="font-size: 14px ;font-weight: 700 ;letter-spacing: 0px ;padding: 13px;text-transform: none ;margin: 0px 0px 10px 20px;border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;">
    <span class="gdlr-core-content" >Apply Now</span>
    <i class="gdlr-core-pos-right fa fa-external-link" style="font-size: 14px ;"  >

    </i>
</a>
<a class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border" href="https://dit.ac.tz/documents/dit_myunga_profile.pdf" style="font-size: 14px ;font-weight: 700 ;letter-spacing: 0px ;padding: 13px;text-transform: none ;border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px; margin-left:20px;">
    <span class="gdlr-core-content" >Campus Profile</span>
    <i class="gdlr-core-pos-right fa fa-file-pdf-o" style="font-size: 14px ;">
    </i>
</a>
@else

                          <a class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border" href="https://soma.dit.ac.tz/admission/apply" target="_blank" style="font-size: 14px ;font-weight: 700 ;letter-spacing: 0px ;padding: 13px;text-transform: none ;margin: 0px 0px 10px 20px;border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;">
                          <span class="gdlr-core-content" >Apply Now</span><i class="gdlr-core-pos-right fa fa-external-link" style="font-size: 14px ;"  ></i></a><a class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border" href="#" style="font-size: 14px ;font-weight: 700 ;letter-spacing: 0px ;padding: 13px;text-transform: none ;border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px; margin-left:20px;">
                            <span class="gdlr-core-content" >Download Brochure</span><i class="gdlr-core-pos-right fa fa-file-pdf-o" style="font-size: 14px ;"  ></i></a>
@endif		      
 </div>
                  </div>
              </div>
          </div>
          </div>
          </div>
          @endsection
