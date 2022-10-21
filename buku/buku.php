<?php include '../layout/header.php';?>

<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Data Buku</h4>
          <a href="create.php"><button class="btn btn-primary">Tambah</button></a><br><br>
          
          <div class="table-responsive">
            <table id="example2" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Buku</th>
                  <th>Jenis Buku</th>
                  <th>Vendor</th>
                  <th>Stok</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                <?php 
                  include '../koneksi.php';
                  $no = 1;
                  $data = mysqli_query($koneksi,"SELECT b.id, b.nama, jb.nama AS namaJenis, v.nama AS namaVendor, b.jml_stok 
                                                 FROM buku b
                                                 INNER JOIN vendor AS v ON v.id = b.vendor
                                                 INNER JOIN jenis_buku AS jb ON jb.id = b.jenis_buku");

                  while($d = mysqli_fetch_array($data)) {
                ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['namaJenis']; ?></td>
                    <td><?php echo $d['namaVendor']; ?></td>
                    <td><?php echo $d['jml_stok']; ?></td>
                    <td>
                      <a href="edit.php?id=<?php echo $d['id']; ?>"><button class="btn btn-warning">Edit</button></a>
                      <a href="hapus.php?id=<?php echo $d['id']; ?>"><button class="btn btn-danger">Hapus</button></a>
                    </td>
                  </tr>
                <?php 
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include '../layout/footer.php';?>