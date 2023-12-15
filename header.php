<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coral Yachts</title>
    <link rel="stylesheet" href="styles.css">
    <?php   
        include "connect.php";
    ?>
</head>

<body>

    <header>
        <nav>
            <div id="logo">
                <img src="jachtlogo.jpg" alt="Coral Yachts Logo" width="150"><!-- Consider adding a logo image -->
            </div>
            <ul class="navbar">
                <li><a href="index.php" class="nav-link active">Home</a></li>
                <li><a href="jachten.html" class="nav-link">Yachten</a></li>
                <li><a href="reserveren.php" class="nav-link">Reserveren</a></li>
                <li><a href="contact.php" class="nav-link">Contact</a></li>
                <li><a href="login.php" class="nav-link">
                        <img src="login-icon.png" alt="Inloggen" class="login-icon">
                    </a>
                </li>
            </ul>
        </nav>

        <form id="search-form">
            <input type="text" id="search-input" placeholder="Zoek een yacht...">
            <button type="button" id="search-button">Zoeken</button>
        </form>
    </header>