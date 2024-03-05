@extends('layouts.landing-page')

@section('container')

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <!-- <div class="container mt-5" data-aos="fade-up"> -->
      <div class="container mt-5 pt-5" data-aos="fade-up">
    
      <div class="text-center">
        <h3><strong>Selamat datang di website Dinas Kependudukan dan Pencatatan Sipil Kota Semarang </strong></h3>
        <p>
            Sebagian besar layanan kami kini dapat diakses secara online. Dengan layanan online, Anda dapat dengan mudah mengajukan pembuatan atau perubahan dokumen kependudukan dari mana saja dan kapan saja, selama Anda terhubung dengan internet.
            Namun, beberapa layanan kami masih memerlukan kehadiran Anda secara fisik di kantor Dinas Kependudukan dan Pencatatan Sipil.
        </p>
      </div>
      
        <div class="row">
          <!-- <div class="col-lg-4 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.png" class="img-fluid" alt="">
          </div> -->
          <div class="col-lg-6 pt-2 pt-lg-0 order-2 order-lg-1 content mt-5" data-aos="fade-right" data-aos-delay="100">
            <p>
                <strong>Layanan Online</strong>
            </p>
            <ul>
              <li><i class="ri-number-1"></i> Akta Kelahiran</li>
              <li><i class="ri-number-2"></i> Akta Kematian</li>
              <li><i class="ri-number-3"></i> Kartu Identitas Anak</li>
              <li><i class="ri-number-4"></i> Perubahan Biodata Kartu Keluarga</li>
              <li><i class="ri-number-5"></i> Perpindahan Keluar</li>
              <li><i class="ri-number-6"></i> Kedatangan</li>
              <li><i class="ri-number-7"></i> Akta Cerai dan Akta Kawin</li>

            </ul>
            <p>Untuk Layanan Online dapat diakses melalui situs web berikut</p>
            <div class="d-flex justify-content-center mb-3">
                <a href="https://sidnok.semarangkota.go.id/"><button type="button" class="btn btn-warning btn-md btn-block">SiDenok</button></a>
            </div>

          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content mt-5" data-aos="fade-left" data-aos-delay="100">
            <p>
                <strong>Layanan Offline</strong>
            </p>
            <ul>
              <li><i class="ri-number-1"></i> Pencetakan dan Perekaman E-KTP</li>
              <li><i class="ri-number-2"></i> Legalisasi </li>
              <li><i class="ri-number-3"></i> Kutipan (Untuk dokumen yang hilang atau rusak)</li>
              <li><i class="ri-number-4"></i> Konsultasi</li>
            </ul>
            <p>
            Untuk memudahkan proses dan menghindari antrean panjang, kami mewajibkan pengambilan antrian secara online melalui website kami. Pengambilan antrian secara online dapat diakses melalui situs web berikut
            </p>
            <div class="d-flex justify-content-center mb-3">
                <a href="/home"><button type="button" class="btn btn-warning btn-md btn-block">Ambil Antrian</button></a>
            </div>




          <!-- <div class="col-lg-6 pt-4 pt-lg-0 content mt-5"> -->


            <!-- <p>
                Sebagian besar layanan kami kini dapat diakses secara online. Dengan layanan online, Anda dapat dengan mudah mengajukan pembuatan atau perubahan dokumen kependudukan dari mana saja dan kapan saja, selama Anda terhubung dengan internet.
                Silakan kunjungi website kami melalui tautan berikut <a href="https://sidnok.semarangkota.go.id/">SiDenok</a>
            </p> -->
            
            <!-- <div class="d-flex p-3 mb-3">
                <a href="https://sidnok.semarangkota.go.id/"><button type="button" class="btn btn-danger btn-md btn-block">SiDenok</button></a>
            </div> -->
            <!-- <p>
                Namun, beberapa layanan kami masih memerlukan kehadiran Anda secara fisik di kantor Dinas Kependudukan dan Pencatatan Sipil. 
                Layanan ini meliputi <strong>Pencetakan dan Perekaman E-KTP, Layanan Legalisasi, Permintaan Kutipan (Untuk dokumen yang hilang atau rusak), serta Sesi Konsultasi.</strong>
                Untuk memudahkan proses dan menghindari antrean panjang, kami mewajibkan pengambilan antrian secara online melalui website kami. Pengambilan antrian secara online dapat diakses melalui tautan berikut
                <a href="/home">Ambil Antrian</a>
            </p> -->
            <!-- <ul>
              <li>1. Pencetakan dan Perekaman E-KTP</li>
              <li>2. Layanan Legalisasi </li>
              <li>3. Permintaan Kutipan (Untuk dokumen yang hilang atau rusak)</li>
              <li>4. Sesi Konsultasi</li>
            </ul>
            <p>
            Namun, untuk memudahkan proses dan menghindari antrean panjang, kami mewajibkan pengambilan antrian secara online melalui website kami. Pengambilan antrian secara online dapat diakses melalui tautan berikut
            <a href="/home">Ambil Antrian</a>
            </p>
            <div class="d-flex p-3 mb-3">
                <a href="/home"><button type="button" class="btn btn-danger btn-md btn-block">Ambil Antrian</button></a>
            </div> -->
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
