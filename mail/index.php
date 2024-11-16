<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="contact-form">
        <h1>Contact Us</h1>
        <form method="post" action="phpmailer.php">
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" placeholder="Enter the subject">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="body" name="body" rows="5" placeholder="Write your message"></textarea>
            </div>
            <button type="submit" class="btn-submit">Submit</button>
        </form>
    </div>
</body>
</html>
