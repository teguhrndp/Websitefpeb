<!doctype html>
<html lang="en">
  @include('partials.head')
  <body>
    @include('partials.navbar')
    <section id="profile">
        <div class="container">
          <div class="row text-center pt-4 mb-4">
            <div class="col">
              <h2>Fasilitas</h2> <br>
              <div class="card">
                <iframe height="500" src="https://www.youtube.com/embed/PsxHDBrDzg4?si=ScXAdC5RRfO_SIXM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="card-body">
                  <p class="card-text">Video Pengenalan Fasilitas Di Lingkungan FPEB</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    @include('partials.svg')
    @include('partials.footer')
    @include('partials.scriptbootstrap')
  </body>
</html>