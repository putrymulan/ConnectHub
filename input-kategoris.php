<?php 
	session_start();
	if($_SESSION['username'] == null) {
		header('location:login.php');
	}
?>

<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <meta charset="UTF-8" /> 
  <link rel="icon" href="bahan/ICON.png" /> 
  <link rel="stylesheet" href="css/admin.css" /> 
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet"/> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
  <title>Input Kategori ConnectHub</title> 
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
                    <a href="#" class="active">
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
                    <a href="logout.php">
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
  <h3 class="header">Input Kategori</h3> 
  <div class="form-login"> 
  <form action="kategori-proses.php" method="post" enctype="multipart/form-data">
        <label for="kategori">Kategori</label> 
        <input 	class="input" type="text" name="categories" id="categories" placeholder="Categories"/> 
        <label for="kategori">Deskripsi</label> 
        <input 	class="input" type="text" name="description" id="description" placeholder="Description"/> 
        <label for="kategori">Harga</label> 
        <input 	class="input" type="text" name="price" id="price" placeholder="Price"/> 
        <label for="photo">Gambar</label> 
        <input 	type="file" name="photo" id="photo" style="margin-bottom: 20px"/> 
        <button type="submit" class="btn btn-simpan" name="simpan">Simpan</button> 
     </form>
    </div>
</div> 
</section>    
<script>
		let sidebar = document.querySelector(".sidebar");
		let sidebarBtn = document.querySelector(".sidebarBtn");
		sidebarBtn.onclick = function() {
			sidebar.classList.toggle("active");
			if (sidebar.classList.contains("active")) {
				sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
			} else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
		};
	</script> 
</body> 
</html> 
