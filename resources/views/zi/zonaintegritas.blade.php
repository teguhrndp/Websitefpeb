<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- Bootstrap Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <title>Zona Integritas | FPEB UPI</title>
  </head>
  <body style="font-family:Roboto,sans-serif">
    <!-- Navbar -->
    <!-- @include('partials.navbarzi') -->
    <!-- Akhir Navbar -->
    <div class="row" >
        @include('partials.sidebarzi')
      <div class="col"> 
        <div style="background-color:#aaa">
          <a class="zi-link nav-link" href="/">Zona Integritas Fakultas Ekonomi dan Bisnis</a>
        </div>
      
        <!-- Jumbotron -->
        <div class="jumbotron text-center">
          {{-- <img src="img/upi.png" alt="..." width="200" class="rounded-circle shadow" /> --}}
          <h1 class="display-6 mt-4 fw-bolder">Laman Zona Integritas</h1>
          <p >Fakultas Ekonomi dan Bisnis | Universitas Pendidikan Indonesia</p>
          <video controls>
            <source src="video/profil.mp4" type="video/mp4">
            {{-- <source src="movie.ogg" type="video/ogg"> --}}
            Your browser does not support the video tag.
          </video>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path
              fill="#F4F9F9"
              fill-opacity="1"
              d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
            ></path>
          </svg>
        </div>
        <!-- Akhir Jumbotron -->
        <!-- About -->
        <section id="about">
          <div class="container">
            <div class="row text-center pt-4 mb-4">
              <div class="col">
                <h2>Tentang Kita</h2> 
                
              </div>
            </div>
            <div class="row justify-content-center " style="text-align: justify">
              <div class="col-md-6">
                <p class="font-monospace">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus accusantium amet molestiae enim? Minima velit pariatur, ad autem illum, soluta temporibus ex dolore ut repellat, unde id veritatis. Omnis beatae, repellat laudantium quibusdam delectus voluptatibus voluptatem impedit optio eos, tempora magnam necessitatibus minus blanditiis cumque porro labore ex quam sit harum unde vitae quisquam vero incidunt. Numquam, voluptatum, nesciunt unde laudantium beatae nam placeat voluptates, mollitia non sapiente voluptatem illum omnis sequi deserunt? Assumenda placeat maxime accusamus soluta a ut!
                </p>
              </div>
              <div class="col-md-4">
                <p class="font-monospace">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat harum optio aspernatur ab. Magnam quam sunt dignissimos. Beatae praesentium rerum magnam ab fuga iure, debitis ut ex dolorem reprehenderit a, id illum ullam maiores laudantium minus qui laborum impedit. Itaque odio, quidem accusamus ut iure illo temporibus voluptatum perspiciatis quo, magni excepturi aperiam! Ullam maxime deleniti dolores repellendus minima ad eaque. Similique ipsam rem corporis. Quam, est? Consectetur ullam itaque, voluptatibus deserunt nesciunt, autem, in hic reiciendis illum sunt corrupti!
                </p>
              </div>
            </div>
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path
              fill="#ccf2f4"
              fill-opacity="1"
              d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
            ></path>
          </svg>
        </section>
        <!-- Akhir About -->
        <!-- Project -->
        <section id="project">
          <div class="container">
            <div class="row text-center pt-4 mb-4">
              <div class="col">
                <h2>Galeri</h2>
              </div>
            </div>
            <div class="row justify-content-center text-center">
              <div class="col-md-4 mb-4">
                <div class="card">
                  <img src="img/zi/zi3.jpeg" class="card-img-top" alt="konstan" />
                  <div class="card-body">
                    <p class="card-text">Banner FPEB Aksi Bersih, Anti Korupsi. Yang dipasang diberbagai sudut gedung FPEB</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="card">
                  <img src="img/zi/zi6.jpeg" class="card-img-top" alt="teakops" />
                  <div class="card-body">
                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil praesentium vero enim vitae. Eius, aliquid.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="card">
                  <img src="img/zi/zi4.jpeg" class="card-img-top" alt="digitalgarage" />
                  <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad veniam blanditiis nobis delectus perspiciatis rem.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="card">
                  <img src="img/zi/zi2.jpeg" class="card-img-top" alt="rekalogi" />
                  <div class="card-body">
                    <p class="card-text">Rapat Kordinator Masing-masing bidang</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="card">
                  <img src="img/zi/zi1.jpeg" class="card-img-top" alt="techno" />
                  <div class="card-body">
                    <p class="card-text">Staff di FPEB menandatangangi Zona Integritas</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path
              fill="#F4F9F9"
              fill-opacity="1"
              d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
            ></path>
          </svg>
        </section>
        <!-- Ahir Project -->
        
        @include('partials.svg')
        @include('partials.footer') 
      </div>
    </div>
    
    
    <!-- Akhir Skills -->
    <!-- Contact  -->
    <!-- Contact -->

    <!-- Akhir Contact  -->
    <!-- Footer -->
    <!-- <footer class="text-center text-white pb-5">
      <p>© 2023 Copyright: FPEB UPI</p>
    </footer> -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>