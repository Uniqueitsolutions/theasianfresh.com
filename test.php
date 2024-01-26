<?php 
include __DIR__.'/sendmail.php';
$mailObj=new sendmail();

$mailObj->ReciverEmail="gujjugammer26@gmail.com";
$mailObj->Subject="test";
$mailObj->Body="test<img src='https://www.google.com/url?sa=i&url=https%3A%2F%2Fpixabay.com%2Fimages%2Fsearch%2Fnature%2F&psig=AOvVaw08ddS-LHjzcja7uQg5yPLf&ust=1687096143974000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCPiypYi5yv8CFQAAAAAdAAAAABAE'/>";
$mailObj->sendMail();

?>