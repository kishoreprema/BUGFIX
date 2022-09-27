<?php
/* Smarty version 3.1.33, created on 2022-09-26 19:36:03
  from '/var/www/html/themes/tenant/_common/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6331b1cbc2c948_58019662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c633013a3fab98645060dce9660696dbb08fbd4' => 
    array (
      0 => '/var/www/html/themes/tenant/_common/login.tpl',
      1 => 1664201049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6331b1cbc2c948_58019662 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<title>Issabel - <?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
</title>


	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/css/neon-core.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/css/neon-theme.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/css/neon-forms.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/css/custom.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/css/purple-login.css">

	<!--[if lt IE 9]><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/ie8-responsive-file-warning.js"><?php echo '</script'; ?>
><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
	<![endif]-->

    <?php echo $_smarty_tpl->tpl_vars['HEADER_LIBS_JQUERY']->value;?>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/lottie.min.js"><?php echo '</script'; ?>
>
</head>
<body class="page-body login-page login-form-fall" data-url="http://neon.dev">


<!-- This is needed when you send requests via Ajax -->
<?php echo '<script'; ?>
 type="text/javascript">
var baseurl = '';

$(document).ready(function() {
    var anim;
    var animData = {
        container: document.getElementById('animIssabel'),
        renderer: 'svg',
        loop: false,
        autoplay: true,
        rendererSettings: {
            progressiveLoad: false
        },
        path: '<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/images/animIssabel.json'
    };
    anim = bodymovin.loadAnimation(animData);
    anim.setSpeed(1.5);
});
<?php echo '</script'; ?>
>

<div class="login-container">

	<div class="login-header login-caret" style="padding:50px 0 10px 0;">

		<div class="login-content">

			<img src="images/yavar_logo.jpg" width="200" height="62" alt="Issabel logo">

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

<?php ob_start();
echo $_smarty_tpl->tpl_vars['LOGIN_INCORRECT']->value;
$_prefixVariable1 = ob_get_clean();
if (!empty($_prefixVariable1)) {?>
			<div class="form-login-error"><h3><?php echo $_smarty_tpl->tpl_vars['LOGIN_INCORRECT']->value;?>
</h3></div>
			<?php echo '<script'; ?>
>$('.form-login-error').show();<?php echo '</script'; ?>
>
<?php }?>

			<form method="post">

				<div class="form-group">

					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>

						<input type="text" class="form-control" name="input_user" id="input_user" placeholder="<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
" autocomplete="off" />
					</div>

				</div>

				<div class="form-group">

					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>

						<input type="password" class="form-control" name="input_pass" placeholder="<?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
" autocomplete="off" />
					</div>

				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-login" name="submit_login">
						<i class="entypo-login"></i>
						<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>

					</button>
				</div>

			</form>


			<div class="login-bottom-links">


			</div>

		</div>

	</div>

</div>


	<!-- Bottom Scripts -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/gsap/main-gsap.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/bootstrap.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/joinable.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/resizeable.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/neon-api.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/jquery.validate.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/neon-login.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/neon-custom.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/neon-demo.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
