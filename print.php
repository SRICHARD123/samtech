




<style>

body{
    background-color:black;
    overflow-x:hidden;
}
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
// 
$x="SELECT *FROM  pdetails where ID1='$ge'";
$y=mysqli_query($dbcon,$x);
$z=mysqli_fetch_array($y);
?>



<!--  -->

<div class="row print-container mt-5" >
    
<div class="col-sm-1"></div>
<div class="col-sm-10 ">
    <div class="card">
        <div class="card-header"   style="text-align: center; color:gold; background-color:black;">
</pre><h1 style="font-size: 30px; font-family:arials;" ><img src="image/logo.png" style="width: 100px; height: 100px;  " class="float-left mt-2">EKITI STATE UNIVERSITY, ADO EKITI
IN AFFILIATION WITH
EMMANUEL ALAYANDE COLLEGE OF EDUCATION
OYO
School Of Education
Degree A dmission Application Form
2022/2023 Academic Session
    
    </h1>
        </div>
        <div class="card-body">
            <!-- start -->
            <ul style="list-style-type:none;">
            <li><img   style=""    width="100px" height="100px" src="image1/<?php echo $array['img'];?>" class="float-right   mb-5 "><h4>RegCode: <?php echo $f['user_id'];?></h4></li>
    </ul>
   <br>
   <br>
    <hr>
    <h4   style="text-align: center; color:gold; background-color:black;">Application Personal Details</h4>
            <hr>
<ul style="list-style-type:none; ">
       <h4> <li>Full Name: <?php echo $f['SURNAME'];?>&nbsp;<?php echo $f['FIRSTNAME'];?>&nbsp;<?php echo $f['OTHERNAME'];?><h4 class="float-right">User Name: <?php echo $f['USERNAME'];?></h4></li></h4>
       <h4> <li>Phone Number: <?php echo $f['PHONENUMBER'];?><h4 class="float-right">Email: <?php echo $f['EMAIL'];?></h4></li></h4>
       
       <h4> <li></li></h4>
       <h4> <li>Amount: <?php echo $f['amount'];?> <h4 class="float-right">Payment Purpose: <?php echo $f['payment_purpose'];?></h4></li></h4>
    </ul>
    <!-- end -->
<!-- start -->
<hr>
    <h4 style="text-align: center; color:gold; background-color:black;">Admission Programme Information</h4>
    <hr>
    
    <ul  style="list-style-type:none;">
    <h4><li>Jamb Reg.No: <?php echo $ac ['jamb_register_num'];?></li></h4>
    <h4><li><?php echo $ac ['subject1'];?>:&nbsp; <?php echo $ac ['score1'];?></li></h4>
    <h4><li><?php echo $ac ['subject2'];?>:&nbsp; <?php echo $ac ['score2'];?></li></h4>
    <h4><li><?php echo $ac ['subjectt3'];?>:&nbsp; <?php echo $ac ['score3'];?></li></h4>
    <h4><li><?php echo $ac ['subject4'];?>:&nbsp; <?php echo $ac ['score4'];?></li></h4>
    <h4>Total JamB Score:<?php echo $ac ['total_score'];?></li></h4>
  
    </ul>
<!-- end -->
<!-- start -->
<hr>
<h4 style="text-align: center; color:gold; background-color:black;">Qualification O'Level</h4>
<hr>
<ul style="list-style-type:none;">
<h4><li>Jamb Reg.No: <?php echo $as ['EXAM_YEAR'];?></li></h4>
<h4><li>Jamb Reg.No: <?php echo $as ['CENTER_NUMBER'];?></li></h4>
<h4><li><?php echo $as ['S1'];?>:&nbsp; <?php echo $as ['G1'];?></li></h4>
<h4><li><?php echo $as ['S2'];?>:&nbsp; <?php echo $as ['G2'];?></li></h4>
<h4><li><?php echo $as ['S3'];?>:&nbsp; <?php echo $as ['G3'];?></li></h4>
<h4><li><?php echo $as ['S4'];?>:&nbsp; <?php echo $as ['G4'];?></li></h4>
<h4><li><?php echo $as ['S5'];?>:&nbsp; <?php echo $as ['G5'];?></li></h4>


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








