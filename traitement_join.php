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

$test = true;
//si les champs ne sont pas vides
if (!empty($_POST['user_password'])&& !empty($_POST['validate_password']&& !empty($_POST['user_mail'])&&!empty($_POST['user_last_name'])
&&!empty($_POST['user_first_name']))) {

  //si les mdp saisis sont les mêmes
  if ($_POST['user_password']==$_POST['validate_password']){
    $rep = $bdd->query('SELECT * FROM user');
    //je parcours ma table user
    while ($donnees = $rep->fetch())
    {
      //et que l'email et déjà utilisé
      if($_POST['user_mail']==$donnees['user_mail']) {
        $test = false;
        $erreur = "L'adresse e-mail est déjà utilisé. Veuillez fournir une adresse e-mail valide." ;
      }
    }
  }
  else {
    $test = false;
    $erreur = "Les mots de passe doivent être identiques";
  }

}
else {
  $test = false;
  $erreur = "Tous les champs doivent être remplis";
}
//on écrit dans la base de données

$req = $bdd->prepare('INSERT INTO user(user_first_name, user_last_name, user_gender, user_mail, user_password, user_phone,image_user_id)
VALUES (:user_first_name, :user_last_name, :user_gender, :user_mail, :user_password, :user_phone, :image_user_id)'); // préparation de la requête

if ($test==true) {
  // écriture dans la base de données
  $req->execute(array(
  'user_first_name' => $_POST['user_first_name'],
  'user_last_name' => $_POST['user_last_name'],
  'user_gender' => 'Male',
  'user_mail' => $_POST['user_mail'],
  'user_password' => $_POST['user_password'],
  'user_phone' => '0120563594',
  'image_user_id'=> '1'
  ));
  header('Location: login.php');
}


// retour vers une autre page
?>
