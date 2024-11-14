<div style="padding-top:0px;" class="gdlr-core-pbf-wrapper " id="div_983a_3">
    <div class="gdlr-core-pbf-background-wrap"></div>
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">

            <div class="gdlr-core-pbf-column gdlr-core-column-40  gdlr-core-column-first">
                <div class="gdlr-core-pbf-wrapper " style="padding: 1px 1px 1px 1px;">
                    <div class="gdlr-core-pbf-background-wrap" style="background-color: #192f59 ;"></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-revolution-slider-item gdlr-core-item-pdlr gdlr-core-item-pdb "
                                    style="padding-bottom:0px;border:6px;border-color:#ffffff;border-style:solid">
                                    <div id="rev_slider_1_1_wrapper"
                                        class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery"
                                        style="margin:0;background:transparent;padding:0px;">
                                        <div class=" gdlr-core-column-first">
                                            <div id="rev_slider_1_1" class="rev_slider fullwidthabanner"
                                                style="display:none;" data-version="5.4.8">
                                                <ul>
                                                    @foreach ($sliders as $slider)
                                                        <li data-index="rs-'{{ $slider->id }}'" data-transition="fade"
                                                            data-slotamount="default" data-hideafterloop="0"
                                                            data-hideslideonmobile="off" data-easein="default"
                                                            data-easeout="default" data-masterspeed="1800"
                                                            data-thumb="{{ $slider->url }}" data-rotate="0"
                                                            data-saveperformance="off" data-title="Slide" data-param1=""
                                                            data-param2="" data-param3="" data-param4="" data-param5=""
                                                            data-param6="" data-param7="" data-param8="" data-param9=""
                                                            data-param10="" data-description=""> <img
                                                                src="{{ $slider->url }}" alt=""
                                                                title="dit-slider-'{{ $slider->id }}'" width="1800"
                                                                height="958" data-bgposition="center center"
                                                                data-bgfit="cover" data-bgrepeat="no-repeat"
                                                                class="rev-slidebg" data-no-retina>

                                                            <!--  <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-3-layer-1" data-x="0" data-y="center" data-voffset="103" data-width="['460']" data-height="['80']" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":980,"speed":300,"frame":"0","from":"opacity:0;","to":"o:0.6;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 4;background-color:rgb(0, 101, 201);border-radius:3px 3px 3px 3px;">
                                          </div>

                                          <div class="tp-caption   tp-resizeme" id="slide-6-layer-9" data-x="10" data-y="center" data-voffset="100" data-width="['490']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1600,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                          style="text-align: center; z-index: 5; white-space: normal;font-size: 28px;  line-height: 30px; font-weight: 4500; color: #ffffff; letter-spacing: 0px;font-family:'Playfair Display';">{{ $slider->title }}
                                        </div>-->
                                                            @if (!empty($slider->caption))
                                                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                                                                    id="slide-3-layer-1" data-x="0" data-y="bottom"
                                                                    data-voffset="5" data-width="['670']"
                                                                    data-height="['auto']" data-type="shape"
                                                                    data-responsive_offset="on"
                                                                    data-frames='[{"delay":980,"speed":300,"frame":"0","from":"opacity:0;","to":"o:0.6;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                    data-paddingtop="[0,0,0,0]"
                                                                    data-paddingright="[0,0,0,0]"
                                                                    data-paddingbottom="[0,0,0,0]"
                                                                    data-paddingleft="[0,0,0,0]"
                                                                    style="z-index: 4;background-color:rgb(0, 101, 201);border-radius:3px 3px 3px 3px;">
                                                                    <div
                                                                        style="color: rgb(0, 101, 201) ;white-space: normal;font-size: 40px;  line-height: 35px; font-weight: 'lighter';letter-spacing: 0px; padding-left:35px;padding-right:35px;; padding-bottom:10px;">
                                                                        {{ $slider->title }}</div>
                                                                    <div
                                                                        style="color: rgb(0, 101, 201) ;white-space: normal;font-size: 24px;  line-height: 35px; font-weight: 'lighter';letter-spacing: 0px; padding-left:35px;padding-right:35px;; padding-bottom:10px;">
                                                                        {{ $slider->caption }}/</div>
                                                                </div>
                                                                <div class="tp-caption   tp-resizeme"
                                                                    id="slide-6-layer-9" data-x="40"
                                                                    data-y="bottom" data-voffset="16"
                                                                    data-width="['600']" data-height="['auto']"
                                                                    data-type="text" data-responsive_offset="on"
                                                                    data-frames='[{"delay":1600,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                    data-paddingtop="[0,0,0,0]"
                                                                    data-paddingright="[0,0,0,0]"
                                                                    data-paddingbottom="[0,0,0,0]"
                                                                    data-paddingleft="[0,0,0,0]"
                                                                    style="z-index: 4; white-space: normal;font-size: 24px; line-height: 30px; font-weight: 'lighter'; color: #ffffff; letter-spacing: 0px; padding-left:20px;padding-right:35;padding-top:0px;">

                                                                    <h3
                                                                        style="color:#ffffff;font-weight: 700;padding-top:0px;">
                                                                        {{ $slider->title }}
                                                                    </h3>{{ $slider->caption }}
                                                                </div>
                                                            @endif

                                                        </li>
                                                    @endforeach
                                                </ul>
                                                <div class="tp-bannertimer tp-bottom"
                                                    style="visibility: hidden !important;"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<br>
<br>
            <div class="gdlr-core-pbf-column gdlr-core-column-20">
                <div style="padding-top:25px;"class="gdlr-core-widget-box-shortcode-content">
                    <div class="gdlr-core-block-item-title-wrap  gdlr-core-left-align gdlr-core-item-mglr"
                        id="div_1dd7_46">
                        <div class="gdlr-core-block-item-title-inner clearfix">
                            <br>
                            <h3 class="gdlr-core-block-item-title" id="h3_1dd7_10">Be a Part of DIT</h3>
                            <div class="gdlr-core-block-item-title-divider" id="div_1dd7_47"></div>
                        </div>
                    </div>

                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-blockquote-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-small-size"
                                style="padding-bottom: 0px ;">
                                <div class="gdlr-core-blockquote gdlr-core-info-font">
                                    <div class="gdlr-core-blockquote-item-quote gdlr-core-quote-font gdlr-core-skin-icon"
                                        style="font-size: 100px ;">“</div>
                                    <div class="gdlr-core-blockquote-item-content-wrap">
                                        <div class="gdlr-core-blockquote-item-content gdlr-core-skin-content"
                                            style="text-align:center;font-size: 20px ;font-weight: 600 ;letter-spacing: 0px ;">
                                            <p
                                                style="font-family:'Monotype Corsiva','Apple Chancery','ITC Zapf Chancery','URW Chancery L',cursive; font-style:italic;">
                                                An Agent of Industrialization, a Progressive and Customer–Centered
                                                Higher Learning Institution.
                                              </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-blockquote-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-right-align gdlr-core-small-size"
                                style="padding-bottom: 0px ;">
                                <div class="gdlr-core-blockquote gdlr-core-info-font">
                                    <div class="gdlr-core-blockquote-item-quote gdlr-core-quote-font gdlr-core-skin-icon"
                                        style="font-size: 100px ;">”</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
</div>
