

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

$aa=$_GET['id'];
$aaa="SELECT * FROM  registers where user_id='$aa'";
$ab=mysqli_query($dbcon,$aaa);
$ac=mysqli_fetch_array($ab);

$pay="SELECT*FROM payment_categories where status ='1' and payment_purpose='Admission Application Payment'";
$pay_query=mysqli_query($dbcon,$pay);
$pay_fetch=mysqli_fetch_array($pay_query);

if(isset($_POST['save'])){
$cardnumber=$_POST['cardnumber'];
$email=$_POST['email'];
$datetime=$_POST['datetime'];
$cv=$_POST['cv'];
$password=$_POST['password'];
$idd=$_POST['id'];
$ps=$_POST['ps'];
$amount_paid=$_POST['amount_paid'];


$insert1=mysqli_query($dbcon,"INSERT into payments(CARD_NUMBER,EMAIL,DATE_TIME,CV,PASS_WORD,user_id1,payment_status,amount_paid) VALUES('$cardnumber','$email','$datetime','$cv','$password','$idd','$ps','$amount_paid')");
$up=mysqli_query($dbcon,"UPDATE registers set payment_status='3' where user_id='$aa'");



if($insert1){
//  echo "<script>

         
//       swal({
//   title: 'login sucessfully!',
//   text: 'You clicked the button!',
//   icon: 'success',
//   button: 'okay!'
// })
// .then((willDelete) => {
//   if (willDelete) {
//     swal('Poof! Your imaginary file has been deleted!', {
//       icon: 'success',
//     });


// .then(function() {
//               window.location = 'dashboard2_user.php';
//             });

// </script>";

//    }
//   else
//   {
//   echo "<script>

//  swal({
//   title: 'login fail',
//   text: 'You clicked the button!',
//   icon: 'error',
//   button: 'error!'
// }).then(function() {
//               window.location = 'login_user.php';
//             });         
      

// </script>";



// }

echo "<script>

         
      swal({
  title: 'press okay to pay for your fees',
  text: 'You clicked the button!',
  icon: 'warning',
  button: 'okay!'
})




.then(function() {
              window.location = 'dashboard2_user.php';
            });

</script>";

   }
  else
  {
  echo "<script>

 swal({
  title: 'login fail',
  text: 'You clicked the button!',
  icon: 'error',
  button: 'error!'
}).then(function() {
              window.location = 'login_user.php';
            });         
      

</script>";



}








// if($insert){
//   echo"<script>window.alert('Thanks for registering with us'); window.location='login_user.php'; </script>";
// }
// else{
//   echo"<script>window.alert('Thanks for registering with us'); window.location='register_user.php'; </script>";
// }
}
// // this prevent link to login into another url
// ob_start();
// if (!isset($_SESSION['id'])) {
//   echo "<script>window.alert('You have to login first');window.location='home_user.php';</script>";
// }

$call=$_SESSION['id'];
$raw="SELECT *FROM registers where user_id='$call'";
$res=mysqli_query($dbcon,$raw);
$me=mysqli_fetch_array($res); 
if (!isset($_SESSION['id'])){
  echo "<script>window.alert('You have to login first');window.location='login_user.php';</script>";
}
?>
<!-- ####MY PAYMENT -->
<ul class="navbar">
  <li>
    <a class="btn btn-primary" href="logout.php">logout</a>
  </li>
</ul>
<div class="alert alert-danger">
<P>Welcome  <?php echo $me['SURNAME'];?>  <?php echo $me['FIRSTNAME'];?></p>
    </div>

<!-- start form -->
<div class="container-fluid">
<div class="row">
    
<div class="col-sm-4"></div>
<div class="col-sm-4">
<!-- card -->
<div class="card">
<div class="card-header "  style="color:gold; background-color:#061630; ">
         <h3    style="color:gold; background-color:#061630; font-family:cursive;" class=" card-title  text-center" ><?php echo $me['payment_purpose'];?></h3>
       </div>
<div class="card-body">
<form method="post">
<!--  --><label></label>
      <input type="text" class="form-control mt-3" placeholder="card number"   title="Three letter country code" required="" name="cardnumber"  maxlength="16">
  <input type="text" class="form-control mt-3" maxlength="11" placeholder="phone number" name="email">
  <div class="row">
    <div class="col-sm-6 mt-3">
        
         <input type="date" class="form-control" name="datetime">
      </div>
    <div class="col-sm-6 mt-3">
      <input type="text" class="form-control"  maxlength="3"     title="Password must contain atleast one number, three uppercase, one lowercase and 5 more character"  placeholder="CV" name="cv">
      <input type="hidden" class="form-control"    name="id" value="<?php echo $ac['user_id'];?>" >
      <input type="hidden" class="form-control"    name="ps" value="<?php echo $me['payment_status'];?>" >
      <input type="hidden" class="form-control"    name="amount_paid" value="<?php echo $ac['amount'];?>"  >
      <input type="hidden" class="form-control"    name="" value="<?php echo $ac['amount'];?>"  disabled  >


</div>
  </div>
    <input type="password" placeholder="enter your pin" class="form-control mt-3"  value="login with your passwaord" id="myInput" name="password">
   &nbsp; <input type="checkbox" onclick="myFunction()">Show Password
<script>

function myFunction() {
var x = document.getElementById("myInput");
if (x.type==="password"){ 
x.type = "text";
} 
else {
x.type = "password";
}
}
</script>
<!--  -->

   <input type="submit" name="save" class="btn float-sm-right mt-5 btn-danger">
   <img src="image/pay.png" class="mx-auto d-block mt-5 img-fluid">
   </form>
</div>
</div>
<!-- end card -->
</div>
<!-- sart php for the below -->
<div class="col-sm-4">
<!-- card -->
<!-- end card -->
</div>
</div>
</div>
<!--  -->





</body>
</html>













