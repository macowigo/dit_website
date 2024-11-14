<div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
    <div class="gdlr-core-pbf-background-wrap" style="background-color: #192f59 ;"></div>
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
            <div class="gdlr-core-pbf-element" >
                <div class="gdlr-core-revolution-slider-item gdlr-core-item-pdlr gdlr-core-item-pdb " style="padding-bottom: 0px ;">
                    <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0;background:transparent;padding:0px; max-height:550px">
                        <div style="max-height:550px" id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8">
                            <ul >
                              @foreach($sliders as $slider)
                                <li data-index="rs-'{{$slider->id}}'" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="{{$slider->url}}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4=""
                                data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> <img src="{{$slider->url}}" alt="" title="dit-slider-3" width="1800" height="958" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                                  <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-3-layer-1" data-x="0" data-y="center" data-voffset="141" data-width="['460']" data-height="['80']" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":980,"speed":300,"frame":"0","from":"opacity:0;","to":"o:0.6;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 4;background-color:rgb(0, 101, 201);border-radius:3px 3px 3px 3px;">
                                  </div>

                                  <div class="tp-caption   tp-resizeme" id="slide-6-layer-9" data-x="10" data-y="center" data-voffset="138" data-width="['490']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1600,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                  style="text-align: center; z-index: 5; white-space: normal;font-size: 28px;  line-height: 30px; font-weight: 4500; color: #ffffff; letter-spacing: 0px;font-family:'Playfair Display';">{{$slider->title}}
                                  </div>
                                  @if(!empty($slider->caption))

                                    <div   class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-3-layer-1" data-x="0" data-y="center" data-voffset="94" data-width="['600']" data-height="['auto']" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":980,"speed":300,"frame":"0","from":"opacity:0;","to":"o:0.6;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 4;background-color:rgb(0, 101, 201);border-radius:3px 3px 3px 3px;">
                                    </div>

                                  @endif
                                  <div class="tp-caption   tp-resizeme" id="slide-6-layer-9" data-x="4" data-y="top" data-voffset="366" data-width="['590']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1600,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                  style="z-index: 5; white-space: normal;font-size: 28px;  line-height: 20px; font-weight: 'lighter'; color: #ffffff; letter-spacing: 0px;">{{$slider->caption}}
                                  </div>
                                </li>
                            @endforeach

                            </ul>
                            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
