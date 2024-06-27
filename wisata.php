<?php
include 'db.php';

$stmt = $pdo->query("SELECT name, email, rating, comments, created_at FROM reviews ORDER BY created_at DESC");
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Font google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.11.1/sweetalert2.min.js">

    <!-- My style-->
    <link rel="stylesheet" href="Css/dede.css">

    <title>Majalengka Keren</title>
  </head>
  <body>

    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top navbar-dark">
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
                <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="Index.html/#about">Tentang</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#">Kontak</a>
              </li>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--navbar end -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center" data-aos="zoom-in" data-aos-delay="100">
      <h1>Situ Cipanten</h1>
      <h2>Danau biru yang berada didesa Rajagaluh</h2>
      <a href="Index.php" class="btn-about">Back</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

 <section>

    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Situ Cipanten</h1>
                    <span class="lh-lg">Situ Cipanten adalah sebuah danau yang terletak di kawasan Cipanten, Desa Sukasari, Kecamatan Cikijing, Kabupaten Majalengka, Jawa Barat, Indonesia. Danau ini memiliki luas sekitar 1,2 hektar dan dikelilingi oleh perbukitan yang hijau dan indah.

                        Keindahan danau ini membuatnya menjadi salah satu objek wisata populer di daerah Majalengka. Banyak wisatawan lokal dan mancanegara yang berkunjung ke Situ Cipanten untuk menikmati pemandangan alamnya yang menakjubkan. Selain itu, danau ini juga memiliki beberapa fasilitas wisata yang menarik, seperti area piknik, area bermain anak-anak, dan beberapa restoran dan kafe.
                        
                        Menurut sejarah, Situ Cipanten dahulu merupakan sebuah danau alami yang terbentuk dari genangan air hujan yang mengalir dari perbukitan di sekitarnya. Danau ini menjadi sumber air utama bagi masyarakat sekitar untuk keperluan sehari-hari, seperti untuk mandi, mencuci, dan memasak.</span>
                </div>
            </div>

            <div class="row">
            <div class="col-5 py-5">
                <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.5584399557265!2d108.323738174756!3d-6.82343259317433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f2406b0ed6805%3A0x86493d5c4d863bc5!2sWisata%20Situ%20Cipanten!5e0!3m2!1sid!2sid!4v1715588729054!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-5 offset-1 py-5 lh-lg">
                <p>Jam buka    : 09.00-20.00</p>
                
                <p>Harga Tiket : 15.000</p>
                <p>fasilitas : kamar mandi, musholla, wahana bermain, snorkling</p>
                <p> alamat : desa rajagaluh</p>
            </div>
            </div>
            

            </div>
        </div>
    </div>
 </section>

     <!-- ======= Gallery Section ======= -->
     <section id="gallery" class="gallery">
        <div class="container">
  
          <div class="section-title text-center mb-5">
            <h2>Gallery</h2>
          </div>
  
          <div class="row no-gutters">
  
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="" class="galleery-lightbox" data-gallery="gallery-item">
                  <img src="Asset/lans/1.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="Asset/cipanten.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                  <img src="Asset/lans/2.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="Asset/panten.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                  <img src="Asset/lans/3.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="Asset/panten.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                  <img src="Asset/lans/4.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="Asset/nilam.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                  <img src="Asset/lans/5.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="Asset/potret.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                  <img src="Asset/lans/1.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="Asset/sawah.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                  <img src="Asset/lans/6.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="Asset/potret.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                  <img src="Asset/lans/4.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
            
  
          </div>
  
        </div>
      </section><!-- End Gallery Section -->



<!-- Review Form Section -->
<section id="review" class="review-section-padding">
        <div class="container py-5">
            <div class="section-title text-center mt-4 mb-4">
                <h2>Form Review</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 mx-auto col-12">
                    <form id="reviewForm">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="rating" class="form-label">Rating</label>
                            <div id="rating" class="rating">
                                <i class="fas fa-star" data-value="1"></i>
                                <i class="fas fa-star" data-value="2"></i>
                                <i class="fas fa-star" data-value="3"></i>
                                <i class="fas fa-star" data-value="4"></i>
                                <i class="fas fa-star" data-value="5"></i>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="comments" class="form-label">Komentar</label>
                            <textarea class="form-control" id="comments" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Review Form Section -->


<style>
/* Review Section */
.review-section {
  padding: 4rem 0;
}

.review-section h1 {
  font-size: 2rem;
  margin-bottom: 2rem;
  text-align: center;
}

.review-card {
  border: 1px solid #ddd;
  padding: 2rem;
  border-radius: 8px;
}

.star-rating {
  font-size: 1.5rem;
  margin-bottom: 1rem;
}

.progress {
  height: 1rem;
  margin-bottom: 0.5rem;
}

/* Media Queries for Responsiveness */
@media (max-width: 767px) {
  .review-section {
    padding: 2rem 0;
  }

  .review-section h1 {
    font-size: 1.5rem;
  }

  .review-card {
    padding: 1.5rem;
  }
  
  .col-sm-4 {
    margin-bottom: 1rem; /* Berikan margin bawah pada setiap kolom */
  }
}
</style>
 <!-- Reviews Section -->
 <section id="reviews" class="reviews-section-padding">
        <div class="container py-5">
            <div class="section-title text-center mt-4 mb-4">
                <h2>Reviews</h2>
            </div>
            <div class="row">
                <?php foreach ($reviews as $review): ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($review['name']); ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo htmlspecialchars($review['email']); ?></h6>
                                <div class="mb-2">
                                    <?php for ($i = 1; $i <= 5; $i++): ?>
                                        <i class="fas fa-star <?php echo $i <= $review['rating'] ? 'text-warning' : ''; ?>"></i>
                                    <?php endfor; ?>
                                </div>
                                <p class="card-text"><?php echo nl2br(htmlspecialchars($review['comments'])); ?></p>
                            </div>
                            <div class="card-footer text-muted">
                                <?php echo date('d M Y H:i', strtotime($review['created_at'])); ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- End Reviews Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Dede Anggi Hidayah</strong>. 
      </div>
      <div class="credits">
        Sosial Media by <a href="https://www.instagram.com/dhede.hdyh_/">@dhede.hdyh_</a>
      </div>
    </div>
  </footer><!-- End Footer -->



<script src="Js/script.js"></script>
       <!-- Optional JavaScript; choose one of the two! -->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.11.1/sweetalert2.all.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.11.1/sweetalert2.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>

  <!-- Custom JS -->
  <script>
        document.addEventListener("DOMContentLoaded", function() {
            const stars = document.querySelectorAll("#rating .fa-star");
            let selectedRating = 0;

            stars.forEach(star => {
                star.addEventListener("mouseover", function() {
                    resetStars();
                    highlightStars(this.dataset.value);
                });

                star.addEventListener("click", function() {
                    selectedRating = this.dataset.value;
                    highlightStars(selectedRating);
                });

                star.addEventListener("mouseout", function() {
                    resetStars();
                    if (selectedRating > 0) {
                        highlightStars(selectedRating);
                    }
                });
            });

            function resetStars() {
                stars.forEach(star => {
                    star.classList.remove("text-warning");
                });
            }

            function highlightStars(rating) {
                for (let i = 0; i < rating; i++) {
                    stars[i].classList.add("text-warning");
                }
            }

            const reviewForm = document.getElementById("reviewForm");
            reviewForm.addEventListener("submit", function(event) {
                event.preventDefault();

                const name = document.getElementById("name").value;
                const email = document.getElementById("email").value;
                const comments = document.getElementById("comments").value;

                if (selectedRating === 0) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Please provide a rating!'
                    });
                    return;
                }

                // Simulate form submission
                const formData = new FormData();
                formData.append('name', name);
                formData.append('email', email);
                formData.append('rating', selectedRating);
                formData.append('comments', comments);

                fetch('save_review.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Terima Kasih!',
                            text: 'Review Anda telah dikirim.',
                        }).then(() => {
                            reviewForm.reset();
                            resetStars();
                            selectedRating = 0;
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: data.message || 'Something went wrong!'
                        });
                    }
                })
                .catch(error => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!'
                    });
                });
            });
        });
    </script>
</html>
