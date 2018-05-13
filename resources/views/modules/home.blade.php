@extends('layouts.app')

{{-- include function --}}
@include('includes.function')

@section('title')
    Beranda
@endsection

@section('content')

    <style>
        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {opacity: 0.7;}

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 9999; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation */
        .modal-content, #caption {    
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {-webkit-transform:scale(0)} 
            to {-webkit-transform:scale(1)}
        }

        @keyframes zoom {
            from {transform:scale(0)} 
            to {transform:scale(1)}
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
            .modal-content {
                width: 100%;
            }
        }
    </style>
    
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
    <section class="professional_builder row" style="background-color: rgba(0, 0, 0, 0.82);">
        <div class="container">
           <div class="row builder_all">
                @foreach($bidang as $bd)
                    <div class="col-md-3 col-sm-6 builder">
                        <i class="fa fa-file-text-o" aria-hidden="true"></i>
                        <h4><a href="{{ route('bidang') }}/{{ $bd->id }}" style="color: #fff">{{ $bd->judul }}</a></h4>
                    </div>
                @endforeach

                <!-- <div class="col-md-3 col-sm-6 builder">
                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                    <h4 style="color: #fff">SEKRETARIAT</h4>
                    <p style="color: #fff">
                    Sekretariat mempunyai  tugas pokok membantu Kepala Dinas dalam rangka melaksanakan koordinasi pelaksanaan tugas bidang dan pelayanan teknis serta administratif kepada seluruh satuan organisasi dalam Lingkungan Dinas Perumahan dan Kawasan Permukiman yang meliputi Perencanaan Program, Keuangan, Umum dan Kepagawaian.
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 builder">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <h4 style="color: #fff">BIDANG PERUMAHAN</h4>
                    <p style="color: #fff">
                    Melaksanakan penyiapan perumusan kebijakan, koordinasi, pembinaan, bimbingan dan pengendalian teknis lingkup Seksi Perencanaan Monitoring dan evaluasi, Penyediaan dan pembiayaan.
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 builder">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <h4 style="color: #fff">BIDANG KAWASAN PERMUKIMAN</h4>
                    <p style="color: #fff">
                    Melaksanakan penyiapan perumusan kebijakan, koordinasi, pembinaan, bimbingan dan pengendalian teknis lingkup Seksi Pendataan dan Perencanaan, Pencegahan dan Peningkatan Kualitas, Manfaat dan pengendalian.
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 builder">
                    <i class="fa fa-building" aria-hidden="true"></i>
                    <h4 style="color: #fff">UPT PERTAMANAN DAN PEMAKAMAN</h4>
                    <p style="color: #fff">
                    Membantu Kepala Dinas dalam melaksanakan penyiapan bahan perumusan kebijakan teknis operasional kegiatan.
                    </p>
                </div> -->
           </div>
        </div>
    </section>
    <!-- End Professional Builde -->

    <!-- About Us Area -->
    <section class="about_us_area row">
        <div class="container">
            <!--<div class="tittle wow fadeInUp">-->
            <!--    <h2>DINAS PERUMAHAN DAN KAWASAN PERMUKIMAN KUTAI TIMUR</h2>-->
            <!--    <h4>Beranda</h4>-->
            <!--</div>-->
            <div class="row about_row">
                <div class="who_we_area col-md-7 col-sm-6">
                    <!-- <div class="subtittle">
                        <h2>SAMBUTAN</h2>
                    </div> -->
                    <p style="margin-top:-50px">
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
            <h2>Foto & Vide0</h2>
            <h4>DINAS PERUMAHAN DAN KAWASAN PERMUKIMAN KUTAI TIMUR</h4>
        </div>
        <div class="featured_gallery">
            <div class="col-md-7">
            @foreach($foto as $f)
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <img id="myImg" onclick='gambar("{{ asset($f->foto) }}")' src="{{ asset($f->foto) }}" alt="" height="200px" width="100%">
                </div>
            @endforeach
            </div>
            <div class="col-md-5">
                @foreach($video as $vd)
                        <div class="col-md-12 col-sm-12">
                            <div class="renovation">
                                <iframe width="100%" height="400"
                                src="{!! $vd->link_video !!}" allowfullscreen="allowfullscreen"></iframe>
                                <div class="renovation_content">
                                    <a class="clipboard" href="#"><i class="fa fa-video-camera" aria-hidden="true"></i></a>
                                    <a class="tittle">{!! substr($vd->nama_kegiatan, 0, 35) . '...' !!}</a>
                                    <p>{!! substr($vd->keterangan, 0, 75) . '...' !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>
        <div class="text-center col-md-12">
            <a href="{{ route('foto') }}" class="btn btn-default btn-sm"><strong>Lihat Foto Lainnya</strong></a>
            <a href="{{ route('video') }}" class="btn btn-default btn-sm"><strong>Lihat Video Lainnya</strong></a>
        </div>
    </section>

    <!-- <section class="latest_blog_area">
        <div class="container">
            <div class="tittle wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <h2>Video</h2>
            <h4>DINAS PERUMAHAN DAN KAWASAN PERMUKIMAN KUTAI TIMUR</h4>
            </div>
            <div class="row latest_blog">
                <div class="row blog_tow_row">
                    @foreach($video as $vd)
                        <div class="col-md-4 col-sm-6">
                            <div class="renovation">
                                <embed width="100%" height="200"
                                src="{!! $vd->link_video !!}" allowfullscreen>
                                <div class="renovation_content">
                                    <a class="clipboard" href="#"><i class="fa fa-video-camera" aria-hidden="true"></i></a>
                                    <a class="tittle">{!! substr($vd->nama_kegiatan, 0, 35) . '...' !!}</a>
                                    <p>{!! substr($vd->keterangan, 0, 75) . '...' !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
               </div>
            </div><br>
            <div class="text-center col-md-12">
                <a href="{{ route('video') }}" class="btn btn-default btn-sm"><strong>Lihat Video Lainnya</strong></a>
            </div>
        </div>
    </section> -->

    <!-- What ew offer Area -->
    <section class="what_we_area row" style="background-color: rgba(0, 0, 0, 0.82);">
        <div class="container">
            <div class="tittle wow fadeInUp" >
                <h2 style="color: #f8b81d">TAUTAN TERKAIT</h2>
            </div>
            <div class="row construction_iner">
                <div class="col-md-1 col-sm-12"></div>
                <div class="col-md-2 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="{{ asset('assets_frontend/images/link/lpse.jpg') }}" alt="" height="90px" width="100%" style="padding-bottom: 20px" width="100%">
                   </div>
                   <div class="cns-content" style="padding: 0px 5px">
                        <!--<i class="fa fa-link" aria-hidden="true"></i>-->
                        <a href="http://lpse.kutaitimurkab.go.id/" target="_blank" style="font-size: 12px">LPSE KUTAI TIMUR</a>
                        <p style="font-size: 11px">Layanan Pengadaan Secara Elektronik (LPSE)</p><br>
                   </div>
                </div>
                <div class="col-md-2 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="{{ asset('assets_frontend/images/link/pu.jpg') }}" alt="" height="90px" width="100%" style="padding-bottom: 20px">
                   </div>
                   <div class="cns-content" style="padding: 0px 5px">
                        <!--<i class="fa fa-link" aria-hidden="true"></i>-->
                        <a href="https://www.pu.go.id/" target="_blank" style="font-size: 11px">PU-net</a>
                        <p style="font-size: 11px">Kementrian Pekerjaan Umum dan Perumahan Rakyat Republik Indonesia </p>
                   </div>
                </div>
                <div class="col-md-2 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="{{ asset('assets_frontend/images/link/sirup.jpg') }}" alt="" height="90px" width="100%" style="padding-bottom: 20px">
                   </div>
                   <div class="cns-content" style="padding: 0px 5px">
                        <!--<i class="fa fa-link" aria-hidden="true"></i>-->
                        <a href="https://sirup.lkpp.go.id/sirup" target="_blank" style="font-size: 11px">SIRUP</a>
                        <p style="font-size: 11px">Lembaga Kebijakan Pengadaan Barang/Jasa Pemerintah</p><br>
                   </div>
                </div>{{-- 
                <div class="col-md-12 col-sm-12"></div>
                <div class="col-md-2 col-sm-12"></div> --}}
                <div class="col-md-2 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="{{ asset('assets_frontend/images/link/pemerintah.jpg') }}" alt="" height="90px" width="100%" style="padding-bottom: 20px">
                   </div>
                   <div class="cns-content" style="padding: 0px 5px">
                        <!--<i class="fa fa-link" aria-hidden="true"></i>-->
                        <a href="http://www.kutaitimurkab.go.id/" target="_blank" style="font-size: 11px">PEMERINTAH KUTIM</a>
                        <p style="font-size: 11px">Link Pemerintahan Kutai Timur Kalimantan Timur</p><br>
                   </div>
                </div>
                <div class="col-md-2 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="{{ asset('assets_frontend/images/link/pamsimas.jpg') }}" alt="" height="90px" width="100%" style="padding-bottom: 20px">
                   </div>
                   <div class="cns-content" style="padding: 0px 5px">
                        <!--<i class="fa fa-link" aria-hidden="true"></i>-->
                        <a href="http://pamsimas.pu.go.id/" target="_blank" style="font-size: 11px">PAMSIMAS</a>
                        <p style="font-size: 11px">Link Pamsimas Kutai Timur Kalimantan Timur</p><br>
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

    <!-- The Modal Foto -->
    <div id="myModal" class="modal">
      <span class="close" style="">&times; close</span>
      <img class="modal-content" id="img01">
      <div id="caption"></div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('myImg');
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        function gambar(src){
            modal.style.display = "block";
            modalImg.src = src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
            modal.style.display = "none";
        }
    </script>

@endsection