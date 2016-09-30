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
									<p>Description</p>
									<p><input type="text" name="description" class="form-control"></p>
								</div>
								<div class="form-group">
									<input name="submit" type="submit" class="btn btn-primary" value="Save">
								</div>
							</form>


							<?php 
								
								if(isset($_POST['submit']))
								{
									$name=$_POST['name'];
									$description=$_POST['description'];
									

									$stmt=$con->prepare("INSERT INTO groups(name,description) values(:name,:description)");
									$stmt->bindParam(':name',$name);
									$stmt->bindParam(':description',$description);

									if($stmt->execute()){
										redirectTo("all-group.php");
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