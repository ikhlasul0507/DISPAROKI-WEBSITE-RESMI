<div class="header justify-content-center">
    <h4 class="text-center">Hasil Pencarian</h4>
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
    <?php foreach ($listwst as $key => $value){?>
        L.marker([<?= $value->latitude;?>, <?= $value->longtitude;?>],{icon:iconwst})
        .bindPopup("<div><center><h4><?= $value->nama_master_wisata;?></h4><br><img src='<?= base_url();?>assets/admin/img/master_wisata/<?= $value->photo_wisata;?>' width='200px' height='150px'><br><br><a href='<?= $value->link_google;?>' class='genric-btn primary circle' style='font-size:25px' target='_blank'><i class='fa fa-mail-forward'> Telusuri...</i></a></div>")
        .bindTooltip("<?= $value->nama_master_wisata;?>").openTooltip()
        .addTo(mymap);  
    <?php } ?>
    //pengulangan marker yang di ambil dari data base
    <?php foreach ($listsrn as $key => $value){?>
        L.marker([<?= $value->latitude;?>, <?= $value->longtitude;?>],{icon:iconsrn})
        .bindPopup("<div><center><h4><?= $value->nama_master_sarana;?></h4><br><img src='<?= base_url();?>assets/admin/img/master_sarana/<?= $value->photo_sarana;?>' width='200px' height='150px'><br><br><a href='<?= $value->link_google;?>' class='genric-btn primary circle' style='font-size:25px' target='_blank'><i class='fa fa-mail-forward'> Telusuri...</i></a></div>")
        .bindTooltip("<?= $value->nama_master_sarana;?>").openTooltip()
        .addTo(mymap);  
    <?php } ?>
     //pengulangan marker yang di ambil dari data base
    <?php foreach ($listbdy as $key => $value){?>
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
    <div class="popular_destination_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Hasil Pencarian</h3>
                    </div>
                </div>
            </div>
            <!-- list wisata -->
            <h3>Wisata</h3>
            <div class="row">
            <?php if ($listwst) { ?>
                <?php foreach ($listwst as $ws):?>
                <div class="col-lg-4 col-md-6">
                    <a href="<?= base_url();?>Home/detail_wst/<?= $ws->id_master_wisata;?>">
                    <div class="single_destination">
                        <div class="thumb">
                            <img style="height: 200px" src="<?= base_url();?>assets/admin/img/master_wisata/<?= $ws->photo_wisata;?>" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">
                                <?php 
                                echo highlight_phrase($ws->nama_master_wisata, $high,'<font style="color:#dd4814; background:#dedede">', '</font>');
                                ?>
                                <br>
                                <small>
                                <?php 
                                echo highlight_phrase($ws->nama_kecamatan, $high,'<font style="color:#dd4814; background:#dedede">', '</font>');?>
                                </small>
                            <a href="#">Lihat</a>
                            </p>
                            
                        </div>
                    </div>
                    </a>
                </div>
                <?php endforeach; ?>
            <?php }else{ ?>
                <h4 align="center">Data Tidak Ada</h4>
           <?php } ?>
            
            </div>


            <!-- list sarana -->
            <h3>Sarana</h3>
            <div class="row">
            <?php if ($listsrn) { ?>
                <?php foreach ($listsrn as $ws):?>
                <div class="col-lg-4 col-md-6">
                    <a href="<?= base_url();?>Home/detail_srn/<?= $ws->id_sarana;?>">
                    <div class="single_destination">
                        <div class="thumb">
                            <img style="height: 200px" src="<?= base_url();?>assets/admin/img/master_sarana/<?= $ws->photo_sarana;?>" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">
                                <?php 
                                echo highlight_phrase($ws->nama_master_sarana, $high,'<font style="color:#dd4814; background:#dedede">', '</font>');
                                ?>
                                <br>
                                <small>
                                <?php 
                                echo highlight_phrase($ws->nama_kecamatan, $high,'<font style="color:#dd4814; background:#dedede">', '</font>');?>
                                </small>
                            <a href="">Lihat</a>
                            </p>
                            
                        </div>
                    </div>
                    </a>
                </div>
                <?php endforeach; ?>
            <?php }else{ ?>
                <h4 align="center">Data Tidak Ada</h4>
           <?php } ?>
            
            </div>

            <!-- list budaya -->
            <h3>Budaya</h3>
            <div class="row">
            <?php if ($listbdy) { ?>
                <?php foreach ($listbdy as $ws):?>
                <div class="col-lg-4 col-md-6">
                    <a href="<?= base_url();?>Home/detail_bdy/<?= $ws->id_master_budaya;?>">
                    <div class="single_destination">
                        <div class="thumb">
                            <img style="height: 200px" src="<?= base_url();?>assets/admin/img/master_budaya/<?= $ws->photo_budaya;?>" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">
                                <?php 
                                echo highlight_phrase($ws->nama_master_budaya, $high,'<font style="color:#dd4814; background:#dedede">', '</font>');
                                ?>
                                <br>
                                <small>
                                <?php 
                                echo highlight_phrase($ws->nama_kecamatan, $high,'<font style="color:#dd4814; background:#dedede">', '</font>');?>
                                </small>
                            <a href="">Lihat</a>
                            </p>
                            
                        </div>
                    </div>
                    </a>
                </div>
                <?php endforeach; ?>
            <?php }else{ ?>
                <h4 align="center">Data Tidak Ada</h4>
           <?php } ?>
            
            </div>

            <!-- list berita -->
            <h3>Berita</h3>
            <div class="row">
            <?php if ($listbrt) { ?>
                <?php foreach ($listbrt as $ws):?>
                <div class="col-lg-4 col-md-6">
                    <a href="<?= base_url();?>br1<?= $ws->id_berita;?>5t/detail-pengumuman-KhmmqOdAo8ke86DOVcla">
                    <div class="single_destination">
                        <div class="thumb">
                            <img style="height: 200px" src="<?= base_url();?>assets/admin/img/berita/<?= $ws->photo_berita;?>" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">
                                <?php 
                                echo highlight_phrase($ws->judul_berita, $high,'<font style="color:#dd4814; background:#dedede">', '</font>');
                                ?>
                                <br>
                                <small>
                                <?php 
                                echo highlight_phrase($ws->nama_kecamatan, $high,'<font style="color:#dd4814; background:#dedede">', '</font>');?>
                                </small>
                            <a href="">Lihat</a>
                            </p>
                            
                        </div>
                    </div>
                    </a>
                </div>
                <?php endforeach; ?>
            <?php }else{ ?>
                <h4 align="center">Data Tidak Ada</h4>
           <?php } ?>
            
            </div>

        </div>
    </div>
       