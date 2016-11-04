<?php
	include 'library.php';

	Entete( 'image','fre' );

	DatabaseConnection( );

	// Get the parameters
	$id = $_GET[ "id" ];
	$idfichier = $_GET[ "idfichier" ];

  $request = "SELECT Comment, Commentaire, image.Nom AS Nom FROM image, fichier, fichierimage WHERE image.ID = fichierimage.ID AND fichier.ID = '$idfichier' AND image.ID = '$id'";
	$result = mysql_query ( $request ) or die ("Requete '$request' invalide");
	$row = mysql_fetch_object( $result );

	$request = "SELECT MAX( ID ) AS ID FROM fichierimage WHERE ID < '$id' AND IDFichier = '$idfichier'";
	$result2 = mysql_query ( $request ) or die ("Requete '$request' invalide");
	$row2 = mysql_fetch_object( $result2 );

	$request = "SELECT MIN( ID ) AS ID FROM fichierimage WHERE ID > '$id' AND IDFichier = '$idfichier'";
	$result3 = mysql_query ( $request ) or die ("Requete '$request' invalide");
	$row3 = mysql_fetch_object( $result3 );

	echo '<table><tr><td align="right" style="width: 200px">';
	if( isset( $row2->ID ) )
	{
		echo "<a class=\"lien\" href=\"image.php?idfichier=".$idfichier."&amp;id=".$row2->ID."\">&lt;&lt;</a>";
	}
	echo '</td><td align="center"><a href="gallery.php?id='.$idfichier.'">'.$row->Comment.'</a> :: <a class="blanc" href="javascript:history.back()">'.$row->Commentaire.'</a></td><td style="width: 200px">';
	if( isset( $row3->ID ) )
	{
		echo "<a class=\"lien\" href=\"image.php?idfichier=".$idfichier."&amp;id=".$row3->ID."\">&gt;&gt;</a>";
	}
	echo '
</td></tr></table>
<p style="text-align:center">
   <a class="blanc" href="javascript:history.back()"><img style="border:0px" alt="Retour" src="images/photos/'.$row->Nom.'.jpg"/></a>
</p>
';

	mysql_free_result( $result );
	mysql_free_result( $result2 );
	mysql_free_result( $result3 );

	EndOfPage( 'fre' );
?>
</body>
</html>
