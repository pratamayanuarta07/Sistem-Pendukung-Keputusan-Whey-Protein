
<style >
  .carousel-inner img {
    width: 100%;
    height: 550px;
  }
</style>
</head>

<!-- <body style=" background-image: url( assets/dist/img/boxed-bg.jpg)
;:  ">
 -->

  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="border border-5" >
      <div class="card login-card" >
        <div class="row no-gutters">
          <div class="col-md-5">
           <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->

  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="assets/dist/img/gym.jpg" alt="Gym" width="500" height="250">
    </div>
    <div class="carousel-item">
      <img src="assets/dist/img/Whey.jpg" alt="Whey" width="500" height="250">
    </div>
    <div class="carousel-item">
      <img src="assets/dist/img/produk.jpg" alt="Produk" width="500" height="250">
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
    </div>

          <div class="col-md-7">
            <div class="card-body">         
              <div class="alert alert-dark" >
                    <b><center><h4><i class="icon fa fa-warning"></i>Selamat Datang di Website Sistem Pendukung Keputusan Pemilihan Whey Protein</h4></center><b>
                </div>
                <div class="" >
                <div class="alert alert-success">
                <br>
               <p align="justify">Website ini merupakan sebuah sistem pendukung keputusan pemilihan whey protein dengan menggunakan Metode SMARTER . Hasil dari sistem ini adalah rekomendasi Whey Protein berupa peringkat berdasarkan perhitungan metode tersebut sesuai dengan kriteria yang anda pilih. 
                <h5>Langkah-langkah menggunakan sistem ini:</h5>
                <h5>1. Tekan tombol 'Mulai'</h5>
                <h5>2. Tentukan tingkat kepentingan kriteria</h5>
                <h5>3. Tentukan Range data Whey Protein yang diinginkan</h5>
                <h5>4. Pada Sistem ini merupakan harga dari whey protein dengan berat 10 lbs</h5>
              

              </div>
              <br>
              
                   <div class="d-grid gap-2">
                   <a href="<?= base_url('predict') ?>" class="btn btn-dark">Mulai</a>
                 </div>
              </form>
              <br>

               <center> <nav class="login-card-footer-nav">
                  <p>&#169; Skripsi Denta Mustofa</p>
                </nav>
              </center>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  </main>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>