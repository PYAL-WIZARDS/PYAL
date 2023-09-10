<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // Redirect to the login page
    exit();
}

require 'db.php';

$user_id = $_SESSION['user_id']; // Define $user_id here

// Initialize error variable
$error = '';

// Check if the user has already voted
$stmt = $pdo->prepare("SELECT has_voted, first_name FROM users WHERE id = ?");
$stmt->execute([$user_id]);
$user = $stmt->fetch();

if ($user['has_voted']) {
    $error = "You have already voted.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($error)) {
    // Check if a vote option is selected
    if (isset($_POST['vote']) && !empty($_POST['vote'])) {
        $selected_option = $_POST['vote'];

        // Record the vote in the database
        $stmt = $pdo->prepare("INSERT INTO votes (user_id, candidate) VALUES (?, ?)");
        $stmt->execute([$user_id, $selected_option]);

        // Update user's voting status
        $stmt = $pdo->prepare("UPDATE users SET has_voted = 1 WHERE id = ?");
        $stmt->execute([$user_id]);

        // Redirect to the results page
        header('Location: results.php');
        exit();
    } else {
        $error = "Please select an option to vote.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vote</title>
    <style>
         body {
     background-image: url('b.jpg');
            background-repeat: no-repeat;
            background-size: auto;
            font-family: Arial, sans-serif;
  }

  .candidate {
    border: 1px solid #ccc;
    padding: 20px;
    margin: 10px;
    background-color: white; /* Add a background color for better readability */
  }

  .candidate img {
    max-width: 50%;
    height: 100px;
  }

  .read-more {
    cursor: pointer;
    color: blue;
    text-decoration: underline;
  }
    </style>
	
<script>
  function toggleDescription(candidateId) {
    var description = document.getElementById('description-' + candidateId);
    var readMoreButton = document.getElementById('read-more-' + candidateId);

    if (description.style.display === 'none' || !description.style.display) {
      description.style.display = 'block';
      readMoreButton.innerHTML = 'Read Less';
    } else {
      description.style.display = 'none';
      readMoreButton.innerHTML = 'Read More';
    }
  }

  function vote(candidateId) {
    // You can implement the voting logic here
    console.log('Voted for candidate ' + candidateId);
  }
</script>	
</head>
<body>
    <h2>Vote</h2>
    <?php
    if (!empty($error)) {
        echo "<p>$error</p>";
    } else {
        $welcome_message = "Welcome, " . ucfirst($user['first_name']) . "!"; // Capitalize the first name
        echo "<p>$welcome_message</p>";
    }
    ?>
    <form method="POST" action="vote.php">
        <!-- Your voting options with candidate pictures -->
        <div class="candidate">
            <label>
                <img src="M.png" alt="C">
                <input type="radio" name="vote" value="option1"> Option 1
            </label><br>
        </div>
        <div class="candidate">
            <label>
                <img src="candidate2.jpg" alt="Candidate 2">
                <input type="radio" name="vote" value="option2"> Option 2
            </label><br>
        </div>
        <div class="candidate">
            <label>
                <img src="candidate3.jpg" alt="Candidate 3">
                <input type="radio" name="vote" value="option3"> Option 3
            </label><br>
        </div>

        <input type="submit" value="Submit Vote">
    </form>
	
	<div class="box">
  <table style="font-size: 16pt" align="center" width="100%" height="100%">
    <tr>
      <td style="color: Orange"><h1 align="center"><marquee>Welcome To Our Virtual Voting Site</marquee></h1></td>
    </tr>
    <tr>
      <td align="center"><b><i>VOTING PAGE</i></b></td>
    </tr>
  </table>
</div>
<br><br>
<main>
  <h2>Current Candidates</h2>
  <h4>Welcome <?php session_start(); echo $_SESSION['SESS_NAME']; ?> </h4>
  <h3>Make a Vote</h3>
  <form action="" method="post" id="myform">
    <!-- Candidate 1 -->
    <div class="candidate" id="candidate-1">
      <img src="t.png" alt="Candidate 1">
      <h2>MR CONSTABLE TALENT BALOYI</h2>
      <p id="description-1">
        Bio: Meet TALENT, a dedicated Tzaneen resident vying for the council position in the upcoming local elections. With 5 years of leadership in the education sector, I'm driven by a passion to enhance and empower our community. Let's forge a path to success, together. #VoteTali
      </p>
      <p>
        <span class="read-more" id="read-more-1" onclick="toggleDescription(1)">Read More</span>
      </p>
      <button onclick="vote(1)">Vote</button>
    </div>

    <!-- Candidate 2 -->
    <div class="candidate" id="candidate-2">
      <img src="ag.jpeg" alt="Candidate 2">
      <h2>Advocate AGNES SURGENT MASANA</h2>
      <p id="description-2">
        Bio: Advocate for progress. Neighbor to all. I'm AGNES SURGENT, running for council position to amplify your voice in the local municipality. With a background in leadership and management with Vaal University Of Technology, I'm committed to building a stronger, more inclusive township. Join me in shaping our shared future. #VoteAggyAgnes
      </p>
      <p>
        <span class="read-more" id="read-more-2" onclick="toggleDescription(2)">Read More</span>
      </p>
      <button onclick="vote(2)">Vote</button>
    </div>


    <p><a href="logout.php">Logout</a></p>
</body>
</html>
