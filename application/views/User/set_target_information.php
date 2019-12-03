<!DOCTYPE html>
<html>
<?php
$page = "set_target";
include('head.php');
?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php include('navbar.php'); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include('sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center mt-2">
            <h1>SET TARGET INFORMATION</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>



    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8 offset-md-2">
            <!-- general form elements -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Set Target Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body row">
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="" id="" title="From Date" placeholder="From Date">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="" id="" title="To Date" placeholder="To Date">
                  </div>
                  <div class="form-group col-md-12">
                    <select class="form-control select2 " name="gst_slab" title="Select Branch" id="gst_slab" style="width: 100%;" required>
                        <option selected="selected" value="" >Select Branch </option>
                          <option></option>
                      </select>
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="" id="" title="RC Target" placeholder="RC Target">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="" id="" title="TC Target" placeholder="TC Target">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success px-4">Add</button>
                  <button type="submit" class="btn btn-default ml-4">Cancel</button>
                </div>
              </form>
            </div>

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include('script.php') ?>

</body>
</html>
