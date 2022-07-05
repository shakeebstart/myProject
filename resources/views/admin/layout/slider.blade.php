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
            
            <div class="row">
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    <h3 class="title-5 m-b-35"> slider</h3>
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <div class="rs-select2--light rs-select2--md">
                                
                                <div class="dropDownSelect2"></div>
                            </div>
                           
                        <div class="table-data__tool-right">
                            <a href="manage_slider">
                            <button class="au-btn au-btn-icon au-btn--green au-btn--small" type="button">
                                add works</button>
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
                                    
                                    <th>name</th>
                                    <th> description</th>
                                    <th>image</th>
                                    <th>action</th>
                                    
                                   
                                </tr>
                            </thead>
                            <tbody>
                                
                     @foreach ($data as $list)

                              
                                <tr>
                                  
                                    <td>{{ $list->name }}</td>
                                    <td>
                                        {{ $list->description }}
                                    </td>
                            <td>
                                <img src="{{ asset('public/images/' . $list->image) }}"width="50px" height="50px" alt="" />

                            </td>
                                   
                            <td>
                              <a href="delete/{{ $list->id }}" >
                                 <button type="button" class="btn btn-danger">Delete</button>
                              </a>
                             
                            
                                <a href="editslide/{{ $list->id }}">
                                <button type="button" class="btn btn-primary">Edit</button> 
                                </a>
                            </td>

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
      
        </div>
    </div>
</div>
@endsection