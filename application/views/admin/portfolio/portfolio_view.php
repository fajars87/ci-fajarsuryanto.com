<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Porfolio
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Portfolio</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-xs-4">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">Add Portfolio</h3>
              <?php echo validation_errors(); ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" name="form1" method="post" action="<?php echo base_url() ?>admin/portfolio/add">
                <!-- judul -->
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" class="form-control" name="title" placeholder="Title ...">
                </div>

                <!-- isi -->
                <div class="form-group">
                  <label>Detail</label>
                    <div class="box-body pad">
                        <textarea name="detail" rows="3" cols="40" ></textarea>
                    </div>
                </div>

                <!-- isi -->
                <div class="form-group">
                  <label>Link</label>
                    <div class="box-body pad">
                        <textarea name="link" rows="3" cols="40" ></textarea>
                    </div>
                </div>

                <div class="form-group">
                <label>Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="date" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>

                <div class="box-footer">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>

              </form>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <div class="col-xs-8">

            <!-- Your Page Content Here -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Portfolio List</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Detail</th>
                        <th>Picture</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($detail as $list) { ?>
                    <tr>
                        <td><?php echo $list['id']; ?></td>
                        <td><?php echo $list['title']; ?></td>
                        <td><?php echo $list['detail']; ?></td>
                        <td><img src="<?php echo $list['link']; ?>" width="75px"></td>
                        <td><a href="<?php echo base_url() ?>admin/portfolio/update/<?php echo $list['id'] ?>"><i class="fa fa-pencil"></i> EDIT</a> | <a href="<?php echo base_url() ?>admin/portfolio/delete/<?php echo $list['id'] ?>"><i class="fa fa-close"></i> DELETE</a></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Detail</th>
                        <th>Picture</th>
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