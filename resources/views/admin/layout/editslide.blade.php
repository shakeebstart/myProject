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
                    <h3 class="title-5 m-b-35"> Update slide</h3>
            
                            <a href="slider">
                            <button class="au-btn au-btn-icon au-btn--green au-btn--small" type="button">
                                Back</button>
                            </a>
                          
                            <div class="row">
                                <div class="col-lg-6">
                                    {{ session('message') }}
                                    <div class="card">
                                       
                                            
                                        <form action="{{ url('update-slide/'.$model->id) }}" method="POST" enctype="multipart/form-data" >
                                                @csrf
                                                @method('PUT')
                                               
                                                <div class="form-group">
                                                    <label for="name" class="control-label mb-1">name </label>
                                                    <input id="name" name="name" value="{{ $model->name }}" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                @error('name')
                                                    {{ $message }}
                                                    <div class="alert alert-danger">
                                                        <strong>Danger!</strong> somthing went wrong
                                                      </div>
                                                @enderror
                                                </div> 
                                                
                                                <div class="form-group">
                                                    <label for="description"   class="control-label mb-1"> description </label>
                                                    <input id="description" value="{{ $model->description }}" name="description" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                    @error('description')
                                                    {{ $message }}
                                                    <div class="alert alert-danger">
                                                        <strong>Danger!</strong> somthing went wrong
                                                      </div>
                                                @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="image" class="control-label mb-1"> image </label>
                                                    <input id="image" value="{{ $model->image }}" name="image" type="file" class="form-control" aria-required="true" aria-invalid="false" >
                                                    @error('gallery')
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
                                @endsection