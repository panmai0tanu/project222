


<?php 
$conn = new mysqli("localhost", "root", "", "project222");
if ($conn->connect_error){
    die("Connection failed:" .$conn->connect_error);
}

$id2 = $_GET["id2"];
$newnumber = $_GET["newnumber"];

$sql = "SELECT * FROM medicine ";
$objQuery = $conn->query($sql);


$objResult = $objQuery->fetch_assoc();

    

    settype($newnumber, "int");
    

    //UPDATE `medicine` SET `number1`=500 WHERE id=123456789
    $sql1 = "UPDATE medicine SET number1=abs($newnumber+number1) WHERE id=$id2";
    if ($conn->query($sql1) == TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
        
    }
?>

<input type="submit" class="btn" onclick=" opentab()" value="BACK"></input>
<?php
?>    
<script> 
    function opentab(){
        location.href = "update_tool.php";
    }

</script>











