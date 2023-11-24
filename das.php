<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>


<?php
// $get=$_SESSION['id'];
// $g="SELECT *FROM admins where ad='$get'";
// $gt=mysqli_query($dbcon,$g);
// $ME=mysqli_fetch_array($gt);


// $get=$_SESSION['id'];
// $g="SELECT * FROM admins where ad='$get'";
// $gt=mysqli_query($dbcon,$g);
// $fet=mysqli_fetch_array($gt);

$c6="SELECT *from jamb_score";
$c7=mysqli_query($dbcon,$c6);
$c8=mysqli_fetch_array($c7);






if(!isset($_SESSION['id'])){
  echo"<script>window.alert('you need to login first');window.location='login_user.php';</script>";
}
// from payment categories
$sel="SELECT *FROM payment_categories where status='1' and payment_purpose='Admission Application Payment'";
$con=mysqli_query($dbcon,$sel);
$chi=mysqli_fetch_array($con);



$ge=$_SESSION['id'];
$g="SELECT *FROM registers where user_id='$ge'";
$t=mysqli_query($dbcon,$g);
$f=mysqli_fetch_array($t);




?>
<!--  -->
<!-- <div class="jumbotron " style="background-color: #061630; color:gold;" >
 </div> -->
 <br>
 <br>
<!-- start logout back -->
<!-- START ADMISION STAtus -->

<span class="badge badge-warning"><?php 

echo $f['MATRICNUMBER'];





?></span>
<span class="badge badge-warning"><?php echo $f['admission_status']; ?></span>
<br>
<h3 class="float-right font-weght-bolder mr-5"> 


<!-- end admisssion status -->
 <a href="admin_dashboard_user.php float-sm-right"  style="background-color:#061630; color:gold;" class="btn "   style="background-color:gold; color:black;">BACK</a>
      <a href="logout.php" class="btn "   style="background-color:#061630; color:gold;">LOGOUT</a>
      <!-- logoutb and back -->
<h4>Dear  <?php echo $f['SURNAME']; ?> <?php echo $f['FIRSTNAME'] ;?>    <?php echo $f['OTHERNAME']; ?></h4>
<br>
<!-- start alert -->
<h6 class="  text-center alert alert-danger  " >


<!-- this for the alert -->

<?php
            if($f['payment_status']==''){
            echo"MAkE SURE YOU MAKE A PAYMENT IN OTHER TO CONTINUE YOUR REGISTRATION!!!!";
                }
                elseif($f['payment_status']=='1'){
                    echo"THANKS, YOU HAVE SUCESSFULLY PAID YOUR FEES!!!";
                        }
                        elseif($f['payment_status']=='5'){
                          echo"THANKS, YOU HAVE SUCESSFULLY PAID YOUR FEES!!!";

                                }
                                elseif($f['payment_status']=='3'){
                                  echo"PAID, WAIT FOR ONE MINUTE, AND REFRESH THE BROWSER";
                                      }
                                      elseif($f['payment_status']=='4'){
                                        echo"PAYMENTS REVERSE DUE TO NETWORK, PLEASE CALL THIS NUMBER...07069210034 OR YOU VISIT THE SCHOOL ADMIN, THANKS";
                                            }
                                             elseif($f['payment_status']=='8'){
                                        echo"PAYMENTS COMPLETED, PRINT YOUR RECEIPT AND PAYMENT RECEIPT";
                                            }


                        else{
                          echo"MAkE SURE YOU MAKE A PAYMENT IN OTHER TO CONTINUE YOUR REGISTRATION!!!";

                        }
                               
                       
              ?>
              <!-- end of alert -->
<button type="button" class="close" data-dismiss="alert">&times;</button>
</h6>
<!-- end of alert -->
<br><br>
<!-- -->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-2"></div>
    <!-- SECOND COL OF ROW -->
    <div class="col-sm-8">
    <div class="card">
    <div class="card-header"> <h5 class=""  style="font-family:cursive;">2022/2023 Admission Application</h5></div>
    <div class="card-body">
<table class="table table-hover table-stripped" >
  <tr  style="background-color: #061630; color:white;">
          <th>#</th>
          <th>Description</th>
          <th>Amount</th>
          <th>Status</th>
          <th>Date Paid</th>
          <th>
          <!-- inside head -->
          <?php



$aa=$_SESSION['id'];
$aaa="SELECT * FROM  registers where user_id='$aa'";
$ab=mysqli_query($dbcon,$aaa);
$ac=mysqli_fetch_array($ab);
            if($ac['payment_status']==''){
            echo"Action";
                }
                elseif($ac['payment_status']=='1'){
                    echo"Action";
                        }
                        elseif($ac['payment_status']=='5'){
                            echo"Complete Registration";
                                }
                                

                        else{
                            echo"Action";
                        }
                               
                       
              ?>
          
          </th>
          <th>Print Payment Receipt</th>
          <th>migrate status</th>
          
</tr>
 <?php
   
                    $count=1;
                    $user=$_SESSION['id'];
                $se="SELECT *from registers where user_id='$user' ";
               $con=mysqli_query ($dbcon,$se);
                while($call=mysqli_fetch_array($con)){
        ?>
        <tr  style="color:black;">
          <td><?php echo $count++; ?></td>
          <td><?php echo $call['payment_purpose'];?></td>
          <td><?php echo $call['amount'];?></td>
          <td>
            <!-- this is for payment -->
              <?php
            if($call['payment_status']==''){
            echo"not paid";
                }
                elseif($call['payment_status']=='1'){
                    echo"paid";
                        }
                        elseif($call['payment_status']=='5'){
                            echo"paid";
                                }
                                 elseif($call['payment_status']=='6'){
                            echo"paid";
                                }
                                elseif($call['payment_status']=='8'){
                            echo"paid";
                                }
                                elseif($call['payment_status']=='9'){
                                    echo "Paid";
                                }

                        else{
                            echo"not paid";
                        }
                               
                       
              ?>
             </td>
            <td><?php echo $call['datee'];?></td>
          <td>
            <!-- THIS IS FOR PRINT RECEIPT ,print user detailes -->
        <?php
          if($call['payment_status']==0 ){?>
           <a href="payment_user.php?id=<?php echo $f['user_id']; ?>"  class="btn btn-danger block"><i class="fa fa-credit-card-alt" aria-hidden="true"></i>Make Payment</a>
            
           
           <!-- update 1 -->
           <?php
          }elseif($call['payment_status']=='1'){?>

<a href="pd_user.php?id=<?php echo $f['user_id']; ?>"  class="btn btn-danger block">complete Registration</a>
<!-- empty -->
<?php
          }elseif($call['payment_status']==''){?>
           <a href="payment_user.php?id=<?php echo $f['user_id']; ?>"  class="btn btn-danger block"><i class="fa fa-user" ></i>Make Payment</a>

<!-- confirm your payment -->
           <?php
          }elseif($call['payment_status'] =='3' ){?>
           <a href="###"  class="btn btn-danger block" title="REFRESH AFTER ONE MINUTES">payment made waitng for confirmation <span class="spinner-border spinner-border-sm"></span></a>
<!-- delete 4 -->
           <?php
          }elseif($call['payment_status'] =='4'){?>
           
           <a href="payment_user.php?id=<?php echo $f['user_id']; ?>"  class="btn btn-danger"><i class="fa fa-credit-card-alt" aria-hidden="true"></i>Make Payment</a>
           <!-- pd -->
           <?php }elseif($call['payment_status']=='5'){ ?>
            <a href="print_user.php?id=<?php echo $f['user_id'];?>" class="btn btn-success d-flex">Print registration receipt </a>
             <?php }elseif($call['payment_status']=='6'){ ?>
            <a href="wc_user.php?id=<?php echo $f['user_id'];?>" class="btn btn-success d-flex">continu registration </a>

<?php }elseif($call['payment_status']=='7'){ ?>
            <a href="imageupload.php?id=<?php echo $f['user_id'];?>" class="btn btn-success d-flex"><i class="fa fa-print  mt-1" aria-hidden="true"></i>&nbsp;IMAGE</a>



<?php }elseif($call['payment_status']=='9'){ ?>
            <a href="jd_user.php?id=<?php echo $f['user_id'];?>" class="btn btn-success d-flex">upload jamb details</a>
            <!--  -->


<!-- I AM STILL ON UPDATE -->
<?php }elseif($call['payment_status']=='8'){ ?>
            <a href="print_user.php?id=<?php echo $f['user_id'];?>" class="btn btn-success d-flex"><i class="fa fa-print  mt-1" aria-hidden="true"></i>&nbsp;print receit </a>



 <?php }?>
     </td>
     <!-- this is for receipt payment receit -->
     <td>
     <?php
          if($call['payment_status'] =='1'){?>
           <a href="###"  class="btn btn-danger block disabled"><i class="fa fa-print" aria-hidden="true"></i>Your Receipt </a>
           
           <!-- pd -->
           <?php }elseif($call['payment_status']=='5'){ ?>
            <a href="printreceipt_user.php?id=<?php echo $f['user_id'];?>" class="btn btn-success btn-block"><i class="fa fa-print" aria-hidden="true"></i>print payment receipt  </a>
            <?php }elseif($call['payment_status']=='0'){ ?>
            <a href="printreceipt_user.php?id=<?php echo $f['user_id'];?>" class="btn btn-success btn-block disabled "><i class="fa fa-print" aria-hidden="true"></i>print receipt </a>
          <?php }elseif($call['payment_status']=='6'){ ?>
            <a href="printreceipt_user.php?id=<?php echo $f['user_id'];?>" class="btn btn-success btn-block disabled "><i class="fa fa-print" aria-hidden="true"></i>print receipt </a>
             <?php }elseif($call['payment_status']=='7'){ ?>
            <a href="printreceipt_user.php?id=<?php echo $f['user_id'];?>" class="btn btn-success btn-block disabled "><i class="fa fa-print" aria-hidden="true"></i>print receipt </a>
             <?php }elseif($call['payment_status']=='8'){ ?>
            <a href="printreceipt_user.php?id=<?php echo $f['user_id'];?>" class="btn btn-success btn-block  "><i class="fa fa-print" aria-hidden="true">&nbsp;</i>print payment receipt </a>
           
<?php }?>
     </td>
     <td>
      <!-- THIS IS TO MIGRATE TO THE USER to his or her  PORTAL -->
     <?php
          if($call['mig_s'] =='0'){?>
           <a href="student_login_user.php?id=<?php    echo $f['user_id'];?>"class="btn btn-danger block  "><i class="fa fa-archieve" aria-hidden="true"></i>clickhere to migrate </a>
           
           <!-- pd -->
           <?php }elseif($call['mig_s']=='1'){?>
            <a href="student_login_user.php?id=<?php echo $f['user_id'];?>" class="btn btn-success btn-block "><i class="fa fa-print" aria-hidden="true"></i>Migrate </a>
             <?php }elseif($call['mig_s']=='2'){?>
            <a href="payment_user.php?id=<?php echo $f['user_id'];?>" class="btn btn-success btn-block disabled"><i class="fa fa-print" aria-hidden="true"></i>Already migrate </a>
            
            
<?php }?>
     </td>
</tr>
        <?php }?>  
 </table>
 </div>
<!-- ST -->

<!-- EN -->
</div>
 </div>
    <!-- END -->
    <div class="col-sm-2">

    </div>
  </div>
<div>
















</body>
</html>






