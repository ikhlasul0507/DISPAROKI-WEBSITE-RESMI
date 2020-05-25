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
              </div>
              </div>
            </div>
            <div class="box-body" id="printkec">
              <div class="row">
                <div class="col-md-4">
                  <!-- TO DO List -->
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Agenda Kegiatan</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
              <ul class="todo-list">
                <!-- satart -->
                <?php foreach ($agenda as $ag):?>
                <li>
                  <span class="handle">
                    <i class="fa fa-ellipsis-v"></i>
                    <i class="fa fa-ellipsis-v"></i>
                  </span>
                  <?php 
                      $start_date = new DateTime();
                      $end_date = new DateTime($ag["waktu_agenda"]);
                      $interval = $start_date->diff($end_date);
                    ?>
                  <small class="label label-<?php 
                  if($interval->days<10)
                  { echo 'danger';}elseif($interval->days>=10 && $interval->days<100)
                  { echo 'warning';}else{ echo 'success';}
                  ?> <?php if($interval->days<10){ echo 'blink';}?>"><i class="fa fa-clock-o"></i>
                    <?= $interval->days.' Hari Lagi Menuju '.$ag['waktu_agenda'];?>
                  </small>
                  <br>
                  <span class="text"><?= $ag['nama_agenda']; ?></span>
                  <div class="tools">
                    <i class="fa fa-edit" data-toggle="modal" data-target="#modal-edit<?php echo $ag['id_agenda'];?>"></i>
                    <i class="fa fa-trash-o" data-toggle="modal" data-target="#modal-danger<?php echo $ag['id_agenda'];?>"></i>
                  </div>
                </li>
              <?php endforeach; ?>
                <!-- finish -->
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
              <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#ModalaAdd"><i class="fa fa-plus"></i> Tambah</button>
            </div>
            
          </div>
          <!-- /.box -->
                </div>
                <div class="col-md-8">
                  <div class="box box-primary">
                    <div class="box-body no-padding">
                      <div id="calendar">
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box -->

    </section>
    <!-- /.content -->
    <!-- modal tambah -->
  
     <div class="modal modal-info fade" id="ModalaAdd">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Tambah Agenda</h4>
                </div>
                  <div class="modal-body">
                        <form role="form" action=" <?= base_url();?>admin/tambahagenda" method="post">    
                          <div class="box box-primary"> 
                          <div class="box-body">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-font"></i></span>
                              <input type="text" class="form-control" placeholder="Nama Agenda" id="agenda" name="nama_agenda" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>
                             
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-paragraph"></i></span>
                              <input type="date" class="form-control" placeholder="Waktu Agenda" name="waktu_agenda" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>
                             
                            </div>
                          </div>
                      </div>
                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline" data-dismiss="modal">Tutup</button>
                  <button type="submit" class="btn btn-outline" id="simpan">Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

 <!-- modal hapus -->
        <?php foreach ($agenda as $ag) :
          $id_agenda= $ag['id_agenda'];
        ?>
         <div class="modal modal-danger fade" id="modal-danger<?php echo $ag['id_agenda'];?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Apakah Anda Yakin Ingin Menghapus ?</h4>
              </div>
              <div class="modal-body">
                <p>Tekan "Hapus" Jika Yakin</p>
                <p>Tekan "Tidak" Jika Tidak Yakin</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline" data-dismiss="modal">Tidak</button>
                <a type="submit" href="<?= base_url();?>admin/hapusagenda/<?= $ag['id_agenda'];?>" class="btn btn-outline" tombol-hapus>Hapus</a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
       <?php endforeach;?>

       <!-- modal edit -->
     <?php foreach ($agenda as $ag) :
          $id_agenda= $ag['id_agenda'];
          $nama_agenda =$ag['nama_agenda'];
          $waktu_agenda = $ag['waktu_agenda'];
        ?>
     <div class="modal modal-info fade" id="modal-edit<?php echo $ag['id_agenda'];?>">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Ubah Agenda</h4>
                </div>
                  <div class="modal-body">
                        <form role="form" action=" <?= base_url();?>admin/ubahagenda/<?= $ag['id_agenda']; ?>" method="post">    
                          <div class="box box-primary"> 
                          <div class="box-body">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-font"></i></span>
                              <input type="text" class="form-control" placeholder="Nama Agenda" id="agenda" name="nama_agenda" value="<?= $ag['nama_agenda'];?>"required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>
                             
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-paragraph"></i></span>
                              <input type="date" class="form-control" placeholder="Waktu Agenda" name="waktu_agenda" value="<?= $ag['waktu_agenda']; ?>" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>
                             
                            </div>
                          </div>
                      </div>
                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline" data-dismiss="modal">Tutup</button>
                  <button type="submit" class="btn btn-outline" id="simpan">Ubah</button>
                </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
 <?php endforeach; ?>
<script src="<?= base_url('assets/admin/');?>bower_components/jquery/dist/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

 