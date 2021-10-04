<?php

//-----------------------------------------------------------
$json1 = file_get_contents('https://tradeogre.com/api/v1/ticker/btc-wow');
$decoded1 = json_decode($json1);
$wowbtcprice = $decoded1->price;

$json2 = file_get_contents('https://tradeogre.com/api/v1/ticker/usdt-btc');
$decoded2 = json_decode($json2);
$btcusdprice = $decoded2->price;

$unroundedwowusdprice = ($wowbtcprice * $btcusdprice);
$wowusdprice = number_format($unroundedwowusdprice, 5);
//-----------------------------------------------------------
$json4 = file_get_contents('http://node.suchwow.xyz:34568/get_info');
$decoded4 = json_decode($json4);
$difficulty = $decoded4->difficulty;
//-----------------------------------------------------------
$command = <<<EOT
curl http://node.suchwow.xyz:34568/json_rpc -d '{"jsonrpc":"2.0","id":"0","method":"get_last_block_header"}' -H 'Content-Type: application/json';
EOT;
$json3 = shell_exec($command);
$decoded3 = json_decode($json3);
$unroundedreward = $decoded3->result->block_header->reward / 100000000000;
$reward = number_format($unroundedreward, 3);
$unroundedblockvalue = $wowusdprice * $reward;
$blockvalue = number_format($unroundedblockvalue, 2);
//-----------------------------------------------------------

?>

<center>
	
<hr>
	
<b>Wownero Mining Revenue Calculator</b><br><br>

<form autocomplete="off">
	Your Hashrate: <input type="text" id="hashrateinput" size="10"> H/s <br>

</form>

<b>Revenue Estimate:</b>
<table border="1" cellpadding="5" cellspacing="0">

<b>
<tr>
	<th>Hourly</th>
	<th>Daily</th>
	<th>Weekly</th>
	<th>Monthly</th>
	<th>Yearly</th>
</tr>
</b>
<tr>
	<td id="hourlyUSD"></td>
	<td id="dailyUSD"></td>
	<td id="weeklyUSD"></td>
	<td id="monthlyUSD"></td>
	<td id="yearlyUSD"></td>
</tr>
<tr>
	<td id="hourlyWOW"></td>
	<td id="dailyWOW"></td>
	<td id="weeklyWOW"></td>
	<td id="monthlyWOW"></td>
	<td id="yearlyWOW"></td>
</tr>
	
</table>

<p id="blockfindtime"></p>	
	
<hr>
	
<b>Wownero Stats</b><br><br>
Wownero Price: $<span id="wowprice"><?php echo $wowusdprice; ?></span><br><br>
Mining Difficulty: <span id="difficulty"><?php echo $difficulty; ?></span><br><br>
Block Reward: <span id="blockreward"><?php echo $reward; ?></span> WOW<br><br>
Block Value: $<span id="blockvalue"><?php echo $blockvalue; ?></span><br><br>
	
<hr>
	
</center>

<script src="wownero.js">
</script>
