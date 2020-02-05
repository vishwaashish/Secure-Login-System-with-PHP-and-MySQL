                <?php
                    include ("db.php");
                    error_reporting(0);
                    if (isset($_POST["fullname"]))
                    {
                        $name = $_POST['fullname'];
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $gender = $_POST['gender'];
                        $email = $_POST['email'];
                        $phone = $_POST['phoneno'];
                        $sql_u = "SELECT * FROM users WHERE username='$username'";
                        $sql_e = "SELECT * FROM users WHERE email='$email'";
                        $res_u = mysqli_query($connect, $sql_u);
                        $res_e = mysqli_query($connect, $sql_e);

                        if (mysqli_num_rows($res_u) > 0) {
                            $name_error = "Sorry... username already taken";
                            echo "<script type='text/javascript'> onload = function(){alert('$name_error');
                            }</script>";
                                    
                        }else if(mysqli_num_rows($res_e) > 0){
                            $email_error = "Sorry... email already taken"; 	
                            echo "<script type='text/javascript'> onload = function(){alert('$email_error');
                            }</script>";  	
                        }else
                        {
                            $query="INSERT INTO users (fullname,gender,email,username,password,phoneno) VALUES ('$name','$gender','$email','$username','$password','$phone')";
                            $data= mysqli_query($connect,$query);
                            if($data)
                            {
                                $sucess_error = "Success";
                                echo "<script type='text/javascript'> onload = function(){alert('$sucess_error');
                                }</script>";
                            }
                        
                        }
                    }
                ?><!--register end--->


<!DOCTYPE html>
<html>
<title>register</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- Webpage Icon -->
<link rel="shortcut icon" type="image/x-icon" href="img/logo.PNG" /> 



  
<style>

body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
body {
    background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(img/Contact3.jpg);
    background-size: cover;
}
.input--style-3 {
    font-size: 16px;
    color: #ccc;
    background: transparent;
}
input {
    outline: none;
    margin: 0;
    border: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    width: 100%;
    font-size: 14px;
    font-family: inherit;
}



</style>
<body class="">



<div class="p-5" id="main" >

  <div class="container-fluid " id="login1"  >
  
    <div class="text-white p-5 h1 text-center"  style="font-family: 'Sigmar One', cursive;">Technotaught</div>

        <div class="row">
            <div class=" col-sm-0 col-md-3">
            </div>
            <div class="col border p-5 rounded-pill border-primary">
            <ul class="nav nav-tabs justify-content-center">
                <li class="nav-item">
                <a class="nav-link active">REGISTER</a>
                </li>
            </ul>

            <!---Login start--->
                <div class="tab-pane" id="login">
                    <form action="" autocomplete="on" method="POST" ><br>
                        <div class="input-group border-bottom">
                            <input class="input--style-3" type="text" placeholder="Fullname" name="fullname" value="<?php if (isset($fullname)){ echo $fullname; }?>"  required>
                        </div><br>
                        <div class="input-group border-bottom">
                            
                                <input class="input--style-3" type="email" placeholder="Email" name="email" value="<?php if (isset($email)){ echo $email; } ?>" autocomplete="off" required>
                                
                            
                        </div><br>
                        <div class="input-group border-bottom">
                            <div class="form_error" >
                                <input class="input--style-3" type="text" placeholder="Username" name="username" value="<?php if (isset($username)){ echo $username; }?>" autocomplete="off" required>
                               
                            </div>                
                        </div><br>
                        <div class="input-group border-bottom">
                            <input class="input--style-3" type="password" placeholder="Password" name="password" required>
                        </div><br>
                        <div class="input-group">
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadio1" name="gender" class="custom-control-input" value="male" required>
                            <label class="custom-control-label text-white-50" for="customRadio1">Male</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadio2" name="gender" class="custom-control-input" value="female">
                            <label class="custom-control-label text-white-50" for="customRadio2">Female</label>
                            </div> 
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadio3" name="gender" class="custom-control-input" value="other">
                            <label class="custom-control-label text-white-50" for="customRadio3">Other</label>
                            </div> 
                        </div>  <br>                
                       
                        
                        <div class="input-group border-bottom">
                            <input class="input--style-3" type="tel" pattern="[0-9]{10}" id="phoneno" placeholder="Phone" name="phoneno" required>
                        </div><br>
                      
                        
                        <div class="p-t-10" align="center">
                            <button class="btn btn-outline-primary rounded-pill btn-lg font-weight-bolder " type="submit" >Register</button>
                        </div>
                        <div class="text-white  h4 text-center"  style="font-family: 'Sigmar One', cursive;">Already Register:-  <a class="text-success h3"href="login.php"><u>Login</u></a></div>
                    
                    </form>
                    
                        
                </div>
        
          <!---Login end---> 
            </div>
            <div class=" col-sm-0 col-md-3">
            </div>
        </div>
    </div>
  </div>
</div><!--container end-->


 



 
   
 


  

<!-- END PAGE CONTENT -->
<!-- Jquery JS-->
<script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>
</html>
