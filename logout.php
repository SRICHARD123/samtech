<?php
session_start();
session_unset();
session_destroy();
echo"<script>
window.alert('Are you sure u want to logout'); window.location='login_user.php';</script>";
?>