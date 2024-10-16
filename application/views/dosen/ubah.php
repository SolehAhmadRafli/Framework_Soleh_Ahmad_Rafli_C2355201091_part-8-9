<div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Ubah Data Dosen
        </div>
        <div class="card-body">
          <form action="" method="post">
            <input type="hidden" name="id" value="<?= $dosen['id']; ?>">
            <div class="form-group">
              <label for="nip">NIP</label>
              <input type="text" class="form-control" id="nip" name="nip" value="<?= $dosen['id']; ?>">
              <small class="text-danger"><?= form_error('nip') ?></small>
            </div>
            <div class="form-group">
              <label for="namadosen">Nama Dosen</label>
              <input type="text" class="form-control" id="namadosen" name="namadosen"
                value="<?= $dosen['namadosen']; ?>">
              <small class="text-danger"><?= form_error('namadosen') ?></small>
            </div>
            <div class="mt-3">
              <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>