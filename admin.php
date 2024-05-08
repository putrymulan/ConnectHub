<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <meta charset="UTF-8" /> 
  <link rel="icon" href="bahan/ICON.png" /> 
  <link rel="stylesheet" href="admin.css" /> 
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet"/> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
  <title>Admin ConnectHub</title> 
</head> 
<body> 
    <div class="sidebar"> 
        <div class="logo-details"> 
            <i class="bx bx-category"></i> 
            <span class="logo_name">ConnectHub</span>      
        </div> 
            <ul class="nav-links"> 
                <li> 
                    <a href="admin.php" class = "active"> 
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
                    <a href="informasi.php">
                        <i class="bx bx-list-ul"></i>
                        <span class="links_name">Informasi</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bx bx-log-out"></i>
                        <span class="links_name">Keluar</span></a>
                </li>
            </ul>
        </div>
   <section class="home-section"> 
	 	<nav> 
	 	   <div class="sidebar-button"> 
	 	 	<i class="bx bx-menu sidebarBtn"></i> 
	 	   </div> 
	 	   <div class="profile-details"> 
	 	      <span class="admin_name">CONNECTHUB</span> 
	 	   </div> 
	 	</nav> 
	 	<div class="home-content"> 
      <h1 class="header">Selamat Datang Admin di Layanan Informasi Transportasi Umum</h1>   
      <div class="datetime" 
      style="font-size: 70px; color :#f4f4f4;
      text-align:center;  margin-top: 100px; 
      margin-left: 300px; font-family: Arial, sans-serif;  
    background-color: #87CEEB; height: 150px; width: 500px; border-radius: 10px;">
  </div> 
	 	</div> 
   </section>   
    <script> 
   setInterval(updateClock, 1000);  	
   function updateClock() { 
   	// Mendapatkan tanggal dan waktu saat ini    	
    var date = new Date(); 
   	// Menampilkan tanggal dan waktu saat ini di elemen dengan id "datetime"   	
    document.querySelector(".datetime").innerHTML 	= date.toLocaleString(); 
	 	} 
	 	</script> 
    <script> let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function () { 
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu","bx-menu-alt-right");
            } 
            else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");};
            </script>
</body> 
</html> 
