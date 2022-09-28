<div class="card card-body">
    <h5>Form Tambah Siswa</h5>
    <hr>
    <form action="<?= site_url('simpan-siswa') ?>" method="post">
        <div class="form-group">
            <label for="nama">ID SISWA</label>
            <input type="text" name="id_siswa" class="form-control" value="<?= $detil['id_siswa'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="nama">NAMA</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $detil['nama'] ?>">
        </div>
        <div class="form-group">
            <label for="alamat">ALAMAT</label>
            <textarea type="text" class="form-control" id="alamat" name="alamat"><?= $detil['alamat'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="id_kelas">KELAS</label>
            <select name="id_kelas" id="id_kelas" class="form-control" required>
                <option value="">--PILIH--</option>
                <?php foreach ($kelas as $k) : ?>
                    <option value="<?= $k['id_kelas'] ?>" <?= $detil['id_kelas'] == $k['id_kelas'] ? 'selected' : '' ?>><?= $k['nama_kelas'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
    </form>
</div>