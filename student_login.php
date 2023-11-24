



<!-- login student portal -->
<?php

include'include/connect.php';


$host ="localhost";
$username ="root";
$password ="";
$dbname ="students";
$dbcon=mysqli_connect($host,$username,$password,$dbname);




$va=$_SESSION['id'];
$aaa="SELECT *from  registers where user_id='$va'";
$ab=mysqli_query($dbcon,$aaa);
$ac=mysqli_fetch_array($ab);

if(isset($_POST['login'])){
$sur=$_POST['sur'];
$password=$_POST['password'];
$sel=mysqli_query($dbcon,"SELECT*FROM registers where PASS_WORD='$password' and SURNAME='$sur' ");
$rows=mysqli_fetch_array($sel);
 $update=mysqli_query($dbcon,"UPDATE registers SET mig_s='1' where user_id='$va'");

// stop here
// 


if($rows) {
  $_SESSION['id']=$rows['user_id'];

 
    echo"<script>
  window.alert('Are you sure you want Migrate'); window.location='MIGRATE_USER.php';</script>";
  }
  else{
  echo"<script>
  window.alert('Fail to login, Use a correct password.');window.location='student_login_user.php';</script>";
  }

}






?>
<!--  -->
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

        <input type="text" class="form-control text-center mt-4" placeholder="Enter your surname" name="sur"     pattern="{A-Za-z[1,5]}">        
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
       <!--  -->
      </div>
    </div>
     </div>
   </div>
   <div class="col-sm-3"></div> 
  </div>
</div>
<!-- end -->
<br><br><br><br>



<!-- loging portal -->
