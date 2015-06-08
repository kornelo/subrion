{if $guestbook}
	<div class="ia-items">
		{foreach $guestbook as $message}
			<div class="media ia-item ia-item-bordered">
				<div class="media-body">
					<div class="description">
						{if !$config.html_guestbook && $config.gb_auto_approval}
							{$message.body|escape:'html'}
						{else}
							{$message.body}
						{/if}
					</div>
				</div>
				<div class="ia-item-panel">
					<span class="pull-right">
						<i class="icon-user"></i>
						{if !$message.member_id}
							<a href="{$message.author_url|escape:'html'}" rel="nofollow">{$message.author|escape:'html'}</a>
						{else}
							{ia_url type='link' item='members' data=$message text=$message.author}
						{/if}

						&nbsp; <i class="icon-calendar"></i> {$message.date|date_format:$config.date_format}

						{if iaCore::STATUS_INACTIVE == $message.status && ($message.sess_id == $sess_id)}<span>{lang key='message_approval'}</span>{/if}
					<span>
				</div>
			</div>
		{/foreach}
	</div>
{else}
	<div class="alert alert-info">{lang key='no_guestbook_messages'}</div>
{/if}

{navigation aTotal=$total_messages aTemplate=$aTemplate aItemsPerPage=$config.gb_messages_per_page aNumPageItems=5 aTruncateParam="guestbook/%page%"}

{if !$config.gb_account_submissions_only || $member}
	<form action="" method="post" id="guestbook" class="ia-form ia-form-bordered">
		{preventCsrf}
		<div class="fieldset">
			<h4 class="title">{lang key='add_message'}</h4>

			<div class="fieldset-wrapper content">
				{if $member}
					<input type="hidden" name="author" value="{$member.username}">
					<input type="hidden" name="email" value="{$member.email}">
					<input type="hidden" name="aurl" value="">
				{else}
					<div class="control-group">
						<label class="control-label" for="message-author">{lang key='message_author'}:</label>
						<input type="text" id="message-author" name="author" value="{if isset($smarty.post.author)}{$smarty.post.author|escape:'html'}{/if}">
					</div>
					<div class="control-group">
						<label class="control-label" for="author-email">{lang key='author_email'}:</label>
						<input type="text" id="author-email" class="text" name="email" value="{if isset($smarty.post.email)}{$smarty.post.email|escape:'html'}{/if}">
					</div>
					<div class="control-group">
						<label class="control-label" for="author-url">{lang key='author_url'}:</label>
						<input type="text" id="author-url" class="text" name="aurl" value="{if isset($smarty.post.aurl)}{$smarty.post.aurl|escape:'html'}{else}http://{/if}">
					</div>
				{/if}

				<div class="control-group">
					{if !$member}
						<label class="control-label" for="guestbook_form">{lang key='msg'}:</label>
					{/if}

					{if $config.html_guestbook}
						{ia_wysiwyg value=$body name=message}
					{else}
						<textarea name="message" class="input-block-level" rows="8" id="guestbook_form">{$body}</textarea>
						{ia_print_js files='jquery/plugins/jquery.textcounter'}
					{/if}
				</div>

				{include file='captcha.tpl'}

				<input type="hidden" name="action" value="add">
			</div>

			<div class="form-actions">
				<input type="submit" id="add_message" name="add_message" value="{lang key='leave_message'}" class="btn btn-primary">
			</div>
		</div>
	</form>
{/if}

{ia_print_js files='ckeditor/ckeditor, _IA_URL_plugins/guestbook/js/front/index'}