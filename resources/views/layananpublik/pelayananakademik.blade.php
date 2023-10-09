<!doctype html>
<html lang="en">
  @include('partials.head')
  <body>
    @include('partials.navbar')
    <div class="container">
      <div class="row m-2 p-1">
        <h1>Pelayanan Akademik</h1><br><br>
        @include('partials.listpelayananakademik')
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
              <td>Form Permohonan Izin Penelitian</td>
              <td><a href="https://forms.gle/cBLrmXZGhVzpSCVd7">https://forms.gle/cBLrmXZGhVzpSCVd7</a></td>
            </tr>
            <tr>
              <td scope="row">2</td>
              <td>Form Permohonan Izin Permintaan Data</td>
              <td><a href="https://forms.gle/yUXYoDbELxvuHuB56">https://forms.gle/yUXYoDbELxvuHuB56</a></td>
            </tr>
            <tr>
              <td scope="row">3</td>
              <td>Form Permohonan Izin Magang Mandiri</td>
              <td><a href="https://forms.gle/ViiTg9mVn8vkgQdj9">https://forms.gle/ViiTg9mVn8vkgQdj9</a></td>
            </tr>
            <tr>
              <td scope="row">4</td>
              <td>Form Permohonan Izin Magang Kelompok</td>
              <td><a href="https://forms.gle/jK3ricUPKRqk8ZjE9">https://forms.gle/jK3ricUPKRqk8ZjE9</a></td>
            </tr>
            <tr>
              <td scope="row">5</td>
              <td>Form Permohonan Izin Observasi kelompok</td>
              <td><a href="https://forms.gle/XXuJLvhqVzjoMGmd6">https://forms.gle/XXuJLvhqVzjoMGmd6</a></td>
            </tr>
            <tr>
              <td scope="row">6</td>
              <td>Form Permohonan Izin Observasi Mandiri</td>
              <td><a href="https://forms.gle/az74f9t8Sn3e84J57">https://forms.gle/az74f9t8Sn3e84J57</a></td>
            </tr>
            <tr>
              <td scope="row">7</td>
              <td>Form Permohonan Pembuatan SKL</td>
              <td><a href="https://docs.google.com/forms/d/e/1FAIpQLSedz3M30d899fbZmlRpTupHB-7QwgbhWqmdzAXm0ZvpQBkEQg/viewform">https://docs.google.com/forms/...</a></td>
            </tr>
            <tr>
              <td scope="row">8</td>
              <td>Form Pengaduan Layanan Akademik</td>
              <td><a href="https://forms.gle/m8oQcY3mW2c6zpmW6">https://forms.gle/m8oQcY3mW2c6zpmW6</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    @include('partials.footer')
    @include('partials.scriptbootstrap')
  </body>
</html>