
@extends('layouts.web')


@section('content')
<div class="dit-page-title-wrap  dit-style-medium dit-left-align">
  <div class="dit-header-transparent-substitute"></div>
  <div class="dit-page-title-overlay"></div>
  <div  style="height:60px;"class="dit-page-title-container dit-container">

  <div style="height:3vw;" class="dit-page-caption">    </div>

  </div>
  <div style="padding-left:2vw; color:#148EB7" class="dit-page-caption">{{$single_staff->department->name}}</div>
</div>

    <div class="dit-page-wrapper" id="dit-page-wrapper">
            <div class="gdlr-core-page-builder-body">
                <div class="gdlr-core-pbf-wrapper " style="padding: 70px 0px 40px 0px;">
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">


                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align">
                                                <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;">

                                                    <a class="gdlr-core-lightgallery gdlr-core-js " ><img style=" border: 3px solid #0C2756;"  src="{{isset($single_staff->imgurl)? asset($single_staff->imgurl):asset(upload/staff_img.jpg)}}" width="250" height="250"  alt=" " /></a>


                                                </div>
                                            </div>
                                        </div>
  <!--
                                        <div style="max-width:200px; max-height:300px;"class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                            <a href="#">
                                             <img style=" border: 3px solid #0C2756;" src="{{isset($single_staff->imgurl)? asset($single_staff->imgurl):asset(upload/staff_img.jpg)}}" alt="" width="350" height="350" title="" />
                                            </a>
                                         </div>
-->



                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-personnel-info-item gdlr-core-item-pdb gdlr-core-item-pdlr clearfix" style="padding-bottom: 17px ;">
                                                <div class="gdlr-core-personnel-info-item-list-wrap">
                                                     <!-- <div class="dit-personnel-info-list dit-type-social-shortcode">
                                                        <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" style="padding-bottom: 0px ;"><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="facebook" style="font-size: 18px ;color: #4867AA;">
                                                          <i class="fa fa-facebook" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="linkedin" style="font-size: 18px ;color: #0077B5 ;margin-left: 14px ;">
                                                          <i class="fa fa-linkedin" >
                                                          </i></a>
                                                          <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="skype" style="font-size: 18px ;color: #02A7E3;margin-left: 14px ;">
                                                            <i class="fa fa-skype" ></i></a><a href="#url" target="_blank" class="gdlr-core-social-network-icon" title="twitter" style="font-size: 18px ;color: #34B3F7 ;margin-left: 14px ;"><i class="fa fa-twitter" ></i></a>
                                                          </div>
                                                    </div> -->
                                                    
                                                    <div class="dit-personnel-info-list dit-type-email">
                                                      <i class="dit-personnel-info-list-icon fa fa-envelope-open"></i>{{$single_staff->email}}</div>
                                                    <div class="dit-personnel-info-list dit-type-phone"><i class="dit-personnel-info-list-icon fa fa-phone"></i>{{$single_staff->phone}}</div>



                                                </div>
                                            </div>
                                        </div>

                                      <!--  <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><a class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border" href="#" style="font-size: 13px ;padding: 11px 24px 15px 27px;border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;"><span class="gdlr-core-content" >Download CV</span><i class="gdlr-core-pos-right fa fa-file-pdf-o"  ></i></a></div>
                                        </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-40">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 0px 0px 20px 0px;padding: 0px 0px 0px 0px;">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class="gdlr-core-pbf-element">
                                            <div style = "padding-bottom: 10px;" class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr">
                                                <div class="gdlr-core-title-item-title-wrap clearfix">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 34px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #161616 ;"> {{$single_staff->prefix}}. {{$single_staff->fname}} {{$single_staff->mname}} {{$single_staff->lname}}
                                                    </h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 20px ;font-style: normal ;color: #6c6c6c ;">{{$single_staff->designation}},<br>{{$single_staff->title}}</span></div>
                                        </div>

                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" style="margin-bottom: 55px ;">
                                                <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="text-align:left; border-color: #192F59 ;border-bottom-width: 3px ;">{{$single_staff->department->name}}</div>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-pbf-element">
                                            <div style = "padding-bottom:10px;" class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                                <div class="gdlr-core-title-item-title-wrap clearfix">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 20px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #464646 ;">Biography</h3></div>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 20px ;">
                                                <div class="gdlr-core-text-box-item-content" style="text-align:justify; font-size: 17px ;letter-spacing: 0px ;text-transform: none ;">
                                                    <p>{{$single_staff->bio_paragraph1}}</p>
                                                    <p>{{$single_staff->bio_paragraph2}}</p>
                                                    <p>{{$single_staff->bio_paragraph3}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" style="margin-bottom: 45px ;">
                                                <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #192F59 ;border-bottom-width: 3px ;"></div>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                                <div class="gdlr-core-title-item-title-wrap clearfix">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 20px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #464646 ;">Education</h3></div>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix ">
                                                <ul>
                                                  @foreach($educations as $education)
                                                    <li class=" gdlr-core-skin-divider" style="margin-bottom: 13px ;"><span class="gdlr-core-icon-list-icon-wrap" style="margin-top: 4px ;"><i class="gdlr-core-icon-list-icon fa fa-dot-circle-o" style="color: #6b6b6b ;font-size: 16px ;width: 16px ;" ></i></span>
                                                        <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="font-size: 17px ;text-transform: none ;"><p>{{$education->description}}</p></span></div>
                                                    </li>
                                                    @endforeach

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" style="margin-bottom: 55px ;">
                                                <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #192F59 ;border-bottom-width: 3px ;"></div>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                                <div class="gdlr-core-title-item-title-wrap clearfix">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 20px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #464646 ;">Professional Experience </h3></div>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix ">
                                                <ul>
                                                    @foreach($experiences as $experience)
                                                    <li class=" gdlr-core-skin-divider" style="margin-bottom: 13px ;"><span class="gdlr-core-icon-list-icon-wrap" style="margin-top: 1px ;"><i class="gdlr-core-icon-list-icon fa fa-hand-o-right" style="color: #6b6b6b ;font-size: 22px ;width: 22px ;" ></i></span>
                                                        <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="font-size: 17px ;text-transform: none ;">{{$experience->description}}</span></div>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>

                                        <!--
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" style="margin-bottom: 55px ;">
                                                <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #192F59 ;border-bottom-width: 3px ;"></div>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                                <div class="gdlr-core-title-item-title-wrap clearfix">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 20px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #464646 ;">Research Interests</h3></div>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-skill-bar-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-size-small gdlr-core-type-rectangle">

                                              @foreach ($skills as $skill)
                                                <div class="gdlr-core-skill-bar">
                                                    <div class="gdlr-core-skill-bar-head gdlr-core-title-font"><span class="gdlr-core-skill-bar-title">{{$skill->description}}</span><span class="gdlr-core-skill-bar-right">{{$skill->rating}} % </span></div>
                                                    <div class="gdlr-core-skill-bar-progress">
                                                        <div class="gdlr-core-skill-bar-filled gdlr-core-js" data-width="{{$skill->rating}}"></div>
                                                    </div>
                                                </div>
                                              @endforeach

                                            </div>
                                        </div>
-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
