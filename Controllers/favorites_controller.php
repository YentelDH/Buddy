<?php

	require_once 'app.php';

	class FavoritesController
    {
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

		$user = FavoritesModel::getUserById($user_id);

		if ($_COOKIE['password'] === $user->password) {
			$is_password_correct = true;
		}
	}

	$favorites = FavoritesModel::getFavoritesById($user_id);


	// Log Out
	if (isset($_POST['logout'])){
		setcookie('fullname', '');
		setcookie('email', '');
		setcookie('password', '');
		setcookie('userId', '');
		header('location:register');
	}

	// Delete animal from favorite when clicking heart icon
	if (isset($_POST['heart'])){
		$animal_id = $_REQUEST['animal_id'];

		FavoritesModel::deleteFavorite($user_id, $animal_id);

	}