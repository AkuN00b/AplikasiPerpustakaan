<?php include '../layout/header.php';?>

<?php
    $idvendor = $_GET['id'];
    $file = fopen("../assets/vendor.txt", "r");

    while (!feof($file)) {
      $line = fgets($file);
      $data = explode("|", $line);

      if ($data[0] == $idvendor) {
        $idvendor = $data[0];
        $nama = $data[1];
        $alamat = $data[2];
        $notelp = $data[3];
        $email = $data[4];
      }
    }
  ?>

<div class="content-wrapper">
          <div class="row">

<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Create Jenis ATK</h4>
                  
                  <form class="forms-sample" action="editACT.php" method="post">
                    <div class="form-group">
                    <label for="idvendor" class="form-label">ID Vendor</label>
                    <input type="text" class="form-control" id="idvendor" name="idvendor" value="<?php echo $idvendor ?>" readonly>
                  </div>

                  <div class="form-group">
                    <label for="nama" class="form-label">Nama Vendor</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
                  </div>

                  <div class="form-group">
                    <label for="alamatvendor" class="form-label">Alamat Vendor</label>
                    <textarea class="form-control" id="alamatvendor" name="alamat" rows="3"><?php echo $alamat ?></textarea>
                  </div>

                  <div class="form-group">
                    <label for="notelp" class="form-label">No Telepon</label>
                    <input type="text" class="form-control" id="notelp" name="notelp" value="<?php echo $notelp ?>">
                  </div>

                  <div class="form-group">
                    <label for="email" class="form-label">Email Vendor</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $email ?>">
                  </div>

                    <div class="d-grid gap-2">
                    <button class="btn btn-warning" type="submit">Submit</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
</div>
</div>
                      <?php include '../layout/footer.php';?>