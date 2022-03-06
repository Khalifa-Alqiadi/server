<?php
    session_start();
  if(isset($_SESSION['user'])){
      echo "<h1>" . $_SESSION['user'] . "</h1>";

// Using var_dump function on
// different data type variables
var_dump(var_dump(45, 62.1, TRUE, 
    "sravan", array(1, 2, 3, 4,5,6))
);


$x = "Khalifa alqiadi";
$y = 26;

echo "<h1>welcome " . $x . "</h1>
    <p> Your age" . $y . "</p>";

echo "Welcome", "Khalifa", "Alqiadi";
  print("<h1>". $x . "</h1>");

  $firends = array('abdalrhman', 'naif', 'salman');
  echo "<pre>";
  print_r($firends);
  echo "</pre>";
  $firends = array('abdalrhman', 'naif', 'salman');
  echo "<pre>";
  var_dump($firends);
  echo "</pre>";

  $rest = substr("abcdef", -2);
  echo $rest . "<br>";
  $rest = substr("abcdef", 0, -1);
  echo $rest;

function test() {
    $foo = "local variable";

    echo '$foo in global scope: ' . $GLOBALS["foo"] . "\n";
    echo '$foo in current scope: ' . $foo . "\n";
}

$foo = "Example content";
test();

$server = array('GATEWAY_INTERFACE',
'SERVER_ADDR',
'SERVER_NAME',
'SERVER_SOFTWARE',
'SERVER_PROTOCOL',
'REQUEST_METHOD',
'REQUEST_TIME',
'REQUEST_TIME_FLOAT',
'QUERY_STRING',
'DOCUMENT_ROOT',
'HTTP_ACCEPT_ENCODING',
'HTTP_ACCEPT_LANGUAGE',
'HTTP_CONNECTION',
'HTTP_HOST',
'REMOTE_PORT',
);
echo "<h1 style='background-color:#white; padding: 10px'> this is '\$_SERVER</h1>";
foreach($server as $serverInfo){
    echo "<h1 style='background-color:#CCC; padding: 10px'>" . $serverInfo .":" . $_SERVER[$serverInfo] ."<br>";
}
?>

<h1>This is Request And POST</h1>

<form action="request.php" method="POST">
    <input type="text" name="user" plaseholder="enter name">
    <input type="email" name="email" plaseholder="enter email">
    <input type="submit" value="send">
</form>


<h1>This is Request And POST</h1>

<form action="request.php" method="GET">
    <input type="text" name="user" plaseholder="enter name">
    <input type="email" name="email" plaseholder="enter email">
    <input type="submit" value="send">
</form>


<?php
  }else{
    header('location: login.php');
}