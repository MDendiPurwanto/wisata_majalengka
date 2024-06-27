<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Font google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">


    <!-- My style-->
    <link rel="stylesheet" href="Css/Style.css">

    <title>Majalengka Keren</title>
  </head>
  <body>

    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="#carouselExampleCaptions">
            Majalengka Explore
        </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item mx-2">
                <a class="nav-link active" aria-current="page" href="#carouselExampleCaptions">Beranda</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#about">Wisata</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#contact">Lokasi</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--navbar end -->

      <!--hero-->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <?php
        $wisata = [
            ['nama' => 'Wisita Alam Majalengka', 'gambar' => 'Asset/cipetey/3.jpg'],
            ['nama' => 'Wisata Alam Majalengka', 'gambar' => 'Asset/lans/1.jpg'],
            ['nama' => 'Wisata Alam Majalengka', 'gambar' => 'Asset/Tera/lanskap.jpg']
        ];

        foreach ($wisata as $index => $tempat) {
            $active = $index === 0 ? 'active' : '';
            echo "
            <div class='carousel-item {$active}' style='background-image: url({$tempat['gambar']})'>
                <div class='carousel-caption'>
                    <h2>{$tempat['nama']}</h2>
                    <p>Nikmati keindahan alam yang menakjubkan di Wisata Alam Majalengka</p>
                    <a href='#about' class='btn btn-outline-light btn-lg rounded-1 mt-3'>Jelajahi</a>
                </div>
            </div>
            ";
        }
        ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
      <!--hero-->

      <!--about section-->
      <style>
        .gallery-img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            transition: transform 0.2s;
        }
        .gallery-img:hover {
            transform: scale(1.05);
        }
        .about-img img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .intro-text {
            text-align: justify;
        }
        .intro-img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
        @media (min-width: 1024px) {
            .intro-img {
                max-width: 70%; /* Adjust the width as needed */
                margin-left: auto;
                margin-right: auto;
                display: block;
            }
        }
        @media (max-width: 768px) {
            .intro-img {
                max-width: 100%;
                height: auto;
                display: block;
                margin-left: auto;
                margin-right: auto;
            }
        }
    </style>
</head>
<body>
<div class="container py-3">
    <!-- About Section -->
    <section id="about" class="about-section-padding">
        <div class="container py-3">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-12 mb-4">
              <div class="about-img">
                <img src="Asset/potret.jpg" alt="Majalengka" class="img-fluid intro-img">
              </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12 ps-lg-5">
              <div class="about-text">
                <h2 class="mb-4">Majalengka Explore</h2>
                <p>Majalengka adalah sebuah kabupaten di Provinsi Jawa Barat, Indonesia. Kabupaten Majalengka terletak sekitar 200 km sebelah timur Jakarta. Ibukotanya adalah kota Majalengka. Kabupaten Majalengka memiliki luas wilayah sekitar 1.204,24 km² dan terbagi menjadi 30 kecamatan. Wilayah ini memiliki beragam potensi, termasuk sektor pertanian, perkebunan, perikanan, dan industri kecil. Di samping itu, Majalengka juga memiliki beberapa tempat wisata menarik seperti Pantai Pangandaran, Curug Cikaso, dan Situ Cipanten.</p>
                <p>Majalengka adalah sebuah kabupaten di Provinsi Jawa Barat, Indonesia. Kabupaten Majalengka terletak sekitar 200 km sebelah timur Jakarta. Ibukotanya adalah kota Majalengka. Kabupaten Majalengka memiliki luas wilayah sekitar 1.204,24 km² dan terbagi menjadi 30 kecamatan. Wilayah ini memiliki beragam potensi, termasuk sektor pertanian, perkebunan, perikanan, dan industri kecil. Di samping itu, Majalengka juga memiliki beberapa tempat wisata menarik seperti Pantai Pangandaran, Curug Cikaso, dan Situ Cipanten.</p>
              </div>
            </div>
      </section>
</div>

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container mt-1">

        <div class="section-title text-center" data-aos="zoom-in">
          <h2>Rekomendasi Tempat wisata</h2>
        </div>

        <div class="row" data-aos="fade-left">

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <a href="panten.php"><div class="pic"><img src="Asset/panten/3.jpg" class="img-fluid" alt=""></div></a>
              <div class="member-info">
                <h4>Situ Cipanten</h4>
                <span>Berada didesa rajagaluh</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
            <a href="cipetey.php"><div class="pic"><img src="Asset/card/5.jpg" class="img-fluid" alt=""></div></a>
              <div class="member-info">
                <h4>Curug cipetey</h4>
                <span>Berada di Kec.Rajagaluh</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
            <a href="Tera.php"><div class="pic"><img src="Asset/panya.jpg" class="img-fluid" alt=""></div></a>
              <div class="member-info">
                <h4>Terasering Panyaweuan</h4>
                <span>Berada di Kec.Argapura</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 mb-3">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
            <a href="ciwaru.php"><div class="pic"><img src="Asset/card/8.jpg" class="img-fluid" alt=""></div></a>
              <div class="member-info">
                <h4>Gunung Ciwaru</h4>
                <span>Berada di Kec.Rajagaluh</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 mt-5">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
            <a href="river.php"><div class="pic"><img src="Asset/card/3.jpg" class="img-fluid" alt=""></div></a>
              <div class="member-info">
                <h4>Cikadongdong River</h4>
                <span>Berada di Kec.Rajagaluh</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div  class="member" data-aos="zoom-in" data-aos-delay="400">
            <a href="ibun.php"><div class="pic"><img src="Asset/card/7.jpg" class="img-fluid" alt=""></div></a>
              <div class="member-info">
                <h4>Curug Pelangi</h4>
                <span>Berada di Kec. Argapura</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
            <a href="dora.php"><div class="pic"><img src="Asset/card/2.jpg" class="img-fluid" alt=""></div></a>
              <div class="member-info">
                <h4>Bukit Sanghyang Dora</h4>
                <span>Berada di Kec.Rajagaluh</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
            <a href="jaya.php"><div class="pic"><img src="Asset/card/4.jpg" class="img-fluid" alt=""></div></a>
              <div class="member-info">
                <h4>Curug Muara Jaya</h4>
                <spa>Berada di Kec.Argapura</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->



<!-- Gallery Section -->
 <section>
  <div class="container mt-4 py-5">
    <h2 class="text-center mb-4">Galeri Foto Wisata</h2>
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="gallery-item">
          <img src="Asset/panten/11.jpg" alt="Nature Image 1" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="gallery-item">
          <img src="Asset/jaya/3.jpg" alt="Nature Image 2" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="gallery-item">
          <img src="Asset/panten/2.jpg" alt="Nature Image 3" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="gallery-item">
          <img src="Asset/river/9.jpg" alt="Nature Image 4" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="gallery-item">
          <img src="Asset/Tera/2.jpg" alt="Nature Image 5" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="gallery-item">
          <img src="Asset/ibun/3.jpg" alt="Nature Image 6" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
  <section>
<!---end galller--->

<!---lokasi--->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title text-center mt-4 mb-5">
          <h2 >Lokasi Majalengka</h2>

        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31691.26316158126!2d108.20679749066204!3d-6.841604762007456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f2f59c5f0748d%3A0x401e8f1fc28cbc0!2sMajalengka%2C%20Kec.%20Majalengka%2C%20Kabupaten%20Majalengka%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1715588590631!5m2!1sid!2sid1" frameborder="0" allowfullscreen></iframe>
        </div>
          </section>
<!---end lokasi--->
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
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
      -->
        Sosial Media by <a href="https://www.instagram.com/dhede.hdyh_/">@dhede.hdyh_</a>
      </div>
    </div>
  </footer><!-- End Footer -->




  <script src="Js/script.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

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
  </body>
</html>