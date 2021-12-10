@php
    function isActive($uri) {
        return Request::getRequestUri() == $uri ? 'active' : '';
    }

    function controllerActive($name) {
        return Request::segment(1) == $name ? 'active' : '';
    }
@endphp

<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">{{config('app.name')}}</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          </li>
          <li class="menu-header">Menu</li>
          <li class="nav-item dropdown {{controllerActive('konfigurasi')}}">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Konfigurasi</span></a>
            <ul class="dropdown-menu">
                <li class="{{isActive('/konfigurasi/setup')}}">
                  <a class="nav-link" href="{{route('setup.index')}}">Setup Aplikasi</a>
                </li>
                <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
                <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Master Data</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
              <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
            </ul>
          </li>
          <li class="{{controllerActive('crud')}}"><a class="nav-link" href="{{ route('cr') }}"><i class="fa fa-briefcase"></i> <span>Crud</span></a></li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
          <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Documentation
          </a>
        </div>
    </aside>
  </div>

