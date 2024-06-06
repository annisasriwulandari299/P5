<div class="sidebar-wrapper">
    <div class="logo text-center">
        <a href="javascript:void(0)" class="simple-text logo-normal">
            Wisata
        </a>
    </div>
    <ul class="nav">
        <li>
            <a href="{{ route('home') }}">
                <i class="tim-icons icon-chart-pie-36"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li>
            <a href="{{ route('kategori.index') }}">
                <i class="tim-icons icon-atom"></i>
                <p>Kategori</p>
            </a>
        </li>
        <li>
            <a href="{{ route('lokasi.index') }}">
                <i class="tim-icons icon-pin"></i>
                <p>Lokasi</p>
            </a>
        </li>
        <li>
            <a href="{{ route('destinasi.index') }}">
                <i class="tim-icons icon-bell-55"></i>
                <p>Destinasi</p>
            </a>
        </li>
        <li class="active-pro">
            <a href="{{ route('logout') }}">
                <i class="tim-icons icon-spaceship"></i>
                <p>Logout</p>
            </a>
        </li>
    </ul>
</div>
