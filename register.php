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
        <div class="logo"> 
            <img width="300" src ="bahan/ICON.png" alt="Gambar tidak ditemukan"> 
            <h1>Layanan Informasi Transportasi Umum</h1>
        </div>  
        <nav>
	 	 	<ul> 
	 	 	  <li><a href="beranda.php" class="btn_login">Beranda</a></li> 
	 	 	  <li><a href="#" class="btn_login">Layanan</a></li> 
	 	 	  <li><a href="login.php" class="btn_login">Masuk</a></li> 
            </ul>
        </nav> 
    </header>
        <main> 
            <div class="center"> 
             <div class="form-login"> 
               <h3>Register</h3> 
               <form action=""> 
                  <input 	class="input" 	type="text" name="firstname" placeholder="First Name"/> 
                  <input 	class="input" 	type="text" name="lastname" placeholder="Last Name"/> 
                 <input 	class="input" 	type="email" name="email" placeholder="Email" /> 
                  <input 	class="input" 	type="text" name="nphone" placeholder="Phone Number"/> 
                 <input 	class="input" 	type="text" name="username" placeholder="Username"/> 
                 <input class="input" type="password" name="password" placeholder="Password" /> 
                   <button type="submit" class="btn_login" name="register"id="register">Register</button> 
               </form> 
             </div> 
           </div> 
        </main>
    <footer> 
        <h4>Hak Cipta &copy; 2024 ConnectHub</h4>
    </footer> 
</body> 
</html>