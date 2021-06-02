  <section class="content">
          <div class="box">
            <div class="box-header">
              <div class="row">
                <div class="col-xs-8"><h3 class="box-title"><b><?= $link.' '.$link1;?></b></h3>
                  <!-- notifikasi -->
                  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>">
                  </div>
                  <!-- end notifikasi -->
                </div>
              <div class="col-xs-4">
                <!-- tools box -->
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
              <div class="nav-tabs-custom">
                                
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Beranda</a></li>
              <li><a href="#tab_2" data-toggle="tab">Master</a></li>
              <li><a href="#tab_3" data-toggle="tab">Data</a></li>
              <li><a href="#tab_4" data-toggle="tab">Informasi</a></li>
              <li><a href="#tab_5" data-toggle="tab">Kalender Agenda</a></li>
              <li><a href="#tab_6" data-toggle="tab">Akses Akun</a></li>
              <li><a href="#tab_7" data-toggle="tab">Aplikasi</a></li>
              <li><a href="#tab_8" data-toggle="tab">Peta</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <ul class="list-group">
                  <li class="list-group-item active">Beranda</li>
                  <div class="col-md-12">
                    <div class="box box-solid">
                      <!-- /.box-header -->
                      <div class="box-body">
                        <div class="box-group" id="accordion">
                          <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                          <div class="panel box box-primary">
                            <div class="box-header with-border">
                              <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                  Beranda
                                </a>
                              </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                              <div class="box-body">
                                Pada Menu Beranda Merupakan Rekapan semua data yang dikelola oleh sistem dan ditampilkan baik dalam bentuk persebaran titik lokasi, grafik potensi perkecamatan, dan tabel data.
                              </div>
                            </div>
                          </div>
                         
                         
                        </div>
                      </div>
                      <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                  </div>
                  <!-- /.col -->
                </ul>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <ul class="list-group">
                  <li class="list-group-item active">Master</li>
                   <div class="col-md-12">
                    <div class="box box-solid">
                      <!-- /.box-header -->
                      <div class="box-body">
                        <div class="box-group" id="accordion">
                          <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                          <div class="panel box box-primary">
                            <div class="box-header with-border">
                              <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse0">
                                  Data Wisata
                                </a>
                              </h4>
                            </div>
                            <div id="collapse0" class="panel-collapse collapse">
                              <div class="box-body">
                                Pada Halaman data wisata,merupakan tampilan data wisata pada dinas kabudayaan dan pariwisata Kota Pagaralam , dan pengeloaanya dapat dilakukan oleh admin, kepala dinas, dan kepala bagian. adapun pengelolaannya dapat beruapa :
                                <ol>
                                  <li>Tambah wisata<br>Untuk Menambahkan wisata, Tekan tombol <b>Tambah </b>Di atas tabel. kemudian isi data seusai formulir, pada data koordinat lotitude dan longitude. bisa menggunakan google map. lihat panduan berikut :<br><iframe width="560" height="315" src="https://www.youtube.com/embed/ulnns12dr-Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>Dan juga bisa gunakan tombol <b>Koordinat</b> diatas tabel.</li>
                                  <li>Laporan Excel<br>Untuk merekap data wisata secara keseluruhan dalam bentuk excel dengan cara menekan tombol <b>Excel</b> diatas tabel.</li>
                                  <li>Laporan Print<br>Untuk merekap data wisata secara keseluruhan dalam bentuk print dengan cara menekan tombol <b>Print</b> diatas tabel.</li>
                                  <li>Ambil Titik Koordinat<br>Pada Saat menekan tombol <b>Koordinat</b> ,untuk mengambil data lotitude dan longtitude dengan cara mengarahkan titik lokasi ,kemudian klik titik lokasi tersebut, dan akan muncul koordinat lotitude dan longtitude.</li>
                                  <li>Status Video wisata<br>Pada Status video wisata ,Jika Status <b>Video lokal</b> berarti video sedang tayang dilokal ,untuk mengubah nya tekan tombol <b>Tayang Dilokal</b>, jika status <b>Video Sedang Tayang</b>berrti video sedang tayang dipublic dan dapat dilihat dipublic, untuk mengubah nya tekan tombol <b>Tayangkan</b>.</li>
                                  <li>Edit wisata<br>Untuk mengedit wisata ,tekan tombol <b>Edit</b> sebelah kanan yang sejajar dengan data yang akan diedit. kemudia edit data lalu tekan tombol <b>Edit</b></li>
                                  <li>Hapus Sarana<br>Untuk Menghapus wisata, tekan tombol <b>Hapus</b> sebelah kanan yang sesuai dengan data wisata yang akan dihapus.</li>
                                  <br>Catatan * 
                                  <br><small>Cara memasukan link video dari yt :<br>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/hZCrL80aO4w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <br>Cara memasukan link Google :<br>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Y7bjftsLVaE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                  </small>
                                </ol>
                              </div>
                            </div>
                          </div>
                          <div class="panel box box-primary">
                            <div class="box-header with-border">
                              <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse">
                                  Data Budaya
                                </a>
                              </h4>
                            </div>
                            <div id="collapse" class="panel-collapse collapse">
                              <div class="box-body">
                                Pada Halaman data budaya,merupakan tampilan data budaya pada dinas kabudayaan dan pariwisata Kota Pagaralam , dan pengeloaanya dapat dilakukan oleh admin, kepala dinas, dan kepala bagian. adapun pengelolaannya dapat beruapa :
                                <ol>
                                  <li>Tambah budaya<br>Untuk Menambahkan budaya, Tekan tombol <b>Tambah </b>Di atas tabel. kemudian isi data seusai formulir, pada data koordinat lotitude dan longitude. bisa menggunakan google map. lihat panduan berikut :<br><iframe width="560" height="315" src="https://www.youtube.com/embed/ulnns12dr-Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>Dan juga bisa gunakan tombol <b>Koordinat</b> diatas tabel.</li>
                                  <li>Laporan Excel<br>Untuk merekap data budaya secara keseluruhan dalam bentuk excel dengan cara menekan tombol <b>Excel</b> diatas tabel.</li>
                                  <li>Laporan Print<br>Untuk merekap data budaya secara keseluruhan dalam bentuk print dengan cara menekan tombol <b>Print</b> diatas tabel.</li>
                                  <li>Ambil Titik Koordinat<br>Pada Saat menekan tombol <b>Koordinat</b> ,untuk mengambil data lotitude dan longtitude dengan cara mengarahkan titik lokasi ,kemudian klik titik lokasi tersebut, dan akan muncul koordinat lotitude dan longtitude.</li>
                                  <li>Status Video budaya<br>Pada Status video budaya ,Jika Status <b>Video lokal</b> berarti video sedang tayang dilokal ,untuk mengubah nya tekan tombol <b>Tayang Dilokal</b>, jika status <b>Video Sedang Tayang</b>berrti video sedang tayang dipublic dan dapat dilihat dipublic, untuk mengubah nya tekan tombol <b>Tayangkan</b>.</li>
                                  <li>Edit budaya<br>Untuk mengedit budaya ,tekan tombol <b>Edit</b> sebelah kanan yang sejajar dengan data yang akan diedit. kemudia edit data lalu tekan tombol <b>Edit</b></li>
                                  <li>Hapus budaya<br>Untuk Menghapus budaya, tekan tombol <b>Hapus</b> sebelah kanan yang sesuai dengan data budaya yang akan dihapus.</li>
                                  <br>Catatan * 
                                  <br><small>Cara memasukan link video dari yt :<br>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/hZCrL80aO4w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <br>Cara memasukan link Google :<br>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Y7bjftsLVaE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                  </small>
                                </ol>
                              </div>
                            </div>
                          </div>
                          <div class="panel box box-danger">
                            <div class="box-header with-border">
                              <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                  Data Sarana
                                </a>
                              </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                              <div class="box-body">
                                Pada Halaman data sarana,merupakan tampilan data sarana pada dinas kabudayaan dan pariwisata Kota Pagaralam , dan pengeloaanya dapat dilakukan oleh admin, kepala dinas, dan kepala bagian. adapun pengelolaannya dapat beruapa :
                                <ol>
                                  <li>Tambah Sarana<br>Untuk Menambahkan Sarana, Tekan tombol <b>Tambah </b>Di atas tabel. kemudian isi data seusai formulir, pada data koordinat lotitude dan longitude. bisa menggunakan google map. lihat panduan berikut :<br><iframe width="560" height="315" src="https://www.youtube.com/embed/ulnns12dr-Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>Dan juga bisa gunakan tombol <b>Koordinat</b> diatas tabel.</li>
                                  <li>Laporan Excel<br>Untuk merekap data sarana secara keseluruhan dalam bentuk excel dengan cara menekan tombol <b>Excel</b> diatas tabel.</li>
                                  <li>Laporan Print<br>Untuk merekap data sarana secara keseluruhan dalam bentuk print dengan cara menekan tombol <b>Print</b> diatas tabel.</li>
                                  <li>Ambil Titik Koordinat<br>Pada Saat menekan tombol <b>Koordinat</b> ,untuk mengambil data lotitude dan longtitude dengan cara mengarahkan titik lokasi ,kemudian klik titik lokasi tersebut, dan akan muncul koordinat lotitude dan longtitude.</li>
                                  <li>Status Video Sarana<br>Pada Status video sarana ,Jika Status <b>Video lokal</b> berarti video sedang tayang dilokal ,untuk mengubah nya tekan tombol <b>Tayang Dilokal</b>, jika status <b>Video Sedang Tayang</b>berrti video sedang tayang dipublic dan dapat dilihat dipublic, untuk mengubah nya tekan tombol <b>Tayangkan</b>.</li>
                                  <li>Edit Sarana<br>Untuk mengedit sarana ,tekan tombol <b>Edit</b> sebelah kanan yang sejajar dengan data yang akan diedit. kemudia edit data lalu tekan tombol <b>Edit</b></li>
                                  <li>Hapus Sarana<br>Untuk Menghapus sarana, tekan tombol <b>Hapus</b> sebelah kanan yang sesuai dengan data sarana yang akan dihapus.</li>
                                  <br>Catatan * 
                                  <br><small>Cara memasukan link video dari yt :<br>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/hZCrL80aO4w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <br>Cara memasukan link Google :<br>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Y7bjftsLVaE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                  </small>
                                </ol>
                              </div>
                            </div>
                          </div>
                          <div class="panel box box-success">
                            <div class="box-header with-border">
                              <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                  Data Jabatan
                                </a>
                              </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                              <div class="box-body">
                                Pada halaman data jabatan dapat dilakukan pengeloaan berupa :
                                <ol>
                                  <li>Tambah Data<br> untuk menambahkan data jabatan baru, dan mengisi data sesuai dengan formulir</li>
                                  <li>Hapus Data<br>untuk menghapus data ,tekan tombol <b>Merah</b> yang sejajar dengan data yang akn di hapus</li>
                                  <li>Edit Data <br> untuk mengedit data, tekan tombol <b>Biru</b> yang sejajar dengan data yang akan diedit.</li>
                                  <li>Laporan Excel<br>Untuk merekap data dalam bentuk excel ,tekan tombol <b>Excel</b> diatas tabel </li>
                                  <li>Laporan Print<br>Untuk merekap data dalam bentuk print ,tekan tombol <b>Print</b> diatas tabel </li>
                                  <br>Catatan * <small>Gunakan Kode jabatan dengan sesuai.</small>
                                </ol>
                              </div>
                            </div>
                          </div>
                           <div class="panel box box-success">
                            <div class="box-header with-border">
                              <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                  Data Struktur
                                </a>
                              </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                              <div class="box-body">
                                Pada Halaman data struktur, dapat melakukan pengeloaan data berupa :
                                <ol>
                                  <li>Tambah Data <br> untuk menambah kan data , tekan tombol <b>Tambah</b> di atas tabel ,dan isi data sesuai dengan formulir, gunakan foto dengan ukuran maksimal 3Mb. kemudian tekan tombol <b>Tambah</b></li>
                                  <li>Edit Data<br>untuk melakukan edit data , tekan tombol  <b>berwarna biru</b> sebelah kanan yang sejajar dengan data yang akan diedit. kemudian edit dan tekan tombol edit</li>
                                  <li>Hapus Data<br>Untuk merekap semua data struktur dalam format excel, tekan tombol <b>Excel</b> di atas tabel</li>
                                  <li>Laporan Print Data<br>Untuk merekap semua data struktur dalam bentuk print, tekan tombol <b>Print</b> di atas tabel.</li>
                                </ol>
                              </div>
                            </div>
                          </div>
                           <div class="panel box box-success">
                            <div class="box-header with-border">
                              <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                  Data Visi
                                </a>
                              </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse">
                              <div class="box-body">
                                Pada halaman visi dapat dilakukan pengeloaan berupa :
                                <ol>
                                  <li>Tambah Data<br> untuk menambahkan data visi baru, dan mengisi data sesuai dengan formulir</li>
                                  <li>Hapus Data<br>untuk menghapus data ,tekan tombol <b>Merah</b> yang sejajar dengan data yang akn di hapus</li>
                                  <li>Edit Data <br> untuk mengedit data, tekan tombol <b>Biru</b> yang sejajar dengan data yang akan diedit.</li>
                                  <li>Laporan Excel<br>Untuk merekap data dalam bentuk excel ,tekan tombol <b>Excel</b> diatas tabel </li>
                                  <li>Laporan Print<br>Untuk merekap data dalam bentuk print ,tekan tombol <b>Print</b> diatas tabel </li>
                                </ol>
                              </div>
                            </div>
                          </div>
                           <div class="panel box box-success">
                            <div class="box-header with-border">
                              <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                                  Data Misi
                                </a>
                              </h4>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse">
                              <div class="box-body">
                                Pada halaman misi dapat dilakukan pengeloaan berupa :
                                <ol>
                                  <li>Tambah Data<br> untuk menambahkan data misi baru, dan mengisi data sesuai dengan formulir</li>
                                  <li>Hapus Data<br>untuk menghapus data ,tekan tombol <b>Merah</b> yang sejajar dengan data yang akn di hapus</li>
                                  <li>Edit Data <br> untuk mengedit data, tekan tombol <b>Biru</b> yang sejajar dengan data yang akan diedit.</li>
                                  <li>Laporan Excel<br>Untuk merekap data dalam bentuk excel ,tekan tombol <b>Excel</b> diatas tabel </li>
                                  <li>Laporan Print<br>Untuk merekap data dalam bentuk print ,tekan tombol <b>Print</b> diatas tabel </li>
                                </ol>
                              </div>
                            </div>
                          </div>
                           <div class="panel box box-success">
                            <div class="box-header with-border">
                              <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                                  Data Media Sosial
                                </a>
                              </h4>
                            </div>
                            <div id="collapse6" class="panel-collapse collapse">
                              <div class="box-body">
                                Pada halaman media sosial dapat dilakukan pengeloaan berupa :
                                <ol>
                                  <li>Tambah Data<br> untuk menambahkan data media sosial baru, isi formulir yang sesuai berupa, nama, icon media sosial dapat mengunjungi halaman <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">Font Awesome</a>, dan masukan link yang sesuai dengan media sosial. </li>
                                  <li>Hapus Data<br>untuk menghapus data ,tekan tombol <b>Merah</b> yang sejajar dengan data yang akn di hapus</li>
                                  <li>Edit Data <br> untuk mengedit data, tekan tombol <b>Biru</b> yang sejajar dengan data yang akan diedit.</li>
                                  <li>Laporan Excel<br>Untuk merekap data dalam bentuk excel ,tekan tombol <b>Excel</b> diatas tabel </li>
                                  <li>Laporan Print<br>Untuk merekap data dalam bentuk print ,tekan tombol <b>Print</b> diatas tabel </li>
                                </ol>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                  </div>
                  <!-- /.col -->
                </ul>
              </div>
              <div class="tab-pane" id="tab_3">
                <ul class="list-group">
                  <li class="list-group-item active">Data</li>
                  <div class="col-md-12">
                    <div class="box box-solid">
                      <!-- /.box-header -->
                      <div class="box-body">
                        <div class="box-group" id="accordion">
                          <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                          <div class="panel box box-primary">
                            <div class="box-header with-border">
                              <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                                  Nama Wisata
                                </a>
                              </h4>
                            </div>
                            <div id="collapse7" class="panel-collapse collapse">
                              <div class="box-body">
                                Pada Halaman Nama wisata, terdapat data nama wisata dan pengelolaan yang dapat dilakukan berupa :
                                <ol>
                                  <li>Tambah wisata <br>Pada menu tambah data, pengeloaan nya dapat berupa menambahkan data wisata dan mengisi formulir yang sesuai.</li>
                                  <li>Hapus Data<br>Untuk menghapus data , tekan tombol <b>Merah</b> sebelah kanan yang sejajar dengan data yang akan dihapus.</li>
                                  <li>Edit Data<br> Untuk mengedit data, tekan tombol <b>Biru</b> pada sebelah kanan yang sejajar dengan data yang akan diedit. dan edit sesuai dengan formulir, kemudian tekan tombol <b>Edit</b></li>
                                  <li>Laporan Excel<br>Untuk merekap semua data nama wisata yang telah dimasukan kedalam sistem dapat format excel, tekan tombol <b>Excel</b>Di Atas tabel</li>
                                  <li>Laporan Print<br>Untuk merekap semua data nama wisata yang telah dimasukan kedalam sistem dapat format print, tekan tombol <b>print</b>Di Atas tabel</li>
                                  <br><b>Catatan * <small>Gunakan Kode wisata Yang sesuai, diharapkan menghubungi developer ketika menambah menu wisata baru, karena ada hal teknis yang hapus ditambahkan, Dan Kode wisata yang sudah ada jangan di hapus atau diganti</small></b>
                                </ol>
                              </div>
                            </div>
                          </div>
                          <div class="panel box box-danger">
                            <div class="box-header with-border">
                              <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
                                  Nama Sarana
                                </a>
                              </h4>
                            </div>
                            <div id="collapse8" class="panel-collapse collapse">
                              <div class="box-body">
                                Pada Halaman Nama sarana, terdapat data nama sarana dan pengelolaan yang dapat dilakukan berupa :
                                <ol>
                                  <li>Tambah sarana <br>Pada menu tambah data, pengeloaan nya dapat berupa menambahkan data sarana dan mengisi formulir yang sesuai.</li>
                                  <li>Hapus Data<br>Untuk menghapus data , tekan tombol <b>Merah</b> sebelah kanan yang sejajar dengan data yang akan dihapus.</li>
                                  <li>Edit Data<br> Untuk mengedit data, tekan tombol <b>Biru</b> pada sebelah kanan yang sejajar dengan data yang akan diedit. dan edit sesuai dengan formulir, kemudian tekan tombol <b>Edit</b></li>
                                  <li>Laporan Excel<br>Untuk merekap semua data nama sarana yang telah dimasukan kedalam sistem dapat format excel, tekan tombol <b>Excel</b>Di Atas tabel</li>
                                  <li>Laporan Print<br>Untuk merekap semua data nama sarana yang telah dimasukan kedalam sistem dapat format print, tekan tombol <b>print</b>Di Atas tabel</li>
                                  <br><b>Catatan * <small>Gunakan Kode sarana Yang sesuai, diharapkan menghubungi developer ketika menambah menu sarana baru, karena ada hal teknis yang hapus ditambahkan, Dan Kode sarana yang sudah ada jangan di hapus atau diganti</small></b>
                                </ol>
                              </div>
                            </div>
                          </div>
                          <div class="panel box box-success">
                            <div class="box-header with-border">
                              <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
                                  Nama Budaya
                                </a>
                              </h4>
                            </div>
                            <div id="collapse9" class="panel-collapse collapse">
                              <div class="box-body">
                                Pada Halaman Nama budaya, terdapat data nama budaya dan pengelolaan yang dapat dilakukan berupa :
                                <ol>
                                  <li>Tambah budaya <br>Pada menu tambah data, pengeloaan nya dapat berupa menambahkan data budaya dan mengisi formulir yang sesuai.</li>
                                  <li>Hapus Data<br>Untuk menghapus data , tekan tombol <b>Merah</b> sebelah kanan yang sejajar dengan data yang akan dihapus.</li>
                                  <li>Edit Data<br> Untuk mengedit data, tekan tombol <b>Biru</b> pada sebelah kanan yang sejajar dengan data yang akan diedit. dan edit sesuai dengan formulir, kemudian tekan tombol <b>Edit</b></li>
                                  <li>Laporan Excel<br>Untuk merekap semua data nama budaya yang telah dimasukan kedalam sistem dapat format excel, tekan tombol <b>Excel</b>Di Atas tabel</li>
                                  <li>Laporan Print<br>Untuk merekap semua data nama budaya yang telah dimasukan kedalam sistem dapat format print, tekan tombol <b>print</b>Di Atas tabel</li>
                                  <br><b>Catatan * <small>Gunakan Kode Budaya Yang sesuai, diharapkan menghubungi developer ketika menambah menu budaya baru, karena ada hal teknis yang hapus ditambahkan, Dan Kode Budaya yang sudah ada jangan di hapus atau diganti</small></b>
                                </ol>
                              </div>
                            </div>
                          </div>
                           <div class="panel box box-success">
                            <div class="box-header with-border">
                              <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">
                                  Nama Kecamatan
                                </a>
                              </h4>
                            </div>
                            <div id="collapse10" class="panel-collapse collapse">
                              <div class="box-body">
                                Pada Halaman Nama Kecamatan, terdapat data nama kecamatan dan pengelolaan yang dapat dilakukan berupa :
                                <ol>
                                  <li>Tambah kecamatan <br>Pada menu tambah kecamatan, pengeloaan nya dapat berupa menambahkan data kecamatan dan mengisi formulir yang sesuai.</li>
                                  <li>Hapus Data<br>Untuk menghapus data , tekan tombol <b>Merah</b> sebelah kanan yang sejajar dengan data yang akan dihapus.</li>
                                  <li>Edit Data<br> Untuk mengedit data, tekan tombol <b>Biru</b> pada sebelah kanan yang sejajar dengan data yang akan diedit. dan edit sesuai dengan formulir, kemudian tekan tombol <b>Edit</b></li>
                                  <li>Laporan Excel<br>Untuk merekap semua data nama kecamatan yang telah dimasukan kedalam sistem dapat format excel, tekan tombol <b>Excel</b>Di Atas tabel</li>
                                  <li>Laporan Print<br>Untuk merekap semua data nama kecamatan yang telah dimasukan kedalam sistem dapat format print, tekan tombol <b>print</b>Di Atas tabel</li>
                                </ol>
                              </div>
                            </div>
                          </div>
                           <div class="panel box box-success">
                            <div class="box-header with-border">
                              <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse11">
                                  Nama Desa
                                </a>
                              </h4>
                            </div>
                            <div id="collapse11" class="panel-collapse collapse">
                              <div class="box-body">
                                Pada Halaman Nama Desa, terdapat data nama desa dan pengelolaan yang dapat dilakukan berupa :
                                <ol>
                                  <li>Tambah Desa <br>Pada menu tambah data, pengeloaan nya dapat berupa menambahkan data desa dan mengisi formulir yang sesuai.</li>
                                  <li>Hapus Data<br>Untuk menghapus data , tekan tombol <b>Merah</b> sebelah kanan yang sejajar dengan data yang akan dihapus.</li>
                                  <li>Edit Data<br> Untuk mengedit data, tekan tombol <b>Biru</b> pada sebelah kanan yang sejajar dengan data yang akan diedit. dan edit sesuai dengan formulir, kemudian tekan tombol <b>Edit</b></li>
                                  <li>Laporan Excel<br>Untuk merekap semua data nama desa yang telah dimasukan kedalam sistem dapat format excel, tekan tombol <b>Excel</b>Di Atas tabel</li>
                                  <li>Laporan Print<br>Untuk merekap semua data nama desa yang telah dimasukan kedalam sistem dapat format print, tekan tombol <b>print</b>Di Atas tabel</li>
                                </ol>
                              </div>
                            </div>
                          </div>
                         
                        </div>
                      </div>
                      <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                  </div>
                  <!-- /.col -->
                </ul>
              </div>
              <div class="tab-pane" id="tab_4">
                <ul class="list-group">
                  <li class="list-group-item active">Informasi</li>
                  <div class="col-md-12">
                    <div class="box box-solid">
                      <!-- /.box-header -->
                      <div class="box-body">
                        <div class="box-group" id="accordion">
                          <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                          <div class="panel box box-primary">
                            <div class="box-header with-border">
                              <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse12">
                                  Data Berita
                                </a>
                              </h4>
                            </div>
                            <div id="collapse12" class="panel-collapse collapse">
                              <div class="box-body">
                                Pada halaman berita , merupakan tampilan pengeloaan data berita pada dinas kebudayan dan pariwisata Kota Pagaralam .. pengeloaan nya dapat dilakukan oleh semua akses, adapun pengelolaan berupa :
                                <ol>
                                  <li>Status Berita<br>Jika Status Berita <b>"Tayang Dilokal"</b> yang artinya berita hanya dapat dilihat oleh akses yang login untuk mengubahnya tekan tombol <b>Tayang di lokal</b>, jika status berita <b>"Tayang dipublic"</b> yang artinya berita sedang ditayangkan dan berita dapat dilihat oleh publik maupun akses yang sedang login, untuk mengubahnya tekan tombol <b>Tayang dipublik</b></li>
                                  <li>Edit Berita <br>Pada menu edit berita, jika berita tersebut akan diedit, bisa menekan tombol edit berwarna <b>Biru</b> dan lakukan edit data ,kemudian tekan tombol <b>Edit</b></li>
                                  <li>Hapus Berita<br>Pada menu hapus data, untuk menghapus data dapat dilakukan dengan cara menekan tombol <b>Merah</b> sebelah kanan yang sejajar dengan data yang akan dihapus</li>
                                  <li>Tambah Berita<br>Pada menu tambah berita, dapat melakukan tambah data dengan mengisi formulir pengisian data berita, dan gunakan kalimat deskripsi <b>maksimal 500 kata per paragraf.</b>   dan gunakan photo dengan ukuran maksimal 3MB, dan untuk kode berita gunakan saja sesuai kesepakatan.<br>Catatan *<small>Contoh Kode "BRT001","BRT002", Dst</small> </li>
                                  <li>Laporan Excel Berita<br>Pada Menu laporan excel berita, untuk merekap semua data berita yang telah dimasukan kedalam sistem dalam bentuk excel, dapat dilakukan dengan cara menekan tombol <b>Hijau</b> diatas tabel </li>
                                  <li>Laporan Print Berita<br>Pada Menu laporan print berita, untuk merekap semua data berita yang telah dimasukan kedalam sistem dalam bentuk print, dapat dilakukan dengan cara menekan tombol <b>Hijau</b> diatas tabel </li>
                                </ol>
                              </div>
                            </div>
                          </div>
                          <div class="panel box box-danger">
                            <div class="box-header with-border">
                              <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse13">
                                  Data Pengajuan
                                </a>
                              </h4>
                            </div>
                            <div id="collapse13" class="panel-collapse collapse">
                              <div class="box-body">
                                Pada Menu pengajuan, berupa tampilan data pengajuan yang masuk, dan pengeloaan dapat dilakukan oleh semua akses, adapun pengeloaan dapat berupa :
                                <ol>  
                                    <li>Proses Pengajuan <br> Pada proses pengajuan, pengeloaan dapat dilakukan jika pengajuan akan diproses lebih lanjut, dengan cara menekan tombol <b> Proses</b> untuk mengetahui data apa saja yang sedang diproses</li>
                                    <li>Proses Selesai<br>Pada proses selesai, pengeloaan dapat dilakukan jika pengajuan akan diselesaikan ,dan ketika menekan tombol <b>selesai  </b>,akan dikirim notifikasi berupa sms kepada yang telah mengirimkan data pengajuannya.</li>
                                    <li>Hapus Data<br>Pada hapus data, untuk menghapus data ,tekan tombol <b> hapus berwarna merah</b> pada sebelah kanan yang sejajar dengan data yang akan dihapus</li>
                                    <li>Rekap Data<br>pada menu rekap data, berupa tampilan jumlah data dari data masuk, data proses, dan data selesai</li>
                                    <li>Laporan Excel<br>untuk membuat laporan berupa bentuk excel, dapat menekan tombol <b>  Excel</b> diatas tabel</li>
                                    <li>Laporan Print<br>untuk membuat laporan berupa bentuk print, dapat menekan tombol <b>  print</b> diatas tabel</li>
                                    <br>Catatan *<small>Data pengajuan muncul pada lonceng diatas.</small>
                                </ol>

                              </div>
                            </div>
                          </div>
                          <div class="panel box box-success">
                            <div class="box-header with-border">
                              <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse14">
                                  Data Kontak
                                </a>
                              </h4>
                            </div>
                            <div id="collapse14" class="panel-collapse collapse">
                              <div class="box-body">
                                Pada menu data kontak, berupa tampilan semua data kontak yang masuk yang disampaikan oleh publik terhadap dinas kebudayaan dan pariwista Kota Pagaralam .. adapun pengelolaan nya dapat dilakukan oleh samua akses, beberapa pengeloaan yang dapat dilakukan adalah :
                                <ol>  
                                    <li>Hapus Data<br>Pada Menu hapus data, dapat melakukan hapus data dengan menekan tombol <b>  Warna Merah</b> disebelah kanan yang sejajar dengan data yang akan dihapus.</li>
                                    <li>Kirim Email<br>Pada Menu kirim email , dapat melakukan kirim email dengan menekan tombol <b>  Warna Hijau</b> disebelah kanan yang sejajar dengan data yang akan dikirim email.</li>
                                    <li>Laporan Excel<br>Pada menu laporan excel, dapat merekap semua data kontak dengan format excel, dengan menekan tombol <b>  Excel</b>Diatas Tabel</li>
                                    <li>Laporan Print<br>Pada menu laporan print, dapat merekap semua data kontak dengan print, dengan menekan tombol <b>  print</b>Diatas Tabel</li>
                                </ol>
                              </div>
                            </div>
                          </div>
                           <div class="panel box box-success">
                            <div class="box-header with-border">
                              <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse15">
                                  Aspirasi
                                </a>
                              </h4>
                            </div>
                            <div id="collapse15" class="panel-collapse collapse">
                              <div class="box-body">
                                Pada menu aspirasi, berupa tampilan aspirasi yang disampaikan oleh public terhadap dinas kebudayaan dan pariwisata Kota Pagaralam .. adapun pengelolaannya dapat dilakukan oleh semua akses, beberapa pengelolaan yang di lakukan :
                                <ol>  
                                    <li>Hapus Data <br>Pada Hapus Data, untuk menghapus data silahkan tekan tombol <b>  Sebelah Akan Berwarna Merah</b> yang sejajar dengan data yang akan dihapus.  </li>
                                    <li>Laporan Excel<br> Untuk membuat laporan semua data aspirasi yang masuk dalam bentuk excel, dapat menekan tombol <b> Excel</b> Diatas Tabel </li>
                                    <li>Laporan Print<br> Untuk membuat laporan semua data aspirasi yang masuk dalam bentuk print, dapat menekan tombol <b> Print</b> Diatas Tabel </li>
                                    <br>
                                    Catatan : *<small>Data Aspirasi juga tampil pada menu atas</small>
                                </ol>
                              </div>
                            </div>
                          </div>
                           <div class="panel box box-success">
                            <div class="box-header with-border">
                              <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse16">
                                  Data Visi Dan Misi
                                </a>
                              </h4>
                            </div>
                            <div id="collapse16" class="panel-collapse collapse">
                              <div class="box-body">
                               Pada menu data visi dan misi, berupa tampilan data visi dan misi yang dimasukan oleh sistem melalui melalui data visi dan misi. dan hanya dapat di lihat saja.
                              </div>
                            </div>
                          </div>
                          <div class="panel box box-success">
                            <div class="box-header with-border">
                              <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse17">
                                  Data Penghargaan
                                </a>
                              </h4>
                            </div>
                            <div id="collapse17" class="panel-collapse collapse">
                              <div class="box-body">
                                Pada Halaman penghargaan, semua akses dapat melakukan pengeloaan pada menu ini, berupa :
                                <ol>
                                  <li>Tambah Penghargaan<br>Jika Ingin menambahkan penghargaan baru, dianjurkan gunakan photo dengan ukuran maksimal 3 Mb, dan Format JPG/PNG. dan Photo Sudah Rapi</li>
                                  <li>Hapus Penghargaan<br>Untuk menghapus salah satu penghargaan , gunakan saja tombol <b>Hapus Berwarna Merah</b> disamping kanan yang sejajar dengan penghargaan yang akan dihapus</li>
                                  <li>Print Penghargaan<br>Untuk merekap semua penghargaan yang telah di masukan kedalam sistem, silahkan tekan tombol print diatas tabel, dan langsung print.</li>
                                </ol>
                              </div>
                            </div>
                          </div>
                          <div class="panel box box-success">
                            <div class="box-header with-border">
                              <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse18">
                                  Info Dispar
                                </a>
                              </h4>
                            </div>
                            <div id="collapse18" class="panel-collapse collapse">
                              <div class="box-body">
                                Pada Halaman Info Dispar, Semua Akses dapat melakukan pengelolaan pada menu ini, berupa :
                                <ol>
                                  <li>Logo<br>Pada Menu Logo, pengelolaan dapat mengganti logo, dengan ketentuan photo logo maksimal 3 Mb. dan Dianjurkan dengan format PNG</li>
                                  <li>Alamat<br>Alamat dapat di ganti sesuai dengan alamat dinas kebudayaan dan pariwisata Kota Pagaralam .</li>
                                  <li>Handphone<br> Pada menu handphone dapat diganti dengan handphone yang akan digunakan</li>
                                  <li>Email<br>Pada menu email dapat di ganti dengan email yang akan digunakan.</li>
                                </ol>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                  </div>
                  <!-- /.col -->
                </ul>
              </div>
              <div class="tab-pane" id="tab_5">
                <ul class="list-group">
                  <li class="list-group-item active">Kalender Agenda</li>
                  <div class="panel box box-success">
                            <div class="box-header with-border">
                              <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse19">
                                  Kalender Agenda
                                </a>
                              </h4>
                            </div>
                            <div id="collapse19" class="panel-collapse collapse">
                              <div class="box-body">
                                 <div class="col-md-6">
                                    <div class="box box-solid">
                                      <div class="box-header with-border">
                                        <i class="fa fa-text-width"></i>

                                        <h3 class="box-title">Petunjuk</h3>
                                      </div>
                                      <!-- /.box-header -->
                                      <div class="box-body">
                                        <dl>
                                          <dt>Kalender Agenda</dt>
                                          <dd>Menu Kalender agenda pada sistem digunakan untuk merekap agenda yang akan dilaksanakan, jika agenda tersebut mendekati 10 hari maka akan berwarna <b>merah</b>, jika agenda mendekati 100 hari akan berwarna <b>kuning</b> dan jauh hari akan berwarna <b>hijau</b>.<br>Pengelolaan Kalender dapat dilakukan oleh admin, kepala dinas, kepala bagian, dan pegawai. pengelolaan tersebut dapat berupa hapus, edit, atau menambahkan agenda kegiatan pada dinas kebudayaan dan pariwisata Kota Pagaralam . provinsi sumatera selatan.</dd>
                                        </dl>
                                      </div>
                                      <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                  </div>
                              </div>
                            </div>
                          </div>
                </ul>
              </div>
              <div class="tab-pane" id="tab_6">
                <ul class="list-group">
                  <li class="list-group-item active">Akses Akun</li>
                   <div class="panel box box-success">
                            <div class="box-header with-border">
                              <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse20">
                                  Akses Akun
                                </a>
                              </h4>
                            </div>
                            <div id="collapse20" class="panel-collapse collapse">
                              <div class="box-body">
                                <div class="col-md-6">
                                <div class="box box-solid">
                                      <div class="box-header with-border">
                                        <i class="fa fa-text-width"></i>

                                        <h3 class="box-title">Petunjuk</h3>
                                      </div>
                                      <!-- /.box-header -->
                                      <div class="box-body">
                                        <dl>
                                          <dt>Data User</dt>
                                          <dd>Data user terdiri dari data akun user yang dapat masuk kedalam sistem, data user hanya dapat dikelola oleh admin dan kepala dinas, pengelolaan nya dapat meliputi <b>Hapus Akun, Mengubah akun menjadi aktif/non aktif.</b></dd>
                                          <dt>Data Hak Akses</dt>
                                          <dd>Data hak akses adalah data yang terdiri dari akses apa saja yang dapat masuk kedalam sistem, dan pengelolaan hanya dapat dilakukan oleh admin dan kepala dinas, jika salah satu akses dihapus maka akun yang memiliki akses tersebut tidak dapat login kembali,<b>berhati-hati lah dalam mengelola data hak akses</b></dd>
                                          <dt>History Login</dt>
                                          <dd>History login adalah kumpulan data setiap akun yang melakukan login kedalam sistem, sehingga dapat dikelola oleh admin dan kepala dinas.</dd>
                                          <dt>Token Expired</dt>
                                          <dd>Token expired adalah data token yang tidak digunakan, data token akan muncul ketika <b>token expired, token tidak digunakan</b>jika semua akun yang didaftarkan berhasil melalui verifikasi email, maka token akan terhapus secara sendiri, namun jika tidak berhasil maka token akan ditampung pada data token expired. dan dianjurkan untuk selalu menghapus token yang expired.</dd>
                                        </dl>
                                         <div class="box-header with-border">
                                            <i class="fa fa-text-width"></i>

                                            <h3 class="box-title">Petunjuk Pendaftaran Akun Baru</h3>
                                          </div>
                                          <!-- /.box-header -->
                                          <div class="box-body">
                                            <ol>
                                              <li>Silahkan masuk kedalam halaman <a href="<?= base_url('auth/registrasi');?>" target="_blank">Daftar Akun</a></li>
                                              <li>Masukan Data Diri Dan <b>Email Aktif</b> yang akan digunakan untuk verifikasi akun, lalu tekan tombol daftar</li>
                                              <li>Silahkan Buka email anda yang dikirim oleh sistem, kemudian tekan tombol <b>verifikasi</b> yang dikirimkan</li>
                                              <li>Setelah verifikasi, dan langsung diarahkan untuk login, silahkan login</li>
                                              <li>pendaftaran selesai</li>
                                              <li><ol>
                                                  <b>Gimana Cara Lupa Password ?</b>
                                                  <li>Silahkan kunjungi halaman <a href="<?= base_url('auth/lupapassword');?>" target="_blank">Lupa Password</a></li>
                                                  <li>Kemudian masukan email yang sebelum nya telah terdaftar.</li>
                                                  <li>Sistem akan mengirimkan alamat pada email untuk mengganti password</li>
                                                  <li>Silahkan masukan password baru anda</li>
                                                </ol></li>
                                              <li>Selesai</li>
                                            </ol>
                                          </div>
                                          <!-- /.box-body -->
                                      </div>
                                      <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                              </div>
                            </div>
                            </div>
                          </div>
                </ul>
              </div>
              <div class="tab-pane" id="tab_7">
                <ul class="list-group">
                  <li class="list-group-item active">Aplikasi</li>
                   <div class="panel box box-success">
                            <div class="box-header with-border">
                              <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse21">
                                  Aplikasi
                                </a>
                              </h4>
                            </div>
                            <div id="collapse21" class="panel-collapse collapse">
                              <div class="box-body">
                                 <div class="col-md-6">
                                    <div class="box box-solid">
                                      <div class="box-header with-border">
                                        <i class="fa fa-text-width"></i>

                                        <h3 class="box-title">Petunjuk</h3>
                                      </div>
                                      <!-- /.box-header -->
                                      <div class="box-body">
                                        <dl>
                                          <dt>Aplikasi</dt>
                                          <dd>Pada menu aplikasi silahkan atur sesuai selera untuk tampilan dari sistem aplikasi nya.</dd>
                                        </dl>
                                      </div>
                                      <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                  </div>
                                  <!-- ./col -->
                              </div>
                            </div>
                          </div>
                </ul>
              </div>
              <div class="tab-pane" id="tab_8">
                <ul class="list-group">
                  <li class="list-group-item active">Peta</li>
                   <div class="panel box box-success">
                            <div class="box-header with-border">
                              <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse22">
                                  Peta
                                </a>
                              </h4>
                            </div>
                            <div id="collapse22" class="panel-collapse collapse">
                              <div class="box-body">
                                <div class="col-md-6">
                                    <div class="box box-solid">
                                      <div class="box-header with-border">
                                        <i class="fa fa-text-width"></i>

                                        <h3 class="box-title">Petunjuk</h3>
                                      </div>
                                      <!-- /.box-header -->
                                      <div class="box-body">
                                        <dl>
                                          <dt>Status Peta</dt>
                                          <dd>Jika Status Peta <b>--Sedang Aktif--</b> berarti peta sedang ditampilkan pada sistem, namun jika status peta <b>--Tidak Aktif--</b>berarti peta tidak ditampilkan pada sistem. cara mengatur nya silahkan tekan <b>tombol sebelah kanan</b></dd>
                                          <dt>Zoom Peta</dt>
                                          <dd>Zoom pada peta adalah ukuran peta yang ditampilkan, semakin besar ukuran zoom semakin dekat dengan area peta, semakin kecil ukuran zoom semakin jauh area peta. Maksimal Zoom 20. Cara mengaturnya silahkan <b>masukan angka pada kotak dan tekan tombol ubah sebelah kanan </b> </dd>
                                        </dl>
                                      </div>
                                      <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                  </div>
                                  <!-- ./col -->
                              </div>
                            </div>
                          </div>
                </ul>
              </div>
             
            </div>
            <!-- /.tab-content -->
          </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

    </section>


        <script src="<?= base_url('assets/admin/');?>bower_components/jquery/dist/jquery.min.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
         <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
