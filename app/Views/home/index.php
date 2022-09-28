<div class="card">
    <div class="card-header">
        <a href="<?= site_url('form') ?>" class="btn btn-success"><i class="icofont-users-social"></i> Tambah Siswa</a>
    </div>
    <div class="card-body">
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif ?>
        <table class="table table-bordered m-auto">
            <thead class="bg-info text-light">
                <tr class="text-center">
                    <th>ID</th>
                    <th>NAMA</th>
                    <th>KELAS</th>
                    <th>ALAMAT</th>
                    <th>WALI KELAS</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rekap as $var) : ?>
                    <tr class="text-center">
                        <td><?= $var['id_siswa'] ?></td>
                        <td><?= $var['nama'] ?></td>
                        <td><?= $var['nama_kelas'] ?></td>
                        <td><?= $var['alamat'] ?></td>
                        <td><?= $var['wali_kelas'] ?></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <!-- <a type="button" href="<?= site_url('detil-siswa/') . $var['id_siswa'] ?>" class="btn btn-success"><i class="icofont-gears"></i> Edit</a> -->
                                <a type="button" href="#modal-edit" class="btn btn-success edit-siswa" data-toggle="modal" data-id="<?= $var['id_siswa'] ?>"><i class="icofont-gears"></i> Edit</a>
                                <a type="button" onclick="return confirm('Hapus?')" href="<?= site_url('hapus-siswa/') . $var['id_siswa'] ?>" class="btn btn-info"><i class="icofont-close-circled"></i> Hapus</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>



<div class="modal" tabindex="-1" role="dialog" id="modal-edit">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= site_url('simpan-siswa') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">ID SISWA</label>
                        <input type="text" name="id_siswa" id="id_siswa" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="alamat">ALAMAT</label>
                        <textarea type="text" class="form-control" id="alamat" name="alamat"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="id_kelas">KELAS</label>
                        <select name="id_kelas" id="id_kelas" class="form-control" required>
                            <option value="">--PILIH--</option>
                            <?php foreach ($kelas as $k) : ?>
                                <option value="<?= $k['id_kelas'] ?>"><?= $k['nama_kelas'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>