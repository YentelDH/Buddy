<?php

	require_once 'app.php';

    class AnimalcrudView
    {
        private $modelObj;

        private $controller;


        function __construct($controller, $model)
        {
            $this->controller = $controller;

            $this->modelObj = $model;
        }
	}

	if (isset($GET['delete'])){
		$id = $_GET['delete'];
		
		AnimalcrudModel::deleteAnimal($id);
	}
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

	<div class="row justify-content-center" id="addPanel">
		<form action="animalcrud" method="POST" enctype="multipart/form-data">
			<!-- <div class="form-group">
				<label for="">Image</label>
				<input type="file" name="image" class="form-control" placeholder="Image">
			</div> -->

			<div class="form-group">
				<label for="">Name</label>
				<input type="text" name="name" class="form-control" placeholder="Name">
			</div>

			<div class="form-group">
				<label for="">Breed</label>
				<input type="text" name="breed" class="form-control" placeholder="Breed">
			</div>

			<div class="form-group">
				<label for="">Birth</label>
				<input type="date" name="birth" class="form-control" placeholder="birth">
			</div>

			<div class="form-group">
				<label for="">Description</label>
				<textarea type="text" name="description" class="form-control" placeholder="Description" rows="4" cols="50"></textarea>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary" name="submit" id="submitBtn">Add</button>
			</div>
		</form>
	</div>

	<div class="overlay" id="overlay"></div>

	<div class="container-lg">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-sm-8"><h2>Animal <b>Details</b></h2></div>
						<div class="col-sm-4">
							<button type="button" class="btn btn-info add-new" id="addPanelBtn"><i class="fa fa-plus"></i> Add Animal</button>
						</div>
					</div>
				</div>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Name</th>
							<th>Breed</th>
							<th>Birth</th>
							<th>Description</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($animals as $animal): ?>
							<tr>
								<td><?php echo $animal['name']; ?></td>
								<td><?php echo $animal['breed']; ?></td>
								<td><?php echo $animal['birth']; ?></td>
								<td><?php echo $animal['description']; ?></td>							
								<td>
									<form action="animalcrud?animal_id=<?php echo $animal['animal_id']; ?>" method="post">
										<input type="submit" name="edit" value="&#xE254;" class="material-icons edit"/>
										<input type="submit" name="delete" value="&#xE872;" class="material-icons delete"/>
									</form>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>    

	<script>
		const addPanel = document.getElementById('addPanel');
		const overlay = document.getElementById('overlay');

		const addPanelBtn = document.getElementById('addPanelBtn');
		const submitBtn = document.getElementById('submitBtn');

		addPanelBtn.addEventListener('click', function(){
			addPanel.style.display = 'flex';
			overlay.style.display = 'flex';
		});

		overlay.addEventListener('click', function(){
			addPanel.style.display = 'none';
			overlay.style.display = 'none';
		});

		submitBtn.addEventListener('click', function(){
			addPanel.style.display = 'none';
			overlay.style.display = 'none';
		});


	</script>
	

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
