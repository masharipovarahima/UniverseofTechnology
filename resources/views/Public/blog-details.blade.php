<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Texnologiyalar olami</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>{{$data->title}}</span></a></h1>
      </div>


        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="../index">Asosiy</a></li>
                <li><a href="../directions">Yo'nalishlar</a></li>
                <li><a class="active" href="../blog">Blog</a></li>
                <li><a href="../contact">Biz bilan bog'lanish</a></li>
                <li><a href="../login" style="color: #00ff48">{{$auth}}</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>

          <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li>{{$data->title}}</li>
          </ol>
        </div>

      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="">
                <img src="{{asset('Posts/'.$data->file_name)}}" alt="" style="width: 100%">
              </div>

              <h2 class="entry-title">
                <a href="">{{$data->title}}</a>
              </h2>

                <p>
                    {{$data->text}}
                </p>


            </article><!-- End blog entry -->

              <!-- End blog author bio -->


          </div><!-- End blog entries list -->


            <div class="col-lg-4">

                <div class="sidebar">

                    <!-- End sidebar categories-->

                    <h3 class="sidebar-title">Oxirgi postlar</h3>
                    <div class="sidebar-item recent-posts">

                        @foreach($recently as $val)
                            <div class="post-item clearfix">
                                <img src="{{asset('Posts/'.$val->file_name)}}" alt="">
                                <h4><a href="">{{$val->title}}</a></h4>
                                <time datetime="2020-01-01">{{$val->created_at}}</time>
                            </div>
                        @endforeach

                    </div>
                    <!-- End sidebar recent posts-->

                </div>
                <!-- End sidebar -->

            </div>
            <!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  <footer id="footer" data-aos-easing="ease-in-out" data-aos-duration="500">

      <div class="container">
          <div class="copyright">
              &copy; Copyright <strong><span>Universe of Technology</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
              Created by <a href="">M.Rahima</a>
          </div>
      </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>
