                    <style>
                      .blink {
                        color: white;
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

  <style>
   .switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
   }

   .switch input {
    display:none;
   }

   .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
   }

   .slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
   }

   input:checked + .slider {
     background-color: #2196F3;
   }

   input:focus + .slider {
     box-shadow: 0 0 1px #2196F3;
   }

   input:checked + .slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
   }

   /* Rounded sliders */
   .slider.round {
    border-radius: 34px;
   }

   .slider.round:before {
    border-radius: 50%;
   }
  </style>
<!-- notifikasi -->
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>">
  </div>
<!-- end notifikasi -->
<div class="container">
<div class="col-md-11">
          <!-- Custom Tabs -->

          <div class="nav-tabs-custom">
                                
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Data User</a></li>
              <li><a href="#tab_2" data-toggle="tab">Data Hak Akses</a></li>
              <li><a href="#tab_3" data-toggle="tab">Histori Login</a></li>
              <li><a href="#tab_4" data-toggle="tab">Token Expired</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <ul class="list-group">
                  <li class="list-group-item active">Data User</li>
                  <h2>Data User</h2>
                   <!-- Profile Image -->
                      <div class="box box-primary">
                        <div class="box-body box-profile">
                          <table id="example2" class="table table-striped table-bordered data table-responsive"  style="width:100%">
                            <thead>
                            <tr>
                              <th>ID</th>
                              <th>Nama</th>
                              <th>Email</th>
                              <th>Photo</th>
                              <th>Password</th>
                              <th>Hak Akses</th>
                              <th>User Aktif</th>
                              <th>Waktu</th>
                              <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($datauser as $da):?>
                            <tr>
                              <td><?= $da['id']; ?></td>
                              <td><?= $da['nama']; ?></td>
                              <td><?= $da['email']; ?></td>
                              <td>
                                <a href="<?= base_url();?>assets/admin/img/akun/<?= $da['photo'];?>" target="blank">
                                <img src="<?= base_url();?>assets/admin/img/akun/<?= $da['photo'];?>" style="width: 50px;height: 50px;border-radius: 100%;background-color: #3c8dbc" />
                                </a>
                              </td>
                              <td>
                                <?php 
                                    $kalimat = $da['password'];
                                    $sub_kalimat = substr($kalimat,0,5);
                                    echo $sub_kalimat.'.....';
                                 ?>
                              </td>
                              <td>
                                  <?php if($da['role_id'] == 1){
                                    echo "Administrator";
                                  }elseif ($da['role_id'] == 2) {
                                    echo "Kepala Dinas";
                                  }elseif ($da['role_id'] == 3) {
                                    echo "Kepala Bagian";
                                  }elseif ($da['role_id'] == 4){
                                    echo "Pegawai";
                                  }
                                  ?>
                              </td>
                              <td>
                                 <a href="<?= base_url('admin/akseson/');?><?= $da['id'];?>" class="btn btn-success <?php 
                                  if($da['is_active']==1)
                                  {
                                    echo "blink";
                                  }
                                  ?>" 
                                  <?php 
                                  if($da['is_active']==1)
                                  {
                                    echo "disabled";
                                  }
                                  ?>>Aktifkan</a>
                                 <a href="<?= base_url('admin/aksesoff/')?><?= $da['id'];?>" class="btn btn-danger <?php 
                                  if($da['is_active']==0)
                                  {
                                    echo "blink";
                                  }
                                  ?>" <?php if($da['is_active']==0){echo "disabled";} ?>>Non Aktif</a>
                              </td>
                              <td><?= $da['date_created'] ?></td>
                              <td> 
                                <a class="btn btn-social-icon btn-google" style="margin-right: 5px"  title='Hapus' data-toggle="modal" data-target="#modal-danger<?= $da['id']; ?>"><i class="fa fa-trash"></i></a></td>
                            </tr>
                           <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                            <tr>
                              <th>ID</th>
                              <th>Nama</th>
                              <th>Email</th>
                              <th>Photo</th>
                              <th>Password</th>
                              <th>Hak Akses</th>
                              <th>User Aktif</th>
                              <th>Waktu</th>
                              <th>Aksi</th>
                            </tr>
                            </tfoot>
                          </table>

                        </div>
                        <!-- /.box-body -->
                      </div>
                      <!-- /.box -->
                </ul>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <ul class="list-group">
                  <li class="list-group-item active">Data Hak Akses</li>
                  <h2>Data Hak Akses</h2>
                 
                   <div class="box box-primary">
                        <div class="box-body box-profile">
                           <table id="example2" class="table table-striped table-bordered data table-responsive"  style="width:100%">
                            <thead>
                            <tr>
                              <th>ID</th>
                              <th>Hak Akses</th>
                              <th>Keterangan</th>
                              <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($datarole as $dr):?>
                            <tr>
                              <td><?= $dr['id']; ?></td>
                              <td><?= $dr['role']; ?></td>
                              <td><?= $dr['nama_role']; ?></td>
                              <td> 
                                <a class="btn btn-social-icon btn-google" style="margin-right: 5px"  title='Hapus' data-toggle="modal" data-target="#modal-danger<?= $dr['id']; ?>"><i class="fa fa-trash"></i></a>
                              </td>
                            </tr>
                           <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                            <tr>
                              <tr>
                              <th>ID</th>
                              <th>Hak Akses</th>
                              <th>Keterangan</th>
                              <th>Aksi</th>
                            </tr>
                            </tr>
                            </tfoot>
                          </table>
                          </div>
                    </div>
                        <!-- /.box-body -->
                   
                </ul>
              </div>


            <div class="tab-pane" id="tab_3">
                <ul class="list-group">
                  <li class="list-group-item active">Histori Login</li>
                  <h2>Histori Login</h2>
                 
                   <div class="box box-primary">
                        <div class="box-body box-profile">
                           <table id="exampleh" class="table table-striped table-bordered data table-responsive"  style="width:100%">
                            <thead>
                            <tr>
                              <th>ID</th>
                              <th>Email</th>
                              <th>Hak Akses</th>
                              <th>Waktu</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($datahistori as $dh):?>
                            <tr>
                              <td><?= $dh['id']; ?></td>
                              <td><?= $dh['email']; ?></td>
                              <td> 
                                <?php if($dh['role_id'] == 1){
                                  echo "Administrator";
                                }elseif ($dh['role_id'] == 2) {
                                  echo "Kepala Dinas";
                                }elseif ($dh['role_id'] == 3) {
                                  echo "Kepala Bagian";
                                }elseif ($dh['role_id'] == 4){
                                  echo "Pegawai";
                                }
                                ?>
                              </td>
                              <td><?= $dh['date_created']; ?></td>
                            </tr>
                           <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                            <tr>
                              <tr>
                              <th>ID</th>
                              <th>Email</th>
                              <th>Hak Akses</th>
                              <th>Waktu</th>
                            </tr>
                            </tr>
                            </tfoot>
                          </table>
                          </div>
                    </div>
                        <!-- /.box-body -->
                   
                </ul>
              </div>
               <div class="tab-pane" id="tab_4">
                <ul class="list-group">
                  <li class="list-group-item active">Token Expired</li>
                  <h2>Token Expired</h2>
                 
                   <div class="box box-primary">
                        <div class="box-body box-profile">
                           <table id="examplet" class="table table-striped table-bordered data table-responsive"  style="width:100%">
                            <thead>
                            <tr>
                              <th>ID</th>
                              <th>Email</th>
                              <th>Token</th>
                              <th>Waktu</th>
                              <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($datatoken as $dt):?>
                            <tr>
                              <td><?= $dt['id']; ?></td>
                              <td><?= $dt['email']; ?></td>
                              <td><?= $dt['token']; ?></td>
                              <td><?= $dt['date_created']; ?></td>
                              <td> 
                                <a class="btn btn-social-icon btn-google" style="margin-right: 5px"  title='Hapus' data-toggle="modal" data-target="#modal-danger<?= $dt['date_created']; ?>"><i class="fa fa-trash"></i></a>
                              </td>
                            </tr>
                           <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                            <tr>
                              <tr>
                              <th>ID</th>
                              <th>Email</th>
                              <th>Token</th>
                              <th>Waktu</th>
                              <th>Aksi</th>
                            </tr>
                            </tr>
                            </tfoot>
                          </table>
                          </div>
                    </div>
                        <!-- /.box-body -->
                   
                </ul>
              </div>


            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
      </div>
       <!-- modal hapus -->
        <?php foreach ($datauser as $da) :
          $id= $da['id'];
          $photo = $da['photo'];
        ?>
         <div class="modal modal-danger fade" id="modal-danger<?php echo $da['id'];?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Apakah Anda Yakin Ingin Menghapus ?<br> <?= $da['id'];?></h4>
              </div>
              <div class="modal-body">
                <p>Tekan "Hapus" Jika Yakin</p>
                <p>Tekan "Tidak" Jika Tidak Yakin</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline" data-dismiss="modal">Tidak</button>
                <a type="submit" href="<?= base_url();?>admin/hapusakun/<?= $da['id'];?>" class="btn btn-outline" tombol-hapus>Hapus</a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
       <?php endforeach;?>
        <!-- modal hapus -->
        <?php foreach ($datarole as $dr) :
          $id= $dr['id'];
        ?>
         <div class="modal modal-danger fade" id="modal-danger<?php echo $dr['id'];?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Apakah Anda Yakin Ingin Menghapus ?<br> <?= $dr['id'];?></h4>
              </div>
              <div class="modal-body">
                <p>Tekan "Hapus" Jika Yakin</p>
                <p>Tekan "Tidak" Jika Tidak Yakin</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline" data-dismiss="modal">Tidak</button>
                <a type="submit" href="<?= base_url();?>admin/hapusrole/<?= $dr['id'];?>" class="btn btn-outline" tombol-hapus>Hapus</a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
       <?php endforeach;?>
       
        <?php foreach ($datatoken as $dt) :
          $id= $dt['date_created'];
        ?>
         <div class="modal modal-danger fade" id="modal-danger<?php echo $dt['date_created'];?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Apakah Anda Yakin Ingin Menghapus ?<br> <?= $dt['date_created'];?></h4>
              </div>
              <div class="modal-body">
                <p>Tekan "Hapus" Jika Yakin</p>
                <p>Tekan "Tidak" Jika Tidak Yakin</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline" data-dismiss="modal">Tidak</button>
                <a type="submit" href="<?= base_url();?>admin/hapustoken/<?= $dt['date_created'];?>" class="btn btn-outline" tombol-hapus>Hapus</a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
       <?php endforeach;?>
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
