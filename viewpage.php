<?php
// ----------------------------------------------------------------------
// Copyright (c) 2007 by Tammy Keefer
// Based on eFiction 1.1
// Copyright (C) 2003 by Rebecca Smallwood.
// http://efiction.sourceforge.net/
// ----------------------------------------------------------------------
// LICENSE
//
// This program is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License (GPL)
// as published by the Free Software Foundation; either version 2
// of the License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// To read the license please visit http://www.gnu.org/copyleft/gpl.html
// ----------------------------------------------------------------------

$current = $_GET['page'];

include ("header.php");

//make a new TemplatePower object

if(file_exists("$skindir/default.tpl")) $tpl = new TemplatePower( "$skindir/default.tpl" );
else $tpl = new TemplatePower("default_tpls/default.tpl");
//let TemplatePower do its thing, parsing etc.

include("includes/pagesetup.php");

$page = dbquery("SELECT message_title, message_text FROM ".TABLEPREFIX."fanfiction_messages WHERE ".($current ? "message_name = '".escapestring($current)."'" : "message_id = '".(isNumber($_GET['id']) ? $_GET[id] : "0"))." LIMIT 1");
if(dbnumrows($page)) list($title, $text) = dbrow($page);
else $text = write_message(_ERROR);
if(strpos($text, "?>") === false) $tpl->assign("output", "<div id='pagetitle'>$title</div>\n\n$text");
else {
	eval("?>".$text."<?php ");
	$tpl->assign("output", "<div id='pagetitle'>$title</div>\n\n$text");
}
$tpl->printToScreen();
dbclose( );
?>