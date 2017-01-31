<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<title>Hold &rsquo;Em Demo</title>
		<link rel="stylesheet" type="text/css" href="sprite.css" />
		<script src="holdem.js" type="text/javascript"></script>
	</head>
<?php

$deck = array("SA", "S2", "S3", "S4", "S5", "S6", "S7", "S8", "S9", "S0", "SJ", "SQ", "SK","CA", "C2", "C3", "C4", "C5", "C6", "C7", "C8", "C9", "C0", "CJ", "CQ", "CK","HA", "H2", "H3", "H4", "H5", "H6", "H7", "H8", "H9", "H0", "HJ", "HQ", "HK","DA", "D2", "D3", "D4", "D5", "D6", "D7", "D8", "D9", "D0", "DJ", "DQ", "DK");

// deal all 9 cards needed to play

$deal = array_rand($deck, 9);

?>
	<body>
	
	<div id="mainFrame">
	
		<h1>Hold &rsquo;Em Demo</h1>
	
		<h3>Opponent</h3>
		<ul class="hand">
			<li class="BR <?=$deck[$deal[0]];?>" id="o1"></li>
			<li class="BR <?=$deck[$deal[1]];?>" id="o2"></li>
		</ul>
		<br /><br />

		<h3>Hole Cards</h3>
		<ul class="hand">
		<?php  
			print("<li class=\"" . $deck[$deal[2]]. "\"></li>\n"); 
			print("<li class=\"" . $deck[$deal[3]]. "\"></li>\n");  
		?>
		</ul>
		<br /><br />
		
		<h3>Board</h3>
		<ul class="hand">
			<li class="BR <?=$deck[$deal[4]];?>" id="c1"></li>
			<li class="BR <?=$deck[$deal[5]];?>" id="c2"></li>
			<li class="BR <?=$deck[$deal[6]];?>" id="c3"></li>
			<li class="BR <?=$deck[$deal[7]];?>" id="c4"></li>
			<li class="BR <?=$deck[$deal[8]];?>" id="c5"></li>
		</ul>
		<br /><br /><br />
		<input type="button" value="Flop" name="action" id="action" />
		<br /><br /><br />		
		
		
				
	</div>
	</body>
</html>