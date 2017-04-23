
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

        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 70%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
            <div class="container">
                <div class="site-header">
                    <div class="logo">
                        <h1>PROJECT Dental Clinic</h1>
                    </div>
                    <div class="menu">
                        <div class="navbar">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <i class="fw-icon-th-list"></i>
                            </a>
                            <div class="nav-collapse collapse">
                                <ul class="nav">
                                    <li class="active"><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="contract.html">Contact</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="mini-menu">
            <label>
          <select class="selectnav">
            <option value="#" selected="">Home</option>
            <option value="#">About</option>
            <option value="#">→ Another action</option>
            <option value="#">→ Something else here</option>
            <option value="#">→ Another action</option>
            <option value="#">→ Something else here</option>
            <option value="#">Services</option>
            <option value="#">Work</option>
            <option value="#">Contact</option>
          </select>
          </label>
          </div>
                    </div>
                </div>
            </div>
            
            <div class="container">
                <div class="featured-heading">
                    <h2>จัดการยาและเครื่องมือ</h2>

                </div>
            </div>
            
<?php
        $conn = new mysqli("localhost", "root", "", "project222");
        if ($conn->connect_error){
        die("Connection failed:" .$conn->connect_error);
        }

        $sql = "SELECT * FROM medicine ";
        $objQuery = $conn->query($sql);
        //$id = $_POST['myid'];
        
?>    
   







            <div class="container">
                <div class="site-info">
                <center>
                     <table>
  <tr>
    <th>รหัสอุปกรณ์</th>
    <th>ชื่อ</th>
    <th>คงเหลือ</th>
    <th>ราคา</th>
    <th>วันหมดอายุ</th>
    <th>เพิ่ม</th>
    <th>ลด</th>



  </tr>

<?php

 while($objResult = $objQuery->fetch_assoc()){

        $id1 = $objResult["id"];
        $name1 = $objResult["name"]; 
        $number1 = $objResult["number1"];
        $price = $objResult["price"];
        $expire = $objResult["expire"];
?>
        <tr>
            <td><?php echo $id1; ?></td>
            <td><?php echo $name1; ?></td>
            <td><?php echo $number1; ?></td>
            <td><?php echo $price; ?></td>
            <td><?php echo $expire; ?></td>
            <td>
                <form action="../update2.php" method="get">
                    <?php $id2 = $objResult["id"];
                    $name2 = $objResult["name"]; 
                    $number2 = $objResult["number1"];?>
                    <input type="hidden" name="id2" id="id2" value="<?php echo "$id2"?>" /> 
                    <input type="text" name="newnumber" style="background-color: gray"   onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/>
                    <!--button onclick="myFunction()">เพิ่ม</button-->
                    <button type="submit" id="submit" class="button button-rounded button-flat" >เพิ่ม</button>
                   
                    
                </form>
                

                    <!---?php $sql5 = "UPDATE medicine SET number1=$newnumber WHERE id=$id1";
                        if ($conn->query($sql5) === TRUE) {
                             //echo "Java Script" ;// Echo Java Script ของเราไปเลยครับ เช่น
                           echo"<script language = 'javascript'>";
                           echo"alert('This is Alert Text')";
                           echo"</script>";
                        } else {
                            echo "Error updating record: " . $conn->error;
                        }
                    ?-->

                </form>
                
                
            </td>
            <td>
                <form action="../update2.php" method="get">
                    <?php $id2 = $objResult["id"];
                    $name2 = $objResult["name"]; 
                    $number2 = $objResult["number1"];?>
                    <input type="hidden" name="id2" id="id2" value="<?php echo "$id2"?>" /> 
                    <input type="text" name="newnumber" style="background-color: gray"   onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/>
                    <!--button onclick="myFunction()">เพิ่ม</button-->
                    <button type="submit" id="submit" class="button button-rounded button-flat" >ลบ</button>
                   
                    
                </form>
            </td>
        </tr>
<?php
}
?>

</table>
 

    <?php
        $conn->close();
    ?>       

                    <br>
                    <a href="../imformation.html" class="button button-rounded button-flat" >Back</a>


                    <hr >
                   </center>
                </div>
            </div>
          
            
            
            <div class="container">
                <div class="copy-rights">
                    Copyright(c) website name.  <strong>Designed by:<a href="http://www.alltemplateneeds.com">www.alltemplateneeds.com</a> </strong>/ Images from: <a href="http://wallpaperswide.com">http://wallpaperswide.com</a>/ <a href="http://www.photorack.net">www.photorack.net</a>
                </div>
            </div>
            

    <script>
        function myFunction(number1){
            
            /*if (number1 == 1){
                alert("sss");
            }else{
                alert("xx");
            }*/
            //document.getElementById("fromlogin").action = "update.php";
        }
        function testfunction(){
            alert("ok");
        }
   </script>

    <script>
        
    </script>
    

    </body>
</html>
