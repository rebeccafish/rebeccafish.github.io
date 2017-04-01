<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="interaction designer / visual designer / front-end developer">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="shortcut icon" href="/favicons/favicon.ico">
<link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-touch-icon-152x152.png">
<link rel="icon" type="image/png" href="/favicons/favicon-196x196.png" sizes="196x196">
<link rel="icon" type="image/png" href="/favicons/favicon-160x160.png" sizes="160x160">
<link rel="icon" type="image/png" href="/favicons/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
<meta name="msapplication-TileColor" content="#3384de">
<meta name="msapplication-TileImage" content="/favicons/mstile-144x144.png">
<meta name="msapplication-config" content="/favicons/browserconfig.xml">

<!-- stylesheets -->
<link rel="stylesheet" href="/css/normalize.min.css">
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="/css/general.css">
<?php if ($page == "L&DStartup") { ?> <link rel="stylesheet" href="/css/LD_startup.css"> 
<?php } else if ($page == "oneview") {?> <link rel="stylesheet" href="/css/oneview.css">
<?php } else if ($page == "pioneer") {?> <link rel="stylesheet" href="/css/pioneer.css">
<?php } else if ($page == "financial") {?> <link rel="stylesheet" href="/css/financial_app.css">
<?php } else if ($page == "home") {?> <link rel="stylesheet" href="/css/home.css">
<?php } ?>

<!-- server-side retina images -->

<!--
<script>//(function(w){var dpr=((w.devicePixelRatio===undefined)?1:w.devicePixelRatio);if(!!w.navigator.standalone){var r=new XMLHttpRequest();r.open('GET','/files/retinaimages.php?devicePixelRatio='+dpr,false);r.send()}else{document.cookie='devicePixelRatio='+dpr+'; path=/'}})(window)</script>
<noscript><style id="devicePixelRatio" media="only screen and (-moz-min-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2/1), only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min-device-pixel-ratio: 2)">html{background-image:url("/files/retinaimages.php?devicePixelRatio=2")}</style></noscript> -->

<!-- scripts -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/jquery-ui-1.10.4.bounce.min.js" type="text/javascript"></script>

<script type="text/javascript" src="/js/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="/js/selectivizr-min.js"></script>
<script type="text/javascript" src="/js/hideaddressbar.js"></script>
<?php if ($page_type == "portfolio_item") { ?> <script type="text/javascript" src="/js/portfolio_item.js"></script>
<?php } ?>
<?php if ($page_type == "home") { ?> <script type="text/javascript" src="/js/home.js"></script>
<?php } ?>


<!-- fonts -->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,600' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet">

<?php include 'functions.php'; ?>

<title><?php echo get_title($page) //located in functions.php ?></title>

</head>

<body class="<?php 
	if ($page == "L&DStartup") { echo "LD_startup"; }
	else if ($page == "oneview") { echo "oneview"; }
	else if ($page == "pioneer") { echo "pioneer"; }
	else if ($page == "financial") { echo "financial"; }
	else if ($page == "home") { echo "home"; }
?>">
	<?php include_once("analyticstracking.php") //get google analytics ?>
	
	<!--[if lt IE 9]>
	    <p id="chromeframe">You are using an <strong>outdated</strong> browser. Please <a target="_blank" href="http://whatbrowser.org/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	
	
	
	
	
	
	