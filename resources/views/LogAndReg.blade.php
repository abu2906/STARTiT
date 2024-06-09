<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel='stylesheet' href='../css/style.css' >
	<link href="../css/fontawesome/css/all.css" rel="stylesheet" />
    <link href="../css/fontawesome/css/solid.css" rel="stylesheet" />
	<script src="../js/jquery-3.7.1.js"></script>
	<title>Profile</title>
</head>
<body>
	<div class="container">
		<div class="signin-signup">
			<form action="" class="signin">
				<h2 class="title">Sign in</h2>
				<div class="input-field">
					<i class="fa-solid fa-user"></i>
					<input type="text" placeholder="Username">
				</div>
				<div class="input-field">
					<i class="fa-solid fa-lock"></i>
					<input type="text" placeholder="Password">
				</div>
				<!-- <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot password?</a>
                </div> -->
				<input type="submit" value="Login" class="btn">
				<p class="choice">Or Sign in with</p>
				<div class="social-media">
					<a href="" class="icon">
						<i class="fa-brands fa-facebook-f"></i>
					</a>
					<a href="" class="icon">
						<i class="fa-brands fa-google"></i>
					</a>
				</div>
			</form>
			<form action="" class="signup">
				<h2 class="title">Sign up</h2>
				<div class="input-field">
					<i class="fa-solid fa-user"></i>
					<input type="text" placeholder="Name">
				</div>
				<div class="input-field">
					<i class="fa-solid fa-envelope"></i>
					<input type="text" placeholder="Email">
				</div>
				<div class="input-field">
					<i class="fa-solid fa-phone"></i>
					<input type="text" placeholder="Telephone">
				</div>
				<div class="input-field">
					<i class="fa-solid fa-lock"></i>
					<input type="text" placeholder="Password">
				</div>
	
				<input type="submit" value="Sign up" class="btn">
			</form>
		</div>
		<div class="panel-container">
			<div class="panel left">
				<div class="content">
					<h3>STARTiT</h3>
					<img src="./img/logo." alt="" class="image">
					<button class="btn" id="sign-in">Sign in</button>
				</div>
			</div>
			<div class="panel right">
				<div class="content">
					<h3>STARTiT</h3>
					<img src="./img/STARTiT.png" alt="" class="image">
					<button class="btn" id="sign-up">Sign up</button>
				</div>
			</div>
		</div>
	</div>
	<script>
		const sign_in = document.querySelector("#sign-in");
		const sign_up = document.querySelector("#sign-up");
		const container = document.querySelector(".container");

		sign_up.addEventListener("click", () => {
			container.classList.add("sign-up-mode");
		})
		sign_in.addEventListener("click", () => {
			container.classList.remove("sign-up-mode");
		})
	</script>
</body>
</html>