<?php include'include/connect.php'; ?>
<?php include'include/head.php'; ?>
<?php include'nav/nav.php'; ?>
   <?php 




$va=$_SESSION['id'];
$aaa="SELECT * FROM  registers where user_id='$va'";
$ab=mysqli_query($dbcon,$aaa);
$ac=mysqli_fetch_array($ab);






if(isset($_POST['save'])){
// this ismy code for image.
$home_dir="image1/";
$home_file= $home_dir.basename($_FILES["image"]["name"]);
$uploadok=1;
$imagefiletype= strtolower(pathinfo($home_file,PATHINFO_EXTENSION));
$get_size=getimagesize($_FILES["image"]["tmp_name"]);
if ($get_size==false) {
  echo "file is an image";
  $uploadok=1;
}

if (file_exists($home_file)){
echo "sorry file already exist";
$uploadok=0;
}

if ($_FILES["image"]["size"] > 1000000) {
echo "sorry,your file is to large";
$uploadok=0;
}

if ($imagefiletype!="jpg" && $imagefiletype!="png" && $imagefiletype!="gif" && $imagefiletype!="jpeg") {
  echo "Sorry only jpg,png,jpeg & Gif are allowed";
  $uploadok=0;
}
if ($uploadok==0){
echo "sorry your file was not uploaded ";
}
else{
  if (move_uploaded_file($_FILES['image']['tmp_name'],$home_file)) {
$image_upload="image1/".$_FILES['image']['name'];
}


// end of imgae upload

// UPDATE TO
$up=mysqli_query($dbcon,"UPDATE registers SET payment_status='9'   where user_id='$va'");
$insert=mysqli_query($dbcon,"INSERT into imageupload(STUDENTIMAGE)VALUES('$image_upload')");
if($insert){
    echo"<script>window.alert(' Press okay to continue'); window.location='dashboard2_user.php';</script>";
}
else{
  echo"<script>window.alert('Thanks for registering with us'); window.location='jd_user.php'; </script>";

}
}
}

$get=$_SESSION['id'];
$sel="SELECT *from  imageupload where IMAGE='$get'";
$con=mysqli_query($dbcon,$sel);
$array=mysqli_fetch_array($con);



    ?>
<br>
<br>
<!--  -->

<!--  -->
<!--  -->


<div class="card">
   <div class="card-header">
      <p class="card-title text-center text-primary "><b>Image upload</b></p>
   </div>
   <div class="card-body">
      <!-- start row -->
      <div class="row">
         <div class="col-sm-4">
            
         </div>
         <div class="col-sm-4">
            
<form   method="post" enctype ="multipart/form-data">
   <input type="file" class="form-control" name="image"   id="image-input">
<script type="text/javascript">

   $('#image-input').on('change', function(){
  var file = this.files[0];
  var reader = new FileReader();
  reader.onload = function(e){
    $('#image-preview').attr('src',e.target.result);
  }
  reader.readAsDataURL(file);
});
</script>
<input type="submit"value ="upload " class="form-control mt-4   bg-success  text-white" name="save">

</form>

         </div>
         <div class="col-sm-2">
            
               <div class="card">
                  <div class="card-body">
             <!-- image preview -->
            <img   style=""    id="image-preview"  width="100px" height="100px" src="">

             </p>
                  </div>
               </div>

         </div>
         <div class="col-sm-2">
            



         </div>
      </div>
      <!-- end -->


   </div>
</div> 

<!--  -->
<?php include'include/footer.php'; ?>