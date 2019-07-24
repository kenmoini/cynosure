<div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="{{ route('admin.dashboard') }}" class="simple-text logo-mini">
          C
        </a>
        <a href="{{ route('admin.dashboard') }}" class="simple-text logo-normal">
          Cynosure
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="clusterSwitcher">
            <div class="btn-group dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cluster > (None)
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#"><strong>+</strong> Add/Create Cluster</a>
                    <div class="dropdown-divider"></div>
                </div>
            </div>
          </li>
          <li class="namespaceSwitcher">
            <div class="btn-group dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Namespace > (None)
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#"><strong>+</strong> Create Namespace</a>
                    <div class="dropdown-divider"></div>
                </div>
            </div>
          </li>
          <li class="active ">
            <a href="{{ route('admin.dashboard') }}">
              <i class="fa fa-paper-plane"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="{{ route('admin.dashboard') }}">
              <i class="fa fa-boxes"></i>
              <p>Applications</p>
            </a>
          </li>
          <li>
            <a href="{{ route('admin.dashboard') }}">
              <i class="fa fa-network-wired"></i>
              <p>Networking</p>
            </a>
          </li>
          <li>
            <a href="{{ route('admin.dashboard') }}">
              <i class="fa fa-hdd"></i>
              <p>Storage</p>
            </a>
          </li>
          <li>
            <a href="{{ route('admin.dashboard') }}">
              <i class="fa fa-layer-group"></i>
              <p>Resources</p>
            </a>
          </li>
          <li>
            <a href="{{ route('admin.compass.panel') }}">
              <i class="fa fa-compass"></i>
              <p>Compass - Helm Ops</p>
            </a>
          </li>
          <li>
            <a href="{{ route('admin.cynosure.configuration') }}">
              <i class="fa fa-wrench"></i>
              <p>Cynosure Configuration</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <!-- lol...search...funny...
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            -->
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Pulse</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->