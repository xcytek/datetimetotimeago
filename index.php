<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<script type="text/javascript" src="moment.js"></script>	
</head>
<body>
	<div style="width:100%; text-align:center; margin-top: 150px;">		
		<?php
			require 'convert.php';
			$dates = array(
				date('Y-m-d H:i:s'),
				'2013-09-18 17:36:00',
				'2013-08-10 03:02:00',
				'2012-03-21 09:00:00',
				'2010-02-02 22:30:00',
				'2000-09-28 12:00:00'
				);
			foreach ($dates as $date){
				print convertDateTimetoTimeAgo($date).'<br />';
			}			
		?>
	</div>
</body>

</html>