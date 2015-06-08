<?php /* Smarty version Smarty-3.1.19, created on 2015-06-01 05:38:02
         compiled from "C:\WebServ\httpd\subrion\templates\startup\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18308556c27fa3d8ed6-56695191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e0868e90f2fd8e0e332bd7683b56b3be69737e0' => 
    array (
      0 => 'C:\\WebServ\\httpd\\subrion\\templates\\startup\\layout.tpl',
      1 => 1430129388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18308556c27fa3d8ed6-56695191',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'config' => 0,
    'key' => 0,
    'value' => 0,
    'img' => 0,
    'iaBlocks' => 0,
    '_content_' => 0,
    'manageMode' => 0,
    'previewMode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_556c27fa6a7f13_84794235',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c27fa6a7f13_84794235')) {function content_556c27fa6a7f13_84794235($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ia_hooker')) include 'C:/WebServ/httpd/subrion/includes/smarty/intelli_plugins\\function.ia_hooker.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:/WebServ/httpd/subrion/includes/smarty/plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_randnum')) include 'C:/WebServ/httpd/subrion/includes/smarty/intelli_plugins\\function.randnum.php';
?><!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['iso'];?>
" dir="<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['direction'];?>
">
	<head>
		<?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontBeforeHeadSection'),$_smarty_tpl);?>


		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<title><?php echo iaSmartyPlugins::ia_print_title(array(),$_smarty_tpl);?>
</title>
		<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['meta-description'];?>
">
		<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['meta-keywords'];?>
">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="generator" content="Subrion CMS <?php echo $_smarty_tpl->tpl_vars['config']->value['version'];?>
 - Open Source Content Management System">
		<meta name="robots" content="index">
		<meta name="robots" content="follow">
		<meta name="revisit-after" content="1 day">
		<base href="<?php echo @constant('IA_URL');?>
">

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
js/utils/shiv.js"></script>
		<![endif]-->

		<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
favicon.ico">

		<?php echo iaSmartyPlugins::ia_add_media(array('files'=>'jquery, subrion, bootstrap','order'=>0),$_smarty_tpl);?>

		<?php echo iaSmartyPlugins::ia_print_js(array('files'=>'_IA_TPL_app','order'=>999),$_smarty_tpl);?>


		<?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontAfterHeadSection'),$_smarty_tpl);?>


		<?php echo iaSmartyPlugins::ia_print_css(array('display'=>'on'),$_smarty_tpl);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_add_js', array()); $_block_repeat=true; echo iaSmartyPlugins::ia_add_js(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			intelli.pageName = '<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['name'];?>
';

			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['customConfig']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				intelli.config.<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 = '<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
';
			<?php } ?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmartyPlugins::ia_add_js(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php switch ($_smarty_tpl->tpl_vars['config']->value['startup_font']){?>
<?php case 'PT Sans':?>
				<link href='//fonts.googleapis.com/css?family=PT+Sans:400,700,400italic<?php if ($_smarty_tpl->tpl_vars['config']->value['startup_font_subset']) {?>&subset=latin,cyrillic<?php }?>' rel='stylesheet' type='text/css'>
				<style type="text/css">
					body, select, textarea { font-family: 'PT Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; }
				</style>
			<?php break;?><?php case 'PT Serif':?>
				<link href='//fonts.googleapis.com/css?family=PT+Serif:400,700,400italic<?php if ($_smarty_tpl->tpl_vars['config']->value['startup_font_subset']) {?>&subset=latin,cyrillic<?php }?>' rel='stylesheet' type='text/css'>
				<style type="text/css">
					body, select, textarea { font-family: 'PT Serif', 'Helvetica Neue', Helvetica, Arial, sans-serif; }
				</style>
			<?php break;?><?php case 'Roboto':?>
				<link href='//fonts.googleapis.com/css?family=Roboto:400,700,400italic<?php if ($_smarty_tpl->tpl_vars['config']->value['startup_font_subset']) {?>&subset=latin,cyrillic<?php }?>' rel='stylesheet' type='text/css'>
				<style type="text/css">
					body, select, textarea { font-family: 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif; }
				</style>
		<?php }?>

		<?php if ('rtl'==$_smarty_tpl->tpl_vars['core']->value['language']['direction']) {?>
			<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
templates/<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['tmpl'];?>
/css/iabootstrap.rtl.css">
		<?php }?>
	</head>

	<body class="page-<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['name'];?>
">
		<header class="header">
			<div class="inventory">
				<div class="container">
					<form id="fast-search" method="post" action="<?php echo @constant('IA_URL');?>
search/" class="form-inline nav-search">
						<div class="control-group">
							<input type="text" name="q" placeholder="<?php echo iaSmartyPlugins::lang(array('key'=>'search'),$_smarty_tpl);?>
" class="span2">
							<button type="submit"><i class="icon-search"></i></button>
						</div>
					</form>
					
					<?php echo iaSmartyPlugins::ia_blocks(array('block'=>'inventory'),$_smarty_tpl);?>


					<?php echo $_smarty_tpl->getSubTemplate ('language-selector.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</div>
			</div>
			<nav class="navigation<?php if ($_smarty_tpl->tpl_vars['config']->value['sticky_navbar']) {?> navigation--sticky<?php }?>">
				<div class="container">
					<a class="brand" href="<?php echo @constant('IA_URL');?>
">
						<?php if (!empty($_smarty_tpl->tpl_vars['config']->value['site_logo'])) {?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
uploads/<?php echo $_smarty_tpl->tpl_vars['config']->value['site_logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['config']->value['site'];?>
">
						<?php } else { ?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['config']->value['site'];?>
">
						<?php }?>
					</a>

					<?php if ($_smarty_tpl->tpl_vars['config']->value['startup_social']) {?>
						<ul class="social">
							<?php if ($_smarty_tpl->tpl_vars['config']->value['startup_social_t']) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['startup_social_t'];?>
" class="twitter"><i class="icon-twitter"></i></a></li><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['config']->value['startup_social_f']) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['startup_social_f'];?>
" class="facebook"><i class="icon-facebook"></i></a></li><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['config']->value['startup_social_g']) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['startup_social_g'];?>
" class="google-plus"><i class="icon-google-plus"></i></a></li><?php }?>
						</ul>
					<?php }?>

					<a href="#" class="nav-toggle" data-toggle="collapse" data-target=".nav-bar-collapse"><i class="icon-reorder"></i> <?php echo iaSmartyPlugins::lang(array('key'=>'su_menu'),$_smarty_tpl);?>
</a>
					
					<div class="nav-bar-collapse">
						<?php echo iaSmartyPlugins::ia_blocks(array('block'=>'account'),$_smarty_tpl);?>

					
						<?php echo iaSmartyPlugins::ia_blocks(array('block'=>'mainmenu'),$_smarty_tpl);?>

					</div>
				</div>
			</nav>
			
			<?php if (isset($_smarty_tpl->tpl_vars['iaBlocks']->value['header'])) {?>
				<div class="container">
					<?php echo iaSmartyPlugins::ia_blocks(array('block'=>'header'),$_smarty_tpl);?>

				</div>
			<?php }?>
		</header>

		<?php if (isset($_smarty_tpl->tpl_vars['iaBlocks']->value['header1'])||isset($_smarty_tpl->tpl_vars['iaBlocks']->value['header2'])||isset($_smarty_tpl->tpl_vars['iaBlocks']->value['header3'])||isset($_smarty_tpl->tpl_vars['iaBlocks']->value['header4'])) {?>
			<div class="header-blocks">
				<div class="container">
					<div class="row">
						<div class="<?php echo iaSmartyPlugins::width(array('section'=>'header','position'=>'header1'),$_smarty_tpl);?>
"><?php echo iaSmartyPlugins::ia_blocks(array('block'=>'header1'),$_smarty_tpl);?>
</div>
						<div class="<?php echo iaSmartyPlugins::width(array('section'=>'header','position'=>'header2'),$_smarty_tpl);?>
"><?php echo iaSmartyPlugins::ia_blocks(array('block'=>'header2'),$_smarty_tpl);?>
</div>
						<div class="<?php echo iaSmartyPlugins::width(array('section'=>'header','position'=>'header3'),$_smarty_tpl);?>
"><?php echo iaSmartyPlugins::ia_blocks(array('block'=>'header3'),$_smarty_tpl);?>
</div>
						<div class="<?php echo iaSmartyPlugins::width(array('section'=>'header','position'=>'header4'),$_smarty_tpl);?>
"><?php echo iaSmartyPlugins::ia_blocks(array('block'=>'header4'),$_smarty_tpl);?>
</div>
					</div>
				</div>
			</div>
		<?php }?>

		<?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontBeforeBreadcrumb'),$_smarty_tpl);?>


		<?php echo $_smarty_tpl->getSubTemplate ('breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


		<?php if (isset($_smarty_tpl->tpl_vars['iaBlocks']->value['verytop'])) {?>
			<div class="verytop">
				<div class="container">
					<?php echo iaSmartyPlugins::ia_blocks(array('block'=>'verytop'),$_smarty_tpl);?>

				</div>
			</div>
		<?php }?>

		<div class="main-content">
			<div class="container">
				<div class="row">

					<div class="<?php echo iaSmartyPlugins::width(array('section'=>'content','position'=>'left'),$_smarty_tpl);?>
">
						<?php echo iaSmartyPlugins::ia_blocks(array('block'=>'left'),$_smarty_tpl);?>

					</div>

					<div class="<?php echo iaSmartyPlugins::width(array('section'=>'content','position'=>'center'),$_smarty_tpl);?>
">
						<div class="content-wrap">

							<?php echo iaSmartyPlugins::ia_blocks(array('block'=>'top'),$_smarty_tpl);?>


							<h1 class="page-header"><?php echo $_smarty_tpl->tpl_vars['core']->value['page']['title'];?>
</h1>

							<?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontBeforeNotifications'),$_smarty_tpl);?>

							<?php echo $_smarty_tpl->getSubTemplate ('notification.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


							<?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontBeforeMainContent'),$_smarty_tpl);?>


							<?php echo $_smarty_tpl->tpl_vars['_content_']->value;?>


							<?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontAfterMainContent'),$_smarty_tpl);?>


							<?php echo iaSmartyPlugins::ia_blocks(array('block'=>'bottom'),$_smarty_tpl);?>


							<?php if (isset($_smarty_tpl->tpl_vars['iaBlocks']->value['user1'])||isset($_smarty_tpl->tpl_vars['iaBlocks']->value['user2'])) {?>
								<div class="row-fluid">
									<div class="<?php echo iaSmartyPlugins::width(array('section'=>'user-blocks','position'=>'user1'),$_smarty_tpl);?>
"><?php echo iaSmartyPlugins::ia_blocks(array('block'=>'user1'),$_smarty_tpl);?>
</div>
									<div class="<?php echo iaSmartyPlugins::width(array('section'=>'user-blocks','position'=>'user2'),$_smarty_tpl);?>
"><?php echo iaSmartyPlugins::ia_blocks(array('block'=>'user2'),$_smarty_tpl);?>
</div>
								</div>
							<?php }?>
						</div>
					</div>

					<div class="<?php echo iaSmartyPlugins::width(array('section'=>'content','position'=>'right'),$_smarty_tpl);?>
">
						<?php echo iaSmartyPlugins::ia_blocks(array('block'=>'right'),$_smarty_tpl);?>

					</div>

				</div>
			</div>
		</div>

		<?php if (isset($_smarty_tpl->tpl_vars['iaBlocks']->value['verybottom'])) {?>
			<div class="verybottom">
				<div class="container"><?php echo iaSmartyPlugins::ia_blocks(array('block'=>'verybottom'),$_smarty_tpl);?>
</div>
			</div>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['iaBlocks']->value['footer1'])||isset($_smarty_tpl->tpl_vars['iaBlocks']->value['footer2'])||isset($_smarty_tpl->tpl_vars['iaBlocks']->value['footer3'])||isset($_smarty_tpl->tpl_vars['iaBlocks']->value['footer4'])) {?>
			<div class="footer-blocks">
				<div class="container">
					<div class="row">
						<div class="<?php echo iaSmartyPlugins::width(array('section'=>'footer','position'=>'footer1'),$_smarty_tpl);?>
"><?php echo iaSmartyPlugins::ia_blocks(array('block'=>'footer1'),$_smarty_tpl);?>
</div>
						<div class="<?php echo iaSmartyPlugins::width(array('section'=>'footer','position'=>'footer2'),$_smarty_tpl);?>
"><?php echo iaSmartyPlugins::ia_blocks(array('block'=>'footer2'),$_smarty_tpl);?>
</div>
						<div class="<?php echo iaSmartyPlugins::width(array('section'=>'footer','position'=>'footer3'),$_smarty_tpl);?>
"><?php echo iaSmartyPlugins::ia_blocks(array('block'=>'footer3'),$_smarty_tpl);?>
</div>
						<div class="<?php echo iaSmartyPlugins::width(array('section'=>'footer','position'=>'footer4'),$_smarty_tpl);?>
"><?php echo iaSmartyPlugins::ia_blocks(array('block'=>'footer4'),$_smarty_tpl);?>
</div>
					</div>
				</div>
			</div>
		<?php }?>

		<footer class="footer">
			<div class="container">
				<?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontBeforeFooterLinks'),$_smarty_tpl);?>


				<?php if ($_smarty_tpl->tpl_vars['config']->value['startup_social']) {?>
					<ul class="social social--dark">
						<?php if ($_smarty_tpl->tpl_vars['config']->value['startup_social_t']) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['startup_social_t'];?>
" class="twitter"><i class="icon-twitter"></i></a></li><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['config']->value['startup_social_f']) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['startup_social_f'];?>
" class="facebook"><i class="icon-facebook"></i></a></li><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['config']->value['startup_social_g']) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['startup_social_g'];?>
" class="google-plus"><i class="icon-google-plus"></i></a></li><?php }?>
					</ul>
				<?php }?>

				<?php echo iaSmartyPlugins::ia_blocks(array('block'=>'copyright'),$_smarty_tpl);?>

				<p class="copyright">&copy; <?php echo smarty_modifier_date_format($_SERVER['REQUEST_TIME'],'%Y');?>
 <?php echo iaSmartyPlugins::lang(array('key'=>'powered_by_subrion'),$_smarty_tpl);?>
</p>

				<?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontAfterFooterLinks'),$_smarty_tpl);?>

			</div>
		</footer>

		<!-- SYSTEM STUFF -->

		<?php if ($_smarty_tpl->tpl_vars['config']->value['cron']) {?>
			<div style="display: none;">
				<img src="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
cron/?<?php echo smarty_function_randnum(array(),$_smarty_tpl);?>
" width="1" height="1" alt="">
			</div>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['manageMode']->value)) {?>
			<?php echo $_smarty_tpl->getSubTemplate ('visual-mode.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['previewMode']->value)) {?>
			<p><?php echo iaSmartyPlugins::lang(array('key'=>'youre_in_preview_mode'),$_smarty_tpl);?>
</p>
		<?php }?>

		<?php echo iaSmartyPlugins::ia_print_js(array('display'=>'on'),$_smarty_tpl);?>


		<?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontFinalize'),$_smarty_tpl);?>

	</body>
</html><?php }} ?>
