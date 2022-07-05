<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Newsoft</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />

    <!-- fonts style -->
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Poppins|Raleway:400,600|Righteous&display=swap') }}"
        rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('header')
        <!-- end header section -->



        <section class=" slider_section position-relative">
            <div class="container">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                       {{-- {{ dd($result);}} --}}
                        @foreach ($result as $key => $list)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">

                                <div class="slider_item-box">

                                    <div class="slider_item-container">


                                        <div class="slider_item-detail">
                                            <h1>
                                                {{ $list->name }} 
                                            </h1>
                                            <p>
                                                {{ $list->description }}

                                            </p>

                                        </div>
                                        <div class="slider_item-imgbox">
                                            <img src="{{ asset('public/images/' . $list->image) }}"width="140px" height="350px" alt="" />

                                        </div>
                                    </div>


                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="sr-only">Next</span>
            </a>
        </section>
    </div>
</body>

<script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
{{-- <style>
  .slider_item-imgbox{
    height: 400px;
  }
  </style> --}}
