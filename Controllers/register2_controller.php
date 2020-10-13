<?php

	require_once 'app.php';	 

    class Register2Controller
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
	 
	
	if (isset($_POST['submit'])){
		// Set values as cookies
		setcookie('fullname', $_POST['fullname']);
		setcookie('email', $_POST['email']);
		setcookie('password', $_POST['password']);

		// Get values from form
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		

		Register2Model::addUser($fullname, $email, $password);
		
		header('location:register');
	}