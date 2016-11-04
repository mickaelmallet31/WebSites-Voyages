<?php
	include 'library.php';
  Entete( 'subdive', 'fre' );
?>

<script type="text/javascript">
//========================================================================
function chargeSubdive(nom)
//========================================================================
{
  document.images["photo"].src = "images" + nom + ".jpg";
}
</script>

<p>
J'ai d&eacute;couvert l'apn&eacute;e et la plong&eacute;e sous-marine en Martinique. 
Pour d&eacute;buter, je trouve que la mer des Cara&iuml;bes n'est pas trop mal 
(l'eau &agrave; 29°c et beaucoup de poissons bariol&eacute;s). J'y ai pass&eacute; mon niveau I. 
Pas assez de temps pour le niveau II.
</p>
<p>Depuis j'ai passé mon niveau II et III en Mer Méditerrannée.</p>
<p>Voici quelques photos prises dans l'eau:</p>

<?php
	GetAllImagesFromCountry( 25 );
	EndOfPage('fre');
?>

</body>
</html>
