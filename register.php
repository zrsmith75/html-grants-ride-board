<?php require 'connections/connections.php'; ?>
<?php 
    print_r($_POST);
    if(isset($_POST['Register'])) {
       
    //   session_start();
       
       $FName = $_POST['First_Name'];
       $LName = $_POST['Last_Name'];
       $Email = $_POST['Email'];
       $PW = $_POST['Password'];
       
       $StorePassword = password_hash($PW, PASSWORD_BCRYPT, array('cost' => 10));
       
       $query = "INSERT INTO users (Fname, Lname, Email, Password) VALUES ('$FName', '$LName','$Email', '$StorePassword')";
       $results = $local->query($query) or die($local->error);
       //header('Location: login.php');
        echo 'UserID = '.$row['UserID'];
        print_r($_SESSION);
    }

?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/../css/info.css" type="text/css" />
    <link rel="stylesheet" href="/../css/menu.css" type="text/css" />
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>

    <div class="container">
        <div class="header">
            
        </div>
        <div class="menu">
            <div id="menu">
                <nav>
                    <ul id="cssmenu">
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Log In</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="left-body">
            
        </div>
        <div class="right-body">
            <form action="" method="post" name="RegisterForm" id="RegisterForm">
                <div class="formElement">
                    <input type="text" name="First_Name" required="required" class="TField" id="First_Name" placeholder="First Name"/>
                </div>
                <div class="formElement">
                    <input type="text" name="Last_Name" required="required" class="TField" id="Last_Name" placeholder="Last Name"/>
                </div>
                <div class="formElement">
                    <input type="text" name="Email" required="required" class="TField" id="Email" placeholder="Email"/>
                </div>
                <div class="formElement">
                    <input type="text" name="Password" required="required" class="TField" id="Password" placeholder="Password"/>
                </div>
                <div class="formElement">
                    <input name="Register" type="submit" class="button" id="Register" value="Register" />
                </div>
            </form>
        </div>
        <div class="footer">
       
        </div>
    </div>
    

</body>
</html>