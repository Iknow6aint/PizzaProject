<?php
//connncetDB
$conn = mysqli_connect('localhost','iknowsaint','iknowsaint','pizza projeect');

//check conneection
if(!$conn){
    echo 'connection error:' . mysqli_connect_error();
}

?>