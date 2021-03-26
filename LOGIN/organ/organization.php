<?php 
session_start();


  if(isset($_SESSION["username"])){
    $_SESSION["msg"] = "You must sign up to view this page";
  header("location: LOGIN/index.php");
  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="orgstyle.css" rel="stylesheet" type="text/css" />
  <title>Organization</title>
</head>
<body>
   <div class="banner"></div>

	<nav>
		<section class="front-decor">
			
			<div class="navigation">
				<ul id="home-page">
          <li><a href="/LOGIN/index.php" class="link-colour">
							Home</a></li>
					<li><a href="orgsubmissions.php" class="link-colour" target="_blank" >Submissions</a></li>
					<li><a href="orgrankings.php" target="_blank" class="link-colour">Rankings</a></li>
					
				</ul>
			</div>
		</section>
	</nav>

  <span >

<p id="blurb">
  Looking to recruit dynamic, creative and fresh minds who're quick to think on their feet? 
  
  Need a fresh mind to kindle the solution to a work-problem you've pondered on for hours?

  If so, this is just the place for you! Post your problem into the "ask" form below, and brace yourself for the flood of solutions about to head your way!


  Enter today's problem in the space provided below:
</p>
</span>

<label for="user">Enter a unique Problem Number for this task:</label>
<input   
    name="problem_name" 
    type="text">
<textarea name="solutionbox" id="message" cols="30" rows="10" placeholder="Enter the problem decription"></textarea>

<button onclick="myFunction()" 
type="submit">Go!</button>
<script>
function myFunction() {
  alert("POSTED SUCCESSFULLY!!");
}

</script>
<footer id="foot">
    &copy2021 Made by the Whizz for the Abacus Hackathon</p>
</footer>
 


</body>

</html>