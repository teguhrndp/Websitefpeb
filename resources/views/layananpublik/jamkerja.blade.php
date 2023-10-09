<!doctype html>
<html lang="en">
  @include('partials.head')
  <body>
    @include('partials.navbar')
    <div class="container">
      <div class="row m-2 p-2">
        <h1>Jam Kerja Pelayanan</h1><br><br><br>
        <table class="table table-striped table-bordered mt-4 mb-4">
          <thead>
            <tr>
              <th scope="col">Hari</th>
              <th scope="col">Jam Layanan</th>
              <th scope="col">Jam Istirahat</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td scope="row">Senin-Kamis</td>
              <td>08.00 s.d 16.00</td>
              <td>12.00 s.d 13.00</td>
            </tr>
            <tr>
              <td scope="row">Jumat</td>
              <td>08.00 s.d 16.30</td>
              <td>11.30 s.d 13.00</td>
            </tr>
          </tbody>
        </table>
        <p>*Tutup pada hari Sabtu dan Minggu serta Hari Libur Nasional</p>
        <p>Contact Person +234-567-890</p>
      </div>
    </div>

    @include('partials.footer')
    @include('partials.scriptbootstrap')
  </body>
</html>