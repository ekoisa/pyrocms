<!doctype html>

<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js" lang="en"> 		   <![endif]-->

<head>
	<meta charset="utf-8">

	<!-- You can use .htaccess and remove these lines to avoid edge case issues. -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php echo $template['title'].' - '.lang('cp:admin_title') ?></title>

	<base href="<?php echo base_url(); ?>" />

	<!-- Mobile viewport optimized -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!-- CSS. No need to specify the media attribute unless specifically targeting a media type, leaving blank implies media=all -->
	<?php echo Asset::css('bootstrap.min.css'); ?>
	<link rel="stylesheet" href="<?php echo site_url('system/cms/themes/pyrocms/fonts/css/font-awesome.min.css'); ?>">
	<?php echo Asset::css('animate.min.css'); ?>
	<?php echo Asset::css('custom.css'); ?>
	<?php echo Asset::css('maps/jquery-jvectormap-2.0.3.css'); ?>
	<?php echo Asset::css('icheck/flat/green.css'); ?>
	<?php echo Asset::css('floatexamples.css'); ?>

	<!-- End CSS-->

	<!-- Load up some favicons -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="apple-touch-icon" href="apple-touch-icon-precomposed.png">
	<link rel="apple-touch-icon" href="apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" href="apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" href="apple-touch-icon-114x114-precomposed.png">

	<!-- metadata needs to load before some stuff -->
	<?php file_partial('metadata'); ?>

</head>

<body class="nav-md">

	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">

					<div class="navbar nav_title" style="border: 0;">
						<a href="<?php echo site_url();?>" class="site_title"><img src="<?php echo site_url('system/cms/themes/pyrocms/img/logo.png'); ?>"> <span>Momotrip Admin!</span></a>
					</div>
					<div class="clearfix"></div>

					<!-- menu prile quick info -->
					<div class="profile">
						<div class="profile_pic">
							<img src="<?php echo site_url('system/cms/themes/pyrocms/img/img.jpg'); ?>" alt="..." class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>Welcome,</span>
							<h2><?php echo $this->current_user->display_name; ?></h2>
						</div>
					</div>
					<!-- /menu prile quick info -->
					<div class="clearfix"></div>

					<?php file_partial('sidebar'); ?>
					<!-- sidebar menu -->
					<div class="main_menu_side hidden-print main_menu" style="display: none;">

						<div class="menu_section">
							<h3>General</h3>
							<ul class="nav side-menu">
								<li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu" style="display: none">
										<li><a href="index.html">Dashboard</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="menu_section">
							<h3>Live On</h3>
							<ul class="nav side-menu">
								<li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu" style="display: none">
										<li><a href="e_commerce.html">E-commerce</a>
										</li>
										<li><a href="projects.html">Projects</a>
										</li>
										<li><a href="project_detail.html">Project Detail</a>
										</li>
										<li><a href="contacts.html">Contacts</a>
										</li>
										<li><a href="profile.html">Profile</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>

					</div>
					<!-- /sidebar menu -->

					<!-- /menu footer buttons -->
					<div class="sidebar-footer hidden-small">
						<a data-toggle="tooltip" data-placement="top" title="Settings">
							<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="FullScreen">
							<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="Lock">
							<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="Logout">
							<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
						</a>
					</div>
					<!-- /menu footer buttons -->
				</div>
			</div>

			<!-- top navigation -->
			<div class="top_nav">

				<div class="nav_menu">
					<nav class="" role="navigation">
						<div class="nav toggle">
							<a id="menu_toggle"><i class="fa fa-bars"></i></a>
						</div>
						<noscript>
							<span>PyroCMS requires that JavaScript be turned on for many of the functions to work correctly. Please turn JavaScript on and reload the page.</span>
						</noscript>
						<ul class="nav navbar-nav navbar-right">
							<li class="">
								<a class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<img src="<?php echo site_url('system/cms/themes/pyrocms/img/img.jpg'); ?>" alt=""><?php echo $this->current_user->display_name; ?>
									<span class=" fa fa-angle-down"></span>
								</a>
								<ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
									<li><a>  Profile</a>
									</li>
									<li>
										<a>
											<span class="badge bg-red pull-right">50%</span>
											<span>Settings</span>
										</a>
									</li>
									<li>
										<a>Help</a>
									</li>
									<li><a href="<?php echo site_url('admin/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
									</li>
								</ul>
							</li>

							<li role="presentation" class="dropdown">
								<a class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
									<i class="fa fa-envelope-o"></i>
									<span class="badge bg-green">6</span>
								</a>
								<ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
									<li>
										<a>
											<span class="image">
										<img src="images/img.jpg" alt="Profile Image" />
									</span>
											<span>
										<span>John Smith</span>
											<span class="time">3 mins ago</span>
											</span>
											<span class="message">
										Film festivals used to be do-or-die moments for movie makers. They were where...
									</span>
										</a>
									</li>
									<li>
										<a>
											<span class="image">
										<img src="images/img.jpg" alt="Profile Image" />
									</span>
											<span>
										<span>John Smith</span>
											<span class="time">3 mins ago</span>
											</span>
											<span class="message">
										Film festivals used to be do-or-die moments for movie makers. They were where...
									</span>
										</a>
									</li>
									<li>
										<a>
											<span class="image">
										<img src="images/img.jpg" alt="Profile Image" />
									</span>
											<span>
										<span>John Smith</span>
											<span class="time">3 mins ago</span>
											</span>
											<span class="message">
										Film festivals used to be do-or-die moments for movie makers. They were where...
									</span>
										</a>
									</li>
									<li>
										<a>
											<span class="image">
										<img src="images/img.jpg" alt="Profile Image" />
									</span>
											<span>
										<span>John Smith</span>
											<span class="time">3 mins ago</span>
											</span>
											<span class="message">
										Film festivals used to be do-or-die moments for movie makers. They were where...
									</span>
										</a>
									</li>
									<li>
										<div class="text-center">
											<a href="inbox.html">
												<strong>See All Alerts</strong>
												<i class="fa fa-angle-right"></i>
											</a>
										</div>
									</li>
								</ul>
							</li>

						</ul>
					</nav>
				</div>

			</div>
			<!-- /top navigation -->


			<!-- page content -->
			<div class="right_col" role="main">
				<div class="page-title">
					<div class="title_left">
						<h3><?php echo $module_details['name'] ? anchor('admin/'.$module_details['slug'], $module_details['name']) : lang('global:dashboard') ?>
						<small>
							<?php echo $module_details['description'] ? '  ...  '.$module_details['description'] : '' ?>
						</small>
						</h3>
					</div>

					<div class="title_right">
						<?php file_partial('shortcuts') ?>
						<?php if($module_details['slug']): ?>
						<?php echo anchor('admin/help/'.$module_details['slug'], lang('help_label'), array('title' => $module_details['name'].'&nbsp;'.lang('help_label'), 'class' => 'modal')); ?>
						<?php endif; ?>
					</div>
				</div>
				<?php //if ( ! empty($module_details['sections'])) file_partial('sections') ?>
				<div class="col-xs-12">
				<?php file_partial('notices'); ?>
				</div>

				<div class="row main_content">
				<?php echo $template['body']; ?>
				</div>
				<!-- footer content -->
				<footer>
					<div class="">
						<p class="pull-right">Copyright &copy;<?php echo date('Y'); ?> <a>Momotrip</a>. Rendered in {elapsed_time} sec. using {memory_usage}. |
							<span class="lead"> <img src="<?php echo site_url('system/cms/themes/pyrocms/img/logo.png'); ?>"> Momotrip Admin!</span>
						</p>
					</div>
					<ul class="pull-right" id="lang" style="margin: 3px 7px;">
						<form action="<?php echo current_url(); ?>" id="change_language" method="get">
							<select class="chzn" name="lang" onchange="this.form.submit();">
								<?php foreach(config_item('supported_languages') as $key => $lang): ?>
									<option value="<?php echo $key; ?>" <?php echo CURRENT_LANGUAGE == $key ? ' selected="selected" ' : ''; ?>>
										 <?php echo $lang['name']; ?>
									</option>
								<?php endforeach; ?>
							</select>
						</form>
					</ul>
					<div class="clearfix"></div>
				</footer>
				<!-- /footer content -->
			</div>
			<!-- /page content -->
		</div>
	</div>
	
	<div id="custom_notifications" class="custom-notifications dsp_none">
		<ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
		</ul>
		<div class="clearfix"></div>
		<div id="notif-group" class="tabbed_notifications"></div>
	</div>

	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6. chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
	<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->

	<script type="text/javascript">
		NProgress.done();
	</script>
</body>
</html>