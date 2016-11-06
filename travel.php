<?php
	include 'library.php';

	Entete( 'travel', 'fre' );
?>
<p style="text-align: center">
	<map name="monde" id="monde">
		<?php
		$result = mysqli_query($con, REQUETE_select_VOYAGE ) or die ("Requete invalide");
		while( $row = mysqli_fetch_object( $result ) )
		{
			$URL = GetLinkFromCountry( $row->ID, $comment, $X1, $Y1, $X2, $Y2 );

			echo '<area shape="rect" coords="'.$X1.', '.$Y1.', '.$X2.', '.$Y2.'" alt="'.$comment.'" href="'.$URL.'"/>
					';
		}
		mysqli_free_result( $result );

		?>
	</map>

	<img style="align: center; border: 0px;" alt="Carte Monde"
		src="images/monde.jpg" width="600" height="350" usemap="#monde" />
</p>

<?php
	
	// Get the parameters
	if (isset($_GET["country"]))
		$_SESSION['country'] = $_GET["country"];

	if (isset($_SESSION['country']))
	{
		$country = $_SESSION["country"];

		function DisplayCommentary($country)
		{
			global $con;
			
			if(isset($country) && $country != ID_MAIN_GALLERY)
			{
				$requete_string = "SELECT fichier.Comment AS Comment, voyage.DateDebut as DateDebut, voyage.DateFin as DateFin , voyage.Recit as Recit FROM fichier, voyage WHERE fichier.ID = '$country' AND fichier.ID = voyage.ID";
				$result = mysqli_query($con, $requete_string ) or die ("Requete invalide");
				$row = mysqli_fetch_object( $result );

				echo "<h2 align='center'>".$row->Comment."</h2><br/>";
				echo "<h3>"._('Date').":</h3><div style='margin-left: 1cm;'>".date(_('d/m/Y'), strtotime($row->DateDebut))." &#8594; ".date(_('d/m/Y'), strtotime($row->DateFin))."</div>\n";
				echo "<h3>"._('Commentaires').":</h3><div style='margin-left: 1cm;'>".$row->Recit."</div>";

				mysqli_free_result( $result );

				GetAllImagesFromCountry($country);
			}
		}

		DisplayCommentary($country);
	}

	EndOfPage('fre');
?>
</body>
</html>
