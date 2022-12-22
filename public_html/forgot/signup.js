function myFunction() {
    var x = document.getElementById("pass");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  } 

function myFunction1() {
    var x = document.getElementById("pass1");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  } 

function validate(){
    var z = document.getElementById('pass').value;
    var pwd = document.getElementById("passo").value;
    document.getElementsByName('passwordco')[0].value = pwd;
    document.getElementsByName('passwordo')[0].value = "";
    document.getElementsByName('password')[0].value = "";
    document.getElementsByName('password')[0].placeholder = "Confirm Password";
    document.getElementsByName('email')[0].type = "hidden";
    document.getElementsByName('submit')[0].value = "Create Account";
    document.getElementById("option").style.display = "none";
    document.getElementById("str").style.display = "none";
    document.getElementById("submit").onclick = function() {submittab();};
}


function passupd(img)
        {
            var strength = document.getElementById('strength');
            var pwd = document.getElementById("pass");
            document.getElementById("passo").value+=img;
            document.getElementById("pass").value+='*';
            if (pwd.value.length == 0) {

            }else if (pwd.value.length>=8){
                strength.innerHTML = '<span style="color:green">Very Strong!</span>';
            }else if (pwd.value.length >= 5) {
                strength.innerHTML = '<span style="color:green">Strong!</span>';
            } else if (pwd.value.length >= 3) {
                strength.innerHTML = '<span style="color:orange">Medium!</span>';
            } else {
                strength.innerHTML = '<span style="color:red">Weak!</span>';
            }
        }
        function submittab()
        {
          var h = document.getElementById('pass').value;
          if (h==""){
            alert('Confirm password cannot be empty. Try again!!')
          }
          else{
            document.getElementsByName('submit')[0].value = "Submit Account";
            document.getElementsByName('submit')[0].type = "submit";

          }
          
          
        }
function shift(){
  window.location.href = "http://zeitx.ml/signupshapes.php";
}
function shiftpuzzle(){
    window.location.href = "http://zeitx.ml/signupupload.php";
}

function myFunction0() 
{
    document.getElementById("image").style.display = "block";
    document.getElementById("shape").style.display = "none";
    document.getElementById("puzzle").style.display = "none";
    document.getElementsByName('passwordo')[0].value = "";
    document.getElementsByName('password')[0].value = "";
}
        
function myFunction2()
{
    document.getElementById("image").style.display = "none";
    document.getElementById("shape").style.display = "block";
    document.getElementById("puzzle").style.display = "none";
    document.getElementsByName('passwordo')[0].value = "";
    document.getElementsByName('password')[0].value = "";
}
        
function myFunction3() 
{
    document.getElementById("image").style.display = "none";
    document.getElementById("shape").style.display = "none";
    document.getElementById("puzzle").style.display = "block";
    document.getElementsByName('passwordo')[0].value = "";
    document.getElementsByName('password')[0].value = "";
}

 