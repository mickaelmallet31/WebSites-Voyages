<?php
	include 'library.php';

	Entete( 'news', 'fre' );

	echo '<p style="color: green">'._('Derni&egrave;res modifications du site').":</p><div style='margin-left: 1cm;'>";
    
	echo date(_('d/m/Y'), strtotime('2016-11-08')).' : '._('Ajout des photos du week-end &agrave; Barcelone').'<br/>';
	echo date(_('d/m/Y'), strtotime('2016-11-07')).' : '._('Ajout des photos de la Cr&egrave;te, de Venise, de Maurice et de la R&eacute;union').'<br/>';
	echo date(_('d/m/Y'), strtotime('2016-11-06')).' : '._('Support du multilangage avec gettext').'<br/>';
	echo date(_('d/m/Y'), strtotime('2016-11-05')).' : '._('Ajout des photos de Porquerolles et Cala Montjoi').'<br/>';
	echo date(_('d/m/Y'), strtotime('2012-12-08')).' : '._('Changement de barre de menu; mise &agrave; jour du CV; correction sur la transparence des images PNG').'<br/>';
    echo date(_('d/m/Y'), strtotime('2006-10-14')).' : '._("Suppression du module Livre d'or &agrave; cause de messages de spam")."<br/>";
    echo date(_('d/m/Y'), strtotime('2006-01-31')).' : '._('Ajout des photos du Marathon de New-york 2005').'<br/>';
    echo date(_('d/m/Y'), strtotime('2005-10-08')).' : '._("Ajout d'un livre d'or")."<br/>";
    echo date(_('d/m/Y'), strtotime('2005-07-31')).' : '._('Ajout des photos de Mallorca, de quelques photos sur Trinidad, Martinique et Iles Vierges Britaniques').'<br/>';
    echo date(_('d/m/Y'), strtotime('2005-07-30')).' : '._('Modification graphique du site (couleur, largeur fixee). Correction des pages pour &ecirc;tre en conformance avec CSS 2.1 et XHTML').'<br/>';
    echo date(_('d/m/Y'), strtotime('2004-05-11')).' : '._("Ajout des photos d'Ibiza")."<br/>";
    echo date(_('d/m/Y'), strtotime('2003-06-10')).' : '._('Photos du Portugal ajout&eacute;es').'<br/>';
    echo date(_('d/m/Y'), strtotime('2003-03-25')).' : '._('Ajout des photos du s&eacute;jour &agrave; Chamonix').'<br/>';
    echo date(_('d/m/Y'), strtotime('2002-07-16')).' : '._('Ajout du r&eacute;cit du voyage au Qu&eacute;bec').'<br/>';
    echo date(_('d/m/Y'), strtotime('2002-07-09')).' : '._('Reconstruction du site en PHP').'<br/>';
    echo date(_('d/m/Y'), strtotime('2001-09-21')).' : '._('Photos du Qu&eacute;bec').'<br/>';
    echo date(_('d/m/Y'), strtotime('2001-09-07')).' : '._("R&eacute;cit d'Hurghada termin&eacute").";<br/>";
    echo date(_('d/m/Y'), strtotime('2001-07-21')).' : '._("Photos d'Hurghada diffus&eacute;es")."<br/>";

	echo '</div>';
	
	EndOfPage('fre');
?>

</body>
</html>
