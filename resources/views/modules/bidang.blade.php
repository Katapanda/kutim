@extends('layouts.app')

{{-- include function --}}
@include('includes.function')

@section('title')
	Bidang
@endsection

@section('content')
    
	<!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>{{ $bidang_detail->judul }}</h2>
        <ol class="breadcrumb">
            <li><a href="">Informasi</a></li>
            <li><a href="" class="active">{{ $bidang_detail->judul }}</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- Dasar Hukum -->
    <section class="building_construction_area">
        <div class="container">
            <div class="row building_construction_row">
                <div class="col-sm-8 constructing_laft">
                    <h2>{{ $bidang_detail->judul }}</h2>
                    <p>
                        {!! $bidang_detail->isi_bidang !!}
                    </p>
                </div>
                
                @include('includes.sidebar_menu_bidang')

            </div>
        </div>
    </section>
    <!-- End Dasar Hukum -->

@endsection