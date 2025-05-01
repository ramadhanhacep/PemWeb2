<?php
require './dbkoneksi.php';

if (isset($_POST['submit'])) {
    $kec_id = $_POST['kec_id'];
    $nama = $_POST['nama'];
    $id = isset($_POST['id']) ? $_POST['id'] : null;

    try {
        if ($_POST['submit'] === 'simpan') {
            // INSERT
            $sql = "INSERT INTO kelurahan (nama, kec_id) VALUES (?, ?)";
            $stmt = $db->prepare($sql);
            $stmt->execute([$nama, $kec_id]);
        } elseif ($_POST['submit'] === 'ubah' && $id) {
            // UPDATE
            $sql = "UPDATE kelurahan SET nama = ?, kec_id = ? WHERE id = ?";
            $stmt = $db->prepare($sql);
            $stmt->execute([$nama, $kec_id, $id]);
        }

        header("Location: form-kelurahan.php");
        exit;
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
}
?>
