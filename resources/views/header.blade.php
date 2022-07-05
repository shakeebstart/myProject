<header class="{{ asset('header_section') }}">
    <div class="{{ asset('container-fluid') }}">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.html'">
          <span>
            Newsoft
          </span>
        </a>

        <div class="navbar-collapse" id="">
          <div
            class="d-none d-lg-flex ml-auto flex-column flex-lg-row align-items-center mt-3"
          >
            <form class="form-inline mb-3 mb-lg-0 ">
              <button
                class="btn  my-sm-0 nav_search-btn"
                type="submit"
              ></button>
            </form>
            <ul class="navbar-nav  mr-5">
              <li class="nav-item mr-5">
                <a class="nav-link" href="{{ url('login') }}">
                  <span>Login</span>
                </a>
              </li>
            </ul>
          </div>

          <div class="custom_menu-btn">
            <button onclick="openNav()">
              <span class="{{ asset('s-1') }}"> </span>
              <span class="{{ asset('s-2') }}"> </span>
              <span class="{{ asset('s-3') }}"> </span>
            </button>
          </div>
          <div id="myNav" class="overlay">
            <div class="overlay-content">
              <a href="{{ url('/') }}">Home</a>
              <a href="{{url ('/about') }}">About</a>
              <a href="feature.html">Features</a>
              <a href="{{ url('contactus') }}">Contact Us</a>
              <a href="{{ url('createaccount') }}">Create account</a>
              <a href="{{ url('seller_login') }}"> Seller login</a>
              {{-- <a href="{{ url('') }}"> Seller login</a> --}}
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>