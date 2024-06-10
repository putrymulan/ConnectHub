<?php
include 'koneksi.php';

if (isset($_POST['login'])) {
    $requestUsername = $_POST['username'];
    $requestPassword = $_POST['password'];

    // Using prepared statements to prevent SQL Injection
    $stmt = $koneksi->prepare("SELECT id, username, password FROM tb_users WHERE username = ?");
    $stmt->bind_param("s", $requestUsername);
    $stmt->execute();
    $stmt->store_result();

    // Check if the username exists in the database
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $username, $hashedPassword);
        $stmt->fetch();

        // Verify the password
        if (password_verify($requestPassword, $hashedPassword)) {
            session_start();
            $_SESSION['username'] = $username;
            header('Location: admin.php'); // Redirect to user dashboard or appropriate page
        } else {
            echo "<script>
                alert('Username atau password Anda salah, Silahkan coba lagi');
                window.location = 'login.php';
            </script>";
        }
    } else {
        echo "<script>
            alert('Username atau password Anda salah, Silahkan coba lagi');
            window.location = 'login.php';
        </script>";
    }

    $stmt->close();
    $koneksi->close();
}
?>