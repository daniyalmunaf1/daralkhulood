 <!-- Sidebar -->
 <ul
        class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled"
        id="accordionSidebar"
        >
        <!-- Sidebar - Brand -->
        <a style="flex-direction:column;height: 87px;"
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="{{route('index')}}"
        >
          <div style="transform:none;" class="sidebar-brand-icon rotate-n-15">
            <img class="V-logo" style="width:75px;" src="{{asset('/storage/'.$user->logodark)}}" alt="">
           
          </div>
          <div style="font-size:11px;" class="sidebar-brand-text mx-3"><span style="display:inline;color:#3f48cc;">Dar Al </span><span style="display:inline;">Khulood</span></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('teamlist')}}">
            <i class="fas fa-fw fa-user-alt"></i>
            <span>Team List</span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('services')}}">
            <i class="fas fa-fw fa-user-alt"></i>
            <span>Services</span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('slider')}}">
            <i class="fas fa-fw fa-user-alt"></i>
            <span>Slider Images</span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('images')}}">
            <i class="fas fa-fw fa-user-alt"></i>
            <span>Images</span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('videos')}}">
            <i class="fas fa-fw fa-user-alt"></i>
            <span>Videos</span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('equipments')}}">
            <i class="fas fa-fw fa-user-alt"></i>
            <span>Equipments</span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('projects')}}">
            <i class="fas fa-fw fa-user-alt"></i>
            <span>Projects</span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('reviews')}}">
            <i class="fas fa-fw fa-user-alt"></i>
            <span>Reviews</span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('subscriptions')}}">
            <i class="fas fa-fw fa-user-alt"></i>
            <span>Subscriptions</span></a
          >
        </li>
        
   
                <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>
      <!-- End of Sidebar -->