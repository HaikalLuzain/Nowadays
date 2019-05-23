<?php 
  $route = Route::currentRouteName();
?>

<div class="main-sidebar sidebar-style-2 shadow">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="dashboard-ecommerce.html">Nowadays</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="dashboard-ecommerce.html">NW</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="{{ ($route == 'dashboard') ? 'active' : '' }}"><a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>

      <li class="{{ ($route == 'dashboard.full') ? 'active' : '' }}"><a class="nav-link" href="{{ route('dashboard.full') }}"><i class="fas fa-tv"></i> <span>Full-tv Dashboard</span></a></li>

      <li class="menu-header">Content</li>
      <li class="{{ ($route == 'admin') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin') }}"><i class="far fa-user"></i> <span>Admin</span></a></li>

      <li class="{{ ($route == 'g-user') ? 'active' : '' }}"><a class="nav-link" href="{{ route('g-user') }}"><i class="fab fa-google"></i> <span>Gmail User</span></a></li>
      
      <li class="dropdown {{ ($route == 'today.list' || $route == 'today.date') ? 'active' : '' }}">
        <a href="#" class="nav-link has-dropdown"><i class="far fa-square"></i> <span>Today</span></a>
        <ul class="dropdown-menu">
          <li class="{{ ($route == 'today.list') ? 'active' : '' }}"><a class="nav-link" href="{{ route('today.list') }}">List</a></li>
          <li class="{{ ($route == 'today.date') ? 'active' : '' }}"><a class="nav-link" href="{{ route('today.date') }}">By date</a></li>
        </ul>
      </li>

      <li class="{{ ($route == 'event.calendar') ? 'active' : '' }}"><a class="nav-link" href="{{ route('event.calendar') }}"><i class="far fa-calendar-alt"></i> <span>Event Calendar</span></a></li>

      <li class="{{ ($route == 'thumbnail.index' || $route == 'thumbnail.create' || $route == 'thumbnail.edit' || $route == 'thumbnail.active' || $route == 'thumbnail.inactive') ? 'active' : '' }}"><a class="nav-link" href="{{ route('thumbnail.index') }}"><i class="far fa-image"></i> <span>Thumbnail</span></a></li>
      
    </ul>
  </aside>
</div>