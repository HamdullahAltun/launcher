<?php
session_start();

$steam_api_key  = "CACB0D9C5FF03F2898950A0159397FCA"; // Steam Dev. API key yazınız

// Veritabani ile ilgili bilgiler
$db_addr = "fdb19.biz.nf"; // mysql server adresi
$db_user = "3423078_whiterp"; // mysql kullanici adi
$db_pass = "king_250"; // mysql parolasi
$db_name = "3423078_whiterp"; // mysql veritabani adi
$admin_pass = "102030"; // panele giriş şifresi

// FiveM server ile ilgili bilgiler
$use_whitelist = false; // Whitelist icin LauncherStatuses tablosunu kullanacaksaniz burayi true yapin
$fivem_server  = "178.63.192.51:30120"; // fivem server url örn; cfx.re/join/o6yo6y
$discord       = "https://discord.gg/Q8fdxFSkS9"; // discord sunucu adresiniz (bos birakilirsa launcherda discord butonu gizlenir)
$teamspeak3    = "whiterp"; // teamspeak3 sunucu adresiniz (bos birakilirsa launcherda teamspeak butonu gizlenir)

// Launcher icerisindeki updater ile ilgili bilgiler
$exe_version = "2020.10.3.151"; // launcher sag tiklayip ozelliklerde yazan surum numarasi exe ile bu tutmadiginda update_file indirilip kurulur
$update_file = ""; // surum numarasi tutmadiginda indirilecek dosyanin adresi

// IP tespiti
$ip = '';
if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])){
	$ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
} else {
	$ip = $_SERVER['REMOTE_ADDR'];
}
?>