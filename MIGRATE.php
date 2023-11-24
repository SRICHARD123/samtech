<?php 
$host ="localhost";
$username ="root";
$password ="";
$dbname ="students";
$dbcon=mysqli_connect($host,$username,$password,$dbname);



// echo from registers
$ge=$_SESSION['id'];
$g="SELECT *FROM registers where user_id='$ge'";
$t=mysqli_query($dbcon,$g);
$B=mysqli_fetch_array($t);

// $gee="SELECT *from pdetails where ID1='$ge'";
// $te=mysqli_query($dbcon,$gee);
// $Be=mysqli_fetch_array($te);







 ?>


<!DOCTYPE html>
<html>
<head>
	<title>dashbp </title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
 
  <link href="fonts/f2/css/all.css" rel="stylesheet" type="text/css">
	 <!-- cssss -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!-- script -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- end of script -->   


<!-- boostrap 4 glyphicons from bostrap 4 -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
<!-- end -->
<style>
body{
  
/*background:linear-gradient(-10deg,white 50%,rgb(18, 20, 22) 50%);*/

  background-image: url(cvn.jpg);
  opacity:1;
  z-index: -1;
}
  
</style>
</head>
<body class="bg-light">
<br><br><br>
<!--  hhhh-->
 <!-- <nav class="navbar navbar-expand-md  navbar-dark font-weight-bol fixed-top"  style="background-color:#061630;">  -->
  <!-- Brand -->
  <!-- <a class="navbar-brand" href="#"><img src="logo.png" class="pb-5 mb-5" height="100px" width="70px">


  </a>
 -->
  <!-- Toggler/collapsibe Button -->
  <!-- <button class="navbar-toggler  " type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
 -->
  <!-- Navbar links -->
 <!--  <div class="collapse navbar-collapse  " id="collapsibleNavbar" >

    <ul class="navbar-nav float-sm-right text-white" >
      <li class="nav-item active">
        <a class="nav-link font-weight-bolder" href="">Dashboard</a>
      </li>
     
    
      
      <li class="nav-item">
        <a class="nav-link font-weight-bolder" href="login.html">Logout</a>
      </li>
     
    </ul>
  </div>
</nav> -->
<!-- ffff -->
<br><br>
<h3 class="text-white mt-5" style="text-transform:sentence; color:white;">Welcome <?php echo $B ['SURNAME'];?>&nbsp;<?php echo $B ['FIRSTNAME'];?>&nbsp;<?php echo $B ['OTHERNAME'];?></h3>

<section>
  <div class="container-fluide">

    <div class="d-flex  align-item-center justify-content-end ">
      <div class="col-md">
        <ul class="nav nav-pills">
        <!--   <li class="nav-item"> <a href="index.html" class="nav-link text-dark">Home</a></li> -->
          <li class="nav-item "><a href="" class="nav-link text-white active"   style="background-color:#061630;">Dashboarde</a></li>
        </ul>
      </div>
      <!--  -->
      <div class="col-md">
        <h1 class=" text-white">RICHARDTECH</h1>
      </div>
    </div>

  </div>
</section>

 <br>
<!-- dashboard   -->
<!-- using php to fetch my details -->





<!--  -->
<div class="container-fluid">
    <div class="row shadow-sm p-4 mb-4 bg-light">
      <div class="col-sm-7">
        <div class="text-white"  style="background-color:#061630;">
  <div class="card-body">
         <div class="card-text"><p>  I am <?php echo $B ['SURNAME'];?>&nbsp;<?php echo $B ['FIRSTNAME'];?>&nbsp;<?php echo $B ['OTHERNAME'];?>, with RegCode FKCJ3657. My Matric Number is <?php  echo $B['MATRICNUMBER']; ?> and my Ledger Number is  <?php  echo $B ['user_id']; ?>562.

</p></div>
          
        </div>
      </div>
    </div>
  
<!--  -->

<div class="col-sm-2">
  <div class="card">
    <div class="card-body">
      <img src="./image/<?php echo $BE['img'];?>"  class="d-block mx-auto"  style="width: 100px; height: 100px;   ">


    </div>
 </div>
</div>

<div class="col-sm-3">
  <div class="card  shadow-sm p-4 mb-4 bg-light">
    <div class="card-body">
  <a href="logout.php" class="btn btn-warning btn-block "  style="background-color:#061630;">Logout</a>
</div>
</div>
</div>
</div>
</div>
<!--  -->





<div class="container-fluid">
<div class="row">

    <div class="col-sm-4">
    <div class="card">
    <div class="card-header
 text-center font-weight-bolder " style="background-color:#061630; color:white;">
      <h3>Dashboard</h3>
    </div>
    <div class="card-body bg-warning">
      <p class="" style="background-color:#061630; color:white;">
        

Dashboard
Good Afternoon
<?php echo $B['SURNAME'];    ?>, SUNDAY RICHARD
Logged In Session :
2021/2022
Logged In Semester :
First Semester
Logged In Year : 3
 
Switch Current Log In State
      </p>


<div class="row">
    <div class="col-sm-4">
       <form class="form-group">
        <select class="form-control">
          <option> Session</option>
          <option>2022/2015</option>
          <option>2021/2222</option>
        </select>
      </form>
    </div>
    <div class="col-sm-4">
       <form class="form-group">
        <select class="form-control">
          <option> Semester</option>
          <option>First  Semester</option>
          <option>Second Semester</option>
        </select>
      </form>
    </div>
    <div class="col-sm-4">
      <a href="" class=" btn btn-block btn-warning font-weight-bolder">Switch</a>
    </div>
  </div>



  </div>
  </div>
</div>
<!-- s -->

<div class="col-sm-8">
  <div class="row">
    <!--  -->
    <div class="col-sm-4">
      <a href="" class="text-decoratio">
      <div class="card">
        <div class="card-body " style="background-color:#061630;">

          <div class="card-text">
            <div class=" h1 text-center">
            <i class=" fa fa-eye" style="color: gold;"></i>
          </div>
            <h4 class="text-white text-uppercase text-center">View Result</h4>
          </div>

        </div>
      </a>
      </div>
    </div>
    <!--  -->
    <!--  -->
    <div class="col-sm-4">
      <a href="" class="text-decoration-none">
      
      <div class="card">
        <div class="card-body "   style="background-color:#061630;">
          <div class=" h1 text-center">
            <i class=" fa fa-th" style="     color: gold;"></i>
          </div>
          <div class="card-text">
            <h4 class="text-center text-white">Course Registeration</h4>
          </div>
          </div>
        </div>
      </a>
       </div>


<!--  -->
<div class="col-sm-4">
      <a href="" class="text-decoration-none" >
      <div class="card">
        <div class="card-body" style="background-color:#061630;">
          <div class=" h1 text-center">
            <i class=" fa fa-print" style="color:gold;"></i>
          </div>
          <div class="card-text">
            <h4 class="text-center text-white">Print Receit</h4>
          </div>
          </div>
        </div>
      </a>
       </div>
<!--  -->
<!--  s-->
  </div>
  <br>
  <div class="row">
    
    <div class="col-sm-12 ">
      

      <div class="row">
    <div class="col-sm-4">
      <a href="" class="text-decoration-none text-white">
      <div class="card">
        <div class="card-body" style="background-color:#061630;">
          <div class=" h1 text-center">
            <i class=" fa fa-user" style="color:gold;"></i>
          </div>
          <div class="card-text">
            <h4 class="text-center">Bio-Data</h4>
          </div>
          </div>
        </div>
      </a>
       </div>
    <div class="col-sm-4">
 <a href="" class="text-decoration-none text-white">
      <div class="card">
        <div class="card-body " style="background-color:#061630;">
          <div class=" h1 text-center">
            <i class=" fa fa-certificate" style="color:gold;"></i>
          </div>
          <div class="card-text">
            <h4 class="text-center">Manage Other Result</h4>
          </div>
          </div>
        </div>
      </a>
       </div>
    <div class="col-sm-4">
      <a href="" class="text-decoration-none text-white">
<div class="card">
        <div class="card-body " style="background-color:#061630;">
          <div class=" h1 text-center">
            <i class="fa fa-check" style="color:gold;"></i>
          </div>

          <div class="card-text text-center">
            <h4>Payment Clearance</h4>
          </div>
          </div>
        </div>
      </a>
</div>
  </div>
  <!--  -->


    </div>
  </div>
  <!--  de-->
<br>
  <!-- <div class="row">
    
    <div class="col-sm-12 ">
      

      <div class="row">
    <div class="col-sm-4">
      
      <div class="card">
        <div class="card-body bg-primary">
          <div class="card-text">
            <p>fkffjfjfjfjfkfkllll;s;s;;;s;s;</p>
          </div>
          </div>
        </div>
    </div>
    <div class="col-sm-4">
      
<div class="card">
        <div class="card-body bg-primary">
          <div class="card-text">
            <p>fkffjfjfjfjfkfkllll;s;s;;;s;s;</p>
          </div>
          </div>
        </div>


    </div>
    <div class="col-sm-4">
      
<div class="card">
        <div class="card-body bg-primary">
          <div class="card-text">
            <p>fkffjfjfjfjfkfkllll;s;s;;;s;s;</p>
          </div>
          </div>
        </div>


    </div>
  </div>


    </div>
  </div>

 -->
<!--  -->
</div>
</div>
</div>

















  


<br><br><br><br><br><br>

<!-- footer -->
<div class="footer "   style="background-color:#061630;">
   <p class="text-center text-white ">&copy;Adelakunsundayrichard.All Right Reserved.</p>
    <p class="text-center text-white">Designed By Rastech. </p>
  
</div>

<!-- footer -->





</body>
</html>