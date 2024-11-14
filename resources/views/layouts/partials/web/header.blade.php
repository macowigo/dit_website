<header class="dit-header-wrap dit-header-style-plain  dit-style-menu-right dit-sticky-navigation dit-style-fixed" data-navigation-offset="75px">
    <div  class="dit-header-background"></div>
    <div class="dit-header-container  dit-container">
        <div class="dit-header-container-inner clearfix">
          <div style="padding-bottom:0.3vw;"class="dit-logo  dit-item-pdlr">
            <div class=" enlarg">
        <a href="https://www.tanzania.go.tz/" target = "_blank"><img  src="{{asset('images/main.png')}}" alt="" /></a>
        </div>
          </div>

            <div style="padding-left:25vw;" class="dit-navigation dit-item-pdlr clearfix ">

                <div class="dit-main-menu" id="dit-main-menu">

                    <ul id="menu-main-navigation-1" class="sf-menu">
                        <li class="menu-item menu-item-home    menu-item-has-children dit-normal-menu"><a href="{{ route('web.home.index') }}" class="sf-with-ul-pre">Home</a>
                        </li>
                        <li class="menu-item menu-item-has-children dit-normal-menu"><a href="{{route('web.about_us.index') }}" class="sf-with-ul-pre">About US</a>
                            <ul class="sub-menu">
                                <li class="menu-item" data-size="60"><a href="{{route('web.about_us.index') }}">Background</a></li>
                                <li class="menu-item" data-size="60"><a href="{{ route('web.management.index') }}">Leadership and Management</a></li>

                                <li class="menu-item" data-size="60"><a href="{{ route('web.about_us.index') }}#div_983a_26">Vision</a></li>
                                <li class="menu-item" data-size="60"><a href="{{ route('web.about_us.index') }}#div_983a_26">Mission</a></li>
                                <!--  <li class="menu-item" data-size="60"><a href="{{ route('web.all_staff') }}">Our Staff </a></li>-->
                                <li class="menu-item" data-size="60"><a href="{{ route('web.contact.index') }}">Contact US</a></li>

                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children dit-mega-menu"><a href="#" class="sf-with-ul-pre">Departments</a>
                            <div class="sf-mega sf-mega-full ">
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-has-children" data-size="15"><a class="sf-with-ul-pre">Academic </a>
                                        <ul class="sub-menu">
                                          @foreach($departments as $dept)
                                            @if($dept->category == 'Academic Department' && $dept->id < 7)
                                            <li class="menu-item"><a href=" {{route('department.index',['id' => $dept->id,'name'=>$dept->name])}}">{{$dept->name}}</a></li>

                                            @endif
                                          @endforeach
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children" data-size="15"><a  style="color:#EFEFEF" href="#" class="sf-with-ul-pre"> Academic </a>
                                      <ul class="sub-menu">
                                        @foreach($departments as $dept)
                                          @if($dept->category == 'Academic Department' && $dept->id > 6)
                                          <li class="menu-item"><a href="{{route('department.index',['id' => $dept->id,'name'=>$dept->name])}} ">{{$dept->name}}</a></li>

                                          @endif
                                        @endforeach
                                      </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children" data-size="15"><a href="#" class="sf-with-ul-pre">Administrative</a>
                                      <ul class="sub-menu">
                                        @foreach($departments as $dept)
                                          @if( $dept->category == 'Administrative Department' && $dept->id <= 17)
                                          <li class="menu-item"><a href=" {{route('department.index',['id' => $dept->id,'name'=>$dept->name])}}">{{$dept->name}}</a></li>

                                          @endif
                                        @endforeach
                                      </ul>
                                    </li>
                                    <li class="menu-item" data-size="15">
                                        <a  style="color:#EFEFEF" href="#" class="sf-with-ul-pre"> Administrative </a>
                                        <ul class="sub-menu">
                                          @foreach($departments as $dept)
                                            @if($dept->category=='Administrative Department' && $dept->id >=18)
                                            <li class="menu-item"><a href=" {{route('department.index',['id' => $dept->id,'name'=>$dept->name])}}">{{$dept->name}}</a></li>

                                            @endif
                                          @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    <li class="menu-item menu-item-has-children dit-normal-menu"><a href="#" class="sf-with-ul-pre">Admission</a>
                        <ul class="sub-menu">

                            <li class="menu-item" data-size="60"><a href="{{route('admission.programme')}}">Programmes </a></li>
                            <li class="menu-item" data-size="60"><a href="{{route('admission.requirements')}}">Entry Requirements</a></li>
                            <li class="menu-item" data-size="60"><a href="{{route('admission.fees')}}">Fees Structure
                            </a></li>
                            <li class="menu-item" data-size="60">
                              <a style ="color: #148EB7; font-weight: 700;" href="https://admission.dit.ac.tz">Apply Now </a></li>
                        </ul>
                    </li>

		       <li class="menu-item dit-normal-menu"><a href="#">ICT Services</a>
                          <ul class="sub-menu">
                            <li class="menu-item" data-size="60"><a href="https://soma.dit.ac.tz" target="_blank">SOMA</a></li>
                            <li class="menu-item" data-size="60"><a href="https://emrejesho.gov.go.tz" target="_blank">e-Mrejesho</a></li>
                      				 <li class="menu-item" data-size="60"><a href="http://41.93.45.27/xmlui" target="_blank">Repository</a></li>

                      				<li class="menu-item" data-size="60"><a href="https://dlp.dit.ac.tz/" target="_blank">eLearning</a></li>

                              <li class="menu-item" data-size="60"><a href="https://mail.dit.ac.tz/" target="_blank">DIT Main Campus Webmail</a></li>

                             <li class="menu-item" data-size="60"><a href="https://mail.companyltd.dit.ac.tz/" target="_blank">DIT Company LTD Webmail</a></li>

                             <li class="menu-item" data-size="60"><a href="https://mail.mwanzacampus.dit.ac.tz/" target="_blank">DIT Mwanza Campus Webmail</a></li>

                             <li class="menu-item" data-size="60"><a href="https://mail.myungacampus.dit.ac.tz/" target="_blank">DIT Myunga Campus Webmail</a></li>
                           </ul>
                        </li>
                       <li class="menu-item dit-normal-menu"><a href="{{route('web.about_us.publication')}}">Useful Documents</a>
                        </li>
                      <!--  <ul class="sub-menu">
                                <li class="menu-item" data-size="60"><a href="#" target="_blank"> </a></li>
                                <li class="menu-item" data-size="60"><a href="https://soma.dit.ac.tz" target="_blank"> </a></li>
                                <li class="menu-item" data-size="60"><a href=" "> </a></li>
              </ul>
               <div class="dit-main-menu-search" id="dit-top-search"><i class="icon_search"></i>
                      </div>
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
                      </div> -->
                   </ul>
                    <div class="dit-navigation-slide-bar" id="dit-navigation-slide-bar"></div>
                </div>

            </div>
            <div style="padding-right: 17px;" class="dit-logo1  dit-item-pdlr">
               <div class="dit-enlarg">
                   <a href="{{ route('web.home.index') }} "><img  src="{{asset('images/logo.png')}}" alt="" /></a>
               </div>
            </div>
        </div>
    </div>


</header>
