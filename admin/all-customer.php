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
								$sql="select * from customers";
								$results=$con->query($sql);
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
									<?php while($customer=$results->fetch_object()):?>
									<tr>
										<td><?=$customer->id?></td>
										<td><?=$customer->name?></td>
										<td><?=$customer->phone?></td>
										<td><?=$customer->email?></td>
										<td></td>
									</tr>
								<?php endwhile; ?>
								</tbody>
							</table>
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