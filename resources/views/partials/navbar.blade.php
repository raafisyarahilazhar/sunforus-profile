<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="/">
          {{-- <img src="{{ 'img/sunforus.png' }}" alt="" width="40" height="50"> --}}
          Sunforus
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ ( $title === "Home" ) ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ( $title === "Project" ) ? 'active' : '' }}" href="/project">Our Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ( $title === "Quotes" ) ? 'active' : '' }}" href="/quotes">Quotes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ( $title === "Information" ) ? 'active' : '' }}" href="/information">Information</a>
            </li>
              @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome, {{ auth()->user()->name }}
                </a>

                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  @can('admin')
                  <li>
                    <a class="dropdown-item" href="/dashboard">
                      <i class="bi bi-journal-bookmark"></i>
                      Dashboard
                    </a>
                  </li>
                  <li><hr class="dropdown-divider"></li>
                  @endcan
                  
                  <li>
                    <form action="/logout" method="post">
                      @csrf
                      <button class="dropdown-item" type="submit">
                        <i class="bi bi-box-arrow-in-left"></i>
                        logout
                      </button>
                    </form>
                  </li>
                </ul>
              </li>
              @else
              <li class="nav-item">
                <a class="nav-link {{ ( $title === "login" ) ? 'active' : '' }}" href="/login">
                  <i class="bi bi-box-arrow-in-right"></i>
                  login
                </a>
              </li>
              @endauth
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->