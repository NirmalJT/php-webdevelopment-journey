<?php
$username = "Bro Coder";
$phone = "12345-6789-12345";

// $username=strtolower($username);
// $username=strtoupper($username);
// $username = trim($username);
// $username=str_pad($username,20,"0");
// $phone=str_replace("-"," ",$phone);
// $equals=strcmp($username,"Bro Coder");
// $username = strlen($username);
// $phone = strpos($phone,"-");
// $username=strrev($username);
// $username=str_shuffle($username);
// $new= substr($username,0,5);
$new = explode(" ", $username);
$data = array("Hello", "my", "name", "is", "Nirmal");
$newstr = implode("-",$data);
echo $newstr;

foreach ($new as $newnew) {
    echo $newnew;
}
// echo $phone;
