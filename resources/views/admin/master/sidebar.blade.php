      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-close">
            <a href="{{url('admin/dashboard')}}" class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
        
          </li>
       
         


          <li class="nav-item">
            <a href="{{route('portfolio.index')}}" class="nav-link {{ Request::is('admin/portfolio') ? 'active' : '' }}{{ Request::is('admin/portfolio/create') ? 'active' : '' }}">
              <i class="fas fa-school mr-3"></i>
              <p>
                Portfolio
              </p>
            </a>
       
          </li>

          <li class="nav-item">
            <a href="{{route('testimonial.index')}}" class="nav-link {{ Request::is('admin/testimonial') ? 'active' : '' }}{{ Request::is('admin/testimonial/create') ? 'active' : '' }}">
              <i class="fa fa-quote-left mr-3"></i>
              <p>
                Testimonial
              </p>
            </a>
       
          </li>

          <li class="nav-item">
            <a href="{{route('service.index')}}" class="nav-link {{ Request::is('admin/service') ? 'active' : '' }}{{ Request::is('admin/service/create') ? 'active' : '' }}">
              <i class="fa fa-archive mr-3"></i>
              <p>
                Service
              </p>
            </a>
       
          </li>


          <li class="nav-item">
            <a href="{{route('company.index')}}" class="nav-link {{ Request::is('admin/company') ? 'active' : '' }}{{ Request::is('admin/company/create') ? 'active' : '' }}">
              <i class="fas fa-address-card mr-3"></i>
              <p>
                Company
              </p>
            </a>
       
          </li>



          <li class="nav-item">
            <a href="{{route('admin_contact')}}" class="nav-link {{ Request::is('admin/contact') ? 'active' : '' }}">
              <i class="fas fa-envelope mr-3"></i>
              <p>
                Contact Message
              </p>
            </a>
       
          </li>


          


         

          

          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="fas fa-user-cog mr-3"></i>
              <p>
                Profile
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">

              {{-- <li class="nav-item">
                <a href="" class="nav-link">
                <i class="fas fa-cog mr-2"></i>
                  <p>Setting</p>
                </a>
              </li> --}}
              <li class="nav-item">
                <a href="{{route('logout')}}" class="nav-link">
                  <i class="fas fa-sign-out-alt ml-2 mr-2"></i>
                  <p>Logout</p>
                </a>
              </li>
        
              
        
             
            </ul>
          </li>


     
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>