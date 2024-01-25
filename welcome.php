<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coral Jachts</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body>

<?php
include "include/header.php";
session_start();
if ($_SESSION["loggedin"] ?? false) : ?>
    <h1>Je bent nu ingelogd als gebruiker <?php echo $_SESSION["username"]; ?></h1>
    <p>Dit is de welkom pagina, wat gaan we verder doen? Registreren?</p>
    <p>Hoe log ik weer uit?</p>
    <p>Aan de opmaak moet ook nog wat gebeuren.</p>
    <p>@justin: nu ben jij weer aan zet.<br/>Ik ben benieuwd wat je de volgende commit kunt laten zien!</p>
<?php else : ?>
    <script>
        alert("Je bent ingelogd. Eerst inloggen!");
        window.location = "login.php";
    </script>
<?php endif; ?>

</body>
</html>