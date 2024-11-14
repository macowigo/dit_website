<div class="gdlr-core-pbf-column  " style="margin-bottom: 20px;color: #ffffff ;padding: 30.7px 45px;background-color: #192f59;">
<!--Transparent Background  -->
<div class="gdlr-core-pbf-background-wrap">
    <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(  ) ;background-size: cover ;background-position: center ;" data-parallax-speed="0"></div>
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
                  @foreach($quick_link as $link)
                   <div class="gdlr-core-pbf-element">
                  <div style="padding-right: 0px; padding-bottom: 10px;" class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"  id="gdlr-core-title-item-id-66469">
                    @if ($link->title =='DIT Prospectus')
                      <div class="gdlr-core-title-item-title-wrap clearfix">
                          <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_16"><a href="{!! $link->urllink !!}" target="_self">{{$link -> title}}</a></h3></div>
                    @else
                    <div class="gdlr-core-title-item-title-wrap clearfix">
                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_16"><a href="{!! $link->urllink !!}" target="_blank">{{$link -> title}}</a></h3></div>
                    @endif
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
