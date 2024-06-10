<?php  
include 'koneksi.php'; 
 
if(isset($_POST['register'])) {  
	$firstname = $_POST['firstname']; 
    $lastname= $_POST['lastname']; 
    $email     = $_POST['email']; 
	$phone = $_POST['phone']; 
    $username = $_POST['username']; 
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); 
	
    $sql = "INSERT INTO tb_users VALUES(NULL, '$firstname','$lastname','$email','$phone', '$username', '$password')"; 
 
    if(empty($firstname) || empty($lastname) || empty($email )|| empty($phone) || empty($username) || empty($password)) {       
	  echo " 
	  		<script> 
				alert('Pastikan Anda Mengisi Semua Data'); 
	  			window.location = 'register.php'; 
			</script>   "; 
    }elseif(mysqli_query($koneksi, $sql)) { 
		echo "
			<script> 
				alert('Registrasi Berhasil Silahkan login');
				window.location = 'login.php'; 
			</script> ";     
	}else {         
		echo " 
			<script> 
				alert('Terjadi Kesalahan');
				window.location = 'register.php';
			</script> "; 
    } 
} 
?> 