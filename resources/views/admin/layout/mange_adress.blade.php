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
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    <h3 class="title-5 m-b-35"> Manage address</h3>
            
                            <a href="address">
                            <button class="au-btn au-btn-icon au-btn--green au-btn--small" type="button">
                                Back</button>
                            </a>
                          
                            <div class="row">
                                <div class="col-lg-6">
                                    {{ session('message') }}
                                    <div class="card">
                                       
                                            
                                            <form action="{{ url('manage_address') }}"method="post" >
                                                @csrf
                                               
                                                <div class="form-group">
                                                    <label for="name" class="control-label mb-1">name </label>
                                                    <input id="name" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                @error('name')
                                                    {{ $message }}
                                                    <div class="alert alert-danger">
                                                        <strong>Danger!</strong> somthing went wrong
                                                      </div>
                                                @enderror
                                                </div> 
                                                
                                                <div class="form-group">
                                                    <label for="address" class="control-label mb-1"> address	 </label>
                                                    <input id="address" name="address" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                    @error('address')
                                                    {{ $message }}
                                                    <div class="alert alert-danger">
                                                        <strong>Danger!</strong> somthing went wrong
                                                      </div>
                                                @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="place" class="control-label mb-1">place</label>
                                                    <input id="place" name="place" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="pin" class="control-label mb-1">pin</label>
                                                    <input id="pin" name="pin" type="number" class="form-control" aria-required="true" aria-invalid="false" >
                                                </div>
                                            
                                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                       Submit
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                               
                 
                    <!-- END DATA TABLE -->
             
                    <!-- DATA TABLE-->
                 
                    <!-- END DATA TABLE-->
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection