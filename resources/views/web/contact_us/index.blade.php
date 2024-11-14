@extends('layouts.web')


@section('content')
<div class="dit-page-title-wrap  dit-style-medium dit-left-align">
  <div class="dit-header-transparent-substitute"></div>
  <div class="dit-page-title-overlay"></div>
  <div  style="height:60px;"class="dit-page-title-container dit-container">

  <div style="height:3vw;" class="dit-page-caption">    </div>

  </div>
  <div style="padding-left:2vw; font-size: 2vw;color:#148EB7" class="dit-page-caption">Contact Us</div>
</div>
<div class="dit-page-wrapper" id="dit-page-wrapper">
              <div class="gdlr-core-page-builder-body">
                  <div class="gdlr-core-pbf-wrapper ">
                      <div class="gdlr-core-pbf-background-wrap" style="background-color: #f5f5f5 ;"></div>
                      <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                          <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                              <div class="gdlr-core-pbf-column gdlr-core-column-40 gdlr-core-column-first">
                                  <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                                      <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                          <div class="gdlr-core-pbf-element">
                                              <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                                  <div class="gdlr-core-title-item-title-wrap clearfix">
                                                      <h3 class=" gdlr-core-skin-title dit-page-caption" style="font-size: 1.8vw;font-weight: 700 ;">Leave us your info</h3></div>
                                              </div>
                                          </div>
                                          <div class="gdlr-core-pbf-element">
                                              <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 35px ;">
                                                  <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;text-transform: none ;">
                                                      <p><strong>For any enquiries, please don't hesitate to contact us below:</strong></p>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="gdlr-core-pbf-element">
                                              <div class="gdlr-core-contact-form-7-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                                  <div role="form" class="wpcf7" id="wpcf7-f1979-p1977-o1" lang="en-US" dir="ltr">
                                                      <div class="screen-reader-response"></div>
                                                      <form class="quform" action="plugins/quform/process.php" method="post" enctype="multipart/form-data" onclick="">

                                                          <div class="quform-elements">
                                                              <div class="quform-element">
                                                                  <p>Your Name (required)
                                                                      <br>
                                                                      <span class="wpcf7-form-control-wrap your-name">
                                                                          <input id="name" type="text" name="name" size="40" class="input1" aria-required="true" aria-invalid="false">
                                                                      </span>
                                                                  </p>
                                                              </div>
                                                              <div class="quform-element">
                                                                  <p>Your Email (required)
                                                                      <br>
                                                                      <span class="wpcf7-form-control-wrap your-email">
                                                                          <input id="email" type="text" name="email" size="40" class="input1" aria-required="true" aria-invalid="false">
                                                                      </span>
                                                                  </p>
                                                              </div>
                                                              <div class="quform-element">
                                                                  <p>Your Message
                                                                      <br>
                                                                      <span class="wpcf7-form-control-wrap your-message">
                                                                          <textarea  id="message" name="message" cols="40" rows="10" class="input1" aria-invalid="false"></textarea>
                                                                      </span>
                                                                  </p>
                                                              </div>

                                                                  <!-- Begin Submit button -->
                                                                  <div class="quform-submit">
                                                                      <div class="quform-submit-inner">
                                                                          <button type="submit" class="submit-button"><span>Send</span></button>
                                                                      </div>
                                                                      <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                                                              </div>
                                                          </div>
                                                      </form>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="gdlr-core-pbf-column gdlr-core-column-20" style="color: #ffffff ;padding: 30px 45px;background-color: #192f59;">
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
                          </div>
                      </div>
                  </div>
              </div>
            </div>

@endsection
