var difficulty = document.getElementById('difficulty').innerText;
var price = document.getElementById('wowprice').innerText;
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

var unrounded_dailyWOWrevenue = blockreward / blockfindtimedays;
var unrounded_hourlyWOWrevenue = unrounded_dailyWOWrevenue / 24;
var unrounded_weeklyWOWrevenue = unrounded_dailyWOWrevenue * 7;
var unrounded_monthlyWOWrevenue = unrounded_dailyWOWrevenue * 30;
var unrounded_yearlyWOWrevenue = unrounded_dailyWOWrevenue * 365;

var hourlyUSDrevenue = parseFloat(unrounded_hourlyUSDrevenue).toFixed(2)
var dailyUSDrevenue = parseFloat(unrounded_dailyUSDrevenue).toFixed(2)
var weeklyUSDrevenue = parseFloat(unrounded_weeklyUSDrevenue).toFixed(2)
var monthlyUSDrevenue = parseFloat(unrounded_monthlyUSDrevenue).toFixed(2)
var yearlyUSDrevenue = parseFloat(unrounded_yearlyUSDrevenue).toFixed(2)

var hourlyWOWrevenue = parseFloat(unrounded_hourlyWOWrevenue).toFixed(2)
var dailyWOWrevenue = parseFloat(unrounded_dailyWOWrevenue).toFixed(2)
var weeklyWOWrevenue = parseFloat(unrounded_weeklyWOWrevenue).toFixed(2)
var monthlyWOWrevenue = parseFloat(unrounded_monthlyWOWrevenue).toFixed(2)
var yearlyWOWrevenue = parseFloat(unrounded_yearlyWOWrevenue).toFixed(2)	

document.getElementById("hourlyUSD").innerHTML = "$" + hourlyUSDrevenue;
document.getElementById("dailyUSD").innerHTML = "$" + dailyUSDrevenue;
document.getElementById("weeklyUSD").innerHTML = "$" + weeklyUSDrevenue;
document.getElementById("monthlyUSD").innerHTML = "$" + monthlyUSDrevenue;
document.getElementById("yearlyUSD").innerHTML = "$" + yearlyUSDrevenue;

document.getElementById("hourlyWOW").innerHTML = hourlyWOWrevenue + " WOW";
document.getElementById("dailyWOW").innerHTML = dailyWOWrevenue + " WOW";
document.getElementById("weeklyWOW").innerHTML = weeklyWOWrevenue + " WOW";
document.getElementById("monthlyWOW").innerHTML = monthlyWOWrevenue + " WOW";
document.getElementById("yearlyWOW").innerHTML = yearlyWOWrevenue + " WOW";

document.getElementById("blockfindtime").innerHTML = "Average time to find a block (" + blockreward + " WOW): " + parseFloat(blockfindtimedays).toFixed(2) + " days";
	
})
