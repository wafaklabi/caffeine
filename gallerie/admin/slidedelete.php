<?php

$mykey1=$_REQUEST['key1'];
$status='delete';

include 'connect.php';
mysqli_query($con,"update tbl_slider set status='$status' where id = '$mykey1'");
echo "<script>location.href='viewslider.php'</script>"

?>
