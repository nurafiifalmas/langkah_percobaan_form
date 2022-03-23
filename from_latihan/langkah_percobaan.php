<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="proses.php" method="post">
        <ul> 
            <li>
                <label for="name">Name: </label> 
                <input type="text" id="name" name="user_name" required>
            </li>

            <li> 
                <label for="mail">E-mail: </label>
                <input type="email" id="mail" name="user_email" required>
            </li> 
            <li>
                <label for="msg">Message:</label>
                <textarea id="msg" name="user_message" required></textarea>
            </li>
            <li class="button">
                <input type="submit" name="button" id="button" value="Send your message" />
            </li>
        </ul>
    </form>
</body>
</html>