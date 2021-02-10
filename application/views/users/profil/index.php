 <!-- bradcam_area  -->
    <!-- <div class="bradcam_area" style="background-image: ('/assets/users/gambar/pantai.jpg')"> -->
            <div class="row" style="background: linear-gradient(#00BFFF,   #87CEFA);">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h2>PROFIL</h2>
                        <h2>DINAS KEBUDAYAAN DAN PARIWISATA<BR>KABUPATEN OGAN KOMERING ILIR</h2>
                        <?php foreach ($data_info as $di):?>
                            <img class="card-img rounded-0" style="width: 400px; height: 150px" src="<?= base_url('assets/users/');?>gambar/<?= $di['logo'];?>" alt="">
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
    <!-- </div> -->
    <!--/ bradcam_area  -->
    
    <div class="about_story" style="background: linear-gradient(#00BFFF,   #87CEFA);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="story_heading">
                    <h3>Visi Dan Misi</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-11 offset-lg-1">
                            <div class="story_info"><h4>Visi</h4>
                                <div class="row">
                                    <div class="col-lg-9">
                                        <table>
                                            <?php $no=1; foreach ($data_vis as $vi): ?>
                                            <tr>
                                                <td valign="top"><?= $no++;?>. </td>
                                                <td><?= $vi['visi'];?></td>
                                            </tr>
                                            <?php endforeach ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                             <div class="story_info"><h4>Misi</h4>
                                <div class="row">
                                    <div class="col-lg-9">
                                        <table>
                                            <?php $no=1; foreach ($data_mis as $mi): ?>
                                              <tr>
                                                <td valign="top"><?= $no++; ?>. </td>
                                                <td><?= $mi['misi']; ?></td>
                                              </tr>  
                                            <?php endforeach ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="col-lg-12">
                    <div class="story_heading">
                    <h3>Sturuktur Organisasi</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-11 offset-lg-1">
                          <div class="row">

                            <?php foreach ($data_str as $ds): ?>
                              <div class="col-lg-4 col-md-6 mt-5">
                                <div class="single_destination">
                                    <div class="thumb">
                                        <img style="height: 200px; width: 280px" src="<?= base_url();?>assets/admin/img/struktur/<?= $ds->photo;?>" alt="">
                                    </div>
                                    <div class="content">
                                        <p class="d-flex align-items-center" style="color: white"><?= $ds->nama_jabatan;?> || <?= $ds->nama;?></p> 
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>
                          </div>


                          <h2 class="mt-5">Piagam Penghargaan</h2>
                            <div class="counter_wrap">
                                <div class="row">
                                    <?php foreach ($data_peng as $dp):?>
                                    <div class="col-lg-4 col-md-4 mt-3">
                                        <div class="thumb">
                                        <a href="<?= base_url();?>assets/admin/img/penghargaan/<?= $dp['photo_penghargaan'];?>" target="blank"><img style="height: 200px; width: 280px" src="<?= base_url();?>assets/admin/img/penghargaan/<?= $dp['photo_penghargaan'];?>" alt=""></a>
                                        </div>
                                        <div class="content">
                                        <p class="d-flex align-items-center">Admin || <?= $dp['nama_penghargaan'];?></p> 
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <h2 class="mt-5">Statistik Total Data</h2>
                            <div class="counter_wrap">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single_counter text-center">
                                            <h3  class="counter">
                                                <?php $a = $this->db->query("SELECT *FROM tbl_master_wisata");
                                                $hasil= $a->num_rows();
                                                echo $hasil; 
                                                ?>
                                            </h3>
                                            <p>Wisata</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single_counter text-center">
                                            <h3 class="counter">
                                                <?php $a = $this->db->query("SELECT *FROM tbl_master_sarana");
                                                $hasil= $a->num_rows();
                                                echo $hasil; 
                                                ?>
                                            </h3>
                                            <p>Sarana</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single_counter text-center">
                                            <h3 class="counter">
                                                <?php $a = $this->db->query("SELECT *FROM tbl_master_budaya");
                                                $hasil= $a->num_rows();
                                                echo $hasil; 
                                                ?>
                                            </h3>
                                            <p>Budaya</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>