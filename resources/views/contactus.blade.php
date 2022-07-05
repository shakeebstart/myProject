@extends('layout')
@section('content')
    
  
  <body>
  <div class="hero_area">
  <!-- header section strats -->
  @include('header')
  </div></body>
  <div class="content">
    <h1 class="title">Contact Us</h1>
    <div class="row">
    <div id="needhelp" class="col">
    <div class="icon"></div>
    <h2 class="subtitle">By Phone</h2>
    <p class="desc">
    <small>(Monday to Friday, 9am to 4pm PST)</small>
    <br>
    North America Toll-Free:<br>
    1-877-930-7483
    <br><br>
    International:<br>
    1-604-637-0780
    </p>
    </div>
    <div id="start-case" class="col">
    <div class="icon newcase"></div>
    <h2 class="subtitle">Start a new case</h2>
    <p class="desc">
    Just send us your questions or concerns by starting
    a new case and we will give you the help you need.
    </p><div class="button">
    <a href="https://www.website.com/case-tracker/new-case/">Start Here</a>
    </div>
    <p></p>
    
    </div>
    <div id="livechat" class="col">
    <div class="icon"></div>
    <h2 class="subtitle">Live Chat</h2>
    <p class="desc">
    Chat with a member of our in-house team.
    </p><div class="button">
    <a href="javscript:void(0)" class="liveChatApp" title="Start Chat">Start Chat</a>
    </div>
    <p></p>
    </div>
    </div>
    <div style="width: 90%; max-width:1000px; margin: 0 auto; border: 2px solid red; padding:0.5rem; border-radius:4px; font-size: 16px; font-weight: 700;">
    Due to COVID-19, we have a reduced number of support staff.
    <br><br>
    For support, please click the "Start Here" button to submit a support ticket and we will get back to you as soon as possible.
    <br><br>
    We apologize for the inconvenience and appreciate your patience as we make every effort to continue serving our customers.
    </div>
    </div>
    @include('footer')
  <!-- footer section -->
                   </
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
@endsection
