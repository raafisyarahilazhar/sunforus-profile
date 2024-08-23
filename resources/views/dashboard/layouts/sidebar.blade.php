<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
          <span data-feather="home"></span>
            Dashboard
          </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/quote') ? 'active' : '' }}" href="/dashboard/quote">
            <span data-feather="file"></span>
            Quotes
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/project') ? 'active' : '' }}" href="/dashboard/project">
          <span data-feather="shopping-cart"></span>
          Projects
        </a>
      </li>
    </ul>
  </div>
</nav>