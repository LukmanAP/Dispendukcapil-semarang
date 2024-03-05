@extends('layouts.main')

@section('container')
<!-- ====== Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Sistem Antrian Online</h1>
        </div>
      </div>


      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-4 col-md-2" onclick="redirectToAmbilAntrian()" >
          <div class="icon-box">
            <i class="bi bi-ticket-detailed"></i>
            <h3><a href="/antrian">Ambil Antrian</a></h3>
          </div>
        </div>

        <div class="col-xl-4 col-md-4" onclick="redirectToCekAntrian()">
          <div class="icon-box">
            <i class="bi bi-ticket-detailed-fill"></i>
            <h3><a href="/daftar-antrian">Cek Antrian</a></h3>
          </d>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Sistem Antrian Online Disdukcapil</h3>
            <p>
              Masyarakat bisa melakukan pendaftaran online dan memilih waktu kunjungan ke kantor Dukcapil sesuai dengan kebutuhan dan ketersediaan waktu mereka. 
            </p>
            <ul>
              <li><i class="ri-number-1"></i> Kunjungi website antrian online Disdukcapil Kota Semarang</li>
              <li><i class="ri-number-2"></i> Login / Register akun </li>
              <li><i class="ri-number-3"></i> Pilih jenis layanan yang tersedia</li>
              <li><i class="ri-number-4"></i> Masukkan data diri anda</li>
              <li><i class="ri-number-5"></i> Simpan dan Cetak nomor urut antrian</li>
            </ul>
            <p>
              Dengan adanya antrian dukcapil online, masyarakat tidak perlu lagi datang ke kantor Dinas Kependudukan dan Catatan Sipil (Dukcapil) untuk mengantri dan melakukan pengurusan administrasi kependudukan.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
  </main><!-- End #main -->


  <script>
    function redirectToAmbilAntrian() {
        window.location.href = "/antrian";
    }

    function redirectToCekAntrian() {
        window.location.href = "/daftar-antrian";
    }
</script>


@endsection
