<div class="dit-page-title-wrap  dit-style-medium dit-left-align">
  <div class="dit-header-transparent-substitute"></div>
  <div class="dit-page-title-overlay"></div>
  <div  class="dit-page-title-container dit-container">
  <div style="padding-bottom:20px;" class="dit-page-title-content dit-item-pdlr">
  <div class="dit-page-caption">{{$dept->department_name}} </div>
    <h1 style="color:#148EB7" class="dit-page-title">Our Staffs</h1></div>
  </div>
</div>
<div class="dit-page-wrapper" id="dit-page-wrapper">
<div class="gdlr-core-page-builder-body">
  <div class="gdlr-core-pbf-section">
    <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
      <div class="gdlr-core-pbf-element">

                <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-image" style="padding-bottom: 40px ;">

                    <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                      @foreach($allstaff as $staff)
                      <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-15" style = "max-width:250px; max-height:283px; overflow:hidden;">


                      <div class="gdlr-core-blog-modern  gdlr-core-with-image gdlr-core-hover-overlay-content gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">

                      <div class="gdlr-core-blog-modern-inner">


                          @if(empty($staff->staff_imglnk) ||is_null($staff->staff_imglnk) )
                            <div style = " background-color:#ffffff" class="gdlr-core-blog-thumbnail gdlr-core-media-image">
                              <img  style = "height:210px;" src="/upload/staff_img.jpg" width="350" height="250"  alt="" />
                            </div>
                            @else
                                <div  class="gdlr-core-blog-thumbnail gdlr-core-media-image"><img  style = "height:210px;" src="{!!$staff->staff_imglnk!!}" width="350" height="250"  alt="" />
                                  <div class="gdlr-core-button"  style = "padding:10px; color:white; font-style:bold; font-weight: 700px;  position:absolute; bottom:1px; right:-5px; text-align:left;">
                                    Bio </div>
                                  </div>
                            @endif

                                <div style = "background-color:#F5F3E9; text-align: left; padding-right:4px; padding-left:10px; padding-top: 10px;height: 100%; overflow: auto;" class="gdlr-core-blog-modern-content  gdlr-core-center-align">
                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 14px;  line-height: 24px; font-weight:normal; letter-spacing: 0px;">{{$staff->staff_bio}}</h3>
                                  </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div style = "padding-left:5px; padding-right:5px; background-color:#E6E9E9" class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"  id="gdlr-core-title-item-id-66469">
                                        <div  class="gdlr-core-title-item-title-wrap clearfix">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_16" style=" padding-top:10px;">
                                                  {{$staff->staff_name}}
                                                    <i style="padding-top:15px; font-size: 14px;  line-height: 24px; font-weight:normal; letter-spacing: 0px;" >{{$staff->staff_designation}}</i>
                                                  </h3>
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_16" style="padding-top:15px; font-size: 14px;  line-height: 24px; font-weight:normal; letter-spacing: 0px;">

                                                    @if(!empty($staff->staff_phone))
                                                    <i class="fa fa-phone" id="i_fd84_0">
                                                    </i> {{$staff->staff_phone}}
                                                    @endif

                                                    @if(!empty($staff->staff_email))
                                                    <br>
                                                    <i  class="fa fa-envelope-open-o" id="i_fd84_0"></i> {{$staff->staff_email}}
                                                    @endif

                                                  </h3>
                                                </div>
                                    </div>
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
