<div class="content-wrapper" style="color: #404040; background-color:#ccccff;">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-6">
        <div class="col-sm-10">
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content" style="padding-left: 33%;">
    <div class="container-fluid">
      <div class="row">
        <section class="col-lg-6 ">

          <!-- BEGIN INPUT -->
          <div class="card">
            <!-- CARD HEADER -->
            <div class="card-header">
              <h3 class="card-title">Pilih Jurnal</h3>

            </div>
            <!-- CARD BODY -->
            <div class="card-body">
              <form role="form" method="post" action="<?= base_url('input') ?>">
                <div class="form-group">
                  <div class="form-group row">

                    <div class="col-sm-10">
                      <select name="harga" id="ram" class="form-control">
                        <option>Range harga </option>
                        <option value="2">500.000-899.000</option>
                        <option value="3">900.000-1.500.000</option>
                        <option value="4">>1.500.000</option>
                      </select>
                    </div>
                    <div class="form-group row">

                      <div class="col-sm-10">
                        <select name="protein" id="memori" class="form-control">
                          <option>Protein </option>
                          <option value="8">>24g</option>
                          <option value="16">20-24g</option>
                          <option value="32">10-19gr</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">

                      <div class="col-sm-10">
                        <select name="kalori" id="memori" class="form-control">
                          <option>Calories </option>
                          <option value="8">80-100 kkl</option>
                          <option value="16">101-150 kkl</option>
                          <option value="32">>150 kkl </option>

                        </select>
                      </div>
                    </div>
                    <div class="form-group row">

                      <div class="col-sm-10">
                        <select name="gula" id="memori" class="form-control">
                          <option>Sugar </option>
                          <option value="8">0-3 gr </option>
                          <option value="16">4-5 gr </option>
                          <option value="32">>5 gr </option>

                        </select>
                      </div>
                    </div>
                    <div class="form-group row">

                      <div class="col-sm-10">
                        <select name="kolestrol" id="memori" class="form-control">
                          <option>Cholestrol </option>
                          <option value="8">0-15 mg</option>
                          <option value="16">15-50 mg</option>
                          <option value="32">>50 mg</option>

                        </select>
                      </div>
                    </div>
                    <div class="form-group row">

                      <div class="col-sm-10">
                        <select name="sodium" id="memori" class="form-control">
                          <option>Sodium </option>
                          <option value="8">0-100 mg</option>
                          <option value="16">101-150 mg</option>
                          <option value="32">>150mg</option>

                        </select>
                      </div>
                    </div>
                    <div class="form-group row">

                      <div class="col-sm-10">
                        <select name="karbo" id="memori" class="form-control">
                          <option>Carbohidrat </option>
                          <option value="8">>5 gr</option>
                          <option value="16">4-5 gr</option>
                          <option value="32">1-3 gr</option>

                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div style="padding-left: 75%;">
                    <button type="submit" class="btn btn-outline-primary" name="input">SIMPAN</button>
                  </div>

                </div>
              </form>
            </div>
          </div>
          <!-- END INPUT -->
        </section>
        <section class="col-lg-6 connectedSortable">

        </section>

        <section class="col-lg-12 connectedSortable">

        </section>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->