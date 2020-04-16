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

function insertUser() {
    $user = new User();
    $user->setNickname($_POST["user_name"]);
    $user->setEmail($POST["user_mail"]);
    $user->setPassword($_POST["user_password"]);

    $user->saveUser();

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
<?php require $include; ?>
</body>
</html>
