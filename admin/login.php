<?php 
require_once("../config.php");
require_once BASE_PATH."/connection.php";
require_once BASE_PATH."/functions.php";
?>

<?php 
	if(isset($_POST['submit']))
	{
		$email=$_POST['email'];
		$password=$_POST['password'];

		if(login($email,$password))
		{
			
			redirectTo(BASE_URL."/admin");
		}
		else{
			$error="Username and Password not correct!";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	

	<script src="js/jquery-2.1.4.js"></script>

    <style type="text/css">
        #login-register {
            background: url('images/login-bg.jpeg') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            /* Set rules to fill background */
            min-height: 100%;
            min-width: 1024px;
            /* Set up proportionate scaling */
            width: 100%;
            height: auto;
            /* Set up positioning */
            position: fixed;
            top: 0;
            left: 0;
            color: #fff;
            font-family: arial;
        }

        #formBox {
            margin-top: 135px;
            padding: 20px;
            background: rgba(0, 0, 0, 0.3);
        }

        #formBox #loginPic {
            margin: 0px auto;
            width: 80px;
            height: 80px;
            padding: 10px;
            border-radius: 50%;
            background: #ED5565;
            text-align: center;
            color: #fff;
        }

        #formBox .form-group {
            margin-top: 25px;
        }

        @media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
            #formBox {
                margin-top: 50px;
                padding: 10px;
                background: rgba(0, 0, 0, 0.3);
            }

        }
    </style>
</head>
<body>
<div id="blur-screen">
</div>
<section id="login-register">
    <div class="container">
        <div class="row">
            <div class="col-md-12">


                <div class="col-md-4 col-xs-12 pull-right" id="formBox">
                    <?php
                    	if (isset($error)):
                    ?>
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                               
                                
                                    <li><?=$error ?></li>
                           
                            </ul>
                        </div>
                    <?php endif; ?>
                    <div id="login">
                        <form method="POST" action="">

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    <input type="text" autofocus name="email" value=""
                                           class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-key"></i></div>
                                    <input type="password" name="password" class="form-control"
                                           placeholder="Password">
                                </div>
                            </div>
                            <input class="btn btn-danger" type="submit" name="submit" value="Login" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>