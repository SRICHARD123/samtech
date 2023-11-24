



<?php

include'include/connect.php';

if(!isset($_SESSION['id'])){
    echo"<script>window.alert('you need to login first');window.location='admin_login_user.php';</script>";
  
  }
$c5=$_GET['id'];
$c6="SELECT *from jamb_score where id10='$c5'";
$c7=mysqli_query($dbcon,$c6);
$fu=mysqli_fetch_array($c7);



$va=$_SESSION['id'];
$aaa="SELECT * FROM  registers where user_id='$va'";
$ab=mysqli_query($dbcon,$aaa);
$ac=mysqli_fetch_array($ab);









if(isset($_POST['save'])){
$jrnumbeer=$_POST['jrnumbeer'];

$aa=$_POST['aa'];
$a=$_POST['a'];
$bb=$_POST['bb'];
$b=$_POST['b'];
$cc=$_POST['cc'];
$c=$_POST['c'];
$dd=$_POST['dd'];
$d=$_POST['d'];
$id=$_POST['ide'];
$total=$a+$b+$c+$d;
$insert=mysqli_query($dbcon,"INSERT into jamb_score
(jamb_register_num,subject1,score1,subject2,score2,subjectt3,score3,subject4,score4,ID,total_score)VALUES('$jrnumbeer','$aa','$a','$bb','$b','$cc','$c','$dd','$d','$id','$total')");
$up=mysqli_query($dbcon,"UPDATE registers SET payment_status='8'   where user_id='$va'");

// $insert=mysqli_query($dbcon,"INSERT into jamb_score
// (jamb_register_num,subject1,score1,subject2,score2,subjectt3,score3,subject4,score4, ID)VALUES('$jrnumbeer','$aa','$a','$bb','$b','$cc','$c','$dd','$d','$id')");






if($insert){
    echo"<script>window.alert(' Press okay to continue');  window.location='dashboard2_user.php';</script>";
}
else{
  echo"<script>window.alert('good of you'); window.location='wc_user.php';</script>";
}



}



// if ($fu['score1']<0){
// 	echo"it is more than the value";
// }
// else{

// 	echo "you are wrong";
// }




?>








<div class="container mt-5 ">
<div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6"> 
    <div class="card">
    <div class="card-title text-center bg-warning">
                <h1  class="card-title" style="background-color:#061630; color:gold; font-family:cursive;">Jamb Details</h1>
            </div>
        <div class="card-body">
        <form class="form-group" method="post">
               
                            <input type="text" class="form-control" placeholder="Jamb Registration number"  maxlength="14" required name="jrnumbeer">
							  <p class="font-weight-bolder mb-1 text-primary">Upload Your jamb Score</p>
							
                              <div class="row">
								<div class="col-sm-6">
									 <select class="form-control  mt-2" name="aa" required>
							 	<option>mathematic</option>
							 	<option>physics</option>
							 	<option>chemistry</option>
							 	<option>biology</option>
							 </select>
							  <select class="form-control  mt-2" name="bb" required>
							 	<option>mathematic</option>
							 	<option>physics</option>
							 	<option>chemistry</option>
							 	<option>biology</option>
							 </select> <select class="form-control  mt-2" name="cc" required>
							 	<option>mathematic</option>
							 	<option>physics</option>
							 	<option>chemistry</option>
							 	<option>biology</option>
							 </select>
                             </select> <select class="form-control  mt-2" required name="dd">
							 	<option>mathematic</option>
							 	<option>physics</option>
							 	<option>chemistry</option>
							 	<option>biology</option>
							 </select>
								</div>
                             <div class="col-sm-6">
									<input type="text" maxlength="3" class="form-control mt-2"  placeholder="enter score" required name="a">
									<input type="text" maxlength="3" class="form-control mt-2" placeholder="enter score" required name="b">
									<input type="text" maxlength="3" class="form-control mt-2" placeholder="enter score" required name="c">
									<input type="text"  maxlength="3" class="form-control mt-2" placeholder="enter score" required name="d">
									<input type="text"  maxlength="3"  value="<?php echo $fu['total_score'];?>" name="total" class="form-control mt-3 " >
								</div>
							</div>
						<input type="hidden" class="form-control mt-2 btn btn-success" placeholder="enter score" required  name="ide" value="<?php echo $ac['user_id'];?>">
						

									<input type="submit" class="form-control mt-2 btn btn-success" required value="SAVE $ CONTINUE" placeholder="enter score" name="save">


            </form>

            </div>
          
        </div>
    </div>
    <div class="col-sm-3">

	</div>
</div>
</div>