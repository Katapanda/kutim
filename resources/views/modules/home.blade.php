@extends('layouts.app')

@section('title')
	Home
@endsection

@section('content')

	<!-- Web Ticker -->
    <section class="top-news">
        <div class="container">
            <div class="news-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ticker d-flex justify-content-between">
                            <div class="news-head">
                                <span>BREAKING NEWS<i class="fa fa-caret-right"></i></span>
                            </div>
                            <ul id="webTicker">
                                <li><a href=""><i class="fa fa-dot-circle-o"></i>These sentences are selected from various online news.</a></li>
                                <li><a href=""><i class="fa fa-dot-circle-o"></i>This handout will help you understand how paragraphs are formed.</a></li>
                                <li><a href=""><i class="fa fa-dot-circle-o"></i>It is usually composed of several sentences that together develop one.</a></li>
                                <li><a href=""><i class="fa fa-dot-circle-o"></i>The purpose of this handout is to give some basic instruction.</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Web Ticker -->

    <!-- Slider Area -->
    <section class="slider-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 padding-fix-r">
                    <div class="owl-carousel owl-slider">
                        @foreach($sliders as $slider)
                            <div class="slider-content">
                            {{-- <img src="{{ asset('assets_frontend/images/slider-1.jpg') }}" alt="" class="img-fluid"> --}}
                            <img src="{{ asset($slider->foto_berita) }}" alt="" class="img-fluid" style="height: 480px">
                            <div class="slider-layer" style="width: 100%;">
                                <p><a href="" style="color: #ffffff; text-align: left;">{!! $slider->isi_berita !!}</a></p>
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">{{ $slider->judul_berita }}</li>
                                    <li class="list-inline-item">{{ $slider->tanggal_publish }}</li>
                                </ul>
                            </div>
                        </div>
                        @endforeach

                        {{-- <div class="slider-content">
                            <img src="{{ asset('assets_frontend/images/slider-1.jpg') }}" alt="" class="img-fluid">
                            <div class="slider-layer">
                                <p><a href="">This handout will help you understand how paragraphs are formed. It is usually composed of several sentences that together develop one.</a></p>
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">SPORTS</li>
                                    <li class="list-inline-item">September 24, 2017</li>
                                </ul>
                            </div>
                        </div>
                        <div class="slider-content">
                            <img src="{{ asset('assets_frontend/images/slider-2.jpg') }}" alt="" class="img-fluid">
                            <div class="slider-layer">
                                <p><a href="">The purpose of this handout is to give some basic instruction. It is usually composed of several sentences that together develop one.</a></p>
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">LIFE STYLE</li>
                                    <li class="list-inline-item">September 24, 2017</li>
                                </ul>
                            </div>
                        </div>
                        <div class="slider-content">
                            <img src="{{ asset('assets_frontend/images/slider-3.jpg') }}" alt="" class="img-fluid">
                            <div class="slider-layer">
                                <p><a href="">It is usually composed of several sentences that together develop one. It is usually composed of several sentences that together develop one.</a></p>
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">FOOD</li>
                                    <li class="list-inline-item">September 24, 2017</li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 slider-fix">
                    <div class="slider-sidebar sidebar-o">
                        <img src="{{ asset('assets_frontend/images/tech.jpg') }}" alt="" class="img-fluid">
                        <div class="sidebar-layer">
                            <p><a href="">It is usually composed of several sentences that together develop one.</a></p>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">TECHNOLOGY</li>
                                <li class="list-inline-item">September 24, 2017</li>
                            </ul>
                        </div>
                    </div>
                    <div class="slider-sidebar">
                        <img src="{{ asset('assets_frontend/images/health.jpg') }}" alt="" class="img-fluid">
                        <div class="sidebar-layer">
                            <p><a href="">These sentences are selected from various online news.</a></p>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">HEALTH</li>
                                <li class="list-inline-item">September 24, 2017</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Slider Area -->

    <!-- All News -->
    <section class="allnews">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="latest-top">
                        <h4>LATEST NEWS</h4>
                    </div>
                    <div class="owl-carousel latest-slider">
                        <div class="latest-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="latest-content">
                                        <img src="{{ asset('assets_frontend/images/latest-1.jpg') }}" alt="" class="img-fluid">
                                        <h6><a href="">These sentences are selected from various online news.</a></h6>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item">TECHNOLOGY</li>
                                            <li class="list-inline-item">September 24, 2017</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque labore, quam voluptatibus ipsum. Ex tenetur, quasi, provident animi magni voluptas fugit quae ad........</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="{{ asset('assets_frontend/images/latest-3.jpg') }}" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news.</a></p>
                                            <span>September 24, 2017</span>
                                        </div>
                                    </div>
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="{{ asset('assets_frontend/images/latest-4.jpg') }}" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news.</a></p>
                                            <span>September 24, 2017</span>
                                        </div>
                                    </div>
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="{{ asset('assets_frontend/images/latest-5.jpg') }}" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news.</a></p>
                                            <span>September 24, 2017</span>
                                        </div>
                                    </div>
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="{{ asset('assets_frontend/images/latest-6.jpg') }}" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news.</a></p>
                                            <span>September 24, 2017</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="latest-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="latest-content">
                                        <img src="{{ asset('assets_frontend/images/latest-2.jpg') }}" alt="" class="img-fluid">
                                        <h6><a href="">These sentences are selected from various online news.</a></h6>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item">COMPUTER</li>
                                            <li class="list-inline-item">September 24, 2017</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque labore, quam voluptatibus ipsum. Ex tenetur, quasi, provident animi magni voluptas fugit quae ad........</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="{{ asset('assets_frontend/images/latest-7.jpg') }}" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news.</a></p>
                                            <span>September 24, 2017</span>
                                        </div>
                                    </div>
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="{{ asset('assets_frontend/images/latest-5.jpg') }}" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news.</a></p>
                                            <span>September 24, 2017</span>
                                        </div>
                                    </div>
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="{{ asset('assets_frontend/images/latest-6.jpg') }}" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news.</a></p>
                                            <span>September 24, 2017</span>
                                        </div>
                                    </div>
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="{{ asset('assets_frontend/images/latest-3.jpg') }}" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news.</a></p>
                                            <span>September 24, 2017</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popular-top">
                        <h4>POPULAR NEWS</h4>
                    </div>
                    <div class="owl-carousel popular-slider">
                        <div class="popular-item">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="{{ asset('assets_frontend/images/popular-1.jpg') }}" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news....</a></p>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">FOOD</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="{{ asset('assets_frontend/images/popular-2.jpg') }}" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news....</a></p>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">FAMILY</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="{{ asset('assets_frontend/images/popular-3.jpg') }}" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news....</a></p>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">FOOD</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="{{ asset('assets_frontend/images/popular-4.jpg') }}" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news....</a></p>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">WORLD</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="{{ asset('assets_frontend/images/popular-5.jpg') }}" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news....</a></p>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">LIFESTYLE</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="{{ asset('assets_frontend/images/popular-6.jpg') }}" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news....</a></p>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">WORLD</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popular-item">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="{{ asset('assets_frontend/images/popular-3.jpg') }}" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news....</a></p>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">SPORTS</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="{{ asset('assets_frontend/images/popular-1.jpg') }}" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news....</a></p>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">SPORTS</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="{{ asset('assets_frontend/images/popular-4.jpg') }}" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news....</a></p>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">SPORTS</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="{{ asset('assets_frontend/images/popular-6.jpg') }}" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news....</a></p>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">SPORTS</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="{{ asset('assets_frontend/images/popular-2.jpg') }}" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news....</a></p>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">SPORTS</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="{{ asset('assets_frontend/images/popular-5.jpg') }}" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news....</a></p>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">SPORTS</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="follow-widget">
                        <h4>FOLLOW US</h4>
                        <ul class="list-unstyled clearfix">
                            <li>
                                <a href="">
                                    <i class="fa fa-facebook"></i>
                                    <p><span>44,410</span>fans</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-twitter"></i>
                                    <p><span>31,219</span>subscriber</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-rss"></i>
                                    <p><span>11,209</span>subscriber</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-linkedin"></i>
                                    <p><span>19,323</span>follower</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-google-plus"></i>
                                    <p><span>29,559</span>follower</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-youtube"></i>
                                    <p><span>56,717</span>subscriber</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="add-widget">
                        <a href=""><img src="{{ asset('assets_frontend/images/add-1.png') }}" alt="" class="img-fluid"></a>
                    </div>
                    <div class="tab-widget">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#m-view" role="tab">Most Viewed</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#comment" role="tab">Comments</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#catagory" role="tab">Catagories</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="m-view" role="tabpanel">
                                <div class="m-view-content">
                                    <div class="m-view-img">
                                        <a href=""><img src="{{ asset('assets_frontend/images/latest-5.jpg') }}" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="img-content">
                                        <p><a href="">These sentences are selected from various online news.</a></p>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-view-content">
                                    <div class="m-view-img">
                                        <a href=""><img src="{{ asset('assets_frontend/images/latest-6.jpg') }}" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="img-content">
                                        <p><a href="">These sentences are selected from various online news.</a></p>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-view-content">
                                    <div class="m-view-img">
                                        <a href=""><img src="{{ asset('assets_frontend/images/latest-4.jpg') }}" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="img-content">
                                        <p><a href="">These sentences are selected from various online news.</a></p>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="comment" role="tabpanel">
                                <div class="comment-content">
                                    <div class="comment-img">
                                        <a href=""><i class="fa fa-user"></i></a>
                                    </div>
                                    <div class="img-content">
                                        <p><a href=""><span>Jamy : </span>These sentences are selected from various online news....</a></p>
                                    </div>
                                </div>
                                <div class="comment-content">
                                    <div class="comment-img">
                                        <a href=""><i class="fa fa-user"></i></a>
                                    </div>
                                    <div class="img-content">
                                        <p><a href=""><span>Jamy : </span>These sentences are selected from various online news....</a></p>
                                    </div>
                                </div>
                                <div class="comment-content">
                                    <div class="comment-img">
                                        <a href=""><i class="fa fa-user"></i></a>
                                    </div>
                                    <div class="img-content">
                                        <p><a href=""><span>Jamy : </span>These sentences are selected from various online news....</a></p>
                                    </div>
                                </div>
                                <div class="comment-content">
                                    <div class="comment-img">
                                        <a href=""><i class="fa fa-user"></i></a>
                                    </div>
                                    <div class="img-content">
                                        <p><a href=""><span>Jamy : </span>These sentences are selected from various online news....</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="catagory" role="tabpanel">
                                <div class="catagory-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="list-unstyled">
                                                <li><a href="">Business <span>19</span></a></li>
                                                <li><a href="">World <span>21</span></a></li>
                                                <li><a href="">Tech <span>23</span></a></li>
                                                <li><a href="">Politics <span>27</span></a></li>
                                                <li><a href="">Sports <span>11</span></a></li>
                                                <li><a href="">Entertainment <span>19</span></a></li>
                                                <li><a href="">Lifestyle <span>21</span></a></li>
                                                <li><a href="">Fashion <span>21</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-unstyled">
                                                <li><a href="">Animal <span>23</span></a></li>
                                                <li><a href="">Politics <span>27</span></a></li>
                                                <li><a href="">Health <span>11</span></a></li>
                                                <li><a href="">National <span>19</span></a></li>
                                                <li><a href="">Culture <span>21</span></a></li>
                                                <li><a href="">Music <span>23</span></a></li>
                                                <li><a href="">Food <span>27</span></a></li>
                                                <li><a href="">Travel <span>11</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End All News -->

    <!-- Latest Videos -->
    <section class="videos">
        <div class="container">
            <div class="vodeo-c">
                <div class="row">
                    <div class="col-md-12">
                        <div class="video-top">
                            <h4>LATEST VIDEOS</h4>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="video-content text-center">
                            <a href="https://www.youtube.com/watch?v=uXFUl0KcIkA" id="video-btn"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-12">
                        <div class="video-list">
                            <div class="list-content">
                                <img src="{{ asset('assets_frontend/images/latest-4.jpg') }}" alt="" class="img-fluid">
                                <p><a href="">These sentences are selected from various online news.</a></p>
                            </div>
                            <div class="list-content">
                                <img src="{{ asset('assets_frontend/images/latest-5.jpg') }}" alt="" class="img-fluid">
                                <p><a href="">These sentences are selected from various online news.</a></p>
                            </div>
                            <div class="list-content">
                                <img src="{{ asset('assets_frontend/images/latest-7.jpg') }}" alt="" class="img-fluid">
                                <p><a href="">These sentences are selected from various online news.</a></p>
                            </div>
                            <div class="list-content">
                                <img src="{{ asset('assets_frontend/images/latest-6.jpg') }}" alt="" class="img-fluid">
                                <p><a href="">These sentences are selected from various online news.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Latest Videos -->
    
    <!-- Other News -->
    <section class="oth-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending-top">
                        <h4>TRENDING NEWS</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="trending-content">
                                <img src="{{ asset('assets_frontend/images/trending-1.jpg') }}" alt="" class="img-fluid">
                                <div class="trending-layer">
                                    <p><a href="">This handout will help you understand how paragraphs are formed.</a></p>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">LIFESTYLE</li>
                                        <li class="list-inline-item">September 24, 2017</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="trending-content">
                                <img src="{{ asset('assets_frontend/images/trending-2.jpg') }}" alt="" class="img-fluid">
                                <div class="trending-layer">
                                    <p><a href="">This handout will help you understand how paragraphs are formed.</a></p>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">TECHNOLOGY</li>
                                        <li class="list-inline-item">September 24, 2017</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="trending-s">
                                <div class="trending-s-content">
                                    <div class="trending-img">
                                        <a href=""><img src="{{ asset('assets_frontend/images/latest-4.jpg') }}" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="img-content">
                                        <p><a href="">These sentences are selected from various online news.</a></p>
                                        <span>September 24, 2017</span>
                                    </div>
                                </div>
                                <div class="trending-s-content">
                                    <div class="trending-img">
                                        <a href=""><img src="{{ asset('assets_frontend/images/latest-5.jpg') }}" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="img-content">
                                        <p><a href="">These sentences are selected from various online news.</a></p>
                                        <span>September 24, 2017</span>
                                    </div>
                                </div>
                                <div class="trending-s-content">
                                    <div class="trending-img">
                                        <a href=""><img src="{{ asset('assets_frontend/images/latest-6.jpg') }}" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="img-content">
                                        <p><a href="">These sentences are selected from various online news.</a></p>
                                        <span>September 24, 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="trending-s">
                                <div class="trending-s-content">
                                    <div class="trending-img">
                                        <a href=""><img src="{{ asset('assets_frontend/images/latest-3.jpg') }}" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="img-content">
                                        <p><a href="">These sentences are selected from various online news.</a></p>
                                        <span>September 24, 2017</span>
                                    </div>
                                </div>
                                <div class="trending-s-content">
                                    <div class="trending-img">
                                        <a href=""><img src="{{ asset('assets_frontend/images/latest-7.jpg') }}" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="img-content">
                                        <p><a href="">These sentences are selected from various online news.</a></p>
                                        <span>September 24, 2017</span>
                                    </div>
                                </div>
                                <div class="trending-s-content">
                                    <div class="trending-img">
                                        <a href=""><img src="{{ asset('assets_frontend/images/latest-4.jpg') }}" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="img-content">
                                        <p><a href="">These sentences are selected from various online news.</a></p>
                                        <span>September 24, 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="more-top">
                        <h4>MORE NEWS</h4>
                    </div>
                    <div class="more-content">
                        <div class="more-img">
                            <a href=""><img src="{{ asset('assets_frontend/images/more-1.jpg') }}" alt="" class="img-fluid"></a>
                        </div>
                        <div class="img-content">
                            <h6><a href="">It is usually composed of several sentences that together develop one.</a></h6>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">FAMILY</li>
                                <li class="list-inline-item">September 24, 2017</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi debitis suscipit nesciunt nihil deleniti dolorum reiciendis aspernatur recusandae in, dolore quod pariatur......</p>
                        </div>
                    </div>
                    <div class="more-content">
                        <div class="more-img">
                            <a href=""><img src="{{ asset('assets_frontend/images/more-2.jpg') }}" alt="" class="img-fluid"></a>
                        </div>
                        <div class="img-content">
                            <h6><a href="">It is usually composed of several sentences that together develop one.</a></h6>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">LIFESTYLE</li>
                                <li class="list-inline-item">September 24, 2017</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi debitis suscipit nesciunt nihil deleniti dolorum reiciendis aspernatur recusandae in, dolore quod pariatur......</p>
                        </div>
                    </div>
                    <div class="more-content">
                        <div class="more-img">
                            <a href=""><img src="{{ asset('assets_frontend/images/more-3.jpg') }}" alt="" class="img-fluid"></a>
                        </div>
                        <div class="img-content">
                            <h6><a href="">It is usually composed of several sentences that together develop one.</a></h6>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">WORLD</li>
                                <li class="list-inline-item">September 24, 2017</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi debitis suscipit nesciunt nihil deleniti dolorum reiciendis aspernatur recusandae in, dolore quod pariatur......</p>
                        </div>
                    </div>
                    <div class="more-content">
                        <div class="more-img">
                            <a href=""><img src="{{ asset('assets_frontend/images/more-4.jpg') }}" alt="" class="img-fluid"></a>
                        </div>
                        <div class="img-content">
                            <h6><a href="">It is usually composed of several sentences that together develop one.</a></h6>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">TECHNOLOGY</li>
                                <li class="list-inline-item">September 24, 2017</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi debitis suscipit nesciunt nihil deleniti dolorum reiciendis aspernatur recusandae in, dolore quod pariatur......</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="login-widget">
                        <h4>LOG IN</h4>
                        <form method="post">
                            <input type="text" name="name" placeholder="User Name" required>
                            <input type="password" name="password" placeholder="********" required>
                            <label><input type="checkbox" checked="">Remember Me</label>
                            <button type="submit"  value="submit">Log In</button>
                        </form>
                    </div>
                    <div class="tag-widget">
                        <h4>TAG LIST</h4>
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a href="">News</a></li>
                            <li class="list-inline-item"><a href="">Article</a></li>
                            <li class="list-inline-item"><a href="">Online</a></li>
                            <li class="list-inline-item"><a href="">Tags</a></li>
                            <li class="list-inline-item"><a href="">World</a></li>
                            <li class="list-inline-item"><a href="">Google</a></li>
                            <li class="list-inline-item"><a href="">Wordpress</a></li>
                            <li class="list-inline-item"><a href="">National</a></li>
                            <li class="list-inline-item"><a href="">Food</a></li>
                            <li class="list-inline-item"><a href="">Health</a></li>
                            <li class="list-inline-item"><a href="">News</a></li>
                            <li class="list-inline-item"><a href="">Article</a></li>
                            <li class="list-inline-item"><a href="">Online</a></li>
                            <li class="list-inline-item"><a href="">Tags</a></li>
                            <li class="list-inline-item"><a href="">World</a></li>
                            <li class="list-inline-item"><a href="">Google</a></li>
                            <li class="list-inline-item"><a href="">Wordpress</a></li>
                            <li class="list-inline-item"><a href="">National</a></li>
                        </ul>
                    </div>
                    <div class="add-widget">
                        <a href=""><img src="{{ asset('assets_frontend/images/add-1.png') }}" alt="" class="img-fluid"></a>
                    </div>
                    <div class="newsletter-widget">
                        <img src="{{ asset('assets_frontend/images/apps.jpg') }}" alt="" class="img-fluid">
                        <div class="widget-layer">
                            <p>Stay Updated With <strong>TenNews</strong></p>
                            <h4>ANYTIME ANYWHERE</h4>
                            <span>Available On</span>
                            <ul class="list-unstyled">
                                <li><a href=""><i class="fa fa-android"></i></a></li>
                                <li><a href=""><i class="fa fa-apple"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Other News -->

@endsection