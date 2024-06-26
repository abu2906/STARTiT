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
    // Side menu

    document.querySelector('#sidebar').classList.add('hide');

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
    const switchModeCheckbox = document.getElementById('switch-mode');
    const bodyElement = document.body;

    // Cek local storage untuk mode saat ini dan update checkbox
    const currentMode = localStorage.getItem('darkMode');
    if (currentMode === 'enabled') {
        bodyElement.classList.add('dark');
        switchModeCheckbox.checked = true;
    }

    // Event listener untuk checkbox
    switchModeCheckbox.addEventListener('change', function () {
        if (this.checked) {
            bodyElement.classList.add('dark');
            localStorage.setItem('darkMode', 'enabled');
        } else {
            bodyElement.classList.remove('dark');
            localStorage.setItem('darkMode', 'disabled');
        }
    });

    const notificationIcon = document.querySelector('.notification');
    const dropdown = document.querySelector('.notification-dropdown');

    // Menampilkan dropdown ketika ikon notifikasi di-hover
    notificationIcon.addEventListener('mouseenter', function() {
        dropdown.style.display = 'block';
    });

    // Menyembunyikan dropdown ketika mouse meninggalkan ikon notifikasi
    notificationIcon.addEventListener('mouseleave', function() {
        dropdown.style.display = 'none';
    });

    var editButtons = document.querySelectorAll('.editPekerjaBtn');
    var modal = document.getElementById('editJobModal');

    editButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault(); // Menghentikan perilaku default link
            modal.style.display = 'block'; // Menampilkan modal
        });
    });

    // Opsional: Menambahkan fungsi untuk menutup modal jika diperlukan
    var closeModalButton = document.getElementById('closeModalButton');
    if (closeModalButton) {
        closeModalButton.addEventListener('click', function() {
            modal.style.display = 'none'; // Menyembunyikan modal
        });
    }

    function changeTab(index) {
        // Menghilangkan kelas 'active' dari semua tab dan konten
        var tabs = document.querySelectorAll('.tab');
        var contents = document.querySelectorAll('.tab-content');
        tabs.forEach(tab => tab.classList.remove('active'));
        contents.forEach(content => content.classList.remove('active'));
    
        // Menambahkan kelas 'active' pada tab dan konten yang dipilih
        tabs[index].classList.add('active');
        contents[index].classList.add('active');
    }  
});
