<html>
	<head>
		<title>Weekdagen</title>
	</head>
	<body>
		<?php
			$weekdagen = array('maandag','dinsdag','woensdag','donderdag','vrijdag','zaterdag','zondag');
			
			foreach($weekdagen as $dag){
				echo $dag.'<br>';
			}
		?>
	</body>
</html>
