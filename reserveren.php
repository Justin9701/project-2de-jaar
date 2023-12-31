<?php
    include "header.php";   
?>

    <main>
        <section id="reservation">
            <h2>Reserveren</h2>
            <p>Deze module bevat alle reserveringen en die kunnen van hieruit worden beheerd.</p>
            <form>
                <fieldset>
                    <legend>Jachtinformatie</legend>
                    <label>Type jacht:
                        <select id="yacht-type" name="yacht-type">
                            <option value="motor">Motorjachten</option>
                            <option value="zeil">Zeiljachten</option>
                            <option value="motor">Superyachten</option>
                            <option value="motor">Luxe jachten</option>
                            <option value="motor">Speedboten</option>
                        </select>
                    </label>
                    <label<label for="harbor">Haven:</label>
                        <select name="harbor" id="harbor">
                            <option value="Amsterdam Marina">Amsterdam Marina</option>
                            <option value="Rotterdam Haven">Rotterdam Haven</option>
                            <option value="Antwerpen Haven">Antwerpen Haven</option>
                            <option value="IJmuiden Haven">IJmuiden Haven</option>
                            <option value="Scheveningen Haven">Scheveningen Haven</option>
                        </select>

                        <label>Datum vertrek:
                            <input type="date" name="departure_date">
                        </label>
                        <label>Datum retour:
                            <input type="date" name="return_date">
                        </label>
                        <label>Extra mogelijkheden:</label>
                        <input type="checkbox" name="extras[]" value="Catering"> Catering<br>
                        <input type="checkbox" name="extras[]" value="Schipper"> Schipper<br>
                        <input type="checkbox" name="extras[]" value="Catering"> Flottije<br>
                        <input type="checkbox" name="extras[]" value="Schipper"> Gevulde koelkast<br>
                        <input type="checkbox" name="extras[]" value="Catering"> Aanvullende vezekering<br>
                        <input type="checkbox" name="extras[]" value="Schipper"> Kinderzwemvesten<br>
                        <input type="checkbox" name="extras[]" value="Catering"> Stand up paddleboard<br>
                        <input type="checkbox" name="extras[]" value="Schipper"> Transfer naar haven<br>
                        <input type="checkbox" name="extras[]" value="Schipper"> Schoonmaak<br>
                </fieldset>

                <fieldset>
                    <legend>NAW gegevens</legend>

                    <label>Voornaam:
                        <input type="text" name="first_name">
                    </label>

                    <label>Achternaam:
                        <input type="text" name="last_name">
                    </label>

                    <label>E-mailadres:
                        <input type="email" name="email_address">
                    </label>

                    <label>Adres:
                        <input type="text" name="adres">
                    </label>

                    <label>Stad:
                        <input type="text" name="stad">
                    </label>

                    <label>Postcode:
                        <input type="text" name="postcode">
                    </label>

                    <label>Telefoonnummer:
                        <input type="tel" name="telefoonnummer">
                    </label>
                </fieldset>


                <fieldset>
                    <legend>Betalingsgegevens</legend>
                    <label>Betaalmethode:
                        <select name="payment_method">
                            <option value="bank">Ideal</option>
                            <option value="abn">ABN AMRO</option>
                            <option value="rabobank">Rabobank</option>
                            <option value="ing">ING Bank</option>
                            <option value="creditcard">Creditcard</option>
                            <option value="Paypal">Paypal</option>
                        </select>
                    </label>
                </fieldset>

                <input type="submit" value="Reserveren">
            </form>
        </section>

        <section id="tracking">
            <h2>Tracking</h2>
            <p>Een bijzondere module is de tracking module. Elk jacht is uitgerust met een GPS ontvanger die de locatie
                van het jacht doorgeeft.</p>

        </section>

        <section id="settings">
            <h2>Instellingen</h2>
            <p>In deze module kunnen een aantal algemene instellingen worden gedaan, zoals het e-mail adres waar naar
                het contactformulier wordt verzonden en de melding die wordt getoond na verzending.</p>
            <!-- Embed settings elements here -->
        </section>
    </main>

    <footer>
        <p>Contactinformatie: info@coralyachts.com</p>
    </footer>

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
            location.replace('./jachten.html')
        });
    </script>

</body>

</html>