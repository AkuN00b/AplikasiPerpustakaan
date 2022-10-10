<?php include '../layout/header.php';?>

<?php
    $idatk = $_GET['id'];
    $file = fopen("../assets/atk.txt", "r");

    while (!feof($file)) {
      $line = fgets($file);
      $data = explode("|", $line);

      if ($data[0] == $idatk) {
        $idatk = $data[0];
        $nama = $data[1];
        $jenis = $data[2];
        $vendor = $data[3];
        $stok = $data[4];
      }
    } 
  ?>

<div class="content-wrapper">
          <div class="row">

<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Create ATK</h4>
                  
                  <form class="forms-sample" action="editACT.php" method="post">
                    <div class="form-group">
                    <label for="idatk" class="form-label">ID ATK</label>
                    <input type="text" class="form-control" id="idatk" name="idatk" value="<?php echo $idatk ?>" readonly>
                  </div>

                  <div class="form-group">
                    <label for="nama" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
                  </div>

                  <div class="form-group">
                    <label for="jenis" class="form-label">Jenis</label>
                    <select id="jenis" class="form-select" name="jenis">
                      <option selected><?php echo $jenis ?></option>
                      <?php
                      $file = fopen("../assets/jenisatk.txt", "r");
                      while (!feof($file)) {
                        $data = fgets($file);
                        $data = explode("|", $data);
                        echo "<option value='$data[1]'>$data[1]</option>";
                      }
                      fclose($file);
                      ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="vendor" class="form-label">Vendor</label>
                    <select id="vendor" class="form-select" name="vendor">
                      <option selected><?php echo $vendor ?></option>
                      <?php
                      $file = fopen("../assets/vendor.txt", "r");
                      while (!feof($file)) {
                        $data = fgets($file);
                        $data = explode("|", $data);
                        echo "<option value='$data[1]'>$data[1]</option>";
                      }
                      fclose($file);
                      ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="stok" class="form-label">Jumlah Stok</label>
                    <input type="text" class="form-control" id="stok" name="stok" value="<?php echo $stok ?>">
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