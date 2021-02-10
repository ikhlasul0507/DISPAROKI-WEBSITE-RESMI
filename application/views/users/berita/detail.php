
   

<section class="blog_area single-post-area section-padding" style="background: linear-gradient(#00BFFF,   #87CEFA);">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <?php foreach ($berita as $br): ?>
               <div class="single-post" id="div1">
                  <div class="feature-img">
                     <img class="img-fluid" src="<?= base_url();?>assets/admin/img/berita/<?= $br->photo_berita;?>" alt="">
                  </div>
                  <div class="blog_details">
                     <h2 style="color: black"><?= $br->judul_berita;?></h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#" style="color: black"><i class="fa fa-user"></i> Admin</a></li>
                        <li><a href="#" style="color: black"><i class="fa fa-home"></i> <?= $br->nama_kecamatan;?>,<?= $br->nama_desa; ?></a></li>
                     </ul>
                     <p class="excert" style="color: black">
                        <?= $br->deskripsiberita1; ?>
                     </p>
                    
                     <div class="quote-wrapper" style="color: black" style="background: linear-gradient(#00BFFF,   #87CEFA);">
                        <div class="quotes" style="background: linear-gradient(#00BFFF,   #87CEFA);">
                           <?= $br->deskripsiberita2; ?>
                        </div>
                     </div>
                     <p style="color: black">
                        <?= $br->deskripsiberita3; ?>
                     </p>
                    
                  </div>
               </div>
            <?php endforeach; ?>
               <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     <p class="like-info" style="color: red"><span class="align-middle"><i class="fa fa-heart"></i></span>Waktu Posting :<?= $br->waktu_berita;?></p>
                     <div class="col-sm-4 text-center my-2 my-sm-0">
                        <p class="comment-count" style="color: red"><span class="align-middle btn" onclick="window.print();"><i class="fa fa-print" ></i>Print</span></p>
                     </div>
                     <ul class="social-icons">
                        <h5>Bagikan</h5>
                        <a rel='nofollow' href="javascript:void(0);" onclick="popUp=window.open('https://www.facebook.com/sharer.php?u=<?= base_url();?>br1<?= $br->id_berita;?>5t/detail-pengumuman-KhmmqOdAo8ke86DOVcla')"><img src='http://syam.eu.org/icon/fb.jpg' alt='' width='25' height='25'></a>

                        <a rel='nofollow' href="javascript:void(0);" onclick="popUp=window.open('https://plus.google.com/share?url=<?= base_url();?>br1<?= $br->id_berita;?>5t/detail-pengumuman-KhmmqOdAo8ke86DOVcla');">
                        <img src='http://syam.eu.org/icon/g.jpg' alt='' width='25' height='25'></a>

                        <a rel='nofollow' href="javascript:void(0);" onclick="popUp=window.open('http://www.linkedin.com/shareArticle?mini=true&url=<?= base_url();?>br1<?= $br->id_berita;?>5t/detail-pengumuman-KhmmqOdAo8ke86DOVcla');">
                        <img src='http://syam.eu.org/icon/in.jpg' alt='' width='25' height='25'></a> 

                        <a rel='nofollow' href="javascript:void(0);" onclick="popUp=window.open('https://twitter.com/share?url=<?= base_url();?>br1<?= $br->id_berita;?>5t/detail-pengumuman-KhmmqOdAo8ke86DOVcla');">
                        <img src='http://syam.eu.org/icon/tw.jpg' alt='' width='25' height='25'></a>

                        <a rel='nofollow' href="javascript:void(0);" onclick="popUp=window.open('http://pinterest.com/pin/create/button/?url=<?= base_url();?>br1<?= $br->id_berita;?>5t/detail-pengumuman-KhmmqOdAo8ke86DOVcla');" >
                        <img src='http://syam.eu.org/icon/p.jpg' alt='' width='25' height='25'></a> 

                        <a rel='nofollow' href="javascript:void(0);" onclick="popUp=window.open('whatsapp://send?text=<?= base_url();?>br1<?= $br->id_berita;?>5t/detail-pengumuman-KhmmqOdAo8ke86DOVcla');">
                        <img src='http://syam.eu.org/icon/wa.jpg' alt='' width='25' height='25'></a>

                        <a rel='nofollow' href="javascript:void(0);" onclick="popUp=window.open('mailto:?Subject=&Body=<?= base_url();?>br1<?= $br->id_berita;?>5t/detail-pengumuman-KhmmqOdAo8ke86DOVcla');"><img src='http://syam.eu.org/icon/em.jpg' alt='' width='25' height='25'></a>

                     </ul>
                  </div>
                  <div class="navigation-area">
                     <div class="row">
                        <?php foreach ($berita_prev as $bp):?>
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <div class="thumb">
                              <a href="<?= base_url();?>br1<?= $bp->id_berita;?>5t/detail-pengumuman-KhmmqOdAo8ke86DOVcla">
                                 <img class="card-img rounded-0" src="<?= base_url();?>assets/admin/img/berita/<?= $bp->photo_berita;?>" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="<?= base_url();?>br1<?= $bp->id_berita;?>5t/detail-pengumuman-KhmmqOdAo8ke86DOVcla">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p style="color: blue">Prev Post</p>
                              <a href="<?= base_url();?>br1<?= $bp->id_berita;?>5t/detail-pengumuman-KhmmqOdAo8ke86DOVcla">
                                 <!-- <h4><?= $bp->judul_berita; ?></h4> -->
                              </a>
                           </div>
                        </div>
                     <?php endforeach; ?>
                     <?php foreach ($berita_next as $bn):?>
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p style="color: blue">Next Post</p>
                              <a href="<?= base_url();?>br1<?= $bn->id_berita;?>5t/detail-pengumuman-KhmmqOdAo8ke86DOVcla">
                                 <!-- <h4><?= $bn->judul_berita; ?></h4> -->
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="<?= base_url();?>br1<?= $bn->id_berita;?>5t/detail-pengumuman-KhmmqOdAo8ke86DOVcla">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="<?= base_url();?>br1<?= $bn->id_berita;?>5t/detail-pengumuman-KhmmqOdAo8ke86DOVcla">
                                 <img class="img-fluid" src="<?= base_url();?>assets/admin/img/berita/<?= $bn->photo_berita;?>" alt="">
                              </a>
                           </div>
                        </div>
                     <?php endforeach; ?>
                     </div>
                  </div>
               </div>
   
            </div>