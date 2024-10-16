<!-- /.login-logo -->
<div class="card">
  <div class="card-body login-card-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <?= $this->session->flashdata('message') ?>
    <form action="<?= base_url('login/proses_login') ?>" method="post">
      <div class="input-group mb-3">
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </div>
      </div>
    </form>
    <p class="mb-0 mt-3">
      <a href="<?= base_url('registrasi')?>" class="text-center">Registrasi</a>
    </p>
  </div>
  <!-- /.login-card-body -->
</div>
<!-- /.login-box -->