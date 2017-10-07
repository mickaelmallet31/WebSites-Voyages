<?php
	include 'library.php';

  Entete( 'bric_a_brac', 'fre' );
?>
<style>
a { 
	text-decoration: none;
}
.details,
.show,
.hide:target {
  display: none;
}
.hide:target + .show,
.hide:target ~ .details {
  display: block;
}
.details { margin-left: 30px; }

</style>

<p>
Dans cette page j'ai voulu r&eacute;unir des informations dont j'ai eu besoin un moment ou &agrave; un autre.<br/>
Si cela peut &ecirc;tre utile &agrave; d'autres personnes alors tant mieux.</p>
<br/>
<div>
	<a id="hide1" href="#hide1" class="hide"><h2>+ Montage d'un attache remorque sur une Renault M&eacute;gane Scenic 1 phase 2</h2></a>
	<a id="show1" href="#show1" class="show"><h2>- Montage d'un attache remorque sur une Renault M&eacute;gane Scenic 1 phase 2</h2></a>
	<div class="details">
		<p>La voiture commence &agrave; &ecirc;tre vieille (ann&eacute;e 2003) mais elle peut encore servir - elle n'a que 160000km.
		Alors j'ai voulu installer une boule d'attelage pour emmener les d&eacute;chets verts ou r&eacute;cup&eacute;rer du compost.
		</p>
		<p>
		J'ai trouv&eacute; une boule d'attelage chez <a href="https://www.google.fr/search?q=cazenave+colomiers&ie=utf-8&oe=utf-8&client=firefox-b&gfe_rd=cr&ei=_BduWI24M5CCaJCxkogF">Cazenave</a> &agrave; Colomiers.<br>
		Cela m'a cout&eacute; 70 euros d&eacute;mont&eacute; (les clients n'ont plus acc&egrave;s au parc &agrave; cause des vols).
		Pour la petite histoire, j'ai d&ucirc; y aller 2 fois car le gars qui l'avait d&eacute;mont&eacute; avait oubli&eacute; des &eacute;querres utiles pour le montage sur l'ancienne voiture - j'ai gal&eacute;r&eacute; pendant quelques heures pour comprendre qu'il manquait ces fameuses &eacute;querres.
		</p>

		<p>
		Ensuite vient l'&eacute;tape de fixation dans les longerons. Faut d'abord trouver les fameux trous cach&eacute;s par du mastic. L&agrave; aussi, j'ai gal&eacute;r&eacute;. Donc n'h&eacute;sitez pas &agrave; positionner l'attelage dessous pour voir/sentir o&ugrave; devraient &ecirc;tre les trous. Cela vous &eacute;vitera de &quot;percer&quot; les mauvais trous: il y a 2 paires de trous par longeron. Et bien s&ucirc;r j'ai perc&eacute; les mauvais en premier :(</p>
		<p>
		Pour la suite, j'avais d&eacute;mont&eacute; le pare-choc arri&egrave;re. A priori cela est possible de monter l'attelage sans d&eacute;monter le pare-choc - d'apr&egrave;s ce que j'ai lu sur Internet. 
		Pas de probl&egrave;me particulier une fois qu'on sait o&ugrave; va chaque pi&egrave;ce. 
		</p>
		<p>
		Ca y est, l'attelage est mont&eacute;. Reste &agrave; s'occuper du faisceau &eacute;lectrique.
		</br>
		Sur l'attelage que j'ai r&eacute;cup&eacute;r&eacute;, les bouts du faisceau &eacute;taient coup&eacute;s donc fallait refaire tout le branchement c&ocirc;t&eacute; voiture.
		</p>

		<p>
		Voici le sch&eacute;ma de branchement de la prise d'attache remorque:<br/>
		<img style='margin-left: 30px;' border='1' src="images/branche_norme_dim_iso_1724.jpg"/><br/>
		(source <a href="http://www.mecanorem.com/infos-utiles/entretien/#Eclairage">http://www.mecanorem.com/infos-utiles/entretien/#Eclairage</a>)
		</p>

		<p>
		Voici comment j'ai branch&eacute; sur le feu arri&egrave;re gauche le c&acirc;ble 7 fils pour attache remorque:<br/>
		<img style='margin-left: 30px;' border='1' src="images/eclairage_arriere_gauche2.jpg"/>
		<br/>
		Avec sur les dominos:<ul>
			<li>n&deg;1 : la masse donc le fil #3 couleur blanc de la prise remorque</li>
			<li>n&deg;4 : le feu de route gauche donc le fil #7 couleur noir de la prise remorque</li>
			<li>n&deg;5 : le feu stop donc le fil #6 couleur rouge de la prise remorque</li>
			<li>n&deg;6 : le clignotant gauche donc le fil #1 couleur jaune de la prise remorque</li>
		</ul>

		<br/>
		Sur le feu droite, m&ecirc;me technique avec 2 dominos puisqu'il reste 2 fils &agrave; brancher:<ul>
			<li>n&deg;5 : le feu de route droit donc le fil #5 couleur marron de la prise remorque</li>
			<li>n&deg;6 : le clignotant droit donc le fil #4 couleur vert de la prise remorque</li>
		</ul>
		</p>

		<p>
		<br/>
		Voil&agrave;. Ce tutoriel est fini. N'h&eacute;sitez &agrave; me contacter si vous voulez plus de d&eacute;tails sur certaines parties.
		<br/>
		<br/>
		</p>
	</div>
</div>
<br/>
<div>
	<a id="hide2" href="#hide2" class="hide"><h2>+ Code parrainage 1001pact</h2></a>
	<a id="show2" href="#show2" class="show"><h2>- Code parrainage 1001pact</h2></a>
	<div class="details" style="margin-left: 30px;">
		<p>
		J'ai d&eacute;couvert <a href="https://1001pact.com">1001pact</a> quand je me suis renseign&eacute; sur le project <a href="https://1001pact.com/fiche-projet/alg-and-you/presentation">Alg&amp;you</a> pour cr&eacute;er des prot&eacute;ines v&eacute;g&eacute;tales de fa&ccedil;on autonome.<br/>
		<br/>
		En effet, <a href="https://1001pact.com">1001PACT</a> est un site de financement participatif d&eacute;di&eacute; aux projets &agrave; fort impact social et environnemental.
		Apr&egrave;s avoir particip&eacute; &agrave; ce projet, 1001pact m'a fourni un code parrainage: <font color='red'><b>IMPACT-3304</b></font>
		</p>
		<p>
		Tout ce que tu as a faire c&rsquo;est t&rsquo;inscrire, trouver le projet que tu souhaites soutenir et entrer mon code de r&eacute;duction lors de ton investissement. N'h&eacute;site pas &agrave; les contacter pour toute question (01 40 35 47 83 ; communication@1001pact.com)
		<br/>
		<br/>
		</p>
	</div>
</div>

<br/>
<br/>

<?php
	EndOfPage('fre');
?>

</body>
</html>
