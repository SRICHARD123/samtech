





<?php
$get=$_GET['id'];
$sel="SELECT *from pdetails where pd='$get'";
$con=mysqli_query($dbcon,$sel);
$array=mysqli_fetch_array($con);



$aa=$_SESSION['id'];
$aaa="SELECT * FROM  registers where user_id='$aa'";
$ab=mysqli_query($dbcon,$aaa);
$ac=mysqli_fetch_array($ab);

$as="SELECT * FROM  pdetails where ID1='$aa'";
$A=mysqli_query($dbcon,$as);
$country=mysqli_fetch_array($A);




if(!isset($_SESSION['id'])){
    echo"<script>window.alert('you need to login first');window.location='admin_login_user.php';</script>";
  
  }



if(isset($_POST['save'])){
$state=$_POST['state'];
$lga=$_POST['lga'];
$date=$_POST['date'];
$pnam=$_POST['pnam'];
$pnum=$_POST['pnum'];
$address=$_POST['address'];
$country=$_POST['country'];
$contact=$_POST['contact_address'];
$gender=$_POST['gender'];
$id1=$_POST['ide'];

// $home_dir="image1/";
// $home_file= $home_dir.basename($_FILES["image"]["name"]);
// $uploadok=1;
// $imagefiletype= strtolower(pathinfo($home_file,PATHINFO_EXTENSION));
// $get_size=getimagesize($_FILES["image"]["tmp_name"]);
// if ($get_size==false) {
//   echo "file is an image";
//   $uploadok=1;
// }

// if (file_exists($home_file)) {
// echo "sorry file already exist";
// $uploadok=0;
// }

// if ($_FILES["image"]["size"] > 1000000) {
// echo "sorry,your file is to large";
// $uploadok=0;
// }

// if ($imagefiletype!="jpg" && $imagefiletype!="png" && $imagefiletype!="gif" && $imagefiletype!="jpeg") {
//   echo "Sorry only jpg,png,jpeg & Gif are allowed";
//   $uploadok=0;
// }
// if ($uploadok==0){
// echo "sorry your file was not uploaded ";
// }
// else{
//   if (move_uploaded_file($_FILES['image']['tmp_name'],$home_file)) {
// $image_upload="images/".$_FILES['image']['name'];



// end of imgae upload


$PG=mysqli_query($dbcon,"UPDATE registers SET payment_status='6' where user_id='$aa'");
$insert=mysqli_query($dbcon,"INSERT into pdetails(state_of_origin,local_gov,dob,parent_name,parent_number,ADDRESS,COUNTRY,CONTACT_ADDRESS,SEX,ID1) VALUES('$state','$lga','$date','$pnam','$pnum','$address','$country','$contact','$gender','$id1')");
if($insert){
    echo"<script>window.alert(' Press okay to continue'); window.location='dashboard2_user.php';</script>";
}
else{
  echo"<script>window.alert('Thanks for registering with us'); window.location='jd_user.php'; </script>";







}
}


?>
<div class="container mt-5 ">
<div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4"> 
    <div class="card">
    <div class="card-title text-center " style="background-color:#061630;">
                <h2  class="card-title" style=" color:gold; font-family:cursive;">Personal Details</h2>
            </div>
        <div class="card-body">

        <form class="form-group" method="post" enctype = "multipart/form-data">

                 <select onchange="toggleLGA(this);" name="state" id="state" class="form-control">
							<option value="" selected="selected">- Select -</option>
							<option value="Abia">Abia</option>
							<option value="Adamawa">Adamawa</option>
							<option value="AkwaIbom">AkwaIbom</option>
							<option value="Anambra">Anambra</option>
							<option value="Bauchi">Bauchi</option>
							<option value="Bayelsa">Bayelsa</option>
							<option value="Benue">Benue</option>
							<option value="Borno">Borno</option>
							<option value="Cross River">Cross River</option>
							<option value="Delta">Delta</option>
							<option value="Ebonyi">Ebonyi</option>
							<option value="Edo">Edo</option>
							<option value="Ekiti">Ekiti</option>
							<option value="Enugu">Enugu</option>
							<option value="FCT">FCT</option>
							<option value="Gombe">Gombe</option>
							<option value="Imo">Imo</option>
							<option value="Jigawa">Jigawa</option>
							<option value="Kaduna">Kaduna</option>
							<option value="Kano">Kano</option>
							<option value="Katsina">Katsina</option>
							<option value="Kebbi">Kebbi</option>
							<option value="Kogi">Kogi</option>
							<option value="Kwara">Kwara</option>
							<option value="Lagos">Lagos</option>
							<option value="Nasarawa">Nasarawa</option>
							<option value="Niger">Niger</option>
							<option value="Ogun">Ogun</option>
							<option value="Ondo">Ondo</option>
							<option value="Osun">Osun</option>
							<option value="Oyo">Oyo</option>
							<option value="Plateau">Plateau</option>
							<option value="Rivers">Rivers</option>
							<option value="Sokoto">Sokoto</option>
							<option value="Taraba">Taraba</option>
							<option value="Yobe">Yobe</option>
							<option value="Zamfara">Zamafara</option>
						 </select>
						<div class="form-group">
						<label class="control-label text-primary">LGA of Origin</label>
						<select name="lga" id="lga" class="form-control select-lga" required>
						</select>
					</div>

                    <p class="font-weight-bolder text-primary">Date Of Birth And Phone Number</p>
                <input type="date" placeholder="date of birth" class="form-control" name="date">
                <input type="number" placeholder="phone number" class="form-control mt-3" name="pn">
                <input type="text" placeholder="parent name" class="form-control mt-3" name="pnam">
                <input type="number" placeholder="parent phone number" class="form-control mt-3" name="pnum">

                <input type="text" placeholder="address" class="form-control mt-3" name="address">
 <select class="form-control mt-3" name="country">
                <option>Nigerial</option>	
           	
                </select>

              <input type="text" placeholder="parent phone number" class="form-control mt-3" name="contact_address">
                <select class="form-control mt-3" name="gender">
                <option>Gender</option>	
                <option>Female</option>	
                <option>Male</option>	
                </select>

                <input type="hidden" class="form-control disabled"    name="ide" value="<?php echo $ac['user_id'];?>" >
      
	            <input type="hidden" name="image" placeholder="picture" class="form-control mt-3" >
                
                <input type="submit"class="form-control mt-3 btn btn-success"  value="SAVE & CONTINUE" placeholder="save & continue" name="save">
        
            </form>

            </div>
          
        </div>
    </div>
    <div class="col-sm-4">
<!--     	<form class="form-group">
   		
        <input type="file" id="image-input">
<img id="image-preview" src="#" alt="Image Preview">

  <script type="text/javascript">

	$('#image-input').on('change', function(){
  var file = this.files[0];
  var reader = new FileReader();
  reader.onload = function(e){
    $('#image-preview').attr('src', e.target.result);
  }
  reader.readAsDataURL(file);
});
</script>
 -->


    	</form>





    </div>

  





</div>
</div>