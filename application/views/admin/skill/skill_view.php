<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Skill
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Skill</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-xs-6">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">Add Skill</h3>
              <?php echo validation_errors(); ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" name="form1" method="post" action="<?php echo base_url() ?>admin/skill/add">
                <!-- judul -->
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Name ...">
                </div>

                <!-- judul -->
                <div class="form-group">
                  <label>Progress</label>
                  <input type="text" class="form-control" name="progress" placeholder="Progress ...">
                </div>

                <div class="box-footer">
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
                    <h3 class="box-title">Skill List</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Progress</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($detail as $list) { ?>
                    <tr>
                        <td><?php echo $list['id']; ?></td>
                        <td><?php echo $list['name']; ?></td>
                        <td><?php echo $list['progress']; ?>
                        </td>
                        <td><a href="<?php echo base_url() ?>admin/skill/update/<?php echo $list['id'] ?>"><i class="fa fa-pencil"></i> EDIT</a> | <a href="<?php echo base_url() ?>admin/skill/delete/<?php echo $list['id'] ?>"><i class="fa fa-close"></i> DELETE</a></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Progress</th>
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