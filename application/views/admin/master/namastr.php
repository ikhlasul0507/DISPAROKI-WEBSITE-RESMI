  <section class="content">
          <div class="box">
            <div class="box-header">
              <div class="row">
                <div class="col-xs-8"><h3 class="box-title"><b><?= $link.' '.$link1;?></b></h3>
                  <!-- notifikasi -->
                  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>">
                  </div>
                  <!-- end notifikasi -->
                </div>
              <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-flat" title='Tambah' data-toggle="modal" data-target="#ModalaAdd"> <i class="fa fa-plus-square-o"></i> Tambah</button>
                <a class="btn btn-danger btn-flat" href=" <?= base_url();?>admin/urftiyxzpttztqcpcvyu"><i class="fa  fa-file-excel-o"></i> Excel</a>
                <a class="btn btn-warning btn-flat float-right" type="button" href=" <?= base_url();?>admin/adlcgujuzaipqqmhstou" target="blank"><i class="fa fa-print"></i> Print</a>
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
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Kode Jabatan</th>
                  <th>Nama</th>
                  <th>Photo</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_str as $k):?>
                <tr>
                  <td><?= $k->id_struktur;?></td>
                  <td><?= $k->nama_jabatan;?></td>
                  <td><?= $k->nama;?></td>
                  <td><a href="<?= base_url();?>assets/admin/img/struktur/<?= $k->photo;?>" target="blank"><img src="<?= base_url();?>assets/admin/img/struktur/<?= $k->photo;?>" style="width: 50px;height: 50px;border-radius: 100%;background-color: #3c8dbc" /></a></td>
                  <td> 
                    <a class="btn btn-social-icon btn-bitbucket"  title='Edit' data-toggle="modal" data-target="#modal-edit<?php echo $k->id_struktur;?>" type="button"><i class="fa fa-edit "></i></a>
                    <a class="btn btn-social-icon btn-google" style="margin-right: 5px"  title='Hapus' data-toggle="modal" data-target="#modal-danger<?php echo $k->id_struktur;?>"><i class="fa fa-trash"></i></a></td>
                </tr>
               <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Kode Jabatan</th>
                  <th>Nama</th>
                  <th>Photo</th>
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

        <?php foreach ($data_str as $st) :
          $id_struktur= $st->id_struktur;
          $kode_jabatan = $st->kode_jabatan;
          $nama = $st->nama;
          $photo = $st->photo;
        ?>
    <!-- modal edit -->
     <div class="modal modal-info fade" id="modal-edit<?php echo $st->id_struktur;?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Struktur</h4>
              </div>
                  <div class="modal-body">
                        <form role="form" action=" <?= base_url();?>admin/ubahstr/<?=$st->id_struktur;?>" method="post" enctype="multipart/form-data">
                          <div class="box box-primary"> 
                          <div class="box-body">
                            <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-paragraph"></i></span>
                             <input type="hidden" name="id_struktur" value="<?=$st->id_struktur;?>">
                              <select class="form-control select2" style="width: 100%;" name="kode_jabatan" required oninvalid="this.setCustomValidity('Data Harus Dipilih !')" oninput="setCustomValidity('')">
                                <option selected disabled="disabled" value="">--Kode Jabatan--</option>
                                <?php foreach ($data_jab as $k):?>

                                    <?php 
                                     if ($st->kode_jabatan==$k['kode_jabatan']) {
                                         $select="selected";
                                        }else{
                                         $select="";
                                        }
                                        echo "<option $select value =".$k['kode_jabatan'].">".$k['nama_jabatan']."</option>";
                                     ?>
                                <?php endforeach; ?>
                              </select>
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-file-text"></i></span>   
                              <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?= $st->nama;?> " required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>
                            </div>
                            <br>
                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                <div class="btn btn-primary btn-file">
                                <i class="fa fa-paperclip"></i> Masukan Photo
                                <input type="file" name="photo" value="<?= $st->photo; ?>" id="userfile" onchange="tampilkanPreview(this,'preview')">
                              </div>
                              <p class="help-block">Max. 3MB</p>
                              
                              </div>
                              </div>
                              <div class="col-md-8" >
                                <img id="preview" src="<?= base_url();?>assets/admin/img/struktur/<?= $st->photo;?>" style="width: 100px;height: 100px;border-radius: 100%;background-color: #3c8dbc" />

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
        <?php foreach ($data_str as $k) :
          $id_struktur= $k->id_struktur;
          $photo = $k->photo;
        ?>
         <div class="modal modal-danger fade" id="modal-danger<?php echo $k->id_struktur;?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Apakah Anda Yakin Ingin Menghapus ? <?= $k->id_struktur;?></h4>
              </div>
              <div class="modal-body">
                <p>Tekan "Hapus" Jika Yakin</p>
                <p>Tekan "Tidak" Jika Tidak Yakin</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline" data-dismiss="modal">Tidak</button>
                <a type="submit" href="<?= base_url();?>admin/tkghmyozaftbcmhfupki/<?= $k->id_struktur;?>" class="btn btn-outline" tombol-hapus>Hapus</a>
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
                  <h4 class="modal-title">Tambah Struktur</h4>
                </div>
                  <div class="modal-body">
                        <form role="form" action=" <?= base_url();?>admin/jkyfsehfvwmeqtdtkinp" method="post" enctype="multipart/form-data">    
                          <div class="box box-primary"> 
                          <div class="box-body">
                            <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-paragraph"></i></span>
                              <select class="form-control select2" style="width: 100%;" name="kode_jabatan" required oninvalid="this.setCustomValidity('Data Harus Dipilih !')" oninput="setCustomValidity('')">
                                <option selected disabled="disabled" value="">--Kode Jabatan--</option>
                                <?php foreach ($data_jab as $k):?>
                                <option value="<?= $k['kode_jabatan'];?>"><?= $k['nama_jabatan'];?></option>
                                <?php endforeach; ?>
                              </select>
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-file-text"></i></span>   
                              <input type="text" class="form-control" placeholder="Nama" name="nama" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>
                            </div>
                            <br>
                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                <div class="btn btn-primary btn-file">
                                <i class="fa fa-paperclip"></i> Masukan Photo
                                <input type="file" name="photo" id="userfile" onchange="tampilkanPreview(this,'preview')">
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
