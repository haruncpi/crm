<?php
include_once "header.php";
?>
<section>
	<div class="container">
		<div class="row">
			<!-- sidebar -->
			<?php include_once ADMIN_PATH."/sidebar.php" ?>
			<!-- sidebar -->
			<!-- content -->
			<div class="col-md-10 content">
				<div class="box white-bg">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">New Customer</h3>
						</div>
						<div class="panel-body">
							<form action="" method="POST">
								<div class="form-group">
									<p>Name</p>
									<p><input type="text" name="name" class="form-control"></p>
								</div>
								<div class="form-group">
									<p>Email</p>
									<p><input type="text" name="email" class="form-control"></p>
								</div>
								<div class="form-group">
									<p>Phone</p>
									<p><input type="text" name="phone" class="form-control"></p>
								</div>
								<div class="form-group">
									<p>Address</p>
									<p><input type="text" name="address" class="form-control"></p>
								</div>
								<div class="form-group">
									<p>Date of birth</p>
									<p><input type="text" name="date_of_birth" class="form-control"></p>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary">Save</button>
								</div>
	
							</form>
							<?php 
								$sql="select * from customers";
								$results=$con->query($sql);
							?>
							
						</div>
					</div>
				</div>
			</div>
			<!-- content -->
		</div>
	</div>
</section>

<?php
include_once "footer.php";