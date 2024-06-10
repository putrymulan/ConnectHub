<?php 
include 'koneksi.php';

function upload() {
    $namaFile = $_FILES['photo']['name'];
    $error = $_FILES['photo']['error'];
    $tmpName = $_FILES['photo']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if($error === 4) {
        echo "
            <script>
                alert('Gambar Harus Diisi');
                window.location = 'input-kategoris.php';
            </script>
        ";

        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstentiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if(!in_array($ekstensiGambar, $ekstentiGambarValid)) {
        echo "
            <script>
                alert('File Harus Berupa Gambar');
                window.location = 'input-kategoris.php';
            </script>
        ";
        return null;
    }

    // lolos pengecekan, upload gambar
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    $oke =  move_uploaded_file($tmpName, './img_kategori/' . $namaFileBaru);
    return $namaFileBaru;

}

if(isset($_POST['simpan'])) {
    $categories = $_POST['categories'];
    $description= $_POST['description'];
    $price= $_POST['price'];
    $photo = upload();

    if(!$photo) {
        return false;
    }
    var_dump($photo, $categories, $description, $price);

    $sql = "INSERT INTO tb_kategori VALUES(NULL, '$photo', '$categories', '$description', '$price')";

    if(empty($categories)|| empty($description)|| empty($price)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'input-kategoris.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Kategori Berhasil Ditambahkan BEBBBB!!!');
                window.location = 'kategori.php'
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan BEBBBB!!!');
                window.location = 'input-kategoris.php'
            </script>
        ";
    }
}elseif(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $categories = $_POST['categories'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $photoLama = $_POST['photoLama'];

    // cek apakah user pilih gambar atau tidak
    if($_FILES['photo']['error']) {
        $photo = $photoLama;
    }else {
        // foto lama akan dihapus dan diganti foto baru
        unlink('./img_kategori/' . $photoLama);
        $photo = upload();
    }

    $sql = "UPDATE tb_kategori SET 
            categories = '$categories',
            description = '$description',
            price = '$price',
            photo = '$photo'
            WHERE id = $id 
            ";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Kategori Berhasil Diubah');
                window.location = 'kategori.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan BEBBBB!!!');
                window.location = 'edit.php';
            </script>
        ";
    }
}elseif(isset($_POST['hapus'])) {
    $id = $_POST['id'];

    // hapus gambar
    $sql = "SELECT * FROM tb_kategori WHERE id = $id";
    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);
    $photo = $row['photo'];
    unlink('./img_kategori/' . $photo);
    

    $sql = "DELETE FROM tb_kategori WHERE id = $id";
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Kategori Berhasil Dihapus BEBBBB!!!');
                window.location = 'kategori.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data Kategori Gagal Dihapus BEBBBB!!!');
                window.location = 'kategori.php';
            </script>
        ";
    }
}else {
    header('location: kategori.php');
}