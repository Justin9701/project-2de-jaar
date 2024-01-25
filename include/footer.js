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
    location.replace('./jachten.php')
});