@extends('layouts.app')

{{-- include function --}}
@include('includes.function')

@section('title')
	Struktur Organisasi
@endsection

@section('content')
    
    <link rel="stylesheet" href="{{ asset('assets/chart/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/chart/css/jquery.orgchart.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/chart/css/style.css') }}">
    <style type="text/css">
        .orgchart { background: #fff; }
        .orgchart td.left, .orgchart td.right, .orgchart td.top { border-color: #aaa; }
        .orgchart td>.down { background-color: #aaa; }
        .orgchart .middle-level .title { background-color: #006699; }
        .orgchart .middle-level .content { border-color: #006699; }
        .orgchart .product-dept .title { background-color: #009933; }
        .orgchart .product-dept .content { border-color: #009933; }
        .orgchart .rd-dept .title { background-color: #993366; }
        .orgchart .rd-dept .content { border-color: #993366; }
        .orgchart .pipeline1 .title { background-color: #996633; }
        .orgchart .pipeline1 .content { border-color: #996633; }
        .orgchart .frontend1 .title { background-color: #cc0066; }
        .orgchart .frontend1 .content { border-color: #cc0066; }
    </style>
    <style type="text/css">
        .orgchart .second-menu-icon {
            transition: opacity .5s;
            opacity: 0;
            right: -5px;
            top: -5px;
            z-index: 2;
            color: rgba(68, 157, 68, 0.5);
            font-size: 14px;
            position: absolute;
        }
        .orgchart .second-menu-icon:hover { color: #449d44; }
        .orgchart .node:hover .second-menu-icon { opacity: 1; }
        .orgchart .node .second-menu {
            display: none;
            position: absolute;
            top: 0;
            right: -70px;
            border-radius: 35px;
            box-shadow: 0 0 10px 1px #999;
            background-color: #fff;
            z-index: 1;
        }
        .orgchart .node .second-menu .avatar {
            width: 60px;
            height: 60px;
            border-radius: 30px;
            float: left;
            margin: 5px;
        }
    </style>

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
                <div class="col-md-12 constructing_laft">
                    <h2>Struktur Organisasi</h2>

                        <div id="chart-container"></div>

                    </div>
                </div>
                
                <!-- @include('includes.sidebar_menu_profil') -->

            </div>
        </div>
    </section>
    <!-- End Struktur Organisasi -->
@endsection