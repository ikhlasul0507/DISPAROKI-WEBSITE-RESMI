<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
             <table id="example2" class="table table-bordered table-striped" border="1">
                <thead>
                  <tr>
                    <th colspan="2" align="center" bgcolor="blue">Data Visi</th>
                  </tr>
                <tr>
                  <th>ID</th>
                  <th>Visi</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_vis as $k):?>
                <tr>
                  <td><?= $k['id_visi'];?></td>
                  <td><?= $k['visi'];?></td>
                </tr>
               <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Visi</th>
                </tr>
                </tfoot>
              </table>