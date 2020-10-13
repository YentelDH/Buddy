<?php

    class HomeModel {

        private $message;

        public function __construct()
        {
            $this->message = "Welcome to the of PHP MVC framework official site.";
        }

		public static function getAnimals() {
			global $db;

			$sql = "SELECT * FROM animals";
 
			$sth = $db->prepare($sql);
			$sth->execute([]);
		
			$animals = $sth->fetchAll();

			return $animals;
		
			$db = null;
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

		public static function addFavorite($user_id, $animal_id){
			global $db;
	
			$sql = "INSERT into favorites
			(animal_id, user_id) values
			(:animal_id, :user_id)
			";

			$sth = $db->prepare($sql);
			
			$sth->execute([
				':animal_id' => $animal_id,
				':user_id' => $user_id,
			]);

			$db = null;
		}
    }