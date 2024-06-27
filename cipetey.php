<?php
include 'db.php';

$place = "Curug Cipeutey"; // Contoh tempat wisata
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Font google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.11.1/sweetalert2.min.js">
<!-- Font google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

        <!-- Include raty.js library -->
        <script src="path/to/raty.js"></script>
    <!-- My style-->
    <link rel="stylesheet" href="Css/dede.css">
<!-- Include Font Awesome CSS (assuming you have it included in your project) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Majalengka Explore</title>
  </head>
  <body>

    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent   fixed-top navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="#">
            Majalengka Explore
        </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--navbar end -->

  <!-- ======= Hero Section ======= -->

<div class="hero">
  <img src="Asset/cipetey/2.jpg" alt="Wisata Alam">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <h1>Curug Cipetey</h1>
    <p>Nikmati keindahan alam yang mempesona di destinasi wisata kami.</p>
    
  </div>
</div>
<!-- End Hero -->

  <main id="main">

 <section>

    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center mb-4">Curug Cipetey</h1>
                    <span class="lh-lg">Nikmati keindahan alam yang mempesona di Curug Cipetey, salah satu destinasi wisata alam terbaik di Majalengka. Terletak di tengah pegunungan yang asri, Curug Cipetey menawarkan pemandangan air terjun yang menakjubkan dengan suasana yang tenang dan alami.

Curug Cipetey adalah air terjun yang terletak di Desa Cibodas, Kecamatan Majalengka, Kabupaten Majalengka, Jawa Barat. Tempat ini dikenal dengan air terjun yang indah, udara yang sejuk, dan lingkungan yang masih sangat alami. Curug Cipetey memiliki ketinggian sekitar 20 meter dengan debit air yang cukup deras, menjadikannya tempat yang ideal untuk relaksasi dan menikmati keindahan alam.</span>
                </div>
            </div>

            <div class="container py-4">
                
        
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="map-container">
                <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.5584399557265!2d108.323738174756!3d-6.82343259317433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f2406b0ed6805%3A0x86493d5c4d863bc5!2sWisata%20Situ%20Cipanten!5e0!3m2!1sid!2sid!4v1715588729054!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
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
                                Alamat: Jl. Dukuh Pasir, Bantaragung, Kec. Sindangwangi, Kabupaten Majalengka, Jawa Barat 45474
                            </li>
                        </ul>
                        
                        <h6 class="mt-4">Fasilitas:</h6>
                        <ul>
                            <li>Area Parkir : Tersedia area parkir yang luas untuk kendaraan roda dua dan roda empat.</li>
                            <li>Warung Makan : Berbagai warung makan tersedia di sekitar area wisata yang menawarkan makanan dan minuman lokal</li>
                            <li>Toilet Umum : Fasilitas toilet yang bersih dan terawat untuk kenyamanan pengunjung</li>
                            <li>Musholla : Tersedia tempat ibadah yang nyaman untuk pengunjung muslim</li>
                            <li>Saung/Gajebo : Tersedia tempat ibadah yang nyaman untuk pengunjung muslim</li>
                            <li>Spot Foto : Banyak spot foto menarik untuk mengabadikan momen indah Anda</li>
                        </ul>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Aktivitas</h5>
                        <ul>
                        <li>Berenang dan Bermain Air: Air terjun yang jernih dan segar membuatnya cocok untuk berenang dan bermain air</li>
<li>Fotografi: Pemandangan yang indah dan alami sangat ideal untuk kegiatan fotografi</li>
<li>Trekking: Jalur menuju Curug Cipetey menawarkan pengalaman trekking yang menantang dan menyenangkan</li>
<li>Piknik : Area sekitar air terjun sangat cocok untuk kegiatan piknik bersama keluarga dan teman.</li>
                </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kondisi Rute Jalan</h5>
                        <p>Curug Cipetey dapat diakses dengan kendaraan pribadi atau umum. Dari pusat kota Majalengka, Anda bisa mengikuti rute menuju Desa Cibodas. Perjalanan menuju air terjun akan disuguhkan dengan pemandangan alam yang indah, pepohonan hijau, dan udara yang segar.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

 

        <div class="row mb-4">
            <div class="col-12">
                <h2 class="h4">Detail Biaya</h2>


                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <i class="bi bi-ticket-perforated info-icon"></i>
                                <strong>Tiket Masuk</strong>
                            </div>
                        </div>
                        <div class="ps-4 ms-2">
                            <div class="d-flex justify-content-between">
                                <span>Dewasa (Weekday)</span>
                                <span>Rp 15.000</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span>Dewasa (Weekend)</span>
                                <span>Rp 20.000</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span>Anak-anak (umur 1-4 tahun)</span>
                                <span>Rp 5.000</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <i class="bi bi-p-square info-icon"></i>
                                <strong>Parkir Kendaraan</strong>
                            </div>
                        </div>
                        <div class="ps-4 ms-2">
                            <div class="d-flex justify-content-between">
                                <span>Mobil</span>
                                <span>Rp 5.000</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span>Motor</span>
                                <span>Rp 2.000</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <i class=""></i>
                                <strong>Lain-lain</strong>
                            </div>
                        </div>
                        <div class="ps-4 ms-2">
                            <div class="d-flex justify-content-between">
                                <span>Spot foto</span>
                                <span>Rp 3.000</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span>Penyewaan Camping</span>
                                <span>Rp 50.000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-5">
        <h2 class="text-center mb-4">Fasilitas Wisata Alam</h2>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">
            <div class="col text-center">
                <i class="fas fa-parking facility-icon mb-2"></i>
                <p>Area Parkir</p>
            </div>
            <div class="col text-center">
                <i class="fas fa-store facility-icon mb-2"></i>
                <p>Warung Makan</p>
            </div>
            <div class="col text-center">
                <i class="fas fa-mosque facility-icon mb-2"></i>
                <p>Musholla</p>
            </div>
            <div class="col text-center">
                <i class="fas fa-bed facility-icon mb-2"></i>
                <p>Tempat Istirahat</p>
            </div>
            <div class="col text-center">
                <i class="fas fa-camera facility-icon mb-2"></i>
                <p>Spot Foto</p>
            </div>
            <div class="col text-center">
                <i class="fas fa-trash-alt facility-icon mb-2"></i>
                <p>Tempat Sampah</p>
            </div>
            <div class="col text-center">
                <i class="fas fa-campground facility-icon mb-2"></i>
                <p>Area Camping</p>
            </div>
        </div>
    </div>
            
 </section>

 <div class="container mt-3">
        <h2 class="text-center mb-5">Galeri Foto Wisata Alam</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <img src="Asset/cipetey/2.jpg" class="img-fluid" alt="Wisata Alam 1" data-bs-toggle="modal" data-bs-target="#imageModal1">
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <img src="Asset/cipetey/8.jpg" class="img-fluid" alt="Wisata Alam 2" data-bs-toggle="modal" data-bs-target="#imageModal2">
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <img src="Asset/cipetey/9.jpg" class="img-fluid" alt="Wisata Alam 3" data-bs-toggle="modal" data-bs-target="#imageModal3">
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <img src="Asset/cipetey.jpg" class="img-fluid" alt="Wisata Alam 4" data-bs-toggle="modal" data-bs-target="#imageModal4">
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <img src="Asset/cipetey/5.jpg" class="img-fluid" alt="Wisata Alam 5" data-bs-toggle="modal" data-bs-target="#imageModal5">
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <img src="Asset/cipetey/4.jpg" class="img-fluid" alt="Wisata Alam 6" data-bs-toggle="modal" data-bs-target="#imageModal6">
            </div>
        </div>
    </div>

    <!-- Modal 1 -->
    <div class="modal fade" id="imageModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="Asset/cipetey/4.jpg" class="img-fluid" alt="Wisata Alam 1">
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 2 -->
    <div class="modal fade" id="imageModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="Asset/cipetey/2.jpg" class="img-fluid" alt="Wisata Alam 2">
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 3 -->
    <div class="modal fade" id="imageModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="Asset/cipetey/8.jpg" class="img-fluid" alt="Wisata Alam 3">
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 4 -->
    <div class="modal fade" id="imageModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="Asset/cipetey/9.jpg" class="img-fluid" alt="Wisata Alam 4">
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 5 -->
    <div class="modal fade" id="imageModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="Asset/cipetey.jpg" class="img-fluid" alt="Wisata Alam 5">
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 6 -->
    <div class="modal fade" id="imageModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="Asset/cipetey/4.jpg" class="img-fluid" alt="Wisata Alam 6">
                </div>
            </div>
        </div>
    </div>

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
                <input type="hidden" name="place" value="Curug Cipeutey">

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
                        <input type="radio" name="rating" id="star2" value="2">
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
                            <div class="rating">
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


        <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Regna</strong>. All Rights Reserved
      </div>
      <div class="credits">
       
      
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

<!-- Include raty.js library -->
<script src="https://cdn.jsdelivr.net/npm/raty/lib/jquery.raty.min.js"></script>

<script src="Js/script.js"></script>
       <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
    
   <!-- Include SweetAlert library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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
