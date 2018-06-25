
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Votre boitre Mail <small>mails recu du site www.poissonnerieduport.fr</small></h3>
  			</div>
  			<div class="title_right">
				<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search for...">
						<span class="input-group-btn">
						<button class="btn btn-default" type="button">Go!</button>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Inbox Design<small>User Mail</small></h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Settings 1</a></li>
									<li><a href="#">Settings 2</a></li>
								</ul>
							</li>
							<li><a class="close-link"><i class="fa fa-close"></i></a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<!-- MAIL LIST -->
						<div class="row">
							<div class="col-sm-3 mail_list_column">
								<button id="compose" class="btn btn-sm btn-success btn-block" type="button">COMPOSE</button>
								<?php
								while ($mail = $mails->fetch())
								{
									?>
									<a href="#">
										<div class="mail_list">
											<div class="left">
												<i class="fa fa-circle"></i> <i class="fa fa-edit"></i>
											</div>
											<div class="right">
											<h3><?=$mail['mail-name'] ?> <small><?=$mail['mail-date'] ?></small></h3>
												<p><?=$mail['mail-content'] ?></p>
											</div>
										</div>
									</a>
									<?php
								}
								?>


							</div>
							<!-- /MAIL LIST -->
							<!-- MAIL CONTENT -->
							<div class="col-sm-9 mail_view">
								<div class="inbox-body">
									<div class="mail_heading row">
										<div class="col-md-8">
											<div class="btn-group">
												<button class="btn btn-sm btn-primary" type="button"><i class="fa fa-reply"></i> Reply</button>
												<button class="btn btn-sm btn-default" type="button"  data-placement="top" data-toggle="tooltip" data-original-title="Forward"><i class="fa fa-share"></i></button>
												<button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Print"><i class="fa fa-print"></i></button>
												<button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Trash"><i class="fa fa-trash-o"></i></button>
											</div>
										</div>
										<div class="col-md-4 text-right">
											<p class="date"> 8:02 PM 12 FEB 2014</p>
										</div>
										<div class="col-md-12">
											<h4> Donec vitae leo at sem lobortis porttitor eu consequat risus. Mauris sed congue orci. Donec ultrices faucibus rutrum.</h4>
										</div>
									</div>
									<div class="sender-info">
										<div class="row">
											<div class="col-md-12">
												<strong>Jon Doe</strong>
												<span>(jon.doe@gmail.com)</span> to
												<strong>me</strong>
												<a class="sender-dropdown"><i class="fa fa-chevron-down"></i></a>
											</div>
										</div>
									</div>
									<div class="view-mail">
										<p>Contenu du mail</p>
									</div>
									<div class="btn-group">
										<button class="btn btn-sm btn-primary" type="button"><i class="fa fa-reply"></i> Reply</button> 
										<button class="btn btn-sm btn-default" type="button"  data-placement="top" data-toggle="tooltip" data-original-title="Forward"><i class="fa fa-share"></i></button>
										<button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Print"><i class="fa fa-print"></i></button>
										<button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Trash"><i class="fa fa-trash-o"></i></button>
									</div>
								</div>
							</div>
							<!-- /MAIL CONTENT -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>