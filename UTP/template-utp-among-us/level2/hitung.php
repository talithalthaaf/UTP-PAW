<?php
// Jangan ubah ini!
$nama = $_POST["nama"];
$menu = $_POST["menu"];
$jumlah = (int) $_POST["jumlah"];
$kategori = $_POST["kategori"];

// Kerjakan mulai darisini

$daftar_harga = [
    "Pizza Segitiga Polus"       => 25000,
    "Susu Elektrik Electrical"   => 18000,
    "Space Donut Oxygen"         => 15000,
    "Jus Berry MedBay"           => 20000,
    "Emergency Steak Navigation" => 45000,
];

// Hitung harga
$harga = $daftar_harga[$menu] ?? 0;
$subtotal = $harga * $jumlah;

// Hitung Diskon
$diskon = 0;
if ($kategori === "Crewmate" && $jumlah >= 3) {
    $diskon = $subtotal * 15 / 100;
}

// total harga
$total = $subtotal - $diskon;

// cek valid
$valid = true;
$pesan = "";

if (trim($nama) === "") {
    $valid = false;
    $pesan = "Pesanan ditolak: nama kru wajib diisi.";
} elseif (!isset($daftar_harga[$menu])) {
    $valid = false;
    $pesan = "Pesanan ditolak: ransum tidak tersedia di kantin.";
} elseif ($kategori !== "Crewmate" && $kategori !== "Impostor") {
    $valid = false;
    $pesan = "Pesanan ditolak: kategori kru harus Crewmate atau Impostor.";
} elseif ($jumlah < 1) {
    $valid = false;
    $pesan = "Pesanan ditolak: jumlah ransum minimal 1 porsi.";
}
