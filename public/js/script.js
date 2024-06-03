document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('button-profile').addEventListener('click', function(event) {
        event.preventDefault();

        fetch('/profile')
            .then(response => response.text())
            .then(html => {
                document.getElementById('main-content').innerHTML = html;
            })
            .catch(error => {
                console.log('Error:', error);
            });
    });
});
