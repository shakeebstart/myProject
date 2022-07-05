@extends('admin.layout.master')
@section('content')
<div class="card-body">
    <div class="card-title">
        <h3 class="text-center title-2">Manage specification</h3>
        <a href="specification">
            <button class="au-btn au-btn-icon au-btn--green au-btn--small" type="button">
                Back</button>
            </a>
    </div>
    <hr>
    <form action="{{ url("manage_specification_process") }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image" class="control-label mb-1"> Image</label>
            <input id="image" name="image" type="file" class="form-control">
            @error('image')
            {{ $message }}
            <div class="alert alert-danger">
                <strong>Danger!</strong> somthing went wrong
              </div>
        @enderror
        </div>
        <div class="form-group has-success">
            <label for="heading" class="control-label mb-1">Heading</label>
            <input id="heading" name="heading" type="text" class="form-control cc-name valid">
            @error('heading')
             {{ $message }}
              <div class="alert alert-danger">
            <strong>Danger!</strong> somthing went wrong
               </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description" class="control-label mb-1"> Description</label>
            <input id="description" name="description" type="text" class="form-control cc-number identified visa" >
            @error('description')
            {{ $message }}
             <div class="alert alert-danger">
           <strong>Danger!</strong> somthing went wrong
              </div>
           @enderror
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="more" class="control-label mb-1">More</label>
                    <input id="more" name="more" type="text" class="form-control cc-exp" value="" data-val="true" >
                    @error('more')
                    {{ $message }}
                     <div class="alert alert-danger">
                   <strong>Danger!</strong> somthing went wrong
                      </div>
                   @enderror
                </div>
            </div>
         
        </div>
        <div>
            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
               Submit
            </button>
        </div>
    </form>
</div>
@endsection