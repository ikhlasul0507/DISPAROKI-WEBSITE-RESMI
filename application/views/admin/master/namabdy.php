  <section class="content">
          <div class="box">
            <div class="box-header">
              <div class="row">
                <div class="col-xs-6"><h3 class="box-title"><b><?= $link.' '.$link1;?></b></h3><br>
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
                      <b>Video Sedang Tayang : </b>
                      <?php foreach ($data_bdy as $budaya): ?>
                      <?php if ($budaya->status_video =='1'){?>
                      <span class="blink"><?= $budaya->nama_master_budaya; ?></span>
                      <?php } ?>
                      <?php endforeach ?>
                      <br>
                      <b>Jumlah Budaya Populer : 
                        <?php $a = $this->db->query("SELECT *FROM tbl_master_budaya Where status_budaya='1'");
                        $hasil= $a->num_rows();
                        echo $hasil; 
                        ?></b>
                  <!-- notifikasi -->
                  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>">
                  </div>
                  <!-- end notifikasi -->
                </div>
              <div class="col-xs-6">
                <button type="submit" class="btn btn-primary btn-flat" title='Tambah' data-toggle="modal" data-target="#ModalaAdd"> <i class="fa fa-plus-square-o"></i> Tambah</button>
                <a class="btn btn-danger btn-flat" href=" <?= base_url();?>admin/excelbdy"><i class="fa  fa-file-excel-o"></i> Excel</a>
                <a class="btn btn-warning btn-flat float-right" type="button" href=" <?= base_url();?>admin/printbdy" target="blank"><i class="fa fa-print"></i> Print</a>
                <button type="submit" class="btn btn-success btn-flat" title='Tambah' data-toggle="modal" data-target="#modal-success"> <i class="fa  fa-arrows"></i> Ambil Koordinat</button>
                <!-- tools box -->
                                <div class="pull-right box-tools">
                                  <button type="button" class="btn btn-success btn-sm" data-widget="collapse" data-toggle="tooltip"
                                          title="Minimize">
                                    <i class="fa fa-minus"></i></button>
                                  <button type="button" class="btn btn-success btn-sm" data-widget="remove" data-toggle="tooltip"
                                          title="Close">
                                    <i class="fa fa-times"></i></button>
                                </div>
                                <!-- /. tools -->
              </div>
              </div>
            </div>
            <div class="box-body" id="printkec">
              <div class="table-responsive">
              <table id="example2" class="table table-striped table-bordered data table-responsive"  style="width:100%">
                <thead>
                <tr>
                  <th>ID BUDAYA</th>
                  <th>Kode Master Budaya</th>
                  <th>Jenis Budaya</th>
                  <th>Nama Kecamatan</th>
                  <th>Nama Desa</th>
                  <th>Nama Budaya</th>
                  <th>Deskripsi 1</th>
                  <th>Deskripsi 2</th>
                  <th>Deskripsi 3</th>
                  <th>Photo</th>
                  <th>Link Video</th>
                  <th>link Google</th>
                  <th>Latitude</th>
                  <th>Longtitude</th>
                  <th>Status Video</th>
                  <th>Status Budaya</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_bdy as $ws):?>
                <tr>
                  <td><?= $ws->id_master_budaya;?></td>
                  <td><?= $ws->kode_master_budaya;?></td>
                  <td><?= $ws->nama_budaya;?></td>
                  <td><?= $ws->nama_kecamatan;?></td>
                  <td><?= $ws->nama_desa;?></td>
                  <td><?= $ws->nama_master_budaya;?></td>
                  <td>
                    <?php 
                        $kalimat = $ws->deskripsi_budaya1;
                        $sub_kalimat = substr($kalimat,0,100);
                        echo $sub_kalimat.'.....';
                     ?>
                  </td>
                  <td>
                    <?php 
                        $kalimat = $ws->deskripsi_budaya2;
                        $sub_kalimat = substr($kalimat,0,100);
                        echo $sub_kalimat.'.....';
                     ?>
                  </td>
                  <td>
                     <?php 
                        $kalimat = $ws->deskripsi_budaya3;
                        $sub_kalimat = substr($kalimat,0,100);
                        echo $sub_kalimat.'.....';
                     ?> 
                  </td>
                  <td>
                    <a href="<?= base_url();?>assets/admin/img/master_budaya/<?= $ws->photo_budaya;?>" target="blank">
                    <img src="<?= base_url();?>assets/admin/img/master_budaya/<?= $ws->photo_budaya;?>" style="width: 50px;height: 50px;border-radius: 100%;background-color: #3c8dbc" />
                    </a>
                  </td>
                  <td align="center">
                    <a class="btn btn-danger" href="<?= $ws->link_video;?>" target="blank">
                      <i class="fa  fa-youtube"></i>
                    </a>
                    <br>
                    <br>
                    
                  </td>
                  <td align="center">
                    <a class="btn btn-success" href="<?= $ws->link_google;?>" target="blank">
                      <i class="fa fa- fa-globe"></i>
                    </a>
                    <br>
                    <br>
                    <a href="<?= base_url('home/Qrcodebud/'.$ws->id_master_budaya);?>" target="blank">
                        <!-- <img src="<?= base_url('tes.png');?>" style="width: 200px;height: 200px"> -->
                        <button class="btn btn-primary">SCAN QR PETA</button>
                        </a>
                  </td>
                  <td><?= $ws->latitude;?></td>
                  <td><?= $ws->longtitude;?></td>
                  <td>
                    <?php if ($ws->status_video=='1') { ?>
                      <b> Video Sedang Tayang.... </b>
                      <br> 
                      <a class="btn btn-danger" href="<?= base_url();?>admin/tayangdilokbud/<?=$ws->id_master_budaya;?>">Tayang Di Lokal</a>
                    <?php }else{ ?>
                      <b> Video Lokal !!!</b>
                      <br>
                      <a class="btn btn-warning" href="<?= base_url();?>admin/tayangkanbud/<?=$ws->id_master_budaya;?>">Tayangkan</a>
                    <?php }?>
                  </td>
                  <td>
                    <?php if ($ws->status_budaya=='1') { ?>
                      <b> Budaya Populer </b>
                      <br> 
                      <a class="btn btn-danger" href="<?= base_url();?>admin/ubahbiasabud/<?=$ws->id_master_budaya;?>">Ubah Biasa</a>
                    <?php }else{ ?>
                      <b> Budaya Biasa</b>
                      <br>
                      <a class="btn btn-warning" href="<?= base_url();?>admin/ubahpopulerbud/<?=$ws->id_master_budaya;?>">Ubah Populer</a>
                    <?php }?>
                  </td>
                  <td> 
                    <a class="btn btn-social-icon btn-bitbucket"  title='Edit' data-toggle="modal" data-target="#modal-edit<?php echo $ws->id_master_budaya;?>" type="button"><i class="fa fa-edit "></i></a>
                    <a class="btn btn-social-icon btn-google" style="margin-right: 5px"  title='Hapus' data-toggle="modal" data-target="#modal-danger<?php echo $ws->id_master_budaya;?>"><i class="fa fa-trash"></i></a></td>
                </tr>
               <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID BUDAYA</th>
                  <th>Kode Master Budaya</th>
                  <th>Jenis Budaya</th>
                  <th>Nama Kecamatan</th>
                  <th>Nama Desa</th>
                  <th>Nama Budaya</th>
                  <th>Deskripsi 1</th>
                  <th>Deskripsi 2</th>
                  <th>Deskripsi 3</th>
                  <th>Photo</th>
                  <th>Link Video</th>
                  <th>link Google</th>
                  <th>Latitude</th>
                  <th>Longtitude</th>
                  <th>Status Video</th>
                  <th>Status Budaya</th>
                  <th>Aksi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

    </section>
    <!-- /.content -->

        <?php foreach ($data_bdy as $ws) :

          $id_master_budaya= $ws->id_master_budaya;
          $kode_master_budaya = $ws->kode_master_budaya;
          $kode_budaya= $ws->kode_budaya;
          $kode_kecamatan= $ws->kode_kecamatan;
          $kode_desa= $ws->kode_desa;
          $nama_master_budaya= $ws->nama_master_budaya;
          $deskripsi_budaya1= $ws->deskripsi_budaya1;
          $deskripsi_budaya2= $ws->deskripsi_budaya2;
          $deskripsi_budaya3= $ws->deskripsi_budaya3;
          $photo_budaya= $ws->photo_budaya;
          $kode_budaya= $ws->kode_budaya;
          $link_video= $ws->link_video;
          $link_google= $ws->link_google;
          $latitude= $ws->latitude;
          $longtitude= $ws->longtitude;
          $status_video= $ws->status_video;
          $status_budaya = $ws->status_budaya;
        ?>
    <!-- modal edit -->
     <div class="modal modal-info fade" id="modal-edit<?php echo $ws->id_master_budaya;?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Budaya</h4>
              </div>
                  <div class="modal-body">
                        <form role="form" action=" <?= base_url();?>admin/ubahbdy/<?=$ws->id_master_budaya;?>" method="post" enctype="multipart/form-data">
                          <div class="box box-primary"> 
                          <div class="box-body">
                          <div class="nav-tabs-custom">
                              <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_3" data-toggle="tab">Formulir A</a></li>
                              </ul>
                              <div class="tab-content">
                                <div class="tab-pane active" id="tab_3">
                                <div class="row">
                              <div class="col-md-6">
                                
                                  <input type="hidden" name="id_master_budaya" value="<?= $ws->id_master_budaya;?>"> 
                                  <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-file-text"></i></span>   
                                    <input type="text" class="form-control" value="<?= $ws->kode_master_budaya; ?>" placeholder="Kode Master Budaya" onkeyup="this.value = this.value.toUpperCase()" name="kode_master_budaya" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>
                                </div>
                               
                              </div>
                              <div class="col-md-6">
                                <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-street-view"></i></span>
                                  <select class="form-control select2" style="width: 100%;" name="kode_budaya" required oninvalid="this.setCustomValidity('Data Harus Dipilih !')" oninput="setCustomValidity('')">
                                    <option selected disabled="disabled" value="">--Jenis Budaya--</option>
                                    <?php foreach ($data_bud as $k):?>
                                    <?php 
                                     if ($ws->kode_budaya==$k['kode_budaya']) {
                                         $select="selected";
                                        }else{
                                         $select="";
                                        }
                                        echo "<option $select value =".$k['kode_budaya'].">".$k['nama_budaya']."</option>";
                                     ?>
                                    <?php endforeach; ?>
                                  </select>
                                  </div>
                              </div>
                            </div><br>
                            <div class="row">
                              <div class="col-xs-6">
                                 <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-file-text-o"></i></span>
                                  <select class="form-control select2" id="kecamatan" style="width: 100%;" name="kode_kecamatan" required oninvalid="this.setCustomValidity('Data Harus Dipilih !')" oninput="setCustomValidity('')">
                                    <option selected disabled="disabled" value="">--Nama Kecamatan--</option>
                                    <?php foreach ($data_kec as $kec):?>
                                    <?php 
                                     if ($ws->kode_kecamatan==$kec['kode_kecamatan']) {
                                         $select="selected";
                                        }else{
                                         $select="";
                                        }
                                        echo "<option $select value =".$kec['kode_kecamatan'].">".$kec['nama_kecamatan']."</option>";
                                     ?>

                                    <?php endforeach; ?>
                                  </select>
                                  </div>
                              </div>
                              <div class="col-xs-6">
                                 <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-file-text-o"></i></span>
                                  <select class="form-control select2" id="desa" style="width: 100%;" name="kode_desa" required oninvalid="this.setCustomValidity('Data Harus Dipilih !')" oninput="setCustomValidity('')">
                                    <option selected disabled="disabled" value="">--Nama Desa--</option>
                                    <?php foreach ($data_joinkecdes as $jkd):?>

                                     <?php 
                                     if ($ws->kode_desa==$jkd->kode_desa) {
                                         $select="selected";
                                        }else{
                                         $select="";
                                        }
                                        echo "<option $select value =".$jkd->kode_desa.">".$jkd->nama_desa."</option>";
                                     ?>

                                    <?php endforeach; ?>
                                  </select>
                                </div>  
                              </div>
                            </div>
                           
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-file-text"></i></span>   
                              <input type="text" class="form-control" value="<?= $ws->nama_master_budaya; ?>" placeholder="Nama Master Budaya" onkeyup="this.value = this.value.toUpperCase()" name="nama_master_budaya" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                               <textarea placeholder="Deskripsi Budaya" style="width: 100%; height: 80px; font-size: 14px;padding: 10px;color: black" name="deskripsi_budaya1" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus><?= $ws->deskripsi_budaya1; ?>"</textarea>
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                               <textarea placeholder="Deskripsi Budaya" style="width: 100%; height: 80px; font-size: 14px;padding: 10px;color: black" name="deskripsi_budaya2" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus><?= $ws->deskripsi_budaya2; ?>"</textarea>
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                               <textarea placeholder="Deskripsi Budaya" style="width: 100%; height: 80px; font-size: 14px;padding: 10px;color: black" name="deskripsi_budaya3" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus><?= $ws->deskripsi_budaya3; ?>"</textarea>
                            </div>
                            <br>
                          </div>
                          <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                <div class="btn btn-primary btn-file">
                                <i class="fa fa-paperclip"></i> Masukan Photo Budaya
                                <input type="file" name="photo_budaya" id="userfile" value="<?= $ws->photo_budaya; ?>" onchange="tampilkanPreview(this,'preview')">
                              </div>
                              <p class="help-block">Max. 3MB</p>
                              
                              </div>
                              </div>
                              <div class="col-md-8" >
                                <img  src="<?= base_url();?>assets/admin/img/master_budaya/<?= $ws->photo_budaya;?>" id="preview" style="width: 100px;height: 100px;border-radius: 100%;background-color: #3c8dbc" />

                              </div>
                            </div>
                            <br>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="fa  fa-play-circle"></i></span>   
                                  <input type="text" class="form-control" placeholder="Link Video" name="link_video" value="<?= $ws->link_video; ?>" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-google-plus"></i></span>   
                                  <input type="text" class="form-control" placeholder="Link Google" value="<?= $ws->link_google; ?>" name="link_google" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>
                                </div>
                              </div>
                            </div><br>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-arrows"></i></span>   
                                  <input type="text" class="form-control" placeholder="Latitude" value="<?= $ws->latitude; ?>" name="latitude" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-arrows"></i></span>   
                                  <input type="text" class="form-control" placeholder="Longtitude" value="<?= $ws->longtitude; ?>" name="longtitude" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>
                                  <input type="hidden" name="status_video" value="<?= $ws->status_video; ?>">
                                  <input type="hidden" name="status_budaya" value="<?= $ws->status_budaya ?>">
                                </div>
                              </div>
                            </div>
                            <br>
                          </div>   
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline" data-dismiss="modal">Tutup</button>
                  <button type="submit" class="btn btn-outline" id="simpan">Edit</button>
                </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <?php endforeach;?>

        <!-- modal hapus -->
        <?php foreach ($data_bdy as $ws) :
          $id_master_budaya= $ws->id_master_budaya;
          $photo_budaya = $ws->photo_budaya;
        ?>
         <div class="modal modal-danger fade" id="modal-danger<?php echo $ws->id_master_budaya;?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Apakah Anda Yakin Ingin Menghapus ? <?= $ws->nama_master_budaya;?></h4>
              </div>
              <div class="modal-body">
                <p>Tekan "Hapus" Jika Yakin</p>
                <p>Tekan "Tidak" Jika Tidak Yakin</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline" data-dismiss="modal">Tidak</button>
                <a type="submit" href="<?= base_url();?>admin/hapusbudaya/<?= $ws->id_master_budaya;?>" class="btn btn-outline" tombol-hapus>Hapus</a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
       <?php endforeach;?>
  <!-- modal tambah -->
  
     <div class="modal modal-info fade" id="ModalaAdd">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Tambah Budaya</h4>
                </div>
                  <div class="modal-body">
                        <form role="form" action=" <?= base_url();?>admin/tambahmbud" method="post" enctype="multipart/form-data">    
                          <div class="box box-primary"> 
                          <div class="box-body">
                             <div class="nav-tabs-custom">
                                
                              <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_1" data-toggle="tab">Formulir A</a></li>
                                <li><a href="#tab_2" data-toggle="tab">Formulir B</a></li>
                              </ul>
                              <div class="tab-content">
                                <div class="tab-pane active" id="tab_1">
                                   <div class="row">
                              <div class="col-md-6">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-font"></i></span>   
                                  <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase()" placeholder="Kode Master Budaya" name="kode_master_budaya" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-street-view"></i></span>
                                  <select class="form-control select2" style="width: 100%;" name="kode_budaya" required oninvalid="this.setCustomValidity('Data Harus Dipilih !')" oninput="setCustomValidity('')">
                                    <option selected disabled="disabled" value="">--Jenis Budaya--</option>
                                    <?php foreach ($data_bud as $k):?>
                                    <option value="<?= $k['kode_budaya'];?>"><?= $k['nama_budaya'];?></option>
                                    <?php endforeach; ?>
                                  </select>
                                  </div>
                              </div>
                            </div><br>
                            <div class="row">
                              <div class="col-xs-6">
                                 <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-file-text-o"></i></span>
                                  <select class="form-control select2" id="kecamatan" style="width: 100%;" name="kode_kecamatan" required oninvalid="this.setCustomValidity('Data Harus Dipilih !')" oninput="setCustomValidity('')">
                                    <option selected disabled="disabled" value="">--Nama Kecamatan--</option>
                                    <?php foreach ($data_kec as $kec):?>
                                    <option value="<?= $kec['kode_kecamatan'];?>"><?= $kec['nama_kecamatan'];?></option>
                                    <?php endforeach; ?>
                                  </select>
                                  </div>
                              </div>
                              <div class="col-xs-6">
                                 <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-file-text-o"></i></span>
                                  <select class="form-control select2" id="desa" style="width: 100%;" name="kode_desa" required oninvalid="this.setCustomValidity('Data Harus Dipilih !')" oninput="setCustomValidity('')">
                                    <option selected disabled="disabled" value="">--Nama Desa--</option>
                                    <?php foreach ($data_joinkecdes as $jkd):?>
                                    <option value="<?= $jkd->kode_desa;?>"><?= $jkd->nama_desa;?></option>
                                    <?php endforeach; ?>
                                  </select>
                                </div>  
                              </div>
                            </div>
                           
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-file-text"></i></span>   
                              <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase()" placeholder="Nama Master Budaya" name="nama_master_budaya" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                               <textarea placeholder="Deskripsi Budaya" style="width: 100%; height: 80px; font-size: 14px;padding: 10px;color: black" name="deskripsi_budaya1" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus></textarea>
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                               <textarea placeholder="Deskripsi Budaya" style="width: 100%; height: 80px; font-size: 14px;padding: 10px;color: black" name="deskripsi_budaya2" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus></textarea>
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                               <textarea placeholder="Deskripsi Budaya" style="width: 100%; height: 80px; font-size: 14px;padding: 10px;color: black" name="deskripsi_budaya3" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus></textarea>
                            </div>
                            <br>
                                 
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_2">
                                  <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                <div class="btn btn-primary btn-file">
                                <i class="fa fa-paperclip"></i> Masukan Photo Budaya
                                <input type="file" name="photo_budaya" id="userfile" onchange="tampilkanPreview(this,'preview')" required>
                              </div>
                              <p class="help-block">Max. 3MB</p>
                              
                              </div>
                              </div>
                              <div class="col-md-8" >
                                <img id="preview" style="width: 100px;height: 100px;border-radius: 100%;background-color: #3c8dbc" />

                              </div>
                            </div>
                            <br>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="fa  fa-play-circle"></i></span>   
                                  <input type="text" class="form-control" placeholder="Link Video" name="link_video" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-google-plus"></i></span>   
                                  <input type="text" class="form-control" placeholder="Link Google" name="link_google" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>
                                </div>
                              </div>
                            </div><br>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-arrows"></i></span>   
                                  <input type="text" class="form-control" placeholder="Latitude" name="latitude" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-arrows"></i></span>   
                                  <input type="text" class="form-control" placeholder="Longtitude" name="longtitude" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>
                                  <input type="hidden" name="status_video" value="0">
                                  <input type="hidden" name="status_budaya" value="0">
                                </div>
                              </div>
                            </div><br>

                                </div>
                               
                              </div>
                              <!-- /.tab-content -->
                            </div>

                           
                           
                          </div>
                      </div>
                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline" data-dismiss="modal">Tutup</button>
                  <button type="submit" class="btn btn-outline" id="simpan">Simpan</button>
                </div>
              </form>
              <!-- menampilkan Photo Sebelum Di Upload -->
              <script type="text/javascript">
                   
                   function tampilkanPreview(userfile,idpreview)
                    {
                      var gb = userfile.files;
                      for (var i = 0; i < gb.length; i++)
                      {
                       
                        var gbPreview = gb[i];
                        var imageType = /image.*/;
                        var preview=document.getElementById(idpreview);
                        var reader = new FileReader();
                        if (gbPreview.type.match(imageType))
                        {
                          //jika tipe data sesuai
                          preview.file = gbPreview;
                          reader.onload = (function(element)
                          {
                            return function(e)
                            {
                              element.src = e.target.result;
                            };
                          })(preview);
                            
                          //membaca data URL gambar
                          reader.readAsDataURL(gbPreview);
                       
                      }
                          else
                          {
                            //jika tipe data tidak sesuai
                            alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
                          }
                      }
                    }
              </script>

            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

        <!-- modal untuk ambil Koordinat -->
         <div class="modal modal-success fade" id="modal-success">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ambil Koordinat Peta</h4><p>Klik Lokasi Dan Akan Tampil Titik Koordinat</p>
              </div>
              <!-- <div class="modal-body"> -->
                
                 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
                   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
                   crossorigin=""/>
                   <!-- Make sure you put this AFTER Leaflet's CSS -->
                 <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
                   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
                   crossorigin=""></script>
                <div id="mapid"></div>
                 <style type="text/css">
                  #mapid { height: 400px; }
                 </style>
                 <script type="text/javascript">
                    //setting map koordinat
                    var mapOptions = {
                        center: [-3.3926667, 104.8300041],
                        zoom: 13
                      }
                    var mymap = new L.map('mapid', mapOptions);
                   // var mymap = L.map('mapid').setView([-3.3926667, 104.8300041], 13);
                    
                    //setting token
                    ACCESS_TOKEN = 'pk.eyJ1IjoiaWtobGFzdWwwNTA3IiwiYSI6ImNrOTY3cDJkNTBoeWYzcGwyeXhzMWR6c2wifQ.c3kroaKoyobXOSngsVKOTw';
                    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token='+ ACCESS_TOKEN, {
                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                    maxZoom: 18,
                    id: 'mapbox/streets-v11',
                    tileSize: 512,
                    zoomOffset: -1,
                    accessToken: 'your.mapbox.access.token'
                  }).addTo(mymap);

                    //membuat marker
                    var marker = L.marker([-3.3926667, 104.8300041]).addTo(mymap);

                    //popup dari marker
                    marker.bindPopup("<img src='../assets/users/gambar/logo.jpg' width='200px' height='150px'><br><b>Dinas Pariwisata Dan Kebudayaan</b><br>Ogan Komering Ilir.");
                  
                  //fungsi untuk amibil koordinat langsung
                  var popup = L.popup();

                  function onMapClick(e) {
                    popup
                        .setLatLng(e.latlng)
                        .setContent("Titik Koordinat nya - " + e.latlng.toString())
                        .openOn(mymap);
                  }

                  mymap.on('click', onMapClick);

                   </script>
              <!-- </div> -->
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        
<script src="<?= base_url('assets/admin/');?>bower_components/jquery/dist/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

 