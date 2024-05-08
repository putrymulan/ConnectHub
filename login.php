<?php
session_start();

// Fungsi validasi login (gunakan fungsi yang aman seperti bcrypt)
function validate_login($username, $password) {
    // Lakukan validasi login sesuai dengan kebutuhan aplikasi Anda
    // Di sini, contoh sederhana hanya mengecek apakah username dan password tertentu cocok
    $admin_username = "putrimulan"; // Ganti dengan username admin yang benar
    $admin_password = "mulan1803"; // Ganti dengan password admin yang benar

    if ($username === $admin_username && $password === $admin_password) {
        return true; // Validasi berhasil untuk admin
    } else {
        return false; // Validasi gagal
    }
}

// Cek apakah form login telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Proses login
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Anda bisa menambahkan validasi login di sini
    if (validate_login($username, $password)) {
        // Simpan username ke dalam session jika login berhasil
        $_SESSION["username"] = $username;
        
        // Redirect ke halaman admin jika login adalah admin
        if ($username === "putrimulan") {
            header("Location: admin.php");
            exit();
        } else {
            // Redirect ke halaman beranda atau halaman selanjutnya setelah login untuk pengguna biasa
            header("Location: beranda.php");
            exit();
        }
    } else {
        // Jika login gagal, mungkin tampilkan pesan kesalahan atau lakukan tindakan lain yang sesuai
        $error_message = "Username atau password salah.";
    }
}
?>
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap"rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" /> 
    <title>Login</title> 
</head> 
<body> 
    <header>  
        <nav>
            <div class="logo"> 
                <img width="300" src ="bahan/ICON.png" alt="Gambar tidak ditemukan"> 
                <h1>Layanan Informasi Transportasi Umum</h1>
            </div> 
            <ul> 
                <li><a href="beranda.php" class="btn_login">Beranda</a></li> 
                <li><a href="#" class="btn_login">Layanan</a></li> 
                <li><a href="register.php" class="btn_login">Registrasi</a></li> 
            </ul>
        </nav> 
    </header>
    <main> 
        <div class="center"> 
            <div class="form-login"> 
                <h3>Login</h3>  
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
                    <input class="input" type="text" name="username" placeholder="Username" /> 
                    <input class="input" type="password" name="password" placeholder="Password" /> 
                    <button type="submit" class="btn_login" name="login">Login</button> 
                    <nav>
                        <ul>
                            <li><h4>Belum memiliki akun?</h4> <a href="register.php" class="link-register">Daftar Disini</a></li>
                        </ul>
                    </nav>
                    <?php
                        // Tampilkan pesan kesalahan jika login gagal
                        if (isset($error_message)) {
                            echo '<div class="error-message">' . $error_message . '</div>';
                        }
                    ?>
                </form> 
            </div> 
        </div> 
    </main> 
    <footer>
        <h4>Hak Cipta &copy; 2024 ConnectHub</h4>
    </footer>
</body>
</html>
