<!doctype html>
<html lang="en">
  @include('partials.head')
  <body>
    @include('partials.navbar')
    <div class="container">
      <div class="row m-2 p-1">
        <h1>Pelayanan Non Akademik</h1><br><br>
        @include('partials.listpelayanannonakademik')
        <h2 class="text-center">Form Yang diperlukan</h2>
        <table class="table table-striped table-bordered m-4">
          <thead>
            <tr>
              <th class="text-center" scope="col">No</th>
              <th class="text-center" scope="col">Jenis Pelayanan</th>
              <th class="text-center" scope="col">Link Google Form</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td scope="row">1</td>
              <td>Pelayanan Pangkat dan Jabatan Fungsional</td>
              <td><a href="https://forms.gle/3ZPzYjZBvzDWzNbGA">https://forms.gle/3ZPzYjZBvzDWzNbGA</a></td>
            </tr>
            <tr>
              <td scope="row">2</td>
              <td>Peminjaman Fasilitas</td>
              <td><a href="https://forms.gle/trGvpWTbw1wARGuV7">https://forms.gle/trGvpWTbw1wARGuV7</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    @include('partials.footer')
    @include('partials.scriptbootstrap')
  </body>
</html>