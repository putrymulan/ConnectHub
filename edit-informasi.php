<?php
  include 'koneksi.php';
  $id = $_GET['id'];
  if(!isset($_GET['id'])) {
    echo "
      <script>
        alert('Tidak ada ID yang Terdeteksi');
        window.location = 'informasi.php';
      </script>
    ";
  }

  $sql = "SELECT * FROM tb_informasi WHERE id = '$id'";
  $result = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($result);

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
   <!-- Boxicons CDN Link -->
   <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>ConnectHub | Edit Informasi</title>
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
		<a href="informasi.php" class="active">
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
	   <h3>Edit Informasi</h3>
	   <div class="form-login">
		<form
              action="informasi-proses.php"
              method="post"
              enctype="multipart/form-data"
            >
               <input type="hidden" name="id" value="<?= $data['id'] ?>">
               <label for="informasi">Nama</label>
               <input
                 class="input"
                 type="text"
                 name="nama"
                 id="nama"
                 placeholder="Name"
                 value="<?= $data['nama'] ?>"
               />
               <label for="informasi">Kategori</label>
               <input
                 class="input"
                 type="text"
                 name="kategori"
                 id="kategori"
                 placeholder="Categories"
                 value="<?= $data['kategori']?>"
               />
               <label for="informasi">Seat</label>
               <input
                 class="input"
                 type="text"
                 name="seat"
                 id="seat"
                 placeholder="Seat"
                 value="<?= $data['seat']?>"
               />
               <label for="informasi">Harga</label>
               <input
                 class="input"
                 type="text"
                 name="harga"
                 id="harga"
                 placeholder="Price"
                 value="<?= $data['harga']?>"
               />
               <label for="informasi">Nomor Telp</label>
               <input
                 class="input"
                 type="text"
                 name="nomor"
                 id="nomor"
                 placeholder="Phone"
                 value="<?= $data['nomor']?>"
               />
               <button type="submit" class="btn btn-simpan" name="edit">
                 Edit
               </button>
          </form>
	   </div>
    </div>
  </section>
  <script>
	let sidebar = document.querySelector(".sidebar");
	let sidebarBtn = document.querySelector(".sidebarBtn");
	sidebarBtn.onclick = function () {
	   sidebar.classList.toggle("active");
	   if (sidebar.classList.contains("active")) {
		sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
	   } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
	   };
   </script>
</body>
</html>