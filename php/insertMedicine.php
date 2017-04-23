<?php
    $conn = new mysqli("localhost", "root", "", "project222");
    if ($conn->connect_error){
        die("Connection failed:" .$conn->connect_error);
    }

    $id = $_POST["id_medicine"];
    $number = $_POST["number"];
    $price = $_POST["price"];
    $name = $_POST["name"];
    $date = $_POST["Date"];
    $eid = $_POST["eid"];

    settype($name, "string");
    echo "$name";

    

?>

        <form action="get.php" method="post"> 
            <input type="hidden" name="id" id="id" value="<?php echo "$eid"?>" />
<?php

    if(strlen($id) == 13){

    $sql1 = "INSERT INTO `medicine`(`id`, `number1`, `price`, `expire`, `name`) VALUES ($id, $number, $price, $date, 'primary12')";
                
                if ($conn->query($sql1) == TRUE) {
                        $sql2 = "INSERT INTO `order`(`idps`, `iditem`, `number1`) VALUES ($eid,$id,$number)";
                        echo "Record updated successfully";
                    }
                else {
                        echo "Error updating record: " . $conn->error;
                        
                    }
                    $conn->close();





    }else{
        echo "Error code medicine";  
    }


?>
            <button type="submit" >Back</button>
        </form>