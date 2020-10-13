<?php

    class RegisterController
    {
        private $modelObj;

        function __construct( $model )
        {
            $this->modelObj = $model;

        }

        public function current()
        {
            return $this->modelObj->message = "About us today changed by aboutController.";
        }
	 }


	require_once 'app.php';	 

	$error = false;
	 
	 if (isset($_POST['submit'])){
		// Set values as cookies
		setcookie('email', $_POST['email']);
		setcookie('password', $_POST['password']);

		// Get values from form
		$email = $_POST['email'];
		$password = $_POST['password'];
	
		$users = RegisterModel::getUsers();
	
		foreach ($users as $key => $user) {
			if ($email === $user['email']) {
				if ($password === $user['password']) {
					setcookie('userId', $user['user_id']);
					header('location:home');
				} else {
					$error = true;
				}
			}  
		}
	}