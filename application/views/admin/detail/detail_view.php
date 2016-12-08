<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detail
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Detail</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <form role="form" name="form1" method="post" action="<?php echo base_url() ?>admin/detail/update">
      <div class="row">
        <div class="col-xs-6">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">Update Detail</h3>
              <?php echo validation_errors(); ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <!-- judul -->
                <div class="form-group">
                  <label>Work Title</label>
                  <input type="text" class="form-control" name="w-title" placeholder="Work Title ..." value="<?php echo $detail['w-title']; ?>">
                </div>

                <!-- isi -->
                <div class="form-group">
                  <label>Work Detail</label>
                    <div class="box-body pad">
                        <textarea class="textarea" name="w-detail" rows="5" cols="50" style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $detail['w-detail']; ?></textarea>
                    </div>
                </div>

                <!-- judul -->
                <div class="form-group">
                  <label>Service Title</label>
                  <input type="text" class="form-control" name="s-title" placeholder="Service Title ..." value="<?php echo $detail['s-title']; ?>">
                </div>

                <!-- isi -->
                <div class="form-group">
                  <label>Service Detail</label>
                    <div class="box-body pad">
                        <textarea class="textarea" name="s-detail" rows="5" cols="50" style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $detail['s-detail']; ?></textarea>
                    </div>
                </div>

                <!-- judul -->
                <div class="form-group">
                  <label>Employement Title</label>
                  <input type="text" class="form-control" name="em-title" placeholder="Employement Title ..." value="<?php echo $detail['em-title']; ?>">
                </div>

                <!-- isi -->
                <div class="form-group">
                  <label>Employment Detail</label>
                    <div class="box-body pad">
                        <textarea class="textarea" name="em-detail" rows="5" cols="50" style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $detail['em-detail']; ?></textarea>
                    </div>
                </div>

                <!-- judul -->
                <div class="form-group">
                  <label>Skill Title</label>
                  <input type="text" class="form-control" name="sk-title" placeholder="Skill Title ..." value="<?php echo $detail['sk-title']; ?>">
                </div>

                <!-- isi -->
                <div class="form-group">
                  <label>Skill Detail</label>
                    <div class="box-body pad">
                        <textarea class="textarea" name="sk-detail" rows="5" cols="50" style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $detail['sk-detail']; ?></textarea>
                    </div>
                </div>

              </form>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
          <div class="col-xs-6">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Update Detail</h3>
                <?php echo validation_errors(); ?>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <!-- judul -->
                <div class="form-group">
                  <label>Education Title</label>
                  <input type="text" class="form-control" name="ed-title" placeholder="Education Title ..." value="<?php echo $detail['ed-title']; ?>">
                </div>

                <!-- isi -->
                <div class="form-group">
                  <label>Education Detail</label>
                    <div class="box-body pad">
                        <textarea class="textarea" name="ed-detail" rows="5" cols="50" style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $detail['ed-detail']; ?></textarea>
                    </div>
                </div>

                <!-- judul -->
                <div class="form-group">
                  <label>Blog Title</label>
                  <input type="text" class="form-control" name="b-title" placeholder="Blog Title ..." value="<?php echo $detail['b-title']; ?>">
                </div>

                <!-- isi -->
                <div class="form-group">
                  <label>Blog Detail</label>
                    <div class="box-body pad">
                        <textarea class="textarea" name="b-detail" rows="5" cols="50" style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $detail['b-detail']; ?></textarea>
                    </div>
                </div>

                <!-- judul -->
                <div class="form-group">
                  <label>Contact Title</label>
                  <input type="text" class="form-control" name="c-title" placeholder="Contact Title ..." value="<?php echo $detail['c-title']; ?>">
                </div>

                <!-- isi -->
                <div class="form-group">
                  <label>Contact Detail</label>
                    <div class="box-body pad">
                        <textarea class="textarea" name="c-detail" rows="5" cols="50" style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $detail['c-detail']; ?></textarea>
                    </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="hidden" name="id" value="<?php echo $detail['id']; ?>">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
          </div>
        </div>
        </form>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->