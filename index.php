<?php

echo "It's been a long time since the last time i used PHP <br>";
echo "THis is a second message output  <br> ";

$Date  = date('D/M/Y');

$Time = date('H:i A');

echo "It is".$Date."today  <br>";

echo "It is".$Time." Now";

//This is a single line comment

/* This
  is
  multiline
  comment
*/
//This is an integrated HTML template inside a php code file   
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">'. $Date .'</h1>
    <h1 align="center">'. $Time .'</h1>
</body>
</html>'

?>


