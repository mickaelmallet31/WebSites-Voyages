<?php
include 'library.php';

Entete( 'cv', 'fre' );
?>
<script type="text/javaScript">
<!--

function cache( att1, att2, att3, att4, att5, att6 )
{
    document.getElementById(att1).className='on';
    document.getElementById(att2).className='off';
    document.getElementById(att3).className='off';

    document.getElementById(att4).className='on';
    document.getElementById(att5).className='off';
    document.getElementById(att6).className='off';
}

//--></script>

<table style="width: 100%;">
	<tbody>
		<tr>
			<td style="width: 60%;">
				<p style="font-size: larger;">Mickaël MALLET</p> <br /> 25 rue des
				Charmes<br /> 31830 Plaisance Du Touch<br /> FRANCE<br /> Tél. :
				33.5.61.30.11.35 (répondeur)<br /> E-Mail : <a
				href="mailto:manou_mickael@yahoo.fr">manou_mickael@yahoo.fr</a><br />
			</td>
			<td style="width: 40%;" align="center">
				<p style="font-size: larger;">
					INGÉNIEUR<br />INFORMATICIEN
				</p>
			</td>
		</tr>
	</tbody>
</table>
<p>&nbsp;</p>

<div
	style="position: relative; height: 50px; width: 1000px;">
	<!-- ERREUR LIGNE 350 DE nsBrowserStatusHandler.js C'EST SUREMENT JUSTE AU DESSUS -->

	<div id="onglet1" class="onglet1"
		onclick="cache( 'section1', 'section2', 'section3', 'num1', 'num2', 'num3' );">
		<br /> <a class="on" id="num1" title=" Formation "> Formation </a>
	</div>
	<div id="onglet2" class="onglet2"
		onclick="cache( 'section2', 'section1', 'section3', 'num2', 'num1', 'num3' );">
		<br /> <a class="off" id="num2" title=" Expérience Professionnelle ">
			Expérience Professionnelle </a>
	</div>
	<div id="onglet3" class="onglet3"
		onclick="cache( 'section3', 'section1', 'section2', 'num3', 'num1', 'num2' );">
		<br /> <a class="off" id="num3" title=" Information Complémentaire ">
			Information Complémentaire </a>
	</div>
</div>

<div class='cv'>

	<div id="section1" class="off">
		<table>
			<tbody>
				<tr>
					<td style="width: 20px;"></td>
					<td>
						<p class="cv">Diplômes :</p>
						<ul>
							<li>Juin 1996 : D.E.S.S. Informatique et Ses Applications,
								Institut de Formation Supérieure en Informatique et
								Communication (IFSIC), Rennes</li>
							<li>Juin 1995 : Maîtrise d'Informatique, IFSIC, Rennes</li>
							<li>Juin 1994 : Licence d'Informatique, IFSIC, Rennes</li>
							<li>Juin 1993 : D.U.T. Informatique, I.U.T. Lannion, Lannion</li>
						</ul>

						<p class="cv">Langages :</p>
						<ul>
							<li>C++, HTML, Visual Basic, Access, Turbo Pascal, Fox Pro, SQL,
								8086, Cobol, Fortran, CAML, Signal, Lex, Yacc, VHDL, CSP</li>
						</ul>

						<p class="cv">Environnements :</p>
						<ul>
							<li>Windows (NT, 95, 3.11), Unix, MS-DOS, Mac OS</li>
						</ul>

						<p class="cv">Langues :</p>
						<ul>
							<li>Anglais courant (10 mois de stages en Irlande)</li>
							<li>Notions d'Espagnol (séjour d'un mois en Amérique du Sud)</li>
						</ul>
					</td>
				</tr>
			</tbody>
		</table>
		<br />
	</div>

	<!-- SCMP -->

	<div id="section2" class="on">
		<table>
			<tbody>
				<tr>
					<td style="width: 20px;"></td>
					<td>
						<p class="cv">Motorola, Toulouse :</p>
						<ul>
							<li>Sept 2011-Décembre 2012: amélioration des outils de tests
								automatiques (environnement sous Linux, contrôle par Arduino,
								Scripts en Python, Commands GPIB pour piloter les callbox)</li>
							<li>Sept 2006-Sept 2011: responsable gestion configuration des
								composants STACK 2G/3G et LTE (outils Clearcase puis GIT)</li>
							<li>Janvier 2004-Sept 2006: responsable gestion configuration du
								composant STACK 2G (outil Clearcase)</li>
							<li>Juillet 2002-Décembre 2003: gestion configuration du
								composant STACK 2G (outil Clearcase)</li>
							<li>Dec 2000-Juin 2002: toujours dans la section PCS
								(développement d'un simulateur Layer 1 pour GPRS-EDGE-UMTS)</li>
						</ul>

						<p class="cv">Logiqual, Toulouse :</p>
						<ul>
							<li>Oct 99 : prestataire de service auprès de Motorola dans la
								section PCS (développement d'un simulateur Layer 1 pour GPRS)
								(14 mois)</li>
						</ul>

						<p class="cv">Cap Gemini, Rennes :</p>
						<ul>
							<li>Mars 1998 : prestataire de service auprès de Mitsubishi
								Electric France, GSM Research &amp; Development dans l'équipe de
								SIMToolkit (18 mois)</li>
						</ul>

						<p class="cv">Assistance Informatique des D.O.M., Direction des
							Services Fiscaux, Fort de France :</p>
						<ul>
							<li>Octobre 1996 : Assistance informatique (installations,
								formations et développements logiciels, installations et
								réparations matérielles) durant le service national ;
								développement du réseau Intranet (aide technique - 16 mois)</li>
						</ul>

						<p class="cv">Centre Commun d'Etudes de Télédiffusion et
							Télécommunication, Cesson Sévigné :</p>
						<ul>
							<li>Mars 1996 : Participation au développement d'un générateur
								pour la télévision numérique et test d'équipements de la chaîne
								DVB (6 mois)</li>
						</ul>

						<p class="cv">Executive Systems Research Centre, University
							College Cork, Cork :</p>
						<ul>
							<li>Juillet 1995 : Analyse et conception d'un programme d'analyse
								financière en Visual Basic (VB) (2 mois)</li>
							<li>Juillet 1994 : Analyse et conception d'une application de
								visualisation de flux de données à l'intérieur d'une
								organisation, en VB (3 mois)</li>
							<li>Avril 1993 : Création d'une interface dans le domaine des
								systèmes d'informations, en VB (3 mois)</li>
						</ul>

						<p class="cv">Fic Aplon, Saint Grégoire :</p>
						<ul>
							<li>Mars 1994 : Développement d'un gestionnaire de comptabilité
								pour établissements scolaires, sous Access (2 mois)</li>
						</ul>

						<p class="cv">Seabrook Research Limited, Cork :</p>
						<ul>
							<li>Juillet 1993 : Réalisation d'un gestionnaire de facturation
								pour un abattoir, sous Access (2 mois)</li>
						</ul>

						<p class="cv">Autres expériences :</p>
						<ul>
							<li>Maintenance informatique de premier niveau et animation de
								formation à la Fédération des Oeuvres Laïques à Fort de France
								en 1997-1998</li>
							<li>Moniteur Informatique Pour Tous à la Faculté des Sciences de
								Rennes en 1995</li>
							<li>Pupitreur à l'I.U.T. de Lannion en 1992</li>
						</ul>

					</td>
				</tr>
			</tbody>
		</table>
		<br />
	</div>

	<!-- GCF -->

	<div id="section3" class="off">
		<ul>
			<li>Permis A, B</li>
			<li>Loisirs : les voyages (Irlande, Amérique du Sud, les îles de la
				Caraïbe), les civilisations (Egypte, l'île de Pâques, les Incas),
				littérature (romans policiers et fantastiques, revues scientifiques)</li>
			<li>Sports : badminton, escalade, snow-board, ski, la course à pied
				(marathons), le VTT, le street hockey, la plongée sous-marine
				(niveau 3)</li>
		</ul>
		<br />
	</div>
</div>
<br/>
<br/>
<br/>
<?php
   EndOfPage('fre');
?>

</body>
</html>

