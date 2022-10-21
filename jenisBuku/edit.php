<?php include '../layout/header.php';?>

<div class="content-wrapper">
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Edit Jenis Buku</h4>
          
          <?php 
            include '../koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi, "SELECT * FROM jenis_buku WHERE id = '$id'");
            while($d = mysqli_fetch_array($data)) {
          ?>
          <form class="forms-sample" action="editACT.php" method="post">
            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
            
            <div class="form-group">
              <label for="nama" class="form-label">Jenis Buku</label>
              <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $d['nama'] ?>">
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