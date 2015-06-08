{if isset($latest_comments)}
	{foreach $latest_comments as $comment name='latest_comments'}
		<div class="media ia-item ia-item-bordered-bottom">
			<div class="media-body">
				{$comment.body|truncate:200:"..."}
			</div>
			<p class="ia-item-date">
				{lang key="on"} {$comment.date|date_format:$config.date_format} <br>
				{if isset($comment.item_title)}
					{lang key='about'} <a href="{$comment.item_url}">{$comment.item_title}</a>
				{else}
					<a href="{$comment.item_url}">{lang key='view_subject'}</a>
				{/if}
			</p>
		</div>
	{/foreach}
{/if}