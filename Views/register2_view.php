<?php

    class Register2View
    {

        private $modelObj;

        private $controller;


        function __construct($controller, $model)
        {
            $this->controller = $controller;

            $this->modelObj = $model;
        }
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Buddy</title>
	<style> <?php include './css/main.css';?> </style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
	
	<div class="container-signin">
			<div class="arrow-box">
				<a href="register"><span class="material-icons">arrow_back_ios</span></a>
			</div>

		<div class="row register">
			<div class="col-md-12">
				<form action="register2" method="POST">
					<h1 class="signin-title">Register</h1>
					<p class="signin-subtitle">Please make an account to continue</p>
					<div class="form-group">
					  <input type="text" name="fullname" class="form-control signin-input" id="inputName" placeholder="FULL NAME">
					</div>
					<div class="form-group">
					  <input type="email" name="email" class="form-control signin-input" id="inputEmail" aria-describedby="emailHelp" placeholder="EMAIL">
					</div>
					<div class="form-group">
					  <input type="password" name="password" class="form-control signin-input" id="inputPassword" placeholder="PASSWORD">
					</div>
					<div class="button-container">
						<button type="submit" name="submit" class="register-button">Submit</button>
					</div>
				</form>
			</div>
		</div>

		<div class="row">
			<div class="col justify-content-center">
				<p class="signin-bottom">Already have an account? <a class="signin-bottom-link" href="register">Log In</a></p>
			</div>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>