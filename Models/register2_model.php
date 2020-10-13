<?php

    class Register2Model
    {

        private $message;

        public function __construct()
        {
            $this->message = "Welcome to the of PHP MVC framework official site.";
		}

		public static function addUser($fullname, $email, $password){
			global $db;
	
			$sql = "INSERT INTO users (fullname, email, password) 
			VALUES('$fullname', '$email', '$password')";
			

			$sth = $db->prepare($sql);
			
			$sth->execute([]);

			$db = null;
		}

    }