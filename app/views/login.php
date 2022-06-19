<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="The Shed, PX2124, Western Sydney University">
    <meta name="author" content="Vaibhav, Bibek, Jack, Reynald">

    <title>The Shed | Login</title>

    <link href="<?php echo RES_PATH.'css/main.css'?>" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
    <!-- Outer Row -->
    <div class="justify-content-center">
        <div class="col-xl-12 col-lg-12 col-md-9">
            <div class="row before-login-height">
                <div class="col-lg-8 d-none d-lg-block bg-login-image"></div>
                <div class="col-lg-4">
                    <div class="p-5 input-wrapper">
                        <div class="text-center">
                            <h2 class=" font-purple mb-4">The Shed</h2>
                        </div>
                        <p>
                                <?php
                                    if (isset($data['register_attempt'])){
                                        if ($data['register_attempt'] == 'success')
                                            echo 'Successfully registered your account, please sign in.';
                                    }
                                ?>
                            </p>

                        <form class="login-form" id="form-validation" action="/staff/login" method="POST">
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                    aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                                    placeholder="Password" name="password" required>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox small">
                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                    <label class="custom-control-label" for="customCheck">Remember
                                        Me</label>
                                </div>
                            </div>

                            <!-- todo: front-end: could probably make the p tag look more fancy, maybe an error class? -->
                            <p>
                                <?php
                                    if (isset($data['auth'])){
                                        if ($data['auth'] == 'fail')
                                            echo 'Failed authentication attempt!';
                                    }
                                ?>
                            </p>

                            <input name="submit" type="submit" id="submit" value="Login" class="btn btn-primary btn-user btn-block">
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="/forgot-password">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="/signup">Have a token? Create an Account!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

</html>