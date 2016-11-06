<?php
	include 'library.php';

  Entete('running','fre');
?>

<h2>Liste des courses</h2>
<table border="1" cellpadding="5" cellspacing="0">
<tr align="center">
<td>Date</td>
<td>Course</td>
<td>Temps</td>
<td>Classement g&eacute;n&eacute;ral</td>
<td>Classement cat&eacute;gorie</td>
</tr>
<?php
	function GetListOfCourse( )
	{
		global $con;
		
		$counter = 0;

		$requete_string = "SELECT DATE_FORMAT( Date, '%d/%m/%Y' ) AS DateFormatted, URL, Temps, ClassCat, ClassGen, Nom FROM course ORDER BY Date DESC";
		$result = mysqli_query($con, $requete_string ) or die ("Requete invalide");

		while ( $row = mysqli_fetch_object( $result ) )
		{
			$counter++;
			echo '<tr align="center">
			<td class="line'.( $counter % 2 ).'">'.$row->DateFormatted.'</td><td class="line'.( $counter % 2 ).'">';
			if( isset( $row->URL ) )
			{
					echo "<a href=\"".$row->URL."\">".$row->Nom."</a>\n";
			}
			else
			{
			 		echo $row->Nom;
			}
			echo "</td><td class=\"line".( $counter % 2 )."\">&nbsp;".$row->Temps." </td><td class=\"line".( $counter % 2 )."\">&nbsp;".$row->ClassGen." </td><td class=\"line".( $counter % 2 )."\">&nbsp;".$row->ClassCat." </td>\n";
			echo "</tr>\n";
		}

		mysqli_free_result( $result );
	}

	GetListOfCourse( );
?>

</table>

<h2><a id="Medoc"></a>Marathon du M&eacute;doc</h2>
<div style='margin-left: 1cm;'>
<p>S'il ne fallait en faire qu'un, c'est celui-ci. L'ambiance est bonne enfant, on passe dans les jardins des ch&acirc;teaux (certains ouverts au public qui courre seulement pour cette occasion) et un ravitaillement de vin tous les 2kms. Apr&egrave;s tous ces arguments, qui peut encore r&eacute;sister ? D'ailleurs je me suis r&eacute;inscrit pour l'&eacute;dition 2001.</p>
<?php
	GetCommentFromImage( 24, 362, 363, 364, 365, 366 );
?>

<p>Liens:</p>
<?php
	GetLink( 22 );
?>
</div>

<h2><a id="Citadelles"></a>Trail des Citadelles</h2>
<div style='margin-left: 1cm;'>
<p>Un trail en Ari&egrave;ge qui part de Monts&eacute;gur et finit &agrave; Foix d'une distance de 36km et d'un d&eacute;nivel&eacute; positif de 1300 m&egrave;tres. C&ocirc;t&eacute; organisation, c'est l'&eacute;quipe du Grand Raid de l\'Ari&egrave;ge 2000 (qui a due &ecirc;tre &eacute;court&eacute;e &agrave; cause du tr&egrave;s mauvais temps). Rien &agrave; dire.</p>

<p><b>Contact :</b><br/>
Ari&egrave;ge Pyr&eacute;n&eacute;es Nature Organisations<br/>
59 chemin de la Montagne<br/>
09000 FOIX
</p>

<?php
	GetCommentFromImage( 24, 367, 368, 369, 370, 371, 372, 373 );
?>
</div>

<?php
	EndOfPage('fre');
?>

</body>
</html>
