<style type="text/css">
  .dropdown-menu-lg {
    max-width: 250px;
    min-width: 165px;
    padding: 0;
}
</style>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
    
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>


      <!-- Notifications Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

      @php
         $id = Auth::user()->id;
         $admindata = App\Models\User::find($id); 
      @endphp

      <li class="nav-item dropdown">
        <a class="nav-link d-flex" data-toggle="dropdown" href="#" aria-expanded="false">
          <div class="image">
            <img src="{{ (!empty($admindata->profile_image)) ? $admindata->profile_image : url('upload/no-image.jpg') }}" style="width: 25px!important" class="img-circle elevation-2" alt="User Image">
          </div>
          <p class="ml-2">{{ $admindata->username }}</p>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">

          <a href="{{ route('admin.profile') }}" class="dropdown-item">
            <i class="fas fa-user mr-2"></i> Profile
          </a>

          <a href="{{ route('change.password') }}" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> Change Password
          </a>

          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> Account
          </a>

          <a href="{{ route('admin.logout') }}" class="dropdown-item dropdown-footer">Logout</a>
        </div>
      </li>

    </ul>
  </nav>