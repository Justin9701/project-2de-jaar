<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coral Jachts</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body>
    <?php include_once 'include/header.php'; ?>
    <section id="hero">
        <div class="hero-text">
            <h1>Welkom bij Coral Jachts</h1>
        </div>
    </section>

    <section id="yachts">
        <div class="yacht-image">
            <img src="images/my1.jpg" alt="Coral Yacht" width="100%">
        </div>
    </section>

    <?php include_once 'include/footer.php'; ?>

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
