<?php
include 'db.php';

$place = "Situ Cipanten"; // Ganti dengan nama tempat wisata yang sesuai
$stmt = $pdo->prepare("SELECT name, email, rating, comments, created_at FROM reviews WHERE place = ? ORDER BY created_at DESC");
$stmt->execute([$place]);
$reviews = $stmt->fetchAll();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="Css/dede.css">

    <title>Majalengka Explore</title>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Majalengka Explore</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link active" aria-current="page" href="Index.php">Beranda</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="Index.php">Wisata</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="Index.php">Lokasi</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->

<!-- Hero Section -->
<div class="hero">
    <img src="Asset/17.jpg" alt="Wisata Alam">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>Situ Cipanten</h1>
        <p>Nikmati keindahan alam yang mempesona di destinasi wisata Majalengka</p>
    </div>
</div>
<!-- End Hero -->

<main id="main">
    <!-- Informasi Wisata -->
    <section>
        <div class="container-fluid pt-5 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center mb-4">Situ Cipanten</h1>
                        <span class="lh-lg">Situ Cipanten menawarkan air yang sangat jernih sehingga pengunjung dapat
                            melihat dengan jelas dasar dan ikan-ikan yang berenang di dalamnya. Kawasan ini juga menjadi
                            tempat yang menarik untuk mengambil foto underwater yang spektakuler. Keindahan alamnya ditambah
                            dengan hutan yang mengelilingi situ memberikan suasana yang segar dan tenang. Kawasan wisata ini
                            sangat nyaman dikunjungi, terutama pada siang hari, menawarkan pengalaman yang menyegarkan bagi
                            para pengunjung</span>
                    </div>
                </div>

                <!-- Informasi Detail Wisata -->
                <div class="container py-4">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="map-container">
                                <iframe style="border:0; width: 100%; height: 270px;"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.5534430195057!2d108.32452172499563!3d-6.824036543173788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f2406b0ed6805%3A0x86493d5c4d863bc5!2sWisata%20Situ%20Cipanten!5e0!3m2!1sid!2sid!4v1719416581838!5m2!1sid!2sid"
                                        frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Informasi Wisata</h5>
                                    <ul class="list-unstyled">
                                        <li class="mb-2">
                                            <i class="bi bi-clock info-icon"></i>
                                            Jam Operasional : 07.00-17.00
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-geo-alt info-icon"></i>
                                            Jl. Gn. Kuning - Sindang, Gn. Kuning, Kec. Sindang, Kabupaten Majalengka, Jawa
                                            Barat 45471
                                        </li>
                                    </ul>

                                    <h6 class="mt-4">Fasilitas:</h6>
                                    <ul>
                                        <li>Area Parkir : Tersedia area parkir yang luas untuk kendaraan roda dua dan
                                            roda empat.
                                        </li>
                                        <li>Warung Makan : Berbagai warung makan tersedia di sekitar area wisata yang
                                            menawarkan makanan dan minuman
                                        </li>
                                        <li>Wahana Permainan: Terdapat berbagai jenis wahana permainan seperti perahu
                                            dayung, sepeda air, dan mungkin juga area bermain untuk anak-anak.
                                        </li>
                                        <li>Toilet Umum : Fasilitas toilet yang bersih dan terawat untuk kenyamanan
                                            pengunjung
                                        </li>
                                        <li>Musholla : Tersedia tempat ibadah yang nyaman untuk pengunjung muslim</li>
                                        <li>Saung/Gajebo : Tersedia tempat beristirhat</li>
                                        <li>Spot Foto : Banyak spot foto menarik untuk mengabadikan momen indah Anda</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Aktivitas</h5>
                                    <ul>
                                        <li>Berenang: Beberapa pengunjung mungkin menyukai untuk berenang di danau,
                                            terutama saat cuaca sedang cerah dan airnya bersih
                                        </li>
                                        <li>Naik Perahu: Anda dapat menyewa perahu dayung atau sepeda air untuk
                                            menikmati keindahan danau dan menjelajahi sekitarnya
                                        </li>
                                        <li>Piknik dan Bersantai: Area sekitar danau sangat cocok untuk piknik bersama
                                            keluarga atau teman-teman.
                                        </li>
                                        <li>Spot foto : Anda bisa berfoto dengan banyak pilihan spot foto seperti
                                            ayunan gantung.
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Rute Jalan</h5>
                                    <p>
                                        Untuk mencapai Situ Cipanten di Majalengka, Anda dapat mengambil rute melalui
                                        jalan utama yang biasanya dalam kondisi baik dan bisa diakses dengan mobil
                                        pribadi atau sepeda motor. Rute ini umumnya melibatkan perjalanan melalui
                                        jalan raya menuju Majalengka, kemudian mengikuti petunjuk arah ke Situ
                                        Cipanten. Sebaiknya menggunakan kendaraan pribadi seperti mobil sedan atau
                                        SUV untuk kenyamanan dan keamanan tambahan, terutama jika Anda ingin
                                        menjelajahi area sekitar yang mungkin memiliki jalan setapak atau akses yang
                                        lebih sulit. Pastikan untuk memeriksa kondisi jalan terbaru sebelum berangkat
                                        dan mempersiapkan perlengkapan keselamatan seperti helm dan sabuk pengaman
                                        jika menggunakan sepeda motor</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Akhir Informasi Detail Wisata -->

                <!-- Ulasan Pengguna -->
                <div class="container pt-5">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center mb-4">Ulasan Pengguna</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <!-- Form Ulasan -->
                            <form id="reviewForm" method="POST" action="submit_review.php">
                            <input type="hidden" name="place" value="Situ Cipanten">

                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="rating" class="form-label">Rating</label>
                                    <div class="rating">
                                        <input type="radio" name="rating" id="star1" value="1" required>
                                        <label for="star1" style="color: orange;" class="fas fa-star"></label>
                                        <input type="radio"  name="rating" id="star2" value="2">
                                        <label for="star2" style="color: orange;" class="fas fa-star"></label>
                                        <input type="radio" name="rating" id="star3" value="3">
                                        <label for="star3" style="color: orange;" class="fas fa-star"></label>
                                        <input type="radio" name="rating" id="star4" value="4">
                                        <label for="star4" style="color: orange;" class="fas fa-star"></label>
                                        <input type="radio" name="rating" id="star5" value="5">
                                        <label for="star5" style="color: orange;" class="fas fa-star"></label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="comments" class="form-label">Komentar</label>
                                    <textarea class="form-control" id="comments" name="comments" rows="3" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Kirim Ulasan</button>
                            </form>
                            <!-- Akhir Form Ulasan -->

                            <!-- Daftar Ulasan -->
                            <div class="reviews mt-5">
                                <?php foreach ($reviews as $review): ?>
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo htmlspecialchars($review['name']); ?></h5>
                                            <h6 class="card-subtitle mb-2 text-muted"><?php echo htmlspecialchars($review['email']); ?></h6>
                                            <div class="rating" >
                                                <?php for ($i = 0; $i < $review['rating']; $i++): ?>
                                                    <i style="color: orange;" class="fas fa-star"></i>
                                                <?php endfor; ?>
                                            </div>
                                            <p class="card-text"><?php echo htmlspecialchars($review['comments']); ?></p>
                                            <small class="text-muted"><?php echo date('F j, Y', strtotime($review['created_at'])); ?></small>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <!-- Akhir Daftar Ulasan -->
                        </div>
                    </div>
                </div>
                <!-- Akhir Ulasan Pengguna -->
            </div>
        </div>
    </section>
    <!-- Akhir Informasi Wisata -->

    <!-- Footer -->
    <footer class="footer mt-auto py-3 bg-dark">
        <div class="container text-center">
            <span class="text-muted">© 2024 Majalengka Explore. All rights reserved.</span>
        </div>
    </footer>
    <!-- End Footer -->
</main>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script> -->

<!-- Font Awesome -->
<script src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js" defer></script>

<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Custom JS -->
   <!-- Include SweetAlert library -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="js/script.js"></script>
<script>
    // Select your review form
    const reviewForm = document.getElementById('reviewForm');

    // Add event listener for form submission
    reviewForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        // Fetch form data
        const formData = new FormData(reviewForm);

        // Submit form data using fetch API
        fetch('submit_review.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // Check response status
            if (data.status === 'success') {
                // Show success message using SweetAlert
                Swal.fire({
                    icon: 'success',
                    title: 'Ulasan Berhasil Disimpan',
                    text: 'Terima kasih atas ulasannya!'
                });

                // Optionally, you can reset the form after successful submission
                reviewForm.reset();
            } else {
                // Show error message using SweetAlert
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal Menyimpan Ulasan',
                    text: data.message || 'Terjadi kesalahan saat menyimpan ulasan.'
                });
            }
        })
        .catch(error => {
            // Show error message if fetch fails
            console.error('Error:', error);
            Swal.fire({
                icon: 'error',
                title: 'Gagal Menyimpan Ulasan',
                text: 'Terjadi kesalahan saat menyimpan ulasan.'
            });
        });
    });
</script>  

</body>
</html>
