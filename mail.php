<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Test Contact Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 40px;
      background-color: #f0f0f0;
    }
    form {
      background: #fff;
      padding: 20px;
      border-radius: 4px;
      max-width: 500px;
      margin: 0 auto;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    input, textarea {
      width: 100%;
      margin-bottom: 15px;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 1rem;
    }
    button {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      font-size: 1rem;
      cursor: pointer;
    }
    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <h1 style="text-align: center;">Test Contact Form</h1>
  <form action="forms/contact.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" placeholder="Your Name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" placeholder="Your Email" required>

    <label for="subject">Subject:</label>
    <input type="text" name="subject" id="subject" placeholder="Subject" required>

    <label for="message">Message:</label>
    <textarea name="message" id="message" rows="5" placeholder="Your Message" required></textarea>

    <button type="submit">Send Message</button>
  </form>
</body>
</html>
