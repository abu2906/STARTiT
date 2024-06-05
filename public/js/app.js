document.addEventListener('DOMContentLoaded', function() {

    // Function to load content
    function loadContent(selector, url) {
        document.querySelector(selector).addEventListener('click', function(e) {
            e.preventDefault();
            fetch(url)
                .then(response => response.text())
                .then(data => {
                    document.querySelector('.main-content').innerHTML = data;
                });
        });
    }

    // Notification button
    // document.querySelector('.notification').addEventListener('click', function(e) {
    //     e.preventDefault();
    //     fetch('Notification.html')
    //         .then(response => response.text())
    //         .then(data => {
    //             document.querySelector('.main-content').innerHTML = data;
    //         });
    // });

    // // Close notification popup when close button is clicked
    // document.querySelector('#notificationPopup .popup-close').addEventListener('click', function() {
    //     document.querySelector('#notificationPopup').style.display = 'none';
    // });

    // Side menu
    document.querySelectorAll('#sidebar .side-menu.top li a').forEach(function(item) {
        item.addEventListener('click', function() {
            document.querySelectorAll('#sidebar .side-menu.top li').forEach(function(li) {
                li.classList.remove('active');
            });
            item.parentNode.classList.add('active');
        });
    });

    // Toggle sidebar
    document.querySelector('#content nav .bx.bx-menu').addEventListener('click', function() {
        document.querySelector('#sidebar').classList.toggle('hide');
    });

    // Search button
    var searchButton = document.querySelector('#content nav form .form-input button');
    var searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
    var searchForm = document.querySelector('#content nav form');

    searchButton.addEventListener('click', function(e) {
        if (window.innerWidth < 576) {
            e.preventDefault();
            searchForm.classList.toggle('show');
            if (searchForm.classList.contains('show')) {
                searchButtonIcon.classList.replace('bx-search', 'bx-x');
            } else {
                searchButtonIcon.classList.replace('bx-x', 'bx-search');
            }
        }
    });

    // Responsive actions
    if (window.innerWidth < 768) {
        document.querySelector('#sidebar').classList.add('hide');
    } else if (window.innerWidth > 576) {
        searchButtonIcon.classList.replace('bx-x', 'bx-search');
        searchForm.classList.remove('show');
    }

    window.addEventListener('resize', function() {
        if (this.innerWidth > 576) {
            searchButtonIcon.classList.replace('bx-x', 'bx-search');
            searchForm.classList.remove('show');
        }
    });

    // Dark mode switch
    document.querySelector('#switch-mode').addEventListener('change', function() {
        if (this.checked) {
            document.body.classList.add('dark');
        } else {
            document.body.classList.remove('dark');
        }
    });
});
