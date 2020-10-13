<?php

	require_once 'app.php';

    class HomeController {
        private $modelObj;

        function __construct( $model )
        {
            $this->modelObj = $model;

        }
	 }

	// Change HTML when (not) logged in 
	$is_password_correct = false;
	if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
		$user_id = $_COOKIE['userId'];

		$user = HomeModel::getUserById($user_id);

		if ($_COOKIE['password'] === $user->password) {
			$is_password_correct = true;
		}
	}

	// Reset cookies when logging out
	if (isset($_POST['logout'])){
		setcookie('fullname', '');
		setcookie('email', '');
		setcookie('password', '');
		setcookie('userId', '');
		header('location:register');
	}

	// Show all animals
	$animals = HomeModel::getAnimals();

	// Add animal to favorite when clicking heart icon
	if (isset($_POST['heart'])){
		$animal_id = $_REQUEST['animal_id'];

		HomeModel::addFavorite($user_id, $animal_id);

		header('location:home');
	}


