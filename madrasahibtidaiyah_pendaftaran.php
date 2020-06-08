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
#bgbg{
  background-image: url(img/headerMI.png);
  background-size: cover;
  background-position: center;
}

#bg{
  background-image: url(img/pendidikanpagebackground.png);
  background-size: 100% 100%;
  background-attachment:fixed;
}

.white-back{background:white;}

  </style>
</head>

<body>
 <!--Header-->
 <nav class="navbar navbar-expand-sm bg-success navbar-dark text-white">
 <a class="navbar-brand" href="index">
    <img src="img/logo/logo.png" alt="logo" style="width:40px;">
  </a>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index">Beranda</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index">Pendidikan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index">Berita</a>
    </li>
  </ul>
</nav>
 <!--End Header-->

 <!--Header2-->
<div class="container-fluid" id="bgbg">
<div style="height: 200px;"><br><br><br>
  <h1 class="font-weight-bold text-xl text-center text-white">MADRASAH IBTIDAIYAH</h1>
</div>
</div>
 <!--End Header2-->

 <!--Container-->
 <div class="container-fluid" id="bg">
  <div class="container">
  <ul class="nav nav-pills">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Ketentuan</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="madrasahibtidaiyah">Kategori Calon Peserta Didik</a>
        <a class="dropdown-item" href="madrasahibtidaiyah_persyaratan_umum_calon_peserta_didik">Persyaratan Umum Calon Peserta Didik</a>
        <a class="dropdown-item" href="madrasahibtidaiyah_ppdb_mi">PPDB MI</a></div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="madrasahibtidaiyah_jadwal">Jadwal</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="madrasahibtidaiyah_pendaftaran">Daftar Online</a>
    </li>
  </ul>
  <hr>
  <!-- Tab panes -->
  <div class="tab-content white-back">

    <div id="" class="container tab-pane active white">
     <!--Ketentuan-->
      <h3 class="text-center">Pendaftaran</h3>
        <div id="wrapper">

        <!-- Navigation -->
        
        <div id="page-wrapper">
           
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Nomor Pendaftaran</label>
                                            <input class="form-control" placeholder="Isi Angka">
                                            <p class="help-block">Isi angka saja, tanpa tanda "-". Contoh 144234909 </p>
                                        </div>
                                        <hr>
                                        <h4>A. IDENTITAS CALON PESERTA DIDIK</h4>
                                        <br>
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input class="form-control">
                                            <p class="help-block">Tulis nama lengkap sesuai ijazah</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Panggilan</label>
                                            <input class="form-control">
                                            <p class="help-block">Tulis nama panggilan sehari-hari</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Laki-laki
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Perempuan
                                                </label>
                                            </div>

                                        </div>


                                         <div class="form-group">
                                            <label>NIK</label>
                                            <input class="form-control" placeholder="Contoh=35151310049810003">
                                            <p class="help-block">Isi 16 digit angka NIK</p>
                                        </div>
                                         <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control" placeholder="10 April 1998">
                                        </div>
                                        <div class="form-group">
                                            <label>Agama</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Islam
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Kristen
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Katholik
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Hindu
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Budha
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Lainnya
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Golongan Darah</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>A
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">B
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">AB
                                                </label>
                                            </div>
                                           <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">O
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Rumah</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>No Telp</label>
                                            <input class="form-control" placeholder="Contoh : 081939114433">

                                        </div>
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input class="form-control" placeholder="Contoh : recovered@res.com">
                                        </div>

                                        <hr>
                                        <h4>B. DATA ORANG TUA / WALI</h4>
                                        <br>

                                        <div class="form-group">
                                            <label>Nama Ayah</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun Lahir Ayah</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Pendidikan Ayah</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Keadaan Ayah</label>
                                            <input class="form-control">
                                               <p class="form-control-static">Isi dengan : Masih Hidup atau Sudah Meninggal</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan Ayah</label>
                                            <input class="form-control" placeholder="Contoh : PNS, Petani, Pedagang, Tidak Bekerja, Lainnya">
                                        </div>
                                        <div class="form-group">
                                            <label>Penghasilan Ayah</label>
                                            <input class="form-control" placeholder="Contoh : Rp 1.500.000, Rp 5.000.000">
                                            <p class="form-control-static">Pilih Rp 0, jika keadaan Ayah sudah meninggal</p>
                                        </div>
                                         <div class="form-group">
                                            <label>Alamat Ayah</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>

                                        <!-- DATA IBU -->

                                        <div class="form-group">
                                            <label>Nama Ibu</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun Lahir Ibu</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Pendidikan Ibu</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Keadaan Ibu</label>
                                            <input class="form-control">
                                               <p class="form-control-static">Isi dengan : Masih Hidup atau Sudah Meninggal</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan Ibu</label>
                                            <input class="form-control" placeholder="Contoh : PNS, Petani, Pedagang, Tidak Bekerja, Lainnya">
                                        </div>
                                        <div class="form-group">
                                            <label>Penghasilan Ibu</label>
                                            <input class="form-control" placeholder="Contoh : Rp 1.500.000, Rp 5.000.000">
                                            <p class="form-control-static">Pilih Rp 0, jika keadaan Ibu sudah meninggal</p>
                                        </div>
                                         <div class="form-group">
                                            <label>Alamat Ibu</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <!-- WALI -->

                                        <div class="form-group">
                                            <label>Nama Wali</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun Lahir Wali</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Pendidikan Wali</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Keadaan Wali</label>
                                            <input class="form-control">
                                               <p class="form-control-static">Isi dengan : Masih Hidup atau Sudah Meninggal</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan Wali</label>
                                            <input class="form-control" placeholder="Contoh : PNS, Petani, Pedagang, Tidak Bekerja, Lainnya">
                                        </div>
                                        <div class="form-group">
                                            <label>Penghasilan Wali</label>
                                            <input class="form-control" placeholder="Contoh : Rp 1.500.000, Rp 5.000.000">
                                            <p class="form-control-static">Pilih Rp 0, jika keadaan Wali sudah meninggal</p>
                                        </div>
                                         <div class="form-group">
                                            <label>Alamat Wali</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>

                                        <!-- END DATA ORTU WALI -->

                                        <hr>
                                        <h4>C. DATA PERIODIK</h4>
                                        <br>

                                        <div class="form-group">
                                            <label>Berat Badan (kg)</label>
                                            <input class="form-control">
                                            <p class="form-control-static">Cukup tulis dengan angka saja</p>
                                        </div>

                                        <div class="form-group">
                                            <label>Tinggi Badan (cm)</label>
                                            <input class="form-control" type="form-control" name="">
                                            <p class="form-control-static">Cukup tulis dengan angka saja</p>
                                        </div>

                                        <div class="form-group">
                                            <label>Jarak Tempat Tinggal Ke Sekolah (km)</label>
                                            <input class="form-control" name="">
                                            <p class="form-control-static">Cukup tulis dengan angka saja</p>
                                        </div>

                                         <div class="form-group">
                                            <label>Anak ke...</label>
                                            <input class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Saudara Kandung (orang)</label>
                                            <input class="form-control" >
                                        </div>



                                         <hr>
                                         <p style="font-variant: justify">Periksa kembali isian formulir anda sebelum divalidasi, jika sudah yakin semua isian benar klik kirim formulir.Update informasi penerimaan peserta didik baru di http://udoit.umaha.ac.id

Terimakasih atas kepercayaan anda terhadap YPM sebagai pilihan untuk meraih masa depan.</p>



                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </form>
                                </div>

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>

    </div>
    <!--End Ketentuan-->
  </div>
  </div>
  <hr>
 </div>
 <!--End Container-->

<!--Footer-->
<div class="container-fluid bg-success text-center text-white font-weight-bold">
&copy;2018 - Instagram : umaha.official | U Do It - Umaha Education
</div>
<!--End Footer-->
</body>
</html>