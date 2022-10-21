<?php include '../layout/header.php';?>

<div class="content-wrapper">
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Edit Buku</h4>

          <?php 
            include '../koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi, "SELECT * FROM buku WHERE id = '$id'");
            while($d = mysqli_fetch_array($data)) {
          ?>
          <form class="forms-sample" action="editACT.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">

            <div class="form-group">
              <label for="nama" class="form-label">Nama Buku</label>
              <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $d['nama'] ?>">
            </div>

            <div class="form-group">
              <label for="jenis_buku" class="form-label">Jenis Buku</label>
              <select id="jenis_buku" name="jenis_buku" class="form-control">
                <option holder selected>-- Pilih Jenis Buku --</option>
                <?php
                  $sql = "SELECT * FROM jenis_buku";
                  $result = mysqli_query($koneksi, $sql);

                  while ($row = mysqli_fetch_assoc($result)) {
                    if ($row['id'] == $d['jenis_buku']) {
                      echo "<option value='" . $row['id'] . "' selected>" . $row['nama'] . "</option>";
                    } else {
                      echo "<option value='" . $row['id'] . "'>" . $row['nama'] . "</option>";
                    }
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

                  while ($row = mysqli_fetch_array($result)) {
                    if ($row['id'] == $d['vendor']) {
                      echo "<option value='" . $row['id'] . "' selected>" . $row['nama'] . "</option>";
                    } else {
                      echo "<option value='" . $row['id'] . "'>" . $row['nama'] . "</option>";
                    }
                  }
                ?>
              </select>
            </div>

            <div class="form-group">
              <label for="jml_stok" class="form-label">Jumlah Stok</label>
              <input type="text" class="form-control" id="jml_stok" name="jml_stok" value="<?php echo $d['jml_stok'] ?>">
            </div>
              
            <div class="d-grid gap-2">
              <button class="btn btn-primary" type="submit">Submit</button>
            </div>
          </form>
          <?php
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include '../layout/footer.php';?>