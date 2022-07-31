<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{asset('layout/dist/img/investree.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Invest Blog</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('layout/dist/img/user2.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          @auth
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
          @endauth

          @guest
          <a href="#" class="d-block">Anda Belum Login</a>
          @endguest
          
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>

            @auth
            <li class="nav-item">
              <a href="/categories" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Categories
                </p>
              </a>
            </li>
            @endauth
            
          <li class="nav-item">
            <a href="/articles" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Articles
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>

        {{--Login--}}
        @guest
        <li class="nav-item bg-primary">
          <a href="/login" class="nav-link d-flex justify-content-center">
            <p>
              Login
            </p>
          </a>
        </li>
        @endguest
        
        <li class="nav-item">
          <a href="#" class="d-flex justify-content-center">
           <p>
            
           </p>
          </a>
        </li>

        {{--Logout--}}
        @auth
          <li class="nav-item bg-danger">
            <a class="nav-link d-flex justify-content-center" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
        @endauth
      </ul>  
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>