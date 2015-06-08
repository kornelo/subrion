<form action="" method="post" enctype="multipart/form-data" class="sap-form form-horizontal">
	{preventCsrf}

	<div class="wrap-list">
		<div class="wrap-group">
			<div class="wrap-group-heading">
				<h4>{lang key='options'}</h4>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label" for="input-name">{lang key='title'}</label>
				<div class="col col-lg-4">
					<input type="text" id="input-name" name="title" size="32" value="{$questions.title}">
				</div>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label" for="body">{lang key='question'}</label>
				<div class="col col-lg-8">
					{ia_wysiwyg name="body" value=$questions.body}
				</div>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label" for="input-date">{lang key='date'}</label>
				<div class="col col-lg-4">
					<div class="input-group">
						<input type="text" class="js-datepicker" name="date" id="input-date" value="{$questions.date}">
						<span class="input-group-addon js-datepicker-toggle"><i class="i-calendar"></i></span>
					</div>
				</div>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label" for="input-status">{lang key='status'}</label>
				<div class="col col-lg-4">
					<select name="status" id="input-status">
						<option value="active"{if $questions.status == 'active'} selected="selected"{/if}>{lang key='active'}</option>
						<option value="inactive"{if $questions.status == 'inactive'} selected="selected"{/if}>{lang key='inactive'}</option>
					</select>
				</div>
			</div>
		</div>
		<div class="form-actions inline">
			<input type="submit" name="save" class="btn btn-primary" value="{if iaCore::ACTION_EDIT == $pageAction}{lang key='save_changes'}{else}{lang key='add'}{/if}">
			{include file='goto.tpl'}
		</div>
	</div>
</form>

{ia_add_media files='datepicker'}