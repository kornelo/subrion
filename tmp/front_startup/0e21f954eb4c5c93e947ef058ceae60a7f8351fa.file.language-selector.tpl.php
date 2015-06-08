<?php /* Smarty version Smarty-3.1.19, created on 2015-06-01 05:38:03
         compiled from "C:\WebServ\httpd\subrion\templates\startup\language-selector.tpl" */ ?>
<?php /*%%SmartyHeaderCode:796556c27fb1d1384-91830065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e21f954eb4c5c93e947ef058ceae60a7f8351fa' => 
    array (
      0 => 'C:\\WebServ\\httpd\\subrion\\templates\\startup\\language-selector.tpl',
      1 => 1430129388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '796556c27fb1d1384-91830065',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'core' => 0,
    'code' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_556c27fb1fb722_77863261',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c27fb1fb722_77863261')) {function content_556c27fb1fb722_77863261($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['config']->value['language_switch']&&count($_smarty_tpl->tpl_vars['core']->value['languages'])>1) {?>
	<ul class="nav-inventory nav-inventory--langs">
		<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
			<li<?php if (@constant('IA_LANGUAGE')==$_smarty_tpl->tpl_vars['code']->value) {?> class="active"<?php }?>><a href="<?php echo iaSmartyPlugins::ia_page_url(array('code'=>$_smarty_tpl->tpl_vars['code']->value),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
</a></li>
		<?php } ?>
	</ul>
<?php }?><?php }} ?>
