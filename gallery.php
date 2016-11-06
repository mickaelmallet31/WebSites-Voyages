<?php
	include 'library.php';

	Entete( 'gallery', 'fre' );


	// Set the local variables
	$title = "";
	$requete_string = "";

	// Get the parameters
	if (isset($_GET["id"]))
		$_SESSION['id'] = $_GET["id"];

	if(isset($_SESSION['id']))
	{
		$id = $_SESSION[ "id" ];
		
		$result = mysqli_query($con, "SELECT Comment FROM fichier WHERE id = '$id'" ) or die ("Requete invalide");
		$row = mysqli_fetch_object($result);
		$title = $row->Comment;

		if( $id == ID_MAIN_GALLERY )
		{
			$requete_string = "
			select 
				fichier.Comment AS comment, image.Nom AS Nom, fichier.ID AS IDFichier 
			FROM 
				fichier, image 
			WHERE 
				fichier.cache = 0 AND fichier.ImageID = image.ID AND fichier.typeGallery != 1
			ORDER BY 
				fichier.Comment";
		}
		else
		{
			$requete_string = "SELECT * FROM image, fichierimage WHERE image.ID = fichierimage.ID AND fichierimage.IDFichier = '$id' ORDER BY image.ID";
		}
	}

	echo '<h2 style="text-align: center">'.$title.'</h2><table cellpadding="5" cellspacing="5">';

	$counter = 0;
	$result = mysqli_query($con, $requete_string ) or die ("$requete_string invalide");
	while( $row = mysqli_fetch_object( $result ) )
	{
		if( $counter % 4 == 0 )
		{
			if ( $counter != 0 ) echo '</tr>';
			echo '<tr valign="top">';
		}

		echo '<td style="text-align:center">';
		if( $id == ID_MAIN_GALLERY )
		{
			$result2 = mysqli_query($con, "SELECT Comment FROM fichier WHERE ID = '$row->IDFichier'" ) or die ("Requete invalide");
			$row2 = mysqli_fetch_object( $result2 );
			echo '<div style="color:green">'.$row2->Comment.'<br/><a href="gallery.php?id='.$row->IDFichier.'">
			<img src="images/vignettes/'.$row->Nom.'.jpg" style="border:0px;" alt="" width="174" height="117"/></a></div>';
		}
		else
		{
			echo '<a href="image.php?idfichier='.$row->IDFichier.'&amp;id='.$row->ID.'">
					<img src="images/vignettes/'.$row->Nom.'.jpg" style="border: 0px;" width="174" height="117" alt="'.$row->Commentaire.'"/></a>';
		}

		echo "</td>\n";
		$counter++;
	}
	echo "\n</tr>\n</table>";
	echo "</div>\n";
	mysqli_free_result( $result );

	EndOfPage('fre');
?>
</body>
</html>
