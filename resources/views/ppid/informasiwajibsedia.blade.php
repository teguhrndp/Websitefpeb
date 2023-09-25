<!doctype html>
<html lang="en">
  @include('partials.head')
  <body>
    @include('partials.navbar')
    <section id="about">
      <div class="container">
        <div class="row text-center pt-4 mb-4">
          <div class="col">
            <h2>Informasi Wajib Sedia Setiap Saat</h2><br>
            
          </div>
        </div>
        
        <div class="row justify-content-center text-left">
          <div class="col-md-8">
          <p class="font-monospace">1. Daftar informasi publik UPI</p>
          <p class="font-monospace">2. Pedoman/Peraturan/panduan di tingkat Fakultas/Unit Kerja</p>
          <p class="font-monospace">3. Daftar inventaris/fasilitas Fakultas/Unit Kerja</p>
          <p class="font-monospace">4. Daftar dan hasil penelitian yang dilakukan</p>
          <p class="font-monospace">5. Daftar Pengabdian pada masyarakat</p>
          </div>
          <div class="col-md-4">
            <p class="font-monospace"><a href="/profil">View</a></p>
            <p class="font-monospace"><a href="/profil">View</a></p>
            <p class="font-monospace"><a href="/profil">View</a></p>
            <p class="font-monospace"><a href="/profil">View</a></p>
            <p class="font-monospace"><a href="/profil">View</a></p>
          </div>
        </div>
      </div>
  </section>
    
    @include('partials.svg')
    @include('partials.footer')
    @include('partials.scriptbootstrap')
  </body>
</html>