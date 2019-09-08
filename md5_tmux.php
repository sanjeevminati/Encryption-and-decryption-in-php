<?php
	echo "[1]: Enter 1 for encryption:= \n";
	echo "\n[2]: Enter 2 for decryption:= ";
	echo "\n[+]Enter the Choice=";
	$choice = trim(fgets(STDIN,1024));
		if ($choice == 1) {
			echo ("Enter The String to encrypt:- ");
			//$ip = trim(fgets(STDIN, 1024));
			$str1 = trim(fgets(STDIN,1024));
			echo "Encrypted text:- " .md5($str1)."\n";	# code...
		}
			
	else  {
		echo "\nEnter the String to decrypt:- ";
	$str2 = trim(fgets(STDIN,1024));
	$res  =  file_get_contents("https://www.nitrxgen.net/md5db/".$str2);
	echo  $res."\n";
	}


?>