
   <!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>BREW WHIZZ</title>
	<link href="homestyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<script src="script.js">
	</script>
	<nav>
		<section class="front-decor">
			<h2 class="title">Welcome!</h2>
			<div class="navigation">
				<ul id="home-page">
					<li><a href="#" class="link-colour">Home</a></li>
					<li><a href="organ/organization.php" target="_blank" class="link-colour">Organization</a></li>
					<li><a href="student/student.php" target="_blank" class="link-colour">
							Student</a></li>
				</ul>
			</div>
		</section>
	</nav>
	<section class="cover">
		<div id="center">
			<div id="logindets">
				<form action="signup.php" method = "post">
					<label style="width:50%" for="user">Enter Username</label>
					<input maxlength="8" minlength="2" name="username" type="user" id="user" autocomplete="off" placeholder="Eg: akash" required>
					<label style="width:50%" for="password">Enter Password</label>
					<input name="password" type="text" id="password" autocomplete="off" placeholder="8 Characters or more" required>
					<button type="submit" id="submit" >GO</button>
				</form>
      		</div>
    	</div>
    </section>
	<footer id="foot">
    &copy2021 Made by the Whizz for the Abacus Hackathon</p>
    </footer>
  </body>
</html>
