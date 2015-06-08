<?php /* Smarty version Smarty-3.1.19, created on 2015-06-01 06:30:23
         compiled from "C:\WebServ\httpd\subrion\templates\common\captcha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12061556c343f09d943-10765995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3dfd405075ca5727caf6f4400f5e6eb9b216a34' => 
    array (
      0 => 'C:\\WebServ\\httpd\\subrion\\templates\\common\\captcha.tpl',
      1 => 1430129388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12061556c343f09d943-10765995',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'member' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_556c343f0da8a4_60955222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c343f0da8a4_60955222')) {function content_556c343f0da8a4_60955222($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['config']->value['captcha']&&!$_smarty_tpl->tpl_vars['member']->value) {?>
<div class="fieldset-wrapper">
	<div class="fieldset">
		<h3 class="title"><?php echo iaSmartyPlugins::lang(array('key'=>'safety'),$_smarty_tpl);?>
</h3>
		<div class="content">
			<div class="captcha"><?php echo iaSmartyPlugins::captcha(array(),$_smarty_tpl);?>
</div>
		</div>
	</div>
</div>
<?php }?><?php }} ?>
