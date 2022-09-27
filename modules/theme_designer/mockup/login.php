<!DOCTYPE html>
<html lang="en">
<head>
        <base href='/'>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<title>Issabel - Página de Ingreso</title>


	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="themes/tenant/css/bootstrap.css">
	<link rel="stylesheet" href="themes/tenant/css/neon-core.css">
	<link rel="stylesheet" href="themes/tenant/css/neon-theme.css">
	<link rel="stylesheet" href="themes/tenant/css/neon-forms.css">
	<link rel="stylesheet" href="themes/tenant/css/custom.css">
	<link rel="stylesheet" href="themes/tenant/css/purple-login.css">

	<!--[if lt IE 9]><script src="themes/tenant/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

    <script type='text/javascript' src='libs/js/jquery/jquery-1.11.2.min.js'></script>
<script type='text/javascript' src='libs/js/jquery/jquery-edwidgets.js'></script>
<script type='text/javascript' src='libs/js/jquery/jquery-migrate-1.2.1.js'></script>
<script type='text/javascript' src='libs/js/jquery/jquery-ui-1.11.4.min.js'></script>
<script type='text/javascript' src='libs/js/jquery/jquery-ui-timepicker-addon.js'></script>
<script type='text/javascript' src='libs/js/jquery/jquery-upl-blockUI.js'></script>
<script type='text/javascript' src='libs/js/jquery/jquery-upl-colResizable-1.5.min.js'></script>
<script type='text/javascript' src='libs/js/jquery/jquery-upl-colorpicker.js'></script>
<script type='text/javascript' src='libs/js/jquery/jquery-upl-easing.1.3.js'></script>
<link rel='stylesheet' href='libs/js/jquery/widgetcss/colorpicker.css' />
<link rel='stylesheet' href='libs/js/jquery/widgetcss/edwidgets.css' />
<link rel='stylesheet' href='libs/js/jquery/widgetcss/jquery-ui-timepicker-addon.css' />
<link rel='stylesheet' href='libs/js/jquery/css/smoothness/jquery-ui.min.css' />
<link rel='stylesheet' href='libs/js/jquery/css/smoothness/theme.css' />
<link rel='stylesheet' href='libs/font-icons/entypo/css/entypo.css' />
<link rel='stylesheet' href='libs/font-icons/font-awesome/css/font-awesome.min.css' />
<style>
body {
  zoom: 50%;
}

</style>
</head>
<body class="page-body login-page login-form-fall" data-url="http://neon.dev">


<!-- This is needed when you send requests via Ajax --><script type="text/javascript">
var baseurl = '';
</script>

<div class="login-container">

	<div class="login-header login-caret">

		<div class="login-content">

<?php
$logofile = "/var/www/html/themes/".$_REQUEST['theme_name']."/images/issabel_logo_mini.png";
$logo = "themes/".$_REQUEST['theme_name']."/images/issabel_logo_mini.png";
if(is_file($logofile)) {
			echo "<img src='$logo' width='200' alt='Issabel logo' />";
} else {
			echo "<img src='themes/tenant/images/issabel_logo_mini.png' width='200' height='62' alt='Issabel logo' />";
}
?>
			<p class="description"></p>

			<!-- progress bar indicator -->
			<div class="login-progressbar-indicator">
				<h3>43%</h3>
				<span>logging in...</span>
			</div>
		</div>

	</div>

	<div class="login-progressbar">
		<div></div>
	</div>

	<div class="login-form">

		<div class="login-content">

			<div class="form-login-error">
				<h3>Invalid login</h3>
				<p>Enter <strong>demo</strong>/<strong>demo</strong> as login and password.</p>
			</div>

			<form method="post">

				<div class="form-group">

					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>

						<input type="text" class="form-control" name="input_user" id="input_user" placeholder="Username" autocomplete="off" />
					</div>

				</div>

				<div class="form-group">

					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>

						<input type="password" class="form-control" name="input_pass" placeholder="Password" autocomplete="off" />
					</div>

				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-login" name="submit_login">
						<i class="entypo-login"></i>
						Ingresar
					</button>
				</div>

			</form>


			<div class="login-bottom-links">

				<a href="http://www.issabel.org" style="text-decoration: none;" target='_blank'>Issabel</a> is licensed under <a href="http://www.opensource.org/licenses/gpl-license.php" style="text-decoration: none;" target='_blank'>GPL</a>. 2006 - 2019.</div>

			</div>

		</div>

	</div>

</div>


	<!-- Bottom Scripts -->
	<script type='text/javascript' src="themes/tenant/js/gsap/main-gsap.js"></script>
	<script type='text/javascript' src="themes/tenant/js/bootstrap.js"></script>
	<script type='text/javascript' src="themes/tenant/js/joinable.js"></script>
	<script type='text/javascript' src="themes/tenant/js/resizeable.js"></script>
	<script type='text/javascript' src="themes/tenant/js/neon-api.js"></script>
	<script type='text/javascript' src="themes/tenant/js/jquery.validate.min.js"></script>
	<script type='text/javascript' src="themes/tenant/js/neon-login.js"></script>
	<script type='text/javascript' src="themes/tenant/js/neon-custom.js"></script>
	<script type='text/javascript' src="themes/tenant/js/neon-demo.js"></script>
<script>
$('form').submit(false);
$(document).ready(function() {
   changeColor();
});
function changeColor() {
    loginc1=$('#login_color_1', window.parent.document).val();
    loginc2=$('#login_color_2', window.parent.document).val();
    $('.login-page').css('backgroundColor',loginc2);
    $('.login-header').css('backgroundColor',loginc1);
}
</script>

</body>
</html>

