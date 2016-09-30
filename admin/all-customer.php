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
							<h3 class="panel-title">Customers</h3>
						</div>
						<div class="panel-body">
							<?php 
								$stmt=$con->prepare("select * from customers");
								$stmt->execute();
							?>
							<table class="table table-condensed table-bordered">
								<thead>
									<th>ID</th>
									<th>NAME</th>
									<th>PHONE</th>
									<th>E-MAIL</th>
									<th>ACTION</th>
								</thead>
								<tbody>
									<?php foreach($stmt->fetchAll(PDO::FETCH_OBJ) as $customer):?>
									<tr>
										<td><?=$customer->id?></td>
										<td><?=$customer->name?></td>
										<td><?=$customer->phone?></td>
										<td><?=$customer->email?></td>
										<td>
											<a href="edit-customer.php?id=<?=$customer->id?>" class="btn btn-warning btn-sm"> Edit </a>
											<a href="?delete_id=<?=$customer->id?>" onclick="if(!confirm('Are your sure?')){return false}"  class="btn btn-danger btn-sm"> Delete </a>
										</td>
									</tr>
								<?php endforeach; ?>
								</tbody>
							</table>

							<?php 
							if(isset($_GET['delete_id']))
							{
								$delete_id=$_GET['delete_id'];

								$stmt=$con->prepare("DELETE from customers where id=:id");
								$stmt->bindParam(':id',$delete_id);


								if($stmt->execute()){
									 redirectTo("all-customer.php");
								}
								else{
									echo "Delete failed";
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