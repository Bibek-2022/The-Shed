<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="The Shed, PX2124, Western Sydney University">
    <meta name="author" content="Vaibhav, Bibek, Jack, Reynald">

    <title>The Shed | Signup</title>

    <link href="<?php echo RES_PATH.'css/main.css'?>" rel="stylesheet">
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h2 class=" font-purple mb-4">Create an Account</h2>
                            </div>
                            <!-- todo: front-end: you'll be able to make this more pretty than I ever could -->
                            <?php
                                if (isset($data['register_attempt'])){
                                    if ($data['register_attempt'] == 'fail'){
                                        echo 'Sorry, but your account could not be created at this time. <br />';
                                        echo 'Please ensure that you have a valid token and your email address is unique.';
                                    }
                                }
                            ?>
                            <form class="user" action="/staff/register" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" placeholder="Full Name" name="full_name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" placeholder="Token Code" name="token" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <p>Gender:</p>
                                        <input type="radio" id="male" name="gender" value="m" name="gender">
                                        <label for="male">Male</label>
                                        <input type="radio" id="femlae" name="gender" value="f" name="gender">
                                        <label for="female">Female</label>
                                        <input type="radio" id="other" name="gender" value="o" name="gender">
                                        <label for="other">Other</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <p>Bate of Birth:</p>
                                        <input type="date" id="dob" name="date_of_birth">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="phone" class="form-control form-control-user"
                                        placeholder="Phone Number" name="contact_number">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user"
                                        placeholder="Email Address" name="email_address" required>
                                </div>
                                <!-- todo: js: only allow form to submit if data filled in and passwords the same -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="password-signup"
                                            placeholder="Password" name="password" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="password-signup-re-enter"
                                            placeholder="Re-enter Password" name="password-confirm" required>
                                    </div>
                                </div>
                                <input name="submit" type="submit" id="submit" value="Register Account" class="btn btn-primary btn-user btn-block">
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="/login">Already have an account? Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

</html>