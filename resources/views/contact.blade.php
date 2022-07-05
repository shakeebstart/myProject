<section class="contact_section ">
    <div class="container d-flex justify-content-center">
        <h2 class="text-uppercase">
            Get in touch
        </h2>
    </div>
    <div class="container-fluid layout_padding-top">
        <div class="row">
            <div class="col-md-6">
                <div class="col-md-10 offset-md-2">
                    <div class="contact_img-box">
                        <img src="{{ asset('admin/images/form-img.jpg') }}" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-md-6 form_bg px-0">
                <div class="col-md-10 px-0">
                  {{ session('message') }}

                    <form action="{{ url('contact') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="contact_form-container">
                            <div>
                                <div>
                                    <input type="text" name="name" placeholder=" Name" />
                                    @error('name')
                                    {{ $message }}
                                    <div class="alert alert-danger">
                                        <strong>Danger!</strong> somthing went wrong
                                      </div>
                                @enderror
                                </div>
                                <div>
                                    <input type="email" name="email" placeholder="  Email" />
                                    @error('email')
                                    {{ $message }}
                                    <div class="alert alert-danger">
                                        <strong>Danger!</strong> somthing went wrong
                                      </div>
                                @enderror
                                </div>

                                <div>
                                    <input type="text" name="number" placeholder=" Phone Number" />
                                    @error('number')
                                    {{ $message }}
                                    <div class="alert alert-danger">
                                        <strong>Danger!</strong> somthing went wrong
                                      </div>
                                @enderror
                                </div>

                                <div>
                                    <input type="text" name="message" placeholder="Message" class="message_input" />
                                    @error('message')
                                    {{ $message }}
                                    <div class="alert alert-danger">
                                        <strong>Danger!</strong> somthing went wrong
                                      </div>
                                @enderror
                                </div>
                                <div class="mt-3 d-flex justify-content-end">
                                    
                                    <button id="payment-button" type="submit"
                                        class="btn btn-lg btn-info btn-block">
                                        Submit
                                    </button>
                                    
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>