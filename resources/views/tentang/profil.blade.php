<!doctype html>
<html lang="en">
  @include('partials.head')
  <body>
    @include('partials.navbar')
    <section id="profile">
        <div class="container">
          <div class="row text-center pt-4 mb-4">
            <div class="col">
              <h2>Profil FPEB</h2> <br>
              <div class="card">
                <video controls>
                  <source src="video/profil.mp4" type="video/mp4">
                  {{-- <source src="movie.ogg" type="video/ogg"> --}}
                  Your browser does not support the video tag.
                </video>
                <div class="card-body">
                  <p class="card-text">Profile FPEB</p>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </section>
    @include('partials.footer')
    @include('partials.scriptbootstrap')
  </body>
</html>