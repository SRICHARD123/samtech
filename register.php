
<?php


// $get=$_SESSION['id'];
// $g="SELECT *FROM registers where user_id='$get'";
// $gt=mysqli_query($dbcon,$g);
// $ME=mysqli_fetch_array($gt);

if (isset($_POST['save'])){
  $sur=$_POST['sur'];
  $fn=$_POST['fn'];
  $other=$_POST['other'];
    $pn=$_POST['pn'];
      $emai=$_POST['emai'];
        $psw=$_POST['psw'];
        $cpsw=$_POST['cpsw'];
          $user=$_POST['user'];
          // $pp=$_POST['paypurpose'];
          // $amount=$_POST['amount'];
          $status=$_POST['status'];
          




     
        if($psw!==$cpsw){
          echo"<script>window.alert('Ensure you your password are the same');</script>";
        }
        else{

$ins=mysqli_query($dbcon,"INSERT into registers(SURNAME,FIRSTNAME,OTHERNAME,PHONENUMBER,EMAIL,USERNAME,PASS_WORD,COMFIRM_PASSWORD,payment_status)                     
VALUES('$sur','$fn','$other','$pn','$emai','$user','$psw', '$cpsw','$status')");


if($ins){
  echo"<script>window.alert('Thanks for registering with us, Press okay to continue'); window.location='login_user.php'; </script>";
}
else{
  echo"<script>window.alert('incorrect password'); window.location='register_user.php'; </script>";
}



}



// $sql = mysqli_query($conn, "SELECT * FROM registers where USERNAME='$username'");

// if(mysqli_num_rows($sql) > 0){
//     echo "Email already Exists";

//     exit;
// }
// 

}



?>


<br><!-- form -->
<div class="container mt-5 " style="">
<div  class="row">
   <div class="col-sm-1"></div>
   <div class="col-sm-10">
     <div class="card" style="border-radius:50px;">
       <div class="card-header" style="border-radius:50px;"id="cardheader">
         <h1 class=" card-title text-center"  style="color:gold;"> CREATE ACCOUNT</h1>
       </div>
      <div class="card-body">
      
    <form class="form-group" method="POST"   autocomplete="off">      

        <!--  -->
        
        <div class="row">
          <div class="col-sm-6">
            <input type="text" class="form-control" oninput="this.value=this.value.toUpperCase();"   name="sur" placeholder="surname" >
          </div>
          <div class="col-sm-6">
            <input type="email" class="form-control" placeholder="E-mail"   oninput="this.value=this.value.toLowerCase()" required name="emai">
          </div>
        </div>

          <div class="row mt-2">
          <div class="col-sm-6">
            <input type="text" class="form-control"  oninput="this.value=this.value.toUpperCase();"  placeholder="first name" required name="fn">
          </div>
          <div class="col-sm-6">
            <input type="user" class="form-control" maxlength="5"  title="your user name must not be must than 5" oninput="this.value=this.value.toUpperCase();"  placeholder="username"required  name="user">
          </div>
        </div>
          <div class="row mt-2">
          <div class="col-sm-6">
            <input type="text" class="form-control"   oninput="this.value=this.value.toUpperCase();"  placeholder="other name"  required name="other">
          </div>
          <div class="col-sm-6 mt-2">
            <label></label>
            <input type="psw" class="form-control" title="The password must contain uppercase and maximum with 5 character" maxlength="5" placeholder="password"   pattern="[A-Za-z]{5}" required  name="psw">
          

          </div>
        </div>
      

          <div class="row mt-2">
          <div class="col-sm-6">
            <input type="number" class="form-control" placeholder="phone number"required  name="pn">
            <input type="hidden" class="form-control" placeholder="phone number"required  name="status">


            
          </div>
          <div class="col-sm-6">
          <!-- mistake -->
            <input type="hidden" class="form-control"  placeholder="matric"required  name="matric">
            <input type="psw" class="form-control" maxlength="5"   pattern="[A-Z]{5}" title="The password must contain uppercase and maximum with 5 character" placeholder="confirm password"required  name="cpsw">
            


            
          </div>
          
        </div>

        
        <input type="submit" name="save"placeholder="" class="btn float-sm-right mt-5 btn-success"> 
       
        <p class="text-dark mt-5 font-weight-bolder">Already have an account?<a href="login_user.php" class="text-decoration-none  text-danger"> Sign in</a></p>
</form>
        <!--  -->
      </div>
      

      </div>
     </div>
     
   </div>
   
   <div class="col-sm-1">
   
   </div> 

  </div>
</div>

