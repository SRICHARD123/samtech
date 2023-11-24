s




<style>
/*  start for print image */
body{
    background-color:black;
    overflow-x:hidden;
    
}
/* .image{



    background-image:url("image/logo.png");
    background-repeat:no-repeat;
    z-index: -1;
    background-position:center;
    
} */
/* end */
      @media print {
            body * {
                visibility: hidden;
                
            }

        .print-container,.print-container *{
            visibility: visible;
          
            
        }
        .con {
            visibility:hidden;
        }

      }
  </style>  

<!--  -->

<?php 
// register
$ge=$_GET['id'];
$g="SELECT *FROM registers where user_id='$ge'";
$t=mysqli_query($dbcon,$g);
$f=mysqli_fetch_array($t);
// 
$aaa="SELECT *FROM  jamb_score where ID='$ge'";
$ab=mysqli_query($dbcon,$aaa);
$ac=mysqli_fetch_array($ab);
// 
$aas="SELECT *FROM  waec where ID1='$ge'";
$asS=mysqli_query($dbcon,$aas);
$as=mysqli_fetch_array($asS);
?>



<!--  -->

<div class="row print-container mt-5"   style="font-family: sans-serif; font-weight:bolder; font-size:36px;" >
    
<div class="col-sm-1"></div>
<div class="col-sm-10 ">
    <div class="card ">
        <div class="card-header"   style="text-align: center; color:gold; background-color:black;">
<h1 ><img src="image/logo.png" style="width: 40px; height: 40px;" class="float-left mt-2">SAMTECH GLOBAL VENTURES ACADEMY</h1>
        </div>
        <div class="card-body image">
            <!-- start -->
            <h1 style="text-align:center;">Payment Receipt</h1>
            <hr>
            <ul style="list-style-type:none;">
       <h4> <li>Full Name: <?php echo $f['SURNAME'];?>&nbsp;<?php echo $f['FIRSTNAME'];?>&nbsp;<?php echo $f['OTHERNAME'];?><h4 class="float-right"> <?php echo $f['admission_status'];?></h4></li></h4>
       <h4> <li>Amount: <?php echo $f['amount'];?> <h4 class="float-right">User Name: <?php echo $f['USERNAME'];?></h4></li></h4>
       <h4> <li>Date: <?php echo $f['datee'];?> <h4 class="float-right">Payment Purpose: <?php echo $f['payment_purpose'];?></h4></li></h4>
         

    </ul>





<!-- end -->

<button onclick="window.print();" class="btn btn-success mt-5 float-right con">Click here to print the reciept</button>
    </div>

    </div>
  
</div>
<div class="col-sm-1">
    </div>
</div>
 </div>
</div>








