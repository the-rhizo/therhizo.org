<?php

//-----------------------------------------------------------
$json1 = file_get_contents('https://tradeogre.com/api/v1/ticker/btc-xmr');
$decoded1 = json_decode($json1);
$xmrbtcprice = $decoded1->price;

$json2 = file_get_contents('https://tradeogre.com/api/v1/ticker/usdt-btc');
$decoded2 = json_decode($json2);
$btcusdprice = $decoded2->price;

$unroundedxmrusdprice = ($xmrbtcprice * $btcusdprice);
$xmrusdprice = number_format($unroundedxmrusdprice, 2);
//-----------------------------------------------------------
$json4 = file_get_contents('http://node.supportxmr.com:18081/get_info');
$decoded4 = json_decode($json4);
$difficulty = $decoded4->difficulty;
//-----------------------------------------------------------
$command = <<<EOT
curl http://node.supportxmr.com:18081/json_rpc -d '{"jsonrpc":"2.0","id":"0","method":"get_last_block_header"}' -H 'Content-Type: application/json';
EOT;
$json3 = shell_exec($command);
$decoded3 = json_decode($json3);
$unroundedreward = $decoded3->result->block_header->reward / 1000000000000;
$reward = number_format($unroundedreward, 5);
$unroundedblockvalue = $xmrusdprice * $reward;
$blockvalue = number_format($unroundedblockvalue, 2);
//-----------------------------------------------------------

?>

<center>
	
<hr>
	
<b>Monero Mining Revenue Calculator</b><br><br>

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
	<td id="hourlyXMR"></td>
	<td id="dailyXMR"></td>
	<td id="weeklyXMR"></td>
	<td id="monthlyXMR"></td>
	<td id="yearlyXMR"></td>
</tr>
	
</table>

<p id="blockfindtime"></p>	
	
<hr>
	
<b>Monero Stats</b><br><br>
Monero Price: $<span id="xmrprice"><?php echo $xmrusdprice; ?></span><br><br>
Mining Difficulty: <span id="difficulty"><?php echo $difficulty; ?></span><br><br>
Block Reward: <span id="blockreward"><?php echo $reward; ?></span> XMR<br><br>
Block Value: $<span id="blockvalue"><?php echo $blockvalue; ?></span><br><br>
	
<hr>
	
</center>

<script src="monero.js">
</script>
