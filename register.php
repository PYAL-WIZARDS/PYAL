<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $id_number = $_POST['id_number'];
    $password = $_POST['password'];

    // Check if the ID number has exactly 13 digits
    if (strlen($id_number) !== 13) {
        $error = "Enter a South African ID, which should have exactly 13 digits.";
    } else {
        // Database connection (place your db.php code here)
        require 'db.php'; // Make sure you have included the correct path to db.php

        // Check if the user with the same ID number already exists
        $stmt = $pdo->prepare("SELECT id FROM users WHERE id_number = ?");
        $stmt->execute([$id_number]);
        $existing_user = $stmt->fetch();

        if ($existing_user) {
            $error = "User with this ID number already exists.";
        } else {
            // Hash the password before storing it in the database
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Handle the uploaded ID picture
            if (isset($_FILES['id_picture']) && $_FILES['id_picture']['error'] === UPLOAD_ERR_OK) {
                $id_picture_tmp = $_FILES['id_picture']['tmp_name'];
                $id_picture_data = file_get_contents($id_picture_tmp);
                $id_picture_mime = $_FILES['id_picture']['type'];
            } else {
                // Default values if no ID picture is uploaded
                $id_picture_data = null;
                $id_picture_mime = null;
            }

            // Insert the user data, including the hashed password and ID picture, into the database
            $stmt = $pdo->prepare("INSERT INTO users (first_name, last_name, id_number, password, id_picture, id_picture_mime) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute([$first_name, $last_name, $id_number, $hashed_password, $id_picture_data, $id_picture_mime]);

            // Registration successful, set a success message
            $_SESSION['registration_success'] = true;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    /* Reset some default browser styles */
        body, h1, h2, p, ul, li {
            margin: 0;
            padding: 0;
        }

        /* Set a background color for the entire page */
        body {
            background-image: url('b.jpg');
            background-repeat: no-repeat;
            background-size: 100% 100%;
            font-family: Arial, sans-serif;
        }

        /* Header styles */
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            font-size: 2rem;
        }

        nav ul {
            list-style: none;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        /* Center Content Container */
        .center-content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Center vertically */
            flex-direction: column; /* Stack sections vertically */
        }


        /* Purchase Form Section */
        .registration-form {
            /* No need for float, center with margin auto */
            margin: 20px auto; /* Center horizontally with some spacing */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            width: 350px;
        }

        .registration-form h2 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        form label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }

        form input[type="text"],
        form input[type="email"],
        form textarea {
            width: 100%; /* Full width */
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form input[type="submit"] {
            display: block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Transparent Footer */
        footer {
            background-color: rgba(51, 51, 51, 0.5); /* Transparent background */
            color: #fff;
            text-align: center;
            padding: 20px;
        }
    </style>
    <title>User Registration</title>
</head>
<body>

 <header>
        <h1>REGISTRATION PAGE</h1>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                
            </ul>
        </nav>
    </header>
  
    
    <?php
    if (isset($error)) {
        echo "<p>$error</p>";
    }

    // Display a success message and link to vote.php if registration was successful
    if (isset($_SESSION['registration_success']) && $_SESSION['registration_success'] === true) {
        echo "<p>Registration successful! You can now <a href='vote.php'>login to vote</a> using your ID number and password.</p>";
        // Clear the success message
        unset($_SESSION['registration_success']);
    }
    ?>

    <!-- <div id="content">
        <div id="registration-form">  -->
		
		<section class="registration-form">
            <h2>Fill In</h2>
            
            <form method="POST" action="register.php" enctype="multipart/form-data"> <!-- Include enctype for file upload -->
                <label for="first_name">First Name:</label>
                <input type="text" name="first_name" placeholder="First Name" required maxLength="20"><br><br>

                <label for="last_name">Last Name:</label>
                <input type="text" name="last_name" placeholder="Last Name" required maxLength="20"><br><br>

                <label for="id_number">ID Number:</label>
                <input type="text" name="id_number" placeholder="Identification Number" required maxLength="13"><br><br>

                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Password" required maxLength="6"><br><br>

                <!-- ID picture upload field -->
                <label for="id_picture">Upload ID Picture:</label>
                <input type="file" name="id_picture" accept="image/*"><br><br>

                <input type="submit" value="Register">
            </form>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
		</section>	
			  <!-- Footer Section (Transparent) -->
    <footer>
        <p>&copy; 2023 Online Voting System</p>
    </footer>
</body>
</html>