@extends('layouts.landing-page')

@section('container')

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container mt-5 pt-5" data-aos="fade-up">
    
        <h2 class="text-center"><strong>Selamat datang di website Dinas Kependudukan dan Pencatatan Sipil Kota Semarang </strong></h2>
          
      
        <div class="row">
          <div class="col-lg-6 pt-lg-0 order-2 order-lg-1 content mt-4" data-aos="fade-right" data-aos-delay="100">
            <h5>
                <strong>Layanan Online</strong>
            </h5>
            <p>
              Dengan layanan online, masyarakat dapat dengan mudah mengajukan pembuatan atau perubahan dokumen administrasi kependudukan dari mana saja dan kapan saja.
              Berikut ini daftar layanan yang tersedia secara online:
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
            <p>Layanan Online dapat diakses melalui situs web yang disediakan di bawah ini.</p>
            <div class="d-flex justify-content-center mb-3">
                <a href="https://sidnok.semarangkota.go.id/"><button type="button" class="btn btn-warning btn-md btn-block">Si D'nOK</button></a>
            </div>

          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content mt-3" data-aos="fade-left" data-aos-delay="100">
            <h5>
                <strong>Layanan Offline</strong>
            </h5>
            <p>
              Beberapa layanan masih memerlukan kehadiran masyarakat secara fisik di kantor Dinas Kependudukan dan Pencatatan Sipil. 
              Berikut ini daftar layanan yang tersedia secara offline:
            </p>
            <ul>
              <li><i class="ri-number-1"></i> Pencetakan dan Perekaman E-KTP</li>
              <li><i class="ri-number-2"></i> Legalisasi </li>
              <li><i class="ri-number-3"></i> Kutipan (Untuk dokumen yang hilang atau rusak)</li>
              <li><i class="ri-number-4"></i> Konsultasi</li>
            </ul>
            <p>
            Disarankan agar masyarakat untuk mengambil nomor antrian secara online melalui situs web yang disediakan di bawah ini sebelum mengunjungi kantor Dinas Kependudukan dan Pencatatan Sipil.
            Langkah ini diambil untuk mempermudah proses dan menghindari antrean yang panjang.
            </p>
            <div class="d-flex justify-content-center mb-3">
                <a href="/home"><button type="button" class="btn btn-warning btn-md btn-block">Ambil Antrian</button></a>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->
  </main>
  <!-- End #main -->


  <script>
    function redirectToAmbilAntrian() {
        window.location.href = "/antrian";
    }

    function redirectToCekAntrian() {
        window.location.href = "/daftar-antrian";
    }
</script>


@endsection
