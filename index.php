<?php 
// 1. INCLUSIONS CLASSES
// Dans un premier temps, nous allons inclure les fichiers de nos classes ici pour pouvoir les utiliser



require_once "User.php";

// 2. ROUTER
// Structure permettant d'appeler une action en fonction de la requête utilisateur

$root = isset($_REQUEST["root"])? $_REQUEST["root"] : "home";

switch($root) {

    case "home" : $include = showHome();
    break;
    case "insert_user" : insertUser();
    break;
    default ; $include = showHome() ;
}

// 3. FONCTIONS DE CONTROLE
// Actions déclenchées en fonction du choix de l'utilisateur
// 1 choix = 1 fonction
function showHome() {
    return "home.php";
}
//$verif_pass = $_POST["user_password2"];
function insertUser() {

if(!empty($_POST["user_name"]) && !empty($_POST["user_mail"]) && !empty($_POST["user_password"]) && $_POST["user_password"] === $_POST["user_password2"]){


    $user = new User();
    $user->setNickname($_POST["user_name"]);
    $user->setEmail($_POST["user_mail"]);
    $user->setPassword(password_hash($_POST["user_password"], PASSWORD_DEFAULT));

    $user->saveUser();
    }
    header("Location:index.php");
}




// 4. TEMPLATE
// Affichage du système de templates HTML

?>



<!DOCTYPE html>
<html lang=fr>
<head>
<meta charset="utf-8">
<title>Page d'accueil</title>
</head>
<body>
<h1>Ma Todolist.</h1>
<?php include $include; ?>
</body>
</html>
