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
                      @foreach($staffs as $staff)
                      <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-15" style = "width:260px;height:120px; overflow:hidden;margin-bottom:14px;">
                        <div style ="background-color:#EAF5FB; padding:10px;">

                              <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_16" style="  padding-top:10px; margin-bottom:0px;">
                                  {{$staff->name}} <br>
                                    <i style="padding-top:15px; font-size: 14px;  line-height: 24px; font-weight:normal;  letter-spacing: 0px;" >{{$staff->designation}}</i>
                                    <i style="padding-top:15px; font-size: 14px;  line-height: 24px; font-weight:normal;  letter-spacing: 0px;" >{{$staff->designation}}</i>
                                  </h3>
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_16" style="padding-top:4px; font-size: 14px;  line-height: 24px; font-weight:normal;  letter-spacing: 0px; margin-bottom:0px;">



                                  </h3>
                                </div>
                                <a style = " font-size: 12px;font-weight:700; position:relative; float:right;border-radius: 4px; padding:0px 2px 0px 4px;" class="gdlr-core-personnel-list-button gdlr-core-button" href="{{route('web.single_staff',['id'=> $single_staff->id])}}">More Detail</a>



                            </div>
                           @endforeach
                        </div>

                      </div>

                  </div>
                </div>
                </div>
              </div>
            </div>
