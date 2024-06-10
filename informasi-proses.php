<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['detail-nama'];
    $kategori = $_POST['detail-kategori'];
    $seat = $_POST['detail-seat'];
    $harga = $_POST['detail-harga'];
    $status = $_POST['detail-status'];
    $nomor = $_POST['detail-nomor'];

    $sql = "INSERT INTO tb_informasi VALUES(null, '$nama','$kategori','$seat', '$harga', '$status', '$nomor')";

    if (empty($nama) ||empty($kategori) ||  empty($harga) || empty($nomor)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'index.php';
            </script>
        ";
    } elseif (mysqli_query($koneksi, $sql)) {
        echo "  
            <script>
                alert('Informasi Berhasil');
                window.location = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'index.php';
            </script>
        ";
    }
}elseif(isset($_POST['edit'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $kategori = $_POST['kategori'];
        $seat = $_POST['seat'];
        $harga = $_POST['harga'];
        $nomor = $_POST['nomor'];
    
        $sql = "UPDATE tb_informasi SET 
                nama = '$nama',
                kategori = '$kategori',
                seat = '$seat',
                harga = '$harga',
                nomor = '$nomor'
                WHERE id = $id 
                ";
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Informasi Berhasil Diubah');
                window.location = 'informasi.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan BEBBBB!!!');
                window.location = 'edit-informasi.php';
            </script>
        ";
    }
    }elseif(isset($_POST['hapus'])) {
            $id = $_POST['id'];
        
            $sql = "DELETE FROM tb_informasi WHERE id = $id";
            if(mysqli_query($koneksi, $sql)) {
                echo "
                    <script>
                        alert('Data Informasi Berhasil Dihapus BEBBBB!!!');
                        window.location = 'informasi.php';
                    </script>
                ";
            }else {
                echo "
                    <script>
                        alert('Data Informasi Gagal Dihapus BEBBBB!!!');
                        window.location = 'informasi.php';
                    </script>
                ";
            }
    } else {
    header('location:informasi.php');
}