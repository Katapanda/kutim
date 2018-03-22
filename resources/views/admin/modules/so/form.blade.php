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
        <div class="modal-body">
          <input type="hidden" name="id" id="id">
          <div class="md-input-wrapper">
            <input type="text" class="md-form-control md-static" name="nip" required placeholder="Nip">
            <label>Nip</label>
            <span class="help-block with-errors"></span>
          </div>
          <div class="md-input-wrapper">
            <input type="text" class="md-form-control md-static" name="nama" required placeholder="Nama">
            <label>Nama</label>
            <span class="help-block with-errors"></span>
          </div>
          <div class="md-input-wrapper">
            <input type="text" class="md-form-control md-static" name="bidang" required placeholder="Bidang">
            <label>Bidang</label>
            <span class="help-block with-errors"></span>
          </div>
          <div class="md-input-wrapper">
            <input type="text" class="md-form-control md-static" name="sub_bidang" required placeholder="Sub Bidang">
            <label>Sub Bidang</label>
            <span class="help-block with-errors"></span>
          </div>
          <div class="md-input-wrapper">
            <input type="text" class="md-form-control md-static" name="email" required placeholder="Email">
            <label>Email</label>
            <span class="help-block with-errors"></span>
          </div>
          <div class="md-input-wrapper">
            <select name="jabatan" class="md-form-control md-static">
              <option value="">Pilih divisi ..</option>
              <option value="Kepala Dinas">Kepala Dinas</option>
              <option value="Kelmpok Jabatan Fungsional">Kelmpok Jabatan Fungsional</option>
              <option value="Kepala Bidang Perumahan">Kepala Bidang Perumahan</option>
              <option value="Kasii Perencanaan, Monitoring & Evaluasi">Kasii Perencanaan, Monitoring & Evaluasi</option>
              <option value="Kasi Penyediaan">Kasi Penyediaan</option>
              <option value="Kasi Pembiayaan">Kasi Pembiayaan</option>
              <option value="UPT Sangata Utara">UPT Sangata Utara</option>
              <option value="UPT Sangata Selatan">UPT Sangata Selatan</option>
              <option value="Kepla Bidang Kawasan Pemukiman">Kepla Bidang Kawasan Pemukiman</option>
              <option value="Kasi Pendataan Dan Perencanaan">Kasi Pendataan Dan Perencanaan</option>
              <option value="Kasi Pencegahan Dan Peningkatan Kualitas">Kasi Pencegahan Dan Peningkatan Kualitas</option>
              <option value="Kasi Manfaat Dan Pengendalian">Kasi Manfaat Dan Pengendalian</option>
              <option value="Sekertaris">Sekertaris</option>
              <option value="Kasubbag Perencanaan Program Dan Keuangan">Kasubbag Perencanaan Program Dan Keuangan</option>
              <option value="Kasubbag Umum Dan Kepegawaian">Kasubbag Umum Dan Kepegawaian</option>
            </select>
            <label>Email</label>
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
