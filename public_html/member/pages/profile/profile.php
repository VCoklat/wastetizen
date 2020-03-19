<?php
  $db->where ("email", $email);
  $admin = $db->getOne ("user");
  $nama= $admin['name'];	
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"><?php
$status=$_GET['status'];
		if ($status==1){			
?>		
<div class="callout callout-success">
                <h4>Success</h4>

                <p>Profile has been saved</p>
              </div>
<?php
		}
?>		
		
      <h1>
        Profile
      </h1>
    </section>
<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Profile</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" enctype="multipart/form-data" action="pages/profile/profile_update.php">
              <div class="box-body">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" class="form-control" placeholder="John Doe" value ="<?php echo $admin['name']?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email" value ="<?php echo $admin['email']?>" placeholder="Enter email">
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Display Picture</label>
                   <input type="hidden" name="MAX_FILE_SIZE" value="10000000"/>
					  <input type="file" name="pictures" accept="image/*"/>
					  <p class="help-block">File type : png, jpeg, jpg.</p>	
                </div>
 
            <div class="form-group">
                  <label>WA Number</label>
                  <input type="text" class="form-control" placeholder="081234567890" name="wa" value ="<?php echo $admin['wa']?>">
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <textarea class="form-control" name="address"rows="3" placeholder="Jl. Sudirman No.1, Jakarta Pusat, Jakarta"><?php echo $admin['address']?></textarea>
                </div>

              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>

              </div>
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->