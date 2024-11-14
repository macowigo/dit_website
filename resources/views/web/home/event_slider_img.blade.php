
<!--


Not yet in use 

-->

@if(!empty($single_event->image))
                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image">

                                      <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #192f59 ;"></div>
                                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                                                <div class="gdlr-core-pbf-element" >
                                                    <div class="gdlr-core-revolution-slider-item gdlr-core-item-pdlr gdlr-core-item-pdb " style="padding-bottom: 0px ;">
                                                    <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0;background:transparent;padding:0px; max-height:550px">
                                                        <div style="max-height:550px" id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8">
                                            <ul >
                                              @foreach($event_imgs as $event_img)
                                                <li data-index="rs-'{{$event_img->id}}'" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="{{asset($event_img->image)}}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4=""
                                                data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> <img src="{!!asset($event_img->image)!!}" alt="" title="dit-slider-3" width="1800" height="958" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
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
                      <a href="{!!$single_event->urllink!!}" target="_blank"><div class="gdlr-core-sticky-banner gdlr-core-title-font"><i class="fa fa-bolt"></i>Click to View</div></a>
                </div>
              @endif
