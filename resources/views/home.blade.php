@extends('layout')
@section('content')

@include('slider')

    <section class="about_section layout_padding">
        <div class="container">
            <h2 class="text-uppercase">
                How it works
            </h2>
        </div>



        <div class="container">

            <div class="about_card-container layout_padding2-top">
                @foreach ($model as $key => $list)
                    <div class="container">
                        <div class="about_card-container layout_padding2-top">
                            <div class="about_card">
                                <div class="about-detail">
                                    <div class="about_img-container">
                                        <div class="about_img-box">
                                            <img src="{{ asset('public/images/' . $list->photo) }}" alt="" />

                                        </div>
                                    </div>
                                    <div class="card_detail-ox">
                                        <h4>
                                            {{ $list->heading }}

                                        </h4>
                                        <p>
                                            {{ $list->description }}
                                        </p>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                @endforeach


    </section>
    <section class="who_section">
        @foreach ($spec as $key => $list)
            <div class="container who_container">
                <div class="who_img-box"width="100px" height="100px">
                    <img src="{{ asset('public/photo/' . $list->image) }}" width="200px" height="200px" alt="" />
                </div>
                <div class="who_deail-box">
                    <h2>
                        {{ $list->heading }}
                    </h2>
                    <p>
                        {{ $list->description }}
                    </p>
                    <div>
                        <a href="specification">
                            read more
                        </a>
                    </div>
                </div>
            </div>
        @endforeach

    </section>
    <section class="feature_section layout_padding">

        <div class="container">
            <h2 class="text-uppercase">
                Our Features
            </h2>
        </div>
        <div class="">
            <div class="feature_card-container layout_padding2">
                @foreach ($data as $key => $item)
                    <div class="feature_card">

                        <div class="feature_img-container">
                            <div class="feature_img-box">
                                <img src="{{ asset('public/photo/' . $item->photo) }}"width="100px" height="100px"
                                    alt="" />
                            </div>
                        </div>
                        <div class="feature_detail-box">
                            <h4>
                                {{ $item->heading }}

                            </h4>
                            <p>
                                {{ $item->description }}
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>
    </section>
    
@endsection
