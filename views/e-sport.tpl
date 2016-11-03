<H1 class="pageTitle"> Champions </H1>
<section>
<table summary="Tournament Bracket" class="bracket">

{foreach from=$resultesport item=esports}
    <tr>
        <th class="tableClear">{$esports.tijd}</th>
            <td> <img src="images/teams/{$esports.img1}" class="esportimage" alt=""> <br> {$esports.team1}</td>
             <td class="tablevs">VS</td>
             <td> <img src="images/teams/{$esports.img2}" class="esportimage" alt=""> <br> {$esports.team2}</td>
        </div>
    </tr>
 {/foreach}	
	
</table>
</section>
<style>
	table.bracket {
		border: 1px solid black;
		text-align: center;
	}
	
	.bracket td {
		border: 1px solid black;
		width: 10em;
	}
	
	.bracket td img {
		float: left;
	}
	
	.bracket th {
		background-color: black;
		color: white;
	}
	
	.tableClear {
		clear: both;
		width: 10em;
	}
	
	.tablevs {
		
	}
	
</style>

<!--
<tr>
    <th>Tijd</th>
    <th>Team 1</th>
	<th>Tegen</th>
    <th>Team 2</th>
</tr>
<tr>
    <td><p>1:00 AM</p></td>
	<td><p>SKTelecom T1</p></td>
	<td><p>VS</p></td>
	<td><p>Cloud9</p></td>
</tr>
<tr>
    <td><p>2:00 AM</p></td>
	<td><p>Flash Wolves</p></td>
	<td><p>VS</p></td>
	<td><p>I May</p></td>
	
</tr>
<tr>
    <td><p>3:00 AM</p></td>
	<td><p>TSM</p></td>
	<td><p>VS</p></td>
	<td><p>Samsung Galaxy</p></td>
</tr>
<tr>
    <td><p>4:00 AM</p></td>
	<td><p>Royal Never Give Up</p></td>
	<td><p>VS</p></td>
	<td><p>Splyce</p></td>
</tr>
	<tr>
    <td><p>5:00 AM</p></td>
	<td><p>H2k</p></td>
	<td><p>VS</p></td>
	<td><p>INTZ</p></td>
</tr>
	<tr>
    <td><p>6:00 AM</p></td>
	<td><p>Edward Gaming</p></td>
	<td><p>VS</p></td>
	<td><p>ahq e-Sports Club</p></td>
</tr>
-->

