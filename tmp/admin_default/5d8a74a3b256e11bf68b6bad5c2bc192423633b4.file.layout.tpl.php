<?php /* Smarty version Smarty-3.1.19, created on 2015-06-01 05:37:09
         compiled from "C:\WebServ\httpd\subrion\admin\templates\default\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27436556c27c5689ad5-04965755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d8a74a3b256e11bf68b6bad5c2bc192423633b4' => 
    array (
      0 => 'C:\\WebServ\\httpd\\subrion\\admin\\templates\\default\\layout.tpl',
      1 => 1430129388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27436556c27c5689ad5-04965755',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'config' => 0,
    'img' => 0,
    'key' => 0,
    'value' => 0,
    'entry' => 0,
    'dashboard' => 0,
    'item' => 0,
    'message' => 0,
    'member' => 0,
    'avatar' => 0,
    'quickSearchItem' => 0,
    'quickSearch' => 0,
    'itemName' => 0,
    'customization_mode' => 0,
    'action' => 0,
    '_content_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_556c27c590a033_65603653',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c27c590a033_65603653')) {function content_556c27c590a033_65603653($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ia_hooker')) include 'C:/WebServ/httpd/subrion/includes/smarty/intelli_plugins\\function.ia_hooker.php';
?><!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['iso'];?>
" dir="<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['direction'];?>
">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<title><?php echo iaSmartyPlugins::ia_print_title(array(),$_smarty_tpl);?>
</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="generator" content="Subrion CMS &middot; <?php echo $_smarty_tpl->tpl_vars['config']->value['version'];?>
">
		<base href="<?php echo @constant('IA_ADMIN_URL');?>
">

		<!--[if lt IE 9]>
			<script src="../../../js/utils/shiv.js"></script>
			<script src="../../../js/utils/respond.min.js"></script>
		<![endif]-->

		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
ico/apple-touch-icon-57-precomposed.png">
		<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
ico/favicon.ico">

		<?php echo smarty_function_ia_hooker(array('name'=>'smartyAdminAfterHeadSection'),$_smarty_tpl);?>


		<?php if (isset($_smarty_tpl->tpl_vars['config']->value['sap_style'])) {?>
			<?php echo iaSmartyPlugins::ia_print_css(array('files'=>"bootstrap-".((string)$_smarty_tpl->tpl_vars['config']->value['sap_style']),'order'=>0),$_smarty_tpl);?>

		<?php } else { ?>
			<?php echo iaSmartyPlugins::ia_print_css(array('files'=>'bootstrap','order'=>0),$_smarty_tpl);?>

		<?php }?>

		<?php echo iaSmartyPlugins::ia_add_media(array('files'=>'jquery, extjs, subrion','order'=>0),$_smarty_tpl);?>


		<?php echo iaSmartyPlugins::ia_print_css(array('display'=>'on'),$_smarty_tpl);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_add_js', array('order'=>0)); $_block_repeat=true; echo iaSmartyPlugins::ia_add_js(array('order'=>0), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

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
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmartyPlugins::ia_add_js(array('order'=>0), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</head>
	<body id="page--<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['name'];?>
">
		<div class="overall-wrapper">
			<div class="panels-wrapper">
				<section id="panel-left">
					<a class="brand" href="<?php echo @constant('IA_ADMIN_URL');?>
">
						<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
logo.png" alt="Subrion CMS &middot; <?php echo $_smarty_tpl->tpl_vars['config']->value['version'];?>
">
					</a>
					<ul class="nav-main">
						<li<?php if (0==$_smarty_tpl->tpl_vars['core']->value['page']['info']['group']) {?> class="current active"<?php }?>>
							<a href="<?php echo @constant('IA_ADMIN_URL');?>
" class="dashboard" data-toggle="nav-sub-dashboard"><i class="i-gauge"></i><?php echo iaSmartyPlugins::lang(array('key'=>'dashboard'),$_smarty_tpl);?>
</a>
						</li>
						<?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['core']->value['page']['info']['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
							<li<?php if ($_smarty_tpl->tpl_vars['core']->value['page']['info']['group']==$_smarty_tpl->tpl_vars['entry']->value['id']) {?> class="current active"<?php }?> id="menu-section-<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
">
								<a href="#"<?php if (isset($_smarty_tpl->tpl_vars['entry']->value['items'])&&$_smarty_tpl->tpl_vars['entry']->value['items']) {?> data-toggle="nav-sub-<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
"<?php }?>><i class="i-cogs i-<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
"></i><?php echo $_smarty_tpl->tpl_vars['entry']->value['title'];?>
</a>
							</li>
						<?php } ?>
					</ul>
					<div class="system-info">
						Subrion CMS
						<br>
						<span class="version">v <?php echo $_smarty_tpl->tpl_vars['config']->value['version'];?>
</span>
					</div>
					<div class="social-links">
						<a href="https://twitter.com/IntelliantsLLC" target="_blank" class="social-links__twitter"><i class="i-twitter-2"></i></a>
						<a href="https://www.facebook.com/Intelliants" target="_blank" class="social-links__facebook"><i class="i-facebook-2"></i></a> 
						<a href="https://plus.google.com/102005294232479547608/posts" target="_blank" class="social-links__googleplus"><i class="i-googleplus"></i></a>
					</div>
				</section>

				<section id="panel-center">
					<?php if (isset($_smarty_tpl->tpl_vars['dashboard']->value)) {?>
						<ul id="nav-sub-dashboard" class="nav-sub<?php if (0==$_smarty_tpl->tpl_vars['core']->value['page']['info']['group']) {?> active<?php }?>">
							<li class="single">
								<ul class="list-unstyled quick-links clearfix">
									<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dashboard']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
										<li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><span class="link-icon"><i class="i-<?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
"></i></span><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</a></li>
									<?php } ?>
									<li class="link-add">
										<a href="#" id="js-cmd-add-quicklink">
											<span class="link-icon"><i class="i-plus"></i></span><?php echo iaSmartyPlugins::lang(array('key'=>'add_quick_link'),$_smarty_tpl);?>

										</a>
									</li>
								</ul>
							</li>
						</ul>
					<?php }?>
					<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</section>

				<section id="panel-content">
					<div class="navbar navbar-static-top navbar-inverse">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="<?php echo @constant('IA_URL');?>
" title="<?php echo iaSmartyPlugins::lang(array('key'=>'site_home'),$_smarty_tpl);?>
" target="_blank"><i class="i-screen"></i><span> <?php echo iaSmartyPlugins::lang(array('key'=>'site_home'),$_smarty_tpl);?>
</span></a>
							</li>
							<li>
								<a href="<?php echo @constant('IA_ADMIN_URL');?>
visual-mode/" title="<?php echo iaSmartyPlugins::lang(array('key'=>'visual_manage'),$_smarty_tpl);?>
" target="_blank"><i class="i-equalizer"></i><span> <?php echo iaSmartyPlugins::lang(array('key'=>'visual_manage'),$_smarty_tpl);?>
</span></a>
							</li>
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#" title="<?php echo iaSmartyPlugins::lang(array('key'=>'quick_access'),$_smarty_tpl);?>
">
									<i class="i-fire"></i><span> <?php echo iaSmartyPlugins::lang(array('key'=>'quick_access'),$_smarty_tpl);?>
</span>
								</a>
								<ul class="dropdown-menu">
									<?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['core']->value['page']['info']['headerMenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
										<?php if (empty($_smarty_tpl->tpl_vars['entry']->value['name'])) {?>
											<li class="divider"></li>
										<?php } else { ?>
											<li<?php if ($_smarty_tpl->tpl_vars['core']->value['page']['info']['name']==$_smarty_tpl->tpl_vars['entry']->value['name']) {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['entry']->value['attr']) {?> <?php echo $_smarty_tpl->tpl_vars['entry']->value['attr'];?>
<?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['title'];?>
</a></li>
										<?php }?>
									<?php } ?>
								</ul>
							</li>

							<?php if (isset($_smarty_tpl->tpl_vars['core']->value['notifications']['system'])) {?>
								<li class="dropdown notifications alerts">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" title="<?php echo iaSmartyPlugins::lang(array('key'=>'system_notifications'),$_smarty_tpl);?>
">
										<i class="i-flag"></i>
										<span class="label label-info"><?php echo count($_smarty_tpl->tpl_vars['core']->value['notifications']['system']);?>
</span>
										<span> <?php echo iaSmartyPlugins::lang(array('key'=>'system_notifications'),$_smarty_tpl);?>
</span>
									</a>
									<ul class="dropdown-menu pull-right">
										<li class="dropdown-block">
											<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['core']->value['notifications']['system']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
												<div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
											<?php } ?>
										</li>
									</ul>
								</li>
							<?php }?>

							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#" title="Help and Support">
									<i class="i-support"></i>
									<span> Help and Support</span>
								</a>
								<ul class="dropdown-menu pull-right">
									<?php if (isset($_smarty_tpl->tpl_vars['config']->value['display_feedbacks'])&&$_smarty_tpl->tpl_vars['config']->value['display_feedbacks']) {?>
										<li>
											<a data-toggle="modal" href="#feedback-modal">Submit feedback</a>
										</li>
									<?php }?>
									<li><a href="http://www.subrion.com/desk/" target="_blank">Helpdesk</a></li>
									<li><a href="http://www.subrion.org/forums/" target="_blank">User forums</a></li>
									<li><a href="http://dev.subrion.org/projects/subrion-cms/wiki" target="_blank">Wiki</a></li>
								</ul>
							</li>
							<li>
								<a href="<?php echo @constant('IA_ADMIN_URL');?>
logout/" title="<?php echo iaSmartyPlugins::lang(array('key'=>'logout'),$_smarty_tpl);?>
" id="user-logout">
									<i class="i-switch"></i>
									<span> <?php echo iaSmartyPlugins::lang(array('key'=>'logout'),$_smarty_tpl);?>
</span>
								</a>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-left">
							<li class="panel-toggle">
								<a href="#"><i class="i-menu"></i></a>
							</li>
							<li id="user-info">
								<a href="<?php echo @constant('IA_ADMIN_URL');?>
members/edit/<?php echo $_smarty_tpl->tpl_vars['member']->value['id'];?>
/">
									<?php if ($_smarty_tpl->tpl_vars['member']->value['avatar']) {?>
										<?php $_smarty_tpl->tpl_vars['avatar'] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['member']->value['avatar']), null, 0);?>
										<?php if ($_smarty_tpl->tpl_vars['avatar']->value) {?>
											<?php echo iaSmartyPlugins::printImage(array('imgfile'=>$_smarty_tpl->tpl_vars['avatar']->value['path'],'title'=>(($tmp = @$_smarty_tpl->tpl_vars['member']->value['fullname'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['member']->value['username'] : $tmp)),$_smarty_tpl);?>

										<?php } else { ?>
											<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
no-avatar.png" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value['fullname'], ENT_QUOTES, 'UTF-8', true);?>
">
										<?php }?>
									<?php } else { ?>
										<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
no-avatar.png" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value['fullname'], ENT_QUOTES, 'UTF-8', true);?>
">
									<?php }?>
									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value['fullname'], ENT_QUOTES, 'UTF-8', true);?>

								</a>
							</li>

							
						</ul>

						<form id="quick-search" class="navbar-form navbar-right" action="<?php echo @constant('IA_ADMIN_URL');?>
members/">
							<input type="text" name="q" style="width: 200px;" class="form-control" placeholder="<?php echo iaSmartyPlugins::lang(array('key'=>'type_here_to_search'),$_smarty_tpl);?>
"<?php if (isset($_GET['q'])) {?> value="<?php echo htmlspecialchars($_GET['q'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
							<div class="btn-group">
								<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
									<?php echo $_smarty_tpl->tpl_vars['quickSearch']->value[$_smarty_tpl->tpl_vars['quickSearchItem']->value]['title'];?>
 <span class="caret"></span>
								</button>
								<ul class="dropdown-menu pull-right">
									<?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_smarty_tpl->tpl_vars['itemName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['quickSearch']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
 $_smarty_tpl->tpl_vars['itemName']->value = $_smarty_tpl->tpl_vars['entry']->key;
?>
										<li<?php if ($_smarty_tpl->tpl_vars['quickSearchItem']->value==$_smarty_tpl->tpl_vars['itemName']->value) {?> class="active"<?php }?>><a href="<?php echo @constant('IA_ADMIN_URL');?>
<?php echo $_smarty_tpl->tpl_vars['entry']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value['title'];?>
</a></li>
									<?php } ?>
									<?php if (count($_smarty_tpl->tpl_vars['quickSearch']->value)>1) {?>
										<li class="divider"></li>
										<li><a href="#" rel="reset"><?php echo iaSmartyPlugins::lang(array('key'=>'reset'),$_smarty_tpl);?>
</a></li>
									<?php }?>
								</ul>
							</div>
							<button type="submit" class="btn btn-primary"><i class="i-search"></i></button>
						</form>
					</div>

					<div class="content-wrapper">
						<div class="block">
							<div class="block-heading">
								<ul class="nav nav-pills pull-right">
									<?php if ('index'==$_smarty_tpl->tpl_vars['core']->value['page']['name']) {?>
										<?php if (isset($_smarty_tpl->tpl_vars['customization_mode']->value)) {?>
											<li><a href="?reset"><i class="i-loop"></i> <?php echo iaSmartyPlugins::lang(array('key'=>'reset'),$_smarty_tpl);?>
</a></li>
											<li><a href="?save" id="js-cmd-save"><i class="i-checkmark"></i> <?php echo iaSmartyPlugins::lang(array('key'=>'save'),$_smarty_tpl);?>
</a></li>
											<li><a href=""><i class="i-close"></i> <?php echo iaSmartyPlugins::lang(array('key'=>'discard'),$_smarty_tpl);?>
</a></li>
										<?php } else { ?>
											<li><a href="?customize"><i class="i-equalizer"></i> <?php echo iaSmartyPlugins::lang(array('key'=>'customize'),$_smarty_tpl);?>
</a></li>
										<?php }?>
									<?php }?>

									<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['core']->value['page']['info']['toolbarActions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
										<li><a href="<?php echo $_smarty_tpl->tpl_vars['action']->value['url'];?>
" <?php echo $_smarty_tpl->tpl_vars['action']->value['attributes'];?>
><?php if ($_smarty_tpl->tpl_vars['action']->value['icon']) {?><i class="<?php echo $_smarty_tpl->tpl_vars['action']->value['icon'];?>
"></i> <?php }?><?php echo $_smarty_tpl->tpl_vars['action']->value['title'];?>
</a></li>
									<?php } ?>
								</ul>
								<h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['core']->value['page']['title'], ENT_QUOTES, 'UTF-8', true);?>
</h3>

								<?php echo $_smarty_tpl->getSubTemplate ('breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

							</div>

							<?php echo $_smarty_tpl->getSubTemplate ('notification.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


							<div class="block-content"><?php echo $_smarty_tpl->tpl_vars['_content_']->value;?>
</div>
						</div>
					</div>
				</section>
			</div>

			<!-- Feedback modal -->
			<div class="modal fade" id="feedback-modal">
				<div class="modal-dialog">
					<div class="modal-content">
						<form method="post" class="sap-form form-horizontal">
							<?php echo iaSmartyPlugins::preventCsrf(array(),$_smarty_tpl);?>

							<input type="hidden" name="action" value="request">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title"><i class="i-bubbles-2"></i> <?php echo iaSmartyPlugins::lang(array('key'=>'submit_feedback'),$_smarty_tpl);?>
</h4>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col col-lg-12">
										<p class="text-muted"><?php echo iaSmartyPlugins::lang(array('key'=>'feedback_terms'),$_smarty_tpl);?>
</p>
									</div>
								</div>
								<div class="row">
									<div class="col col-lg-6">
										<label><?php echo iaSmartyPlugins::lang(array('key'=>'fullname'),$_smarty_tpl);?>
</label>
										<input type="text" name="fullname" data-def="<?php echo $_smarty_tpl->tpl_vars['member']->value['fullname'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['member']->value['fullname'];?>
">
									</div>
									<div class="col col-lg-6">
										<label><?php echo iaSmartyPlugins::lang(array('key'=>'email'),$_smarty_tpl);?>
</label>
										<input type="text" name="email" data-def="<?php echo $_smarty_tpl->tpl_vars['member']->value['email'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['member']->value['email'];?>
">
									</div>
								</div>
								<div class="row">
									<div class="col col-lg-12">
										<label id="feedback_subject_label"><?php echo iaSmartyPlugins::lang(array('key'=>'subject'),$_smarty_tpl);?>
</label>
										<select name="subject">
											<option value=""><?php echo iaSmartyPlugins::lang(array('key'=>'_select_'),$_smarty_tpl);?>
</option>
											<option data-icon="bug"><?php echo iaSmartyPlugins::lang(array('key'=>'bug_report'),$_smarty_tpl);?>
</option>
											<option data-icon="lightning"><?php echo iaSmartyPlugins::lang(array('key'=>'feature_request'),$_smarty_tpl);?>
</option>
											<option data-icon="fire"><?php echo iaSmartyPlugins::lang(array('key'=>'custom_modification'),$_smarty_tpl);?>
</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col col-lg-12">
										<label><?php echo iaSmartyPlugins::lang(array('key'=>'message_body'),$_smarty_tpl);?>
</label>
										<textarea name="body" cols="30" rows="5"></textarea>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo iaSmartyPlugins::lang(array('key'=>'close'),$_smarty_tpl);?>
</button>
								<button type="button" id="clearFeedback" class="btn btn-default"><?php echo iaSmartyPlugins::lang(array('key'=>'clear'),$_smarty_tpl);?>
</button>
								<button type="submit" class="btn btn-primary"><?php echo iaSmartyPlugins::lang(array('key'=>'send'),$_smarty_tpl);?>
</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<?php if (!isset($_COOKIE['loader'])||'loaded'!=$_COOKIE['loader']) {?>
			<div id="js-ajax-loader">
				<div class="spinner"><i class="i-spinner"></i></div>
				<p id="js-ajax-loader-status"></p>
			</div>
		<?php }?>

		<?php echo smarty_function_ia_hooker(array('name'=>'smartyAdminFooterBeforeJsDisplay'),$_smarty_tpl);?>

		<?php echo iaSmartyPlugins::ia_print_js(array('display'=>'on'),$_smarty_tpl);?>

		<?php echo smarty_function_ia_hooker(array('name'=>'smartyAdminFooterAfterJsDisplay'),$_smarty_tpl);?>

	</body>
</html><?php }} ?>
