<div class="sidebar">

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item menu-open">
        <a href="{{ route('admin_home') }}" class="nav-link active bg-orange">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
      <li class="nav-header">Menus</li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-bars"></i>
          <p>
            Menu 1
          </p>
        </a>
      </li>
      <li class="nav-header">Menu</li>
      <li class="nav-item">
        <a href="" class="nav-link">
          <i class="nav-icon fas fa-newspaper"></i>
          <p>
            News
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('admin_category_show') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Category</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin_sub_category_show') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Sub Category</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin_post_show') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Posts</p>
            </a>
          </li>
        </ul>
      </li>
      {{-- <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-ad"></i>
          <p>
            Advertisements
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('admin_top_ad_show') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Top Advertisement</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin_home_ad_show') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Home Advertisement</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin_sidebar_ad_show') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Sidebar Advertisement</p>
            </a>
          </li>
        </ul>
      </li> --}}
      <li class="nav-header">Settings</li>
      <li class="nav-item">
        <a href="{{ route('admin_profile') }}" class="nav-link">
          <i class="nav-icon fa fa-user"></i>
          <p>
            Account
          </p>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fa fa-globe"></i>
          <p>
            Website
          </p>
        </a>
      </li> --}}
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>