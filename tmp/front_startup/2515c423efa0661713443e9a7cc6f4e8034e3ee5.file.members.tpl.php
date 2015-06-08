<?php /* Smarty version Smarty-3.1.19, created on 2015-06-01 05:42:31
         compiled from "C:\WebServ\httpd\subrion\templates\common\members.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5454556c2907a73502-84044700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2515c423efa0661713443e9a7cc6f4e8034e3ee5' => 
    array (
      0 => 'C:\\WebServ\\httpd\\subrion\\templates\\common\\members.tpl',
      1 => 1430129388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5454556c2907a73502-84044700',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'members' => 0,
    'fields' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_556c2907ade1f4_48424257',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c2907ade1f4_48424257')) {function content_556c2907ade1f4_48424257($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['members']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate ('accounts-items.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('all_items'=>$_smarty_tpl->tpl_vars['members']->value,'all_item_fields'=>$_smarty_tpl->tpl_vars['fields']->value,'all_item_type'=>'members'), 0);?>

	<?php echo iaSmartyPlugins::pagination(array('aTotal'=>$_smarty_tpl->tpl_vars['pagination']->value['total'],'aTemplate'=>$_smarty_tpl->tpl_vars['pagination']->value['url'],'aItemsPerPage'=>$_smarty_tpl->tpl_vars['pagination']->value['limit'],'aNumPageItems'=>5,'aTruncateParam'=>1),$_smarty_tpl);?>

<?php } else { ?>
	<div class="alert alert-info"><?php echo iaSmartyPlugins::lang(array('key'=>'no_members'),$_smarty_tpl);?>
</div>
<?php }?><?php }} ?>
