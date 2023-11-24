<?php

$host ="localhost";
$username ="root";
$password ="";
$dbname ="students";
$dbcon=mysqli_connect($host,$username,$password,$dbname);?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap 5 Simple Datatable Example</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- bootstrap5 dataTables css cdn -->
    <link rel="stylesheet"href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" />
  </head>

  <body>
    <div class="container mt-4">
      <table id="datatable1" class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>createdAt</th>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>createdAt</th>
            <th>Name</th>
            <th>Email</th>
            <th>createdAt</th>
            <th>createdAt</th>

          </tr>
        </thead>
        <tbody>
          <?php
$count=1;
$sell="SELECT *FROM registers";
$conss=mysqli_query($dbcon,$sell);
while($view_me=mysqli_fetch_array($conss)){
    
?>
          <tr>
            
<td><?php echo $count++    ?></td>
<td><?php echo $view_me['SURNAME'];   ?></td>
<td><?php echo $view_me['FIRSTNAME'];   ?></td>
<td><?php echo $view_me['OTHERNAME'];   ?></td>
<td><?php echo $view_me['PHONENUMBER'];   ?></td>
<td><?php echo $view_me['EMAIL'];   ?></td>
<td><?php echo $view_me['USERNAME'];   ?></td>
<td><?php echo $view_me['PASS_WORD'];   ?></td>
<td><?php echo $view_me['payment_purpose'];   ?></td>
<td><?php echo $view_me['payment_status'];   ?></td>
<td><?php echo $view_me['amount'];   ?></td>

             <td>
        <a href="regupdate_user.php?id=<?php echo $view_me['user_id'];?>"class="btn btn-primary">APPROVE</a>
        <a href="regdelete_user.php?id=<?php echo $view_me['user_id'];?>"class="btn btn-danger">DISAPPROVE</a>
        
               </td>
          </tr>
          
          
        </tbody>
        <?php }?>
      </table>
    
    </div>
    <!-- bootstrap5 dataTables js cdn -->
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function () {
        $('#datatable1').DataTable();
      });
    </script>
  </body>
</html>