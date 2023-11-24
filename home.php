





<div id="demo" class="carousel slide" data-ride="carousel ">
<ul class="carousel-indicators">
       <li data-target="#demo" data-slide-to="0"class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="img66/s.jpg" alt="Los Angeles " class="H-50 W-100">
      <div class="carousel-caption mt-5">
        
<div class="container " style="margin-buttom:100px;">
  <p id="x"  class="typed text-weight-bolder">THIS IS DESIGNED BY ADELAKUN SUNDAY RICHARD</p>
</div>
</div>
      
       </div>
      <div class="carousel-item">
      <img src="img66/s.jpg" alt="Los Angeles " class="H-50 W-100">
    </div>
</div>  
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a> 
  </div>
  <marquee class=" marquee" style="background-color:gold; color:black; font-weght:bold;">GODS GRACE</marquee>
<!-- ####33start -->

<style type="text/css">



.container{
  display:block;
  font-family: "arial";
  font-size: 30px;
 
}
#x{
  position:relative;
  bottom:100px;
text-align:center;

}
.typed {
  text-shadow: 6px 4px 2px black, 0 0 25px blue, 0 0 5px darkblue;
  overflow: hidden;
  white-space: nowrap;
  width: 0;
  animation: typing  infinite;
  animation-duration: 30s;
  animation-timing-function: ease-in-out;
  animation-fill-mode:backwards;
 animation-delay: 0s;
  animation-direction: alternate;
   border-right: 7px solid white;
   



}

@keyframes typing {
  from { width: 0 }
 to { width: 100% }
}



</style>
  


<!-- start session -->
<section id="learn" class="p-5 bg-success " style="z-index: -1;">
  <div class="container">
    <div class="row align-item-center justify-content-between ">
       <div class="col-md">
        <br><br>
         <img src="img66/4.jpg"class="img-fluid" alt="">
       </div>
       <div class="col-md p-5 text-white">
         <h2> learn the fundameental</h2>
         <p class="lead text-white" >
           Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Laudantium quia natus ex iste vero vitae suscipit fugit ullam quae aut,
             modi voluptates veniam neque deleniti alias, dolores officiis sed earum!
         </p>
     
             <a href="#" class="btn btn-success mt-3">  <span class="	glyphicon glyphicon-menu-right"></span>Read more</a>

             <style type="text/css">
               
             </style>
          
       </div>

    </div>
  </div>

</section>

<!-- end -->

<!-- start session -->

<section id="learn" class="p-5  " style="z-index: -1; background-color: black;">

    <div class="row ">
       <div class="col-md">
     <table id="datatable1" class="table">
       <!--  <thead>
          <tr>
            <th>No</th>
            <th>Sur-Name</th>
            <th>First-Name</th>
    

          </tr>
        </thead> -->
        <tbody>
          <?php
$count=1;
$sell="SELECT * FROM uploade_tohome  ";
$conss=mysqli_query($dbcon,$sell);
while($view_me=mysqli_fetch_array($conss)){
    
?>
<tr>
<td><p class="text-white float-left"><?php echo $view_me['COMMENT'];?>
  <a href="continue.php?id=<?php echo $view_me['id']?>" class="btn btn-success mt-3">  <span class="  glyphicon glyphicon-menu-right"></span>Read more</a>
          
</p></td>

<td><img src="<?php echo $view_me['IMAGE'] ; ?>" alt="user" class="rounded   float-right  img-fluid" ></td>
</tr>
 </tbody>
        <?php }?>
      </table>
        
       </div>
       <!-- start a new div -->
      <!--  <div class="col-md- p-5 text-white">
        
            </div> -->
<!-- end div -->
    </div>
</section>
<!-- end session -->

<!-- start -->
<!-- <section mt-4>
  <div class="container-fluid">


<div class="card">
  <div class="card-body"> -->
<!--  -->
<!--   <div class="row   align-item-center justify-content-between">
    <div class="col-sm-4 mt-3   ">
     
    </div>
    <div class="col-sm-4 mt-3">
     
    </div>
  </div> -->

<!--  -->
<!-- </div>
</div>
</div>
</section> -->
<!-- end -->
<!-- start -->
<div class="container-fluid lead">

<div class="row">
  
  <div class="col-sm-12">
    <div class="card mt-3">
      <div class="card-header  text-weight-bolder "style="background-color: #061630; text-align:center; color: white;">
        <p>NEWS<hr class="bg-success"> AND UPDATE</p>
      </div>
      <div class="card-body">
        
          <div class="row">
            <?php
$count=1;
$sell="SELECT * FROM upload_tohome2 ";
$conss=mysqli_query($dbcon,$sell);
while($view_me=mysqli_fetch_array($conss)){
    ?>
            <div class="col-sm-2">
              <div class="card">
                <div class="card-body" style="background-color:black;">
              <img src="<?php echo $view_me['IMAGE'] ; ?>" alt="user" class="rounded img-fluid">
              </div>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="card    shadow-sm ">
                <div class="card-body" style="color:black;"  >
 <?php echo $view_me['COMMENT'];?>
               <button id="btnc " class="btn btn-block  cv"><a href="continue2.php?id=<?php echo $view_me['UPLOAD2']?>">  <span class="  glyphicon glyphicon-menu-right" ></span>Read more</a></button>
               <style type="text/css">
/*  this style is for upload and comment*/
                  .cv:hover{
    background-color:white;
/*    transition: 2s;*/
transition-duration:2s;
transform: rotate(5deg);
    color:white;
    border-right: 4px solid black;

  }
          .cv a{
   text-decoration:none;
   color:black;
 }

               </style>
             </div>
</div>
            </div>
 <?php  }?>
                
<div class="col-sm-2">
     
  
</div>
<div class="col-sm-2">
            
</div>


<div class="col-sm-2">
             
  
</div>
<div class="col-sm-2">
              

</div>


          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="col-sm-4"></div>
  <div class="col-sm-4"></div> -->
</div>
<div>


<!-- end -->