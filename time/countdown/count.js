function fetch1()

{

var inputTime_a = '1640995200000'; // Enter unix timestamp (ms) here

var desc_a = '2022 begins (UTC)'; // Your description

var currentTime_a = Date.now();
  

if (currentTime_a <= inputTime_a) {
	var sinceoruntil_a = 'until';
} else {
	sinceoruntil_a = 'since';
}
	
var milliseconds_a = inputTime_a - currentTime_a;
milliseconds_a = Math.abs(milliseconds_a)

var seconds_a = milliseconds_a / 1000;
var minutes_a = seconds_a / 60;
var hours_a = minutes_a / 60;
var days_a = hours_a / 24;
var years_a = days_a / 365;
	
var secondsResult1_a = parseFloat(seconds_a).toFixed(3)
var minutesResult1_a = parseFloat(minutes_a).toFixed(1)
var hoursResult1_a = parseFloat(hours_a).toFixed(1)
var daysResult1_a = parseFloat(days_a).toFixed(1)
var yearsResult1_a = parseFloat(years_a).toFixed(2)

var secondsResult2_a = '<p>Seconds: ' + parseFloat(secondsResult1_a).toLocaleString() + '<p/>';
var minutesResult2_a = '<p>Minutes: ' + parseFloat(minutesResult1_a).toLocaleString() + '<p/>';
var hoursResult2_a = '<p>Hours: ' + parseFloat(hoursResult1_a).toLocaleString() + '<p/>';
var daysResult2_a = '<p>Days: ' + parseFloat(daysResult1_a).toLocaleString() + '<p/>';
var yearsResult2_a = '<p>Years: ' + parseFloat(yearsResult1_a).toLocaleString() + '<p/>';
	
if (minutesResult1_a === '0.0' && hoursResult1_a === '0.0' && daysResult1_a === '0.0' && yearsResult1_a === '0.00') {
	minutesResult2_a = '';
	hoursResult2_a = '';
	daysResult2_a = '';
	yearsResult2_a = '';
} else if (hoursResult1_a === '0.0' && daysResult1_a === '0.0' && yearsResult1_a === '0.00') {
	hoursResult2_a = '';
	daysResult2_a = '';
	yearsResult2_a = '';
} else if (daysResult1_a === '0.0' && yearsResult1_a === '0.00') {
	daysResult2_a = '';
	yearsResult2_a = '';
} else if (years_a === '0.00') {
	yearsResult2_a = '';
}

var title_a = 'Time ' + sinceoruntil_a + ' ' + desc_a;
	
var times_a = yearsResult2_a + daysResult2_a + hoursResult2_a + minutesResult2_a + secondsResult2_a;
	
document.getElementById("title1").innerHTML = title_a;
document.getElementById("times1").innerHTML = times_a;

setTimeout(fetch1, 17);
	
}
