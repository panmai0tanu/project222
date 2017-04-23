
<?php
    

    $conn = new mysqli("localhost", "root", "", "project222");
    if ($conn->connect_error){
        die("Connection failed:" .$conn->connect_error);
    }

    $sql = "SELECT * FROM employee";
    $objQuery = $conn->query($sql);

    $eid = $_POST["id"];

    while($objResult = $objQuery->fetch_assoc()){
        if($eid == $objResult["id"]){
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
       
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/bootstrap-responsive.css">
         <link rel="stylesheet" href="../css/custom-styles.css">
        <link rel="stylesheet" href="../css/font-awesome.css">
        <link rel="stylesheet" href="../css/component.css">
        <link rel="stylesheet" href="../css/font-awesome-ie7.css">
            <link rel="stylesheet" href="../css/buttons.css">
        <script type="text/javascript" src="../js/buttons.js"></script>
        <script src="../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        
            
            <div >
                <div >
                <center>
                <h3>barcode</h3>
                   <form action="insertMedicine.php" method="post">
                        <input type="hidden" name="eid" id="eid" value="<?php echo "$eid"?>" />
                        <input type="text" name="id_medicine" style="background: gray" size="5" maxlength="13" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}" required/>
                            <br/>
                        <h3>ชื่อยา</h3>
                        <input type="text" name="name" style="background: gray" size="5" required/>
                        <br>

                        <h3>จำนวน</h3>
                        <input type="text" name="number" style="background: gray" size="5"  onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}" required/>
                        <br>

                        <H3>วันหมดอายุ</H3>
                        <input type="date" name="Date" style="background: gray" required>
                        <br><link rel="stylesheet" href="css/custom-styles.css" >

                        <h3>ราคา (บาท)</h3>
                        <input type="text" name="price" style="background: gray" size="5"  onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}" required/>
                        

                    <br>
                    <a href="../buyMedicine.html" class="button button-rounded button-flat" style="background: gray; color: white">Back</a>
                    <input type="Submit" class="button button-rounded button-flat"  style="background: gray" ></form>
                    
                </form>


                    <hr >
                    </center>
                   
                </div>
            </div>
          
            
            
            
            
       <script src="js/jquery-1.9.1.js"></script> 
<script src="js/bootstrap.js"></script>
<script>
$('#myCarousel').carousel({
    interval: 1800
});
</script>


<p id="demo"></p>

<script>
function myFunction() {
    var x = document.getElementById("myDate").value;
    document.getElementById("demo").innerHTML = x;
}
</script>

<p id="demo"></p>

<script>
function myFunction() {
    var x = document.getElementById("myNumber").value;
    document.getElementById("demo").innerHTML = x;
}
</script>
    </body>
</html>






<?php


            return;
        }
    }
    echo "No this code!!";
    ?>
    <a href="../buyMedicine.html"  >back
<?php



?>