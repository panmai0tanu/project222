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
       
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="css/custom-styles.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/component.css">
        <link rel="stylesheet" href="css/font-awesome-ie7.css">

        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        
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
                                    <li><a href="admin.html">Log Out</a></li>
                                    
                                </ul>
                            </div><!--/.nav-collapse -->
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

                    <form class="form-horizontal input-append" id="fromlogin" name="fromlogin" method="post" action="php/get.php">
                        <h1>id</h1>
                        <input class="span3" name="id" id="id" type="text" placeholder="id" border="1px" ><br>
                        
                        <input type="submit" class="btn" onclick="validateForm()">login</input>
                        <a href="imformation.html" class="btn">back</a>

                        
                    </form>
                </div>
            </div>
          
                             
          
            
            
            <div class="container">
                <div class="copy-rights">
                    Copyright(c) website name.  <strong>Designed by:<a href="http://www.alltemplateneeds.com">www.alltemplateneeds.com</a> </strong>/ Images from: <a href="http://wallpaperswide.com">http://wallpaperswide.com</a>/ <a href="http://www.photorack.net">www.photorack.net</a>
                </div>
            </div>
            
       <script src="js/jquery-1.9.1.js"></script> 
        <script src="js/bootstrap.js"></script>
<script>
$('#myCarousel').carousel({
    interval: 1800
});
</script>


<script>
        function validateForm() {
            //var x = document.getElementById("id");
            //if (x == "555"){
            if ((document.getElementById("id").value == "panmai")&&(document.getElementById("password").value == "12345"))
                {
                    document.getElementById("fromlogin").action = "imformation.html";
                }
            else
                {
                    document.getElementById("fromlogin").action = "admin.html";
                    alert("Username หรือ Password ผิด โปรดลองอีกครั้ง")
                }
            //}
            
            
                    
        }
</script>

    </body>
</html>
