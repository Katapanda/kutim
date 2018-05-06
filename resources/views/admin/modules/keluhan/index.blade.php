@extends('admin.layouts.app')

@section('title')
    Pengaduan
@endsection

@section('content')
    
    <div class="row">
        <div class="main-header">
            <h4>Pengaduan</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-header-text">Pengaduan List</h5>
                </div>
                <div class="card-block" style="float: center;">
                    <div class="row">
                        <div class="col-md-12">
                            <h6>Filter</h6>
                            <form id="search-form" class="form-inline" role="form">
                                <div class="form-group">
                                    <input type="text" id="judul_keluhan_" name="judul_keluhan_" class="form-control" placeholder="Judul">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="isi_keluhan_" name="isi_keluhan_" class="form-control" placeholder="Keterangan">
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
                            <table id="keluhan-table" class="table table-stripped">
                                <thead>
                                    <tr>
                                        <th>Judul Pengaduan</th>
                                        <th>Keterangan Pengaduan</th>
                                        <th>Foto</th>
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
@endsection

@push('scripts')
<script type="text/javascript">
    var oTable = $('#keluhan-table').DataTable({
            dom: "<'row'<'col-xs-12'<'col-xs-6'l><'col-xs-6'p>>r>"+
            "<'row'<'col-xs-12't>>"+
            "<'row'<'col-xs-12'<'col-xs-6'i><'col-xs-6'p>>>",
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.api.keluhan') }}",
                data: function (d) {
                    d.judul_keluhan = $('input[name=judul_keluhan_]').val();
                    d.isi_keluhan = $('input[name=isi_keluhan_]').val();
                }
            },
            columns: [
                {data: 'judul_keluhan', name: 'judul_keluhan'},
                {data: 'isi_keluhan', name: 'isi_keluhan'},
                {data: 'foto', name: 'foto'}
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
</script>
@endpush