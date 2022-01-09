<?php
include('config.php');
include('fungsi.php');

// header
include('header.php');
?>

<div class="banner">
  <div class="container">
    <h1 class="text-1">SISTEM PENDUKUNG KEPUTUSAN<br>
      <span class="text-2">PEMILIHAN CAFE TERBAIK DI KOTA TEGAL</span><br>
      <span class="text-3">MENGGUNAKAN METODE AHP</span>
    </h1>
    <hr>
    <p class="paragraf">CARI CAFE TERBAIK PILIHAN KAMU DISINI</p>
    <a type="button" class="btn btn-primary btn-lg px-5 start" href="kriteria.php">MULAI</a>
  </div>
</div>

<div class="container mb-5">
  <div class="row py-5">
    <div class="col">
      <h2 class="text-center">TENTANG KAMI</h2>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-lg-5">
      <img src="img/about.jpg" class="img-thumbnail about" alt="...">
    </div>
    <div class="col-lg-5">
      <p class="lh-base text-muted fs-5 mt-3">Website ini dibuat sebagai salah satu sistem pemilihan cafe yang telah terkomputerisasi, yang terdapat sistem pendukung keputusan didalamnya yang dibangun untuk membantu mengambil keputusan dalam pemilihan cafe yang sesuai dengan permintaan konsumen. Sistem ini diharapkan dapat memberikan informasi yang jelas mengenai cafe yang direkomendasikan kepada para konsumen. Sistem ini akan memberikan informasi tujuan cafe yang dapat dikunjungi oleh konsumen sesuai dengan kriteria yang diinputkan.</p>
    </div>
  </div>
</div>

<div class="container mb-5">
  <div class="row py-5">
    <div class="col">
      <h2 class="text-center">METODE AHP</h2>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-lg-5">
      <p class="lh-base text-muted fs-5 mt-3">Analitycal Hierarchy Process (AHP) Adalah metode untuk memecahkan suatu permasalahan yang komplek tidak terstruktur kedalam beberapa komponen dalam susunan yang hirarki, dengan memberi nilai subjektif tentang pentingnya setiap variabel secara relatif, dan menetapkan variabel mana yang memiliki prioritas paling tinggi guna mempengaruhi hasil pada situasi tersebut.</p>
      <p class="lh-base text-muted fs-5">Kelebihan AHP dibandingkan dengan lainnya adalah :</p>
      <ul class="lh-base text-muted fs-5">
        <li>Struktur yang berhirarki, sebagai konsekuensi dari kriteria yang dipilih, sampai pada subkriteria yang paling dalam.</li>
        <li>Memperhitungkan validitas sampai dengan batas toleransi inkosistensi berbagai kriteria dan alternatif yang dipilih oleh para pengambil keputusan.</li>
        <li>Memperhitungkan daya tahan atau ketahanan output analisis sensitivitas pengambilan keputusan.</li>
      </ul>
    </div>
    <div class="col-lg-5">
      <h3 class="fs-4">Tabel Tingkat Kepentingan</h3>
      <table class="ui collapsing table table-striped">
        <thead>
          <tr>
            <th>Nilai</th>
            <th>Tingkat Kepentingan <em>(Preference)</em></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="center aligned">1</td>
            <td>Sama pentingnya <em>(Equal Importance)</em></td>
          </tr>
          <tr>
            <td class="center aligned">2</td>
            <td>Sama hingga sedikit lebih penting</td>
          </tr>
          <tr>
            <td class="center aligned">3</td>
            <td>Sedikit lebih penting <em>(Slightly more importance)</em></td>
          </tr>
          <tr>
            <td class="center aligned">4</td>
            <td>Sedikit lebih hingga jelas lebih penting</td>
          </tr>
          <tr>
            <td class="center aligned">5</td>
            <td>Jelas lebih penting <em>(Materially more importance)</em></td>
          </tr>
          <tr>
            <td class="center aligned">6</td>
            <td>Jelas hingga sangat jelas lebih penting</td>
          </tr>
          <tr>
            <td class="center aligned">7</td>
            <td>Sangat jelas lebih penting <em>(Significantly more importance)</em></td>
          </tr>
          <tr>
            <td class="center aligned">8</td>
            <td>Sangat jelas hingga mutlak lebih penting</td>
          </tr>
          <tr>
            <td class="center aligned">9</td>
            <td>Mutlak lebih penting <em>(Absolutely more importance)</em></td>
          </tr>
        </tbody>
      </table>

    </div>
  </div>
</div>

<?php include('footer.php'); ?>