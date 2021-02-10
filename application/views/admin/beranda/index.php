<!-- notifikasi -->
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>">
                  </div>
                  <!-- end notifikasi -->
    
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php $a = $this->db->query("SELECT *FROM tbl_master_wisata");
                    $hasil= $a->num_rows();
                    echo $hasil; 
                    ?></h3>

              <p>Wisata</p>
            </div>
            <div class="icon">
              <i class="fa fa-tree"></i>
            </div>
            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#wisata">Lihat<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- modal wisata -->
         <div class="modal modal-info fade" id="wisata">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Grafik Wisata</h4>
                </div>
                  <div class="modal-body">
                       <!-- konten -->
                   <!-- DONUT CHART -->
                        <div class="box box-danger">
                          <div class="box-header with-border">
                            <h3 class="box-title">Jumah Wisata Per Kecamatan</h3>

                            <div class="box-tools pull-right">
                              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                              </button>
                              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                          </div>
                          <div class="box-body">
                              <canvas id="myChart" style="width: 20px;height: 20px"></canvas>
                          
                          </div>
                          <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                       
                       <!-- end konten -->
                  </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>





        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php $a = $this->db->query("SELECT *FROM tbl_master_sarana");
                    $hasil= $a->num_rows();
                    echo $hasil; 
                    ?></h3>

              <p>Sarana</p>
            </div>
            <div class="icon">
              <i class="fa fa-street-view"></i>
            </div>
            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#sarana">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
         <!-- modal wisata -->
         <div class="modal modal-info fade" id="sarana">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Grafik Sarana</h4>
                </div>
                  <div class="modal-body">
                       <!-- konten -->
                   <!-- DONUT CHART -->
                        <div class="box box-danger">
                          <div class="box-header with-border">
                            <h3 class="box-title">Jumah Sarana Per Kecamatan</h3>

                            <div class="box-tools pull-right">
                              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                              </button>
                              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                          </div>
                          <div class="box-body">
                              <canvas id="gsarana" style="width: 20px;height: 20px"></canvas>
                          
                          </div>
                          <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                       
                       <!-- end konten -->
                  </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>







        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php $a = $this->db->query("SELECT *FROM tbl_master_budaya");
                    $hasil= $a->num_rows();
                    echo $hasil; 
                    ?></h3>

              <p>Budaya</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#jabatan">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
         <!-- modal wisata -->
         <div class="modal modal-info fade" id="jabatan">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Grafik Budaya</h4>
                </div>
                 <div class="modal-body">
                       <!-- konten -->
                   <!-- DONUT CHART -->
                        <div class="box box-danger">
                          <div class="box-header with-border">
                            <h3 class="box-title">Jumah Budaya Per Kecamatan</h3>

                            <div class="box-tools pull-right">
                              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                              </button>
                              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                          </div>
                          <div class="box-body">
                              <canvas id="gbudaya" style="width: 20px;height: 20px"></canvas>
                          
                          </div>
                          <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                       
                       <!-- end konten -->
                  </div>
      </div>
    </div>
    </div>






        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php $a = $this->db->query("SELECT *FROM tbl_struktur");
                    $hasil= $a->num_rows();
                    echo $hasil; 
                    ?></h3>

              <p>Struktur</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#struktur">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
       <!-- modal wisata -->
         <div class="modal modal-info fade" id="struktur">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Data Struktur</h4>
                </div>
                  <div class="modal-body">
                       <!-- konten -->
              <table id="example3" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kode Jabatan</th>
                  <th>Nama</th>
                  <th>Photo</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_str as $k):?>
                <tr>
                  <td style="color: black"><?= $k->nama_jabatan;?></td>
                  <td style="color: black"><?= $k->nama;?></td>
                  <td><a href="<?= base_url();?>assets/admin/img/struktur/<?= $k->photo;?>" target="blank"><img src="<?= base_url();?>assets/admin/img/struktur/<?= $k->photo;?>" style="width: 50px;height: 50px;border-radius: 100%;background-color: #3c8dbc" /></a></td>
                </tr>
               <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Kode Jabatan</th>
                  <th>Nama</th>
                  <th>Photo</th>
                </tr>
                </tfoot>
              </table>


                       <!-- end konten -->
                  </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>






      <!-- /.row -->
         <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php $a = $this->db->query("SELECT *FROM tbl_berita");
                    $hasil= $a->num_rows();
                    echo $hasil; 
                    ?></h3>

              <p>Berita</p>
            </div>
            <div class="icon">
               <i class="fa fa-clipboard"></i>
            </div>
            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#berita">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
         <!-- modal wisata -->
         <div class="modal modal-info fade" id="berita">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Data Berita</h4>
                </div>
                  <div class="modal-body">
                       <!-- konten -->
                  <div class="table-responsive">
              <table id="example4" class="table table-striped table-bordered data table-responsive">
                <thead>
                <tr>
                  <th>Waktu Berita</th>
                  <th>Judul Berita</th>
                  <th>Photo Berita</th>
                  <th>Deskripsi 1</th>
                  <th>Deskripsi 2</th>
                  <th>Deskripsi 3</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_brt as $br):?>
                <tr>
                  <td style="color: black"><?= $br->waktu_berita;?></td>
                  <td style="color: black"><?= $br->judul_berita;?></td>
                  <td style="color: black">
                    <a href="<?= base_url();?>assets/admin/img/berita/<?= $br->photo_berita;?>" target="blank">
                    <img src="<?= base_url();?>assets/admin/img/berita/<?= $br->photo_berita;?>" style="width: 50px;height: 50px;border-radius: 100%;background-color: #3c8dbc" />
                    </a>
                  </td>
                  <td style="color: black">
                    <?php 
                        $kalimat = $br->deskripsiberita1;
                        $sub_kalimat = substr($kalimat,0,10);
                        echo $sub_kalimat.'.....';
                     ?>
                  </td>
                  <td style="color: black">
                    <?php 
                        $kalimat = $br->deskripsiberita2;
                        $sub_kalimat = substr($kalimat,0,10);
                        echo $sub_kalimat.'.....';
                     ?>
                  </td>
                  <td style="color: black">
                     <?php 
                        $kalimat = $br->deskripsiberita3;
                        $sub_kalimat = substr($kalimat,0,10);
                        echo $sub_kalimat.'.....';
                     ?> 
                  </td> 
                  
      
                </tr>
               <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Waktu Berita</th>
                  <th>Judul Berita</th>
                  <th>Photo Berita</th>
                  <th>Deskripsi 1</th>
                  <th>Deskripsi 2</th>
                  <th>Deskripsi 3</th>
                </tr>
                </tfoot>
              </table>
                     </div>  
                       <!-- end konten -->
                  </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>








        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php $a = $this->db->query("SELECT *FROM tbl_pengajuan");
                    $hasil= $a->num_rows();
                    echo $hasil; 
                    ?></h3>

              <p>Pengajuan</p>
            </div>
            <div class="icon">
              <i class="fa fa-exchange"></i>
            </div>
            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#pengajuan">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
         <!-- modal wisata -->
         <div class="modal modal-info fade" id="pengajuan">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Data Pengajuan</h4>
                </div>
                  <div class="modal-body"> 
                    <div class="table-responsive">
                    <table id="example5" class="table table-striped table-bordered data table-responsive"  style="width:100%">
                <thead>
                <tr>
                  <th>Nama Pengajuan</th>
                  <th>Photo</th>
                  <th>Deskriksi</th>
                  <th>Alamat</th>
                  <th>Kontak</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($pgj as $pg):?>
                <tr>
                  <td style="color: black"><?= $pg->nama_pengajuan;?></td>
                  <td>
                    <a href="<?= base_url();?>assets/admin/img/pengajuan/<?= $pg->photo_pengajuan;?>" target="blank">
                    <img src="<?= base_url();?>assets/admin/img/pengajuan/<?= $pg->photo_pengajuan;?>" style="width: 50px;height: 50px;border-radius: 100%;background-color: #3c8dbc" />
                    </a>
                  </td>
                  <td style="color: black">
                    <?php 
                        $kalimat = $pg->deskripsi_pengajuan;
                        $sub_kalimat = substr($kalimat,0,100);
                        echo $sub_kalimat.'.....';
                     ?>
                  </td>
                  <td style="color: black"><?= $pg->alamat_pengajuan;?></td>
                  <td style="color: black"><?= $pg->kontak_pengajuan;?></td>
                    
                </tr>
               <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>>
                  <th>Nama Pengajuan</th>
                  <th>Photo</th>
                  <th>Deskriksi</th>
                  <th>Alamat</th>
                  <th>Kontak</th>
                </tr>
                </tfoot>
              </table>
                       <!-- end konten -->
                     </div>
                  </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>










        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php $a = $this->db->query("SELECT *FROM tbl_kontak");
                    $hasil= $a->num_rows();
                    echo $hasil; 
                    ?></h3>

              <p>Kontak</p>
            </div>
            <div class="icon">
              <i class="fa fa-envelope"></i>
            </div>
            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#kontak">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
         <!-- modal wisata -->
         <div class="modal modal-info fade" id="kontak">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Data Kontak</h4>
                </div>
                  <div class="modal-body">
                       <!-- konten -->
                       <div class="table-responsive">
                  <table id="example6" class="table table-striped table-bordered data table-responsive"  style="width:100%">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Judul</th>
                  <th>Pesan</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_kon as $ko):?>
                <tr>
                  <td style="color: black"><?= $ko['nama_kontak'];?></td>
                  <td style="color: black"><?= $ko['email_kontak'];?></td>
                  <td style="color: black"><?= $ko['judul_kontak'];?></td>
                  <td style="color: black"><?= $ko['pesan_kontak'];?></td>
                </tr>
               <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Judul</th>
                  <th>Pesan</th>
                </tr>
                </tfoot>
              </table>
            </div>

                        <!-- /.box -->
                       
                       <!-- end konten -->
                  </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>







        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php $a = $this->db->query("SELECT *FROM tbl_aspirasi");
                    $hasil= $a->num_rows();
                    echo $hasil; 
                    ?></h3>

              <p>Aspirasi</p>
            </div>
            <div class="icon">
              <i class="fa fa-bookmark"></i>
            </div>
            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#aspirasi">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
         <!-- modal wisata -->
         <div class="modal modal-info fade" id="aspirasi">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Data Aspirasi</h4>
                </div>
                  <div class="modal-body">
                       <!-- konten -->
                  <table id="example7" class="table table-striped table-bordered data table-responsive"  style="width:100%">
                <thead>
                <tr>
                  <th>Judul</th>
                  <th>Photo</th>
                  <th>Aspirasi</th>
                  <th>Waktu</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_asp as $as):?>
                <tr>
                  <td style="color: black"><?= $as['judul_aspirasi'];?></td>
                  <td >
                    <a href="<?= base_url();?>assets/users/gambar/<?= $as['photo_aspirasi'];?>" target="blank">
                    <img src="<?= base_url();?>assets/users/gambar/<?= $as['photo_aspirasi'];?>" style="width: 50px;height: 50px;border-radius: 100%;background-color: #3c8dbc" />
                    </a>
                  </td>
                  <td style="color: black">
                    <?php 
                        $kalimat = $as['aspirasi'];
                        $sub_kalimat = substr($kalimat,0,10);
                        echo $sub_kalimat.'.....';
                     ?>  
                  </td>
                  <td style="color: black"><?= $as['waktu']; ?></td>  
                </tr>
               <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Judul</th>
                  <th>Photo</th>
                  <th>Aspirasi</th>
                  <th>Waktu</th>
                </tr>
                </tfoot>
              </table>
                       
                       <!-- end konten -->
                  </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>






      </div>
<div id="<?php if($peta['is_active']==1){ echo "mapid";}?>" style="z-index: 2"></div>
<style type="text/css">
    #mapid { height: 480px; }
</style>
   <script type="text/javascript">
    //setting map koordinat awal
    //level zoom pada map
    <?php $a= $peta['zoom']; ?>
    var mymap = L.map('mapid').setView([-3.3848781, 104.8191939], <?= $a;?>);
    
    //setting token
    ACCESS_TOKEN = 'pk.eyJ1IjoiaWtobGFzdWwwNTA3IiwiYSI6ImNrOTY3cDJkNTBoeWYzcGwyeXhzMWR6c2wifQ.c3kroaKoyobXOSngsVKOTw';
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token='+ ACCESS_TOKEN, {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 20,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'your.mapbox.access.token'
    }).addTo(mymap);

    //koordinat kecamatan
    // var circle = L.circle([51.508, -0.11], {
    // color: 'red',
    // fillColor: '#f03',
    // fillOpacity: 0.5,
    // radius: 500
    // }).addTo(mymap);

    //set icon untuk marker
    var iconwst = L.icon({
    iconUrl: '<?= base_url();?>assets/users/img/svg_icon/oasis.svg',
    iconSize:     [38, 95], // size of the icon
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnch
    });
    //set icon untuk marker
    var iconsrn = L.icon({
    iconUrl: '<?= base_url();?>assets/users/img/svg_icon/hotel.svg',
    iconSize:     [38, 95], // size of the icon
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnch
    });
    //set icon untuk marker
    var iconlogo = L.icon({
    iconUrl: '<?= base_url();?>assets/users/img/svg_icon/logo.svg',
    iconSize:     [38, 95], // size of the icon
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnch
    });
     //set icon untuk marker
    var iconbdy = L.icon({
    iconUrl: '<?= base_url();?>assets/users/img/svg_icon/dance.svg',
    iconSize:     [38, 95], // size of the icon
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnch
    });
    
    //pengulangan marker yang di ambil dari data base
    <?php foreach ($data_wstmap as $key => $value){?>
        L.marker([<?= $value->latitude;?>, <?= $value->longtitude;?>],{icon:iconwst})
        .bindPopup("<div><center><h4><?= $value->nama_master_wisata;?></h4><br><img src='<?= base_url();?>assets/admin/img/master_wisata/<?= $value->photo_wisata;?>' width='200px' height='150px'><br><br><a href='<?= $value->link_google;?>' class='btn bg-purple margin' style='font-size:25px' target='_blank'><i class='fa fa-mail-forward'> Telusuri...</i></a></div>")
        .bindTooltip("<?= $value->nama_master_wisata;?>").openTooltip()
        .addTo(mymap);  
    <?php } ?>
    //pengulangan marker yang di ambil dari data base
    <?php foreach ($data_srnmap as $key => $value){?>
        L.marker([<?= $value->latitude;?>, <?= $value->longtitude;?>],{icon:iconsrn})
        .bindPopup("<div><center><h4><?= $value->nama_master_sarana;?></h4><br><img src='<?= base_url();?>assets/admin/img/master_sarana/<?= $value->photo_sarana;?>' width='200px' height='150px'><br><br><a href='<?= $value->link_google;?>' class='btn bg-purple margin' style='font-size:25px' target='_blank'><i class='fa fa-mail-forward'> Telusuri...</i></a></div>")
        .bindTooltip("<?= $value->nama_master_sarana;?>").openTooltip()
        .addTo(mymap);  
    <?php } ?>
    //pengulangan marker yang di ambil dari data base
    <?php foreach ($data_bdymap as $key => $value){?>
        L.marker([<?= $value->latitude;?>, <?= $value->longtitude;?>],{icon:iconbdy})
        .bindPopup("<div><center><h4><?= $value->nama_master_budaya;?></h4><br><img src='<?= base_url();?>assets/admin/img/master_budaya/<?= $value->photo_budaya;?>' width='200px' height='150px'><br><br><a href='<?= $value->link_google;?>' class='btn bg-purple margin' style='font-size:25px' target='_blank'><i class='fa fa-mail-forward'> Telusuri...</i></a></div>")
        .bindTooltip("<?= $value->nama_master_budaya;?>").openTooltip()
        .addTo(mymap);  
    <?php } ?>
    //popup saat pertama kali di jalankan pada map
    //setting marker dan popup
    L.marker([-3.3920611,104.8300743],{icon:iconlogo}).addTo(mymap)
    .bindPopup("<center><img src='<?= base_url();?>assets/users/gambar/logo.png' width='200px' height='150px'><br><h4>Dinas Kebudayaan Dan Pariwisata</h4><br>Kabupaten Ogan Komering Ilir")
    .openPopup();

    //popup ambil koordinat ketika peta diklik
    var popup = L.popup();
    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent("Coordinate This Place is " + e.latlng.toString())
            .openOn(mymap);
    }
    mymap.on('click', onMapClick);
   </script>
    </section>
    <!-- /.content -->
    <!-- chart -->
    <!-- AdminLTE for demo purposes -->
  <!-- AdminLTE for demo purposes -->
   <?php 
      $a = $this->db->query("SELECT *FROM tbl_master_wisata WHERE kode_kecamatan='1'");
      $a1= $a->num_rows();
      $b = $this->db->query("SELECT *FROM tbl_master_wisata WHERE kode_kecamatan='2'");
      $a2= $b->num_rows();
      $c = $this->db->query("SELECT *FROM tbl_master_wisata WHERE kode_kecamatan='3'");
      $a3= $c->num_rows();
      $d = $this->db->query("SELECT *FROM tbl_master_wisata WHERE kode_kecamatan='4'");
      $a4= $d->num_rows();
      $e = $this->db->query("SELECT *FROM tbl_master_wisata WHERE kode_kecamatan='5'");
      $a5= $e->num_rows();
      $f = $this->db->query("SELECT *FROM tbl_master_wisata WHERE kode_kecamatan='6'");
      $a6= $f->num_rows();
      $g = $this->db->query("SELECT *FROM tbl_master_wisata WHERE kode_kecamatan='7'");
      $a7= $g->num_rows();
      $h = $this->db->query("SELECT *FROM tbl_master_wisata WHERE kode_kecamatan='8'");
      $a8= $h->num_rows();
      $i = $this->db->query("SELECT *FROM tbl_master_wisata WHERE kode_kecamatan='9'");
      $a9= $i->num_rows();
      $j = $this->db->query("SELECT *FROM tbl_master_wisata WHERE kode_kecamatan='10'");
      $a10= $j->num_rows();
      $k = $this->db->query("SELECT *FROM tbl_master_wisata WHERE kode_kecamatan='11'");
      $a11= $k->num_rows();
      $l = $this->db->query("SELECT *FROM tbl_master_wisata WHERE kode_kecamatan='12'");
      $a12= $l->num_rows();
      $m = $this->db->query("SELECT *FROM tbl_master_wisata WHERE kode_kecamatan='13'");
      $a13= $m->num_rows();
      $n = $this->db->query("SELECT *FROM tbl_master_wisata WHERE kode_kecamatan='14'");
      $a14= $n->num_rows();
      $o = $this->db->query("SELECT *FROM tbl_master_wisata WHERE kode_kecamatan='15'");
      $a15= $o->num_rows();
      $p = $this->db->query("SELECT *FROM tbl_master_wisata WHERE kode_kecamatan='16'");
      $a16= $p->num_rows();
      $q = $this->db->query("SELECT *FROM tbl_master_wisata WHERE kode_kecamatan='17'");
      $a17= $q->num_rows();
      $r = $this->db->query("SELECT *FROM tbl_master_wisata WHERE kode_kecamatan='18'");
      $a18= $r->num_rows();


      //untuk sarana

      $a = $this->db->query("SELECT *FROM tbl_master_sarana WHERE kode_kecamatan='1'");
      $b1= $a->num_rows();
      $b = $this->db->query("SELECT *FROM tbl_master_sarana WHERE kode_kecamatan='2'");
      $b2= $b->num_rows();
      $c = $this->db->query("SELECT *FROM tbl_master_sarana WHERE kode_kecamatan='3'");
      $b3= $c->num_rows();
      $d = $this->db->query("SELECT *FROM tbl_master_sarana WHERE kode_kecamatan='4'");
      $b4= $d->num_rows();
      $e = $this->db->query("SELECT *FROM tbl_master_sarana WHERE kode_kecamatan='5'");
      $b5= $e->num_rows();
      $f = $this->db->query("SELECT *FROM tbl_master_sarana WHERE kode_kecamatan='6'");
      $b6= $f->num_rows();
      $g = $this->db->query("SELECT *FROM tbl_master_sarana WHERE kode_kecamatan='7'");
      $b7= $g->num_rows();
      $h = $this->db->query("SELECT *FROM tbl_master_sarana WHERE kode_kecamatan='8'");
      $b8= $h->num_rows();
      $i = $this->db->query("SELECT *FROM tbl_master_sarana WHERE kode_kecamatan='9'");
      $b9= $i->num_rows();
      $j = $this->db->query("SELECT *FROM tbl_master_sarana WHERE kode_kecamatan='10'");
      $b10= $j->num_rows();
      $k = $this->db->query("SELECT *FROM tbl_master_sarana WHERE kode_kecamatan='11'");
      $b11= $k->num_rows();
      $l = $this->db->query("SELECT *FROM tbl_master_sarana WHERE kode_kecamatan='12'");
      $b12= $l->num_rows();
      $m = $this->db->query("SELECT *FROM tbl_master_sarana WHERE kode_kecamatan='13'");
      $b13= $m->num_rows();
      $n = $this->db->query("SELECT *FROM tbl_master_sarana WHERE kode_kecamatan='14'");
      $b14= $n->num_rows();
      $o = $this->db->query("SELECT *FROM tbl_master_sarana WHERE kode_kecamatan='15'");
      $b15= $o->num_rows();
      $p = $this->db->query("SELECT *FROM tbl_master_sarana WHERE kode_kecamatan='16'");
      $b16= $p->num_rows();
      $q = $this->db->query("SELECT *FROM tbl_master_sarana WHERE kode_kecamatan='17'");
      $b17= $q->num_rows();
      $r = $this->db->query("SELECT *FROM tbl_master_sarana WHERE kode_kecamatan='18'");
      $b18= $r->num_rows();

       //untuk budaya

      $a = $this->db->query("SELECT *FROM tbl_master_budaya WHERE kode_kecamatan='1'");
      $c1= $a->num_rows();
      $b = $this->db->query("SELECT *FROM tbl_master_budaya WHERE kode_kecamatan='2'");
      $c2= $b->num_rows();
      $c = $this->db->query("SELECT *FROM tbl_master_budaya WHERE kode_kecamatan='3'");
      $c3= $c->num_rows();
      $d = $this->db->query("SELECT *FROM tbl_master_budaya WHERE kode_kecamatan='4'");
      $c4= $d->num_rows();
      $e = $this->db->query("SELECT *FROM tbl_master_budaya WHERE kode_kecamatan='5'");
      $c5= $e->num_rows();
      $f = $this->db->query("SELECT *FROM tbl_master_budaya WHERE kode_kecamatan='6'");
      $c6= $f->num_rows();
      $g = $this->db->query("SELECT *FROM tbl_master_budaya WHERE kode_kecamatan='7'");
      $c7= $g->num_rows();
      $h = $this->db->query("SELECT *FROM tbl_master_budaya WHERE kode_kecamatan='8'");
      $c8= $h->num_rows();
      $i = $this->db->query("SELECT *FROM tbl_master_budaya WHERE kode_kecamatan='9'");
      $c9= $i->num_rows();
      $j = $this->db->query("SELECT *FROM tbl_master_budaya WHERE kode_kecamatan='10'");
      $c10= $j->num_rows();
      $k = $this->db->query("SELECT *FROM tbl_master_budaya WHERE kode_kecamatan='11'");
      $c11= $k->num_rows();
      $l = $this->db->query("SELECT *FROM tbl_master_budaya WHERE kode_kecamatan='12'");
      $c12= $l->num_rows();
      $m = $this->db->query("SELECT *FROM tbl_master_budaya WHERE kode_kecamatan='13'");
      $c13= $m->num_rows();
      $n = $this->db->query("SELECT *FROM tbl_master_budaya WHERE kode_kecamatan='14'");
      $c14= $n->num_rows();
      $o = $this->db->query("SELECT *FROM tbl_master_budaya WHERE kode_kecamatan='15'");
      $c15= $o->num_rows();
      $p = $this->db->query("SELECT *FROM tbl_master_budaya WHERE kode_kecamatan='16'");
      $c16= $p->num_rows();
      $q = $this->db->query("SELECT *FROM tbl_master_budaya WHERE kode_kecamatan='17'");
      $c17= $q->num_rows();
      $r = $this->db->query("SELECT *FROM tbl_master_budaya WHERE kode_kecamatan='18'");
      $c18= $r->num_rows();

    ?>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <!-- grafik wisata -->
  <script type="text/javascript">
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
           <?php
            if (count($data_kec)>0) {
              foreach ($data_kec as $data) {
                echo "'" .$data['nama_kecamatan'] ."',";
              }
            }
          ?>
        ],
        datasets: [{
            label: 'Jumlah Wisata',
            backgroundColor: '#18fc03',
            borderColor: '##93C3D2',
            data: [
              '<?= $a1;?>',
              '<?= $a2;?>',
              '<?= $a3;?>',
              '<?= $a4;?>',
              '<?= $a5;?>',
              '<?= $a6;?>',
              '<?= $a7;?>',
              '<?= $a8;?>',
              '<?= $a9;?>',
              '<?= $a10;?>',
              '<?= $a11;?>',
              '<?= $a12;?>',
              '<?= $a13;?>',
              '<?= $a14;?>',
              '<?= $a15;?>',
              '<?= $a16;?>',
              '<?= $a17;?>',
              '<?= $a18;?>'    
          ]
        }]
    },
  });
  </script>
  <!-- grafik sarana -->
  <script type="text/javascript">
    var ctx = document.getElementById('gsarana').getContext('2d');
    var chart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
           <?php
            if (count($data_kec)>0) {
              foreach ($data_kec as $data) {
                echo "'" .$data['nama_kecamatan'] ."',";
              }
            }
          ?>
        ],
        datasets: [{
            label: 'Jumlah Sarana',
            backgroundColor: '#ADD8E6',
            borderColor: '##93C3D2',
            data: [
              '<?= $b1;?>',
              '<?= $b2;?>',
              '<?= $b3;?>',
              '<?= $b4;?>',
              '<?= $b5;?>',
              '<?= $b6;?>',
              '<?= $b7;?>',
              '<?= $b8;?>',
              '<?= $b9;?>',
              '<?= $b10;?>',
              '<?= $b11;?>',
              '<?= $b12;?>',
              '<?= $b13;?>',
              '<?= $b14;?>',
              '<?= $b15;?>',
              '<?= $b16;?>',
              '<?= $b17;?>',
              '<?= $b18;?>'    
          ]
        }]
    },
  });
  </script>
  <!-- grafik budaya -->
  <script type="text/javascript">
    var ctx = document.getElementById('gbudaya').getContext('2d');
    var chart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
           <?php
            if (count($data_kec)>0) {
              foreach ($data_kec as $data) {
                echo "'" .$data['nama_kecamatan'] ."',";
              }
            }
          ?>
        ],
        datasets: [{
            label: 'Jumlah Budaya',
            backgroundColor: '#a103fc',
            borderColor: '##93C3D2',
            data: [
              '<?= $c1;?>',
              '<?= $c2;?>',
              '<?= $c3;?>',
              '<?= $c4;?>',
              '<?= $c5;?>',
              '<?= $c6;?>',
              '<?= $c7;?>',
              '<?= $c8;?>',
              '<?= $c9;?>',
              '<?= $c10;?>',
              '<?= $c11;?>',
              '<?= $c12;?>',
              '<?= $c13;?>',
              '<?= $c14;?>',
              '<?= $c15;?>',
              '<?= $c16;?>',
              '<?= $c17;?>',
              '<?= $c18;?>'    
          ]
        }]
    },
  });
  </script>