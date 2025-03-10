<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive portofoio website</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <header class="header">
        <a href="#home" class="logo">Porto<span>folio</span></a>
        
        <i class='bx bx-menu' id="menu-icon"></i>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#education">Education</a>
            <a href="#skill">Skill</a>
            <a href="#Portofolio">Portofolio</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <section class="Home" id="home">
        <div class="home-content">
            <h1>Halo saya <span>Meilanno</span></h1>
            <h3 class="text-animation">X PPLG 2<span></span></h3>
            <p>Halo semuanya, perkenalkan nama saya Meilanno Adityarahma Riyanto. Saya adalah siswa di SMK Telkom Purwokerto, dan saat ini saya mengambil jurusan Pengembangan Perangkat Lunak dan Gim (PPLG) di SMK Telkom Purwokerto.</p>

            <div class="social-icons">
                <a href="#"><i class='bx bxl-linkedin' style='color:#ffffff' ></i></a>
                <a href="https://github.com/Lanno10"><i class='bx bxl-github' style='color:#ffffff' ></i></a>
                <a href="https://www.instagram.com/xzylann__/"><i class='bx bxl-instagram-alt' style='color:#ffffff' ></i></a>
                <a href="#"><i class='bx bxl-twitter' style='color:#ffffff' ></i></a>
            </div>

            <div class="btn-group">
                <a href="#" class="btn">Hire</a>
                <a href="#contact" class="btn">Contact</a>
            </div>
        </div>
            <div class="home-img">
                <img src="kelulusan smp.jpg"alt="">
            </div>
    </section>

    <section class="education" id="education">
        <h2 class="heading">Education</h2>

        <div class="timeline-items">

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                    <div class="timeline-date">2013</div>
                    <div class="timeline-content">
                        <h3>SD Ranjingan</h3>
                        <p>Sejak kecil, saya belum terlalu mengenal teknologi komputer. Saat SD, saya lebih banyak beraktivitas di luar dan hanya melihat komputer digunakan oleh orang lain tanpa benar-benar memahaminya.</p>
                    </div>
               
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                    <div class="timeline-date">2020</div>
                    <div class="timeline-content">
                        <h3>SMP Negeri 1 Kalibagor</h3>
                        <p>Saat SMP, saya mulai berkenalan dengan komputer dan internet. Awalnya hanya untuk tugas sekolah dan hiburan, tetapi lama-kelamaan saya tertarik dengan bagaimana aplikasi dan gim dibuat. Rasa penasaran ini mendorong saya untuk mencari tahu lebih dalam tentang dunia teknologi dan pemrograman.</p>
                    </div>
                
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                    <div class="timeline-date">2024</div>
                    <div class="timeline-content">
                        <h3>SMK Telkom Purwokerto</h3>
                        <p>Setelah lulus SMP, saya memutuskan untuk melanjutkan pendidikan di SMK Telkom Purwokerto, memilih jurusan Pengembangan Perangkat Lunak dan Gim (PPLG). Di sini, saya belajar banyak tentang pemrograman, pengembangan aplikasi, dan teknologi digital.</p>
                    </div>
                
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                    <div class="timeline-date">2028-Sekian</div>
                    <div class="timeline-content">
                        <h3>Cita cita</h3>
                        <p>Ke depannya, saya bercita-cita menjadi seorang pengusaha di bidang teknologi. Saya ingin membangun bisnis berbasis digital, menciptakan aplikasi atau layanan yang bermanfaat bagi banyak orang, serta berkontribusi dalam perkembangan dunia teknologi.</p>
                    </div>
                
            </div>
        </div>
    </section>

    <section class="Skill" id="skill">
        <h2 class="heading">Skill</h2>

        <div class="skill-container">
            <div class="skill-box">
                <div class="skill-info">
                    <h4>HTML</h4>
                    <p>Saya memiliki keterampilan dalam pemrograman web menggunakan HTML untuk membangun struktur halaman web. Saya dapat membuat elemen seperti teks, gambar, tabel, dan formulir, serta menggunakan tag semantik untuk meningkatkan keterbacaan dan SEO.</p>
                </div>
            </div>

            <div class="skill-box">
                <div class="skill-info">
                    <h4>CSS</h4>
                    <p> CSS Menguasai styling halaman web, termasuk penggunaan layout, warna, font, dan animasi untuk membuat tampilan lebih menarik dan responsif.</p>
                </div>
            </div>

            <div class="skill-box">
                <div class="skill-info">
                    <h4>Java Script</h4>
                    <p> JavaScript Memahami dasar-dasar interaktivitas pada web, seperti manipulasi DOM, event handling, dan penggunaan fungsi untuk meningkatkan user experience.</p>
                </div>
            </div>

            <div class="skill-box">
                <div class="skill-info">
                    <h4>Infinite Design</h4>
                    <p>  Infinite Design Mampu membuat desain grafis dan UI yang kreatif, termasuk ilustrasi vektor, wireframe, dan konsep desain untuk proyek digital.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="Portofolio" id="portofolio">
        <div class="portofolio-box">
            <h2 class="heading">Portofolio</h2>
            
            <div class="wrapper">
                <div class="portofolio-item">
                    <img src="desain karakter vector.jpg" alt="">
                    <h2>Design Vector</h2>
                    <div class="rating">
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bxs-star' id="star"></i>
                    </div>
                    <p>"Saya membuat desain vektor sendiri menggunakan Infinite Design. Saya menggambar bentuk dasar, menyesuaikan warna, dan menambahkan detail agar hasilnya lebih bagus. Proses ini membuat saya semakin mahir dalam desain vektor."</p>
                </div>

                <div class="portofolio-item">
                    <img src="wajah vector.jpg" alt="">
                    <h2>Design wajah sendiri</h2>
                    <div class="rating">
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bxs-star' id="star"></i>
                    </div>
                    <p>"Saya telah membuat ilustrasi wajah vektor menggunakan aplikasi Infinite Design. Dalam prosesnya, saya memulai dengan membuat sketsa dasar berdasarkan foto saya sendiri. Setelah itu, saya menggunakan alat pena (Pen Tool) untuk membuat garis dan bentuk wajah dengan lebih presisi."</p>
                </div>

                <div class="portofolio-item">
                    <img src="My Logo.jpg" alt="">
                    <h2>My Logo</h2>
                    <div class="rating">
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bxs-star' id="star"></i>
                    </div>
                    <p>"Saya telah membuat logo sendiri menggunakan aplikasi PixelLab. Dalam prosesnya, saya memulai dengan menentukan konsep dan memilih bentuk dasar yang sesuai dengan ide desain saya Selain itu, saya menambahkan elemen tambahan seperti ikon atau simbol untuk memperkuat identitas logo."</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me</span></h2>
    
        <form action="simpan_kontak.php" method="POST">
            <div class="input-group">
                <div class="input-box">
                    <input type="text" name="nama" placeholder="Full Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-box">
                    <input type="text" name="no_hp" placeholder="Phone Number" required>
                    <input type="text" name="subjek" placeholder="Subject" required>
                </div>
            </div>
    
            <div class="input-group-2">
                <textarea name="pesan" cols="30" rows="10" placeholder="Your Message" required></textarea>
                <input type="submit" value="Send Message" class="btn">
            </div>
        </form>
    </section>
    

    <footer class="footer">
        <div class="social">
            <a href="#"><i class='bx bxl-linkedin' style='color:#ffffff' ></i></a>
            <a href="https://github.com/Lanno10"><i class='bx bxl-github' style='color:#ffffff' ></i></a>
            <a href="https://www.instagram.com/xzylann__/"><i class='bx bxl-instagram-alt' style='color:#ffffff' ></i></a>
            <a href="#"><i class='bx bxl-twitter' style='color:#ffffff' ></i></a>
        </div>

        <ul class="list">
            <li>
                <a href="#">FAQ</a>
            </li>

            <li>
                <a href="#">Education</a>
            </li>

            <li>
                <a href="#">Skill</a>
            </li>

            <li>
                <a href="#">Portofolio</a>
            </li>

            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
        <p class="copyright">
            © Meilanno Adityarahma Riyanto | All Rights Reserved
        </p>
    </footer>

    <script src="script.js"></script>
</body>
</html>