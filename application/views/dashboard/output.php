<?php
$sentimen["-1"] = "Negatif";
$sentimen["1"] = "Positif";
?>

<div class="content-wrapper" style="background-color:#ccccff;">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-10">
          <H1 style="padding-left: 22%; color:#000066;">
            <CENTER>HASIL PENGUJIAN</CENTER>
          </H1>
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

          <!-- BEGIN CF KNN -->
          <div class="card">
            <!-- CARD HEADER -->
            <div class="card-header">
              <h3 class="card-title">CONFUSION MATRIX KNN</h3>
            </div>
            <!-- CARD BODY -->
            <div class="card-body">
              <table class="table table-bordered table-striped" style="text-align: center">
                <thead>
                  <tr>
                    <th>Actual</th>
                    <th colspan="2">Predict</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td>Positif</td>
                    <td>Negatif</td>
                  </tr>
                  <tr>
                    <td>Positif</td>
                    <td><?= $cfKNN->cf['1']['1']
                        ?></td>
                    <td><?= $cfKNN->cf['1']['-1']
                        ?></td>
                  </tr>
                  <tr>
                    <td>Negatif</td>
                    <td><?= $cfKNN->cf['-1']['1']
                        ?></td>
                    <td><?= $cfKNN->cf['-1']['-1']
                        ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END CF KNN -->
          <!-- BEGIN HASIL KNN -->
          <div class="card">
            <!-- CARD HEADER -->
            <div class="card-header">
              <h3 class="card-title">HASIL KLASIFIKASI KNN</h3>
            </div>
            <!-- CARD BODY -->
            <div class="card-body">
              <table class="table table-bordered table-striped" id="tabel-hasilNB">
                <thead>
                  <tr>
                    <th>Actual</th>
                    <th>Predict</th>
                    <th>Tweet</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  //CEK DATA
                  for ($i = 0; $i < count($dataTest); $i++) {
                    echo '
                  <tr>
                  <td>' . $sentimen[$hasilKNN['actual'][$i]] . '</td>
                  <td>' . $sentimen[$hasilKNN['predict'][$i]] . '</td>
                  <td>' . $dataTest[$i] . '</td>
                  </tr>
                  ';
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END HASIL KNN -->


          <!-- BEGIN HASIL EVALUASI -->
          <div class="card">
            <!-- CARD HEADER -->
            <div class="card-header">
              <h3 class="card-title">HASIL EVALUASI</h3>
            </div>
            <!-- CARD BODY -->

            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th></th>
                    <th>KNN</th>
                    <th>KNN+SMOTE</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Accuracy</td>
                    <td><?= format($cfKNN->acc, 4)
                        ?></td>
                    <td><?= format($cfKNNSmote->acc, 4)
                        ?></td>
                  </tr>
                  <tr>
                    <td>Precision Positif</td>
                    <td><?= format($cfKNN->precision['1'], 4)
                        ?></td>
                    <td><?= format($cfKNNSmote->precision['1'], 4)
                        ?></td>
                  </tr>
                  <tr>
                    <td>Precision Negatif</td>
                    <td><?= format($cfKNN->precision['-1'], 4)
                        ?></td>
                    <td><?= format($cfKNNSmote->precision['-1'], 4)
                        ?></td>
                  </tr>
                  <tr>
                    <td>Recall Positif</td>
                    <td><?= format($cfKNN->recall['1'], 4)
                        ?></td>
                    <td><?= format($cfKNNSmote->recall['1'], 4)
                        ?></td>
                  </tr>
                  <tr>
                    <td>Recall Negatif</td>
                    <td><?= format($cfKNN->recall['-1'], 4)
                        ?></td>
                    <td><?= format($cfKNNSmote->recall['-1'], 4)
                        ?></td>
                  </tr>
                  <tr>
                    <td>F-Measure Positif</td>
                    <td><?= format($cfKNN->f_measure['1'], 4)
                        ?></td>
                    <td><?= format($cfKNNSmote->f_measure['1'], 4)
                        ?></td>
                  </tr>
                  <tr>
                    <td>F-Measure Negatif</td>
                    <td><?= format($cfKNN->f_measure['-1'], 4)
                        ?></td>
                    <td><?= format($cfKNNSmote->f_measure['-1'], 4)
                        ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END HASIL EVALUASI -->

        </section>
        <section class="col-lg-6">
          <!-- BEGIN CF KNN+SMOTE -->
          <div class="card">
            <!-- CARD HEADER -->
            <div class="card-header">
              <h3 class="card-title">CONFUSION MATRIX KNN+SMOTE</h3>
            </div>
            <!-- CARD BODY -->
            <div class="card-body">
              <table class="table table-bordered table-striped" style="text-align: center">
                <thead>
                  <tr>
                    <th>Actual</th>
                    <th colspan="2">Predict</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td>Positif</td>
                    <td>Negatif</td>
                  </tr>
                  <tr>
                    <td>Positif</td>
                    <td><?= $cfKNNSmote->cf['1']['1']
                        ?></td>
                    <td><?= $cfKNNSmote->cf['1']['-1']
                        ?></td>
                  </tr>
                  <tr>
                    <td>Negatif</td>
                    <td><?= $cfKNNSmote->cf['-1']['1']
                        ?></td>
                    <td><?= $cfKNNSmote->cf['-1']['-1']
                        ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END CF KNN+SMOTE -->

          <!-- BEGIN HASIL KNN+SMOTE -->
          <div class="card">
            <!-- CARD HEADER -->
            <div class="card-header">
              <h3 class="card-title">HASIL KLASIFIKASI KNN+SMOTE</h3>
            </div>
            <!-- CARD BODY -->
            <div class="card-body">
              <table class="table table-bordered table-striped" id="tabel-hasilNBSmote">
                <thead>
                  <tr>
                    <th>Actual</th>
                    <th>Predict</th>
                    <th>Tweet</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  for ($i = 0; $i < count($dataTest); $i++) {
                    echo '
                  <tr>
                  <td>' . $sentimen[$hasilKNNSmote['actual'][$i]] . '</td>
                  <td>' . $sentimen[$hasilKNNSmote['predict'][$i]] . '</td>
                  <td>' . $dataTest[$i] . '</td>
                  </tr>
                  ';
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END HASIL KNN+SMOTE -->

          <!-- BEGIN EXECUTION TIME -->
          <div class="card">
            <!-- CARD HEADER -->
            <div class="card-header">
              <h3 class="card-title">EXECUTION TIME</h3>
            </div>
            <!-- CARD BODY -->

            <div class="card-body">
              <p>Praproses: <b><?= format($execPraproses, 4) ?>s</b></p>
              <p>TF-IDF: <b><?= format($execTFIDF, 4) ?>s</b></p>
              <p>K-Nearest Neighbors: <b><?= format($execKNN, 4) ?>s</b></p>
              <p>K-Nearest Neighbors + SMOTE: <b><?= format($execKNNSmote, 4) ?>s</b></p>
              <p>Execution Total: <b><?= format($exec, 4) ?>s</b></p>
            </div>
          </div>
          <!-- END EXECUTION TIME -->
        </section>



      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->