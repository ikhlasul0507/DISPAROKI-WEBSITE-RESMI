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
<!-- notifikasi -->
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>">
  </div>
<!-- end notifikasi -->
<div class="container">
<div class="col-md-11">
          <!-- Custom Tabs -->

          <div class="nav-tabs-custom">
                                
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Profil</a></li>
              <li><a href="#tab_2" data-toggle="tab">Edit Profil</a></li>
              <li><a href="#tab_3" data-toggle="tab">Ganti Password</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <ul class="list-group">
                  <li class="list-group-item active">Profil</li>
                  <h2>Profil</h2>
                   <!-- Profile Image -->
                      <div class="box box-primary">
                        <div class="box-body box-profile">
                          <a href="<?= base_url('assets/admin/img/akun/') . $user['photo']; ?>" target="_blank"><img class="profile-user-img img-responsive img-circle" src="<?= base_url('assets/admin/img/akun/') . $user['photo']; ?>" alt="User profile picture"></a>

                          <h3 class="profile-username text-center"><?= $user['nama']; ?></h3>

                          <p class="text-muted text-center">  
                                <?php if($user['role_id'] == 1){
                                  echo "Administrator";
                                }elseif ($user['role_id'] == 2) {
                                  echo "Kepala Dinas";
                                }elseif ($user['role_id'] == 3) {
                                  echo "Kepala Bagian";
                                }elseif ($user['role_id'] == 4){
                                  echo "Pegawai";
                                }
                                ?></p>
                          <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                              <b>Email</b> <a class="pull-right"><?= $user['email']; ?></a>
                            </li>
                            <li class="list-group-item">
                              <b>Hak Akses</b> <a class="pull-right badge badge-success">
                                <?php if($user['is_active'] == 0){
                                  echo "Tidak Aktif";
                                }else{
                                  echo "Aktif";
                                }
                                ?>
                                  
                                </a>
                            </li>
                            <li class="list-group-item">
                              <b>Waktu Create</b> <a class="pull-right"><?= $user['date_created']; ?></a>
                            </li>
                          </ul>

                          <a href="#" class="btn btn-primary btn-block"><b class="blink">Berhati-Hati Lah Atas Kerahasiaan Akun Anda !</b></a>
                        </div>
                        <!-- /.box-body -->
                      </div>
                      <!-- /.box -->
                </ul>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <ul class="list-group">
                  <li class="list-group-item active">Edit Profil</li>
                  <h2>Edit Profil</h2>
                  <form role="form" action=" <?= base_url();?>admin/editprofil/<?= $user['id'];?>" method="post" enctype="multipart/form-data">
                   <div class="box box-primary">
                        <div class="box-body box-profile">
                            <div class="row">
                              <div class="col-md-6">
                                <input type="hidden" name="id" value="<?= $user['id'];?>">
                                <input type="hidden" name="password" value="<?= $user['password'];?>">
                                <input type="hidden" name="is_active" value="<?= $user['is_active'];?>">
                                <input type="hidden" name="role_id" value="<?= $user['role_id'];?>">
                                <input type="hidden" name="date_created" value="<?= $user['date_created'];?>">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-file-text"> Nama</i></span>   
                              <input type="text" class="form-control"  placeholder="Nama" name="nama" value="<?= $user['nama'];?>" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>
                              <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <br> 
                             <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-envelope"> Email</i></span>   
                              <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase()" placeholder="Email" name="email" value="<?= $user['email'];?>" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>
                              <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <br>
                            <button  type="submit" class="btn btn-primary btn-block">Edit</button>  
                              </div>
                              <div class="col-md-6">
                                  <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                <div class="btn btn-primary btn-file">
                                <i class="fa fa-paperclip"></i> Masukan Photo Profil
                                <input type="file" name="photo" value="<?= $user['photo'];?>" id="userfile" onchange="tampilkanPreview(this,'preview')">
                              </div>
                              <p class="help-block">*Max. 3MB, Jika Tidak Diganti Biarkan Saja !</p>
                              
                              </div>
                              </div>
                              <div class="col-md-8" >
                                <img  src="<?= base_url('assets/admin/img/akun/') . $user['photo']; ?>" id="preview" style="width: 200px;height: 200px;background-color: #3c8dbc" />

                                  </div>
                                </div>
                              </div>
                            </div>
                            
                               
                          
                              </div>
                        </div>
                        <!-- /.box-body -->
                      </form>
                </ul>
              </div>
               <div class="tab-pane" id="tab_3">
                <ul class="list-group">
                  <li class="list-group-item active">Ganti Password</li>
                  <form role="form" action=" <?= base_url();?>admin/gantipassword" method="post">
                   <div class="box box-primary">
                        <div class="box-body box-profile">
                            <div class="row">
                              <div class="col-md-6">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-file-text"></i></span>   
                              <input type="password" class="form-control"  placeholder=" Password Lama" name="password_lama"  autocomplete="off" autofocus>
                              <?= form_error('password_lama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-file-text"> </i></span>   
                              <input type="password" class="form-control"  placeholder="Password Baru" name="password1"  autocomplete="off" autofocus>
                              <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-file-text"> </i></span>   
                              <input type="password" class="form-control"  placeholder="Ulangi Password Baru" name="password2"  autocomplete="off" autofocus>
                              <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                         
                            <br>
                            <button  type="submit" class="btn btn-primary btn-block">Ganti Password</button>  
                              </div>
                              <div class="col-md-6">
                              </div>
                            </div>
                            
                               
                          
                              </div>
                        </div>
                        <!-- /.box-body -->
                      </form>
                </ul>
              </div>
             
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
      </div>
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
