<?php
	include 'library.php';

	Entete( 'guestbook', 'fre' );

	if( ! empty( $_POST['nom'] ) )
  {
    UpdateGuestBook( $_POST['nom'], $_POST['mail'], $_POST['message'] );
  }

  function UpdateGuestBook( $nomHTML, $mailHTML, $messageHTML )
  {
    //Ouverture du fichier en &eacute;criture
    $fp = fopen("guestbook.txt", 'a');

    //On convertit les caracteres html
    $nom = htmlspecialchars($nomHTML);
    $mail = htmlspecialchars($mailHTML);
    $message = stripslashes(nl2br(htmlentities($messageHTML)));
    $d = date ( "d/m/Y H:i:s" );

    $page = "";
    $lemail = "<a href=\"mailto:$mail\">$mail</a>";
    $page .= "<b>De $nom</b> (Mail: ".$lemail.") le $d<br>Message : $message<br><hr>\n";

    //On rajoute le message
    fwrite($fp,"$page" ,strlen("$page"));

    //fermeture du fichier
    fclose($fp);
  }
?>

<h2>Ajouter un commentaire</h2>
<form method="post" action="guestbook.php" onSubmit='if ( this.nom.value.length < 2 ) { return false ;}' >
<table>
<tr><td>Nom :</td>
    <td><input type=text name=nom size=25 ></td>
<td rowspan=2><input type=submit value=Envoyer></td></tr>
<tr><td>Mail :</td>
    <td><input type=text name=mail size=25 ></td></tr>
<tr><td>Message:</td><td colspan=2>
        <textarea name=message rows=4 cols=47></textarea>
    </td></tr>
</table>
</form>

<h2>Commentaires</h2>
<?php include("guestbook.txt"); ?>

<?php
   EndOfPage('fre');
?>

</body>
</html>
