<?php

// Заглушка sendmail 
// http://urths.com/blog/заглушка-sendmail/
//прописать путь в php.ini где хранится этот файл

$MailDir = 'C:\apache\localhost\send_mail\mail'; // папка для сохранения писем

$data = date();
$line = 'urths.com';

$f = fopen("php://stdin", "r"); 	
while( !feof($f) AND ($line!='') ) { 
	$line = fgets($f,255); 
	$data .= $line;
} 
fclose($f);

$data = str_replace("\r", '', $data);
$data = str_replace("\n", "\r\n", $data);

$i = 0;
$addon = '';
while ( file_exists( $fname = ($MailDir.'/'.date('Y-m-d H-i-s').$addon.'.eml') )) {
	$i++;
	$addon = '-'.$i;
}	

file_put_contents($fname, $data);

?>