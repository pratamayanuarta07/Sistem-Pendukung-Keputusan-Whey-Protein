<?php
$namaKelas['-1'] = 'Negatif';
$namaKelas['1']  = 'Positif';
?>



<div class="content-wrapper" style="background-color: #ccccff;">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-10">

        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->

          <!-- END INPUT PARAMETERS -->
          <!-- BEGIN DATASET TRAINING -->
          
            <!-- CARD BODY -->  
          <!-- END INFORMASI DATASET -->
          <!-- BEGIN DATASET TESTING -->
          <div class="card">
            <!-- CARD HEADER -->
            <div class="card-header">

            <div class="card-body">
              <h3>Jurnal Yang Disukai</h3>
              <table id="table-dataTest" class="table table-bordered table-striped">
                <thead>
                  <th>Tweet</th>
                  <th>Label</th>
                </thead>
                <tbody>
                  <?php
                  $t = 0;
                  for ($i = 0; $i < count($rawTest); $i++) {
                    if (in_array($i, $r)) {
                      echo
                    '<tr>
                        <td>' . $rawTest[$r[$t]][0] . '</td>
                        <td>' . $rawTest[$r[$t]][1] . '</td>
                      </tr>';
                      $t++;
                    }
                  }
                  ?> 
                </tbody>
              </table>
            </div>




            </div>
            <!-- CARD BODY -->
            <br>
            <h3>Jurnal Hasil Rekomendasi</h3>
            <div class="card-body">
              <table id="table-dataTest" class="table table-bordered table-striped">
                <thead>
                  <th>Tweet</th>
                  <th>Label</th>
                </thead>
                <tbody>
                  <?php
                  for ($i = 0; $i < count($rawTest); $i++) {
                    if (in_array($i, $hasilKNN)) {
                      echo
                    '<tr>
                        <td>' . $rawTest[$i][0] . '</td>
                        <td>' . $rawTest[$i][1] . '</td>
                      </tr>';
                    }
                    
                  }
                  ?>
                </tbody>
              </table>
            </div>


            


          </div>

          <!-- END DATASET TESTING -->
        </section>


      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->