  <section class="content">
          <div class="box">
            <div class="box-header">
              <div class="row">
                <div class="col-xs-8"><h3 class="box-title"><b><?= $link.' '.$link1;?></b></h3><br>
                  <!-- notifikasi -->
                  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>">
                  </div>
                  <!-- end notifikasi -->
                </div>
              <div class="col-xs-4">
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
            <?php foreach ($data_info as $in): ?>
              <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          <h5>Logo Dinas Pariwisata Dan Kebudayaan Kabupten Ogan Komering Ilir</h5>
                          <hr>
                           <a href="<?= base_url();?>assets/users/gambar/<?= $in['logo'];?>" target="blank">
                            <img src="<?= base_url();?>assets/users/gambar/<?= $in['logo'];?>" style="width: 200px;height: 100px;" />
                            </a>
                            <br>
                          <a class="btn btn-social-icon btn-bitbucket"  title='Edit Logo' data-toggle="modal" data-target="#modal-logo" type="button"><i class="fa fa-edit "></i></a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          <h5>Alamat</h5>
                          <hr>
                          <b><?= $in['alamat']; ?></b>
                          <br>
                           <a class="btn btn-social-icon btn-bitbucket"  title='Edit Alamat' data-toggle="modal" data-target="#modal-alamat" type="button"><i class="fa fa-edit "></i></a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          <h5>Handpone</h5>
                          <hr>
                         <b><?= $in['handphone']; ?></b>
                          <br>
                           <a class="btn btn-social-icon btn-bitbucket"  title='Edit Handpone' data-toggle="modal" data-target="#modal-handphone" type="button"><i class="fa fa-edit "></i></a>
                        </li>
                         <li class="list-group-item d-flex justify-content-between align-items-center">
                          <h5>Email</h5>
                          <hr>
                         <b><?= $in['email']; ?></b>
                          <br>
                           <a class="btn btn-social-icon btn-bitbucket"  title='Edit Email' data-toggle="modal" data-target="#modal-email" type="button"><i class="fa fa-edit "></i></a>
                        </li>
                      </ul>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

    </section>
    <!-- /.content -->
 <!-- modal hapus -->
        <?php foreach ($data_info as $in) :
          $logo= $in['logo'];
        ?>
    <!-- modal edit logo -->
     <div class="modal modal-info fade" id="modal-logo">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Logo</h4>
              </div>
                  <div class="modal-body">
                        <form role="form" action=" <?= base_url();?>admin/ubahlogo/<?=$in['id_info'];?>" method="post" enctype="multipart/form-data">
                          <div class="box box-primary"> 
                          <div class="box-body">
                              <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                <div class="btn btn-primary btn-file">
                                <i class="fa fa-paperclip"></i> Masukan Logo
                                <input type="file" name="logo" id="userfile" onchange="tampilkanPreview(this,'preview')">
                                <input type="hidden" name="alamat" value="<?= $in['alamat'];?>">
                                <input type="hidden" name="handphone" value="<?= $in['handphone'];?>">
                                <input type="hidden" name="email" value="<?= $in['email'];?>">
                              </div>
                              <p class="help-block">Max. 3MB</p>
                              
                              </div>
                              </div>
                              <div class="col-md-8" >
                                <img  src="<?= base_url();?>assets/users/gambar/<?= $in['logo'];?>" id="preview" style="width: 100px;height: 100px;border-radius: 100%;background-color: #3c8dbc" />

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
       </div>

       <!-- modal alamat -->
        <!-- modal edit Alamat -->
     <div class="modal modal-info fade" id="modal-alamat">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Alamat</h4>
              </div>
                  <div class="modal-body">
                        <form role="form" action=" <?= base_url();?>admin/ubahalamat/<?=$in['id_info'];?>" method="post" enctype="multipart/form-data">
                          <div class="box box-primary"> 
                          <div class="box-body">
                             <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-home"></i></span>
                               <textarea placeholder="Alamat" style="width: 100%; height: 80px; font-size: 14px;padding: 10px;color: black" name="alamat"  required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus><?=$in['alamat'];?></textarea>
                               <input type="hidden" name="logo" value="<?= $in['logo'];?>">
                               <input type="hidden" name="handphone" value="<?= $in['handphone'];?>">
                               <input type="hidden" name="email" value="<?= $in['email'];?>">
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
       </div>

        <!-- modal edit handphone -->
     <div class="modal modal-info fade" id="modal-handphone">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Handphone</h4>
              </div>
                  <div class="modal-body">
                        <form role="form" action=" <?= base_url();?>admin/ubahhp/<?=$in['id_info'];?>" method="post" enctype="multipart/form-data">
                          <div class="box box-primary"> 
                          <div class="box-body">
                             <div class="input-group">
                              <span class="input-group-addon"><i class="fa  fa-phone"></i></span>   
                              <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase()" placeholder="Handphone Berita" name="handphone" value="<?= $in['handphone'];?>" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>    
                               <input type="hidden" name="logo" value="<?= $in['logo'];?>">
                               <input type="hidden" name="alamat" value="<?= $in['alamat'];?>">
                               <input type="hidden" name="email" value="<?= $in['email'];?>">                        
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
       </div>
       <!-- modal email -->
         <!-- modal edit email -->
     <div class="modal modal-info fade" id="modal-email">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Email</h4>
              </div>
                  <div class="modal-body">
                        <form role="form" action=" <?= base_url();?>admin/ubahemail/<?=$in['id_info'];?>" method="post" enctype="multipart/form-data">
                          <div class="box box-primary"> 
                          <div class="box-body">
                             <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>   
                              <input type="text" class="form-control" placeholder="Email" name="email" value="<?= $in['email'];?>" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>    
                               <input type="hidden" name="logo" value="<?= $in['logo'];?>">
                               <input type="hidden" name="alamat" value="<?= $in['alamat'];?>">
                               <input type="hidden" name="handphone" value="<?= $in['handphone'];?>">                       
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
       </div>
      <?php endforeach; ?>

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

 