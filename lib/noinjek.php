<?php

function noinjek($data){
	$filter=mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
	return $filter;
}

?>