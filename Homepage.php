<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        body {
            margin: 0;
            font-family: 'Helvetica Neue', sans-serif;
            background: linear-gradient(to bottom, aqua, #e0e0e0);
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(10px);
            color: white;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            width: 60px;
            height: 60px;
            margin-right: 10px;
            border-radius: 50%;
            /*border: 2px solid white;*/
        }

        h1 {
            font-size: 24px;
        }

        nav ul {
            list-style: none;
            display: flex;
            font-weight: bold;
        }

        nav li {
            margin-right: 20px;
            transition: transform 0.2s ease-in-out;
        }

        nav li:hover {
            transform: translateY(-3px);
        }

        nav a {
            text-decoration: none;
            color: white;
            letter-spacing: 1px;
            font-size: 14px;
        }

        .social-media {
            display: flex;
            gap: 10px;
        }

        .social-media a {
            color: white;
            font-size: 18px;
            transition: transform 0.2s ease-in-out;
        }

        .social-media a:hover {
            transform: scale(1.2);
        }

        .slideshow {
            position: relative;
            height: 500px;
            overflow: hidden;
        }

        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .slide.active {
            opacity: 1;
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(70%);
        }

        .carousel-controls {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
        }

        .carousel-control {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.7);
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .carousel-control.active {
            background-color: white;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="x1.jpg" alt="Logo">
            <h1>Welcome</h1>
        </div>
        <nav>
            <ul>
<li><a href="register.php">Account</a></li>
                <li><a href="ContactUs.php">Contact</a></li>
<li><a href="AboutUs.php">About Us</a></li>
<li><a href="chat.py">Chat</a></li>
               
            </ul>
        </nav>
        <div class="social-media">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </header>
    <main>
        <div class="slideshow">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="sh.jpeg" alt="Slide 1">
                    </div>
                    <div class="swiper-slide">
                        <img src="t.png" alt="Slide 2">
                    </div>
                    <div class="swiper-slide">
                        <img src="pru.png" alt="Slide 3">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </main>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f1f1f1;
  }

  #content {
    text-align: center;
    margin-top: 50px;
  }

  .button {
    padding: 10px 20px;
    background-color: #3498db;
    border: none;
    border-radius: 5px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .button:hover {
    background-color: #2980b9;
  }
</style>
</head>
<body>



<script>
  // Get a reference to the button element
  const registerButton = document.getElementById("register-button");

  // Add a click event listener to navigate to the specified page
  registerButton.addEventListener("click", function() {
    window.location.href = "home.php"; // Replace with your actual page URL
  });
</script>
 <div class="boxthree" style="background-color:orange; border:solid 2px orange;border-radius: 10px; width:73.5%; height:40px; margin-left:13%; margin-top:15px" >
    <marquee behavior="alternate" direction="right" loop="1" style="margin-right:38%" align="center"><h6 style="line-height:1px;">For any query please <a href="aboutus.php">contact us</a>.Thank You.</h6></marquee>
</body>
</html>
