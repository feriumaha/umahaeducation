<!DOCTYPE html>

<html>

<head>
  <title>U DO IT</title>
  <link rel="shortcut icon" href="img/logo/logo.png">
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
.carousel-inner img {
      width: 100%;
      height: 100%;
}
#bg{
    background-image: url(img/pendidikanpagebackground.png);
}
.logoimage {
  filter: gray; /* IE6-9 */
  -webkit-filter: grayscale(1); /* Google Chrome, Safari 6+ & Opera 15+ */
    margin-bottom:20px;
}

.logoimage:hover {
  filter: none; /* IE6-9 */
  -webkit-filter: grayscale(0); /* Google Chrome, Safari 6+ & Opera 15+ */

}
#change div:hover{
  	opacity:5;
  cursor:pointer;
  color: #1ECC27;
}
.clear{
  height:20px;
  background-color: white;
}
#bgtestimonial{
  background-image: url(img/testimoni.png);
}
#berita{
  background-image: url(img/recehpagebackground.png);
}

  </style>
</head>

<body>
 <!--Header-->
 <nav class="navbar navbar-expand-sm bg-success navbar-dark fixed-top text-white">
 <a class="navbar-brand" href="#">
    <img src="img/logo/logo.png" alt="logo" style="width:40px;">
  </a>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index">Beranda</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#pendidikan">Pendidikan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#berita">Berita</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" data-toggle="modal" data-target="#ourteam">Our Team</a>
    </li>
  </ul>
</nav>
 <!--End Header-->

 <!--Carousel-->
 <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->

  <div class=" carousel-indicators">
  </div>
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/carousel/udoithomepage/homepage_1.png" alt="" width="100%" height="auto">
    </div>
    <div class="carousel-item">
      <img src="img/carousel/udoithomepage/homepage_2.png" alt="" width="100%" height="auto">
    </div>
    <div class="carousel-item">
      <img src="img/carousel/udoithomepage/homepage_3.png" alt="" width="100%" height="auto">
    </div>
    <div class="carousel-item">
      <img src="img/carousel/udoithomepage/homepage_4.png" alt="" width="100%" height="auto">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
 <!--End Carousel-->

 <!--Rows-->
 <div class="container-fluid" id="bg"><hr>
   <div id="pendidikan">
   <div class="mt-3 row" id="change">

      <div class="col">
       <div class="container">
        <div class="card">

        <div class="card-body">
        <center><img class="logoimage" src="img/logo/sdlogo.png" width="65%" height="auto"></center><br>
        <h3 style="text-align: center;">MI</h3>
        </div>
        <div class="card-footer text-center">
          Informasi Untuk Pendaftaran Dan Penerimaan Madrasah Ibtidaiyah YPM<br>
        <a href="madrasahibtidaiyah">Informasi Selengkapnya</a>
        </div>
        </div>
       </div>
      </div>

      <div class="col">
       <div class="container">
        <div class="card">
        <div class="card-body">
        <center><img class="logoimage" src="img/logo/smplogo.png" width="65%" height="auto"></center><br>
        <h3 style="text-align: center">SMP</h3>
        </div>
        <div class="card-footer text-center">
          Informasi Untuk Pendaftaran Dan Penerimaan Sekolah Menengah Pertama YPM<br>
          <a href="smp">Informasi Selengkapnya</a>
        </div>
        </div>
       </div>
      </div>

      <div class="col">
       <div class="container">
        <div class="card">
        <div class="card-body">
        <center><img class="logoimage" src="img/logo/smasmklogo.png" width="55%" height="auto"></center><br>
        <h3 style="text-align: center">SMA</h3>
        </div>
        <div class="card-footer text-center">
          Informasi Untuk Pendaftaran Dan Penerimaan Sekolah Menengah Atas YPM<br>
          <a href="sma">Informasi Selengkapnya</a>
        </div>
        </div>
       </div>
      </div>

      <div class="col">
       <div class="container">
        <div class="card">
        <div class="card-body">
        <center><img class="logoimage" src="img/logo/logo.png" width="60%" height="auto"></center><br>
        <h3 style="text-align: center">PERGURUAN TINGGI</h3>
        </div>
        <div class="card-footer text-center">
          Informasi Untuk Pendaftaran Dan Penerimaan Mahasiswa UMAHA
          <a href="https://umaha.ac.id" target="_blank">Informasi Selengkapnya</a>
        </div>
        </div>
       </div>
      </div>
 </div><hr>
  </div>
 </div>
 <!--End Rows-->

 <!--Testimonial-->
  <div id="demo" class="carousel slide" data-ride="carousel">
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/testimoni.png" alt="" width="100%" height="auto">
      <div class="carousel-caption">
        <h3>Testimonial</h3>
        <h5>"Website ini bagus, semoga bisa memudahkan para Orang Tua, Siswa, Siswa dan Mahasiswa / Mahasiswa dalam mencari info pendidikan"</h5>
        <p>Khairil Anam, S. Kom, MM.</p>
        <p>- Dosen Informatika Universitas Ma'arif Hasyim Latief -</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/testimoni.png" alt="" width="100%" height="auto">
      <div class="carousel-caption">
        <h3>Testimonial</h3>
        <h5>"Sangat membantu sekali dalam informasi didunia pendidikan khusunya bagi Beasiswa - Beasiswa Perkuliahan"</h5>
        <p>Isturom Arif, ST, MM,.</p>
        <p>- KAPRODI Informatika Universitas Ma'arif Hasyim Latief -</p>
      </div>
    </div>
  </div>
</div>
 <!--End Testimonial-->

 <!--Berita-->
<div id="berita" class="container-fluid"><br>
<h3 class="text-center">Berita</h3><hr>

<div class="mt-3 row">
      <div class="col" data-toggle="modal" data-target="#jenis">
       <div class="container">
        <div class="card bg-transparent border-0">
        <div class="card-body">
        <center><img src="img/info/1.png" width="100%" height="auto"></center><br>
        </div>
        <div class="card-footer text-center font-weight-bold border-0">
          JENIS-JENIS PENDIDIKAN TINGGI
        </div>
        </div>
       </div>
      </div>

      <div class="col" data-toggle="modal" data-target="#pembahasan">
       <div class="container">
        <div class="card bg-transparent border-0">
        <div class="card-body">
        <center><img src="img/info/2.png" width="100%" height="auto"></center><br>
        </div>
        <div class="card-footer text-center font-weight-bold border-0">
          PEMBAHASAN TRY OUT SBMPTN BAHASA INGGRIS ZENIUS CLUB
        </div>
        </div>
       </div>
      </div>

      <div class="col" data-toggle="modal" data-target="#kamu">
       <div class="container">
        <div class="card bg-transparent border-0">
        <div class="card-body">
        <center><img src="img/info/3.png" width="100%" height="auto"></center><br>
        </div>
        <div class="card-footer text-center font-weight-bold border-0">
          KAMU VS PESAINGMU
        </div>
        </div>
       </div>
      </div>

      <div class="col" data-toggle="modal" data-target="#miliaran">
       <div class="container">
        <div class="card bg-transparent border-0">
        <div class="card-body">
        <center><img src="img/info/4.png" width="100%" height="auto"></center><br>
        </div>
        <div class="card-footer bg-transparent text-center font-weight-bold border-0">
          MILIARAN ORANG DIDUNIA TIDAK MEMILIKI TOILET
        </div>
        </div>
       </div>
      </div>
 </div>

</div>

<!-- The Modal -->
  <div class="modal fade" id="jenis">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">JENIS-JENIS PENDIDIKAN TINGGI</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <center><img src="img/info/1.png" alt="" width="50%" height="auto" /></center>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
 <!-- End The Modal -->

 <!-- The Modal -->
  <div class="modal fade" id="pembahasan">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">PEMBAHASAN TRY OUT SBMPTN BAHASA INGGRIS ZENIUS CLUB</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <center><img src="img/info/2.png" alt="" width="50%" height="auto" /></center>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
 <!-- End The Modal -->

  <!-- The Modal -->
  <div class="modal fade" id="kamu">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">KAMU VS PESAINGMU</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <center><img src="img/info/3.png" alt="" width="50%" height="auto" /></center>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
 <!-- End The Modal -->

  <!-- The Modal -->
  <div class="modal fade" id="miliaran">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">MILIARAN ORANG DIDUNIA TIDAK MEMILIKI TOILET</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <center><img src="img/info/4.png" alt="" width="50%" height="auto" /></center>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
 <!-- End The Modal -->

 <!--End Berita-->

<!-- The Modal Our Team-->
  <div class="modal fade" id="ourteam">
    <div class="modal-dialog modal-lg">
          <img src="img/aboutus.png" alt="" width="150%" style="margin-left: -190px;" height="auto" />
    </div>
  </div>
 <!-- End The Modal Our Team-->

<!--Footer-->
<div class="container-fluid bg-success text-center text-white font-weight-bold">
&copy;2018 - Instagram : umaha.official | U Do It - Umaha Education
</div>
<!--End Footer-->
</body>
</html>