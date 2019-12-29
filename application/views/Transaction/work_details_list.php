<!DOCTYPE html>
<html>
<?php
$page = "work_details_list";
?>
<style>
  td{
    padding:2px 10px !important;
  }
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 mt-1">
            <h4>Work Details</h4>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
            <div class="card-header row">
              <div class="col-md-6">
                <h3 class="card-title"><i class="fa fa-list"></i> List Work Details</h3>
              </div>
              <div class="col-md-6 text-right">
                <a href="<?php echo base_url(); ?>Transaction/add_work_details" class="btn btn-primary btn-sm" name="button">Add Work Details</a>
              </div>

              <!--  -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Vc. No.</th>
                  <th>Title of Work</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $i=0;
                foreach ($work_list as $list) {
                  $i++;
                ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $list->vc_no; ?></td>
                  <td><?php echo $list->party_name; ?></td>
                  <td><?php echo $list->work_date; ?></td>
                  <td>
                    <a href="<?php echo base_url(); ?>Transaction/edit_work_details/<?php echo $list->work_id; ?>"> <i class="fa fa-edit"></i> </a>
                    <?php if($user_roll == 1){ ?>
                      <a href="<?php echo base_url(); ?>Transaction/delete_work_details/<?php echo $list->work_id; ?>" onclick="return confirm('Delete this Application');" class="ml-4"> <i class="fa fa-trash"></i> </a>
                    <?php } ?>
                  </td>
                </tr>
                <?php } ?>
                <tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
</body>
</html>
