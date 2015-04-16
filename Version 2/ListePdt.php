<?php
	mysql_connect(SERVEUR, USER, PASSWORD);
	//Cette fonction permet de réaliser la connexion à un serveur MySql.
	//Elle retourne un identifiant de connexion ou false en cas d'échec.
	mysql_select_db(BASE DE DONNEES, ID, CONNEXION);
	//Cette fonction permet de sélectionner une base de données 
	//sur le serveur MySql auquel on est connecté.
	mysql_query(REQUETE SQL, ID CONNEXION);
	//Cette fonction exécute la requête SQL passée en paramètre 
	//sous la forme d'une chaîne de caractères. 
	//Elle retourne false en cas d'erreur, 
	//un identifiant de résultat en cas de succès.
	mysql_fetch_assoc()ID RESULTAT);
	// Cette fonction retourne un n-uplet du jeu d'enregistrements 
	//résultat, ce n-uplet est retourné sous la forme d’un tableau 
	//associatif (un champ par case). La fonction retourne 
	//FAUX si aucun n-uplet n’a pû être trouvé 
	//(fin du jeu d’enregistrements).
	mysql_close(ID CONNEXION);
	// fermeture de la connexion.
?>