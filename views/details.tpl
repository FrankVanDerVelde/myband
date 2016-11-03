
{$champ = $smarty.get.id}





<section>
	{foreach from=$resultchampionsdetails item=championitem}
		<article>
	<div class="div-icons">
		<div class="imageNameTitle">
			<img src="images/champions/{$championitem.img}" class="icons" alt="">
			<h2>{$championitem.name}</h2>
			<b>{$championitem.description}</b>
		</div>

		<div class="loreVideo">
			<p>{$championitem.lore}</p>

			<iframe width="560" height="315" src="{$championitem.championsSpotlight}" frameborder="0" allowfullscreen></iframe>
			
		</div>
	</div>
</article>
	{/foreach}
</section>
