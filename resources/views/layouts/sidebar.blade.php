
    <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/home')}}">
        <div class="sidebar-brand-icon rotate-n-0">
          <img src="{{ asset("img/logoside.png") }}" width="70px">
       </div>
        <div class="sidebar-brand-text mx-1">Pengelolaan <br/>Companies</div>

      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <div class="sidebar-wrapper">
        <ul class="Nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/home')}}">
          <i class="fas fa-home"></i>
          <span >Dashboard</span></a>
        </li>
        <!-- Divider -->

        <!-- Nav Item - Pages Collapse Menu -->


        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-user"></i>
            <span>Companies</span>
          </a>
          <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{url('/companies')}}">Companies</a>
              @if(Auth::user()->role == 'administrator' || Auth::user()->role == 'kepsek')
              <a class="collapse-item" href="{{url('/employees')}}">Employees</a>
              @endif
            </div>
          </div>
        </li>



        </ul>
        </div>

        <!-- Nav Item - Charts -->


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
              <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

          </ul>
