@extends('layouts.web')


@section('content')

<div class="dit-page-title-wrap  dit-style-medium dit-left-align">
  <div class="dit-header-transparent-substitute"></div>
  <div class="dit-page-title-overlay"></div>
  <div  style="height:60px;"class="dit-page-title-container dit-container">

  <div style="height:3vw;" class="dit-page-caption">     </div>

  </div>
  <div style="padding-left:2vw; color:#148EB7" class="dit-page-caption">{{$dept->name}}</div>
</div>

<div class="gdlr-core-pbf-element">
    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px ;">
        <div class="gdlr-core-title-item-title-wrap clearfix">
            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 22px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;margin-right: 30px ;"></h3>
            <div class="gdlr-core-title-item-divider gdlr-core-right gdlr-core-skin-divider" style="font-size: 22px ;border-bottom-width: 3px ;"></div>
        </div>
    </div>
</div>
<div class="gdlr-core-pbf-element">
    <div class="gdlr-core-accordion-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-accordion-style-icon">
  @if(!empty($staff))
        <div class="gdlr-core-accordion-item-tab clearfix ">
            <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
            <div class="gdlr-core-accordion-item-content-wrapper">
                <h4 class="gdlr-core-accordion-item-title gdlr-core-js ">Professors and Senior Lecturers</h4>
                <div class="gdlr-core-accordion-item-content">
                  @foreach($staffs as $staff)
                  @if(!empty($staff->staff_type == 'Professors and Senior Lecturers'))
                  <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-15" style = "width:260px;height:120px; overflow:hidden;margin-bottom:14px;">
                    <div style ="background-color:#E6E9E9; padding:10px;">

                          <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_16" style=" padding-top:10px; margin-bottom:0px;">
                              {{$staff->prefix}}. {{$staff->fname}}  {{$staff->mname}}  {{$staff->lname}}  <br>
                                <i style="padding-top:15px; font-size: 14px;  line-height: 24px; font-weight:normal; letter-spacing: 0px;" >{{$staff->designation}},{{$staff->title}}</i>
                              </h3>
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_16" style="padding-top:4px; font-size: 14px;  line-height: 24px; font-weight:normal; letter-spacing: 0px; margin-bottom:0px;">
                            </h3>
                            </div>
                            <a style = " font-size: 12px;font-weight:700;position:relative; float:right;border-radius: 4px; padding:0px 2px 0px 4px;" class="gdlr-core-personnel-list-button gdlr-core-button" href="{{route('web.single_staff',['id'=> $staff->id])}}">More Detail</a>

                        </div>
                        @endif
                       @endforeach
                </div>
            </div>
        </div>
        @endif
        @if(!empty($staff_1))
        <div class="gdlr-core-accordion-item-tab clearfix ">
            <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
            <div class="gdlr-core-accordion-item-content-wrapper">
                <h4 class="gdlr-core-accordion-item-title gdlr-core-js ">Lecturers</h4>
                <div class="gdlr-core-accordion-item-content">
                  @foreach($staffs as $staff)
                  @if($staff->staff_type == 'Lecturers')
                  <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-15" style = "width:260px;height:180; overflow:hidden;margin-bottom:14px;">
                    <div style ="background-color:#E6E9E9; padding:10px;">

                          <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_16" style=" padding-top:10px; margin-bottom:0px;">
                              {{$staff->prefix}}. {{$staff->fname}}  {{$staff->mname}}  {{$staff->lname}}  <br>
                                <i style=" font-size: 14px;  line-height: 24px; font-weight:normal; letter-spacing: 0px;" >{{$staff->designation}}</i>

                              </h3>
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_16" style="padding-top:4px; font-size: 14px;  line-height: 24px; font-weight:normal; letter-spacing: 0px; margin-bottom:0px;">
                            </h3>
                            </div>
                            <a style = " font-size: 12px;font-weight:700;position:relative; float:right;border-radius: 4px; padding:0px 2px 0px 4px;" class="gdlr-core-personnel-list-button gdlr-core-button" href="{{route('web.single_staff',['id'=> $staff->id])}}">More Detail</a>

                        </div>
                        @endif
                       @endforeach
                </div>
            </div>
        </div>
        @endif
        @if(!empty($staff_2))
        <div class="gdlr-core-accordion-item-tab clearfix ">
            <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
            <div class="gdlr-core-accordion-item-content-wrapper">
                <h4 class="gdlr-core-accordion-item-title gdlr-core-js ">Assistant Lecturers</h4>
                <div class="gdlr-core-accordion-item-content">
                  @foreach($staffs as $staff)
                  @if($staff->staff_type == 'Assistant Lecturers')
                  <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-15" style = "width:260px;height:120px; overflow:hidden;margin-bottom:14px;">
                    <div style ="background-color:#E6E9E9; padding:10px;">

                          <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_16" style=" padding-top:10px; margin-bottom:0px;">
                              {{$staff->prefix}}. {{$staff->fname}}  {{$staff->mname}}  {{$staff->lname}}  <br>
                                <i style="padding-top:15px; font-size: 14px;  line-height: 24px; font-weight:normal; letter-spacing: 0px;" >{{$staff->designation}}</i>
                              </h3>
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_16" style="padding-top:4px; font-size: 14px;  line-height: 24px; font-weight:normal; letter-spacing: 0px; margin-bottom:0px;">
                            </h3>
                            </div>
                            <a style = " font-size: 12px;font-weight:700;position:relative; float:right;border-radius: 4px; padding:0px 2px 0px 4px;" class="gdlr-core-personnel-list-button gdlr-core-button" href="{{route('web.single_staff',['id'=> $staff->id])}}">More Detail</a>

                        </div>
                        @endif
                       @endforeach
                </div>
            </div>
        </div>
        @endif
        @if(!empty($staff_3))
        <div class="gdlr-core-accordion-item-tab clearfix ">
            <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
            <div class="gdlr-core-accordion-item-content-wrapper">
                <h4 class="gdlr-core-accordion-item-title gdlr-core-js ">Tutorial Assistants</h4>
                <div class="gdlr-core-accordion-item-content">
                  @foreach($staffs as $staff)
                  @if($staff->staff_type == 'Tutorial Assistants')
                  <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-15" style = "width:260px;height:120px; overflow:hidden;margin-bottom:14px;">
                    <div style ="background-color:#E6E9E9; padding:10px;">

                          <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_16" style=" padding-top:10px; margin-bottom:0px;">
                              {{$staff->prefix}}. {{$staff->fname}}  {{$staff->mname}}  {{$staff->lname}}  <br>
                                <i style="padding-top:15px; font-size: 14px;  line-height: 24px; font-weight:normal; letter-spacing: 0px;" >{{$staff->designation}}</i>
                              </h3>
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_16" style="padding-top:4px; font-size: 14px;  line-height: 24px; font-weight:normal; letter-spacing: 0px; margin-bottom:0px;">
                            </h3>
                            </div>
                            <a style = " font-size: 12px;font-weight:700;position:relative; float:right;border-radius: 4px; padding:0px 2px 0px 4px;" class="gdlr-core-personnel-list-button gdlr-core-button" href="{{route('web.single_staff',['id'=> $staff->id])}}">More Detail</a>

                        </div>
                        @endif
                       @endforeach
                </div>
            </div>
        </div>
        @endif
        @if(!empty($staff_4))
        <div class="gdlr-core-accordion-item-tab clearfix ">
            <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
            <div class="gdlr-core-accordion-item-content-wrapper">
                <h4 class="gdlr-core-accordion-item-title gdlr-core-js ">Instructors</h4>
                <div class="gdlr-core-accordion-item-content">
                  @foreach($staffs as $staff)
                  @if($staff->staff_type == 'Instructors')
                  <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-15" style = "width:260px;height:120px; overflow:hidden;margin-bottom:14px;">
                    <div style ="background-color:#E6E9E9; padding:10px;">

                          <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_16" style=" padding-top:10px; margin-bottom:0px;">
                              {{$staff->prefix}}. {{$staff->fname}}  {{$staff->mname}}  {{$staff->lname}}  <br>
                                <i style="padding-top:15px; font-size: 14px;  line-height: 24px; font-weight:normal; letter-spacing: 0px;" >{{$staff->designation}}</i>
                              </h3>
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_16" style="padding-top:4px; font-size: 14px;  line-height: 24px; font-weight:normal; letter-spacing: 0px; margin-bottom:0px;">
                            </h3>
                            </div>
                            <a style = " font-size: 12px;font-weight:700;position:relative; float:right;border-radius: 4px; padding:0px 2px 0px 4px;" class="gdlr-core-personnel-list-button gdlr-core-button" href="{{route('web.single_staff',['id'=> $staff->id])}}">More Detail</a>

                        </div>
                        @endif
                       @endforeach
                </div>
            </div>
        </div>
        @endif
        @if(!empty($staff_5))
        <div class="gdlr-core-accordion-item-tab clearfix ">
            <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
            <div class="gdlr-core-accordion-item-content-wrapper">
                <h4 class="gdlr-core-accordion-item-title gdlr-core-js ">Administrative and Supporting Staff</h4>
                <div class="gdlr-core-accordion-item-content">
                  @foreach($staffs as $staff)
                  @if($staff->staff_type == 'Administrative and Supporting Staff')
                  <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-15" style = "width:260px;height:120px; overflow:hidden;margin-bottom:14px;">
                    <div style ="background-color:#E6E9E9; padding:10px;">

                          <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_16" style=" padding-top:10px; margin-bottom:0px;">
                              {{$staff->prefix}}. {{$staff->fname}}  {{$staff->mname}}  {{$staff->lname}}  <br>
                                <i style="padding-top:15px; font-size: 14px;  line-height: 24px; font-weight:normal; letter-spacing: 0px;" >{{$staff->designation}}</i>
                              </h3>
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_16" style="padding-top:4px; font-size: 14px;  line-height: 24px; font-weight:normal; letter-spacing: 0px; margin-bottom:0px;">
                            </h3>
                            </div>
                            <a style = " font-size: 12px;font-weight:700;position:relative; float:right;border-radius: 4px; padding:0px 2px 0px 4px;" class="gdlr-core-personnel-list-button gdlr-core-button" href="{{route('web.single_staff',['id'=> $staff->id])}}">More Detail</a>

                        </div>
                        @endif
                       @endforeach
                </div>
            </div>
        </div>
        @endif
    </div>
</div>


@endsection