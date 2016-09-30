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
					<ul class="home-tiles">
						<li class="color1">
							<p>Customers</p>
							<h2><?=countVal('customers')?></h2>
						</li>
						<li class="color2">
							<p>Groups</p>
							<h2>22</h2>
						</li>
					</ul>
				</div>


			</div>
			<!-- content -->
		</div>
	</div>
</section>

<?php
include_once "footer.php";