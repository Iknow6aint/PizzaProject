
<?php
//connncetDB
$conn = mysqli_connect('localhost','iknowsaint','iknowsaint','pizza projeect');

//check conneection
if(!$conn){
    echo 'connection error:' . mysqli_connect_error();
}
//write query
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

// make query & get results
$result = mysqli_query($conn,$sql);

// fethc the resulting rows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result from memory
mysqli_free_result($result);

//close connection
mysqli_close($conn);

//print_r($pizza)

?>


<html lang="en">

 <?php include 'templates/header.php'; ?>
<h4 class="center grey-text">Pizzas</h4>
<div class="container">
		<div class="row">

			<?php foreach($pizzas as $pizza){ ?>

				<div class="col s6 md3">
					<div class="card z-depth-0">
						<div class="card-content center">
							<h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
							<ul class="grey-text">
								<?php foreach(explode(',', $pizza['ingredients']) as $ing){ ?>
									<li><?php echo htmlspecialchars($ing); ?></li>
								<?php } ?>
							</ul>
						</div>
						<div class="card-action right-align">
							<a class="brand-text" href="#">more info</a>
						</div>
					</div>
				</div>

			<?php } ?>

		</div>
	</div>

 <?php include 'templates/foooter.php';?>

</body>
</html>