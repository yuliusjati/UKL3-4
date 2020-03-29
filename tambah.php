<?php
include 'C:/xampp/htdocs/sieperpus/aset/header.php';
?>
<div class="container">
  <div class="row mt-4">
    <div class="col-md-9">
      <div class="card">
        <div class="card-header">
          <h2>Tambah Data Anggota</h2>
        </div>
        <div class="card-body">
          <form action="proses-tambah.php" method="POST">
            <div class="form-group">
              <label for="anggota">Nama Lengkap</label>
              <input type="text" name="nama" class="form-control" id="anggota" placeholder="Masukkan nama lengkap">
            </div>
            <div class="form-group">
              <label for="kelas">Kelas</label>
              <input type="text" name="nama" class="form-control" id="kelas" placeholder="Masukkan kelas">
              <small class="form-text text-muted">Contoh: XRPL2</small>
            </div>
            <div class="form-group">
              <label for="telp">Nomor Telepon</label>
              <input type="text" name="telp" class="form-control" id="telp" placeholder="Masukkan nomer telepon">
              <small class="form-text text-muted">Contoh: 111-222-3333</small>
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" name="Username" class="form-control" id="username" placeholder="Masukkan Username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
            </div>
            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include 'C:/xampp/htdocs/sieperpus/aset/footer.php';
?>
