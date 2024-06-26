<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body> 
    <header>
        <nav>
            <div class="logo"> 
                <img width="300" src ="bahan/ICON.png" alt="Gambar Tidak Ditemukan"/> 
                <h1>Selamat Datang di Layanan Informasi Transportasi Umum</h1>
            </div>
            <ul> 
                <li><a href="beranda.php" class="btn_login">Beranda</a></li> 
                <li><a href="register.php" class="btn_login">Layanan</a></li> 
                <li><a href="login.php" class="btn_login">Masuk</a></li> 
            </ul>
        </nav> 
    </header>
    <section>
        <p>Website ini memberikan informasi lengkap mengenai layanan transportasi umum di kota kami.</p>
    </section>
    <div class="carousel">
        <div class="carousel-inner">
            <div class="card-categories" id="bus">
                <div class="card">
                    <div class="card-image">
                        <img src="bahan/bus.png" alt="gambar tidak ditemukan" />
                        <h5>Bus Pariwisata</h5> 
                    </div>
                </div>
            </div>  
            <div class="card-categories" id="travel">
                <div class="card">
                    <div class="card-image">
                        <img src="bahan/travel.png" alt="gambar tidak ditemukan" />
                        <h5>Travel</h5> 
                    </div>
                </div>
            </div>
            <div class="card-categories" id="kapal">
                <div class="card">
                    <div class="card-image">
                        <img src="bahan/kapal.png" alt="gambar tidak ditemukan" />
                        <h5>Kapal Pesiar</h5> 
                    </div>
                </div>
            </div>
            <div class="card-categories" id="pesawat">
                <div class="card">
                    <div class="card-image">
                        <img src="bahan/pesawat.png" alt="gambar tidak ditemukan" />
                        <h5>Pesawat</h5> 
                    </div>
                </div>
            </div>
            <div class="card-categories" id="kereta">
                <div class="card">
                    <div class="card-image">
                        <img src="bahan/kereta.png" alt="gambar tidak ditemukan" />
                        <h5>Kereta Api</h5> 
                    </div>
                </div>
            </div>
        </div>
        <button class="prev"><i class="fas fa-chevron-left"></i></button>
        <button class="next"><i class="fas fa-chevron-right"></i></button>
    </div>
    <footer>
        <h4>Hak Cipta &copy; 2024 ConnectHub</h4>
    </footer>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const carouselInner = document.querySelector('.carousel-inner');
            const prevBtn = document.querySelector('.prev');
            const nextBtn = document.querySelector('.next');

            let index = 0;
            const totalItems = document.querySelectorAll('.card-categories').length;
            const itemWidth = document.querySelector('.card-categories').offsetWidth;

            function slide(direction) {
                if (direction === 'next') {
                    index++;
                    if (index === totalItems) index = 0;
                } else {
                    index--;
                    if (index < 0) index = totalItems - 1;
                }
                carouselInner.style.transform = `translateX(-${index * itemWidth}px)`;
            }

            prevBtn.addEventListener('click', () => slide('prev'));
            nextBtn.addEventListener('click', () => slide('next'));
        });
    </script>
</body>
</html>
