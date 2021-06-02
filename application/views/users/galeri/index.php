 <!-- popular_destination_area_start  -->
    <div class="popular_destination_area" style="background: linear-gradient(#ff4d21,   #edff21);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Galeri Foto</h3>
                        <p style="color: white">Dinas Pariwisata dan Kebudayaan Kota Pagaralam</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($data_wst as $wst):?>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                
                        <div class="thumb">
                           <img style="height: 200px" src="<?= base_url();?>assets/admin/img/master_wisata/<?= $wst->photo_wisata;?>" alt="">
                        </div>
                        <div class="content">
                           <a href="<?= base_url();?>assets/admin/img/master_wisata/<?= $wst->photo_wisata;?>" target="blank"> <p class="d-flex align-items-center"><?= $wst->nama_master_wisata;?></p></a>
                            
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php foreach ($data_srn as $srn):?>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                
                        <div class="thumb">
                           <img style="height: 200px" src="<?= base_url();?>assets/admin/img/master_sarana/<?= $srn->photo_sarana;?>" alt="">
                        </div>
                        <div class="content">
                           <a href="<?= base_url();?>assets/admin/img/master_sarana/<?= $srn->photo_sarana;?>" target="blank"> <p class="d-flex align-items-center"><?= $srn->nama_master_sarana;?></p></a>
                            
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php foreach ($data_brt as $brt):?>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                
                        <div class="thumb">
                           <img style="height: 200px" src="<?= base_url();?>assets/admin/img/berita/<?= $brt->photo_berita;?>" alt="">
                        </div>
                        <div class="content">
                           <a href="<?= base_url();?>assets/admin/img/berita/<?= $brt->photo_berita;?>" target="blank"> <p class="d-flex align-items-center"><?= $brt->judul_berita;?></p></a>
                            
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php foreach ($data_bdy as $bdy):?>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                
                        <div class="thumb">
                           <img style="height: 200px" src="<?= base_url();?>assets/admin/img/master_budaya/<?= $bdy->photo_budaya;?>" alt="">
                        </div>
                        <div class="content">
                           <a href="<?= base_url();?>assets/admin/img/master_budaya/<?= $bdy->photo_budaya;?>" target="blank"> <p class="d-flex align-items-center"><?= $bdy->nama_master_budaya;?></p></a>
                            
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                
              
                
            </div>
        </div>
    </div>
    <!-- popular_destination_area_end  -->
