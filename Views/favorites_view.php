<?php

    class FavoritesView
    {
        private $modelObj;

        private $controller;


        function __construct($controller, $model)
        {
            $this->controller = $controller;

            $this->modelObj = $model;
        }
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Buddy</title>
	<link rel="stylesheet" href="./css/main.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<div class="overlay" id="overlay"></div>
	<div class="menu-container" id="menuContainer">
		<div class="menu-account">
			<img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="">
			<p><?php echo $user->fullname ?> </p>
		</div>
		<div class="menu-list">
			<a class="menu-list-item" href="home"><span class="material-icons menu-list">pets</span><p>Adoption</p></a>
			<a class="menu-list-item" href="favorites"><span class="material-icons menu-list">favorite</span><p>Favorites</p></a>
			<a class="menu-list-item"><span class="material-icons menu-list">mail</span><p>Messages</p></a>
		</div>
		<div class="account-bottom">
			<p class="account-bottom-settings">
				<span class="material-icons menu-list settings">settings</span>
				Settings
			</p>
			<div class="vl"></div>
			<?php if(! $is_password_correct) : ?> 
             	<button href="register">Inloggen</button>
			<?php else : ?>
				<form action="home" method="POST">
					<button type="logout" name="logout">Logout</button>
				</form>
			<?php endif; ?>
		</div>
	</div>


	<div class="container index">

		<div class="index-top">
			<div class="menu" id="menuBtn">
				<span class="material-icons menu">menu</span>
			</div>
			<div class="location">
				<p class="location-big fav"><b>Favorites</b></p>
			</div>
		</div>

		<hr>

		<div class="index-sub">

			<form action="">
				<div class="search">
					<span class="material-icons search">search</span>
					<input class="index-search" type="search" placeholder="Search">
				</div>
			</form>

			<div class="filter-scroll">
				<div class="filter-scroll-item active">Dogs</div>
				<div class="filter-scroll-item">Cats</div>
				<div class="filter-scroll-item">Birds</div>
				<div class="filter-scroll-item">Fish</div>
				<div class="filter-scroll-item">Plants</div>
				<div class="filter-scroll-item">Other</div>
			</div>


			<div class="container">
				<div class="row cards">
					<?php foreach ($favorites as $favorite): ?>
						<a class="col-12 col-lg-6 card" href="detail?id=<?php echo $favorite['animal_id']; ?>">
							<div class="row">

								<div class="col-5 nopadding">
									<div class="card-image-frame">
										<img class="card-image" src="<?php echo $favorite['src']; ?>" alt="dog">
									</div>
								</div>

								<div class="col-7 card-content">
									<div class="card-content-top">
										<p class="card-content-title"><?php echo $favorite['name']; ?></p>
										<form action="favorites?animal_id=<?php echo $favorite['animal_id']; ?>" method="post">
											<input type="submit" name="heart" value="favorite" class="material-icons heart"/>
										</form>
									</div>
									<div class="card-content-bottom">
										<p class="card-content-text"><?php echo $favorite['breed']; ?></p>
										<p class="card-content-text2">Already waiting <b>345</b> days for an owner</p>
									</div>
								</div>

							</div>
						</a>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>


	<script>
		const menuBtn = document.getElementById('menuBtn');
		const overlay = document.getElementById('overlay');
		const menuContainer = document.getElementById('menuContainer');

		overlay.addEventListener('click', function(){
			menuContainer.style.display = 'none';
			overlay.style.display = 'none';
		});

		menuBtn.addEventListener('click', function(){
			menuContainer.style.display = 'flex';
			overlay.style.display = 'flex';
		});

		console.log(overlay);

	</script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>