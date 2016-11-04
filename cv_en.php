<?php
	include 'library.php';

	Entete( 'cv', 'fre' );
?>
<style>
	td {
		font-size : 20px;
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
<div style='width:1024px;'>
<table width='100%' cellpadding='10' cellspacing='0'>
	<tr>
		<td>
			Mickael MALLET<br>
			25 rue des charmes<br>
			31830 Plaisance du Touch<br>
			Mobile phone: 06 14 86 23 03<br/>
			<br/>
			Email: <a href='mailto:manou_mickael@yahoo.fr'>manou_mickael@yahoo.fr</a><br/>
			LinkedIn: <a href='http://www.linkedin.com/in/mickaelmallet'>http://www.linkedin.com/in/mickaelmallet</a><br>
<?php
			echo "Resume in PDF format: <a href='cv_en.pdf'>click here</a>";
?>
		</td>
		<td align='center'>
			<div style='background-color:lightgreen; font-size:18px; font-width:bolder;'><br/>CONFIGURATION MANAGEMENT / DEVELOPMENT<br>ENGINEER<br/><br/></div>
		</td>
	</tr>
</table>

<table width='100%' cellpadding='10' cellspacing='0'>
	<tr valign='top'>
		<td width='70%' style='background-color: #F9B7FF; border-width: 1px; border-style: solid;'>
			<font class='section'>PROFESSIONAL EXPERIENCES</font><br/>
<font class='activite'>Validation test automation tool development</font><br/>
<font class='lieu'>Motorola Mobility, september 2011 - Now (1 year 5 months), 
Toulouse</font><br/>
<table class='activite'><tr class='activite'><td>-</td><td>
Improvment of a tool written in Python to automate the sanity tests used to validate the modem release, by controlling the phone with an Arduino box and logic analyzers through GPIB commands</tr>
<tr class='activite'><td>-</td><td>
Management of modem releases (GIT used as configuration management tool)
</tr>
</table>
<br/>

<font class='activite'>Configuration management lead of the LTE/WCDMA/GSM STACK components</font><br/>
<font class='lieu'>Motorola Mobile Devices, september 2004 - september 2011 (7 years 1 
mont), Toulouse</font><br/>
<table class='activite'><tr class='activite'><td>-</td><td>
Lead of the configuration management for the LTE/WCDMA/GSM STACK component(until 7 peoples in the team : 2 in USA, 2 in India and 3 in France) under Clearcase first then under GIT</td></tr>
<tr class='activite'><td>-</td><td>Development of tools/web interfaces to control the propagation of change requests on the several mainlines of the component (CGI scripts in Perl</tr>
<tr class='activite'><td>-</td><td>Quality control of the release done by Klocwork use for static defects and Purify for the dynamic defects</td></tr>
<tr class='activite'><td>-</td><td>Use of simulation tool/live sanity tests to validate the component behaviour</td></tr>
</table>
<br/>

<font class='activite'>Configuration management lead of the 2G STACK component</font><br/>
<font class='lieu'>Motorola Mobile Devices, juillet 2002 - september 2004 (2 years 3 months), 
Toulouse</font><br/>
<table class='activite'><tr class='activite'><td>-</td><td>Configuration management lead of the 2G STACK component under Clearcase</td></tr></table>
<br/>

<font class='activite'>Simulation / test tool development</font><br/>
<font class='lieu'>Motorola Mobile Devices, october 1999 - june 2002 (2 years 9 months), 
Toulouse</font><br/>
<table class='activite'><tr class='activite'><td>-</td><td>
Development in C language of the tool to simulate the GSM protocol to communicate with the 2G STACK component. Tool under Unix</td></tr></table>
<br/>

<font class='activite'>GSM Protocol developer</font><br/>
<font class='lieu'>Mitsubishi, february 1998 - september 1999 (1 year 8 months), Rennes</font><br/>
<table class='activite'>
<tr class='activite'><td width='5'>-</td><td>Development in C language of the Call Control protocol task in GSM norm</td></tr>
</table>
<br/>

<font class='activite'>Technical support</font><br/>
<font class='lieu'>Service Informatique des Imp&ocirc;ts, october 1996 - january 1998 (1 year 4 
months), Fort de France</font><br/>
<table class='activite'><tr class='activite'><td>-</td><td>Technical support for the 4 income taxes centers of Martinique (Western Caraibean)
(in place of my national service)</td></tr></table>
<br/>

<font class='activite'>Invoice software development</font><br/>
<font class='lieu'>Seabrook Research Limited, july - august 1993 (2 mois), Cork (Ireland)</font><br/>
<table class='activite'><tr class='activite'><td>-</td><td>Development in Microsoft Access of an invoice software for a slaughterhouse</td></tr></table>
		</td>
		<td style='font-size:smaller;'>
<font class='section'>OTHER EXPERIENCES</font><br/>
<table>
<tr class='activite'><td>-</td><td>CCETT, Rennes, March 1996 (6 months): 
participate to a stream generator development for the numeric television and test equipments of the DVB chain</td></tr>
<tr class='activite'><td>-</td><td>ESRC, Cork, July 1995 (2 months): 
analyze and development of a financial analyze software written in Visual Basic</td></tr>
<tr class='activite'><td>-</td><td>ESRC, Cork, July 1994 (3 months): 
analyze and development of a software to visualize the dataflow within an organization, written in Visual Basic</td></tr>
<tr class='activite'><td>-</td><td>Fic Aplon, Saint Gr&eacute;goire, March 1994 (2 monts): 
development of a accounting software for school of education, with Microsoft Access</td></tr>
<tr class='activite'><td>-</td><td>ESRC, Cork, April 1993 (3 months): 
creation of an interface for the information system area in Visual Basic</td></tr>
</table>
<br/>

<font class='section'>EXAMENS</font><br/>
<table>
<tr class='activite'><td>-</td><td>DESS in Computer Science at IFSIC school (Rennes) in 1996</td></tr>
<tr class='activite'><td>-</td><td>DUT in Computer Science at Lannion in 1993</td></tr>
</table>
<br/>

<font class='section'>LANGUAGES</font><br/>
<table>
<tr class='activite'><td>-</td><td>English : Professional working proficiency (10 months in Ireland)</td></tr>
<tr class='activite'><td>-</td><td>Spanish : elementary proficiency(1 month in South America)</td></tr>
</table>
<br>

<font class='section'>MISCELLANEOUS</font><br/>
<table>
<tr class='activite'><td>-</td><td>Car and motorbike driving licences</td></tr>
<tr class='activite'><td>-</td><td>Sports : scuba diving, running, ski, surf, roller hockey</td></tr>
<tr class='activite'><td>-</td><td>Hobbies: travelling, literature, the old civilizations</td></tr>
</table>
		</td>
	</tr>
</table>

<?php
   EndOfPage('fre');
?>

</body>
</html>

