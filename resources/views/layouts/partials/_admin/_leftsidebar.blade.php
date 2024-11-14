<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="{{ asset('admin-lte/dist/img/user.png') }}" alt="DIT" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">DIT</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('admin-lte/dist/img/user.png') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">User</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>


          @hasanyrole('Admin')
          <!-- User Management -->
          <li class="nav-item has-treeview {{active(['dit/site/roles*', 'dit/site/permissions*','dit/site/users*'])?'menu-open':''}}">

            <a href="#" class="nav-link {{active(['dit/site/roles*', 'dit/site/permissions*','dit/site/users*'])}}">
              <i class="nav-icon fas fa-users orange"></i>
              <p>
              Users Settings
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
            @can('view_user')
              <li class="nav-item">
                <a href="{{route('admin.user.index')}}" class="nav-link  {{active('dit/site/users*')}}">
                  <i class="far fa-circle nav-icon green"></i>
                  <p>Users</p>
                </a>
              </li>
              @endcan
              @can('view_role')
              <li class="nav-item">
                <a href="{{route('admin.role.index')}}" class="nav-link {{active('dit/site/roles*')}}">
                <i class="far fa-circle nav-icon green"></i>
                  <p>Roles</p>
                </a>
              </li>
              @endcan
              @can('view_permission')
              <li class="nav-item">
                <a href="{{route('admin.permission.index')}}" class="nav-link  {{active('dit/site/permissions*')}}">
                <i class="far fa-circle nav-icon green"></i>
                  <p>Permissions</p>
                </a>
              </li>
              @endcan

            </ul>
            </li>
          @endhasanyrole

        @hasanyrole('Admin|Webmaster')
            <!-- Location Settings -->
          <li class="nav-item has-treeview {{active(['dit/site/countries*','dit/site/wards*','dit/site/regions*','dit/site/districts*'])?'menu-open':''}}">

            <a href="#" class="nav-link {{active(['dit/site/countries*','dit/site/wards*','dit/site/regions*','dit/site/districts*'])}}">
              <i class="nav-icon fa fa-map-marker red"></i>
              <p>
              Geographical Setup
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>

        <ul class="nav nav-treeview">
        @can('view_country')
          <li class="nav-item">
            <a href="{{route('admin.country.index')}}" class="nav-link  {{active('dit/site/countries*')}}">
              <i class="far fa-circle nav-icon green"></i>
              <p>Countries</p>
            </a>
          </li>
          @endcan
          @can('view_region')
          <li class="nav-item">
            <a href="{{route('admin.region.index')}}" class="nav-link  {{active('dit/site/regions*')}}">
              <i class="far fa-circle nav-icon green"></i>
              <p>Regions</p>
            </a>
          </li>
          @endcan
          @can('view_district')
          <li class="nav-item">
            <a href="{{route('admin.district.index')}}" class="nav-link {{active('dit/site/districts*')}}">
            <i class="far fa-circle nav-icon green"></i>
              <p>Districts</p>
            </a>
          </li>
          @endcan
          @can('view_ward')
          <li class="nav-item">
            <a href="{{route('admin.ward.index')}}" class="nav-link  {{active('dit/site/wards*')}}">
            <i class="far fa-circle nav-icon green"></i>
              <p>Wards </p>
            </a>
          </li>
          @endcan
        </ul>
      </li>
     @endhasanyrole

     @hasanyrole('Admin|Webmaster')
         <!-- Location Settings -->
       <li class="nav-item has-treeview {{active(['admin.quick_link.index','admin.slider.index','admin.event.index','admin.news.index'])?'menu-open':''}}">

         <a href="#" class="nav-link {{active(['admin.quick_link.index','admin.slider.index','admin.event.index','admin.news.index'])}}">
           <i class="nav-icon fa fa-map-marker blue"></i>
           <p>
           Web Content
             <i class="right fa fa-angle-left"></i>
           </p>
         </a>

     <ul class="nav nav-treeview">
       <li class="nav-item">
         <a href="{{route('admin.quick_link.index')}}" class="nav-link  {{active('admin.quick_link.index')}}">
           <i class="far fa-circle nav-icon green"></i>
           <p>Quick Links</p>
         </a>
       </li>
       <li class="nav-item">
         <a href="{{route('admin.slider.index')}}" class="nav-link  {{active('admin.slider.index')}}">
           <i class="far fa-circle nav-icon green"></i>
           <p>Sliders</p>
         </a>
       </li>
       <li class="nav-item">
         <a href="{{route('admin.event.index')}}" class="nav-link  {{active('admin.event.index')}}">
           <i class="far fa-circle nav-icon green"></i>
           <p>Events</p>
         </a>
       </li>
       <li class="nav-item">
         <a href="{{route('admin.news.index')}}" class="nav-link  {{active('admin.news.index')}}">
           <i class="far fa-circle nav-icon green"></i>
           <p>News</p>
         </a>
       </li>

     </ul>
   </li>
  @endhasanyrole


    @hasanyrole('Admin|Webmaster')
        <!-- Location Settings -->
      <li class="nav-item has-treeview {{active(['admin.department.index','admin.staff.index','admin.education.index','admin.skill.index','admin.experience.index','admin.programme.index','admin.short_course.index'])?'menu-open':''}}">

        <a href="#" class="nav-link {{active(['admin.department.index','admin.staff.index','admin.education.index','admin.skill.index','admin.experience.index','admin.programme.index','admin.short_course.index'])}}">
          <i class="nav-icon fa fa-map-marker red"></i>
          <p>
          Department Content
            <i class="right fa fa-angle-left"></i>
          </p>
        </a>

    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{route('admin.department.index')}}" class="nav-link  {{active('admin.department.index')}}">
          <i class="far fa-circle nav-icon green"></i>
          <p>Departments</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route('admin.staff.index')}}" class="nav-link  {{active('admin.staff.index')}}">
          <i class="far fa-circle nav-icon green"></i>
          <p>Staff</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route('admin.education.index')}}" class="nav-link  {{active('admin.education.index')}}">
          <i class="far fa-circle nav-icon green"></i>
          <p>Staff Education</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route('admin.skill.index')}}" class="nav-link  {{active('admin.skill.index')}}">
          <i class="far fa-circle nav-icon green"></i>
          <p>Staff Skills</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route('admin.experience.index')}}" class="nav-link  {{active('admin.experience.index')}}">
          <i class="far fa-circle nav-icon green"></i>
          <p>Staff Experience</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route('admin.programme.index')}}" class="nav-link  {{active('admin.programme.index')}}">
          <i class="far fa-circle nav-icon green"></i>
          <p>Programmes</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route('admin.short_course.index')}}" class="nav-link  {{active('admin.short_course.index')}}">
          <i class="far fa-circle nav-icon green"></i>
          <p>Short Courses</p>
        </a>
      </li>
    </ul>
  </li>

  <li class="nav-item has-treeview {{active(['admin.department.index','admin.staff.index','admin.education.index','admin.skill.index','admin.experience.index','admin.programme.index','admin.short_course.index'])?'menu-open':''}}">

    <a href="#" class="nav-link {{active(['admin.department.index','admin.staff.index','admin.education.index','admin.skill.index','admin.experience.index','admin.programme.index','admin.short_course.index'])}}">
      <i class="nav-icon fa fa-globe green"></i>
      <p>
      Website Visitors
        <i class="right fa fa-angle-left"></i>
      </p>
    </a>

<ul class="nav nav-treeview">
  <li class="nav-item">
    <a href="{{route('website-visitors.today')}}" class="nav-link  {{active('website-visitors.today')}}">
      <i class="far fa-circle nav-icon green"></i>
      <p>Today Visitors</p>
    </a>
  </li>
  <li class="nav-item">
    <a href="{{route('website-visitors.week')}}" class="nav-link  {{active('website-visitors.week')}}">
      <i class="far fa-circle nav-icon green"></i>
      <p>This Week Visitors</p>
    </a>
  </li>
  <li class="nav-item">
    <a href="{{route('website-visitors.month')}}" class="nav-link  {{active('website-visitors.month')}}">
      <i class="far fa-circle nav-icon green"></i>
      <p>This Month Visitors</p>
    </a>
  </li>
  <li class="nav-item">
    <a href="{{route('website-visitors.index')}}" class="nav-link  {{active('website-visitors.index')}}">
      <i class="far fa-circle nav-icon green"></i>
      <p>All Visitors</p>
    </a>
  </li>

</ul>
</li>
  @endhasanyrole
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
