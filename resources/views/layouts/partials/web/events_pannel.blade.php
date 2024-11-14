<div style="width:100%;" class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_93">
        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">

            <div class="gdlr-core-pbf-element">
                <div style="padding-top:24px;" class="gdlr-core-event-item gdlr-core-item-pdb" id="div_1dd7_94">
                  <div class="gdlr-core-block-item-title-wrap  gdlr-core-left-align gdlr-core-item-mglr" id="div_1dd7_46">
                          <div class="gdlr-core-block-item-title-inner clearfix">
                              <h3 class="gdlr-core-block-item-title" id="h3_1dd7_10">Events</h3>
                              <div class="gdlr-core-block-item-title-divider" id="div_1dd7_47"></div>
                          </div>

                      </div>

                    <div class="gdlr-core-event-item-holder clearfix">
                      @foreach($events as $event)
                      <div style="width: 100%;padding:0px; margin:0px;" class="gdlr-core-event-item-list gdlr-core-style-widget gdlr-core-item-pdlr  clearfix" id="div_1dd7_97">

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
