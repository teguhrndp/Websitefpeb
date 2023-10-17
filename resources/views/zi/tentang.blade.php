<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- Bootstrap Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <!-- My CSS -->
    <link rel="stylesheet" href="css/stylezi.css" />

    <title>Zona Integritas | FPEB UPI</title>
</head>

<body style="font-family:Roboto,sans-serif">
    <!-- Navbar -->
    <!-- @include('partials.navbarzi') -->
    <!-- Akhir Navbar -->

    <div class="row">
        <div class="col">
            @include('partials.sidebarzi')
        </div>

        <div class="col-md-9">
            @include('partials.topbarzi')
            <!-- end topbar -->



            <!-- dashboard inner -->
            <div style="margin-top:100px">
                <div class="container-fluid">
                    


                    <!-- Tentang -->
                    <section id="about">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="dark_bg full margin_bottom_30">
                                    <div class="full graph_head">
                                        <div class="heading1 margin_0">
                                            <h2>Tentang Kita</h2>
                                        </div>
                                    </div>
                                    <div class="full graph_revenue">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="content testimonial">
                                                    <!-- <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                                             
                                             <div class="carousel-inner">
                                                <div class="item carousel-item active">
                                                   <div class="img-box"><img src="images/layout_img/user_img.jpg" alt=""></div>
                                                   <p class="testimonial">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                                   <p class="overview"><b>Michael Stuart</b>Seo Founder</p>
                                                </div>
                                                <div class="item carousel-item">
                                                   <div class="img-box"><img src="images/layout_img/user_img.jpg" alt=""></div>
                                                   <p class="testimonial">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                                   <p class="overview"><b>Michael Stuart</b>Seo Founder</p>
                                                </div>
                                                <div class="item carousel-item">
                                                   <div class="img-box"><img src="images/layout_img/user_img.jpg" alt=""></div>
                                                   <p class="testimonial">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                                   <p class="overview"><b>Michael Stuart</b>Seo Founder</p>
                                                </div>
                                             </div>
                  
                                             <a class="carousel-control left carousel-control-prev" href="#testimonial_slider" data-slide="prev">
                                             <i class="fa fa-angle-left"></i>
                                             </a>
                                             <a class="carousel-control right carousel-control-next" href="#testimonial_slider" data-slide="next">
                                             <i class="fa fa-angle-right"></i>
                                             </a>
                                          </div> -->
                                                    <div class="row justify-content-center "
                                                        style="text-align: justify">
                                                        <div class="col-md-6">
                                                            <p class="font-monospace">
                                                                Lorem ipsum dolor sit amet consectetur, adipisicing
                                                                elit.
                                                                Natus accusantium amet molestiae enim? Minima velit
                                                                pariatur, ad autem illum, soluta temporibus ex dolore ut
                                                                repellat, unde id veritatis. Omnis beatae, repellat
                                                                laudantium quibusdam delectus voluptatibus voluptatem
                                                                impedit optio eos, tempora magnam necessitatibus minus
                                                                blanditiis cumque porro labore ex quam sit harum unde
                                                                vitae
                                                                quisquam vero incidunt. Numquam, voluptatum, nesciunt
                                                                unde
                                                                laudantium beatae nam placeat voluptates, mollitia non
                                                                sapiente voluptatem illum omnis sequi deserunt?
                                                                Assumenda
                                                                placeat maxime accusamus soluta a ut!
                                                            </p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p class="font-monospace">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Repellat harum optio aspernatur ab. Magnam quam sunt
                                                                dignissimos. Beatae praesentium rerum magnam ab fuga
                                                                iure,
                                                                debitis ut ex dolorem reprehenderit a, id illum ullam
                                                                maiores laudantium minus qui laborum impedit. Itaque
                                                                odio,
                                                                quidem accusamus ut iure illo temporibus voluptatum
                                                                perspiciatis quo, magni excepturi aperiam! Ullam maxime
                                                                deleniti dolores repellendus minima ad eaque. Similique
                                                                ipsam rem corporis. Quam, est? Consectetur ullam itaque,
                                                                voluptatibus deserunt nesciunt, autem, in hic reiciendis
                                                                illum sunt corrupti!
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- End Tentang -->


                    

                  </div>

                    
                <!-- footer -->
                <div class="">
                    <!-- <div class="footer">
                        <p>Copyright © 2018 Designed by html.design. All rights reserved.<br><br>
                            Distributed By: <a href="https://themewagon.com/">ThemeWagon</a>
                        </p>
                    </div> -->
                    
                </div>
            </div>
            <!-- end dashboard inner -->
        </div>
    </div>

    <div class="col-md-9 footer">
      @include('partials.footer')
    </div>
    



    <!-- topbar -->









    <!-- Jumbotron -->
   
        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#F4F9F9" fill-opacity="1"
                d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg> -->

    <!-- Akhir Jumbotron -->
    <!-- About -->
    
        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ccf2f4" fill-opacity="1"
                d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg> -->
    <!-- Akhir About -->
    <!-- Project -->
    
        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#F4F9F9" fill-opacity="1"
                d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg> -->
  
    <!-- Ahir Project -->

    <!-- @include('partials.svg') -->
   


    <!-- Akhir Skills -->
    <!-- Contact  -->
    <!-- Contact -->

    <!-- Akhir Contact  -->
    <!-- Footer -->
    <!-- <footer class="text-center text-white pb-5">
      <p>© 2023 Copyright: FPEB UPI</p>
    </footer> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>