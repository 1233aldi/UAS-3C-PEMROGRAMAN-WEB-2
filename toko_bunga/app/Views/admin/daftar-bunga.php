<?php $this->extend('admin/template') ?>

<?= $this->section('main') ?>
<div class="container">
  <h1>Daftar Bunga</h1>

  <?php if (isset($_SESSION['berhasil'])): ?>
    <div class="alert alert-success mb-3">
      <strong>Success!</strong> <?= $_SESSION['berhasil'] ?>
    </div>
  <?php endif; ?>

  <?php if (isset($_SESSION['error'])): ?>
    <div class="alert alert-danger mb-3">
      <strong>Failed!</strong> <?= $_SESSION['error'] ?>
    </div>
    <?php unset($_SESSION['error']); ?>
  <?php endif; ?>

  <div class="my-3">
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal"><i class="bi-plus-circle-fill"></i>Tambah</button>
  </div>
  <div class="row">
    <div class="col-12">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Bunga</th>
            <th scope="col">Jenis Bunga</th>
            <th scope="col">Warna</th>
            <th scope="col">Jumlah Stok</th>
            <th scope="col">Gambar</th>
            <th scope="col">Harga</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($books as $book): ?>
            <tr>
              <th scope="row"><?= $book['id'] ?></th>
              <td><?= $book['NamaBunga'] ?></td>
              <td><?= $book['JenisBunga'] ?></td>
              <td><?= $book['Warna'] ?></td>
              <td><?= $book['JumlahStok'] ?></td>
              <td>
                <img src="<?= base_url($book['GambarBunga']) ?>" alt="" style="width: 150px; height: auto;">
              </td>
              <td><?= $book['harga'] ?></td>
              <td>
                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal" data-bs-id="<?= $book['id'] ?>">
                  <i class="bi bi-trash"></i> Hapus
                </button>
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal"
                  data-bs-id="<?= $book['id'] ?>"
                  data-bs-NamaBunga="<?= $book['NamaBunga'] ?>"
                  data-bs-JenisBunga="<?= $book['JenisBunga'] ?>"
                  data-bs-Warna="<?= $book['Warna'] ?>"
                  data-bs-JumlahStok="<?= $book['JumlahStok'] ?>"
                  data-bs-harga="<?= $book['harga'] ?>">
                  <i class="bi bi-pencil"></i> Edit
                </button>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="tambahModalLabel">Form Tambah Buku</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/daftar-bunga') ?>" id="formTambah" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="NamaBunga">Nama Bunga</label>
            <input type="text" name="NamaBunga" id="NamaBunga" class="form-control">
          </div>
          <div class="mb-3">
            <label for="JenisBunga">Jenis Bunga</label>
            <input type="text" name="JenisBunga" id="JenisBunga" class="form-control">
          </div>
          <div class="mb-3">
            <label for="Warna">Warna</label>
            <input type="text" name="Warna" id="Warna" class="form-control">
          </div>
          <div class="mb-3">
            <label for="JumlahStok">JumlahStok</label>
            <input type="text" name="JumlahStok" id="JumlahStok" class="form-control">
          </div>
          <div class="mb-3">
            <label for="GambarBunga">Gambar Bunga</label>
            <input type="file" name="GambarBunga" accept="image/*" class="form-control">
          </div>
          <div class="mb-3">
            <label for="harga">Harga</label>
            <input type="text" name="harga" id="harga" class="form-control">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="formTambah" class="btn btn-primary"><i class="bi bi-floppy"></i> Simpan</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal Hapus -->
<div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="hapusModalLabel">Konfirmasi Hapus</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/hapus') ?>" id="formHapus" method="POST">
          <input type="hidden" name="id_hapus" id="hidden_id">
        </form>
        <p>Apakah Anda yakin ingin menghapus data dengan ID <span id="text_id">...</span>?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="formHapus" class="btn btn-danger"> <i class="bi bi-trash"></i> Hapus</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editModalLabel">Form Edit Buku</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/edit') ?>" id="formEdit" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="id" id="edit_id"> <!-- Hidden ID -->

          <div class="mb-3">
            <label for="edit_NamaBunga">Nama Bunga</label>
            <input type="text" name="NamaBunga" id="edit_NamaBunga" class="form-control">
          </div>

          <div class="mb-3">
            <label for="edit_JenisBunga">Jenis Bunga</label>
            <input type="text" name="JenisBunga" id="edit_JenisBunga" class="form-control">
          </div>

          <div class="mb-3">
            <label for="edit_Warna">Warna</label>
            <input type="text" name="Warna" id="edit_Warna" class="form-control">
          </div>

          <div class="mb-3">
            <label for="edit_JumlahStok">Jumlah Stok</label>
            <input type="text" name="JumlahStok" id="edit_JumlahStok" class="form-control">
          </div>

          <div class="mb-3">
            <label for="edit_harga">Harga</label>
            <input type="text" name="harga" id="edit_harga" class="form-control">
          </div>

          <div class="mb-3">
            <label for="edit_GambarBunga">Gambar Bunga</label>
            <input type="file" name="GambarBunga" id="edit_GambarBunga" accept="image/*" class="form-control">
            <small class="text-muted">Kosongkan jika tidak ingin mengganti gambar.</small>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" form="formEdit" class="btn btn-primary"><i class="bi bi-pencil"></i> Simpan</button>
      </div>
    </div>
  </div>
</div>



<script>
  const editModal = document.getElementById('editModal');
  if (editModal) {
    editModal.addEventListener('show.bs.modal', event => {
      const button = event.relatedTarget;
      const id = button.getAttribute('data-bs-id');
      const NamaBunga = button.getAttribute('data-bs-NamaBunga');
      const JenisBunga = button.getAttribute('data-bs-JenisBunga');
      const Warna = button.getAttribute('data-bs-Warna');
      const JumlahStok = button.getAttribute('data-bs-JumlahStok');
      const harga = button.getAttribute('data-bs-harga');

      const editId = editModal.querySelector('#edit_id');
      const editNamaBunga = editModal.querySelector('#edit_NamaBunga');
      const editJenisBunga = editModal.querySelector('#edit_JenisBunga');
      const editWarna = editModal.querySelector('#edit_Warna');
      const editJumlahStok = editModal.querySelector('#edit_JumlahStok');
      const editHarga = editModal.querySelector('#edit_harga');

      editId.value = id;
      editNamaBunga.value = NamaBunga;
      editJenisBunga.value = JenisBunga;
      editWarna.value = Warna;
      editJumlahStok.value = JumlahStok;
      editHarga.value = harga;
    });
  }

  const hapusModal = document.getElementById('hapusModal');
  if (hapusModal) {
    hapusModal.addEventListener('show.bs.modal', event => {
      const button = event.relatedTarget;
      const id = button.getAttribute('data-bs-id');
      const hiddenId = hapusModal.querySelector('#hidden_id');
      const textId = hapusModal.querySelector('#text_id');

      hiddenId.value = id;
      textId.textContent = id;
    });
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<?= $this->endSection(); ?>