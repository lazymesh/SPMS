<?php
include("init.php");
if (!isset($_SESSION["userid"])) {
    $template->assign("loginerror", 0);
    $template->display("login.tpl");
    die();
}
$grds = new grade();
$user = new user();
$project = new project();
$roles = new roles();
$oldprojects = $project->getMyProjects($userid, 0);
$myprojects = $project->getMyProjects($userid, 1);

$pnum = count($myprojects) + count($oldprojects);

$users = $user->getAllUsers(1000000);
$template->assign("users", $users);
$title = $langfile["myprojects"];

$template->assign("title", $title);
$template->assign("projectnum",$pnum);
$template->assign("oldprojects", $oldprojects);
$template->display("mygrades.tpl");

?>