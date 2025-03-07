<?php
// Inisialisasi variabel
$nama_customer = "";
$produk_pilihan = "";
$jumlah_beli = 0;
$total_belanja = 0;
$pesan = "";

// Daftar harga produk
$daftar_harga = [
    "TV" => 4200000,
    "KULKAS" => 3100000,
    "MESIN CUCI" => 3800000
];

// Proses form jika ada request POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama_customer = htmlspecialchars($_POST["nama_customer"] ?? "");
    $produk_pilihan = $_POST["produk"] ?? "";
    $jumlah_beli = intval($_POST["jumlah"] ?? 0);
    
    // Validasi input
    if (empty($nama_customer)) {
        $pesan = "Nama customer harus diisi!";
    } elseif (empty($produk_pilihan)) {
        $pesan = "Produk harus dipilih!";
    } elseif ($jumlah_beli <= 0) {
        $pesan = "Jumlah beli harus lebih dari 0!";
    } else {
        // Hitung total belanja
        $harga_satuan = $daftar_harga[$produk_pilihan] ?? 0;
        $total_belanja = $harga_satuan * $jumlah_beli;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            display: flex;
            justify-content: space-between;
        }
        .form-box {
            border: 1px solid #ddd;
            padding: 20px;
            width: 45%;
        }
        .price-list {
            border: 1px solid #ddd;
            width: 45%;
        }
        .price-header, .result-header {
            background-color: #337ab7;
            color: white;
            padding: 10px;
            margin-top: 0;
        }
        .price-content {
            padding: 10px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: inline-block;
            width: 100px;
            font-weight: bold;
        }
        input[type="text"], input[type="number"] {
            padding: 5px;
            width: 200px;
            border: 1px solid #ddd;
        }
        input[type="radio"] {
            margin-right: 5px;
        }
        .btn-submit {
            background-color: #5cb85c;
            color: white;
            border: none;
            padding: 8px 15px;
            cursor: pointer;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h2>Belanja Online</h2>
    
    <div class="container">
        <div class="form-box">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label for="nama_customer">Customer</label>
                    <input type="text" id="nama_customer" name="nama_customer" placeholder="Nama Customer" value="<?php echo $nama_customer; ?>">
                </div>
                
                <div class="form-group">
                    <label>Pilih Produk</label>
                    <input type="radio" name="produk" value="TV" <?php if ($produk_pilihan == "TV") echo "checked"; ?>> TV
                    <input type="radio" name="produk" value="KULKAS" <?php if ($produk_pilihan == "KULKAS") echo "checked"; ?>> KULKAS
                    <input type="radio" name="produk" value="MESIN CUCI" <?php if ($produk_pilihan == "MESIN CUCI") echo "checked"; ?>> MESIN CUCI
                </div>
                
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" id="jumlah" name="jumlah" value="<?php echo $jumlah_beli; ?>">
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn-submit">Kirim</button>
                </div>
            </form>
        </div>
        
        <div class="price-list">
            <h3 class="price-header">Daftar Harga</h3>
            <div class="price-content">
                <p>TV : <?php echo number_format($daftar_harga["TV"], 0, ',', '.'); ?></p>
                <p>Kulkas : <?php echo number_format($daftar_harga["KULKAS"], 0, ',', '.'); ?></p>
                <p>MESIN CUCI : <?php echo number_format($daftar_harga["MESIN CUCI"], 0, ',', '.'); ?></p>
            </div>
            <h3 class="price-header">Harga Dapat Berubah Setiap Saat</h3>
        </div>
    </div>
    
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($pesan)): ?>
    <div class="result">
        <h4>Hasil Belanja</h4>
        <p>Nama Customer : <?php echo $nama_customer; ?></p>
        <p>Produk Pilihan : <?php echo $produk_pilihan; ?></p>
        <p>Jumlah Beli : <?php echo $jumlah_beli; ?></p>
        <p>Total Belanja : Rp <?php echo number_format($total_belanja, 0, ',', '.'); ?>,-</p>
    </div>
    <?php elseif (!empty($pesan)): ?>
    <div class="result">
        <p style="color: red;"><?php echo $pesan; ?></p>
    </div>
    <?php endif; ?>
</body>
</html>