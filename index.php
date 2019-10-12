<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Php</title>
    </head>
    <body> 
   <?php
$text = 'We Are Web Developers And Designers';
$text = preg_replace('/(\b[a-z])/i','<span style="color:blue;">\1</span>',$text);
echo $text;
?>
    </body>
</html>
