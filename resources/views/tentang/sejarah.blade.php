<!doctype html>
<html lang="en">
  @include('partials.head')
  <body>
    @include('partials.navbar')
    <section id="about">
        <div class="container">
          <div class="row text-center pt-4 mb-4">
            <div class="col">
              <h2>Sejarah</h2>
        
                    <!-- <img src="img/UPI-FPEB-Logo-blok.png" alt="" style="display: block;margin-left: auto;margin-right:auto;width: 29%;"> -->
              </div>
            </div>
            
            <!-- <div class="row justify-content-center text-center">
              <div class="col-md-4">
                <p>
                  Fakultas Pendidikan Ekonomi dan Bisnis (FPEB) secara resmi mulai berdiri pada tanggal 28 Oktober 2008 berdasarkan Surat Keputusan Rektor UPI Nomor 6067 tahun 2008. Sebelum menjadi fakultas tersendiri, FPEB merupakan sebuah jurusan yang berada di bawah Fakultas Pendidikan Ilmu Pengetahuan Sosial (FPIPS), yaitu Jurusan Pendidikan Ekonomi.Jurusan tersebut memiliki empat program studi kependidikan dan dua program studi nonkependidikan.Program-program studi kependidikan tersebut adalah Program Studi Pendidikan Akuntansi, Program Studi Pendidikan Manajemen Bisnis, Pendidikan Manajemen Perkantoran, dan Pendidikan Ekonomi dan Koperasi.Sedangkan Program Studi nonkependidikan adalah Program Studi Akuntansi dan Program Studi Manajemen.
                  Keberadaan Jurusan Pendidikan Ekonomi memiliki sejarah panjang, dimulai sejak tahun 1958 dengan nama Jurusan Ekonomi dan Hukum di bawah naunganPerguruan Tinggi Pendidikan Guru (PTPG). Pada tahun 1960 Jurusan Ekonomi dan Hukum dikembangkan menjadi dua jurusan, yaitu Jurusan Ekonomi dan Jurusan Hukum.  Tahun 1962 Jurusan Ekonomi berubah nama menjadi Jurusan EKPA (Ekonomi Keuangan Perniagaan dan Administrasi) di bawah FKPS (Fakultas KeguruanPengetahuan Sosial) IKIP Bandung. Tahun 1965 Jurusan EKPA dikembangkan menjadi tiga jurusan, yaitu Jurusan Ekonomi Umum (Ekum), Jurusan Ekonomi Perusahaan (Ekper), dan Jurusan Administrasi di bawah Fakultas Keguruan Ilmu Sosial (FKIS).
                </p>
              </div>
              <div class="col-md-4">
                <p class="font-monospace">
                  Selanjutnya, seiring dengan perubahan FKIS menjadi FPIPS (Fakultas Pendidikan Ilmu Pengetahuan Sosial) tahun 1983, ketiga jurusan tersebut digabungkan menjadi satu jurusan, yaitu Jurusan Pendidikan Dunia Usaha yang memiliki empat program studi, yaitu Program Studi Pendidikan Akuntansi, Program Studi Pendidikan Tata Niaga, Program Studi Tata Perkantoran, dan Program Studi Koperasi. Di samping program S-1, Jurusan Pendidikan Dunia Usaha menyelenggarakan program diploma, yaitu Program Pendidikan Tata Buku (D-3), Program Pendidikan Tata Niaga (D-3), Program Pendidikan Keterampilan Jasa (D-2 dan D-3), dan Program Pendidikan Koperasi (D-3).
                  Pada tahun 1995 Jurusan Pendidikan Dunia Usaha berubah namanya menjadi Jurusan Pendidikan Ekonomi, dengan program-program studi Pendidikan Akuntansi, Pendidikan Tata Niaga, Pendidikan Administrasi Perkantoran, dan Pendidikan Ekonomi  & Koperasi. Mulai tahun 2000 sejalan dengan Wider Mandate di Jurusan Pendidikan Ekonomi dibuka program studi nonkependidikan, yaitu Program Studi Akuntansi dan Program Studi Manajemen.
                </p>
              </div>
            </div>
          </div> -->
          
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="px-4">
                  {!! html_entity_decode ($getsejarah[0]->ket)!!}
                  <div class="row">
                    {!! html_entity_decode ($getsejarah[0]->deskripsi)!!}
                  </div>
                </div>
              </div>
              <div class="row mt-5">
                <video controls poster="img/corousel1.jpg" width="200">
                  <source src="{{ asset('video/'.$getsejarah[0]->gambar) }}" type="video/mp4">
                </video>
              </div>
            </div>
            </section><br><br>
            @include('partials.footer')
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
          </body>
          </html>