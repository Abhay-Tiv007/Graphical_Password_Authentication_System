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
        function confirmtab()
        {
            var forgetv = document.getElementByName("forg").value;
            if (forgetv == 1)
            {
                //document.getElementsByName('passwordco')[0].value = pwd;
                //document.getElementsByName('passwordo')[0].value = "";
                //document.getElementsByName('password')[0].value = "";
                //document.getElementsByName('password')[0].placeholder = "Confirm Password";
                document.getElementsByName('forg')[0].type = "text";
                //document.getElementsByName('name')[0].type = "hidden";
                //document.getElementsByName('question')[0].type="hidden";
                //document.getElementsByName('answer')[0].type="hidden";
                
                //document.getElementsByName('submit')[0].value = "Create Account";
                
                //.getElementById("submit").onclick = function() {submittab();};
            }
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
    </style>
    
</head>
<body>
    <?php  
            if(!empty($_POST))
            {
                $con=new mysqli('localhost','id18630204_signup','BxUZqxy7%)x>kfhk','id18630204_sih') or die("Error".mysqli_error($con));
                $emaili=$_POST['email'];
               
                $sql=mysqli_query($con,"Select * from user where email='$emaili';");
                $row=mysqli_fetch_array($sql);

                if ($row)
                {
                    $question=$row['question'];
                    $answer=$row['answer'];
                    echo $question;
                    echo '
                    <section>
                        <p>
                            <br>
                            <form action="new.php" method="post">
                            <br></br>
                                <div>
                                    <input class="form" type="text" name="email" id="name"  value="'.$emaili.'" readonly>
                                </div>
                                <div>
                                    <input class="form" type="text" name="ques" id="name"  value="'.$question.'" readonly>
                                </div>
                                <div>
                                    <input class="form" type="text" name="ans" id="name"  placeholder="Enter Answer">
                                </div>
                                <br><br>
                                <div>
                                    <input type="submit" name="submit" id="submit" value="Next" onClick="validate()">
                                </div>
                            </form>
                            <br>
                        </p>
                    </section>
                    ';
                }
                else
                {
                    echo '<center><div style="background-color: red; color: white; font-size: 130%; width: 180px; box-shadow: 0px 2px 5px black; margin-bottom: 30px;">Invalid Email Id</div></center>';
                    echo '<input type="hidden" name="forg" value="0">';
                }
            }
        ?>
        
    
</body>
</html>