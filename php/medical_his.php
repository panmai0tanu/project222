<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>
<body class="w3-light-grey">

<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>PROJECT DENTAL CLINIC</b></h1>
 
</header>
<!-- Header -->
<header class="w3-display-container" style="max-width:1500px;">
  <img class="w3-image" src="doctor.jpg" alt="The Hotel" style="min-width:1000px" width="1500" height="800">
  <div class="w3-display-left w3-padding w3-col l6 m8">
    <div class="w3-container w3-red">
      <h2><i class="fa fa-bed w3-margin-right"></i>ข้อมูลผู้ป่วย</h2>
    </div>
    <div class="w3-container w3-white w3-padding-16">
      <form action="php/setdata.php" method="post">
        <div class="w3-row-padding" style="margin:0 -16px;">

        <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-male"></i> ID ผู้ป่วย</label>
            <input class="w3-input w3-border" type="text"  name="id" onKeyUp=" if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}" >
          </div>
          
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-male"></i> ชื่อ</label>
            <input class="w3-input w3-border" type="text"  name="name" onKeyUp="if(!(isNaN(this.value))) { alert('กรุณากรอกอักษร'); this.value='';}" >
          </div>
          
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-male"></i> นามสกุล</label>
            <input class="w3-input w3-border" type="text"  name="lastname" onKeyUp="if(!(isNaN(this.value))) { alert('กรุณากรอกอักษร'); this.value='';}" >
          </div>
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-calendar-o"></i> วันเกิด</label>
            <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="birthday" required>
          </div>
          
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-male"></i> อายุ</label>
            <input class="w3-input w3-border" type="text"  name="age" onKeyUp=" if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}" >
          </div>
        
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-male"></i> อาการ</label>
            <input class="w3-input w3-border" type="text"  name="how" onKeyUp="if(!(isNaN(this.value))) { alert('กรุณากรอกอักษร'); this.value='';}" >
          </div>

          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-male"></i> ยาที่แพ้</label>
            <input class="w3-input w3-border" type="text"  name="medicine" onKeyUp="if(!(isNaN(this.value))) { alert('กรุณากรอกอักษร'); this.value='';}">
          </div>
          <br>
        <br>  
        <button class="w3-button w3-dark-grey" type="submit"><i class="fa fa-search w3-margin-right"></i> SUBMIT</button>
      </form>
    </div>
  </div>
</header>

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
    $how = $_POST["how"];
    $medicine = $_POST["medicine"] ;
    settype($fname, "string");
    settype($lname, "string");
    settype($how, "string");
    settype($medicine, "string");

    
    if (strlen($id) == 9){
        if ($fname != NULL){
            if ($lname != NULL){
                $sql1 = "INSERT INTO `patient`(`id`, `fname`, `lname`, `bdate`, `age`, `symptom`, `emedicine`) VALUES ($id,'$fname','$lname','$bdate','$age','$how','$medicine')";
                
                if ($conn->query($sql1) == TRUE) {
                        echo "Record updated successfully";
                    }
                else {
                        echo "Error updating record: " . $conn->error;
                        
                    }
                    $conn->close();
            }else{
                echo "please input last name";
            }
            
        }else{
            echo "Please input name";
        }
        
    }else{
        echo "Error you have to input id length as nine!!!";
    }



?>