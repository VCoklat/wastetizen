<?php
    $email =$_SESSION['email'];
	$db->where ("email", $email);
    $user = $db->getOne ("user");
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Dashboard
      </h1>
    </section>
<!-- Main content -->
    <section class="content">
        
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12" style="height:20%">
			<div class="row">
				<div class="col-md-12" style="background-color:blue">
					<img alt="Bootstrap Image Preview" src="pages/profile/<?php echo $admin['picture']?>" style="border-radius: 50%; margin-left: auto; margin-right: auto; margin-top:20px; margin-bottom:20px; display: block; " height="150">
				</div>
			</div>
			<div class="row" >
				<div class="col-md-4" style="background-color:green">
				<p style="font-size:28px; color:#FFF;text-align:center;" >Jumlah manggrove yang kamu tanam </p>
				</div>
				
				<div class="col-md-4" style="background-color:green">
				<p style="font-size:28px; color:#FFF;text-align:center;" >Jumlah token manggrove yang kamu miliki</p>
				</div>
				
				<div class="col-md-4" style="background-color:green">
				<p style="font-size:28px; color:#FFF;text-align:center;" >Jumlah plastik yang kamu selamatkan</p>
				</div>
			</div>
			<div class="row" >
				<div class="col-md-4" style="background-color:green">
				<p style="font-size:36px; color:#FFF; text-align:center;" ><?php echo $user['manggrove']?> </p>
				</div>
				
				<div class="col-md-4" style="background-color:green">
				<p style="font-size:36px; color:#FFF; text-align:center;" ><?php echo $user['token']?> </p>
				</div>
				
				<div class="col-md-4" style="background-color:green">
				<p style="font-size:36px; color:#FFF; text-align:center;" ><?php echo $user['plastik']?> </p>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
</div>
