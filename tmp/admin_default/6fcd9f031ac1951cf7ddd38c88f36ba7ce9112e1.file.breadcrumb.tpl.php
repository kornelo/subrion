<?php /* Smarty version Smarty-3.1.19, created on 2015-06-01 05:37:09
         compiled from "C:\WebServ\httpd\subrion\admin\templates\default\breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3608556c27c5ec3559-00066481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fcd9f031ac1951cf7ddd38c88f36ba7ce9112e1' => 
    array (
      0 => 'C:\\WebServ\\httpd\\subrion\\admin\\templates\\default\\breadcrumb.tpl',
      1 => 1430129388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3608556c27c5ec3559-00066481',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_556c27c5eed018_20314154',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c27c5eed018_20314154')) {function content_556c27c5eed018_20314154($_smarty_tpl) {?><ul class="breadcrumb">
	<?php if ('index'==$_smarty_tpl->tpl_vars['core']->value['page']['name']) {?>
		<li class="active"><?php echo iaSmartyPlugins::lang(array('key'=>'welcome_to_admin_board'),$_smarty_tpl);?>
</li>
	<?php } else { ?>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['core']->value['page']['breadcrumb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
 $_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
?>
			<?php if ($_smarty_tpl->tpl_vars['item']->value['url']&&!$_smarty_tpl->tpl_vars['item']->last) {?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['caption'];?>
</a></li>
			<?php } else { ?>
				<li class="active"><?php echo $_smarty_tpl->tpl_vars['item']->value['caption'];?>
</li>
			<?php }?>
		<?php } ?>
	<?php }?>
</ul><?php }} ?>
