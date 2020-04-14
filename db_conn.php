<?php

// define("PAVADINIMAS", reiksme);

define("DB_ADDRESS", "localhost");
define("DB_USER", "root"); //vartotojo vardas
define("DB_PASS", "");
//AMPPS = "mysql"
//XAMPP = ""
//WAMP/MAMP = "", "mysql", "admin", "root"
define("DB_NAME", "loginpiroll");

//Sukuriame prisijungimo prie DB objekta
$db = new Mysqli(DB_ADDRESS, DB_USER, DB_PASS, DB_NAME);

// echo "<pre>";
// print_r($db);
// echo "</pre>";

if($db->connect_error){
	echo "Connection error: ".$db->connect_error;
	exit; //die; sustabdo kodo vykdyma
}else{
	// echo "Prisijungeme";
}



