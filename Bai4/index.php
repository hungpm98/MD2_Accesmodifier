<?php
include_once "User.php";
$user1 = new User("Hùng","PhamHung9498@gmail.com",1);
$user1->setRole(2);
 echo $user1->getInfo()."<br>";
 $user1->isAdmin();