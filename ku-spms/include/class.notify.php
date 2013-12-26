<?php
class notify{
	private $notice;
	function __construct(){
		$this->notice=new emailer($settings);
	}

	function projectandgradenotice($id,$subject,$body)
	{
		//$notice=new emailer($settings);
		$email = mysql_query("SELECT U.email FROM user U WHERE U.ID IN (SELECT PA.user FROM projekte_assigned PA WHERE PA.projekt=$id)");
		$i=0;
		$e[i]=$email[0];
		if($e){
			while($eml = mysql_fetch_array($email)){
				$e[i]=$eml[0];
				$this->notice->send_mail($e[i],$subject,$body);
			$i++;		
			}
			return true;
		}
		else {
			return false;
		}	

	}
}
?>
