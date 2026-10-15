<?php
// Level 4: Kerjakan mulai darisini
if (isset($_COOKIE["nama_kru"]) && trim($_COOKIE["nama_kru"]) !== "") {
    $nama_kru = htmlspecialchars($_COOKIE["nama_kru"]);
    echo "<p class=\"sapaan\">Selamat datang kembali di Cafeteria, $nama_kru! Tetap waspada terhadap Impostor!</p>";
} else {
    echo "<p class=\"sapaan\">Selamat datang di Kantin Pesawat The Skeld!</p>";
}
