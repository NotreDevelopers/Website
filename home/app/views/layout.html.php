<!DOCTYPE html>
<html>
<head>
	<title><?php echo isset($title) ? _h($title) : config('site.title') ?></title>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" user-scalable="no" />
	<meta name="description" content="<?php echo config('blog.description')?>" />
	<link rel="stylesheet" href="https://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
	<link href="<?php echo config('site.url')?>ndevs.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700&subset=latin,cyrillic-ext" rel="stylesheet" />

	<!--[if lt IE 9]>
		<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<body>
<div class="navb">
        <div class="row" style="margin: 0 0 28px 0" align="center">
                <h1 id="title">NotreDevelopers</h1>
                <img src="<?php echo config('site.url')?>images/NDevsLogo(body).png" alt="NDevs Logo" width="150px" height="150px"
                    style="position:absolute; margin-top:-90px; margin-left:317px"></img>
                <h1 id="links" style="font-size:20px; margin-top:13px; margin-bottom:0; color:#0C2340">Notre Dame's video game development club</h1>
        </div>
        <div class="row" style="margin:0; padding: 8px; background-color:#0C2340" align="center">
		<ul>
			<li><a id="links" href="<?php echo config('site.url')?>index.html">Home</a></li>
			<li><a id="links" href="<?php echo config('site.url')?>projects.html">Projects</a></li>
			<li><a id="links" href="<?php echo config('site.url')?>resources.html">Resources</a></li>
			<li><a id="links" href="<?php echo config('site.url')?>about.html">About</a></li>
		</ul>
        </div>
</div>

<?php echo content()?>

</body>
</html>
