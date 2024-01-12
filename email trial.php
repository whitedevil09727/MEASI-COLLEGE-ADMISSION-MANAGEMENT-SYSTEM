<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Integration</title>
</head>
<body>
    <h1>Contact Us</h1>
    <p>Fill out the form below to send us an email:</p>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $to_email = "your@example.com"; // Replace with your email address
        $subject = $_POST["subject"];
        $message = $_POST["message"];
        $headers = "From: " . $_POST["email"];
        
        if (mail($to_email, $subject, $message, $headers)) {
            echo "<p>Email sent successfully!</p>";
        } else {
            echo "<p>Sorry, there was an error sending your email.</p>";
        }
    }
    ?>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="email">Your Email Address:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>
        
        <input type="submit" value="Send Email">
    </form>
</body>
</html>
