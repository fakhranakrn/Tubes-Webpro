<div class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    ADD
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="namabarang">Item Name</label>
                            <input type="text" class="form-control" id="namabarang" name="namabarang">
                            <small class="form-text text-danger"><?= form_error('namabarang') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="harga">Price</label>
                            <input type="text" class="form-control" id="harga" name="harga">
                            <small class="form-text text-danger"><?= form_error('harga') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">Description</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                            <small class="form-text text-danger"><?= form_error('deskripsi') ?>.</small>
                        </div>
                        <label>Picrtures</label>
            
                        <input type="file" class="form-control" id="foto" name="foto">
                        <button type="submit" name="tambah" class="btn btn-primary float-right" style="padding: 5px; width: 70px; height: 40px; border: 1px solid #332e2b; background-color: #332e2b; color: #e5e4e1; margin-top: 5px">Add</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div> 