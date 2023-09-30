<?php
$blocks["categories"]["status"] = 2;
$blocks["categories"]["template"] = "{image} {link} [{count}]";
$blocks["categories"]["columns"] = 0;
$blocks["featured"]["status"] =  '0';
$blocks["info"]["status"] = 2;
$blocks["menu"]["status"] = '1';
$blocks["menu"]["content"] = array (
	0 => 'adminarea',
	1 => 'logout',
	2 => 'login',
	3 => 'search',
	4 => 'tens',
	5 => 'browse',
	6 => 'members',
	7 => 'home');
$blocks["menu"]["style"] = 0;
$blocks["footermenu"] = array(
	"title" => "", 
	"status" => "1", 
	"file" => "menu/menu.php", 
	"style" => 0, 
	"content" => array (
		0 => 'help', 
		1 => 'rules', 
		2 => 'contactus'
	)
);
$blocks["login"]["status"] = 1;
$blocks['login']['acctlink'] = 0;
unset($blocks["login"]["template"]);
$blocks["login"]["form"] = 1; // Long form with register and lost password options
$blocks["random"]["status"] = 0;
$blocks["recent"]["status"] = 2;
$blocks["recent"]["tpl"] = 1;
$blocks["skinchange"]["status"] = '1';
$blocks["news"]["status"] = 2;
$blocks['news']['num'] = 3;
$new = "<span class='new'>New!</span>";
$displayprofile = 0;
$linkstyle = 0;
$displayindex = 1;
?>