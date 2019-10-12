
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
$average_Degree = "100, 90, 95, 68, 71, 68, 96, 98, 66, 30, 76, 25, 81, 76, 73,
68, 72, 73, 75, 65, 74, 10, 67, 65, 64, 15, 73, 75, 79, 20";
$Degree_array = explode(',', $average_Degree);
$tot_Degree = 0;
$Degree_array_length = count($Degree_array);
foreach($Degree_array as $Degree)
{
 $tot_Degree += $Degree;
}
 $avg_high_Degree = $tot_Degree/$Degree_array_length;
 echo "Average Degree is : ".$avg_high_Degree."
"; 
sort($Degree_array);
 echo "<br>";
echo " List of five lowest Degrees :";
for ($i=0; $i< 5; $i++)
{ 
echo $Degree_array[$i].", ";
}
 echo "<br>";
echo "List of five highest Degrees :";
for ($i=($Degree_array_length-5); $i< ($Degree_array_length); $i++)
{
echo $Degree_array[$i].", ";
}
?>
    </body>
</html>