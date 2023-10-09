<!doctype html>
<html lang="en">
  @include('partials.head')
  <body>
    @include('partials.navbar')
    @include('partials.prodidosen')
    <div class="container">
    <div class="row mt-3">
        <br><h1 class="text-center">Program Studi Sarjana S1 IEKI</h1><br><br>
        <table class="table table-striped table-bordered mt-4 mb-4">
          <thead>
            <tr>
              <th class="text-center" scope="col">Nama Lengkap</th>
              <th class="text-center" scope="col">Golongan/Pangkat</th>
              <th class="text-center" scope="col">Homebase</th>
              <th class="text-center" scope="col">Bidang Keahlian</th>
              <th class="text-center" scope="col">Sinta ID</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td scope="row">Dr. H. Nono Supriatna, M.Si., CIISA.</td>
              <td>Lektor Kepala</td>
              <td>S1 Akuntansi</td>
              <td>Sistem Perencanaan dan Pengendalian Manajemen</td>
              <td>5995836</td>
            </tr>
            <tr>
              <td scope="row">Dr. Elis Mediawati, S.Pd., SE., M.Si., Ak., CA., ERMCP., CSRS.</td>
              <td>Lektor Kepala</td>
              <td>S1 Akuntansi</td>
              <td>Akuntansi Keuangan dan Pelaporan Syariah</td>
              <td>6009471</td>
            </tr>
            <tr>
                <td scope="row">Dr. Rozmita Dewi Yuniarti, S.Pd., M.Si., CSRS., CSP., ChFl.</td>
                <td>Lektor Kepala</td>
                <td>S1 Akuntansi</td>
                <td>Pengendalian Internal</td>
                <td>6147161</td>
            </tr>
            <tr>
                <td scope="row">Dr. Elis Mediawati, S.Pd., SE., M.Si., Ak., CA., ERMCP., CSRS.</td>
                <td>Lektor Kepala</td>
                <td>S1 Akuntansi</td>
                <td>Akuntansi Keuangan dan Pelaporan Syariah</td>
                <td>6009471</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    @include('partials.svg')
    @include('partials.footer')
    @include('partials.scriptbootstrap')
  </body>
</html>