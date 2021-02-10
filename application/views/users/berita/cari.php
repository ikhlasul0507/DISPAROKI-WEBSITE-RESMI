  <!--================Blog Area =================-->
    <section class="blog_area section-padding" style="background: linear-gradient(#00BFFF,   #87CEFA);">
         <h2 class="text-center">Berita Dan Kegiatan</h2>
     <h2 class="text-center">Dinas Pariwisata dan Kebudayaan</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-2 mb-lg-0">
                    <div class="blog_left_sidebar">
                                 <?php if ($data_brtg){?>
                                 <?php foreach ($data_brtg as $br):?>
                                   <article class="blog_item">
                                        <div class="blog_item_img">
                                            <img class="card-img rounded-0" src="<?= base_url();?>assets/admin/img/berita/<?= $br->photo_berita;?>" alt="">
                                            <a href="<?= base_url();?>Berita/detail/<?= $br->id_berita;?>" class="blog_item_date">
                                                <h3>Waktu</h3>
                                                <p><?= $br->waktu_berita;?></p>
                                            </a>
                                        </div>

                                        <div class="blog_details">
                                            <a class="d-inline-block" href="<?= base_url();?>Berita/detail/<?= $br->id_berita;?>">
                                                <h2><?php 
                                                
                                                echo highlight_phrase($br->judul_berita, $high,'<font style="color:#dd4814; background:#dedede">', '</font>');
                                                ?></h2>
                                            </a>
                                            <p style="color: black"><?php 
                                                $kalimat = $br->deskripsiberita1;
                                                $sub_kalimat = substr($kalimat,0,100);
                                                echo highlight_phrase($sub_kalimat.'.....', $high,'<font style="color:#dd4814; background:#dedede">', '</font>');
                                             ?></p>
                                            <ul class="blog-info-link">
                                                <li><a href="<?= base_url();?>Berita/detail/<?= $br->id_berita;?>"><i class="fa fa-user"></i> Admin, Disparoki</a></li>
                                                <li><a href="<?= base_url();?>Berita/detail/<?= $br->id_berita;?>"><i class="fa fa-comments"></i> <?= $br->kode_berita;?></a></li>
                                            </ul>
                                        </div>
                                    </article>
                                <?php endforeach; ?>
                                <?php }else{ ?>
                                    <center>
                                        <br><br><br><br><br><hr>
                                        <h2>Ops...</h2><br>
                                    <h1 class="blink">Data Tidak Ditemukan !</h1><hr>
                                    </center>
                                <?php } ?>
                        <nav class="blog-pagination justify-content-center d-flex">

                        </nav>
                    </div>
                </div>
                <style>
                      .blink {
                        color: red;
                        animation: blink-animation 1s steps(5, start) infinite;
                        -webkit-animation: blink-animation 1s steps(5, start) infinite;
                      }
                      @keyframes blink-animation {
                        to {
                          visibility: hidden;
                        }
                      }
                      @-webkit-keyframes blink-animation {
                        to {
                          visibility: hidden;
                        }
                      }
                      </style>