@extends('admin.layout.master')
@section('content')
    {{-- trash --}}
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
               
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    <h3 class="title-5 m-b-35"> Trash</h3>
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
                                    
                                    <th>id</th>
                                    <th>Category name</th>
                                    <th>category slug</th>
                                    <th>Action</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                
                              @foreach ($trash as $list)
                              
                                <tr>
                                  
                                    <td>{{ $list->id }}</td>
                                    <td>
                                        {{ $list->category_name }}  
                                    </td>
                                    <td class="desc">{{ $list->category_slug }}</td>
                                    <td>
                                        <a href="restore/{{ $list->id }}"><input class="btn btn-info" type="button" value="Restore"></a>

                                        {{-- @if($list->status==1)
                                        <a href="status/0/{{ $list->id }}"> <button type="button" class="btn btn-secondary">Active</button></a> --}}
                                        {{-- @elseif($list->status==0)
                                        <a href="status/1/{{ $list->id }}"> </button><button type="button" class="btn btn-warning">deactive</button>
                                        @endif --}}
                                        <a href="permenentdelete/{{ $list->id }}"><button class="btn btn-danger" type="submit">Permenent delete</button></a>
                                  
                                       
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