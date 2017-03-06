<?php

require("dbh.php");

function getUsersData($id)
{	$array = array();
	$q = mysql_query("Select * FROM user WHERE id='$id'");
	while($r = mysql_fetch_assoc($q))
{
	$array['id'] = $r['id'];
	$array['first'] = $r['first'];
	$array['last'] = $r['last'];
	$array['uid'] = $r['uid'];
	$array['pwd'] = $r['pwd'];
	$array['cpwd'] = $r['cpwd'];
	$array['email'] = $r['email'];
	$array['cemail'] = $r['cemail'];
	}
	return $array;
}

function getId($uid){
	$q = mysql_query("Select id FROM user WHERE uid='$uid'");
	while($r = mysql_fetch_assoc($q))
	{
	return $r['uid'];
	}
	}
?>