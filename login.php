

<<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>



<?php
include'include/connect.php';

// $get=$_SESSION['id'];
// $sel=mysqli_query($dbcon,"SELECT from registers");
// $fetch=mysqli_fetch_array($sel); 


$xel="SELECT *FROM registers";
$xels=mysqli_query($dbcon,$xel);
$xee=mysqli_fetch_array($xels);

if(isset($_POST['login'])){
$user=$_POST['user'];
$password=$_POST['password'];
$sel=mysqli_query($dbcon,"SELECT *FROM registers where PASS_WORD='$password' and USERNAME='$user'and mig_s='0'");
$rows=mysqli_fetch_array($sel);
// 


// stop here
// 


if($rows){
  $_SESSION['id']=$rows['user_id'];

 echo "<script>

         
      swal({
  title: '$user',
  text: 'login successful,$user',
  icon: 'success',
  button: 'okay!'
}).then(function() {
              window.location = 'dashboard2_user.php';
            });

</script>";

   }
  else
  {
  echo "<script>

 swal({
  title: '$user',
  text: 'fail to login user, $user',
  icon: 'error',
  button: 'error!'
}).then(function() {
              window.location = 'login_user.php';
            });         
</script>";
 
}
}


?>




<br><br>
<div class="container mt-5">
<div  class="row">
   <div class="col-sm-3"></div>
   <div class="col-sm-6">
     <div class="card" style="border-radius:50px;">
       <div class="card-header "id="we"   style="border-radius:50px;">
         <h1 class=" card-title text-white text-center"> Login</h1>
       </div>
      <div class="card-body " >
      <div class="form-group">
        <!--  -->
       <form  method="post">

        <input type="text" class="form-control text-center mt-4" placeholder="user name" name="user"     pattern="{A-Za-z[1,5]}">        
            <input type="password" class="form-control text-center mt-4" id="psr" value="fhfhfhfh"  name="password"   placeholder="password" >
            <input type="checkbox"  classs="form-control mt-5"onclick="psw()">show password
            <script>
              function psw(){
                var x=document.getElementById("psr");
                    if(x.type==="password"){
                      x.type="text";
                    }
                    else{
                      x.type="password";
                    }
                    }
        </Script>
     
            <input type="submit" name="login"placeholder="" class="btn float-sm-right mt-5 btn-success"> 
        
          </form>
      </div>
    </div>
     </div>
   </div>
   <div class="col-sm-3">
     

   </div> 
  </div>
</div>
<!-- end -->
<br><br><br><br>




</body>
</html>
