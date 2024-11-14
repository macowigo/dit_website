@extends('layouts.web')


@section('content')
<div class="dit-page-wrapper" id="dit-page-wrapper">
      <div class="gdlr-core-page-builder-body">
        <div class="dit-page-title-wrap  dit-style-medium dit-left-align">
          <div class="dit-header-transparent-substitute"></div>
          <div class="dit-page-title-overlay"></div>
          <div  style="height:60px;"class="dit-page-title-container dit-container">

          <div style="height:3vw;" class="dit-page-caption">    </div>

          </div>
          <div style="padding-left:2vw; font-size: 2vw;color:#148EB7" class="dit-page-caption"> Leadership and Management</div>
        </div>
       <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
      <!--   @foreach($top3 as $staff)
          <div class="gdlr-core-pbf-column gdlr-core-column-20">

                      <div class="gdlr-core-block-item-title-inner clearfix" style="width:300px;" >
                          <h3 style ="padding-top:20px;padding-bottom:4px;margin:0px; font-size:18px;" class="gdlr-core-block-item-title" id="h3_1dd7_10" >{{$staff->designation}}</h3>
                          <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">

                          </div>
                      </div>
                      <div style="max-width:200px; max-height:300px;"class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                          <a href="#">
                          @if(!empty($staff->imgulr))
                           <img style=" border: 3px solid #0C2756;" src="{{asset($staff->imgulr)}}" alt="" width="350" height="350" title="{{$staff->fname}}" />
                           @else
                              <img style=" border: 3px solid #0C2756;" src="{{ asset('images/default.jpg') }}" alt="" width="350" height="350" title="{{$staff->fname}}" />
                          @endif
                          </a>
                          <div style="width:300px;" class="gdlr-core-pbf-element">
                              <div style = "padding-left:5px; padding-right:5px; background-color:#E6E9E9" class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"  id="gdlr-core-title-item-id-66469">
                                <div  class="gdlr-core-title-item-title-wrap clearfix">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_16" style=" padding-top:10px;">
                                {{$staff->fname}} {!! "&nbsp;" !!}{{$staff->mname}}{!! "&nbsp;" !!}{{$staff->lname}}
                                </h3>
                              </div>
                              </div>
                          </div>
                       </div>


          </div>
          @endforeach-->
        </div>
          <div class="gdlr-core-pbf-wrapper " style="padding: 60px 0px 20px 0px;">
              <div class="gdlr-core-pbf-background-wrap"></div>
              <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                  <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                      <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                          <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 0px 20px 0px 0px;">
                              <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                  <div class="gdlr-core-pbf-element">
                                      <div style = "padding-bottom:2px;" class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                          <div class="gdlr-core-title-item-title-wrap clearfix">
                                              <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 17px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">Organization Structure of DIT</h3></div>
                                      </div>
                                  </div>
                                  <div class="gdlr-core-pbf-element">
                                      <div style = "padding-bottom:0px;" class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                          <div class="gdlr-core-text-box-item-content" style="font-size: 15px ;text-transform: none ;  text-align:justify;">
                                              <p>The top organ of the DIT is the Council followed by the Chief Executive Officer (Principal) who is supported by the Deputy Principal (Academic, Research and Consultancy) and the Deputy Principal (Administration and Finance). The two Deputies are supported by heads of various departments who oversee teaching, learning and manage resources of the respective department.</p>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="gdlr-core-pbf-element">
                                      <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix " style="padding-bottom: 25px ;">
                                          <ul>
                                              <li class=" gdlr-core-skin-divider" style="margin-bottom: 0px ;">
                                        <div  class="gdlr-core-pbf-element">
                                            <div style = "padding-left:5px; padding-right:5px; background-color:#E6E9E9" class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"  id="gdlr-core-title-item-id-66469">
                                              <div  class="gdlr-core-title-item-title-wrap clearfix">
                                              <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_16" style=" padding-top:10px;">
                                              INSTITUTE EXECUTIVES
                                              </h3>
                                            </div>
                                            </div>
                                        </div>
                                              </li>
                                              <br>

                                              <li class=" gdlr-core-skin-divider" style="margin-bottom: 0px ;"><span class="gdlr-core-icon-list-icon-wrap" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-dot-circle-o" style="color: #148eb7 ;font-size: 18px ;width: 18px ;" ></i></span>
                                                  <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="font-size: 15px ;"> <strong>Chairman of the Council:</strong><br>Eng. Dkt. Richard Joseph Masika </span></div>
                                              </li>
                                              <li class=" gdlr-core-skin-divider" style="margin-bottom: 0px ;"><span class="gdlr-core-icon-list-icon-wrap" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-dot-circle-o" style="color: #148eb7 ;font-size: 18px ;width: 18px ;" ></i></span>
                                                  <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="font-size: 15px ;"> <strong>Principal:</strong><br>Prof. Preksedis M. Ndomba - BSc. (Eng) (Dar), MSc (Eng.) (Dar), PhD (UDSM/NTNU) </span></div>
                                              </li>
                                              <li class=" gdlr-core-skin-divider" style="margin-bottom: 0px ;"><span class="gdlr-core-icon-list-icon-wrap" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-dot-circle-o" style="color: #148eb7 ;font-size: 18px ;width: 18px ;" ></i></span>
                                                  <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="font-size: 15px ;"> <strong>Acting Deputy Principal Academic, Research and Consultancy:</strong><br> Prof Ezekiel Masige Amri  - Bsc (Education)- UDSM, Msc (Bootany) - UDSM, PhD (Botany)- UDSM</div>
                                              </li>
                                              <li class=" gdlr-core-skin-divider" style="margin-bottom: 0px ;"><span class="gdlr-core-icon-list-icon-wrap" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-dot-circle-o" style="color: #148eb7 ;font-size: 18px ;width: 18px ;" ></i></span>
                                                  <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="font-size: 15px ;"> <strong>Deputy Principal Administration and Finance:</strong><br>Prof. Najat Mohamed, BSc (Ed), MSc (Physics) UDSM, PhD (Univ. Surrey UK).</span></div>
                                              </li>

                                              <li class=" gdlr-core-skin-divider" style="margin-bottom: 0px ;"><span class="gdlr-core-icon-list-icon-wrap" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-dot-circle-o" style="color: #148eb7 ;font-size: 18px ;width: 18px ;" ></i></span>
                                              <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="font-size: 15px ;"> <strong>Registrar:</strong><br> Mr. Roy R. Elineema, BSc. Ed. (Dar), M.Eng. (Operation Research (Mexico)).</span></div>
                                              </li>

                                          </ul>
                                      </div>
                                  </div>


                              </div>
                          </div>
                      </div>
                      <div class="gdlr-core-pbf-column gdlr-core-column-30">
                          <div class="gdlr-core-pbf-column-content-margin gdlr-core-js  gdlr-core-column-extend-right" style="margin: 0px 0px 0px 0px;padding: 6px 0px 0px 0px;">
                              <div class="gdlr-core-pbf-background-wrap" style="background-color: #f5f5f5 ;"></div>
                              <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                  <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 0px ;">
                                      <div class="gdlr-core-title-item-title-wrap clearfix">
                                          <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 17px ;font-weight: 600 ;letter-spacing: 0px ; text-transform: none ;"> The Structure</h3></div>
                                  </div>
                              </div>
                                  <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-left:0px; padding-right: 0px; padding-bottom: 45px ;">
                                <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><img src="{{asset('images/structre.png')}}" width="800" height="517"  alt="" />   </div>
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

@endsection
