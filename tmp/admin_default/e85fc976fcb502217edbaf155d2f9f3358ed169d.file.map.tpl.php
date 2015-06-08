<?php /* Smarty version Smarty-3.1.19, created on 2015-06-01 05:37:09
         compiled from "C:\WebServ\httpd\subrion\plugins\member_map\templates\admin\map.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21215556c27c55bc351-66641988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e85fc976fcb502217edbaf155d2f9f3358ed169d' => 
    array (
      0 => 'C:\\WebServ\\httpd\\subrion\\plugins\\member_map\\templates\\admin\\map.tpl',
      1 => 1415866868,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21215556c27c55bc351-66641988',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'onlineMembers' => 0,
    'onlineMember' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_556c27c55ed495_01829945',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c27c55ed495_01829945')) {function content_556c27c55ed495_01829945($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['onlineMembers']->value)&&$_smarty_tpl->tpl_vars['onlineMembers']->value) {?>
	<div class="widget widget-large" id="widget-website-visits">
		<div class="widget-header"><i class="i-users"></i> <?php echo iaSmartyPlugins::lang(array('key'=>'online_members_map'),$_smarty_tpl);?>

			<ul class="nav nav-pills pull-right">
				<li><a href="#" class="widget-toggle"><i class="i-chevron-up"></i></a></li>
			</ul>
		</div>
		<div class="widget-content">
			<div id="map-canvas" style="width: 100%; height:260px"></div>
		</div>
	</div>
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDbz0xfgjrFJjceGiGXtE4_JKX9buZGyOU&sensor=false"></script>
	<?php echo iaSmartyPlugins::ia_add_media(array('files'=>'js:_IA_URL_plugins/member_map/js/admin/index'),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_add_js', array()); $_block_repeat=true; echo iaSmartyPlugins::ia_add_js(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	var membersList = [];
	<?php  $_smarty_tpl->tpl_vars['onlineMember'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['onlineMember']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['onlineMembers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['onlineMember']->key => $_smarty_tpl->tpl_vars['onlineMember']->value) {
$_smarty_tpl->tpl_vars['onlineMember']->_loop = true;
?>
		membersList.push(['<?php echo $_smarty_tpl->tpl_vars['onlineMember']->value['latitude'];?>
', '<?php echo $_smarty_tpl->tpl_vars['onlineMember']->value['longitude'];?>
', '<?php echo $_smarty_tpl->tpl_vars['onlineMember']->value['username'];?>
', '<?php echo $_smarty_tpl->tpl_vars['onlineMember']->value['ipAddress'];?>
', '<?php echo $_smarty_tpl->tpl_vars['onlineMember']->value['countryName'];?>
', '<?php echo $_smarty_tpl->tpl_vars['onlineMember']->value['cityName'];?>
']);
	<?php } ?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmartyPlugins::ia_add_js(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php }?><?php }} ?>
