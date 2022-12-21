<?php
$con=mysqli_connect("localhost","root","") or die("probleme de connexion au serveur de la BD");
mysqli_select_db($con,"pixelcode");

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$sujet = $_POST['sujet'];
$message = $_POST['message'];

$requete=mysqli_query($con,"insert into contact values ('$name','$email','$number','$sujet','$message')");
    
if ($requete) {
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contactsuccess.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <title>Success</title>
</head>

<body>
    <div class="top">
            <h2>Votre message est envoyé avec succès !</h2>
            <div class=container>
                <div>
                    <a href="accueil.html"><h3>Accueil</h3></a> 
                </div>
                <div>
                    <a href="contact.html"><h3>Contact</h3></a>
                </div>
            </div>
    </div>

</body>
</html>

<?php
}
?>


