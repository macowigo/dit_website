@extends('layouts.web')

@section('content')

@include('layouts.partials.web.sliders')

 <div class="gdlr-core-pbf-wrapper " id="div_1dd7_44">
    <div class="gdlr-core-pbf-background-wrap"></div>
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
    <div style = "padding-bottom:10px;" class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
    <div class="gdlr-core-pbf-wrapper " id="div_1dd7_91">
    <div class="gdlr-core-pbf-background-wrap"></div>
   <div  class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
    <div class="gdlr-core-pbf-column gdlr-core-column-20" style="color: #ffffff ;padding: 30px 45px;background-color: #192f59;">
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
                      @foreach($quick_links as $links)
                       <div class="gdlr-core-pbf-element">
                      <div style="padding-right: 0px; padding-bottom: 10px;" class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"  id="gdlr-core-title-item-id-66469">
                        @if ($links->title =='DIT Prospectus')
                          <div class="gdlr-core-title-item-title-wrap clearfix">
                              <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_16"><a href="{!! $links->urllink !!}" target="_self">{{$links -> title}}</a></h3></div>
                        @else
                        <div class="gdlr-core-title-item-title-wrap clearfix">
                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_16"><a href="{!! $links->urllink !!}" target="_blank">{{$links -> title}}</a></h3></div>
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

            <div class="gdlr-core-pbf-column gdlr-core-column-20">
                <div class="gdlr-core-block-item-title-wrap  gdlr-core-left-align gdlr-core-item-mglr" id="div_1dd7_46">
                        <div class="gdlr-core-block-item-title-inner clearfix">
                            <h3 class="gdlr-core-block-item-title" id="h3_1dd7_10">News & Updates</h3>
                            <div class="gdlr-core-block-item-title-divider" id="div_1dd7_47"></div>
                        </div>

                    </div>
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_93">
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">

                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-event-item gdlr-core-item-pdb" id="div_1dd7_94">

                                <div class="gdlr-core-event-item-holder clearfix">


                                    <div class="gdlr-core-event-item-list gdlr-core-style-widget gdlr-core-item-pdlr  clearfix" id="div_1dd7_97">
                                         <div class="gdlr-core-blog-widget-content">
                                           @foreach($news as $new)
                                           <div  class="gdlr-core-event-item-info-wrap">
                                               <span class="gdlr-core-event-item-info gdlr-core-type-time">
                                                 <i style="font-size:14px" class="fa">&#xf073;</i>
                                                  {{ $new->created_at->format('d-m-Y') }}
                                               </span>
                                               <span class="gdlr-core-event-item-info gdlr-core-type-time">
                                                   <span class="gdlr-core-head" >
                                                       <i class="icon_clock_alt" ></i>
                                                   </span>
                                                   <span class="gdlr-core-tail">{{ $new->created_at->format('g:i a') }}</span>
                                               </span>
                                           </div>
                                           @if($new->description == "results")
                                           <h3 style = "font-size:14px; line-height: 20px;" class="gdlr-core-event-item-title">
                                            <a href="{{route('web.home.results')}}" target="_self" >

                                              <!--  strtotime timezone largs by 3 hours from local timezone  -->
                                              @if(strtotime($new->updated_at) >= strtotime('-72 hours') )
                                                <span class="newupdateblink">
                                                    <img style="margin-left:-10px;" src="/upload/new_blinks.gif" width="40px">
                                                </span>
                                              @endif
                                          {{$new->title}}
                                        </a>
                                      </h3>
                                      @elseif($new->description == "multiple")
                                      <h3 style = "font-size:14px; line-height: 20px;" class="gdlr-core-event-item-title">
                                       <a href="{{route('web.home.mnews')}}" target="_self" >

                                         <!--  strtotime timezone largs by 3 hours from local timezone  -->
                                         @if(strtotime($new->updated_at) >= strtotime('-72 hours') )
                                           <span class="newupdateblink">
                                               <img style="margin-left:-10px;" src="/upload/new_blinks.gif" width="40px">
                                           </span>
                                         @endif
                                     {{$new->title}}
                                   </a>
                                 </h3>
				 
				 @elseif(!empty($new->urllink))
					<h3 style = "font-size:14px; line-height: 20px;" class="gdlr-core-event-item-title">
					    <a href="{!! $new->urllink !!}" target="_blank" > 

						<!--  strtotime timezone largs by 3 hours from local timezone  -->
						@if(strtotime($new->updated_at) >= strtotime('-72 hours') )
						<span class="newupdateblink">
						 <img style="margin-left:-10px;" src="/upload/new_blinks.gif" width="40px">
					     </span>
						@endif
						{{$new->title}}
					    </a>
					</h3>
                              	   @else
                                      <h3 style = "font-size:14px; line-height: 20px;" class="gdlr-core-event-item-title">
                                         <a href="{{route('web.home.single_new',['id'=>$new->id])}}" target="_self" >

                                           <!--  strtotime timezone largs by 3 hours from local timezone  -->
                                           @if(strtotime($new->updated_at) >= strtotime('-72 hours') )
                                             <span class="newupdateblink">
                                                 <img style="margin-left:-10px;" src="/upload/new_blinks.gif" width="40px">
                                             </span>
                                           @endif
                                       {{$new->title}}
                                     </a>
                                   </h3>
                                   @endif
                                    @endforeach
                                            </div>
                                    </div>
                                    <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href="{{route('web.home.news')}}" style="font-size: 14px ;letter-spacing: 1px ;color: #475c87 ;padding:0px;text-transform: none ;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;"><span class="gdlr-core-content" >Read All News
                                       </span><i class="gdlr-core-pos-right fa fa-long-arrow-right" style="color: #475c87;"  >
                                       </i>
                                       </a>
                                       </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-column gdlr-core-column-20">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_93">
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">

                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-event-item gdlr-core-item-pdb" id="div_1dd7_94">
                              <div class="gdlr-core-block-item-title-wrap  gdlr-core-left-align gdlr-core-item-mglr" id="div_1dd7_46">
                                      <div class="gdlr-core-block-item-title-inner clearfix">
                                          <h3 class="gdlr-core-block-item-title" id="h3_1dd7_10">Events</h3>
                                          <div class="gdlr-core-block-item-title-divider" id="div_1dd7_47"></div>
                                      </div>

                                  </div>

                                <div class="gdlr-core-event-item-holder clearfix">
                                  @foreach($events as $event)
                                  <div style="margin:20px;" class="gdlr-core-event-item-list gdlr-core-style-widget gdlr-core-item-pdlr  clearfix" id="div_1dd7_97">

                                      <span class="gdlr-core-event-item-info gdlr-core-type-start-date-month">
                                            <span class="gdlr-core-date" >{{$event->starttime->format('d')}}</span>
                                            <span class="gdlr-core-month">{{$event->starttime->format('M')}}</span>
                                        </span>
                                        <div class="gdlr-core-event-item-content-wrap">
                                            <h3 style = "font-size:14px; line-height: 20px;" class="gdlr-core-event-item-title">
                                                <a href="{{route('web.home.single_event',['id'=>$event->id])}}" >{{{$event->title}}}</a>
                                            </h3>
                                            <div class="gdlr-core-event-item-info-wrap">
                                                <span class="gdlr-core-event-item-info gdlr-core-type-time">
                                                  <span class="gdlr-core-head" >
                                                      <i class="icon_clock_alt" ></i>
                                                  </span>
                                                  <span class="gdlr-core-tail"> {{date('g:i a', strtotime($event->starttime))}} - {{date('F j,g:i a', strtotime($event->endtime))}}</span>
                                                </span>
                                                <span class="gdlr-core-event-item-info gdlr-core-type-location">
                                                    <span class="gdlr-core-head" >
                                                        <i class="icon_pin_alt" ></i>
                                                    </span>
                                                    <span class="gdlr-core-tail">{{$event->venue}}</span>
                                                </span>

                                            </div>
                                        </div>
                                      </div>
                                    @endforeach

                                  </div>
                            </div>
                            <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href="{{route('web.home.events')}}" style="font-size: 14px ;letter-spacing: 1px ;color: #475c87 ;padding:0px;text-transform: none ;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;"><span class="gdlr-core-content" >View All Events
                               </span><i class="gdlr-core-pos-right fa fa-long-arrow-right" style="color: #475c87;"  >
                             </i>
                            </a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
</div>



</div>
</div>
<div style = "padding-top:10px; padding-bottom:10px;" class="gdlr-core-pbf-wrapper " id="div_1dd7_79">
             <div class="gdlr-core-pbf-background-wrap" id="div_1dd7_80"></div>
             <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                 <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                     <div class="gdlr-core-pbf-element">
                         <div style = "padding-left: 0px;padding-bottom:10px; padding-top:20px;" class="gdlr-core-tab-item gdlr-core-js gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-tab-style1-horizontal gdlr-core-item-pdlr">

                             <div class="gdlr-core-tab-item-content-image-wrap clearfix">

                                 <div class="gdlr-core-tab-item-image  gdlr-core-active" data-tab-id="1">
                                         <span class="gdlr-core-tab-item-image-background" id="span_1dd7_1"  ></span>
                                 </div>

                                 <div class="gdlr-core-tab-item-image " data-tab-id="2">
                                         <span class="gdlr-core-tab-item-image-background" id="span_1dd7_2"  ></span>
                                 </div>

                                 <div class="gdlr-core-tab-item-image " data-tab-id="3">

                                         <span class="gdlr-core-tab-item-image-background" id="span_1dd7_3"  ></span>


                                 </div>
                                 <div class="gdlr-core-tab-item-image " data-tab-id="4">

                                         <span class="gdlr-core-tab-item-image-background" id="span_1dd7_4"  ></span>


                                 </div>
                                 <div class="gdlr-core-tab-item-image " data-tab-id="5">

                                         <span class="gdlr-core-tab-item-image-background" id="span_1dd7_4"  ></span>


                                 </div>
                             </div>


                             <div class="gdlr-core-tab-item-wrap">
                                <div class="gdlr-core-tab-item-title-wrap clearfix gdlr-core-title-font">
                                     <div class="gdlr-core-tab-item-title  gdlr-core-active" data-tab-id="1">Message From The Principal</div>
                                     <div class="gdlr-core-tab-item-title " data-tab-id="2">Vision</div>
                                     <div class="gdlr-core-tab-item-title " data-tab-id="3">Mission</div>
                                     <div class="gdlr-core-tab-item-title " data-tab-id="4">Why Choose DIT?</div>

                                 </div>
                                <div style=" text-align: justify;" class="gdlr-core-tab-item-content-wrap clearfix">
                                     <div  class="gdlr-core-tab-item-content  gdlr-core-active" data-tab-id="1" >

<div class="gdlr-core-title-item-title-wrap ">
   <h3 class="gdlr-core-title-item-title gdlr-core-skin-title "
   style="font-size: 22px ;font-weight: 700 ;text-transform: none ;color: #314e85 ;">
   Prof. Preksedis M. Ndomba
   <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider">
   </span>
   </h3>
  </div>
 <p>Dar es Salaam Institute of Technology (DIT) was established by the Act of Parliament No.6 of 1997 as a higher technical training institution in Tanzania. </p>
                                         <p>Strategies for improving the quality of teaching and learning process are notably vivid in a good number of curricula recently developed and reviewed. The application of ICT in teaching is also emphasized in the new curricula. Besides, DIT envisions putting in place support services for business start-ups for its students after completion of training, and similar measures for easing labour-entry and job-retention..</p>
                                     </div>
                                     <div class="gdlr-core-tab-item-content " data-tab-id="2" >
                                       <p>DIT has a vision of becoming a leading technical education institution in addressing the needs of the society.</p>
                                     </div>
                                     <div class="gdlr-core-tab-item-content " data-tab-id="3" >
                                        <p>To provide competence based technical education, through training, research, innovation and development of appropriate technology. DIT is therefore committed as an agent of industrialization, a progressive and customer-centered higher learning institution.</p>
                                         </div>
                                     <div class="gdlr-core-tab-item-content " data-tab-id="4" >
                                        <p>DIT is committed to provide a learning environment that promotes a passion for excellence in professionalism and enduring knowledge which stimulates creativity and innovation consistent within the country and regional realities. We embrace competence-based education and training approach.</p>
                                       <p>The Institute is fast establishing itself as the ideal tertiary institution for the holistic students’ development. We are focused on nurturing the growth of academic excellence and instilling the importance of scientific, engineering skills and entrepreneurship.</p>
                                     </div>

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
	 </div>
<!-- <div class="gdlr-core-pbf-wrapper " style="padding: 220px 0px 170px 0px;">
                    <div class="gdlr-core-pbf-background-wrap">
                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{asset('upload/design-studio.jpg')}}); background-size: cover ;background-position: center ;" data-parallax-speed="0.1"></div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom" style="max-width: 710px ;">
                            <div  class="gdlr-core-pbf-element">
                                <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 40px ;">
                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;">
                                        <a  style="color:#314E85"  class="gdlr-core-lightgallery gdlr-core-js " href="https://www.youtube.com/watch?v=0mbyp7pha9w"><img  src="{{asset('upload/icon-play.png')}}" alt="" width="82" height="82" title="play" /></a>
                                    </div>
                                </div>
			    </div>

                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 38px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #314E85;">2021 DIT DS Design Competition</h3></div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align" style="padding-bottom: 0px ;">
				    <div class="gdlr-core-text-box-item-content" style="font-size: 19px ;font-weight: 500 ;text-transform: none ;color:#314E85;">
<p> On the 25th of May 2021, the DIT Design Studio hosted its very first design competition. The competition featured 6 of the best projects to come of the studio in the last year. </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

         <div class="gdlr-core-pbf-wrapper " style="padding: 30px 0px 30px 0px;">
                      <div class="gdlr-core-pbf-background-wrap"></div>
                      <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                          <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                              <div class="gdlr-core-pbf-element">
                                  <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 10px ;">
                                      <div class="gdlr-core-title-item-title-wrap clearfix">
                                          <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 24px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;">Alumni of the Month</h3></div>
                                  </div>
                              </div>
                              <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">




                                      </div>
                                  </div>
                              </div>
                              <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                  <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 0px 20px 0px;">
                                      <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                          <div class="gdlr-core-pbf-element">
                                              <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 33px ;">
                                                  <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-round" style="border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;border-width: 0px;">
                                                      <a class="gdlr-core-lightgallery gdlr-core-js " href="/images/dit_imgurl_2021_04_04_05_36_38.jpg"><img src="upload/shutterstock_167044400-600x333.jpg" width="900" height="500"  alt="" /><span class="gdlr-core-image-overlay " style="border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;"><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"  ></i></span></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="gdlr-core-pbf-element">
                                              <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px ;">
                                                  <div class="gdlr-core-title-item-title-wrap clearfix">
                                                      <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 18px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">Full Name</h3></div>
                                              </div>
                                          </div>
                                          <div class="gdlr-core-pbf-element">
                                              <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 2px ;">
                                                  <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;text-transform: none ;color: #8f8f8f ;">
                                                      <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Dudenmouth.</p>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="gdlr-core-pbf-element">
                                              <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href="#" style="font-size: 16px ;font-weight: 400 ;letter-spacing: 0px ;color: #3db166 ;padding: 0px 0px 0px 0px;text-transform: none ;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;">
                                                <span class="gdlr-core-content" >Read More</span><i class="gdlr-core-pos-right arrow_right" style="font-size: 21px ;color: #3db166 ;"  ></i></a></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                  <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 0px 20px 0px;">
                                      <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                          <div class="gdlr-core-pbf-element">
                                              <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 33px ;">
                                                  <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-round" style="border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;border-width: 0px;">
                                                      <a class="gdlr-core-lightgallery gdlr-core-js " href="/images/dit_imgurl_2021_04_04_05_36_38.jpg"><img src="upload/shutterstock_160526219-600x333.jpg" width="900" height="500" alt="" /><span class="gdlr-core-image-overlay " style="border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;"><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"  ></i></span></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="gdlr-core-pbf-element">
                                              <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px ;">
                                                  <div class="gdlr-core-title-item-title-wrap clearfix">
                                                      <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 18px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">Full Name</h3></div>
                                              </div>
                                          </div>
                                          <div class="gdlr-core-pbf-element">
                                              <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 2px ;">
                                                  <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;text-transform: none ;color: #8f8f8f ;">
                                                      <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Dudenmouth.</p>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="gdlr-core-pbf-element">
                                              <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href="#" style="font-size: 16px ;font-weight: 400 ;letter-spacing: 0px ;color: #3db166 ;padding: 0px 0px 0px 0px;text-transform: none ;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;">
                                                <span class="gdlr-core-content" >Read More</span><i class="gdlr-core-pos-right arrow_right" style="font-size: 21px ;color: #3db166 ;"  ></i></a></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                  <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 0px 20px 0px;">
                                      <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                          <div class="gdlr-core-pbf-element">
                                              <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 33px ;">
                                                  <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-round" style="border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;border-width: 0px;">
                                                      <a class="gdlr-core-lightgallery gdlr-core-js " href="/images/dit_imgurl_2021_04_04_05_36_38.jpg"><img src="upload/shutterstock_160526219-600x333.jpg" width="900" height="500" alt="" /><span class="gdlr-core-image-overlay " style="border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;"><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"  ></i></span></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="gdlr-core-pbf-element">
                                              <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px ;">
                                                  <div class="gdlr-core-title-item-title-wrap clearfix">
                                                      <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 18px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">Full Name</h3></div>
                                              </div>
                                          </div>
                                          <div class="gdlr-core-pbf-element">
                                              <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 2px ;">
                                                  <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;text-transform: none ;color: #8f8f8f ;">
                                                      <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Dudenmouth.</p>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="gdlr-core-pbf-element">
                                              <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href="#" style="font-size: 16px ;font-weight: 400 ;letter-spacing: 0px ;color: #3db166 ;padding: 0px 0px 0px 0px;text-transform: none ;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;">
                                                <span class="gdlr-core-content" >Read More</span><i class="gdlr-core-pos-right arrow_right" style="font-size: 21px ;color: #3db166 ;"  ></i></a></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
-->
@endsection
