<?php 
session_start();
var_dump ($_SESSION);

// 1. INCLUSIONS CLASSES
// Dans un premier temps, nous allons inclure les fichiers de nos classes ici pour pouvoir les utiliser

require "conf/global.php";

spl_autoload_register(function ($class) {
    if(file_exists("models/$class.php")) {
        require_once "models/$class.php";
    } 
});

// 2. ROUTER
// Structure permettant d'appeler une action en fonction de la requête utilisateur

$root = isset($_REQUEST["root"])? $_REQUEST["root"] : "home";

switch($root) {

    case "home" : $include = showHome();
    break;
    case "membre" : $include = showMembre();
    break;
    case "insert_user" : insertUser();
    break;
    case "connect_user" : connectUser();
    break;
    case "deconnect" : deconnectUser();
    break;
    default : $include = showHome();
}

// 3. FONCTIONS DE CONTROLE
// Actions déclenchées en fonction du choix de l'utilisateur
// 1 choix = 1 fonction
function showHome() {
    if(isset($_SESSION["user"])) {
        header("Location:index.php?root=membre");
    }
    return "home.php";
}

function showMembre() {
    $user = new User();
    var_dump($user->selectAll());
    return "membre.php";
}
//$verif_pass = $_POST["user_password2"];
function insertUser() {

if(!empty($_POST["user_name"]) && !empty($_POST["user_mail"]) && $_POST["user_password"] === $_POST["user_password2"]){


    $user = new User();
    $user->setNickname($_POST["user_name"]);
    $user->setEmail($_POST["user_mail"]);
    $user->setPassword(password_hash($_POST["user_password"], PASSWORD_DEFAULT));
    $user->saveUser();
    }
    header("Location:index.php");
}

function connectUser() {
    
    if(!empty($_POST["user_name"]) && !empty($_POST["user_password"])) {
        $user = new User();
        $user->setNickname($_POST["user_name"]);
        $new = $user->verifyUser()?? false;
        if($new) {
            if(password_verify($_POST["user_password"], $new->password)) {
                $_SESSION["user"] = $new;
            }
        }
    }
    header("Location:index.php");
}

function deconnectUser() {
    unset($_SESSION["user"]);
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
