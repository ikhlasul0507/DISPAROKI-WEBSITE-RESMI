  
    <!--================Blog Area =================-->
    <section class="blog_area section-padding" style="background: linear-gradient(#00BFFF,   #87CEFA);">
         <h2 class="text-center">Berita Dan Kegiatan</h2>
     <h2 class="text-center">Dinas Pariwisata dan Kebudayaan</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-2 mb-lg-0">
                    <div class="blog_left_sidebar">
                      
                                 <?php foreach ($data_brtgp as $br):?>
                                   <article class="blog_item">
                                        <div class="blog_item_img">
                                            <img class="card-img rounded-0" src="<?= base_url();?>assets/admin/img/berita/<?= $br['photo_berita'];?>" alt="">
                                            <a href="<?= base_url();?>br1<?= $br['id_berita'];?>5t/detail-pengumuman-KhmmqOdAo8ke86DOVcla" class="blog_item_date">
                                                <h3 style="color: white">Waktu</h3>
                                                <p style="color: white"><?= $br['waktu_berita'];?></p>
                                            </a>
                                        </div>

                                        <div class="blog_details">
                                            <a class="d-inline-block" href="<?= base_url();?>br1<?= $br['id_berita'];?>5t/detail-pengumuman-KhmmqOdAo8ke86DOVcla">
                                                <h2 style="color: white"><?= $br['judul_berita'];?></h2>
                                            </a>
                                            <p style="color: white"><?php 
                                                $kalimat = $br['deskripsiberita1'];
                                                $sub_kalimat = substr($kalimat,0,100);
                                                echo $sub_kalimat.'.....';
                                             ?></p>
                                            <ul class="blog-info-link">
                                                <li><a style="color: white"  href="<?= base_url();?>br1<?= $br['id_berita'];?>5t/detail-pengumuman-KhmmqOdAo8ke86DOVcla"><i class="fa fa-user" style="color: white"></i> Admin, Disparoki</a></li>
                                                <li><a style="color: white" href="<?= base_url();?>br1<?= $br['id_berita'];?>5t/detail-pengumuman-KhmmqOdAo8ke86DOVcla"><i class="fa fa-comments" style="color: white"></i> <?= $br['kode_berita'];?></a></li>
                                            </ul>
                                        </div>
                                    </article>
                                <?php endforeach; ?>
                       
                        <nav class="blog-pagination justify-content-center d-flex">
                            <?= $this->pagination->create_links(); ?>
                        </nav>
                    </div>
                </div>
                