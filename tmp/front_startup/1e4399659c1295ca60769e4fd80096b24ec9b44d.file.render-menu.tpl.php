<?php /* Smarty version Smarty-3.1.19, created on 2015-06-01 05:38:02
         compiled from "C:\WebServ\httpd\subrion\templates\startup\render-menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2030556c27faba9361-45126808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e4399659c1295ca60769e4fd80096b24ec9b44d' => 
    array (
      0 => 'C:\\WebServ\\httpd\\subrion\\templates\\startup\\render-menu.tpl',
      1 => 1430129388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2030556c27faba9361-45126808',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'position' => 0,
    'menu' => 0,
    'member' => 0,
    'config' => 0,
    'avatar' => 0,
    'img' => 0,
    'manageMode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_556c27fad79ee7_47754785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c27fad79ee7_47754785')) {function content_556c27fad79ee7_47754785($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ia_menu')) include 'C:/WebServ/httpd/subrion/includes/smarty/intelli_plugins\\function.ia_menu.php';
if (!is_callable('smarty_function_ia_hooker')) include 'C:/WebServ/httpd/subrion/includes/smarty/intelli_plugins\\function.ia_hooker.php';
?><?php if ('mainmenu'==$_smarty_tpl->tpl_vars['position']->value) {?>
	<?php echo smarty_function_ia_menu(array('menus'=>$_smarty_tpl->tpl_vars['menu']->value['contents'],'class'=>"nav nav-pills nav-mainmenu ".((string)$_smarty_tpl->tpl_vars['menu']->value['classname'])),$_smarty_tpl);?>

<?php } elseif ('inventory'==$_smarty_tpl->tpl_vars['position']->value) {?>
	<?php echo smarty_function_ia_menu(array('menus'=>$_smarty_tpl->tpl_vars['menu']->value['contents'],'class'=>"nav-inventory ".((string)$_smarty_tpl->tpl_vars['menu']->value['classname']),'loginout'=>true),$_smarty_tpl);?>

<?php } elseif ('account'==$_smarty_tpl->tpl_vars['position']->value) {?>
	<?php if ('account'==$_smarty_tpl->tpl_vars['menu']->value['name']&&$_smarty_tpl->tpl_vars['member']->value&&$_smarty_tpl->tpl_vars['config']->value['members_enabled']) {?>
		<div class="nav-account">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				<span class="nav-account__avatar">
					<?php if ($_smarty_tpl->tpl_vars['member']->value['avatar']) {?>
						<?php $_smarty_tpl->tpl_vars['avatar'] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['member']->value['avatar']), null, 0);?>
						<?php if ($_smarty_tpl->tpl_vars['avatar']->value) {?>
							<?php echo iaSmartyPlugins::printImage(array('imgfile'=>$_smarty_tpl->tpl_vars['avatar']->value['path'],'width'=>30,'height'=>30,'title'=>(($tmp = @$_smarty_tpl->tpl_vars['member']->value['fullname'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['member']->value['username'] : $tmp)),$_smarty_tpl);?>

						<?php } else { ?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
no-avatar.png" alt="<?php echo $_smarty_tpl->tpl_vars['member']->value['username'];?>
">
						<?php }?>
					<?php } else { ?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
no-avatar.png" alt="<?php echo $_smarty_tpl->tpl_vars['member']->value['username'];?>
">
					<?php }?>
				</span>
				<span class="nav-account__name">
					<?php echo (($tmp = @$_smarty_tpl->tpl_vars['member']->value['fullname'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['member']->value['username'] : $tmp);?>

				</span>
				<span class="caret"></span>
			</a>
			<ul class="nav-account__menu dropdown-menu">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('access', array('object'=>'admin_access')); $_block_repeat=true; echo iaSmartyPlugins::access(array('object'=>'admin_access'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<li><a rel="nofollow" href="<?php echo @constant('IA_ADMIN_URL');?>
" target="_blank" title="<?php echo iaSmartyPlugins::lang(array('key'=>'su_admin_dashboard'),$_smarty_tpl);?>
"><i class="icon-cog"></i> <?php echo iaSmartyPlugins::lang(array('key'=>'su_admin_dashboard'),$_smarty_tpl);?>
</a></li>
					<li class="divider"></li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmartyPlugins::access(array('object'=>'admin_access'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<li class="account-box">
					<?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontInsideAccountBox'),$_smarty_tpl);?>

					<?php echo smarty_function_ia_menu(array('menus'=>$_smarty_tpl->tpl_vars['menu']->value['contents'],'class'=>'nav nav-pills nav-stacked','loginout'=>true),$_smarty_tpl);?>

				</li>
			</ul>
		</div>
	<?php } else { ?>
		<ul class="nav-account">
			<li><a href="<?php echo @constant('IA_URL');?>
login/"><?php echo iaSmartyPlugins::lang(array('key'=>'su_login'),$_smarty_tpl);?>
</a></li>
			<li><a class="btn-account" href="<?php echo @constant('IA_URL');?>
registration/"><?php echo iaSmartyPlugins::lang(array('key'=>'su_signup'),$_smarty_tpl);?>
</a></li>
		</ul>
	<?php }?>
<?php } elseif (in_array($_smarty_tpl->tpl_vars['position']->value,array('left','right','user1','user2','top','footer1','footer2','footer3','footer4'))) {?>
	<?php if (!empty($_smarty_tpl->tpl_vars['menu']->value['contents'][0])) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_block', array('title'=>$_smarty_tpl->tpl_vars['menu']->value['title'],'movable'=>true,'id'=>$_smarty_tpl->tpl_vars['menu']->value['id'],'name'=>$_smarty_tpl->tpl_vars['menu']->value['name'],'collapsible'=>$_smarty_tpl->tpl_vars['menu']->value['collapsible'],'classname'=>$_smarty_tpl->tpl_vars['menu']->value['classname'])); $_block_repeat=true; echo iaSmartyPlugins::ia_block(array('title'=>$_smarty_tpl->tpl_vars['menu']->value['title'],'movable'=>true,'id'=>$_smarty_tpl->tpl_vars['menu']->value['id'],'name'=>$_smarty_tpl->tpl_vars['menu']->value['name'],'collapsible'=>$_smarty_tpl->tpl_vars['menu']->value['collapsible'],'classname'=>$_smarty_tpl->tpl_vars['menu']->value['classname']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php if ('account'==$_smarty_tpl->tpl_vars['menu']->value['name']&&$_smarty_tpl->tpl_vars['member']->value&&$_smarty_tpl->tpl_vars['config']->value['members_enabled']) {?>
				<div class="account-panel">
					<div class="account-info">
						<?php if ($_smarty_tpl->tpl_vars['member']->value['avatar']) {?>
							<?php $_smarty_tpl->tpl_vars['avatar'] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['member']->value['avatar']), null, 0);?>
							<?php if ($_smarty_tpl->tpl_vars['avatar']->value) {?>
								<?php echo iaSmartyPlugins::printImage(array('imgfile'=>$_smarty_tpl->tpl_vars['avatar']->value['path'],'width'=>100,'height'=>100,'title'=>(($tmp = @$_smarty_tpl->tpl_vars['member']->value['fullname'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['member']->value['username'] : $tmp),'class'=>'img-circle'),$_smarty_tpl);?>

							<?php } else { ?>
								<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
no-avatar.png" class="img-circle" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
">
							<?php }?>
						<?php } else { ?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
no-avatar.png" class="img-circle" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
">
						<?php }?>

						<?php echo iaSmartyPlugins::lang(array('key'=>'welcome'),$_smarty_tpl);?>
, <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['member']->value['fullname'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['member']->value['username'] : $tmp), ENT_QUOTES, 'UTF-8', true);?>

						<?php $_smarty_tpl->smarty->_tag_stack[] = array('access', array('object'=>'admin_access')); $_block_repeat=true; echo iaSmartyPlugins::access(array('object'=>'admin_access'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<a rel="nofollow" href="<?php echo @constant('IA_ADMIN_URL');?>
" target="_blank" title="<?php echo iaSmartyPlugins::lang(array('key'=>'su_admin_dashboard'),$_smarty_tpl);?>
"><i class="icon-cog"></i></a>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmartyPlugins::access(array('object'=>'admin_access'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</div>
					<?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontInsideAccountBox'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_ia_menu(array('menus'=>$_smarty_tpl->tpl_vars['menu']->value['contents'],'class'=>'nav nav-pills nav-stacked','loginout'=>true),$_smarty_tpl);?>

			<?php } elseif ('account'!=$_smarty_tpl->tpl_vars['menu']->value['name']) {?>
				<?php echo smarty_function_ia_menu(array('menus'=>$_smarty_tpl->tpl_vars['menu']->value['contents'],'class'=>"nav nav-pills nav-stacked ".((string)$_smarty_tpl->tpl_vars['menu']->value['classname'])),$_smarty_tpl);?>

			<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmartyPlugins::ia_block(array('title'=>$_smarty_tpl->tpl_vars['menu']->value['title'],'movable'=>true,'id'=>$_smarty_tpl->tpl_vars['menu']->value['id'],'name'=>$_smarty_tpl->tpl_vars['menu']->value['name'],'collapsible'=>$_smarty_tpl->tpl_vars['menu']->value['collapsible'],'classname'=>$_smarty_tpl->tpl_vars['menu']->value['classname']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php } elseif (in_array($_smarty_tpl->tpl_vars['position']->value,array('bottom','copyright'))) {?>
	<?php echo smarty_function_ia_menu(array('menus'=>$_smarty_tpl->tpl_vars['menu']->value['contents'],'class'=>"nav nav-inline nav-footer ".((string)$_smarty_tpl->tpl_vars['menu']->value['classname'])),$_smarty_tpl);?>

<?php } else { ?>
	<!--__ms_<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
-->
	<?php if ($_smarty_tpl->tpl_vars['menu']->value['header']||isset($_smarty_tpl->tpl_vars['manageMode']->value)) {?>
		<div class="menu_header <?php echo $_smarty_tpl->tpl_vars['menu']->value['classname'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value['title'];?>
</div>
	<?php } else { ?>
		<div class="menu <?php echo $_smarty_tpl->tpl_vars['menu']->value['classname'];?>
">
	<?php }?>

	<!--__ms_c_<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
-->
	<?php echo smarty_function_ia_menu(array('menus'=>$_smarty_tpl->tpl_vars['menu']->value['contents'],'class'=>'span'),$_smarty_tpl);?>

	<!--__me_c_<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
-->

	<?php if ($_smarty_tpl->tpl_vars['menu']->value['header']||isset($_smarty_tpl->tpl_vars['manageMode']->value)) {?>
	<?php } else { ?>
		</div>
	<?php }?>
	<!--__me_<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
-->
<?php }?><?php }} ?>
