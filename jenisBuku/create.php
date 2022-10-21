<?php include '../layout/header.php';?>

<div class="content-wrapper">
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Tambah Jenis Buku</h4>
          
          <form class="forms-sample" action="createACT.php" method="post">
            <div class="form-group">
              <label for="jenis" class="form-label">Jenis Buku</label>
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

<?php include '../layout/footer.php';?>