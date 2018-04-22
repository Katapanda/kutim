@extends('layouts.app')

{{-- include function --}}
@include('includes.function')

@section('title')
	Berita
@endsection

@section('content')
	
	<!-- Modal Sambutan-->
    <div class="modal fade" id="sambutan-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="{{ asset('assets_frontend/images/logo.png') }}" class="img-responsive" alt="">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach($sambutans as $sambutan)
                        {!! $sambutan->isi_sambutan !!}
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Web Ticker -->
    <section class="top-news">
        <div class="container">
            <div class="news-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ticker d-flex justify-content-between">
                            <div class="news-head">
                                <span>BERITA TERBARU<i class="fa fa-caret-right"></i></span>
                            </div>
                            <ul id="webTicker">

                                @foreach($breaking_news as $brk)

                                    <li><a href="{{ route('berita.detail', [$brk->id]) }}"><i class="fa fa-dot-circle-o"></i>{{ $brk->judul_berita }}</a></li>

                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Web Ticker -->

    <!-- Berita Utama -->
    <section class="slider-area">
        <div class="container">
            <div class="row">
                  
                <div class="col-lg-8 col-md-12 padding-fix-r">
                    <div class="owl-carousel owl-slider">
                        @foreach($sliders as $slider)
                            <div class="slider-content">
                            {{-- <img src="{{ asset('assets_frontend/images/slider-1.jpg') }}" alt="" class="img-fluid"> --}}
                            <img src="{{ asset($slider->foto_berita) }}" alt="" class="img-fluid" style="height: 470px" width="100%">
                            <div class="slider-layer" style="width: 100%;">
                                <p>
                                    <a href="{{ route('berita.detail', [$slider->id]) }}" style="color: #ffffff; text-align: left;">
                                        
                                        {!! substr($slider->isi_berita, 0, 200) . '...' !!}   
                                        
                                    </a>
                                </p>
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">{!! substr($slider->judul_berita, 0, 20) . '...' !!} </li>
                                    <li class="list-inline-item">{{ tanggal_indo($slider->tanggal_publish) }}</li>
                                </ul>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 slider-fix">

                    @foreach($slider_sides as $slider_side)

                        @if(strlen($slider_side->isi_berita) > 100)

                            <div class="slider-sidebar sidebar-o">
                                <img src="{{ asset($slider_side->foto_berita) }}" alt="" class="img-fluid" style="height: 230px" width="100%">
                                <div class="sidebar-layer">
                                    <p>
                                        <a href="{{ route('berita.detail', [$slider_side->id]) }}">
                                            {!! substr($slider_side->isi_berita, 0, 100) . '...' !!} 
                                        </a>
                                    </p>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">
                                            @if(strlen($slider_side->judul_berita) > 10)
                                            
                                                {!! substr($slider_side->judul_berita, 0, 10) . '...' !!}   
                                            
                                            @else

                                               {!! $slider_side->judul_berita !!}

                                            @endif
                                        </li>
                                        <li class="list-inline-item">{{ tanggal_indo($slider_side->tanggal_publish) }}</li>
                                    </ul>
                                </div>
                            </div>
                                                
                        @else

                           {!! $slider_side->isi_berita !!}

                        @endif

                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- End Berita Utama -->

    <section class="oth-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="more-top">
                        <h4>BERITA</h4>
                    </div>

                    @foreach($berita as $brt)

                    	<div class="col-md-8">
		                    <div class="more-content">
		                        <div class="more-img">
		                            <a href=""><img src="{{ asset($brt->foto_berita) }}" alt="" class="img-responsive" width="260px" height="169px"></a>
		                        </div>
		                        <div class="img-content">
		                            <h6>
		                            	<a href="{{ route('berita.detail', [$brt->id]) }}">{!! substr($brt->judul_berita, 0, 50) . '...' !!}</a>
			                        </h6>
		                            <ul class="list-unstyled list-inline">
		                                {{-- <li class="list-inline-item">FAMILY</li> --}}
		                                <li class="list-inline-item">
		                                	{{ tanggal_indo($brt->tanggal_publish) }}
		                                </li>
		                            </ul>
		                            <p>{!! substr($brt->isi_berita, 0, 150) . '...' !!} </p>
		                        </div>
		                    </div>
		                </div>

                    @endforeach

                </div>
            </div>
        </div>
    </section>

@endsection    