<?php
// JANGAN DIUBAH IF INI
if (!isset($_SESSION["nama"])) {
    echo "<p>Belum ada pesanan.</p>";
} else {
    // Kerjakan ELSE ini
    $rp = function ($angka) {
        return "Rp" . number_format($angka, 0, ",", ".");
    };
    $s = $_SESSION;

    echo "<table class=\"struk\">";
    echo "<tr><th>Nama Kru</th><td>" . htmlspecialchars($s["nama"]) . "</td></tr>";
    echo "<tr><th>Ransum</th><td>" . htmlspecialchars($s["menu"]) . "</td></tr>";
    echo "<tr><th>Harga Satuan</th><td>" . $rp($s["harga"]) . "</td></tr>";
    echo "<tr><th>Jumlah Porsi</th><td>" . (int) $s["jumlah"] . "</td></tr>";
    echo "<tr><th>Kategori Kru</th><td>" . htmlspecialchars($s["kategori"]) . "</td></tr>";
    echo "<tr><th>Subtotal</th><td>" . $rp($s["subtotal"]) . "</td></tr>";
    echo "<tr><th>Diskon</th><td>" . $rp($s["diskon"]) . "</td></tr>";
    echo "<tr><th>Total Pembayaran</th><td><strong>" . $rp($s["total"]) . "</strong></td></tr>";
    echo "</table>";

    echo "<h2>Status Pengambilan Ransum</h2>";
    echo "<ol class=\"status\">";
    for ($i = 1; $i <= (int) $s["jumlah"]; $i++) {
        echo "<li>Porsi ke-$i: " . htmlspecialchars($s["menu"]) . " - Siap diambil</li>";
    }
    echo "</ol>";
}

