<br>

<div class="container">
    <!-- <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Barang <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?> -->


    <!-- <div class="row mt-3">
        <div class="col md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data barang ... " name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>  -->
<!-- 
     <!-- <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar Barang</h3>
            <?php if (empty($barang)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
    </div> -->

            <?php endif; ?> -->

            <table class="table mt-5" border="1" style="margin-top: 20px">
                <thead>
                    <tr>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Picture</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($barang as $brg) : ?>
                        <td class="text-center"><?= $brg['namabarang']; ?></td>
                        <td class="text-center"><?= $brg['harga']; ?></td>
                        <td class="text-center"><?= $brg['deskripsi']; ?></td>
                        <td class="file"><img src="<?=  base_url('images/').$brg['foto']; ?>" style="width: 60%; height: auto"></td>
                        <td>
                            <!--<div style="margin-left: auto; margin-right: auto;"> -->
                                <button class="table-btn" style="border: 0px solid #2d2d2d;	margin-bottom: 10px;"><a href="<?php echo site_url(); ?>/Barang/hapus/<?= $brg['idBarang'] ?>" style="color: white; text-decoration: none;">Delete</a></button>
                                <button class="table-btn" style="border: 0px solid #2d2d2d;	margin-bottom: 10px;"><a href="<?php echo site_url(); ?>/Barang/ubah/<?= $brg['idBarang'] ?>" style="color: white; text-decoration: none;">Update</a></button>
                        </td>
                            
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <!-- <div class="row mt-3"> -->
                <div align="center" style="margin-top : 10px">
                    <button class="table-btn" style="border: 0px solid #2d2d2d;	margin-bottom: 10px;"><a href="<?php echo site_url(); ?>/Barang/tambah/" style="color: white; text-decoration: none;">Add</a></button>
                </div>
            <!-- </div> -->

        </div>
    </div>
</div> 