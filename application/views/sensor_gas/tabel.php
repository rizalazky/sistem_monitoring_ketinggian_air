  <div class="container">
    <div class="row">
      <!-- left column -->
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
             <?php echo $this->session->flashdata('notif'); ?>
          </div>
         
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-striped table-bordered">
              <thead style="text-align: center;">
                <tr>
                  <th>ID</th>
                  <th>Data Sensor</th>
                  <th>Waktu</th>
                </tr>
              </thead>
              <tbody style="text-align: center;" class='tbody'>
                <?php foreach($isi as $dat){?>
                <tr>
                    <td><?php echo $dat->id;?></td>
                    <td><?php echo $dat->sensor_gas;?></td>
                    <td><?php echo date('D,w F Y H:m:s',strtotime($dat->waktu));?></td>                    
                </tr>
                <?php  } ?>
              </tbody>
              <tfoot style="text-align: center;">
                 <tr>
                  <th>ID</th>
                  <th>Data Sensor</th>
                  <th>Waktu</th>
                </tr>
              </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
    </div>