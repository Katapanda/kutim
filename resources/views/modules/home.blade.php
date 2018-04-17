@extends('layouts.app')

{{-- include function --}}
@include('includes.function')

@section('title')
	Beranda
@endsection

@section('content')
    
    <!-- Modal Sambutan-->
    <div class="modal fade" id="sambutan-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content" style="background-color: #EBE18C;">
                <div class="modal-header">
                    <img src="{{ asset('assets_frontend/images/logo.png') }}" class="img-responsive" alt="">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="background-color: #FFFFFF;">
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

                                @foreach($breaking_news as $breaking_new)

                                    <li><a href="{{ route('berita.detail', [ $breaking_new->id ]) }}"><i class="fa fa-dot-circle-o"></i>{{ $breaking_new->judul_berita }}</a></li>

                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Web Ticker -->

    <!-- Begin Carousel -->
    <section class="carousel-area">
        <div class="container">
            <div class="row">
                <div class="">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                          <!-- Slide One - Set the background image for this slide in the line below -->
                          <div class="carousel-item active">
                            <img src="{{ asset('upload/slider/slider_1.jpg') }}" alt="" height="450px" width="100%">
                            <div class="carousel-caption d-none d-md-block">
                              <h3>First Slide</h3>
                              <p>This is a description for the first slide.</p>
                            </div>
                          </div>
                          <!-- Slide Two - Set the background image for this slide in the line below -->
                          <div class="carousel-item">
                            <img src="{{ asset('upload/slider/slider_2.jpg') }}" alt="" height="450px" width="100%">
                            <div class="carousel-caption d-none d-md-block">
                              <h3>Second Slide</h3>
                              <p>This is a description for the second slide.</p>
                            </div>
                          </div>
                          <!-- Slide Three - Set the background image for this slide in the line below -->
                          <div class="carousel-item">
                            <img src="{{ asset('upload/slider/slider_3.jpg') }}" alt="" height="450px" width="100%">
                            <div class="carousel-caption d-none d-md-block">
                              <h3>Third Slide</h3>
                              <p>This is a description for the third slide.</p>
                            </div>
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Carousel -->

    <!-- Artikel -->
    <section class="oth-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="more-top">
                        <h4>ARTIKEL</h4>
                    </div>

                    @foreach($artikel_page_1 as $artikel)

                        <div class="more-content">
                            <div class="more-img">
                                <a href=""><img src="{{ asset($artikel->foto_artikel) }}" alt="" class="img-responsive" width="260px" height="169px"></a>
                            </div>
                            <div class="img-content">
                                <h6><a href="">{{ $artikel->judul_artikel }}</a></h6>
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">FAMILY</li>
                                    <li class="list-inline-item">{{ tanggal_indo($artikel->created_at) }}</li>
                                </ul>
                                <p>{!! substr($artikel->isi_artikel, 0, 170) . '...' !!} </p>
                            </div>
                        </div>

                    @endforeach
                    
                    @if(count($artikel_page_1) > 7)
                        <div class="more-content">
                            <div class="img-content text-right">
                                <a href="{{ route('artikel') }}" class="btn btn-md" style="background-color: #BFB35A; color: #ffffff"> Lihat Selengkapnya</a>
                            </div>
                        </div>
                    @endif

                </div>
                <div class="col-lg-4 col-md-12" style="background-color: #BFB35A;">
                    <div class="more-top">
                        <h4>KEPALA DINAS</h4>
                    </div>
                    <div class="add-widget text-center">
                        <div class="card" style="width: 20rem; background-color: #EBE18C">
                            <h6 class="card-header">Foto Kepala Dinas</h6>
                            <a href=""><img src="{{ asset('upload/foto_struktur_organisasi/10112378.JPG') }}" alt="" class="img-fluid" width="50%" height="300px"></a><br/>
                            <p class="card-text"><h6>Julio Febryanto S.Kom</h6></p><br/>
                        </div>    
                    </div>

                    <div class="login-widget">
                        <h4>FOTO</h4>
                        <div class="card" style="width: 20rem; background-color: #EBE18C">
                            @if(count($videos) > 0)
                                @foreach($videos as $video)
                                   <img src="{{ asset('upload/foto_berita/jemaah-umrah-indonesia-kini-tak-bisa-transit-ke-banyak-negara.jpg') }}" alt="" class="card-img-top img-responsive" width="260px" height="169px">
                                    </div>
                                @endforeach

                                <div class="card-footer text-center">
                                    <a href="{{ route('foto') }}" class="btn btn-default btn-sm">Lihat Selengkapnya</a>
                                </div>

                            @else
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="" allowfullscreen></iframe>
                                </div>
                                <div class="card-footer text-center">
                                    <p class="btn btn-default btn-sm text-danger">Tidak ada Foto</p>
                                </div>
                            @endif    

                        </div>
                    </div>
                    <div class="tag-widget">
                        <h4>VIDEO</h4>
                        <div class="card" style="width: 20rem; background-color: #EBE18C">
                            @if(count($videos) > 0)
                                @foreach($videos as $video)
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="{!! $video->link_video !!}" allowfullscreen></iframe>
                                    </div>
                                @endforeach

                                <div class="card-footer text-center">
                                    <a href="{{ route('video') }}" class="btn btn-default btn-sm">Lihat Selengkapnya</a>
                                </div>

                            @else
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="" allowfullscreen></iframe>
                                </div>
                                <div class="card-footer text-center">
                                    <p class="btn btn-default btn-sm text-danger">Tidak ada Video</p>
                                </div>
                            @endif    
                            
                        </div>
                    </div>
                    <div class="tag-widget">
                        <h4>TAG LIST</h4>
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a href="{{ route('berita') }}">Berita</a></li>
                            <li class="list-inline-item"><a href="{{ route('artikel') }}">Artikel</a></li>
                            <li class="list-inline-item"><a href="{{ route('agenda') }}">Agenda</a></li>
                            <li class="list-inline-item"><a href="{{ route('pengumuman') }}">Pengumuman</a></li>
                            <li class="list-inline-item"><a href="{{ route('foto') }}">Foto</a></li>
                            <li class="list-inline-item"><a href="{{ route('video') }}">Video</a></li>
                            <li class="list-inline-item"><a href="{{ route('peta') }}">Peta</a></li>
                            <li class="list-inline-item"><a href="{{ route('kontak') }}">Kontak</a></li>
                            <li class="list-inline-item"><a href="{{ route('sejarah') }}">Sejarah</a></li>
                            <li class="list-inline-item"><a href="{{ route('struktur_organisasi') }}">Struktur Organisasi</a></li>
                            <li class="list-inline-item"><a href="{{ route('tupoksi') }}">Tupoksi</a></li>
                            <li class="list-inline-item"><a href="{{ route('visi_misi') }}">Visi & Misi</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Artikel -->

@endsection