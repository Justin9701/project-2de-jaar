<?php
    include "header.php";  
?>

<section id="hero">
    <div class="hero-text">
        <h1>Welkom bij Coral Yachts</h1>
    </div>
</section>

<section id="yachts">
    <div class="yacht-image">
        <img src="my1.jpg" alt="Coral Yacht" width="100%">
    </div>
</section>

<footer>
    <div class="footer-content">
        <p>Contactinformatie: <a href="mailto:info@coralyachts.com">info@coralyachts.com</a></p>
    </div>
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