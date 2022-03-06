<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo $_POST['user'] . "<br>";
    echo $_POST['email'] . "<br>";
}
elseif($_SERVER['REQUEST_METHOD'] == 'GET'){
    echo $_GET['user'] . "<br>";
    echo $_GET['email'] . "<br>";
}
?>