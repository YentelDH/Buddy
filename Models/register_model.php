<?php

    class RegisterModel
    {

        private $message;

        public function __construct()
        {
            $this->message = "Welcome to the of PHP MVC framework official site.";
        }

        public static function getUsers() {
			global $db;
			
			$sql = "SELECT * FROM users";
 
			$sth = $db->prepare($sql);
			$sth->execute([]);
		
			$users = $sth->fetchAll();
			return $users;
		
			$db = null;
		}
    }