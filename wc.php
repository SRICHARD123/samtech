<?php  


$aa=$_SESSION['id'];
$aaa="SELECT * FROM  registers where user_id='$aa' ";
$ab=mysqli_query($dbcon,$aaa);
$ac=mysqli_fetch_array($ab);



if(!isset($_SESSION['id'])){
    echo"<script>window.alert('you need to login first');window.location='admin_login_user.php';</script>";
  
  }

  


  
  


$c1=$_SESSION['id'];
$c2="SELECT *from registers where user_id='$c1'";
$c3=mysqli_query($dbcon,$c2);
$d4=mysqli_fetch_array($c3);

if(isset($_POST['save'])){
$a=$_POST['ey'];
$b=$_POST['cn'];
$c=$_POST['s1'];
$d=$_POST['g1'];
$e=$_POST['s2'];
$f=$_POST['g2'];
$g=$_POST['s3'];
$h=$_POST['g3'];
$i=$_POST['s4'];
$j=$_POST['g4'];
$k=$_POST['s5'];
$l=$_POST['g5'];
$m=$_POST['s6'];
$n=$_POST['g6'];
$o=$_POST['s7'];
$p=$_POST['g7'];
$q=$_POST['s8'];
$r=$_POST['g8'];
$s=$_POST['s9'];
$t=$_POST['g9'];
$id1=$_POST['id1'];




$up=mysqli_query($dbcon,"UPDATE registers set payment_status='7' where user_id='$aa'");
$insert=mysqli_query($dbcon,"INSERT into waec(EXAM_YEAR,CENTER_NUMBER,S1,G1,S2,G2,S3,G3,S4,G4,S5,G5,S6,G6,S7,G7,S8,G8,S9,G9,ID1) 
VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k',
'$l','$m','$n','$o','$p','$q','$r','$s','$t','$id1')");




if($insert){
    echo"<script>window.alert(' Press okay to continue'); window.location='dashboard2_user.php'; </script>";
}
else{
  echo"<script>window.alert('good of you'); window.location='dashboard2_user.php';</script>";
}

}





?>












<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <!--  -->

        <div class="col-sm-6">
						<div class="card" class="shadow-none p-4 mb-4 bg-light">
						<div class="card-header font-weight-bolder text-primary text-center">Upload Your O'level Result</div>
						<div class="card-body">
                        <form method="post">
						<div class="row">
							<div class="col-sm-6">
								<input type="number"  placeholder="Center Number" class="form-control mt-4" name="cn" >
							</div>
							<div class="col-sm-6">
								<select class="form-control mt-4"   name="ey">
									<option>EXAM YEAR</option>
									<option>2018/2019</option>
									<option>2019/2020</option>
									<option>2020/2021</option>
								</select>
							</div>
						</div>	
						<!-- n center -->
						<div class="row">
							<div class="col-sm-6">
								<select class="form-control mt-4"  name="s1">
									<option>SUBJECT</option>
									<option>MATHEMATICS</option>
									<option>ENGLISH LANGUAGE</option>
									<option>PHYSICS</option>
									<option>CHMISTRY</option>
									<option>YORUBA</option>
									<option>FURTHER MATHEMATICS</option>
									<option>ANIMAL HUSBANDRY</option>
									<option>BIOLOGY</option>
									<option>TECHNICAL DRAWING</option>
									<option>FISHERY</option>

								</select>
							</div>
							<div class="col-sm-6">
								<select class="form-control mt-4"name="g1">
									<option>GRADE</option>
									<option>A1</option>
									<option>B2</option>
									<option>B3</option>
									<option>C2</option>
									<option>C3</option>
									<option>C4</option>
									<option>C5</option>
									<option>C5</option>
									<option>C6</option>
									<option>D7</option>
									<option>D8</option>
									<option>F9</option>
								</select>
							</div>   <!-- ed   DE -->
						</div>

						<!--  -->
						<div class="row">
							<div class="col-sm-6">
								<select class="form-control mt-4" name="s2">
									
									<option>SUBJECT</option>
									<option>MATHEMATICS</option>
									<option>ENGLISH LANGUAGE</option>
									<option>PHYSICS</option>
									<option>CHMISTRY</option>
									<option>YORUBA</option>
									<option>FURTHER MATHEMATICS</option>
									<option>ANIMAL HUSBANDRY</option>
									<option>BIOLOGY</option>
									<option>TECHNICAL DRAWING</option>
									<option>FISHERY</option>
								</select>
							</div>
							<div class="col-sm-6">
								<select class="form-control mt-4" name="g2">
								<option>GRADE</option>
									<option>A1</option>
									<option>B2</option>
									<option>B3</option>
									<option>C2</option>
									<option>C3</option>
									<option>C4</option>
									<option>C5</option>
									<option>C5</option>
									<option>C6</option>
									<option>D7</option>
									<option>D8</option>
									<option>F9</option>
								</select>
							</div>
						</div>
						<!--  -->
					
						<!--  -->
						<div class="row">
							<div class="col-sm-6">
								<select class="form-control mt-4" name="s3">
									<option>SUBJECT</option>
									<option>MATHEMATICS</option>
									<option>ENGLISH LANGUAGE</option>
									<option>PHYSICS</option>
									<option>CHMISTRY</option>
									<option>YORUBA</option>
									<option>FURTHER MATHEMATICS</option>
									<option>ANIMAL HUSBANDRY</option>
									<option>BIOLOGY</option>
									<option>TECHNICAL DRAWING</option>
									<option>FISHERY</option>
								</select>
							</div>
							<div class="col-sm-6">
								<select class="form-control mt-4" name="g3">
									<option>GRADE</option>
									<option>A1</option>
									<option>B2</option>
									<option>B3</option>
									<option>C2</option>
									<option>C3</option>
									<option>C4</option>
									<option>C5</option>
									<option>C5</option>
									<option>C6</option>
									<option>D7</option>
									<option>D8</option>
									<option>F9</option>
								</select>
							</div>
						</div>
						<!--  -->
				
						<!-- -->
						<div class="row">
							<div class="col-sm-6">
								<select class="form-control mt-4" name="s4">
									<option>SUBJECT</option>
									<option>MATHEMATICS</option>
									<option>ENGLISH LANGUAGE</option>
									<option>PHYSICS</option>
									<option>CHMISTRY</option>
									<option>YORUBA</option>
									<option>FURTHER MATHEMATICS</option>
									<option>ANIMAL HUSBANDRY</option>
									<option>BIOLOGY</option>
									<option>TECHNICAL DRAWING</option>
									<option>FISHERY</option>
								</select>
							</div>
							<div class="col-sm-6">
								<select class="form-control mt-4" name="g4">
									<option>GRADE</option>
									<option>A1</option>
									<option>B2</option>
									<option>B3</option>
									<option>C2</option>
									<option>C3</option>
									<option>C4</option>
									<option>C5</option>
									<option>C5</option>
									<option>C6</option>
									<option>D7</option>
									<option>D8</option>
									<option>F9</option>
								</select>
							</div>
						</div>
						<!--  -->
						
						
						<div class="row">
							<div class="col-sm-6">
								<select class="form-control mt-4" name="s5">
								<option>SUBJECT</option>
									<option>MATHEMATICS</option>
									<option>ENGLISH LANGUAGE</option>
									<option>PHYSICS</option>
									<option>CHMISTRY</option>
									<option>YORUBA</option>
									<option>FURTHER MATHEMATICS</option>
									<option>ANIMAL HUSBANDRY</option>
									<option>BIOLOGY</option>
									<option>TECHNICAL DRAWING</option>
									<option>FISHERY</option>
								</select>
							</div>
							<div class="col-sm-6">
								<select class="form-control mt-4" name="g5">
									<option>GRADE</option>
									<option>A1</option>
									<option>B2</option>
									<option>B3</option>
									<option>C2</option>
									<option>C3</option>
									<option>C4</option>
									<option>C5</option>
									<option>C5</option>
									<option>C6</option>
									<option>D7</option>
									<option>D8</option>
									<option>F9</option>
								</select>
							</div>
						</div>
						<!--  -->
								<div class="row">
							<div class="col-sm-6">
								<select class="form-control mt-4" name="s6">
									<option>SUBJECT</option>
									<option>MATHEMATICS</option>
									<option>ENGLISH LANGUAGE</option>
									<option>PHYSICS</option>
									<option>CHMISTRY</option>
									<option>YORUBA</option>
									<option>FURTHER MATHEMATICS</option>
									<option>ANIMAL HUSBANDRY</option>
									<option>BIOLOGY</option>
									<option>TECHNICAL DRAWING</option>
									<option>FISHERY</option>
								</select>
							</div>
							<div class="col-sm-6">
								<select class="form-control mt-4" name="g6">
									<option>GRADE</option>
									<option>A1</option>
									<option>B2</option>
									<option>B3</option>
									<option>C2</option>
									<option>C3</option>
									<option>C4</option>
									<option>C5</option>
									<option>C5</option>
									<option>C6</option>
									<option>D7</option>
									<option>D8</option>
									<option>F9</option>
								</select>
							</div>
						</div>
						<!--  -->
								<div class="row">
							<div class="col-sm-6">
								<select class="form-control mt-4" name="s7">
										<option>SUBJECT</option>
									<option>MATHEMATICS</option>
									<option>ENGLISH LANGUAGE</option>
									<option>PHYSICS</option>
									<option>CHMISTRY</option>
									<option>YORUBA</option>
									<option>FURTHER MATHEMATICS</option>
									<option>ANIMAL HUSBANDRY</option>
									<option>BIOLOGY</option>
									<option>TECHNICAL DRAWING</option>
									<option>FISHERY</option>
								</select>
							</div>
							<div class="col-sm-6">
								<select class="form-control mt-4" name="g7">
									<option>GRADE</option>
									<option>A1</option>
									<option>B2</option>
									<option>B3</option>
									<option>C2</option>
									<option>C3</option>
									<option>C4</option>
									<option>C5</option>
									<option>C5</option>
									<option>C6</option>
									<option>D7</option>
									<option>D8</option>
									<option>F9</option>
								</select>
							</div>
						</div>
						<!--  -->
								<div class="row">
							<div class="col-sm-6">
								<select class="form-control mt-4" name="s8">
										<option>SUBJECT</option>
									<option>MATHEMATICS</option>
									<option>ENGLISH LANGUAGE</option>
									<option>PHYSICS</option>
									<option>CHMISTRY</option>
									<option>YORUBA</option>
									<option>FURTHER MATHEMATICS</option>
									<option>ANIMAL HUSBANDRY</option>
									<option>BIOLOGY</option>
									<option>TECHNICAL DRAWING</option>
									<option>FISHERY</option>
								</select>
							</div>
							<div class="col-sm-6">
								<select class="form-control mt-4" name="g8">
									<option>GRADE</option>
									<option>A1</option>
									<option>B2</option>
									<option>B3</option>
									<option>C2</option>
									<option>C3</option>
									<option>C4</option>
									<option>C5</option>
									<option>C5</option>
									<option>C6</option>
									<option>D7</option>
									<option>D8</option>
									<option>F9</option>
								</select>
							</div>
						</div>
                        <!-- end -->
                        <div class="row">
							<div class="col-sm-6">
								<select class="form-control mt-4" name="s9">
										<option>SUBJECT</option>
									<option>MATHEMATICS</option>
									<option>ENGLISH LANGUAGE</option>
									<option>PHYSICS</option>
									<option>CHMISTRY</option>
									<option>YORUBA</option>
									<option>FURTHER MATHEMATICS</option>
									<option>ANIMAL HUSBANDRY</option>
									<option>BIOLOGY</option>
									<option>TECHNICAL DRAWING</option>
									<option>FISHERY</option>
								</select>
							</div>
							<div class="col-sm-6">
								<select class="form-control mt-4" name="g9">
									<option>GRADE</option>
									<option>A1</option>
									<option>B2</option>
									<option>B3</option>
									<option>C2</option>
									<option>C3</option>
									<option>C4</option>
									<option>C5</option>
									<option>C5</option>
									<option>C6</option>
									<option>D7</option>
									<option>D8</option>
									<option>F9</option>
								</select>
							</div>
						</div>
        				<input type="hidden" class="form-control mt-5" name="id1" value="<?php echo $d4['user_id'];?>">
						
						
        				<input type="submit" class="form-control mt-5 btn btn-danger" name="save" value="submit finally">
                        </form>
</div>
</div>
</div>

 <!--    ed   DE -->
        <!--  -->

        <div class="col-sm-3">
	
        <!-- Modal -->

        </div>
    </div>
</div>
