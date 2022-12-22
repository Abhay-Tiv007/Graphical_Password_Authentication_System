<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    
    

    <script>
        function passupd(img)
        {
            document.getElementById("passo").value+=img;
            document.getElementById("pass").value+='*';
            //document.getElementById("image").style.backgroundColor = 'Pink';
            //setTimeout("ChangeColor2()",2000);  
        }
        
        
    </script>
    <style>
        #image{
        padding: 5px;        
    }
    .btn {
          background-color: #ddd;
          border: none;
          color: black;
          text-align: center;
          font-size: 16px;
          margin: 4px 2px;
          transition: 0.3s;
        }

        .btn:hover {
          background-color: #59FF33;
          color: white;
        }
        .btn-group button {
          background-color: #2BAFC3; /* Green background */
          border: 1px solid green; /* Green border */
          color: white; /* White text */
          padding: 10px 24px; /* Some padding */
          cursor: pointer; /* Pointer/hand icon */
          float: left; /* Float the buttons side by side */
          font-size: 18px;
        }
        
        .btn-group button:not(:last-child) {
          border-right: none; /* Prevent double borders */
        }
        
        /* Clear floats (clearfix hack) */
        .btn-group:after {
          content: "";
          clear: both;
          display: table;
        }
        
        /* Add a background color on hover */
        .btn-group button:hover {
          background-color: #899B9E;
        }
        
        .btn-group button.active {
          background-color: blue;
          color: white;
        }
    </style>
    
</head>
<body>
    <?php
        $a=2;
        $b=10;
        if(!empty($_POST))
        {
            $btn=$_POST['submit'];
            if ($btn=="Submit Account")
            {
                $con=new mysqli('localhost','id18630204_signup','BxUZqxy7%)x>kfhk','id18630204_sih') or die("Error".mysqli_error($con));
    
                $email=$_POST['email'];
                $password=$_POST['passwordo'];
                $passwordi=$_POST['password'];
                $letcount12=strlen($passwordi);
                $passwordco=$_POST['passwordco'];
    
                
                   
                    if ($password!="" && $password==$passwordco)
                    {
                        if($a<=$letcount12 && $letcount12<=$b)
                        {
                            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                            $update_query="update user set password='$hashed_password' where email='$email'";
                            if(mysqli_query($con,$update_query))
                            {
                                echo '<script>alert("Password Update Successfully");
                                window.location = "http://zeitx.ml/initial.php";</script>';
                            }
                        }
                        else
                    {
                        echo '<center><div style="background-color: red; color: white; font-size: 130%; width: 220px; box-shadow: 0px 2px 5px black; margin-bottom: 30px;">You Can Choose Max 10 and Min 2 Images</div></center>';
                    }
                    }
    
                    
                    else
                    {
                        echo "<script>alert('Confirm Password is not same as Entered Password!! Try Again!');</script>";
                    }
            }
        }
        ?>
    <?php  
            if(!empty($_POST))
            {
                $btn=$_POST['submit'];
                if ($btn=="Next")
                {
                    $con=new mysqli('localhost','id18630204_signup','BxUZqxy7%)x>kfhk','id18630204_sih') or die("Error".mysqli_error($con));
                    $emaili=$_POST['email'];
                    $ansi=$_POST['ans'];
                   
                    $sql=mysqli_query($con,"Select * from user where email='$emaili';");
                    $row=mysqli_fetch_array($sql);
                    $question=$row['question'];
                    $answer=$row['answer'];
    
                    if ($ansi == $answer)
                    {
                
                        echo '
                        <section>
                            <h3>
                            <div id="right">Reset Password</div>
                            </h3>
                            <p>
                                <br>
                                <script src="signup.js"></script>
                                
                                <form action="" method="post">
                                    <div>
                                        <input class="form" type="email" name="email" id="name"  value="'.$emaili.'" readonly>
                                    </div>
                                        
                                        <input class="form" type="password" name="password" id="pass"  placeholder="&#128274; Create Password" readonly>
                                        <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;color: white;" onclick="myFunction()"></i>
                                    </div>
                                    <input class="form" type="hidden" name="passwordo" id="passo">
                                    <input class="form" type="hidden" name="passwordco" id="passco">
                                    
                                    
                                    
                                   <!-- <input class="form" type="hidden" name="passwordco" id="passco" onkeyup="return passwordChanged();">
                                   <div class="centre">
                                        <input class="form" type="password" name="confirmpassword" id="pass1"  placeholder="&#128274; Confirm Password" style="margin-left: 95px;">
                                        <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;color: white;" onclick="myFunction1()"></i>
                                    </div> -->
    
                                    <div id="str">
                                        <p id="pwdstrength" style="color: white; margin-left: 150px; margin-top: 20px;">PASSWORD STRENGTH:</p>
                                        <span id="strength" class="badge displayBadge" style="color:red; margin-left: 200px;">Select Image</span>
                            
                                    </div>
                                    <br>
                                    <center>
                                    <div class="btn-group" style="margin-left:100px;" id="option">
                                    <button type="button" class="tablinks" onClick="myFunction0();" id="defaultOpen">Image</button>
                                    <button type="button" class="tablinks" onClick="myFunction2();">Shape</button>
                                    <button type="button" class="tablinks" onClick="myFunction3();">Puzzle</button>
                                    </div>
                                    <br><br>
                                    
                                    <div id="image" class="tabcontent" style="margin-left:36px;">';
                                    
                                    $arr=array('1123.jpg','1225.jpg','1308.jpg','9384.jpg','4515.jpg','1612.jpg','1312.jpg','1819.jpg','1999.jpg','2012.jpg','2115.jpg','2121.jpg','2315.jpg','7545.jpg','2533.jpg','2612.jpg','1525.jpg','2800.jpg','2323.jpg','3011.jpg');
                                    shuffle($arr);
                                    echo '<center>';
                                    for ($x = 0; $x <= 4; $x++)
                                    {
                                        $va=substr($arr[$x],0,4);
                    
                                        echo '&nbsp<button id="butt" class="btn" type="button" onClick="passupd('.$va.');"><img src="image/'.$arr[$x].'" height="60px" width="60px" id="image" ></button>';
                                    }
                                    echo '<br><br>';
                                    for ($x = 5; $x <= 9; $x++)
                                    {
                                        $va=substr($arr[$x],0,4);
                                        echo '&nbsp<button id="butt" class="btn" type="button" onClick="passupd('.$va.');"><img src="image/'.$arr[$x].'" height="60px" width="60px" id="image" ></button>';
                                    }
                                    echo '<br><br>';
                                    for ($x = 10; $x <= 14; $x++)
                                    {
                                        $va=substr($arr[$x],0,4);
                                        echo '&nbsp<button id="butt" class="btn" type="button" onClick="passupd('.$va.');"><img src="image/'.$arr[$x].'" height="60px" width="60px" id="image" ></button>';
                                    }
                                    echo '<br><br>';
                                    for ($x = 15; $x <= 19; $x++)
                                    {
                                        $va=substr($arr[$x],0,4);
                                        echo '&nbsp<button id="butt" class="btn" type="button" onClick="passupd('.$va.');"><img src="image/'.$arr[$x].'" height="60px" width="60px" id="image" ></button>';
                                    }
                                    echo '</center></div>';
                                    
                                    
                                    
                                    
                                    
                                    echo '<div id="shape" class="tabcontent" style="display:none; margin-left:33px;">';
                                    
                                    $arr=array('9521.jpg','6308.png','1095.jpg','1209.webp','1287.png','1563.png','2376.png','2840.png','3987.png','4554.png','5002.webp','6194.webp','6349.png','6670.png','6879.png','6935.png','7745.png','8026.jpg','9823.webp','9987.webp');
                                    shuffle($arr);
                                    echo '<center>';
                                    for ($x = 0; $x <= 4; $x++)
                                    {
                                        $va=substr($arr[$x],0,4);
                    
                                        echo '&nbsp<button id="butt" class="btn" type="button" onClick="passupd('.$va.');"><img src="image/'.$arr[$x].'" height="60px" width="60px" id="image" ></button>';
                                    }
                                    echo '<br><br>';
                                    for ($x = 5; $x <= 9; $x++)
                                    {
                                        $va=substr($arr[$x],0,4);
                                        echo '&nbsp<button id="butt" class="btn" type="button" onClick="passupd('.$va.');"><img src="image/'.$arr[$x].'" height="60px" width="60px" id="image" ></button>';
                                    }
                                    echo '<br><br>';
                                    for ($x = 10; $x <= 14; $x++)
                                    {
                                        $va=substr($arr[$x],0,4);
                                        echo '&nbsp<button id="butt" class="btn" type="button" onClick="passupd('.$va.');"><img src="image/'.$arr[$x].'" height="60px" width="60px" id="image" ></button>';
                                    }
                                    echo '<br><br>';
                                    for ($x = 15; $x <= 19; $x++)
                                    {
                                        $va=substr($arr[$x],0,4);
                                        echo '&nbsp<button id="butt" class="btn" type="button" onClick="passupd('.$va.');"><img src="image/'.$arr[$x].'" height="60px" width="60px" id="image" ></button>';
                                    }
                                    echo '</center></div>';
                                    
                                    
                                    echo '<div id="puzzle" class="tabcontent" style="display:none">Puzzle</div>
                                    </center>
                                        
                                    
                                    <div>
                                        <input type="button" name="submit" id="submit" value="Next" onClick="validate();">
                                    </div>
                                </form>
                                <br>
                                   
                            </p>
                        </section>
                        ';
                    }
                    else
                    {
                        echo '<center><div style="background-color: red; color: white; font-size: 130%; width: 180px; box-shadow: 0px 2px 5px black; margin-bottom: 30px;">Invalid Email ID</div></center>';
                        echo '<input type="hidden" name="forg" value="0">';
                    }
                }
            }
        ?>
</body>
</html>