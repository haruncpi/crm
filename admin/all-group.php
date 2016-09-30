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
							<h3 class="panel-title">Groups</h3>
						</div>
						<div class="panel-body">
							<?php
							$stmt=$con->prepare("select * from groups");
							$stmt->execute();
							?>
							<table class="table table-condensed table-bordered">
								<thead>
									<th>ID</th>
									<th>NAME</th>
									<th>DESCRIPTION</th>
									<th>ACTION</th>
								</thead>
								<tbody>
									<?php foreach($stmt->fetchAll(PDO::FETCH_OBJ) as $group):?>
									<tr>
										<td><?=$group->id?></td>
										<td><?=$group->name?></td>
										<td><?=$group->description?></td>
										<td>
												<a href="edit-group.php?id=<?=$group->id?>" class="btn btn-warning btn-sm" >Edit</a>
												<a href="?delete_id=<?=$group->id?>" onclick="if(!confirm('Are you Sure?')){return false}" class="btn btn-danger btn-sm" >Delete</a>
										</td>
									</tr>
								<?php endforeach; ?>
								</tbody>
							</table>


							<?php
							if(isset($_GET['delete_id']))
							{

								$delete_id=$_GET['delete_id'];
								$stmt=$con->prepare("DELETE from groups where id=:id");
								$stmt->bindParam(':id',$delete_id);


								if($stmt->execute()){

									redirectTo("all-group.php");
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