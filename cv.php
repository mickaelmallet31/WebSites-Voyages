<?php
	include 'library.php';

	Entete( 'cv', 'fre' );
?>
<style>
	td.cv {
		font-size : 18px;
		font-family:"Times New Roman",Georgia,Serif;
		line-height:110%;
	}
	
	font.section { 
		color : grey;
		font-weight:bold;
	}
	font.activite {
		font-weight:bold;
	}
	font.lieu {
		color : blue;
	}
	table.activite {
		background-color: #F9B7FF; 
		width:100%;
	}
	tr.activite {
		vertical-align:top;
	}
</style>
<table width='100%' cellpadding='10' cellspacing='0'>
	<tr>
		<td class="cv">
			Mickael MALLET<br>
			25 rue des charmes<br>
			31830 Plaisance du Touch<br>
			<?php echo _('T&eacute;l') ?>: +33 6 14 86 23 03<br/>
			<br/>
			<?php echo _('M&eacute;l') ?>: <a href='mailto:manou_mickael@yahoo.fr'>manou_mickael@yahoo.fr</a><br/>
			LinkedIn : <a href='http://www.linkedin.com/in/mickaelmallet'>http://www.linkedin.com/in/mickaelmallet</a><br>
		</td>
		<td align='center'>
			<div style='background-color:lightgreen; font-size:18px; font-width:bolder;'><br/><?php echo _('INGENIEUR GESTION DE CONFIGURATION / DEVELOPPEMENT') ?><br/><br/></div>
		</td>
	</tr>
</table>

<table width='100%' cellpadding='10' cellspacing='0'>
	<tr valign='top'>
		<td width='60%' style='background-color: #F9B7FF; border-width: 1px; border-style: solid;'>
			<font class='section'><?php echo _('EXPERIENCES PROFESSIONNELLES') ?></font><br/>
            
<font class='activite'><?php echo _("Responsable projet pour l'int&eacute;gration continue")?></font><br/>
<font class='lieu'>Renault SW Labs, <?php echo _("depuis juillet 2017") ?>, 
Toulouse</font><br/>
<table class='activite'>
    <tr class='activite'><td>-</td><td><?php echo _("Responsable projet pour l'int&eacute;gration continue")?></td></tr>
</table>
<br/>
            
<font class='activite'><?php echo _("Responsable du support de l'outil d'intégration Buildbot/ACS")?></font><br/>
<font class='lieu'>Intel Corporation, <?php echo _("avril 2013 - juin 2017 (4 ans 3 mois)") ?>, 
Toulouse</font><br/>
<table class='activite'>
    <tr class='activite'><td>-</td><td><?php echo _("Responsable du support de l'outil d'intégration Buildbot/ACS")?></td></tr>
</table>
<br/>
            
<font class='activite'><?php echo _("D&eacute;veloppeur d'un outil d'automatisation de tests de validation")?></font><br/>
<font class='lieu'>Motorola Mobility, <?php echo _("septembre 2011 - Poste actuel (1 an 5 mois)") ?>, 
Toulouse</font><br/>
<table class='activite'>
    <tr class='activite'><td>-</td><td><?php echo _("Am&eacute;lioration d'un outil &eacute;crit en Python pour automatiser les tests de validation de la livraison logiciel du modem, en contr&ocirc;lant le t&eacute;l&eacute;phone avec un bo&icirc;tier Arduino et les analyseurs logiques de r&eacute;seaux via des commandes GPIB")?></td></tr>
    <tr class='activite'><td>-</td><td><?php echo _("Livraison de nouvelles versions du modem (outil GIT pour la gestion de configuration)") ?></td></tr>
</table>
<br/>

<font class='activite'><?php echo _("Responsable Gestion de Configuration des composants STACK LTE/WCDMA/GSM") ?></font><br/>
<font class='lieu'>Motorola Mobile Devices, <?php echo _("septembre 2004 - septembre 2011 (7 ans 1 mois)") ?>, Toulouse</font><br/>
<table class='activite'><tr class='activite'><td>-</td><td>
<?php echo _("Responsable de la gestion de configuration du composant STACK LTE/WCDMA/GSM (jusqu'&agrave; 7 personnes dans  l'&eacute;quipe : aux Etats-Unis, Inde et France) sous Clearcase puis sous GIT") ?></td></tr>
<tr class='activite'><td>-</td><td><?php echo _("D&eacute;veloppement d'outils/interfaces Web pour propager les changements sur les diff&eacute;rentes branches du composant (scripts CGI en Perl)") ?></tr>
<tr class='activite'><td>-</td><td><?php echo _("Contr&ocirc;le de la qualit&eacute; de la version sortie en utilisant l'outil Klocwork pour la d&eacute;tection statique d'erreurs, Purify pour la d&eacute;tection dynamique (fuite m&eacute;moire en autres)") ?></td></tr>
<tr class='activite'><td>-</td><td><?php echo _("Utilisation d'outils de simulations/tests sur le r&eacute;seau pour valider le 
comportement du composant") ?></td></tr>
</table>
<br/>

<font class='activite'><?php echo _("Responsable Gestion de Configuration du composant STACK 2G") ?></font><br/>
<font class='lieu'>Motorola Mobile Devices, <?php echo _("juillet 2002 - septembre 2004 (2 ans 3 mois)") ?>, 
Toulouse</font><br/>
<table class='activite'><tr class='activite'><td>-</td><td><?php echo _("Responsable de la gestion de configuration du composant STACK 2G sous Clearcase") ?></td></tr></table>
<br/>

<font class='activite'><?php echo _("D&eacute;veloppeur Outil Test & Simulation") ?></font><br/>
<font class='lieu'>Motorola Mobile Devices, <?php echo _("octobre 1999 - juin 2002 (2 ans 9 mois)") ?>, 
Toulouse</font><br/>
<table class='activite'><tr class='activite'><td>-</td><td><?php echo _("D&eacute;veloppeur C d'un outil de simulation sous environnement Unix pour stresser le code de la t&acirc;che STACK 2G") ?></td></tr></table>
<br/>

<font class='activite'><?php echo _("D&eacute;veloppeur Protocol GSM")?></font><br/>
<font class='lieu'>Mitsubishi, <?php echo _("f&eacute;vrier 1998 - septembre 1999 (1 an 8 mois)") ?>, Rennes</font><br/>
<table class='activite'>
<tr class='activite'><td width='5'>-</td><td><?php echo _("D&eacute;veloppeur C de la couche protocolaire Call Control") ?></td></tr>
</table>
<br/>

<font class='activite'><?php echo _("Support Technique") ?></font><br/>
<font class='lieu'>Service Informatique des Imp&ocirc;ts, <?php echo _("octobre 1996 - janvier 1998 (1 an 4 mois)") ?>, Martinique</font><br/>
<table class='activite'><tr class='activite'><td>-</td><td><?php echo _("Support Technique pour les 4 centres des Imp&ocirc;ts de la Martinique (dans le cadre du Service Civil)")?></td></tr></table>
<br/>

<font class='activite'><?php echo _("D&eacute;veloppeur Logiciel de facturation") ?></font><br/>
<font class='lieu'>Seabrook Research Limited, <?php echo _("juillet 1993 (2 mois)")?>, Cork (Irlande)</font><br/>
<table class='activite'><tr class='activite'><td>-</td><td><?php echo _("D&eacute;veloppement d'un logiciel de facturation pour un abattoir irlandais sous Microsoft Access") ?></td></tr></table>
		</td>
		<td style='font-size:smaller;'>
<font class='section'><?php echo _("AUTRES EXPERIENCES") ?></font><br/>
<table>
<tr class='activite'><td>-</td><td>CCETT, Rennes, <?php echo _("Mars 1996 (6 mois)") ?>: 
<?php echo _("participation au d&eacute;veloppement d'un g&eacute;n&eacute;rateur pour la t&eacute;l&eacute;vision num&eacute;rique et test d'&eacute;quipements de la cha&icirc;ne DVB") ?></td></tr>
<tr class='activite'><td>-</td><td>ESRC, Cork, <?php echo _("Juillet 1995 (2 mois)") ?>: <?php echo _("analyse et conception d'un programme d'analyse financi&egrave;re en Visual Basic (VB)") ?></td></tr>
<tr class='activite'><td>-</td><td>ESRC, Cork, <?php echo _("Juillet 1994 (3 mois)") ?>: 
<?php echo _("Analyse et conception d'une application de visualisation de flux de donn&eacute;es &agrave; l'int&eacute;rieur d'une organisation, en VB") ?></td></tr>
<tr class='activite'><td>-</td><td>Fic Aplon, Saint Gr&eacute;goire, <?php echo _("Mars 1994 (2 mois)")?>: 
<?php echo _("D&eacute;veloppement d'un gestionnaire de comptabilit&eacute; pour &eacute;tablissements scolaires, sous Access") ?></td></tr>
<tr class='activite'><td>-</td><td>ESRC, Cork, <?php echo _("Avril 1993 (3 mois)") ?>: 
<?php echo _("Cr&eacute;ation d'une interface dans le domaine des syst&egrave;mes d'informations, en VB") ?></td></tr>
<tr class='activite'><td>-</td><td><?php echo _("Maintenance informatique de premier niveau et animation de formation &agrave; la F&eacute;d&eacute;ration des Oeuvres La&iuml;ques &agrave; Fort de France en 1997-1998") ?></td></tr>
<tr class='activite'><td>-</td><td><?php echo _("Moniteur Informatique Pour Tous &agrave; la Facult&eacute; des Sciences de Rennes en 1995") ?></td></tr>
<tr class='activite'><td>-</td><td><?php echo _("Pupitreur &agrave; l'I.U.T. de Lannion en 1992")?></td></tr>
</table>
<br/>

<font class='section'><?php echo _("FORMATION") ?></font><br/>
<table>
<tr class='activite'><td>-</td><td>DESS Informatique et ses applications &agrave; l'IFSIC (Rennes) en 1996</td></tr>
<tr class='activite'><td>-</td><td>DUT Information &agrave; Lannion en 1993</td></tr>
</table>
<br/>

<font class='section'><?php echo _("LANGUES") ?></font><br/>
<table>
<tr class='activite'><td>-</td><td><?php echo _("Anglais op&eacute;rationnel (10 mois en Irlande)") ?></td></tr>
<tr class='activite'><td>-</td><td><?php echo _("Notions d''Espagnol (1 mois en Am&eacute;rique du Sud)") ?></td></tr>
</table>
<br>

<font class='section'><?php echo _("INFORMATIONS COMPLEMENTAIRES") ?></font><br/>
<table>
<tr class='activite'><td>-</td><td><?php echo _("Permis A et B") ?></td></tr>
<tr class='activite'><td>-</td><td><?php echo _("Sports : plong&eacute;e sous-marine, course &agrave; pied, ski, surf, roller hockey") ?></td></tr>
<tr class='activite'><td>-</td><td><?php echo _("Passions : les voyages, la litt&eacute;rature, les anciennes civilisations") ?></td></tr>
</table>
		</td>
	</tr>
</table>

<?php
   EndOfPage('fre');
?>

</body>
</html>

