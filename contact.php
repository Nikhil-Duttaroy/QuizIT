<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<form
        id="contact-form"
        action="POST"
        name="ContactForm"
       
      >
        <i class="fas fa-times fa-1x close"></i>
        <h2 style="text-align: center">Get in Touch</h2>

        <label>Name</label>
        <input required class="input-field" type="text" name="name" />

        <label>Subject</label>
        <input required class="input-field" type="text" name="subject" />

        <label>Email</label>
        <input required class="input-field" type="text" name="email" />

        <label>Message</label>
        <textarea required class="input-field" name="message"></textarea>       
        <input id="submit-btn" type="submit" value="Send" />
      </form>
</body>
</html>