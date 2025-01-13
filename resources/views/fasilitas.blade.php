<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=7" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <title>Fasilitas STT Cipasung</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="shortcut icon" href="images/sttc.png" type="image/x-icon" />

    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
      integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <!-- boot -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />

    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
      crossorigin="anonymous"
    ></script>

    <!-- lightslider -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css"
      integrity="sha512-+1GzNJIJQ0SwHimHEEDQ0jbyQuglxEdmQmKsu8KI7QkMPAnyDrL9TAnVyLPEttcTxlnLVzaQgxv2FpLCLtli0A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"
      integrity="sha512-Gfrxsz93rxFuB7KSYlln3wFqBaXUc1jtt3dGCp+2jTb563qYvnUBM/GP2ZUtRC27STN/zUamFtVFAIsRFoT6/w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light navbarKu fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="images/logosttc.png" alt="Logo STT Cipasung" />
          <h1>STT CIPASUNG<br />High Education for All</h1>
        </a>

        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ml-auto">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/profile') }}">Profil</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/fasilitas') }}">Fasilitas</a>
                        </li>
                    </ul>
                </div>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="dropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                        <a class="dropdown-item" href="{{ url('/ekstrakulikuler') }}">Unit Kegiatan Mahasiswa</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#contact">Contact Us</a>
                    </div>

            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control sm-2" type="search" placeholder="Cari Artikel" aria-label="Search">
            <button class="btn btn-success sm-0" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </form>
        </div>
      </div>
    </nav>

    <div class="container titleArtikel">
      <!-- <h1>Latest Post</h1> -->
      <h1>Fasilitas Kampus</h1>
    </div>

    <div class="container artikel">
      <a href="#" class="text-decoration-none">
        <div class="perArtikel">
          <img src="images/fasilitas/aula.jpg" alt="aula" />
          <div class="textArtikel">
            <h3>Aula</h3>
            <p>
              Aula STT Cipasung merupakan fasilitas serbaguna yang dirancang secara modern
              untuk menunjang berbagai kegiatan, baik yang bersifat akademik seperti seminar,
              pelatihan, dan lokakarya, maupun acara kemahasiswaan seperti pentas seni, diskusi,
              dan pertemuan organisasi. Dengan kapasitas besar dan fasilitas lengkap, aula ini
              menjadi tempat yang ideal untuk mengembangkan potensi mahasiswa secara maksimal.

            </p>
          </div>
        </div>
      </a>

      <a href="#" class="text-decoration-none">
        <div class="perArtikel">
          <img src="images/fasilitas/masjid.jpg" alt="masjid" />
          <div class="textArtikel">
            <h3>Mesjid</h3>
            <p>
              Masjid kampus STT Cipasung bukan hanya menjadi pusat kegiatan ibadah
              sehari-hari, tetapi juga sebagai tempat pembinaan spiritual bagi
              mahasiswa, dosen, dan staf. Masjid ini dirancang untuk menciptakan
              suasana yang khusyuk dan mendukung pelaksanaan berbagai kegiatan
              keagamaan, seperti pengajian, kajian Islam, serta pembinaan nilai-nilai
              moral dan etika dalam lingkungan akademik yang dinamis.
            </p>
          </div>
        </div>
      </a>

      <a href="#" class="text-decoration-none">
        <div class="perArtikel">
          <img src="images/fasilitas/kelas.jpg" alt="Artikel" />
          <div class="textArtikel">
            <h3>Kelas</h3>
            <p>
              Ruang kelas di STT Cipasung dirancang secara ergonomis untuk menciptakan suasana belajar yang nyaman, produktif, dan kondusif. Dilengkapi dengan fasilitas pendukung seperti proyektor, whiteboard, dan sistem pendingin ruangan, ruang kelas ini memberikan pengalaman pembelajaran yang interaktif, di mana mahasiswa dapat lebih fokus dalam memahami materi dan berdiskusi secara aktif.
            </p>
          </div>
        </div>
      </a>

      <a href="#" class="text-decoration-none">
        <div class="perArtikel">
          <img src="images/fasilitas/labkom.jpg" alt="Artikel" />
          <div class="textArtikel">
            <h3>Laboratorium Komputer</h3>
            <p>
              Laboratorium komputer STT Cipasung menyediakan fasilitas teknologi terkini yang dirancang untuk mendukung kebutuhan mahasiswa dalam proses pembelajaran berbasis teknologi. Dilengkapi dengan perangkat keras dan perangkat lunak modern, laboratorium ini memberikan kesempatan bagi mahasiswa untuk mengembangkan keterampilan dalam informatika, mengerjakan proyek penelitian, serta mengeksplorasi berbagai inovasi teknologi.

            </p>
          </div>
        </div>
      </a>

      <a href="#" class="text-decoration-none">
        <div class="perArtikel">
          <img src="images/fasilitas/industri.jpeg" alt="Artikel" />
          <div class="textArtikel">
            <h3>Ruang Praktek TI</h3>
            <p>
              Ruang praktik teknik industri STT Cipasung dilengkapi dengan berbagai peralatan, mesin, dan teknologi terkini yang memungkinkan mahasiswa untuk menerapkan teori yang dipelajari di ruang kelas ke dalam praktik nyata. Ruang ini memberikan pengalaman langsung dalam menyelesaikan proyek, simulasi industri, dan pengembangan keterampilan yang relevan untuk dunia kerja di sektor teknik industri.
            </p>
          </div>
        </div>
      </a>

      <a href="#" class="text-decoration-none">
        <div class="perArtikel">
          <img src="images/fasilitas/perpus.jpg" alt="Artikel" />
          <div class="textArtikel">
            <h3>Perpustakaan</h3>
            <p>
              Perpustakaan STT Cipasung menyediakan beragam koleksi buku, jurnal, artikel, serta sumber informasi digital dan fisik lainnya yang dirancang untuk menunjang kegiatan akademik, penelitian, dan pengembangan wawasan mahasiswa dan dosen. Dengan suasana yang tenang serta fasilitas seperti ruang baca dan akses internet, perpustakaan ini menjadi pusat literasi yang penting bagi komunitas kampus.
            </p>
          </div>
        </div>
      </a>

      <a href="#" class="text-decoration-none">
        <div class="perArtikel">
          <img src="images/fasilitas/asrama.jpeg" alt="Artikel" />
          <div class="textArtikel">
            <h3>Asrama Kampus</h3>
            <p>
               Asrama kampus STT Cipasung menawarkan lingkungan hunian yang aman, nyaman, dan mendukung, di mana mahasiswa dapat merasa seperti di rumah sendiri. Dilengkapi dengan fasilitas pendukung seperti area makan, ruang belajar, dan akses internet, asrama ini memberikan kemudahan bagi mahasiswa untuk fokus pada kegiatan akademik sekaligus membangun relasi dengan sesama penghuni.
          </div>
        </div>
      </a>


      <a href="#" class="text-decoration-none">
        <div class="perArtikel">
          <img src="images/fasilitas/labkom.jpg" alt="Artikel" />
          <div class="textArtikel">
            <h3>Lapangan Kampus</h3>
            <p>
              Lapangan STT Cipasung merupakan fasilitas olahraga yang multifungsi, digunakan untuk berbagai kegiatan outdoor seperti sepak bola, basket, dan olahraga lainnya. Selain sebagai sarana olahraga, lapangan ini juga menjadi tempat untuk menyelenggarakan acara kebersamaan, membangun solidaritas, dan mengembangkan semangat sportifitas di antara mahasiswa.          </div>
        </div>
      </a>

      <a href="#" class="text-decoration-none">
        <div class="perArtikel">
          <img src="images/fasilitas/kantin.jpg" alt="Artikel" />
          <div class="textArtikel">
            <h3>Kantin</h3>
            <p>
              Kantin STT Cipasung adalah tempat favorit mahasiswa untuk bersantai dan menikmati makanan serta minuman setelah aktivitas belajar. Menyediakan berbagai pilihan menu dengan harga yang terjangkau, kantin ini tidak hanya menjadi tempat makan, tetapi juga tempat berkumpul dan berinteraksi sosial, menciptakan suasana yang santai dan penuh keakraban di antara komunitas kampus.          </div>
        </div>
      </a>

      <!-- <a href="#" class="text-decoration-none">
        <div class="perArtikel">
          <img src="images/fasilitas/asrama.jpeg" alt="Artikel" />
          <div class="textArtikel">
            <h3>Asrama Kampus</h3>
            <p>
               Asrama kampus STT Cipasung menawarkan lingkungan hunian yang aman, nyaman, dan mendukung, di mana mahasiswa dapat merasa seperti di rumah sendiri. Dilengkapi dengan fasilitas pendukung seperti area makan, ruang belajar, dan akses internet, asrama ini memberikan kemudahan bagi mahasiswa untuk fokus pada kegiatan akademik sekaligus membangun relasi dengan sesama penghuni.
          </div>
        </div>
      </a> -->
    </div>


    @include('components.footer')

{{--
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h4 class="my-4 text-white text-center">Contact Us</h4>

            <div class="footerContactUs">
              <div class="perFooterContactUs">
                <i class="fas text-white fa-envelope"></i>
                <p class="text-white">admin@sttcipasung.ac.id</p>
              </div>

              <div class="perFooterContactUs">
                <i class="fas text-white fa-phone-alt"></i>
                <p class="text-white">08111121212</p>
              </div>

              <div class="perFooterContactUs">
                <i class="fas text-white fa-road"></i>
                <p class="text-white">
                  Jl. Cisinga No.KM1, Cilampunghilir, Kec. Padakembang,
                  Kabupaten Tasikmalaya, Jawa Barat 46466
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <h4 class="my-4 text-center text-white">About</h4>
            <div class="footerAbout">
              <a href="" class="text-white">Fasilitas</a>
              <a href="" class="text-white">Galeri</a>
              <a href="" class="text-white">Contact Us</a>
              <a href="" class="text-white">Ekstrakulikuler</a>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <h4 class="my-4 text-white">Newsletter</h4>
            <form>
              <div class="form-group">
                <input
                  class="form-control"
                  type="search"
                  placeholder="Example@gmail.com"
                  aria-label="Search"
                />
                <button class="btn btn-success btn-newsletter" type="submit">
                  Kirim
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footerCopyright">
      <p class="text-white">
        <i class="far fa-copyright"></i>2024 By :
        <span>ARKOM Group</span>.&nbsp; Inspired by
        <a href="https://sttcipasung.ac.id/">STT Cipasung</a>
      </p>
    </div> --}}

    <script src="js/script.js"></script>
  </body>
</html>
