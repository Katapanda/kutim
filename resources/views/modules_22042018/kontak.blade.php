@extends('layouts.app')

{{-- include function --}}
@include('includes.function')

@section('title')
	Kontak
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
    
    <!-- Halaman Kontak -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-form">
                        <h4>HUBUNGI KAMI</h4>
                        <form id="ajax-contact" method="post" action="send.php">
                            <div class="row">
                                <div class="col-lg-6 ">
                                    <p><input type="text" id="name" name="name" placeholder="NAMA LENGKAP"></p>
                                 </div>
                                <div class="col-lg-6">
                                    <p><input type="text" id="email" name="email" placeholder="EMAIL"></p>
                                </div>
                                <div class="col-lg-12">
                                    <p><textarea name="message" id="message" placeholder="PESAN"></textarea></p>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit">KIRIM</button>
                                </div>
                            </div>
                            <div id="form-messages"></div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-info">
                        <h4>INFORMASI KONTAK</h4>
                        <ul class="list-unstyled con-info">
                            <li><span>ALAMAT :</span> 123, King Street, New York, NY, USA.</li>
                            <li><span>TELEPON :</span>+1 (435) 879 6453</li>
                            <li><span>FAX :</span>+1 (435) 879 6451</li>
                            <li><span>EMAIL :</span>info@tennews.com</li>
                            <li><span>JAM KERJA :</span>Mon-Fri : 08:00-18:00<br>Sat-Sun : 08:00-13:00</li>
                        </ul>
                        <ul class="list-unstyled list-inline social">
                            <li class="list-inline-item"><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="fa fa-linkedin"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="fa fa-rss"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Halaman Kontak -->

@endsection