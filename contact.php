<?php
    include "header.php";   
?>

    <section id="contact">
        <h1>Contacteer Ons</h1>

        <p>Heb je vragen of opmerkingen? Vul het onderstaande formulier in en we zullen zo spoedig mogelijk reageren.
        </p>

        <form action="#" method="post">
            <div>
                <label for="name">Naam:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="message">Bericht:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <div>
                <input type="submit" value="Verzenden">
            </div>
        </form>
    </section>

    <footer>
        <footer>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2444.9513560123905!2d5.968986312143225!3d52.207931471864235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c7b882276703df%3A0x2c7987fa5413b368!2sAventus%2C%20Laan%20van%20de%20Mensenrechten%20Apeldoorn!5e0!3m2!1snl!2snl!4v1698666446400!5m2!1snl!2snl"
                width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <p>Contactinformatie: info@coralyachts.com</p>
            <p>Telefoonnummer: +31 26569696</p> <!-- Voeg je eigen telefoonnummer toe -->

            <div class="social-icons">
                <a href="https://www.instagram.com/jouwprofiel" target="_blank">
                    <img src="path_to_instagram_icon.png" alt="Instagram" />
                </a>
                <a href="https://www.facebook.com/jouwprofiel" target="_blank">
                    <img src="path_to_facebook_icon.png" alt="Facebook" />
                </a>
                <a href="https://twitter.com/jouwprofiel" target="_blank">
                    <img src="path_to_twitter_icon.png" alt="X" />
                </a>

            </div>
        </footer>

    </footer>

    <script src="script.js"></script> <!-- Als je een aparte JS-bestand hebt -->

    <script>
        document.getElementById('search-button').addEventListener('click', function () {
            var searchTerm = document.getElementById('search-input').value.toLowerCase();
            var articles = document.querySelectorAll('#yachts article');

            articles.forEach(function (article) {
                var yachtType = article.querySelector('.yacht-button').textContent.toLowerCase();

                if (yachtType.includes(searchTerm)) {
                    article.style.display = 'block';
                } else {
                    article.style.display = 'none';
                }
            });
            sessionStorage.setItem('searchterm', searchTerm)
            location.replace('./Jachten.html')
        });
    </script>
</body>

</html>