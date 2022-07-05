@extends('admin.layout.master')
@section('content')
<!DOCTYPE html>
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
    

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div>
                                  
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">features</h3>
                                            <a href="features">
                                                <button class="au-btn au-btn-icon au-btn--green au-btn--small" type="button">
                                                    back</button></a>
                                        </div>
                                        <hr>
                                        <form action="{{ url('manage_features_process') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">

                                                <label for="photo" class="control-label mb-1"> photo</label>
                                                <input id="photo" name="photo" type="file" class="form-control" aria-required="true" aria-invalid="false" >
                                                @error('photo')
                                                {{ $message }}
                                                <div class="alert alert-danger">
                                                    <strong>Danger!</strong> somthing went wrong
                                                  </div>
                                            @enderror
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="heading" class="control-label mb-1">heading</label>
                                                <input id="heading" name="heading" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                    @error('heading')
                                                    {{ $message }}
                                                    <div class="alert alert-danger">
                                                        <strong>Danger!</strong> somthing went wrong
                                                      </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="description" class="control-label mb-1"> description</label>
                                                <input id="description" name="description" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                    @error('description')
                                                {{ $message }}
                                                <div class="alert alert-danger">
                                                    <strong>Danger!</strong> somthing went wrong
                                                  </div>
                                            @enderror
                                            </div>
                                         
                                            <div>
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