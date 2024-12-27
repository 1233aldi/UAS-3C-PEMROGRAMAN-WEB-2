<?= $this->extend('template') ?>

<?= $this->section('main') ?>
<div class="container p-4 bg-info-subtle rounded-bottom-4">
  <div class="row align-items-center">
    <div class="col-md-6">
      <h1 class="fs-3">Selamat Datang di Toko Bunga Aldi</h1>
      <p class="fs-6">Kami menyediakan berbagai jenis bunga indah untuk setiap kesempatan.</p>
      <a href="<?= base_url() ?>" class="btn btn-success btn-sm mt-2">Lihat Produk</a>
    </div>
    <div class="col-md-6 text-center">
      <img src="<?= base_url('images/ALDI_BUNGA-removebg-preview.png') ?>" alt="Bunga Indah" class="img-fluid" style="max-width: 200px;">
    </div>
  </div>
</div>


<div class="container mb-5">
  <h2 class="mt-5">Daftar Bunga</h2>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card shadow-lg border-0 h-100">
        <img src="<?= base_url('images/angruk.png') ?>" class="card-img-top" alt="Bucket Anggre">
        <div class="card-body">
          <h5 class="card-title">Bucket Anggre</h5>
          <p class="card-text">Harga: Rp 300.000</p>
          <a href="#" class="btn btn-warning">Add to cart</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card shadow-lg border-0 h-100">
        <img src="<?= base_url('images/mataharii5.png') ?>" class="card-img-top" alt="Bucket Matahari">
        <div class="card-body">
          <h5 class="card-title">Bucket Matahari</h5>
          <p class="card-text">Harga: Rp 300.000</p>
          <a href="#" class="btn btn-warning">Add to cart</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card shadow-lg border-0 h-100">
        <img src="<?= base_url('images/peony56.png') ?>" class="card-img-top" alt="Bucket Peony">
        <div class="card-body">
          <h5 class="card-title">Bucket Peony</h5>
          <p class="card-text">Harga: Rp 300.000</p>
          <a href="#" class="btn btn-warning">Add to cart</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card shadow-lg border-0 h-100">
        <img src="<?= base_url('images/mawar34.png') ?>" class="card-img-top" alt="Bucket Mawar">
        <div class="card-body">
          <h5 class="card-title">Bucket Mawar</h5>
          <p class="card-text">Harga: Rp 385.000</p>
          <a href="#" class="btn btn-warning">Add to cart</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card shadow-lg border-0 h-100">
        <img src="<?= base_url('images/tulippp4.png') ?>" class="card-img-top" alt="Bucket Tulip">
        <div class="card-body">
          <h5 class="card-title">Bucket Tulip</h5>
          <p class="card-text">Harga: Rp 300.000</p>
          <a href="#" class="btn btn-warning">Add to cart</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>