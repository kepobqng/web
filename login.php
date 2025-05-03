<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Double Slider Login / Registration Form</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container" id="container">

        <div class="form-container login-container">
            <form action="#">
                <h1>Hallo cantikku</h1>
                <label>mwehehehehehe <3 </label>

            </form>
        </div>

        <div class="form-container register-container">
            <form action="ceklogin.php" method="post">
                <h1>Login here.</h1>
                <input type="text" name="nama" id="username" placeholder="Username" required>
                <input type="password" name="pass" id="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>

        </div>



        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">

                    <button id="login">
                        <i class="lni lni-arrow-left login"> </i></button>
                </div>
                <div class="overlay-panel overlay-right">

                    <button id="register">Login
                        <i class="lni lni-arrow-right register"> </i></button>
                </div>
            </div>
        </div>

    </div>
    <script src="script.js"></script>

</body>

</html>