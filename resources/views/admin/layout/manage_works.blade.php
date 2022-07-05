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
                    <h3 class="title-5 m-b-35"> Manage works</h3>
            
                            <a href="works">
                            <button class="au-btn au-btn-icon au-btn--green au-btn--small" type="button">
                                Back</button>
                            </a>
                          
                            <div class="row">
                                <div class="col-lg-6">
                                    {{ session('message') }}
                                    <div class="card">
                                       
                                            
                                        <form action="{{ url('manage_work_process') }}"method="post" enctype="multipart/form-data" >
                                                @csrf
                                               
                                                <div class="form-group">
                                                    <label for="photo" class="control-label mb-1">photo </label>
                                                    <input id="photo" name="photo" type="file" class="form-control" aria-required="true" aria-invalid="false" >
                                                @error('photo')
                                                    {{ $message }}
                                                    <div class="alert alert-danger">
                                                        <strong>Danger!</strong> somthing went wrong
                                                      </div>
                                                @enderror
                                                </div> 
                                                
                                                <div class="form-group">
                                                    <label for="heading" class="control-label mb-1"> heading </label>
                                                    <input id="heading" name="heading" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                    @error('heading')
                                                    {{ $message }}
                                                    <div class="alert alert-danger">
                                                        <strong>Danger!</strong> somthing went wrong
                                                      </div>
                                                @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="description" class="control-label mb-1"> description </label>
                                                    <input id="description" name="description" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                    @error('description')
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