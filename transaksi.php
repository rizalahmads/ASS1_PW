<?php
// Array untuk menyimpan data customer
$customer = array("Rizal", "Ahmad", "Sugawa", "Ahmad", "Rizal", "Sugawa");

// Array untuk menyimpan data barang
$barang = array(
	array("nama" => "Mie Instan", "harga" => 3000),
	array("nama" => "Sabun mandi", "harga" => 3500),
	array("nama" => "Shampoo", "harga" => 1000),
	array("nama" => "Sandal jepit", "harga" => 11000),
	array("nama" => "Roti", "harga" => 12000),
	array("nama" => "Buku tulis", "harga" => 5500),
	array("nama" => "Susu kotak", "harga" => 6000),
	array("nama" => "Minyak goreng", "harga" => 13000),
	array("nama" => "Ice cream", "harga" => 11000),
	array("nama" => "Baterai", "harga" => 16000)
);

// Method untuk set tanggal transaksi
$tanggalTransaksi = date("d-m-Y");
?>


<!-- Form untuk data transaksi -->
<h2>Input Transaksi Pembelian</h2>
<p>Isi form berikut untuk melakukan transaksi pembelian</p>
<form method="POST" action="history.php">
	<label>Kode Transaksi</label>
	<input type="text" name="kodeTransaksi" required>
	<br><br>
	<label>Tanggal Transaksi</label>
	<input type="text" name="tanggalTransaksi" value="<?php echo $tanggalTransaksi; ?>" readonly>
	<br><br>
	<label>Customer</label>
	<select name="customer" required>
		<option value="">- Pilih customer -</option>
		<?php foreach ($customer as $c) { ?>
			<option value="<?php echo $c; ?>"><?php echo $c; ?></option>
		<?php } ?>
	</select>
	<br><br>
	<label>Barang 1</label>
	<select name="barang1" required>
		<option value="">- Pilih barang -</option>
		<?php foreach ($barang as $b) { ?>
			<option value="<?php echo $b['nama']; ?>"><?php echo $b['nama']; ?> (Rp <?php echo number_format($b['harga'], 0, ".", "."); ?>)</option>
		<?php } ?>
	</select>
	<label></label>
	<input type="number" name="qty1" min="1" max="999" value="1" required>
	<br><br>
	<label>Barang 2</label>
	<select name="barang2" required>
		<option value="">- Pilih barang -</option>
		<?php foreach ($barang as $b) { ?>
			<option value="<?php echo $b['nama']; ?>"><?php echo $b['nama']; ?> (Rp <?php echo number_format($b['harga'], 0, ".", "."); ?>)</option>
		<?php } ?>
	</select>
	<label></label>
	<input type="number" name="qty2" min="1" max="999" value="1" required>
	<br><br>
	<label>Barang 3</label>
	<select name="barang2" required>
		<option value="">- Pilih barang -</option>
		<?php foreach ($barang as $b) { ?>
			<option value="<?php echo $b['nama']; ?>"><?php echo $b['nama']; ?> (Rp <?php echo number_format($b['harga'], 0, ".", "."); ?>)</option>
		<?php } ?>
	</select>
	<label></label>
	<input type="number" name="qty2" min="1" max="999" value="1" required>
	<br><br>
	<label>Punya Kartu Member?</label>
	<input type="radio" name="kartu_member" value="ya">Ya
	<input type="radio" name="kartu_member" value="tidak" checked>Tidak<br><br>

	<label>Uang Pembayaran</label>
	<input type="number" name="uang_pembayaran"><br><br>

	<button type="Submit" value="Submit">Simpan</button>
    <button type="reset">Batal</button>

    <?php
    // Method untuk menghitung & menampilkan struk transaksi pembelian setelah form di-submit
    if (isset($_POST['Submit'])) {
        $kodeTransaksi = $_POST['kodeTransaksi'];
        $tanggalTransaksi = $_POST['tanggalTransaksi'];
        $customer = $_POST['customer'];
        $barang1 = $_POST['barang1'];
        $qty1 = $_POST['qty1'];
        $barang2 = $_POST['barang2'];
        $qty2 = $_POST['qty2'];
        $barang3 = $_POST['barang3'];
        $qty3 = $_POST['qty3'];
        $kartuMember = $_POST['kartu_member'];
        $uangPembayaran = $_POST['uang_pembayaran'];

        // Menghitung total harga barang
        $totalHarga = 0;
        foreach ($barang as $b) {
            if ($b['nama'] == $barang1) {
                $totalHarga += $b['harga'] * $qty1;
            }
            if ($b['nama'] == $barang2) {
                $totalHarga += $b['harga'] * $qty2;
            }
            if ($b['nama'] == $barang3) {
                $totalHarga += $b['harga'] * $qty3;
            }
        }

        // Menghitung diskon
        $diskon = 0;
        if ($kartuMember == "ya") {
            $diskon = 0.1 * $totalHarga;
        }

        // Menghitung kembalian
        $kembalian = $uangPembayaran - ($totalHarga - $diskon);

        // Menampilkan struk transaksi pembelian
        echo "<h2>Struk Transaksi Pembelian</h2>";
        echo "Kode Transaksi: " . $kodeTransaksi . "<br>";
        echo "Tanggal Transaksi: " . $tanggalTransaksi . "<br>";
        echo "Customer: " . $customer . "<br>";
        echo "Barang 1: " . $barang1 . " (x" . $qty1 . ")<br>";
        echo "Barang 2: " . $barang2 . " (x" . $qty2 . ")<br>";
        echo "Barang 3: " . $barang3 . " (x" . $qty3 . ")<br>";
        echo "Total Harga: Rp " . number_format($totalHarga, 0, ".", ".") . "<br>";
        echo "Diskon: Rp " . number_format($diskon, 0, ".", ".") . "<br>";
        echo "Uang Pembayaran: Rp " . number_format($uangPembayaran, 0, ".", ".") . "<br>";
        echo "Kembalian: Rp " . number_format($kembalian, 0, ".", ".") . "<br>";
    }
?>
</form>



