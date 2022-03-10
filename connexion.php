<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="connexion.css">
    <title>Connexion</title>
</head>

<body>
    <!--header-->
    <div class="accueil">
        <video autoplay muted loop id="myVideo">
            <source src="Vidéo/vidéo.mp4" type="video/mp4">
        </video>
    </div>

    <?php

// Vérification de l'envoi de données au serveur
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = 0;

    $lastName = $_POST['lastName'];
    if (empty($lastName)) {
        echo '<div class="alert alert-danger" role="alert">Le nom est obligatoire !</div>';
        $errors++;
    }

    $firstName = $_POST['firstName'];
    if (empty($firstName)) {
        echo '<div class="alert alert-danger" role="alert">Le prénom est obligatoire !</div>';
        $errors++;
    }

    $email = $_POST['email'];
    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<div class="alert alert-danger" role="alert">L\'adresse e-mail est invalide !</div>';
        $errors++;
    }

    $message = $_POST['message'];
    if (strlen($message) < 10) {
        echo '<div class="alert alert-danger" role="alert">Votre message doit faire au minimum 10 caractères !</div>';
        $errors++;
    }

    // Vérification d'erreur (Au moins une)
    if ($errors === 0) {
        echo '<div class="alert alert-success" role="alert">Votre message a bien été envoyé !</div>';

        unset($lastName);
        unset($firstName);
        unset($email);
        unset($message);
    }
}

?>
    <?php require('header.php'); ?>
    <div class="centre">
        <!--titre-->
        <h1>Se connecter</h1>
        <!--inscription-->
        <div class="inscription">
            <p>Vous n’avez pas encore de compte ? </p>
            <a id="Inscription" href="#"> Inscrivez-Vous</a>
        </div>
        <!--connexion-->
        <div class="connexion">
            <p>E-Mail</p>
            <input Email="" id="email" name="email" type="email" placeholder="Entrer votre email">
            <br>
            <br>
            <br>
            <p>Mot de passe</p>
            <div id="mdp1">
                <input mot de passe="" id="password" name="password" type="password"
                    placeholder="Saisissez votre mot de passe" required minlength ="8" maxlength="24">
                <button id="BoutonVoir" voir="" type="button"><span voir=""> Voir </span></button>
            </div>
        </div>
        <div class="mot de passe oublié ?">
            <a id="mdp" href="#">mot de passe oublié</a></br>
            <button id="BoutonConnexion" class="button">Se Connecter</button>
</body>

</html>