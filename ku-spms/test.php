<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>ramesh
<?php
ini_set("arg_separator.output", "&amp;");
ini_set('default_charset', 'utf-8');
// Start output buffering with gzip compression and start the session
ob_start('ob_gzhandler');
//session_start();
// get full path to collabtive
define("CL_ROOT", realpath(dirname(__FILE__)));
// configuration to load
define("CL_CONFIG", "standard");
// collabtive version
define("CL_VERSION", 0.7);
//echo CL_ROOT;
// uncomment for debugging
//error_reporting(E_ALL | E_STRICT);
// include config file , pagination and global functions
require(CL_ROOT . "/config/" . CL_CONFIG . "/config.php");
require(CL_ROOT . "/include/SmartyPaginate.class.php");
require(CL_ROOT . "/include/initfunctions.php");
// Start database connection
if (!empty($db_name) and !empty($db_user))
{
    $tdb = new datenbank();
    $conn = $tdb->connect($db_name, $db_user, $db_pass, $db_host);
}
//$tests=new Test();
//class Test{
	
//private $notice;
/*function __construct()
    {
        $this->notice = new emailer();
    }
public function testing(){
	$id=2;
	    //include_once('init.php');

    include_once('./include/class.notify.php');*/
   include_once('./include/class.datenbank.php');
   $settings=mysql_query("SELECT * FROM settings");
   $settings=mysql_fetch_array($settings);
  // echo $settings["mailmethod"];
   $notice=new emailer($settings);
   $id=2;
   $username=$user;
   echo $username[0];
		$subject="grade update";
		$text="has been updated.";
		/*$headers='MIME-Version:1.0'."\r\n";
		$headers.='Content-type:text/html;charset=iso-8859-1'."\r\n";
		$headers.='From:sender@sender.com'."\r\n";
		if(mail("lazymesh@gmail.com",$subject,$text,$headers)){
		echo $text.'<br>';die();
		}
		else {echo "faled";die();}
		//$to=projectandgradenotice($id);
					//echo $to[0];

		/*if(mail($to[10],$subject,$text)){
			echo $to[2];
		}*/
		//echo $email[0];
//}
		//function projectandgradenotice($id)
//{
		//$email = mysql_query("SELECT name FROM user WHERE ID=$id");

	$email = mysql_query("SELECT U.email FROM user U WHERE U.ID IN (SELECT PA.user FROM projekte_assigned PA WHERE PA.projekt=$id)");
	$i=0;
	while($eml = mysql_fetch_array($email)){
		$e[$i]= $eml["email"];
		echo $e[$i];
		//ini_set('smtp.gmail.com',465);
		//if($notice->send_mail($e[$i],$subject,$text)){
			//echo $e[$i]."<br>";
		//}
	$i++;
	}die();
	//return $e;

//}
//}
//}
echo "ramesh";
$me='ramesh';
$now=strftime("%c\n");
echo $now;?>
</body>
</html>
