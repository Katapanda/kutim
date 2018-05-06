@extends('layouts.app')

{{-- include function --}}
@include('includes.function')

@section('title')
	Pengaduan
@endsection

@section('content')
    
	<!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Pengaduan</h2>
        <ol class="breadcrumb">
            <li><a href="">Informasi</a></li>
            <li><a href="" class="active">Pengaduan</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- Pengaduan -->
    <section class="building_construction_area">
        <div class="container">
            <div class="row building_construction_row">
                <div class="col-sm-8 constructing_laft">
                    <h2>Pengaduan</h2>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                          <strong>Berhasil!</strong> Pengaduan keluhan anda telah terkirim.
                        </div>
                    @endif
                    <p>
                        <form id="form-contact" method="post" action="{{ route('tambah_keluhan') }}" data-toggle="validator" enctype="multipart/form-data">
                        {{ csrf_field() }} {{ method_field('POST') }}
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Judul Keluhan</label>
                            <input type="text" class="form-control" name="judul_keluhan" required placeholder="Judul">
                            <span class="help-block with-errors"></span>
                          </div>
                          <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="isi_keluhan" required class="form-control" placeholder="Masukan Keterangan Untuk Isi Pengaduan"></textarea>
                            <span class="help-block with-errors"></span>
                          </div>
                          <div class="form-group">
                                <label>Foto</label>
                                <input type="file" class="form-control" name="foto">
                                <small style="color: red">Masukan foto dengan maksimal ukuran 2 mb</small>
                          </div>
                        </div>
                            <div class="col-md-4 pull-right">
                                <button type="submit" class="btn btn-warning btn-block btn-sm"><i class="icofont icofont-save"></i> Simpan</button>
                            </div>
                      </form>
                    </p>
                </div>
                
                @include('includes.sidebar_menu_profil')

            </div>
        </div>
    </section>
    <!-- End Pengaduan -->

@endsection