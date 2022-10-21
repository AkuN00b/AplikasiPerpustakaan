<?php include '../layout/header.php';?>
<?php include '../koneksi.php' ?>

<div class="content-wrapper">
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Tambah Buku</h4>
          
          <form class="forms-sample" action="createACT.php" method="post">
            <div class="form-group">
              <label for="nama" class="form-label">Nama Buku</label>
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
              <label for="jenis_buku" class="form-label">Jenis Buku</label>
              <select id="jenis_buku" name="jenis_buku" class="form-control">
                <option holder selected>-- Pilih Jenis Buku --</option>
                <?php
                  $sql = "SELECT * FROM jenis_buku";
                  $result = mysqli_query($koneksi, $sql);

                  while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row['id'] . "'>" . $row['nama'] . "</option>";
                  }

                ?>
              </select>
            </div>
            <div class="form-group">
              <label for="vendor" class="form-label">Vendor</label>
              <select id="vendor" name="vendor" class="form-control">
                <option holder selected>-- Pilih Vendor --</option>
                <?php
                  $sql = "SELECT * FROM vendor";
                  $result = mysqli_query($koneksi, $sql);

                  while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row['id'] . "'>" . $row['nama'] . "</option>";
                  }

                ?>
              </select>
            </div>
            <div class="form-group">
              <label for="jml_stok" class="form-label">Jumlah Stok</label>
              <input type="text" class="form-control" id="jml_stok" name="jml_stok">
            </div>
              
            <div class="d-grid gap-2">
              <button class="btn btn-primary" type="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include '../layout/footer.php';?>