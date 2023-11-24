<?php    include'include/connect.php'; ?>
<?php     include'include/head.php'; ?>
<?php     include'nav/nav.php';?>


<?php


$gg=$_GET['id'];
$ab="SELECT * from uploade_tohome where id='$gg'";
$ac=mysqli_query($dbcon,$ab);
$view_me=mysqli_fetch_array($ac);

?>


<section id="learn" class="p-5 bg-primary " style="z-index: -1;">
  <div class="container">
    <div class="row ">
       <div class="col-md">
     <table id="datatable1" class="table">
      
          </tr>
        </thead> -->
        <tbody>       
<tr>
<td>
  <p class="text-white float-left"><?php echo $view_me['COMMENT'];?>
  
          
</p></td>

<td>
  <img src="<?php echo $view_me['IMAGE'] ; ?>" alt="user" class="rounded   float-right" width="100%" height="100%"></td>




</tr>


        


        </tbody>
    
      </table>
        
       </div>
       <!-- start a new div -->
      <!--  <div class="col-md- p-5 text-white">
        
            
          
       </div> -->
<!-- end div -->
    </div>
  </div>

</section>
