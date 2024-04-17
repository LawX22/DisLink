<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link rel="stylesheet" href="./css/signup-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

    <form method="post" id="signupForm">
        <div class="container">
            
            <div class="heading">Signup</div>
            
            <div class="input-group mt-3">
              <span class="icon-addon"><i class="bi bi-person-circle"></i></span>
              <input name="firstname" type="text" class="field p-3" placeholder="First name" >
            </div>
            <div><small class="error-msg first-name-error text-danger"></small></div>

            <div class="input-group mt-3">
              <span class="icon-addon"><i class="bi bi-person-square"></i></span>
              <input name="lastname" type="text" class="field p-3" placeholder="Last name" >
            </div>
            <div><small class="error-msg last-name-error text-danger"></small></div>

            <div class="input-group mt-3">
              <span class="icon-addon"><i class="bi bi-gender-ambiguous"></i></span>
              <select class="select-field" name="gender">
                  <option selected value="">--Select Gender--</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
              </select>
            </div>
            <div><small class="error-msg gender-error text-danger"></small></div>
            
            <div class="input-group mt-3">
              <span class="icon-addon"><i class="bi bi-envelope"></i></span>
              <input name="email" type="text" class="field p-3" placeholder="Email" >
            </div>
            <div><small class="error-msg email-error text-danger"></small></div>
            
            <div class="input-group mt-3">
              <span class="icon-addon"><i class="bi bi-key"></i></span>
              <input name="password" type="password" class="field p-3" placeholder="Password" >
            </div>
            <div><small class="error-msg password-error text-danger"></small></div>

            <div class="input-group mt-3">
              <span class="icon-addon"><i class="bi bi-key-fill"></i></span>
              <input name="retype_password" type="password" class="field p-3" placeholder="Retype Password" >
            </div>

            <button type="submit" class="mt-3 btn btn-primary col-12">Signup</button>
            <div class="text">
                Already have an account? <a href="login.php">login here</a>
            </div>

        </div>
    </form>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/main.js"></script>
    
</body>
</html>
