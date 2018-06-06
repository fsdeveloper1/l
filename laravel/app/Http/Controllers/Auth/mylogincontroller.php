<?php

namespace controllers\auth\mylogincontroller;

class mylogincontroller implements mypdo
{ 

 protected function mypdofunc()
 {
	return new mypdo;    //return new mypdo as $mypdo;  //  $mypdo =& new mypdo; return $mypdo; 
 }
 protected function myuservalidate()
 {
 $email ='email';
 $password ='password';
 $myrequest =& mypdofuncp->repare("SELECT ':email',':password' FROM users WHERE 1;");
 exec (array(':email'=> $email , ':password' => $password))
  $mydata =& $myrequest->fetchAll(PDO::FETCH_ASSOC);
  
      $a =& $mydata['email'];
      $b =& $mydata['password'];
 
     foreach ($aa && $bb)
 
     { 
	     if($a = $_POST['email'] && $b = $_POST['password'] )
	     {
		     

	     }
     }
  }
}
?>	 