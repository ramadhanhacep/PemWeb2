<?php

require './dbkoneksi.php';

//query Database
$query = $db->query("SELECT * FROM kelurahan");

require_once './template/top.php';
?>
        <!-- Sidebar -->
         <?php
        require_once './template/sidebar.php';
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <!-- Topbar -->
                <?php
                require_once './template/topbar.php';
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Tambah Pasien</h1>

                    <!-- Form tambah pasien -->
                    <?php
include 'dbkoneksi.php';
$query = mysqli_query($conn, "SELECT * FROM kelurahan");
?>
<form pasien="proses-pasien.php" method="post">
  <div class="form-group row">
    <label for="Kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <input id="Kode" name="Kode" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal lahir</label> 
    <div class="col-8">
      <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Gender</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L" required="required"> 
        <label for="gender_0" class="custom-control-label">Laki-laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P" required="required"> 
        <label for="gender_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="email" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <textarea id="alamat" name="alamat" cols="40" rows="3" class="form-control" required="required"></textarea>
    </div>
  </div> 
  <div class="form-group row">
    <label for="id_kelurahan">Kelurahan:</label>
    <select name="id_kelurahan" required>
    <option value="">-- Pilih Kelurahan --</option>
    <?php while($data = mysqli_fetch_assoc($query)): ?>
        <option value="<?= $data['id_kelurahan'] ?>"><?= $data['nama_kelurahan'] ?></option>
    <?php endwhile; ?>
    </select>
    </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
    <input name="submit" type="submit" class="btn btn-primary" value="Simpan">
  </div>
</form>

                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php
            require_once './template/footer.php';
            ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
         <?php
         require_once './template/bottom.php';
         ?>

    