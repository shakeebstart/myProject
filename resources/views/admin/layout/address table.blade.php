@extends('admin.layout.master')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-1">
                   
                            </div>
                        </div>
                    </div>
                </div>
            {{-- </div> --}}
            {{-- <div class="row">
      
                <div class="col-lg-0">
                    <!-- TOP CAMPAIGN-->
                    <div class="top-campaign">
         
                        <div class="table-responsive">
                            <table class="table table-top-campaign">
                              
                            </table>
                        </div>
                    </div>
                    <!--  END TOP CAMPAIGN-->
                </div>
            </div> --}}
            <div class="row">
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    <h3 class="title-5 m-b-35"> Address</h3>
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <div class="rs-select2--light rs-select2--md">
                                
                                <div class="dropDownSelect2"></div>
                            </div>
                           
                        <div class="table-data__tool-right">
                            <a href="manage_address">
                            <button class="au-btn au-btn-icon au-btn--green au-btn--small" type="button">
                                add address</button>
                            </a>
                            <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                             
                                <div class="dropDownSelect2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                    
                                    <th>id</th>
                                    <th> name</th>
                                    <th> address</th>
                                    <th>place</th>
                                    <th>pin</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                
                              @foreach ($data as $list)
                              
                                <tr>
                                  
                                    <td>{{ $list->id }}</td>
                                    <td>
                                        {{ $list->name }}  
                                    </td>
                                    <td class="desc">{{ $list->address }}</td>
                                    <td>{{ $list->place }}</td>
                                    <td>{{ $list->pin }}</td>
                                        <a href="delete/{{ $list->id }}"><button class="btn btn-danger" type="submit">Delete</button></a>
                                        <a href="edit/{{ $list->id }}"><input class="btn btn-info" type="button" value="Edit"></a>
                                        
                                </tr>
                            @endforeach
                             
                                
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE -->
                </div>
            </div>
            <div class="row m-t-30">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                 
                    <!-- END DATA TABLE-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright ?? 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection