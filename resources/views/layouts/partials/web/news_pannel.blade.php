<div style="width:100%;" class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_93">
        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">

            <div class="gdlr-core-pbf-element">
                <div style="padding-top:24px;" class="gdlr-core-event-item gdlr-core-item-pdb" id="div_1dd7_94">
                  <div class="gdlr-core-block-item-title-wrap  gdlr-core-left-align gdlr-core-item-mglr" id="div_1dd7_46">
                          <div class="gdlr-core-block-item-title-inner clearfix">
                              <h3 class="gdlr-core-block-item-title" id="h3_1dd7_10">News & Updates</h3>
                              <div class="gdlr-core-block-item-title-divider" id="div_1dd7_47"></div>
                          </div>

                      </div>

                    <div class="gdlr-core-event-item-holder clearfix">
                      <div style="width: 100%;" class="gdlr-core-event-item-list gdlr-core-style-widget gdlr-core-item-pdlr  clearfix" id="div_1dd7_97">
                      <div class="gdlr-core-event-item-content-wrap">
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
