@extends('layouts.app')

{{-- include function --}}
@include('includes.function')

@section('title')
	Visi & Misi
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

    <!-- Visi & Misi -->
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="img-content">
                        <br/>
                        @if(count($visi_misi) > 0)
                            
                            <h4>Visi</h4>
                            <p>@foreach($visi_misi as $vm) {{ $vm->visi }} @endforeach</p>

                            <h4>Misi</h4>
                            <p>@foreach($visi_misi as $vm) {{ $vm->misi }} @endforeach</p>
                        
                        @endif
                        <br/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Visi & Misi -->

@endsection