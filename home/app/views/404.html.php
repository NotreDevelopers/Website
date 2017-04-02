<!DOCTYPE html>
<html style="background:#C99700;">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" user-scalable="no" />

	<title>404 Not Found | <?php echo config('site.title') ?></title>

	<link href="<?php echo config('site.url')?>ndevs.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700&subset=latin,cyrillic-ext" rel="stylesheet" />
    	<link rel="stylesheet" href="https://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
</head>

<body>
    <div class="navb" style="background:#C99700;; margin-top:250px">
        <div class="row" style="width: 100%; padding:40px 0px 15px 30px" align="center">
                <p id="title" style="text-decoration:none"> 404 - This page doesn't exist!</p>
        </div>
        <div class="row" style="margin:0; padding: 8px; background-color:#0C2340" align="center">
                	<p id="links">Would like to try one of the pages below, instead?</p>
                        <ul>
                                <li><a id="links" href="<?php echo config('site.url')?>">Home</a></li>
                                <li><a id="links" href="<?php echo config('site.url')?>projects.html">Projects</a></li>
                                <li><a id="links" href="./resources.html">Resources</a></li>
                                <li><a id="links" href="./about.html">About</a></li>
                        </ul>
        </div>
    </div>

</body>
</html>
