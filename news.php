<?php
include 'library.php';

Entete( 'news', 'fre' );
?>
<p style="color: green">Derni&egrave;res modifications du site:</p>
<?php
function GetActualite( )
{
	DatabaseConnection( );

	$requete_string = "SELECT DATE_FORMAT( Date, '%d/%m/%Y' ) AS DateFormatted, Evenement FROM actualite ORDER BY Date DESC";
	$result = mysql_query ( $requete_string ) or die ("Requete invalide");

	echo "<ul>";
	while ( $row = mysql_fetch_object( $result ) )
	{
		echo "<li>".$row->DateFormatted." : ".$row->Evenement."<br/></li>";
	}
	echo "</ul>";

	mysql_free_result( $result );
}

GetActualite( );

EndOfPage('fre');
?>

</body>
</html>
