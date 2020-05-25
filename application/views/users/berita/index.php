   <h2 class="text-center">Berita Dan Kegiatan</h2>
     <h2 class="text-center">Dinas Pariwisata dan Kebudayaan</h2>
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-2 mb-lg-0">
                    <div class="blog_left_sidebar">
                      
                                 <?php foreach ($data_brtgp as $br):?>
                                   <article class="blog_item">
                                        <div class="blog_item_img">
                                            <img class="card-img rounded-0" src="<?= base_url();?>assets/admin/img/berita/<?= $br['photo_berita'];?>" alt="">
                                            <a href="<?= base_url();?>br1<?= $br['id_berita'];?>5t/detail-pengumuman-KhmmqOdAo8ke86DOVcla" class="blog_item_date">
                                                <h3>Waktu</h3>
                                                <p><?= $br['waktu_berita'];?></p>
                                            </a>
                                        </div>

                                        <div class="blog_details">
                                            <a class="d-inline-block" href="<?= base_url();?>br1<?= $br['id_berita'];?>5t/detail-pengumuman-KhmmqOdAo8ke86DOVcla">
                                                <h2><?= $br['judul_berita'];?></h2>
                                            </a>
                                            <p><?php 
                                                $kalimat = $br['deskripsiberita1'];
                                                $sub_kalimat = substr($kalimat,0,100);
                                                echo $sub_kalimat.'.....';
                                             ?></p>
                                            <ul class="blog-info-link">
                                                <li><a href="<?= base_url();?>br1<?= $br['id_berita'];?>5t/detail-pengumuman-KhmmqOdAo8ke86DOVcla"><i class="fa fa-user"></i> Admin, Disparoki</a></li>
                                                <li><a href="<?= base_url();?>br1<?= $br['id_berita'];?>5t/detail-pengumuman-KhmmqOdAo8ke86DOVcla"><i class="fa fa-comments"></i> <?= $br['kode_berita'];?></a></li>
                                            </ul>
                                        </div>
                                    </article>
                                <?php endforeach; ?>
                       
                        <nav class="blog-pagination justify-content-center d-flex">
                            <?= $this->pagination->create_links(); ?>
                        </nav>
                    </div>
                </div>
                