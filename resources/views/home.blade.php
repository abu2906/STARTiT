
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
	<link href="../css/fontawesome/css/all.css" rel="stylesheet" />
    <link href="../css/fontawesome/css/solid.css" rel="stylesheet" />
	<script src="../js/jquery-3.7.1.js"></script>
	<title>STARTiT</title>
</head>
<body>
	<!-- SIDEBAR -->
		@include('component.sidebar')
	<!-- SIDEBAR -->

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		@include('component.Navbar')
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main class="main-content" id="main-content">
			@yield('content')
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->

	<!-- Popup -->
	<!-- <div class="popup" id="notificationPopup">
		<div class="popup-content">
			<span class="popup-close"><i class="fas fa-times"></i></span>
			<h2>Notication</h2>
			<p>contoh notification</p>
		</div>
	</div> -->
	
	

	<script>
		$(document).ready(function() {

			$('.main-content').load('home.html');
			
			// Button profile
			$('#button-profile').click(function(e){
				e.preventDefault();
				$('.main-content').load('component.profile.blade.php');
			});

			// Button Dashboard
			$('#button-dashboard').click(function(e){
				e.preventDefault();
				$('.main-content').load('home.html');
			});

			// Button Messages
			$('#button-message').click(function(e){
				e.preventDefault();
				$('.main-content').load('message.html');
			});

			// Button usaha
			$('#button-usaha').click(function(e){
				e.preventDefault();
				$('.main-content').load('usaha.html');
			});

			// Button analytics
			$('#button-analytics').click(function(e){
				e.preventDefault();
				$('.main-content').load('analytics.html');
			});

			// Button trend
			$('#button-trend').click(function(e){
				e.preventDefault();
				$('.main-content').load('trend.html');
			});

			// Button setting
			$('#button-setting').click(function(e){
				e.preventDefault();
				$('.main-content').load('setting.html');
			});

			$('.notification').click(function(e) {
				e.preventDefault();
				$('.main-content').load('Notification.html');
			});

			// Close notification popup when close button is clicked
			$('#notificationPopup .popup-close').click(function() {
				$('#notificationPopup').fadeOut();
			});


			// Side menu
			$('#sidebar .side-menu.top li a').each(function() {
				var $item = $(this);
				var $li = $item.parent();

				$item.click(function() {
					$('#sidebar .side-menu.top li').removeClass('active');
					$li.addClass('active');
				});
			});

			// Toggle sidebar
			$('#content nav .bx.bx-menu').click(function() {
				$('#sidebar').toggleClass('hide');
			});

			// Search button
			var $searchButton = $('#content nav form .form-input button');
			var $searchButtonIcon = $('#content nav form .form-input button .bx');
			var $searchForm = $('#content nav form');

			$searchButton.click(function(e) {
				if ($(window).width() < 576) {
					e.preventDefault();
					$searchForm.toggleClass('show');
					if ($searchForm.hasClass('show')) {
						$searchButtonIcon.removeClass('bx-search').addClass('bx-x');
					} else {
						$searchButtonIcon.removeClass('bx-x').addClass('bx-search');
					}
				}
			});

			// Responsive actions
			if ($(window).width() < 768) {
				$('#sidebar').addClass('hide');
			} else if ($(window).width() > 576) {
				$searchButtonIcon.removeClass('bx-x').addClass('bx-search');
				$searchForm.removeClass('show');
			}

			$(window).resize(function() {
				if ($(this).width() > 576) {
					$searchButtonIcon.removeClass('bx-x').addClass('bx-search');
					$searchForm.removeClass('show');
				}
			});

			// Dark mode switch
			$('#switch-mode').change(function() {
				if (this.checked) {
					$('body').addClass('dark');
				} else {
					$('body').removeClass('dark');
				}
			});
        });
		

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
	</script>
</body>
</html>