<section>
	<article>
		{foreach from=$result item=oneItem}
		
		<h1>{$oneItem.title}</h1>
		<img src='images/{$oneItem.image}'>
		<br>
		<content>{$oneItem.content|truncate:30}</content>
		<br>
		<p>{$oneItem.date_created|date_format:" %e. %B. %Y" }</p>
		{/foreach}

	</article>
</section>