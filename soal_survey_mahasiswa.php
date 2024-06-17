<?php
session_start();

// Cek apakah data biodata sudah diisi
if (!isset($_SESSION['responden_nim']) || !isset($_SESSION['responden_nama']) || !isset($_SESSION['responden_prodi']) || !isset($_SESSION['responden_email']) || !isset($_SESSION['responden_hp']) || !isset($_SESSION['tahun_masuk'])) {
    // Jika data biodata belum diisi, alihkan ke halaman indexuser.php
    header("Location: indexuser.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Soal Survei</title>
    <!-- Tautan ke CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Survey Kepuasan Pelanggan Polinema</h1>

        <form action="proses_survey.php" method="post">
            <?php
            $nomor = 1;
            $soal = array(
                "Bagaimana penilaian Anda terhadap fasilitas kampus Polinema?",
                "Bagaimana penilaian Anda terhadap kualitas pengajaran di Polinema?",
                "Bagaimana penilaian Anda terhadap layanan administrasi di Polinema?",
                "Bagaimana penilaian Anda terhadap kegiatan kemahasiswaan di Polinema?",
                "Bagaimana penilaian Anda terhadap lingkungan kampus Polinema?"
            );
            foreach ($soal as $pertanyaan) {
                echo "<div class='mb-3'>";
                echo "<p>$nomor. $pertanyaan</p>";
                echo "<div class='form-check form-check-inline'>";
                echo "<input class='form-check-input' type='radio' name='soal$nomor' id='soal$nomor-1' value='5'>";
                echo "<label class='form-check-label' for='soal$nomor-1'>Sangat Baik</label>";
                echo "</div>";
                // Kode HTML untuk opsi jawaban lainnya
                echo "</div>";
                $nomor++;
            }
            ?>

            <div class="mb-3">
                <label for="saran_kritik" class="form-label">Saran atau Kritik:</label>
                <textarea class="form-control" id="saran_kritik" name="saran_kritik" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>

    <!-- Tautan ke JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>