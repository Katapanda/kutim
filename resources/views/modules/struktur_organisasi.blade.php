@extends('layouts.app')

{{-- include function --}}
@include('includes.function')

@section('title')
	Struktur Organisasi
@endsection

@section('content')
    
	<!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Struktur Organisasi</h2>
        <ol class="breadcrumb">
            <li><a href="">Informasi</a></li>
            <li><a href="" class="active">Struktur Organisasi</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- Struktur Organisasi -->
    <section class="building_construction_area">
        <div class="container">
            <div class="row building_construction_row">
                <div class="col-sm-8 constructing_laft">
                    <h2>Struktur Organisasi</h2>
                    
                </div>
                
                @include('includes.sidebar_menu_informasi')

            </div>
        </div>
    </section>
    <!-- End Struktur Organisasi -->

@endsection