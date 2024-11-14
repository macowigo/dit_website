<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"> Home</a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- left navbar content displayed here. You can add your content -->
        <!-- Authentication Links -->
      @guest
          <!-- <li><a class="nav-link" href="{{route('login')}}">login</a></li>
          <li><a class="nav-link" href="{{route('register')}}">register</a></li> -->
      @else

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <img src="{{ asset('admin-lte/dist/img/user.png') }}"   style="height: 30px; width: 30px;" alt="Image" class="img-size-50 mr-3 img-circle">
          User
          <span class="fas fa-caret-down"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                   Credentials
                  <span class="float-right text-sm text-green"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm text-muted"><i class="fas fa-key green"></i> Change my password</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{route('logout')}}" class="dropdown-item" role="button"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <!-- Message Start -->
            <div class="media">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                   Logout
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                 </h3>

                  <p class="text-sm text-muted"><i class="fas fa-power-off red"></i>Logout</p>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                 </form>

              </div>
            </div>
            <!-- Message End -->
          </a>
      </li>
      @endguest

    </ul>
  </nav>
  <!-- /.navbar -->
