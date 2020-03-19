<?php
    $id=$_GET['id'];
    $db->where("id",$id);
    $user = $db->getOne ("user");
    
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Detail
      </h1>
    </section>
<!-- Main content -->
    <section class="content">
        
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12" style="height:20%">
            <div class="box box-warning">
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="POST" action ="pages/dashboard/backend.php">
                   <input type="hidden" id="custId" name="id" value="<?php echo $id?>">
                 <!-- text input -->
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="plastik" placeholder="Enter ..." value="<?php echo $user['name']?>">
                </div>

                <!-- text input -->
                <div class="form-group">
                  <label>Jumlah Plastik</label>
                  <input type="text" class="form-control" name="plastik" value="<?php echo $user['plastik']?>" placeholder="Enter ...">
                </div>
                
                <!-- text input -->
                <div class="form-group">
                  <label>Jumlah Token</label>
                  <input type="text" class="form-control" name="token" placeholder="Enter ..." value="<?php echo $user['token']?>">
                </div>
                
                <!-- text input -->
                <div class="form-group">
                  <label>Jumlah Manggrove yang ditanam</label>
                  <input type="text" class="form-control" name="manggrove" value="<?php echo $user['manggrove']?>"" placeholder="Enter ...">
                </div>
             <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              
              </form>
            </div>
            <!-- /.box-body -->
          </div>
		</div>
	</div>
</div>
</section>
</div>
