<?php

if(isset($_POST['sbumit'])){
    echo htmlspecialchars ($_POST['email']);
    echo htmlspecialchars($_POST['ingredients']);
    echo htmlspecialchars($_POST['title']);
}


?>


<html lang="en">

 <?php include 'templates/header.php'; ?>

 <section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
     <form class="white" action="add.php" method="POST">
        <Label>YOUR EMAIL</Label>
        <input type="text" name="email">
        <Label>Pizza TItlle</Label>
        <input type="text" name="title">
        <Label>Ingredients(comma separated):</Label>
        <input type="text" name="ingredients">
        <div class= "center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
     </form>
 </section>



 <?php include 'templates/foooter.php';?>

</body>
</html>