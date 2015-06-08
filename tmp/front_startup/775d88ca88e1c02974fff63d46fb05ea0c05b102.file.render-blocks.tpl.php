<?php /* Smarty version Smarty-3.1.19, created on 2015-06-01 05:38:02
         compiled from "C:\WebServ\httpd\subrion\templates\common\render-blocks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16745556c27faafa8f6-16259548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '775d88ca88e1c02974fff63d46fb05ea0c05b102' => 
    array (
      0 => 'C:\\WebServ\\httpd\\subrion\\templates\\common\\render-blocks.tpl',
      1 => 1430129388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16745556c27faafa8f6-16259548',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'iaPositions' => 0,
    'position' => 0,
    'blocks' => 0,
    'block' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_556c27fab58902_69080422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c27fab58902_69080422')) {function content_556c27fab58902_69080422($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['iaPositions']->value)&&!$_smarty_tpl->tpl_vars['iaPositions']->value[$_smarty_tpl->tpl_vars['position']->value]['menu']) {?><div id="<?php echo $_smarty_tpl->tpl_vars['position']->value;?>
Blocks" class="groupWrapper<?php if ($_smarty_tpl->tpl_vars['iaPositions']->value[$_smarty_tpl->tpl_vars['position']->value]['movable']) {?> groupWrapper--movable<?php }?><?php if ($_smarty_tpl->tpl_vars['iaPositions']->value[$_smarty_tpl->tpl_vars['position']->value]['hidden']) {?> groupWrapper--hidden<?php }?>"><?php }?>

<?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->_loop = true;
?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_block', array('title'=>$_smarty_tpl->tpl_vars['block']->value['title'],'name'=>$_smarty_tpl->tpl_vars['block']->value['name'],'header'=>$_smarty_tpl->tpl_vars['block']->value['header'],'collapsible'=>$_smarty_tpl->tpl_vars['block']->value['collapsible'],'collapsed'=>$_smarty_tpl->tpl_vars['block']->value['collapsed'],'tpl'=>$_smarty_tpl->tpl_vars['block']->value['tpl'],'classname'=>$_smarty_tpl->tpl_vars['block']->value['classname'],'hidden'=>$_smarty_tpl->tpl_vars['block']->value['hidden'])); $_block_repeat=true; echo iaSmartyPlugins::ia_block(array('title'=>$_smarty_tpl->tpl_vars['block']->value['title'],'name'=>$_smarty_tpl->tpl_vars['block']->value['name'],'header'=>$_smarty_tpl->tpl_vars['block']->value['header'],'collapsible'=>$_smarty_tpl->tpl_vars['block']->value['collapsible'],'collapsed'=>$_smarty_tpl->tpl_vars['block']->value['collapsed'],'tpl'=>$_smarty_tpl->tpl_vars['block']->value['tpl'],'classname'=>$_smarty_tpl->tpl_vars['block']->value['classname'],'hidden'=>$_smarty_tpl->tpl_vars['block']->value['hidden']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php echo iaSmartyPlugins::ia_block_view(array('block'=>$_smarty_tpl->tpl_vars['block']->value),$_smarty_tpl);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmartyPlugins::ia_block(array('title'=>$_smarty_tpl->tpl_vars['block']->value['title'],'name'=>$_smarty_tpl->tpl_vars['block']->value['name'],'header'=>$_smarty_tpl->tpl_vars['block']->value['header'],'collapsible'=>$_smarty_tpl->tpl_vars['block']->value['collapsible'],'collapsed'=>$_smarty_tpl->tpl_vars['block']->value['collapsed'],'tpl'=>$_smarty_tpl->tpl_vars['block']->value['tpl'],'classname'=>$_smarty_tpl->tpl_vars['block']->value['classname'],'hidden'=>$_smarty_tpl->tpl_vars['block']->value['hidden']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } ?>

<?php if (isset($_smarty_tpl->tpl_vars['iaPositions']->value)&&!$_smarty_tpl->tpl_vars['iaPositions']->value[$_smarty_tpl->tpl_vars['position']->value]['menu']) {?></div><?php }?><?php }} ?>
