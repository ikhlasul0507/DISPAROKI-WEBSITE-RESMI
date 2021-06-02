<div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>">
</div>
<div id="<?php if($peta['is_active']==1){ echo "mapid";}?>" style="z-index: 2"></div>
<style type="text/css">
    #mapid { height: 480px; }
</style>
   <script type="text/javascript">
    //setting map koordinat awal
    //level zoom pada map
    <?php $a= $peta['zoom']; ?>
    var mymap = L.map('mapid').setView([-4.03756, 103.1992472], <?= $a;?>);
    
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
        .bindPopup("<div><center><h4><?= $value->nama_master_wisata;?></h4><br><img src='<?= base_url();?>assets/admin/img/master_wisata/<?= $value->photo_wisata;?>' width='200px' height='150px'><br><br><a href='<?= $value->link_google;?>' class='genric-btn primary circle' style='font-size:25px' target='_blank'><i class='fa fa-mail-forward'> Telusuri...</i></a></div>")
        .bindTooltip("<?= $value->nama_master_wisata;?>").openTooltip()
        .addTo(mymap);  
    <?php } ?>
    //pengulangan marker yang di ambil dari data base
    <?php foreach ($data_srnmap as $key => $value){?>
        L.marker([<?= $value->latitude;?>, <?= $value->longtitude;?>],{icon:iconsrn})
        .bindPopup("<div><center><h4><?= $value->nama_master_sarana;?></h4><br><img src='<?= base_url();?>assets/admin/img/master_sarana/<?= $value->photo_sarana;?>' width='200px' height='150px'><br><br><a href='<?= $value->link_google;?>' class='genric-btn primary circle' style='font-size:25px' target='_blank'><i class='fa fa-mail-forward'> Telusuri...</i></a></div>")
        .bindTooltip("<?= $value->nama_master_sarana;?>").openTooltip()
        .addTo(mymap);  
    <?php } ?>
     //pengulangan marker yang di ambil dari data base
    <?php foreach ($data_bdymap as $key => $value){?>
        L.marker([<?= $value->latitude;?>, <?= $value->longtitude;?>],{icon:iconbdy})
        .bindPopup("<div><center><h4><?= $value->nama_master_budaya;?></h4><br><img src='<?= base_url();?>assets/admin/img/master_budaya/<?= $value->photo_budaya;?>' width='200px' height='150px'><br><br><a href='<?= $value->link_google;?>' class='genric-btn primary circle' style='font-size:25px' target='_blank'><i class='fa fa-mail-forward'> Telusuri...</i></a></div>")
        .bindTooltip("<?= $value->nama_master_budaya;?>").openTooltip()
        .addTo(mymap);  
    <?php } ?>
    //popup saat pertama kali di jalankan pada map
    //setting marker dan popup
    L.marker([-4.03756, 103.1992472],{icon:iconlogo}).addTo(mymap)
    .bindPopup("<center><img src='<?= base_url();?>assets/users/gambar/logo.png' width='200px' height='150px'><br><h4>Dinas Kebudayaan Dan Pariwisata</h4><br>Kota Pagaralam")
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

    <br>
    <!-- video start -->
<div class="testmonial_active owl-carousel">
<?php foreach ($video as $wv):?>
<div class="single_carousel">
    <div class="video_area  overlay" style='background-image: url(assets/admin/img/master_wisata/<?= $wv->photo_wisata;?>);'>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video_wrap text-center">
                        <h3>Lihat Video</h3>
                        <p style="color: white"><?= $wv->nama_master_wisata; ?></p>
                        <div class="video_icon">
                            <a class="popup-video video_play_button" href="https://www.youtube.com/watch?v=<?php
                        $data= $wv->link_video;
                        $namafile= substr($data,-11);
                        echo $namafile;
                        ?>">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
<?php foreach ($video_sar as $wv):?>
    <div class="single_carousel">
     <div class="video_area  overlay" style='background-image: url(assets/admin/img/master_sarana/<?= $wv->photo_sarana;?>);'>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video_wrap text-center">
                        <h3>Lihat Video</h3>
                        <p style="color: white"><?= $wv->nama_master_sarana; ?></p>
                        <div class="video_icon">
                            <a class="popup-video video_play_button" href="https://www.youtube.com/watch?v=<?php
                        $data= $wv->link_video;
                        $namafile= substr($data,-11);
                        echo $namafile;
                        ?>">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
<?php foreach ($video_bud as $wv):?>
    <div class="single_carousel">
     <div class="video_area  overlay" style='background-image: url(assets/admin/img/master_budaya/<?= $wv->photo_budaya;?>);'>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video_wrap text-center">
                        <h3>Lihat Video</h3>
                        <p style="color: white"><?= $wv->nama_master_budaya; ?></p>
                        <div class="video_icon">
                            <a class="popup-video video_play_button" href="https://www.youtube.com/watch?v=<?php
                        $data= $wv->link_video;
                        $namafile= substr($data,-11);
                        echo $namafile;
                        ?>">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
</div>
<br>
   <br>

    <div class="travel_variation_area" style="background: linear-gradient(#ff4d21,   #edff21); ">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <a href="#" data-toggle="modal" data-target="#swisata">
                        <div class="icon">
                            <img style="width: 60px; height: 60px" src="<?= base_url('assets/users/');?>img/svg_icon/oasis.svg" alt="">
                        </div>
                        <h3 style="color: white">Grafik Sebaran Wisata </h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <a href="#" data-toggle="modal" data-target="#exampleSarana">
                        <div class="icon">
                            <img style="width: 60px; height: 60px" src="<?= base_url('assets/users/');?>img/svg_icon/sauna.svg" alt="">
                        </div>
                        <h3 style="color: white">Grafik Sebaran Sarana</h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <a href="#" data-toggle="modal" data-target="#exampleBudaya">
                        <div class="icon">
                            <img style="width: 60px; height: 60px" src="<?= base_url('assets/users/');?>img/svg_icon/dance.svg" alt="">
                        </div>
                        <h3 style="color: white">Grafik Sebaran Budaya</h3>
                        </a>
                    </div>
                </div> 
            </div>
        </div>
    </div><br>
<!-- video finish -->
    <!-- popular_destination_area_start  -->
    <div class="popular_destination_area" style="background: linear-gradient(#ff4d21,   #edff21); ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3 style="color: white">Budaya Populer</h3>
                        <p style="color: white">Destinasi Budaya Di Kota Pagaralam Provinsi Sumatera Selatan</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php if ($data_bdy) { ?>
                <?php foreach ($data_bdy as $ws):?>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img style="height: 200px" src="<?= base_url();?>assets/admin/img/master_budaya/<?= $ws->photo_budaya;?>" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center"><?= $ws->nama_master_budaya;?><a href="<?= base_url();?>Home/detail_bdy/<?= $ws->id_master_budaya;?>">Lihat</a> </p>
                            
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php }else{ ?>
                <h4 align="center">Data Tidak Ada</h4>
           <?php } ?>
            
            </div>
        </div>
    </div>
    <!-- popular_destination_area_end  -->


<br>

    <!-- popular_destination_area_start  -->
    <div class="popular_destination_area" style="background: linear-gradient(#ff4d21,   #edff21); ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3 style="color: white">Destinasi Populer</h3>
                        <p style="color: white">Destinasi Wisata Di Kota Pagaralam Provinsi Sumatera Selatan</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php if ($data_wst) { ?>
                <?php foreach ($data_wst as $ws):?>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img style="height: 200px" src="<?= base_url();?>assets/admin/img/master_wisata/<?= $ws->photo_wisata;?>" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center"><?= $ws->nama_master_wisata;?><a href="<?= base_url();?>Home/detail_wst/<?= $ws->id_master_wisata;?>">Lihat</a> </p>
                            
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
             <?php }else{ ?>
                <h4 align="center">Data Tidak Ada</h4>
           <?php } ?>
            </div>
        </div>
    </div>
    <!-- popular_destination_area_end  -->
    
    <div class="recent_trip_area" style="background: linear-gradient(#ff4d21,   #edff21); ">
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                     <div class="section_title text-center mb_70">
                        <h3 style="color: white">Sarana Populer</h3>
                        <p style="color: white">Sarana Wisata Di Kota Pagaralam Provinsi Sumatera Selatan</p>
                    </div>
                </div>
            </div>
            <div class="row">
               <?php if ($data_srn) { ?>
                <?php foreach ($data_srn as $sr):?>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img style="width:400px;height: 200px" src="<?= base_url();?>assets/admin/img/master_sarana/<?= $sr->photo_sarana;?>" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span style="color: white"><?= $sr->nama_master_sarana;?></span>
                            </div>
                            <a href="<?= base_url();?>Home/detail_srn/<?= $sr->id_sarana;?>">
                                <h3 style="color:white">
                                    <?php 
                                    $kalimat = $sr->deskripsi_sarana1;
                                    $sub_kalimat = substr($kalimat,0,50);
                                    echo $sub_kalimat.'.....';
                                    ?>
                                </h3>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                 <?php }else{ ?>
                <h4 align="center">Data Tidak Ada</h4>
           <?php } ?>
            </div>
        </div>
    </div>

    <!-- newletter_area_start  -->
    <div class="newletter_area overlay">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="newsletter_text">
                                <h4>Pengajuan Wisata</h4>
                                <p>Tau Tempat Wisata Atau Kuliner Di Kota Pagaralam, Yook Rekomendasikan DiKolom Disamping ...</p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="mail_form">
                                <div class="row no-gutters">
                                    <div class="col-lg-12 col-md-8">
                                        <div class="newsletter_btn">
                                            <button class="boxed-btn4 " data-toggle="modal" data-target="#exampleRekomendasi">Rekomendasi</button>
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
    <!-- newletter_area_end  -->

    <div class="popular_places_area" style="background: linear-gradient(#ff4d21,   #edff21);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3 style="color: white">Berita Dan Kegiatan</h3>
                        <p style="color: white">Artikel Berita dan Kegiatan Dinas Pariwisata Kota Pagaralam</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php if ($data_brt) { ?>
                <?php foreach ($data_brt as $br):?>
                <div class="col-lg-4 col-md-6" >
                    <div class="single_place" style="height: 400px">
                        <div class="thumb">
                            <img style="height: 200px" src="<?= base_url();?>assets/admin/img/berita/<?= $br->photo_berita;?>" alt="">
                            <a href="<?= base_url();?>br1<?= $br->id_berita;?>5t/detail-pengumuman-KhmmqOdAo8ke86DOVcla" class="prise">Lihat</a>
                        </div>
                        <div class="place_info">
                            <a href="<?= base_url();?>br1<?= $br->id_berita;?>5t/detail-pengumuman-KhmmqOdAo8ke86DOVcla"><h3><?= $br->judul_berita; ?></h3></a>
                            <p>
                            <?php 
                            $kalimat = $br->deskripsiberita1;
                            $sub_kalimat = substr($kalimat,0,50);
                            echo $sub_kalimat.'.....';
                            ?>
                            </p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i>
                                     <a href="#">By Admin || Disparoki </a>
                                </span>
                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#"><?= $br->waktu_berita;?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                 <?php }else{ ?>
                <h4 align="center">Data Tidak Ada</h4>
           <?php } ?>
            </div>
        </div>
    </div>





    <!-- testimonial_area  -->
    <div class="testimonial_area" style="background: linear-gradient(#ff4d21,   #edff21);">
        <div class="container">
            <div class="row">
               
                <div class="col-xl-12">

                    <div class="testmonial_active owl-carousel">
                        <?php foreach ($data_asp as $as):?>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <h3>Aspirasi</h3>
                                        <div class="author_thumb">
                                            <img src="<?= base_url();?>assets/users/gambar/<?= $as['photo_aspirasi'];?>" alt="" style="width: 100px;height: 100px;border-radius: 100%">
                                        </div>
                                        <p> 
                                            <?php 
                                                $kalimat = $as['aspirasi'];
                                                $sub_kalimat = substr($kalimat,0,50);
                                                echo $sub_kalimat.'.....';
                                             ?>
                                        </p>
                                        <div class="testmonial_author">
                                            <h3  style="color: white"> <?= $as['judul_aspirasi']; ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <?php endforeach; ?>

                      
                    </div>
                </div>

            </div>
            <center>>
            <div class="col">
            <a class="boxed-btn4 justify-content-center" href="#" data-toggle="modal" data-target="#exampleModal" href="#">Sampaikan Aspirasi</a>
            </div>
            </center>
        </div>
    </div>
    <!-- /testimonial_area  -->



  <!-- Modal -->
  <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="serch_form">
            <input type="text" placeholder="Search" >
            <button type="submit">search</button>
        </div>
      </div>
    </div>
  </div>
    <!-- link that opens popup -->

     <!-- Modal -->
  <div class="modal fade custom_search_pop" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" style="background: linear-gradient(#ff4d21,   #edff21); ">
        <form role="form" action="<?= base_url();?>Home/tambahasp" method="post" enctype="multipart/form-data">
        <div class="container">
             <h3 class="text-center mt-3" style="color: white">Formulir Aspirasi</h3><hr>
             <center>
                <?php foreach ($data_info as $in):?>
              <img style="width: 140px; height: 50px;" src="<?= base_url('assets/users/');?>gambar/<?= $in['logo']; ?>" alt="">
                <?php endforeach; ?>
             </center>
             <div class="mt-10">
                <input type="text" name="judul_aspirasi" placeholder="Judul" onfocus="this.placeholder = 'Judul'" onblur="this placeholder = 'Masukan Judul'" required class="single-input-primary">
             </div>
              <div class="mt-10">
                <input type="file" name="photo_aspirasi" placeholder="Primary color" onfocus="this.placeholder = ''" onblur="this placeholder = 'Primary color'" required class="single-input-primary">
             </div>
             <div class="mt-10">
             <textarea class="single-textarea" placeholder="Aspirasi" name="aspirasi" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Aspirasi'" required></textarea>
             </div>
             <button type="submit" class="genric-btn danger mt-3 mb-3">Kirim</button>
        </div>
    </form>
      </div>
    </div>
  </div>

    <!-- Modal -->
  <div class="modal fade custom_search_pop" id="exampleRekomendasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" style="background: linear-gradient(#ff4d21,   #edff21); ">
        <form role="form" action="<?= base_url();?>Home/tambahpgj" method="post" enctype="multipart/form-data">
        <div class="container">
             <h3 class="text-center mt-3" style="color: white">Rekomendasi Wisata</h3><hr>
             <center>
                <?php foreach ($data_info as $in):?>
              <img style="width: 140px; height: 50px;" src="<?= base_url('assets/users/');?>gambar/<?= $in['logo']; ?>" alt="">
                <?php endforeach; ?>
             </center>
             <div class="mt-10">
                <input type="hidden" name="kode_pengajuan" value="<?php echo $kode; ?>" class="single-input-primary" readonly="readonly">
             </div>
             <div class="input-group-icon mt-10">
                    <div class="form-select" id="default-select">
                       <select class="select2" name="kode_kecamatan" required oninvalid="this.setCustomValidity('Data Harus Dipilih !')" oninput="setCustomValidity('')">
                                    <option selected disabled="disabled" value="">--Nama Kecamatan--</option>
                                    <?php foreach ($data_kec as $kec):?>
                                    <option value="<?= $kec['kode_kecamatan'];?>"><?= $kec['nama_kecamatan'];?></option>
                                    <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="input-group-icon mt-10">
                    <div class="form-select" id="default-select">
                       <select class="select2"  name="kode_desa" required oninvalid="this.setCustomValidity('Data Harus Dipilih !')" oninput="setCustomValidity('')">
                                    <option selected disabled="disabled" value="">--Nama Desa--</option>
                                    <?php foreach ($data_joinkecdes as $jkd):?>
                                    <option value="<?= $jkd->kode_desa;?>"><?= $jkd->nama_desa;?></option>
                                    <?php endforeach; ?>
                    </select>
                    </div>
                </div>
             
             <div class="mt-10">
                <input type="text" name="nama_pengajuan" placeholder="Judul Pengajuan" onfocus="this.placeholder = 'Judul'" onblur="this placeholder = 'Masukan Judul Pengajuan'" required class="single-input-primary">
             </div>
              <div class="mt-10">
                <input type="file" name="photo_pengajuan" placeholder="Primary color" onfocus="this.placeholder = ''" onblur="this placeholder = 'Primary color'" required class="single-input-primary">
             </div>
             <div class="mt-10">
             <textarea class="single-textarea" placeholder="Deskripsi" name="deskripsi_pengajuan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Deskripsi'" required></textarea>
             </div>
              <div class="mt-10">
                <input type="text" name="alamat_pengajuan" placeholder="Alamat Pengajuan" onfocus="this.placeholder = ''" onblur="this placeholder = 'Primary color'" required class="single-input-primary">
             </div>
              <div class="mt-10">
                <input type="text" name="kontak_pengajuan" placeholder="Kontak Pengajuan" onfocus="this.placeholder = ''" onblur="this placeholder = 'Primary color'" required class="single-input-primary">
             </div>
             <button type="submit" class="genric-btn danger mt-3 mb-3">Kirim</button>
        </div>
    </form>
      </div>
    </div>
  </div>

<!-- Modal grafik wisata -->
<div class="modal fade" id="swisata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 align="center" class="mt-2">Grafik Persebaran Wisata Per Kecamatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         
        <div class="box-body">
            <canvas id="myChart" style="width: 20px;height: 20px"></canvas>
        </div> 
      </div>
    </div>
  </div>
</div>

<!-- Modal grafik sarana -->
<div class="modal fade" id="exampleSarana" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h5 align="center" class="mt-2">Grafik Persebaran Sarana Per Kecamatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         
       <div class="box-body">
            <canvas id="gsarana" style="width: 20px;height: 20px"></canvas>
        </div>  
      </div>
    </div>
  </div>
</div>

<!-- Modal grafik budaya -->
<div class="modal fade" id="exampleBudaya" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h5 align="center" class="mt-2">Grafik Persebaran Budaya Per Kecamatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         
       <div class="box-body">
            <canvas id="gbudaya" style="width: 20px;height: 20px"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>

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
    <!-- link that opens popup -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   
