<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Work
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Work</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-xs-6">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">Update Work</h3>
              <?php echo validation_errors(); ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" name="form1" method="post" action="<?php echo base_url() ?>admin/work/update">
                <!-- judul -->
                <div class="form-group">
                  <label>Period</label>
                  <input type="text" class="form-control" name="period" placeholder="Period ..." value="<?php echo $work['period']; ?>">
                </div>

                <!-- judul -->
                <div class="form-group">
                  <label>Job</label>
                  <input type="text" class="form-control" name="job" placeholder="Job ..." value="<?php echo $work['job']; ?>">
                </div>

                <!-- judul -->
                <div class="form-group">
                  <label>Company</label>
                  <input type="text" class="form-control" name="company" placeholder="Company ..." value="<?php echo $work['company']; ?>">
                </div>

                <!-- isi -->
                <div class="form-group">
                  <label>Detail</label>
                    <div class="box-body pad">
                        <textarea class="textarea" name="detail" rows="5" cols="50" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $work['detail']; ?></textarea>
                    </div>
                </div>

                <div class="box-footer">
                    <input type="hidden" name="id" value="<?php echo $work['id']; ?>">
                    <input type="hidden" name="type" value="<?php echo $work['type']; ?>">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>

              </form>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <div class="col-xs-6">

            <!-- Your Page Content Here -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Work List</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Period</th>
                        <th>Job</th>
                        <th>Company</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($detail as $list) { ?>
                    <tr>
                        <td><?php echo $list['id']; ?></td>
                        <td><?php echo $list['period']; ?></td>
                        <td><?php echo $list['job']; ?>
                        </td>
                        <td><?php echo $list['company']; ?></td>
                        <td><a href="<?php echo base_url() ?>admin/work/update/<?php echo $list['id'] ?>"><i class="fa fa-pencil"></i> EDIT</a> | <a href="<?php echo base_url() ?>admin/work/delete/<?php echo $list['id'] ?>"><i class="fa fa-close"></i> DELETE</a></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Period</th>
                        <th>Job</th>
                        <th>Company</th>
                        <th>Aksi</th>
                    </tr>
                    </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->