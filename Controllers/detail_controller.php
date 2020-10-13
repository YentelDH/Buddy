<?php

	require_once 'app.php';

    class DetailController {
        private $modelObj;

        function __construct( $model )
        {
            $this->modelObj = $model;

        }
	 }

	 $id = $_REQUEST['id'];

	 $animal = DetailModel::getAnimalById($id);
