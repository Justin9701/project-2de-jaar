<?php $page = $_SERVER['SCRIPT_NAME']; ?>
<header>
    <nav>
        <div id="logo">
            <img src="images/jachtlogo.jpg" alt="Coral Yachts Logo" width="150"><!-- Consider adding a logo image -->
        </div>
        <ul class="navbar">
            <li><a href="index.php" class="nav-link<?php echo $page === '/index.php' ? ' active' : ''; ?>">Home</a></li>
            <li><a href="jachten.php" class="nav-link<?php echo $page === '/jachten.php' ? ' active' : ''; ?>">Jachten</a></li>
            <li><a href="reserveren.php" class="nav-link<?php echo $page === '/reserveren.php' ? ' active' : ''; ?>">Reserveren</a></li>
            <li><a href="contact.php" class="nav-link<?php echo $page === '/contact.php' ? ' active' : ''; ?>">Contact</a></li>
            <li>
                <a href="login.php" class="nav-link<?php echo $page === '/login.php' ? ' active' : ''; ?>">
                    <img src="images/login-icon.png" alt="Inloggen" class="login-icon">
                </a>
            </li>
        </ul>
    </nav>
</header>
