<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Coral Jachts</title>
    <link rel="stylesheet" href="styles/contact.css">
</head>
<body>
    <?php include_once 'include/header.php'; ?>
    <section id="contact">
        
        <div class="container">
            <form action="https://formspree.io/f/mqkvrjle" method="POST" class="contact-form">
                <label for="naam">Naam:</label>
                <input type="text" id="naam" name="naam" required><br>
                
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required><br>
                
                <label for="telefoonnummer">Telefoonnummer:</label>
                <input type="tel" id="telefoonnummer" name="telefoonnummer" pattern="[0-9]+" title="Alleen numerieke waarden toegestaan" required><br>
                
                <label for="bericht">Bericht:</label>
                <textarea id="bericht" name="bericht" rows="5" cols="40" required></textarea><br>
                
                <input type="submit" value="Verzenden">
              </form>
              
              
              
        </div>
    </section>
    <?php include_once 'include/footer.php'; ?>
</body>
</html>