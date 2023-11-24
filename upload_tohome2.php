
<?php    include'include/connect.php'; ?>
<?php     include'include/head.php'; ?>
<?php     include'nav/nav.php';?>



<br>
<br>
<!--  -->

<!--  -->
<!--  -->


<div class="card">
   <div class="card-header">
      <p class="card-title text-center text-primary   alert alert-danger "><b>PLEASE BEWARE OF WHAT YOU POST</b>
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   </p>
   </div>
   <div class="card-body">
      <!-- start row -->
      <div class="row">
         <div class="col-sm-4">
            2
         </div>
         <div class="col-sm-4">
            <!-- start form -->
<form   method="post" enctype ="multipart/form-data">
   *<label type="textarea">upload image</label>

   <input type="file" class="form-control" name="image"   required   id="image-input">
   <br>
   <br>
   <!-- <input type="text" class="form-control mt-4" name="unique"> -->
   *<label type="textarea">Shot Comment</label>

   <textarea  type="text" cols="5" class="form-control" name="unique"></textarea>
   *<label type="textarea">Full Comment</label>
   <textarea  type="text"  class="form-control" name="uniqu"></textarea>

   <!-- this will make the image display -->
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
<input type="submit"  value ="upload " class="form-control bg-success mt-4 text-white"  name="save">

</form>
<!-- end form -->

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
<?php 



// $va=$_SESSION['id'];
// $aaa="SELECT * FROM   uploade_tohome where UPLOAD='$va'";
// $ab=mysqli_query($dbcon,$aaa);
// $ac=mysqli_fetch_array($ab);



if(isset($_POST['save'])){
// this ismy code for image.
$home_dir="images/";
$home_file= $home_dir.basename($_FILES["image"]["name"]);
$uploadok=1;
$imagefiletype= strtolower(pathinfo($home_file,PATHINFO_EXTENSION));
$get_size=getimagesize($_FILES["image"]["tmp_name"]);
if ($get_size==false) {
  echo "file is an image";
  $uploadok=1;
}

// if (file_exists($home_file)){
// echo "sorry file";
// $uploadok=0;
// }

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
$image_upload="images/".$_FILES['image']['name'];
$unique=$_POST['unique'];
$uniqu=$_POST['uniqu'];
// THE ABOVE IS MY INSERT
}


// end of imgae upload


$inse=mysqli_query($dbcon,"INSERT into upload_tohome2(IMAGE,COMMENT,COMMENT2)VALUES('$image_upload','$unique','$uniqu')");

if($inse){
    echo"<script>window.alert(' Press okay to continue'); window.location='upload_tohome2.php';</script>";
}
else{
  echo"<script>window.alert('Thanks for registering with us'); window.location='upload_tohome2.php'; </script>";

}
}
}

// $get=$_SESSION['id'];
// $sel="SELECT *from   uploade_tohome where UPLOAD='$get'";
// $con=mysqli_query($dbcon,$sel);
// $array=mysqli_fetch_array($con);

   ?>