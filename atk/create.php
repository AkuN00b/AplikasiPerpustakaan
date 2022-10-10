<?php include '../layout/header.php';?>

<div class="content-wrapper">
          <div class="row">

<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Create ATK</h4>
                  
                  <form class="forms-sample" action="createACT.php" method="post">
                    <div class="form-group">
                    <label for="idatk" class="form-label">ID ATK</label>
                    <input type="text" class="form-control" id="idatk" name="idatk" value="<?php echo idotomatis() ?>" readonly>
                  </div>

                  <div class="form-group">
                    <label for="nama" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                  </div>

                  <div class="form-group">
                    <label for="jenis" class="form-label">Jenis</label>
                    <select id="jenis" class="form-select" name="jenis">
                      <option selected>Pilih Jenis ATK</option>
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
                      <option selected>Pilih Vendor</option>
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
                    <input type="number" class="form-control" id="stok" name="stok">
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

  <?php
    function idotomatis()
    {
      $file = fopen("../assets/atk.txt", "r");
      $id = 0;

      if (!('' == file_get_contents("../assets/atk.txt"))) {
        if ($file) {
          while (($line = fgets($file)) !== false) {
            $data = explode("|", $line);
            $id = $data[0];
          }
          
          $id = $id + 1;
          echo $id;
        }
      } else {
        echo "1";
      }
    }
  ?>
                      <?php include '../layout/footer.php';?>