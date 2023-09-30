<?php

// Some DB functions 
if(!function_exists("dbconnect")) { // just in case.  Some people seemed to be having an issue and this was the easiest fix.

function dbconnect($dbhost, $dbuser, $dbpass, $dbname ) {
	$mysql_access = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if(!$mysql_access) {
		include(_BASEDIR."languages/en.php"); // Because we haven't got a language set yet.
		die(_FATALERROR." "._NOTCONNECTED);
	}
	return $mysql_access;
}


function dbquery($query) {
	global $debug, $headerSent, $dbconnect;
	if($debug && $headerSent) echo "<!-- $query -->\n";
	$result = mysqli_query($dbconnect, $query) or accessDenied( _FATALERROR.(isADMIN ? "Query: ".$query."<br />Error: (".mysqli_errno( $dbconnect ).") ".mysqli_error( $dbconnect ) : ""));
	return $result;
}

function dbnumrows($query) {
	global $debug, $dbconnect;
	if ($query === false && $debug) {
		echo "<!-- dbnumrows ".mysqli_error( $dbconnect )." -->\n";
	}
	$query = mysqli_num_rows($query);
	return $query;
}

function dbassoc($query) {
	global $debug, $dbconnect;
	if ($query === false && $debug) {
		echo "<!-- dbassoc ".mysqli_error( $dbconnect )." -->\n";
	}
	$query = mysqli_fetch_assoc($query);
	return $query;
}

function dbinsertid($tablename = 0) {
	global $dbconnect;
	return mysqli_insert_id( $dbconnect );
}

function dbrow($query) {
	global $debug, $dbconnect;
	if ($query === false && $debug) {
		if($error) echo "<!-- dbrow ".mysql_errori( $dbconnect )." -->\n";
	}
	$query = mysqli_fetch_array($query);
	return $query;
}

function dbclose() {
	global $dbconnect;
	mysqli_close( $dbconnect );
}

// Used to escape text being put into the database.
function escapestring($str) {
	global $dbconnect;
   return mysqli_real_escape_string($dbconnect, $str);
}

// End DB functions

}
?>