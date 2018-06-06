<?php

namespace controllers\auth\mypdo;

interface mypdo
{
protected $host="127.0.0.1";	
protected $dbname="h-l";
protected $user="root";
protected $pass="";

public function  PDO ("mysql:host=$host;dbname=$dbname", $user, $pass);
  
}







