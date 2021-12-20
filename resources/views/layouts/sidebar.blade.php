<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
            <span data-feather="file-text"></span>
            My Post
          </a>
        </li>     --}}
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/notaris*') ? 'active' : '' }}" href="/dashboard/notaris">
            <span data-feather="file-text"></span>
            Data Notaris
          </a>
        </li>    
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/klien*') ? 'active' : '' }}" href="/dashboard/klien">
            <span data-feather="file-text"></span>
            Data Klien
          </a>
        </li>    
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/booking*') ? 'active' : '' }}" href="/dashboard/booking">
            <span data-feather="file-text"></span>
            Data Booking
          </a>
        </li>    
      </ul>
    </div>
  </nav>