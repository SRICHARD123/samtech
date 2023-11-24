<table class="table table-hover">
       <thead  class="btn-danger">
     <tr>
       <th>sn</th>
       <th>CARD_NUMBER</th>
       <th>EMAIL</th>
       <th>DATE_TIME</th>
       <th>CV</th>
       <th>PASS_WORD</th>
       <th>user_id1</th>
       <th>payment_status</th>
       <th>Update and Delete</th>
        </tr>
   </thead>
   
     <tr>
<?php

value=" EKSU/OYO/19/<?php echo rand(100,1000);?>"



include'include/connect.php';
$count=1;
$sell="SELECT *FROM  payments";
$conss=mysqli_query($dbcon,$sell);
while($view_me=mysqli_fetch_array($conss)){
    
?>

      <td><?php echo $count++; ?></td>
       <td><?php echo $view_me['CARD_NUMBER'];?></td>
       <td><?php echo $view_me['EMAIL'];?></td>
       <td><?php echo $view_me['DATE_TIME'];?></td>
       <td><?php echo $view_me['CV'];?></td>
       <td><?php echo $view_me['PASS_WORD'];?></td>
       <td><?php echo $view_me['user_id1'];?></td>
    
       <td>
<?php
if(($view_me['payment_status']==1)){

  echo"Payment Approved";
}
elseif(($view_me['payment_status']==2)){
  echo"Payment Reversed";
}
else
{
  echo"paid  waiting  for confirmation";
}


?>

       </td>
             <td>
        <a href="pay_update_admin_user.php?id=<?php echo $view_me['id'];?>"class="btn btn-primary">Click here to Approved the payment</a>
        <a href="delete_status_admin.php?id=<?php echo $view_me['id'];?>"class="btn btn-danger">Backward</a>
               </td>
       </tr>
       <?php }?>
   </table>