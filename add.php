<?php

if(isset($_POST['sbumit'])){
    //check email
    if(empty($_POST['email'])){
        echo 'An email is required <br />';
    }else{
        $email = $_POST['email'];
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo 'EMAI must be valid';
        }
    }

    //check title
        if(empty($_POST['title'])){
        echo 'An title is required <br />';
    }else{
        $title = $_POST['title'];
        if(!preg_match('/^[a-zA-Z/s]+$/',$title)){
            echo 'TItle must be letters and space only';
        }
    }

        if(empty($_POST['ingredients'])){
        echo 'An ingredient is required <br />';
    }else{
        $ingredients = $_POST['ingredients'];
       if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
				echo 'Ingredients must be a comma separated list';
			}
    }
 

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