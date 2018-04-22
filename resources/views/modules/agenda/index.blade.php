@extends('layouts.app')

{{-- include function --}}
@include('includes.function')

@section('title')
	Agenda
@endsection

@section('content')
    
    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Agenda</h2>
        <ol class="breadcrumb">
            <li><a href="">Informasi</a></li>
            <li><a href="" class="active">Agenda</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

	<!-- Agenda -->
    <<section class="our_feature_area">
        <div class="container">
            <div class="feature_row row">
                <div class="col-md-6 feature_img">
                    <img src="{{ asset('assets_frontend/images/feature-man-2.jpg') }}" alt="">
                </div>
                <div class="col-md-6 feature_content">
                    <div class="subtittle">
                        <h2>Agenda</h2>
                        <h5>There are many variations of passages of Lorem Ipsum available.</h5>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <i class="fa fa-wrench" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="{{ route('agenda.detail', [1]) }}">30+ YEARS OF EXPERIENCE</a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus-try. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <i class="fa fa-rocket" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">QUALIFIED EXPERTS</a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus-try. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">Best Customer Services</a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus-try. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Agenda -->

@endsection