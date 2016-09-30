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
							<?php 
							if(isset($_GET['id']))
							{
								$id=$_GET['id'];

								$stmt=$con->prepare("SELECT * from customers where id=:id limit 1");
								$stmt->bindParam(':id',$id);
								$stmt->execute();

								$customer=$stmt->fetch(PDO::FETCH_OBJ);
//								 var_dump($customer);
							}
							

							 ?>
							<form action="" method="POST">
								<div class="form-group">
									<p>Name</p>
									<p><input type="text" value="<?=$customer->name?>" name="name" class="form-control" required></p>
								</div>
								<div class="form-group">
									<p>Email</p>
									<p><input type="email" value="<?=$customer->email?>" name="email" class="form-control" required></p>
								</div>
								<div class="form-group">
									<p>Phone</p>
									<p><input type="text"  value="<?=$customer->phone?>" name="phone" class="form-control"></p>
								</div>
								<div class="form-group">
									<p>Address</p>
									<p><input type="text"  value="<?=$customer->address?>" name="address" class="form-control"></p>
								</div>
								<div class="form-group">
									<p>Date of birth</p>
									<p><input type="text"  value="<?=$customer->date_of_birth?>" name="date_of_birth" class="form-control"></p>
								</div>
								<div class="form-group">
									<input name="submit" type="submit" class="btn btn-primary" value="Update">
								</div>
	
							</form>
							<?php 
								
								if(isset($_POST['submit']))
								{
									$id=$_GET['id'];

									$name=$_POST['name'];
									$email=$_POST['email'];
									$phone=$_POST['phone'];
									$address=$_POST['address'];
									$date_of_birth=$_POST['date_of_birth'];

									$stmt=$con->prepare("UPDATE customers SET name=:name,email=:email,phone=:phone,address=:address,date_of_birth=:date_of_birth where id=:id");
									$stmt->bindParam(':name',$name);
									$stmt->bindParam(':email',$email);
									$stmt->bindParam(':phone',$phone);
									$stmt->bindParam(':address',$address);
									$stmt->bindParam(':date_of_birth',$date_of_birth);
									$stmt->bindParam(':id',$id);

									if($stmt->execute()){
										redirectTo("all-customer.php");
									}
									else{
										echo "update failed";
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