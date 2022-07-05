@extends('layout')
@section('content')
    
  <body>
  <div class="hero_area">
  <!-- header section strats -->
  @include('header')
  </div></body>
 <h2> What is Laravel Eloquent?</h2>
The PHP Laravel framework is packaged with the Eloquent Object Relational Mapper (ORM), which provides an extremely easy way to communicate with a database. As developers need to create complex websites and other applications, they prefer a hassle-free and shorter development time. Laravel helps make development faster and provides an adequate solution to most problems encountered. Varying business requirements are addressed with faster development, as well as well-organized, reusable, maintainable and scalable code. It works with custom web applications as it can cater to multiple databases and perform common database operations.

<h3>How does Eloquent work?</h3>
Developers can work in Eloquent with multiple databases efficiently using an ActiveMethod implementation. It is an architectural pattern where the model created in the Model-View-Controller (MVC) structure corresponds to a table in the database. The advantage is for models to perform common database operations without coding lengthy SQL queries. Models allow data querying in your tables, as well as inserting new records into tables. The process of synchronizing multiple databases running on different systems is simplified. There is no need to write SQL queries at all. All you have to do is to define database tables and relations between them, and Eloquent will do the rest of the job.

Laravel setup
@include('footer')
<!-- footer section -->
                 </


              
</body>

</html>
@endsection
