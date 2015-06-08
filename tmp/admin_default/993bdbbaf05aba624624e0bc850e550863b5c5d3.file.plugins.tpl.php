<?php /* Smarty version Smarty-3.1.19, created on 2015-06-01 06:53:49
         compiled from "C:\WebServ\httpd\subrion\admin\templates\default\plugins.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26262556c39bda8bb43-92319653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '993bdbbaf05aba624624e0bc850e550863b5c5d3' => 
    array (
      0 => 'C:\\WebServ\\httpd\\subrion\\admin\\templates\\default\\plugins.tpl',
      1 => 1430129388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26262556c39bda8bb43-92319653',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_556c39bdb943c1_43671279',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c39bdb943c1_43671279')) {function content_556c39bdb943c1_43671279($_smarty_tpl) {?><div class="tabbable">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#tab-installed" data-toggle="tab"><?php echo iaSmartyPlugins::lang(array('key'=>'installed_plugins'),$_smarty_tpl);?>
</a></li>
		<li><a href="#tab-available" data-toggle="tab"><?php echo iaSmartyPlugins::lang(array('key'=>'available_plugins'),$_smarty_tpl);?>
</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="tab-installed">
			<div id="js-grid-installed"></div>
		</div>
		<div class="tab-pane" id="tab-available">
			<div id="js-grid-available"></div>
		</div>
	</div>
</div><?php }} ?>
