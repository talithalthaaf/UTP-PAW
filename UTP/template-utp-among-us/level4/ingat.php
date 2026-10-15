<?php
// Kerjakan Level 4 di sini: simpan nama pengguna ke Cookie
$durasi_cookie = (1 * 24 * 60 * 60) + (3 * 60 * 60) + (33 * 60);
setcookie("nama_kru", $nama, time() + $durasi_cookie, "/");
