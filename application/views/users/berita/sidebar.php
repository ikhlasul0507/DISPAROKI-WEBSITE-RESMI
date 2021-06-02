<div class="col-lg-4" >
                    <div class="blog_right_sidebar" >
                        <aside class="single_sidebar_widget search_widget" style="background-color: #edff21">
                            <form method="post" action="<?= base_url();?>cari-pengumuman-pgqdrf7hmhysjdm4eos3/cari">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="cari" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Ketik Pencarian'">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Cari</button>
                            </form>
                        </aside>

                        <aside class="single_sidebar_widget post_category_widget" style="background-color: #edff21">
                            <h4 class="widget_title">Kategori</h4>
                            <ul class="list cat-list">
                                <?php foreach ($wisata as $w):?>
                                <li>
                                    <a href="<?= base_url();?><?= $w['link'];?>" class="d-flex">
                                        <p style="color: black" ><?= $w['nama_wisata'];?></p>
                                       
                                    </a>
                                </li>
                                <?php endforeach;?>
                                <?php foreach ($sarana as $s):?>
                                <li>
                                    <a href="<?= base_url();?><?= $w['link'];?>" class="d-flex">
                                        <p style="color: black"><?= $s['nama_sarana'];?></p>
                                        
                                    </a>
                                </li>
                                <?php endforeach; ?>
                                
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget" style="background-color: #edff21">
                            <marquee><h3 class="widget_title">Postingan Terakhir</h3></marquee>
                            <?php foreach ($limit_brtg as $lb):?>
                            <div class="media post_item">
                                <img style="width: 80px;height: 50px; border-radius: 10px" src="<?= base_url();?>assets/admin/img/berita/<?= $lb->photo_berita;?>" alt="post">
                                <div class="media-body">
                                    <a href="<?= base_url();?>br1<?= $lb->id_berita;?>5t/detail-pengumuman-KhmmqOdAo8ke86DOVcla">
                                        <h3><?php 
                                                $kalimat = $lb->judul_berita;
                                                $sub_kalimat = substr($kalimat,0,10);
                                                echo $sub_kalimat.'....';
                                             ?></h3>
                                    </a>
                                    <p style="color: black"><?= $lb->waktu_berita;?></p>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->