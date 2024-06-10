<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <link rel="icon" href="bahan/ICON.png" />
   <link rel="stylesheet" href="css/admin.css" />
   <!-- Boxicons CDN Link -->
   <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>ConnectHub Admin | Informasi</title>
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
         <h3>Informasi</h3>
         <a href="informasi-cetak.php">mulan cantik</a>
         <table class="table-data">
            <thead>
               <tr>
                  <th>Nama</th>
                  <th>Kategori</th>
                  <th>Seat</th>
                  <th>Harga</th>
                  <th>Status</th>
                  <th scope="col" style="width: 20%">Aksi</th>
               </tr>
            </thead>
            <tbody>
               <?php
               include 'koneksi.php';
               $sql = "SELECT * FROM tb_informasi";
               $result = mysqli_query($koneksi, $sql);
               if (mysqli_num_rows($result) == 0) {
                  echo "
                  <h3 style='text-align: center; color: white;'>Data Kosong</h3>
               ";
               } else {
                  while ($data = mysqli_fetch_assoc($result)) {
                     echo "
                     <tr>
                         <td>$data[nama]</td>
                         <td>$data[kategori]</td>
                         <td>$data[seat]</td>
                         <td>$data[harga]</td>
                         <td><p class='success'>$data[status]</p></td>
                         <td style='display: none;'>$data[nomor]</td>
                         <td >
                        <a class='btn-edit' href=edit-informasi.php?id=$data[id]>
                               Edit
                        </a> | 
                        <a class='btn-delete' href=hapus-informasi.php?id=$data[id]>
                            Hapus
                        </a>
                      </td>
                     </tr>
                     ";} }
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

      function showDetails(nama, kategori, seat, harga, jenis, status) {
         let no_hp = event.target.getAttribute('data-nomor');
         alert(`Nama: ${nama}\nKategori: ${kategori}\nSeat: ${seat}\nHarga: ${harga}\nJenis: ${jenis}\nNomor Handphone: ${nomor}\nStatus: ${status}`);
      }
   </script>
</body>
=======
<!DOCTYPE html> 
<html lang="en"> 
<head> 
   <meta charset="UTF-8" /> 
   <link rel="icon" href="bahan/ICON.png" /> 
   <link rel="stylesheet" href="admin.css" />
   <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" /> 
   <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
   <title>Informasi ConnectHub</title> 
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
            <a href="#" class = "active">
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
	 	 	<h3 class="header">Informasi</h3> 
 	 	<button type="button" class="btn btn-tambah">  	 	  
            <a href="input-informasi.php">Tambah Data</a> 
	 	 	</button> 
	 	 	<table class="table-data"> 
	 	 	   <thead> 
	 	 	 	<tr> 
	 	 	 	  <th style="width: 20%">Kategori</th> 
	 	 	 	  <th>Jumlah Seat</th> 
	 	 	 	  <th style="width: 20%">Harga</th> 
	 	 	 	  <th style="width: 20%">Jenis</th> 
	 	 	 	  <th>Aksi</th> 
	 	 	 	</tr> 
	 	 	   </thead> 
	 	 	   <tbody> 
	 	 	 	<tr> 
	 	 	 	   <td>Bus</td> 
	 	 	 	   <td>20</td> 
	 	 	 	   <td>450.000.000</td> 
	 	 	 	   <td>Pariwisata</td> 
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
                    sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
                } else sidebarBtn.classList.replace("bx-menualt-right", "bx-menu");
                };
                </script> 
</body> 
>>>>>>> ef2a864fce9ad8d6ae6cb6e054b10f71cf9f88f0
</html>