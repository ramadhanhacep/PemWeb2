<?php
require_once './template/top.php';
$tittle = "Dashboard - Puskesmas Cimanggis";
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
                    <h1 class="h3 mb-4 text-gray-800">Puskesmas Cimanggis</h1>

                    <div class = "card">
                        <div class="card-header">
                        Created By
                    </div>
                        <div class="card-body">
                            <p class="card-tittle">Muhammad Fitrah Ramadhan</p>
                            <p class="card-text">Nim : 0110124224</p>
                            <p class="card-text">Prodi : Sistem Informasi</p>
                            <p class="card-text">STT NF  </p>
                        </div>

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
        <a href="form-pasien.php">Input Pasien</a>
        <a href="listpasien.php">Daftar Pasien</a>
        <a href="form-kelurahan.php">Input Kelurahan</a>
        <a href="listkelurahan.php">Daftar Kelurahan</a>
