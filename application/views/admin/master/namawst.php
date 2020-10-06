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
                      <?php foreach ($data_wst as $wisata): ?>
                      <?php if ($wisata->status_video =='1'){?>
                      <span class="blink"><?= $wisata->nama_master_wisata; ?></span>
                      <?php } ?>
                      <?php endforeach ?>
                      <br>
                      <b>Jumlah Wisata Populer : 
                        <?php $a = $this->db->query("SELECT *FROM tbl_master_wisata Where status_wisata='1'");
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
                <a class="btn btn-danger btn-flat" href=" <?= base_url();?>admin/excelwst"><i class="fa  fa-file-excel-o"></i> Excel</a>
                <a class="btn btn-warning btn-flat float-right" type="button" href=" <?= base_url();?>admin/printwst" target="blank"><i class="fa fa-print"></i> Print</a>
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
                  <th>ID WISATA</th>
                  <th>Kode Master Wisata</th>
                  <th>Jenis Wisata</th>
                  <th>Nama Kecamatan</th>
                  <th>Nama Desa</th>
                  <th>Nama Wisata</th>
                  <th>Deskripsi 1</th>
                  <th>Deskripsi 2</th>
                  <th>Deskripsi 3</th>
                  <th>Photo</th>
                  <th>Link Video</th>
                  <th>link Google</th>
                  <th>Latitude</th>
                  <th>Longtitude</th>
                  <th>Status Video</th>
                  <th>Status Wisata</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_wst as $ws):?>
                <tr>
                  <td><?= $ws->id_master_wisata;?></td>
                  <td><?= $ws->kode_master_wisata;?></td>
                  <td><?= $ws->nama_wisata;?></td>
                  <td><?= $ws->nama_kecamatan;?></td>
                  <td><?= $ws->nama_desa;?></td>
                  <td><?= $ws->nama_master_wisata;?></td>
                  <td>
                    <?php 
                        $kalimat = $ws->deskripsi_wisata1;
                        $sub_kalimat = substr($kalimat,0,100);
                        echo $sub_kalimat.'.....';
                     ?>
                  </td>
                  <td>
                    <?php 
                        $kalimat = $ws->deskripsi_wisata2;
                        $sub_kalimat = substr($kalimat,0,100);
                        echo $sub_kalimat.'.....';
                     ?>
                  </td>
                  <td>
                     <?php 
                        $kalimat = $ws->deskripsi_wisata3;
                        $sub_kalimat = substr($kalimat,0,100);
                        echo $sub_kalimat.'.....';
                     ?> 
                  </td>
                  <td>
                    <a href="<?= base_url();?>assets/admin/img/master_wisata/<?= $ws->photo_wisata;?>" target="blank">
                    <img src="<?= base_url();?>assets/admin/img/master_wisata/<?= $ws->photo_wisata;?>" style="width: 50px;height: 50px;border-radius: 100%;background-color: #3c8dbc" />
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
                    <a href="<?= base_url('home/Qrcode/'.$ws->id_master_wisata);?>" target="blank">
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
                      <a class="btn btn-danger" href="<?= base_url();?>admin/tayangdilokwis/<?=$ws->id_master_wisata;?>">Tayang Di Lokal</a>
                    <?php }else{ ?>
                      <b> Video Lokal !!!</b>
                      <br>
                      <a class="btn btn-warning" href="<?= base_url();?>admin/tayangkanwis/<?=$ws->id_master_wisata;?>">Tayangkan</a>
                    <?php }?>
                  </td>
                  <td>
                    <?php if ($ws->status_wisata=='1') { ?>
                      <b> Wisata Populer </b>
                      <br> 
                      <a class="btn btn-danger" href="<?= base_url();?>admin/ubahbiasawis/<?=$ws->id_master_wisata;?>">Ubah Biasa</a>
                    <?php }else{ ?>
                      <b> Wisata Biasa</b>
                      <br>
                      <a class="btn btn-warning" href="<?= base_url();?>admin/ubahpopulerwis/<?=$ws->id_master_wisata;?>">Ubah Populer</a>
                    <?php }?>
                  </td>
                  <td> 
                    <a class="btn btn-social-icon btn-bitbucket"  title='Edit' data-toggle="modal" data-target="#modal-edit<?php echo $ws->id_master_wisata;?>" type="button"><i class="fa fa-edit "></i></a>
                    <a class="btn btn-social-icon btn-google" style="margin-right: 5px"  title='Hapus' data-toggle="modal" data-target="#modal-danger<?php echo $ws->id_master_wisata;?>"><i class="fa fa-trash"></i></a></td>
                </tr>
               <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                 <th>ID WISATA</th>
                  <th>Kode Master Wisata</th>
                  <th>Jenis Wisata</th>
                  <th>Nama Kecamatan</th>
                  <th>Nama Desa</th>
                  <th>Nama Wisata</th>
                  <th>Deskripsi 1</th>
                  <th>Deskripsi 2</th>
                  <th>Deskripsi 3</th>
                  <th>Photo</th>
                  <th>Link Video</th>
                  <th>link Google</th>
                  <th>Latitude</th>
                  <th>Longtitude</th>
                  <th>Status Video</th>
                  <th>Status Wisata</th>
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

        <?php foreach ($data_wst as $ws) :

          $id_master_wisata= $ws->id_master_wisata;
          $kode_master_wisata = $ws->kode_master_wisata;
          $kode_wisata= $ws->kode_wisata;
          $kode_kecamatan= $ws->kode_kecamatan;
          $kode_desa= $ws->kode_desa;
          $nama_master_wisata= $ws->nama_master_wisata;
          $deskripsi_wisata1= $ws->deskripsi_wisata1;
          $deskripsi_wisata2= $ws->deskripsi_wisata2;
          $deskripsi_wisata3= $ws->deskripsi_wisata3;
          $photo_wisata= $ws->photo_wisata;
          $kode_wisata= $ws->kode_wisata;
          $link_video= $ws->link_video;
          $link_google= $ws->link_google;
          $latitude= $ws->latitude;
          $longtitude= $ws->longtitude;
          $status_video= $ws->status_video;
          $status_wisata = $ws->status_wisata;
        ?>
    <!-- modal edit -->
     <div class="modal modal-info fade" id="modal-edit<?php echo $ws->id_master_wisata;?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Wisata</h4>
              </div>
                  <div class="modal-body">
                        <form role="form" action=" <?= base_url();?>admin/ubahwst/<?=$ws->id_master_wisata;?>" method="post" enctype="multipart/form-data">
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
                                
                                  <input type="hidden" name="id_master_wisata" value="<?= $ws->id_master_wisata;?>"> 
                                  <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-file-text"></i></span>   
                                    <input type="text" class="form-control" value="<?= $ws->kode_master_wisata; ?>" placeholder="Kode Master Wisata" onkeyup="this.value = this.value.toUpperCase()" name="kode_master_wisata" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>
                                </div>
                               
                              </div>
                              <div class="col-md-6">
                                <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-street-view"></i></span>
                                  <select class="form-control select2" style="width: 100%;" name="kode_wisata" required oninvalid="this.setCustomValidity('Data Harus Dipilih !')" oninput="setCustomValidity('')">
                                    <option selected disabled="disabled" value="">--Jenis Wisata--</option>
                                    <?php foreach ($data_wis as $k):?>
                                    <?php 
                                     if ($ws->kode_wisata==$k['kode_wisata']) {
                                         $select="selected";
                                        }else{
                                         $select="";
                                        }
                                        echo "<option $select value =".$k['kode_wisata'].">".$k['nama_wisata']."</option>";
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
                              <input type="text" class="form-control" value="<?= $ws->nama_master_wisata; ?>" placeholder="Nama Master Wisata" onkeyup="this.value = this.value.toUpperCase()" name="nama_master_wisata" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                               <textarea placeholder="Deskripsi Wisata" style="width: 100%; height: 80px; font-size: 14px;padding: 10px;color: black" name="deskripsi_wisata1" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus><?= $ws->deskripsi_wisata1; ?>"</textarea>
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                               <textarea placeholder="Deskripsi Wisata" style="width: 100%; height: 80px; font-size: 14px;padding: 10px;color: black" name="deskripsi_wisata2" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus><?= $ws->deskripsi_wisata2; ?>"</textarea>
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                               <textarea placeholder="Deskripsi Wisata" style="width: 100%; height: 80px; font-size: 14px;padding: 10px;color: black" name="deskripsi_wisata3" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus><?= $ws->deskripsi_wisata3; ?>"</textarea>
                            </div>
                            <br>
                          </div>
                          <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                <div class="btn btn-primary btn-file">
                                <i class="fa fa-paperclip"></i> Masukan Photo Wisata
                                <input type="file" name="photo_wisata" id="userfile" value="<?= $ws->photo_wisata; ?>" onchange="tampilkanPreview(this,'preview')">
                              </div>
                              <p class="help-block">Max. 3MB</p>
                              
                              </div>
                              </div>
                              <div class="col-md-8" >
                                <img  src="<?= base_url();?>assets/admin/img/master_wisata/<?= $ws->photo_wisata;?>" id="preview" style="width: 100px;height: 100px;border-radius: 100%;background-color: #3c8dbc" />

                              </div>
                            </div>
                            <br>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="fa  fa-play-circle"></i></span>   
                                  <input type="text" class="form-control" placeholder="Link Video" name="link_video" value="<?= $ws->link_video; ?>"  autocomplete="off" autofocus>
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
                                  <input type="hidden" name="status_wisata" value="<?= $ws->status_wisata ?>">
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
        <?php foreach ($data_wst as $ws) :
          $id_master_wisata= $ws->id_master_wisata;
          $photo_wisata = $ws->photo_wisata;
        ?>
         <div class="modal modal-danger fade" id="modal-danger<?php echo $ws->id_master_wisata;?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Apakah Anda Yakin Ingin Menghapus ? <?= $ws->nama_master_wisata;?></h4>
              </div>
              <div class="modal-body">
                <p>Tekan "Hapus" Jika Yakin</p>
                <p>Tekan "Tidak" Jika Tidak Yakin</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline" data-dismiss="modal">Tidak</button>
                <a type="submit" href="<?= base_url();?>admin/hapuswisata/<?= $ws->id_master_wisata;?>" class="btn btn-outline" tombol-hapus>Hapus</a>
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
                  <h4 class="modal-title">Tambah Wisata</h4>
                </div>
                  <div class="modal-body">
                        <form role="form" action=" <?= base_url();?>admin/tambahmwis" method="post" enctype="multipart/form-data">    
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
                                  <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase()" placeholder="Kode Master Wisata" name="kode_master_wisata" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-street-view"></i></span>
                                  <select class="form-control select2" style="width: 100%;" name="kode_wisata" required oninvalid="this.setCustomValidity('Data Harus Dipilih !')" oninput="setCustomValidity('')">
                                    <option selected disabled="disabled" value="">--Jenis Wisata--</option>
                                    <?php foreach ($data_wis as $k):?>
                                    <option value="<?= $k['kode_wisata'];?>"><?= $k['nama_wisata'];?></option>
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
                              <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase()" placeholder="Nama Master Wisata" name="nama_master_wisata" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                               <textarea placeholder="Deskripsi Wisata" style="width: 100%; height: 80px; font-size: 14px;padding: 10px;color: black" name="deskripsi_wisata1" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus></textarea>
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                               <textarea placeholder="Deskripsi Wisata" style="width: 100%; height: 80px; font-size: 14px;padding: 10px;color: black" name="deskripsi_wisata2" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus></textarea>
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                               <textarea placeholder="Deskripsi Wisata" style="width: 100%; height: 80px; font-size: 14px;padding: 10px;color: black" name="deskripsi_wisata3" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus></textarea>
                            </div>
                            <br>
                                 
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_2">
                                  <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                <div class="btn btn-primary btn-file">
                                <i class="fa fa-paperclip"></i> Masukan Photo Wisata
                                <input type="file" name="photo_wisata" id="userfile" onchange="tampilkanPreview(this,'preview')" required>
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
                                  <input type="text" class="form-control" placeholder="Link Video" name="link_video"  autocomplete="off" autofocus>
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
                                  <input type="hidden" name="status_wisata" value="0">
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

 