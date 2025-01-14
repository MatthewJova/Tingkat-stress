<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Diagram Stress</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('Tes/') ?>">Home</a></li>
              <li class="breadcrumb-item active">Diagram Stress</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Diagram Stress</h3>
              </div>
              <!-- /.card-header -->
                <div class="card-body">
                <div class="form-group">
                    <div class="card-body">
                        <div class="progress-group">
                            Diagram Stress
                            <span class="float-right"><b><?php echo $rata_rata_skor; ?></b>/100</span>
                            <div class="progress progress-sm">
                                <?php if ($rata_rata_skor > 80): ?>
                                    <div class="progress-bar bg-danger" style="width: <?php echo ($rata_rata_skor / 100) * 100; ?>%">
                                        <b><?php echo ($rata_rata_skor / 100) * 100; ?>%</b>
                                    </div>
                                <?php elseif ($rata_rata_skor > 40 && $rata_rata_skor <= 80): ?>
                                    <div class="progress-bar bg-warning" style="width: <?php echo ($rata_rata_skor / 100) * 100; ?>%">
                                        <b><?php echo ($rata_rata_skor / 100) * 100; ?>%</b>
                                    </div>
                                <?php elseif ($rata_rata_skor >= 0 && $rata_rata_skor <= 40): ?>
                                    <div class="progress-bar bg-success" style="width: <?php echo ($rata_rata_skor / 100) * 100; ?>%">
                                        <b><?php echo ($rata_rata_skor / 100) * 100; ?>%</b>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                <!-- /.card-body -->

              <div class="col-sm-12">
              </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- bs-custom-file-input -->
<script src="<?php echo base_url('assets/adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/adminlte/dist/js/adminlte.min.js'); ?>"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
