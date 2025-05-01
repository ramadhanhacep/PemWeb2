<?php
require './dbkoneksi.php';

if (isset($_POST['submit'])) {


    // Tangkap Data dari Form
    $nama = $_POST['nama_pasien'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
    $id_kelurahan = $_POST['id_kelurahan'];

    $sql = "INSERT INTO pasien (nama_pasien, umur, alamat, id_kelurahan)
        VALUES ('$nama', $umur, '$alamat', $id_kelurahan)";
        // definisikan statement
        $stmt = $db ->prepare($sql);
        // eksekusi statement
        $stmt->execute([$kode, $nama, $tmp_lahir, $tgl_lahir, $gender, $email, $alamat, $kelurahan_id]);
        // jika berhasil redirect ke list kelurahan
        header('location: listpasien.php');
    } catch (\Throwable $e) {
        echo "Error while insert data pasien: ";
        echo $e;
    }
?>
