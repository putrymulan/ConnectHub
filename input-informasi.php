<!DOCTYPE html> 
<html lang="en">  
<head> 
   <meta charset="UTF-8" /> 
   <link rel="icon" href="bahan/ICON.png" /> 
   <link rel="stylesheet" href="admin.css" /> 
   <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet"/> 
   <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
   <title>Input Informasi ConnectHub</title> 
</head> 
<body> 
   <div class="sidebar"> 
 	<div class="logo-details"> 
 	   <i class="bx bx-category"></i> 
 	   <span class="logo_name">ConnectHub</span> 
 	</div> 
 	<ul class="nav-links"> 
 	   <li> 
 	 	<a href="admin.php"> 
 	 	   <i class="bx bx-grid-alt"></i> 
 	 	   <span class="links_name">Dashboard</span> 
 	 	</a> 
 	   </li> 
 	   <li> 
 	 	<a href="kategori.php"> 
 	 	   <i class="bx bx-box"></i> 
 	 	   <span class="links_name">Kategori</span> 
 	 	</a> 
 	   </li> 
 	   <li> 
 	 	<a href="informasi.php"  class="active"> 
 	 	   <i class="bx bx-list-ul"></i> 
 	 	   <span class="links_name">Informasi</span> 
 	 	</a> 
 	   </li> 
 	   <li> 
 	 	<a href="#"> 
 	 	   <i class="bx bx-log-out"></i> 
 	 	   <span class="links_name">Keluar</span> 
 	 	</a> 
 	   </li> 
 	</ul> 
   </div> 
   <section class="home-section"> 
 	<nav> 
 	   <div class="sidebar-button"> 
 	 	<i class="bx bx-menu sidebarBtn"></i> 
 	   </div> 
 	   <div class="profile-details"> 
 	 	<span 	class="admin_name">CONNECTHUB</span> 
 	   </div> 
 	</nav> 
 	<div class="home-content"> 
 	   <h3 class="header">Input Informasi</h3> 
 	   <div class="form-login"> 
 	 	<form action="" id="form"> 
 	 	   <label for="nama">Kategori</label> 
 	 	   <input 	class="input" 	type="text" name="nama" id="nama" placeholder="Nama" /> 
 	 	   <label for="jenis">Jumlah Seat</label> 
 	 	   <input 	class="input" 	type="text" name="seat" id="seat" placeholder="Seat" /> 
 	 	   <label for="harga">Harga</label> 
           <input class="input" type="text" name="harga" id="harga" placeholder="Harga" /> 
 	 	   <label for="harga">Jenis</label> 
           <input class="input" type="text" name="jenis" id="jenis" placeholder="Jenis" /> 
 	 	   <button type="submit" class="btn btn-simpan" id="simpan">Simpan</button> 
 	 	</form> 
 	   </div> 
 	</div> 
   </section> 
   <script> 
    // Mendapatkan elemen form dan input     
    var form = document.getElementById("form");     
    var input = document.getElementById("simpan"); 
    // Menambahkan event listener untuk saat form disubmit     
    form.addEventListener("submit", function(e) { 
      e.preventDefault();       
      if (input.value === "") { 
        alert("Mohon Input Data Terlebih Dahulu!"); 
      } else { 
        alert("Data yang dimasukkan adalah: " + input.value); 
      } 
    }); 
   </script>    
   <script>  	
   let sidebar = document.querySelector(".sidebar"); 
 	let sidebarBtn 	= document.querySelector(".sidebarBtn");  	
    sidebarBtn.onclick = function () {  	 	
        sidebar.classList.toggle("active");  	  	  
        if (sidebar.classList.contains("active")) { 
 	 	 	sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right"); 
 	 	  } else sidebarBtn.classList.replace("bxmenu-alt-right", "bx-menu"); 
 	 	}; 
   </script> 
</body> 
</html> 
