<div class="container">
    <div class="row mt-3">
        <div class="col md-6">
            <div class="card">
                <div class="card-header text-center">
                    Form Ubah Data Barang
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $barang['idBarang'] ?>">
                        <div class="form-group">
                            <label for="namabarang">Nama Barang</label>
                            <input type="text" class="form-control" id="namabarang" name="namabarang" value="<?= $barang['namabarang']; ?>">
                            <small class="form-text text-danger"><?= form_error('namabarang') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="harga"> Harga </label>
                            <input type="text" class="form-control" id="harga" name="harga" value="<?= $barang['harga']; ?>">
                            <small class="form-text text-danger"><?= form_error('harga') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $barang['deskripsi']; ?>">
                            <small class="form-text text-danger"><?= form_error('deskripsi') ?>.</small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right" style="padding: 5px; width: 70px; height: 40px; border: 1px solid #332e2b; background-color: #332e2b; color: #e5e4e1; margin-top: 5px">Update</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div> 