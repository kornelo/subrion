<?php /* Smarty version Smarty-3.1.19, created on 2015-06-01 05:38:03
         compiled from "C:\WebServ\httpd\subrion\templates\common\block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13562556c27fb250928-93700359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9091d9ff3155857f789a5cd0f5efdff3c5b0752d' => 
    array (
      0 => 'C:\\WebServ\\httpd\\subrion\\templates\\common\\block.tpl',
      1 => 1430129388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13562556c27fb250928-93700359',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'header' => 0,
    'name' => 0,
    'classname' => 0,
    'collapsible' => 0,
    'collapsed' => 0,
    'manageMode' => 0,
    'hidden' => 0,
    'title' => 0,
    'icons' => 0,
    'icon' => 0,
    'display' => 0,
    '_block_content_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_556c27fb2cca62_58819859',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c27fb2cca62_58819859')) {function content_556c27fb2cca62_58819859($_smarty_tpl) {?><!--__b_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-->
<?php if ($_smarty_tpl->tpl_vars['header']->value) {?>
	<div id="block_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="box <?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
<?php if (isset($_smarty_tpl->tpl_vars['collapsible']->value)&&$_smarty_tpl->tpl_vars['collapsible']->value) {?> collapsible<?php if (isset($_smarty_tpl->tpl_vars['collapsed']->value)&&$_smarty_tpl->tpl_vars['collapsed']->value) {?> collapsed<?php }?><?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['manageMode']->value)) {?> vm-hidden="<?php echo $_smarty_tpl->tpl_vars['hidden']->value;?>
"<?php }?>>
		<h4 id="caption_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="box-caption"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>

			<?php if (isset($_smarty_tpl->tpl_vars['icons']->value)&&$_smarty_tpl->tpl_vars['icons']->value) {?>
				<span class="box-caption__buttons">
					<?php  $_smarty_tpl->tpl_vars['icon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['icon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['icons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['icon']->key => $_smarty_tpl->tpl_vars['icon']->value) {
$_smarty_tpl->tpl_vars['icon']->_loop = true;
?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['icon']->value['url'];?>
" <?php echo $_smarty_tpl->tpl_vars['icon']->value['attributes'];?>
 id="<?php echo $_smarty_tpl->tpl_vars['icon']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['icon']->value['text'];?>
</a>
					<?php } ?>
				</span>
			<?php }?>
		</h4>
		<div id="content_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="box-content"<?php if (isset($_smarty_tpl->tpl_vars['display']->value)&&!$_smarty_tpl->tpl_vars['display']->value) {?> style="display: none;"<?php }?>>
<?php } else { ?>
	<div id="block_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="box no-header <?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['manageMode']->value)) {?> vm-hidden="<?php echo $_smarty_tpl->tpl_vars['hidden']->value;?>
"<?php }?>>
<?php }?>

<!--__b_c_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-->
<?php echo $_smarty_tpl->tpl_vars['_block_content_']->value;?>

<!--__e_c_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-->

<?php if ($_smarty_tpl->tpl_vars['header']->value) {?>
		</div>
	</div>
<?php } else { ?>
	</div>
<?php }?>
<!--__e_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
--><?php }} ?>
