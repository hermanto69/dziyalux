<?php

function check_username($username, $new = false)
{
	$sql = "SELECT username 
		FROM account
		WHERE username = '$username'";
	if (!$new)
		$sql .= " AND username != '$_SESSION[my_user]'";
	$Q = mysql_query($sql);
	if (mysql_num_rows($Q) > 0)
		return true;
	return false;
}
function check_email($email, $new = false)
{
	$sql = "SELECT email 
		FROM account
		WHERE email = '$email'";
	if (!$new)
		$sql .= " AND email != '$_SESSION[my_email]'";
	$Q = mysql_query($sql);
	if (mysql_num_rows($Q) > 0)
		return true;
	return false;
}