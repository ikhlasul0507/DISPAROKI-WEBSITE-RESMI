  <section class="content">
          <div class="box">
            <div class="box-header">
              <div class="row">
                <div class="col-xs-8"><h3 class="box-title"><b><?= $link.' '.$link1;?></b></h3><br>
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
                     <!--  <b>Video Sedang Tayang : </b>
                      <?php foreach ($data_srn as $sarana): ?>
                      <?php if ($sarana->status_sarana =='1'){?>
                      <span class="blink"><?= $sarana->nama_master_sarana; ?></span>
                      <?php } ?>
                      <?php endforeach ?> -->
                      <b>Jumlah Berita Tayang : 
                        <?php $a = $this->db->query("SELECT *FROM tbl_berita Where status_berita='1'");
                        $hasil= $a->num_rows();
                        echo $hasil; 
                        ?></b>
                  <!-- notifikasi -->
                  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>">
                  </div>
                  <!-- end notifikasi -->
                </div>
              <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-flat" title='Tambah' data-toggle="modal" data-target="#ModalaAdd"> <i class="fa fa-plus-square-o"></i> Tambah</button>
                <a class="btn btn-danger btn-flat" href=" <?= base_url();?>admin/excelbrt"><i class="fa  fa-file-excel-o"></i> Excel</a>
                <a class="btn btn-warning btn-flat float-right" type="button" href=" <?= base_url();?>admin/printbrt" target="blank"><i class="fa fa-print"></i> Print</a>
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
                  <th>ID Sarana</th>
                  <th>Kode Berita</th>
                  <th>Nama Kecamatan</th>
                  <th>Nama Desa</th>
                  <th>Jenis Wisata</th>
                  <th>Jenis Sarana</th>
                  <th>Waktu Berita</th>
                  <th>Judul Berita</th>
                  <th>Photo Berita</th>
                  <th>Deskripsi 1</th>
                  <th>Deskripsi 2</th>
                  <th>Deskripsi 3</th>
                  <th>Status Berita</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_brt as $br):?>
                <tr>
                  <td><?= $br->id_berita;?></td>
                  <td><?= $br->kode_berita;?></td>
                  <td><?= $br->nama_kecamatan;?></td>
                  <td><?= $br->nama_desa;?></td>
                  <td><?= $br->nama_wisata;?></td>
                  <td><?= $br->nama_sarana;?></td>
                  <td><?= $br->waktu_berita;?></td>
                  <td><?= $br->judul_berita;?></td>
                  <td>
                    <a href="<?= base_url();?>assets/admin/img/berita/<?= $br->photo_berita;?>" target="blank">
                    <img src="<?= base_url();?>assets/admin/img/berita/<?= $br->photo_berita;?>" style="width: 50px;height: 50px;border-radius: 100%;background-color: #3c8dbc" />
                    </a>
                  </td>
                  <td>
                    <?php 
                        $kalimat = $br->deskripsiberita1;
                        $sub_kalimat = substr($kalimat,0,10);
                        echo $sub_kalimat.'.....';
                     ?>
                  </td>
                  <td>
                    <?php 
                        $kalimat = $br->deskripsiberita2;
                        $sub_kalimat = substr($kalimat,0,10);
                        echo $sub_kalimat.'.....';
                     ?>
                  </td>
                  <td>
                     <?php 
                        $kalimat = $br->deskripsiberita3;
                        $sub_kalimat = substr($kalimat,0,10);
                        echo $sub_kalimat.'.....';
                     ?> 
                  </td> 
                  <td>
                    <?php if ($br->status_berita=='1') { ?>
                      <b> Berita Sedang Tayang.... </b>
                      <br> 
                      <a class="btn btn-danger" href="<?= base_url();?>admin/tayangdilokberita/<?=$br->id_berita;?>">Tayang Di Lokal</a>
                    <?php }else{ ?>
                      <b> Berita Lokal !!!</b>
                      <br>
                      <a class="btn btn-warning" href="<?= base_url();?>admin/tayangkanberita/<?=$br->id_berita;?>">Tayangkan</a>
                    <?php }?><br>
                  </td>
                  <td> 
                    <a class="btn btn-social-icon btn-bitbucket"  title='Edit' data-toggle="modal" data-target="#modal-edit<?php echo $br->id_berita;?>" type="button"><i class="fa fa-edit "></i></a>
                    <a class="btn btn-social-icon btn-google" style="margin-right: 5px"  title='Hapus' data-toggle="modal" data-target="#modal-danger<?php echo $br->id_berita;?>"><i class="fa fa-trash"></i></a></td>
                </tr>
               <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID Sarana</th>
                  <th>Kode Berita</th>
                  <th>Nama Kecamatan</th>
                  <th>Nama Desa</th>
                  <th>Jenis Wisata</th>
                  <th>Jenis Sarana</th>
                  <th>Waktu Berita</th>
                  <th>Judul Berita</th>
                  <th>Photo Berita</th>
                  <th>Deskripsi 1</th>
                  <th>Deskripsi 2</th>
                  <th>Deskripsi 3</th>
                  <th>Status Berita</th>
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

        <?php foreach ($data_brt as $br) :

          $id_berita= $br->id_berita;
          $kode_berita = $br->kode_berita;
          $kode_kecamatan= $br->kode_kecamatan;
          $kode_desa= $br->kode_desa;
          $kode_wisata= $br->kode_wisata;
          $kode_sarana= $br->kode_sarana;
          $waktu_berita= $br->waktu_berita;
          $judul_berita= $br->judul_berita;
          $photo_berita= $br->photo_berita;
          $deskripsiberita1= $br->deskripsiberita1;
          $deskripsiberita2= $br->deskripsiberita2;
          $deskripsiberita3= $br->deskripsiberita3;
          $status_berita= $br->status_berita;
        ?>
    <!-- modal edit -->
     <div class="modal modal-info fade" id="modal-edit<?php echo $br->id_berita;?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Berita</h4>
              </div>
                  <div class="modal-body">
                        <form role="form" action=" <?= base_url();?>admin/ubahbrt/<?=$br->id_berita;?>" method="post" enctype="multipart/form-data">
                          <div class="box box-primary"> 
                          <div class="box-body">
                          <div class="nav-tabs-custom">
                           <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_1" data-toggle="tab">Formulir A</a></li>
                              </ul>
                              <div class="tab-content">
                            <div class="tab-pane active" id="tab_1">
                              <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-font"></i></span>   
                              <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase()" placeholder="Kode Berita" name="kode_berita" value="<?= $br->kode_berita;?>" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>
                            </div>
                            <br>
                              <div class="row">
                               <div class="col-md-6">
                                <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-street-view"></i></span>
                                  <select class="form-control select2" style="width: 100%;" name="kode_wisata" required oninvalid="this.setCustomValidity('Data Harus Dipilih !')" oninput="setCustomValidity('')">
                                    <option selected disabled="disabled" value="">--Jenis Wisata--</option>
                                    <?php foreach ($data_wis as $k):?>
                                    
                                    <?php 
                                     if ($br->kode_wisata==$k['kode_wisata']) {
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
                              <div class="col-md-6">
                                <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-street-view"></i></span>
                                  <select class="form-control select2" style="width: 100%;" name="kode_sarana" required oninvalid="this.setCustomValidity('Data Harus Dipilih !')" oninput="setCustomValidity('')">
                                    <option selected disabled="disabled" value="">--Jenis Sarana--</option>
                                    <?php foreach ($data_sar as $k):?>
                                   
                                     <?php 
                                     if ($br->kode_sarana==$k['kode_sarana']) {
                                         $select="selected";
                                        }else{
                                         $select="";
                                        }
                                        echo "<option $select value =".$k['kode_sarana'].">".$k['nama_sarana']."</option>";
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
                                  <select class="form-control select2" id="" style="width: 100%;" name="kode_kecamatan" required oninvalid="this.setCustomValidity('Data Harus Dipilih !')" oninput="setCustomValidity('')">
                                    <option selected disabled="disabled" value="">--Nama Kecamatan--</option>
                                    <?php foreach ($data_kec as $kkk):?>
                                   
                                    <?php 
                                     if ($br->kode_kecamatan==$kkk['kode_kecamatan']) {
                                         $select="selected";
                                        }else{
                                         $select="";
                                        }
                                        echo "<option $select value =".$kkk['kode_kecamatan'].">".$kkk['nama_kecamatan']."</option>";
                                     ?>
                                    <?php endforeach; ?>
                                  </select>
                                  </div>
                              </div>
                              <div class="col-xs-6">
                                 <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-file-text-o"></i></span>
                                  <select class="form-control select2" id="" style="width: 100%;" name="kode_desa" required oninvalid="this.setCustomValidity('Data Harus Dipilih !')" oninput="setCustomValidity('')">
                                    <option selected disabled="disabled" value="">--Nama Desa--</option>
                                    <?php foreach ($data_joinkecdes as $jkd):?>
                                    
                                    <?php 
                                     if ($br->kode_desa==$jkd->kode_desa) {
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
                              <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase()" placeholder="Judul Berita" name="judul_berita" value="<?= $br->judul_berita;?>" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>
                              
                            </div>

                            <br>
                            <div class="input-group date">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="date" class="form-control pull-right" value="<?= $br->waktu_berita;?>" name="waktu_berita">
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                               <textarea placeholder="Deskripsi Berita" style="width: 100%; height: 80px; font-size: 14px;padding: 10px;color: black" name="deskripsiberita1"  required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus><?= $br->deskripsiberita1;?></textarea>
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                               <textarea placeholder="Deskripsi Berita" style="width: 100%; height: 80px; font-size: 14px;padding: 10px;color: black" name="deskripsiberita2" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus><?= $br->deskripsiberita2;?></textarea>
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                               <textarea placeholder="Deskripsi Berita" style="width: 100%; height: 80px; font-size: 14px;padding: 10px;color: black" name="deskripsiberita3" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus><?= $br->deskripsiberita3;?></textarea>
                            </div>
                            <br>  
                               
                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                <div class="btn btn-primary btn-file">
                                <i class="fa fa-paperclip"></i> Masukan Photo Berita
                                <input type="file" name="photo_berita" value="<?= $br->photo_berita;?>" id="userfile" onchange="tampilkanPreview(this,'preview')">
                                <input type="hidden" name="status_berita" value="<?= $br->status_berita;?>">
                              </div>
                              <p class="help-block">Max. 3MB</p>
                              
                              </div>
                              </div>
                              <div class="col-md-8" >
                                <img  src="<?= base_url();?>assets/admin/img/berita/<?= $br->photo_berita;?>" id="preview" style="width: 100px;height: 100px;border-radius: 100%;background-color: #3c8dbc" />

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>   
                        </div>
                      </div>
                    </div>
                  <!-- </div> -->
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
        <?php foreach ($data_brt as $br) :
          $id_berita= $br->id_berita;
          $photo_berita = $br->photo_berita;
        ?>
         <div class="modal modal-danger fade" id="modal-danger<?php echo $br->id_berita;?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Apakah Anda Yakin Ingin Menghapus ?<br> <?= $br->judul_berita;?></h4>
              </div>
              <div class="modal-body">
                <p>Tekan "Hapus" Jika Yakin</p>
                <p>Tekan "Tidak" Jika Tidak Yakin</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline" data-dismiss="modal">Tidak</button>
                <a type="submit" href="<?= base_url();?>admin/hapusberita/<?= $br->id_berita;?>" class="btn btn-outline" tombol-hapus>Hapus</a>
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
                  <h4 class="modal-title">Tambah Berita</h4>
                </div>
                  <div class="modal-body">
                        <form role="form" action=" <?= base_url();?>admin/tambahbrt" method="post" enctype="multipart/form-data">    
                          <div class="box box-primary"> 
                          <div class="box-body">
                             <div class="nav-tabs-custom">
                                
                              <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_1" data-toggle="tab">Formulir A</a></li>
                              </ul>
                              <div class="tab-content">
                            <div class="tab-pane active" id="tab_1">
                              <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-font"></i></span>   
                              <input type="text" class="form-control" value="" name="kode_berita" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>
                            </div>
                            <br>
                              <div class="row">
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
                              <div class="col-md-6">
                                <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-street-view"></i></span>
                                  <select class="form-control select2" style="width: 100%;" name="kode_sarana" required oninvalid="this.setCustomValidity('Data Harus Dipilih !')" oninput="setCustomValidity('')">
                                    <option selected disabled="disabled" value="">--Jenis Sarana--</option>
                                    <?php foreach ($data_sar as $k):?>
                                    <option value="<?= $k['kode_sarana'];?>"><?= $k['nama_sarana'];?></option>
                                    <?php endforeach; ?>
                                  </select>
                                  </div>
                              </div>
                            </div><br>
                            <div class="row">
                              <div class="col-xs-6">
                                 <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-file-text-o"></i></span>
                                  <select class="form-control select2" id="" style="width: 100%;" name="kode_kecamatan" required oninvalid="this.setCustomValidity('Data Harus Dipilih !')" oninput="setCustomValidity('')">
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
                                  <select class="form-control select2" id="" style="width: 100%;" name="kode_desa" required oninvalid="this.setCustomValidity('Data Harus Dipilih !')" oninput="setCustomValidity('')">
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
                              <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase()" placeholder="Judul Berita" name="judul_berita" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>
                              <input type="hidden" name="">
                            </div>

                            <br>
                            <div class="input-group date">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="date" class="form-control pull-right"  name="waktu_berita">
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                               <textarea placeholder="Deskripsi Berita" style="width: 100%; height: 80px; font-size: 14px;padding: 10px;color: black" name="deskripsiberita1" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus></textarea>
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                               <textarea placeholder="Deskripsi Berita" style="width: 100%; height: 80px; font-size: 14px;padding: 10px;color: black" name="deskripsiberita2" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus></textarea>
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                               <textarea placeholder="Deskripsi Berita" style="width: 100%; height: 80px; font-size: 14px;padding: 10px;color: black" name="deskripsiberita3" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus></textarea>
                            </div>
                            <br>
                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                <div class="btn btn-primary btn-file">
                                <i class="fa fa-paperclip"></i> Masukan Photo Berita
                                <input type="file" name="photo_berita" id="userfile" onchange="tampilkanPreview(this,'preview')" required>
                                <input type="hidden" name="status_berita" value="0">
                              </div>
                              <p class="help-block">Max. 3MB</p>
                              
                              </div>
                              </div>
                              <div class="col-md-8" >
                                <img id="preview" style="width: 100px;height: 100px;border-radius: 100%;background-color: #3c8dbc" />

                              </div>
                            </div>
                          </div>
                        </div>
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
        


        
<script src="<?= base_url('assets/admin/');?>bower_components/jquery/dist/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

 