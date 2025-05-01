<?php
$sql = "SELECT pasien.*, kelurahan.nama_kelurahan
FROM pasien
LEFT JOIN kelurahan ON pasien.id_kelurahan = kelurahan.id_kelurahan";

require_once './dbkoneksi.php';

//query Database
$query = $db->query("SELECT * FROM pasien");

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
                    <h1 class="h3 mb-4 text-gray-800">List Pasien</h1>
                    <!-- card daftar pasien -->
                    <div class = "card">
                        <div class = "card-body">
                            <table class ="table">
                                <thead>
                                <tr>
                                <th scope="col">Kode</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Tempat Lahir</th>
                                <th scope="col">Email</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($query as $pasien) :
                                    ?>
                                    <tr>
                                        <td><?= $row['nama_kelurahan'] ?></td>
                                        <td><?= $pasien['kode']; ?></td>
                                        <td><?= $pasien['Nama']; ?></td>
                                        <td><?= $pasien['gender'] == 'L' ? 'Laki-laki' : 'Perempuan'; ?></td>
                                        <td><?= $pasien['tmp_lahir']; ?></td>
                                        <td><?= $pasien['email']; ?></td>
                                    </tr>
                                    <?php
                                    endforeach;
                                    ?>
                                </tbody>
                            </table>
                        </div>
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

    