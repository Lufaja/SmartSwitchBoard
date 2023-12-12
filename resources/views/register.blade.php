<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-11">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>Document</title>
</head>
<body>
<div class="container">
    <img id="image" src="images/logo.svg" alt="Royal Van der Leun">
    <form action="{{Route('welcome')}}" method="GET">
        <div class="userInput">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>
        </div>
        <div class="userInput">
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
        </div>
        <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
        <div id="flex">
            <button type="submit">Login</button>
        </div>
</div>
</div>
</form>
</div>
</body>
</html>
