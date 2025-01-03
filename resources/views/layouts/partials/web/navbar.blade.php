

  <div class="dit-mobile-header-wrap">

  <div class="dit-mobile-header dit-header-background dit-style-slide dit-sticky-mobile-navigation " id="dit-mobile-header">
      <div style="height:9vw;padding-left:0px; padding-right:0px; max-width:100%;background:#192F59;position:relative; bottom:18px;" class="dit-mobile-header-container dit-container clearfix">
        <div style="margin-right:0px;text-shadow: 2px 8px 4px #0f0c09; text-align:center;line-height:normal; max-width:60vw;position:absolute; top:1vw;left:20%;font-family: 'Seta Reta NF';font-size:3.1vw; font-weight:bold; color: #ffffff ;">Dar es Salaam Institute of Technology
           <h6 style="text-align:center; text-shadow: 2px 8px 4px #0f0c09;  margin: 0px;font-size:1.8vw; font-weight:normal; color: #ffffff ; font-style:italic;font-family: 'Seta Reta NF';"> An Agent of industrialization, a Progressive and customer – Centered Higher Learning Institution</h6>
        </div>
          <div class="dit-logo  dit-item-pdlr">
              <div style="width:7vw; height:9vw;position:relative; float:left; margin-right:0px;" class="dit-logo-inner  ">
                  <a class="" href="{{route('web.home.index')}}"><img style="position:absolute; top:1vw;" src="{{asset('images/main.png')}}" alt="" /></a>
              </div>



              <div style="width:6vw; height:8vw; position:absolute; right:-60px;"  class="dit-logo-inner">
                  <a class="" href="{{route('web.home.index')}}"><img style="position:absolute; top:1vw;" class ="dit_logoimg" src="{{asset('images/slogo.png')}}" alt="" /></a>
              </div>
          </div>


          <div class="searchtab dit-mobile-menu-right">
            <div class="dit-main-menu-search" id="dit-mobile-top-search"><i class="fa fa-search"></i></div>
            <div class="dit-top-search-wrap">
                <div class="dit-top-search-close"></div>
                <div class="dit-top-search-row">
                    <div class="dit-top-search-cell">
                        <form role="search" method="get" class="search-form" action="#">
                            <input type="text" class="search-field dit-title-font" placeholder="Search..." value="" name="s">
                            <div class="dit-top-search-submit"><i class="fa fa-search"></i></div>
                            <input type="submit" class="search-submit" value="Search">
                            <div class="dit-top-search-close"><i class="icon_close"></i></div>
                        </form>
                    </div>
                </div>
            </div>
              <div class="dit-mobile-menu"><a class="dit-mm-menu-button dit-mobile-menu-button dit-mobile-button-hamburger" href="#dit-mobile-menu"><span></span></a>
                  <div style="text-transform:none;" class="dit-mm-menu-wrap dit-navigation-font" id="dit-mobile-menu" data-slide="right">
                      <ul id="menu-main-navigation" class="m-menu">

                           <li class="menu-item menu-item-home activetab menu-item-has-children"><a href="{{route('web.home.index')}}">Home</a>

                          </li>
                          <li class="menu-item menu-item-has-children"><a href="#">About US</a>
                              <ul class="sub-menu">
                                  <li class="menu-item"><a href="{{route('web.about_us.index')}}">Background</a></li>

                                  <li class="menu-item" data-size="60"><a href="{{route('web.management.index')}}">Leadership and Management</a></li>
                                  <li class="menu-item" data-size="60"><a href="{{route('web.about_us.index')}}#div_983a_26">Mission</a></li>
                                  <li class="menu-item" data-size="60"><a href="{{route('web.about_us.index')}}#div_983a_26">Vision</a></li>
                                  <li class="menu-item"><a href="{{route('web.all_staff')}}">Our Staff</a></li>
                                  <li class="menu-item" data-size="60"><a href="{{route('web.contact.index')}}">Contact US</a></li>

                              </ul>
                          </li>

                         <li class="menu-item menu-item-has-children"><a href="#">Departments</a>
                              <ul class="sub-menu">
                                   <li class="menu-item menu-item-has-children" data-size="15"><a class="sf-with-ul-pre">Academics</a>
                                  <ul class="sub-menu">

                                    @foreach($departments as $dept)
                                      @if($dept->category == 'Academic Department')
                                      <li class="menu-item"><a href="{{route('department.index',['id' => $dept->id,'name'=>$dept->name])}}">{{$dept->name}}</a></li>
                                      @endif
                                    @endforeach

                                  </ul>
                              </li>

                                <li class="menu-item menu-item-has-children" data-size="15"><a href="#" class="sf-with-ul-pre">Administrative</a>
                                      <ul class="sub-menu">

                                        @foreach($departments as $dept)
                                          @if($dept->category == 'Administrative Department')
                                          <li class="menu-item">
                                            <a href="{{route('department.index',['id' => $dept->id,'name'=>$dept->name])}}">{{$dept->name}}
                                            </a>
                                          </li>
                                          @endif
                                        @endforeach
                                      </ul>
                                  </li>

                              </ul>
                          </li>

                     <li class="menu-item menu-item-has-children"><a href="#" class="sf-with-ul-pre">Admission</a>
                         <ul class="sub-menu">
                             <li class="menu-item" data-size="60"><a href="{{route('admission.programme')}}">Programmes </a></li>
                             <li class="menu-item" data-size="60"><a href="{{route('admission.requirements')}}">Entry Requirements</a></li>
                             <li class="menu-item" data-size="60"><a href="{{route('admission.fees')}}">Fees Structure
                             </a></li>
                             <li class="menu-item" data-size="60">
                               <a style ="color: #148EB7; font-weight: 700;" href="https://soma.dit.ac.tz/admission/apply">ApplyNow </a></li>
                         </ul>
                     </li>

                          <li class="menu-item"><a href="#">ICT Services</a>
                          <ul class="sub-menu">
				     <li class="menu-item" data-size="60"><a href="https://mail.dit.ac.tz" target="_blank">DIT Webmail</a></li>
 				     <li class="menu-item" data-size="60"><a href="https://mail.myungacampus.dit.ac.tz" target="_blank">DIT Myunga Campus Webmail</a></li>
				     <li class="menu-item" data-size="60"><a href="https://mail.companyltd.dit.ac.tz" target="_blank">DIT Company Webmail</a></li>
 				     <li class="menu-item" data-size="60"><a href="https://mail.mwanzacampus.dit.ac.tz" target="_blank">DIT Mwanza Campus Webmail</a></li>
                                      <li class="menu-item" data-size="60"><a href="https://soma.dit.ac.tz" target="_blank">SOMA</a></li>
                                     <li class="menu-item" data-size="60"><a href="https://emrejesho.gov.go.tz/">e-Mrejesho</a></li>

                          </ul>
                          </li>
                          <li class="menu-item"><a href="" >Projects</a>

                            <ul class="sub-menu">
                      <li class="menu-item" data-size="60"><a href="{{route('web.home.project.index')}}" target="_self">AHEAD </a></li>
 <li class="menu-item" data-size="60" ><a href="https://designstudio.ditnet.ac.tz/" target="_blank">Design Studio </a></li>
   <li class="menu-item" data-size="60"><a href="http://rafic.dit.ac.tz/" target="_blank">EASTRIP (RAFIC)</a></li>


                            </ul></li>
                          <li class="menu-item "><a href="#" target="_blank">Research</a>
                                <ul class="sub-menu">

                               <li class="menu-item" data-size="60"><a href="#">Archive</a></li>
                                <li  class="menu-item" data-size="60"><a href="{{route('web.home.project.inhub')}}" target="_self">Innovation Hub </a></li>
                                  <li class="menu-item" data-size="60"><a href="http://41.93.45.27/xmlui" target="_blank">Repository</a></li>
                                  <li class="menu-item" data-size="60"><a href="https://scholar.google.com/citations?hl=en&view_op=search_authors&mauthors=Dar+es+salaam+institute+of+technology+%28DIT%29&btnG=" target="_blank"> Google Scholar</a></li>
                                  <li class="menu-item" data-size="60">  <a href="https://www.researchgate.net/institution/Dar-es-Salaam-Institute-of-Technology" target="_blank">Research Gates</a></li>
                                  <li class="menu-item " data-size="60"><a href="{{route('web.home.project.ongoing')}}" target="_self"> DIT On Going Research </a></li>
                                </ul>
                              </li>
                              <li class="menu-item menu-item-has-children"><a href="#" class="sf-with-ul-pre">Center</a>
                                  <ul class="sub-menu">
                                      <li class="menu-item" data-size="60"><a href="http://itcoeict.dit.ac.tz/" target="_blank">ITCoEICT</a></li>
                                  </ul>
                              </li>
                          <li class="menu-item"><a href="{{route('web.campus.index')}}" target="_self">Our Campus</a></li>
                          <li class="menu-item"><a href="{{route('web.alumni.index')}}" target="_self">Alumni</a></li>
                          <li class="menu-item"><a href="{{route('web.about_us.publication')}}">Publication</a>
                          </li>
                          <li class="menu-item"><a href="{{route('web.about_us.partners')}}">Our Partners</a>
                          </li>

                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
