<?php 

//Admin Panel Giriş Bilgileri ----------------
 $kadi="admin"; //Kullanıcı Adı Bilgisi tırnak işareti İçerisini Değiştirin.
 $Sifre="admin"; //Şifre Bilgisi tırnak işareti İçerisini Değiştirin.
 //---------------------------------------------
 
try {

//Db Bilgileridir Sadece burdaki bilgileri değiştirin.
//dbname:Veritabanı adınız.
//ilk bosluk veritabanı kullanıcı adınız.
//ikinci bosluk veritabanı şifreniz.
	// By Coded Wod-Hack
	$Db=new PDO("mysql:host=localhost;den1.mysql2.gear.host;charset=utf8",'instagramstalk','Da5qq!jUgYk_');

	
} catch (PDOExpception $e) 

{
	echo $e->getMessage();
}


?>