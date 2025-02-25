<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        .gradient-custom {
            background: linear-gradient(135deg, #667eea, #764ba2, #6B8DD6, #8E37D7);
            background-size: 300% 300%;
            animation: gradient 15s ease infinite;
        }
        
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .table-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            padding: 30px;
            margin: 20px;
            transform: translateY(0);
            transition: all 0.3s ease;
        }
        
        .table-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
        }
        
        .table {
            border-collapse: separate;
            border-spacing: 0;
        }
        
        .table thead th {
            background: linear-gradient(90deg, #667eea, #764ba2);
            color: white;
            border: none;
            padding: 15px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }
        
        .table thead th:first-child {
            border-top-left-radius: 10px;
        }
        
        .table thead th:last-child {
            border-top-right-radius: 10px;
        }
        
        .table tbody tr {
            border-bottom: 1px solid #f0f0f0;
            transition: all 0.2s ease;
        }
        
        .table tbody tr:last-child {
            border-bottom: none;
        }
        
        .table tbody tr:hover {
            background-color: #f8f9fa;
            transform: scale(1.01);
        }
        
        .table td {
            padding: 15px;
            vertical-align: middle;
        }
        
        .header-section {
            position: relative;
            padding-bottom: 20px;
        }
        
        .header-section h2 {
            font-weight: 700;
            color: #333;
            position: relative;
            display: inline-block;
        }
        
        .header-section h2:after {
            content: '';
            position: absolute;
            width: 50%;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            bottom: -10px;
            left: 25%;
            border-radius: 10px;
        }
        
        .nilai-akhir {
            font-weight: bold;
            color: #764ba2;
        }
        
        .badge-uts, .badge-uas, .badge-tugas {
            padding: 8px 12px;
            border-radius: 30px;
            font-weight: 500;
        }
        
        .badge-uts {
            background-color: rgba(102, 126, 234, 0.1);
            color: #667eea;
        }
        
        .badge-uas {
            background-color: rgba(118, 75, 162, 0.1);
            color: #764ba2;
        }
        
        .badge-tugas {
            background-color: rgba(107, 141, 214, 0.1);
            color: #6B8DD6;
        }
        
        .nim-badge {
            background-color: #f8f9fa;
            color: #6c757d;
            padding: 5px 10px;
            border-radius: 5px;
            font-family: monospace;
            font-size: 14px;
        }
        
        .table-header-icon {
            margin-right: 8px;
        }
        
        .card-footer {
            background: transparent;
            border-top: 1px solid rgba(0,0,0,0.05);
            padding-top: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body class="gradient-custom min-vh-100 d-flex align-items-center py-5">
    <?php
    $ns1 = ['id' => 1,'nim' => '0110124224','uts' => 95,'uas' => 96,'tugas' => 90];
    $ns2 = ['id' => 2,'nim' => '0110124224','uts' => 85,'uas' => 90,'tugas' => 97];
    $ns3 = ['id' => 3,'nim' => '0110124224','uts' => 90,'uas' => 90,'tugas' => 95];
    $ns4 = ['id' => 4,'nim' => '0110124224','uts' => 90,'uas' => 91,'tugas' => 82];
    $ar_nilai = [$ns1, $ns2, $ns3, $ns4];
    ?>

    <div class="container">
        <div class="table-container">
            <div class="header-section text-center mb-4">
                <h2 class="mb-3"><i class="bi bi-mortarboard-fill me-2"></i>Daftar Nilai Siswa</h2>
                <p class="text-muted">Sistem Informasi Akademik - Semester Ganjil 2023/2024</p>
            </div>
            
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr class="text-center">
                            <th><i class="bi bi-hash table-header-icon"></i>No</th>
                            <th><i class="bi bi-person-badge table-header-icon"></i>NIM</th>
                            <th><i class="bi bi-journal-check table-header-icon"></i>UTS</th>
                            <th><i class="bi bi-journal-text table-header-icon"></i>UAS</th>
                            <th><i class="bi bi-clipboard-check table-header-icon"></i>Tugas</th>
                            <th><i class="bi bi-trophy table-header-icon"></i>Nilai Akhir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach($ar_nilai as $ns){
                            $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas'])/3;
                        ?>
                        <tr class="text-center">
                            <td><?= $nomor ?></td>
                            <td><span class="nim-badge"><?= $ns['nim'] ?></span></td>
                            <td><span class="badge-uts"><?= $ns['uts'] ?></span></td>
                            <td><span class="badge-uas"><?= $ns['uas'] ?></span></td>
                            <td><span class="badge-tugas"><?= $ns['tugas'] ?></span></td>
                            <td class="nilai-akhir"><?= number_format($nilai_akhir,2,',','.') ?></td>
                        </tr>
                        <?php
                            $nomor++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            
            <div class="card-footer text-center text-muted">
                <small><i class="bi bi-info-circle me-1"></i>Nilai akhir dihitung dari rata-rata nilai UTS, UAS, dan Tugas</small>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>