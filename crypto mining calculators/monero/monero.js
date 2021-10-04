var difficulty = document.getElementById('difficulty').innerText;
var price = document.getElementById('xmrprice').innerText;
var blockreward = document.getElementById('blockreward').innerText;
var blockrewardvalue = document.getElementById('blockvalue').innerText;

var hashrate = document.getElementById('hashrateinput');

hashrate.addEventListener('keyup',function() {

var blockfindtimeseconds = difficulty / hashrate.value;
var blockfindtimedays = blockfindtimeseconds / 86400;

var unrounded_dailyUSDrevenue = blockrewardvalue / blockfindtimedays;
var unrounded_hourlyUSDrevenue = unrounded_dailyUSDrevenue / 24;
var unrounded_weeklyUSDrevenue = unrounded_dailyUSDrevenue * 7;
var unrounded_monthlyUSDrevenue = unrounded_dailyUSDrevenue * 30;
var unrounded_yearlyUSDrevenue = unrounded_dailyUSDrevenue * 365;

var unrounded_dailyXMRrevenue = blockreward / blockfindtimedays;
var unrounded_hourlyXMRrevenue = unrounded_dailyXMRrevenue / 24;
var unrounded_weeklyXMRrevenue = unrounded_dailyXMRrevenue * 7;
var unrounded_monthlyXMRrevenue = unrounded_dailyXMRrevenue * 30;
var unrounded_yearlyXMRrevenue = unrounded_dailyXMRrevenue * 365;

var hourlyUSDrevenue = parseFloat(unrounded_hourlyUSDrevenue).toFixed(2)
var dailyUSDrevenue = parseFloat(unrounded_dailyUSDrevenue).toFixed(2)
var weeklyUSDrevenue = parseFloat(unrounded_weeklyUSDrevenue).toFixed(2)
var monthlyUSDrevenue = parseFloat(unrounded_monthlyUSDrevenue).toFixed(2)
var yearlyUSDrevenue = parseFloat(unrounded_yearlyUSDrevenue).toFixed(2)

var hourlyXMRrevenue = parseFloat(unrounded_hourlyXMRrevenue).toFixed(2)
var dailyXMRrevenue = parseFloat(unrounded_dailyXMRrevenue).toFixed(2)
var weeklyXMRrevenue = parseFloat(unrounded_weeklyXMRrevenue).toFixed(2)
var monthlyXMRrevenue = parseFloat(unrounded_monthlyXMRrevenue).toFixed(2)
var yearlyXMRrevenue = parseFloat(unrounded_yearlyXMRrevenue).toFixed(2)	

document.getElementById("hourlyUSD").innerHTML = "$" + hourlyUSDrevenue;
document.getElementById("dailyUSD").innerHTML = "$" + dailyUSDrevenue;
document.getElementById("weeklyUSD").innerHTML = "$" + weeklyUSDrevenue;
document.getElementById("monthlyUSD").innerHTML = "$" + monthlyUSDrevenue;
document.getElementById("yearlyUSD").innerHTML = "$" + yearlyUSDrevenue;

document.getElementById("hourlyXMR").innerHTML = hourlyXMRrevenue + " XMR";
document.getElementById("dailyXMR").innerHTML = dailyXMRrevenue + " XMR";
document.getElementById("weeklyXMR").innerHTML = weeklyXMRrevenue + " XMR";
document.getElementById("monthlyXMR").innerHTML = monthlyXMRrevenue + " XMR";
document.getElementById("yearlyXMR").innerHTML = yearlyXMRrevenue + " XMR";

document.getElementById("blockfindtime").innerHTML = "Average time to find a block (" + blockreward + " XMR): " + parseFloat(blockfindtimedays).toFixed(2) + " days";
	
})
