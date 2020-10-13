<?php

    class FavoritesModel
    {

        private $message;

        public function __construct()
        {
            $this->message = "Welcome to the of PHP MVC framework official site.";
		}
		
		public static function getUserById($id){
			global $db;
	
			$sql = "SELECT * FROM users WHERE user_id = :user_id";
	
			$sth = $db->prepare($sql);
			$sth->execute([
				':user_id' => $id,
			]);
	
			$user = $sth->fetchObject();

			return $user;

			$db = null;
		}

		public static function getFavoritesById($user_id){
			global $db;
	
			$sql = "SELECT *
			FROM favorites
			LEFT JOIN animals ON favorites.animal_id = animals.animal_id
			LEFT JOIN users on favorites.user_id = users.user_id
			WHERE users.user_id = $user_id";
	a
			$sth = $db->prepare($sql);
			// Slechte code, niks in execute -> sql injection
			$sth->execute([]);
	
			$favorites = $sth->fetchAll();

			return $favorites;

			$db = null;
		}

		public static function deleteFavorite($user_id, $animal_id){
			global $db;
	
			$sql = "DELETE from favorites where
			user_id = $user_id and animal_id = $animal_id";

			$sth = $db->prepare($sql);
			
			$sth->execute([]);

			$db = null;
		}
    }