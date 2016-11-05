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
				<p style="font-size: larger;">Micka�l MALLET</p> <br /> 25 rue des
				Charmes<br /> 31830 Plaisance Du Touch<br /> FRANCE<br /> T�l. :
				33.5.61.30.11.35 (r�pondeur)<br /> E-Mail : <a
				href="mailto:manou_mickael@yahoo.fr">manou_mickael@yahoo.fr</a><br />
			</td>
			<td style="width: 40%;" align="center">
				<p style="font-size: larger;">
					ING�NIEUR<br />INFORMATICIEN
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
		<br /> <a class="off" id="num2" title=" Exp�rience Professionnelle ">
			Exp�rience Professionnelle </a>
	</div>
	<div id="onglet3" class="onglet3"
		onclick="cache( 'section3', 'section1', 'section2', 'num3', 'num1', 'num2' );">
		<br /> <a class="off" id="num3" title=" Information Compl�mentaire ">
			Information Compl�mentaire </a>
	</div>
</div>

<div class='cv'>

	<div id="section1" class="off">
		<table>
			<tbody>
				<tr>
					<td style="width: 20px;"></td>
					<td>
						<p class="cv">Dipl�mes :</p>
						<ul>
							<li>Juin 1996 : D.E.S.S. Informatique et Ses Applications,
								Institut de Formation Sup�rieure en Informatique et
								Communication (IFSIC), Rennes</li>
							<li>Juin 1995 : Ma�trise d'Informatique, IFSIC, Rennes</li>
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
							<li>Notions d'Espagnol (s�jour d'un mois en Am�rique du Sud)</li>
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
							<li>Sept 2011-D�cembre 2012: am�lioration des outils de tests
								automatiques (environnement sous Linux, contr�le par Arduino,
								Scripts en Python, Commands GPIB pour piloter les callbox)</li>
							<li>Sept 2006-Sept 2011: responsable gestion configuration des
								composants STACK 2G/3G et LTE (outils Clearcase puis GIT)</li>
							<li>Janvier 2004-Sept 2006: responsable gestion configuration du
								composant STACK 2G (outil Clearcase)</li>
							<li>Juillet 2002-D�cembre 2003: gestion configuration du
								composant STACK 2G (outil Clearcase)</li>
							<li>Dec 2000-Juin 2002: toujours dans la section PCS
								(d�veloppement d'un simulateur Layer 1 pour GPRS-EDGE-UMTS)</li>
						</ul>

						<p class="cv">Logiqual, Toulouse :</p>
						<ul>
							<li>Oct 99 : prestataire de service aupr�s de Motorola dans la
								section PCS (d�veloppement d'un simulateur Layer 1 pour GPRS)
								(14 mois)</li>
						</ul>

						<p class="cv">Cap Gemini, Rennes :</p>
						<ul>
							<li>Mars 1998 : prestataire de service aupr�s de Mitsubishi
								Electric France, GSM Research &amp; Development dans l'�quipe de
								SIMToolkit (18 mois)</li>
						</ul>

						<p class="cv">Assistance Informatique des D.O.M., Direction des
							Services Fiscaux, Fort de France :</p>
						<ul>
							<li>Octobre 1996 : Assistance informatique (installations,
								formations et d�veloppements logiciels, installations et
								r�parations mat�rielles) durant le service national ;
								d�veloppement du r�seau Intranet (aide technique - 16 mois)</li>
						</ul>

						<p class="cv">Centre Commun d'Etudes de T�l�diffusion et
							T�l�communication, Cesson S�vign� :</p>
						<ul>
							<li>Mars 1996 : Participation au d�veloppement d'un g�n�rateur
								pour la t�l�vision num�rique et test d'�quipements de la cha�ne
								DVB (6 mois)</li>
						</ul>

						<p class="cv">Executive Systems Research Centre, University
							College Cork, Cork :</p>
						<ul>
							<li>Juillet 1995 : Analyse et conception d'un programme d'analyse
								financi�re en Visual Basic (VB) (2 mois)</li>
							<li>Juillet 1994 : Analyse et conception d'une application de
								visualisation de flux de donn�es � l'int�rieur d'une
								organisation, en VB (3 mois)</li>
							<li>Avril 1993 : Cr�ation d'une interface dans le domaine des
								syst�mes d'informations, en VB (3 mois)</li>
						</ul>

						<p class="cv">Fic Aplon, Saint Gr�goire :</p>
						<ul>
							<li>Mars 1994 : D�veloppement d'un gestionnaire de comptabilit�
								pour �tablissements scolaires, sous Access (2 mois)</li>
						</ul>

						<p class="cv">Seabrook Research Limited, Cork :</p>
						<ul>
							<li>Juillet 1993 : R�alisation d'un gestionnaire de facturation
								pour un abattoir, sous Access (2 mois)</li>
						</ul>

						<p class="cv">Autres exp�riences :</p>
						<ul>
							<li>Maintenance informatique de premier niveau et animation de
								formation � la F�d�ration des Oeuvres La�ques � Fort de France
								en 1997-1998</li>
							<li>Moniteur Informatique Pour Tous � la Facult� des Sciences de
								Rennes en 1995</li>
							<li>Pupitreur � l'I.U.T. de Lannion en 1992</li>
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
			<li>Loisirs : les voyages (Irlande, Am�rique du Sud, les �les de la
				Cara�be), les civilisations (Egypte, l'�le de P�ques, les Incas),
				litt�rature (romans policiers et fantastiques, revues scientifiques)</li>
			<li>Sports : badminton, escalade, snow-board, ski, la course � pied
				(marathons), le VTT, le street hockey, la plong�e sous-marine
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

