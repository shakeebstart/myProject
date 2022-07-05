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
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    <h3 class="title-5 m-b-35"> Manage Proudcts</h3>
            
                            <a href="category">
                            <button class="au-btn au-btn-icon au-btn--green au-btn--small" type="button">
                                Back</button>
                            </a>
                          
                            <div class="row">
                                <div class="col-lg-6">
                                    {{ session('message') }}
                                    <div class="card">
                                       
                                            
                                            <form action="{{ route('manage_proudcts_process') }}"method="post" enctype="multipart/form-data">
                                                @csrf 
                                                <div class="form-group">
                                                    <label for="category_id" class="control-label mb-1">category_id  </label>
                                                    <input id="category_id" name="category_id" type="number" class="form-control" aria-required="true" aria-invalid="false" >
                                                    @error('category_id')
                                                    {{ $message }}
                                                    <div class="alert alert-danger">
                                                        <strong>Danger!</strong> somthing went wrong
                                                      </div>
                                                @enderror
                                                </div>
                                                    <label for="name" class="control-label mb-1">name  </label>
                                                    <input id="name" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                    @error('name')
                                                    {{ $message }}
                                                    <div class="alert alert-danger">
                                                        <strong>Danger!</strong> somthing went wrong
                                                      </div>
                                                @enderror
                                                </div>
                                                  <div class="form-group">
                                                    <label for="image" class="control-label mb-1">image </label>
                                                    <input id="image" name="image" type="file" class="form-control" aria-required="true" aria-invalid="false" >
                                                @error('image')
                                                    {{ $message }}
                                                    <div class="alert alert-danger">
                                                        <strong>Danger!</strong> somthing went wrong
                                                      </div>
                                                @enderror
                                                </div> 
                                                <div class="form-group">
                                                    <label for="slug" class="control-label mb-1">slug </label>
                                                    <input id="slug" name="slug" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                @error('slug')
                                                    {{ $message }}
                                                    <div class="alert alert-danger">
                                                        <strong>Danger!</strong> somthing went wrong
                                                      </div>
                                                @enderror
                                                </div> 
                                            
                                                <div class="form-group">
                                                    <label for="brand" class="control-label mb-1">brand </label>
                                                    <input id="brand" name="brand" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                @error('brand')
                                                    {{ $message }}
                                                    <div class="alert alert-danger">
                                                        <strong>Danger!</strong> somthing went wrong
                                                      </div>
                                                @enderror
                                                </div> 
                                                <div class="form-group">
                                                    <label for="model" class="control-label mb-1">model </label>
                                                    <input id="model" name="model" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                @error('model')
                                                    {{ $message }}
                                                    <div class="alert alert-danger">
                                                        <strong>Danger!</strong> somthing went wrong
                                                      </div>
                                                @enderror
                                                </div> 
                                                <div class="form-group">
                                                    <label for="short_desc" class="control-label mb-1">short_desc </label>
                                                    <input id="short_desc" name="short_desc" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                @error('short_desc')
                                                    {{ $message }}
                                                    <div class="alert alert-danger">
                                                        <strong>Danger!</strong> somthing went wrong
                                                      </div>
                                                @enderror
                                                </div> 
                                                <div class="form-group">
                                                    <label for="desc" class="control-label mb-1">desc </label>
                                                    <input id="desc" name="desc" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                @error('desc')
                                                    {{ $message }}
                                                    <div class="alert alert-danger">
                                                        <strong>Danger!</strong> somthing went wrong
                                                      </div>
                                                @enderror
                                                </div> 
                                                <div class="form-group">
                                                    <label for="keywords" class="control-label mb-1">keywords </label>
                                                    <input id="keywords" name="keywords" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                @error('keywords')
                                                    {{ $message }}
                                                    <div class="alert alert-danger">
                                                        <strong>Danger!</strong> somthing went wrong
                                                      </div>
                                                @enderror
                                                </div> 
                                                <div class="form-group">
                                                    <label for="technical_specification" class="control-label mb-1">technical_specification </label>
                                                    <input id="technical_specification" name="technical_specification" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                @error('technical_specification')
                                                    {{ $message }}
                                                    <div class="alert alert-danger">
                                                        <strong>Danger!</strong> somthing went wrong
                                                      </div>
                                                @enderror
                                                </div> 
                                                <div class="form-group">
                                                    <label for="uses" class="control-label mb-1">uses </label>
                                                    <input id="uses" name="uses" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                @error('uses')
                                                    {{ $message }}
                                                    <div class="alert alert-danger">
                                                        <strong>Danger!</strong> somthing went wrong
                                                      </div>
                                                @enderror
                                                </div> 
                                                <div class="form-group">
                                                    <label for="warranty" class="control-label mb-1">warranty </label>
                                                    <input id="warranty" name="warranty" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                @error('warranty')
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