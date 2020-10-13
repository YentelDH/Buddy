<?php

	require_once 'app.php';
	
    class DetailView
    {

        private $modelObj;

        private $controller;


        function __construct($controller, $model)
        {
            $this->controller = $controller;

            $this->modelObj = $model;
		}
	}

	//$animal = DetailModel::getAnimalById();
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Buddy</title>
	<style> <?php include './css/main.css';?> </style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>

	<div class="container detail">
		<a class="icon-arrow" href="javascript:history.back()">
			<span class="material-icons">arrow_back_ios</span>
		</a>

		<div class="detail-image-frame">
			<img class="detail-image" src="<?php echo $animal->src; ?>" alt="">
		</div>

		<div class="card-detail" id="cardDetail">
			<div class="card-content-top">
				<p class="card-content-title"><?php echo $animal->name; ?></p>
				<span class="material-icons heart">favorite_border</span>
			</div>

			<div class="card-content-bottom">
				<div class="card-content-text detail">
					<b><?php echo $animal->breed; ?></b>
					<p>2 years old</p>
				</div>

				<h6>Description</h6>
				<p><?php echo $animal->description; ?></p>
				<p class="card-content-text2">Already waiting <b>345</b> days for an owner</p>
			</div>
		</div>


		<div class="row card-contact">
			<div class="col-7 card-contact-image">
				<img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="">
				<div class="card-contact-owner">
					<b>Owner</b>
					<p>Pets rescue</p>
				</div>
			</div>
			<a class="col-5 card-contact-button" href="" >
				<span class="material-icons pets">pets</span>
				Contact
			</a>
		</div>
	</div>
	

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>