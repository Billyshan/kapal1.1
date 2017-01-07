<?php
    include "koneksi.php";
    //Kirimkan Variabel
    $nama_kapal    = $_POST['nama_kapal'];
    $nomor_kapal            = $_POST['nomor_kapal'];
    $tanggal_datang       = $_POST['tanggal_datang'];
    $tanggal_pergi            = $_POST['tanggal_pergi'];
    $jenis_kapal        = $_POST['jenis_kapal'];
    $alamat_dermaga        = $_POST['alamat_dermaga'];
    //input data ke table mahasiswa dalam database akademik
    $input    ="INSERT INTO kapal (nama_kapal, nomor_kapal, tanggal_datang, tanggal_pergi, jenis_kapal,alamat_dermaga)
            VALUES ('$nama_kapal','$nomor_kapal','$tanggal_datang','$tanggal_pergi','$jenis_kapal','alamat_dermaga')";
    $query_input =mysql_query($input);
        if ($query_input) {
    //Jika Sukses
    ?>
        <script language="JavaScript">
            alert('Data kapal Berhasil diinput!');
            document.location='index.php';
        </script>
    <?php
    }
    else {
    //Jika Gagal
    echo "Data Kapal Gagal diinput, Silahkan diulangi!";
    }
    //Tutup koneksi engine MySQL
    mysql_close($Open);
?>