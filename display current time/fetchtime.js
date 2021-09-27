function fetchtime() 

{

const localDate = new Date();

var localYear = localDate.getFullYear();
var localMonth = localDate.getMonth() + 1;
var localDay = localDate.getDate();
var local24Hour = localDate.getHours();
var localMinute = localDate.getMinutes();
var localSecond = localDate.getSeconds();
	
var utcYear = localDate.getUTCFullYear();
var utcMonth = localDate.getUTCMonth() + 1;
var utcDay = localDate.getUTCDate();
var utc24Hour = localDate.getUTCHours();
var utcMinute = localDate.getUTCMinutes();
var utcSecond = localDate.getUTCSeconds();
	
if (local24Hour > 12) {
	var local12Hour = local24Hour - 12;
	var localAmOrPm = 'PM';
} else {
	var local12Hour = local24Hour;
	var localAmOrPm = 'AM';
}

if (utc24Hour > 12) {
	var utc12Hour = utc24Hour - 12;
	var utcAmOrPm = 'PM';
} else {
	var utc12Hour = utc24Hour;
	var utcAmOrPm = 'AM';
}

if (localMinute < 10) {
	var addZero1a = '0';
} else {
	var addZero1a = '';
}	
	
if (localSecond < 10) {
	var addZero2a = '0';
} else {
	var addZero2a = '';
}
	
if (utcMinute < 10) {
	var addZero1b = '0';
} else {
	var addZero1b = '';
}	
	
if (utcSecond < 10) {
	var addZero2b = '0';
} else {
	var addZero2b = '';
}

var localTime = localDate.toLocaleDateString() + ' - ' + localDate.toLocaleTimeString();
var localTime = localMonth + '/' + localDay + '/' + localYear + ' - ' + local12Hour + ':' + addZero1a + localMinute + ':' + addZero2a + localSecond + ' ' + localAmOrPm;
var utcTime = utcMonth + '/' + utcDay + '/' + utcYear + ' - ' + utc12Hour + ':' + addZero1b + utcMinute + ':' + addZero2b + utcSecond + ' ' + utcAmOrPm;
var unixTime = Date.now();

document.getElementById("localtime").innerHTML = 'Local Time: ' + localTime;
document.getElementById("utctime").innerHTML = 'Universal Time: ' + utcTime;
document.getElementById("unixtime").innerHTML = 'Unix Time (ms): ' + unixTime;
	
setTimeout(fetchtime, 17);
	
}

fetchtime();
