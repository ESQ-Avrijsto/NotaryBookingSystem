<nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="/">Notary Booking System</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "home") ? 'active' : '' }}"  href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ ($active === "/dashboard/post") ? 'active' : '' }}" href="/dashboard/post/">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ ($active === "/dashboard/notaris") ? 'active' : '' }}" href="/dashboard/notaris/">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ ($active === "/dashboard/klien") ? 'active' : '' }}" href="/dashboard/klien/">FAQs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ ($active === "/dashboard/booking") ? 'active' : '' }}" href="/dashboard/booking/">Appointment</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link  {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Categories</a>
          </li> --}}
        </ul>

    <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, 
            {{-- {{ auth()->user()->name }} --}}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i>My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Logout</button>
              </form>
            </li>
          </ul>
        </li>
        @else
          <li class="nav-item">
            <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}"><i class="bi bi-box-arrow-right"></i> Login</a>
          </li>
          @endauth
        </ul> 


        
      </div>
    </div>
  </nav>