@extends('admin.layout.master')
@section('content')
    <!DOCTYPE html>
    <html lang="en">




    </head>

    <body class="animsition">
        <div class="page-wrapper">
            <!-- HEADER MOBILE-->





            <!-- END USER DATA-->


            <td>
                <div class="table-data-feature">
                    <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                        <i class="zmdi zmdi-mail-send"></i>
                    </button>
                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">

                        <!-- END DATA TABLE -->
                </div>
        </div>
        <div class="row m-t-30">
            <div class="col-md-12">
                <!-- DATA TABLE-->
                <div class="table-responsive m-b-40">
                    
<a href="">
    <button class="au-btn au-btn-icon au-btn--green au-btn--small" type="button">
        add features</button></a>
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                <th>nqame</th>
                                <th>email</th>
                                <th>number</th>
                                <th>message</th>
                           
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                
                            
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->number }}</td>
                                <td>{{ $item->message }}</td>
                              
                            </tr>
                         
                          
                            
                        </tbody>
                        @endforeach
                    </table>
                </div>
                <!-- END DATA TABLE-->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a
                            href="https://colorlib.com">Colorlib</a>.</p>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>

        </div>

    

        <!-- Main JS-->
        <script src="js/main.js"></script>

    </body>

    </html>
    <!-- end document-->
@endsection
