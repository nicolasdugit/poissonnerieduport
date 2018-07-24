<div class="col-md-3 left_col menu_fixed">
	<div class="left_col scroll-view">
		<div class="navbar nav_title" style="border: 0;">
			<a href="index.php" class="site_title"><i class="fa fa-lock"></i> <span>ADMIN</span></a>	
		</div>
		<div class="clearfix"></div>
		<!-- menu profile quick info -->
		<div class="profile clearfix">
			<div class="profile_pic">
				<img src="view/images/img.jpg" alt="..." class="img-circle profile_img">
			</div>
			<div class="profile_info">
				<span>Bienvenue,</span>
				<h2>
					<?php if (isset($_SESSION['user_name'])) : ?>
						<?= strtoupper(htmlspecialchars($_SESSION['user_name'])) ?>
					<?php else : ?>
						<?php throw new Exception('Probleme identification'); ?>
					<?php endif ; ?>
				</h2>
			</div>
		</div>
		<!-- /menu profile quick info -->
		<br>
		<!-- sidebar menu -->
		<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
			<div class="menu_section">
				<h3>General</h3>
				<ul class="nav side-menu">
					<li><a href="index.php"><i class="fa fa-home"></i> Acceuil</a></li>
					<li><a href="index.php?page=inbox"><i class="fa fa-envelope-o"></i>	 Messages</a></li>
					<li><a href="index.php?page=creationRecette"><i class="fa fa-pencil-square-o"></i> Recettes </a></li>
					<li><a href="index.php?page=uploadImage"><i class="fa fa-image"></i> Images </a></li>
						

				</ul>
			</div>
		</div>
		<!-- /sidebar menu -->

		<!-- /menu footer buttons -->
		<div class="sidebar-footer hidden-small">
			<a data-toggle="tooltip" data-placement="top" title="Logout" href="index.php?action=deconnection">
				<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
			</a>
		</div>
		<!-- /menu footer buttons -->
	</div>
</div>