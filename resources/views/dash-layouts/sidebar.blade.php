<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        {{--<img src="{{ asset('dist/img/'.auth()->user()->getLoggedInChurchLogo()) }}" alt="User Image" class="iimg-circle elevation-2" style="border-radius:100%; width:55px;height:60px;">--}}
          {{--<img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">--}}
        </div>
        <div class="info">
         {{-- <a href="#" class="d-block">{{ auth()->user()->name }}</a>--}}
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-envelope"></i>
              <p>
                Messages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" @if(\Request::route()->getName() == "")class="active" @endif>
              <li class="nav-item">
                <a href="/unread-messages" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Unread Messages</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/read-messages" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read Messages</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/all-messages" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Messages</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview" @if(\Request::route()->getName() == "Change Password")class="active" @endif>
            <a href="/change-passwords" class="nav-link">
              <i class="nav-icon fa fa-lock"></i>
              <p>
                Change Password 
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>