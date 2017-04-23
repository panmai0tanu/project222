<?php

    $conn = new mysqli("localhost", "root", "", "project222");
    if ($conn->connect_error){
        die("Connection failed:" .$conn->connect_error);
    }
    $id = $_POST["id"];
    $fname = $_POST["name"];
    $lname = $_POST["lastname"];
    $bdate = $_POST["birthday"];
    $age = $_POST["age"];
    $nodoctor = $_POST["nodoctor"];
    $salary = $_POST["salary"] ;
    settype($fname, "string");
    settype($lname, "string");


    if($fname == NULL){
        echo "null"."<br>";
    }
    
    if (strlen($id) == 9){
        
        $sql1 = "INSERT INTO `doctor`(`id`, `fname`, `lname`, `bdate`, `age`, `nodoctor`, `salary`) VALUES ($id,'$fname','$lname','$bdate','$age','$nodoctor','$salary')";
                
            if ($conn->query($sql1) == TRUE) {
                
                $check = 1;
            }
            else {
                 
                $check = 0;
            }
        $conn->close();
          
        
    }else{
        
        $check = -1;
    }


    if ($check == 1){
        ?>
        <form action="../imformation.html" method="post">
        <?php
        echo "Record updated successfully";
        
    }
    else if ($check == -1){
        ?>
        <form action="../adddoctor.html" method="post">
        <?php
        echo "Error you have to input id length as nine!!!";
        
    }
  
    else{
        ?>
        <form action="../adddoctor.html" method="post">
        <?php
        echo "Error updating record: " . $conn->error;
    }
        ?>
    
        <button type="submit" >Back</button>
    </form>