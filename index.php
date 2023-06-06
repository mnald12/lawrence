<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in</title>
    <link rel="stylesheet" href="./template/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="./template/css/style.css?v='<?= time() ?>'">
</head>
<body>


    <?php if(isset($_SESSION['register-message'])): ?>
        <script>
            alert("<?= $_SESSION['register-message']; ?>")
        </script>
        <?php unset($_SESSION['register-message']); ?>
    <?php endif ?>

    <?php if(isset($_SESSION['login-message'])): ?>
        <script>
            alert("<?= $_SESSION['login-message']; ?>")
        </script>
        <?php unset($_SESSION['login-message']); ?>
    <?php endif ?>

    <div class="main">
        <section class="signup" id="signup" style="display: none">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" action="./register.php">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="uname"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="uname" placeholder="Username" required/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_password" id="re_pass" placeholder="Repeat your password" required/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="./template/images/bg4.jpg" alt="sing up image"></figure>
                        <a href="#" id="already" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="sign-in" id="signin">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="./template/images/bg3.jpg" alt="sing up image"></figure>
                        <a href="#" id="create" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        <form method="POST" class="register-form" id="login-form" action="./login.php">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="your_name" placeholder="Username"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="./template/vendor/jquery/jquery.min.js"></script>
    <script src="./template/js/main.js"></script>
    <script src="./template/js/togs.js"></script>
</body>
</html>