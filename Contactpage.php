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

  .contact-section {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  }

  .contact-section h3 {
    color: #333;
  }

  .contact-form {
    text-align: left;
    margin-top: 20px;
  }

  .input-group {
    margin-bottom: 20px;
  }

  .input-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
  }

  .input-group input,
  .input-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
  }

  .submit-button {
    background-color: #3498db;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .submit-button:hover {
    background-color: #2980b9;
  }

  .contact-details {
    margin-top: 20px;
    font-size: 14px;
  }

  .contact-details ul {
    list-style: none;
    padding: 0;
  }

  .contact-details li {
    margin-bottom: 10px;
  }

  .contact-details a {
    color: #3498db;
    text-decoration: none;
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
  <h2>Contact Us</h2>

  <div class="contact-section">
    <h3>We'd Love to Hear from You</h3>
    <p>If you have any questions, suggestions, or feedback about the voting process or our website, please feel free to contact us.</p>

    <div class="contact-form">
      <form>
        <div class="input-group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" required>
        </div>

        <div class="input-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required>
        </div>

        <div class="input-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" rows="4" required></textarea>
        </div>

        <button class="submit-button" type="submit">Send Message</button>
      </form>
    </div>

    <div class="contact-details">
      <h3>Contact Details</h3>
      <ul>
        <li>Email: <a href="mailto:info@tzaneenvote.org">info@votingwebsite.com</a></li>
        <li>Phone: <a href="tel:(015) 297-7705">(015) 297-7705</a></li>
        <li>Address: 13 Joubster Street, Tzaneen Mall</li>
      </ul>
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