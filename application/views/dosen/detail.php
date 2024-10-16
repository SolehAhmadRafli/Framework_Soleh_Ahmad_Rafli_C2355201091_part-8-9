<div class="container">
  <div class="row mt-5">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">
          <h4>Detail</h4>
        </div>
        <div class="card-body">
          <label>ID</label>
          <h5 class="form-control card-title"><?= $dosen['id']; ?></h5>
          <label>Dosen</label>
          <p type="text" class="form-control card-text font-weight-bold"><?= $dosen['namadosen']; ?></p>
          <div class="mt-4">
            <a href="<?= base_url(); ?>dosen" class="btn btn-primary">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>