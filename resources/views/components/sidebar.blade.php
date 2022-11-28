<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ url('dashboard') }}"><i class="fas fa-tv"></i> <span>Dashboard</span></a>
            </li>
            <li class="menu-header">Pengelolaan Barang</li>
            <li class="nav-item dropdown ">
                <a href="#"
                    class="nav-link has-dropdown"
                    data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Bahan Baku</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('bahanbaku-masuk') ? 'active' : '' }}">
                        <a class="nav-link"href="{{ url('bahanbaku-masuk') }}"><i class="fas fa-sign-in-alt"></i><span>Masuk</span></a>
                    </li>
                    <li class="{{ Request::is('bahanbaku-aktual') ? 'active' : '' }}">
                        <a class="nav-link"href="{{ url('bahanbaku-aktual') }}"><i class="fas fa-check"></i><span>Aktual</span></a>
                    </li>
                    <li class="{{ Request::is('bahanbaku-keluar') ? 'active' : '' }}">
                        <a class="nav-link"href="{{ url('bahanbaku-keluar') }}"><i class="fas fa-sign-out-alt"></i><span>Keluar</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
