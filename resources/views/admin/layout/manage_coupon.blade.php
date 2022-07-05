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
                    <h3 class="title-5 m-b-35"> Manage Coupon</h3>
            
                            <a href="{{ url('coupon') }}">
                            <button class="au-btn au-btn-icon au-btn--green au-btn--small" type="button">
                                Back</button>
                            </a>
                          
                            <div class="row">
                                <div class="col-lg-6">
                                    {{ session('message') }}
                                    <div class="card">
                                       
                                            
                                            <form action="{{ url('manage_coupon_process') }}"method="post" >
                                                @csrf
                                               
                                                <div class="form-group">
                                                    <label for="title" class="control-label mb-1">Title </label>
                                                    <input id="title" name="title" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                @error('title')
                                                    {{ $message }}
                                                    <div class="alert alert-danger">
                                                        <strong>Danger!</strong> somthing went wrong
                                                      </div>
                                                @enderror
                                                </div> 
                                                
                                                <div class="form-group">
                                                    <label for="code" class="control-label mb-1"> code </label>
                                                    <input id="code" name="code" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                    @error('code')
                                                    {{ $message }}
                                                    <div class="alert alert-danger">
                                                        <strong>Danger!</strong> somthing went wrong
                                                      </div>
                                                @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="value" class="control-label mb-1">value </label>
                                                    <input id="value" name="value" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                @error('value')
                                                    {{ $message }}
                                                    <div class="alert alert-danger">
                                                        <strong>Danger!</strong> somthing went wrong
                                                      </div>
                                                @enderror
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