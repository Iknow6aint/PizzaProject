
<?php
//connncetDB
$conn = mysqli_connect('localhost','iknowsaint','iknowsaint','pizza projeect');

//check conneection
if(!$conn){
    echo 'connection error:' . mysqli_connect_error();
}
//write query
$sql = 'SELECT * FROM pizzas';

// make query & get results
$results = mysqli_query($conn,$sql);

// fethc the resulting rows as an array
$pizzas = mysqli_fetch_all($results,MYSQLI_ASSOC);

// free result from memory
mySqli_free_result($results);

//close connection
mysqli_close($conn);

print_r($pizzas)

?>


<html lang="en">

 <?php include 'templates/header.php'; ?>
 <?php include 'templates/foooter.php';?>

</body>
</html>