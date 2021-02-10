<?php 
  $info = $this->db->get("tbl_info")->result_array();
  //return $a->result();

  foreach ($info as $a): ?>
 <!-- header-start -->
    <header>
        <div class="header-area " style="background: linear-gradient(to left,#00BFFF,   #87CEFA); ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="#" target="blank">
                                        <img style="width: 200px; height: 50px" src="<?= base_url('assets/users/');?>gambar/<?= $a['logo']; ?>" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-5">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="<?= base_url();?>">Home</a></li>
                                            <li><a href="<?= base_url();?>Dinas-Kebudayaan-Dan-Pariwisata-Kabupaten-Ogan-Komering-Ilir-OcXpeRqt1DVZVG6yibaH">Profil</a></li>
                                            <li><a href="#">Destinasi<i class="ti-angle-down"></i></a>
                                                <ul class="submenu" style="background: linear-gradient(#00BFFF,   #87CEFA)">
                                                        <?php foreach ($wisata as $wst) : ?>
                                                        <li><a href="<?= base_url();?><?= $wst['link'];?>"><?= $wst['nama_wisata']; ?></a></li>
                                                        <!-- -->
                                                        <?php endforeach; ?>
                                                </ul>
                                            </li>
                                            <li><a href="#">Sarana<i class="ti-angle-down"></i></a>
                                                <ul class="submenu" style="background: linear-gradient(#00BFFF,   #87CEFA)">
                                                    <?php foreach ($sarana as $srn) : ?>
                                                     <li><a href="<?= base_url();?><?= $srn['link'];?>"><?= $srn['nama_sarana']; ?></a></li>
                                                     <?php endforeach; ?>
                                                </ul>
                                            </li>
                                            <li><a href="#">Budaya<i class="ti-angle-down"></i></a>
                                                <ul class="submenu" style="background: linear-gradient(#00BFFF,   #87CEFA)">
                                                    <?php foreach ($budaya as $bd) : ?>
                                                     <li><a href="<?= base_url();?><?= $bd['link_budaya'];?>"><?= $bd['nama_budaya']; ?></a></li>
                                                     <?php endforeach; ?>
                                                </ul>
                                            </li>
                                            <li><a href="<?= base_url();?>Dinas-Kebudayaan-Dan-Pariwisata-Kabupaten-Ogan-Komering-Ilir-apOCTu0m6DNT3G1w5bFq">Berita</a></li>
                                            <li><a href="<?= base_url();?>Dinas-Kebudayaan-Dan-Pariwisata-Kabupaten-Ogan-Komering-Ilir-8Z6iygjfhfgBvQFWt1OQ">Galeri</a></li>
                                            <li><a href="<?= base_url();?>Dinas-Kebudayaan-Dan-Pariwisata-Kabupaten-Ogan-Komering-Ilir-iwAuR0baOjR4tc2t9wfh">Pengaduan</a></li>
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-4 d-none d-lg-block">
                                <div class="social_wrap d-flex align-items-center justify-content-end">
                                    <div class="social_links d-none d-xl-block">
                                        <ul>
                                            <?php foreach ($media as $md) : ?>
                                            <li><a target="_blank" href="<?= $md['link'];?>"><i class="<?= $md['icon'];?>"></i></a></li>
                                            <?php endforeach; ?>
                                           <!--  -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="seach_icon" style="background: #00BFFF);">
                                <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
<?php endforeach; ?>

 <!-- Modal -->
  <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
         
      <div class="modal-content">
        <form method="post" action="<?= base_url();?>Home/cari">
        <div class="serch_form">
            <input type="text" name="cari" placeholder="Ketik Wisata, Budaya, Sarana, Berita..."  style="width: 100%" required>
            <button type="submit">Cari</button>
            
        </div></form>
      </div>
    </div>
  </div>
    <!-- link that opens popup -->