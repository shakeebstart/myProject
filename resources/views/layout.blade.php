<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    {{-- @yield('content') --}}
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Poppins|Raleway:400,600|Righteous&display=swap') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />

    {{-- <title>Newsoft</title> --}}
    {{-- @include('header') --}}
    <!-- slider stylesheet -->
    {{-- @include('slider') --}}
    <!-- end slider section -->
    </div>

    <!-- about section -->
    @yield('content')
    <!-- end about section -->

    <!-- who section -->

    <!-- end who section -->

    <!-- feature section  -->

    <!-- end feature section -->

    <!-- contact section -->
    {{-- @include('manage_contact') --}}
    @include('contact')


    <!-- end contact section -->
    @section('container')
        <!-- info section -->
        <section class="info_section layout_padding">
            <div class="container info_content">
                <div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="d-flex">
                                <h5>
                                    New software
                                </h5>
                            </div>
                            <div class="d-flex ">
                                <ul>
                                    <li>
                                        <a href="aboutus">
                                            About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="aboutservice">
                                            About services
                                        </a>
                                    </li>
                                    <li>
                                        <a href="aboutdepartment">
                                            About Departments
                                        </a>
                                    </li>
                                    <li>
                                        <a href="services">
                                            Services
                                        </a>
                                    </li>
                                    <li>
                                        
                                        <a href="contactus">
                                            Contact Us
                                        </a>
                                    </li>
                                </ul>
                               
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="d-flex flex-column flex-lg-row justify-content-between align-items-center align-items-lg-baseline">
                    <div class="social-box">
                        <a href="">
                            <img src="{{ asset('images/fb.png') }}" alt="" />
                        </a>

                        <a href="">
                            <img src="{{ asset('images/twitter.png') }}" alt="" />
                        </a>
                        <a href="">
                            <img src="{{ asset('images/linkedin1.png') }}" alt="" />
                        </a>
                        <a href="{{ url('https://www.instagram.com/') }}">
                            <img src="{{ asset('images/instagram1.png') }}" alt="" />
                        </a>
                    </div>
                    <div class="form_container mt-5">
                        <form action="">
                            <label for="subscribeMail">
                                Newsletter
                            </label>
                            <input type="email" placeholder="Enter Your email" id="subscribeMail" />
                            <button type="submit">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- end info section -->

        <!-- footer section -->
        @include('footer')
        <!-- footer section -->

        <script type="{{ asset('text/javascript') }}" src="{{ url('js/jquery-3.4.1.min.js') }}"></script>
        <script type="{{ asset('text/javascript') }}" src="{{ url('js/bootstrap.js') }}"></script>

        <script>
            function openNav() {
                document.getElementById("myNav").classList.toggle("menu_width");
                document
                    .querySelector(".custom_menu-btn")
                    .classList.toggle("menu_btn-style");
            }
        </script>
        </body>

    </html>
