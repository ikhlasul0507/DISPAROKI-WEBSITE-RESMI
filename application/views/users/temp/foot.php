<?php 
  $info = $this->db->get("tbl_info")->result_array();
  //return $a->result();

  foreach ($info as $a): ?>
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img style="width: 140px; height: 50px" src="<?= base_url('assets/users/');?>gambar/<?= $a['logo'];?>" alt="">
                                </a>
                            </div>
                            
                                <p><?= $a['alamat'];?><br>
                                <a href="#"> <?= $a['handphone'];?></a> <br>
                                <a href="#"></a>
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <?php foreach ($media as $md):?>
                                    <li>
                                        <a href="<?= $md['link'];?>">
                                            <i class="<?= $md['icon'];?>"></i>
                                        </a>
                                    </li>
                                    <?php endforeach; ?>
                                    
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Destinasi
                            </h3>
                            <ul class="links">
                                <?php foreach ($wisata as $wst): ?>
                                <li><a href="<?= base_url();?><?= $wst['link'];?>"><?= $wst['nama_wisata'];?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Sarana
                            </h3>
                            <ul class="links double_links">
                                <?php foreach ($sarana as $srn): ?>
                                <li><a href="<?= base_url();?><?= $srn['link'];?>"><?= $srn['nama_sarana'];?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Galeri
                            </h3>
                            <div class="instagram_feed">
                                <?php foreach ($data_wstg as $ws):?>
                                <div class="single_insta">
                                    <a href="<?= base_url();?>Dinas-Kebudayaan-Dan-Pariwisata-Kabupaten-Ogan-Komering-Ilir-8Z6iygjfhfgBvQFWt1OQ">
                                        <img style="width: 80px;height: 50px" src="<?= base_url();?>assets/admin/img/master_wisata/<?= $ws->photo_wisata;?>" alt="">
                                    </a>
                                </div>
                                <?php endforeach; ?>
                                <?php foreach ($data_srng as $sr):?>
                                <div class="single_insta">
                                    <a href="<?= base_url();?>Dinas-Kebudayaan-Dan-Pariwisata-Kabupaten-Ogan-Komering-Ilir-8Z6iygjfhfgBvQFWt1OQ">
                                        <img style="width: 80px;height: 50px" src="<?= base_url();?>assets/admin/img/master_sarana/<?= $sr->photo_sarana;?>" alt="">
                                    </a>
                                </div>
                                <?php endforeach; ?>
                                <?php foreach ($data_brtg as $br):?>
                                <div class="single_insta">
                                    <a href="<?= base_url();?>Dinas-Kebudayaan-Dan-Pariwisata-Kabupaten-Ogan-Komering-Ilir-8Z6iygjfhfgBvQFWt1OQ">
                                        <img style="width: 80px;height: 50px" src="<?= base_url();?>assets/admin/img/berita/<?= $br->photo_berita;?>" alt="">
                                    </a>
                                </div>
                                <?php endforeach; ?>
                                
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Development is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Reza POLSRI</a> || Powered by Pemerintah Kota Pagaralam
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<?php endforeach; ?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   
