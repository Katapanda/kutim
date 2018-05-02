@extends('layouts.app')

{{-- include function --}}
@include('includes.function')

@section('title')
	Beranda
@endsection

@section('content')
    
    <!-- Slider area -->

    <section class="slider_area row m0">
        <div class="slider">
            <img src="{{ asset('upload/slider/banner.png') }}" width="100%" height="500px">
            <!-- <div data-thumb="{{ asset('upload/slider/banner_1.png') }}" data-src="{{ asset('upload/slider/banner_1.png') }}">
                <div class="camera_caption">
                   <div class="container">
                        <h5 class=" wow fadeInUp animated">Welcome to our</h5>
                        <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s">CLEAN, MODERN, MULTIPURPOSE THEME</h3>
                        <p class=" wow fadeInUp animated" data-wow-delay="0.8s">Our team of professionals will help you turn your dream home or flat into a reality fast. The Love Boat promises something for everyone. Now the world don't move to the beat of just one</p>
                        <a class=" wow fadeInUp animated" data-wow-delay="1s" href="#">Read More</a>
                   </div>
                </div>
            </div>
            <div data-thumb="{{ asset('upload/slider/banner_1.png') }}" data-src="{{ asset('upload/slider/banner_1.png') }}">
                <div class="camera_caption">
=======
    <section class="slider_area row m0" style="height: 350px">
        <div class="slider_inner" style="height: 350px">
            <div data-thumb="{{ asset('upload/slider/banner_11.png') }}" data-src="{{ asset('upload/slider/banner_11.png') }}">
            </div>
            <div data-thumb="{{ asset('upload/slider/banner_11.png') }}" data-src="{{ asset('upload/slider/banner_11.png') }}">
                <!-- <div class="camera_caption">
>>>>>>> 96b5a482c1cf79a50d7de2d5c45daddbb850a660
                   <div class="container">
                        <h5 class=" wow fadeInUp animated">Welcome to our</h5>
                        <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s">CLEAN ,MODERN, MULTIPURPOSE THEME</h3>
                        <p class=" wow fadeInUp animated" data-wow-delay="0.8s">Our team of professionals will help you turn your dream home or flat into a reality fast. The Love Boat promises something for everyone. Now the world don't move to the beat of just one</p>
                        <a class=" wow fadeInUp animated" data-wow-delay="1s" href="#">Read More</a>
                   </div>
                </div>
            </div> -->
        </div>
    </section>
    <!-- End Slider area -->

    <!-- Professional Builde -->
    <section class="professional_builder row">
        <div class="container">
           <div class="row builder_all">
                <div class="col-md-3 col-sm-6 builder">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <h4>BIDANG PERMUKIMAN</h4>
                    <p>
                    Melaksanakan penyiapan perumusan kebijakan, koordinasi, pembinaan, bimbingan dan pengendalian teknis lingkup Seksi Pendataan dan Perencanaan, Pencegahan dan Peningkatan Kualitas, Manfaat dan pengendalian.
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 builder">
                    <i class="fa fa-building" aria-hidden="true"></i>
                    <h4>BIDANG PERTAMANAN DAN PEMAKAMAN</h4>
                    <p>
                    Membantu Kepala Dinas dalam melaksanakan penyiapan bahan perumusan kebijakan teknis operasional kegiatan.
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 builder">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <h4>BIDANG PERUMAHAN</h4>
                    <p>
                    Melaksanakan penyiapan perumusan kebijakan, koordinasi, pembinaan, bimbingan dan pengendalian teknis lingkup Seksi Perencanaan Monitoring dan evaluasi, Penyediaan dan pembiayaan.
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 builder">
                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                    <h4>SEKRETARIAT</h4>
                    <p>
                    Sekretariat mempunyai  tugas pokok membantu Kepala Dinas dalam rangka melaksanakan koordinasi pelaksanaan tugas bidang dan pelayanan teknis serta administratif kepada seluruh satuan organisasi dalam Lingkungan Dinas Perumahan dan Kawasan Permukiman yang meliputi Perencanaan Program, Keuangan, Umum dan Kepagawaian.
                    </p>
                </div>
           </div>
        </div>
    </section>
    <!-- End Professional Builde -->

    <!-- About Us Area -->
    <section class="about_us_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>DINAS PERUMAHAN DAN KAWASAN PERMUKIMAN KUTAI TIMUR</h2>
                <h4>Beranda</h4>
            </div>
            <div class="row about_row">
                <div class="who_we_area col-md-7 col-sm-6">
                    <!-- <div class="subtittle">
                        <h2>SAMBUTAN</h2>
                    </div> -->
                    <p>
                        @foreach($sambutan as $sbtn)
                            {!! $sbtn->isi_sambutan !!}
                        @endforeach
                    </p>
                    <!-- <a href="#" class="button_all">Contact Now</a> -->
                </div>
                <div class="col-md-5 col-sm-6 about_client">
                    <img src="{{ asset('assets_frontend/images/bupati.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Area -->

    <section class="featured_works row" data-stellar-background-ratio="0.3" style="background-position: 50% -1484.1px;">
        <div class="tittle wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <h2>Foto</h2>
            <h4>DINAS PERUMAHAN DAN KAWASAN PERMUKIMAN KUTAI TIMUR</h4>
        </div>
        <div class="featured_gallery">
            @foreach($foto as $f)
                <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                    <img src="{{ asset($f->foto) }}" alt="" height="200px" width="100%">
                </div>
            @endforeach
        <div class="text-center col-md-12">
            <a href="{{ route('foto') }}" class="btn btn-default btn-sm"><strong>Lihat Foto Lainnya</strong></a>
        </div>
    </section>

    <section class="latest_blog_area">
        <div class="container">
            <div class="tittle wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <h2>Video</h2>
            <h4>DINAS PERUMAHAN DAN KAWASAN PERMUKIMAN KUTAI TIMUR</h4>
            </div>
            <div class="row latest_blog">
                <div class="col-md-4 col-sm-6 blog_content">
                     @foreach($video as $vd)
                        <div class="gallery_iner p0">
                            <embed width="100%" height="200"
                                src="{!! $vd->link_video !!}" allowfullscreen>
                                <div class="renovation_content">
                                    <a class="clipboard" href="#"><i class="fa fa-video-camera" aria-hidden="true"></i></a>
                                    <a class="tittle">{!! substr($vd->nama_kegiatan, 0, 35) . '...' !!}</a>
                                    <p>{!! substr($vd->keterangan, 0, 75) . '...' !!}</p>
                                </div>
                        </div>
                    @endforeach
            </div>
            <div class="text-center col-md-12">
                <a href="{{ route('video') }}" class="btn btn-default btn-sm"><strong>Lihat Video Lainnya</strong></a>
            </div>
        </div>
    </section>

    <!-- What ew offer Area -->
    <section class="what_we_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>TAUTAN TERKAIT</h2>
            </div>
            <div class="row construction_iner">
                <div class="col-md-1 col-sm-12"></div>
                <div class="col-md-3 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="{{ asset('assets_frontend/images/link/lpse.jpg') }}" alt="" height="110px" width="100%" style="padding-bottom: 20px" width="100%">
                   </div>
                   <div class="cns-content">
                        <i class="fa fa-link" aria-hidden="true"></i>
                        <a href="http://lpse.kutaitimurkab.go.id/" target="_blank">LPSE KUTAI TIMUR</a>
                        <p>Layanan Pengadaan Secara Elektronik (LPSE)</p><br>
                   </div>
                </div>
                <div class="col-md-3 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="{{ asset('assets_frontend/images/link/pu.jpg') }}" alt="" height="110px" width="100%" style="padding-bottom: 20px">
                   </div>
                   <div class="cns-content">
                        <i class="fa fa-link" aria-hidden="true"></i>
                        <a href="https://www.pu.go.id/" target="_blank">PU-net</a>
                        <p>Kementrian Pekerjaan Umum dan Perumahan Rakyat Republik Indonesia </p>
                   </div>
                </div>
                <div class="col-md-3 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="{{ asset('assets_frontend/images/link/sirup.jpg') }}" alt="" height="110px" width="100%" style="padding-bottom: 20px">
                   </div>
                   <div class="cns-content">
                        <i class="fa fa-link" aria-hidden="true"></i>
                        <a href="https://sirup.lkpp.go.id/sirup" target="_blank">SIRUP</a>
                        <p>Lembaga Kebijakan Pengadaan Barang/Jasa Pemerintah</p><br>
                   </div>
                </div>
                <div class="col-md-12 col-sm-12"></div>
                <div class="col-md-3 col-sm-12"></div>
                <div class="col-md-3 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="{{ asset('assets_frontend/images/link/pemerintah.jpg') }}" alt="" height="110px" width="100%" style="padding-bottom: 20px">
                   </div>
                   <div class="cns-content">
                        <i class="fa fa-link" aria-hidden="true"></i>
                        <a href="http://www.kutaitimurkab.go.id/" target="_blank">PEMERINTAH KUTIM</a>
                        <p>Link Pemerintahan Kutai Timur Kalimantan Timur</p><br>
                   </div>
                </div>
                <div class="col-md-3 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="{{ asset('assets_frontend/images/link/pamsimas.jpg') }}" alt="" height="110px" width="100%" style="padding-bottom: 20px">
                   </div>
                   <div class="cns-content">
                        <i class="fa fa-link" aria-hidden="true"></i>
                        <a href="http://pamsimas.pu.go.id/" target="_blank">PAMSIMAS</a>
                        <p>Link Pemerintahan Kutai Timur Kalimantan Timur</p><br>
                   </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End What ew offer Area -->

    <!-- Our Achievments Area -->
    <section class="our_achievments_area" data-stellar-background-ratio="0.3">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Informasi</h2>
                <h4>Dinas Perumahan dan Kawasan Permukiman Kabupaten Kutai Timur</h4>
            </div>
            <div class="achievments_row row">
                <div class="col-md-3 col-sm-6 p0 completed">
                    <i class="fa fa-connectdevelop" aria-hidden="true"></i>
                    <span class="counter">{{ count($berita) }}</span>
                    <h6>BERITA</h6>
                </div>
                <div class="col-md-3 col-sm-6 p0 completed">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span class="counter">{{ count($artikel) }}</span>
                    <h6>ARTIKEL</h6>
                </div>
                <div class="col-md-3 col-sm-6 p0 completed">
                    <i class="fa fa-child" aria-hidden="true"></i>
                    <span class="counter">{{ count($agenda) }}</span>
                    <h6>AGENDA</h6>
                </div>
                <div class="col-md-3 col-sm-6 p0 completed">
                    <i class="fa fa-trophy" aria-hidden="true"></i>
                    <span class="counter">{{ count($pengumuman) }}</span>
                    <h6>PENGUMUMAN</h6>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Achievments Area -->

@endsection