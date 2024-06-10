<<<<<<< HEAD
<?php
session_start();
if ($_SESSION['username'] == null) {
	header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8" />
	<link rel="icon" href="bahan/ICON.png" />
	<link rel="stylesheet" href="css/admin.css" />
	<!-- Boxicons CDN Link -->
	<link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>ConnectHub | Kategori</title>
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
				<a href="kategori.php" class="active">
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
				<span class="admin_name">CONNECTHUB</span>
			</div>
		</nav>
		<div class="home-content">
			<h3>Kategori</h3>
			<button type="button" class="btn btn-tambah">
				<a href="input-kategoris.php">Tambah Data</a>
			</button>
			<table class="table-data">
				<thead>
					<tr>
						<th scope="col" style="width: 20%">Gambar</th>
						<th>Kategori</th>
						<th scope="col" style="width: 20%">Deskripsi</th>
						<th scope="col" style="width: 20%">Harga</th>
						<th scope="col" style="width: 20%">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					include 'koneksi.php';
					$sql = "SELECT * FROM tb_kategori";
					$result = mysqli_query($koneksi, $sql);
					if (mysqli_num_rows($result) == 0) {
						echo "
			   <tr>
				<td colspan='5' align='center'>
                           Data Kosong
                        </td>
			   </tr>
				";
					}
					while ($data = mysqli_fetch_assoc($result)) {
						echo "
                    <tr>
                      <td>
					  <img src='./img_kategori/$data[photo]' width='150px'>
                      </td>
                      <td>$data[categories]</td>
					  <td>$data[description]</td>
					  <td>$data[price]</td>
                      <td >
                        <a class='btn-edit' href=edit.php?id=$data[id]>
                               Edit
                        </a> | 
                        <a class='btn-delete' href=hapus.php?id=$data[id]>
                            Hapus
                        </a>
                      </td>
                    </tr>
                  ";
					}
					?>
				</tbody>
			</table>
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
=======
<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <meta charset="UTF-8" /> 
  <link rel="icon" href="bahan/ICON.png" /> 
  <link rel="stylesheet" href="admin.css" /> 
  <link href=https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css rel="stylesheet"/> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />   
  <title>Kategori ConnectHub</title> 
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
                <h3 class="header">Kategori</h3> 
                <button type="button" class="btn btn-tambah">
                    <a href="input-kategoris.php">Tambah Data</a> 
                </button>
                <table class="table-data">
                    <thead> 
                        <tr>
                            <th scope="col" style="width:30%">Gambar</th> 
                            <th>Kategori</th> 
                            <th scope="col" style="width:30%">Deskripsi</th> 
                            <th scope="col" style="width:20%">Aksi</th> 
                        </tr> 
                    </thead>
                    <tbody> 
                        <tr>
                            <td><img src="bahan/bus.png" alt="" width="200"/></td>
                            <td>Transportasi Darat</td>
                            <td>Bus </td> 
                            <td><a href="">Edit</a> | <a href="">Hapus</a></td> 
                        </tr> 
                    </tbody>
                </table>
            </div>
            </section>    
            <script> let sidebar = document.querySelector(".sidebar");
            let sidebarBtn = document.querySelector(".sidebarBtn");
            sidebarBtn.onclick = function () { 
                sidebar.classList.toggle("active");
                if (sidebar.classList.contains("active")) {
                    sidebarBtn.classList.replace("bx-menu","bx-menu-alt-right");
                } 
                else sidebarBtn.classList.replace("bx- menu-alt-right", "bx-menu");};
                </script> 
    </body> 
</html>        
>>>>>>> ef2a864fce9ad8d6ae6cb6e054b10f71cf9f88f0
