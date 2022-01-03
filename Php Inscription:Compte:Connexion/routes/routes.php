<?php

Flight::route('/', function(){
    Flight::render("index.tpl",array());
});

Flight::route('GET /register', function(){

    Flight::render("register.tpl",array());

});
// Methode Post de la page register.tpl
// Verification multiple des valeurs
// Connection + envoi vers bdd
Flight::route('POST /register', function()
{
    $messages=array();
    //Recupération  des données
    $data = Flight::request()->data;
    // Verification Saisie : champs remplis , adresse email correcte non dans la table , mot depasse mini 8 caract
    if(empty($data->nom))
    {
        $messages['nom'] = "le nom doit être rempli";
    }
    if(empty($data->email))
    {
        $messages['email'] = "l'email doit être rempli";
    }
    if(strlen($data->psw) < 8)
    {
        $messages['psw'] = "le password doit être rempli avec plus de 8 catactères";
    }
    if(!(filter_var($data->email, FILTER_VALIDATE_EMAIL)))
    {
        $messages['email'] = "l'email n'est pas correct";
    }
    if(empty($data->ville))
    {
        $messages['ville'] = "la ville doit être rempli";
    }
    if(empty($data->pays))
    {
        $messages['pays'] = "le pays doit être rempli";
    }

    require('../includes/pdo.php');
    $db = new PDO("mysql:host=$dbHost;port=$dbPort;dbname=$dbName;charset=utf8", "$dbUser", "$dbPassword");
    $stmt = $db -> prepare("SELECT email FROM utilisateur WHERE utilisateur.email = :email");
    $stmt -> execute(array(':email'=>$data->email));

    if($stmt->rowCount() > 0)
    {
        $messages['email'] = "l'email est déjà utilise";
    }
    if(empty($messages)) // tous les conditions sont réunni redirection /success
    {
        $stmt = $db -> prepare("insert into utilisateur values(:nom,:email,:psw,:ville,:pays)");
        $stmt -> execute(array(':nom'=>$data->nom,':email'=>$data->email,':psw'=>password_hash($data->psw, PASSWORD_BCRYPT),':ville'=>$data->ville,':pays'=>$data->pays));
        Flight::redirect('/success');
    }
    else
    {
        Flight::render("register.tpl", array('messages'=>$messages, 'data'=>$data));
    }  
});
Flight::route('GET /fichier', function(){
    Flight::render("fichier.tpl",array());
});

Flight::route('GET /login', function(){
    Flight::render("login.tpl",array());
});
// Methode Post de la page login.tpl
// Verification multiple des valeurs
// Connection + envoi vers bdd
Flight::route('POST /login', function()
{
    $messages=array();
    $data = Flight::request()->data;

    if(empty($data->email))
    {
        $messages['email'] = "l'email doit être rempli";
    }
    if(strlen($data->psw) < 8)
    {
        $messages['psw'] = "le password doit être rempli avec plus de 8 catactères";
    }
    // connexion bdd a partir du PDO
    require('../includes/pdo.php');
    $db = new PDO("mysql:host=$dbHost;port=$dbPort;dbname=$dbName;charset=utf8", "$dbUser", "$dbPassword");
    $result = $db -> prepare("SELECT email FROM utilisateur WHERE utilisateur.email = :email");
    $result -> execute(array(':email'=>$data->email));
    if ($result->rowCount()> 0)
    {
        $motDePasse = $db->prepare("SELECT *FROM utilisateur WHERE utilisateur.email = :email");
        $motDePasse -> execute(array(':email' => $data ->email));
        $log = $motDePasse -> fetch();
        // Verification du mot de passe de la bdd hashé
        if(password_verify($data->psw,$log['motdepasse']))
        {
            $_SESSION['user'] = array(
                'nom' => $log['nom']);
            Flight::redirect('/');
        }
        else
        {
            $messages['psw'] = "Mauvais mot de passe";
        }
    }
    else
    {
        $messages['email'] = "L'adresse mail n'existe pas";
    }
    if(!empty($messages))
    {
        Flight::render("login.tpl", array('messages'=>$messages, 'data'=>$data));
    }
});
// Methode Get de la page profil.tpl
Flight::route('GET /profil', function()
{
    if (isset($_SESSION['user']))
    {
        $messages=array();
        //Recupération  des données
        $data = Flight::request()->data;
        $test = $_SESSION['user'];
        require('../includes/pdo.php');
        $db = new PDO("mysql:host=$dbHost;port=$dbPort;dbname=$dbName;charset=utf8", "$dbUser", "$dbPassword");
        $info = $db -> prepare("SELECT *FROM utilisateur WHERE utilisateur.nom = :nom");
        $info -> execute(array(':nom'=>$test['nom']));
        $information = $info->fetch();
        Flight::render("profil.tpl",array('info' => $information));
    }
    else
        Flight::redirect("/login");
});

Flight::route('GET /success', function(){
    Flight::render("success.tpl",array());
});
// Deconnexion destruction variable
Flight::route('GET /logout', function(){
    unset($_SESSION['user']);
    Flight::redirect('/');
});
?>
