<?php
    
    $conn = new mysqli("localhost", "root", "", "project222");
    if ($conn->connect_error){
        die("Connection failed:" .$conn->connect_error);
    }

    $sql = "SELECT id FROM medicine ";
    $objQuery = $conn->query($sql);
    $id = $_POST['myid'];
    $check = 0;

    while($objResult = $objQuery->fetch_assoc()){
        //echo $objResult["id"];
        if ($id == $objResult["id"]){
            header("Location:update_tool.php");
           
            $check = 1;
        }
        
    }
    if ($check != 1){
        echo "error";
    }
  
    //$id = $_POST['id'];

    
    $conn->close();


?>