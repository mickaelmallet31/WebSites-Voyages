<?php
include 'library.php';

Entete( 'index', 'fre' );
?>
<table style='width:100%'>
	<tr valign="top">
		<td>
			<table style='width:100%'>
				<tr valign="middle">
					<td style="width: 150px"><img src="images/palmtree.gif" width="100"
						alt="Image Palmier" height="100" />
					</td>
					<td align="center">
						<h1>
							Bienvenue sur <br /> <br /> <a
								style="color: red; text-decoration: none"
								href="http://mickael.mallet.free.fr/">http://mickael.mallet.free.fr</a>
						</h1>
					</td>
				</tr>
			</table>
			<table style='width:100%'>
				<tr>
					<td>Mon Curriculum Vitae se trouve <a href="cv.php">l&agrave;</a>.<br />
						<br /> Voici mes hobbies :
						<table style='width:100%; border:0px'>
							<tr>
								<td style="width: 50px"></td>
								<td><ul>
										<li><a href="travel.php">Voyages</a></li>
									</ul></td>
							</tr>
						</table> <br /> Voici les sports que je pratique plus ou moins
						r&eacute;guli&egrave;rement :
						<table style='width:100%; border:0px'>
							<tr>
								<td style="width: 50px"></td>
								<td style="width: 400px">
									<ul>
										<li><a href="subdive.php">Plong&eacute;e sous-marine</a></li>
										<li>V.T.T.</li>
										<li><a href="running.php">Course &agrave; pied</a></li>
										<li><a href="roller.php">Roller</a></li>
									</ul>
								</td>
								<td><img src="images/angelCLR.png" alt="Dessin poisson" />
								</td>
								<td>
									<iframe src="http://rcm-fr.amazon.fr/e/cm?t=voyageatraver-21&o=8&p=8&l=as1&asins=B00ANMWJ36&ref=tf_til&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=000000&bg1=FFFFFF&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>

								</td>
							</tr>
						</table> <br /> Liens utiles : <a href="links.php">ici</a><br /> <br />
					</td>
				</tr>
			</table>

		</td>
		<td align="right" style="width: 100px"><?php
	#GetPubBanner( "index", 2 );
?>
		</td>
	</tr>
</table>

<?php
   EndOfPage('fre');
?>
</body>
</html>
