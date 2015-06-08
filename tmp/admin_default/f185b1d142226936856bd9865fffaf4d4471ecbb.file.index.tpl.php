<?php /* Smarty version Smarty-3.1.19, created on 2015-06-01 05:37:09
         compiled from "C:\WebServ\httpd\subrion\admin\templates\default\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3454556c27c5027634-81726823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f185b1d142226936856bd9865fffaf4d4471ecbb' => 
    array (
      0 => 'C:\\WebServ\\httpd\\subrion\\admin\\templates\\default\\index.tpl',
      1 => 1430129388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3454556c27c5027634-81726823',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'text_content' => 0,
    'customization_mode' => 0,
    'disabled_widgets' => 0,
    'statistics' => 0,
    'itemName' => 0,
    'info' => 0,
    'key' => 0,
    'value' => 0,
    'timeline' => 0,
    'img' => 0,
    'tweet' => 0,
    'config' => 0,
    'activity_log' => 0,
    'entry' => 0,
    'online_members' => 0,
    'member' => 0,
    'changelog' => 0,
    'changelog_titles' => 0,
    'item' => 0,
    'index' => 0,
    'items' => 0,
    'list' => 0,
    'class' => 0,
    'classtext' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_556c27c528ce40_06508629',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c27c528ce40_06508629')) {function content_556c27c528ce40_06508629($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ia_hooker')) include 'C:/WebServ/httpd/subrion/includes/smarty/intelli_plugins\\function.ia_hooker.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:/WebServ/httpd/subrion/includes/smarty/plugins\\modifier.date_format.php';
?><?php if (isset($_smarty_tpl->tpl_vars['text_content']->value)) {?>
	<div style="width:99%" xmlns="http://www.w3.org/1999/html"><?php echo $_smarty_tpl->tpl_vars['text_content']->value;?>
</div>
<?php } else { ?>

<?php if (!isset($_smarty_tpl->tpl_vars['customization_mode']->value)) {?>
	<div id="widget-preloader" class="text-muted">
		<div class="spinner"><i class="i-spinner"></i></div>
		<p><?php echo iaSmartyPlugins::lang(array('key'=>'loading_widgets'),$_smarty_tpl);?>
</p>
	</div>
<?php } else { ?>
	<input type="hidden" id="js-disabled-widgets-list" value="<?php echo implode($_smarty_tpl->tpl_vars['disabled_widgets']->value,',');?>
">
<?php }?>

<?php echo smarty_function_ia_hooker(array('name'=>'smartyDashboardBeforeContent'),$_smarty_tpl);?>


<div class="row animated-widgets">
	<div class="col col-lg-6">
		<div class="widget-block">
			<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['itemName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value['medium']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['itemName']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
			<div class="widget widget-medium" id="widget-<?php echo $_smarty_tpl->tpl_vars['itemName']->value;?>
">
				<div class="widget-content">
					<div class="widget-total-stats">
						<span><a href="<?php echo $_smarty_tpl->tpl_vars['info']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value['total'];?>
</a></span> <?php echo $_smarty_tpl->tpl_vars['info']->value['item'];?>

					</div>
					<div class="widget-icon"><i class="i-<?php echo $_smarty_tpl->tpl_vars['info']->value['icon'];?>
"></i></div>
					<hr>
					<div class="widget-stats">
						<table>
							<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
							<tr>
								<td><a href="<?php echo $_smarty_tpl->tpl_vars['info']->value['url'];?>
?status=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo iaSmartyPlugins::lang(array('key'=>$_smarty_tpl->tpl_vars['key']->value),$_smarty_tpl);?>
</a>:</td>
								<td><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td>
							</tr>
							<?php } ?>
						</table>
					</div>
					<?php if (isset($_smarty_tpl->tpl_vars['info']->value['data'])) {?>
					<div class="widget-chart">
						<div class="js-stats"<?php if (isset($_smarty_tpl->tpl_vars['info']->value['data'])) {?><?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?> data-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"<?php } ?><?php }?>></div>
						<div class="widget-chart-weekdays">
							<span>Su</span>
							<span>Mo</span>
							<span>Tu</span>
							<span>We</span>
							<span>Th</span>
							<span>Fr</span>
							<span>Sa</span>
						</div>
					</div>
					<?php }?>
				</div>
			</div>
			<?php } ?>
		</div>

		<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['itemName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value['package']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['itemName']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
		<div class="widget-block">
			<div class="widget widget-package" id="widget-<?php echo $_smarty_tpl->tpl_vars['itemName']->value;?>
">
				<div class="widget-content">
					<div class="widget-total-stats">
						<span><a href="<?php echo $_smarty_tpl->tpl_vars['info']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value['total'];?>
</a></span> <?php echo $_smarty_tpl->tpl_vars['info']->value['item'];?>

					</div>
					<div class="widget-icon"><i class="i-<?php echo $_smarty_tpl->tpl_vars['info']->value['icon'];?>
"></i></div>
					<hr>
					<div class="widget-stats">
						<table>
							<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
							<tr>
								<td><a href="<?php echo $_smarty_tpl->tpl_vars['info']->value['url'];?>
?status=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo iaSmartyPlugins::lang(array('key'=>$_smarty_tpl->tpl_vars['key']->value),$_smarty_tpl);?>
</a>:</td>
								<td><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td>
							</tr>
							<?php } ?>
						</table>
					</div>
					<?php if (isset($_smarty_tpl->tpl_vars['info']->value['data'])) {?>
					<div class="widget-chart">
						<div class="js-stats"<?php if (isset($_smarty_tpl->tpl_vars['info']->value['data'])) {?><?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?> data-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"<?php } ?><?php }?>></div>
						<div class="widget-chart-weekdays">
							<span>Su</span>
							<span>Mo</span>
							<span>Tu</span>
							<span>We</span>
							<span>Th</span>
							<span>Fr</span>
							<span>Sa</span>
						</div>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
		<?php } ?>

		<div class="row">
			<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['itemName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value['small']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['itemName']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
			<div class="col col-lg-4">
				<div class="widget widget-small" id="widget-<?php echo $_smarty_tpl->tpl_vars['itemName']->value;?>
">
					<div class="widget-content">
						<div class="widget-total-stats">
							<span class="main-stat"><a href="<?php echo $_smarty_tpl->tpl_vars['info']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value['total'];?>
</a> <?php echo $_smarty_tpl->tpl_vars['info']->value['item'];?>
</span>
							<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
							<span><a href="<?php echo $_smarty_tpl->tpl_vars['info']->value['url'];?>
?status=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</a> <?php echo iaSmartyPlugins::lang(array('key'=>$_smarty_tpl->tpl_vars['key']->value),$_smarty_tpl);?>
</span>
							<?php } ?>
						</div>
						<div class="widget-icon"><i class="i-<?php echo $_smarty_tpl->tpl_vars['info']->value['icon'];?>
"></i></div>
						<div class="widget-name"><?php echo $_smarty_tpl->tpl_vars['info']->value['caption'];?>
</div>
					</div>
				</div>
			</div>
			<?php } ?>

			<?php echo smarty_function_ia_hooker(array('name'=>'smartyDashboardAfterStatistics'),$_smarty_tpl);?>


			<div class="col col-lg-4">
				<div class="widget widget-small widget-small-config">
					<div class="widget-content">
						<div class="widget-icon"><i class="i-lab"></i></div>
						<div class="widget-name"><?php echo iaSmartyPlugins::lang(array('key'=>'add_plugin'),$_smarty_tpl);?>
</div>
					</div>
				</div>
			</div>
		</div>

		<?php if (isset($_smarty_tpl->tpl_vars['timeline']->value)) {?>
		<div class="widget widget-large" id="widget-twitter">
			<div class="widget-header"><i class="i-twitter"></i> <?php echo iaSmartyPlugins::lang(array('key'=>'twitter_news'),$_smarty_tpl);?>

				<ul class="nav nav-pills pull-right">
					<li><a href="#" class="widget-toggle"><i class="i-chevron-up"></i></a></li>
				</ul>
			</div>
			<div class="widget-content">
				<div class="widget-activity">
					<?php  $_smarty_tpl->tpl_vars['tweet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tweet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['timeline']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tweet']->key => $_smarty_tpl->tpl_vars['tweet']->value) {
$_smarty_tpl->tpl_vars['tweet']->_loop = true;
?>
					<div class="widget-activity-item">
						<div class="icon">
							<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
logo-intelliants-80-inverse.png" alt="Intelliants">
						</div>
						<div class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['tweet']->value['created_at'],$_smarty_tpl->tpl_vars['config']->value['date_format']);?>
</div>
						<p><?php echo $_smarty_tpl->tpl_vars['tweet']->value['text'];?>
</p>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<?php }?>

		<?php echo smarty_function_ia_hooker(array('name'=>'smartyDashboardContentLeft'),$_smarty_tpl);?>

	</div>

	<div class="col col-lg-6">

		<?php if (isset($_smarty_tpl->tpl_vars['activity_log']->value)) {?>
		<div class="widget widget-large" id="widget-recent-activity">
			<div class="widget-header"><i class="i-clock-2"></i> <?php echo iaSmartyPlugins::lang(array('key'=>'recent_activity'),$_smarty_tpl);?>

				<ul class="nav nav-pills pull-right">
					<li><a href="#" class="widget-toggle"><i class="i-chevron-up"></i></a></li>
				</ul>
			</div>
			<div class="widget-content">
				<div class="widget-activity">
					<?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activity_log']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
					<div class="widget-activity-item status-<?php echo $_smarty_tpl->tpl_vars['entry']->value['style'];?>
">
						<div class="icon"><i class="i-<?php echo $_smarty_tpl->tpl_vars['entry']->value['icon'];?>
"></i></div>
						<div class="date"><?php echo $_smarty_tpl->tpl_vars['entry']->value['date'];?>
</div>
						<p><?php echo $_smarty_tpl->tpl_vars['entry']->value['description'];?>
</p>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['online_members']->value)) {?>
		<div class="widget widget-large" id="widget-website-visits">
			<div class="widget-header"><i class="i-users"></i> <?php echo iaSmartyPlugins::lang(array('key'=>'online_members'),$_smarty_tpl);?>

				<ul class="nav nav-pills pull-right">
					<li><a href="#" class="widget-toggle"><i class="i-chevron-up"></i></a></li>
				</ul>
			</div>
			<div class="widget-content">
				<table class="table table-light">
					<thead>
						<tr>
							<th>#</th>
							<th><?php echo iaSmartyPlugins::lang(array('key'=>'member'),$_smarty_tpl);?>
</th>
							<th><?php echo iaSmartyPlugins::lang(array('key'=>'ip_address'),$_smarty_tpl);?>
</th>
							<th><?php echo iaSmartyPlugins::lang(array('key'=>'current_page'),$_smarty_tpl);?>
</th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['member'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['member']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['online_members']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['member']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['member']->key => $_smarty_tpl->tpl_vars['member']->value) {
$_smarty_tpl->tpl_vars['member']->_loop = true;
 $_smarty_tpl->tpl_vars['member']->index++;
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['member']->index+1;?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['member']->value['url'];?>
</td>
							<td><?php echo long2ip($_smarty_tpl->tpl_vars['member']->value['ip']);?>
</td>
							<td class="page-url"><a href="<?php echo $_smarty_tpl->tpl_vars['member']->value['page'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['member']->value['page'];?>
</a></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['changelog']->value)) {?>
			<div class="widget widget-large" id="widget-changelog">
				<div class="widget-header"><i class="i-lightning"></i> <?php echo iaSmartyPlugins::lang(array('key'=>'changelog'),$_smarty_tpl);?>

					<ul class="nav nav-pills pull-right">
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">
								<?php  $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['index']->_loop = false;
 $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['changelog_titles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['index']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['index']->key => $_smarty_tpl->tpl_vars['index']->value) {
$_smarty_tpl->tpl_vars['index']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->value = $_smarty_tpl->tpl_vars['index']->key;
 $_smarty_tpl->tpl_vars['index']->iteration++;
?>
									<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
 <span class="caret"></span>
									<?php if ($_smarty_tpl->tpl_vars['index']->iteration==1) {?>
										<?php break 1?>
									<?php }?>
								<?php } ?>
							</a>
							<ul class="dropdown-menu pull-right">
								<?php  $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['index']->_loop = false;
 $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['changelog_titles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['index']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['index']->key => $_smarty_tpl->tpl_vars['index']->value) {
$_smarty_tpl->tpl_vars['index']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->value = $_smarty_tpl->tpl_vars['index']->key;
 $_smarty_tpl->tpl_vars['index']->iteration++;
?>
									<li<?php if ($_smarty_tpl->tpl_vars['index']->iteration==1) {?> class="active"<?php }?>><a href="#" data-item="#changelog-item-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a></li>

									<?php if ($_smarty_tpl->tpl_vars['index']->iteration==10) {?>
										<li class="divider"></li>
										<li><a href="http://dev.subrion.org/projects/subrion-cms/roadmap" target="_blank" title="<?php echo iaSmartyPlugins::lang(array('key'=>'view_roadmap'),$_smarty_tpl);?>
"><i class="i-flow-branch"></i> <?php echo iaSmartyPlugins::lang(array('key'=>'view_roadmap'),$_smarty_tpl);?>
</a></li>

										<?php break 1?>
									<?php }?>
								<?php } ?>
							</ul>
						</li>
						<li><a href="http://dev.subrion.org/projects/subrion-cms/roadmap" target="_blank" title="<?php echo iaSmartyPlugins::lang(array('key'=>'view_roadmap'),$_smarty_tpl);?>
"><i class="i-flow-branch"></i></a></li>
						<li><a href="#" class="widget-toggle"><i class="i-chevron-up"></i></a></li>
					</ul>
				</div>
				<div class="widget-content">
					<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['changelog']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value) {
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['items']->key;
?>
						<div class="changelog-item" id="changelog-item-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" style="display:none;">
							<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['class'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['class']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
								<?php if (!empty($_smarty_tpl->tpl_vars['list']->value)&&$_smarty_tpl->tpl_vars['class']->value!='title') {?>
									<?php $_smarty_tpl->tpl_vars['classtext'] = new Smarty_variable("changelog_".((string)$_smarty_tpl->tpl_vars['class']->value), null, 0);?>
									<?php if ('added'==$_smarty_tpl->tpl_vars['class']->value) {?>
										<h5 class="text-success"><i class="i-fire"></i> <?php echo iaSmartyPlugins::lang(array('key'=>$_smarty_tpl->tpl_vars['classtext']->value),$_smarty_tpl);?>
</h5>
									<?php } elseif ('modified'==$_smarty_tpl->tpl_vars['class']->value) {?>
										<h5 class="text-warning"><i class="i-lightning"></i> <?php echo iaSmartyPlugins::lang(array('key'=>$_smarty_tpl->tpl_vars['classtext']->value),$_smarty_tpl);?>
</h5>
									<?php } else { ?>
										<h5 class="text-danger"><i class="i-bug"></i> <?php echo iaSmartyPlugins::lang(array('key'=>$_smarty_tpl->tpl_vars['classtext']->value),$_smarty_tpl);?>
</h5>
									<?php }?>
									<ol><?php echo $_smarty_tpl->tpl_vars['list']->value;?>
</ol>
								<?php }?>
							<?php } ?>
						</div>
					<?php } ?>
				</div>
			</div>
		<?php }?>

		<?php echo smarty_function_ia_hooker(array('name'=>'smartyDashboardContentRight'),$_smarty_tpl);?>

	</div>
</div>

<?php echo smarty_function_ia_hooker(array('name'=>'smartyDashboardAfterContent'),$_smarty_tpl);?>


<?php echo iaSmartyPlugins::ia_add_media(array('files'=>'css: _IA_URL_js/jquery/plugins/scrollbars/jquery.mCustomScrollbar'),$_smarty_tpl);?>

<?php echo iaSmartyPlugins::ia_print_js(array('files'=>'admin/index, jquery/plugins/jquery.sparkline.min, jquery/plugins/scrollbars/jquery.mCustomScrollbar.concat.min'),$_smarty_tpl);?>

<?php }?><?php }} ?>
