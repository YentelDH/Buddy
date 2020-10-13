<?php
	require_once 'app.php';

    class AnimalcrudController
    {
        private $modelObj;

        function __construct( $model )
        {
            $this->modelObj = $model;

        }
	}

	// Show all animals
	$animals = AnimalcrudModel::getAnimals();

	if (isset($_POST['submit'])){
		// Get values from form
		$name = $_POST['name'];
		$breed = $_POST['breed'];
		$birth = $_POST['birth'];
		$description = $_POST['description'];

		AnimalcrudModel::addAnimal($name, $breed, $birth, $description);
	}

	// Delete animal 
	if (isset($_POST['delete'])){
		$animal_id = $_REQUEST['animal_id'];

		AnimalcrudModel::deleteAnimal($animal_id);

		header('location:animalcrud');
	}

	// Upload image
	/* $file = $_FILES['image'];
	$filetarget = '../images/' . basename($file['name']);
	$fileinfo = pathinfo('../images/' . $file['name']);
	$fileext = strtolower($fileinfo['extension']);
	
	$SAFE_EXT = array('jpg', 'png', 'jpeg');
	
	if (! in_array($fileext, $SAFE_EXT)) {
		alert('Yes');
	} else {
		move_uploaded_file($file['tmp_name'], $filetarget);
		AnimalcrudModel::addAnimal($fileinfo['filename'] . '.' . $fileext, $name, $breed, $birth, $description);
		alert('ok');
	} */
	 
	/* $image = $_POST['image'];
	$name = $_POST['name'];
	$breed = $_POST['breed'];
	$birth = $_POST['birth'];
	$description = $_POST['description'];

*/