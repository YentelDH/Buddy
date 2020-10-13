<?php

    class DetailModel {

        private $message;

        public function __construct()
        {
            $this->message = "Welcome to the of PHP MVC framework official site.";
		}
		
		public static function getAnimalById($id){
			global $db;
	
			$sql = "SELECT * FROM animals WHERE animal_id = :animal_id";
			

			$sth = $db->prepare($sql);
			$sth->execute([
				':animal_id' => $id,
			]);

			$animal = $sth->fetchObject();

			return $animal;

			$db = null;
		}
    }