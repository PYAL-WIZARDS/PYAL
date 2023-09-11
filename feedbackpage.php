<!DOCTYPE html>
<html>
<head>
    <title>Feedback Page</title>
</head>
<body>
    <h1>Feedback Form</h1>
    <form action="process_feedback.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="feedback">Feedback or Issue:</label>
        <textarea id="feedback" name="feedback" rows="4" required></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $feedback = $_POST["feedback"];

    // You can add code here to save the feedback to a database or send it via email.
    // For demonstration purposes, we'll just display the feedback.

    echo "<h1>Feedback Submitted</h1>";
    echo "<p>Thank you, $name, for your feedback!</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Feedback/Issue:</p>";
    echo "<p>$feedback</p>";
} else {
    // Redirect to the feedback form if the request method is not POST.
    header("Location: feedback_form.php");
    exit();
}
?>
