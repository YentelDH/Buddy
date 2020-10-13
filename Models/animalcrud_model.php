<?php

    class AnimalcrudModel
    {

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

		public static function addAnimal($name, $breed, $birth, $description){
			global $db;

			$sql ="INSERT INTO animals (src, name, breed, birth, description, kind_id, shelter_id) 
			VALUES('https://images.unsplash.com/photo-1530126483408-aa533e55bdb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=701&q=80',
			'$name', '$breed', '$birth', '$description', '1', '1')";
	
			$sth = $db->prepare($sql);
			$sth->execute([]);

			$db = null;
		} 

		public static function deleteAnimal($animal_id){
			global $db;
	
			$sql = "DELETE from animals where
			animal_id = $animal_id";

			$sth = $db->prepare($sql);
			
			$sth->execute([]);

			$db = null;
		} 
        
    }