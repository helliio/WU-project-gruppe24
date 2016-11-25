const hytteKartLenker = ["https://www.google.com/maps/place/Trondheim,+Norway/@63.4187191,10.3687229,12z/data=!3m1!4b1!4m5!3m4!1s0x466d319747037e53:0xbf7c8288f3cf3d4!8m2!3d63.4305149!4d10.3950528?hl=en",
						"https://www.google.com/maps/place/Norway/@61.140896,6.4106131,14z/data=!4m5!3m4!1s0x461268458f4de5bf:0xa1b03b9db864d02b!8m2!3d60.472024!4d8.468946?hl=en",
						"https://www.google.com/maps/place/Oslo,+Norway/@59.8937806,10.6450345,11z/data=!3m1!4b1!4m5!3m4!1s0x46416e61f267f039:0x7e92605fd3231e9a!8m2!3d59.9138688!4d10.7522454?hl=en",
						"https://www.google.com/maps/place/Trondheim,+Norway/@63.8388813,10.9976789,12z/data=!4m5!3m4!1s0x466d319747037e53:0xbf7c8288f3cf3d4!8m2!3d63.4305149!4d10.3950528?hl=en",
						"https://www.google.com/maps/place/Trondheim,+Norway/@63.902687,11.3488981,12z/data=!4m5!3m4!1s0x466d319747037e53:0xbf7c8288f3cf3d4!8m2!3d63.4305149!4d10.3950528?hl=en",
						"https://www.google.com/maps/place/Trondheim,+Norway/@63.9659093,11.7002434,12z/data=!4m5!3m4!1s0x466d319747037e53:0xbf7c8288f3cf3d4!8m2!3d63.4305149!4d10.3950528?hl=en"];
function visKart(hyttenr) {
	var antallKart = hytteKartLenker.length;
	var nyURL = hytteKartLenker[hyttenr - 1];
	window.open(nyURL);
}