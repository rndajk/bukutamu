<html>
	<head>
		<!-- Standard Meta -->
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
		<meta name="viewport" content="width=device-width, initial-state=1.0, maximum-scale=1.0">


	    <meta name="description" content="Developed By RnD Lab. @JK - Informatics ITS">
	    <meta name="author" content="RnD @JK">
	    <meta name="keywords" content="Buku Tamu, Ganteng, Keren, Aplikasi, Panutan">
	    <title>
	    	<?php
	    		echo isset($page_title) ? $page_title.' | ':'';
	    		echo $this->config->item('site_name');
	    	?>
	    </title>

	    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/semantic.min.css">
	    <script src="<?php echo base_url('assets'); ?>/jquery-2.1.4.min.js"></script>
		<script src="<?php echo base_url('assets'); ?>/semantic.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/components/style.css">
	</head>
  	<body>
  		<div class="ui middle aligned center aligned grid">
  			<div class="column-login">
  				<h2 class="ui inverted image header">
  					<img src="<?php echo base_url('assets'); ?>/images/logo.png" class="image">
  					<div class="content">Login ke Akun Anda</div>
  				</h2>
  				<form name="form-login-admin" action="<?php echo site_url('C_auth/login');?>" method='POST' class="ui large form">
  					<div class="ui stacked segment">
  						<div class="field">
							<label>User ID</label>
							<div class="ui left icon input">
								<input type="text" name="username" placeholder="Username">
								<i class="user icon"></i>
							</div>
						</div>
						<div class="field">
							<label>Password</label>
							<div class="ui left icon input">
								<input type="password" name="password" placeholder="Password">
								<i class="lock icon"></i>
							</div>
						</div>
						<button class="ui fluid large blue submit button" type="submit" name="btn_login" value="login">Login</button>
  					</div>
				</form>
  			</div>
  		</div>
  	</body>
  	<footer>
  	</footer>
</html>