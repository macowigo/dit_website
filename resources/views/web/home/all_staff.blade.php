@extends('layouts.web')


@section('content')
<div class="dit-page-title-wrap  dit-style-medium dit-left-align">
  <div class="dit-header-transparent-substitute"></div>
  <div class="dit-page-title-overlay"></div>
  <div  style="height:60px;"class="dit-page-title-container dit-container">

  <div style="height:3vw;" class="dit-page-caption">    </div>

  </div>
  <div style="padding-left:2vw; color:#148EB7" class="dit-page-title">Our Staff</div>
</div>


<div class="gdlr-core-pbf-element">
    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px ;">
        <div class="gdlr-core-title-item-title-wrap clearfix">
            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 22px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;margin-right: 30px ;"></h3>

        </div>
    </div>
</div>
<div class="gdlr-core-pbf-element">
    <div class="gdlr-core-accordion-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-accordion-style-icon">
          <div class="gdlr-core-accordion-item-content-wrapper">
              <h4 class="gdlr-core-accordion-item-title gdlr-core-js ">  </h4>
              <div class="gdlr-core-accordion-item-content">
                @foreach($all_staff as $staff)
                <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-15" style = "width:260px;height:140px; overflow:hidden;margin-bottom:14px;">
                  <div style ="background-color:#E6E9E9; padding:10px;">

                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_16" style=" padding-top:10px; margin-bottom:0px;">
                            {{$staff->prefix}}. {{$staff->fname}}  {{$staff->mname}}  {{$staff->lname}}  <br>
                              <i style="padding-top:15px; font-size: 14px;  line-height: 24px; font-weight:normal; letter-spacing: 0px;" >{{$staff->designation}}<br>{{$staff->title}}</i>
                            </h3>
                              <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_16" style="padding-top:4px; font-size: 14px;  line-height: 24px; font-weight:normal; letter-spacing: 0px; margin-bottom:0px;">
                          </h3>
                          </div>
                          <a style = " font-size: 12px;font-weight:700;position:relative; float:right;border-radius: 4px; padding:0px 2px 0px 4px;" class="gdlr-core-personnel-list-button gdlr-core-button" href="{{route('web.single_staff',['id'=> $staff->id])}}">More Detail</a>
                        </div>
                     @endforeach
              </div>
          </div>

    </div>
</div>


@endsection
