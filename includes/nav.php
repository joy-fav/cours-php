<ul>
	<li><a href="./index.php">Accueil</a></li>
	<li><a href="./contact.php">Contact</a></li>
	<li><a href="./contacts.php">Liste des contacts</a></li>
	<li><a href="./connexion.php">Connexion</a></li>
	<li> <?php echo 'bienvenue '.$_SESSION['utilisateur']['nom'].' '.$_SESSION['utilisateur']['prenom']?> </li>
</ul>