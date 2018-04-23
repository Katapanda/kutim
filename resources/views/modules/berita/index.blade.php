@extends('layouts.app')

{{-- include function --}}
@include('includes.function')

@section('title')
	Berita
@endsection

@section('content')
	
	<!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Berita</h2>
        <ol class="breadcrumb">
            <li><a href="">Informasi</a></li>
            <li><a href="" class="active">Berita</a></li>
        </ol>
    </section>
    <!-- End Banner area -->
    
    <!-- Berita -->
    <section class="blog_tow_area">
        <div class="container">
           <div class="row blog_tow_row">
                <div class="col-md-4 col-sm-6">
                    <div class="renovation">
                        <img src="{{ asset('assets_frontend/images/blog/renovation/r-1.jpg') }}" alt="">
                        <div class="renovation_content">
                            <a class="clipboard" href="#"><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                            <a class="tittle" href="{{ route('berita.detail', [1]) }}">Commercial Construction &amp; Renovation</a>
                            <div class="date_comment">
                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>October 20, 2016</a>
                                <a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i>3</a>
                            </div>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="renovation">
                        <img src="{{ asset('assets_frontend/images/blog/renovation/r-2.jpg') }}" alt="">
                        <div class="renovation_content">
                            <a class="clipboard" href="#"><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                            <a class="tittle" href="#">Commercial Construction &amp; Renovation</a>
                            <div class="date_comment">
                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>October 20, 2016</a>
                                <a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i>3</a>
                            </div>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="renovation">
                        <img src="{{ asset('assets_frontend/images/blog/renovation/r-3.jpg') }}" alt="">
                        <div class="renovation_content">
                            <a class="clipboard" href="#"><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                            <a class="tittle" href="#">Commercial Construction &amp; Renovation</a>
                            <div class="date_comment">
                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>October 20, 2016</a>
                                <a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i>3</a>
                            </div>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="renovation">
                        <img src="{{ asset('assets_frontend/images/blog/renovation/r-4.jpg') }}" alt="">
                        <div class="renovation_content">
                            <a class="clipboard" href="#"><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                            <a class="tittle" href="#">Commercial Construction &amp; Renovation</a>
                            <div class="date_comment">
                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>October 20, 2016</a>
                                <a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i>3</a>
                            </div>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="renovation">
                        <img src="{{ asset('assets_frontend/images/blog/renovation/r-5.jpg') }}" alt="">
                        <div class="renovation_content">
                            <a class="clipboard" href="#"><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                            <a class="tittle" href="#">Commercial Construction &amp; Renovation</a>
                            <div class="date_comment">
                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>October 20, 2016</a>
                                <a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i>3</a>
                            </div>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="renovation">
                        <img src="{{ asset('assets_frontend/images/blog/renovation/r-6.jpg') }}" alt="">
                        <div class="renovation_content">
                            <a class="clipboard" href="#"><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                            <a class="tittle" href="#">Commercial Construction &amp; Renovation</a>
                            <div class="date_comment">
                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>October 20, 2016</a>
                                <a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i>3</a>
                            </div>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="renovation">
                        <img src="{{ asset('assets_frontend/images/blog/renovation/r-7.jpg') }}" alt="">
                        <div class="renovation_content">
                            <a class="clipboard" href="#"><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                            <a class="tittle" href="#">Commercial Construction &amp; Renovation</a>
                            <div class="date_comment">
                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>October 20, 2016</a>
                                <a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i>3</a>
                            </div>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="renovation">
                        <img src="{{ asset('assets_frontend/images/blog/renovation/r-8.jpg') }}" alt="">
                        <div class="renovation_content">
                            <a class="clipboard" href="#"><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                            <a class="tittle" href="#">Commercial Construction &amp; Renovation</a>
                            <div class="date_comment">
                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>October 20, 2016</a>
                                <a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i>3</a>
                            </div>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="renovation">
                        <img src="{{ asset('assets_frontend/images/blog/renovation/r-9.jpg') }}" alt="">
                        <div class="renovation_content">
                            <a class="clipboard" href="#"><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                            <a class="tittle" href="#">Commercial Construction &amp; Renovation</a>
                            <div class="date_comment">
                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>October 20, 2016</a>
                                <a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i>3</a>
                            </div>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </section>
    <!-- End Berita -->

@endsection    