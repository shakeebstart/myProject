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
                    <h3 class="title-5 m-b-35"> Edit coupon</h3>
            
                            <a href="{{ url('coupon') }}">
                            <button class="au-btn au-btn-icon au-btn--green au-btn--small" type="button">
                                Back</button>
                            </a>
                          
                            <div class="row">
                                <div class="col-lg-6">
                                    {{ session('message') }}
                                    <div class="card">
                                       
                                            
                                            <form action="{{ url('edit-coupon/'.$model->id) }}"method="post" >
                                                @csrf
                                               @method('PUT');
                                                <div class="form-group">
                                                    <label for="coupon" class="control-label mb-1">coupon </label>
                                                    <input id="coupon" value="{{ $model->coupon }}" name="coupon" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                @error('coupon')
                                                    {{ $message }}
                                                    <div class="alert alert-danger">
                                                        <strong>Danger!</strong> somthing went wrong
                                                      </div>
                                                @enderror
                                                </div> 
                                                
                                                <div class="form-group">
                                                    <label for="value" class="control-label mb-1">value  </label>
                                                    <input id="value" name="value" value="{{ $model->value }}" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                    @error('value')
                                                    {{ $message }}
                                                    <div class="alert alert-danger">
                                                        <strong>Danger!</strong> somthing went wrong
                                                      </div>
                                                @enderror
                                                </div>
                                                
                                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                       update
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