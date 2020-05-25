<?php foreach ($data_srn as $ds):?>
<div class="destination_details_info">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-8 col-md-9">
                    <h3><?= $ds->nama_master_sarana; ?></h3><hr>
                    <!-- Video -->
                    <iframe width="100%" height="400" src="<?= $ds->link_video; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-lg-8 col-md-9">

                    <div class="destination_info">
                        

                         <ul class="list-group">
                          <li class="list-group-item active">Detail</li>
                          <li class="list-group-item"><i class="fa fa-credit-card"></i> || <?= $ds->nama_master_sarana; ?></li>
                          <li class="list-group-item"><i class="fa fa-map"></i> || <?= $ds->nama_desa; ?>, <?= $ds->nama_kecamatan; ?></li>
                          <li class="list-group-item">
                            <h4>Deskripsi <?= $ds->nama_master_sarana; ?></h4>
                            <div class="row">
                                <div class="col">
                                   <img style="width: 350px;height: 200px" src="<?= base_url();?>assets/admin/img/master_sarana/<?= $ds->photo_sarana;?>" alt="">
                                </div>
                                <div class="col">
                                    <p><?= $ds->deskripsi_sarana1;?>.</p>
                                </div>
                            </div>
                           
                            <div class="single_destination">
                               
                                <p><?= $ds->deskripsi_sarana2;?>.</p>
                            </div>
                            <div class="single_destination">
                        
                                <p><?= $ds->deskripsi_sarana3;?>.</p>
                            </div>
                            
                        </li>
                          <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4>Buka Di Google Map : <?= $ds->latitude;?>,<?= $ds->longtitude; ?></h4>
                                </div>
                                <div class="col-md-4">
                                    <ul class="social-icons">
                                    <h5>Bagikan</h5>
                                    <a rel='nofollow' href="javascript:void(0);" onclick="popUp=window.open('https://www.facebook.com/sharer.php?u=<?= base_url();?><?= $this->uri->segment(1); ?>/detail/<?= $ds->id_sarana; ?>')"><img src='http://syam.eu.org/icon/fb.jpg' alt='' width='25' height='25'></a>

                                    <a rel='nofollow' href="javascript:void(0);" onclick="popUp=window.open('https://plus.google.com/share?url=<?= base_url();?><?= $this->uri->segment(1); ?>/detail/<?= $ds->id_sarana; ?>');">
                                    <img src='http://syam.eu.org/icon/g.jpg' alt='' width='25' height='25'></a>

                                    <a rel='nofollow' href="javascript:void(0);" onclick="popUp=window.open('http://www.linkedin.com/shareArticle?mini=true&url=<?= base_url();?><?= $this->uri->segment(1); ?>/detail/<?= $ds->id_sarana; ?>');">
                                    <img src='http://syam.eu.org/icon/in.jpg' alt='' width='25' height='25'></a> 

                                    <a rel='nofollow' href="javascript:void(0);" onclick="popUp=window.open('https://twitter.com/share?url=<?= base_url();?><?= $this->uri->segment(1); ?>/detail/<?= $ds->id_sarana; ?>');">
                                    <img src='http://syam.eu.org/icon/tw.jpg' alt='' width='25' height='25'></a>

                                    <a rel='nofollow' href="javascript:void(0);" onclick="popUp=window.open('http://pinterest.com/pin/create/button/?url=<?= base_url();?><?= $this->uri->segment(1); ?>/detail/<?= $ds->id_sarana; ?>');" >
                                    <img src='http://syam.eu.org/icon/p.jpg' alt='' width='25' height='25'></a> 

                                    <a rel='nofollow' href="javascript:void(0);" onclick="popUp=window.open('whatsapp://send?text=<?= base_url();?><?= $this->uri->segment(1); ?>/detail/<?= $ds->id_sarana; ?>');">
                                    <img src='http://syam.eu.org/icon/wa.jpg' alt='' width='25' height='25'></a>

                                    <a rel='nofollow' href="javascript:void(0);" onclick="popUp=window.open('mailto:?Subject=&Body=<?= base_url();?><?= $this->uri->segment(1); ?>/detail/<?= $ds->id_sarana; ?>');"><img src='http://syam.eu.org/icon/em.jpg' alt='' width='25' height='25'></a>

                                 </ul>
                            </div>
                        </div>
                        <a href="<?= base_url('home/QRcode/'.$ds->link_google);?>" target="blank">
                        <img src="<?= base_url('home/QRcode/'.$ds->link_google);?>">
                        </a>
                        <p class="comment-count"><span class="align-middle btn" onclick="window.print();"><i class="fa fa-print" ></i>Print</span></p>
                          </li>

                        </ul>
                        
                    </div>
                    

                </div>
            </div>
            <!-- bradcam_area  -->
            <div class="d-none d-sm-block mb-5 pb-4">
                   <div class="header justify-content-center">
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
    <?php foreach ($data_srn as $key => $value){?>
        L.marker([<?= $value->latitude;?>, <?= $value->longtitude;?>],{icon:iconwst})
        .bindPopup("<div><center><h4><?= $value->nama_master_sarana;?></h4><br><img src='<?= base_url();?>assets/admin/img/master_sarana/<?= $value->photo_sarana;?>' width='200px' height='150px'><br><br><a href='<?= $value->link_google;?>' class='genric-btn primary circle' style='font-size:25px' target='_blank'><i class='fa fa-mail-forward'> Telusuri...</i></a></div>")
        .bindTooltip("<?= $value->nama_master_sarana;?>").openTooltip()
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
    
                </div>
    </div>
    </div>
<?php endforeach; ?>
