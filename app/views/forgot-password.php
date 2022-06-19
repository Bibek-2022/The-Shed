<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="The Shed, PX2124, Western Sydney University">
    <meta name="author" content="Vaibhav, Bibek, Jack, Reynald">

    <title>The Shed | Fotgot Password</title>

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
                            <h2 class=" font-purple mb-4">Forgot Password</h2>
                        </div>
                        <p>
                                <?php
                                    if (isset($data['email_attempt'])){
                                        if ($data['email_attempt'] == 'success')
                                            echo 'Password reset link has been sent to your email!';
                                    }
                                ?>
                            </p>

                        <form class="login-form" action="/staff/login" method="POST">
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                    aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email" required>
                            </div>

                            <input name="submit" type="submit" id="submit" value="Login" class="btn btn-primary btn-user btn-block">
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="/forgot-password">Go Back to Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

</html>