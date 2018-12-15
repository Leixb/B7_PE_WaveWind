<!DOCTYPE html>
<html class=" no-flash svg no-hiddenscroll no-touchevents no-hairline no-hires indexeddb indexeddb-deletedatabase" style=""><head>
<title>Windguru</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Robots" content="index,follow">

<link rel="manifest" href="https://www.windguru.cz/manifest.json">

<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="application-name" content="Windguru">
<meta name="apple-mobile-web-app-title" content="Windguru">
<meta name="msapplication-navbutton-color" content="#333333">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="Windguru">
<meta name="msapplication-starturl" content="/">

<meta name="theme-color" content="#333333">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="icon" type="image/png" sizes="192x192" href="https://www.windguru.cz/img/windguru-icon-192x192.png">
<link rel="apple-touch-icon" type="image/png" sizes="192x192" href="https://www.windguru.cz/img/windguru-icon-192x192.png">


<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1"><meta name="description" content="Special wind and weather forecasts for windsurfing, kitesurfing and other wind related sports. Forecasts for any location on planet Earth!">
<meta name="keywords" content="wind forecast, windsurfing, kitesurfing, kiteboarding, snowkiting, sailing, wave, weather, surf, yachting, kite, wind speed">
<meta name="google-signin-client_id" content="902500120979-b876d301np6vmv1hlcu9kn1rvgg8097o.apps.googleusercontent.com">
<link rel="apple-touch-icon-precomposed" href="https://www.windguru.net/img/apple-touch-icon-precomposed.png">
<link rel="icon" href="https://www.windguru.net/img/windguru-icon-196x196.png">
<link href="Nazare_16_18_files/css" rel="stylesheet" type="text/css">


<script async="" src="Nazare_16_18_files/analytics.js"></script><script src="Nazare_16_18_files/firebase-app.js"></script>
<script src="Nazare_16_18_files/firebase-messaging.js"></script>

 
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyDwc6isuJ-h__wL8NbBgRvIYuJ_IoG1ubM",
    authDomain: "windguru-1091.firebaseapp.com",
    databaseURL: "https://windguru-1091.firebaseio.com",
    projectId: "windguru-1091",
    storageBucket: "windguru-1091.appspot.com",
    messagingSenderId: "902500120979"
  };
  firebase.initializeApp(config);
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-885239-4', 'auto');
  ga('set', 'anonymizeIp', true);
  
ga(function(tracker) {
  window['WGGA_cid'] = tracker.get('clientId');
  window['WGGA_tid'] = tracker.get('trackingId');
});  
  //ga('send', 'pageview');

</script>
<script type="text/javascript">
var WgLang = {"legend":{"SMER":"Wind direction","TMP":"Temperature","WINDSPD":"Wind speed","MWINDSPD":"Modif. wind","APCP":"Rain (mm\/3h)","TCDC":"Cloud cover (%)","HTSGW":"Wave","WAVESMER":"Wave direction","RATING":"Windguru rating","PERPW":"Wave period (s)","APCP1":"Rain (mm\/1h)","GUST":"Wind gusts","SLP":"<span class=\"helpinfhpa\">*Pressure (hPa)<\/span>","RH":"Humidity (%)","FLHGT":"<span class=\"helpinffl\">*0\u00b0 isotherm (m)<\/span>","CDC":"Cloud cover (%)<br\/>high \/ mid \/ low","TMPE":"<span class=\"helpinftmp\">*Temperature <\/span>","WCHILL":"Wind chill","APCPs":"<span class=\"helpinfsnow\">*Precip. (mm\/3h)<\/span>","APCP1s":"<span class=\"helpinfsnow\">*Precip. (mm\/1h)<\/span>","WVHGT":"Wind wave","WVPER":"Wind wave per.(s)","WVDIR":"Wind wave dir.","SWELL1":"Swell","SWPER1":"Swell period (s)","SWDIR1":"Swell direction","SWELL2":"2.Swell","SWPER2":"2.Swell period (s)","SWDIR2":"2.Swell dir.","DIRPW":"Wave direction","WAVEDIR":"Wave direction"},"tooltip":{"TMPE":"Temperature at 2 meters above surface adjusted to real altitude of the spot. More info in Help\/FAQ section.","SLP":"Sea level pressure in hPa, values above 1000 hPa are printed <b>as x-1000<\/b>","FLHGT":"Freezing level height in meters","sst":"Sea surface temperature based on satellite data. Valid for oceans and large lakes, more info in help\/FAQ","APCP1s":"Precipitation in milimeters. Bold blue numbers indicate snowfall.","APCPs":"Precipitation in milimeters. Bold blue numbers indicate snowfall."},"dir":["N","NNE","NE","ENE","E","ESE","SE","SSE","S","SSW","SW","WSW","W","WNW","NW","NNW"],"weekday":["Su","Mo","Tu","We","Th","Fr","Sa"],"txt":{"archive":"Archive","tides":"Tides","detail":"Detail \/ Map","link":"Link","timezone":"Timezone","help":"Help","options":"Options","choose_m":"Choose wind modification","loading":"Loading forecast...","delayed":"12 hours delayed forecast. Latest WRF forecasts are only available to Windguru PRO subscribers. <a href='help_index.php?sec=pro'>Click for more info.<\/a>","delayed_short":"12 hours delayed forecast. Latest WRF forecasts are only available to Windguru PRO subscribers.","custom_onlypro":"This forecast is only available to Windguru PRO subscribers","lastupdated":"Last updated","nextexpected":"Next update expected","timeleft":"Time left"},"tab":{"forecast":"Forecast","graph":"<img src=\"\/images\/gricon.png\" width=\"15\" height=\"10\"\/>","2d":"2D","2d_t":"Temperature (0 ... 5000 m)","2d_w":"Wind (0 ... 5000 m)","2d_t_l":"Temperature (alt ... +2000 m)","2d_w_l":"Wind (alt ... +2000 m)","map":"Map","webcams":"Webcams","reports":"Wind reports","accommodation":"Accommodation","schools":"Schools\/Rentals","shops":"Shops","other":"Other...","directory":"Links","fcst_graph":"<img src=\"\/img\/gricon.png\"\/>","more":"<span class=\"butt-txt\">More<\/span>","statistic":"Statistics","archive":"Archive","alert":"Add alert","share_widget":"Add to your website"},"units":{"kmh":"km\/h","mph":"mph","ms":"m\/s","msd":"m\/s","knots":"knots","bft":"Bft","c":"&deg;C","f":"&deg;F","m":"m","ft":"ft"},"maps":{"windspd":"Wind","t2m":"Temperature","press":"Pressure","tcdc_apcp3":"Rain \/ clouds","tcdc_apcp1":"Rain \/ clouds"},"mapsi":{"windspd":"wind","t2m":"temperature","press":"pressure","tcdc_apcp3":"precipitation","tcdc_apcp1":"precipitation"},"gmap":{"link_f":"Forecast","link_a":"Archive","link_d":"Detail","link_add":"Add to favourites","link_s":"Select"},"spotmenu":{"sel_zeme":"SELECT COUNTRY","sel_spot":"SELECT SPOT","num_spot":"spots","num_reg":"regions","num_zeme":"countries","sel_all":"ALL","qs_hint":"Type spot name (min. 3 characters)"},"langdir":{"dir":"int"}};

</script>
<script type="text/javascript" src="Nazare_16_18_files/bs.js"></script>
<script type="text/javascript" src="Nazare_16_18_files/wg.js"></script>
<script type="text/javascript" src="Nazare_16_18_files/WG.js"></script>
<link rel="stylesheet" href="Nazare_16_18_files/index.css" type="text/css">
<script type="text/javascript">
WG.cdn = 'https://www.windguru.net';
WG.forecast_api = 'https://www.windguru.net/int/iapi.php';
WG.consent_new = 1;
WG.forecast_map_default = false;
WG.user = new WG.User();

WG.camblacklist = [1427387412]
WG._user_properties = {"id_user":0,"email":null,"username":"","wj":"knots","tj":"c","waj":"m","odh":3,"doh":22,"wrap":40,"fhours":240,"limit1":10.63,"limit2":15.57,"limit3":19.41,"tlimit":10,"vt":"forecast","directory":0,"wrapnew":null,"cellsize":null,"default_set":0,"default_id_spot":75856,"consent_timestamp":0,"allow_personal_ads":false,"pro":false};
WG.ads.on = true;
WG.ads.ajax = true;

</script>
<script async="" src="Nazare_16_18_files/adsbygoogle.js"></script>
<script src="Nazare_16_18_files/mapbox-gl.js"></script>
<script src="Nazare_16_18_files/leaflet-mapbox-gl.js"></script>
<link rel="stylesheet" href="Nazare_16_18_files/mapbox-gl.css">

<script type="text/javascript" src="Nazare_16_18_files/main.js"></script>
<script type="text/javascript">
    
$(function(){
    WG.loadAjaxContent('/archive.php?id_spot=75856','subsection content menusize-1'  );
});  
</script> 
<style>@keyframes jBox-animation-zoomOutOpen-open {0% {transform:scale(1.1);}100% {transform:scale(1);}}.jBox-animation-zoomOutOpen-open {animation-duration: 180ms;animation-name: jBox-animation-zoomOutOpen-open;}@keyframes jBox-animation-zoomOutClose-close {0% {transform:scale(1);}100% {transform:scale(1.1);}}.jBox-animation-zoomOutClose-close {animation-duration: 180ms;animation-name: jBox-animation-zoomOutClose-close;}</style><style>@keyframes jBox-animation-zoomOutOpen-open {0% {transform:scale(1.1);}100% {transform:scale(1);}}.jBox-animation-zoomOutOpen-open {animation-duration: 180ms;animation-name: jBox-animation-zoomOutOpen-open;}@keyframes jBox-animation-zoomOutClose-close {0% {transform:scale(1);}100% {transform:scale(1.1);}}.jBox-animation-zoomOutClose-close {animation-duration: 180ms;animation-name: jBox-animation-zoomOutClose-close;}</style><style>@keyframes jBox-animation-zoomOutOpen-open {0% {transform:scale(1.1);}100% {transform:scale(1);}}.jBox-animation-zoomOutOpen-open {animation-duration: 180ms;animation-name: jBox-animation-zoomOutOpen-open;}@keyframes jBox-animation-zoomOutClose-close {0% {transform:scale(1);}100% {transform:scale(1.1);}}.jBox-animation-zoomOutClose-close {animation-duration: 180ms;animation-name: jBox-animation-zoomOutClose-close;}</style></head>
<body class="content-bottom-menu pc"><div id="svgicons"><svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
<symbol id="ico_accommodation" viewBox="0 0 16 16">
<g>
	<g>
		<path d="M13.196,4.76V1.221h-2.003v2.01L8.271,1L0.543,6.898L1.758,8.49L2.59,7.855v7.312h11.362V7.855    l0.832,0.635L16,6.9L13.196,4.76z M12.84,14.055h-2.565V9.826H6.269v4.229H3.703V7.148L8.271,3.66l4.568,3.488V14.055z"></path>
	</g>
</g>
</symbol>
<symbol id="ico_account" viewBox="0 0 16 16">
<g>
	<g>
		<path d="M9.821,9.468L9.807,7.978c0,0,0.582-0.447,0.763-1.85c0.364,0.106,0.746-0.543,0.767-0.885    c0.021-0.329-0.05-1.242-0.494-1.15c0.091-0.688,0.156-1.306,0.125-1.633C10.852,1.263,9.645,0,7.859,0S4.867,1.263,4.752,2.46    C4.72,2.787,4.785,3.405,4.876,4.093c-0.444-0.092-0.515,0.821-0.494,1.15c0.021,0.342,0.402,0.991,0.767,0.885    c0.181,1.402,0.764,1.85,0.764,1.85L5.896,9.468c0,0-4.896,1.874-4.896,3.188c0,1.585,0,3.302,0,3.302h14c0,0,0-1.717,0-3.302    C15,11.342,9.821,9.468,9.821,9.468z"></path>
	</g>
</g>
</symbol>
<symbol id="ico_add" viewBox="0 0 16 16">
<g>
	<g>
		<g>
			<rect x="1" y="6" width="14" height="4"></rect>
		</g>
		<g>
			<rect x="6" y="1" width="4" height="14"></rect>
		</g>
	</g>
</g>
</symbol>
<symbol id="ico_archive" viewBox="0 0 16 16">
<g>
	<g>
		<g>
			<rect y="1" width="16" height="3"></rect>
		</g>
		<g>
			<path d="M1,5v10h14V5H1z M11,9H5V7h6V9z"></path>
		</g>
	</g>
</g>
</symbol>
<symbol id="ico_bar_club" viewBox="0 0 16 16">
<g>
	<path d="M8.707,9.032l3.688-3.688l2.637-2.637C15.421,2.318,15.289,2,14.739,2H1.261   c-0.55,0-0.682,0.318-0.293,0.707l2.637,2.637l3.688,3.688L7.5,9.239V15H3v1h10v-1H8.5V9.239L8.707,9.032z M3.196,3.216h9.607   l-2.128,2.128H5.324L3.196,3.216z"></path>
</g>
</symbol>
<symbol id="ico_best_of_spot" viewBox="0 0 16 16">
<g>
	<g>
		<polygon points="7.756,0 10,5.849 16,5.849 10.859,9.317 13,15 7.756,11.609 2.963,15 4.654,9.317 0,5.849     6,5.849   "></polygon>
	</g>
</g>
</symbol>
<symbol id="ico_calendar" viewBox="0 0 16 16">
<g>
	<g>
		<g>
			<path d="M14,2V0h-3v2H6V0H3v2H1v14h15V2H14z M12,1h1v2h-1V1z M4,1h1v2H4V1z M15,15H2V5h13V15z"></path>
		</g>
		<g>
			<g>
				<path d="M4.352,12.17h1.377V8.237L4.54,9.146L4,8.426l2.053-1.566h0.791v5.311h1.35v0.99H4.352V12.17z"></path>
			</g>
			<g>
				<path d="M10.489,12.296c0.198,0,0.38-0.025,0.544-0.076c0.166-0.051,0.307-0.123,0.424-0.216      c0.117-0.092,0.208-0.199,0.274-0.321c0.065-0.123,0.099-0.256,0.099-0.399c0-0.18-0.037-0.329-0.112-0.452      s-0.179-0.22-0.311-0.291c-0.132-0.072-0.291-0.122-0.478-0.152c-0.186-0.03-0.387-0.045-0.603-0.045H9.823V9.697l1.513-1.848      H9.059v-0.99h3.672v0.819l-1.584,1.809h0.207c0.209,0,0.414,0.036,0.611,0.108c0.198,0.072,0.373,0.181,0.526,0.324      s0.276,0.323,0.369,0.54c0.093,0.216,0.14,0.465,0.14,0.747c0,0.342-0.07,0.642-0.211,0.899      c-0.142,0.258-0.328,0.476-0.559,0.653c-0.23,0.176-0.496,0.309-0.797,0.396c-0.3,0.087-0.608,0.131-0.927,0.131      c-0.27,0-0.54-0.024-0.81-0.072c-0.27-0.049-0.531-0.123-0.783-0.226l0.314-0.972c0.055,0.03,0.128,0.061,0.221,0.09      c0.094,0.03,0.199,0.061,0.315,0.091c0.116,0.029,0.237,0.053,0.36,0.071C10.248,12.286,10.369,12.296,10.489,12.296z"></path>
			</g>
		</g>
	</g>
</g>
</symbol>
<symbol id="ico_cancel" viewBox="0 0 16 16">
<g>
	<g>
		<polygon points="13.707,3.707 12.293,2.293 8,6.586 3.707,2.293 2.293,3.707 6.586,8 2.293,12.293 3.707,13.707     8,9.414 12.293,13.707 13.707,12.293 9.414,8   "></polygon>
	</g>
</g>
</symbol>
<symbol id="ico_car_rental" viewBox="0 0 16 16">
<g>
	<g>
		<path d="M13.457,8l-2.17-5.424H4.713L2.543,8H1v4h1v3h3v-3h6v3h3v-3h1V8H13.457z M13,10c0,0.553-0.447,1-1,1    s-1-0.447-1-1s0.447-1,1-1S13,9.447,13,10z M4,11c-0.553,0-1-0.447-1-1s0.447-1,1-1s1,0.447,1,1S4.553,11,4,11z M10,11H6v-1h4V11z     M3.457,8l1.83-4.576H7v0.967h2V3.424h1.713L12.543,8H3.457z"></path>
	</g>
</g>
</symbol>
<symbol id="ico_center" viewBox="0 0 16 16">
<g><path d="m8,2c3.3,0,6,2.7,6,6s-2.7,6-6,6-6-2.7-6-6,2.7-6,6-6m0-2c-4.4,1.9E-7-8,3.6-8,8s3.6,8,8,8,8-3.6,8-8-3.6-8-8-8z"></path><circle d="m 116.4,141.7 c 0,1.65685 -1.34314,3 -3,3 -1.65685,0 -3,-1.34315 -3,-3 0,-1.65686 1.34315,-3 3,-3 1.65686,0 3,1.34314 3,3 z" transform="translate(-105.4,-133.7)" cy="141.7" cx="113.4" r="3"></circle></g>
</symbol>
<symbol id="ico_close" viewBox="0 0 16 16">
<g>
	<g>
		<polygon points="13.707,3.707 12.293,2.293 8,6.586 3.707,2.293 2.293,3.707 6.586,8 2.293,12.293 3.707,13.707     8,9.414 12.293,13.707 13.707,12.293 9.414,8   "></polygon>
	</g>
</g>
</symbol>
<symbol id="ico_cloudiness" viewBox="0 0 16 16">
<g>
	<g>
		<path d="M12.773,8.546c-0.03,0-0.058,0.008-0.087,0.009c0.25-0.481,0.404-1.021,0.404-1.601    c0-1.932-1.566-3.5-3.5-3.5c-1.495,0-2.762,0.942-3.263,2.261C5.982,5.496,5.576,5.364,5.137,5.364    c-1.23,0-2.228,0.996-2.228,2.227c0,0.347,0.086,0.672,0.228,0.964C1.949,8.604,1,9.573,1,10.772C1,12.003,1.997,13,3.228,13    c0.108,0,9.437,0,9.546,0C14.003,13,15,12.003,15,10.772S14.003,8.546,12.773,8.546z"></path>
	</g>
</g>
</symbol>
<symbol id="ico_delete" viewBox="0 0 16 16">
<g>
	<g>
		<polygon points="11,5 11,13.98 10,13.98 10,5 8,5 8,13.98 7,13.98 7,5 5,5 5,13.98 4,13.98 4,5 2,5 2,15.247     2,15.98 13,15.98 13,5   "></polygon>
	</g>
	<g>
		<path d="M10,2.02v-2H5.005L5,2.02H1V4h13V2.02H10z M6,2.02v-1h3v1H6z"></path>
	</g>
</g>
</symbol>
<symbol id="ico_down" viewBox="0 0 16 16">
<g>
	<g transform="translate(0, 16) rotate(270)">
		<polygon points="12,1 4,8 12,15   "></polygon>
	</g>
</g>
</symbol>
<symbol id="ico_edit" viewBox="0 0 16 16">
<g>
	<g>
		<g>
			<polygon points="0.697,10.082 0.348,12.535 0,14.986 2.453,14.641 4.905,14.289 2.803,12.186    "></polygon>
		</g>
		<g>
			
				<rect x="2.739" y="5.008" transform="matrix(0.707 -0.7072 0.7072 0.707 -3.5994 7.277)" width="8.487" height="5.948"></rect>
		</g>
		<g>
			<path d="M14.785,3.102l-2.804-2.805c-0.386-0.385-1.004-0.396-1.372-0.028L10.54,0.371l-0.017-0.019L9.177,1.699     l4.206,4.207l1.347-1.346l-0.019-0.02l0.103-0.066C15.184,4.105,15.17,3.486,14.785,3.102z"></path>
		</g>
	</g>
</g>
</symbol>
<symbol id="ico_email" viewBox="0 0 16 16">
<g>
	<g>
		<g>
			<polygon points="15.223,13 9.695,8.354 8,9.625 6.305,8.354 0.777,13    "></polygon>
		</g>
		<g>
			<polygon points="0.834,3 8,8.375 15.166,3    "></polygon>
		</g>
		<g>
			<polygon points="16,12.347 16,3.625 10.516,7.738    "></polygon>
		</g>
		<g>
			<polygon points="0,12.347 5.484,7.738 0,3.625    "></polygon>
		</g>
	</g>
</g>
</symbol>
<symbol id="ico_facebook" viewBox="0 0 16 16">
<g>
	<g>
		<g>
			<path d="M6.133,16h3.201c0,0,0-4.416,0-8h2.374L12,4.8H9.457V3.52c0-0.624,0.415-0.768,0.707-0.768     s1.795,0,1.795,0V0.011L9.487,0C6.743,0,6.12,2.045,6.12,3.354V4.8H4.533V8h1.6C6.133,11.626,6.133,16,6.133,16z"></path>
		</g>
	</g>
</g>
</symbol>
<symbol id="ico_favourite" viewBox="0 0 16 16">
<g>
	<g>
		<polygon points="7.756,0 10,5.849 16,5.849 10.859,9.317 13,15 7.756,11.609 2.963,15 4.654,9.317 0,5.849     6,5.849   "></polygon>
	</g>
</g>
</symbol>
<symbol id="ico_forecast_map" viewBox="0 0 16 16">
<g>
	<polygon points="13.878,3.743 13.503,2.815 2,7.803 2,14 3,14 3,8.478 5,7.607 5,12 6,12 6,7.172  "></polygon>
</g>
</symbol>
<symbol id="ico_forecast_table" viewBox="0 0 16 16">
<g>
	<g>
		<path d="M0,0v16h16v-5v-1V6V5V0H0z M10,1v4H6V1H10z M10,6v4H6V6H10z M1,1h4v4H1V1z M1,6h4v4H1V6z M1,15v-4h4v4H1z     M6,15v-4h4v4H6z M15,15h-4v-4h4V15z M15,10h-4V6h4V10z M11,5V1h4v4H11z"></path>
	</g>
</g>
</symbol>
<symbol id="ico_get_listed" viewBox="0 0 16 16">
<g transform="translate(-105.4,-133.7)"><path d="m113.4,133.7c-4.4,0-8,3.6-8,8s3.6,8,8,8,8-3.6,8-8-3.6-8-8-8zm0,14c-3.3,0-6-2.7-6-6s2.7-6,6-6,6,2.7,6,6-2.7,6-6,6z"></path><polygon points="112.4,145.4,114.4,145.4,114.4,142.7,117.1,142.7,117.1,140.7,114.4,140.7,114.4,138,112.4,138,112.4,140.7,109.7,140.7,109.7,142.7,112.4,142.7"></polygon></g>
</symbol>
<symbol id="ico_google_plus" viewBox="0 0 16 16">
<g>
	<g>
		<g>
			<path d="M12.233,10.556h0.688c0.185,0,0.333-0.15,0.333-0.334V7.804h2.412C15.85,7.804,16,7.654,16,7.47V6.781     c0-0.184-0.15-0.334-0.334-0.334h-2.412V4.029c0-0.183-0.148-0.333-0.333-0.333h-0.688c-0.185,0-0.335,0.15-0.335,0.333v2.418     H9.486c-0.184,0-0.333,0.15-0.333,0.334V7.47c0,0.184,0.149,0.334,0.333,0.334h2.412v2.418     C11.898,10.406,12.049,10.556,12.233,10.556z"></path>
		</g>
		<g>
			<path d="M2.73,14.766C3.34,14.92,3.996,15,4.679,15c0.612,0,1.195-0.08,1.734-0.236     c1.683-0.489,2.771-1.729,2.771-3.163c0-1.374-0.441-2.196-1.625-3.036C7.053,8.206,6.591,7.678,6.582,7.516     c0-0.296,0.025-0.437,0.688-0.954c0.855-0.67,1.326-1.552,1.326-2.484c0-0.844-0.257-1.594-0.697-2.121h0.341     c0.071,0,0.14-0.022,0.196-0.062l0.949-0.689C9.502,1.121,9.553,0.97,9.506,0.832C9.461,0.694,9.334,0.6,9.189,0.6H4.945     c-0.465,0-0.937,0.081-1.399,0.242C1.999,1.376,0.918,2.697,0.918,4.053c0,1.919,1.484,3.375,3.469,3.42     c-0.038,0.152-0.058,0.303-0.058,0.45c0,0.295,0.075,0.575,0.229,0.845c-0.02,0.002-0.035,0.002-0.055,0.002     c-1.893,0-3.601,0.931-4.248,2.314C0.086,11.444,0,11.808,0,12.168c0,0.349,0.09,0.684,0.265,1.001     C0.674,13.9,1.548,14.467,2.73,14.766z M3.108,4C3.017,3.297,3.164,2.666,3.514,2.266c0.226-0.259,0.521-0.394,0.854-0.394     l0.038,0.001c0.938,0.026,1.834,1.074,2,2.333c0.093,0.706-0.063,1.369-0.418,1.773C5.762,6.237,5.471,6.374,5.124,6.374H5.123     H5.108C4.189,6.346,3.272,5.259,3.108,4z M4.912,9.834L4.95,9.835c0.314,0.003,0.62,0.05,0.91,0.138     c0.099,0.067,0.194,0.134,0.288,0.196c0.668,0.458,1.109,0.76,1.234,1.244c0.027,0.121,0.042,0.243,0.042,0.361     c0,1.245-0.927,1.876-2.755,1.876c-1.387,0-2.471-0.853-2.471-1.94C2.199,10.711,3.467,9.834,4.912,9.834z"></path>
		</g>
	</g>
</g>
</symbol>
<symbol id="ico_graph" viewBox="0 0 16 16">
<g>
	<g>
		<polygon points="1,15 1,0 0,0 0,15 0,16 1,16 16,16 16,15   "></polygon>
		<path d="M4.801,8.962c0.665,0,0.905,0.438,1.272,1.212c0.362,0.762,0.812,1.712,2.052,1.712    c1.876,0,1.948-2.276,1.979-3.247c0.01-0.294,0.021-0.796,0.021-1.085l-0.001-0.146c0-0.863-0.001-1.936,0.203-2.761    c0.257-1.041,0.703-1.175,1.062-1.175c0.264,0,0.461,0.075,0.623,0.237c0.618,0.619,0.615,2.347,0.613,3.607l-0.001,2.436    c0,1.417,0.288,2.729,2.375,2.73v-0.96c-1.044-0.001-1.414-0.268-1.414-1.77V7.32c0.002-1.509,0.006-3.387-0.894-4.288    c-0.344-0.345-0.782-0.519-1.303-0.519c-0.695,0-1.605,0.331-1.995,1.905c-0.231,0.938-0.23,2.077-0.23,2.992v0.145    c0,0.28-0.009,0.767-0.019,1.053c-0.062,1.924-0.453,2.318-1.021,2.318c-0.604,0-0.832-0.42-1.185-1.164    C6.589,9.02,6.105,8.002,4.801,8.002C2.757,8.002,2.52,11.425,2.52,14H3.48C3.48,9.616,4.308,8.962,4.801,8.962z"></path>
	</g>
</g>
</symbol>
<symbol id="ico_help" viewBox="0 0 16 16">
<g>
	<g>
		<path d="M8,0C3.582,0,0,3.582,0,8s3.582,8,8,8s8-3.582,8-8S12.418,0,8,0z M8,15c-3.859,0-7-3.141-7-7    c0-3.859,3.141-7,7-7s7,3.141,7,7C15,11.859,11.859,15,8,15z"></path>
		<path d="M7.959,10.856c-0.191,0-0.343,0.057-0.457,0.17c-0.113,0.115-0.17,0.27-0.17,0.468    c0,0.191,0.057,0.345,0.17,0.462c0.114,0.117,0.266,0.176,0.457,0.176c0.198,0,0.355-0.059,0.473-0.176s0.176-0.271,0.176-0.462    c0-0.198-0.059-0.353-0.176-0.468C8.314,10.913,8.157,10.856,7.959,10.856z"></path>
		<path d="M10.176,4.834C9.988,4.64,9.752,4.479,9.466,4.355C9.18,4.23,8.846,4.168,8.465,4.168    c-0.631,0-1.189,0.098-1.678,0.292C6.3,4.654,5.902,4.945,5.594,5.334L6.154,5.84c0.104-0.095,0.219-0.197,0.348-0.303    C6.63,5.432,6.773,5.334,6.931,5.246c0.157-0.087,0.333-0.161,0.528-0.22c0.193-0.058,0.412-0.088,0.654-0.088    c0.301,0,0.559,0.044,0.775,0.132c0.216,0.088,0.393,0.201,0.527,0.341c0.137,0.14,0.236,0.29,0.303,0.451s0.1,0.312,0.1,0.451    c0,0.264-0.057,0.491-0.171,0.682S9.393,7.36,9.225,7.518C9.055,7.675,8.873,7.824,8.68,7.963    c-0.194,0.14-0.376,0.295-0.545,0.468c-0.168,0.172-0.31,0.368-0.424,0.588c-0.113,0.221-0.17,0.484-0.17,0.792    c0,0.037,0,0.077,0,0.121s0.004,0.085,0.011,0.121h0.726c0-0.308,0.061-0.568,0.182-0.78C8.58,9.06,8.732,8.867,8.916,8.694    C9.1,8.522,9.295,8.361,9.504,8.211s0.406-0.319,0.589-0.507c0.184-0.187,0.336-0.399,0.456-0.638    c0.121-0.238,0.182-0.533,0.182-0.886c0-0.227-0.045-0.46-0.137-0.698S10.362,5.028,10.176,4.834z"></path>
	</g>
</g>
</symbol>
<symbol id="ico_info" viewBox="0 0 16 16">
<g>
	<g>
		<path d="M8,0C3.582,0,0,3.582,0,8s3.582,8,8,8s8-3.582,8-8S12.418,0,8,0z M8,15c-3.859,0-7-3.141-7-7s3.141-7,7-7    s7,3.141,7,7S11.859,15,8,15z"></path>
		<path d="M7.779,5.04c0.232,0,0.427-0.072,0.582-0.216c0.156-0.145,0.234-0.32,0.234-0.528    c0-0.216-0.078-0.402-0.234-0.558c-0.155-0.156-0.35-0.234-0.582-0.234c-0.223,0-0.407,0.078-0.551,0.234    C7.084,3.894,7.012,4.08,7.012,4.296c0,0.208,0.072,0.384,0.217,0.528C7.372,4.968,7.557,5.04,7.779,5.04z"></path>
		<polygon points="8.296,6 5.26,6 5.26,6.804 7.348,6.804 7.348,11.196 5.26,11.196 5.26,12 10.336,12     10.336,11.196 8.296,11.196   "></polygon>
	</g>
</g>
</symbol>
<symbol id="ico_instagram" viewBox="0 0 16 16">
<g>
	<g>
		<g>
			<path d="M12.907,0.001H3.092C1.387,0.001,0,1.387,0,3.093v3.266v6.55C0,14.614,1.387,16,3.092,16h9.815     C14.611,16,16,14.614,16,12.909v-6.55V3.093C16,1.387,14.611,0.001,12.907,0.001z M13.795,1.846l0.353-0.003v0.354v2.358     l-2.702,0.009l-0.009-2.712L13.795,1.846z M5.717,6.359C6.229,5.649,7.06,5.186,8,5.186c0.939,0,1.771,0.463,2.283,1.173     C10.616,6.821,10.816,7.388,10.816,8c0,1.552-1.265,2.816-2.816,2.816c-1.554,0-2.816-1.264-2.816-2.816     C5.184,7.388,5.383,6.821,5.717,6.359z M14.441,12.909c0,0.846-0.689,1.533-1.534,1.533H3.092c-0.846,0-1.533-0.688-1.533-1.533     v-6.55h2.388C3.74,6.867,3.625,7.421,3.625,8c0,2.412,1.962,4.375,4.375,4.375c2.412,0,4.375-1.963,4.375-4.375     c0-0.58-0.117-1.133-0.323-1.642h2.39V12.909z"></path>
		</g>
	</g>
</g>
</symbol>
<symbol id="ico_left" viewBox="0 0 16 16">
<g>
	<g>
		<polygon points="12,1 4,8 12,15   "></polygon>
	</g>
</g>
</symbol>
<symbol id="ico_left_frame" viewBox="0 0 16 16">
<g>
<g transform="matrix(-1,0,0,1,13,0)"><polygon points="4 1 4 15 12 8"></polygon></g>
<g transform="matrix(0 1 -.5 0 16 0)"><rect height="4" width="14" y="6" x="1"></rect></g>
</g>
</symbol>
<symbol id="ico_login_logout" viewBox="0 0 16 16">
<g>
	<g>
		<path d="M12.933,6V4.344C12.933,1.731,10.779,0,8.13,0C5.481,0,3.326,1.731,3.326,4.344V6H2v10h12V6H12.933z     M9.042,13.865H6.938l0.536-2.914c-0.315-0.183-0.536-0.509-0.536-0.897C6.938,9.471,7.409,9,7.99,9    c0.58,0,1.052,0.471,1.052,1.054c0,0.388-0.221,0.714-0.536,0.897L9.042,13.865z M10.798,6H5.461V4.344    c0-1.41,1.222-2.209,2.669-2.209c1.446,0,2.668,0.798,2.668,2.209V6z"></path>
	</g>
</g>
</symbol>
<symbol id="ico_map" viewBox="0 0 16 16">
<g>
	<g>
		<g>
			<polygon points="4.818,14.865 1,12.709 1,1 4.818,3.155    "></polygon>
		</g>
		<g>
			<polygon points="15,14.865 11.182,12.709 11.182,1 15,3.155    "></polygon>
		</g>
		<g>
			<polygon points="9.909,1 6.091,3.156 6.091,14.865 9.909,12.71    "></polygon>
		</g>
		<g>
			<path d="M13.314,14.535"></path>
		</g>
		<g>
			<path d="M6.021,14.535"></path>
		</g>
	</g>
</g>
</symbol>
<symbol id="ico_maximize" viewBox="0 0 16 16">
<g>
	<g>
		<polygon points="14.094,2.094 8.762,2.856 10.285,4.379 4.191,10.474 2.667,8.95 1.905,14.284 7.238,13.521     5.715,11.998 11.809,5.903 13.332,7.427   "></polygon>
	</g>
</g>
</symbol>
<symbol id="ico_menu" viewBox="0 0 16 16">
<g>
	<g>
		<g>
			<rect width="16" height="4"></rect>
		</g>
		<g>
			<rect y="6" width="16" height="4"></rect>
		</g>
		<g>
			<rect y="12" width="16" height="4"></rect>
		</g>
	</g>
</g>
</symbol>
<symbol id="ico_model_selection" viewBox="0 0 16 16">
<g>
	<g>
		<g>
			<rect x="6" y="6" width="5" height="1"></rect>
		</g>
		<g>
			<rect x="6" y="8" width="5" height="1"></rect>
		</g>
		<g>
			<rect x="6" y="10" width="5" height="1"></rect>
		</g>
		<g>
			<rect x="6" y="12" width="5" height="1"></rect>
		</g>
		<g>
			<rect x="4" y="4" width="1" height="1"></rect>
		</g>
		<g>
			<rect x="4" y="6" width="1" height="1"></rect>
		</g>
		<g>
			<rect x="4" y="8" width="1" height="1"></rect>
		</g>
		<g>
			<rect x="4" y="10" width="1" height="1"></rect>
		</g>
		<g>
			<rect x="4" y="12" width="1" height="1"></rect>
		</g>
		<g>
			<path d="M1,0v16h14V0H1z M14,15H2V1h12V15z"></path>
		</g>
		<g>
			<rect x="6" y="4" width="3" height="1"></rect>
		</g>
	</g>
</g>
</symbol>
<symbol id="ico_moonrise_moonset" viewBox="0 0 16 16">
<g>
	<g>
		<path d="M12.5,12c-2.209,0-4-1.79-4-4s1.791-4,4-4c0.395,0,0.768,0.075,1.129,0.182C12.527,2.849,10.863,2,9,2    C5.686,2,3,4.686,3,8s2.686,6,6,6c1.863,0,3.527-0.849,4.629-2.182C13.268,11.925,12.895,12,12.5,12z"></path>
	</g>
</g>
</symbol>
<symbol id="ico_more" viewBox="0 0 16 16">
<g>
	<g>
		<g>
			<rect x="1" y="1" width="6" height="6"></rect>
		</g>
		<g>
			<rect x="9" y="1" width="6" height="6"></rect>
		</g>
		<g>
			<rect x="1" y="9" width="6" height="6"></rect>
		</g>
		<g>
			<rect x="9" y="9" width="6" height="6"></rect>
		</g>
	</g>
</g>
</symbol>
<symbol id="ico_more_02" viewBox="0 0 16 16">
<g>
	<g>
		<g>
			<rect width="4" height="4"></rect>
		</g>
		<g>
			<rect x="6" width="4" height="4"></rect>
		</g>
		<g>
			<rect x="12" width="4" height="4"></rect>
		</g>
		<g>
			<rect y="6" width="4" height="4"></rect>
		</g>
		<g>
			<rect x="6" y="6" width="4" height="4"></rect>
		</g>
		<g>
			<rect x="12" y="6" width="4" height="4"></rect>
		</g>
		<g>
			<rect y="12" width="4" height="4"></rect>
		</g>
		<g>
			<rect x="6" y="12" width="4" height="4"></rect>
		</g>
		<g>
			<rect x="12" y="12" width="4" height="4"></rect>
		</g>
	</g>
</g>
</symbol>
<symbol id="ico_move" viewBox="0 0 16 16">
<g>
	<g>
		<polygon points="16,8 12,5 12,7 9,7 9,4 11.035,4 8.035,0 5.035,4 7,4 7,7 4,7 4,5 0,8 4,11 4,9 7,9 7,12     5.035,12 8.035,16 11.035,12 9,12 9,9 12,9 12,11   "></polygon>
	</g>
</g>
</symbol>
<symbol id="ico_new" viewBox="0 0 16 16">
<g>
	<g>
		<path d="M14.703,0H1.297C0.581,0,0,0.58,0,1.297v9.405C0,11.418,0.581,12,1.297,12h1.715L3.01,16l5-4h6.693    C15.42,12,16,11.418,16,10.702V1.297C16,0.58,15.42,0,14.703,0z M15,10.702C15,10.866,14.867,11,14.703,11H8.01H7.658    l-0.273,0.219L4.01,13.918L4.012,12v-1h-1H1.297C1.133,11,1,10.866,1,10.702V1.297C1,1.133,1.133,1,1.297,1h13.406    C14.867,1,15,1.133,15,1.297V10.702z"></path>
		<circle cx="4" cy="6" r="1"></circle>
		<circle cx="8" cy="6" r="1"></circle>
		<circle cx="12" cy="6" r="1"></circle>
	</g>
</g>
</symbol>
<symbol id="ico_notification" viewBox="0 0 16 16">
<g transform="matrix(.01447 0 0 .01633 .7656 -.1633)">
  <path d="m500 990c53.7 0 97.6-44.1 97.6-98h-195.2c0 53.9 43.9 98 97.6 98zm317.1-294v-269.5c0-149.4-104.9-276.8-243.9-308.7v-34.3c0-41.7-31.7-73.5-73.2-73.5s-73.2 31.8-73.2 73.5v34.3c-139 31.9-243.9 159.3-243.9 308.7v269.5l-97.6 98v49h829.2v-49z"></path>
 </g>
</symbol>
<symbol id="ico_off" viewBox="0 0 16 16">
<g>
	<path d="M12.002,4h-8c-2.209,0-4,1.791-4,4c0,2.209,1.791,4,4,4h8c2.209,0,4-1.791,4-4S14.211,4,12.002,4z M1.002,8   c0-1.654,1.346-3,3-3s3,1.346,3,3s-1.346,3-3,3S1.002,9.654,1.002,8z M12.002,11h-5.38c0.839-0.733,1.38-1.798,1.38-3   S7.461,5.733,6.623,5h5.379c1.654,0,3,1.346,3,3S13.656,11,12.002,11z"></path>
</g>
</symbol>
<symbol id="ico_ok" viewBox="0 0 16 16">
<g>
	<g>
		<g>
			<polygon points="5.873,14.256 0.797,9.179 2.211,7.765 5.73,11.283 13.896,1.365 15.439,2.637    "></polygon>
		</g>
	</g>
</g>
</symbol>
<symbol id="ico_on_color" viewBox="0 0 16 16">
<g>
    <path style="fill:rgb(40,110,195)" d="M3.508,11.2c-1.201-0.2-2.203-1.04-2.602-2.186-0.093-0.267-0.1785-0.758-0.1785-1.027,0-0.2686,0.0855-0.7604,0.1785-1.027,0.4044-1.158,1.405-1.989,2.631-2.184,0.254-0.041,0.767-0.048,3.359-0.048h3.059l-0.214,0.223c-0.828,0.861-1.261,1.905-1.261,3.036s0.4231,2.151,1.258,3.032l0.2154,0.2272-3.09-0.0032c-2.484-0.01-3.142-0.02-3.355-0.05z"></path>
    <g transform="matrix(-1,0,0,1,16.004,0)"><path d="m12,4h-8c-2.209,0-4,1.791-4,4s1.791,4,4,4h8c2.209,0,4-1.791,4-4s-1.791-4-4-4zm-11,4c0-1.654,1.346-3,3-3s3,1.346,3,3-1.346,3-3,3-3-1.346-3-3zm11,3h-5.378c0.839-0.73,1.38-1.798,1.38-3s-0.541-2.267-1.379-3h5.379c1.654,0,3,1.346,3,3s-1.346,3-3,3z"></path></g>
  </g>
</symbol>
<symbol id="ico_on" viewBox="0 0 16 16">
<g>
	<path d="M12,4H4C1.791,4,0,5.791,0,8s1.791,4,4,4h8c2.209,0,4-1.791,4-4S14.209,4,12,4z M12,11   c-1.654,0-3-1.346-3-3s1.346-3,3-3s3,1.346,3,3S13.654,11,12,11z"></path>
</g>
</symbol>
<symbol id="ico_options" viewBox="0 0 16 16">
<g>
	<g>
		<path d="M15.429,6.858H13.57c-0.16-0.711-0.452-1.374-0.856-1.955l1.347-1.348c0.223-0.222,0.223-0.586,0-0.808    l-0.808-0.81c-0.222-0.222-0.586-0.222-0.808,0L11.05,3.334c-0.577-0.36-1.216-0.632-1.907-0.771V0.571    C9.143,0.257,8.886,0,8.571,0H7.429C7.114,0,6.857,0.257,6.857,0.571v1.992c-0.691,0.139-1.33,0.41-1.907,0.771L3.555,1.938    c-0.222-0.222-0.586-0.222-0.808,0l-0.808,0.81c-0.223,0.222-0.223,0.586,0,0.808l1.347,1.348C2.882,5.484,2.59,6.146,2.43,6.858    H0.571C0.258,6.858,0,7.115,0,7.429v1.143c0,0.314,0.258,0.571,0.571,0.571h1.823c0.142,0.733,0.428,1.415,0.828,2.019    l-1.283,1.283c-0.223,0.222-0.223,0.586,0,0.808l0.808,0.81c0.222,0.222,0.586,0.222,0.808,0l1.289-1.288    c0.602,0.393,1.281,0.68,2.014,0.827v1.828C6.857,15.743,7.114,16,7.429,16h1.143c0.314,0,0.571-0.257,0.571-0.571v-1.828    c0.732-0.147,1.412-0.434,2.014-0.827l1.289,1.288c0.222,0.222,0.586,0.222,0.808,0l0.808-0.81c0.223-0.222,0.223-0.586,0-0.808    l-1.283-1.283c0.4-0.604,0.687-1.285,0.828-2.019h1.823C15.742,9.143,16,8.886,16,8.571V7.429C16,7.115,15.742,6.858,15.429,6.858    z M8,10.335c-1.262,0-2.285-1.008-2.285-2.252c0-1.246,1.023-2.254,2.285-2.254s2.285,1.008,2.285,2.254    C10.285,9.327,9.262,10.335,8,10.335z"></path>
	</g>
</g>
</symbol>
<symbol id="ico_pause" viewBox="0 0 16 16">
<g>
<path stroke-width="1" d="m0 0v16h16v-16zm15 15h-14v-14h14z"></path>
<rect transform="rotate(90)" height="3" width="12" y="-7" x="2" stroke-width="0"></rect>
<rect transform="rotate(90)" height="3" width="12" y="-12" x="2" stroke-width="0"></rect>
</g>
</symbol>
<symbol id="ico_phone" viewBox="0 0 16 16">
<g>  
 <path d="M10.86,0h-5.717c-1.186,0-2.143,0.9745-2.143,2.182v11.64c0,1.212,0.957,2.182,2.143,2.182h5.714c1.183,0,2.143-0.97,2.143-2.18v-11.64c0-1.207-0.96-2.182-2.14-2.182zm-1.431,14.55h-2.858v-0.7273h2.857v0.7273zm2.321-2.19h-7.5v-10.18h7.5v10.18z"></path>
 <path fill="none" d="M0-8h24v24h-24z"></path>
 </g>
</symbol>
<symbol id="ico_pictures" viewBox="0 0 16 16">
<g>
	<g>
		<circle cx="5.023" cy="4.018" r="1.982"></circle>
		<path d="M0,0v16h16V0H0z M15,1v8.537l-3.854-6.528L6.17,11.597L3.94,7.176L1,12.991V1H15z"></path>
	</g>
</g>
</symbol>
<symbol id="ico_play" viewBox="0 0 16 16">
<g>
<g transform="matrix(1.125 0 0 .85714 -.5 1.1429)"><polygon points="12 8 4 1 4 15"></polygon></g>
<path d="m0 0v16h16v-16zm14.857 15h-13.714v-14h13.714z"></path>
</g>
</symbol>
<symbol id="ico_precipitation" viewBox="0 0 16 16">
<g>
	<g>
		<g>
			<path d="M12.773,5.092c-0.03,0-0.058,0.008-0.087,0.009c0.25-0.481,0.404-1.021,0.404-1.601     c0-1.932-1.566-3.5-3.5-3.5C8.096,0,6.829,0.942,6.328,2.261C5.982,2.042,5.576,1.91,5.137,1.91c-1.23,0-2.228,0.996-2.228,2.227     c0,0.347,0.086,0.672,0.228,0.964C1.949,5.149,1,6.119,1,7.318c0,1.23,0.997,2.228,2.228,2.228c0.108,0,9.437,0,9.546,0     C14.003,9.546,15,8.549,15,7.318S14.003,5.092,12.773,5.092z"></path>
		</g>
		<g>
			<path d="M4,12c0,0.275-0.225,0.5-0.5,0.5l0,0C3.225,12.5,3,12.275,3,12v-1c0-0.275,0.225-0.5,0.5-0.5l0,0     C3.775,10.5,4,10.725,4,11V12z"></path>
		</g>
		<g>
			<path d="M6,14.625c0,0.275-0.225,0.5-0.5,0.5l0,0c-0.275,0-0.5-0.225-0.5-0.5v-1c0-0.275,0.225-0.5,0.5-0.5l0,0     c0.275,0,0.5,0.225,0.5,0.5V14.625z"></path>
		</g>
		<g>
			<path d="M8,12c0,0.275-0.225,0.5-0.5,0.5l0,0C7.225,12.5,7,12.275,7,12v-1c0-0.275,0.225-0.5,0.5-0.5l0,0     C7.775,10.5,8,10.725,8,11V12z"></path>
		</g>
		<g>
			<path d="M10,14.625c0,0.275-0.225,0.5-0.5,0.5l0,0c-0.275,0-0.5-0.225-0.5-0.5v-1c0-0.275,0.225-0.5,0.5-0.5l0,0     c0.275,0,0.5,0.225,0.5,0.5V14.625z"></path>
		</g>
		<g>
			<path d="M12,12c0,0.275-0.225,0.5-0.5,0.5l0,0c-0.275,0-0.5-0.225-0.5-0.5v-1c0-0.275,0.225-0.5,0.5-0.5l0,0     c0.275,0,0.5,0.225,0.5,0.5V12z"></path>
		</g>
	</g>
</g>
</symbol>
<symbol id="ico_pressure" viewBox="0 0 16 16">
<g>
	<g>
		<path d="M9,14v-2.096c2.817-0.493,4.961-2.946,4.961-5.904c0-3.313-2.687-6-6-6s-6,2.687-6,6    c0,2.985,2.184,5.455,5.039,5.916V14H1v2h14v-2H9z M3.461,6c0-2.481,2.019-4.5,4.5-4.5s4.5,2.019,4.5,4.5s-2.019,4.5-4.5,4.5    S3.461,8.481,3.461,6z"></path>
		<path d="M7.961,6.875c0.483,0,0.875-0.392,0.875-0.875c0-0.064-0.023-0.122-0.037-0.183l1.754-2.001l-0.324-0.325    L8.215,5.177C8.133,5.151,8.051,5.125,7.961,5.125C7.478,5.125,7.086,5.517,7.086,6c0,0.037,0.017,0.068,0.021,0.104l-0.849,0.71    l0.89,0.889L7.886,6.86C7.912,6.862,7.935,6.875,7.961,6.875z"></path>
	</g>
</g>
</symbol>
<symbol id="ico_register" viewBox="0 0 16 16">
<g>
	<g>
		<path d="M8.821,9.468l-0.015-1.49c0,0,0.582-0.447,0.763-1.85c0.364,0.105,0.746-0.543,0.767-0.885    c0.021-0.329-0.05-1.243-0.494-1.15C9.933,3.405,9.998,2.787,9.967,2.46C9.852,1.263,8.645,0,6.859,0S3.867,1.263,3.752,2.46    C3.72,2.787,3.785,3.405,3.876,4.093c-0.444-0.092-0.515,0.821-0.494,1.15c0.021,0.341,0.402,0.99,0.767,0.885    c0.181,1.402,0.764,1.85,0.764,1.85l-0.016,1.49c0,0-4.896,1.874-4.896,3.188c0,1.585,0,3.302,0,3.302h14c0,0,0-1.717,0-3.302    C14,11.342,8.821,9.468,8.821,9.468z"></path>
		<polygon points="16,2 14,2 14,0 13,0 13,2 11,2 11,3 13,3 13,5 14,5 14,3 16,3   "></polygon>
	</g>
</g>
</symbol>
<symbol id="ico_remove" viewBox="0 0 16 16">
<g>
	<g>
		<g>
			<rect x="1" y="6" width="14" height="4"></rect>
		</g>
	</g>
</g>
</symbol>
<symbol id="ico_restaurant" viewBox="0 0 16 16">
<g>
	<g>
		<g>
			<path d="M6.5,0C6.225,0,6,0.225,6,0.5V5H5V0.5C5,0.225,4.775,0,4.5,0S4,0.225,4,0.5V5H3V0.5     C3,0.225,2.775,0,2.5,0S2,0.225,2,0.5V7h1v8c0,0.55,0.45,1,1,1h1c0.55,0,1-0.45,1-1V7h1V0.5C7,0.225,6.775,0,6.5,0z"></path>
		</g>
		<g>
			<path d="M14,3l-3-3h-1v15c0,0.55,0.45,1,1,1s1-0.45,1-1v-5h2V3z"></path>
		</g>
	</g>
</g>
</symbol>
<symbol id="ico_right" viewBox="0 0 16 16">
<g>
	<g>
		<polygon points="4,15 12,8 4,1   "></polygon>
	</g>
</g>
</symbol>
<symbol id="ico_right_frame" viewBox="0 0 16 16">
<g>
<g transform="translate(3)"><polygon points="4 15 12 8 4 1"></polygon></g>
<g transform="matrix(0 1 -.5 0 8 0)"><rect height="4" width="14" y="6" x="1"></rect></g>
</g>
</symbol>
<symbol id="ico_sailing_club" viewBox="0 0 16 16">
<g>
	<path d="M14.701,9.373c-0.027-0.188-0.172-0.247-0.322-0.132l-2.536,1.929c-0.15,0.114-0.131,0.267,0.045,0.339   l0.998,0.409c-0.69,1.639-2.392,2.781-4.341,2.963V6.963h3.394V5.872H8.545V4.476c0.989-0.246,1.727-1.139,1.727-2.204   C10.271,1.02,9.252,0,8,0C6.747,0,5.728,1.02,5.728,2.271c0,1.065,0.737,1.958,1.728,2.204v1.396H4.213v1.091h3.242v7.918   c-1.948-0.182-3.649-1.324-4.341-2.963l0.998-0.409c0.176-0.072,0.195-0.225,0.045-0.339L1.621,9.241   C1.47,9.126,1.326,9.186,1.299,9.373L0.85,12.527c-0.026,0.188,0.095,0.281,0.271,0.209l0.985-0.404C3.025,14.527,5.391,16,8,16   c2.608,0,4.975-1.473,5.895-3.667l0.985,0.404c0.175,0.072,0.297-0.022,0.271-0.209L14.701,9.373z M6.818,2.271   c0-0.65,0.53-1.181,1.182-1.181s1.182,0.53,1.182,1.181c0,0.652-0.53,1.182-1.182,1.182S6.818,2.924,6.818,2.271z"></path>
</g>
</symbol>
<symbol id="ico_search" viewBox="0 0 16 16">
<g>
	<path d="M12.738,11.1c0.803-1.134,1.279-2.513,1.279-4.005c0-3.847-3.139-6.968-7.01-6.968   C3.138,0.127,0,2.932,0,6.78s3.138,7.283,7.008,7.283c1.453,0,2.803-0.439,3.922-1.191l3.274,3.255L16,14.342L12.738,11.1z    M7.008,12.107c-2.685,0-5.041-2.488-5.041-5.327c0-2.678,2.168-4.696,5.041-4.696c2.78,0,5.042,2.248,5.042,5.011   C12.05,9.859,9.788,12.107,7.008,12.107z"></path>
</g>
</symbol>
<symbol id="ico_settings" viewBox="0 0 16 16">
<g>
	<g>
		<g>
			<path d="M10.387,9.431H8.855C8.764,9.137,8.635,8.859,8.479,8.602l1.018-1.019c0.24-0.237,0.24-0.625,0-0.864     l-0.432-0.43c-0.24-0.239-0.627-0.239-0.865,0L7.166,7.321C6.887,7.162,6.584,7.039,6.262,6.955V5.613     c0-0.338-0.271-0.612-0.609-0.612H5.041c-0.336,0-0.611,0.274-0.611,0.612v1.342C4.08,7.044,3.75,7.185,3.447,7.368L2.582,6.504     c-0.238-0.239-0.627-0.239-0.863,0L1.285,6.936C1.047,7.173,1.049,7.562,1.287,7.801l0.881,0.881     C1.98,9.006,1.842,9.361,1.762,9.737h-1.15C0.273,9.737,0,10.01,0,10.348v0.611c0,0.336,0.273,0.61,0.611,0.61H1.84     c0.111,0.369,0.279,0.708,0.494,1.018l-0.83,0.829c-0.24,0.24-0.24,0.628-0.002,0.865l0.432,0.432     c0.238,0.239,0.627,0.239,0.865,0l0.928-0.927c0.312,0.154,0.652,0.267,1.01,0.326v1.278C4.736,15.727,5.008,16,5.346,16h0.611     c0.338,0,0.611-0.273,0.611-0.611v-1.435c0.309-0.11,0.6-0.255,0.863-0.441l0.984,0.985c0.238,0.239,0.625,0.239,0.865,0     l0.432-0.432c0.238-0.238,0.238-0.625-0.002-0.864l-1.078-1.08c0.133-0.269,0.234-0.555,0.299-0.858h1.455     c0.338,0,0.611-0.271,0.613-0.611v-0.611C10.998,9.705,10.725,9.431,10.387,9.431z M5.348,12.027     c-0.844,0-1.527-0.682-1.527-1.527c0-0.844,0.684-1.525,1.527-1.525S6.875,9.656,6.875,10.5     C6.875,11.346,6.191,12.027,5.348,12.027z"></path>
		</g>
		<g>
			<path d="M15.609,2.819h-0.975c-0.059-0.186-0.141-0.363-0.238-0.528l0.646-0.648c0.152-0.15,0.152-0.396,0-0.549     l-0.275-0.273c-0.152-0.153-0.398-0.153-0.549,0l-0.658,0.656c-0.178-0.102-0.371-0.18-0.576-0.233V0.39     c0-0.214-0.174-0.39-0.389-0.39h-0.389c-0.213,0-0.389,0.176-0.389,0.39v0.854c-0.223,0.057-0.432,0.146-0.625,0.262     l-0.551-0.549c-0.15-0.152-0.398-0.152-0.549,0L9.818,1.23c-0.152,0.152-0.15,0.398,0,0.551l0.561,0.561     c-0.119,0.207-0.207,0.433-0.258,0.672H9.389C9.174,3.014,9,3.188,9,3.403v0.388C9,4.006,9.174,4.18,9.389,4.18h0.781     c0.072,0.234,0.178,0.45,0.314,0.647L9.957,5.356C9.805,5.508,9.805,5.754,9.955,5.906L10.23,6.18     c0.152,0.152,0.398,0.152,0.551,0l0.59-0.59c0.199,0.098,0.414,0.17,0.643,0.207V6.61c0,0.215,0.174,0.389,0.389,0.39h0.389     c0.215-0.001,0.389-0.176,0.389-0.39V5.697c0.195-0.071,0.381-0.162,0.549-0.281l0.627,0.627c0.152,0.153,0.396,0.153,0.551,0     l0.273-0.275c0.152-0.151,0.152-0.397,0-0.55l-0.688-0.687c0.086-0.172,0.15-0.354,0.191-0.545h0.926     c0.215,0,0.389-0.174,0.391-0.39V3.208C15.998,2.994,15.824,2.819,15.609,2.819z M12.402,4.472c-0.537,0-0.973-0.434-0.973-0.972     c0-0.537,0.436-0.971,0.973-0.971s0.973,0.434,0.973,0.971C13.375,4.038,12.939,4.472,12.402,4.472z"></path>
		</g>
	</g>
</g>
</symbol>
<symbol id="ico_share" viewBox="0 0 16 16">
<g>
	<g>
		<path d="M13,10c-0.902,0-1.701,0.406-2.251,1.036L5.932,8.627C5.975,8.425,6,8.216,6,8S5.975,7.575,5.932,7.373    l4.817-2.409C11.299,5.594,12.098,6,13,6c1.657,0,3-1.343,3-3c0-1.657-1.343-3-3-3s-3,1.343-3,3c0,0.216,0.025,0.425,0.068,0.627    L5.251,6.036C4.701,5.406,3.902,5,3,5C1.343,5,0,6.343,0,8c0,1.657,1.343,3,3,3c0.902,0,1.701-0.406,2.251-1.036l4.817,2.409    C10.025,12.575,10,12.784,10,13c0,1.657,1.343,3,3,3s3-1.343,3-3C16,11.343,14.657,10,13,10z"></path>
	</g>
</g>
</symbol>
<symbol id="ico_shopping" viewBox="0 0 16 16">
<g>
	<g>
		<circle cx="4.131" cy="14.989" r="1.011"></circle>
		<circle cx="10.131" cy="14.989" r="1.011"></circle>
		<path d="M13.764,0.945L13.255,3H0l2.223,10h9.802l2.521-11.055H16v-1H13.764z M4.123,12H3.024L2.58,10h1.543V12z     M4.123,9H2.357L1.914,7h2.209V9z M4.123,6H1.691L1.247,4h2.876V6z M9.123,12h-4v-2h4V12z M9.123,9h-4V7h4V9z M9.123,6h-4V4h4V6z     M11.223,12h-1.1v-2h1.544L11.223,12z M11.889,9h-1.766V7h2.211L11.889,9z M12.556,6h-2.433V4H13L12.556,6z"></path>
	</g>
</g>
</symbol>
<symbol id="ico_show_legend" viewBox="0 0 16 16">
<g>
	<g>
		<polygon points="6,13 10,8 6,3   "></polygon>
	</g>
</g>
</symbol>
<symbol id="ico_sort" viewBox="0 0 16 16">
<g>
	<g>
		<polygon points="8.2,0 2.886,6 13.515,6   "></polygon>
		<polygon points="8.2,15.999 13.515,10 2.886,10   "></polygon>
	</g>
</g>
</symbol>
<symbol id="ico_spot_guru" viewBox="0 0 16 16">
<g>
	<g>
		<path d="M8.189,0C4.98,0,2.38,2.601,2.38,5.811C2.38,9.02,8.189,16,8.189,16S14,9.02,14,5.811    C14,2.601,11.398,0,8.189,0z M8.189,9c-1.656,0-3-1.344-3-2.998c0-1.658,1.344-3.002,3-3.002c1.658,0,3,1.344,3,3.002    C11.189,7.656,9.848,9,8.189,9z"></path>
	</g>
</g>
</symbol>
<symbol id="ico_spot_map" viewBox="0 0 16 16">
<g>
	<g>
		<path d="M8.189,0C4.98,0,2.38,2.601,2.38,5.811C2.38,9.02,8.189,16,8.189,16S14,9.02,14,5.811    C14,2.601,11.398,0,8.189,0z M8.189,9c-1.656,0-3-1.344-3-2.998c0-1.658,1.344-3.002,3-3.002c1.658,0,3,1.344,3,3.002    C11.189,7.656,9.848,9,8.189,9z"></path>
	</g>
</g>
</symbol>
<symbol id="ico_station_map" viewBox="0 0 16 16">
<g>
	<g>
		<path d="M2.5,0C2.224,0,2,0.239,2,0.533V16h1V0.533C3,0.238,2.776,0,2.5,0z"></path>
		<polygon points="10,7.363 12,6.818 12,3.182 10,2.637   "></polygon>
		<polygon points="7,8.182 9,7.637 9,2.363 7,1.818   "></polygon>
		<polygon points="13,3.454 13,6.546 15,6 15,4   "></polygon>
		<polygon points="4,9 6,8.454 6,1.546 4,1   "></polygon>
	</g>
</g>
</symbol>
<symbol id="ico_statistic" viewBox="0 0 16 16">
<g>
	<g>
		<polygon points="1,15 1,1 0,1 0,15 0,16 1,16 15,16 15,15   "></polygon>
		<rect x="2" y="11" width="2" height="3"></rect>
		<rect x="5" y="6" width="2" height="8"></rect>
		<rect x="8" y="3" width="2" height="11"></rect>
		<rect x="11" y="8" width="2" height="6"></rect>
	</g>
</g>
</symbol>
<symbol id="ico_sunrise_sunset" viewBox="0 0 16 16">
<g>
	<g>
		<g>
			<path d="M8,5C6.344,5,5,6.343,5,8s1.344,3,3,3s3-1.343,3-3S9.656,5,8,5z M8,10c-1.103,0-2-0.897-2-2s0.897-2,2-2     s2,0.897,2,2S9.103,10,8,10z"></path>
		</g>
		<g>
			
				<rect x="10.388" y="11.389" transform="matrix(-0.7069 -0.7073 0.7073 -0.7069 11.8845 28.7026)" width="3" height="1"></rect>
		</g>
		<g>
			
				<rect x="2.611" y="3.611" transform="matrix(0.7071 0.7071 -0.7071 0.7071 4.1113 -1.703)" width="3" height="1"></rect>
		</g>
		<g>
			
				<rect x="11.389" y="2.611" transform="matrix(0.7071 0.7071 -0.7071 0.7071 6.3893 -7.2024)" width="1" height="3"></rect>
		</g>
		<g>
			
				<rect x="3.611" y="10.389" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 -1.3881 23.2024)" width="1" height="3"></rect>
		</g>
		<g>
			<rect x="12" y="7.5" width="3" height="1"></rect>
		</g>
		<g>
			<rect x="1" y="7.5" width="3" height="1"></rect>
		</g>
		<g>
			<rect x="7.5" y="1" width="1" height="3"></rect>
		</g>
		<g>
			<rect x="7.5" y="12" width="1" height="3"></rect>
		</g>
	</g>
</g>
</symbol>
<symbol id="ico_temperature" viewBox="0 0 16 16">
<g>
	<path d="M10,8.563V2c0-1.101-0.9-2-2-2C6.899,0,6,0.899,6,2v6.563c-1.192,0.689-2,1.96-2,3.436   C4,14.209,5.791,16,8,16s3.999-1.791,3.999-4.001C11.999,10.523,11.19,9.253,10,8.563z M5,11.999c0-1.301,0.838-2.4,2-2.815V6h1   V4.999H7v-1h1v-1H7V2c0-0.552,0.448-1,1-1c0.551,0,1,0.448,1,1v7.184c1.162,0.415,2,1.515,2,2.815H5z"></path>
</g>
</symbol>
<symbol id="ico_temperature_profile" viewBox="0 0 16 16">
<g>
	<path d="M10,8.564V2c0-1.101-0.9-2-2-2C6.899,0,6,0.899,6,2v6.564c-1.192,0.689-2,1.959-2,3.435   C4,14.209,5.791,16,8,16s3.999-1.791,3.999-4.001C11.999,10.523,11.19,9.253,10,8.564z M5,11.999c0-1.3,0.838-2.4,2-2.815V6h1   V4.999H7v-1h1v-1H7V2c0-0.552,0.448-1,1-1c0.551,0,1,0.448,1,1v7.184c1.162,0.415,2,1.515,2,2.815H5z"></path>
</g>
</symbol>
<symbol id="ico_tide" viewBox="0 0 16 16">
<g>
	<g>
		<polygon points="11.353,1.921 11.353,7.162 12.353,7.162 12.353,1.921 14.292,3.86 14.999,3.153 11.853,0.007     8.707,3.153 9.414,3.86   "></polygon>
		<polygon points="7.292,4.016 6.585,3.309 4.646,5.248 4.646,0.007 3.646,0.007 3.646,5.248 1.707,3.309 1,4.016     4.146,7.162   "></polygon>
		<path d="M12.215,14.396c-0.805,0.803-1.49,0.803-2.293,0c-1.179-1.178-2.493-1.18-3.703-0.003    c-0.807,0.783-1.496,0.783-2.303,0c-1.227-1.194-2.471-1.194-3.697,0C0.145,14.465,0.072,14.521,0,14.582v1.18    c0.311-0.145,0.617-0.361,0.916-0.652c0.84-0.817,1.465-0.817,2.303,0c1.193,1.158,2.506,1.158,3.697,0    c0.83-0.807,1.496-0.807,2.299-0.006C9.812,15.701,10.439,16,11.068,16c0.627,0,1.256-0.299,1.854-0.896    c0.802-0.801,1.468-0.801,2.297,0.006c0.26,0.251,0.521,0.429,0.781,0.562v-1.207c-0.028-0.025-0.055-0.045-0.084-0.072    C14.689,13.199,13.41,13.201,12.215,14.396z"></path>
		<path d="M15.916,10.393c-1.227-1.194-2.506-1.192-3.701,0.003c-0.805,0.803-1.49,0.803-2.293,0    c-1.179-1.178-2.493-1.18-3.703-0.003c-0.807,0.783-1.496,0.783-2.303,0c-1.227-1.194-2.471-1.194-3.697,0    C0.145,10.465,0.072,10.521,0,10.582v1.18c0.311-0.145,0.617-0.361,0.916-0.652c0.84-0.817,1.465-0.817,2.303,0    c1.193,1.158,2.506,1.158,3.697,0c0.83-0.807,1.496-0.807,2.299-0.006C9.812,11.701,10.439,12,11.068,12    c0.627,0,1.256-0.299,1.854-0.896c0.802-0.801,1.468-0.801,2.297,0.006c0.26,0.251,0.521,0.429,0.781,0.562v-1.207    C15.972,10.44,15.945,10.42,15.916,10.393z"></path>
	</g>
</g>
</symbol>
<symbol id="ico_timezone" viewBox="0 0 16 16">
<g>
	<g>
		<path d="M8,0C3.582,0,0,3.582,0,8s3.582,8,8,8s8-3.582,8-8S12.418,0,8,0z M8,15c-3.859,0-7-3.141-7-7s3.141-7,7-7    s7,3.141,7,7S11.859,15,8,15z"></path>
		<path d="M8.5,7.793V4.472c0-0.276-0.224-0.5-0.5-0.5s-0.5,0.224-0.5,0.5v3.735l3.91,3.91    c0.098,0.098,0.226,0.146,0.354,0.146s0.256-0.049,0.354-0.146c0.195-0.195,0.195-0.512,0-0.707L8.5,7.793z"></path>
	</g>
</g>
</symbol>
<symbol id="ico_tip" viewBox="0 0 16 16">
<g>
	<g>
		<path d="M10,12H6c-0.276,0-0.5,0.224-0.5,0.5S5.724,13,6,13h4c0.276,0,0.5-0.224,0.5-0.5S10.276,12,10,12z"></path>
		<path d="M9.5,14h-3C6.224,14,6,14.224,6,14.5S6.224,15,6.5,15h3c0.276,0,0.5-0.224,0.5-0.5S9.776,14,9.5,14z"></path>
		<path d="M8,0C5.238,0,3,2.238,3,5c0,1.631,0.793,3.064,2,3.978V10.5C5,10.775,5.225,11,5.5,11h5    c0.275,0,0.5-0.225,0.5-0.5V8.978C12.207,8.064,13,6.631,13,5C13,2.238,10.762,0,8,0z M10.396,8.18    C10.146,8.369,10,8.664,10,8.978V10H6V8.978C6,8.664,5.854,8.369,5.604,8.18C4.584,7.409,4,6.25,4,5c0-2.206,1.795-4,4-4    s4,1.794,4,4C12,6.25,11.416,7.409,10.396,8.18z"></path>
	</g>
</g>
</symbol>
<symbol id="ico_top_forecast" viewBox="0 0 16 16">
<g>
	<path d="M13,3c0-1.606,0-2,0-2H8H3c0,0,0,0.394,0,2H0v4c0,0,0.009,1.691,3.129,1.96C3.317,9.787,3.79,10.395,5,11   c3,1,1.844,3,1,3c-0.204,0-1,0-1,1H3v1h10v-1h-2c0-1-0.796-1-1-1c-0.844,0-2-2,1-3c1.21-0.605,1.683-1.213,1.871-2.04   C15.991,8.691,16,7,16,7V3H13z M3,7v0.948C1.549,7.783,1.055,7.266,1,6.959V4h2V7z M9.671,8.013L7.919,6.88L6.316,8.013   l0.565-1.899L5.326,4.955h2.006L7.919,3l0.749,1.955h2.006L8.955,6.114L9.671,8.013z M15,6.959c-0.055,0.307-0.549,0.824-2,0.989V7   V4h2V6.959z"></path>
</g>
</symbol>
<symbol id="ico_twitter" viewBox="0 0 16 16">
<g>
	<g>
		<g>
			<path d="M15.559,1.437c-0.635,0.371-1.338,0.641-2.086,0.785C12.875,1.593,12.021,1.2,11.077,1.2     c-1.812,0-3.282,1.447-3.282,3.232c0,0.253,0.029,0.5,0.084,0.736c-2.728-0.134-5.146-1.42-6.765-3.376     C0.832,2.269,0.67,2.825,0.67,3.418c0,1.12,0.58,2.108,1.46,2.688C1.592,6.088,1.086,5.944,0.644,5.703c0,0.012,0,0.026,0,0.041     c0,1.564,1.132,2.87,2.634,3.168C3.001,8.986,2.711,9.024,2.411,9.024c-0.212,0-0.416-0.02-0.617-0.059     c0.419,1.284,1.63,2.219,3.065,2.244c-1.123,0.867-2.537,1.383-4.076,1.383c-0.266,0-0.526-0.015-0.783-0.043     C1.453,13.465,3.18,14,5.032,14c6.038,0,9.339-4.922,9.339-9.194c0-0.139-0.002-0.279-0.008-0.418     c0.64-0.455,1.197-1.023,1.637-1.671c-0.588,0.256-1.221,0.429-1.885,0.507C14.793,2.825,15.312,2.192,15.559,1.437z"></path>
		</g>
	</g>
</g>
</symbol>
<symbol id="ico_up" viewBox="0 0 16 16">
<g>
	<g transform="translate(16, 0) rotate(90)">
		<polygon points="12,1 4,8 12,15   "></polygon>
	</g>
</g>
</symbol>
<symbol id="ico_vimeo" viewBox="0 0 16 16">
<g>
	<g>
		<g>
			<path d="M8.812,9.775c-0.445,0-0.789-1.16-1.3-3.188C6.984,4.49,6.988,0.714,4.792,1.142     C2.721,1.546,0,4.773,0,4.773L0.649,5.62c0,0,1.341-1.05,1.788-0.524c0.446,0.524,2.151,6.857,2.721,8.026     c0.498,1.026,1.867,2.382,3.37,1.412c1.503-0.967,6.498-5.203,7.392-10.205c0.895-5.002-6.011-3.954-6.742,0.403     c1.828-1.091,2.805,0.443,1.869,2.179C10.113,8.645,9.26,9.775,8.812,9.775z"></path>
		</g>
	</g>
</g>
</symbol>
<symbol id="ico_warning" viewBox="0 0 16 16">
<g><g><path d="M8,0c-4.418,0-8,3.582-8,8s3.582,8,8,8,8-3.582,8-8-3.58-8-8-8zm0,15c-3.859,0-7-3.141-7-7s3.141-7,7-7,7,3.141,7,7-3.14,7-7,7z"></path><path d="m8,13c0.2957,0,0.5443-0.09376,0.7419-0.2812,0.1988-0.1888,0.2982-0.4167,0.2982-0.6875,0-0.2812-0.09943-0.5235-0.2982-0.7266-0.198-0.2-0.446-0.3-0.742-0.3-0.2843,0-0.5189,0.1016-0.7024,0.3047s-0.2754,0.4454-0.2754,0.7266c0,0.2708,0.09178,0.5,0.2766,0.6875,0.181,0.19,0.417,0.28,0.7,0.28z"></path><rect ry="0.6574" height="7" width="2" y="3" x="7"></rect></g></g>
</symbol>
<symbol id="ico_water_temperature" viewBox="0 0 16 16">
<g>
	<g>
		<path d="M6.001,8.563V2c0-1.101-0.9-2-2-2c-1.101,0-2,0.899-2,2v6.563c-1.192,0.689-2,1.96-2,3.436    c0,2.21,1.791,4.001,4,4.001S8,14.209,8,11.999C8,10.523,7.191,9.253,6.001,8.563z M1.001,11.999c0-1.301,0.838-2.4,2-2.815V6h1    V4.999h-1v-1h1v-1h-1V2c0-0.552,0.448-1,1-1c0.551,0,1,0.448,1,1v7.184c1.162,0.415,2,1.515,2,2.815H1.001z"></path>
		<path d="M15.219,1.895c-0.807,0.784-1.496,0.784-2.303,0c-1.227-1.193-2.471-1.193-3.697,0    C9.145,1.967,9.072,2.024,9,2.084v1.18C9.311,3.12,9.617,2.903,9.916,2.612c0.84-0.816,1.465-0.816,2.303,0    c1.193,1.158,2.506,1.158,3.697,0C15.944,2.584,15.972,2.564,16,2.539V1.318C15.736,1.461,15.475,1.646,15.219,1.895z"></path>
		<path d="M12.916,5.895c-1.227-1.193-2.471-1.193-3.697,0C9.145,5.967,9.072,6.024,9,6.084v1.18    C9.311,7.12,9.617,6.903,9.916,6.612c0.84-0.816,1.465-0.816,2.303,0c1.193,1.158,2.506,1.158,3.697,0    C15.944,6.584,15.972,6.564,16,6.539V5.318c-0.264,0.143-0.525,0.328-0.781,0.576C14.412,6.678,13.723,6.678,12.916,5.895z"></path>
	</g>
</g>
</symbol>
<symbol id="ico_wave" viewBox="0 0 16 16">
<g>
	<path d="M11.441,3.562c-1.52-1.065-3.258-1.447-5.093-1.198c-2.143,0.291-3.979,2.09-4.496,4.325   C1.76,7.089,1.74,7.506,1.675,8.002C1.995,7.6,2.211,7.267,2.486,6.994c0.599-0.594,1.321-0.696,2.102-0.417   C5.37,6.857,5.716,7.472,5.803,8.25c0.217,1.937-0.878,3.225-2.807,3.562C1.974,11.99,0.914,11.788,0,11.346V16h16v-3   C16,11.446,15.406,6.234,11.441,3.562z"></path>
</g>
</symbol>
<symbol id="ico_webcam" viewBox="0 0 16 16">
<g>
	<g>
		<path d="M15.626,4.134c-0.237-0.158-0.548-0.177-0.851-0.051L10,7V4.139C10,3.511,9.49,3,8.863,3H1.139    C0.512,3,0.002,3.511,0.002,4.139v8.723c0,0.628,0.51,1.139,1.137,1.139h7.725C9.49,14,10,13.489,10,12.861V10l4.775,2.917    C14.908,12.973,15.042,13,15.171,13c0.165,0,0.321-0.045,0.455-0.134C15.863,12.707,16,12.128,16,11.8V4.9    C16.001,4.572,15.864,4.293,15.626,4.134z"></path>
	</g>
</g>
</symbol>
<symbol id="ico_wg" viewBox="0 0 16 16">
<g transform="matrix(1,0,0,1.0971205,0,-0.86598279)">
  <path fill-rule="nonzero" d="M7.945,2.612c-3.169,0.02-5.953,1.469-6.409,3.704-0.8691,4.264,6.128,6.034,9.554,4.204-1.329,2.41-6.968,2.16-11.09-0.82,4.371,5.79,13.6,4.39,14.46,0.15,0.86-4.241-6.126-6.031-9.546-4.209,1.325-2.409,6.966-2.16,11.09,0.819-1.91-2.531-4.75-3.688-7.418-3.832-0.214-0.012-0.426-0.016-0.637-0.015z"></path>
 </g>
</symbol>
<symbol id="ico_wind" viewBox="0 0 16 16">
<g>
	<polygon points="13.878,3.743 13.503,2.815 2,7.803 2,14 3,14 3,8.478 5,7.607 5,12 6,12 6,7.172  "></polygon>
</g>
</symbol>
<symbol id="ico_wind_profile" viewBox="0 0 16 16">
<g>
	<polygon points="13.878,3.743 13.503,2.816 2,7.803 2,14 3,14 3,8.478 5,7.607 5,12 6,12 6,7.172  "></polygon>
</g>
</symbol>
<symbol id="ico_youtube" viewBox="0 0 16 16">
<g>
	<g>
		<g id="Lozenge_1_">
			<g>
				<path d="M15.84,4.532c0,0-0.157-1.151-0.636-1.656c-0.608-0.664-1.291-0.669-1.603-0.706      C11.361,2,8.004,2,8.004,2H7.997c0,0-3.359,0-5.599,0.17C2.086,2.207,1.404,2.212,0.795,2.876      C0.316,3.381,0.16,4.532,0.16,4.532S0,5.882,0,7.232v1.263c0,1.353,0.16,2.704,0.16,2.704s0.156,1.148,0.635,1.654      c0.609,0.665,1.41,0.644,1.766,0.713C3.84,13.694,8,13.734,8,13.734s3.361-0.007,5.602-0.175      c0.312-0.038,0.994-0.042,1.603-0.706c0.479-0.506,0.636-1.654,0.636-1.654S16,9.849,16,8.496V7.232      C16,5.882,15.84,4.532,15.84,4.532z M5.021,11.474l-0.003-7.57L12,7.701L5.021,11.474z"></path>
			</g>
		</g>
	</g>
</g>
</symbol>
<symbol id="ico_zoom_in" viewBox="0 0 16 16">
<g>
	<g>
		<g>
			<path d="M16,14.215l-3.262-3.242c0.803-1.134,1.279-2.513,1.279-4.005C14.018,3.12,10.879,0,7.008,0     C3.138,0,0,2.805,0,6.653s3.138,7.283,7.008,7.283c1.453,0,2.803-0.439,3.922-1.191L14.204,16L16,14.215z M1.967,6.653     c0-2.678,2.168-4.696,5.041-4.696c2.78,0,5.042,2.248,5.042,5.011c0,2.765-2.262,5.013-5.042,5.013     C4.323,11.98,1.967,9.491,1.967,6.653z"></path>
		</g>
		<g>
			<rect x="6" y="3.999" width="2" height="6"></rect>
		</g>
		<g>
			<rect x="4" y="5.999" width="6" height="2"></rect>
		</g>
	</g>
</g>
</symbol>
<symbol id="ico_zoom_out" viewBox="0 0 16 16">
<g>
	<g>
		<g>
			<path d="M16,14.215l-3.262-3.242c0.803-1.134,1.279-2.513,1.279-4.005C14.018,3.12,10.879,0,7.008,0     C3.138,0,0,2.805,0,6.653s3.138,7.283,7.008,7.283c1.453,0,2.803-0.439,3.922-1.191L14.204,16L16,14.215z M1.967,6.653     c0-2.678,2.168-4.696,5.041-4.696c2.78,0,5.042,2.248,5.042,5.011c0,2.765-2.262,5.013-5.042,5.013     C4.323,11.98,1.967,9.491,1.967,6.653z"></path>
		</g>
		<g>
			<rect x="4" y="5.999" width="6" height="2"></rect>
		</g>
	</g>
</g>
</symbol>
<symbol id="ico_2d" viewBox="0 0 16 16">
<g>
	<g>
		<rect x="2" width="12" height="2"></rect>
		<rect x="2" y="7" width="12" height="2"></rect>
		<rect x="2" y="14" width="12" height="2"></rect>
		<rect x="2" y="3" width="6" height="1"></rect>
		<rect x="2" y="5" width="6" height="1"></rect>
		<rect x="2" y="10" width="6" height="1"></rect>
		<rect x="2" y="12" width="6" height="1"></rect>
	</g>
</g>
</symbol>
</svg>
</div>
<header id="header"> <!-- Horní lišta s logen a větou -->
    
<nav id="nav-windguru"><!-- Navigační lišta s levým a pravým menu -->
    
<a id="menu-button" class="main-mini-menu-icon collapsed"><svg class="icon light"><use xlink:href="#ico_menu"></use></svg>&nbsp;</a>
<a id="menu-button-news" class="menu-news main-mini-menu-icon" style="" href="javascript:void(0)"><svg class="icon light"><use xlink:href="#ico_new"></use></svg></a>

<div id="div_search_top"><!-- Autocomplete-->
<a href="https://www.windguru.cz/"><div class="logoleft"></div></a> 
<div class="search_placeholder">&nbsp;search spots...</div>
<input class="wg-guide" data-guide-priority="1" data-guide-src="qsearch.php" type="search" tabindex="-1" placeholder="" name="searchspot" id="searchspot">
</div>
<style>
    #sets-menu {
        min-width: 280px !important;
    }
</style>
<ul id="wg-main-menu" class="wg-main-menu sm sm-simple sm-simple-collapsible collapsed" data-smartmenus-id="15448874658281082">
        
  <li class="wg-guide wg-guide-global hide_touch_bm_mobile" data-guide-priority="20" data-guide-src="maps-menu.php"><a href="javascript:void(0)" class="mainmenu has-submenu" id="showmap" aria-haspopup="true" aria-controls="sm-15448874658281082-1" aria-expanded="false"><svg class="icon light"><use xlink:href="#ico_map"></use></svg><span class="small-tablet-hide collapsed-show"> Maps</span></a>
    <ul id="sm-15448874658281082-1" role="group" aria-hidden="true" aria-labelledby="showmap" aria-expanded="false">
          <li><a data-navig="showMapFcst"><svg class="icon"><use xlink:href="#ico_forecast_map"></use></svg><span class=""> Forecasts</span></a>
          </li>
          <li><a data-navig="showMapSpots"><svg class="icon"><use xlink:href="#ico_spot_map"></use></svg><span class=""> Spots</span></a>
          </li>
          <li><a data-navig="showMapStations"><svg class="icon"><use xlink:href="#ico_station_map"></use></svg><span class=""> Stations</span></a>
          </li>
    </ul>  
  </li>
  <li><a href="javascript:void(0)" class="mainmenu has-submenu" id="sm-15448874658281082-2" aria-haspopup="true" aria-controls="sm-15448874658281082-3" aria-expanded="false"><svg class="icon light"><use xlink:href="#ico_menu"></use></svg><span class="tablet-hide collapsed-show"> More...</span></a>
    <ul id="sm-15448874658281082-3" role="group" aria-hidden="true" aria-labelledby="sm-15448874658281082-2" aria-expanded="false">
       <li><a href="https://www.windguru.cz/top.php" data-ajax="1"><svg class="icon"><use xlink:href="#ico_top_forecast"></use></svg> Top forecasts</a></li>
      <li><a href="https://www.windguru.cz/archive.php" data-ajax="1" data-addclass="menusize-1"><svg class="icon"><use xlink:href="#ico_archive"></use></svg> Archive</a></li>
      <li><a href="https://www.windguru.cz/archive-stats.php" data-ajax="1" data-addclass="menusize-1"><svg class="icon"><use xlink:href="#ico_statistic"></use></svg> Statistics</a></li>
      <li><a href="https://www.windguru.cz/archive-top.php" data-ajax="1" data-addclass="menusize-1"><svg class="icon"><use xlink:href="#ico_top_forecast"></use></svg> Top spots</a></li>
      <li><a href="https://www.windguru.cz/tides.php" data-ajax="1"><svg class="icon"><use xlink:href="#ico_tide"></use></svg> Tides</a></li>
      <li><a href="https://old.windguru.cz/"><svg class="icon"><use xlink:href="#ico_left"></use></svg> Old Windguru</a></li>
        <li class="min-small-tablet-hide collapsed-hide"><a href="https://www.windguru.cz/pro.php" data-ajax="1" data-addclass="hcenter vcenter"><svg class="icon"><use xlink:href="#ico_wg"></use></svg><span class=""> Windguru PRO</span></a>
        </li>
        <li class="min-small-tablet-hide collapsed-hide"><a href="https://www.windguru.cz/apps.php" data-ajax="1" data-addclass="hcenter vcenter" data-showurl="/apps.php"><svg class="icon"><use xlink:href="#ico_phone"></use></svg><span class=""> Mobile Apps</span></a>
        </li>
        <li class="min-small-tablet-hide collapsed-hide"><a href="https://www.windguru.cz/directory.php?utm_source=menu" data-ajax="1" data-addclass="hcenter vcenter" data-showurl="/directory.php"><svg class="icon"><use xlink:href="#ico_center"></use></svg><span class=""> Windguru Directory</span></a>
        </li>
        <li class="min-small-tablet-hide collapsed-hide"><a onclick="WG.forecastWidget();"><svg class="icon"><use xlink:href="#ico_share"></use></svg><span class=""> Forecast widgets</span></a>
        </li>
        <li class="min-small-tablet-hide collapsed-hide"><a href="http://stations.windguru.cz/"><svg class="icon"><use xlink:href="#ico_station_map"></use></svg><span class=""> Windguru Station</span></a>
        </li>
   </ul>  
  </li>
  <li class="small-tablet-hide collapsed-show"><a href="javascript:void(0)" class="mainmenu has-submenu" id="sm-15448874658281082-4" aria-haspopup="true" aria-controls="sm-15448874658281082-5" aria-expanded="false"><svg class="icon light"><use xlink:href="#ico_wg"></use></svg><span class="tablet-hide collapsed-show"> PROducts</span></a>
    <ul id="sm-15448874658281082-5" role="group" aria-hidden="true" aria-labelledby="sm-15448874658281082-4" aria-expanded="false">
        <li><a href="https://www.windguru.cz/pro.php" data-ajax="1" data-addclass="hcenter vcenter"><svg class="icon"><use xlink:href="#ico_wg"></use></svg><span class=""> Windguru PRO</span></a>
        </li>
        <li><a href="https://www.windguru.cz/apps.php" data-ajax="1" data-addclass="hcenter vcenter"><svg class="icon"><use xlink:href="#ico_phone"></use></svg><span class=""> Mobile Apps</span></a>
        </li>
        <li><a href="https://www.windguru.cz/directory.php?utm_source=menu" data-ajax="1" data-addclass="hcenter vcenter" data-showurl="/directory.php"><svg class="icon"><use xlink:href="#ico_center"></use></svg><span class=""> Windguru Directory</span></a>
        </li>
        <li><a onclick="WG.forecastWidget();"><svg class="icon"><use xlink:href="#ico_share"></use></svg><span class=""> Forecast widgets</span></a>
        </li>
        <li><a href="http://stations.windguru.cz/"><svg class="icon"><use xlink:href="#ico_station_map"></use></svg><span class=""> Windguru Station</span></a>
        </li>
    </ul>  
  </li>
  <li class="collapsed-show"><a class="mainmenu has-submenu" id="sm-15448874658281082-6" aria-haspopup="true" aria-controls="sm-15448874658281082-7" aria-expanded="false"><svg class="icon light"><use xlink:href="#ico_help"></use></svg><span class="small-screen-hide collapsed-show"> Help</span></a>
    <ul id="sm-15448874658281082-7" role="group" aria-hidden="true" aria-labelledby="sm-15448874658281082-6" aria-expanded="false">
       <li><a href="https://www.windguru.cz/news.php" data-ajax="1" data-addclass="hcenter vcenter"><svg class="icon"><use xlink:href="#ico_new"></use></svg> News</a></li>
        <li><a class="click-menu-hide" data-navig="showGuide"><svg class="icon"><use xlink:href="#ico_help"></use></svg> Quick guide</a>
        </li>
        <li><a href="https://www.windguru.cz/help.php" data-ajax="1" data-addclass="hcenter vcenter"><svg class="icon"><use xlink:href="#ico_model_selection"></use></svg><span class=""> Help section</span></a>
        </li>
        <li><a class="click-menu-hide" data-navig="keyboardShortcuts"><svg class="icon"><use xlink:href="#ico_more_02"></use></svg><span class=""> Keyboard shortcuts</span></a>
        </li>
        <li><a href="https://www.windguru.cz/index.php?s=76&amp;intro=1"><svg class="icon"><use xlink:href="#ico_info"></use></svg><span class=""> New site intro</span></a>
        </li>
    </ul>       
  </li>
</ul>

<a href="https://www.windguru.cz/" class="medium-screen-hide"><svg class="logoright" src=""></svg></a>  

<ul id="wg-main-menu2" class="wg-main-menu sm sm-simple sm-simple-collapsible collapsed" style="float: right;" data-smartmenus-id="15448874658330303">
  <li class="menu-news" id="menu-button-news2"><a class="mainmenu" href="javascript:void(0)"><svg class="icon light"><use xlink:href="#ico_new"></use></svg><span class="small-screen-hide collapsed-show"> News</span></a></li>

  <li><a class="mainmenu modal-form" id="wg-options" data-q="set_options" data-title="Options" href="https://www.windguru.cz/forms/options.php"><svg class="icon light"><use xlink:href="#ico_options"></use></svg><span class="big-tablet-hide collapsed-show"> Options</span></a></li>
  <li class="wg-guide wg-guide-global" data-guide-priority="2" data-guide-src="login.php">
    <a href="javascript:WG.user.loginWindow();" class="mainmenu" id="wg_login_link"><svg class="icon light"><use xlink:href="#ico_account"></use></svg><span class="tablet-hide collapsed-show"> Login</span></a>
  </li>  
  <li class="small-mobile-hide collapsed-show"><a href="javascript:void(0)" class="mainmenu has-submenu" id="sm-15448874658330303-1" aria-haspopup="true" aria-controls="sm-15448874658330303-2" aria-expanded="false"><img class="langflag w480-hide collapsed-show" src="Nazare_16_18_files/en.png"><span class="small-mobile-hide collapsed-show">en</span></a>
    <ul id="sm-15448874658330303-2" role="group" aria-hidden="true" aria-labelledby="sm-15448874658330303-1" aria-expanded="false"><li><a href="https://www.windguru.cz/switchlang.php?lang=baq"><img class="langflag" src="Nazare_16_18_files/baq.png" alt="baq">Basque</a></li>
<li><a href="https://www.windguru.cz/switchlang.php?lang=bg"><img class="langflag" src="Nazare_16_18_files/bg.png" alt="bg">Bulgarian</a></li>
<li><a href="https://www.windguru.cz/switchlang.php?lang=cat"><img class="langflag" src="Nazare_16_18_files/cat.png" alt="cat">Catalan</a></li>
<li><a href="https://www.windguru.cz/switchlang.php?lang=cz"><img class="langflag" src="Nazare_16_18_files/cz.png" alt="cz">Czech</a></li>
<li><a href="https://www.windguru.cz/switchlang.php?lang=dk"><img class="langflag" src="Nazare_16_18_files/dk.png" alt="dk">Danish</a></li>
<li><a href="https://www.windguru.cz/switchlang.php?lang=nl"><img class="langflag" src="Nazare_16_18_files/nl.png" alt="nl">Dutch</a></li>
<li><a href="https://www.windguru.cz/switchlang.php?lang=en"><img class="langflag" src="Nazare_16_18_files/en.png" alt="en">English</a></li>
<li><a href="https://www.windguru.cz/switchlang.php?lang=ee"><img class="langflag" src="Nazare_16_18_files/ee.png" alt="ee">Estonian</a></li>
<li><a href="https://www.windguru.cz/switchlang.php?lang=fi"><img class="langflag" src="Nazare_16_18_files/fi.png" alt="fi">Finnish</a></li>
<li><a href="https://www.windguru.cz/switchlang.php?lang=fr"><img class="langflag" src="Nazare_16_18_files/fr.png" alt="fr">French</a></li>
<li><a href="https://www.windguru.cz/switchlang.php?lang=gl"><img class="langflag" src="Nazare_16_18_files/gl.png" alt="gl">Galician</a></li>
<li><a href="https://www.windguru.cz/switchlang.php?lang=de"><img class="langflag" src="Nazare_16_18_files/de.png" alt="de">German</a></li>
<li><a href="https://www.windguru.cz/switchlang.php?lang=hu"><img class="langflag" src="Nazare_16_18_files/hu.png" alt="hu">Hungarian</a></li>
<li><a href="https://www.windguru.cz/switchlang.php?lang=it"><img class="langflag" src="Nazare_16_18_files/it.png" alt="it">Italian</a></li>
<li><a href="https://www.windguru.cz/switchlang.php?lang=lv"><img class="langflag" src="Nazare_16_18_files/lv.png" alt="lv">Latvian</a></li>
<li><a href="https://www.windguru.cz/switchlang.php?lang=lt"><img class="langflag" src="Nazare_16_18_files/lt.png" alt="lt">Lithuanian</a></li>
<li><a href="https://www.windguru.cz/switchlang.php?lang=pl"><img class="langflag" src="Nazare_16_18_files/pl.png" alt="pl">Polish</a></li>
<li><a href="https://www.windguru.cz/switchlang.php?lang=pt"><img class="langflag" src="Nazare_16_18_files/pt.png" alt="pt">Portuguese</a></li>
<li><a href="https://www.windguru.cz/switchlang.php?lang=ro"><img class="langflag" src="Nazare_16_18_files/ro.png" alt="ro">Romanian</a></li>
<li><a href="https://www.windguru.cz/switchlang.php?lang=ru"><img class="langflag" src="Nazare_16_18_files/ru.png" alt="ru">Russian</a></li>
<li><a href="https://www.windguru.cz/switchlang.php?lang=es"><img class="langflag" src="Nazare_16_18_files/es.png" alt="es">Spanish</a></li>
<li><a href="https://www.windguru.cz/switchlang.php?lang=se"><img class="langflag" src="Nazare_16_18_files/se.png" alt="se">Swedish</a></li>
<li><a href="https://www.windguru.cz/switchlang.php?lang=tr"><img class="langflag" src="Nazare_16_18_files/tr.png" alt="tr">Turkish</a></li>
</ul>  
  </li>  
</ul>

</nav>
  
</header>

<div id="minimap" class=""></div>
<div id="news-div" class=""></div>

<div id="forecasts-page" class="subsection content hide">
    <div id="warning-content"></div>
    <div id="forecasts-page-content"></div><div class="end"></div><div id="forecasts-page-fmenu"></div>
    <div id="bottom-menu-forecasts" class="forecasts-page-include menu fixed bottom higher dark subsection hide">
        <a class="menu-button" onclick="WGA.goSearch();"><svg class="icon light"><use xlink:href="#ico_search"></use></svg><span class=""> Search</span></a>
        <a class="menu-button showfavo"><svg class="icon light"><use xlink:href="#ico_favourite"></use></svg><span class=""> Favourites</span></a>
        <a href="javascript:void(0)" class="menu-button" data-navig="showMapFcst" id="showmap"><svg class="icon light"><use xlink:href="#ico_map"></use></svg><span class="small-tablet-hide collapsed-show"> Maps</span></a>
        <a class="menu-button" onclick="WGA.options();"><svg class="icon light"><use xlink:href="#ico_options"></use></svg><span class="big-tablet-hide collapsed-show"> Options</span></a>    </div>     
</div>    

<div id="main-page" class="subsection content menusize-1">
    <div id="main-page-content"><script>
if(WG.user.id_user && WG.user.id_user != 0) { location.reload(); }
</script>
<script type="text/javascript">

WG.archive = {};


$(function(){

    WG.archive.history = function(month) {
        var from = moment(picker1.value);
        var to = moment(picker2.value);
        if(month > 0) {
            from.add(Math.abs(month),'months');
            to.add(Math.abs(month),'months');
        }
        else if(month < 0) {
            from.subtract(Math.abs(month),'months');
            to.subtract(Math.abs(month),'months');
        }
        if(month) {
            picker1.setDate(from);
            picker2.setDate(to);
        }
        var data = $('#archive_filter').serializeArray();
        var $target = $("#archive_results");
        //$target.prepend("<div class=\"spinner\"></div>");
        $target.addClass("spinner").css('position','relative');
        $target.empty().load('/ajax/ajax_archive.php',data,function(){
            $target.removeClass("spinner");
        });
    }

    var picker1 = pikadayResponsive(document.getElementById("date_from"),{
        outputFormat: "YYYY-MM-DD",
        checkIfNativeDate:  WG.isNativeDate
    });
    var picker2 = pikadayResponsive(document.getElementById("date_to"),{
        outputFormat: "YYYY-MM-DD",
        checkIfNativeDate:  WG.isNativeDate
    });
    
    // aktivace search - autocomplete:
    //$('#searchspot').hide();
    //$('#searcharch').show();
    var spot_complete = WgComplete.qspot('searcharch',{
        all: false,
        custom: false,
        favourite: true,
        my: false,
        stations: false,
        nearby_wg: 50,
        //width: sirka_napovidace,
        max_height: $(window).height()-60,
        appendToSelector: '#searchdiv',
        on_select: function (suggestion) {
            $('#searcharch').blur();
            WG.loadAjaxContent('archive.php?id_spot='+suggestion.data,'menusize-1');
        },
        map: true
    });    
    //$('#svgsearchicon').off('click').on('click',function(){$('#searcharch').focus();}); // kliknuti na ikonu hledani => focus na hledaci pole
    
    
    WG.archive.history();
    if(WG.HIDDENSCROLL) return; // pokud jsem HIDDENSCROLL nicescroll netreba

    $('#archive_results').niceScroll({
        enablemousewheel: false,
        preventmultitouchscrolling: false,
        //enabletranslate3d: false,
        //railpadding: { top: 4 },
        //railoffset: { top: "2px" },
        touchbehavior: true,
        cursoropacitymin:0.0,
        //cursoropacitymax: 0.5
        cursorwidth:"3px",
        cursorcolor:"#D8D8D8",
        cursorborder:"0px solid #E7E7E7",
        cursorborderradius:"0px"
    });     
    
}); 

</script> 
<style type="text/css">
    #archive_results {
        padding: 10px;
        background-color: #fff;
        display: block;
        overflow-x: auto;
    }
    


</style>
<div class="menu fixed">
     <ul class="sm sm-simple sm-wg-inline" data-smartmenus-id="15448874658357832">
      <li><a class="active" href="https://www.windguru.cz/archive.php?id_spot=75856&amp;id_model=3" data-ajax="1" data-addclass="menusize-1"><svg class="icon"><use xlink:href="#ico_archive"></use></svg><span class="mobile-hide"> Archive</span></a></li>
      <li><a class="" href="https://www.windguru.cz/archive-stats.php?id_spot=75856&amp;id_model=3" data-ajax="1" data-addclass="menusize-1"><svg class="icon"><use xlink:href="#ico_statistic"></use></svg><span class="mobile-hide"> Statistics</span></a></li>
      <li><a class="" href="https://www.windguru.cz/archive-top.php?id_spot=75856&amp;id_model=3" data-ajax="1" data-addclass="menusize-1"><svg class="icon"><use xlink:href="#ico_top_forecast"></use></svg><span class="mobile-hide"> Top spots</span></a></li>
      <li><a class="has-submenu" id="sm-15448874640706914-1" aria-haspopup="true" aria-controls="sm-15448874640706914-2" aria-expanded="false"><svg class="icon mobile-hide"><use xlink:href="#ico_model_selection"></use></svg> GFS 27 km</a>
        <ul id="sm-15448874640706914-2" role="group" aria-hidden="true" aria-labelledby="sm-15448874640706914-1" aria-expanded="false">
<li><a href="https://www.windguru.cz/archive.php?id_spot=75856&amp;id_model=3" data-ajax="1" data-addclass="menusize-1">GFS 27 km (world)</a></li>
<li><a href="https://www.windguru.cz/archive.php?id_spot=75856&amp;id_model=14" data-ajax="1" data-addclass="menusize-1">WRF 27 km (Europe)</a></li>
<li><a href="https://www.windguru.cz/archive.php?id_spot=75856&amp;id_model=21" data-ajax="1" data-addclass="menusize-1">WRF 9 km (Europe)</a></li>
<li><a href="https://www.windguru.cz/archive.php?id_spot=75856&amp;id_model=45" data-ajax="1" data-addclass="menusize-1">ICON 13 km (World)</a></li>
<li><a href="https://www.windguru.cz/archive.php?id_spot=75856&amp;id_model=43" data-ajax="1" data-addclass="menusize-1">ICON 7 km (Europe)</a></li>
<li><a href="https://www.windguru.cz/archive.php?id_spot=75856&amp;id_model=25" data-ajax="1" data-addclass="menusize-1">NWW3 50 km (waves)</a></li>
<li><a href="https://www.windguru.cz/archive.php?id_spot=75856&amp;id_model=10" data-ajax="1" data-addclass="menusize-1">NWW3 100 km (waves)</a></li>
<li><a href="https://www.windguru.cz/archive.php?id_spot=75856&amp;id_model=47" data-ajax="1" data-addclass="menusize-1">GWAM 27 km (waves) </a></li>
<li><a href="https://www.windguru.cz/archive.php?id_spot=75856&amp;id_model=46" data-ajax="1" data-addclass="menusize-1">EWAM 5 km (waves Europe) </a></li>
        </ul>
      </li>
     </ul>
</div>      
<div id="searchdiv"><input type="search" tabindex="-1" class="" style="" placeholder="search archive spots..." name="searcharch" id="searcharch"></div>

<span class="poscheck"></span><div class="spot-header"><div class="spot wg  "><a href="javascript:WG.showForecastSpot(75856);"><div class="spot-name wg-guide  " data-guide-priority="9" data-guide-src="spotname.php">Portugal - Nazaré  </div></a><div class="spotname-icons"><a class="spot-icon-link tooltip favourite-add " data-id_spot="75856" data-favourite="0"><svg class="icon"><use xlink:href="#ico_favourite"></use></svg></a></div><a class="spot-info-link min-medium-screen-hide toggle-details tooltip"><svg class="icon"><use xlink:href="#ico_info"></use></svg><span class="w480-hide"> Spot info</span></a><div class="spot-details spot-details-parts on small-tablet-hide"><ul class="sm sm-simple" data-smartmenus-id="1544887465836248"><li class="nolink tablet-hide"><svg class="icon"><use xlink:href="#ico_sunrise_sunset"></use></svg> 07:53 - 17:09</li><li class="nolink big-tablet-hide"><svg class="icon"><use xlink:href="#ico_moonrise_moonset"></use></svg> 13:07 -      </li><li class="nolink"><svg class="icon"><use xlink:href="#ico_water_temperature"></use></svg> 15 °C</li><li class="small-screen-hide"><a onclick="WG.openMiniSpotMap(this);" data-args="{&quot;lat&quot;: 39.6, &quot;lon&quot;: -9.075, &quot;zoom&quot;: 12, &quot;id_spot&quot;: 75856 }"><svg class="icon"><use xlink:href="#ico_spot_map"></use></svg> lat: 39.6, lon: -9.075, alt: 0 m</a></li><li class="nolink medium-screen-hide"><svg class="icon"><use xlink:href="#ico_timezone"></use></svg> WET (UTC +00:00)</li><li class="medium-screen-hide"><a href="https://www.windguru.cz/tides.php" data-ajax="1"><svg class="icon"><use xlink:href="#ico_tide"></use></svg> Tides </a></li> </ul></div></div><div class="spot-details spot-details-full separate"><ul class="sm sm-simple" data-smartmenus-id="15448874658362383"><li class="nolink"><svg class="icon"><use xlink:href="#ico_sunrise_sunset"></use></svg> 07:53 - 17:09</li><li class="nolink"><svg class="icon"><use xlink:href="#ico_moonrise_moonset"></use></svg> 13:07 -      </li><li class="nolink">&nbsp;<svg class="icon"><use xlink:href="#ico_water_temperature"></use></svg> 15 °C</li><li><a onclick="WG.openMiniSpotMap(this);" data-args="{&quot;lat&quot;: 39.6, &quot;lon&quot;: -9.075, &quot;zoom&quot;: 12, &quot;id_spot&quot;: 75856 }"><svg class="icon"><use xlink:href="#ico_spot_map"></use></svg> lat: 39.6, lon: -9.075, alt: 0 m</a></li><li class="nolink"><svg class="icon"><use xlink:href="#ico_timezone"></use></svg> WET (UTC +00:00)</li><li><a href="https://www.windguru.cz/tides.php" data-ajax="1"><svg class="icon"><use xlink:href="#ico_tide"></use></svg> Tides </a></li> </ul></div></div>
<div class="spot-details "><ul class="sm sm-simple" data-smartmenus-id="15448874658381768"><li class="nolink"><svg class="icon"><use xlink:href="#ico_sunrise_sunset"></use></svg> 07:53 - 17:09</li><li class="nolink"><svg class="icon"><use xlink:href="#ico_moonrise_moonset"></use></svg> 13:07 -      </li><li class="nolink"><svg class="icon"><use xlink:href="#ico_water_temperature"></use></svg> 15 °C</li><li class="nolink"><svg class="icon"><use xlink:href="#ico_timezone"></use></svg> WET (UTC +00:00)</li><li><a onclick="WG.openMiniSpotMap(this);" data-args="{&quot;lat&quot;: 39.6, &quot;lon&quot;: -9.075, &quot;zoom&quot;: 12, &quot;id_spot&quot;: 75856 }"><svg class="icon"><use xlink:href="#ico_spot_map"></use></svg> lat: 39.6, lon: -9.075, alt: 0 m</a></li><li><a href="https://www.windguru.cz/tides.php" data-ajax="1"><svg class="icon"><use xlink:href="#ico_tide"></use></svg> Tides </a></li> </ul></div>    
<form class="wg-form full" id="archive_filter">

<label class="narrow">From (YYYY-MM-DD):
        <span class="pikaday__container"><input type="hidden" id="date_from" name="date_from" value="2016-12-15"><input type="text" class="pikaday__display pikaday__display--pikaday" placeholder="Select a date" value="2016-12-15"></span>
</label>    
    
<label class="narrow">To (YYYY-MM-DD):
        <span class="pikaday__container"><input type="hidden" id="date_to" name="date_to" value="2018-12-15"><input type="text" class="pikaday__display pikaday__display--pikaday" placeholder="Select a date" value="2018-12-15"></span>
</label>    

<label class="narrow">
<select name="step">
	<option selected="selected" value="3">3 hours</option>
	<option value="6">6 hours</option>
</select>
</label>
    
<button type="button" onclick="WG.archive.history();" class="akce" value="Go"><svg class="icon inbutton"><use xlink:href="#ico_ok"></use></svg> Go</button>    
<button type="button" onclick="WG.archive.history(-1);" class="" value="Go"><svg class="icon inbutton"><use xlink:href="#ico_left"></use></svg></button>    
<button type="button" onclick="WG.archive.history(1);" class="" value="Go"><svg class="icon inbutton"><use xlink:href="#ico_right"></use></svg></button>    

<fieldset style="margin-bottom: 0px;">
<legend>Variables:</legend>    

<label class="onoff checkboxes"><input type="checkbox" name="pwindspd" checked="checked" value="1"><svg class="icon off"><use xlink:href="#ico_off"></use></svg><svg class="icon on"><use xlink:href="#ico_on_color"></use></svg> wind</label><label class="onoff checkboxes"><input type="checkbox" name="psmer" value="1"><svg class="icon off"><use xlink:href="#ico_off"></use></svg><svg class="icon on"><use xlink:href="#ico_on_color"></use></svg> wind&nbsp;dir.</label><label class="onoff checkboxes"><input type="checkbox" name="phtsgw" value="1" checked="checked"><svg class="icon off"><use xlink:href="#ico_off"></use></svg><svg class="icon on"><use xlink:href="#ico_on_color"></use></svg> waves</label><label class="onoff checkboxes"><input type="checkbox" name="pwavesmer" value="1"><svg class="icon off"><use xlink:href="#ico_off"></use></svg><svg class="icon on"><use xlink:href="#ico_on_color"></use></svg> wave&nbsp;dir.</label><label class="onoff checkboxes"><input type="checkbox" name="pperpw" value="1"><svg class="icon off"><use xlink:href="#ico_off"></use></svg><svg class="icon on"><use xlink:href="#ico_on_color"></use></svg> wave&nbsp;period</label><label class="onoff checkboxes"><input type="checkbox" name="ptmp" value="1"><svg class="icon off"><use xlink:href="#ico_off"></use></svg><svg class="icon on"><use xlink:href="#ico_on_color"></use></svg> temperature</label><label class="onoff checkboxes"><input type="checkbox" name="papcp" value="1"><svg class="icon off"><use xlink:href="#ico_off"></use></svg><svg class="icon on"><use xlink:href="#ico_on_color"></use></svg> precipitation</label><label class="onoff checkboxes"><input type="checkbox" name="ptcdc" value="1"><svg class="icon off"><use xlink:href="#ico_off"></use></svg><svg class="icon on"><use xlink:href="#ico_on_color"></use></svg> clouds</label>

</fieldset>    
<input type="hidden" id="id_spot" name="id_spot" value="75856">
<input type="hidden" id="id_model" name="id_model" value="3">
</form>    
<div id="archive_results" class="" style="position: relative; overflow: hidden; outline: currentcolor none medium; cursor: grab;" tabindex="0">        <table class="forecast-ram" cellspacing="0" cellpadding="0" border="0">
            <tbody><tr>
                <td width="100%" valign="top" align="left">
                    <table class="forecast daily-archive" cellspacing="1" cellpadding="1" border="0" bgcolor="#ffffff">
                        <tbody><tr bgcolor="#E0E0E0"><td rowspan="2" bgcolor="#E0E0E0"><span class="hlavicka"><b>GFS 27 km</b></span></td>
<td colspan="8" bgcolor="#E0E0E0">Wind speed (knots)</td>
<td colspan="8" bgcolor="#E0E0E0">Wave (m)</td>
</tr>
<tr bgcolor="#E0E0E0">
<td bgcolor="#E0E0E0">00h</td>
<td bgcolor="#E0E0E0">03h</td>
<td bgcolor="#E0E0E0">06h</td>
<td bgcolor="#E0E0E0">09h</td>
<td bgcolor="#E0E0E0">12h</td>
<td bgcolor="#E0E0E0">15h</td>
<td bgcolor="#E0E0E0">18h</td>
<td bgcolor="#E0E0E0">21h</td>
<td bgcolor="#E0E0E0">00h</td>
<td bgcolor="#E0E0E0">03h</td>
<td bgcolor="#E0E0E0">06h</td>
<td bgcolor="#E0E0E0">09h</td>
<td bgcolor="#E0E0E0">12h</td>
<td bgcolor="#E0E0E0">15h</td>
<td bgcolor="#E0E0E0">18h</td>
<td bgcolor="#E0E0E0">21h</td>
</tr>
<tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>15.12.2016</b></td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#2bfc00"><b>14</b></td>
<td style="background-color:#ffb60d"><b>21</b></td>
<td style="background-color:#ffc909"><b>20</b></td>
<td style="background-color:#8383ff"><b>3.7</b></td>
<td style="background-color:#8888ff"><b>3.6</b></td>
<td style="background-color:#8c8cff"><b>3.4</b></td>
<td style="background-color:#9191ff"><b>3.3</b></td>
<td style="background-color:#9898ff"><b>3.1</b></td>
<td style="background-color:#9a9aff"><b>3.1</b></td>
<td style="background-color:#8a8aff"><b>3.5</b></td>
<td style="background-color:#8076f6"><b>4.4</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>16.12.2016</b></td>
<td style="background-color:#e2f200"><b>18</b></td>
<td style="background-color:#d4f300"><b>18</b></td>
<td style="background-color:#ffd905"><b>20</b></td>
<td style="background-color:#ffbc0c"><b>20</b></td>
<td style="background-color:#ff5225"><b>24</b></td>
<td style="background-color:#ff2e3c"><b>25</b></td>
<td style="background-color:#ff382b"><b>25</b></td>
<td style="background-color:#ff9f13"><b>21</b></td>
<td style="background-color:#9470df"><b>5.2</b></td>
<td style="background-color:#a16cd0"><b>5.8</b></td>
<td style="background-color:#a66aca"><b>6</b></td>
<td style="background-color:#a66aca"><b>6</b></td>
<td style="background-color:#a56bcb"><b>6</b></td>
<td style="background-color:#a56bcb"><b>6</b></td>
<td style="background-color:#a46bcd"><b>5.9</b></td>
<td style="background-color:#9f6cd2"><b>5.7</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>17.12.2016</b></td>
<td style="background-color:#f1f100"><b>19</b></td>
<td style="background-color:#65f900"><b>16</b></td>
<td style="background-color:#0afe00"><b>14</b></td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#976fdb"><b>5.4</b></td>
<td style="background-color:#8e71e6"><b>5</b></td>
<td style="background-color:#8574f0"><b>4.6</b></td>
<td style="background-color:#7b77fc"><b>4.1</b></td>
<td style="background-color:#8282ff"><b>3.7</b></td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#9898ff"><b>3.1</b></td>
<td style="background-color:#a1a1ff">2.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>18.12.2016</b></td>
<td style="background-color:#5bfa00"><b>15</b></td>
<td style="background-color:#05ff00"><b>14</b></td>
<td style="background-color:#d9f200"><b>18</b></td>
<td style="background-color:#b7f400"><b>17</b></td>
<td style="background-color:#2bfc00"><b>14</b></td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#a9a9ff">2.7</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#c3c3ff">1.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>19.12.2016</b></td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#bfbfff">2</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#a0a0ff">2.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>20.12.2016</b></td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#9191ff"><b>3.3</b></td>
<td style="background-color:#9090ff"><b>3.3</b></td>
<td style="background-color:#9191ff"><b>3.3</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#9393ff"><b>3.3</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>21.12.2016</b></td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#9797ff"><b>3.2</b></td>
<td style="background-color:#9d9dff">3</td>
<td style="background-color:#a3a3ff">2.8</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#8888ff"><b>3.6</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>22.12.2016</b></td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#8484ff"><b>3.7</b></td>
<td style="background-color:#8686ff"><b>3.6</b></td>
<td style="background-color:#8a8aff"><b>3.5</b></td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#9191ff"><b>3.3</b></td>
<td style="background-color:#9393ff"><b>3.3</b></td>
<td style="background-color:#9494ff"><b>3.2</b></td>
<td style="background-color:#9494ff"><b>3.2</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>23.12.2016</b></td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#9090ff"><b>3.3</b></td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#8d8dff"><b>3.4</b></td>
<td style="background-color:#8d8dff"><b>3.4</b></td>
<td style="background-color:#8f8fff"><b>3.4</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#9797ff"><b>3.2</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>24.12.2016</b></td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#9c9cff"><b>3</b></td>
<td style="background-color:#a1a1ff">2.9</td>
<td style="background-color:#a6a6ff">2.7</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#a5a5ff">2.8</td>
<td style="background-color:#9d9dff">3</td>
<td style="background-color:#9696ff"><b>3.2</b></td>
<td style="background-color:#9494ff"><b>3.2</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>25.12.2016</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#9898ff"><b>3.1</b></td>
<td style="background-color:#9d9dff">3</td>
<td style="background-color:#a2a2ff">2.8</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#adadff">2.6</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#bcbcff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>26.12.2016</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#b8b8ff">2.2</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#a6a6ff">2.7</td>
<td style="background-color:#a8a8ff">2.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>27.12.2016</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b4b4ff">2.4</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#babaff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>28.12.2016</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d5d5ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>29.12.2016</b></td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d5d5ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d5d5ff">1.5</td>
<td style="background-color:#d6d6ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>30.12.2016</b></td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d5d5ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d2d2ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>31.12.2016</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#e0e0ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>01.01.2017</b></td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#05ff00"><b>14</b></td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#bcbcff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>02.01.2017</b></td>
<td style="background-color:#9ff600"><b>17</b></td>
<td style="background-color:#ffe602"><b>19</b></td>
<td style="background-color:#ff5923"><b>24</b></td>
<td style="background-color:#ff2759"><b>27</b></td>
<td style="background-color:#ff2a4b"><b>26</b></td>
<td style="background-color:#ffb90d"><b>21</b></td>
<td style="background-color:#ff4528"><b>24</b></td>
<td style="background-color:#ff4c26"><b>24</b></td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#a3a3ff">2.8</td>
<td style="background-color:#9393ff"><b>3.3</b></td>
<td style="background-color:#7e7eff"><b>3.8</b></td>
<td style="background-color:#7f76f7"><b>4.3</b></td>
<td style="background-color:#8375f3"><b>4.5</b></td>
<td style="background-color:#7d77f9"><b>4.2</b></td>
<td style="background-color:#7a7aff"><b>3.9</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>03.01.2017</b></td>
<td style="background-color:#ff8c17"><b>22</b></td>
<td style="background-color:#ffa312"><b>21</b></td>
<td style="background-color:#ecf100"><b>18</b></td>
<td style="background-color:#9ff600"><b>17</b></td>
<td style="background-color:#0efe00"><b>14</b></td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#16fd34"><b>13</b></td>
<td style="background-color:#8383ff"><b>3.7</b></td>
<td style="background-color:#8888ff"><b>3.6</b></td>
<td style="background-color:#8d8dff"><b>3.4</b></td>
<td style="background-color:#9494ff"><b>3.2</b></td>
<td style="background-color:#9d9dff">3</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#b6b6ff">2.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>04.01.2017</b></td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#ceceff">1.7</td>
<td style="background-color:#cfcfff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>05.01.2017</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#d1d1ff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>06.01.2017</b></td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#d9d9ff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>07.01.2017</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#d9d9ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#ddddff">1.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>08.01.2017</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#e0e0ff">1.2</td>
<td style="background-color:#e0e0ff">1.1</td>
<td style="background-color:#e0e0ff">1.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>09.01.2017</b></td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#e0e0ff">1.1</td>
<td style="background-color:#e0e0ff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#d8d8ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>10.01.2017</b></td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#0afe00"><b>14</b></td>
<td style="background-color:#8cf700"><b>16</b></td>
<td style="background-color:#ffe004"><b>19</b></td>
<td style="background-color:#ffac10"><b>21</b></td>
<td style="background-color:#ffb90d"><b>21</b></td>
<td style="background-color:#ffa611"><b>21</b></td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#cacaff">1.8</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#a2a2ff">2.8</td>
<td style="background-color:#9393ff"><b>3.3</b></td>
<td style="background-color:#8989ff"><b>3.5</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>11.01.2017</b></td>
<td style="background-color:#e2f200"><b>18</b></td>
<td style="background-color:#ecf100"><b>18</b></td>
<td style="background-color:#5bfa00"><b>15</b></td>
<td style="background-color:#26fd00"><b>14</b></td>
<td style="background-color:#0afe00"><b>14</b></td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#8686ff"><b>3.6</b></td>
<td style="background-color:#8787ff"><b>3.6</b></td>
<td style="background-color:#8d8dff"><b>3.4</b></td>
<td style="background-color:#9393ff"><b>3.3</b></td>
<td style="background-color:#9a9aff"><b>3.1</b></td>
<td style="background-color:#a1a1ff">2.9</td>
<td style="background-color:#a9a9ff">2.7</td>
<td style="background-color:#b1b1ff">2.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>12.01.2017</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#b8b8ff">2.2</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#b4b4ff">2.4</td>
<td style="background-color:#adadff">2.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>13.01.2017</b></td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#9af600"><b>17</b></td>
<td style="background-color:#ffe602"><b>19</b></td>
<td style="background-color:#e2f200"><b>18</b></td>
<td style="background-color:#cff300"><b>18</b></td>
<td style="background-color:#a4f500"><b>17</b></td>
<td style="background-color:#4dfa00"><b>15</b></td>
<td style="background-color:#73f800"><b>16</b></td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#a6a6ff">2.7</td>
<td style="background-color:#9f9fff">2.9</td>
<td style="background-color:#9797ff"><b>3.2</b></td>
<td style="background-color:#8f8fff"><b>3.4</b></td>
<td style="background-color:#8484ff"><b>3.7</b></td>
<td style="background-color:#7878ff"><b>4</b></td>
<td style="background-color:#7e76f9"><b>4.2</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>14.01.2017</b></td>
<td style="background-color:#8cf700"><b>16</b></td>
<td style="background-color:#95f600"><b>17</b></td>
<td style="background-color:#8cf700"><b>16</b></td>
<td style="background-color:#60f900"><b>16</b></td>
<td style="background-color:#52fa00"><b>15</b></td>
<td style="background-color:#0bfe1a"><b>13</b></td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#7f76f8"><b>4.3</b></td>
<td style="background-color:#7d77fa"><b>4.2</b></td>
<td style="background-color:#7978fe"><b>4.1</b></td>
<td style="background-color:#7c7cff"><b>3.9</b></td>
<td style="background-color:#8585ff"><b>3.6</b></td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#9b9bff"><b>3</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>15.01.2017</b></td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#a2a2ff">2.8</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c4c4ff">1.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>16.01.2017</b></td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#ceceff">1.6</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d6d6ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>17.01.2017</b></td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#e0e0ff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dbdbff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>18.01.2017</b></td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#0afe00"><b>14</b></td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#ceceff">1.7</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d5d5ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>19.01.2017</b></td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#d9d9ff">1.4</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#e0e0ff">1.1</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#d9d9ff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>20.01.2017</b></td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c3c3ff">2</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#ceceff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>21.01.2017</b></td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#cacaff">1.7</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c3c3ff">1.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>22.01.2017</b></td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#07fe10"><b>13</b></td>
<td style="background-color:#10fe25"><b>13</b></td>
<td style="background-color:#1bfd3f"><b>12</b></td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#ceceff">1.7</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#c8c8ff">1.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>23.01.2017</b></td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c3c3ff">2</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#cacaff">1.8</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#c6c6ff">1.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>24.01.2017</b></td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#b8b8ff">2.3</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#aeaeff">2.5</td>
<td style="background-color:#aeaeff">2.5</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#b1b1ff">2.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>25.01.2017</b></td>
<td style="background-color:#ffffff">0</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#b4b4ff">2.4</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#bfbfff">2</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#bbbbff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>26.01.2017</b></td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#3ffb00"><b>15</b></td>
<td style="background-color:#e2f200"><b>18</b></td>
<td style="background-color:#ffcd08"><b>20</b></td>
<td style="background-color:#ddf200"><b>18</b></td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#9797ff"><b>3.1</b></td>
<td style="background-color:#8787ff"><b>3.6</b></td>
<td style="background-color:#8b8bff"><b>3.5</b></td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#9b9bff"><b>3</b></td>
<td style="background-color:#9d9dff">3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>27.01.2017</b></td>
<td style="background-color:#1bfd3f"><b>12</b></td>
<td style="background-color:#7df800"><b>16</b></td>
<td style="background-color:#ffd905"><b>20</b></td>
<td style="background-color:#ffe303"><b>19</b></td>
<td style="background-color:#ff382b"><b>25</b></td>
<td style="background-color:#ff9615"><b>22</b></td>
<td style="background-color:#78f800"><b>16</b></td>
<td style="background-color:#07fe10"><b>13</b></td>
<td style="background-color:#9797ff"><b>3.1</b></td>
<td style="background-color:#8888ff"><b>3.6</b></td>
<td style="background-color:#7c77fb"><b>4.2</b></td>
<td style="background-color:#8a73ea"><b>4.8</b></td>
<td style="background-color:#9270e2"><b>5.1</b></td>
<td style="background-color:#9370e1"><b>5.2</b></td>
<td style="background-color:#9071e3"><b>5.1</b></td>
<td style="background-color:#8c72e8"><b>4.9</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>28.01.2017</b></td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#8674ef"><b>4.6</b></td>
<td style="background-color:#8076f6"><b>4.4</b></td>
<td style="background-color:#7978fd"><b>4.1</b></td>
<td style="background-color:#7f7fff"><b>3.8</b></td>
<td style="background-color:#8989ff"><b>3.5</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#a0a0ff">2.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>29.01.2017</b></td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#12fe2a"><b>13</b></td>
<td style="background-color:#0afe00"><b>14</b></td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#a6a6ff">2.8</td>
<td style="background-color:#a9a9ff">2.6</td>
<td style="background-color:#adadff">2.5</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b6b6ff">2.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>30.01.2017</b></td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#02ff05"><b>13</b></td>
<td style="background-color:#10fe25"><b>13</b></td>
<td style="background-color:#52fa00"><b>15</b></td>
<td style="background-color:#b8b8ff">2.2</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#aaaaff">2.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>31.01.2017</b></td>
<td style="background-color:#a8f500"><b>17</b></td>
<td style="background-color:#4dfa00"><b>15</b></td>
<td style="background-color:#82f700"><b>16</b></td>
<td style="background-color:#d9f200"><b>18</b></td>
<td style="background-color:#73f800"><b>16</b></td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#9f9fff">2.9</td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#8a8aff"><b>3.5</b></td>
<td style="background-color:#8282ff"><b>3.7</b></td>
<td style="background-color:#8282ff"><b>3.7</b></td>
<td style="background-color:#8686ff"><b>3.6</b></td>
<td style="background-color:#8a8aff"><b>3.5</b></td>
<td style="background-color:#8c8cff"><b>3.5</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>01.02.2017</b></td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#1bfd3f"><b>12</b></td>
<td style="background-color:#65f900"><b>16</b></td>
<td style="background-color:#9ff600"><b>17</b></td>
<td style="background-color:#ffb30e"><b>21</b></td>
<td style="background-color:#8c8cff"><b>3.4</b></td>
<td style="background-color:#8d8dff"><b>3.4</b></td>
<td style="background-color:#9090ff"><b>3.3</b></td>
<td style="background-color:#9494ff"><b>3.2</b></td>
<td style="background-color:#9898ff"><b>3.1</b></td>
<td style="background-color:#9898ff"><b>3.1</b></td>
<td style="background-color:#9191ff"><b>3.3</b></td>
<td style="background-color:#8888ff"><b>3.6</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>02.02.2017</b></td>
<td style="background-color:#ffc30a"><b>20</b></td>
<td style="background-color:#ffb60d"><b>21</b></td>
<td style="background-color:#ff4f25"><b>24</b></td>
<td style="background-color:#ff8918"><b>22</b></td>
<td style="background-color:#ffcd08"><b>20</b></td>
<td style="background-color:#3afc00"><b>15</b></td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#8383ff"><b>3.7</b></td>
<td style="background-color:#7c7cff"><b>3.9</b></td>
<td style="background-color:#7f76f7"><b>4.3</b></td>
<td style="background-color:#9270e2"><b>5.1</b></td>
<td style="background-color:#ad68c2"><b>6.4</b></td>
<td style="background-color:#d65c93"><b>8.2</b></td>
<td style="background-color:#e15987"><b>8.7</b></td>
<td style="background-color:#d55c94"><b>8.1</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>03.02.2017</b></td>
<td style="background-color:#b7f400"><b>17</b></td>
<td style="background-color:#ff8918"><b>22</b></td>
<td style="background-color:#ff6620"><b>23</b></td>
<td style="background-color:#73f800"><b>16</b></td>
<td style="background-color:#95f600"><b>17</b></td>
<td style="background-color:#ff382b"><b>25</b></td>
<td style="background-color:#ff791c"><b>23</b></td>
<td style="background-color:#ff9914"><b>22</b></td>
<td style="background-color:#c860a3"><b>7.5</b></td>
<td style="background-color:#c063ad"><b>7.2</b></td>
<td style="background-color:#bc64b1"><b>7</b></td>
<td style="background-color:#bb64b2"><b>7</b></td>
<td style="background-color:#b865b6"><b>6.8</b></td>
<td style="background-color:#ae68c1"><b>6.4</b></td>
<td style="background-color:#a26ccf"><b>5.9</b></td>
<td style="background-color:#9a6ed8"><b>5.5</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>04.02.2017</b></td>
<td style="background-color:#ffdd04"><b>19</b></td>
<td style="background-color:#60f900"><b>16</b></td>
<td style="background-color:#26fd00"><b>14</b></td>
<td style="background-color:#57fa00"><b>15</b></td>
<td style="background-color:#f1f100"><b>19</b></td>
<td style="background-color:#ff5923"><b>24</b></td>
<td style="background-color:#ecf100"><b>18</b></td>
<td style="background-color:#ffb30e"><b>21</b></td>
<td style="background-color:#9470df"><b>5.2</b></td>
<td style="background-color:#9270e1"><b>5.1</b></td>
<td style="background-color:#8f71e4"><b>5</b></td>
<td style="background-color:#8a73ea"><b>4.8</b></td>
<td style="background-color:#8674ef"><b>4.6</b></td>
<td style="background-color:#8475f2"><b>4.5</b></td>
<td style="background-color:#8175f4"><b>4.4</b></td>
<td style="background-color:#8275f4"><b>4.4</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>05.02.2017</b></td>
<td style="background-color:#d4f300"><b>18</b></td>
<td style="background-color:#ff9914"><b>22</b></td>
<td style="background-color:#ffd007"><b>20</b></td>
<td style="background-color:#bcf400"><b>17</b></td>
<td style="background-color:#e7f100"><b>18</b></td>
<td style="background-color:#30fc00"><b>15</b></td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#8375f3"><b>4.5</b></td>
<td style="background-color:#8873ec"><b>4.7</b></td>
<td style="background-color:#9270e1"><b>5.2</b></td>
<td style="background-color:#9a6ed8"><b>5.5</b></td>
<td style="background-color:#996eda"><b>5.5</b></td>
<td style="background-color:#9270e1"><b>5.2</b></td>
<td style="background-color:#8a73ea"><b>4.8</b></td>
<td style="background-color:#8375f3"><b>4.5</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>06.02.2017</b></td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#07fe10"><b>13</b></td>
<td style="background-color:#09fe15"><b>13</b></td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#7a77fc"><b>4.1</b></td>
<td style="background-color:#8181ff"><b>3.7</b></td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#9898ff"><b>3.1</b></td>
<td style="background-color:#9e9eff">3</td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#a1a1ff">2.9</td>
<td style="background-color:#a1a1ff">2.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>07.02.2017</b></td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#07fe10"><b>13</b></td>
<td style="background-color:#60f900"><b>16</b></td>
<td style="background-color:#95f600"><b>17</b></td>
<td style="background-color:#30fc00"><b>15</b></td>
<td style="background-color:#43fb00"><b>15</b></td>
<td style="background-color:#9d9dff">3</td>
<td style="background-color:#9696ff"><b>3.2</b></td>
<td style="background-color:#8a8aff"><b>3.5</b></td>
<td style="background-color:#7f7fff"><b>3.8</b></td>
<td style="background-color:#7978fe"><b>4</b></td>
<td style="background-color:#7d77f9"><b>4.2</b></td>
<td style="background-color:#7e76f8"><b>4.3</b></td>
<td style="background-color:#7e76f9"><b>4.3</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>08.02.2017</b></td>
<td style="background-color:#0efe00"><b>14</b></td>
<td style="background-color:#10fe25"><b>13</b></td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#7b77fb"><b>4.1</b></td>
<td style="background-color:#7978fe"><b>4</b></td>
<td style="background-color:#7b7bff"><b>3.9</b></td>
<td style="background-color:#7e7eff"><b>3.8</b></td>
<td style="background-color:#8282ff"><b>3.7</b></td>
<td style="background-color:#8787ff"><b>3.6</b></td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#9595ff"><b>3.2</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>09.02.2017</b></td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#02ff05"><b>13</b></td>
<td style="background-color:#35fc00"><b>15</b></td>
<td style="background-color:#ffea01"><b>19</b></td>
<td style="background-color:#ffb30e"><b>21</b></td>
<td style="background-color:#6ff800"><b>16</b></td>
<td style="background-color:#9e9eff">3</td>
<td style="background-color:#a5a5ff">2.8</td>
<td style="background-color:#a9a9ff">2.7</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#a1a1ff">2.9</td>
<td style="background-color:#9090ff"><b>3.3</b></td>
<td style="background-color:#7e76f8"><b>4.3</b></td>
<td style="background-color:#8f71e5"><b>5</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>10.02.2017</b></td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#02ff05"><b>13</b></td>
<td style="background-color:#1bfd3f"><b>12</b></td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#0bfe1a"><b>13</b></td>
<td style="background-color:#976fdc"><b>5.4</b></td>
<td style="background-color:#9f6cd2"><b>5.7</b></td>
<td style="background-color:#a66aca"><b>6</b></td>
<td style="background-color:#a76aca"><b>6.1</b></td>
<td style="background-color:#a46bcc"><b>6</b></td>
<td style="background-color:#a16ccf"><b>5.8</b></td>
<td style="background-color:#9d6dd5"><b>5.6</b></td>
<td style="background-color:#966fdd"><b>5.3</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>11.02.2017</b></td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#30fc00"><b>15</b></td>
<td style="background-color:#60f900"><b>16</b></td>
<td style="background-color:#c5f300"><b>18</b></td>
<td style="background-color:#ffdd04"><b>19</b></td>
<td style="background-color:#f1f100"><b>19</b></td>
<td style="background-color:#8cf700"><b>16</b></td>
<td style="background-color:#f5f100"><b>19</b></td>
<td style="background-color:#8d72e7"><b>4.9</b></td>
<td style="background-color:#8275f4"><b>4.4</b></td>
<td style="background-color:#7a7aff"><b>3.9</b></td>
<td style="background-color:#8989ff"><b>3.5</b></td>
<td style="background-color:#9797ff"><b>3.2</b></td>
<td style="background-color:#a1a1ff">2.9</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#ababff">2.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>12.02.2017</b></td>
<td style="background-color:#e7f100"><b>18</b></td>
<td style="background-color:#82f700"><b>16</b></td>
<td style="background-color:#3afc00"><b>15</b></td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#cbcbff">1.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>13.02.2017</b></td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#26fd00"><b>14</b></td>
<td style="background-color:#57fa00"><b>15</b></td>
<td style="background-color:#26fd00"><b>14</b></td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#ceceff">1.6</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#cacaff">1.7</td>
<td style="background-color:#c3c3ff">2</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#b8b8ff">2.2</td>
<td style="background-color:#b6b6ff">2.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>14.02.2017</b></td>
<td style="background-color:#0bfe1a"><b>13</b></td>
<td style="background-color:#3ffb00"><b>15</b></td>
<td style="background-color:#14fd2f"><b>13</b></td>
<td style="background-color:#00ff00"><b>14</b></td>
<td style="background-color:#3ffb00"><b>15</b></td>
<td style="background-color:#00ff00"><b>14</b></td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#b8b8ff">2.2</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#c1c1ff">2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>15.02.2017</b></td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#3afc00"><b>15</b></td>
<td style="background-color:#09fe15"><b>13</b></td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#ceceff">1.6</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d5d5ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>16.02.2017</b></td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#ddddff">1.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>17.02.2017</b></td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#bbbbff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>18.02.2017</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#05ff00"><b>14</b></td>
<td style="background-color:#48fb00"><b>15</b></td>
<td style="background-color:#0efe00"><b>14</b></td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#a2a2ff">2.9</td>
<td style="background-color:#9d9dff">3</td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#9696ff"><b>3.2</b></td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#9797ff"><b>3.2</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>19.02.2017</b></td>
<td style="background-color:#12fe2a"><b>13</b></td>
<td style="background-color:#02ff05"><b>13</b></td>
<td style="background-color:#5bfa00"><b>15</b></td>
<td style="background-color:#04ff0a"><b>13</b></td>
<td style="background-color:#04ff0a"><b>13</b></td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#9a9aff"><b>3.1</b></td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#9d9dff">3</td>
<td style="background-color:#a6a6ff">2.8</td>
<td style="background-color:#aeaeff">2.5</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#babaff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>20.02.2017</b></td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#b8b8ff">2.2</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#b8b8ff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>21.02.2017</b></td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#cdcdff">1.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>22.02.2017</b></td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d5d5ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>23.02.2017</b></td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#30fc00"><b>15</b></td>
<td style="background-color:#05ff00"><b>14</b></td>
<td style="background-color:#02ff05"><b>13</b></td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#cacaff">1.8</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#bebeff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>24.02.2017</b></td>
<td style="background-color:#04ff0a"><b>13</b></td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#10fe25"><b>13</b></td>
<td style="background-color:#10fe25"><b>13</b></td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#bfbfff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>25.02.2017</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#cdcdff">1.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>26.02.2017</b></td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">0</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b4b4ff">2.4</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bdbdff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>27.02.2017</b></td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#22fd00"><b>14</b></td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#a2a2ff">2.8</td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#8080ff"><b>3.8</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>28.02.2017</b></td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#8c72e8"><b>4.9</b></td>
<td style="background-color:#a06cd1"><b>5.8</b></td>
<td style="background-color:#a86ac7"><b>6.2</b></td>
<td style="background-color:#a86ac8"><b>6.1</b></td>
<td style="background-color:#a26bce"><b>5.9</b></td>
<td style="background-color:#9d6dd5"><b>5.6</b></td>
<td style="background-color:#986fdb"><b>5.4</b></td>
<td style="background-color:#9270e1"><b>5.2</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>01.03.2017</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#8b72e9"><b>4.8</b></td>
<td style="background-color:#8375f3"><b>4.5</b></td>
<td style="background-color:#7978fe"><b>4.1</b></td>
<td style="background-color:#8585ff"><b>3.7</b></td>
<td style="background-color:#9393ff"><b>3.3</b></td>
<td style="background-color:#9f9fff">2.9</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#b3b3ff">2.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>02.03.2017</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#b8b8ff">2.3</td>
<td style="background-color:#b8b8ff">2.2</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#b8b8ff">2.2</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#bbbbff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>03.03.2017</b></td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#14fd2f"><b>13</b></td>
<td style="background-color:#52fa00"><b>15</b></td>
<td style="background-color:#22fd00"><b>14</b></td>
<td style="background-color:#bcf400"><b>17</b></td>
<td style="background-color:#ff721d"><b>23</b></td>
<td style="background-color:#ff8918"><b>22</b></td>
<td style="background-color:#95f600"><b>17</b></td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#9b9bff"><b>3.1</b></td>
<td style="background-color:#8c8cff"><b>3.5</b></td>
<td style="background-color:#7c77fb"><b>4.2</b></td>
<td style="background-color:#8873ec"><b>4.7</b></td>
<td style="background-color:#8873ec"><b>4.7</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>04.03.2017</b></td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#4dfa00"><b>15</b></td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#8275f4"><b>4.4</b></td>
<td style="background-color:#7a77fc"><b>4.1</b></td>
<td style="background-color:#7e7eff"><b>3.8</b></td>
<td style="background-color:#8383ff"><b>3.7</b></td>
<td style="background-color:#8585ff"><b>3.6</b></td>
<td style="background-color:#8787ff"><b>3.6</b></td>
<td style="background-color:#8c8cff"><b>3.5</b></td>
<td style="background-color:#9090ff"><b>3.3</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>05.03.2017</b></td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#65f900"><b>16</b></td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#9393ff"><b>3.3</b></td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#9797ff"><b>3.1</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>06.03.2017</b></td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#9797ff"><b>3.1</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#8a8aff"><b>3.5</b></td>
<td style="background-color:#8282ff"><b>3.7</b></td>
<td style="background-color:#7c7cff"><b>3.9</b></td>
<td style="background-color:#7a7aff"><b>4</b></td>
<td style="background-color:#7c7cff"><b>3.9</b></td>
<td style="background-color:#8080ff"><b>3.8</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>07.03.2017</b></td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#16fd34"><b>13</b></td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#8686ff"><b>3.6</b></td>
<td style="background-color:#8c8cff"><b>3.5</b></td>
<td style="background-color:#9090ff"><b>3.3</b></td>
<td style="background-color:#9494ff"><b>3.2</b></td>
<td style="background-color:#9898ff"><b>3.1</b></td>
<td style="background-color:#9e9eff">3</td>
<td style="background-color:#a3a3ff">2.8</td>
<td style="background-color:#a8a8ff">2.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>08.03.2017</b></td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#b8b8ff">2.2</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#bfbfff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>09.03.2017</b></td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#cdcdff">1.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>10.03.2017</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ceceff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d5d5ff">1.5</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d9d9ff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>11.03.2017</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#02ff05"><b>13</b></td>
<td style="background-color:#13fe00"><b>14</b></td>
<td style="background-color:#95f600"><b>17</b></td>
<td style="background-color:#b2f500"><b>17</b></td>
<td style="background-color:#78f800"><b>16</b></td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c6c6ff">1.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>12.03.2017</b></td>
<td style="background-color:#60f900"><b>16</b></td>
<td style="background-color:#22fd00"><b>14</b></td>
<td style="background-color:#5bfa00"><b>15</b></td>
<td style="background-color:#ffc30a"><b>20</b></td>
<td style="background-color:#ff3f29"><b>24</b></td>
<td style="background-color:#ff3033"><b>25</b></td>
<td style="background-color:#ff3130"><b>25</b></td>
<td style="background-color:#ff3f29"><b>24</b></td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#a9a9ff">2.7</td>
<td style="background-color:#9d9dff">3</td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>13.03.2017</b></td>
<td style="background-color:#ff6f1e"><b>23</b></td>
<td style="background-color:#ffd007"><b>20</b></td>
<td style="background-color:#ffe303"><b>19</b></td>
<td style="background-color:#ffa312"><b>21</b></td>
<td style="background-color:#ffb90d"><b>21</b></td>
<td style="background-color:#ffa611"><b>21</b></td>
<td style="background-color:#c5f300"><b>18</b></td>
<td style="background-color:#9af600"><b>17</b></td>
<td style="background-color:#7f7fff"><b>3.8</b></td>
<td style="background-color:#7b77fc"><b>4.1</b></td>
<td style="background-color:#7e76f9"><b>4.2</b></td>
<td style="background-color:#7e76f8"><b>4.3</b></td>
<td style="background-color:#7b77fb"><b>4.1</b></td>
<td style="background-color:#7878ff"><b>4</b></td>
<td style="background-color:#8383ff"><b>3.7</b></td>
<td style="background-color:#8d8dff"><b>3.4</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>14.03.2017</b></td>
<td style="background-color:#65f900"><b>16</b></td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#2bfc00"><b>14</b></td>
<td style="background-color:#2bfc00"><b>14</b></td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#9696ff"><b>3.2</b></td>
<td style="background-color:#9c9cff"><b>3</b></td>
<td style="background-color:#9f9fff">2.9</td>
<td style="background-color:#a2a2ff">2.8</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#a8a8ff">2.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>15.03.2017</b></td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#18fe00"><b>14</b></td>
<td style="background-color:#65f900"><b>16</b></td>
<td style="background-color:#78f800"><b>16</b></td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#afafff">2.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>16.03.2017</b></td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#05ff00"><b>14</b></td>
<td style="background-color:#7df800"><b>16</b></td>
<td style="background-color:#4dfa00"><b>15</b></td>
<td style="background-color:#07fe10"><b>13</b></td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b8b8ff">2.3</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c3c3ff">2</td>
<td style="background-color:#bcbcff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>17.03.2017</b></td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#a8f500"><b>17</b></td>
<td style="background-color:#5bfa00"><b>15</b></td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#aeaeff">2.5</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#b4b4ff">2.4</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b7b7ff">2.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>18.03.2017</b></td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#babaff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>19.03.2017</b></td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#0bfe1a"><b>13</b></td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#b8b8ff">2.2</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#aeaeff">2.5</td>
<td style="background-color:#adadff">2.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>20.03.2017</b></td>
<td style="background-color:#18fe00"><b>14</b></td>
<td style="background-color:#05ff00"><b>14</b></td>
<td style="background-color:#18fe00"><b>14</b></td>
<td style="background-color:#65f900"><b>16</b></td>
<td style="background-color:#9ff600"><b>17</b></td>
<td style="background-color:#73f800"><b>16</b></td>
<td style="background-color:#6af900"><b>16</b></td>
<td style="background-color:#02ff05"><b>13</b></td>
<td style="background-color:#adadff">2.5</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b4b4ff">2.4</td>
<td style="background-color:#b4b4ff">2.3</td>
<td style="background-color:#b6b6ff">2.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>21.03.2017</b></td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#6ff800"><b>16</b></td>
<td style="background-color:#6ff800"><b>16</b></td>
<td style="background-color:#3afc00"><b>15</b></td>
<td style="background-color:#3afc00"><b>15</b></td>
<td style="background-color:#09fe15"><b>13</b></td>
<td style="background-color:#b8b8ff">2.2</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#b4b4ff">2.3</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#bcbcff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>22.03.2017</b></td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#6ff800"><b>16</b></td>
<td style="background-color:#faf000"><b>19</b></td>
<td style="background-color:#ffbc0c"><b>20</b></td>
<td style="background-color:#ffb90d"><b>21</b></td>
<td style="background-color:#ffd905"><b>20</b></td>
<td style="background-color:#8cf700"><b>16</b></td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#7a7aff"><b>4</b></td>
<td style="background-color:#8774ee"><b>4.7</b></td>
<td style="background-color:#9470de"><b>5.3</b></td>
<td style="background-color:#9e6dd4"><b>5.7</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>23.03.2017</b></td>
<td style="background-color:#9af600"><b>17</b></td>
<td style="background-color:#82f700"><b>16</b></td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#c0f400"><b>18</b></td>
<td style="background-color:#48fb00"><b>15</b></td>
<td style="background-color:#09fe15"><b>13</b></td>
<td style="background-color:#13fe00"><b>14</b></td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#a16cd0"><b>5.8</b></td>
<td style="background-color:#a06cd1"><b>5.8</b></td>
<td style="background-color:#9e6dd4"><b>5.7</b></td>
<td style="background-color:#986fdb"><b>5.4</b></td>
<td style="background-color:#9171e3"><b>5.1</b></td>
<td style="background-color:#8a73ea"><b>4.8</b></td>
<td style="background-color:#8474f1"><b>4.5</b></td>
<td style="background-color:#7f76f6"><b>4.3</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>24.03.2017</b></td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#0bfe1a"><b>13</b></td>
<td style="background-color:#7b77fb"><b>4.1</b></td>
<td style="background-color:#7979ff"><b>4</b></td>
<td style="background-color:#7d7dff"><b>3.9</b></td>
<td style="background-color:#8585ff"><b>3.7</b></td>
<td style="background-color:#8d8dff"><b>3.4</b></td>
<td style="background-color:#9393ff"><b>3.2</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#9494ff"><b>3.2</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>25.03.2017</b></td>
<td style="background-color:#60f900"><b>16</b></td>
<td style="background-color:#ffea01"><b>19</b></td>
<td style="background-color:#a8f500"><b>17</b></td>
<td style="background-color:#6ff800"><b>16</b></td>
<td style="background-color:#00ff00"><b>14</b></td>
<td style="background-color:#ddf200"><b>18</b></td>
<td style="background-color:#faf000"><b>19</b></td>
<td style="background-color:#3ffb00"><b>15</b></td>
<td style="background-color:#9b9bff"><b>3.1</b></td>
<td style="background-color:#a2a2ff">2.8</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#bfbfff">2</td>
<td style="background-color:#c3c3ff">2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>26.03.2017</b></td>
<td style="background-color:#1dfd00"><b>14</b></td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#18fe00"><b>14</b></td>
<td style="background-color:#7df800"><b>16</b></td>
<td style="background-color:#ffe303"><b>19</b></td>
<td style="background-color:#c0f400"><b>18</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#cacaff">1.7</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#c9c9ff">1.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>27.03.2017</b></td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#0afe00"><b>14</b></td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#bebeff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>28.03.2017</b></td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#cacaff">1.7</td>
<td style="background-color:#cacaff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c9c9ff">1.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>29.03.2017</b></td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#cacaff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#9a9aff"><b>3.1</b></td>
<td style="background-color:#8c8cff"><b>3.4</b></td>
<td style="background-color:#8888ff"><b>3.6</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>30.03.2017</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#4dfa00"><b>15</b></td>
<td style="background-color:#16fd34"><b>13</b></td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#8a8aff"><b>3.5</b></td>
<td style="background-color:#8c8cff"><b>3.4</b></td>
<td style="background-color:#8c8cff"><b>3.4</b></td>
<td style="background-color:#8989ff"><b>3.5</b></td>
<td style="background-color:#8383ff"><b>3.7</b></td>
<td style="background-color:#7d7dff"><b>3.9</b></td>
<td style="background-color:#7878ff"><b>4</b></td>
<td style="background-color:#7978fe"><b>4</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>31.03.2017</b></td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#7979ff"><b>4</b></td>
<td style="background-color:#7e7eff"><b>3.8</b></td>
<td style="background-color:#8585ff"><b>3.6</b></td>
<td style="background-color:#8d8dff"><b>3.4</b></td>
<td style="background-color:#9696ff"><b>3.2</b></td>
<td style="background-color:#9d9dff">3</td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#a0a0ff">2.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>01.04.2017</b></td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#16fd34"><b>13</b></td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#a3a3ff">2.8</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#b4b4ff">2.4</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#babaff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>02.04.2017</b></td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#cbcbff">1.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>03.04.2017</b></td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#a5a5ff">2.8</td>
<td style="background-color:#9d9dff">3</td>
<td style="background-color:#9797ff"><b>3.2</b></td>
<td style="background-color:#9393ff"><b>3.3</b></td>
<td style="background-color:#9191ff"><b>3.3</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>04.04.2017</b></td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#8f8fff"><b>3.4</b></td>
<td style="background-color:#8f8fff"><b>3.4</b></td>
<td style="background-color:#8f8fff"><b>3.4</b></td>
<td style="background-color:#9393ff"><b>3.3</b></td>
<td style="background-color:#9898ff"><b>3.1</b></td>
<td style="background-color:#9d9dff">3</td>
<td style="background-color:#a1a1ff">2.9</td>
<td style="background-color:#a4a4ff">2.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>05.04.2017</b></td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#a6a6ff">2.7</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#a9a9ff">2.6</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#a9a9ff">2.7</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#a8a8ff">2.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>06.04.2017</b></td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#07fe10"><b>13</b></td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#aeaeff">2.5</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b8b8ff">2.3</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#ccccff">1.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>07.04.2017</b></td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">0</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#ceceff">1.7</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d5d5ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>08.04.2017</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#d9d9ff">1.4</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dcdcff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#e0e0ff">1.2</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e3e3ff">1.1</td>
<td style="background-color:#e5e5ff">1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>09.04.2017</b></td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#0bfe1a"><b>13</b></td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#e6e6ff">1</td>
<td style="background-color:#e6e6ff">1</td>
<td style="background-color:#e6e6ff">1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e0e0ff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#dadaff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>10.04.2017</b></td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#18fe00"><b>14</b></td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c9c9ff">1.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>11.04.2017</b></td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>12.04.2017</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#e0e0ff">1.2</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e3e3ff">1.1</td>
<td style="background-color:#e4e4ff">1</td>
<td style="background-color:#e5e5ff">1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>13.04.2017</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#e6e6ff">1</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e6e6ff">1</td>
<td style="background-color:#e6e6ff">1</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e7e7ff">0.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>14.04.2017</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#e8e8ff">0.9</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e8e8ff">0.9</td>
<td style="background-color:#e9e9ff">0.9</td>
<td style="background-color:#eaeaff">0.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>15.04.2017</b></td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#ebebff">0.9</td>
<td style="background-color:#ececff">0.8</td>
<td style="background-color:#ececff">0.8</td>
<td style="background-color:#ececff">0.8</td>
<td style="background-color:#ececff">0.8</td>
<td style="background-color:#eaeaff">0.9</td>
<td style="background-color:#e8e8ff">0.9</td>
<td style="background-color:#e6e6ff">1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>16.04.2017</b></td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#e4e4ff">1</td>
<td style="background-color:#e3e3ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e1e1ff">1.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>17.04.2017</b></td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e3e3ff">1.1</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e6e6ff">1</td>
<td style="background-color:#e7e7ff">0.9</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e7e7ff">1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>18.04.2017</b></td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#2bfc00"><b>14</b></td>
<td style="background-color:#07fe10"><b>13</b></td>
<td style="background-color:#00ff00"><b>14</b></td>
<td style="background-color:#07fe10"><b>13</b></td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#e4e4ff">1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e0e0ff">1.2</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#d5d5ff">1.4</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>19.04.2017</b></td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#ffed01"><b>19</b></td>
<td style="background-color:#82f700"><b>16</b></td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e0e0ff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>20.04.2017</b></td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#04ff0a"><b>13</b></td>
<td style="background-color:#ffc909"><b>20</b></td>
<td style="background-color:#f5f100"><b>19</b></td>
<td style="background-color:#82f700"><b>16</b></td>
<td style="background-color:#14fd2f"><b>13</b></td>
<td style="background-color:#7df800"><b>16</b></td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#d8d8ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>21.04.2017</b></td>
<td style="background-color:#c0f400"><b>18</b></td>
<td style="background-color:#faf000"><b>19</b></td>
<td style="background-color:#5bfa00"><b>15</b></td>
<td style="background-color:#ffd606"><b>20</b></td>
<td style="background-color:#cff300"><b>18</b></td>
<td style="background-color:#10fe25"><b>13</b></td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#ceceff">1.6</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>22.04.2017</b></td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e3e3ff">1.1</td>
<td style="background-color:#e3e3ff">1.1</td>
<td style="background-color:#e4e4ff">1</td>
<td style="background-color:#e5e5ff">1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>23.04.2017</b></td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#e6e6ff">1</td>
<td style="background-color:#e8e8ff">0.9</td>
<td style="background-color:#eaeaff">0.9</td>
<td style="background-color:#eaeaff">0.9</td>
<td style="background-color:#ebebff">0.8</td>
<td style="background-color:#ebebff">0.8</td>
<td style="background-color:#eaeaff">0.9</td>
<td style="background-color:#eaeaff">0.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>24.04.2017</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#ebebff">0.9</td>
<td style="background-color:#ebebff">0.8</td>
<td style="background-color:#ececff">0.8</td>
<td style="background-color:#ececff">0.8</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#ececff">0.8</td>
<td style="background-color:#eaeaff">0.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>25.04.2017</b></td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#16fd34"><b>13</b></td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#eaeaff">0.9</td>
<td style="background-color:#e9e9ff">0.9</td>
<td style="background-color:#e9e9ff">0.9</td>
<td style="background-color:#ebebff">0.9</td>
<td style="background-color:#ececff">0.8</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#e9e9ff">0.9</td>
<td style="background-color:#e4e4ff">1.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>26.04.2017</b></td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#78f800"><b>16</b></td>
<td style="background-color:#73f800"><b>16</b></td>
<td style="background-color:#52fa00"><b>15</b></td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#a3a3ff">2.8</td>
<td style="background-color:#9f9fff">2.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>27.04.2017</b></td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#13fe00"><b>14</b></td>
<td style="background-color:#3afc00"><b>15</b></td>
<td style="background-color:#9c9cff"><b>3</b></td>
<td style="background-color:#a1a1ff">2.9</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#ababff">2.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>28.04.2017</b></td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#ffc30a"><b>20</b></td>
<td style="background-color:#bcf400"><b>17</b></td>
<td style="background-color:#90f700"><b>17</b></td>
<td style="background-color:#1bfd3f"><b>12</b></td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#adadff">2.5</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d7d7ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>29.04.2017</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#12fe2a"><b>13</b></td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e6e6ff">1</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e6e6ff">1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#dbdbff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>30.04.2017</b></td>
<td style="background-color:#00ff00"><b>14</b></td>
<td style="background-color:#ffe602"><b>19</b></td>
<td style="background-color:#ffe004"><b>19</b></td>
<td style="background-color:#d4f300"><b>18</b></td>
<td style="background-color:#adf500"><b>17</b></td>
<td style="background-color:#a8f500"><b>17</b></td>
<td style="background-color:#3ffb00"><b>15</b></td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#a9a9ff">2.7</td>
<td style="background-color:#a1a1ff">2.9</td>
<td style="background-color:#9898ff"><b>3.1</b></td>
<td style="background-color:#9090ff"><b>3.4</b></td>
<td style="background-color:#8b8bff"><b>3.5</b></td>
<td style="background-color:#8888ff"><b>3.6</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>01.05.2017</b></td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#8787ff"><b>3.6</b></td>
<td style="background-color:#8989ff"><b>3.5</b></td>
<td style="background-color:#8d8dff"><b>3.4</b></td>
<td style="background-color:#9393ff"><b>3.3</b></td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#a6a6ff">2.7</td>
<td style="background-color:#adadff">2.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>02.05.2017</b></td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#cfcfff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>03.05.2017</b></td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c4c4ff">1.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>04.05.2017</b></td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#04ff0a"><b>13</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#b4b4ff">2.3</td>
<td style="background-color:#aeaeff">2.5</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#ababff">2.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>05.05.2017</b></td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#07fe10"><b>13</b></td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#a4f500"><b>17</b></td>
<td style="background-color:#9af600"><b>17</b></td>
<td style="background-color:#57fa00"><b>15</b></td>
<td style="background-color:#04ff0a"><b>13</b></td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#b4b4ff">2.3</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#b8b8ff">2.2</td>
<td style="background-color:#b9b9ff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>06.05.2017</b></td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#cacaff">1.7</td>
<td style="background-color:#ceceff">1.6</td>
<td style="background-color:#d2d2ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>07.05.2017</b></td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#d5d5ff">1.5</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d9d9ff">1.4</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dadaff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>08.05.2017</b></td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c5c5ff">1.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>09.05.2017</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#6af900"><b>16</b></td>
<td style="background-color:#73f800"><b>16</b></td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#cacaff">1.7</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#cbcbff">1.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>10.05.2017</b></td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#bcf400"><b>17</b></td>
<td style="background-color:#ffc909"><b>20</b></td>
<td style="background-color:#adf500"><b>17</b></td>
<td style="background-color:#d9f200"><b>18</b></td>
<td style="background-color:#a4f500"><b>17</b></td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#cacaff">1.8</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#a9a9ff">2.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>11.05.2017</b></td>
<td style="background-color:#a8f500"><b>17</b></td>
<td style="background-color:#b7f400"><b>17</b></td>
<td style="background-color:#90f700"><b>17</b></td>
<td style="background-color:#ffed01"><b>19</b></td>
<td style="background-color:#ffc30a"><b>20</b></td>
<td style="background-color:#ffd606"><b>20</b></td>
<td style="background-color:#c0f400"><b>18</b></td>
<td style="background-color:#0efe00"><b>14</b></td>
<td style="background-color:#a3a3ff">2.8</td>
<td style="background-color:#9f9fff">2.9</td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#9f9fff">2.9</td>
<td style="background-color:#9e9eff">3</td>
<td style="background-color:#9f9fff">2.9</td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#a1a1ff">2.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>12.05.2017</b></td>
<td style="background-color:#2bfc00"><b>14</b></td>
<td style="background-color:#9af600"><b>17</b></td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#43fb00"><b>15</b></td>
<td style="background-color:#00ff00"><b>14</b></td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#9e9eff">3</td>
<td style="background-color:#9f9fff">2.9</td>
<td style="background-color:#a6a6ff">2.7</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c6c6ff">1.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>13.05.2017</b></td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#0afe00"><b>14</b></td>
<td style="background-color:#2bfc00"><b>14</b></td>
<td style="background-color:#12fe2a"><b>13</b></td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c2c2ff">2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>14.05.2017</b></td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#cacaff">1.8</td>
<td style="background-color:#cacaff">1.8</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#cfcfff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>15.05.2017</b></td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d5d5ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d9d9ff">1.4</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#d6d6ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>16.05.2017</b></td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#bcbcff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>17.05.2017</b></td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#65f900"><b>16</b></td>
<td style="background-color:#a4f500"><b>17</b></td>
<td style="background-color:#f5f100"><b>19</b></td>
<td style="background-color:#7df800"><b>16</b></td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#bebeff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>18.05.2017</b></td>
<td style="background-color:#ecf100"><b>18</b></td>
<td style="background-color:#ffea01"><b>19</b></td>
<td style="background-color:#fff000"><b>19</b></td>
<td style="background-color:#ffd007"><b>20</b></td>
<td style="background-color:#ffd905"><b>20</b></td>
<td style="background-color:#ffe303"><b>19</b></td>
<td style="background-color:#ffe602"><b>19</b></td>
<td style="background-color:#b7f400"><b>17</b></td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#b8b8ff">2.2</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#babaff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>19.05.2017</b></td>
<td style="background-color:#87f700"><b>16</b></td>
<td style="background-color:#35fc00"><b>15</b></td>
<td style="background-color:#3ffb00"><b>15</b></td>
<td style="background-color:#8cf700"><b>16</b></td>
<td style="background-color:#a4f500"><b>17</b></td>
<td style="background-color:#b2f500"><b>17</b></td>
<td style="background-color:#9ff600"><b>17</b></td>
<td style="background-color:#95f600"><b>17</b></td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#babaff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>20.05.2017</b></td>
<td style="background-color:#35fc00"><b>15</b></td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#04ff0a"><b>13</b></td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#cacaff">1.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>21.05.2017</b></td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#1bfd3f"><b>12</b></td>
<td style="background-color:#30fc00"><b>15</b></td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#07fe10"><b>13</b></td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#ceceff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>22.05.2017</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#14fd2f"><b>13</b></td>
<td style="background-color:#13fe00"><b>14</b></td>
<td style="background-color:#2bfc00"><b>14</b></td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#cacaff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#c9c9ff">1.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>23.05.2017</b></td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#cacaff">1.7</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>24.05.2017</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#26fd00"><b>14</b></td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#e0e0ff">1.2</td>
<td style="background-color:#e0e0ff">1.1</td>
<td style="background-color:#e0e0ff">1.1</td>
<td style="background-color:#dfdfff">1.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>25.05.2017</b></td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d5d5ff">1.4</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d1d1ff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>26.05.2017</b></td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>27.05.2017</b></td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d5d5ff">1.5</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#dfdfff">1.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>28.05.2017</b></td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#30fc00"><b>15</b></td>
<td style="background-color:#6af900"><b>16</b></td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e3e3ff">1.1</td>
<td style="background-color:#e3e3ff">1.1</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#b3b3ff">2.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>29.05.2017</b></td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d9d9ff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>30.05.2017</b></td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#1dfd00"><b>14</b></td>
<td style="background-color:#0bfe1a"><b>13</b></td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dcdcff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e0e0ff">1.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>31.05.2017</b></td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#04ff0a"><b>13</b></td>
<td style="background-color:#16fd34"><b>13</b></td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d5d5ff">1.4</td>
<td style="background-color:#d5d5ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d1d1ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>01.06.2017</b></td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#bbbbff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>02.06.2017</b></td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#12fe2a"><b>13</b></td>
<td style="background-color:#2bfc00"><b>14</b></td>
<td style="background-color:#78f800"><b>16</b></td>
<td style="background-color:#7df800"><b>16</b></td>
<td style="background-color:#7df800"><b>16</b></td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#adadff">2.6</td>
<td style="background-color:#aeaeff">2.5</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#b9b9ff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>03.06.2017</b></td>
<td style="background-color:#6af900"><b>16</b></td>
<td style="background-color:#adf500"><b>17</b></td>
<td style="background-color:#f5f100"><b>19</b></td>
<td style="background-color:#faf000"><b>19</b></td>
<td style="background-color:#ffcd08"><b>20</b></td>
<td style="background-color:#ffcd08"><b>20</b></td>
<td style="background-color:#ffbc0c"><b>20</b></td>
<td style="background-color:#ffea01"><b>19</b></td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#b6b6ff">2.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>04.06.2017</b></td>
<td style="background-color:#ffe602"><b>19</b></td>
<td style="background-color:#fff000"><b>19</b></td>
<td style="background-color:#ffe004"><b>19</b></td>
<td style="background-color:#ff7c1b"><b>22</b></td>
<td style="background-color:#ff7c1b"><b>22</b></td>
<td style="background-color:#ffb30e"><b>21</b></td>
<td style="background-color:#ffe004"><b>19</b></td>
<td style="background-color:#87f700"><b>16</b></td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#adadff">2.5</td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b8b8ff">2.2</td>
<td style="background-color:#bbbbff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>05.06.2017</b></td>
<td style="background-color:#6ff800"><b>16</b></td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d1d1ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>06.06.2017</b></td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#7df800"><b>16</b></td>
<td style="background-color:#c5f300"><b>18</b></td>
<td style="background-color:#a8f500"><b>17</b></td>
<td style="background-color:#5bfa00"><b>15</b></td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#b8b8ff">2.2</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#b7b7ff">2.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>07.06.2017</b></td>
<td style="background-color:#35fc00"><b>15</b></td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#02ff05"><b>13</b></td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#bcbcff">2.2</td>
<td style="background-color:#bfbfff">2</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#cacaff">1.7</td>
<td style="background-color:#cbcbff">1.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>08.06.2017</b></td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#12fe2a"><b>13</b></td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d5d5ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d9d9ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>09.06.2017</b></td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#bfbfff">2</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#c2c2ff">2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>10.06.2017</b></td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#a8a8ff">2.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>11.06.2017</b></td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#07fe10"><b>13</b></td>
<td style="background-color:#0efe00"><b>14</b></td>
<td style="background-color:#6ff800"><b>16</b></td>
<td style="background-color:#d4f300"><b>18</b></td>
<td style="background-color:#c0f400"><b>18</b></td>
<td style="background-color:#43fb00"><b>15</b></td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#8d8dff"><b>3.4</b></td>
<td style="background-color:#8f8fff"><b>3.4</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#9696ff"><b>3.2</b></td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#9a9aff"><b>3.1</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>12.06.2017</b></td>
<td style="background-color:#02ff05"><b>13</b></td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#9b9bff"><b>3</b></td>
<td style="background-color:#9d9dff">3</td>
<td style="background-color:#a1a1ff">2.9</td>
<td style="background-color:#a6a6ff">2.7</td>
<td style="background-color:#a9a9ff">2.7</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#adadff">2.6</td>
<td style="background-color:#acacff">2.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>13.06.2017</b></td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#35fc00"><b>15</b></td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#adadff">2.6</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c4c4ff">1.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>14.06.2017</b></td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#05ff00"><b>14</b></td>
<td style="background-color:#1bfd3f"><b>12</b></td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#babaff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>15.06.2017</b></td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#0efe00"><b>14</b></td>
<td style="background-color:#48fb00"><b>15</b></td>
<td style="background-color:#43fb00"><b>15</b></td>
<td style="background-color:#22fd00"><b>14</b></td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#b8b8ff">2.3</td>
<td style="background-color:#b4b4ff">2.4</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#a9a9ff">2.7</td>
<td style="background-color:#a5a5ff">2.8</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#a4a4ff">2.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>16.06.2017</b></td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#a6a6ff">2.7</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c7c7ff">1.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>17.06.2017</b></td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#cacaff">1.7</td>
<td style="background-color:#ceceff">1.7</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d5d5ff">1.5</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d9d9ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>18.06.2017</b></td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#05ff00"><b>14</b></td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>19.06.2017</b></td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#e0e0ff">1.2</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>20.06.2017</b></td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#e3e3ff">1.1</td>
<td style="background-color:#e3e3ff">1.1</td>
<td style="background-color:#e4e4ff">1</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e6e6ff">1</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e9e9ff">0.9</td>
<td style="background-color:#eaeaff">0.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>21.06.2017</b></td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#ebebff">0.9</td>
<td style="background-color:#ececff">0.8</td>
<td style="background-color:#ececff">0.8</td>
<td style="background-color:#ececff">0.8</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#eeeeff">0.8</td>
<td style="background-color:#eeeeff">0.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>22.06.2017</b></td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#ececff">0.8</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#ececff">0.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>23.06.2017</b></td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#04ff0a"><b>13</b></td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#ebebff">0.8</td>
<td style="background-color:#eaeaff">0.9</td>
<td style="background-color:#eaeaff">0.9</td>
<td style="background-color:#eaeaff">0.9</td>
<td style="background-color:#eaeaff">0.9</td>
<td style="background-color:#e8e8ff">0.9</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e5e5ff">1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>24.06.2017</b></td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#16fd34"><b>13</b></td>
<td style="background-color:#1dfd00"><b>14</b></td>
<td style="background-color:#43fb00"><b>15</b></td>
<td style="background-color:#0efe00"><b>14</b></td>
<td style="background-color:#04ff0a"><b>13</b></td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e4e4ff">1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#d9d9ff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>25.06.2017</b></td>
<td style="background-color:#10fe25"><b>13</b></td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d5d5ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dadaff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>26.06.2017</b></td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#e0e0ff">1.2</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e3e3ff">1.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>27.06.2017</b></td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#09fe15"><b>13</b></td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#e4e4ff">1.1</td>
<td style="background-color:#e4e4ff">1</td>
<td style="background-color:#e4e4ff">1</td>
<td style="background-color:#e4e4ff">1.1</td>
<td style="background-color:#e3e3ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#dfdfff">1.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>28.06.2017</b></td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#65f900"><b>16</b></td>
<td style="background-color:#3afc00"><b>15</b></td>
<td style="background-color:#26fd00"><b>14</b></td>
<td style="background-color:#78f800"><b>16</b></td>
<td style="background-color:#82f700"><b>16</b></td>
<td style="background-color:#04ff0a"><b>13</b></td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#b4b4ff">2.3</td>
<td style="background-color:#b1b1ff">2.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>29.06.2017</b></td>
<td style="background-color:#10fe25"><b>13</b></td>
<td style="background-color:#13fe00"><b>14</b></td>
<td style="background-color:#04ff0a"><b>13</b></td>
<td style="background-color:#57fa00"><b>15</b></td>
<td style="background-color:#8cf700"><b>16</b></td>
<td style="background-color:#c5f300"><b>18</b></td>
<td style="background-color:#ffd905"><b>20</b></td>
<td style="background-color:#6ff800"><b>16</b></td>
<td style="background-color:#aeaeff">2.5</td>
<td style="background-color:#adadff">2.5</td>
<td style="background-color:#aeaeff">2.5</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#a4a4ff">2.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>30.06.2017</b></td>
<td style="background-color:#13fe00"><b>14</b></td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#b2f500"><b>17</b></td>
<td style="background-color:#ffe004"><b>19</b></td>
<td style="background-color:#ffe303"><b>19</b></td>
<td style="background-color:#ffac10"><b>21</b></td>
<td style="background-color:#ffdd04"><b>19</b></td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#a1a1ff">2.9</td>
<td style="background-color:#a2a2ff">2.8</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#a6a6ff">2.7</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#a7a7ff">2.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>01.07.2017</b></td>
<td style="background-color:#ffe602"><b>19</b></td>
<td style="background-color:#adf500"><b>17</b></td>
<td style="background-color:#b2f500"><b>17</b></td>
<td style="background-color:#ecf100"><b>18</b></td>
<td style="background-color:#ffe004"><b>19</b></td>
<td style="background-color:#ffb00f"><b>21</b></td>
<td style="background-color:#ff9c13"><b>21</b></td>
<td style="background-color:#78f800"><b>16</b></td>
<td style="background-color:#a3a3ff">2.8</td>
<td style="background-color:#a2a2ff">2.8</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#aeaeff">2.5</td>
<td style="background-color:#b0b0ff">2.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>02.07.2017</b></td>
<td style="background-color:#10fe25"><b>13</b></td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#22fd00"><b>14</b></td>
<td style="background-color:#87f700"><b>16</b></td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#ceceff">1.7</td>
<td style="background-color:#d1d1ff">1.5</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>03.07.2017</b></td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#16fd34"><b>13</b></td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#dedeff">1.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>04.07.2017</b></td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#e0e0ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e3e3ff">1.1</td>
<td style="background-color:#e4e4ff">1</td>
<td style="background-color:#e4e4ff">1</td>
<td style="background-color:#e4e4ff">1</td>
<td style="background-color:#e4e4ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>05.07.2017</b></td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e4e4ff">1</td>
<td style="background-color:#e6e6ff">1</td>
<td style="background-color:#e7e7ff">0.9</td>
<td style="background-color:#e9e9ff">0.9</td>
<td style="background-color:#eaeaff">0.9</td>
<td style="background-color:#eaeaff">0.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>06.07.2017</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#eaeaff">0.9</td>
<td style="background-color:#e8e8ff">0.9</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#d5d5ff">1.4</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>07.07.2017</b></td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#16fd34"><b>13</b></td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#d7d7ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>08.07.2017</b></td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#ceceff">1.6</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#d1d1ff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>09.07.2017</b></td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#12fe2a"><b>13</b></td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#d7d7ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>10.07.2017</b></td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#14fd2f"><b>13</b></td>
<td style="background-color:#a4f500"><b>17</b></td>
<td style="background-color:#f5f100"><b>19</b></td>
<td style="background-color:#ecf100"><b>18</b></td>
<td style="background-color:#82f700"><b>16</b></td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#b4b4ff">2.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>11.07.2017</b></td>
<td style="background-color:#48fb00"><b>15</b></td>
<td style="background-color:#0efe00"><b>14</b></td>
<td style="background-color:#10fe25"><b>13</b></td>
<td style="background-color:#0afe00"><b>14</b></td>
<td style="background-color:#22fd00"><b>14</b></td>
<td style="background-color:#43fb00"><b>15</b></td>
<td style="background-color:#30fc00"><b>15</b></td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>12.07.2017</b></td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#10fe25"><b>13</b></td>
<td style="background-color:#0efe00"><b>14</b></td>
<td style="background-color:#26fd00"><b>14</b></td>
<td style="background-color:#04ff0a"><b>13</b></td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#ceceff">1.7</td>
<td style="background-color:#cacaff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c3c3ff">1.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>13.07.2017</b></td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#09fe15"><b>13</b></td>
<td style="background-color:#4dfa00"><b>15</b></td>
<td style="background-color:#60f900"><b>16</b></td>
<td style="background-color:#35fc00"><b>15</b></td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#b8b8ff">2.2</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#b9b9ff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>14.07.2017</b></td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#bdbdff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>15.07.2017</b></td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#c3c3ff">2</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#cdcdff">1.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>16.07.2017</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d9d9ff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>17.07.2017</b></td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>18.07.2017</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>19.07.2017</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#10fe25"><b>13</b></td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#e0e0ff">1.2</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e3e3ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#cdcdff">1.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>20.07.2017</b></td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#1bfd3f"><b>12</b></td>
<td style="background-color:#0efe00"><b>14</b></td>
<td style="background-color:#82f700"><b>16</b></td>
<td style="background-color:#a4f500"><b>17</b></td>
<td style="background-color:#87f700"><b>16</b></td>
<td style="background-color:#95f600"><b>17</b></td>
<td style="background-color:#73f800"><b>16</b></td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#babaff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>21.07.2017</b></td>
<td style="background-color:#6ff800"><b>16</b></td>
<td style="background-color:#57fa00"><b>15</b></td>
<td style="background-color:#30fc00"><b>15</b></td>
<td style="background-color:#48fb00"><b>15</b></td>
<td style="background-color:#43fb00"><b>15</b></td>
<td style="background-color:#00ff00"><b>14</b></td>
<td style="background-color:#07fe10"><b>13</b></td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#ceceff">1.6</td>
<td style="background-color:#ceceff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>22.07.2017</b></td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#04ff0a"><b>13</b></td>
<td style="background-color:#3ffb00"><b>15</b></td>
<td style="background-color:#0efe00"><b>14</b></td>
<td style="background-color:#ceceff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#babaff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>23.07.2017</b></td>
<td style="background-color:#1dfd00"><b>14</b></td>
<td style="background-color:#14fd2f"><b>13</b></td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#1bfd3f"><b>12</b></td>
<td style="background-color:#18fe00"><b>14</b></td>
<td style="background-color:#82f700"><b>16</b></td>
<td style="background-color:#8cf700"><b>16</b></td>
<td style="background-color:#3ffb00"><b>15</b></td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#b8b8ff">2.2</td>
<td style="background-color:#b8b8ff">2.2</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#bebeff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>24.07.2017</b></td>
<td style="background-color:#3afc00"><b>15</b></td>
<td style="background-color:#13fe00"><b>14</b></td>
<td style="background-color:#3ffb00"><b>15</b></td>
<td style="background-color:#3ffb00"><b>15</b></td>
<td style="background-color:#9ff600"><b>17</b></td>
<td style="background-color:#78f800"><b>16</b></td>
<td style="background-color:#7df800"><b>16</b></td>
<td style="background-color:#3ffb00"><b>15</b></td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c3c3ff">2</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#b2b2ff">2.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>25.07.2017</b></td>
<td style="background-color:#02ff05"><b>13</b></td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#1dfd00"><b>14</b></td>
<td style="background-color:#4dfa00"><b>15</b></td>
<td style="background-color:#26fd00"><b>14</b></td>
<td style="background-color:#09fe15"><b>13</b></td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#aeaeff">2.5</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#afafff">2.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>26.07.2017</b></td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#07fe10"><b>13</b></td>
<td style="background-color:#35fc00"><b>15</b></td>
<td style="background-color:#13fe00"><b>14</b></td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#cacaff">1.7</td>
<td style="background-color:#d0d0ff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>27.07.2017</b></td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#d5d5ff">1.5</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#d9d9ff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>28.07.2017</b></td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#cfcfff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>29.07.2017</b></td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#cacaff">1.8</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#cacaff">1.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>30.07.2017</b></td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#16fd34"><b>13</b></td>
<td style="background-color:#10fe25"><b>13</b></td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>31.07.2017</b></td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#ceceff">1.6</td>
<td style="background-color:#ceceff">1.7</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d4d4ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>01.08.2017</b></td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>02.08.2017</b></td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#e3e3ff">1.1</td>
<td style="background-color:#e3e3ff">1.1</td>
<td style="background-color:#e4e4ff">1</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e6e6ff">1</td>
<td style="background-color:#e6e6ff">1</td>
<td style="background-color:#e3e3ff">1.1</td>
<td style="background-color:#ddddff">1.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>03.08.2017</b></td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#a7a7ff">2.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>04.08.2017</b></td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c5c5ff">1.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>05.08.2017</b></td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#05ff00"><b>14</b></td>
<td style="background-color:#13fe00"><b>14</b></td>
<td style="background-color:#00ff00"><b>14</b></td>
<td style="background-color:#2bfc00"><b>14</b></td>
<td style="background-color:#48fb00"><b>15</b></td>
<td style="background-color:#3ffb00"><b>15</b></td>
<td style="background-color:#09fe15"><b>13</b></td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#b4b4ff">2.3</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#adadff">2.5</td>
<td style="background-color:#a9a9ff">2.7</td>
<td style="background-color:#a3a3ff">2.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>06.08.2017</b></td>
<td style="background-color:#16fd34"><b>13</b></td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#9c9cff"><b>3</b></td>
<td style="background-color:#9a9aff"><b>3.1</b></td>
<td style="background-color:#9d9dff">3</td>
<td style="background-color:#a5a5ff">2.8</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#b8b8ff">2.3</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#bdbdff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>07.08.2017</b></td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#00ff00"><b>14</b></td>
<td style="background-color:#52fa00"><b>15</b></td>
<td style="background-color:#7df800"><b>16</b></td>
<td style="background-color:#73f800"><b>16</b></td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#b7b7ff">2.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>08.08.2017</b></td>
<td style="background-color:#82f700"><b>16</b></td>
<td style="background-color:#6ff800"><b>16</b></td>
<td style="background-color:#6ff800"><b>16</b></td>
<td style="background-color:#a8f500"><b>17</b></td>
<td style="background-color:#c5f300"><b>18</b></td>
<td style="background-color:#bcf400"><b>17</b></td>
<td style="background-color:#caf300"><b>18</b></td>
<td style="background-color:#9af600"><b>17</b></td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b8b8ff">2.3</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c1c1ff">2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>09.08.2017</b></td>
<td style="background-color:#95f600"><b>17</b></td>
<td style="background-color:#9af600"><b>17</b></td>
<td style="background-color:#a8f500"><b>17</b></td>
<td style="background-color:#ffed01"><b>19</b></td>
<td style="background-color:#ffcd08"><b>20</b></td>
<td style="background-color:#ffbc0c"><b>20</b></td>
<td style="background-color:#ffbc0c"><b>20</b></td>
<td style="background-color:#e2f200"><b>18</b></td>
<td style="background-color:#bfbfff">2</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#a9a9ff">2.7</td>
<td style="background-color:#9f9fff">2.9</td>
<td style="background-color:#9595ff"><b>3.2</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>10.08.2017</b></td>
<td style="background-color:#3afc00"><b>15</b></td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#52fa00"><b>15</b></td>
<td style="background-color:#05ff00"><b>14</b></td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#9191ff"><b>3.3</b></td>
<td style="background-color:#9898ff"><b>3.1</b></td>
<td style="background-color:#a5a5ff">2.8</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#c2c2ff">2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>11.08.2017</b></td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#1dfd00"><b>14</b></td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#ceceff">1.6</td>
<td style="background-color:#ceceff">1.6</td>
<td style="background-color:#cdcdff">1.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>12.08.2017</b></td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#cacaff">1.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>13.08.2017</b></td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#cacaff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#dcdcff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>14.08.2017</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#e0e0ff">1.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>15.08.2017</b></td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#14fd2f"><b>13</b></td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e4e4ff">1</td>
<td style="background-color:#e6e6ff">1</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e8e8ff">0.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>16.08.2017</b></td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#eaeaff">0.9</td>
<td style="background-color:#ececff">0.8</td>
<td style="background-color:#eeeeff">0.8</td>
<td style="background-color:#efefff">0.7</td>
<td style="background-color:#eeeeff">0.8</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#ebebff">0.8</td>
<td style="background-color:#e8e8ff">0.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>17.08.2017</b></td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#1bfd3f"><b>12</b></td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#e3e3ff">1.1</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d5d5ff">1.5</td>
<td style="background-color:#d5d5ff">1.4</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d4d4ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>18.08.2017</b></td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#2bfc00"><b>14</b></td>
<td style="background-color:#2bfc00"><b>14</b></td>
<td style="background-color:#0efe00"><b>14</b></td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d5d5ff">1.5</td>
<td style="background-color:#d5d5ff">1.5</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d5d5ff">1.4</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d1d1ff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>19.08.2017</b></td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#10fe25"><b>13</b></td>
<td style="background-color:#0efe00"><b>14</b></td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#b8b8ff">2.3</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b1b1ff">2.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>20.08.2017</b></td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#ceceff">1.7</td>
<td style="background-color:#cfcfff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>21.08.2017</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>22.08.2017</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#d8d8ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>23.08.2017</b></td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d5d5ff">1.4</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d0d0ff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>24.08.2017</b></td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#ceceff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#e2e2ff">1.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>25.08.2017</b></td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e8e8ff">0.9</td>
<td style="background-color:#ebebff">0.8</td>
<td style="background-color:#eeeeff">0.8</td>
<td style="background-color:#f0f0ff">0.7</td>
<td style="background-color:#f2f2ff">0.7</td>
<td style="background-color:#f3f3ff">0.6</td>
<td style="background-color:#f2f2ff">0.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>26.08.2017</b></td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#eeeeff">0.8</td>
<td style="background-color:#ebebff">0.9</td>
<td style="background-color:#e8e8ff">0.9</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e6e6ff">1</td>
<td style="background-color:#e3e3ff">1.1</td>
<td style="background-color:#dedeff">1.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>27.08.2017</b></td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#d5d5ff">1.4</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d5d5ff">1.5</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#ddddff">1.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>28.08.2017</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#e0e0ff">1.2</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e4e4ff">1</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e6e6ff">1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>29.08.2017</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">0</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e8e8ff">0.9</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e3e3ff">1.1</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#d7d7ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>30.08.2017</b></td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#d5d5ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#ceceff">1.6</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>31.08.2017</b></td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#09fe15"><b>13</b></td>
<td style="background-color:#05ff00"><b>14</b></td>
<td style="background-color:#26fd00"><b>14</b></td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#b4b4ff">2.4</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#a2a2ff">2.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>01.09.2017</b></td>
<td style="background-color:#16fd34"><b>13</b></td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#3ffb00"><b>15</b></td>
<td style="background-color:#78f800"><b>16</b></td>
<td style="background-color:#87f700"><b>16</b></td>
<td style="background-color:#26fd00"><b>14</b></td>
<td style="background-color:#9d9dff">3</td>
<td style="background-color:#9a9aff"><b>3.1</b></td>
<td style="background-color:#9898ff"><b>3.1</b></td>
<td style="background-color:#9797ff"><b>3.1</b></td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#9d9dff">3</td>
<td style="background-color:#9d9dff">3</td>
<td style="background-color:#9c9cff"><b>3</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>02.09.2017</b></td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#09fe15"><b>13</b></td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#9e9eff">3</td>
<td style="background-color:#a6a6ff">2.7</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#ceceff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>03.09.2017</b></td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#ceceff">1.6</td>
<td style="background-color:#ceceff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d2d2ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>04.09.2017</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#ceceff">1.6</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#b3b3ff">2.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>05.09.2017</b></td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#02ff05"><b>13</b></td>
<td style="background-color:#09fe15"><b>13</b></td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#c3c3ff">2</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#cacaff">1.8</td>
<td style="background-color:#cacaff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>06.09.2017</b></td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#07fe10"><b>13</b></td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#aeaeff">2.5</td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#adadff">2.6</td>
<td style="background-color:#adadff">2.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>07.09.2017</b></td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#09fe15"><b>13</b></td>
<td style="background-color:#02ff05"><b>13</b></td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#a9a9ff">2.6</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#adadff">2.5</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#aeaeff">2.5</td>
<td style="background-color:#acacff">2.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>08.09.2017</b></td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#09fe15"><b>13</b></td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b8b8ff">2.2</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#cbcbff">1.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>09.09.2017</b></td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#3ffb00"><b>15</b></td>
<td style="background-color:#78f800"><b>16</b></td>
<td style="background-color:#52fa00"><b>15</b></td>
<td style="background-color:#18fe00"><b>14</b></td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#b8b8ff">2.3</td>
<td style="background-color:#b5b5ff">2.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>10.09.2017</b></td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#07fe10"><b>13</b></td>
<td style="background-color:#1dfd00"><b>14</b></td>
<td style="background-color:#0bfe1a"><b>13</b></td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c3c3ff">1.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>11.09.2017</b></td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#10fe25"><b>13</b></td>
<td style="background-color:#04ff0a"><b>13</b></td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#cacaff">1.8</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#c6c6ff">1.8</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#a4a4ff">2.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>12.09.2017</b></td>
<td style="background-color:#16fd34"><b>13</b></td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#07fe10"><b>13</b></td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#8989ff"><b>3.5</b></td>
<td style="background-color:#8989ff"><b>3.5</b></td>
<td style="background-color:#8f8fff"><b>3.4</b></td>
<td style="background-color:#9797ff"><b>3.1</b></td>
<td style="background-color:#9f9fff">2.9</td>
<td style="background-color:#a6a6ff">2.7</td>
<td style="background-color:#acacff">2.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>13.09.2017</b></td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#04ff0a"><b>13</b></td>
<td style="background-color:#1bfd3f"><b>12</b></td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b8b8ff">2.2</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c3c3ff">1.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>14.09.2017</b></td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#22fd00"><b>14</b></td>
<td style="background-color:#35fc00"><b>15</b></td>
<td style="background-color:#3ffb00"><b>15</b></td>
<td style="background-color:#a8f500"><b>17</b></td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#b4b4ff">2.4</td>
<td style="background-color:#a4a4ff">2.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>15.09.2017</b></td>
<td style="background-color:#e2f200"><b>18</b></td>
<td style="background-color:#faf000"><b>19</b></td>
<td style="background-color:#ffea01"><b>19</b></td>
<td style="background-color:#e2f200"><b>18</b></td>
<td style="background-color:#fff000"><b>19</b></td>
<td style="background-color:#d4f300"><b>18</b></td>
<td style="background-color:#caf300"><b>18</b></td>
<td style="background-color:#7df800"><b>16</b></td>
<td style="background-color:#9494ff"><b>3.2</b></td>
<td style="background-color:#8989ff"><b>3.5</b></td>
<td style="background-color:#8787ff"><b>3.6</b></td>
<td style="background-color:#8c8cff"><b>3.5</b></td>
<td style="background-color:#9494ff"><b>3.2</b></td>
<td style="background-color:#9e9eff">3</td>
<td style="background-color:#a3a3ff">2.8</td>
<td style="background-color:#a5a5ff">2.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>16.09.2017</b></td>
<td style="background-color:#48fb00"><b>15</b></td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#0efe00"><b>14</b></td>
<td style="background-color:#3afc00"><b>15</b></td>
<td style="background-color:#52fa00"><b>15</b></td>
<td style="background-color:#5bfa00"><b>15</b></td>
<td style="background-color:#05ff00"><b>14</b></td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#aeaeff">2.5</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c5c5ff">1.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>17.09.2017</b></td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#ceceff">1.6</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d5d5ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>18.09.2017</b></td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#d9d9ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>19.09.2017</b></td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e1e1ff">1.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>20.09.2017</b></td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#e0e0ff">1.1</td>
<td style="background-color:#e0e0ff">1.2</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e7e7ff">0.9</td>
<td style="background-color:#e9e9ff">0.9</td>
<td style="background-color:#e9e9ff">0.9</td>
<td style="background-color:#e9e9ff">0.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>21.09.2017</b></td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#1bfd3f"><b>12</b></td>
<td style="background-color:#1dfd00"><b>14</b></td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#e8e8ff">0.9</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e3e3ff">1.1</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#cacaff">1.8</td>
<td style="background-color:#bfbfff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>22.09.2017</b></td>
<td style="background-color:#12fe2a"><b>13</b></td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#b8b8ff">2.2</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#cacaff">1.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>23.09.2017</b></td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#cacaff">1.8</td>
<td style="background-color:#cacaff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>24.09.2017</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">0</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#cacaff">1.8</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#a6a6ff">2.8</td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#8d8dff"><b>3.4</b></td>
<td style="background-color:#9191ff"><b>3.3</b></td>
<td style="background-color:#9797ff"><b>3.2</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>25.09.2017</b></td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#9e9eff">3</td>
<td style="background-color:#a6a6ff">2.7</td>
<td style="background-color:#adadff">2.5</td>
<td style="background-color:#b4b4ff">2.4</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c3c3ff">1.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>26.09.2017</b></td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#dadaff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>27.09.2017</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#ceceff">1.6</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#c7c7ff">1.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>28.09.2017</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#cacaff">1.8</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d5d5ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>29.09.2017</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#aaaaff">2.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>30.09.2017</b></td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#2bfc00"><b>14</b></td>
<td style="background-color:#3ffb00"><b>15</b></td>
<td style="background-color:#48fb00"><b>15</b></td>
<td style="background-color:#48fb00"><b>15</b></td>
<td style="background-color:#a9a9ff">2.6</td>
<td style="background-color:#a9a9ff">2.7</td>
<td style="background-color:#a9a9ff">2.7</td>
<td style="background-color:#a9a9ff">2.7</td>
<td style="background-color:#a9a9ff">2.6</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#adadff">2.5</td>
<td style="background-color:#aeaeff">2.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>01.10.2017</b></td>
<td style="background-color:#57fa00"><b>15</b></td>
<td style="background-color:#30fc00"><b>15</b></td>
<td style="background-color:#05ff00"><b>14</b></td>
<td style="background-color:#10fe25"><b>13</b></td>
<td style="background-color:#2bfc00"><b>14</b></td>
<td style="background-color:#35fc00"><b>15</b></td>
<td style="background-color:#0afe00"><b>14</b></td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#aeaeff">2.5</td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#aeaeff">2.5</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#b4b4ff">2.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>02.10.2017</b></td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#b8b8ff">2.2</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b3b3ff">2.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>03.10.2017</b></td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b4b4ff">2.4</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#b4b4ff">2.3</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#afafff">2.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>04.10.2017</b></td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b8b8ff">2.3</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c8c8ff">1.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>05.10.2017</b></td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#ceceff">1.6</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dcdcff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>06.10.2017</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d6d6ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>07.10.2017</b></td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>08.10.2017</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#e0e0ff">1.2</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e4e4ff">1</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e8e8ff">0.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>09.10.2017</b></td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#e9e9ff">0.9</td>
<td style="background-color:#eaeaff">0.9</td>
<td style="background-color:#ebebff">0.8</td>
<td style="background-color:#ececff">0.8</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#eeeeff">0.8</td>
<td style="background-color:#efefff">0.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>10.10.2017</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#efefff">0.7</td>
<td style="background-color:#f0f0ff">0.7</td>
<td style="background-color:#f1f1ff">0.7</td>
<td style="background-color:#f1f1ff">0.7</td>
<td style="background-color:#f1f1ff">0.7</td>
<td style="background-color:#f1f1ff">0.7</td>
<td style="background-color:#f1f1ff">0.7</td>
<td style="background-color:#f1f1ff">0.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>11.10.2017</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#f1f1ff">0.7</td>
<td style="background-color:#f0f0ff">0.7</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#e9e9ff">0.9</td>
<td style="background-color:#e4e4ff">1</td>
<td style="background-color:#e0e0ff">1.2</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#d6d6ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>12.10.2017</b></td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#c9c9ff">1.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>13.10.2017</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#cacaff">1.7</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dcdcff">1.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>14.10.2017</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#cacaff">1.7</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#bebeff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>15.10.2017</b></td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#0afe00"><b>14</b></td>
<td style="background-color:#82f700"><b>16</b></td>
<td style="background-color:#18fe00"><b>14</b></td>
<td style="background-color:#02ff05"><b>13</b></td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#a2a2ff">2.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>16.10.2017</b></td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#7a77fd"><b>4.1</b></td>
<td style="background-color:#8574f0"><b>4.6</b></td>
<td style="background-color:#7a77fd"><b>4.1</b></td>
<td style="background-color:#8686ff"><b>3.6</b></td>
<td style="background-color:#8888ff"><b>3.6</b></td>
<td style="background-color:#8383ff"><b>3.7</b></td>
<td style="background-color:#8888ff"><b>3.6</b></td>
<td style="background-color:#9090ff"><b>3.3</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>17.10.2017</b></td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#0bfe1a"><b>13</b></td>
<td style="background-color:#13fe00"><b>14</b></td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#9797ff"><b>3.2</b></td>
<td style="background-color:#9c9cff"><b>3</b></td>
<td style="background-color:#a1a1ff">2.9</td>
<td style="background-color:#a9a9ff">2.7</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#b2b2ff">2.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>18.10.2017</b></td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#adadff">2.5</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#a2a2ff">2.9</td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#a3a3ff">2.8</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#aeaeff">2.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>19.10.2017</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#b4b4ff">2.4</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#b8b8ff">2.3</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b0b0ff">2.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>20.10.2017</b></td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#adadff">2.5</td>
<td style="background-color:#a9a9ff">2.7</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#babaff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>21.10.2017</b></td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#12fe2a"><b>13</b></td>
<td style="background-color:#09fe15"><b>13</b></td>
<td style="background-color:#1dfd00"><b>14</b></td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#7a77fd"><b>4.1</b></td>
<td style="background-color:#9071e4"><b>5</b></td>
<td style="background-color:#8f71e4"><b>5</b></td>
<td style="background-color:#8a73eb"><b>4.8</b></td>
<td style="background-color:#8774ee"><b>4.7</b></td>
<td style="background-color:#8474f1"><b>4.5</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>22.10.2017</b></td>
<td style="background-color:#1dfd00"><b>14</b></td>
<td style="background-color:#0bfe1a"><b>13</b></td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#1bfd3f"><b>12</b></td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#8076f6"><b>4.4</b></td>
<td style="background-color:#7d77fa"><b>4.2</b></td>
<td style="background-color:#7a78fd"><b>4.1</b></td>
<td style="background-color:#7b7bff"><b>3.9</b></td>
<td style="background-color:#8080ff"><b>3.8</b></td>
<td style="background-color:#8888ff"><b>3.6</b></td>
<td style="background-color:#8f8fff"><b>3.4</b></td>
<td style="background-color:#9898ff"><b>3.1</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>23.10.2017</b></td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#c3c3ff">2</td>
<td style="background-color:#bfbfff">2</td>
<td style="background-color:#b8b8ff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>24.10.2017</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#aeaeff">2.5</td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#ababff">2.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>25.10.2017</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#adadff">2.6</td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#adadff">2.6</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#b4b4ff">2.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>26.10.2017</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#bfbfff">2</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#ceceff">1.7</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d5d5ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>27.10.2017</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#e0e0ff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dcdcff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>28.10.2017</b></td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#e0e0ff">1.1</td>
<td style="background-color:#e0e0ff">1.1</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>29.10.2017</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#d6d6ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>30.10.2017</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#ceceff">1.6</td>
<td style="background-color:#d1d1ff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>31.10.2017</b></td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#ebebff">0.9</td>
<td style="background-color:#eeeeff">0.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>01.11.2017</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#f1f1ff">0.7</td>
<td style="background-color:#f3f3ff">0.6</td>
<td style="background-color:#f3f3ff">0.6</td>
<td style="background-color:#f1f1ff">0.7</td>
<td style="background-color:#efefff">0.7</td>
<td style="background-color:#efefff">0.7</td>
<td style="background-color:#efefff">0.7</td>
<td style="background-color:#efefff">0.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>02.11.2017</b></td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#e8e8ff">0.9</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e0e0ff">1.1</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#dcdcff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>03.11.2017</b></td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#0efe00"><b>14</b></td>
<td style="background-color:#35fc00"><b>15</b></td>
<td style="background-color:#18fe00"><b>14</b></td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#c5c5ff">1.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>04.11.2017</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#14fd2f"><b>13</b></td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#14fd2f"><b>13</b></td>
<td style="background-color:#09fe15"><b>13</b></td>
<td style="background-color:#0efe00"><b>14</b></td>
<td style="background-color:#6ff800"><b>16</b></td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#b4b4ff">2.4</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#aeaeff">2.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>05.11.2017</b></td>
<td style="background-color:#7df800"><b>16</b></td>
<td style="background-color:#57fa00"><b>15</b></td>
<td style="background-color:#8cf700"><b>16</b></td>
<td style="background-color:#b2f500"><b>17</b></td>
<td style="background-color:#d4f300"><b>18</b></td>
<td style="background-color:#ddf200"><b>18</b></td>
<td style="background-color:#bcf400"><b>17</b></td>
<td style="background-color:#3afc00"><b>15</b></td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#a2a2ff">2.8</td>
<td style="background-color:#a1a1ff">2.9</td>
<td style="background-color:#9f9fff">2.9</td>
<td style="background-color:#9b9bff"><b>3</b></td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#8c8cff"><b>3.4</b></td>
<td style="background-color:#8787ff"><b>3.6</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>06.11.2017</b></td>
<td style="background-color:#10fe25"><b>13</b></td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#8787ff"><b>3.6</b></td>
<td style="background-color:#8a8aff"><b>3.5</b></td>
<td style="background-color:#9191ff"><b>3.3</b></td>
<td style="background-color:#9898ff"><b>3.1</b></td>
<td style="background-color:#a1a1ff">2.9</td>
<td style="background-color:#a9a9ff">2.6</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#b5b5ff">2.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>07.11.2017</b></td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#12fe2a"><b>13</b></td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#0afe00"><b>14</b></td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#b4b4ff">2.3</td>
<td style="background-color:#a5a5ff">2.8</td>
<td style="background-color:#9393ff"><b>3.3</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>08.11.2017</b></td>
<td style="background-color:#18fe00"><b>14</b></td>
<td style="background-color:#52fa00"><b>15</b></td>
<td style="background-color:#2bfc00"><b>14</b></td>
<td style="background-color:#2bfc00"><b>14</b></td>
<td style="background-color:#0efe00"><b>14</b></td>
<td style="background-color:#9ff600"><b>17</b></td>
<td style="background-color:#c0f400"><b>18</b></td>
<td style="background-color:#82f700"><b>16</b></td>
<td style="background-color:#8080ff"><b>3.8</b></td>
<td style="background-color:#7c77fa"><b>4.2</b></td>
<td style="background-color:#8375f3"><b>4.5</b></td>
<td style="background-color:#8773ee"><b>4.7</b></td>
<td style="background-color:#8973eb"><b>4.8</b></td>
<td style="background-color:#8a73ea"><b>4.8</b></td>
<td style="background-color:#8973eb"><b>4.8</b></td>
<td style="background-color:#8674ef"><b>4.6</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>09.11.2017</b></td>
<td style="background-color:#35fc00"><b>15</b></td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#00ff00"><b>14</b></td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#8076f6"><b>4.4</b></td>
<td style="background-color:#7978fd"><b>4.1</b></td>
<td style="background-color:#8080ff"><b>3.8</b></td>
<td style="background-color:#8989ff"><b>3.5</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#9a9aff"><b>3.1</b></td>
<td style="background-color:#9e9eff">3</td>
<td style="background-color:#a0a0ff">2.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>10.11.2017</b></td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#a1a1ff">2.9</td>
<td style="background-color:#a3a3ff">2.8</td>
<td style="background-color:#a5a5ff">2.8</td>
<td style="background-color:#a9a9ff">2.7</td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#aeaeff">2.5</td>
<td style="background-color:#adadff">2.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>11.11.2017</b></td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#aeaeff">2.5</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b8b8ff">2.3</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c5c5ff">1.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>12.11.2017</b></td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#1dfd00"><b>14</b></td>
<td style="background-color:#60f900"><b>16</b></td>
<td style="background-color:#48fb00"><b>15</b></td>
<td style="background-color:#18fe00"><b>14</b></td>
<td style="background-color:#05ff00"><b>14</b></td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#bfbfff">2</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#b8b8ff">2.3</td>
<td style="background-color:#babaff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>13.11.2017</b></td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#bfbfff">2</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#bfbfff">2</td>
<td style="background-color:#c1c1ff">2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>14.11.2017</b></td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#ddddff">1.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>15.11.2017</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d4d4ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>16.11.2017</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d5d5ff">1.5</td>
<td style="background-color:#d5d5ff">1.4</td>
<td style="background-color:#d6d6ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>17.11.2017</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dadaff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>18.11.2017</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#dadaff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>19.11.2017</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#e0e0ff">1.2</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e3e3ff">1.1</td>
<td style="background-color:#e4e4ff">1</td>
<td style="background-color:#e6e6ff">1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>20.11.2017</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e4e4ff">1</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#ceceff">1.6</td>
<td style="background-color:#ceceff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>21.11.2017</b></td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dcdcff">1.2</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#d7d7ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>22.11.2017</b></td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#1dfd00"><b>14</b></td>
<td style="background-color:#1bfd3f"><b>12</b></td>
<td style="background-color:#78f800"><b>16</b></td>
<td style="background-color:#4dfa00"><b>15</b></td>
<td style="background-color:#35fc00"><b>15</b></td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#a2a2ff">2.8</td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#8989ff"><b>3.5</b></td>
<td style="background-color:#8989ff"><b>3.5</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>23.11.2017</b></td>
<td style="background-color:#05ff00"><b>14</b></td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#04ff0a"><b>13</b></td>
<td style="background-color:#2bfc00"><b>14</b></td>
<td style="background-color:#9af600"><b>17</b></td>
<td style="background-color:#8c8cff"><b>3.5</b></td>
<td style="background-color:#8c8cff"><b>3.4</b></td>
<td style="background-color:#8d8dff"><b>3.4</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#9696ff"><b>3.2</b></td>
<td style="background-color:#9a9aff"><b>3.1</b></td>
<td style="background-color:#9b9bff"><b>3</b></td>
<td style="background-color:#9f9fff">2.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>24.11.2017</b></td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#a6a6ff">2.8</td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#aeaeff">2.5</td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#a1a1ff">2.9</td>
<td style="background-color:#9e9eff">3</td>
<td style="background-color:#9f9fff">2.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>25.11.2017</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#a2a2ff">2.8</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#adadff">2.5</td>
<td style="background-color:#adadff">2.5</td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#adadff">2.5</td>
<td style="background-color:#b0b0ff">2.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>26.11.2017</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#c9c9ff">1.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>27.11.2017</b></td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#ceceff">1.7</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d5d5ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>28.11.2017</b></td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d5d5ff">1.4</td>
<td style="background-color:#d5d5ff">1.5</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d1d1ff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>29.11.2017</b></td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#22fd00"><b>14</b></td>
<td style="background-color:#52fa00"><b>15</b></td>
<td style="background-color:#78f800"><b>16</b></td>
<td style="background-color:#30fc00"><b>15</b></td>
<td style="background-color:#0afe00"><b>14</b></td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#a9a9ff">2.7</td>
<td style="background-color:#a2a2ff">2.9</td>
<td style="background-color:#a1a1ff">2.9</td>
<td style="background-color:#a2a2ff">2.9</td>
<td style="background-color:#a3a3ff">2.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>30.11.2017</b></td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#adadff">2.6</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b8b8ff">2.3</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#c2c2ff">2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>01.12.2017</b></td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#00ff00"><b>14</b></td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#2bfc00"><b>14</b></td>
<td style="background-color:#13fe00"><b>14</b></td>
<td style="background-color:#16fd34"><b>13</b></td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#bebeff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>02.12.2017</b></td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#bfbfff">2</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>03.12.2017</b></td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#d5d5ff">1.5</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e7e7ff">1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>04.12.2017</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#e9e9ff">0.9</td>
<td style="background-color:#eaeaff">0.9</td>
<td style="background-color:#ebebff">0.9</td>
<td style="background-color:#ebebff">0.9</td>
<td style="background-color:#ececff">0.8</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#eeeeff">0.8</td>
<td style="background-color:#eeeeff">0.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>05.12.2017</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#eeeeff">0.8</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#ececff">0.8</td>
<td style="background-color:#ebebff">0.8</td>
<td style="background-color:#ebebff">0.9</td>
<td style="background-color:#ececff">0.8</td>
<td style="background-color:#ececff">0.8</td>
<td style="background-color:#ececff">0.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>06.12.2017</b></td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#eeeeff">0.8</td>
<td style="background-color:#efefff">0.8</td>
<td style="background-color:#efefff">0.7</td>
<td style="background-color:#eeeeff">0.8</td>
<td style="background-color:#e9e9ff">0.9</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#dbdbff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>07.12.2017</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#ceceff">1.7</td>
<td style="background-color:#ceceff">1.7</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d5d5ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>08.12.2017</b></td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#d5d5ff">1.4</td>
<td style="background-color:#d5d5ff">1.5</td>
<td style="background-color:#d5d5ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#cacaff">1.8</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#b9b9ff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>09.12.2017</b></td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#adadff">2.6</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#adadff">2.6</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#b9b9ff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>10.12.2017</b></td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#0bfe1a"><b>13</b></td>
<td style="background-color:#c0f400"><b>18</b></td>
<td style="background-color:#ffc30a"><b>20</b></td>
<td style="background-color:#ff6221"><b>23</b></td>
<td style="background-color:#ff11ab"><b>30</b></td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#bfbfff">2</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#8181ff"><b>3.7</b></td>
<td style="background-color:#9171e2"><b>5.1</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>11.12.2017</b></td>
<td style="background-color:#ff1797"><b>30</b></td>
<td style="background-color:#ff2d40"><b>26</b></td>
<td style="background-color:#ffc30a"><b>20</b></td>
<td style="background-color:#ffd307"><b>20</b></td>
<td style="background-color:#ffb60d"><b>21</b></td>
<td style="background-color:#ff9615"><b>22</b></td>
<td style="background-color:#ffcd08"><b>20</b></td>
<td style="background-color:#3afc00"><b>15</b></td>
<td style="background-color:#b067bf"><b>6.5</b></td>
<td style="background-color:#c262aa"><b>7.3</b></td>
<td style="background-color:#c561a6"><b>7.4</b></td>
<td style="background-color:#c262aa"><b>7.3</b></td>
<td style="background-color:#bf63ae"><b>7.1</b></td>
<td style="background-color:#ba64b3"><b>6.9</b></td>
<td style="background-color:#b367bb"><b>6.6</b></td>
<td style="background-color:#a96ac7"><b>6.2</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>12.12.2017</b></td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#9e6dd3"><b>5.7</b></td>
<td style="background-color:#956fde"><b>5.3</b></td>
<td style="background-color:#8c72e8"><b>4.9</b></td>
<td style="background-color:#8574f1"><b>4.6</b></td>
<td style="background-color:#7d76f9"><b>4.2</b></td>
<td style="background-color:#7979ff"><b>4</b></td>
<td style="background-color:#8282ff"><b>3.7</b></td>
<td style="background-color:#8a8aff"><b>3.5</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>13.12.2017</b></td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#9b9bff"><b>3</b></td>
<td style="background-color:#a2a2ff">2.8</td>
<td style="background-color:#a9a9ff">2.7</td>
<td style="background-color:#aeaeff">2.5</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b8b8ff">2.3</td>
<td style="background-color:#b8b8ff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>14.12.2017</b></td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#a1a1ff">2.9</td>
<td style="background-color:#9696ff"><b>3.2</b></td>
<td style="background-color:#8a8aff"><b>3.5</b></td>
<td style="background-color:#7978fe"><b>4</b></td>
<td style="background-color:#8474f1"><b>4.5</b></td>
<td style="background-color:#8a73ea"><b>4.8</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>15.12.2017</b></td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#0bfe1a"><b>13</b></td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#0bfe1a"><b>13</b></td>
<td style="background-color:#0afe00"><b>14</b></td>
<td style="background-color:#30fc00"><b>15</b></td>
<td style="background-color:#3afc00"><b>15</b></td>
<td style="background-color:#8a73ea"><b>4.8</b></td>
<td style="background-color:#8a73ea"><b>4.8</b></td>
<td style="background-color:#8c72e8"><b>4.9</b></td>
<td style="background-color:#8e71e6"><b>5</b></td>
<td style="background-color:#8f71e5"><b>5</b></td>
<td style="background-color:#8d72e7"><b>4.9</b></td>
<td style="background-color:#8973ec"><b>4.8</b></td>
<td style="background-color:#8574f0"><b>4.6</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>16.12.2017</b></td>
<td style="background-color:#04ff0a"><b>13</b></td>
<td style="background-color:#12fe2a"><b>13</b></td>
<td style="background-color:#14fd2f"><b>13</b></td>
<td style="background-color:#0bfe1a"><b>13</b></td>
<td style="background-color:#04ff0a"><b>13</b></td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#8076f5"><b>4.4</b></td>
<td style="background-color:#7b77fc"><b>4.1</b></td>
<td style="background-color:#7c7cff"><b>3.9</b></td>
<td style="background-color:#8484ff"><b>3.7</b></td>
<td style="background-color:#8c8cff"><b>3.4</b></td>
<td style="background-color:#9494ff"><b>3.2</b></td>
<td style="background-color:#9a9aff"><b>3.1</b></td>
<td style="background-color:#a1a1ff">2.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>17.12.2017</b></td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c9c9ff">1.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>18.12.2017</b></td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#cacaff">1.8</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#ceceff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>19.12.2017</b></td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c1c1ff">2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>20.12.2017</b></td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">0</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c5c5ff">1.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>21.12.2017</b></td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#cacaff">1.7</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d2d2ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>22.12.2017</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d5d5ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#dcdcff">1.2</td>
<td style="background-color:#dcdcff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>23.12.2017</b></td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#d9d9ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d5d5ff">1.4</td>
<td style="background-color:#d5d5ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#ddddff">1.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>24.12.2017</b></td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e0e0ff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>25.12.2017</b></td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#26fd00"><b>14</b></td>
<td style="background-color:#3ffb00"><b>15</b></td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#bfbfff">2</td>
<td style="background-color:#babaff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>26.12.2017</b></td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#57fa00"><b>15</b></td>
<td style="background-color:#b2f500"><b>17</b></td>
<td style="background-color:#ff9f13"><b>21</b></td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#a9a9ff">2.7</td>
<td style="background-color:#a6a6ff">2.8</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#a1a1ff">2.9</td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#7878ff"><b>4</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>27.12.2017</b></td>
<td style="background-color:#ff5f22"><b>23</b></td>
<td style="background-color:#9af600"><b>17</b></td>
<td style="background-color:#9af600"><b>17</b></td>
<td style="background-color:#0efe00"><b>14</b></td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#6af900"><b>16</b></td>
<td style="background-color:#8973eb"><b>4.8</b></td>
<td style="background-color:#9270e2"><b>5.1</b></td>
<td style="background-color:#976fdb"><b>5.4</b></td>
<td style="background-color:#9c6dd5"><b>5.6</b></td>
<td style="background-color:#9c6dd6"><b>5.6</b></td>
<td style="background-color:#956fde"><b>5.3</b></td>
<td style="background-color:#8b72e9"><b>4.9</b></td>
<td style="background-color:#8474f1"><b>4.6</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>28.12.2017</b></td>
<td style="background-color:#b2f500"><b>17</b></td>
<td style="background-color:#95f600"><b>17</b></td>
<td style="background-color:#5bfa00"><b>15</b></td>
<td style="background-color:#22fd00"><b>14</b></td>
<td style="background-color:#48fb00"><b>15</b></td>
<td style="background-color:#00ff00"><b>14</b></td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#8175f4"><b>4.4</b></td>
<td style="background-color:#8076f6"><b>4.3</b></td>
<td style="background-color:#7f76f7"><b>4.3</b></td>
<td style="background-color:#7d77f9"><b>4.2</b></td>
<td style="background-color:#7a77fd"><b>4.1</b></td>
<td style="background-color:#7b7bff"><b>3.9</b></td>
<td style="background-color:#8383ff"><b>3.7</b></td>
<td style="background-color:#8b8bff"><b>3.5</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>29.12.2017</b></td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#9393ff"><b>3.3</b></td>
<td style="background-color:#9a9aff"><b>3.1</b></td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#a5a5ff">2.8</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#a1a1ff">2.9</td>
<td style="background-color:#9e9eff">3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>30.12.2017</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#9a9aff"><b>3.1</b></td>
<td style="background-color:#9393ff"><b>3.3</b></td>
<td style="background-color:#8686ff"><b>3.6</b></td>
<td style="background-color:#7c7cff"><b>3.9</b></td>
<td style="background-color:#7979ff"><b>4</b></td>
<td style="background-color:#7a7aff"><b>4</b></td>
<td style="background-color:#7979ff"><b>4</b></td>
<td style="background-color:#7978fe"><b>4</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>31.12.2017</b></td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#22fd00"><b>14</b></td>
<td style="background-color:#ecf100"><b>18</b></td>
<td style="background-color:#1dfd00"><b>14</b></td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#7978fe"><b>4</b></td>
<td style="background-color:#7878ff"><b>4</b></td>
<td style="background-color:#7978fe"><b>4</b></td>
<td style="background-color:#7f76f7"><b>4.3</b></td>
<td style="background-color:#8b73ea"><b>4.8</b></td>
<td style="background-color:#9071e3"><b>5.1</b></td>
<td style="background-color:#9071e3"><b>5.1</b></td>
<td style="background-color:#9171e2"><b>5.1</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>01.01.2018</b></td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#9171e2"><b>5.1</b></td>
<td style="background-color:#9071e3"><b>5.1</b></td>
<td style="background-color:#8e71e5"><b>5</b></td>
<td style="background-color:#8b72e9"><b>4.8</b></td>
<td style="background-color:#8774ee"><b>4.7</b></td>
<td style="background-color:#8375f3"><b>4.5</b></td>
<td style="background-color:#8076f6"><b>4.3</b></td>
<td style="background-color:#7f76f7"><b>4.3</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>02.01.2018</b></td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#7f76f7"><b>4.3</b></td>
<td style="background-color:#7c77fa"><b>4.2</b></td>
<td style="background-color:#7878ff"><b>4</b></td>
<td style="background-color:#8080ff"><b>3.8</b></td>
<td style="background-color:#8989ff"><b>3.5</b></td>
<td style="background-color:#8f8fff"><b>3.4</b></td>
<td style="background-color:#9494ff"><b>3.2</b></td>
<td style="background-color:#9797ff"><b>3.1</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>03.01.2018</b></td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#9b9bff"><b>3</b></td>
<td style="background-color:#9d9dff">3</td>
<td style="background-color:#9a9aff"><b>3.1</b></td>
<td style="background-color:#8b8bff"><b>3.5</b></td>
<td style="background-color:#7979ff"><b>4</b></td>
<td style="background-color:#8076f6"><b>4.3</b></td>
<td style="background-color:#8873ed"><b>4.7</b></td>
<td style="background-color:#8e72e6"><b>5</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>04.01.2018</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#8d72e6"><b>4.9</b></td>
<td style="background-color:#8873ed"><b>4.7</b></td>
<td style="background-color:#8076f6"><b>4.4</b></td>
<td style="background-color:#7978fe"><b>4</b></td>
<td style="background-color:#8080ff"><b>3.8</b></td>
<td style="background-color:#8686ff"><b>3.6</b></td>
<td style="background-color:#8888ff"><b>3.6</b></td>
<td style="background-color:#8888ff"><b>3.6</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>05.01.2018</b></td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#2bfc00"><b>14</b></td>
<td style="background-color:#02ff05"><b>13</b></td>
<td style="background-color:#16fd34"><b>13</b></td>
<td style="background-color:#12fe2a"><b>13</b></td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#1bfd3f"><b>12</b></td>
<td style="background-color:#8686ff"><b>3.6</b></td>
<td style="background-color:#8383ff"><b>3.7</b></td>
<td style="background-color:#7e7eff"><b>3.8</b></td>
<td style="background-color:#7c7cff"><b>3.9</b></td>
<td style="background-color:#7e7eff"><b>3.8</b></td>
<td style="background-color:#7d7dff"><b>3.9</b></td>
<td style="background-color:#7a77fd"><b>4.1</b></td>
<td style="background-color:#8076f6"><b>4.4</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>06.01.2018</b></td>
<td style="background-color:#0bfe1a"><b>13</b></td>
<td style="background-color:#10fe25"><b>13</b></td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#00ff00"><b>14</b></td>
<td style="background-color:#07fe10"><b>13</b></td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#8574f1"><b>4.6</b></td>
<td style="background-color:#8574f0"><b>4.6</b></td>
<td style="background-color:#8375f2"><b>4.5</b></td>
<td style="background-color:#7f76f6"><b>4.3</b></td>
<td style="background-color:#7e76f8"><b>4.3</b></td>
<td style="background-color:#8375f3"><b>4.5</b></td>
<td style="background-color:#8d72e7"><b>4.9</b></td>
<td style="background-color:#9470df"><b>5.2</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>07.01.2018</b></td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#00ff00"><b>14</b></td>
<td style="background-color:#9af600"><b>17</b></td>
<td style="background-color:#c5f300"><b>18</b></td>
<td style="background-color:#ffed01"><b>19</b></td>
<td style="background-color:#ffc60a"><b>20</b></td>
<td style="background-color:#a4f500"><b>17</b></td>
<td style="background-color:#82f700"><b>16</b></td>
<td style="background-color:#9270e2"><b>5.1</b></td>
<td style="background-color:#8c72e8"><b>4.9</b></td>
<td style="background-color:#8873ec"><b>4.7</b></td>
<td style="background-color:#8873ec"><b>4.7</b></td>
<td style="background-color:#8873ec"><b>4.7</b></td>
<td style="background-color:#8774ee"><b>4.7</b></td>
<td style="background-color:#8375f2"><b>4.5</b></td>
<td style="background-color:#7f76f7"><b>4.3</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>08.01.2018</b></td>
<td style="background-color:#57fa00"><b>15</b></td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#7b77fc"><b>4.1</b></td>
<td style="background-color:#7c7cff"><b>3.9</b></td>
<td style="background-color:#8888ff"><b>3.6</b></td>
<td style="background-color:#9393ff"><b>3.2</b></td>
<td style="background-color:#9e9eff">3</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#b3b3ff">2.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>09.01.2018</b></td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#14fd2f"><b>13</b></td>
<td style="background-color:#5bfa00"><b>15</b></td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#b4b4ff">2.4</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#9e9eff">2.9</td>
<td style="background-color:#9a9aff"><b>3.1</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>10.01.2018</b></td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#e2f200"><b>18</b></td>
<td style="background-color:#6ff800"><b>16</b></td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#8c8cff"><b>3.4</b></td>
<td style="background-color:#7c77fa"><b>4.2</b></td>
<td style="background-color:#8773ed"><b>4.7</b></td>
<td style="background-color:#8b72e9"><b>4.8</b></td>
<td style="background-color:#8f71e4"><b>5</b></td>
<td style="background-color:#9570de"><b>5.3</b></td>
<td style="background-color:#9c6dd6"><b>5.6</b></td>
<td style="background-color:#9f6cd2"><b>5.7</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>11.01.2018</b></td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#26fd00"><b>14</b></td>
<td style="background-color:#1dfd00"><b>14</b></td>
<td style="background-color:#16fd34"><b>13</b></td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#9c6dd6"><b>5.6</b></td>
<td style="background-color:#986fdb"><b>5.4</b></td>
<td style="background-color:#9270e1"><b>5.2</b></td>
<td style="background-color:#8c72e8"><b>4.9</b></td>
<td style="background-color:#8774ee"><b>4.7</b></td>
<td style="background-color:#8175f5"><b>4.4</b></td>
<td style="background-color:#7b77fc"><b>4.1</b></td>
<td style="background-color:#7e7eff"><b>3.8</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>12.01.2018</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#16fd34"><b>13</b></td>
<td style="background-color:#8888ff"><b>3.6</b></td>
<td style="background-color:#9393ff"><b>3.3</b></td>
<td style="background-color:#9e9eff">2.9</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#b4b4ff">2.4</td>
<td style="background-color:#b8b8ff">2.2</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#a0a0ff">2.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>13.01.2018</b></td>
<td style="background-color:#05ff00"><b>14</b></td>
<td style="background-color:#57fa00"><b>15</b></td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#8a8aff"><b>3.5</b></td>
<td style="background-color:#8181ff"><b>3.8</b></td>
<td style="background-color:#8484ff"><b>3.7</b></td>
<td style="background-color:#8585ff"><b>3.6</b></td>
<td style="background-color:#8484ff"><b>3.7</b></td>
<td style="background-color:#7f7fff"><b>3.8</b></td>
<td style="background-color:#7979ff"><b>4</b></td>
<td style="background-color:#7878ff"><b>4</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>14.01.2018</b></td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#7979ff"><b>4</b></td>
<td style="background-color:#7c7cff"><b>3.9</b></td>
<td style="background-color:#7f7fff"><b>3.8</b></td>
<td style="background-color:#8282ff"><b>3.7</b></td>
<td style="background-color:#8787ff"><b>3.6</b></td>
<td style="background-color:#8b8bff"><b>3.5</b></td>
<td style="background-color:#9090ff"><b>3.3</b></td>
<td style="background-color:#9696ff"><b>3.2</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>15.01.2018</b></td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#9e9eff">3</td>
<td style="background-color:#a5a5ff">2.8</td>
<td style="background-color:#adadff">2.5</td>
<td style="background-color:#b4b4ff">2.4</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bfbfff">2</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c7c7ff">1.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>16.01.2018</b></td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#a1a1ff">2.9</td>
<td style="background-color:#8c8cff"><b>3.4</b></td>
<td style="background-color:#7a7aff"><b>3.9</b></td>
<td style="background-color:#8076f6"><b>4.3</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>17.01.2018</b></td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#09fe15"><b>13</b></td>
<td style="background-color:#3ffb00"><b>15</b></td>
<td style="background-color:#60f900"><b>16</b></td>
<td style="background-color:#1dfd00"><b>14</b></td>
<td style="background-color:#30fc00"><b>15</b></td>
<td style="background-color:#02ff05"><b>13</b></td>
<td style="background-color:#8774ee"><b>4.7</b></td>
<td style="background-color:#8d72e7"><b>4.9</b></td>
<td style="background-color:#9370e0"><b>5.2</b></td>
<td style="background-color:#9a6ed8"><b>5.5</b></td>
<td style="background-color:#a86ac8"><b>6.1</b></td>
<td style="background-color:#b965b4"><b>6.9</b></td>
<td style="background-color:#c661a6"><b>7.5</b></td>
<td style="background-color:#c760a4"><b>7.5</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>18.01.2018</b></td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#02ff05"><b>13</b></td>
<td style="background-color:#12fe2a"><b>13</b></td>
<td style="background-color:#c162ab"><b>7.3</b></td>
<td style="background-color:#b765b7"><b>6.8</b></td>
<td style="background-color:#ac69c4"><b>6.3</b></td>
<td style="background-color:#a06cd1"><b>5.8</b></td>
<td style="background-color:#966fdd"><b>5.3</b></td>
<td style="background-color:#8c72e7"><b>4.9</b></td>
<td style="background-color:#8674ef"><b>4.6</b></td>
<td style="background-color:#8175f5"><b>4.4</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>19.01.2018</b></td>
<td style="background-color:#07fe10"><b>13</b></td>
<td style="background-color:#00ff00"><b>14</b></td>
<td style="background-color:#30fc00"><b>15</b></td>
<td style="background-color:#43fb00"><b>15</b></td>
<td style="background-color:#0efe00"><b>14</b></td>
<td style="background-color:#0efe00"><b>14</b></td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#7d76f9"><b>4.2</b></td>
<td style="background-color:#7a77fc"><b>4.1</b></td>
<td style="background-color:#7878ff"><b>4</b></td>
<td style="background-color:#7c7cff"><b>3.9</b></td>
<td style="background-color:#8383ff"><b>3.7</b></td>
<td style="background-color:#8a8aff"><b>3.5</b></td>
<td style="background-color:#9090ff"><b>3.3</b></td>
<td style="background-color:#9696ff"><b>3.2</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>20.01.2018</b></td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#9a9aff"><b>3.1</b></td>
<td style="background-color:#9d9dff">3</td>
<td style="background-color:#9d9dff">3</td>
<td style="background-color:#9e9eff">3</td>
<td style="background-color:#9f9fff">2.9</td>
<td style="background-color:#a1a1ff">2.9</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#a6a6ff">2.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>21.01.2018</b></td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#adadff">2.6</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bfbfff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>22.01.2018</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#aeaeff">2.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>23.01.2018</b></td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#adadff">2.5</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#b4b4ff">2.4</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#b9b9ff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>24.01.2018</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#a6a6ff">2.7</td>
<td style="background-color:#9e9eff">3</td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#7c7cff"><b>3.9</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>25.01.2018</b></td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#87f700"><b>16</b></td>
<td style="background-color:#a8f500"><b>17</b></td>
<td style="background-color:#57fa00"><b>15</b></td>
<td style="background-color:#0efe00"><b>14</b></td>
<td style="background-color:#8375f3"><b>4.5</b></td>
<td style="background-color:#8973ec"><b>4.8</b></td>
<td style="background-color:#8a73ea"><b>4.8</b></td>
<td style="background-color:#8973eb"><b>4.8</b></td>
<td style="background-color:#8873ec"><b>4.7</b></td>
<td style="background-color:#8873ed"><b>4.7</b></td>
<td style="background-color:#8873ed"><b>4.7</b></td>
<td style="background-color:#8774ee"><b>4.6</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>26.01.2018</b></td>
<td style="background-color:#3afc00"><b>15</b></td>
<td style="background-color:#04ff0a"><b>13</b></td>
<td style="background-color:#04ff0a"><b>13</b></td>
<td style="background-color:#3ffb00"><b>15</b></td>
<td style="background-color:#90f700"><b>17</b></td>
<td style="background-color:#a8f500"><b>17</b></td>
<td style="background-color:#73f800"><b>16</b></td>
<td style="background-color:#2bfc00"><b>14</b></td>
<td style="background-color:#8674ef"><b>4.6</b></td>
<td style="background-color:#8574f0"><b>4.6</b></td>
<td style="background-color:#8674ef"><b>4.6</b></td>
<td style="background-color:#8674ef"><b>4.6</b></td>
<td style="background-color:#8474f1"><b>4.6</b></td>
<td style="background-color:#8175f5"><b>4.4</b></td>
<td style="background-color:#7d77f9"><b>4.2</b></td>
<td style="background-color:#7978fe"><b>4</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>27.01.2018</b></td>
<td style="background-color:#00ff00"><b>14</b></td>
<td style="background-color:#09fe15"><b>13</b></td>
<td style="background-color:#10fe25"><b>13</b></td>
<td style="background-color:#22fd00"><b>14</b></td>
<td style="background-color:#60f900"><b>16</b></td>
<td style="background-color:#8cf700"><b>16</b></td>
<td style="background-color:#6ff800"><b>16</b></td>
<td style="background-color:#00ff00"><b>14</b></td>
<td style="background-color:#7e7eff"><b>3.8</b></td>
<td style="background-color:#8686ff"><b>3.6</b></td>
<td style="background-color:#8f8fff"><b>3.4</b></td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#9a9aff"><b>3.1</b></td>
<td style="background-color:#9d9dff">3</td>
<td style="background-color:#a0a0ff">2.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>28.01.2018</b></td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#a5a5ff">2.8</td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b4b4ff">2.4</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b7b7ff">2.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>29.01.2018</b></td>
<td style="background-color:#0efe00"><b>14</b></td>
<td style="background-color:#10fe25"><b>13</b></td>
<td style="background-color:#13fe00"><b>14</b></td>
<td style="background-color:#05ff00"><b>14</b></td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#bdbdff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>30.01.2018</b></td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#bfbfff">2</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#cacaff">1.8</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#ceceff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>31.01.2018</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#c7c7ff">1.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>01.02.2018</b></td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#7df800"><b>16</b></td>
<td style="background-color:#ffc00b"><b>20</b></td>
<td style="background-color:#ff9c13"><b>21</b></td>
<td style="background-color:#ffac10"><b>21</b></td>
<td style="background-color:#ff9c13"><b>21</b></td>
<td style="background-color:#ffc60a"><b>20</b></td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#9696ff"><b>3.2</b></td>
<td style="background-color:#8585ff"><b>3.6</b></td>
<td style="background-color:#7d77f9"><b>4.2</b></td>
<td style="background-color:#8773ed"><b>4.7</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>02.02.2018</b></td>
<td style="background-color:#ffea01"><b>19</b></td>
<td style="background-color:#bcf400"><b>17</b></td>
<td style="background-color:#a4f500"><b>17</b></td>
<td style="background-color:#6ff800"><b>16</b></td>
<td style="background-color:#a8f500"><b>17</b></td>
<td style="background-color:#90f700"><b>17</b></td>
<td style="background-color:#30fc00"><b>15</b></td>
<td style="background-color:#1bfd3f"><b>12</b></td>
<td style="background-color:#8b72ea"><b>4.8</b></td>
<td style="background-color:#8973ec"><b>4.8</b></td>
<td style="background-color:#8574f0"><b>4.6</b></td>
<td style="background-color:#8076f6"><b>4.3</b></td>
<td style="background-color:#7978fe"><b>4</b></td>
<td style="background-color:#8080ff"><b>3.8</b></td>
<td style="background-color:#8888ff"><b>3.6</b></td>
<td style="background-color:#9090ff"><b>3.4</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>03.02.2018</b></td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#09fe15"><b>13</b></td>
<td style="background-color:#1dfd00"><b>14</b></td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#a2a2ff">2.8</td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#b4b4ff">2.3</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#adadff">2.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>04.02.2018</b></td>
<td style="background-color:#57fa00"><b>15</b></td>
<td style="background-color:#7df800"><b>16</b></td>
<td style="background-color:#d9f200"><b>18</b></td>
<td style="background-color:#95f600"><b>17</b></td>
<td style="background-color:#caf300"><b>18</b></td>
<td style="background-color:#adf500"><b>17</b></td>
<td style="background-color:#52fa00"><b>15</b></td>
<td style="background-color:#05ff00"><b>14</b></td>
<td style="background-color:#9e9eff">3</td>
<td style="background-color:#8c8cff"><b>3.4</b></td>
<td style="background-color:#7a7aff"><b>4</b></td>
<td style="background-color:#8076f6"><b>4.3</b></td>
<td style="background-color:#8275f3"><b>4.5</b></td>
<td style="background-color:#8175f4"><b>4.4</b></td>
<td style="background-color:#8075f5"><b>4.4</b></td>
<td style="background-color:#7f76f6"><b>4.3</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>05.02.2018</b></td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#22fd00"><b>14</b></td>
<td style="background-color:#78f800"><b>16</b></td>
<td style="background-color:#95f600"><b>17</b></td>
<td style="background-color:#e7f100"><b>18</b></td>
<td style="background-color:#7c77fa"><b>4.2</b></td>
<td style="background-color:#7978fd"><b>4.1</b></td>
<td style="background-color:#7b77fc"><b>4.1</b></td>
<td style="background-color:#7f76f7"><b>4.3</b></td>
<td style="background-color:#8275f4"><b>4.4</b></td>
<td style="background-color:#8475f1"><b>4.5</b></td>
<td style="background-color:#8674ef"><b>4.6</b></td>
<td style="background-color:#8c72e8"><b>4.9</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>06.02.2018</b></td>
<td style="background-color:#87f700"><b>16</b></td>
<td style="background-color:#22fd00"><b>14</b></td>
<td style="background-color:#18fe00"><b>14</b></td>
<td style="background-color:#52fa00"><b>15</b></td>
<td style="background-color:#95f600"><b>17</b></td>
<td style="background-color:#a4f500"><b>17</b></td>
<td style="background-color:#18fe00"><b>14</b></td>
<td style="background-color:#1bfd3f"><b>12</b></td>
<td style="background-color:#8b72ea"><b>4.8</b></td>
<td style="background-color:#8275f4"><b>4.4</b></td>
<td style="background-color:#7978fe"><b>4</b></td>
<td style="background-color:#8181ff"><b>3.7</b></td>
<td style="background-color:#8f8fff"><b>3.4</b></td>
<td style="background-color:#9d9dff">3</td>
<td style="background-color:#a6a6ff">2.7</td>
<td style="background-color:#acacff">2.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>07.02.2018</b></td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#0afe00"><b>14</b></td>
<td style="background-color:#1dfd00"><b>14</b></td>
<td style="background-color:#4dfa00"><b>15</b></td>
<td style="background-color:#1dfd00"><b>14</b></td>
<td style="background-color:#14fd2f"><b>13</b></td>
<td style="background-color:#a3a3ff">2.8</td>
<td style="background-color:#8282ff"><b>3.7</b></td>
<td style="background-color:#8574f0"><b>4.6</b></td>
<td style="background-color:#9071e4"><b>5</b></td>
<td style="background-color:#9270e1"><b>5.2</b></td>
<td style="background-color:#9171e3"><b>5.1</b></td>
<td style="background-color:#8c72e8"><b>4.9</b></td>
<td style="background-color:#8674ef"><b>4.6</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>08.02.2018</b></td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#7f76f7"><b>4.3</b></td>
<td style="background-color:#7979ff"><b>4</b></td>
<td style="background-color:#8585ff"><b>3.6</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#9e9eff">3</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#b8b8ff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>09.02.2018</b></td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#02ff05"><b>13</b></td>
<td style="background-color:#48fb00"><b>15</b></td>
<td style="background-color:#2bfc00"><b>14</b></td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#b8b8ff">2.2</td>
<td style="background-color:#b1b1ff">2.5</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#a9a9ff">2.7</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#a1a1ff">2.9</td>
<td style="background-color:#9a9aff"><b>3.1</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>10.02.2018</b></td>
<td style="background-color:#3afc00"><b>15</b></td>
<td style="background-color:#2bfc00"><b>14</b></td>
<td style="background-color:#43fb00"><b>15</b></td>
<td style="background-color:#90f700"><b>17</b></td>
<td style="background-color:#adf500"><b>17</b></td>
<td style="background-color:#6af900"><b>16</b></td>
<td style="background-color:#22fd00"><b>14</b></td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#8f8fff"><b>3.4</b></td>
<td style="background-color:#7f7fff"><b>3.8</b></td>
<td style="background-color:#7c77fb"><b>4.2</b></td>
<td style="background-color:#7f76f7"><b>4.3</b></td>
<td style="background-color:#7e76f8"><b>4.3</b></td>
<td style="background-color:#7a77fd"><b>4.1</b></td>
<td style="background-color:#7e7eff"><b>3.8</b></td>
<td style="background-color:#8888ff"><b>3.6</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>11.02.2018</b></td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#9b9bff"><b>3.1</b></td>
<td style="background-color:#9e9eff">3</td>
<td style="background-color:#9e9eff">3</td>
<td style="background-color:#9e9eff">3</td>
<td style="background-color:#9d9dff">3</td>
<td style="background-color:#9d9dff">3</td>
<td style="background-color:#9e9eff">3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>12.02.2018</b></td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#9e9eff">2.9</td>
<td style="background-color:#9f9fff">2.9</td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#9f9fff">2.9</td>
<td style="background-color:#9e9eff">3</td>
<td style="background-color:#9d9dff">3</td>
<td style="background-color:#9a9aff"><b>3.1</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>13.02.2018</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#07fe10"><b>13</b></td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#9696ff"><b>3.2</b></td>
<td style="background-color:#9494ff"><b>3.2</b></td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#8f8fff"><b>3.4</b></td>
<td style="background-color:#7c7cff"><b>3.9</b></td>
<td style="background-color:#7c77fa"><b>4.2</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>14.02.2018</b></td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#7c77fa"><b>4.2</b></td>
<td style="background-color:#7978fe"><b>4</b></td>
<td style="background-color:#7d7dff"><b>3.9</b></td>
<td style="background-color:#8383ff"><b>3.7</b></td>
<td style="background-color:#8686ff"><b>3.6</b></td>
<td style="background-color:#8989ff"><b>3.5</b></td>
<td style="background-color:#8d8dff"><b>3.4</b></td>
<td style="background-color:#9393ff"><b>3.3</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>15.02.2018</b></td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#9898ff"><b>3.1</b></td>
<td style="background-color:#9c9cff"><b>3</b></td>
<td style="background-color:#9b9bff"><b>3</b></td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#8282ff"><b>3.7</b></td>
<td style="background-color:#8175f5"><b>4.4</b></td>
<td style="background-color:#8973eb"><b>4.8</b></td>
<td style="background-color:#8c72e8"><b>4.9</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>16.02.2018</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#8b72e9"><b>4.8</b></td>
<td style="background-color:#8973ec"><b>4.7</b></td>
<td style="background-color:#8674ef"><b>4.6</b></td>
<td style="background-color:#8375f2"><b>4.5</b></td>
<td style="background-color:#8076f6"><b>4.4</b></td>
<td style="background-color:#7d77fa"><b>4.2</b></td>
<td style="background-color:#7978fe"><b>4.1</b></td>
<td style="background-color:#7c7cff"><b>3.9</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>17.02.2018</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#8282ff"><b>3.7</b></td>
<td style="background-color:#8888ff"><b>3.5</b></td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#9191ff"><b>3.3</b></td>
<td style="background-color:#9494ff"><b>3.2</b></td>
<td style="background-color:#9797ff"><b>3.2</b></td>
<td style="background-color:#9a9aff"><b>3.1</b></td>
<td style="background-color:#9b9bff"><b>3</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>18.02.2018</b></td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#9f9fff">2.9</td>
<td style="background-color:#a5a5ff">2.8</td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#bcbcff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>19.02.2018</b></td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#0bfe1a"><b>13</b></td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#9a9aff"><b>3.1</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>20.02.2018</b></td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#9797ff"><b>3.1</b></td>
<td style="background-color:#9797ff"><b>3.1</b></td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#9d9dff">3</td>
<td style="background-color:#a1a1ff">2.9</td>
<td style="background-color:#a1a1ff">2.9</td>
<td style="background-color:#9f9fff">2.9</td>
<td style="background-color:#9c9cff"><b>3</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>21.02.2018</b></td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#9898ff"><b>3.1</b></td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#9c9cff"><b>3</b></td>
<td style="background-color:#9f9fff">2.9</td>
<td style="background-color:#a2a2ff">2.9</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#a5a5ff">2.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>22.02.2018</b></td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#a5a5ff">2.8</td>
<td style="background-color:#a3a3ff">2.8</td>
<td style="background-color:#a1a1ff">2.9</td>
<td style="background-color:#a3a3ff">2.8</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#b8b8ff">2.2</td>
<td style="background-color:#c0c0ff">2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>23.02.2018</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#d9d9ff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>24.02.2018</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#c9c9ff">1.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>25.02.2018</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#b8b8ff">2.2</td>
<td style="background-color:#a9a9ff">2.7</td>
<td style="background-color:#a2a2ff">2.8</td>
<td style="background-color:#a3a3ff">2.8</td>
<td style="background-color:#a9a9ff">2.7</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b9b9ff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>26.02.2018</b></td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#04ff0a"><b>13</b></td>
<td style="background-color:#3ffb00"><b>15</b></td>
<td style="background-color:#adf500"><b>17</b></td>
<td style="background-color:#5bfa00"><b>15</b></td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#adadff">2.5</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#a3a3ff">2.8</td>
<td style="background-color:#a1a1ff">2.9</td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#a2a2ff">2.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>27.02.2018</b></td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#3ffb00"><b>15</b></td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#60f900"><b>16</b></td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#b4b4ff">2.4</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#a1a1ff">2.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>28.02.2018</b></td>
<td style="background-color:#cff300"><b>18</b></td>
<td style="background-color:#6af900"><b>16</b></td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#65f900"><b>16</b></td>
<td style="background-color:#cff300"><b>18</b></td>
<td style="background-color:#6ff800"><b>16</b></td>
<td style="background-color:#65f900"><b>16</b></td>
<td style="background-color:#8888ff"><b>3.6</b></td>
<td style="background-color:#7a77fd"><b>4.1</b></td>
<td style="background-color:#7c77fb"><b>4.2</b></td>
<td style="background-color:#7979ff"><b>4</b></td>
<td style="background-color:#7f7fff"><b>3.8</b></td>
<td style="background-color:#8282ff"><b>3.7</b></td>
<td style="background-color:#8181ff"><b>3.7</b></td>
<td style="background-color:#7c7cff"><b>3.9</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>01.03.2018</b></td>
<td style="background-color:#d9f200"><b>18</b></td>
<td style="background-color:#3afc00"><b>15</b></td>
<td style="background-color:#14fd2f"><b>13</b></td>
<td style="background-color:#04ff0a"><b>13</b></td>
<td style="background-color:#ff6221"><b>23</b></td>
<td style="background-color:#ff5923"><b>24</b></td>
<td style="background-color:#9af600"><b>17</b></td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#7a77fd"><b>4.1</b></td>
<td style="background-color:#7d77f9"><b>4.2</b></td>
<td style="background-color:#7f76f7"><b>4.3</b></td>
<td style="background-color:#8275f4"><b>4.4</b></td>
<td style="background-color:#8c72e8"><b>4.9</b></td>
<td style="background-color:#9370e0"><b>5.2</b></td>
<td style="background-color:#9270e1"><b>5.2</b></td>
<td style="background-color:#8c72e7"><b>4.9</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>02.03.2018</b></td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#07fe10"><b>13</b></td>
<td style="background-color:#82f700"><b>16</b></td>
<td style="background-color:#ff7f1a"><b>22</b></td>
<td style="background-color:#ff294d"><b>26</b></td>
<td style="background-color:#ffd905"><b>20</b></td>
<td style="background-color:#87f700"><b>16</b></td>
<td style="background-color:#8474f1"><b>4.6</b></td>
<td style="background-color:#7b77fc"><b>4.1</b></td>
<td style="background-color:#8080ff"><b>3.8</b></td>
<td style="background-color:#8585ff"><b>3.7</b></td>
<td style="background-color:#7878ff"><b>4</b></td>
<td style="background-color:#8774ee"><b>4.7</b></td>
<td style="background-color:#8a73eb"><b>4.8</b></td>
<td style="background-color:#8c72e9"><b>4.9</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>03.03.2018</b></td>
<td style="background-color:#65f900"><b>16</b></td>
<td style="background-color:#1dfd00"><b>14</b></td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#13fe00"><b>14</b></td>
<td style="background-color:#c5f300"><b>18</b></td>
<td style="background-color:#26fd00"><b>14</b></td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#8d72e7"><b>4.9</b></td>
<td style="background-color:#8f71e5"><b>5</b></td>
<td style="background-color:#8d72e7"><b>4.9</b></td>
<td style="background-color:#8973eb"><b>4.8</b></td>
<td style="background-color:#8574f0"><b>4.6</b></td>
<td style="background-color:#8375f2"><b>4.5</b></td>
<td style="background-color:#7f76f8"><b>4.3</b></td>
<td style="background-color:#7978fe"><b>4</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>04.03.2018</b></td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#52fa00"><b>15</b></td>
<td style="background-color:#ffe303"><b>19</b></td>
<td style="background-color:#26fd00"><b>14</b></td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#8080ff"><b>3.8</b></td>
<td style="background-color:#8787ff"><b>3.6</b></td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#9393ff"><b>3.3</b></td>
<td style="background-color:#8a8aff"><b>3.5</b></td>
<td style="background-color:#8585ff"><b>3.6</b></td>
<td style="background-color:#8181ff"><b>3.8</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>05.03.2018</b></td>
<td style="background-color:#22fd00"><b>14</b></td>
<td style="background-color:#ffd905"><b>20</b></td>
<td style="background-color:#ffd905"><b>20</b></td>
<td style="background-color:#ffc909"><b>20</b></td>
<td style="background-color:#f1f100"><b>19</b></td>
<td style="background-color:#bcf400"><b>17</b></td>
<td style="background-color:#12fe2a"><b>13</b></td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#7878ff"><b>4</b></td>
<td style="background-color:#8375f3"><b>4.5</b></td>
<td style="background-color:#9071e4"><b>5.1</b></td>
<td style="background-color:#996ed9"><b>5.5</b></td>
<td style="background-color:#9a6ed8"><b>5.5</b></td>
<td style="background-color:#9470de"><b>5.3</b></td>
<td style="background-color:#8c72e8"><b>4.9</b></td>
<td style="background-color:#8475f2"><b>4.5</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>06.03.2018</b></td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#26fd00"><b>14</b></td>
<td style="background-color:#1bfd3f"><b>12</b></td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#7c77fa"><b>4.2</b></td>
<td style="background-color:#7a7aff"><b>3.9</b></td>
<td style="background-color:#8383ff"><b>3.7</b></td>
<td style="background-color:#8d8dff"><b>3.4</b></td>
<td style="background-color:#9696ff"><b>3.2</b></td>
<td style="background-color:#9d9dff">3</td>
<td style="background-color:#a2a2ff">2.8</td>
<td style="background-color:#a6a6ff">2.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>07.03.2018</b></td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#2bfc00"><b>14</b></td>
<td style="background-color:#9ff600"><b>17</b></td>
<td style="background-color:#d4f300"><b>18</b></td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#a1a1ff">2.9</td>
<td style="background-color:#9f9fff">2.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>08.03.2018</b></td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#a1a1ff">2.9</td>
<td style="background-color:#a3a3ff">2.8</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#a3a3ff">2.8</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#a3a3ff">2.8</td>
<td style="background-color:#a1a1ff">2.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>09.03.2018</b></td>
<td style="background-color:#18fe00"><b>14</b></td>
<td style="background-color:#d9f200"><b>18</b></td>
<td style="background-color:#faf000"><b>19</b></td>
<td style="background-color:#95f600"><b>17</b></td>
<td style="background-color:#c5f300"><b>18</b></td>
<td style="background-color:#ffea01"><b>19</b></td>
<td style="background-color:#ffea01"><b>19</b></td>
<td style="background-color:#ffb00f"><b>21</b></td>
<td style="background-color:#9c9cff"><b>3</b></td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#8989ff"><b>3.5</b></td>
<td style="background-color:#8989ff"><b>3.5</b></td>
<td style="background-color:#8989ff"><b>3.5</b></td>
<td style="background-color:#8585ff"><b>3.7</b></td>
<td style="background-color:#7a7aff"><b>3.9</b></td>
<td style="background-color:#8275f3"><b>4.5</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>10.03.2018</b></td>
<td style="background-color:#caf300"><b>18</b></td>
<td style="background-color:#43fb00"><b>15</b></td>
<td style="background-color:#0efe00"><b>14</b></td>
<td style="background-color:#52fa00"><b>15</b></td>
<td style="background-color:#8cf700"><b>16</b></td>
<td style="background-color:#ffd307"><b>20</b></td>
<td style="background-color:#ffcd08"><b>20</b></td>
<td style="background-color:#f1f100"><b>19</b></td>
<td style="background-color:#8b72e9"><b>4.9</b></td>
<td style="background-color:#9071e3"><b>5.1</b></td>
<td style="background-color:#9370e0"><b>5.2</b></td>
<td style="background-color:#9470df"><b>5.2</b></td>
<td style="background-color:#966fdd"><b>5.3</b></td>
<td style="background-color:#9b6ed7"><b>5.5</b></td>
<td style="background-color:#a66aca"><b>6</b></td>
<td style="background-color:#ba65b4"><b>6.9</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>11.03.2018</b></td>
<td style="background-color:#ff9914"><b>22</b></td>
<td style="background-color:#ff8c17"><b>22</b></td>
<td style="background-color:#ff9316"><b>22</b></td>
<td style="background-color:#ff8f16"><b>22</b></td>
<td style="background-color:#ff9914"><b>22</b></td>
<td style="background-color:#ff691f"><b>23</b></td>
<td style="background-color:#ffc909"><b>20</b></td>
<td style="background-color:#82f700"><b>16</b></td>
<td style="background-color:#d55c94"><b>8.2</b></td>
<td style="background-color:#ee5578"><b>9.2</b></td>
<td style="background-color:#f6536e"><b>9.6</b></td>
<td style="background-color:#f15474"><b>9.4</b></td>
<td style="background-color:#e25986"><b>8.7</b></td>
<td style="background-color:#d65c93"><b>8.2</b></td>
<td style="background-color:#ce5e9c"><b>7.8</b></td>
<td style="background-color:#c462a8"><b>7.4</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>12.03.2018</b></td>
<td style="background-color:#22fd00"><b>14</b></td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#b566b9"><b>6.7</b></td>
<td style="background-color:#a66aca"><b>6</b></td>
<td style="background-color:#996ed9"><b>5.5</b></td>
<td style="background-color:#8f71e5"><b>5</b></td>
<td style="background-color:#8674ef"><b>4.6</b></td>
<td style="background-color:#7c77fa"><b>4.2</b></td>
<td style="background-color:#8080ff"><b>3.8</b></td>
<td style="background-color:#8d8dff"><b>3.4</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>13.03.2018</b></td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#9696ff"><b>3.2</b></td>
<td style="background-color:#9e9eff">3</td>
<td style="background-color:#a5a5ff">2.8</td>
<td style="background-color:#a9a9ff">2.6</td>
<td style="background-color:#aeaeff">2.5</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#b8b8ff">2.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>14.03.2018</b></td>
<td style="background-color:#07fe10"><b>13</b></td>
<td style="background-color:#57fa00"><b>15</b></td>
<td style="background-color:#a4f500"><b>17</b></td>
<td style="background-color:#ff5524"><b>24</b></td>
<td style="background-color:#ff2d40"><b>26</b></td>
<td style="background-color:#6ff800"><b>16</b></td>
<td style="background-color:#7df800"><b>16</b></td>
<td style="background-color:#c0f400"><b>18</b></td>
<td style="background-color:#b8b8ff">2.2</td>
<td style="background-color:#b4b4ff">2.3</td>
<td style="background-color:#a6a6ff">2.7</td>
<td style="background-color:#8181ff"><b>3.8</b></td>
<td style="background-color:#8c72e8"><b>4.9</b></td>
<td style="background-color:#986fdb"><b>5.4</b></td>
<td style="background-color:#9a6ed8"><b>5.5</b></td>
<td style="background-color:#9f6cd2"><b>5.7</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>15.03.2018</b></td>
<td style="background-color:#87f700"><b>16</b></td>
<td style="background-color:#7df800"><b>16</b></td>
<td style="background-color:#78f800"><b>16</b></td>
<td style="background-color:#73f800"><b>16</b></td>
<td style="background-color:#c0f400"><b>18</b></td>
<td style="background-color:#78f800"><b>16</b></td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#a46bcc"><b>6</b></td>
<td style="background-color:#a76ac9"><b>6.1</b></td>
<td style="background-color:#a96ac7"><b>6.2</b></td>
<td style="background-color:#a969c7"><b>6.2</b></td>
<td> - </td>
<td> - </td>
<td style="background-color:#9b6dd6"><b>5.6</b></td>
<td style="background-color:#966fdd"><b>5.3</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>16.03.2018</b></td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#0bfe1a"><b>13</b></td>
<td style="background-color:#0afe00"><b>14</b></td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#9270e2"><b>5.1</b></td>
<td style="background-color:#8d72e7"><b>4.9</b></td>
<td style="background-color:#8774ee"><b>4.7</b></td>
<td style="background-color:#8175f4"><b>4.4</b></td>
<td style="background-color:#7d77f9"><b>4.2</b></td>
<td style="background-color:#7a77fc"><b>4.1</b></td>
<td style="background-color:#7a77fd"><b>4.1</b></td>
<td style="background-color:#7c77fb"><b>4.2</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>17.03.2018</b></td>
<td style="background-color:#18fe00"><b>14</b></td>
<td style="background-color:#ff9f13"><b>21</b></td>
<td style="background-color:#22fd00"><b>14</b></td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#7f76f7"><b>4.3</b></td>
<td style="background-color:#8773ed"><b>4.7</b></td>
<td style="background-color:#8b72e9"><b>4.8</b></td>
<td style="background-color:#8774ee"><b>4.7</b></td>
<td style="background-color:#8175f5"><b>4.4</b></td>
<td style="background-color:#7b77fc"><b>4.1</b></td>
<td style="background-color:#7979ff"><b>4</b></td>
<td style="background-color:#7b7bff"><b>3.9</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>18.03.2018</b></td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#16fd34"><b>13</b></td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#7a7aff"><b>4</b></td>
<td style="background-color:#7a7aff"><b>4</b></td>
<td style="background-color:#7c7cff"><b>3.9</b></td>
<td style="background-color:#8080ff"><b>3.8</b></td>
<td style="background-color:#8484ff"><b>3.7</b></td>
<td style="background-color:#8888ff"><b>3.6</b></td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#9494ff"><b>3.2</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>19.03.2018</b></td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#0bfe1a"><b>13</b></td>
<td style="background-color:#2bfc00"><b>14</b></td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#bcf400"><b>17</b></td>
<td style="background-color:#cff300"><b>18</b></td>
<td style="background-color:#9af600"><b>17</b></td>
<td style="background-color:#9b9bff"><b>3</b></td>
<td style="background-color:#a1a1ff">2.9</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#a5a5ff">2.8</td>
<td style="background-color:#a4a4ff">2.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>20.03.2018</b></td>
<td style="background-color:#52fa00"><b>15</b></td>
<td style="background-color:#5bfa00"><b>15</b></td>
<td style="background-color:#8cf700"><b>16</b></td>
<td style="background-color:#ffdd04"><b>19</b></td>
<td style="background-color:#ffe602"><b>19</b></td>
<td style="background-color:#6ff800"><b>16</b></td>
<td style="background-color:#6ff800"><b>16</b></td>
<td style="background-color:#26fd00"><b>14</b></td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#a2a2ff">2.8</td>
<td style="background-color:#9b9bff"><b>3.1</b></td>
<td style="background-color:#8f8fff"><b>3.4</b></td>
<td style="background-color:#8888ff"><b>3.6</b></td>
<td style="background-color:#8888ff"><b>3.5</b></td>
<td style="background-color:#8a8aff"><b>3.5</b></td>
<td style="background-color:#8c8cff"><b>3.5</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>21.03.2018</b></td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#00ff00"><b>14</b></td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#8f8fff"><b>3.4</b></td>
<td style="background-color:#9393ff"><b>3.2</b></td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#9f9fff">2.9</td>
<td style="background-color:#a5a5ff">2.8</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#aeaeff">2.5</td>
<td style="background-color:#b1b1ff">2.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>22.03.2018</b></td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#b4b4ff">2.4</td>
<td style="background-color:#b8b8ff">2.3</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c6c6ff">1.8</td>
<td style="background-color:#cacaff">1.8</td>
<td style="background-color:#ceceff">1.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>23.03.2018</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#04ff0a"><b>13</b></td>
<td style="background-color:#8cf700"><b>16</b></td>
<td style="background-color:#ff721d"><b>23</b></td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#ceceff">1.7</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#9696ff"><b>3.2</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>24.03.2018</b></td>
<td style="background-color:#fff000"><b>19</b></td>
<td style="background-color:#ffe303"><b>19</b></td>
<td style="background-color:#ffb30e"><b>21</b></td>
<td style="background-color:#ffa312"><b>21</b></td>
<td style="background-color:#ffac10"><b>21</b></td>
<td style="background-color:#d4f300"><b>18</b></td>
<td style="background-color:#65f900"><b>16</b></td>
<td style="background-color:#22fd00"><b>14</b></td>
<td style="background-color:#7f7fff"><b>3.8</b></td>
<td style="background-color:#8275f3"><b>4.5</b></td>
<td style="background-color:#976fdb"><b>5.4</b></td>
<td style="background-color:#a66aca"><b>6</b></td>
<td style="background-color:#a86ac8"><b>6.1</b></td>
<td style="background-color:#a26ccf"><b>5.9</b></td>
<td style="background-color:#9a6ed8"><b>5.5</b></td>
<td style="background-color:#9071e4"><b>5.1</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>25.03.2018</b></td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#ff8918"><b>22</b></td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#a8f500"><b>17</b></td>
<td style="background-color:#ffea01"><b>19</b></td>
<td style="background-color:#f5f100"><b>19</b></td>
<td style="background-color:#ddf200"><b>18</b></td>
<td style="background-color:#52fa00"><b>15</b></td>
<td style="background-color:#8873ed"><b>4.7</b></td>
<td style="background-color:#8674ef"><b>4.6</b></td>
<td style="background-color:#8275f3"><b>4.4</b></td>
<td style="background-color:#7b77fc"><b>4.1</b></td>
<td style="background-color:#8080ff"><b>3.8</b></td>
<td style="background-color:#8c8cff"><b>3.5</b></td>
<td style="background-color:#9494ff"><b>3.2</b></td>
<td style="background-color:#9a9aff"><b>3.1</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>26.03.2018</b></td>
<td style="background-color:#0efe00"><b>14</b></td>
<td style="background-color:#16fd34"><b>13</b></td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#02ff05"><b>13</b></td>
<td style="background-color:#07fe10"><b>13</b></td>
<td style="background-color:#07fe10"><b>13</b></td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#a6a6ff">2.7</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#aeaeff">2.5</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b4b4ff">2.3</td>
<td style="background-color:#b6b6ff">2.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>27.03.2018</b></td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#b8b8ff">2.3</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c1c1ff">2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>28.03.2018</b></td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#b8b8ff">2.3</td>
<td style="background-color:#b8b8ff">2.2</td>
<td style="background-color:#b8b8ff">2.3</td>
<td style="background-color:#b6b6ff">2.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>29.03.2018</b></td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#6ff800"><b>16</b></td>
<td style="background-color:#73f800"><b>16</b></td>
<td style="background-color:#caf300"><b>18</b></td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#adadff">2.5</td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#a2a2ff">2.8</td>
<td style="background-color:#9090ff"><b>3.3</b></td>
<td style="background-color:#7a77fc"><b>4.1</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>30.03.2018</b></td>
<td style="background-color:#65f900"><b>16</b></td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#35fc00"><b>15</b></td>
<td style="background-color:#ffd007"><b>20</b></td>
<td style="background-color:#ff9c13"><b>21</b></td>
<td style="background-color:#ffd007"><b>20</b></td>
<td style="background-color:#4dfa00"><b>15</b></td>
<td style="background-color:#8973eb"><b>4.8</b></td>
<td style="background-color:#9270e1"><b>5.2</b></td>
<td style="background-color:#9470df"><b>5.3</b></td>
<td style="background-color:#9270e1"><b>5.2</b></td>
<td style="background-color:#9270e1"><b>5.2</b></td>
<td style="background-color:#986fdb"><b>5.4</b></td>
<td style="background-color:#a06cd1"><b>5.8</b></td>
<td style="background-color:#a46bcd"><b>5.9</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>31.03.2018</b></td>
<td style="background-color:#35fc00"><b>15</b></td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#a16cd0"><b>5.8</b></td>
<td style="background-color:#9a6ed8"><b>5.5</b></td>
<td style="background-color:#9071e3"><b>5.1</b></td>
<td style="background-color:#8574f0"><b>4.6</b></td>
<td style="background-color:#7a77fd"><b>4.1</b></td>
<td style="background-color:#8888ff"><b>3.6</b></td>
<td style="background-color:#9898ff"><b>3.1</b></td>
<td style="background-color:#a6a6ff">2.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>01.04.2018</b></td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#a3a3ff">2.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>02.04.2018</b></td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#9d9dff">3</td>
<td style="background-color:#9f9fff">2.9</td>
<td style="background-color:#a5a5ff">2.8</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b4b4ff">2.4</td>
<td style="background-color:#b4b4ff">2.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>03.04.2018</b></td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#14fd2f"><b>13</b></td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#6ff800"><b>16</b></td>
<td style="background-color:#fff000"><b>19</b></td>
<td style="background-color:#ffb60d"><b>21</b></td>
<td style="background-color:#82f700"><b>16</b></td>
<td style="background-color:#30fc00"><b>15</b></td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#9090ff"><b>3.4</b></td>
<td style="background-color:#7979ff"><b>4</b></td>
<td style="background-color:#8773ed"><b>4.7</b></td>
<td style="background-color:#9e6dd3"><b>5.7</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>04.04.2018</b></td>
<td style="background-color:#07fe10"><b>13</b></td>
<td style="background-color:#0afe00"><b>14</b></td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#12fe2a"><b>13</b></td>
<td style="background-color:#10fe25"><b>13</b></td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ac68c3"><b>6.3</b></td>
<td style="background-color:#ad68c2"><b>6.4</b></td>
<td style="background-color:#a86ac7"><b>6.2</b></td>
<td style="background-color:#a06cd1"><b>5.8</b></td>
<td style="background-color:#976fdb"><b>5.4</b></td>
<td style="background-color:#8e71e5"><b>5</b></td>
<td style="background-color:#8574f0"><b>4.6</b></td>
<td style="background-color:#7d77fa"><b>4.2</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>05.04.2018</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#7d7dff"><b>3.9</b></td>
<td style="background-color:#8989ff"><b>3.5</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#9b9bff"><b>3</b></td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#aeaeff">2.5</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#babaff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>06.04.2018</b></td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#b4b4ff">2.4</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#a3a3ff">2.8</td>
<td style="background-color:#a5a5ff">2.8</td>
<td style="background-color:#a3a3ff">2.8</td>
<td style="background-color:#9c9cff"><b>3</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#8484ff"><b>3.7</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>07.04.2018</b></td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#7e76f9"><b>4.2</b></td>
<td style="background-color:#8973ec"><b>4.8</b></td>
<td style="background-color:#8d72e7"><b>4.9</b></td>
<td style="background-color:#8c72e8"><b>4.9</b></td>
<td style="background-color:#8a73eb"><b>4.8</b></td>
<td style="background-color:#8774ee"><b>4.7</b></td>
<td style="background-color:#8375f2"><b>4.5</b></td>
<td style="background-color:#7f76f7"><b>4.3</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>08.04.2018</b></td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#6ff800"><b>16</b></td>
<td style="background-color:#ffed01"><b>19</b></td>
<td style="background-color:#9ff600"><b>17</b></td>
<td style="background-color:#7878fe"><b>4</b></td>
<td style="background-color:#8181ff"><b>3.8</b></td>
<td style="background-color:#8888ff"><b>3.6</b></td>
<td style="background-color:#8f8fff"><b>3.4</b></td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#8989ff"><b>3.5</b></td>
<td style="background-color:#7d77fa"><b>4.2</b></td>
<td style="background-color:#8574f1"><b>4.6</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>09.04.2018</b></td>
<td style="background-color:#0afe00"><b>14</b></td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#16fd34"><b>13</b></td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#8674ef"><b>4.6</b></td>
<td style="background-color:#8574f0"><b>4.6</b></td>
<td style="background-color:#8574f0"><b>4.6</b></td>
<td style="background-color:#8d72e7"><b>4.9</b></td>
<td style="background-color:#9071e4"><b>5.1</b></td>
<td style="background-color:#8973ec"><b>4.7</b></td>
<td style="background-color:#8175f5"><b>4.4</b></td>
<td style="background-color:#7b77fc"><b>4.1</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>10.04.2018</b></td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#95f600"><b>17</b></td>
<td style="background-color:#faf000"><b>19</b></td>
<td style="background-color:#ddf200"><b>18</b></td>
<td style="background-color:#ffc30a"><b>20</b></td>
<td style="background-color:#ffb90d"><b>21</b></td>
<td style="background-color:#ff9914"><b>22</b></td>
<td style="background-color:#ffea01"><b>19</b></td>
<td style="background-color:#7d7dff"><b>3.9</b></td>
<td style="background-color:#7f7fff"><b>3.8</b></td>
<td style="background-color:#7878ff"><b>4</b></td>
<td style="background-color:#8175f4"><b>4.4</b></td>
<td style="background-color:#8e72e6"><b>5</b></td>
<td style="background-color:#9c6dd6"><b>5.6</b></td>
<td style="background-color:#b466ba"><b>6.7</b></td>
<td style="background-color:#c661a6"><b>7.5</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>11.04.2018</b></td>
<td style="background-color:#a8f500"><b>17</b></td>
<td style="background-color:#78f800"><b>16</b></td>
<td style="background-color:#30fc00"><b>15</b></td>
<td style="background-color:#0afe00"><b>14</b></td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#c462a8"><b>7.4</b></td>
<td style="background-color:#b566b9"><b>6.7</b></td>
<td style="background-color:#a26bce"><b>5.9</b></td>
<td style="background-color:#9270e1"><b>5.2</b></td>
<td style="background-color:#8474f1"><b>4.6</b></td>
<td style="background-color:#7978fe"><b>4.1</b></td>
<td style="background-color:#8585ff"><b>3.7</b></td>
<td style="background-color:#9191ff"><b>3.3</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>12.04.2018</b></td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#13fe00"><b>14</b></td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#73f800"><b>16</b></td>
<td style="background-color:#90f700"><b>17</b></td>
<td style="background-color:#57fa00"><b>15</b></td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#9c9cff"><b>3</b></td>
<td style="background-color:#a6a6ff">2.7</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#9d9dff">3</td>
<td style="background-color:#9191ff"><b>3.3</b></td>
<td style="background-color:#8888ff"><b>3.6</b></td>
<td style="background-color:#7a77fd"><b>4.1</b></td>
<td style="background-color:#8d72e7"><b>4.9</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>13.04.2018</b></td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#a16cd0"><b>5.8</b></td>
<td style="background-color:#a46bcc"><b>6</b></td>
<td style="background-color:#9d6dd4"><b>5.7</b></td>
<td style="background-color:#9470df"><b>5.3</b></td>
<td style="background-color:#8b72e9"><b>4.9</b></td>
<td style="background-color:#8475f2"><b>4.5</b></td>
<td style="background-color:#7d77f9"><b>4.2</b></td>
<td style="background-color:#7a7aff"><b>4</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>14.04.2018</b></td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#8383ff"><b>3.7</b></td>
<td style="background-color:#8d8dff"><b>3.4</b></td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#9e9eff">3</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#b8b8ff">2.2</td>
<td style="background-color:#bebeff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>15.04.2018</b></td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#8686ff"><b>3.6</b></td>
<td style="background-color:#8474f1"><b>4.5</b></td>
<td style="background-color:#8674ef"><b>4.6</b></td>
<td style="background-color:#8275f4"><b>4.4</b></td>
<td style="background-color:#7f76f7"><b>4.3</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>16.04.2018</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#7e76f8"><b>4.3</b></td>
<td style="background-color:#7a78fd"><b>4.1</b></td>
<td style="background-color:#8080ff"><b>3.8</b></td>
<td style="background-color:#8c8cff"><b>3.4</b></td>
<td style="background-color:#9898ff"><b>3.1</b></td>
<td style="background-color:#a3a3ff">2.8</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#b2b2ff">2.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>17.04.2018</b></td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#9191ff"><b>3.3</b></td>
<td style="background-color:#7f76f7"><b>4.3</b></td>
<td style="background-color:#9270e1"><b>5.2</b></td>
<td style="background-color:#9d6dd4"><b>5.7</b></td>
<td style="background-color:#a06cd1"><b>5.8</b></td>
<td style="background-color:#9b6ed6"><b>5.6</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>18.04.2018</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#9570de"><b>5.3</b></td>
<td style="background-color:#8f71e5"><b>5</b></td>
<td style="background-color:#8a73ea"><b>4.8</b></td>
<td style="background-color:#8474f1"><b>4.5</b></td>
<td style="background-color:#7e76f8"><b>4.3</b></td>
<td style="background-color:#7978fe"><b>4.1</b></td>
<td style="background-color:#7c7cff"><b>3.9</b></td>
<td style="background-color:#8282ff"><b>3.7</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>19.04.2018</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#16fd34"><b>13</b></td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#8989ff"><b>3.5</b></td>
<td style="background-color:#8f8fff"><b>3.4</b></td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#9b9bff"><b>3</b></td>
<td style="background-color:#9b9bff"><b>3</b></td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#9898ff"><b>3.1</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>20.04.2018</b></td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#3afc00"><b>15</b></td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#9a9aff"><b>3.1</b></td>
<td style="background-color:#9d9dff">3</td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#a3a3ff">2.8</td>
<td style="background-color:#a6a6ff">2.7</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#aeaeff">2.5</td>
<td style="background-color:#b2b2ff">2.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>21.04.2018</b></td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#04ff0a"><b>13</b></td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#cacaff">1.7</td>
<td style="background-color:#ceceff">1.6</td>
<td style="background-color:#d2d2ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>22.04.2018</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#c8c8ff">1.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>23.04.2018</b></td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#bfbfff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>24.04.2018</b></td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#10fe25"><b>13</b></td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#b8b8ff">2.3</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#aeaeff">2.5</td>
<td style="background-color:#acacff">2.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>25.04.2018</b></td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#16fd34"><b>13</b></td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#1dfd00"><b>14</b></td>
<td style="background-color:#6af900"><b>16</b></td>
<td style="background-color:#8cf700"><b>16</b></td>
<td style="background-color:#43fb00"><b>15</b></td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#a5a5ff">2.8</td>
<td style="background-color:#a3a3ff">2.8</td>
<td style="background-color:#9e9eff">3</td>
<td style="background-color:#9494ff"><b>3.2</b></td>
<td style="background-color:#8888ff"><b>3.6</b></td>
<td style="background-color:#8282ff"><b>3.7</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>26.04.2018</b></td>
<td style="background-color:#35fc00"><b>15</b></td>
<td style="background-color:#0afe00"><b>14</b></td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#8181ff"><b>3.8</b></td>
<td style="background-color:#8282ff"><b>3.7</b></td>
<td style="background-color:#8888ff"><b>3.6</b></td>
<td style="background-color:#9191ff"><b>3.3</b></td>
<td style="background-color:#9c9cff"><b>3</b></td>
<td style="background-color:#a3a3ff">2.8</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#adadff">2.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>27.04.2018</b></td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#b1b1ff">2.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>28.04.2018</b></td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#bfbfff">2</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c3c3ff">2</td>
<td style="background-color:#c0c0ff">2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>29.04.2018</b></td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#09fe15"><b>13</b></td>
<td style="background-color:#07fe10"><b>13</b></td>
<td style="background-color:#65f900"><b>16</b></td>
<td style="background-color:#82f700"><b>16</b></td>
<td style="background-color:#22fd00"><b>14</b></td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#9696ff"><b>3.2</b></td>
<td style="background-color:#8c8cff"><b>3.5</b></td>
<td style="background-color:#8c8cff"><b>3.5</b></td>
<td style="background-color:#9393ff"><b>3.3</b></td>
<td style="background-color:#9b9bff"><b>3.1</b></td>
<td style="background-color:#a3a3ff">2.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>30.04.2018</b></td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#c7c7ff">1.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>01.05.2018</b></td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#1bfd3f"><b>12</b></td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#cacaff">1.7</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#e0e0ff">1.1</td>
<td style="background-color:#e3e3ff">1.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>02.05.2018</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#e4e4ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c5c5ff">1.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>03.05.2018</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#0afe00"><b>14</b></td>
<td style="background-color:#2bfc00"><b>14</b></td>
<td style="background-color:#1dfd00"><b>14</b></td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#a2a2ff">2.9</td>
<td style="background-color:#9999ff"><b>3.1</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>04.05.2018</b></td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#09fe15"><b>13</b></td>
<td style="background-color:#0afe00"><b>14</b></td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#9a9aff"><b>3.1</b></td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#b4b4ff">2.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>05.05.2018</b></td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d4d4ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>06.05.2018</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d5d5ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>07.05.2018</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#ceceff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#cacaff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#c7c7ff">1.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>08.05.2018</b></td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#22fd00"><b>14</b></td>
<td style="background-color:#13fe00"><b>14</b></td>
<td style="background-color:#0bfe1a"><b>13</b></td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#b8b8ff">2.2</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#b8b8ff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>09.05.2018</b></td>
<td style="background-color:#09fe15"><b>13</b></td>
<td style="background-color:#10fe25"><b>13</b></td>
<td style="background-color:#14fd2f"><b>13</b></td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#02ff05"><b>13</b></td>
<td style="background-color:#18fe00"><b>14</b></td>
<td style="background-color:#6ff800"><b>16</b></td>
<td style="background-color:#60f900"><b>16</b></td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#aeaeff">2.5</td>
<td style="background-color:#a6a6ff">2.7</td>
<td style="background-color:#9e9eff">2.9</td>
<td style="background-color:#9a9aff"><b>3.1</b></td>
<td style="background-color:#9898ff"><b>3.1</b></td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#9b9bff"><b>3</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>10.05.2018</b></td>
<td style="background-color:#87f700"><b>16</b></td>
<td style="background-color:#4dfa00"><b>15</b></td>
<td style="background-color:#14fd2f"><b>13</b></td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#9d9dff">3</td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#a3a3ff">2.8</td>
<td style="background-color:#9e9eff">3</td>
<td style="background-color:#8b8bff"><b>3.5</b></td>
<td style="background-color:#7979ff"><b>4</b></td>
<td style="background-color:#7a77fd"><b>4.1</b></td>
<td style="background-color:#7b7bff"><b>3.9</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>11.05.2018</b></td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#8585ff"><b>3.6</b></td>
<td style="background-color:#9090ff"><b>3.3</b></td>
<td style="background-color:#9b9bff"><b>3.1</b></td>
<td style="background-color:#a5a5ff">2.8</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#b8b8ff">2.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>12.05.2018</b></td>
<td style="background-color:#05ff00"><b>14</b></td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#09fe15"><b>13</b></td>
<td style="background-color:#73f800"><b>16</b></td>
<td style="background-color:#43fb00"><b>15</b></td>
<td style="background-color:#4dfa00"><b>15</b></td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#a3a3ff">2.8</td>
<td style="background-color:#9f9fff">2.9</td>
<td style="background-color:#9a9aff"><b>3.1</b></td>
<td style="background-color:#9494ff"><b>3.2</b></td>
<td style="background-color:#8f8fff"><b>3.4</b></td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>13.05.2018</b></td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#07fe10"><b>13</b></td>
<td style="background-color:#22fd00"><b>14</b></td>
<td style="background-color:#09fe15"><b>13</b></td>
<td style="background-color:#9191ff"><b>3.3</b></td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#9a9aff"><b>3.1</b></td>
<td style="background-color:#9d9dff">3</td>
<td style="background-color:#a1a1ff">2.9</td>
<td style="background-color:#a2a2ff">2.8</td>
<td style="background-color:#a3a3ff">2.8</td>
<td style="background-color:#a4a4ff">2.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>14.05.2018</b></td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#05ff00"><b>14</b></td>
<td style="background-color:#10fe25"><b>13</b></td>
<td style="background-color:#02ff05"><b>13</b></td>
<td style="background-color:#6ff800"><b>16</b></td>
<td style="background-color:#8cf700"><b>16</b></td>
<td style="background-color:#8cf700"><b>16</b></td>
<td style="background-color:#0efe00"><b>14</b></td>
<td style="background-color:#a5a5ff">2.8</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#a8a8ff">2.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>15.05.2018</b></td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#22fd00"><b>14</b></td>
<td style="background-color:#12fe2a"><b>13</b></td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#b4b4ff">2.4</td>
<td style="background-color:#b4b4ff">2.3</td>
<td style="background-color:#b3b3ff">2.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>16.05.2018</b></td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#07fe10"><b>13</b></td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#c3c3ff">2</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c4c4ff">1.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>17.05.2018</b></td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#c3c3ff">2</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c3c3ff">1.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>18.05.2018</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#bfbfff">2</td>
<td style="background-color:#c3c3ff">2</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#d0d0ff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>19.05.2018</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#ffffff">0</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d5d5ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#e0e0ff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>20.05.2018</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d5d5ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>21.05.2018</b></td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#ddddff">1.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>22.05.2018</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#d5d5ff">1.5</td>
<td style="background-color:#ceceff">1.6</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#cacaff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>23.05.2018</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#ceceff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#dadaff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>24.05.2018</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#dcdcff">1.2</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>25.05.2018</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#ceceff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#cbcbff">1.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>26.05.2018</b></td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c3c3ff">2</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#d0d0ff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>27.05.2018</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#1dfd00"><b>14</b></td>
<td style="background-color:#18fe00"><b>14</b></td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#ceceff">1.6</td>
<td style="background-color:#cdcdff">1.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>28.05.2018</b></td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#14fd2f"><b>13</b></td>
<td style="background-color:#0bfe1a"><b>13</b></td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#ceceff">1.6</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>29.05.2018</b></td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d5d5ff">1.5</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>30.05.2018</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d2d2ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>31.05.2018</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>01.06.2018</b></td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#0efe00"><b>14</b></td>
<td style="background-color:#02ff05"><b>13</b></td>
<td style="background-color:#0efe00"><b>14</b></td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#b8b8ff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>02.06.2018</b></td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#1bfd3f"><b>12</b></td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#b8b8ff">2.2</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d8d8ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>03.06.2018</b></td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d5d5ff">1.5</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#c5c5ff">1.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>04.06.2018</b></td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#c3c3ff">2</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c8c8ff">1.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>05.06.2018</b></td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>06.06.2018</b></td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#e0e0ff">1.2</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e3e3ff">1.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>07.06.2018</b></td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#e3e3ff">1.1</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#ceceff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#c9c9ff">1.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>08.06.2018</b></td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#bfbfff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>09.06.2018</b></td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c8c8ff">1.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>10.06.2018</b></td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#cacaff">1.8</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#cacaff">1.7</td>
<td style="background-color:#cacaff">1.8</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#cacaff">1.8</td>
<td style="background-color:#ccccff">1.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>11.06.2018</b></td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#ceceff">1.6</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d5d5ff">1.5</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dedeff">1.2</td>
<td> - </td>
<td> - </td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>12.06.2018</b></td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#14fd2f"><b>13</b></td>
<td style="background-color:#14fd2f"><b>13</b></td>
<td style="background-color:#09fe15"><b>13</b></td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d5d5ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>13.06.2018</b></td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#02ff05"><b>13</b></td>
<td style="background-color:#12fe2a"><b>13</b></td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c0c0ff">2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>14.06.2018</b></td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#10fe25"><b>13</b></td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>15.06.2018</b></td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#13fe00"><b>14</b></td>
<td style="background-color:#35fc00"><b>15</b></td>
<td style="background-color:#18fe00"><b>14</b></td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#cacaff">1.8</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#aeaeff">2.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>16.06.2018</b></td>
<td style="background-color:#13fe00"><b>14</b></td>
<td style="background-color:#22fd00"><b>14</b></td>
<td style="background-color:#3afc00"><b>15</b></td>
<td style="background-color:#4dfa00"><b>15</b></td>
<td style="background-color:#5bfa00"><b>15</b></td>
<td style="background-color:#60f900"><b>16</b></td>
<td style="background-color:#6af900"><b>16</b></td>
<td style="background-color:#2bfc00"><b>14</b></td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#aaaaff">2.6</td>
<td style="background-color:#acacff">2.6</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#aeaeff">2.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>17.06.2018</b></td>
<td style="background-color:#12fe2a"><b>13</b></td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#07fe10"><b>13</b></td>
<td style="background-color:#05ff00"><b>14</b></td>
<td style="background-color:#2bfc00"><b>14</b></td>
<td style="background-color:#1bfd3f"><b>12</b></td>
<td style="background-color:#a8a8ff">2.7</td>
<td style="background-color:#a2a2ff">2.8</td>
<td style="background-color:#9f9fff">2.9</td>
<td style="background-color:#9e9eff">3</td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#a2a2ff">2.9</td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#9f9fff">2.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>18.06.2018</b></td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#a1a1ff">2.9</td>
<td style="background-color:#a6a6ff">2.7</td>
<td style="background-color:#adadff">2.5</td>
<td style="background-color:#b4b4ff">2.3</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#b9b9ff">2.2</td>
<td style="background-color:#b4b4ff">2.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>19.06.2018</b></td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b8b8ff">2.3</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#ceceff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>20.06.2018</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d5d5ff">1.5</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d9d9ff">1.4</td>
<td style="background-color:#d9d9ff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>21.06.2018</b></td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#d9d9ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>22.06.2018</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d6d6ff">1.4</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d5d5ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>23.06.2018</b></td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#eaeaff">0.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>24.06.2018</b></td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">0</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ececff">0.8</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#efefff">0.7</td>
<td style="background-color:#f0f0ff">0.7</td>
<td style="background-color:#f2f2ff">0.7</td>
<td style="background-color:#f2f2ff">0.6</td>
<td style="background-color:#f3f3ff">0.6</td>
<td style="background-color:#f3f3ff">0.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>25.06.2018</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#f4f4ff">0.6</td>
<td style="background-color:#f4f4ff">0.6</td>
<td style="background-color:#f4f4ff">0.6</td>
<td style="background-color:#f5f5ff">0.6</td>
<td style="background-color:#f4f4ff">0.6</td>
<td style="background-color:#f4f4ff">0.6</td>
<td style="background-color:#f4f4ff">0.6</td>
<td style="background-color:#f4f4ff">0.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>26.06.2018</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#f4f4ff">0.6</td>
<td style="background-color:#f4f4ff">0.6</td>
<td style="background-color:#f4f4ff">0.6</td>
<td style="background-color:#f4f4ff">0.6</td>
<td style="background-color:#f4f4ff">0.6</td>
<td style="background-color:#f4f4ff">0.6</td>
<td style="background-color:#f3f3ff">0.6</td>
<td style="background-color:#f3f3ff">0.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>27.06.2018</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#f3f3ff">0.6</td>
<td style="background-color:#f3f3ff">0.6</td>
<td style="background-color:#f3f3ff">0.6</td>
<td style="background-color:#f2f2ff">0.6</td>
<td style="background-color:#f2f2ff">0.7</td>
<td style="background-color:#f1f1ff">0.7</td>
<td style="background-color:#f1f1ff">0.7</td>
<td style="background-color:#f1f1ff">0.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>28.06.2018</b></td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#f1f1ff">0.7</td>
<td style="background-color:#f2f2ff">0.7</td>
<td style="background-color:#f2f2ff">0.7</td>
<td style="background-color:#f3f3ff">0.6</td>
<td style="background-color:#f3f3ff">0.6</td>
<td style="background-color:#f3f3ff">0.6</td>
<td style="background-color:#f2f2ff">0.7</td>
<td style="background-color:#efefff">0.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>29.06.2018</b></td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#eeeeff">0.8</td>
<td style="background-color:#eeeeff">0.8</td>
<td style="background-color:#eeeeff">0.8</td>
<td style="background-color:#eeeeff">0.8</td>
<td style="background-color:#efefff">0.7</td>
<td style="background-color:#f0f0ff">0.7</td>
<td style="background-color:#f1f1ff">0.7</td>
<td style="background-color:#f2f2ff">0.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>30.06.2018</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#f2f2ff">0.6</td>
<td style="background-color:#f2f2ff">0.6</td>
<td style="background-color:#f2f2ff">0.7</td>
<td style="background-color:#efefff">0.7</td>
<td style="background-color:#e9e9ff">0.9</td>
<td style="background-color:#e4e4ff">1</td>
<td style="background-color:#e0e0ff">1.1</td>
<td style="background-color:#ddddff">1.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>01.07.2018</b></td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#02ff05"><b>13</b></td>
<td style="background-color:#16fd34"><b>13</b></td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d9d9ff">1.4</td>
<td style="background-color:#d9d9ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d4d4ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>02.07.2018</b></td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c3c3ff">1.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>03.07.2018</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#cacaff">1.8</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#dcdcff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>04.07.2018</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>05.07.2018</b></td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#e0e0ff">1.2</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>06.07.2018</b></td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#e3e3ff">1.1</td>
<td style="background-color:#e4e4ff">1</td>
<td style="background-color:#e6e6ff">1</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e6e6ff">1</td>
<td style="background-color:#e3e3ff">1.1</td>
<td style="background-color:#e0e0ff">1.1</td>
<td style="background-color:#dfdfff">1.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>07.07.2018</b></td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#e0e0ff">1.2</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e3e3ff">1.1</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e6e6ff">1</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e6e6ff">1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>08.07.2018</b></td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#e6e6ff">1</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#d6d6ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>09.07.2018</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d5d5ff">1.5</td>
<td style="background-color:#d7d7ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>10.07.2018</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#ddddff">1.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>11.07.2018</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#c9c9ff">1.8</td>
<td style="background-color:#c3c3ff">1.9</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#bcbcff">2.1</td>
<td style="background-color:#b5b5ff">2.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>12.07.2018</b></td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#b1b1ff">2.4</td>
<td style="background-color:#b0b0ff">2.5</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#cacaff">1.8</td>
<td style="background-color:#ccccff">1.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>13.07.2018</b></td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#ceceff">1.7</td>
<td style="background-color:#cfcfff">1.6</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d4d4ff">1.5</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#ddddff">1.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>14.07.2018</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#e0e0ff">1.2</td>
<td style="background-color:#e0e0ff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#e0e0ff">1.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>15.07.2018</b></td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e3e3ff">1.1</td>
<td style="background-color:#e4e4ff">1</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e3e3ff">1.1</td>
<td style="background-color:#e0e0ff">1.1</td>
<td style="background-color:#dedeff">1.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>16.07.2018</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#ddddff">1.2</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#cfcfff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>17.07.2018</b></td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#04ff0a"><b>13</b></td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#cdcdff">1.7</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#cacaff">1.7</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#bfbfff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>18.07.2018</b></td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#bebeff">2.1</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#cacaff">1.8</td>
<td style="background-color:#ceceff">1.7</td>
<td style="background-color:#d1d1ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>19.07.2018</b></td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#d5d5ff">1.5</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d8d8ff">1.4</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#d7d7ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>20.07.2018</b></td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#0bfe1a"><b>13</b></td>
<td style="background-color:#6ff800"><b>16</b></td>
<td style="background-color:#57fa00"><b>15</b></td>
<td style="background-color:#3ffb00"><b>15</b></td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#d2d2ff">1.5</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c7c7ff">1.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>21.07.2018</b></td>
<td style="background-color:#10fe25"><b>13</b></td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#16fd34"><b>13</b></td>
<td style="background-color:#22fd00"><b>14</b></td>
<td style="background-color:#3afc00"><b>15</b></td>
<td style="background-color:#0afe00"><b>14</b></td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#cacaff">1.7</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d5d5ff">1.4</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#dcdcff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>22.07.2018</b></td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#e0e0ff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#e0e0ff">1.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>23.07.2018</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e4e4ff">1</td>
<td style="background-color:#e6e6ff">1</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e8e8ff">0.9</td>
<td style="background-color:#e8e8ff">0.9</td>
<td style="background-color:#e8e8ff">0.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>24.07.2018</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#e7e7ff">0.9</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e6e6ff">1</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e6e6ff">1</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e8e8ff">0.9</td>
<td style="background-color:#e7e7ff">1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>25.07.2018</b></td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e8e8ff">0.9</td>
<td style="background-color:#e8e8ff">0.9</td>
<td style="background-color:#e9e9ff">0.9</td>
<td style="background-color:#e9e9ff">0.9</td>
<td style="background-color:#e8e8ff">0.9</td>
<td style="background-color:#e7e7ff">1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>26.07.2018</b></td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e3e3ff">1.1</td>
<td style="background-color:#e4e4ff">1</td>
<td style="background-color:#e4e4ff">1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>27.07.2018</b></td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#dadaff">1.3</td>
<td style="background-color:#d1d1ff">1.5</td>
<td style="background-color:#cacaff">1.7</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#cbcbff">1.7</td>
<td style="background-color:#cfcfff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>28.07.2018</b></td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d5d5ff">1.4</td>
<td style="background-color:#d5d5ff">1.4</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#b8b8ff">2.3</td>
<td style="background-color:#b5b5ff">2.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>29.07.2018</b></td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#b5b5ff">2.3</td>
<td style="background-color:#b7b7ff">2.3</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#bfbfff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>30.07.2018</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#bfbfff">2.1</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#c2c2ff">2</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c7c7ff">1.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>31.07.2018</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#0bfe1a"><b>13</b></td>
<td style="background-color:#3afc00"><b>15</b></td>
<td style="background-color:#30fc00"><b>15</b></td>
<td style="background-color:#2bfc00"><b>14</b></td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#c7c7ff">1.8</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#c4c4ff">1.9</td>
<td style="background-color:#c0c0ff">2</td>
<td style="background-color:#babaff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>01.08.2018</b></td>
<td style="background-color:#0afe00"><b>14</b></td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b4b4ff">2.3</td>
<td style="background-color:#b4b4ff">2.3</td>
<td style="background-color:#b4b4ff">2.4</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b3b3ff">2.4</td>
<td style="background-color:#b4b4ff">2.3</td>
<td style="background-color:#b7b7ff">2.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>02.08.2018</b></td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#bbbbff">2.2</td>
<td style="background-color:#bfbfff">2</td>
<td style="background-color:#c3c3ff">2</td>
<td style="background-color:#c6c6ff">1.9</td>
<td style="background-color:#cacaff">1.8</td>
<td style="background-color:#ceceff">1.7</td>
<td style="background-color:#d1d1ff">1.5</td>
<td style="background-color:#d5d5ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>03.08.2018</b></td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d9d9ff">1.3</td>
<td style="background-color:#dcdcff">1.3</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dfdfff">1.2</td>
<td style="background-color:#e0e0ff">1.2</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>04.08.2018</b></td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#e3e3ff">1.1</td>
<td style="background-color:#e4e4ff">1</td>
<td style="background-color:#e4e4ff">1</td>
<td style="background-color:#e4e4ff">1</td>
<td style="background-color:#e3e3ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e1e1ff">1.1</td>
<td style="background-color:#e1e1ff">1.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>05.08.2018</b></td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e3e3ff">1.1</td>
<td style="background-color:#e4e4ff">1</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e8e8ff">0.9</td>
<td style="background-color:#e8e8ff">0.9</td>
<td style="background-color:#e7e7ff">1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>06.08.2018</b></td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#e7e7ff">1</td>
<td style="background-color:#e7e7ff">0.9</td>
<td style="background-color:#e8e8ff">0.9</td>
<td style="background-color:#e8e8ff">0.9</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#dedeff">1.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>07.08.2018</b></td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#4dfa00"><b>15</b></td>
<td style="background-color:#60f900"><b>16</b></td>
<td style="background-color:#26fd00"><b>14</b></td>
<td style="background-color:#4dfa00"><b>15</b></td>
<td style="background-color:#43fb00"><b>15</b></td>
<td style="background-color:#48fb00"><b>15</b></td>
<td style="background-color:#0efe00"><b>14</b></td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>08.08.2018</b></td>
<td style="background-color:#0afe00"><b>14</b></td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#dbdbff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>09.08.2018</b></td>
<td style="background-color:#6af900"><b>16</b></td>
<td style="background-color:#60f900"><b>16</b></td>
<td style="background-color:#78f800"><b>16</b></td>
<td style="background-color:#82f700"><b>16</b></td>
<td style="background-color:#cff300"><b>18</b></td>
<td style="background-color:#cff300"><b>18</b></td>
<td style="background-color:#cff300"><b>18</b></td>
<td style="background-color:#a4f500"><b>17</b></td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#afafff">2.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>10.08.2018</b></td>
<td style="background-color:#6ff800"><b>16</b></td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#00ff00"><b>14</b></td>
<td style="background-color:#16fd34"><b>13</b></td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#babaff">2.2</td>
<td> - </td>
<td> - </td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#bdbdff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>11.08.2018</b></td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d7d7ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>12.08.2018</b></td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#dedeff">1.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>13.08.2018</b></td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#14fd2f"><b>13</b></td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d3d3ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>14.08.2018</b></td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#d0d0ff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>15.08.2018</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>16.08.2018</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#05ff00"><b>14</b></td>
<td style="background-color:#16fd34"><b>13</b></td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#babaff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>17.08.2018</b></td>
<td style="background-color:#09fe15"><b>13</b></td>
<td style="background-color:#10fe25"><b>13</b></td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#16fd34"><b>13</b></td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#a0a0ff">2.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>18.08.2018</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#d0d0ff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>19.08.2018</b></td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>20.08.2018</b></td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#dbdbff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>21.08.2018</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e5e5ff">1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>22.08.2018</b></td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e9e9ff">0.9</td>
<td style="background-color:#e9e9ff">0.9</td>
<td style="background-color:#e9e9ff">0.9</td>
<td style="background-color:#e9e9ff">0.9</td>
<td style="background-color:#e9e9ff">0.9</td>
<td style="background-color:#e9e9ff">0.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>23.08.2018</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#f0f0ff">0.7</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#e9e9ff">0.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>24.08.2018</b></td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#00ff00"><b>14</b></td>
<td style="background-color:#07fe10"><b>13</b></td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c1c1ff">2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>25.08.2018</b></td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#14fd2f"><b>13</b></td>
<td style="background-color:#04ff0a"><b>13</b></td>
<td style="background-color:#0afe00"><b>14</b></td>
<td style="background-color:#07fe10"><b>13</b></td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#afafff">2.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>26.08.2018</b></td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#d0d0ff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>27.08.2018</b></td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d3d3ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>28.08.2018</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c5c5ff">1.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>29.08.2018</b></td>
<td style="background-color:#14fd2f"><b>13</b></td>
<td style="background-color:#02ff05"><b>13</b></td>
<td style="background-color:#00ff00"><b>14</b></td>
<td style="background-color:#14fd2f"><b>13</b></td>
<td style="background-color:#48fb00"><b>15</b></td>
<td style="background-color:#6ff800"><b>16</b></td>
<td style="background-color:#30fc00"><b>15</b></td>
<td style="background-color:#05ff00"><b>14</b></td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#c8c8ff">1.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>30.08.2018</b></td>
<td style="background-color:#09fe15"><b>13</b></td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b2b2ff">2.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>31.08.2018</b></td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>01.09.2018</b></td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dedeff">1.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>02.09.2018</b></td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#d7d7ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>03.09.2018</b></td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>04.09.2018</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c5c5ff">1.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>05.09.2018</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#bdbdff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>06.09.2018</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>07.09.2018</b></td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dedeff">1.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>08.09.2018</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e2e2ff">1.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>09.09.2018</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#16fd34"><b>13</b></td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>10.09.2018</b></td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#14fd2f"><b>13</b></td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d0d0ff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>11.09.2018</b></td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>12.09.2018</b></td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d3d3ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>13.09.2018</b></td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>14.09.2018</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#c8c8ff">1.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>15.09.2018</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>16.09.2018</b></td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>17.09.2018</b></td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#c5c5ff">1.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>18.09.2018</b></td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bdbdff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>19.09.2018</b></td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#1bfd3f"><b>12</b></td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>20.09.2018</b></td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#d0d0ff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>21.09.2018</b></td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>22.09.2018</b></td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>23.09.2018</b></td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c5c5ff">1.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>24.09.2018</b></td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#bdbdff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>25.09.2018</b></td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#dbdbff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>26.09.2018</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#ccccff">1.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>27.09.2018</b></td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>28.09.2018</b></td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>29.09.2018</b></td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>30.09.2018</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>01.10.2018</b></td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#10fe25"><b>13</b></td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#babaff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>02.10.2018</b></td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>03.10.2018</b></td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#ffffff">0</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e9e9ff">0.9</td>
<td style="background-color:#e9e9ff">0.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>04.10.2018</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#f0f0ff">0.7</td>
<td style="background-color:#f0f0ff">0.7</td>
<td style="background-color:#f0f0ff">0.7</td>
<td style="background-color:#f0f0ff">0.7</td>
<td style="background-color:#f0f0ff">0.7</td>
<td style="background-color:#f0f0ff">0.7</td>
<td style="background-color:#f0f0ff">0.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>05.10.2018</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#f0f0ff">0.7</td>
<td style="background-color:#f0f0ff">0.7</td>
<td style="background-color:#f0f0ff">0.7</td>
<td style="background-color:#f0f0ff">0.7</td>
<td style="background-color:#f0f0ff">0.7</td>
<td style="background-color:#f0f0ff">0.7</td>
<td style="background-color:#f0f0ff">0.7</td>
<td style="background-color:#ededff">0.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>06.10.2018</b></td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#14fd2f"><b>13</b></td>
<td style="background-color:#3ffb00"><b>15</b></td>
<td style="background-color:#52fa00"><b>15</b></td>
<td style="background-color:#57fa00"><b>15</b></td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#e9e9ff">0.9</td>
<td style="background-color:#e9e9ff">0.9</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#bdbdff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>07.10.2018</b></td>
<td style="background-color:#0efe00"><b>14</b></td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#9c9cff">3</td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b6b6ff">2.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>08.10.2018</b></td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d0d0ff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>09.10.2018</b></td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#63f7e7">9</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#c8c8ff">1.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>10.10.2018</b></td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>11.10.2018</b></td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#82f700"><b>16</b></td>
<td style="background-color:#1dfd44"><b>12</b></td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#afafff">2.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>12.10.2018</b></td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#38fb83">11</td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#8a8aff"><b>3.5</b></td>
<td style="background-color:#8787ff"><b>3.6</b></td>
<td style="background-color:#8a8aff"><b>3.5</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>13.10.2018</b></td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#ff0bc6"><b>32</b></td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#8a8aff"><b>3.5</b></td>
<td style="background-color:#8873ed"><b>4.7</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>14.10.2018</b></td>
<td style="background-color:#ffb30e"><b>21</b></td>
<td style="background-color:#a8f500"><b>17</b></td>
<td style="background-color:#b7f400"><b>17</b></td>
<td style="background-color:#adf500"><b>17</b></td>
<td style="background-color:#73f800"><b>16</b></td>
<td style="background-color:#0afe00"><b>14</b></td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#9a6ed8"><b>5.5</b></td>
<td style="background-color:#9a6ed8"><b>5.5</b></td>
<td style="background-color:#986fdb"><b>5.4</b></td>
<td style="background-color:#9171e3"><b>5.1</b></td>
<td style="background-color:#8873ed"><b>4.7</b></td>
<td style="background-color:#7f76f7"><b>4.3</b></td>
<td style="background-color:#7c7cff"><b>3.9</b></td>
<td style="background-color:#8787ff"><b>3.6</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>15.10.2018</b></td>
<td style="background-color:#4cf9b2">10</td>
<td style="background-color:#3afc00"><b>15</b></td>
<td style="background-color:#fff000"><b>19</b></td>
<td style="background-color:#adf500"><b>17</b></td>
<td style="background-color:#48fb00"><b>15</b></td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#8787ff"><b>3.6</b></td>
<td style="background-color:#7878ff"><b>4</b></td>
<td style="background-color:#8375f2"><b>4.5</b></td>
<td style="background-color:#8c72e8"><b>4.9</b></td>
<td style="background-color:#8f71e5"><b>5</b></td>
<td style="background-color:#8a73ea"><b>4.8</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>16.10.2018</b></td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#8175f5"><b>4.4</b></td>
<td style="background-color:#7878ff"><b>4</b></td>
<td style="background-color:#8787ff"><b>3.6</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#9c9cff">3</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#b2b2ff">2.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>17.10.2018</b></td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#6af900"><b>16</b></td>
<td style="background-color:#26fd00"><b>14</b></td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#9c9cff">3</td>
<td style="background-color:#9999ff"><b>3.1</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>18.10.2018</b></td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#10fe25"><b>13</b></td>
<td style="background-color:#0bfe1a"><b>13</b></td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#0efe00"><b>14</b></td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#8383ff"><b>3.7</b></td>
<td style="background-color:#7f7fff"><b>3.8</b></td>
<td style="background-color:#7c7cff"><b>3.9</b></td>
<td style="background-color:#7f7fff"><b>3.8</b></td>
<td style="background-color:#8383ff"><b>3.7</b></td>
<td style="background-color:#8787ff"><b>3.6</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>19.10.2018</b></td>
<td style="background-color:#10fe25"><b>13</b></td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#8787ff"><b>3.6</b></td>
<td style="background-color:#8a8aff"><b>3.5</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#afafff">2.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>20.10.2018</b></td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#c1c1ff">2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>21.10.2018</b></td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d0d0ff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>22.10.2018</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>23.10.2018</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#d0d0ff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>24.10.2018</b></td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dedeff">1.2</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e2e2ff">1.1</td>
<td style="background-color:#e5e5ff">1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>25.10.2018</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#e5e5ff">1</td>
<td style="background-color:#e9e9ff">0.9</td>
<td style="background-color:#e9e9ff">0.9</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#f0f0ff">0.7</td>
<td style="background-color:#f0f0ff">0.7</td>
<td style="background-color:#ededff">0.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>26.10.2018</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#ededff">0.8</td>
<td style="background-color:#e9e9ff">0.9</td>
<td style="background-color:#e9e9ff">0.9</td>
<td style="background-color:#e9e9ff">0.9</td>
<td style="background-color:#e5e5ff">1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>27.10.2018</b></td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#2dfc69"><b>12</b></td>
<td style="background-color:#ffd007"><b>20</b></td>
<td style="background-color:#ff5225"><b>24</b></td>
<td style="background-color:#ff3033"><b>25</b></td>
<td style="background-color:#ff5225"><b>24</b></td>
<td style="background-color:#ff9316"><b>22</b></td>
<td style="background-color:#ffe303"><b>19</b></td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#7878ff"><b>4</b></td>
<td style="background-color:#8674f0"><b>4.6</b></td>
<td style="background-color:#8375f2"><b>4.5</b></td>
<td style="background-color:#7d77fa"><b>4.2</b></td>
<td style="background-color:#7878ff"><b>4</b></td>
<td style="background-color:#7f76f7"><b>4.3</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>28.10.2018</b></td>
<td style="background-color:#ffed01"><b>19</b></td>
<td style="background-color:#bcf400"><b>17</b></td>
<td style="background-color:#ffe004"><b>19</b></td>
<td style="background-color:#ff9316"><b>22</b></td>
<td style="background-color:#ff7c1b"><b>22</b></td>
<td style="background-color:#ff9615"><b>22</b></td>
<td style="background-color:#ffe602"><b>19</b></td>
<td style="background-color:#cff300"><b>18</b></td>
<td style="background-color:#8375f2"><b>4.5</b></td>
<td style="background-color:#8a73ea"><b>4.8</b></td>
<td style="background-color:#8c72e8"><b>4.9</b></td>
<td style="background-color:#9171e3"><b>5.1</b></td>
<td style="background-color:#9171e3"><b>5.1</b></td>
<td style="background-color:#9171e3"><b>5.1</b></td>
<td style="background-color:#8f71e5"><b>5</b></td>
<td style="background-color:#8873ed"><b>4.7</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>29.10.2018</b></td>
<td style="background-color:#fff000"><b>19</b></td>
<td style="background-color:#90f700"><b>17</b></td>
<td style="background-color:#16fd34"><b>13</b></td>
<td style="background-color:#22fc4f"><b>12</b></td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#1dfd00"><b>14</b></td>
<td style="background-color:#7f76f7"><b>4.3</b></td>
<td style="background-color:#7f7fff"><b>3.8</b></td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#b6b6ff">2.3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>30.10.2018</b></td>
<td style="background-color:#d9f200"><b>18</b></td>
<td style="background-color:#87f700"><b>16</b></td>
<td style="background-color:#60f900"><b>16</b></td>
<td style="background-color:#a8f500"><b>17</b></td>
<td style="background-color:#8cf700"><b>16</b></td>
<td style="background-color:#3afc00"><b>15</b></td>
<td style="background-color:#2bfc00"><b>14</b></td>
<td style="background-color:#18fe00"><b>14</b></td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#9c9cff">3</td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#8383ff"><b>3.7</b></td>
<td style="background-color:#7878ff"><b>4</b></td>
<td style="background-color:#7d77fa"><b>4.2</b></td>
<td style="background-color:#8175f5"><b>4.4</b></td>
<td style="background-color:#8175f5"><b>4.4</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>31.10.2018</b></td>
<td style="background-color:#09fe15"><b>13</b></td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#00ff00"><b>14</b></td>
<td style="background-color:#3ffb00"><b>15</b></td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#7d77fa"><b>4.2</b></td>
<td style="background-color:#7878ff"><b>4</b></td>
<td style="background-color:#7f7fff"><b>3.8</b></td>
<td style="background-color:#8a8aff"><b>3.5</b></td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#8a8aff"><b>3.5</b></td>
<td style="background-color:#8787ff"><b>3.6</b></td>
<td style="background-color:#7f7fff"><b>3.8</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>01.11.2018</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#7f7fff"><b>3.8</b></td>
<td style="background-color:#7f7fff"><b>3.8</b></td>
<td style="background-color:#8787ff"><b>3.6</b></td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#9c9cff">3</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#afafff">2.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>02.11.2018</b></td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#bdbdff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>03.11.2018</b></td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#a7a7ff">2.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>04.11.2018</b></td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#16fd34"><b>13</b></td>
<td style="background-color:#7df800"><b>16</b></td>
<td style="background-color:#0dfe1f"><b>13</b></td>
<td style="background-color:#65f900"><b>16</b></td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#8a8aff"><b>3.5</b></td>
<td style="background-color:#7f7fff"><b>3.8</b></td>
<td style="background-color:#7a77fc"><b>4.1</b></td>
<td style="background-color:#8175f5"><b>4.4</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>05.11.2018</b></td>
<td style="background-color:#9af600"><b>17</b></td>
<td style="background-color:#90f700"><b>17</b></td>
<td style="background-color:#cff300"><b>18</b></td>
<td style="background-color:#0afe00"><b>14</b></td>
<td style="background-color:#6af900"><b>16</b></td>
<td style="background-color:#13fe00"><b>14</b></td>
<td style="background-color:#2ffb6e"><b>11</b></td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#8873ed"><b>4.7</b></td>
<td style="background-color:#8f71e5"><b>5</b></td>
<td style="background-color:#8f71e5"><b>5</b></td>
<td style="background-color:#8c72e8"><b>4.9</b></td>
<td style="background-color:#8873ed"><b>4.7</b></td>
<td style="background-color:#8375f2"><b>4.5</b></td>
<td style="background-color:#7f76f7"><b>4.3</b></td>
<td style="background-color:#7a77fc"><b>4.1</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>06.11.2018</b></td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#00ff00"><b>14</b></td>
<td style="background-color:#87f700"><b>16</b></td>
<td style="background-color:#a8f500"><b>17</b></td>
<td style="background-color:#ffed01"><b>19</b></td>
<td style="background-color:#7c7cff"><b>3.9</b></td>
<td style="background-color:#8383ff"><b>3.7</b></td>
<td style="background-color:#8a8aff"><b>3.5</b></td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#8a8aff"><b>3.5</b></td>
<td style="background-color:#7c7cff"><b>3.9</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>07.11.2018</b></td>
<td style="background-color:#9ff600"><b>17</b></td>
<td style="background-color:#2bfc64"><b>12</b></td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#7a77fc"><b>4.1</b></td>
<td style="background-color:#7a77fc"><b>4.1</b></td>
<td style="background-color:#8175f5"><b>4.4</b></td>
<td style="background-color:#8c72e8"><b>4.9</b></td>
<td style="background-color:#9171e3"><b>5.1</b></td>
<td style="background-color:#9171e3"><b>5.1</b></td>
<td style="background-color:#8c72e8"><b>4.9</b></td>
<td style="background-color:#8873ed"><b>4.7</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>08.11.2018</b></td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#04ff0a"><b>13</b></td>
<td style="background-color:#6ff800"><b>16</b></td>
<td style="background-color:#a8f500"><b>17</b></td>
<td style="background-color:#3afc00"><b>15</b></td>
<td style="background-color:#12fe2a"><b>13</b></td>
<td style="background-color:#8375f2"><b>4.5</b></td>
<td style="background-color:#7f76f7"><b>4.3</b></td>
<td style="background-color:#7a77fc"><b>4.1</b></td>
<td style="background-color:#7d77fa"><b>4.2</b></td>
<td style="background-color:#8175f5"><b>4.4</b></td>
<td style="background-color:#8873ed"><b>4.7</b></td>
<td style="background-color:#8f71e5"><b>5</b></td>
<td style="background-color:#956fdd"><b>5.3</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>09.11.2018</b></td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#12fe2a"><b>13</b></td>
<td style="background-color:#22fd00"><b>14</b></td>
<td style="background-color:#14fd2f"><b>13</b></td>
<td style="background-color:#22fd00"><b>14</b></td>
<td style="background-color:#9a6ed8"><b>5.5</b></td>
<td style="background-color:#986fdb"><b>5.4</b></td>
<td style="background-color:#9370e0"><b>5.2</b></td>
<td style="background-color:#8a73ea"><b>4.8</b></td>
<td style="background-color:#8375f2"><b>4.5</b></td>
<td style="background-color:#7d77fa"><b>4.2</b></td>
<td style="background-color:#7a77fc"><b>4.1</b></td>
<td style="background-color:#7d77fa"><b>4.2</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>10.11.2018</b></td>
<td style="background-color:#7df800"><b>16</b></td>
<td style="background-color:#ecf100"><b>18</b></td>
<td style="background-color:#e7f100"><b>18</b></td>
<td style="background-color:#b2f500"><b>17</b></td>
<td style="background-color:#65f900"><b>16</b></td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#8175f5"><b>4.4</b></td>
<td style="background-color:#8873ed"><b>4.7</b></td>
<td style="background-color:#8a73ea"><b>4.8</b></td>
<td style="background-color:#8674f0"><b>4.6</b></td>
<td style="background-color:#8175f5"><b>4.4</b></td>
<td style="background-color:#7d77fa"><b>4.2</b></td>
<td style="background-color:#7a77fc"><b>4.1</b></td>
<td style="background-color:#7878ff"><b>4</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>11.11.2018</b></td>
<td style="background-color:#55f8c7">10</td>
<td style="background-color:#53f9c2">10</td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#24fc54"><b>12</b></td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#7878ff"><b>4</b></td>
<td style="background-color:#7a77fc"><b>4.1</b></td>
<td style="background-color:#7a77fc"><b>4.1</b></td>
<td style="background-color:#7a77fc"><b>4.1</b></td>
<td style="background-color:#7a77fc"><b>4.1</b></td>
<td style="background-color:#7878ff"><b>4</b></td>
<td style="background-color:#7c7cff"><b>3.9</b></td>
<td style="background-color:#7f7fff"><b>3.8</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>12.11.2018</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#8383ff"><b>3.7</b></td>
<td style="background-color:#8a8aff"><b>3.5</b></td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>13.11.2018</b></td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#a5faf7">7</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#9c9cff">3</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#afafff">2.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>14.11.2018</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d7d7ff">1.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>15.11.2018</b></td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#4af9ad">10</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#8ef9f5">8</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#a7a7ff">2.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>16.11.2018</b></td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#9c9cff">3</td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#9c9cff">3</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#b2b2ff">2.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>17.11.2018</b></td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#82f700"><b>16</b></td>
<td style="background-color:#ecf100"><b>18</b></td>
<td style="background-color:#6af900"><b>16</b></td>
<td style="background-color:#6ff800"><b>16</b></td>
<td style="background-color:#57fa00"><b>15</b></td>
<td style="background-color:#6af900"><b>16</b></td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#8a8aff"><b>3.5</b></td>
<td style="background-color:#8674f0"><b>4.6</b></td>
<td style="background-color:#9e6dd3"><b>5.7</b></td>
<td style="background-color:#ae68c1"><b>6.4</b></td>
<td style="background-color:#b367bc"><b>6.6</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>18.11.2018</b></td>
<td style="background-color:#faf000"><b>19</b></td>
<td style="background-color:#c0f400"><b>18</b></td>
<td style="background-color:#8cf700"><b>16</b></td>
<td style="background-color:#0afe00"><b>14</b></td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#b367bc"><b>6.6</b></td>
<td style="background-color:#b067be"><b>6.5</b></td>
<td style="background-color:#aa69c6"><b>6.2</b></td>
<td style="background-color:#a36bce"><b>5.9</b></td>
<td style="background-color:#a16cd1"><b>5.8</b></td>
<td style="background-color:#9c6dd6"><b>5.6</b></td>
<td style="background-color:#986fdb"><b>5.4</b></td>
<td style="background-color:#8f71e5"><b>5</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>19.11.2018</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#8674f0"><b>4.6</b></td>
<td style="background-color:#7d77fa"><b>4.2</b></td>
<td style="background-color:#7c7cff"><b>3.9</b></td>
<td style="background-color:#8383ff"><b>3.7</b></td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#a7a7ff">2.7</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>20.11.2018</b></td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#3ffa93">11</td>
<td style="background-color:#35fc00"><b>15</b></td>
<td style="background-color:#cff300"><b>18</b></td>
<td style="background-color:#65f900"><b>16</b></td>
<td style="background-color:#00ff00"><b>14</b></td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#8a8aff"><b>3.5</b></td>
<td style="background-color:#7f7fff"><b>3.8</b></td>
<td style="background-color:#7878ff"><b>4</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>21.11.2018</b></td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#28fc5e"><b>12</b></td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#36fb7e"><b>11</b></td>
<td style="background-color:#19fd3a"><b>12</b></td>
<td style="background-color:#04ff0a"><b>13</b></td>
<td style="background-color:#48f9a8">10</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#7878ff"><b>4</b></td>
<td style="background-color:#7c7cff"><b>3.9</b></td>
<td style="background-color:#8383ff"><b>3.7</b></td>
<td style="background-color:#8787ff"><b>3.6</b></td>
<td style="background-color:#8a8aff"><b>3.5</b></td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>22.11.2018</b></td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#9c9cff">3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>23.11.2018</b></td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#82f8f4">8</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bdbdff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>24.11.2018</b></td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#57f8cc">10</td>
<td style="background-color:#1ffd49"><b>12</b></td>
<td style="background-color:#78f800"><b>16</b></td>
<td style="background-color:#90f700"><b>17</b></td>
<td style="background-color:#22fd00"><b>14</b></td>
<td style="background-color:#3afa88">11</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#b2b2ff">2.4</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>25.11.2018</b></td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#26fc59"><b>12</b></td>
<td style="background-color:#d4f300"><b>18</b></td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#9999ff"><b>3.1</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>26.11.2018</b></td>
<td style="background-color:#adf500"><b>17</b></td>
<td style="background-color:#9af600"><b>17</b></td>
<td style="background-color:#9af600"><b>17</b></td>
<td style="background-color:#02ff05"><b>13</b></td>
<td style="background-color:#34fb79"><b>11</b></td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#8a8aff"><b>3.5</b></td>
<td style="background-color:#8a8aff"><b>3.5</b></td>
<td style="background-color:#8787ff"><b>3.6</b></td>
<td style="background-color:#8787ff"><b>3.6</b></td>
<td style="background-color:#8a8aff"><b>3.5</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#a0a0ff">2.9</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>27.11.2018</b></td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#9c9cff">3</td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#8383ff"><b>3.7</b></td>
<td style="background-color:#7f7fff"><b>3.8</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>28.11.2018</b></td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#5af8d2">10</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#6bf7f1">9</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#8383ff"><b>3.7</b></td>
<td style="background-color:#8787ff"><b>3.6</b></td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#7a77fc"><b>4.1</b></td>
<td style="background-color:#9171e3"><b>5.1</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>29.11.2018</b></td>
<td style="background-color:#3cfa8d">11</td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#12fe2a"><b>13</b></td>
<td style="background-color:#3afc00"><b>15</b></td>
<td style="background-color:#57fa00"><b>15</b></td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#9370e0"><b>5.2</b></td>
<td style="background-color:#8a73ea"><b>4.8</b></td>
<td style="background-color:#8674f0"><b>4.6</b></td>
<td style="background-color:#8175f5"><b>4.4</b></td>
<td style="background-color:#7f76f7"><b>4.3</b></td>
<td style="background-color:#7878ff"><b>4</b></td>
<td style="background-color:#8383ff"><b>3.7</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>30.11.2018</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">0</td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#afafff">2.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>01.12.2018</b></td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#a4a4ff">2.8</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>02.12.2018</b></td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#e0fdfc">6</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#9c9cff">3</td>
<td style="background-color:#9c9cff">3</td>
<td style="background-color:#9c9cff">3</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>03.12.2018</b></td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#ccfcfa">6</td>
<td style="background-color:#e8fefd">6</td>
<td style="background-color:#ffffff">2</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#9c9cff">3</td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#9595ff"><b>3.2</b></td>
<td style="background-color:#9595ff"><b>3.2</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>04.12.2018</b></td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#b5fbf8">7</td>
<td style="background-color:#73f8f2">9</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#9c9cff">3</td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#c1c1ff">2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>05.12.2018</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#babaff">2.2</td>
<td style="background-color:#bdbdff">2.1</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>06.12.2018</b></td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#d8fdfb">6</td>
<td style="background-color:#b9fbf9">7</td>
<td style="background-color:#bdfcf9">7</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#86f9f4">8</td>
<td style="background-color:#c8fcfa">6</td>
<td style="background-color:#d4fdfb">6</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>07.12.2018</b></td>
<td style="background-color:#d0fdfb">6</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#f3fefe">5</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#d7d7ff">1.4</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#dbdbff">1.3</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#c8c8ff">1.8</td>
<td style="background-color:#c1c1ff">2</td>
<td style="background-color:#babaff">2.2</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>08.12.2018</b></td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#5ef8dc">9</td>
<td style="background-color:#45faa2">10</td>
<td style="background-color:#43fa9d">11</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#b2b2ff">2.4</td>
<td style="background-color:#afafff">2.5</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#ababff">2.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>09.12.2018</b></td>
<td style="background-color:#67f7f1">9</td>
<td style="background-color:#77f8f2">9</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#6ff7f2">9</td>
<td style="background-color:#7ef8f3">8</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#c1fcf9">7</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#ababff">2.6</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#9c9cff">3</td>
<td style="background-color:#8383ff"><b>3.7</b></td>
<td style="background-color:#8175f5"><b>4.4</b></td>
<td style="background-color:#8674f0"><b>4.6</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>10.12.2018</b></td>
<td style="background-color:#f7fffe">5</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#ecfefd">6</td>
<td style="background-color:#96f9f5">8</td>
<td style="background-color:#a9faf7">7</td>
<td style="background-color:#effefe">5</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#8175f5"><b>4.4</b></td>
<td style="background-color:#7a77fc"><b>4.1</b></td>
<td style="background-color:#8383ff"><b>3.7</b></td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#9999ff"><b>3.1</b></td>
<td style="background-color:#a0a0ff">2.9</td>
<td style="background-color:#a7a7ff">2.7</td>
<td style="background-color:#afafff">2.5</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>11.12.2018</b></td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#9afaf6">8</td>
<td style="background-color:#9efaf6">8</td>
<td style="background-color:#adfbf7">7</td>
<td style="background-color:#ffffff">5</td>
<td style="background-color:#fbffff">5</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#bdbdff">2.1</td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#ccccff">1.7</td>
<td style="background-color:#d0d0ff">1.6</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d3d3ff">1.5</td>
<td style="background-color:#d0d0ff">1.6</td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>12.12.2018</b></td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">1</td>
<td style="background-color:#ffffff">3</td>
<td style="background-color:#dcfdfc">6</td>
<td style="background-color:#8af9f4">8</td>
<td style="background-color:#41fa98">11</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#13fe00"><b>14</b></td>
<td style="background-color:#c5c5ff">1.9</td>
<td style="background-color:#b6b6ff">2.3</td>
<td style="background-color:#a4a4ff">2.8</td>
<td style="background-color:#9292ff"><b>3.3</b></td>
<td style="background-color:#8787ff"><b>3.6</b></td>
<td style="background-color:#8383ff"><b>3.7</b></td>
<td style="background-color:#8787ff"><b>3.6</b></td>
<td style="background-color:#8787ff"><b>3.6</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>13.12.2018</b></td>
<td style="background-color:#f5f100"><b>19</b></td>
<td style="background-color:#ff6620"><b>23</b></td>
<td style="background-color:#ff9f13"><b>21</b></td>
<td style="background-color:#ffed01"><b>19</b></td>
<td style="background-color:#cff300"><b>18</b></td>
<td style="background-color:#9ff600"><b>17</b></td>
<td style="background-color:#18fe00"><b>14</b></td>
<td style="background-color:#31fb73"><b>11</b></td>
<td style="background-color:#7f7fff"><b>3.8</b></td>
<td style="background-color:#8a73ea"><b>4.8</b></td>
<td style="background-color:#a16cd1"><b>5.8</b></td>
<td style="background-color:#ae68c1"><b>6.4</b></td>
<td style="background-color:#b566b9"><b>6.7</b></td>
<td style="background-color:#b067be"><b>6.5</b></td>
<td style="background-color:#a76ac9"><b>6.1</b></td>
<td style="background-color:#9e6dd3"><b>5.7</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#E0E0E0"><b>14.12.2018</b></td>
<td style="background-color:#7af8f3">8</td>
<td style="background-color:#60f8e1">9</td>
<td style="background-color:#92f9f5">8</td>
<td style="background-color:#c5fcfa">7</td>
<td style="background-color:#b1fbf8">7</td>
<td style="background-color:#e4fefc">6</td>
<td style="background-color:#ffffff">4</td>
<td style="background-color:#a1faf6">7</td>
<td style="background-color:#9a6ed8"><b>5.5</b></td>
<td style="background-color:#986fdb"><b>5.4</b></td>
<td style="background-color:#956fdd"><b>5.3</b></td>
<td style="background-color:#9171e3"><b>5.1</b></td>
<td style="background-color:#8873ed"><b>4.7</b></td>
<td style="background-color:#7f76f7"><b>4.3</b></td>
<td style="background-color:#7c7cff"><b>3.9</b></td>
<td style="background-color:#8787ff"><b>3.6</b></td>
</tr><tr><td nowrap="nowrap" height="20" bgcolor="#c2c2c2"><b>15.12.2018</b></td>
<td style="background-color:#65f7ec">9</td>
<td style="background-color:#5cf8d7">9</td>
<td style="background-color:#51f9bd">10</td>
<td style="background-color:#4ef9b7">10</td>
<td style="background-color:#24fc54"><b>12</b></td>
<td> - </td>
<td> - </td>
<td> - </td>
<td style="background-color:#8e8eff"><b>3.4</b></td>
<td style="background-color:#8a8aff"><b>3.5</b></td>
<td style="background-color:#7f7fff"><b>3.8</b></td>
<td style="background-color:#7f76f7"><b>4.3</b></td>
<td> - </td>
<td> - </td>
<td> - </td>
<td> - </td>
</tr>                    </tbody></table>
        <br>(archive available: <b>23.12.2006 - 15.12.2018</b>)</td></tr></tbody></table></div>
    
    

</div>
    <div id="bottom-menu-main" class="main-page-include menu fixed bottom higher dark subsection hide">
        <a class="menu-button" onclick="WGA.showHome();"><svg class="icon light"><use xlink:href="#ico_accommodation"></use></svg><span class=""> Home </span></a>
        <a href="javascript:void(0)" class="menu-button" data-navig="showMapFcst" id="showmap"><svg class="icon light"><use xlink:href="#ico_map"></use></svg><span class="small-tablet-hide collapsed-show"> Maps</span></a>
        <a class="menu-button" onclick="WGA.options();"><svg class="icon light"><use xlink:href="#ico_options"></use></svg><span class="big-tablet-hide collapsed-show"> Options</span></a>    </div>     
</div>    

<div id="home-page" class="subsection content hide">
    <div class="home-lists">
        <div class="list-header">Last used:<a id="last-more" onclick="WGA.moreLast();" class=""> more <svg class="icon more-more"><use xlink:href="#ico_down"></use></svg></a></div>
    <div class="home-list" id="last-list"></div>
    <div class="list-header">Favourites:</div>
    <div class="home-list" id="favourite-list"></div>
    </div>
    <div id="bottom-menu-home" class="home-page-include menu fixed bottom higher dark subsection hide">
        <a class="menu-button" onclick="WGA.goSearch();"><svg class="icon light"><use xlink:href="#ico_search"></use></svg><span class=""> Search</span></a>
        <a class="menu-button showfavo"><svg class="icon light"><use xlink:href="#ico_favourite"></use></svg><span class=""> Favourites</span></a>
        <a href="javascript:void(0)" class="menu-button" data-navig="showMapFcst" id="showmap"><svg class="icon light"><use xlink:href="#ico_map"></use></svg><span class="small-tablet-hide collapsed-show"> Maps</span></a>
        <a class="menu-button" onclick="WGA.options();"><svg class="icon light"><use xlink:href="#ico_options"></use></svg><span class="big-tablet-hide collapsed-show"> Options</span></a>    </div>    
</div>

<div id="wgmap-page" class="subsection content content-max menusize-1 hide">
    <div class="reklamy-map" data-row="0" id="reklamy-map-0"></div>
    <div id="wgmap-menu-fcst" class="menu subsection fixed hide">
        <ul class="sm sm-simple sm-wg-inline" data-smartmenus-id="15448874658389812">
          <li><a class="has-submenu" id="wgmap-model" aria-haspopup="true" aria-controls="wgmap-model-menu" aria-expanded="false"><svg class="icon"><use xlink:href="#ico_model_selection"></use></svg> Model</a>
            <ul id="wgmap-model-menu" class="wg-map-model" role="group" aria-hidden="true" aria-labelledby="wgmap-model" aria-expanded="false">
            </ul>  
          </li>
          <li><a class="has-submenu" id="wgmap-type" aria-haspopup="true" aria-controls="wgmap-type-menu" aria-expanded="false"><svg class="icon"><use xlink:href="#ico_more_02"></use></svg><span class="small-tablet-hide"> Type</span></a>
            <ul id="wgmap-type-menu" role="group" aria-hidden="true" aria-labelledby="wgmap-type" aria-expanded="false">
            </ul>  
          </li>
          <li><a data-navig="showMapSpots" class="hide_touch_bm_mobile"><svg class="icon"><use xlink:href="#ico_spot_map"></use></svg><span class="small-tablet-hide"> Spots</span></a>
          </li>
          <li><a data-navig="showMapStations" class="hide_touch_bm_mobile"><svg class="icon"><use xlink:href="#ico_station_map"></use></svg><span class="small-tablet-hide"> Stations</span></a>
          </li>
        </ul><div id="timeslider-menu-wrapper" class="bottom"><div id="timeslider-menu"></div></div><a id="play" class="animation_icon hide"><svg class="icon"><use xlink:href="#ico_play"></use></svg></a><a id="pause" class="animation_icon hide"><svg class="icon"><use xlink:href="#ico_pause"></use></svg></a><ul id="wgmap-time-menu" class="sm sm-simple sm-wg-inline" data-smartmenus-id="15448874658410474">
            <li><a id="prevhr"><svg class="icon"><use xlink:href="#ico_left_frame"></use></svg></a></li><li>
            </li><li><a id="wgmap-time" class="currdate has-submenu" aria-haspopup="true" aria-controls="wgmap-tz-menu" aria-expanded="false">Time...</a>
              <ul id="wgmap-tz-menu" role="group" aria-hidden="true" aria-labelledby="wgmap-time" aria-expanded="false">
                <li><a class="settz" data-tz="UTC"><svg class="icon"><use xlink:href="#ico_timezone"></use></svg> UTC</a></li>
                <li><a id="picktz"><svg class="icon"><use xlink:href="#ico_timezone"></use></svg> Pick timezone from map</a></li>
              </ul>  
            </li>
            <li><a id="nexthr"><svg class="icon"><use xlink:href="#ico_right_frame"></use></svg></a></li><li>
        </li></ul>
    </div>
    <div id="wgmap-menu-spots" class="menu subsection fixed hide">
        <ul class="sm sm-simple sm-wg-inline" data-smartmenus-id="15448874658434028">
          <li><a data-navig="showMapFcst"><svg class="icon"><use xlink:href="#ico_forecast_map"></use></svg> Forecasts</a>
          </li>
          <li><a data-navig="showMapSpots"><svg class="icon"><use xlink:href="#ico_spot_map"></use></svg> Spots</a>
          </li>
          <li><a data-navig="showMapStations"><svg class="icon"><use xlink:href="#ico_station_map"></use></svg> Stations</a>
          </li>
        </ul>
    </div>
    <div class="reklamy-map" id="reklamy-map"></div>
   <div id="wgmap" class="leaflet-container leaflet-touch leaflet-grab leaflet-touch-drag leaflet-touch-zoom" style="position: relative;"><div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);"><div class="leaflet-pane leaflet-tile-pane"></div><div class="leaflet-pane leaflet-shadow-pane"></div><div class="leaflet-pane leaflet-overlay-pane"></div><div class="leaflet-pane leaflet-marker-pane"></div><div class="leaflet-pane leaflet-tooltip-pane"></div><div class="leaflet-pane leaflet-popup-pane"></div><div class="leaflet-proxy leaflet-zoom-animated"></div></div><div class="leaflet-control-container"><div class="leaflet-top leaflet-left"><div class="leaflet-control-locate leaflet-bar leaflet-control"><a class="leaflet-bar-part leaflet-bar-part-single" title="Show me where I am"><span class="wg-locate-icon"><svg class="icon"><use xlink:href="#ico_spot_map"></use></svg></span></a></div></div><div class="leaflet-top leaflet-right"></div><div class="leaflet-bottom leaflet-left"><div class="leaflet-control-scale leaflet-control"><div class="leaflet-control-scale-line" style="width: 96px;">300 km</div></div></div><div class="leaflet-bottom leaflet-right"><div class="leaflet-control-attribution leaflet-control"><a href="http://leafletjs.com/" title="A JS library for interactive maps">Leaflet</a></div></div></div></div>
   
   
    <div id="bottom-menu-wgmap" class="wgmap-page-include menu fixed bottom higher dark subsection hide">
        <a class="menu-button" onclick="WGA.showHome();"><svg class="icon light"><use xlink:href="#ico_accommodation"></use></svg><span class=""> Home </span></a>
        <a href="javascript:void(0)" class="menu-button" data-navig="showMapFcst"><svg class="icon light"><use xlink:href="#ico_forecast_map"></use></svg><span class="small-tablet-hide collapsed-show"> Forecasts</span></a>
        <a href="javascript:void(0)" class="menu-button" data-navig="showMapSpots"><svg class="icon light"><use xlink:href="#ico_spot_map"></use></svg><span class="small-tablet-hide collapsed-show"> Spots</span></a>
        <a href="javascript:void(0)" class="menu-button" data-navig="showMapStations"><svg class="icon light"><use xlink:href="#ico_station_map"></use></svg><span class="small-tablet-hide collapsed-show"> Stations</span></a>
    </div>     
 </div>    

<div id="spot-page" class="subsection content hide">
    <div class="reklamy-station" data-row="0" id="reklamy-station-0"></div>
    <div id="spot-header" class="spot"><span class="wgs_station_name" style="float: left"></span><div id="station-name-icons" class="spotname-icons"><a class="spot-icon-link tooltip mobile2-hide favourite-station-add"><svg class="icon"><use xlink:href="#ico_favourite"></use></svg></a></div></div>
    <div id="spot-menu" class="menu subsection spot-include hide">
        <ul class="sm sm-simple sm-wg-inline" data-smartmenus-id="1544887465843088">
          <li><a id="current_station_forecast_link"><svg class="icon"><use xlink:href="#ico_forecast_table"></use></svg><span class="small-tablet-hide"> Forecast</span></a>
          </li>
          <li><a id="current_station_map_link"><svg class="icon"><use xlink:href="#ico_map"></use></svg><span class="small-tablet-hide"> Map</span></a>
          </li>
                    <li><a class="has-submenu" id="sm-1544887465843088-1" aria-haspopup="true" aria-controls="graph-type-menu" aria-expanded="false">
                <span id="graph-menu-type-wind"><svg class="icon"><use xlink:href="#ico_wind"></use></svg><span class="mobile-hide w480-hide"> Wind</span></span>
                <span id="graph-menu-type-temp" style="display:none"><svg class="icon"><use xlink:href="#ico_temperature"></use></svg><span class="mobile-hide w480-hide"> Temperature</span></span>
              </a>
            <ul id="graph-type-menu" role="group" aria-hidden="true" aria-labelledby="sm-1544887465843088-1" aria-expanded="false">
                <li><a data-id="windspd" data-navig="showStationGraphWind" href="javascript:void(0);"><svg class="icon"><use xlink:href="#ico_wind"></use></svg> Wind</a></li>
                <li><a data-id="t2m" data-navig="showStationGraphTemp" href="javascript:void(0);"><svg class="icon"><use xlink:href="#ico_temperature"></use></svg> Temperature</a></li>
            </ul>  
          </li>          
          <li><a class="has-submenu" id="sm-1544887465843088-2" aria-haspopup="true" aria-controls="spot-graph-hours" aria-expanded="false"><svg class="icon"><use xlink:href="#ico_options"></use></svg><span class="mobile-hide tablet-hide"> Period</span></a>
<ul id="spot-graph-hours" role="group" aria-hidden="true" aria-labelledby="sm-1544887465843088-2" aria-expanded="false"><li><a data-navig="stationSwitchHours" data-args="1"><svg class="icon"><use xlink:href="#ico_show_legend"></use></svg> 1 hour</a></li>
<li><a data-navig="stationSwitchHours" data-args="3"><svg class="icon"><use xlink:href="#ico_show_legend"></use></svg> 3 hours</a></li>
<li><a data-navig="stationSwitchHours" data-args="6"><svg class="icon"><use xlink:href="#ico_show_legend"></use></svg> 6 hours</a></li>
<li><a data-navig="stationSwitchHours" data-args="12"><svg class="icon"><use xlink:href="#ico_show_legend"></use></svg> 12 hours</a></li>
<li><a data-navig="stationSwitchHours" data-args="24"><svg class="icon"><use xlink:href="#ico_show_legend"></use></svg> 1 day</a></li>
<li><a data-navig="stationSwitchHours" data-args="48"><svg class="icon"><use xlink:href="#ico_show_legend"></use></svg> 2 days</a></li>
<li><a data-navig="stationSwitchHours" data-args="168"><svg class="icon"><use xlink:href="#ico_show_legend"></use></svg> 7 days</a></li>
<li><a data-navig="stationSwitchHours" data-args="336"><svg class="icon"><use xlink:href="#ico_show_legend"></use></svg> 14 days</a></li>
<li><a data-navig="stationSwitchHours" data-args="720"><svg class="icon"><use xlink:href="#ico_show_legend"></use></svg> 30 days</a></li>
</ul> 
          </li>
          <li><a id="station_set_date" style="position:relative"><svg class="icon"><use xlink:href="#ico_calendar"></use></svg><input id="station_set_date_hidden" style="display: none;" name="station_set_date"><span class="tablet-hide"> Date</span></a></li>
          <li><a id="station_alert_link" style="position:relative"><svg class="icon"><use xlink:href="#ico_notification"></use></svg><span class="mobile-hide w480-hide"> Alert</span></a></li>
        </ul>
        <div class="wgs_last_time"></div>
    </div>
    <div id="spot-map" class=""></div>
    <div id="spot-graph" class=""></div>
    <div id="spot-data" class="spot-data-current">
        <div class="wgs-data wgs_wind_avg_color wgs_wind_dir"><div class="wgs_wind_dir_arrow"></div></div>
        <div class="wgs-data wgs-wind-dir-txt wgs_wind_avg_color">
            <span class="wgs_wind_avg_color wgs_wind_dir"><span class="wgs_wind_dir_value"></span></span>
            <span class="wgs_wind_avg_color wgs_wind_avg"><span class="wgs_wind_dir_numvalue"></span></span>
        </div>
        <div data-navig="showStationGraphWind" class="wgs-data wgs-wind wgs_wind_avg_color wgs_wind_avg"><a class="wind prumer"><span class="wgs_wind_avg_value"></span> <span class="wgs_wind_units"></span></a></div>
        <div data-navig="showStationGraphWind" class="wgs-data wgs-wind wgs_wind_max_color wgs_wind_max"><a class="wind max">max: <span class="wgs_wind_max_value"></span></a></div>
        <div data-navig="showStationGraphWind" class="wgs-data wgs-wind wgs_wind_min_color wgs_wind_min"><a class="wind min">min: <span class="wgs_wind_min_value"></span></a></div>
        <div data-navig="showStationGraphTemp" class="wgs-data wgs-temp wgs_temp_color wgs_temp"><a class="temp"><span class="wgs_temp_value"></span> <span class="wgs_temp_units"></span></a></div>
        <div data-navig="showStationGraphTemp" class="wgs-data wgs-temp wgs_rh"><a class="temp">rh: <span class="wgs_rh_value"></span></a></div>
    </div>
    <div id="station-live" class="spot-live-div no-user-select hidden"></div>
    <div id="bottom-menu-spot" class="spot-page-include menu fixed bottom higher dark subsection hide">
        <a class="menu-button" onclick="WGA.showHome();"><svg class="icon light"><use xlink:href="#ico_accommodation"></use></svg><span class=""> Home </span></a>
        <a class="menu-button" onclick="WGA.goSearch();"><svg class="icon light"><use xlink:href="#ico_search"></use></svg><span class=""> Search</span></a>
        <a class="menu-button showfavo"><svg class="icon light"><use xlink:href="#ico_favourite"></use></svg><span class=""> Favourites</span></a>
        <a href="javascript:void(0)" class="menu-button" data-navig="showMapFcst" id="showmap"><svg class="icon light"><use xlink:href="#ico_map"></use></svg><span class="small-tablet-hide collapsed-show"> Maps</span></a>
        <a class="menu-button" onclick="WGA.options();"><svg class="icon light"><use xlink:href="#ico_options"></use></svg><span class="big-tablet-hide collapsed-show"> Options</span></a>    </div>   
</div>   
<footer class="">
    <div class="social footerpart">
        <a href="http://www.facebook.com/windguru.cz"><svg class="icon light"><use xlink:href="#ico_facebook"></use></svg><span class="small-tablet-hide"> Facebook</span></a>  
        <a href="http://twitter.com/windgurucz"><svg class="icon light"><use xlink:href="#ico_twitter"></use></svg><span class="small-tablet-hide"> Twitter</span></a>  
                <a href="mailto:support@windguru.cz"><svg class="icon light"><use xlink:href="#ico_email"></use></svg><span class="small-tablet-hide"> Email</span></a>
        <a class="modal-form" data-q="feedback" data-title="Feedback" data-ok="close" href="https://www.windguru.cz/forms/feedback.php"><svg class="icon light"><use xlink:href="#ico_new"></use></svg><span class=""> Feedback</span></a>  
        
    </div>
    <div class="links footerpart">
                <a href="https://www.windguru.cz/help.php" data-ajax="1" data-addclass="hcenter vcenter">Help</a> |
        <a href="https://www.windguru.cz/help.php?sec=faq" data-ajax="1" data-addclass="hcenter vcenter">FAQ</a> |
        <a href="https://www.windguru.cz/help.php?sec=terms" data-ajax="1" data-addclass="hcenter vcenter">Terms</a> |
        <a href="https://www.windguru.cz/help.php?sec=privacy" data-ajax="1" data-addclass="hcenter vcenter">Privacy Policy</a> |
        <a href="https://www.windguru.cz/advertising.php" data-ajax="1" data-addclass="hcenter vcenter">Advertising</a> |
        <a href="http://stations.windguru.cz/">Stations</a>
        <span class="w480-hide"> | <a href="http://old.windguru.cz/">Old Windguru</a></span>
    </div>
    <div class="links footerpart">
        © 2018 Windguru
    </div>
</footer>
<style type="text/css">
    /* loading */
    .lt-sk-three-bounce {
      margin: 2px auto;
      width: 100%;
      text-align: center; }
      .lt-sk-three-bounce .lt-sk-child {
        width: 5px;
        height: 5px;
        background-color: #333;
        border-radius: 100%;
        display: inline-block;
        -webkit-animation: lt-sk-three-bounce 1.4s ease-in-out 0s infinite both;
                animation: lt-sk-three-bounce 1.4s ease-in-out 0s infinite both; }
      .lt-sk-three-bounce .lt-sk-bounce1 {
        -webkit-animation-delay: -0.32s;
                animation-delay: -0.32s; }
      .lt-sk-three-bounce .lt-sk-bounce2 {
        -webkit-animation-delay: -0.16s;
                animation-delay: -0.16s; }

    @-webkit-keyframes lt-sk-three-bounce {
      0%, 80%, 100% {
        -webkit-transform: scale(0);
                transform: scale(0); }
      40% {
        -webkit-transform: scale(1);
                transform: scale(1); } }

    @keyframes lt-sk-three-bounce {
      0%, 80%, 100% {
        -webkit-transform: scale(0);
                transform: scale(0); }
      40% {
        -webkit-transform: scale(1);
                transform: scale(1); } }
  </style><div class="pika-single is-bound is-hidden" style="position: static; left: auto; top: auto;"><div class="pika-lendar"><div class="pika-title"><div class="pika-label">December<select class="pika-select pika-select-month" tabindex="-1"><option value="0">January</option><option value="1">February</option><option value="2">March</option><option value="3">April</option><option value="4">May</option><option value="5">June</option><option value="6">July</option><option value="7">August</option><option value="8">September</option><option value="9">October</option><option value="10">November</option><option value="11" selected="selected">December</option></select></div><div class="pika-label">2016<select class="pika-select pika-select-year" tabindex="-1"><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016" selected="selected">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option></select></div><button class="pika-prev" type="button">Previous Month</button><button class="pika-next" type="button">Next Month</button></div><table class="pika-table" cellspacing="0" cellpadding="0"><thead><tr><th scope="col"><abbr title="Sunday">Sun</abbr></th><th scope="col"><abbr title="Monday">Mon</abbr></th><th scope="col"><abbr title="Tuesday">Tue</abbr></th><th scope="col"><abbr title="Wednesday">Wed</abbr></th><th scope="col"><abbr title="Thursday">Thu</abbr></th><th scope="col"><abbr title="Friday">Fri</abbr></th><th scope="col"><abbr title="Saturday">Sat</abbr></th></tr></thead><tbody><tr><td class="is-empty"></td><td class="is-empty"></td><td class="is-empty"></td><td class="is-empty"></td><td data-day="1" class=""><button class="pika-button pika-day" type="button" data-pika-year="2016" data-pika-month="11" data-pika-day="1">1</button></td><td data-day="2" class=""><button class="pika-button pika-day" type="button" data-pika-year="2016" data-pika-month="11" data-pika-day="2">2</button></td><td data-day="3" class=""><button class="pika-button pika-day" type="button" data-pika-year="2016" data-pika-month="11" data-pika-day="3">3</button></td></tr><tr><td data-day="4" class=""><button class="pika-button pika-day" type="button" data-pika-year="2016" data-pika-month="11" data-pika-day="4">4</button></td><td data-day="5" class=""><button class="pika-button pika-day" type="button" data-pika-year="2016" data-pika-month="11" data-pika-day="5">5</button></td><td data-day="6" class=""><button class="pika-button pika-day" type="button" data-pika-year="2016" data-pika-month="11" data-pika-day="6">6</button></td><td data-day="7" class=""><button class="pika-button pika-day" type="button" data-pika-year="2016" data-pika-month="11" data-pika-day="7">7</button></td><td data-day="8" class=""><button class="pika-button pika-day" type="button" data-pika-year="2016" data-pika-month="11" data-pika-day="8">8</button></td><td data-day="9" class=""><button class="pika-button pika-day" type="button" data-pika-year="2016" data-pika-month="11" data-pika-day="9">9</button></td><td data-day="10" class=""><button class="pika-button pika-day" type="button" data-pika-year="2016" data-pika-month="11" data-pika-day="10">10</button></td></tr><tr><td data-day="11" class=""><button class="pika-button pika-day" type="button" data-pika-year="2016" data-pika-month="11" data-pika-day="11">11</button></td><td data-day="12" class=""><button class="pika-button pika-day" type="button" data-pika-year="2016" data-pika-month="11" data-pika-day="12">12</button></td><td data-day="13" class=""><button class="pika-button pika-day" type="button" data-pika-year="2016" data-pika-month="11" data-pika-day="13">13</button></td><td data-day="14" class=""><button class="pika-button pika-day" type="button" data-pika-year="2016" data-pika-month="11" data-pika-day="14">14</button></td><td data-day="15" class="is-selected"><button class="pika-button pika-day" type="button" data-pika-year="2016" data-pika-month="11" data-pika-day="15">15</button></td><td data-day="16" class=""><button class="pika-button pika-day" type="button" data-pika-year="2016" data-pika-month="11" data-pika-day="16">16</button></td><td data-day="17" class=""><button class="pika-button pika-day" type="button" data-pika-year="2016" data-pika-month="11" data-pika-day="17">17</button></td></tr><tr><td data-day="18" class=""><button class="pika-button pika-day" type="button" data-pika-year="2016" data-pika-month="11" data-pika-day="18">18</button></td><td data-day="19" class=""><button class="pika-button pika-day" type="button" data-pika-year="2016" data-pika-month="11" data-pika-day="19">19</button></td><td data-day="20" class=""><button class="pika-button pika-day" type="button" data-pika-year="2016" data-pika-month="11" data-pika-day="20">20</button></td><td data-day="21" class=""><button class="pika-button pika-day" type="button" data-pika-year="2016" data-pika-month="11" data-pika-day="21">21</button></td><td data-day="22" class=""><button class="pika-button pika-day" type="button" data-pika-year="2016" data-pika-month="11" data-pika-day="22">22</button></td><td data-day="23" class=""><button class="pika-button pika-day" type="button" data-pika-year="2016" data-pika-month="11" data-pika-day="23">23</button></td><td data-day="24" class=""><button class="pika-button pika-day" type="button" data-pika-year="2016" data-pika-month="11" data-pika-day="24">24</button></td></tr><tr><td data-day="25" class=""><button class="pika-button pika-day" type="button" data-pika-year="2016" data-pika-month="11" data-pika-day="25">25</button></td><td data-day="26" class=""><button class="pika-button pika-day" type="button" data-pika-year="2016" data-pika-month="11" data-pika-day="26">26</button></td><td data-day="27" class=""><button class="pika-button pika-day" type="button" data-pika-year="2016" data-pika-month="11" data-pika-day="27">27</button></td><td data-day="28" class=""><button class="pika-button pika-day" type="button" data-pika-year="2016" data-pika-month="11" data-pika-day="28">28</button></td><td data-day="29" class=""><button class="pika-button pika-day" type="button" data-pika-year="2016" data-pika-month="11" data-pika-day="29">29</button></td><td data-day="30" class=""><button class="pika-button pika-day" type="button" data-pika-year="2016" data-pika-month="11" data-pika-day="30">30</button></td><td data-day="31" class=""><button class="pika-button pika-day" type="button" data-pika-year="2016" data-pika-month="11" data-pika-day="31">31</button></td></tr></tbody></table></div></div><div class="pika-single is-bound is-hidden" style="position: static; left: auto; top: auto;"><div class="pika-lendar"><div class="pika-title"><div class="pika-label">December<select class="pika-select pika-select-month" tabindex="-1"><option value="0">January</option><option value="1">February</option><option value="2">March</option><option value="3">April</option><option value="4">May</option><option value="5">June</option><option value="6">July</option><option value="7">August</option><option value="8">September</option><option value="9">October</option><option value="10">November</option><option value="11" selected="selected">December</option></select></div><div class="pika-label">2018<select class="pika-select pika-select-year" tabindex="-1"><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018" selected="selected">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option></select></div><button class="pika-prev" type="button">Previous Month</button><button class="pika-next" type="button">Next Month</button></div><table class="pika-table" cellspacing="0" cellpadding="0"><thead><tr><th scope="col"><abbr title="Sunday">Sun</abbr></th><th scope="col"><abbr title="Monday">Mon</abbr></th><th scope="col"><abbr title="Tuesday">Tue</abbr></th><th scope="col"><abbr title="Wednesday">Wed</abbr></th><th scope="col"><abbr title="Thursday">Thu</abbr></th><th scope="col"><abbr title="Friday">Fri</abbr></th><th scope="col"><abbr title="Saturday">Sat</abbr></th></tr></thead><tbody><tr><td class="is-empty"></td><td class="is-empty"></td><td class="is-empty"></td><td class="is-empty"></td><td class="is-empty"></td><td class="is-empty"></td><td data-day="1" class=""><button class="pika-button pika-day" type="button" data-pika-year="2018" data-pika-month="11" data-pika-day="1">1</button></td></tr><tr><td data-day="2" class=""><button class="pika-button pika-day" type="button" data-pika-year="2018" data-pika-month="11" data-pika-day="2">2</button></td><td data-day="3" class=""><button class="pika-button pika-day" type="button" data-pika-year="2018" data-pika-month="11" data-pika-day="3">3</button></td><td data-day="4" class=""><button class="pika-button pika-day" type="button" data-pika-year="2018" data-pika-month="11" data-pika-day="4">4</button></td><td data-day="5" class=""><button class="pika-button pika-day" type="button" data-pika-year="2018" data-pika-month="11" data-pika-day="5">5</button></td><td data-day="6" class=""><button class="pika-button pika-day" type="button" data-pika-year="2018" data-pika-month="11" data-pika-day="6">6</button></td><td data-day="7" class=""><button class="pika-button pika-day" type="button" data-pika-year="2018" data-pika-month="11" data-pika-day="7">7</button></td><td data-day="8" class=""><button class="pika-button pika-day" type="button" data-pika-year="2018" data-pika-month="11" data-pika-day="8">8</button></td></tr><tr><td data-day="9" class=""><button class="pika-button pika-day" type="button" data-pika-year="2018" data-pika-month="11" data-pika-day="9">9</button></td><td data-day="10" class=""><button class="pika-button pika-day" type="button" data-pika-year="2018" data-pika-month="11" data-pika-day="10">10</button></td><td data-day="11" class=""><button class="pika-button pika-day" type="button" data-pika-year="2018" data-pika-month="11" data-pika-day="11">11</button></td><td data-day="12" class=""><button class="pika-button pika-day" type="button" data-pika-year="2018" data-pika-month="11" data-pika-day="12">12</button></td><td data-day="13" class=""><button class="pika-button pika-day" type="button" data-pika-year="2018" data-pika-month="11" data-pika-day="13">13</button></td><td data-day="14" class=""><button class="pika-button pika-day" type="button" data-pika-year="2018" data-pika-month="11" data-pika-day="14">14</button></td><td data-day="15" class="is-today is-selected"><button class="pika-button pika-day" type="button" data-pika-year="2018" data-pika-month="11" data-pika-day="15">15</button></td></tr><tr><td data-day="16" class=""><button class="pika-button pika-day" type="button" data-pika-year="2018" data-pika-month="11" data-pika-day="16">16</button></td><td data-day="17" class=""><button class="pika-button pika-day" type="button" data-pika-year="2018" data-pika-month="11" data-pika-day="17">17</button></td><td data-day="18" class=""><button class="pika-button pika-day" type="button" data-pika-year="2018" data-pika-month="11" data-pika-day="18">18</button></td><td data-day="19" class=""><button class="pika-button pika-day" type="button" data-pika-year="2018" data-pika-month="11" data-pika-day="19">19</button></td><td data-day="20" class=""><button class="pika-button pika-day" type="button" data-pika-year="2018" data-pika-month="11" data-pika-day="20">20</button></td><td data-day="21" class=""><button class="pika-button pika-day" type="button" data-pika-year="2018" data-pika-month="11" data-pika-day="21">21</button></td><td data-day="22" class=""><button class="pika-button pika-day" type="button" data-pika-year="2018" data-pika-month="11" data-pika-day="22">22</button></td></tr><tr><td data-day="23" class=""><button class="pika-button pika-day" type="button" data-pika-year="2018" data-pika-month="11" data-pika-day="23">23</button></td><td data-day="24" class=""><button class="pika-button pika-day" type="button" data-pika-year="2018" data-pika-month="11" data-pika-day="24">24</button></td><td data-day="25" class=""><button class="pika-button pika-day" type="button" data-pika-year="2018" data-pika-month="11" data-pika-day="25">25</button></td><td data-day="26" class=""><button class="pika-button pika-day" type="button" data-pika-year="2018" data-pika-month="11" data-pika-day="26">26</button></td><td data-day="27" class=""><button class="pika-button pika-day" type="button" data-pika-year="2018" data-pika-month="11" data-pika-day="27">27</button></td><td data-day="28" class=""><button class="pika-button pika-day" type="button" data-pika-year="2018" data-pika-month="11" data-pika-day="28">28</button></td><td data-day="29" class=""><button class="pika-button pika-day" type="button" data-pika-year="2018" data-pika-month="11" data-pika-day="29">29</button></td></tr><tr><td data-day="30" class=""><button class="pika-button pika-day" type="button" data-pika-year="2018" data-pika-month="11" data-pika-day="30">30</button></td><td data-day="31" class=""><button class="pika-button pika-day" type="button" data-pika-year="2018" data-pika-month="11" data-pika-day="31">31</button></td><td class="is-empty"></td><td class="is-empty"></td><td class="is-empty"></td><td class="is-empty"></td><td class="is-empty"></td></tr></tbody></table></div></div><div id="ascrail2000" class="nicescroll-rails nicescroll-rails-vr" style="width: 3px; z-index: auto; cursor: grab; position: absolute; top: 286px; left: 1905px; height: 24px; display: none; opacity: 1;"><div style="position: relative; top: 0px; float: right; width: 3px; height: 0px; background-color: rgb(216, 216, 216); border: 0px solid rgb(231, 231, 231); background-clip: padding-box; border-radius: 0px;" class="nicescroll-cursors"></div></div><div id="ascrail2000-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 3px; z-index: auto; top: 307px; left: 0px; position: absolute; display: none; width: 1905px; opacity: 1;"><div style="position: absolute; top: 0px; height: 3px; width: 0px; background-color: rgb(216, 216, 216); border: 0px solid rgb(231, 231, 231); background-clip: padding-box; border-radius: 0px; left: 0px;" class="nicescroll-cursors"></div></div><div class="pika-single is-hidden is-bound" style="position: static; left: auto; top: auto;"></div></body></html>