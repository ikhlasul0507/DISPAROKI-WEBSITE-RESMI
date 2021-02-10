<div class="header justify-content-center" style="background: linear-gradient(#00BFFF,   #87CEFA);">
    <h4 class="text-center">Persebaran Wisata Kuliner Di Kabupaten Ogan Komering Ilir</h4>
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
    var iconlogo = L.icon({
    iconUrl: '<?= base_url();?>assets/users/img/svg_icon/logo.svg',
    iconSize:     [38, 95], // size of the icon
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnch
    });
    //pengulangan marker yang di ambil dari data base
    <?php foreach ($data_wstk as $key => $value){?>
        L.marker([<?= $value->latitude;?>, <?= $value->longtitude;?>],{icon:iconwst})
        .bindPopup("<div><center><h4><?= $value->nama_master_wisata;?></h4><br><img src='<?= base_url();?>assets/admin/img/master_wisata/<?= $value->photo_wisata;?>' width='200px' height='150px'><br><br><a href='<?= $value->link_google;?>' class='genric-btn primary circle' style='font-size:25px' target='_blank'><i class='fa fa-mail-forward'> Telusuri...</i></a></div>")
        .bindTooltip("<?= $value->nama_master_wisata;?>").openTooltip()
        .addTo(mymap);  
    <?php } ?>
   
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


    <div class="popular_places_area" style="background: linear-gradient(#00BFFF,   #87CEFA);">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="filter_result_wrap">
                        <h3>Filter Pencarian</h3>
                        <form method="post" action="<?= base_url();?>WisataKuliner/cari">
                        <div class="filter_bordered" style="background-color: white">
                            <div class="filter_inner">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="single_select">
                                            <select name="cari" required oninvalid="this.setCustomValidity('Data Harus Dipilih !')" oninput="setCustomValidity('')">
                                                <option selected disabled="disabled" value="">--Nama Kecamatan--</option>
                                               <?php foreach ($data_kec as $kec):?>
                                                <option value="<?= $kec['kode_kecamatan'];?>"><?= $kec['nama_kecamatan'];?></option>
                                                <?php endforeach; ?>
                                              </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="reset_btn">
                                <button class="boxed-btn4" type="submit">Cari</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                       <?php foreach ($data_wstk as $wk):?>
                         <div class="col-lg-6 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <img style="width: 500px;height: 200px" src="<?= base_url();?>assets/admin/img/master_wisata/<?= $wk->photo_wisata;?>" alt="">
                                </div>
                                <div class="place_info">
                                    <a href="<?= base_url()?>WisataKuliner/detail/<?= $wk->id_master_wisata;?>"><h3><?= $wk->nama_master_wisata;?></h3></a>
                                    <p><?= $wk->nama_kecamatan;?></p>
                                    <div class="rating_days d-flex justify-content-between">
                                        <span class="d-flex justify-content-center align-items-center">
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i>
                                             <a href="#">Selengkapnya</a>
                                        </span>
                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="<?= base_url()?>WisataKuliner/detail/<?= $wk->id_master_wisata;?>">Admin</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                       
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="more_place_btn text-center">
                                <a class="boxed-btn4" href="#">Refresh</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

       