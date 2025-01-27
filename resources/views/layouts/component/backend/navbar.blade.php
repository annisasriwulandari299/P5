<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <div class="navbar-toggle d-inline">
          <button type="button" class="navbar-toggler">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
          </button>
        </div>
      </div>
      @guest
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="{{ url('login') }}" target="_blank" class="nav-link"><i class="nc-icon nc-book-bookmark"></i> Login</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('register') }}" target="_blank" class="btn btn-danger btn-round">Register</a>
          </li>
        </ul>
      </div>
      @else
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
      </button>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ml-auto">
          <li class="search-bar input-group">
            <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split" ></i>
              <span class="d-lg-none d-md-block">Search</span>
            </button>
          </li>
          <li class="dropdown nav-item">
            <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <div class="notification d-none d-lg-block d-xl-block"></div>
              <i class="tim-icons icon-sound-wave"></i>
              <p class="d-lg-none">
                Notifications
              </p>
            </a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
              <li class="nav-link"><a href="#" class="nav-item dropdown-item">Mike John responded to your email</a></li>
              <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">You have 5 more tasks</a></li>
              <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Your friend Michael is in town</a></li>
              <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Another notification</a></li>
              <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Another one</a></li>
            </ul>
          </li>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <div class="photo">
                <img src="../assets/img/anime3.png" alt="Profile Photo">
              </div>
              <b class="caret d-none d-lg-block d-xl-block"></b>
              <p class="d-lg-none">
                Log out
              </p>
            </a>
            <ul class="dropdown-menu dropdown-navbar">
              <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">{{ Auth::user()->name }}</a></li>
              <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Settings</a></li>
              <li class="dropdown-divider"></li>
              <li class="nav-link">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <form action="{{ route('logout') }}" method="post" id="logout-form">
                @csrf
                <p class="nav-item dropdown-item">Logout</p>
                </form>
            </a>
              </li>
            </ul>
          </li>
          <li class="separator d-lg-none"></li>
        </ul>
      </div>
    </div>
    @endguest
  </nav>
