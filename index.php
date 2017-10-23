<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Captcha Example</title>
    </head>
    <body>
        <form action="submit.php" method="post">
            <label>First Name <input type="text" name="firstName" /></label><br>
            <label>Last Name <input type="text" name="lastName" /></label><br>
            <label>Message <textarea name="message"></textarea></label><br>

            <p><img src="./captcha.php" /></p>
            <label>CAPTCHA <input type="text" name="captcha" /><br><br>

            <input type="submit" name="submit">
        </form>
    </body>
</html>
