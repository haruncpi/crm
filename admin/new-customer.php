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
									<p><input type="text" name="name" class="form-control" required></p>
								</div>
								<div class="form-group">
									<p>Email</p>
									<p><input type="email" name="email" class="form-control" required></p>
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
									<input name="submit" type="submit" class="btn btn-primary" value="Save">
								</div>
	
							</form>
							<?php 
								
								if(isset($_POST['submit']))
								{
									$name=$_POST['name'];
									$email=$_POST['email'];
									$phone=$_POST['phone'];
									$address=$_POST['address'];
									$date_of_birth=$_POST['date_of_birth'];

									$stmt=$con->prepare("INSERT INTO customers(name,email,phone,address,date_of_birth) values(:name,:email,:phone,:address,:date_of_birth)");
									$stmt->bindParam(':name',$name);
									$stmt->bindParam(':email',$email);
									$stmt->bindParam(':phone',$phone);
									$stmt->bindParam(':address',$address);
									$stmt->bindParam(':date_of_birth',$date_of_birth);


									if($stmt->execute()){
										redirectTo("all-customer.php");
									}
									else{
										echo "Data inser fail";
									}

								}

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