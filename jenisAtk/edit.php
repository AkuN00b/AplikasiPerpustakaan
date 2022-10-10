<?php include '../layout/header.php';?>

<?php
    $idjenis = $_GET['id'];
    $file = fopen("../assets/jenisatk.txt", "r");
    while (!feof($file)) {
      $line = fgets($file);
      $data = explode("|", $line);

      if ($data[0] == $idjenis) {
        $idjenis = $data[0];
        $jenis = $data[1];
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
                    <label for="idjenis" class="form-label">ID Jenis ATK</label>
                    <input type="text" class="form-control" id="idjenis" name="idjenis" value="<?php echo $idjenis ?>" readonly>
                  </div>

                  <div class="form-group">
                    <label for="jenis" class="form-label">Jenis ATK</label>
                    <input type="text" class="form-control" id="jenis" name="jenis" value="<?php echo $jenis ?>">
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