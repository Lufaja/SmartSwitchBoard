<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-11">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/login.css" />
    <title>Document</title>
</head>
<body>
    <div class="container">
        <img id="image" src="images/logo.svg" alt="Royal Van der Leun">
            <form action="" method="post">
            <div class="userInput">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
            </div>
            <div class="userInput">
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
            </div>
                <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
                <div id="flex" style="justify-content: space-between">
                    <button type="submit">Login</button>
                    @if (Route::has('register'))
                        <button><a href="{{ route('register') }}" style="color:white">Register</a></button>
                    @endif
                </div>
            </div>
            </div>
    </form>
    </div>
</body>
</html>