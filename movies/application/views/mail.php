<?php

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: My Site Name <info@siddhrans.com>' . "\r\n";

    $name=$_REQUEST['name'];
    $mail=$_REQUEST['email'];
    $content="<html><body><table border='1'><tr><td>Name</td><td>".$name."</td></tr><tr><td>Email</td><td>".$mail
    ."</td></tr><tr><td>Link</td><td><a href='http://movies.siddhrans.com/verify.php?uid='></td></tr></table></body></html>";
    echo "<script>location.href='index.html';</script>";
?>
