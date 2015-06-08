<?php /* Smarty version Smarty-3.1.19, created on 2015-06-01 05:38:02
         compiled from "C:\WebServ\httpd\subrion\templates\common\page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2455556c27fa2f2f64-22755336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18ac3bef38649e187280106306e25440a8e08667' => 
    array (
      0 => 'C:\\WebServ\\httpd\\subrion\\templates\\common\\page.tpl',
      1 => 1430129388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2455556c27fa2f2f64-22755336',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'protect' => 0,
    'page_protect' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_556c27fa36cd93_26975036',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c27fa36cd93_26975036')) {function content_556c27fa36cd93_26975036($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['protect']->value) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['page_protect']->value)) {?>
		<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['page_protect']->value;?>
</div>
	<?php }?>

	<div class="page-content"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
<?php } else { ?>
	<div class="alert alert-warning"><?php echo iaSmartyPlugins::lang(array('key'=>'password_protected_page'),$_smarty_tpl);?>
</div>

	<form action="<?php echo @constant('IA_SELF');?>
" method="post" class="form-inline">
		<?php echo iaSmartyPlugins::preventCsrf(array(),$_smarty_tpl);?>

		<label><?php echo iaSmartyPlugins::lang(array('key'=>'password'),$_smarty_tpl);?>
:
			<input type="password" tabindex="5" name="password" value="" />
			<button type="submit" tabindex="6" name="login" value="" class="btn btn-primary"><?php echo iaSmartyPlugins::lang(array('key'=>'view'),$_smarty_tpl);?>
</button>
		</label>
	</form>
<?php }?><?php }} ?>
