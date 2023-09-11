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
    padding: 20px;
    text-align: center;
  }

  .about-section {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  }

  .about-section h2 {
    color: #333;
  }

  .about-content {
    text-align: left;
    margin-top: 20px;
    line-height: 1.6;
  }
 #home-link {
    display: inline-block;
    padding: 10px;
    background-color: #3498db;
    border-radius: 50%;
    color: white;
    text-decoration: none;
    transition: background-color 0.3s ease;
  }

#home-link {
    display: inline-block;
    padding: 10px;
    background-color: #3498db;
    border-radius: 50%;
    color: white;
    text-decoration: none;
    transition: background-color 0.3s ease;
  }

  #home-link:hover {
    background-color: #2980b9;
  }
   #icon {
    width: 20px;
    height: 20px;
    fill: white;
    vertical-align: middle;
  }
</style>
</head>
<body>

<div id="content">
  <div class="about-section">
    <h2>About Us</h2>
    <div class="about-content">
      <p>Welcome to our voting website, your online hub for information and resources related to the democratic process. Our mission is to empower citizens with the knowledge they need to make informed decisions during elections.</p>

      <p>We believe that every vote matters and that an engaged and informed electorate is essential for a healthy democracy. Through this platform, we aim to provide easy access to candidate information, voting procedures, and key election issues.</p>

      <p>Our dedicated team is passionate about promoting civic engagement and ensuring that your voice is heard. We strive to create a space where voters can learn, connect, and actively participate in shaping the future of our community.</p>

      <p>Thank you for joining us on this journey toward a more informed electorate and a stronger democracy.</p>
    </div>
  </div>
</div>
<div id="content">
  <a id="home-link" href="home.php">
    <svg id="icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path d="M12 2L2 12h3v8h4v-6h6v6h4v-8h3L12 2zm0 16V9h-2v7H7v-8H5l7-7 7 7h-2v8h-2z"/>
    </svg>
  </a>
</div>


</body>
</html>
