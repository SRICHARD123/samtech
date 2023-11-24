


<?php

$host ="localhost";
$username ="root";
$password ="";
$dbname ="students";
$dbcon=mysqli_connect($host,$username,$password,$dbname);

$call=$_SESSION['id'];
$raw="SELECT *FROM registers where user_id='$call'";
$res=mysqli_query($dbcon,$raw);
$me=mysqli_fetch_array($res);


// Payment queries

$pq=mysqli_query($dbcon,"SELECT * FROM payments ");
$pay=mysqli_fetch_array($pq);








if (!isset($_SESSION['id'])) {
  echo "<script>window.alert('You have to login first');window.location='login_user.php';</script>";
}
// else{
// 	header("location:login_user.php");
//  }




?>






<section>
<div class="container-fluide">
<div class="d-flex  align-item-center justify-content-end ">
      <div class="col-md">
        <ul class="nav nav-pills">
        <!--   <li class="nav-item"> <a href="index.html" class="nav-link text-dark">Home</a></li> -->
          <!-- <li class="nav-item "><a href="" class="nav-link text-white active">Dashboard: <?php echo $me['SURNAME']?></a></li> -->
        </ul>
      </div>
      <!--  --> 
      <div class="col-md">
        <h1 class=" text-primary">KEMS PRIMARY SCHOOL<?php echo $pay['amount_paid'];?></h1>
      </div>
    </div>
</div>
</section>
 <br>
 <br>
<!-- dashboard   -->
<!--  --><br>
<div class="container-fluid ">
    <div class="row shadow-sm  mb-4">
      <div class="col-sm-7">
      
      <div class="alert alert-success mt-5">
  <strong>Dear Applicant!</strong> <?php echo $me['SURNAME'];?>, <?php echo $me['FIRSTNAME'];?> kindly pay the necessary fees in other to complete the application processing!!!!
</div>
<br>
</div>
    <!--  -->
<div class="col-sm-2">
  <div class="card">
    <div class="card-body">
      <img src="richard.jpg" class="d-block mx-auto"  style="width: 100px; height: 100px;">
    </div>
 </div>
</div>
<!--  -->
<div class="col-sm-3">
  <div class="card  shadow-sm p-4 mb-4 ">
    <div class="card-body">
  <a href="logout.php" class="btn  btn-block  text-white" id="da" style="">Logout</a>
</div>
</div>
</div>
</div>
</div>
<!--  -->
<!--START PAYMENT app -->
<div class="container-fluid">
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-2"></div>

<div class="col-sm-2">
<?php


$sell="SELECT *FROM  payments";
$conss=mysqli_query($dbcon,$sell);
$view_me=mysqli_fetch_array($conss);






?>


    <a href="Payment_user.php?id=<?php echo $me['user_id'];?>" class="text-decoration-none text-white">
      <div class="card">
        <div class="card-body" style="" id="da">
          <div class=" h1 text-center">
            <i class=" fa fa-certificate"></i>
          </div>
          <div class="card-text">
          <?php

if(($view_me['payment_status']==1)){

  echo"Payment Approved";
}
elseif(($view_me['payment_status']==2)){
  echo"Payment Reversed";
}
else
{
  echo"paid  waiting  for confirmation";
}

?>
          </div>
          </div>
        </div>
    </a> 

</div>
<div class="col-sm-2">
<a href="complete_register_user.php?id=<?php echo $me['user_id'];?>" class="text-decoration-none text-white">
      <div class="card">
        <div class="card-body" style="" id="da">
          <div class=" h1 text-center">
            <i class=" fa fa-th"></i>
          </div>
          <div class="card-text">
         <p class="text-center " style="color:white;font-size:20px;">Complete register</p>
          </div>
          </div>
        </div>
    </a>  
</div>
<div class="col-sm-2"></div>
<div class="col-sm-2"></div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>








<!--END PAYMENT  -->











<!-- >

<div class="container-fluid">
<div class="row">

    

<div class="col-sm-12"> -->
  <!-- <div class="row">
    <! -->
    <!-- <div class="col-sm-4">
      <a href="" class="text-decoration-none">
      <div class="card">
        <div class="card-body " style="" id="da">
          <div class="card-text">
            <div class=" h1 text-center">
            <i class=" fa fa-eye " ></i>
          </div>
            <h4 class=" text-center">View Result</h4>
          </div>

        </div>
      </a>
      </div>
    </div> -->
    <!--  -->
    <!--  -->
<!--  ---> 
<!-- <div class="col-sm-4">
      <a href="pnce.html" class="text-decoration-none" >
      <div class="card">
        <div class="card-body  " style="  " id="da">
          <div class=" h1 text-center">
            <i class=" fa fa-th "></i>
          </div>
          <div class="card-text">
            <h4 class="text-center  ">Complete Registration</h4>
          </div>
          </div>
        </div>
      </a>
       </div>  -->

<!--  -->
<!-- <div class="col-sm-4">
      <a href="" class="text-decoration-none" >
      <div class="card">
        <div class="card-body " style=""id="da">
          <div class=" h1 text-center">
            <i class=" fa fa-print" ></i>
          </div>
          <div class="card-text">
            <h4 class="text-center ">Print Application Profile</h4>
          </div>
          </div>
        </div>
      </a>
       </div> -->
<!--  -->
<!--  s-->
  <!-- </div>  -->

<!-- xxxx -->

<!-- <div class="row mt-3"> -->
    <!--  -->
    <!-- <div class="col-sm-4">
      <a href="" class="text-decoration-none">
      <div class="card">
        <div class="card-body " id="da">
          <div class="card-text">
            <div class=" h1 text-center">
            <i class=" fa fa-eye " ></i>
          </div>
            <h4 class="  text-center">View Bio-data</h4>
          </div>

        </div>
      </a>
      </div>
    </div> -->
    <!--  -->
    <!--  -->
   <!-- stophere -->
<!-- <div class="col-sm-4">
      <a href="" class="text-decoration-none" >
      <div class="card">
        <div class="card-body"  id="da"id="da">
          <div class=" h1 text-center">
            <i class=" fa fa-eye "></i>
          </div>
          <div class="card-text">
            <h4 class="text-center ">View Application Status</h4>
          </div>
          </div>
        </div>
      </a>
       </div> -->

<!--  -->
<!-- <div class="col-sm-4">
      <a href="" class="text-decoration-none" >
      <div class="card">
        <div class="card-body " style="" id="da">
          <div class=" h1 text-center">
            <i class=" fa fa-print " style=""></i>
          </div>
          <div class="card-text">
            <h4 class="text-center">Print Payment Receit</h4>
          </div>
          </div>
        </div>
      </a>
       </div> -->
<!--  -->
<!--  s-->
  <!-- </div> -->
<!-- xxxxxx -->

<!-- 
<div class="row mt-3">
  <div class="col-sm-12 ">
      

      <div class="row">
    <div class="col-sm-4"> -->
    <!-- <a href="" class="text-decoration-none ">
      <div class="card">
        <div class="card-body "style=""  id="da">
          <div class=" h1 text-center">
            <i class=" fa fa-certificate  " style=""></i>
          </div>
          <div class="card-text">
            <h4 class="text-center">Manage Other Result</h4>
          </div>
          </div>
        </div>
      </a> -->
       <!-- </div> -->
    <!-- <div class="col-sm-4">
 <a href="" class="text-decoration-none ">
      <div class="card">
        <div class="card-body "style=""  id="da">
          <div class=" h1 text-center">
            <i class=" fa fa-user " style=""></i>
          </div>
          <div class="card-text">
            <h4 class="text-center">Make payment</h4>
          </div>
          </div>
        </div>
      </a>
       </div> -->
    <!-- <div class="col-sm-4"> -->
    <!-- <a href="Payment.html" class="text-decoration-none text-white">
      <div class="card">
        <div class="card-body" style="" id="da">
          <div class=" h1 text-center">
            <i class=" fa fa-certificate " style=""></i>
          </div>
          <div class="card-text">
            <h4 class="text-center">Make Payment</h4>
          </div>
          </div>
        </div>
      </a>  -->
<!-- </div>
  </div> -->
  <!--  -->

<!-- 
    </div>
  </div> -->
  <!--  de-->
<!-- <br>
 
</div>
</div>
</div> -->































