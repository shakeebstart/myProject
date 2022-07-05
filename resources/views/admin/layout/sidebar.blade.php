<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{ asset('admin/images/icon/logo.png') }}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="dashboard">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                  
                <li>
                    <a href="{{url('/category') }}">
                        <i class="fas fa-chart-bar"></i>category</a>
                </li>
                <li>
                    <a href="{{ url('/address') }}">
                        <i class="fas fa-table"></i>Address</a>
                </li>
                <li>
                    <a href="{{ url('coupon') }}">
                        <i class="far fa-check-square"></i>Coupon
                    </a>
                </li>
                <li>
                    <a href="{{ url('slider') }}">
                        <i class="far fa-check-square"></i>slider
                    </a>
                </li>   
                  <li>
                    <a href="{{ url('works') }}">
                        <i class="far fa-check-square"></i>works
                    </a>
                </li>
                <li>
                    <a href="{{ url('specification') }}">
                        <i class="far fa-check-square"></i>Specification
                    </a>
                </li> 
                <li>
                    <a href="{{ url('features') }}">
                        <i class="far fa-check-square"></i>Features
                    </a>
                </li>    
                  <li>
                    <a href="{{ url('getintouch') }}">
                        <i class="far fa-check-square"></i>Get in touch
                    </a>
                </li>    
                <li>
                    <a href="{{ url('trash') }}">
                        <i class="far fa-check-square"></i>Trash
                    </a>
                </li> 
                <li>
                    <a href="{{ url('works_bin') }}">
                        <i class="far fa-check-square"></i>Works Bin
                    </a>
                </li>    
                <li>
                    <a href="{{ url('change_password') }}">
                        <i class="far fa-check-square"></i>Change password 
                    </a>
                </li>    
                <li>
                    <a href="{{ url('proudcts') }}">
                        <i class="far fa-check-square"></i>Products 
                    </a>
                </li> 
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>