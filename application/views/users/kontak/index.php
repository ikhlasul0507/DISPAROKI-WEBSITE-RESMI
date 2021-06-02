 <!-- ================ contact section start ================= -->
 <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>">
   
    <div class="container">
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

    //set icon untuk marker
    var iconlogo = L.icon({
    iconUrl: '<?= base_url();?>assets/users/img/svg_icon/logo.svg',
    iconSize:     [38, 95], // size of the icon
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnch
    });


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
    
    
                <div class="row" style="background: linear-gradient(#ff4d21,   #edff21);">
                    <div class="col-12">
                        <h2 class="contact-title">Pengaduan</h2>
                    </div>
                    <div class="col-lg-8">
                        <form action="<?= base_url();?>Kontak/tambahknt" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="pesan_kontak" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pesan'" placeholder="Masukan Pesan" required></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="nama_kontak" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama'" placeholder="Nama" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email_kontak" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="judul_kontak" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Judul'" placeholder="Masukan Judul" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                            <button type="submit" class="genric-btn danger mt-3 mb-3">Kirim</button>
                            </div>
                        </form>
                    </div>
                    <?php foreach ($data_info as $dt):?>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home" style="color: white"></i></span>
                            <div class="media-body">
                                <h3>Alamat</h3>
                                <p style="color: white"><?= $dt['alamat'];?></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet" style="color: white"></i></span>
                            <div class="media-body">
                                <h3>Telepon</h3>
                                <p style="color: white"><?= $dt['handphone'];?></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email" style="color: white"></i></span>
                            <div class="media-body">
                                <h3>Email</h3>
                                <p style="color: white"><?= $dt['email'];?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
       
    <!-- ================ contact section end ================= -->
    