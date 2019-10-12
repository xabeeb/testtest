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
        $positions = array("Manager", "Developer", "Designer", "Sales Manager", "Human Resource", "Senior Engineer");
        $personal_info = array(array("name" => "Heba Heilat", "employee_Id" => 2, "start_work_at" => 2016), array("name" => "Maya Salameh", "employee_Id" => 0, "start_work_at" => 2017), array("name" => "Ameen Ahmad", "employee_Id" => 3, "start_work_at" => 2013), array("name" => "Sami Kamal", "employee_Id" => 4, "start_work_at" => 2015), array("name" => "Jamal Hammori", "employee_Id" => 5, "start_work_at" => 2012), array("name" => "Tala Hisham", "employee_Id" => 1, "start_work_at" => 2017));
        for($i=0;$i<count($positions);$i++){
          $personal_info[$i]["position"]=$positions[$i] ; 
        }
        var_dump($personal_info);
        ?>
    </body>
</html>
