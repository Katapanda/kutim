@extends('admin.layouts.app')

@section('title')
    Edit Agenda
@endsection

@section('content')
    
    <div class="row">
        <div class="main-header">
            <h4>Edit Agenda</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-header-text">Edit Agenda</h5>
                    {{-- button form modal --}}
                    <button type="button" onclick="addForm()" class="btn btn-inverse-primary waves-effect waves-light btn-sm" style="float: right">
                      <i class="icofont icofont-plus"></i> Tambah Data
                    </button>

                </div>
                <div class="card-block" style="float: center;">
                    <form action="{{ url('admin/agenda') }}/editisi/{{ $isi['id'] }}" id="form-contact" method="post"  data-toggle="validator" enctype="multipart/form-data">
                        {{ csrf_field() }} {{ method_field('PATCH') }}
                        <div class="modal-body">
                          <input type="hidden" name="id" id="id">
                          <div class="md-input-wrapper">
                            <input type="text" class="md-form-control md-static" name="jenis_kegiatan" required placeholder="Jenis Kegiatan" value="{{ $isi['jenis_kegiatan'] }}">
                            <label>Jenis Kegiatan</label>
                            <span class="help-block with-errors"></span>
                          </div>
                          <div class="md-input-wrapper">
                            <input type="text" class="md-form-control md-static" name="nama_kegiatan" required placeholder="Nama Kegiatan" value="{{ $isi['nama_kegiatan'] }}"><label>Nama Kegiatan</label>
                            <span class="help-block with-errors"></span>
                          </div>
                          <div class="md-input-wrapper">
                            <input type="text" class="md-form-control md-static" name="perihal" required placeholder="Perihal" value="{{ $isi['perihal'] }}">
                            <label>Perihal</label>
                            <span class="help-block with-errors"></span>
                          </div>
                          <div class="md-input-wrapper">
                            <input type="text" class="md-form-control md-static" name="lokasi" required placeholder="Lokasi" value="{{ $isi['lokasi'] }}">
                            <label>Lokasi</label>
                            <span class="help-block with-errors"></span>
                          </div>
                          <div class="md-input-wrapper">
                            <input type="text" class="md-form-control md-static" name="tanggal" id="datepicker" required placeholder="Tanggal" value="{{ $isi['tanggal'] }}">
                            <label>Tanggal</label>
                            <span class="help-block with-errors"></span>
                          </div>
                          <div class="md-input-wrapper">
                            <input type="text" class="md-form-control md-static" name="waktu" id="time" required placeholder="Waktu" value="{{ $isi['waktu'] }}">
                            <label>Waktu</label>
                            <span class="help-block with-errors"></span>
                          </div>
                          <div class="md-input-wrapper">
                            <input type="text" class="md-form-control md-static" name="hadirin" required placeholder="Hadirin" value="{{ $isi['hadirin'] }}">
                            <label>Hadirin</label>
                            <span class="help-block with-errors"></span>
                          </div>
                          <div class="md-input-wrapper" id="keterangan_kegiatan">
                            <textarea name="keterangan_kegiatan" id="editor">{{ $isi['keterangan_kegiatan'] }}</textarea>
                            <span class="help-block with-errors"></span>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-inverse-default waves-effect waves-light btn-sm" data-dismiss="modal"><i class="icofont icofont-close"></i> Close</button>
                          <button type="submit" class="btn btn-inverse-primary waves-effect waves-light btn-sm"><i class="icofont icofont-save"></i> Simpan</button>
                        </div>
                      </form>   
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    
    <script type="text/javascript">
        tinymce.init({
          selector: 'textarea',
          height: 500,
          menubar: false,
          plugins: [
            'advlist autolink lists link image charmap print preview anchor textcolor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table contextmenu paste code help wordcount'
          ],
          toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
          content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css']
        });
        $("#datepicker").bootstrapMaterialDatePicker({ weekStart : 0, time: false, format : 'YYYY/MM/DD' });
        $('#time').bootstrapMaterialDatePicker({ date: false, format : 'HH:mm'});
    </script>
@endpush

