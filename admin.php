<?php
// Membuat koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "db_connecthub");

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
// Mengambil total status dari database
$query = "SELECT COUNT(*) as total_status FROM tb_informasi";
$result = $koneksi->query($query);

$status = 0;
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $status = $row['total_status'];
}

// Mengambil total transportasi dari database
$query = "SELECT COUNT(*) as total_transportasi FROM tb_kategori";
$result = $koneksi->query($query);

$categories = 0;
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $categories = $row['total_transportasi'];
}
$koneksi->close();
?>

<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <meta charset="UTF-8" /> 
  <link rel="icon" href="bahan/ICON.png" /> 
  <link rel="stylesheet" href="admin.css" /> 
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet"/> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
  <title>Admin ConnectHub</title> 
  <style>
    .widget {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      display: flex;
      align-items: center;
      justify-content: space-between;
      transition: transform 0.2s;
      margin: 20px 0;
    }
    .widget:hover {
      transform: scale(1.05);
    }
    .widget-icon {
      background: #4CAF50;
      color: #fff;
      font-size: 2em;
      padding: 10px;
      border-radius: 50%;
    }
    .widget-content {
      margin-left: 20px;
    }
    .widget-title {
      font-size: 1.2em;
      color: #333;
    }
    .widget-amount {
      font-size: 2em;
      color: #333;
      font-weight: bold;
    }
  </style>
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
      <h1 class="header">Selamat Datang Admin di Layanan Informasi Transportasi Umum</h1>   
      <div class="datetime" style="font-size: 20px; color :#f4f4f4; text-align:left;  margin-top: 50px; margin-left: 30px; font-family: Arial, sans-serif; height: 150px; width: 500px; border-radius: 10px;">
  </div> 

  <!-- Widget untuk menampilkan jumlah status -->
  <div class="widget">
    <div class="widget-icon">
      <i class="bx bx-info-circle"></i>
    </div>
    <div class="widget-content">
      <div class="widget-title">Total Status</div>
      <div class="widget-amount"><?php echo $status; ?></div>
    </div>
  </div>

  <div class="widget">
    <div class="widget-icon">
      <i class="bx bx-info-circle"></i>
    </div>
    <div class="widget-content">
      <div class="widget-title">Total Transportasi</div>
      <div class="widget-amount"><?php echo $categories; ?></div>
    </div>
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
