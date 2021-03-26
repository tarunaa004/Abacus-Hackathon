<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="studentstyle.css" rel="stylesheet" type="text/css" />
  <title>Student Page</title>
</head>
<body>
    <span >
      <div class="banner"></div>
<p id="blurb">
  This is a space for you to provide unique and viable solutions to real-time, industry-based tasks. Put your mind at work to climb up the leaderboard now!
</p>
</span>
  


<h3 class="title">Ready for today's challenges? </h3>

<div>
        <div class="card-container">
            <div class="trivia-cards" >
                <div class="imgBx">
                    <img src="https://cdn.glitch.com/27e2ac21-9570-4f01-b664-2df766f65d9f%2Ffirst.jpg?v=1616746761190" alt="firstimg">
                </div>
                <div class="content">
                    <p>
                        Problem 1
                    </p>
                </div>
            </div>
            <div class="trivia-cards">
                <div class="imgBx">
                    <img src="https://cdn.glitch.com/27e2ac21-9570-4f01-b664-2df766f65d9f%2Fsecond.png?v=1616746851931" alt="secondimg">
                </div>
                <div class="content">
                    <p>
                        Problem 2

                    </p>
                </div>
            </div>
            <div class="trivia-cards">
                <div class="imgBx">
                    <img src="https://cdn.glitch.com/27e2ac21-9570-4f01-b664-2df766f65d9f%2Fthird.svg?v=1616746856479" alt="thirdimg">
                </div>
                <div class="content">
                    <p>
                      Problem 3
             </p>
                </div>
            </div>
        </div>
    </div>


<h4 class="title">Ready with a solution? Enter it into the text box below and click "Go!" to send your thoughts across! </h4>

<label for="user">Enter your chosen Problem Number:</label>
<input   
    name="problem_name" 
    type="text">
<textarea name="solutionbox" id="message" cols="30" rows="10" height="20px"></textarea>

<button onclick="myFunction()" 
type="submit">Go!</button>
<script>
function myFunction() {
  alert("SUBMITTED SUCCESSFULLY!!");
}

</script>

 

  
</body>
</html>