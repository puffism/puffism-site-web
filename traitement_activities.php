<?php

// connexion à la base de donnée
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=puffism;charset=utf8', 'root', '',
					array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}

	//lecture dans la base
	$mail=$_POST['user_mail'];
	$password=$_POST['user_password'];

	$rep = $bdd->query('SELECT * FROM activities');

	//$found = FALSE;
  while ($donnees = $rep->fetch())
	{
		if($donnees['user_mail'] == $mail)
		{
			if($donnees['user_password'] == $password)
			{
				$found = TRUE;
				//récupération des données utilisateurs
				$_SESSION['user_last_name'] = $donnees['user_last_name'];
				$_SESSION['user_first_name'] = $donnees['user_first_name'];
				$_SESSION['user_mail'] = $donnees['user_mail'];
				$_SESSION['user_id'] = $donnees['user_id'];

				//récuperation des photos
				//$_SESSION['photo1'] = $donnees['url_photo1'];
				//$_SESSION['photo2'] = $donnees['url_photo2'];
				//$_SESSION['photo3'] = $donnees['url_photo3'];

			//	header('Location: index.php');
			}
		}
	}
	if($found == FALSE) {echo '<div>Mauvais identifiants : veuillez réessayer.</div>' ;
	}
        $rep->closeCursor();

    ?>
