<?php
        
        if (isset($_POST['submit'])){
            $nama = $_POST['Nama'];
            $matkul = $_POST['Matkul'];
            $nilai_uts = $_POST['nilai_uts'];
            $nilai_uas = $_POST['nilai_uas'];
            $nilai_tugas = $_POST['nilai_tugas'];

            echo "<p>Nama : $nama </p>";
            echo "<p>Matkul : $matkul</p>";
            echo "<p>nilai_uts : $nilai_uts</p>";
            echo "<p>nilai_uas : $nilai_uas</p>";
            echo "<p>nilai_tugas : $nilai_tugas</p>";

            // Status Kelulusan
            $nilai_total = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);

            // check nilai total
            if ( $nilai_total > 55) {
                echo"<p>Status : Lulus</p>";
            } else {
                echo "<p>Status : Tidak Lulus</p>";
            }

            // Grade Nilai
            

        }
        
        
        
        ?>