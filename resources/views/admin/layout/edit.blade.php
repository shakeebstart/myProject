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
                    <h3 class="title-5 m-b-35"> Edit Category</h3>
            
                            <a href="category">
                            <button class="au-btn au-btn-icon au-btn--green au-btn--small" type="button">
                                Back</button>
                            </a>
                          
                            <div class="row">
                                <div class="col-lg-6">
                                    {{ session('message') }}
                                    <div class="card">
                                       
                                            
                                            <form action="{{ url('update-category/'.$model->id) }}"method="post" >
                                                @csrf
                                               @method('PUT');
                                                <div class="form-group">
                                                    <label for="category" class="control-label mb-1">Category </label>
                                                    <input id="category_name" value="{{ $model->category_name }}" name="category_name" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                @error('category_name')
                                                    {{ $message }}
                                                    <div class="alert alert-danger">
                                                        <strong>Danger!</strong> somthing went wrong
                                                      </div>
                                                @enderror
                                                </div> 
                                                
                                                <div class="form-group">
                                                    <label for="category_slug" class="control-label mb-1">Category Slug </label>
                                                    <input id="category_slug" name="category_slug" value="{{ $model->category_slug }}" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                    @error('category_slug')
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