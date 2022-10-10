<?php include '../layout/header.php';?>

<div class="content-wrapper">
          <div class="row">

<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Create Vendor</h4>
                  
                  <form class="forms-sample" action="createACT.php" method="post">
                     <div class="form-group">
                    <label for="idvendor" class="form-label">ID Vendor</label>
                    <input type="text" class="form-control" id="idvendor" name="idvendor" value="<?php echo idotomatis() ?>" readonly>
                  </div>

                  <div class="form-group">
                    <label for="nama" class="form-label">Nama Vendor</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                  </div>

                  <div class="form-group">
                    <label for="alamatvendor" class="form-label">Alamat Vendor</label>
                    <textarea class="form-control" id="alamatvendor" name="alamat" rows="3"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="notelp" class="form-label">No Telepon</label>
                    <input type="text" class="form-control" id="notelp" name="notelp">
                  </div>

                  <div class="form-group">
                    <label for="email" class="form-label">Email Vendor</label>
                    <input type="text" class="form-control" id="email" name="email">
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
      $file = fopen("../assets/vendor.txt", "r");
      $id = 0;

      if (!('' == file_get_contents("../assets/vendor.txt"))) {
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