<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Login</title>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img width="300" src="bahan/ICON.png" alt="Gambar tidak ditemukan">
                <h1>Layanan Informasi Transportasi Umum</h1>
            </div>
            <ul>
                <li><a href="index.php" class="btn_login">Beranda</a></li>
                <li><a href="#" class="btn_login">Layanan</a></li>
                <li><a href="register.php" class="btn_login">Registrasi</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="center">
            <div class="form-login">
                <h3>Login</h3>
                <form action="login-proses.php" method="post">
                    <input class="input" type="text" name="username" placeholder="Username" required />
                    <input class="input" type="password" name="password" placeholder="Password" required />
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