<?php
session_start();

// Simpan data biodata ke dalam variabel sesi
$_SESSION['responden_nim'] = $_POST['responden_nim'];
$_SESSION['responden_nama'] = $_POST['responden_nama'];
$_SESSION['responden_prodi'] = $_POST['responden_prodi'];
$_SESSION['responden_email'] = $_POST['responden_email'];
$_SESSION['responden_hp'] = $_POST['responden_hp'];
$_SESSION['tahun_masuk'] = $_POST['tahun_masuk'];

// Alihkan ke halaman soal_survey.php
header("Location: soal_survey_mahasiswa.php");
exit();
?>