@extends('layouts.app')

{{-- include function --}}
@include('includes.function')

@section('title')
	Berita
@endsection

@section('content')
    
    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Detail Berita</h2>
        <ol class="breadcrumb">
            <li><a href="">Informasi</a></li>
            <li><a href="{{ route('berita') }}">Berita</a></li>
            <li><a href="" class="active">Detail</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

	<!-- Berita -->
    <section class="blog_all">
        <div class="container">
            <div class="row m0 blog_row">
                <div class="col-sm-8 main_blog">
                    <img src="{{ asset('assets_frontend/images/blog/blog_hed-1.jpg') }}" alt="">
                    <div class="col-xs-1 p0">
                       <div class="blog_date">
                           <a href="#">18</a>
                            <a href="#">Oct</a>
                       </div>
                    </div>
                    <div class="col-xs-11 blog_content">
                        <a class="blog_heading" href="#">Commercial Construction &amp; Renovation</a>
                        <a class="blog_admin" href="#"><i class="fa fa-user" aria-hidden="true"></i>Emran Khan</a>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                        <p>It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                        <div class="tag">
                            <h4>TAG</h4>
                            <a href="{{ route('berita') }}">BERITA</a>
                            <a href="{{ route('artikel') }}">ARTIKEL</a>
                            <a href="{{ route('agenda') }}">AGENDA</a>
                            <a href="{{ route('pengumuman') }}">PENGUMUMAN</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 widget_area">

                    <div class="resent">
                        <h3>BERITA LAINNYA</h3>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="{{ asset('assets_frontend/images/blog/rs-1.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="">Get informed about construction industry trends &amp; development.</a>
                                <h6>Oct 19, 2016</h6>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="{{ asset('assets_frontend/images/blog/rs-2.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="">Get informed about construction industry trends &amp; development.</a>
                                <h6>Oct 19, 2016</h6>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="{{ asset('assets_frontend/images/blog/rs-3.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="">Get informed about construction industry trends &amp; development.</a>
                                <h6>Oct 19, 2016</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Berita -->


@endsection