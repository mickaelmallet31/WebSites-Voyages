<?php

require "localization.php";

define( "ID_MAIN_GALLERY", 0 );
define( "REQUETE_select_VOYAGE", "select fichier.ID FROM fichier, voyage WHERE fichier.ID = voyage.ID ORDER BY fichier.Comment" );

$pays = "";
if (! isset($con))
{
	DatabaseConnection();
}

//========================================================================
function DisplayLink( $URL, $Commentaire )
//========================================================================
{
	echo "<li><a class=\"lien\" href=\"".$URL."\">".$Commentaire."</a></li>";
}

//========================================================================
function GetLink( $ID )
//========================================================================
{
	global $con;
	
	echo "<ul>";

	$result = mysqli_query($con, "	select Commentaire, URL FROM liens WHERE ID='$ID'" ) or die ("Requete invalide");
	$row = mysqli_fetch_object( $result );
	DisplayLink( $row->URL, $row->Commentaire );

	echo "</ul>";
}

//========================================================================
function GetLinkFromType( $ID )
//========================================================================
{
	global $con;
	
	echo "<ul>";

	$result = mysqli_query ($con, "select Commentaire, URL FROM liens WHERE IDFichier='$ID'" ) or die ("Requete invalide");
	while( $row = mysqli_fetch_object( $result ) )
	{
		DisplayLink( $row->URL, $row->Commentaire );
	}

	echo "</ul>";
}

//========================================================================
function GetLinkFromCountry( $country, &$comment, &$X1, &$Y1, &$X2, &$Y2 )
//========================================================================
{
	global $con;
	
	$result = mysqli_query($con, "	select Comment, Recit, Nom, X1, X2, Y1, Y2 FROM fichier, voyage WHERE fichier.ID='$country' AND fichier.ID = voyage.ID" ) or die ("Requete invalide");
	$row = mysqli_fetch_object( $result );

	if( strlen( $row->Recit ) != 0 )
	{
		$URL = "travel.php?country=".$country;
	}
	else
	{
		$URL = $row->Nom.".php";
	}

	$X1 = $row->X1;
	$X2 = $row->X2;
	$Y1 = $row->Y1;
	$Y2 = $row->Y2;
	$comment = $row->Comment;
	mysqli_free_result( $result );

	return $URL;
}

//========================================================================
function GetAllImagesFromCountry( $IDFichier )
//========================================================================
{
	global $con;
	
	echo "<h3>Photos :</h3>";

	$requete_string = "select image.ID AS ID, Commentaire FROM image, fichierimage WHERE image.ID = fichierimage.ID AND fichierimage.IDFichier = '$IDFichier' ORDER BY image.ID";
	$result = mysqli_query($con, $requete_string ) or die ("Requete1 invalide");

	print "\n<ul>\n";
	while( $row = mysqli_fetch_object( $result ) )
	{
		LinkImage( $IDFichier, $row->ID, $row->Commentaire );
	}
	print "</ul>\n";

	mysqli_free_result( $result );
}

//========================================================================
function GetCommentFromImage(  )
//========================================================================
{
	global $con;
	
	$numargs = func_num_args();
	$arg_list = func_get_args();

	echo "<h3>Photos :</h3>";
	print "<ul>\n";
	for ($i = 1; $i < $numargs; $i++)
	{
		$requete_string = "select Commentaire FROM image WHERE ID = '$arg_list[$i]'";
		$result = mysqli_query($con, $requete_string ) or die ("Requete2 invalide");

		$row = mysqli_fetch_object( $result );
		LinkImage( $arg_list[0], $arg_list[$i], $row->Commentaire );

		mysqli_free_result( $result );
	}
	print "</ul>\n";
}

//========================================================================
function LinkImage( $IDFichier, $ID, $Comment )
//========================================================================
{
	echo "\t<li><a href=\"image.php?idfichier=".$IDFichier."&amp;id=".$ID."\">".$Comment."</a></li>\n";
}

//========================================================================
function GetPubBanner( $Pays, $fichier )
//========================================================================
{
	global $con;
	
	if( $fichier != 'cv') {
		#echo '<p style="text-align: center"><a href="http://www.greenpeace.fr/kitweb" title="Greenpeace France"><img src="http://www.greenpeace.org/france/Global/france/graphics/goodies/2008/12/392x72-baleine-1.png" width="392" height="72" alt="Greenpeace France"/></a></p>';
	}
	return;

	$condition = "";
	if ( $Pays != "" )
	{
		$condition = "AND Pays = '$Pays'";
	}

	$result = mysqli_query($con, "select * FROM publicite WHERE type = '$format' $condition") or die ("Requete invalide");

	if ( $Pays == "" )
	{
		$number = rand( 0, mysqli_num_rows( $result ) -1 );

		if (!mysqli_data_seek ($result, $number))
		{
			die ("Requete invalide");
		}
	}
	$row = mysqli_fetch_object( $result );

	mysqli_free_result( $result );

	if ( $row->Pub != "" )
	{
		echo '<p style="text-align: center">'.$row->Pub.'</p>';
	}
}

//========================================================================
function Entete( $fichier, $language )
//========================================================================
{
	global $id;
	global $pays;
	global $locale;
	global $con;

	$selectedRunning = "";
	$selectedSubDive = "";
	$selectedRoller  = "";
	switch( $fichier )
	{
		case "bolivia":
			$titre = "R&eacute;cit du voyage en Bolivie";
			$recit = "R&eacute;cit du voyage en Bolivie pendant 15 jours";
			$motcle = "voyage;peru;bolivia;inca;camino;macchu;picchu;potosi;salar;Uyuni;sucre;cochabamba;cuzco";
			break;

		case "bookperu":
			$titre = "R&eacute;cit du voyage au P&eacute;rou";
			$recit = "Récit du voyage au P&eacute;rou pendant 15 jours";
			$motcle = "voyage;peru;bolivia;inca;camino;macchu;picchu;potosi;salar;Uyuni;sucre;cochabamba;cuzco";
			break;

		case "gallery":
			$titre = "Gallerie Photo";
			$recit = "Gallerie Photo";
			$motcle = "Gallerie;Photo";
			break;

		case "bric_a_brac":
			$titre = "Bric &agrave; brac";
			$recit = "Page qui contient des informations dont j'ai eu besoin au cours du temps";
			$motcle = "attelage;attache remorque;scenic 1 phase 2;circuit electrique;faisceau";
			break;

			case "image":
			$titre = "Photo";
			$recit = "Photo";
			$motcle = "Photo";
			break;

		case "bvi":
			$titre = "R&eacute;cit de la croisi&egrave;re aux Iles Vierges Britanniques";
			$recit = "Carnet de bord de la croisiere aux Iles Vierges Britanniques";
			$motcle = "voyage; Ile;Vierge;Britannique;croisiere; antilles;bateau;location;martin;catamaran";
			break;

		case "cv":
			$titre = "Curriculum Vitae: Ing&eacute;nieur Informaticien";
			$recit = "Description professionnelle de Micka&euml;l MALLET en tant qu'ing&eacute;nieur informaticien";
			$motcle = "CV, curriculum, vitae, informaticien, telecom, ordinateur, ing&eacute;nieur, GSM, GPRS, UMTS";
			break;

		case "egypt":
			$pays = "Egypte";

			$titre = "R&eacute;cit du voyage et de la croisi&egrave;re en Egypte";
			$recit = "R&eacute;cit du circuit propos&eacute; par FRAM qui se compose d'une croisi&egrave;re sur le NIL et d'un s&eacute;jour au Caire";
			$motcle = "croisiere, nil, croisi&egrave;re, egypte, pyramide, carnet, route, kheops, karnak, louxor, abou, simbel, louqsor";
			break;

		case "florida":
			$titre = "R&eacute;cit du voyage en Floride, USA";
			$recit = "Reacute;cit du voyage en Floride, USA, a la d&eacute;couverte des parcs d'attraction, des everglades, de Cap Canaveral";
			$motcle = "floride, orlando, floride, usa, disney, mickey, mimi, everglade, key west, parc, attraction, cap, Canaveral, Kennedy, NASA";
			break;

		case "france":
			$titre = "S&eacute;jour en Corse et a&acute; Belle-Ile";
			$recit = "Photos et r&eacute;cits de r&eacute;gions fran&ccedil;aises telles que la Bretagne, Belle-Ile et la Corse";
			$motcle = "france, corse, belle-ile, bretagne";
			break;

		case "grenadin":
			$titre = "Carnet de bord de la croisiere aux Grenadines";
			$recit = "Carnet de bord de la croisiere aux Grenadines";
			$motcle = "voyage; mer des caraibes; grenadines; croisiere";
			break;

		case "hurghada":
			$pays = "Egypte";

			$titre = "Plong&eacute;e en Mer Rouge depuis Hurghada";
			$recit = "R&eacute;cit de la semaine au centre UCPA d'Hurghada de plong&eacute;e sous-marine, en Mer Rouge";
			$motcle = "hurghada, mer, rouge, ourghada, ucpa, corail, tortue, poisson, crocodile, lion, pieuvre";
			break;

		case "image":
			$titre = "Image";
			$recit = "Photos et r&eacute;cits de r&eacute;gions fran&ccedil;aises telles que la Bretagne, Belle-Ile et la Corse";
			$motcle = "voyages; photo";
			break;

		case "ibiza":
			$titre = "Ibiza";
			$recit = "Photos et r&eacute;cit du voyage sur l',ile d'Ibiza";
			$motcle = "voyages; photo";
			break;

		case "index":
			$pays = "index";
			$titre = "Voyage &agrave; travers le monde - Accueil";
			$recit = "Site Web de Mickael MALLET: CV, sports et voyages &agrave; travers le monde";
			$motcle = "voyage;peru;bolivia;inca;camino;macchu;picchu;potosi;salar;Uyuni;sucre;cochabamba;cuzco";
			break;

		case "links":
			$titre = "Liens";
			$recit = "Liens";
			$motcle = "Liens";
			break;

		case "news":
			$titre = "Nouveaut&eacute;s";
			$recit = "Mise a jour du site web";
			$motcle = "news;mise a jour;nouveau";
			break;

		case "quebec":
			$titre = "R&eacute;cit du voyage Qu&eacute;bec, Canada";
			$recit = "Reacute;cit du voyage au Qu&eacute;bec, Canada";
			$motcle = "quebec, erable, baleine, escoumin, montreal, gaspesie, rocher, perce, gaspe, belouga";
			break;

		case "roller":
			$pays = "sports";
			$titre = "Roller &agrave; fond la forme";
			$recit = "Photos de roller";
			$motcle = "roller, toulouse, photos";
			$selectedRoller = "selected='selected'";
			break;

		case "running":
			$pays = "sports";
			$titre = "Courrir";
			$recit = "Courrir";
			$motcle = "Courrir";
			$selectedRunning = "selected='selected'";
			break;

		case "sports":
			$pays = "sports";
			$titre = "Sports pratiqu&eacute;s";
			$recit = "Quelques photos de sports pratiqu&eacute;s tels que le roller, la course";
			$motcle = "photo, sport, roller, course";
			break;

		case "subdive":
			$titre = "Photos de plong&eacute;e sous-marine";
			$recit = "Photos de plong&eacute;e sous-marine prises en Martinique et &agrave; Hurghada en Egypte";
			$motcle = "Plong&eacute;e sous-marine, photo, poisson, martinique, hurghada, egypte, anemone";
			$selectedSubDive = "selected='selected'";
			break;

		case "travel":
			$pays = "Martinique";
			$titre = "R&eacute;cit de voyages et croisi&egrave;res";
			$recit = "R&eacute;cit de voyages autour du monde";
			$motcle = "voyage;recit;perou;bolivie;martinique;dominique;p&eacute;rou;angleterre;irlande;egypte;guadeloupe;&eacute;gypte;iles vierges;saint lucie;trinidad et tobago;espagne";
			break;
	}

	echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"
   \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
			<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\">\n";


	echo "<head>\n";
	echo "\t<title>$titre</title>\n";
	echo "\t<meta name=\"description\" content=\"$recit\"/>\n";
	echo "\t<meta name=\"keywords\" content=\"$motcle\"/>\n";
	echo "\t<meta name=\"resource-type\" content=\"document\"/>\n";
	echo "\t<meta name=\"distribution\" content=\"global\"/>\n";
	echo "\t<meta name=\"security\" content=\"public\"/>\n";
	echo "\t<meta http-equiv=\"pragma\" content=\"no-cache\"/>\n";
	echo "\t<meta http-equiv=\"expires\" content=\"Mon, 21 May 2001 12:03:14 GMT\"/>\n";
	echo "\t<meta name=\"robots\" content=\"all\"/>\n";
	echo "\t<meta http-equiv='content-type' content='text/html;charset=UTF-8'/>\n";
	echo "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/style.css\" title=\"coolsheet\"/>\n";
	echo "</head><body";

	if ( $fichier == "cv" )
	{
		echo " onload=\"cache( 'section2', 'section1', 'section3', 'num2', 'num1', 'num3' )\"";
	}

	echo '><table style="padding: 10px 10px 10px 10px; width:1024px; -webkit-border-radius: 5px 5px 5px 5px;-moz-border-radius: 5px 5px 5px 5px;border-radius: 5px 5px 5px 5px;"><tr><td><a id="top"></a>';

	switch ($locale)
	{
		case 'en_US' :
			$border_en='border="1"';
			$border_fr='';
			$border_es='';
			break;

		case 'fr_FR' :
			$border_fr='border="1"';
			$border_en='';
			$border_es='';
			break;

		case 'es_ES' :
			$border_es='border="1"';
			$border_en='';
			$border_fr='';
			break;
	}

	echo '
	<table border="0"><tr><td width="150" align="right"></td><td width="700">
	<ul id="menu">
		<li class="violet"><a href="/index.php">'._("Accueil").'</a></li><!--
     --><li class="violet"><a href="/news.php">'._("Nouveaut&eacute;s").'</a></li><!--
     --><li class="violet"><a href="#">'._("CV").'</a>
		<ul>
			<li><a href="/cv_en.php">English version</a></li>
			<li><a href="/cv_fr.php">Version fran&ccedil;aise</a></li>
		</ul>
		</li><!--
     --><li class="violet"><a href="#">'._("Les sports").'</a>
		<ul>
			<li><a href="/running.php">'._("Courrir").'</a></li>
			<li><a href="/roller.php">'._("Roller").'</a></li>
			<li><a href="/subdive.php">'._("Plong&eacute;e").'</a></li>
		</ul>
		</li><!--
     --><li class="violet"><a href="/links.php">'._("Liens").'</a></li><!--
	 --><li class="violet"><a href="/bric_a_brac.php">'._("Bric &agrave; brac").'</a></li><!--
     --><li class="violet"><a href="#">'._('Carnets de voyages').'</a>
		<ul>
			<li><a href="/travel.php?country=0">--- Accueil ---</a></li>
			';
			

			$result = mysqli_query($con, REQUETE_select_VOYAGE ) or die ("Requete REQUETE_select_VOYAGE invalide");
			$optGroup = "";
			while( $row = mysqli_fetch_object($result) )
			{
				$URL = GetLinkFromCountry( $row->ID, $comment, $X1, $Y1, $X2, $Y2 );
				echo "\n\t\t\t<li><a href='$URL'>$comment</a></li>";
			}
			mysqli_free_result( $result );
			
			echo '
		</ul>
		</li><!--
     --><li class="violet"><a href="#">'._('Galleries de photos').'</a>
		<ul>
			<li><a href="/gallery.php?id=0">--- Accueil ---</a></li>
			';
			
			
			$requete = "select Comment, ID, typeGallery
			FROM fichier
			WHERE ImageID != 0 AND cache=0 AND typeGallery != 2
			ORDER BY Comment";
			$result = mysqli_query($con, $requete) or die ("Requete invalide : $requete");
			while( $row = mysqli_fetch_object( $result ) )
			{
				# Display the link . Reset it if the gallery type is 1
				$link = "gallery.php?id=$row->ID";
				if ($row->typeGallery==1) $link="javascript:void()";
				echo "<li><a href='$link'>$row->Comment</a>";
				
				# Get the submenus of the typegallery 1 gallery
				if ($row->typeGallery==1)
				{
					$requete2 = "select Comment, ID, typeGallery
					FROM fichier
					WHERE ImageID != 0 AND cache = 0 AND typeGallery = 2 AND masterGallery=$row->ID
					ORDER BY Comment";
					$result2 = mysqli_query($con, $requete2) or die ("Requete invalide : $requete2");
					echo "<ul>";
					while( $row = mysqli_fetch_object( $result2 ) )
					{
						echo "<li><a href='gallery.php?id=$row->ID'>$row->Comment</a></li>\n";
					}
					echo "</ul>\n";
				}
				echo "</li>\n";
			}
			mysqli_free_result( $result );
		?>
		</ul>
		</li>
	</ul>
	<script type="text/javascript" src="http://counter3.01counter.com/private/countertab.js?c=d0f669a7061d5e51a9ae911ba22fd762"></script>
<noscript><a href="http://www.compteurdevisite.com" title="compteur internet"><img src="http://counter3.01counter.com/private/compteurdevisite.php?c=d0f669a7061d5e51a9ae911ba22fd762" border="0" title="compteur internet" alt="compteur internet"></a>
</noscript>
	</td><td width="150" align="right">
	<?php
		echo "
	<a href='?l=fr_FR'><img $border_fr src='/images/flag_fr.png'/></a>
	<a href='?l=en_US'><img $border_en src='/images/flag_uk.png'/></a> 
	<a href='?l=es_ES'><img $border_es src='/images/flag_sp.png'/></a>
	";
	?>
	</td></tr></table>
	<div style="min-height:600px;">
<?php
GetPubBanner( $pays, $fichier );
}

//========================================================================
function DatabaseConnection( )
//========================================================================
{
	global $con;
	
	$con = mysqli_connect("127.0.0.1", "mickael.mallet", "jsa35eej", "mickael_mallet");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
}

//========================================================================
function EndOfPage( $CurLanguage )
//========================================================================
{
	global $AmIConnected;

	switch ( $CurLanguage )
	{
		case "fre" :
			$msg = 'Derni&eacute;re mise &aacute; jour ';
			$top_string = 'Haut de page';
			break;

		case "spa" :
			$msg = 'Ultimas modificationes ';
			$top_string = 'Superior de la pagina';
			break;

		case "eng" :
			$top_string = 'Top of the page';
			$msg = 'Last modifications';
	}

	// La variable fichier correspond au nom du fichier compteur (compteur.dat)
	$fichier = $_SERVER['REQUEST_URI'];
	
	$pattern = Array( "/\/.*\//", "/\?/", "/=/", "/&/", "/cest_moi/", "/%.*/" );
	$rep_pat = Array( "", "", "", "", "", "" );
	$fichier = preg_replace($pattern, $rep_pat, $fichier);

	if ( $fichier == "" )
	{
		$fichier = "index.php";
	}
	$fichier .= ".txt";

	// --- Pouvons nous ouvrir le fichier en lecture/écriture
	if( file_exists("compteur/$fichier") )
	{
		$fp = fopen("compteur/$fichier","rw+");
	}
	else
	{
		$fp = fopen("compteur/$fichier","w+");
	}

	if (! $fp)
	{
		// --- On ne peut pas ouvrir le fichier affichage de ?????
		print ("?????");
		exit;
	}

	// --- Positionnement du curseur au début du fichier
	fseek($fp,0);
	// --- Variable nbAffichages correspond aux 10 premiers caractères du fichier
	$nbAffichages=fgets($fp,10);

	if ( $nbAffichages == "" )
	{
		$nbAffichages = 0;
	}

	// Update the counter value of the page if not me connected
	if ( $AmIConnected == FALSE )
	{
		// --- Incrémentation de la variable nbAffichages
		$nbAffichages++;

		// --- Ecriture dans le fichier de la variable nbAffichages
		fseek($fp,0);
		fputs($fp,$nbAffichages);
		// --- Fermeture du fichier
	}
	fclose($fp);

	echo '</div><div style="text-align: center"><a class="top" href="#top">Top</a>
		</div>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="CSS Valide !" />
    </a>
		<a href="http://validator.w3.org/check?uri=referer">
		<img style="border:0;"
		src="http://www.w3.org/Icons/valid-xhtml10"
		alt="Valid XHTML 1.0!\" height="31" width="88" /></a>
		Webmaster : <a href="mailto:manou_mickael@yahoo.fr?subject=[Site Oueb mickael.mallet.free.fr]">manou_mickael@yahoo.fr</a>.
		Compteur: '.$nbAffichages.'
		<!-- phpmyvisites -->
		<a href="http://st.free.fr/" title="phpMyVisites | Open source web analytics"
		onclick="window.open(this.href);return(false);"><script type="text/javascript">
		<!--
		var a_vars = Array();
		var pagename="";

		var phpmyvisitesSite = 153561;
		var phpmyvisitesURL = "http://st.free.fr/phpmyvisites.php";
		//-->
		</script>
		<script src="http://st.free.fr/phpmyvisites.js" type="text/javascript"></script>
		<object>
		<noscript>
		<p>phpMyVisites | Open source web analytics <img src="http://st.free.fr/phpmyvisites.php" alt="Statistics" style="border:0"/></p>
		</noscript>
		</object>
		</a>
		<!-- /phpmyvisites -->
		</td></tr></table>
		';
}
?>
