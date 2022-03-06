<?php
session_start();
if(isset($_SESSION['user'])){
    header('location: index.php');
}



?>
<style>
    .container{
        width: 100%;
        padding: 100px;
    }
    form{
        display: block;
    }
</style>

<div class="container">
    <h1>This is Request And POST</h1>

    <form  method="POST">
        <input type="text" name="users" plaseholder="enter name">
        <input type="email" name="email" plaseholder="enter email">
        <input type="submit" value="send">
    </form>
</div>

<?php

if(isset($_POST['users'])){
    $sesion = $_POST['users'];

$_SESSION['user'] = $sesion;
}