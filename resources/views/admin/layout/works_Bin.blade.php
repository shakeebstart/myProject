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
                    <h3 class="title-5 m-b-35"> Works Bin</h3>
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <div class="rs-select2--light rs-select2--md">
                                
                                <div class="dropDownSelect2"></div>
                            </div>

                    </div>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                    
                                    <th>photo</th>
                                    <th> heading</th>
                                    <th>description</th>
                                    <th>Action</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                
                     @foreach ($works_bin as $list)

                              
                                <tr>
                                  
                                    <td>
                                        {{ $list->photo }}
                                    </td>
                                    <td>
                                    {{ $list->heading }}
                                    </td>
                                    <td class="desc">
                                    {{ $list->description }}

                                    </td>
                                    <td>
                                        

                                        <a href="restore_works/{{ $list->id }}"><input class="btn btn-info" type="button" value="restore"></a>
                                        {{-- {{ dd($list) }} --}}
                                      
                                        <a href="p_delete/{{ $list->id }}"><button class="btn btn-danger" type="submit">permenent delete</button></a>
                                       
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