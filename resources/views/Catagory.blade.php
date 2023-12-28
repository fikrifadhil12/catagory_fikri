<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--Css-->
    <link rel="stylesheet" href="{{ asset('dasboard_fikri/style.css') }}" />
    <link rel="stylesheet" href="../fikri.js">
    <!--AKHIR Css-->

    <!--js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- LOGO-->

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <!-- Akhir Logo-->
    <title>Dasboard</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"                   
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg shadow p-2 fixed-top">
      <div class="container">
        <a class="navbar-brand mt-2" href="#">
          <img
          
            src="{{ asset('dasboard_fikri/gambar/logotelumart.png') }}"
            alt=""
            width="40"
            height="30"
            class="d-inline-block "
          
          />
          Telumart
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <form class="d-flex" role="search" style="width: 800px" id="search-form" action="../hasanan/search1.html" >
          <input
          
            class="form-control me-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button class="btn btn-danger" type="submit">Search</button>
        </form>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item" id="keranjang1">
              <a class="nav-link active" aria-current="page" href="#" 
                ><i 
                  id="keranjang"
                  class="bi bi-cart text-black me-2"
                  style="font-size: 25px"
                ></i
              ></a>
            </li>
            

            <li class="nav-item" id="profile1">
              <a class="nav-link active" aria-current="page" href="#"
                ><i
                  class="bi bi-person-circle text-black me-1"
                  style="font-size: 25px"
                ></i
              ></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Akhir Navbar-->

    <!-- Carsoul-->
    <div class="container" style="width: 80" id="car">
      <div
      id="carouselExampleIndicators" class="carousel slide mt-3" data-bs-ride="carousel" data-bs-interval="3000">
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="{{ asset('dasboard_fikri/gambar/promo2.png') }}"
              class="d-block w-100 img-fluid rounded-5"
              alt="..."
            />
          </div>
          <div class="carousel-item">
            <img
              src="{{ asset('dasboard_fikri/gambar/promo3.png') }}"
              class="d-block w-100 img-fluid rounded-5"
              alt="..."
            />
          </div>
          <div class="carousel-item">
            <img
              src="{{ asset('dasboard_fikri/gambar/promo4.png') }}"
              class="d-block w-100 img-fluid rounded-5"
              alt="..."
            />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- Akhir carsoul -->

    <!--KATAGORI-->

    <div class="container mt-3">
      <div class="kategory">
          <h3>Kategory</h3>
      </div>
      <div class="row text-center row-container shadow p-3 rounded-3">
        @foreach ($barang1 as $item1)
            <div class="col-md-3 col-sm-4 col-6">
                <a href="{{ url('tipebarang/'. $item1->id) }}">
                    <div class="card" style="width: 8rem;">
                        <img src="{{ asset('dasboard_fikri/gambar/'.$item1->foto_barang) }}" class="card-img-top" alt="...">
                      </a>
                        <div class="card-body">
                            <p class="card-text">{{ $item1->nama_barang }}</p>
                        </div>
                    </div>
                
            </div>
        @endforeach
      </div>
  </div>

        
    <div class="container mt-3" id="produk">
      <div class="row">

        @foreach ($barang as $item)
       
        <div class="col-lg-2 col-md-4 col-sm-4 col-6 " >
          <div class="card mt-2 " id="barang1">
            <img src="{{ asset('dasboard_fikri/gambar/'.$item->foto_barang) }}" class="card-img-top" alt="..." />
            <div class="card-body text-center">
              <h5 class="card-title">{{$item->nama_barang}}</h5>
              <div class="icon-bintang" style="color: orange">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
              </div>
              <p class="card-text">{{$item->harga}}</p>
              <a href="#" class="btn btn-primary" >Beli</a>
            </div>
          </div>
        </div>

        @endforeach
     </div>
    </div>

        

        {{-- <div class="col-lg-2 col-md-4 col-sm-4 col-6">
          <div class="card mt-2" id="barang2">
            <img src="gambar/produk2.png" class="card-img-top" alt="..." />
            <div class="card-body text-center">
              <h5 class="card-title">Seragam Putih</h5>
              <div class="icon-bintang" style="color: orange">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
              </div>
              <p class="card-text">Rp. 300.000</p>
              <a href="#" class="btn btn-primary">Beli</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-6">
          <div class="card mt-2" id="barang3">
            <img src="gambar/produk3.png" class="card-img-top" alt="..." / style="width: 175px;">
            <div class="card-body text-center">
              <h5 class="card-title">Baju Telkom</h5>
              <div class="icon-bintang" style="color: orange">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
              </div>
              <p class="card-text">Rp. 150.000</p>
              <a href="#" class="btn btn-primary">Beli</a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-4 col-sm-4 col-6">
          <div class="card mt-2" id="barang4">
            <img src="gambar/produk4.png" class="card-img-top" alt="..." / style="width: 165px;">
            <div class="card-body text-center">
              <h5 class="card-title">Baju Telkom</h5>
              <div class="icon-bintang" style="color: orange">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
              </div>
              <p class="card-text">
                Rp. 150.000</p>
                <a href="#" class="btn btn-primary">Beli</a>
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-4 col-sm-4 col-6">
          <div class="card mt-2" id="barang5">
            <img src="gambar/produk4.png" class="card-img-top" alt="..." / style="width: 175px;">
            <div class="card-body text-center">
              <h5 class="card-title">Baju Telkom</h5>
              <div class="icon-bintang" style="color: orange">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
              </div>
              <p class="card-text">Rp. 150.000</p>
              <a href="#" class="btn btn-primary">Beli</a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-4 col-sm-4 col-6">
          <div class="card mt-2" id="barang6">
            <img src="gambar/produk1.png" class="card-img-top" alt="..." />
            <div class="card-body text-center">
              <h5 class="card-title">Seragam merah</h5>
              <div class="icon-bintang" style="color: orange">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
              </div>
              <p class="card-text">Rp. 300.000</p>
              <a href="#" class="btn btn-primary">Beli</a>
            </div>
          </div>
        </div>
      </div>

      <div class="container mt-3">
        <div class="row">
          <div class="col-lg-2 col-md-4 col-sm-4 col-6">
            <div class="card mt-2" id="barang7">
              <img src="gambar/alattulis1.png" class="card-img-top" alt="..." />
              <div class="card-body text-center">
                <h5 class="card-title">Tempat Pulpen</h5>
                <div class="icon-bintang" style="color: orange">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star"></i>
                </div>
                <p class="card-text">Rp. 10.000</p>
                <a href="#" class="btn btn-primary">Beli</a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-sm-4 col-6">
            <div class="card mt-2" id="barang8">
              <img src="gambar/alattulis2.png" class="card-img-top" alt="..." />
              <div class="card-body text-center">
                <h5 class="card-title">Alat Tulis</h5>
                <div class="icon-bintang" style="color: orange">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star"></i>
                </div>
                <p class="card-text">Rp. 50.000</p>
                <a href="#" class="btn btn-primary">Beli</a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-4 col-6">
            <div class="card mt-2" id="barang9">
              <img src="gambar/alattulis3.png" class="card-img-top" alt="..." / style="width: 170px;">
              <div class="card-body text-center">
                <h5 class="card-title">alat Tulis</h5>
                <div class="icon-bintang" style="color: orange">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star"></i>
                </div>
                <p class="card-text">Rp. 50.000</p>
                <a href="#" class="btn btn-primary">Beli</a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-sm-4 col-6">
            <div class="card mt-2" id="barang10">
              <img src="gambar/alattulis4.png" class="card-img-top" alt="..." / style="width: 170px;">
              <div class="card-body text-center">
                <h5 class="card-title">Tempat Pensil</h5>
                <div class="icon-bintang" style="color: orange">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star"></i>
                </div>
                <p class="card-text">Rp. 30.000</p>
                <a href="#" class="btn btn-primary">Beli</a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-sm-4 col-6">
            <div class="card mt-2" id="barang11">
              <img src="gambar/Laptop1.png" class="card-img-top" alt="..." / style="width: 150px;">
              <div class="card-body text-center">
                <h5 class="card-title">Laptop second</h5>
                <div class="icon-bintang" style="color: orange">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star"></i>
                </div>
                <p class="card-text">Rp. 1.300.000</p>
                <a href="#" class="btn btn-primary">Beli</a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-sm-4 col-6">
            <div class="card mt-2" id="barang12">
              <img src="gambar/Laptop2.png" class="card-img-top" alt="..." />
              <div class="card-body text-center">
                <h5 class="card-title">Laptop Second</h5>
                <div class="icon-bintang" style="color: orange">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star"></i>
                </div>
                <p class="card-text">Rp. 2.000.000</p>
                <a href="#" class="btn btn-primary">Beli</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container mt-3 shadow-sm p-5">
        <div class="row">
          <div class="card text-bg-white" style="width: 500px" id="gambar" >
            <img src="gambar/iklan2.png" class="card-img" alt="..." />
            <div class="card-img-overlay"></div>
          </div>

          <div class="col-lg-2 col-md-4 col-sm-4 col-6">
            <div class="card mt-2 ms-4" id="barang13">
              <img src="gambar/produk1.png" class="card-img-top" alt="..." />
              <div class="card-body text-center">
                <h5 class="card-title">Seragam merah</h5>
                <div class="icon-bintang" style="color: orange">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star"></i>
                </div>
                <p class="card-text">Rp. 300.000</p>
                <a href="#" class="btn btn-primary">Beli</a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md2 col-sm-4 col-6">
            <div class="card mt-2" 14>
              <img src="gambar/produk1.png" class="card-img-top" alt="..." />
              <div class="card-body text-center">
                <h5 class="card-title">Seragam merah</h5>
                <div class="icon-bintang" style="color: orange">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star"></i>
                </div>
                <p class="card-text">Rp. 300.000</p>
                <a href="#" class="btn btn-primary">Beli</a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md2 col-sm-4 col-6">
            <div class="card mt-2" id="barang15">
              <img src="gambar/produk1.png" class="card-img-top" alt="..." />
              <div class="card-body text-center">
                <h5 class="card-title">Seragam merah</h5>
                <div class="icon-bintang" style="color: orange">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star"></i>
                </div>
                <p class="card-text">Rp. 300.000</p>
                <a href="#" class="btn btn-primary">Beli</a>
              </div>
            </div>
          </div>
        </div> --}}
      {{-- </div>
    </div> --}}

    <div class="container" style="width: 80">
      <div id="carouselExampleIndicators" class="carousel slide mt-5">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="gambar/promo1.png"
              class="d-block w-100 img-fluid rounded-5"
              alt="..."
            />
          </div>
          <div class="carousel-item">
            <img
              src="gambar/img1.jpg"
              class="d-block w-100 img-fluid rounded-5"
              alt="..."
            />
          </div>
          <div class="carousel-item">
            <img
              src="gambar/img3.jpg"
              class="d-block w-100 img-fluid rounded-5"
              alt="..."
            />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <!--footer-->
    <footer class="text-black pt-5 pb-4 mt-3">
      <div
        class="container-fluid text-center text-md-left shadow-sm p-5 border-top border-2"
      >
        <div class="row text-center text-md-left">
          <div class="col-md-3 col-lg-3 col-xl-3 mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
              company name
            </h5>
            <p>
              <i class="bi bi-instagram text-danger me-2"></i>Telkom University
            </p>
            <p><i class="bi bi-twitter text-info me-2"></i>Telkom University</p>
            
            <p>
              <i class="bi bi-instagram text-danger me-2"></i>TelUmart
            </p>
          </div>

          <div class="col-md-3 col-lg-3 col-xl-3 mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Pembuat</h5>
            <p><a href="#" class="text-dark" style="text-decoration: none">Fikri Fadhil Mustofa <br>(1302210053)</a></p>
            <p><a href="#" class="text-dark" style="text-decoration: none">Hasnan Husaini <br>(1302210100)</a></p>
            <p><a href="#" class="text-dark" style="text-decoration: none">Ariel Pabibak Pali' Mallua' <br>(1302210128)</a></p>
            
        </div>

          <div class="col-md-3 col-lg-3 col-xl-3 mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
              Pembuat
            </h5>
            <p><a href="#" class="text-dark" style="text-decoration: none">Andi Erlangga Sulistyo Hasan Bhakti <br>(1302213077)</a></p>
            <p><a href="#" class="text-dark" style="text-decoration: none">Rafi Alimudin <br>(1302210060)</a></p>
            <p><a href="#" class="text-dark" style="text-decoration: none">Hermawan Saputra <br>(1302213080)</a></p>
          </div>

          <div class="col-md-3 col-lg-3 col-xl-3 mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
              Contact
            </h5>
            <p><i class="bi bi-house-door-fill me-2"></i>Bojongsoang park</p>
            <p><i class="bi bi-envelope-open-fill me-2"></i>tubes@gmail.com</p>
            <p><i class="bi bi-telephone-fill me-2"></i>+62 8211127323</p>
            <p><i class="bi bi-printer-fill me-2"></i>+01 335 633 77</p>
          </div>
        </div>
      </div>
    </footer>


    <!--Akhir Produk-->

   

    {{-- <script>
      $(document).ready(function() {
        if (localStorage.getItem("loginHidden") === "true") {
                $("#login1").hide();
                $("#login2").hide();
            }

            $("#login1").click(function () {
                // Sembunyikan tombol login
                $("#login1").hide();
                $("#login2").hide();
                
                // Set localStorage untuk menandai bahwa tombol sudah disembunyikan
                localStorage.setItem("loginHidden", "true");

                // Pindah ke halaman 2
                window.location.href = "../login_ariel/indexlLogin.html";
            });

            $("#profile1").click(function () {
          window.location.href = "../Profile_andi/index.html";
        });

        $("#keranjang1").click(function () {
          window.location.href = "../keranjang_rapi/homepage.html";
        });

        
        $("#barang1").click(function () {
          window.location.href = "../deskripsi_hermawan/seragam merah.html";
        });

        $("#barang2").click(function () {
          window.location.href = "../deskripsi_hermawan/seragam putih.html";
        });

        $("#barang3").click(function () {
          window.location.href = "../deskripsi_hermawan/baju telkom putih.html";
        });

        $("#barang4").click(function () {
          window.location.href = "../deskripsi_hermawan/baju telkom hitam.html";
        });

        $("#barang5").click(function () {
          window.location.href = "../deskripsi_hermawan/baju telkom hitam.html";
        });

        $("#barang6").click(function () {
          window.location.href = "../deskripsi_hermawan/seragam merah.html";
        });
        $("#barang7").click(function () {
          window.location.href = "../deskripsi_hermawan/tempat pulpen.html";
        });
        $("#barang8").click(function () {
          window.location.href = "../deskripsi_hermawan/perlengkapan alat tulis.html";
        });
        $("#barang9").click(function () {
          window.location.href = "../deskripsi_hermawan/perlengkapan alat tulis 2.html";
        });
        $("#barang10").click(function () {
          window.location.href = "../deskripsi_hermawan/tempat pensil.html";
        });
        $("#barang11").click(function () {
          window.location.href = "../deskripsi_hermawan/laptop second.html";
        });
        $("#barang12").click(function () {
          window.location.href = "../deskripsi_hermawan/laptop second 2.html";
        });
        $("#barang13").click(function () {
          window.location.href = "../deskripsi_hermawan/seragam merah.html";
        });
        $("#barang14").click(function () {
          window.location.href = "../deskripsi_hermawan/seragam merah.html";
        });
        $("#barang15").click(function () {
          window.location.href = "../deskripsi_hermawan/seragam merah.html";
        });

        $("#sercing").click(function () {
          window.location.href = "../hasanan/search1.html";
        });

        $(".btn btn-danger").click(function () {
          window.location.href = "../hasanan/search1.html";
        });




      });



      document.getElementById("search-form").addEventListener("submit", function (e) {
    e.preventDefault(); // Mencegah formulir dikirim secara default

    // Dapatkan nilai input pencarian
    const searchQuery = document.querySelector("#search-form input[type='search']").value;

    if (searchQuery.trim() !== "") {
      // Redirect ke halaman tujuan dengan query pencarian
      const targetURL = `../hasanan/search1.html?query=${encodeURIComponent(searchQuery)}`;
      window.location.href = targetURL;
    }
  });
    </script> --}}


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
