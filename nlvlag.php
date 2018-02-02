<?php
	$kleuren = array(
		array('rood','#AF1523'),
		array('wit','#FFFFFF'),
		array('blauw','#1B448C')
	);
?>
<html>
	<head>
		<title>NL Vlag</title>
		<style>
			
			hr {
				margin:0px;
				padding: 0px;
			}
			
			.vlag {
				margin:0px auto;
				width:200px;
				border:1px solid #778ca3;
				box-shadow: 7px 7px 3px #636e72;
			}
			
			<?php
				foreach($kleuren as $kleur){
					echo '
					.'.$kleur[0].' {
						background-color:'.$kleur[1].';
						height:30px;
					}
					';
				}
			?>
			
		</style>
	</head>
	<body>
		<div class="vlag">
			<?php
				foreach($kleuren as $kleur){
					echo '<hr class="'.$kleur[0].'">';
				}
			?>
		</div>
	</body>
</html>