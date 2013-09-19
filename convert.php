<?php

function convertDateTimetoTimeAgo($datetime){		

	$date_time = str_replace("-", "", $datetime);
	$date_time = str_replace(":", "", $date_time);

	//Fecha estilo TimeAgo
	return "<script>document.write(moment('$date_time', 'YYYYMMDDHHmm').fromNow());</script>";		
}
