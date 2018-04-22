@extends('layouts.app')

{{-- include function --}}
@include('includes.function')

@section('title')
	Visi & Misi
@endsection

@section('content')
    
	<!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Visi dan Misi</h2>
        <ol class="breadcrumb">
            <li><a href="">Informasi</a></li>
            <li><a href="" class="active">Visi dan Misi</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- Visi & Misi -->
    <section class="building_construction_area">
        <div class="container">
            <div class="row building_construction_row">
                <div class="col-sm-8 constructing_laft">
                    <h2>Visi dan Misi</h2>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                    <div class="col-md-6 ipsum">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo-do consequat.</p>
                        <ul class="excavator">
                            <li><i class="fa fa-chevron-circle-right"></i>Hydraulic Excavator</li>
                            <li><i class="fa fa-chevron-circle-right"></i>Piling Equipment</li>
                            <li><i class="fa fa-chevron-circle-right"></i>Port Machinery</li>
                            <li><i class="fa fa-chevron-circle-right"></i>Concrete Pump</li>
                            <li><i class="fa fa-chevron-circle-right"></i>Excavators &amp; more</li>
                        </ul>
                    </div>
                    <div class="col-md-12 p0">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                </div>
                
                @include('includes.sidebar_menu_informasi')

            </div>
        </div>
    </section>
    <!-- End Visi & Misi -->

@endsection