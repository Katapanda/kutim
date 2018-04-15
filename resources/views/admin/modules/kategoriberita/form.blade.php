<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="formModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form id="form-contact" method="post"  data-toggle="validator" enctype="multipart/form-data">
        {{ csrf_field() }} {{ method_field('POST') }}
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="edit_editor">
          <input type="hidden" name="id" id="id">
          <div class="md-input-wrapper">
            <input type="text" class="md-form-control md-static" name="nama_kategori" required placeholder="Kategori">
            <label>Kategori Berita</label>
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