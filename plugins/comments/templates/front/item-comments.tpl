{if isset($comments) && isset($item)}
	{ia_block title={lang key='comments'} style='movable' name='comments_form' id='comments-form' classname='box-clear' collapsible=true}
		<div class="alert hidden" id="comments-alert"></div>
		{if !$config.comments_allow_guests && empty($member)}
			<div class="alert">{lang key="error_comment_logged"}</div>
		{else}
			{if empty($comments)}
				<div class="alert alert-info">{lang key='no_comments'}</div>
			{else}
				<p><a href="{$smarty.const.IA_SELF}#" class="btn btn-small btn-info" id="add-comment-btn"><i class="icon-pencil"></i> {lang key='add_comment'}</a></p>
			{/if}
			<form action="" method="post" id="comment-form" class="form-subrion"{if !empty($comments)} style="display: none;{/if}">
				{preventCsrf}
				{if $member}
					<input type="hidden" name="author" value="{$member.username}">
					<input type="hidden" name="email" value="{$member.email}">
				{else}
					<div class="control-group">
						<label class="control-label" for="author-name">{lang key="comment_author"}:</label><input type="text" id="author-name" class="text" name="author" size="25" value="">
					</div>
					<div class="control-group">
						<label class="control-label" for="author-email">{lang key="author_email"}:</label><input type="text" class="author-email" name="email" size="25" value="">
					</div>
					<div class="control-group">
						<label class="control-label" for="author-url">{lang key="author_url"}:</label><input type="text" id="author-url" class="text" name="url" size="25" value="">
					</div>
				{/if}
				<div class="control-group">
					{if !$member}
						<label class="control-label" for="author-email">{lang key="comment"}:</label>
					{/if}
					{if !$config.comments_allow_wysiwyg}
						<textarea name="comment_body" class="input-block-level" id="comment-body" rows="6"></textarea>
					{else}
						{ia_wysiwyg name='comment_body' id='comment_form'}
						{ia_print_js files='ckeditor/ckeditor'}
					{/if}
				</div>
				<div id="comments-captcha">
					{include file='captcha.tpl'}
				</div>
				<div class="alert" id="comments-alert" style="display: none;">
					<ul class="unstyled"></ul>
				</div>
				<input type="hidden" name="item_id" value="{$item.id}">
				<input type="hidden" name="item" value="{$item.item}">
				<input type="button" id="leave_comment" name="add_comment" value="{lang key='leave_comment'}" class="btn btn-primary">
			</form>
			{ia_print_js files='jquery/plugins/jquery.textcounter'}
		{/if}

		{if !empty($comments)}
			<div id="comments-container">
				<div class="ia-items comments-list">
					{foreach $comments as $comment name='comments_list'}
						{include file="plugins/comments/templates/front/comment.tpl"}
					{/foreach}
				</div>
			</div>
		{/if}

		{ia_print_js files='_IA_URL_plugins/comments/js/frontend/comments'}
	{/ia_block}
{/if}