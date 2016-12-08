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
    <form role="form" name="form1" method="post" action="<?php echo base_url() ?>admin/profile/update">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">Update Profile</h3>
              <?php echo validation_errors(); ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <!-- judul -->
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Name ..." value="<?php echo $detail['name']; ?>">
                </div>

                <!-- isi -->
                <div class="form-group">
                  <label>Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email ..." value="<?php echo $detail['email']; ?>">
                </div>

                <!-- judul -->
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Password ...">
                </div>

                <!-- isi -->
                <div class="form-group">
                  <label>phone</label>
                    <input type="text" class="form-control" name="phone" placeholder="Phone ..." value="<?php echo $detail['phone']; ?>">
                </div>

                <!-- judul -->
                <div class="form-group">
                  <label>Address</label>
                  <div class="box-body pad">
                        <textarea class="textarea" name="address" rows="5" cols="50" style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $detail['address']; ?></textarea>
                    </div>
                </div>

                <!-- isi -->
                <div class="form-group">
                  <label>About</label>
                    <div class="box-body pad">
                        <textarea class="textarea" name="about" rows="5" cols="50" style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $detail['about']; ?></textarea>
                    </div>
                </div>


            </div>
            <!-- /.box-body -->
            <!-- /.box-body -->
              <div class="box-footer">
                <input type="hidden" name="id" value="<?php echo $detail['id']; ?>">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>

              </form>
          </div>
        </div>
        </div>
        </form>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->