<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="../../index3.html" class="brand-link">
    <img src="{{ asset('backend/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('backend/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
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
      </div><div class="sidebar-search-results"><div class="list-group"><a href="#" class="list-group-item"><div class="search-title"><strong class="text-light"></strong>N<strong class="text-light"></strong>o<strong class="text-light"></strong> <strong class="text-light"></strong>e<strong class="text-light"></strong>l<strong class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong></div><div class="search-path"></div></a></div></div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <div class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        
        </li>

        <!--All Slider Start-->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-images"></i>
            <p>
             Home Slider Setup
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
         
            <li class="nav-item">
              <a href="{{ route('home.slide') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Home Slide</p>
              </a>
            </li>
          </ul>
        </li>
           <!--All Slider end-->

           <!--All about start-->
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-exclamation-circle"></i>
              <p>
               About Page Setup
               <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
           
              <li class="nav-item">
                <a href="{{ route('about.page') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About page</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('about.multi.image') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Multi Image</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('all.multi.image') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Multi Image</p>
                </a>
              </li>
              
            </ul>
          </li>
           <!--All about end-->

<!--Portfolio Start-->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-briefcase"></i>
            <p>
              Portfolio
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('all.portfolio') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All Portfolio</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('add.portfolio') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Portfolio</p>
              </a>
            </li>

    

          </ul>
        </li>
        <!--Portfolio End-->

        <!--All Blog Category start-->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-th-list"></i>
            <p>
             Blog Category Setup
             <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
         
            <li class="nav-item">
              <a href="{{ route('all.blog.category') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All Blog Category page</p>
              </a>
            </li> 
            
            <li class="nav-item">
              <a href="{{ route('add.blog.category') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Blog Category page</p>
              </a>
            </li> 
            

          </ul>
        </li>
         <!--All Blog Category end-->

              <!--All Blog Category start-->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-blog"></i>
            <p>
             Blog Setup
             <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
         
            <li class="nav-item">
              <a href="{{ route('all.blog') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All Blog page</p>
              </a>
            </li> 
            
            <li class="nav-item">
              <a href="{{ route('add.blog') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Blog Category page</p>
              </a>
            </li> 
            

          </ul>
        </li>
         <!--All Blog Category end-->

          <!--Message Section Start-->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-envelope-square"></i>
              <p>
               Message Setup
               <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
           
              <li class="nav-item">
                <a href="{{ route('message.all') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Message</p>
                </a>
              </li> 
            </ul>
          </li>
           <!--Message Section End-->

         <!--Footer Section Start-->
         <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fa fa-paw" aria-hidden="true"></i>
            <p>
             Footer Setup
             <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
         
            <li class="nav-item">
              <a href="{{ route('all.footer') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All Footer page</p>
              </a>
            </li> 
          </ul>
        </li>
         <!--Footer Section End-->



      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>