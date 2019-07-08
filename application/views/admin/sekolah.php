<?= $this->session->flashdata('message'); ?>
<div class="card card-info card-outline">
  <div class="card-header">
    <h3 class="card-title">Data sekolah</h3>
    <div class="card-tools">
      <a href="printout/raport" target="_blank" class="btn btn-tool"><i class="fas fa-book"></i></a>
      <a href="printout/infoSekolah" target="_blank" class="btn btn-tool"><i class="fas fa-print"></i></a>
    </div>
  </div>
  <form action="<?= base_url('sekolah') ?>" method="post">
  <div class="card-body">
    <div class="form-group">
      <label class="col-sm-4 control-label">Nama Sekolah</label>
      <div class="col-md-6">
        <input type="text" class="form-control" name="nama_sekolah" placeholder="Nama Lengkap Sekolah" value="<?= $info['nama_sekolah']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-4 control-label">NPSN</label>
      <div class="col-md-6">
        <input type="text" class="form-control" name="npsn" placeholder="NPSN" value="<?= $info['NPSN']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">NIS/NSS/NDS</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="nds" placeholder="NIS/NSS/NDS" value="<?= $info['NDS']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Alamat Sekolah</label>
      <div class="col-sm-6">
        <textarea class="form-control" name="alamat_sekolah" placeholder="Alamat sekolah"><?= $info['alamat_sekolah']; ?></textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Kode Pos</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="kode_pos" placeholder="Kode Pos" value="<?= $info['kode_post']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Telp</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="telp_sekolah" placeholder="Telepon Sekolah" value="<?= $info['telp']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Kelurahan</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="kelurahan" placeholder="Kelurahan" value="<?= $info['kelurahan']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Kecamatan</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan" value="<?= $info['kecamatan']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Kota/Kabupaten</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="kota" placeholder="Kota/kabupaten" value="<?= $info['kota']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Provinsi</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="provinsi" placeholder="Provinsi" value="<?= $info['provinsi']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Website</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="website" placeholder="Website" value="<?= $info['website']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">E-mail</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="email" placeholder="Email" value="<?= $info['email']; ?>">
      </div>
    </div>
    <div class="form-group"> 
      <label class="col-sm-3 control-label">Kepala Sekolah</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="kepsek" placeholder="Nama Kepala Sekolah" value="<?= $info['kepsek']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">NIP</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="nip" placeholder="NIP" value="<?= $info['nip']; ?>">
      </div>
    </div>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <button type="submit" name="submit" class="btn btn-info" onclick="return konfirmasi_tambah();"><i class="fa fa-save"></i> Simpan</button>
  </div>
  </form>
</div>