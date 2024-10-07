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
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <section class="col-lg-6">
          <!-- BEGIN INPUT PARAMETERS -->
          <div class="card">
            <!-- CARD HEADER -->
            <div class="card-header">
              <h3 class="card-title">PARAMETER SMOTE</h3>

            </div>
            <!-- CARD BODY -->
            <div class="card-body">
              <form role="form" method="post" action="<?= base_url('predict/') . $ndata ?>">
                <div class="form-group">
                  <label for="nsmote">N% SMOTE: </label>
                  
                  <br>
                  <label for="k">Jumlah K: </label>
                  
                  <br>
                  <label for="minor">Kelas Minoritas: </label>
                  
                  <div style="padding-left: 75%;">
                    <button type="submit" class="btn btn-outline-primary" name="predict">Baerikan Rekomendasi</button>
                  </div>
                </div>

              </form>
            </div>
          </div>
          <!-- END INPUT PARAMETERS -->
          <!-- BEGIN DATASET TRAINING -->
          
            <!-- CARD BODY -->  
          <!-- END INFORMASI DATASET -->
          <!-- BEGIN DATASET TESTING -->
          <div class="card">
            <!-- CARD HEADER -->
            <div class="card-header">
              <h3 class="card-title">DATA TESTING</h3>

            </div>
            <!-- CARD BODY -->
            <div class="card-body">
              <table id="table-dataTest" class="table table-bordered table-striped">
                <thead>
                  <th>Tweet</th>
                  <th>Label</th>
                </thead>
                <tbody>
                  <?php
                  for ($i = 0; $i < count($rawTest); $i++) {
                    echo
                    '<tr>
                        <td>' . $rawTest[$i][0] . '</td>
                        <td>' . $rawTest[$i][1] . '</td>
                      </tr>';
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