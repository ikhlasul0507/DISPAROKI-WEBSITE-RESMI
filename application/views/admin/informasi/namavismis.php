<div class="container">
<div class="col-md-11">
          <!-- Custom Tabs -->

          <div class="nav-tabs-custom">
                                
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Visi</a></li>
              <li><a href="#tab_2" data-toggle="tab">Misi</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <ul class="list-group">
                  <li class="list-group-item active">Visi</li>
                  <?php foreach ($data_vis as $k): ?>
                     <li class="list-group-item"><?= $k['visi'];?></li>
                  <?php endforeach ?>
                </ul>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <ul class="list-group">
                  <li class="list-group-item active">Misi</li>
                  <?php foreach ($data_mis as $k): ?>
                     <li class="list-group-item"><?= $k['misi'];?></li>
                  <?php endforeach ?>
                </ul>
              </div>
             
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
      </div>