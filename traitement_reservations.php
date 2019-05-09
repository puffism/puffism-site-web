<?php
// Starting session
session_start();
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

//on écrit dans la base de données
$req = $bdd->prepare('INSERT INTO reservation(reservation_id, activity_id, reservation_date_time, user_id)
VALUES (:reservation_id, :activity_id, :reservation_date_time, :user_id)'); // préparation de la requête
  // écriture dans la base de données
$req->execute(array(
  'reservation_id' => NULL,
  'activity_id' => $_SESSION['temp_activity_id'],
  'reservation_date_time' => '2019-05-10 10:34:09',
  'user_id' => $_SESSION['user_id']
  ));

  header('Location: profile_t.php');

// retour vers une autre page
?>
