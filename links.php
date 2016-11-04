<?php
	include 'library.php';

	Entete( 'links', 'fre' );
?>
<p>
Voici quelques liens que j'utilise:</p>
<table  style='width:100%; padding:5'>
<tr class="linkTitle">
	<td>&Eacute;cologie</td>
	<td>Vive le sport</td>
</tr><tr><td>
<?php
	GetLinkFromType( 1 );
?>
</td><td>
<?php
	GetLinkFromType( 2 );
?>
</td></tr>
<tr class="linkTitle">
	<td>Voyages, voyages...</td>
	<td>Bretagne...</td>
</tr>
<tr><td>
<?php
	GetLinkFromType( 3 );
?>
</td><td>
<?php
	GetLink( 20 );
?>
</td></tr><tr  class="linkTitle">
	<td>Associations caritatives</td>
</tr><tr><td>
<?php
	GetLink( 21 );
?>
</td></tr></table>

<?php
   EndOfPage('fre');
?>

</body>
</html>
