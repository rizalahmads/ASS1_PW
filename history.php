<?php
    // Method untuk menampilkan struk transaksi pembelian setelah form di-submit
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
        $kartuMember = $_POST['kartuMember'];
        $uangPembayaran = $_POST['uangPembayaran'];
        $totalHarga = 0;
        $diskon = 0;
        $totalBayar = 0;
        echo "<br>";
        echo "<h3>Struk Transaksi Pembelian</h3>";
        echo "<br>";
        echo "Kode Transaksi: " . $kodeTransaksi . "<br>";
        echo "Tanggal Transaksi: " . $tanggalTransaksi . "<br>";
        echo "Customer: " . $customer . "<br>";
        echo "Barang 1: " . $barang1 . " (" . $qty1 . "x)<br>";
        echo "Barang 2: " . $barang2 . " (" . $qty2 . "x)<br>";
        echo "Barang 3: " . $barang3 . " (" . $qty3 . "x)<br>";
        echo "<br>";
        echo "<table>";
        echo "<tr>";
        echo "<th>Nama Barang</th>";
        echo "<th>Harga Satuan (Rp)</th>";
        echo "<th>Qty</th>";
        echo "<th>Subtotal (Rp)</th>";
        echo "</tr>";
        foreach ($barang as $b) {
            if ($b['nama'] == $barang1) {
                $totalHarga += $b['harga'] * $qty1;
                echo "<tr>";
                echo "<td>" . $b['nama'] . "</td>";
                echo "<td>" . $b['harga'] . "</td>";
                echo "<td>" . $qty1 . "</td>";
                echo "<td>" . $b['harga'] * $qty1 . "</td>";
                echo "</tr>";
            }
            if ($b['nama'] == $barang2) {
                $totalHarga += $b['harga'] * $qty2;
                echo "<tr>";
                echo "<td>" . $b['nama'] . "</td>";
                echo "<td>" . $b['harga'] . "</td>";
                echo "<td>" . $qty2 . "</td>";
                echo "<td>" . $b['harga'] * $qty2 . "</td>";
                echo "</tr>";
            }
            if ($b['nama'] == $barang3) {
                $totalHarga += $b['harga'] * $qty3;
                echo "<tr>";
                echo "<td>" . $b['nama'] . "</td>";
                echo "<td>" . $b['harga'] . "</td>";
                echo "<td>" . $qty3 . "</td>";
                echo "<td>" . $b['harga'] * $qty3 . "</td>";
                echo "</tr>";
            }
        }
        echo "</table>";
        echo "<br>";
    }
?>