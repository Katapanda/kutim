@extends('admin.layouts.app')

@section('title')
    Agenda
@endsection

@section('content')
    
    <div class="row">
        <div class="main-header">
            <h4>Agenda</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-header-text">Agenda List</h5>
                    {{-- button form modal --}}
                    <button type="button" onclick="addForm()" class="btn btn-inverse-primary waves-effect waves-light btn-sm" style="float: right">
                      <i class="icofont icofont-plus"></i> Tambah Data
                    </button>

                </div>
                <div class="card-block" style="float: center;">
                    <div class="row">
                        <div class="col-md-12">
                            <h6>Filter</h6>
                            <form id="search-form" class="form-inline" role="form">
                                <div class="form-group">
                                    <input type="text" id="jenis_kegiatan" name="jenis_kegiatan" class="form-control" placeholder="Role Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="nama_kegiatan" name="nama_kegiatan" class="form-control" placeholder="Description">
                                </div>
                                
                                <button type="submit" class="btn btn-sm btn-primary">Filter</button>
                                <button type="button" id="show-data" class="btn btn-inverse-info waves-effect waves-light btn-sm">Tampilkan Semua</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-block">
                    <div class="row">
                        <div class="col-sm-12 table-responsive">
                            <table id="agenda-table" class="table table-stripped">
                                <thead>
                                    <tr>
                                        <th>Jenis akegiatan</th>
                                        <th>Nama Kegiatan</th>
                                        <th>Lokasi</th>
                                        <th>Keterangan Kegiatan</th>
                                        <th style="min-width: 250px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- include form modal --}}
    @include('admin.modules.agenda.form')

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
    <script type="text/javascript">
        
        var oTable = $('#agenda-table').DataTable({
            dom: "<'row'<'col-xs-12'<'col-xs-6'l><'col-xs-6'p>>r>"+
            "<'row'<'col-xs-12't>>"+
            "<'row'<'col-xs-12'<'col-xs-6'i><'col-xs-6'p>>>",
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.api.agenda') }}",
                data: function (d) {
                    d.jenis_kegiatan = $('input[name=jenis_kegiatan]').val();
                    d.nama_kegiatan = $('input[name=nama_kegiatan]').val();
                }
            },
            columns: [
                {data: 'jenis_kegiatan', name: 'jenis_kegiatan'},
                {data: 'nama_kegiatan', name: 'nama_kegiatan'},
                {data: 'lokasi', name: 'lokasi'},
                {data: 'keterangan_kegiatan', name: 'keterangan_kegiatan'},
                {data: 'action', name: 'action', className: 'text-center', orderable: false, searchable: false}

                // {data: 'id', name: 'id', width: '2%'},
                // {data: 'role_name', name: 'role_name', className: '', width: '15%'},
                // {data: 'description', name: 'description', width: '40%', orderable: false},
                // {data: 'action', name: 'action', className: 'text-center', width: '15%', orderable: false, searchable: false}
            ]
        });

        $('#search-form').on('submit', function(e) {
            oTable.draw();
            e.preventDefault();
        });

        $('#show-data').on('click', function(e) {
            $('#search-form')[0].reset();
            oTable.draw();
            e.preventDefault();
        });

        function addForm(){
            save_method = 'add';
            $('input[name=_method]').val('POST');
            $('#modal-form').modal('show');
            $('#modal-form form')[0].reset();
            $('.modal-title').text('Tambah Agenda');
        }
        function editForm(id){
            save_method = 'edit';
            $('input[name=_method]').val('PATCH');
            $('#modal-form form')[0].reset();

            $.ajax({
                url: "{{ url('admin/agenda') }}" + '/' + id + "/edit",
                type: "GET",
                dataType: "JSON",
                success: function(data){
                    $('#modal-form').modal('show');
                    $('.modal-title').text('Edit Agenda');

                    $('#id').val(data.id);
                    $('[name=jenis_kegiatan]').val(data.jenis_kegiatan);
                    $('[name=nama_kegiatan]').val(data.nama_kegiatan);
                    $('[name=perihal]').val(data.perihal);
                    $('[name=lokasi]').val(data.lokasi);
                    $('[name=hadirin]').val(data.hadirin);
                    $('[name=tanggal]').val(data.tanggal);
                    $('[name=waktu]').val(data.waktu);
                    $('[name=tanggal]').val(data.tanggal);
                    // $('#isi_editor').html(data.keterangan_kegiatan);
                    var isi = $('#keterangan_kegiatan').val("");
                    isi.html('<textarea name="keterangan_kegiatan" id="editor">'+data.keterangan_kegiatan+'</textarea><span class="help-block with-errors"></span>');
                },
                error: function(){
                    alert('Nothing Data');
                }
            });
        }

        function deleteData(id){
            var popup = confirm("Apakah anda yakin akan menghapus data ini?");
            var csrf_token = "{{ csrf_token() }}";
            if (popup == true) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{ url('admin/agenda') }}" + '/' + id,
                    type: "POST",
                    data: {'_method' : 'DELETE', _token : csrf_token},
                    success: function(data){
                        oTable.ajax.reload();
                        show_notification('delete', 'success');
                    },
                    error: function(){
                        show_notification('delete', 'failed');
                    }
                });
            }
        }

        $(function(){
            $('#modal-form form').validator().on('submit', function(e){
                if (!e.isDefaultPrevented()) {
                    var id = $('#id').val();

                    if (save_method == 'add') {
                        url = "{{ route('agenda.store') }}";
                    }else{
                        url = "{{ url('admin/agenda') . '/' }}" + id;
                    }

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: $('#modal-form form').serialize(),
                        // data: new FormData($("#modal-form form")[0]),
                        // contentType: false,
                        // processData: false,
                        success: function(data){
                            $('#modal-form').modal('hide');
                            oTable.ajax.reload();

                            if (save_method == 'add') {
                                    show_notification('save', 'success');
                            }else{
                                    show_notification('update', 'success');
                            }
                        },
                        error: function(){

                            if (save_method == 'add') {
                                    show_notification('save', 'failed');
                            }else{
                                    show_notification('update', 'failed');
                            }
                        }
                    });

                    return false;
                }
            });
        });
    </script>

    {{-- <script src="{{ asset('assets/plugins/ckeditor/ckeditor-custom.js') }}"></script> --}}

@endpush
