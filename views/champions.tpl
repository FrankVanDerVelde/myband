<H1 class="pageTitle"> Champions </H1>
<section>
	
	<div id="championsSection">
		


	{foreach from=$resultchampions item=championitem}
		
		<div class="div-icons">
		<b>{$championitem.name}</b><br>
		<a href="?action=details&id={$championitem.id}">
		<img src="images/champions/{$championitem.img}"  class="icons"  alt=""><br></a>
		</div>
		
	{/foreach}
	</div>	
</section>