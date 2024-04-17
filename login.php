<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <form id="loginForm">
            <div class="box">
                <div class="heading">Login</div>
                <div><small class="error-msg email-error text-danger js-error js-error-email"></small></div>
                <div class="input-group">
                  <span class="icon-addon"><i class="bi bi-envelope-fill"></i></span>
                  <input name="email" type="text" class="input-field" placeholder="Email" >
                </div>
                <div class="input-group">
                  <span class="icon-addon"><i class="bi bi-key-fill"></i></span>
                  <input name="password" type="password" class="input-field" placeholder="Password" >
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="text">
                    Don't have an account? <a href="signup.php">Sign up here</a>
                </div>
            </div>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/main.js"></script>

</body>
</html>
