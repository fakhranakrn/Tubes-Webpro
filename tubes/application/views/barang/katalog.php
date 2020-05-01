    <!-- <div style="margin-left: 5%">
            <h2>Shop All</h2>
    </div>
 -->
 <!-- <?php
		foreach ($dataKatalog as $x) {
    
    ?>
	<div class="row" style="margin-left: 5%; margin-right: 5%;">
		<div class="col-md-3" style="padding: 0">
			<div class="cardy">
			  <img src= "<?php echo base_url('images/').$x['foto']; ?>" alt="Avatar" style="width: inherit;">
			  <div class="cont">
			   <p class="nama"><?php echo $x['namabarang']; ?></p>
			   <p class="harga"><?php echo $x['harga']; ?></p>
			  </div>
			</div>
		</div>

    </div>
 <?php } ?> -->

 <div  class="container-fluid" style="margin-left: 7%; margin-top: 10px">
 <h2>Shop All</h2>
  <?php
  foreach ($dataKatalog as $x) {
    
    ?>
  <!-- <div class="row" style="margin-left: 5%; margin-right: 5%;"> -->
   <div style="padding: 0; width: 20%; height: auto; display: inline-block; margin-right: 15px">
    <!-- <div style="margin-right: 10px;"> -->
     <img src= "<?php echo base_url('images/').$x['foto']; ?>" alt="Avatar" style="width: 100%; height: auto;">

     <div class="cont item-name">
      <p class="nama"><?php echo $x['namabarang']; ?></p>
      <p class="harga"><?php echo $x['harga']; ?></p>
    <!-- </div> -->
    </div>
   <!-- </div> -->

   </div>
  <?php } ?>
</div>

	