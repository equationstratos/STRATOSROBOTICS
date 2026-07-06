<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Envoi d'un email par formulaire</title>
</head>

<body>
    <?php
    $retour = mail('stratos.robotics@gmail.com', $_POST['Name'], $_POST['Email'], $_POST['Message'], $_POST['Subject']);
    if ($retour) {
        echo '<p>Thank you your message has been sent ! We try and respond to all queries and comments within 24 hours.</p>';
    }
    ?>
</body>

</html>
