<?php include '../layout/header.php';?>

<div class="content-wrapper">
          <div class="row">

<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Create Jenis ATK</h4>
                  
                  <form class="forms-sample" action="createACT.php" method="post">
                     <div class="form-group">
                    <label for="idjenis" class="form-label">ID Jenis</label>
                    <input type="text" class="form-control" id="idjenis" name="idjenis" value="<?php echo idotomatis() ?>" readonly>
                  </div>

                  <div class="form-group">
                    <label for="jenis" class="form-label">Jenis ATK</label>
                    <input type="text" class="form-control" id="jenis" name="jenis">
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
      $file = fopen("../assets/jenisAtk.txt", "r");
      $id = 0;

      if (!('' == file_get_contents("../assets/jenisAtk.txt"))) {
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