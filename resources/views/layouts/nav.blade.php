{{-- <nav>
<div class="container-fluid">
    <a class="navbar-brand" href="{{url('/')}}">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            @guest
            @else
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('destinasi.index')}}">Destinasi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('kategori.index')}}">Kategori</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('review.index')}}">Review</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('lokasi.index')}}">Lokasi</a>
            </li>
            @endguest

        </ul>
        @guest
        <div class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('login')}}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('register')}}">Register</a>
                </li>
            </ul>
        </div>
        @else
        <div class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-disabled="true">{{Auth::user()->name}}</a>
                </li>
            </ul>
            <button class="btn btn-sm btn-outline-warning" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                Logout
            </button>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
        @endguest

    </div>
</div>
</nav> --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    @guest
    <li class="nav-item">
        <a class="nav-link" href="{{url('login')}}">Login</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('register')}}">Register</a>
    </li>
    @else
    <a class="navbar-brand" href="">{{ Auth::user()->name }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('kategori.index')}}">Kategori <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{route('destinasi.index')}}">destinasi <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{route('lokasi.index')}}">lokasi <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{route('review.index')}}">review <span class="sr-only">(current)</span></a>
        </li>
          <form class="form-inline my-2 my-lg-0" id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          <button class="btn btn-sm btn-outline-warning" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                Logout
            </button>
            @csrf
        </form>
    @endguest
      </ul>

    </div>
  </nav>
