{if isset($blog_entries)}
	{foreach $blog_entries as $blog_entry}
		<div class="media ia-item blog-entry">
			{if $blog_entry.image}
				<a href="{$smarty.const.IA_URL}blog/{$blog_entry.id}-{$blog_entry.alias}" class="pull-left ia-item-thumbnail">{printImage imgfile=$blog_entry.image width='150' title=$blog_entry.title class='media-object'}</a>
			{/if}
			<h4 class="media-heading">
				<a href="{$smarty.const.IA_URL}blog/{$blog_entry.id}-{$blog_entry.alias}">{$blog_entry.title|escape:'html'}</a>
			</h4>
			<p class="ia-item-date">{lang key='posted_on'} {$blog_entry.date_added|date_format:$config.date_format} {lang key='by'} {$blog_entry.fullname}</p>

			<div class="ia-item-body">{$blog_entry.body|strip_tags|truncate:$config.blog_max:'...'}</div>
			<hr>
		</div>
	{/foreach}
	{navigation aTotal=$pagination.total aTemplate=$pagination.template aItemsPerPage=$config.blog_number aNumPageItems=5}

{else}
	{if $tags}
		{foreach $tags as $tag}
			{if $tag != ''}
				<div class="media ia-item">
					<div class="media-body">
						<h4 class="media-heading">
							<a href="{$smarty.const.IA_URL}tag/{$tag.alias}">#{$tag.title|escape:'html'}</a>
						</h4>
					</div>
				</div>
			{/if}
		{/foreach}

		{navigation aTotal=$pagination.total aTemplate=$pagination.template aItemsPerPage=$config.tag_number aNumPageItems=5}
	{else}
		<div class="alert alert-info">{lang key='no_tags'}</div>
	{/if}
{/if}