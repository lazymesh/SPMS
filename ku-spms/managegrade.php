<?php
require("./init.php");
// check if user is logged in
if (!isset($_SESSION["userid"]))
{
    $template->assign("loginerror", 0);
    $template->display("login.tpl");
    die();
}
// create message object
$notice=new gmail();
//$email=new emailer();
$grd = new grade();
$objmilestone = (object) new milestone();
// get data from POST and GET
// getArrayVal will return the value from the array if present, or false if not. This way the variable is never undeclared.
$action = getArrayVal($_GET, "action");
$id = getArrayVal($_GET, "id");
$mid = getArrayVal($_GET, "mid");
$mode = getArrayVal($_GET, "mode");
$thefiles = getArrayVal($_POST, "thefiles");
$numfiles = getArrayVal($_POST, "numfiles");
$userfile = getArrayVal($_POST, "userfiles");
$tags = getArrayVal($_POST, "tags");
$redir = getArrayVal($_GET, "redir");

$grade = getArrayVal($_POST, "grade");
$title = getArrayVal($_POST, "title");
$mid_post = getArrayVal($_POST, "mid");
$milestone = getArrayVal($_POST, "milestone");

$project = array('ID' => $id);
$template->assign("project", $project);
$template->assign("mode", $mode);
// define the active tab in the project navigation
$classes = array("overview" => "overview", "grds" => "grds_active", "tasks" => "tasks", "miles" => "miles", "files" => "files", "users" => "users", "tracker" => "tracking");
$template->assign("classes", $classes);

if ($action == "edit")
{

   if (!$userpermissions["projects"]["edit"])
    {
        $errtxt = $langfile["nopermission"];
        $noperm = $langfile["accessdenied"];
        $template->assign("errortext", "$errtxt<br>$noperm");
        $template->assign("mode", "error");
        $template->display("error.tpl");
        die();
    }

	$now=strftime("%c\n");
	$to=array();
	

    if ($grd->edit($id, $grade, $userid, $now))
    {
	try{	
		$subject="grade update";
		$text= "your grade has been updated.";
		$email = mysql_query("SELECT U.email, U.name FROM user U WHERE U.ID IN (SELECT PA.user FROM projekte_assigned PA WHERE PA.projekt=$id)");
		while($eml = mysql_fetch_array($email)){
			$e = $eml[0];
			$name = $eml[1];
			$notice->send_mail($e,$subject,$text,$name);
		}
	}
	catch(managegradeException $e){}
	header("Location: manageproject.php?action=showproject&id=$id&mode=edited");
      }

    
    else
    {
        $template->assign("editproject", 0);
    }
} 

?>
